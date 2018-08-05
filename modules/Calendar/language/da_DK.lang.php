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
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_APPOINTMENT' => 'Opret aftale',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_CALL_LIST' => 'Opkald',
    'LNK_MEETING_LIST' => 'Møder',
    'LNK_TASK_LIST' => 'Opgaver',
    'LNK_VIEW_CALENDAR' => 'I dag',
    'LNK_IMPORT_CALLS' => 'Importér opkald',
    'LNK_IMPORT_MEETINGS' => 'Importér møder',
    'LNK_IMPORT_TASKS' => 'Importér opgaver',
    'LBL_MONTH' => 'Måned',
    'LBL_DAY' => 'Dag',
    'LBL_YEAR' => 'År',
    'LBL_WEEK' => 'Uge',
    'LBL_PREVIOUS_MONTH' => 'Forrige måned',
    'LBL_PREVIOUS_DAY' => 'Forrige dag',
    'LBL_PREVIOUS_YEAR' => 'Forrige år',
    'LBL_PREVIOUS_WEEK' => 'Forrige uge',
    'LBL_NEXT_MONTH' => 'Næste måned',
    'LBL_NEXT_DAY' => 'Næste dag',
    'LBL_NEXT_YEAR' => 'Næste år',
    'LBL_NEXT_WEEK' => 'Næste uge',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planlagt',
    'LBL_BUSY' => 'Optaget',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Bruger kalender',
    'LBL_SHARED' => 'Delt',
    'LBL_PREVIOUS_SHARED' => 'Forrige',
    'LBL_NEXT_SHARED' => 'Næste',
    'LBL_SHARED_CAL_TITLE' => 'Delt kalender',
    'LBL_USERS' => 'Bruger',
    'LBL_REFRESH' => 'Gentegn',
    'LBL_EDIT_USERLIST' => 'Bruger liste',
    'LBL_SELECT_USERS' => 'Vælg brugere for kalender visning',
    'LBL_FILTER_BY_TEAM' => 'Filter brugerlisten efter team:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_DATE' => 'Start Date & Time',
    'LBL_CREATE_MEETING' => 'Planlæg møde',
    'LBL_CREATE_CALL' => 'Planlæg opkald',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nej',
    'LBL_SETTINGS' => 'Indstillinger',
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
    'NOTICE_DURATION_TIME' => 'Varigheden skal være større end 0',
    'LBL_STYLE_BASIC' => 'Grundlæggende',
    'LBL_STYLE_ADVANCED' => 'Advanceret',

    'LBL_INFO_TITLE' => 'Yderligere detaljer',
    'LBL_INFO_DESC' => 'Beskrivelse',
    'LBL_INFO_START_DT' => 'Startdato',
    'LBL_INFO_DUE_DT' => 'Slutdato',
    'LBL_INFO_DURATION' => 'Varighed',
    'LBL_INFO_NAME' => 'Emne',
    'LBL_INFO_RELATED_TO' => 'Relateret til',

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Emne',
    'LBL_DURATION' => 'Varighed',
    'LBL_STATUS' => 'Status',
    'LBL_DATE_TIME' => 'Date and Time',


    'LBL_SETTINGS_TITLE' => 'Indstillinger',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

    'LBL_SAVE_BUTTON' => 'Gem [Alt+S]',
    'LBL_DELETE_BUTTON' => 'Slet',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Send Invitationer [Alt+I]',
    'LBL_CANCEL_BUTTON' => 'Afbryd',
    'LBL_CLOSE_BUTTON' => 'Luk',

    'LBL_GENERAL_TAB' => 'Detaljer',
    'LBL_PARTICIPANTS_TAB' => 'Deltagere',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Slut',
    'LBL_REPEAT_END_AFTER' => 'Efter',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_SECURITYGROUPS' => 'Filter user list by Security Group',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Søn",
            "Man",
            "Tirs",
            "Ons",
            "Tors",
            "Fre",
            "Lør",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Søndag",
            "Mandag",
            "Tirsdag",
            "Onsdag",
            "Torsdag",
            "Fredag",
            "Lørdag",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Maj",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Okt",
            "Nov",
            "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "January",
            "Februar",
            "Marts",
            "April",
            "Maj",
            "Juni",
            "Juli",
            "August",
            "September",
            "Oktober",
            "November",
            "December",
        ),
);
?>
