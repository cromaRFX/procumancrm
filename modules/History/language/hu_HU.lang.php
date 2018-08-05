<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/

 


$mod_strings = array (
  'LBL_MODULE_NAME' => 'Előzmények',
  'LBL_MODULE_TITLE' => 'Előzmény: Főoldal',
  'LBL_SEARCH_FORM_TITLE' => 'Keresés az előzményekben',
  'LBL_LIST_FORM_TITLE' => 'Előzmények',
  'LBL_LIST_SUBJECT' => 'Tárgy',
  'LBL_LIST_CONTACT' => 'Kapcsolat',
  'LBL_LIST_RELATED_TO' => 'Összefüggésben',
  'LBL_LIST_DATE' => 'Dátum',
  'LBL_LIST_TIME' => 'Kezdés idő:',
  'LBL_LIST_CLOSE' => 'Zárás',
  'LBL_SUBJECT' => 'Tárgy:',
  'LBL_STATUS' => 'Állapot:',
  'LBL_LOCATION' => 'Helyszín:',
  'LBL_DATE_TIME' => 'Kezdés időpont:',
  'LBL_DATE' => 'Kezdés dátum:',
  'LBL_TIME' => 'Kezdés idő:',
  'LBL_DURATION' => 'Időtartam:',
  'LBL_HOURS_MINS' => '(órák/percek)',
  'LBL_CONTACT_NAME' => 'Kapcsolat neve:',
  'LBL_MEETING' => 'Megbeszélés:',
  'LBL_DESCRIPTION_INFORMATION' => 'Leírás',
  'LBL_DESCRIPTION' => 'Leírás:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Tervezett',
  'LNK_NEW_CALL' => 'Hívások ütemezése',
  'LNK_NEW_MEETING' => 'Találkozók ütemezése',
  'LNK_NEW_TASK' => 'Feladat lérehozása',
  'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány lérehozása',
  'LNK_NEW_EMAIL' => 'Email Archiválása',
  'LNK_CALL_LIST' => 'Hívások',
  'LNK_MEETING_LIST' => 'Találkozók',
  'LNK_TASK_LIST' => 'Feladatok',
  'LNK_NOTE_LIST' => 'Feljegyzések:',
  'LNK_EMAIL_LIST' => 'Emailek',
  'ERR_DELETE_RECORD' => 'A bejegyzés törléséhez meg kell adni egy rekordsorszámot.',
  'NTC_REMOVE_INVITEE' => 'Biztos benne, hogy törli ezt a meghívottat a találkozóból?',
  'LBL_INVITEE' => 'Meghívottak',
  'LBL_LIST_DIRECTION' => 'Iránya',
  'LBL_DIRECTION' => 'Iránya',
  'LNK_NEW_APPOINTMENT' => 'Új megbeszélés',
  'LNK_VIEW_CALENDAR' => 'Ma',
  'LBL_OPEN_ACTIVITIES' => 'Nyitott tevékenységek',
  'LBL_HISTORY' => 'Előzmények',
  'LBL_UPCOMING' => 'Következő megbeszélésem',
  'LBL_TODAY' => 'keresztül ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Feladat lérehozása',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Feladat lérehozása',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Találkozók ütemezése',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Találkozók ütemezése',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Hívások ütemezése',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Hívások ütemezése',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Feljegyzés vagy csatolmány lérehozása',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Feljegyzés vagy csatolmány lérehozása',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email Archiválása',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'E',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email Archiválása',
  'LBL_LIST_STATUS' => 'Állapot',
  'LBL_LIST_DUE_DATE' => 'Határidő dátum',
  'LBL_LIST_LAST_MODIFIED' => 'Utoljára módosítva',
  'NTC_NONE_SCHEDULED' => 'Nincs ütemezés.',
  'appointment_filter_dom' => array(
  	 'today' => 'ma'
  	,'tomorrow' => 'holnap'
  	,'this Saturday' => 'ez a hét'
  	,'next Saturday' => 'jövő héten'
  	,'last this_month' => 'ez a hónap'
  	,'last next_month' => 'jövő hónapban'
  ),
  'LNK_IMPORT_NOTES'=>'Feljegyzések importálása',
  'NTC_NONE'=>'Nincs',
	'LBL_ACCEPT_THIS'=>'Elfogadja?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Előzmények',
);

?>