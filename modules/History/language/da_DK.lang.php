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
  'LBL_MODULE_NAME' => 'Historik',
  'LBL_MODULE_TITLE' => 'Historik: Startside',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter historik',
  'LBL_LIST_FORM_TITLE' => 'Historik',
  'LBL_LIST_SUBJECT' => 'Emne',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_RELATED_TO' => 'Relateret til',
  'LBL_LIST_DATE' => 'Dato',
  'LBL_LIST_TIME' => 'Starttid',
  'LBL_LIST_CLOSE' => 'Luk',
  'LBL_SUBJECT' => 'Emne:',
  'LBL_STATUS' => 'Status',
  'LBL_LOCATION' => 'Lokation:',
  'LBL_DATE_TIME' => 'Startdato & tid:',
  'LBL_DATE' => 'Startdato:',
  'LBL_TIME' => 'Starttid:',
  'LBL_DURATION' => 'Varighed:',
  'LBL_HOURS_MINS' => '(timer/minutter)',
  'LBL_CONTACT_NAME' => 'Kontaktnavn: ',
  'LBL_MEETING' => 'Møde:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse Information',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planlagt',
  'LNK_NEW_CALL' => 'Planlæg opkald',
  'LNK_NEW_MEETING' => 'Planlæg møde',
  'LNK_NEW_TASK' => 'Opret opgave',
  'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
  'LNK_NEW_EMAIL' => 'Arkiver email',
  'LNK_CALL_LIST' => 'Opkald',
  'LNK_MEETING_LIST' => 'Møder',
  'LNK_TASK_LIST' => 'Opgaver',
  'LNK_NOTE_LIST' => 'Noter',
  'LNK_EMAIL_LIST' => 'Emails',
  'ERR_DELETE_RECORD' => 'En række skal vælges før du kan slette.',
  'NTC_REMOVE_INVITEE' => 'Er du sikker på at du ønsker at slette denne deltager fra mødet?',
  'LBL_INVITEE' => 'Deltagere',
  'LBL_LIST_DIRECTION' => 'Retning',
  'LBL_DIRECTION' => 'Retning',
  'LNK_NEW_APPOINTMENT' => 'Ny aftale',
  'LNK_VIEW_CALENDAR' => 'I dag',
  'LBL_OPEN_ACTIVITIES' => 'Åbne aktiviteter',
  'LBL_HISTORY' => 'Historik',
  'LBL_UPCOMING' => 'Mine kommende aftaler',
  'LBL_TODAY' => 'gennem ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Opret opgave',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Opret opgave',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Planlæg møde',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Planlæg møde',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Planlæg opkald',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Planlæg opkald',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Opret note eller vedhæft',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Opret note eller vedhæft',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver email',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Slutdato',
  'LBL_LIST_LAST_MODIFIED' => 'Sidst ændret',
  'NTC_NONE_SCHEDULED' => 'Ingen planlagt.',
  'appointment_filter_dom' => array(
  	 'today' => 'i dag'
  	,'tomorrow' => 'i morgen'
  	,'this Saturday' => 'denne uge'
  	,'next Saturday' => 'næste uge'
  	,'last this_month' => 'denne måned'
  	,'last next_month' => 'næste måned'
  ),
  'LNK_IMPORT_NOTES'=>'Importer noter',
  'NTC_NONE'=>'Ingen',
	'LBL_ACCEPT_THIS'=>'Acceptér?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Historik',
);

?>