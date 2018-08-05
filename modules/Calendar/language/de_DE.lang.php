<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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


$mod_strings = array(

    'LBL_MODULE_NAME' => 'Kalender',
    'LBL_MODULE_TITLE' => 'Kalender',
    'LNK_NEW_CALL' => 'Neuer Anruf',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_CALL_LIST' => 'Anrufe',
    'LNK_MEETING_LIST' => 'Termine',
    'LNK_TASK_LIST' => 'Aufgaben',
    'LNK_VIEW_CALENDAR' => 'Heute',
    'LNK_IMPORT_CALLS' => 'Anrufe importieren',
    'LNK_IMPORT_MEETINGS' => 'Meetings importieren',
    'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
    'LBL_MONTH' => 'Monat',
    'LBL_DAY' => 'Tag',
    'LBL_YEAR' => 'Jahr',
    'LBL_WEEK' => 'Woche',
    'LBL_PREVIOUS_MONTH' => 'Vorheriger Monat',
    'LBL_PREVIOUS_DAY' => 'Vorheriger Tag',
    'LBL_PREVIOUS_YEAR' => 'Vorheriges Jahr',
    'LBL_PREVIOUS_WEEK' => 'Vorherige Woche',
    'LBL_NEXT_MONTH' => 'Nächster Monat',
    'LBL_NEXT_DAY' => 'Nächster Tag',
    'LBL_NEXT_YEAR' => 'Nächstes Jahr',
    'LBL_NEXT_WEEK' => 'Nächste Woche',
    'LBL_AM' => 'UHR',
    'LBL_PM' => 'Nachmittags',
    'LBL_SCHEDULED' => 'Eingeplant',
    'LBL_BUSY' => 'Belegt',
    'LBL_CONFLICT' => 'Terminkonflikt',
    'LBL_USER_CALENDARS' => 'Benutzerkalender',
    'LBL_SHARED' => 'Gemeinsam',
    'LBL_PREVIOUS_SHARED' => 'Zurück',
    'LBL_NEXT_SHARED' => 'Weiter',
    'LBL_SHARED_CAL_TITLE' => 'Gemeinsamer Kalender',
    'LBL_USERS' => 'Benutzer',
    'LBL_REFRESH' => 'Aktualisieren',
    'LBL_EDIT_USERLIST' => 'Benutzerliste',
    'LBL_SELECT_USERS' => 'Benutzer für Kalenderanzeige auswählen',
    'LBL_FILTER_BY_TEAM' => 'Benutzerliste nach Team filtern:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_DATE' => 'Startdatum und -zeit:',
    'LBL_CREATE_MEETING' => 'Neues Meeting',
    'LBL_CREATE_CALL' => 'Anruf Log',
    'LBL_HOURS_ABBREV' => 'Std.',
    'LBL_MINS_ABBREV' => 'min',


    'LBL_YES' => '"Ja"',
    'LBL_NO' => 'Nr.',
    'LBL_SETTINGS' => 'Einstellungen',
    'LBL_CREATE_NEW_RECORD' => 'Aktivität erstellen',
    'LBL_LOADING' => 'Lade...',
    'LBL_SAVING' => 'Speichere...',
    'LBL_SENDING_INVITES' => 'Speichere & Versende Einladungen …..',
    'LBL_CONFIRM_REMOVE' => 'Sind Sie sicher, diesen Eintrag entfernen zu wollen?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sind Sie sicher, alle Wiederholungen entfernen zu wollen?',
    'LBL_EDIT_RECORD' => 'Aktivität bearbeiten',
    'LBL_ERROR_SAVING' => 'Fehler beim Speichern',
    'LBL_ERROR_LOADING' => 'Fehler beim Laden',
    'LBL_GOTO_DATE' => 'Gehe zu Datum',
    'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
    'LBL_STYLE_BASIC' => 'Einfach',
    'LBL_STYLE_ADVANCED' => 'Erweitert',

    'LBL_INFO_TITLE' => 'Weitere Details',
    'LBL_INFO_DESC' => 'Beschreibung',
    'LBL_INFO_START_DT' => 'Startdatum',
    'LBL_INFO_DUE_DT' => 'Fälligkeitsdatum',
    'LBL_INFO_DURATION' => 'Dauer',
    'LBL_INFO_NAME' => 'Betreff',
    'LBL_INFO_RELATED_TO' => 'Gehört zu',

    'LBL_NO_USER' => 'Kein Treffer für Feld: Zugewiesen an',
    'LBL_SUBJECT' => 'Betreff',
    'LBL_DURATION' => 'Dauer',
    'LBL_STATUS' => 'Status',
    'LBL_DATE_TIME' => 'Datum und Zeit',


    'LBL_SETTINGS_TITLE' => 'Einstellungen',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zeitfenster in Tages- und Wochenansicht anzeigen:',
    'LBL_SETTINGS_TIME_STARTS' => 'Startzeit:',
    'LBL_SETTINGS_TIME_ENDS' => 'Endzeit:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Anrufe anzeigen:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Aufgaben anzeigen:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Abgeschlossene Meetings, Anrufe und Aufgaben anzeigen:',

    'LBL_SAVE_BUTTON' => 'Speichern',
    'LBL_DELETE_BUTTON' => 'Löschen',
    'LBL_APPLY_BUTTON' => 'Anwenden',
    'LBL_SEND_INVITES' => 'Speichern & Einladungen versenden',
    'LBL_CANCEL_BUTTON' => 'Abbrechen',
    'LBL_CLOSE_BUTTON' => 'Schließen',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Teilnehmer',
    'LBL_REPEAT_TAB' => 'Serie',

    'LBL_REPEAT_TYPE' => 'Wiederholen',
    'LBL_REPEAT_INTERVAL' => 'alle',
    'LBL_REPEAT_END' => 'Ende',
    'LBL_REPEAT_END_AFTER' => 'Nach',
    'LBL_REPEAT_OCCURRENCES' => 'Wiederholungen',
    'LBL_REPEAT_END_BY' => 'Ab',
    'LBL_REPEAT_DOW' => 'Am',
    'LBL_REPEAT_UNTIL' => 'Wiederhole bis',
    'LBL_REPEAT_COUNT' => 'Anzahl der Wiederholungen',
    'LBL_REPEAT_LIMIT_ERROR' => 'Ihr Befehl hätte mehr als als $limit Meetings erstellt.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Alle Wiederholungen bearbeiten',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Alle Wiederholungen löschen',

    'LBL_DATE_END_ERROR' => 'Das Enddatum ist vor dem Beginndatum',
    'ERR_YEAR_BETWEEN' => 'Der Kalender versteht das verlangte Jahr nicht<br>Die Jahreszahl muss zwischen 1970 und 2037 liegen',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: für diese Ansicht nicht definiert',
    'LBL_NO_ITEMS_MOBILE' => 'Ihr Kalender ist für diese Woche frei.',
    'LBL_SECURITYGROUPS' => 'Benutzerliste nach Berechtigungsgruppen filtern',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "So",
            "Mo",
            "Di",
            "Mi",
            "Do",
            "Fr",
            "Sa",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Sonntag",
            "Montag",
            "Dienstag",
            "Mittwoch",
            "Donnerstag",
            "Freitag",
            "Samstag",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Jan",
            "Feb",
            "Mär",
            "Apr",
            "Alle 5 Minuten",
            "Jun",
            "Jul",
            "Aug",
            "Sept",
            "Okt",
            "Nov",
            "Dez",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Januar",
            "Februar",
            "(GMT + 3) Moskau",
            "(GMT + 4) Kabul",
            "Alle 5 Minuten",
            "(GMT + 6) Astana",
            "(GMT + 7) Bangkok",
            "(GMT + 8) Perth",
            "(GMT + 9) Seoul",
            "10",
            "(GMT + 11) Solomonen Inseln",
            "(GMT + 12) Auckland",
        ),
);
?>
