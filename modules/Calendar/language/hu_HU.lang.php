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

    'LBL_MODULE_NAME' => 'Naptár',
    'LBL_MODULE_TITLE' => 'Naptár',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_APPOINTMENT' => 'Megbeszélés létrehozása',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_CALL_LIST' => 'Hívások megtekintése',
    'LNK_MEETING_LIST' => 'Találkozók megtekintése',
    'LNK_TASK_LIST' => 'Feladatok megtekintése',
    'LNK_VIEW_CALENDAR' => 'Ma',
    'LNK_IMPORT_CALLS' => 'Hívások importálása',
    'LNK_IMPORT_MEETINGS' => 'Találkozók importálása',
    'LNK_IMPORT_TASKS' => 'Feladatok importálása',
    'LBL_MONTH' => 'Hónap',
    'LBL_DAY' => 'Nap',
    'LBL_YEAR' => 'Év',
    'LBL_WEEK' => 'Hét',
    'LBL_PREVIOUS_MONTH' => 'Előző hónap',
    'LBL_PREVIOUS_DAY' => 'Előző nap',
    'LBL_PREVIOUS_YEAR' => 'Előző év',
    'LBL_PREVIOUS_WEEK' => 'Előző hét',
    'LBL_NEXT_MONTH' => 'Következő hónap',
    'LBL_NEXT_DAY' => 'Következő nap',
    'LBL_NEXT_YEAR' => 'Következő év',
    'LBL_NEXT_WEEK' => 'Következő hét',
    'LBL_AM' => 'de.',
    'LBL_PM' => 'du.',
    'LBL_SCHEDULED' => 'Ütemezett',
    'LBL_BUSY' => 'Foglalt',
    'LBL_CONFLICT' => 'Ütközés',
    'LBL_USER_CALENDARS' => 'Felhasználó naptárai',
    'LBL_SHARED' => 'Megosztott',
    'LBL_PREVIOUS_SHARED' => 'Előző',
    'LBL_NEXT_SHARED' => 'Következő',
    'LBL_SHARED_CAL_TITLE' => 'Megosztott naptár',
    'LBL_USERS' => 'Felhasználó',
    'LBL_REFRESH' => 'Frissítés',
    'LBL_EDIT_USERLIST' => 'Felhasználói lista',
    'LBL_SELECT_USERS' => 'Válassza ki a felhasználót a naptár megtekintéséhez',
    'LBL_FILTER_BY_TEAM' => 'Felhasználói lista szűrése csoport szerint:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_DATE' => 'Kezdő dátum & idő',
    'LBL_CREATE_MEETING' => 'Találkozók ütemezése',
    'LBL_CREATE_CALL' => 'Hívások ütemezése',
    'LBL_HOURS_ABBREV' => 'ó',
    'LBL_MINS_ABBREV' => 'p',


    'LBL_YES' => 'Igen',
    'LBL_NO' => 'Nem',
    'LBL_SETTINGS' => 'Beállítások',
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
    'NOTICE_DURATION_TIME' => 'Az időtartamnak nagyobbnak kell lennie 0-nál',
    'LBL_STYLE_BASIC' => 'Alapvető',
    'LBL_STYLE_ADVANCED' => 'Haladóknak',

    'LBL_INFO_TITLE' => 'További részletek',
    'LBL_INFO_DESC' => 'Leírás',
    'LBL_INFO_START_DT' => 'Kezdés dátum:',
    'LBL_INFO_DUE_DT' => 'Határidő dátum',
    'LBL_INFO_DURATION' => 'Időtartam',
    'LBL_INFO_NAME' => 'Tárgy',
    'LBL_INFO_RELATED_TO' => 'Összefüggésben',

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Tárgy',
    'LBL_DURATION' => 'Időtartam',
    'LBL_STATUS' => 'Állapot',
    'LBL_DATE_TIME' => 'Date and Time',


    'LBL_SETTINGS_TITLE' => 'Beállítások',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

    'LBL_SAVE_BUTTON' => 'Mentés',
    'LBL_DELETE_BUTTON' => 'Törlés',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Meghívók küldése [Alt+I]',
    'LBL_CANCEL_BUTTON' => 'Mégsem',
    'LBL_CLOSE_BUTTON' => 'Zárás',

    'LBL_GENERAL_TAB' => 'Részletek',
    'LBL_PARTICIPANTS_TAB' => 'Meghívottak',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Vége',
    'LBL_REPEAT_END_AFTER' => 'Után',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'Be',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_SECURITYGROUPS' => 'Felhasználók Listájának szűrése Biztonsági Csoport szerint',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "v",
            "h",
            "k",
            "sze",
            "cs",
            "p",
            "szo",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "vasárnap",
            "hétfő",
            "kedd",
            "szerda",
            "csütörtök",
            "péntek",
            "szombat",
        ),
    'dom_cal_month' =>
        array(
            "",
            "jan",
            "febr",
            "márc",
            "ápr",
            "május",
            "jún",
            "júl",
            "aug",
            "szept",
            "okt",
            "nov",
            "dec",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "január",
            "február",
            "március",
            "április",
            "május",
            "június",
            "július",
            "augusztus",
            "szeptember",
            "október",
            "november",
            "december",
        ),
);
?>
