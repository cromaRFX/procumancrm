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
  'LBL_MODULE_NAME' => 'Geschiedenis',
  'LBL_MODULE_TITLE' => 'Geschiedenis: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Geschiedenis doorzoeken',
  'LBL_LIST_FORM_TITLE' => 'Geschiedenis',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_CONTACT' => 'Contactpersoon',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_DATE' => 'Datum',
  'LBL_LIST_TIME' => 'Aanvangstijd',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_STATUS' => 'Status:',
  'LBL_LOCATION' => 'Lokatie:',
  'LBL_DATE_TIME' => 'Begindatum & tijd:',
  'LBL_DATE' => 'Begindatum:',
  'LBL_TIME' => 'Aanvangstijd:',
  'LBL_DURATION' => 'Gespreksduur:',
  'LBL_HOURS_MINS' => '(uren/minuten)',
  'LBL_CONTACT_NAME' => 'Naam contactpersoon: ',
  'LBL_MEETING' => 'Afspraak:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
  'LBL_DESCRIPTION' => 'Omschrijving:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planned',
  'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
  'LNK_NEW_MEETING' => 'Nieuwe afspraak',
  'LNK_NEW_TASK' => 'Nieuwe taak',
  'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
  'LNK_NEW_EMAIL' => 'E-mail archiveren',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_MEETING_LIST' => 'Afspraken',
  'LNK_TASK_LIST' => 'Taken',
  'LNK_NOTE_LIST' => 'Notities',
  'LNK_EMAIL_LIST' => 'E-mails',
  'ERR_DELETE_RECORD' => 'Er moet een record nummer opgegeven zijn om een gebruiker te kunnen verwijderen.',
  'NTC_REMOVE_INVITEE' => 'Wilt u zeker dat u deze genodigde voor deze afspraak wilt verwijderen?',
  'LBL_INVITEE' => 'Genodigden',
  'LBL_LIST_DIRECTION' => 'Richting',
  'LBL_DIRECTION' => 'Richting',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
  'LNK_VIEW_CALENDAR' => 'Vandaag',
  'LBL_OPEN_ACTIVITIES' => 'Openstaande activiteiten',
  'LBL_HISTORY' => 'Geschiedenis',
  'LBL_UPCOMING' => 'Mijn toekomstige activiteiten',
  'LBL_TODAY' => 'tot ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Nieuwe taak',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Nieuwe taak',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Nieuwe afspraak',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Nieuwe afspraak',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Nieuw telefoongesprek',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Nieuw telefoongesprek',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nieuwe notitie of bijlage',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nieuwe notitie of bijlage',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-mail archiveren',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-mail archiveren',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Vervaldatum',
  'LBL_LIST_LAST_MODIFIED' => 'Laatste wijziging',
  'NTC_NONE_SCHEDULED' => 'Er zijn geen activiteiten gepland.',
  'appointment_filter_dom' => array(
  	 'today' => 'vandaag'
  	,'tomorrow' => 'morgen'
  	,'this Saturday' => 'deze week'
  	,'next Saturday' => 'volgende week'
  	,'last this_month' => 'deze maand'
  	,'last next_month' => 'volgende maand'
  ),
  'LNK_IMPORT_NOTES'=>'Notities importeren',
  'NTC_NONE'=>'None',
	'LBL_ACCEPT_THIS'=>'Accepteren?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Geschiedenis',
);

?>