<?php
/**
 *
 * @package Advanced OpenPortal
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */
require_once 'util.php';
class CaseUpdatesHook {
    private $slug_size = 50;

    private function getCaseCounts(){
        global $db;
        $counts = array();
        $r = $db->query("SELECT users.id,count(cases.id) AS c FROM users LEFT JOIN cases ON (cases.assigned_user_id = users.id AND cases.status != 'Closed' AND cases.status != 'Duplicate' AND cases.status != 'Rejected') WHERE NOT users.deleted GROUP BY users.id");
        while($a = $db->fetchByAssoc($r)){
            $counts[$a['id']] = $a['c'];
        }
        return $counts;
    }

    private function getAssignToUser(){
        require_once 'modules/AOP_Case_Updates/AOPAssignManager.php';
        $assignManager = new AOPAssignManager();
        return $assignManager->getNextAssignedUser();
    }

    private function arrangeFilesArray(){
        $count = 0;
        foreach($_FILES['case_update_file'] as $key => $vals){
            foreach($vals as $index => $val){
                if(!array_key_exists('case_update_file'.$index,$_FILES)){
                    $_FILES['case_update_file'.$index] = array();
                    $count++;
                }
                $_FILES['case_update_file'.$index][$key] = $val;
            }
        }
        return $count;
    }


    public function saveUpdate($bean, $event, $arguments){
        if(!isAOPEnabled()){
            return;
        }
        global $current_user, $app_list_strings;
        if(empty($bean->fetched_row) || !$bean->id){

            if(!$bean->state){
                $bean->state = $app_list_strings['case_state_default_key'];
            }
            if($bean->status == "New"){
                $bean->status = $app_list_strings['case_status_default_key'];
            }

            //New case - assign
            if(!$bean->assigned_user_id){
                $userId = $this->getAssignToUser();
                $bean->assigned_user_id = $userId;
                $bean->notify_inworkflow = true;
            }
            return;
        }
        if($_REQUEST['module'] == 'Import'){
            return;
        }
        //Grab the update field and create a new update with it.
        $text = $bean->update_text;
        if(!$text && empty($_FILES['case_update_file'])){
            //No text or files, so nothing really to save.
            return;
        }
        $bean->update_text = "";
        $case_update = new AOP_Case_Updates();
        $case_update->name = $text;
        $case_update->internal = $bean->internal;
        $bean->internal = false;
        $case_update->assigned_user_id = $current_user->id;
        if(strlen($text) > $this->slug_size){
            $case_update->name = substr($text,0,$this->slug_size)."...";
        }
        $case_update->description = nl2br($text);
        $case_update->case_id = $bean->id;
        $case_update->save();

        $fileCount = $this->arrangeFilesArray();

        for($x = 0; $x < $fileCount; $x++){
            if($_FILES['case_update_file']['error'][$x] == UPLOAD_ERR_NO_FILE){
                continue;
            }
            $uploadFile = new UploadFile('case_update_file'.$x);
            if(!$uploadFile->confirm_upload()){
                continue;
            }
            $note = $this->newNote($case_update->id);
            $note->name = $uploadFile->get_stored_file_name();
            $note->file_mime_type = $uploadFile->mime_type;
            $note->filename = $uploadFile->get_stored_file_name();
            $note->save();
            $uploadFile->final_move($note->id);
        }
        $postPrefix = 'case_update_id_';
        foreach($_POST as $key => $val){
            if(strpos($key, $postPrefix) !== 0 || empty($val)){
                continue;
            }
            //Val is selected doc id
            $doc = BeanFactory::getBean('Documents',$val);
            if(!$doc){
                continue;
            }
            $note = $this->newNote($case_update->id);
            $note->name = $doc->document_name;
            $note->file_mime_type = $doc->last_rev_mime_type;
            $note->filename = $doc->filename;
            $note->save();
            $srcFile = "upload://{$doc->document_revision_id}";
            $destFile = "upload://{$note->id}";
            copy($srcFile,$destFile);
        }
    }

    private function newNote($caseUpdateId){
        $note = BeanFactory::newBean('Notes');
        $note->parent_type = 'AOP_Case_Updates';
        $note->parent_id = $caseUpdateId;
        $note->not_use_rel_in_req = true;
        return $note;
    }

