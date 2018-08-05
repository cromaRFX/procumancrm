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

    'LBL_MODULE_NAME' => 'Kalendarz',
    'LBL_MODULE_TITLE' => 'Kalendarz',
    'LNK_NEW_CALL' => 'Zaplanuj rozmowę tel.',
    'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
    'LNK_NEW_APPOINTMENT' => 'Utwórz termin',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_CALL_LIST' => 'Rozmowy tel.',
    'LNK_MEETING_LIST' => 'Spotkania',
    'LNK_TASK_LIST' => 'Zadania',
    'LNK_VIEW_CALENDAR' => 'Dziś',
    'LNK_IMPORT_CALLS' => 'Importuj rozmowy tel.',
    'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
    'LNK_IMPORT_TASKS' => 'Importuj zadania',
    'LBL_MONTH' => 'Miesiąc',
    'LBL_DAY' => 'Dzień',
    'LBL_YEAR' => 'Rok',
    'LBL_WEEK' => 'Tydzień',
    'LBL_PREVIOUS_MONTH' => 'Poprzedni miesiąc',
    'LBL_PREVIOUS_DAY' => 'Poprzedni dzień',
    'LBL_PREVIOUS_YEAR' => 'Poprzedni rok',
    'LBL_PREVIOUS_WEEK' => 'Poprzedni tydzień',
    'LBL_NEXT_MONTH' => 'Następny miesiąc',
    'LBL_NEXT_DAY' => 'Następny dzień',
    'LBL_NEXT_YEAR' => 'Następny rok',
    'LBL_NEXT_WEEK' => 'Następny tydzień',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Zaplanowany',
    'LBL_BUSY' => 'Zajęty',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Kalendarze użytkowników',
    'LBL_SHARED' => 'Współdzielone',
    'LBL_PREVIOUS_SHARED' => 'Poprzedni',
    'LBL_NEXT_SHARED' => 'Następny',
    'LBL_SHARED_CAL_TITLE' => 'Współdzielony kalendarz',
    'LBL_USERS' => 'Użytkownik',
    'LBL_REFRESH' => 'Odśwież',
    'LBL_EDIT_USERLIST' => 'Lista Użytkowników',
    'LBL_SELECT_USERS' => 'Wybierz użytkowników dla wyświetlenia kalendarza',
    'LBL_FILTER_BY_TEAM' => 'Filtruj listę użytkowników przez zespół:',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do',
    'LBL_DATE' => 'Data i czas rozpoczęcia',
    'LBL_CREATE_MEETING' => 'Zaplanuj Spotkanie',
    'LBL_CREATE_CALL' => 'Zaplanuj Rozmowę',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_MINS_ABBREV' => 'min.',


    'LBL_YES' => 'Tak',
    'LBL_NO' => 'Nie',
    'LBL_SETTINGS' => 'Ustawienia',
    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_LOADING' => 'Loading ......',
    'LBL_SAVING' => 'Saving ......',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Error while loading',
    'LBL_GOTO_DATE' => 'Goto Date',
    'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy niż 0',
    'LBL_STYLE_BASIC' => 'Podstawowy',
    'LBL_STYLE_ADVANCED' => 'Zaawansowane',

    'LBL_INFO_TITLE' => 'Dodatkowe Detale',
    'LBL_INFO_DESC' => 'Opis',
    'LBL_INFO_START_DT' => 'Data Rozpoczęcia',
    'LBL_INFO_DUE_DT' => 'Data Wykonania',
    'LBL_INFO_DURATION' => 'Czas Trwania',
    'LBL_INFO_NAME' => 'Temat',
    'LBL_INFO_RELATED_TO' => 'Powiązany z',

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Temat',
    'LBL_DURATION' => 'Czas Trwania',
    'LBL_STATUS' => 'Status',
    'LBL_DATE_TIME' => 'Date and Time',


    'LBL_SETTINGS_TITLE' => 'Ustawienia',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

    'LBL_SAVE_BUTTON' => 'Zapisz [Alt+S]',
    'LBL_DELETE_BUTTON' => 'Usuń',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Wyślij Zaproszenia',
    'LBL_CANCEL_BUTTON' => 'Anuluj [Alt+X]',
    'LBL_CLOSE_BUTTON' => 'Zamknij',

    'LBL_GENERAL_TAB' => 'Szczegóły',
    'LBL_PARTICIPANTS_TAB' => 'Zaproszenia',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Zakończ',
    'LBL_REPEAT_END_AFTER' => 'przed',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'Włączony',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_SECURITYGROUPS' => 'Filtruj użytkowników według grupy bezpieczeństwa',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Niedziela",
            "Poniedziałek",
            "Wtorek",
            "Środa",
            "Czwartek",
            "Piątek",
            "Sobota",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Niedziela",
            "Poniedziałek",
            "Wtorek",
            "Środa",
            "Czwartek",
            "Piątek",
            "Sobota",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Styczeń",
            "Luty",
            "Marzec",
            "Kwiecień",
            "Maj",
            "Czerwiec",
            "Lipiec",
            "Sierpień",
            "Wrzesień",
            "Październik",
            "Listopad",
            "Grudzień",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Styczeń",
            "Luty",
            "Marzec",
            "Kwiecień",
            "Maj",
            "Czerwiec",
            "Lipiec",
            "Sierpień",
            "Wrzesień",
            "Październik",
            "Listopad",
            "Grudzień",
        ),
);
?>
