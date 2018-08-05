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
  'LBL_MODULE_NAME' => 'Verlauf',
  'LBL_MODULE_TITLE' => 'Verlauf: Startseite',
  'LBL_SEARCH_FORM_TITLE' => 'Suche im Verlauf',
  'LBL_LIST_FORM_TITLE' => 'Verlauf',
  'LBL_LIST_SUBJECT' => 'Betreff',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_RELATED_TO' => 'Gehört zu:',
  'LBL_LIST_DATE' => 'Datum',
  'LBL_LIST_TIME' => 'Startzeit',
  'LBL_LIST_CLOSE' => 'Schließen',
  'LBL_SUBJECT' => 'Betreff:',
  'LBL_STATUS' => 'Status',
  'LBL_LOCATION' => 'Ort:',
  'LBL_DATE_TIME' => 'Startdatum und -zeit:',
  'LBL_DATE' => 'Startdatum:',
  'LBL_TIME' => 'Beginn:',
  'LBL_DURATION' => 'Dauer:',
  'LBL_HOURS_MINS' => '(Stunden)',
  'LBL_CONTACT_NAME' => 'Kontaktname:',
  'LBL_MEETING' => 'Termin:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informationsbeschreibung',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Geplant',
  'LNK_NEW_CALL' => 'Anruf Log',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_TASK' => 'Aufgabe erstellen',
  'LNK_NEW_NOTE' => 'Notiz oder Anhang erstellen',
  'LNK_NEW_EMAIL' => 'E-Mail archivieren',
  'LNK_CALL_LIST' => 'Anrufe',
  'LNK_MEETING_LIST' => 'Termine',
  'LNK_TASK_LIST' => 'Aufgaben',
  'LNK_NOTE_LIST' => 'Notizen',
  'LNK_EMAIL_LIST' => 'E-Mails',
  'ERR_DELETE_RECORD' => 'Eine Datensatznummer muss angeben werden, um diese Firma zu löschen.',
  'NTC_REMOVE_INVITEE' => 'Möchten Sie diesen Teilnehmer wirklich aus diesem Meeting entfernen?',
  'LBL_INVITEE' => 'Teilnehmer',
  'LBL_LIST_DIRECTION' => 'Richtung',
  'LBL_DIRECTION' => 'Richtung',
  'LNK_NEW_APPOINTMENT' => 'Neues Meeting',
  'LNK_VIEW_CALENDAR' => 'Heute',
  'LBL_OPEN_ACTIVITIES' => 'Offene Aktivitäten',
  'LBL_HISTORY' => 'Verlauf',
  'LBL_UPCOMING' => 'Meine nächsten Termine',
  'LBL_TODAY' => 'bis',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Aufgabe erstellen',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Aufgabe erstellen',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Neues Meeting',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Neues Meeting',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Anruf Log',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Anruf Log',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Notiz oder Anlage erstellen',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Notiz oder Anlage erstellen',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-Mail archivieren',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-Mail archivieren',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Fälligkeitsdatum',
  'LBL_LIST_LAST_MODIFIED' => 'Änderungsdatum',
  'NTC_NONE_SCHEDULED' => 'Keine Termine.',
  'appointment_filter_dom' => array(
  	 'today' => 'heute'
  	,'tomorrow' => 'morgen'
  	,'this Saturday' => 'Diese Woche'
  	,'next Saturday' => 'Nächste Woche'
  	,'last this_month' => 'Dieser Monat'
  	,'last next_month' => 'Nächster Monat'
  ),
  'LNK_IMPORT_NOTES'=>'Notizen importieren',
  'NTC_NONE'=>'Kein(e)',
	'LBL_ACCEPT_THIS'=>'Bestätigen?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verlauf',
);

?>