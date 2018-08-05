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
  'LBL_MODULE_NAME' => 'Historia',
  'LBL_MODULE_TITLE' => 'Historia: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie w historii',
  'LBL_LIST_FORM_TITLE' => 'Historia',
  'LBL_LIST_SUBJECT' => 'Temat',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_RELATED_TO' => 'Powiązany z',
  'LBL_LIST_DATE' => 'Data',
  'LBL_LIST_TIME' => 'Rozpocznij Czas',
  'LBL_LIST_CLOSE' => 'Zamknij',
  'LBL_SUBJECT' => 'Temat:',
  'LBL_STATUS' => 'Status',
  'LBL_LOCATION' => 'Lokalizacja:',
  'LBL_DATE_TIME' => 'Data i Czas Rozpoczęcia: ',
  'LBL_DATE' => 'Data Rozpoczęcia:',
  'LBL_TIME' => 'Czas Rozpoczęcia:',
  'LBL_DURATION' => 'Czas Trwania:',
  'LBL_HOURS_MINS' => '(godziny/minuty)',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_MEETING' => 'Spotkanie:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacja Opisowa',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Zaplanowane',
  'LNK_NEW_CALL' => 'Zaplanuj Rozmowę',
  'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
  'LNK_NEW_TASK' => 'Utwórz Zadanie',
  'LNK_NEW_NOTE' => 'Utwórz Notatkę lub Załącznik',
  'LNK_NEW_EMAIL' => 'Archiwum Email',
  'LNK_CALL_LIST' => 'Rozmowy Telefoniczne',
  'LNK_MEETING_LIST' => 'Spotkania',
  'LNK_TASK_LIST' => 'Zadania',
  'LNK_NOTE_LIST' => 'Notatki',
  'LNK_EMAIL_LIST' => 'Wiadomości Email',
  'ERR_DELETE_RECORD' => 'Numer zapisów musi być określona, aby usunąć konto.',
  'NTC_REMOVE_INVITEE' => 'Czy na pewno chcesz usunąć tego uczestnika?',
  'LBL_INVITEE' => 'Zaproszenia',
  'LBL_LIST_DIRECTION' => 'Kierunek',
  'LBL_DIRECTION' => 'Kierunek',
  'LNK_NEW_APPOINTMENT' => 'Nowe Spotkanie',
  'LNK_VIEW_CALENDAR' => 'Dziś',
  'LBL_OPEN_ACTIVITIES' => 'Otwarte Działania',
  'LBL_HISTORY' => 'Historia',
  'LBL_UPCOMING' => 'Zbliżające się Spotkania',
  'LBL_TODAY' => 'przez ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Utwórz Zadanie',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Utwórz Zadanie',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Zaplanuj Spotkanie',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'min.',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Zaplanuj Spotkanie',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Zaplanuj Rozmowę',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Zaplanuj Rozmowę',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Utwórz Notatkę lub Załącznik',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Utwórz Notatkę lub Załącznik',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwum Email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwum Email',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Data Wykonania',
  'LBL_LIST_LAST_MODIFIED' => 'Ostatnia Modyfikacja',
  'NTC_NONE_SCHEDULED' => 'Brak zaplanowanych.',
  'appointment_filter_dom' => array(
  	 'today' => 'Dziś'
  	,'tomorrow' => 'Jutro'
  	,'this Saturday' => 'ten tydzień'
  	,'next Saturday' => 'następny tydzień'
  	,'last this_month' => 'obecny miesiąc'
  	,'last next_month' => 'przyszły miesiąc'
  ),
  'LNK_IMPORT_NOTES'=>' Importuj Zapis',
  'NTC_NONE'=>'Nie',
	'LBL_ACCEPT_THIS'=>'Akceptować?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Historia',
);

?>