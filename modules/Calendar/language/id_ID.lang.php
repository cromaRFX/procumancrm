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
    'LNK_NEW_CALL' => 'Log Panggilan Telepon',
    'LNK_NEW_MEETING' => 'Menjadwalkan Rapat',
    'LNK_NEW_APPOINTMENT' => 'Membuat Janji Temu',
    'LNK_NEW_TASK' => 'Membuat Tugas',
    'LNK_CALL_LIST' => 'Panggilan Telepon',
    'LNK_MEETING_LIST' => 'Rapat',
    'LNK_TASK_LIST' => 'Tugas',
    'LNK_VIEW_CALENDAR' => 'Hari Ini',
    'LNK_IMPORT_CALLS' => 'Impor Panggilan Telepon',
    'LNK_IMPORT_MEETINGS' => 'Impor Rapat',
    'LNK_IMPORT_TASKS' => 'Impor Tugas',
    'LBL_MONTH' => 'Bulan',
    'LBL_DAY' => 'Hari',
    'LBL_YEAR' => 'Tahun',
    'LBL_WEEK' => 'Minggu',
    'LBL_PREVIOUS_MONTH' => 'Bulan Sebelumnya',
    'LBL_PREVIOUS_DAY' => 'Hari Sebelumnya',
    'LBL_PREVIOUS_YEAR' => 'Tahun Sebelumnya',
    'LBL_PREVIOUS_WEEK' => 'Minggu Sebelumnya',
    'LBL_NEXT_MONTH' => 'Bulan Berikutnya',
    'LBL_NEXT_DAY' => 'Hari Berikutnya',
    'LBL_NEXT_YEAR' => 'Tahun Berikutnya',
    'LBL_NEXT_WEEK' => 'Minggu berikutnya',
    'LBL_AM' => 'PM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Dijadwalkan',
    'LBL_BUSY' => 'Sibuk',
    'LBL_CONFLICT' => 'Konflik',
    'LBL_USER_CALENDARS' => 'Kalender User',
    'LBL_SHARED' => 'Bersama',
    'LBL_PREVIOUS_SHARED' => 'Sebelumnya',
    'LBL_NEXT_SHARED' => 'Berikutnya',
    'LBL_SHARED_CAL_TITLE' => 'Kalender Bersama',
    'LBL_USERS' => 'Pengguna',
    'LBL_REFRESH' => 'Refresh',
    'LBL_EDIT_USERLIST' => 'Daftar Pemakai',
    'LBL_SELECT_USERS' => 'Pilih pengguna dari tampilan kalender',
    'LBL_FILTER_BY_TEAM' => 'Filter Pengguna berdasarkan tim',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada kepada',
    'LBL_DATE' => 'Tanggal & Waktu mulai',
    'LBL_CREATE_MEETING' => 'Jadwal Rapat',
    'LBL_CREATE_CALL' => 'Jadwal Panggilan',
    'LBL_HOURS_ABBREV' => 'j',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Ya',
    'LBL_NO' => 'Tidak',
    'LBL_SETTINGS' => 'Pengaturan',
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
    'NOTICE_DURATION_TIME' => 'Durasi waktu harus lebih Besar dari 0',
    'LBL_STYLE_BASIC' => 'Basic',
    'LBL_STYLE_ADVANCED' => 'Melanjutkan',

    'LBL_INFO_TITLE' => 'Rincian Tambahan',
    'LBL_INFO_DESC' => 'Deskripsi',
    'LBL_INFO_START_DT' => 'Tanggal Mulai',
    'LBL_INFO_DUE_DT' => 'Tanggal Jatuh Tempo',
    'LBL_INFO_DURATION' => 'Durasi',
    'LBL_INFO_NAME' => 'Subjek',
    'LBL_INFO_RELATED_TO' => 'Terkait dengan',

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Subjek',
    'LBL_DURATION' => 'Durasi',
    'LBL_STATUS' => 'Status',
    'LBL_DATE_TIME' => 'Date and Time',


    'LBL_SETTINGS_TITLE' => 'Pengaturan',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

    'LBL_SAVE_BUTTON' => 'Simpan [Alt+S]',
    'LBL_DELETE_BUTTON' => 'Hapus',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Mengirim Undangan',
    'LBL_CANCEL_BUTTON' => 'Batal',
    'LBL_CLOSE_BUTTON' => 'Tutup',

    'LBL_GENERAL_TAB' => 'Detail',
    'LBL_PARTICIPANTS_TAB' => 'Yang Diundang',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'Sesudah',
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
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri",
            "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Minggu",
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jum'at",
            "Sabtu",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "January",
            "February",
            "Mar",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Agu",
            "Sep",
            "Okt",
            "Nov",
            "Des",
        ),
);
?>