    private function linkAccountAndCase($case_id,$account_id){
        if(!$account_id || !$case_id){
            return;
        }
        $case = BeanFactory::getBean("Cases",$case_id);
        if(!$case->account_id){
            $case->account_id = $account_id;
            $case->save();
        }
    }

    public function assignAccount($bean, $event, $arguments){
        if($arguments['module'] != "Cases" || $arguments['related_module'] != "Contacts"){
            return;
        }
        if(!isAOPEnabled()){
            return;
        }
        $contact = BeanFactory::getBean("Contacts",$arguments['related_id']);
        $contact->load_relationship("accounts");
        if(!$contact || !$contact->account_id){
            return;
        }
        $this->linkAccountAndCase($bean->id,$contact->account_id);
    }

    /**
     * Called when saving a new email and adds the case update to the case.
     * @param $bean
     * @param $event
     * @param $arguments
     */
    public function saveEmailUpdate($bean, $event, $arguments){
        global $mod_strings;
        if($bean->intent != "createcase" || $bean->parent_type != "Cases"){
            $GLOBALS['log']->warn("CaseUpdatesHook: saveEmailUpdate: Not a create case or wrong parent type");
            return;
        }
        if(!isAOPEnabled()){
            return;
        }
        if(!$bean->parent_id ){
            $GLOBALS['log']->warn("CaseUpdatesHook: saveEmailUpdate No parent id");
            return;
        }

        if($bean->cases){
            $GLOBALS['log']->warn("CaseUpdatesHook: saveEmailUpdate cases already set");
            return;
        }

        if($bean->fetched_row['parent_id']){
            //Will have been processed already
            return;
        }

        $contact = BeanFactory::getBean("Contact");
        $ea = new SugarEmailAddress();
        $beans = $ea->getBeansByEmailAddress($bean->from_addr);
        $contact_id = null;
        foreach($beans as $emailBean){
            if($emailBean->module_name == "Contacts" && !empty($emailBean->id)){
                $contact_id = $emailBean->id;
                $this->linkAccountAndCase($bean->parent_id,$emailBean->account_id);
            }
        }
        $case_update = new AOP_Case_Updates();
        $case_update->name = $bean->name;
        $case_update->contact_id = $contact_id;
        $updateText = $this->unquoteEmail($bean->description_html ? $bean->description_html : $bean->description);
        $case_update->description = $updateText;
        $case_update->internal = false;
        $case_update->case_id = $bean->parent_id;
        $case_update->save();
        $notes = $bean->get_linked_beans('notes','Notes');
        foreach($notes as $note){
            //Link notes to case update also
            $newNote = BeanFactory::newBean('Notes');
            $newNote->name = $note->name;
            $newNote->file_mime_type = $note->file_mime_type;
            $newNote->filename = $note->filename;
            $newNote->parent_type = 'AOP_Case_Updates';
            $newNote->parent_id = $case_update->id;
            $newNote->save();
            $srcFile = "upload://{$note->id}";
            $destFile = "upload://{$newNote->id}";
            copy($srcFile,$destFile);
        }

        $this->updateCaseStatus($case_update->case_id);
    }

    /**
     * Changes the status of the supplied case based on the case_status_changes config values.
     * @param $caseId
     */
    private function updateCaseStatus($caseId){
        global $sugar_config;
        if(empty($caseId)){
            return;
        }
        if(empty($sugar_config['aop']['case_status_changes'])){
            return;
        }
        $statusMap = json_decode($sugar_config['aop']['case_status_changes'],1);
        if(empty($statusMap)){
            return;
        }
        $case = BeanFactory::getBean('Cases',$caseId);
        if(empty($case)){
            return;
        }
        if(array_key_exists($case->status,$statusMap)){
            $case->status = $statusMap[$case->status];
            $statusBits = explode('_',$case->status);
            $case->state = array_shift($statusBits);
            $case->save();
        }

    }

