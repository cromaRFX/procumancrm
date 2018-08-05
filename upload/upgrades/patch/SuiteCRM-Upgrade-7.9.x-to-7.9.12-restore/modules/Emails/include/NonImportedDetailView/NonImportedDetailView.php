<?php

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/DetailView/DetailView2.php');

class NonImportedDetailView extends DetailView2
{

    public function setup(
        $module,
        $focus  = null,
        $metadataFile = null,
        $tpl = 'include/DetailView/DetailView.tpl',
        $createFocus = true
    )
    {
        global $sugar_config;

        $this->th = new TemplateHandler();
        $this->th->ss = $this->ss;

        //Check if inline editing is enabled for detail view.
        if(!isset($sugar_config['enable_line_editing_detail']) || $sugar_config['enable_line_editing_detail']){
            $this->ss->assign('inline_edit', true);
        }
        $this->focus = $focus;
        $this->tpl = $tpl;
        $this->module = $module;
        $this->metadataFile = $metadataFile;
        if(isset($GLOBALS['sugar_config']['disable_vcr'])) {
            $this->showVCRControl = !$GLOBALS['sugar_config']['disable_vcr'];
        }
        if(!empty($this->metadataFile) && file_exists($this->metadataFile)){
            require($this->metadataFile);
        } else {
            //If file doesn't exist we create a best guess
            if(!file_exists("modules/$this->module/metadata/nonimporteddetailviewdefs.php") &&
                file_exists("modules/$this->module/DetailView.html")) {
                global $dictionary;
                $htmlFile = "modules/" . $this->module . "/DetailView.html";
                $parser = new DetailViewMetaParser();
                if(!file_exists('modules/'.$this->module.'/metadata')) {
                    sugar_mkdir('modules/'.$this->module.'/metadata');
                }
                $fp = sugar_fopen('modules/'.$this->module.'/metadata/nonimporteddetailviewdefs.php', 'w');
                fwrite($fp, $parser->parse($htmlFile, $dictionary[$focus->object_name]['fields'], $this->module));
                fclose($fp);
            }

            //Flag an error... we couldn't create the best guess meta-data file
            if(!file_exists("modules/$this->module/metadata/nonimporteddetailviewdefs.php")) {
                global $app_strings;
                $error = str_replace("[file]", "modules/$this->module/metadata/nonimporteddetailviewdefs.php", $app_strings['ERR_CANNOT_CREATE_METADATA_FILE']);
                $GLOBALS['log']->fatal($error);
                echo $error;
                die();
            }
            require("modules/$this->module/metadata/nonimporteddetailviewdefs.php");
        }

        $this->defs = $viewdefs[$this->module][$this->view];
    }

    public function populateBean()
    {
        if (!empty($_REQUEST['uid']) && !empty($_REQUEST['inbound_email_record'])&& !empty($_REQUEST['msgno'])) {
            global $beanList;

            $inboundEmail = BeanFactory::getBean('InboundEmail', $_REQUEST['inbound_email_record']);
            $email = $inboundEmail->returnNonImportedEmail($_REQUEST['msgno'], $_REQUEST['uid']);
            $this->focus = $email;
        } else {
            $GLOBALS['log']->debug("Unable to populate bean, no record parameter found");
        }
    }
}
