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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Opgaver',
  'LBL_TASK' => 'Opgaver: ',
  'LBL_MODULE_TITLE' => ' Opgaver: Hjem',
  'LBL_SEARCH_FORM_TITLE' => ' Opgave søgning',
  'LBL_LIST_FORM_TITLE' => ' Opgaveliste',
  'LBL_NEW_FORM_TITLE' => ' Opret opgave',
  'LBL_NEW_FORM_SUBJECT' => 'Emne:',
  'LBL_NEW_FORM_DUE_DATE' => 'Slutdato:',
  'LBL_NEW_FORM_DUE_TIME' => 'Sluttid:',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_LIST_CLOSE' => 'Luk',
  'LBL_LIST_SUBJECT' => 'Emne',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_PRIORITY' => 'Prioritet',
  'LBL_LIST_RELATED_TO' => 'Relateret til',
  'LBL_LIST_DUE_DATE' => 'Slutdato',
  'LBL_LIST_DUE_TIME' => 'Sluttid',
  'LBL_SUBJECT' => 'Emne:',
  'LBL_STATUS' => 'Status',
  'LBL_DUE_DATE' => 'Slutdato:',
  'LBL_DUE_TIME' => 'Sluttid:',
  'LBL_PRIORITY' => 'Prioritet:',
  'LBL_COLON' => ':',
  'LBL_DUE_DATE_AND_TIME' => 'Slutdato & tid:',
  'LBL_START_DATE_AND_TIME' => 'Startdato & tid:',
  'LBL_START_DATE' => 'Startdato:',
  'LBL_LIST_START_DATE' => 'Startdato',
  'LBL_START_TIME' => 'Starttid:',
  'LBL_LIST_START_TIME' => 'Starttid',
  'DATE_FORMAT' => '(dd-mm-yyyy)',
  'LBL_NONE' => 'Ingen',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_EMAIL' => 'Email:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse Information',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_NAME' => 'Navn:',
  'LBL_CONTACT_NAME' => 'Kontaktnavn ',
  'LBL_LIST_COMPLETE' => 'Færdig:',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_DATE_DUE_FLAG' => 'Ingen slutdato',
  'LBL_DATE_START_FLAG' => 'Ingen startdato',
  'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette kontakten.',
  'ERR_INVALID_HOUR' => 'Indtast en tidspunkt mellem 0 og 24',
  'LBL_DEFAULT_PRIORITY' => 'Medium',
  'LBL_LIST_MY_TASKS' => 'Mine åbne opgaver',
  'LNK_NEW_TASK' => 'Opret opgave',
  'LNK_TASK_LIST' => 'Opgaver',
  'LNK_IMPORT_TASKS' => 'Importér opgaver',
  'LBL_CONTACT_FIRST_NAME'=>'Kontakt fornavn',
  'LBL_CONTACT_LAST_NAME'=>'Kontakt efternavn',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
  'LBL_ASSIGNED_TO_NAME'=>'Tildelt til:',
  'LBL_LIST_DATE_MODIFIED' => 'Ændret dato',
  'LBL_CONTACT_ID' => 'Kontakt ID:',
  'LBL_PARENT_ID' => 'Moder ID:',
  'LBL_CONTACT_PHONE' => 'Kontaktens telefon:',
  'LBL_PARENT_NAME' => 'Overordnet type:',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LBL_TASK_INFORMATION' => 'Opgave oversigt',
  'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Noter',
  //For export labels
  'LBL_DATE_DUE' => 'Slutdato',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af ID',
  'LBL_EXPORT_CREATED_BY' => 'Oprettet af ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Related To Module',
  'LBL_EXPORT_PARENT_ID' => 'Related To ID',
  'LBL_RELATED_TO' => 'Related to:',
);


?>