    private function unquoteEmail($text){
        global $app_strings;
        $text = html_entity_decode($text);
        $text = preg_replace('/(\r\n|\r|\n)/s',"\n",$text);
        $pos = strpos($text,$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER']);
        if($pos !== false){
            $text = substr($text,0,$pos);
        }
        return $text;
    }

    public function closureNotifyPrep($bean, $event, $arguments){
        if(isset($_REQUEST['module']) && $_REQUEST['module'] == 'Import'){
            return;
        }
        if($bean->state!= "Closed" || $bean->fetched_row['state'] == "Closed"){
            $bean->send_closure_email = false;
        }else{
            $bean->send_closure_email = true;
        }

    }

    public function closureNotify($bean, $event, $arguments){
        if(isset($_REQUEST['module']) && $_REQUEST['module'] == 'Import'){
            return;
        }
        if($bean->state != "Closed" || !$bean->send_closure_email){
            return;
        }
        $this->sendClosureEmail($bean, $arguments['related_bean']);
    }

    private function sendClosureEmail(aCase $bean){
        if(!isAOPEnabled()){
            return;
        }
        $GLOBALS['log']->warn("CaseUpdatesHook: sendClosureEmail called");
        require_once("include/SugarPHPMailer.php");
        $mailer=new SugarPHPMailer();
        $admin = new Administration();
        $admin->retrieveSettings();

        $mailer->prepForOutbound();
        $mailer->setMailerForSystem();

        $email_template = new EmailTemplate();
        $aop_config = $this->getAOPConfig();
        $email_template = $email_template->retrieve($aop_config['case_closure_email_template_id']);

        if(!$email_template){
            $GLOBALS['log']->warn("CaseUpdatesHook: sendClosureEmail template is empty");
            return false;
        }

        $contact = $bean->get_linked_beans("contacts","Contact");
        if($contact){
            $contact = $contact[0];
        }else{
            return false;
        }

        $emailSettings = getPortalEmailSettings();

        $text = $this->populateTemplate($email_template, $bean, $contact);
        $mailer->Subject = $text['subject'];
        $mailer->Body = $text['body'];
        $mailer->IsHTML(true);
        $mailer->AltBody = $text['body_alt'];
        $mailer->From     = $emailSettings['from_address'];
        $mailer->FromName = $emailSettings['from_name'];

        $email = $contact->emailAddress->getPrimaryAddress($contact);

        $mailer->AddAddress($email);
        if (!$mailer->Send()){
            $GLOBALS['log']->info("CaseUpdatesHook: Could not send email:  " . $mailer->ErrorInfo);
            return false;
        }else{
            $this->logEmail($email, $mailer, $bean->id);
            return true;
        }
    }

    /**
     * Called by the after_relationship_save logic hook in cases. Checks to ensure this is a
     * contact being added and sends an email to that contact.
     * @param $bean
     * @param $event
     * @param $arguments
     */
    public function creationNotify($bean, $event, $arguments){
        if(isset($_REQUEST['module']) && $_REQUEST['module'] == 'Import'){
            return;
        }
        if($arguments['module'] != "Cases" || $arguments['related_module'] != "Contacts"){
            return;
        }
        if(!$bean->fetched_row){
            return;
        }
        if(!empty($arguments['related_bean'])){
            $contact = $arguments['related_bean'];
        }else{
            $contact = BeanFactory::getBean("Contacts",$arguments['related_id']);
        }
        $this->sendCreationEmail($bean, $contact);
    }

    private function populateTemplate(EmailTemplate $template, aCase $bean, $contact){
        global $app_strings, $sugar_config;
        //Order of beans seems to matter here so we place contact first.
        $beans = array(
            "Contacts" => $contact->id,
            "Cases" => $bean->id,
            "Users" => $bean->assigned_user_id
        );
        $ret = array();
        $ret['subject'] = from_html(aop_parse_template($template->subject,$beans));
        $ret['body'] = from_html($app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'].aop_parse_template(str_replace("\$sugarurl",$sugar_config['site_url'],$template->body_html),$beans));
        $ret['body_alt'] = strip_tags(from_html(aop_parse_template(str_replace("\$sugarurl",$sugar_config['site_url'],$template->body),$beans)));
        return $ret;
    }

    private function getAOPConfig(){
        global $sugar_config;
        if(!array_key_exists("aop",$sugar_config)){
            return array();
        }
        return $sugar_config['aop'];
    }

    private function sendCreationEmail(aCase $bean, $contact){
        if(!isAOPEnabled()){
            return;
        }
        require_once("include/SugarPHPMailer.php");
        $mailer=new SugarPHPMailer();
        $admin = new Administration();
        $admin->retrieveSettings();

        $mailer->prepForOutbound();
        $mailer->setMailerForSystem();

        $email_template = new EmailTemplate();

        $aop_config = $this->getAOPConfig();
        $email_template = $email_template->retrieve($aop_config['case_creation_email_template_id']);
        if(!$aop_config['case_creation_email_template_id'] || !$email_template){
            $GLOBALS['log']->warn("CaseUpdatesHook: sendCreationEmail template is empty");
            return false;
        }

        $emailSettings = getPortalEmailSettings();
        $text = $this->populateTemplate($email_template, $bean, $contact);
        $mailer->Subject = $text['subject'];
        $mailer->Body = $text['body'];
        $mailer->IsHTML(true);
        $mailer->AltBody = $text['body_alt'];
        $mailer->From     = $emailSettings['from_address'];
        $mailer->FromName = $emailSettings['from_name'];
        $email = $contact->emailAddress->getPrimaryAddress($contact);
        if(empty($email) && !empty($contact->email1)){
            $email = $contact->email1;
        }
        $mailer->AddAddress($email);
        if (!$mailer->Send()){
            $GLOBALS['log']->info("CaseUpdatesHook: Could not send email:  " . $mailer->ErrorInfo);
            return false;
        }else{
            $this->logEmail($email, $mailer, $bean->id);
            return true;
        }
    }

    private function logEmail($email, $mailer, $caseId = null){
        require_once('modules/Emails/Email.php');
        $emailObj = new Email();
        $emailObj->to_addrs = $email;
        $emailObj->type= 'out';
        $emailObj->deleted = '0';
        $emailObj->name = $mailer->Subject;
        $emailObj->description = $mailer->AltBody;
        $emailObj->description_html = $mailer->Body;
        $emailObj->from_addr = $mailer->From;
        if ($caseId) {
            $emailObj->parent_type = "Cases";
            $emailObj->parent_id = $caseId;
        }
        $emailObj->date_sent = TimeDate::getInstance()->nowDb();
        $emailObj->modified_user_id = '1';
        $emailObj->created_by = '1';
        $emailObj->status = 'sent';
        $emailObj->save();
    }

    public function filterHTML($bean, $event, $arguments){
        $bean->description = SugarCleaner::cleanHtml($bean->description,true);
    }

    public function sendCaseUpdate(AOP_Case_Updates $caseUpdate){
        global $current_user, $sugar_config;
        $email_template = new EmailTemplate();
        if($_REQUEST['module'] == 'Import'){
            //Don't send email on import
            return;
        }
        if(!isAOPEnabled()){
            return;
        }
        if($caseUpdate->internal){
            return;
        }
        $signature = array();
        $addDelimiter = true;
        $aop_config = $sugar_config['aop'];
        if($caseUpdate->assigned_user_id){
            if($aop_config['contact_email_template_id']){
                $email_template = $email_template->retrieve($aop_config['contact_email_template_id']);
                $signature = $current_user->getDefaultSignature();
            }
            if($email_template) {
                foreach ($caseUpdate->getContacts() as $contact) {
                    $GLOBALS['log']->info("AOPCaseUpdates: Calling send email");
                    $emails = array();
                    $emails[] = $contact->emailAddress->getPrimaryAddress($contact);
                    $res = $caseUpdate->sendEmail($emails, $email_template, $signature, $caseUpdate->case_id, $addDelimiter, $contact->id);
                }
            }
        }else{
            $emails = $caseUpdate->getEmailForUser();
            if($aop_config['user_email_template_id']){
                $email_template = $email_template->retrieve($aop_config['user_email_template_id']);
            }
            $addDelimiter = false;
            if($emails && $email_template){
                $GLOBALS['log']->info("AOPCaseUpdates: Calling send email");
                $res = $caseUpdate->sendEmail($emails, $email_template, $signature, $caseUpdate->case_id, $addDelimiter,$caseUpdate->contact_id);
            }
        }
    }
}
