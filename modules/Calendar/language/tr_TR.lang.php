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

    'LBL_MODULE_NAME' => 'Takvim',
    'LBL_MODULE_TITLE' => 'Takvim',
    'LNK_NEW_CALL' => 'Tel.Araması Planla',
    'LNK_NEW_MEETING' => 'Toplantı Planla',
    'LNK_NEW_APPOINTMENT' => 'Randevu Oluştur',
    'LNK_NEW_TASK' => 'Görev Oluştur',
    'LNK_CALL_LIST' => 'Tel.Aramalarını Görüntüle',
    'LNK_MEETING_LIST' => 'Toplantıları Görüntüle',
    'LNK_TASK_LIST' => 'Görevleri Görüntüle',
    'LNK_VIEW_CALENDAR' => 'Bugün',
    'LNK_IMPORT_CALLS' => 'Çağrı alma',
    'LNK_IMPORT_MEETINGS' => 'Toplantı Verilerini Yükle',
    'LNK_IMPORT_TASKS' => 'Görev Verilerini Yükle',
    'LBL_MONTH' => 'Ay',
    'LBL_DAY' => 'Gün',
    'LBL_YEAR' => 'Yıl',
    'LBL_WEEK' => 'Hafta',
    'LBL_PREVIOUS_MONTH' => 'Geçen Ay',
    'LBL_PREVIOUS_DAY' => 'Önceki Gün',
    'LBL_PREVIOUS_YEAR' => 'Geçen Yıl',
    'LBL_PREVIOUS_WEEK' => 'Geçen Hafta',
    'LBL_NEXT_MONTH' => 'Gelecek Ay',
    'LBL_NEXT_DAY' => 'Sonraki Gün',
    'LBL_NEXT_YEAR' => 'Gelecek Yıl',
    'LBL_NEXT_WEEK' => 'Gelecek Hafta',
    'LBL_AM' => 'ÖÖ(AM)',
    'LBL_PM' => 'ÖS(PM)',
    'LBL_SCHEDULED' => 'Planlanmış',
    'LBL_BUSY' => 'Meşgul',
    'LBL_CONFLICT' => 'Çakışma',
    'LBL_USER_CALENDARS' => 'Kullanıcı Takvimleri',
    'LBL_SHARED' => 'Ortak',
    'LBL_PREVIOUS_SHARED' => 'Önceki',
    'LBL_NEXT_SHARED' => 'Sonraki',
    'LBL_SHARED_CAL_TITLE' => 'Ortak Takvim',
    'LBL_USERS' => 'Kullanıcı',
    'LBL_REFRESH' => 'Yenile',
    'LBL_EDIT_USERLIST' => 'Kullanýcý Listesi',
    'LBL_SELECT_USERS' => 'Takvim Gösterimi İçin Kullanıcıları Seçiniz',
    'LBL_FILTER_BY_TEAM' => 'Kullanıcı Listelerini Takıma Göre Filtrele:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi',
    'LBL_DATE' => 'Başlangıç Tarih & Saat',
    'LBL_CREATE_MEETING' => 'Toplantı Planlama',
    'LBL_CREATE_CALL' => 'Tel.Araması Planlama',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Evet',
    'LBL_NO' => 'Hayır',
    'LBL_SETTINGS' => 'Ayarlar',
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
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_STYLE_BASIC' => 'Basit',
    'LBL_STYLE_ADVANCED' => 'Advanced',

    'LBL_INFO_TITLE' => 'Ek Detaylar',
    'LBL_INFO_DESC' => 'Tanım',
    'LBL_INFO_START_DT' => 'Başlangıç Tarihi',
    'LBL_INFO_DUE_DT' => 'Teslim Tarihi',
    'LBL_INFO_DURATION' => 'Süre',
    'LBL_INFO_NAME' => 'Konu',
    'LBL_INFO_RELATED_TO' => 'İlişkili ',

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Konu',
    'LBL_DURATION' => 'Süre',
    'LBL_STATUS' => 'Durum',
    'LBL_DATE_TIME' => 'Date and Time',


    'LBL_SETTINGS_TITLE' => 'Ayarlar',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

    'LBL_SAVE_BUTTON' => 'Kaydet',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Vazgeç',
    'LBL_CLOSE_BUTTON' => 'Kapat',

    'LBL_GENERAL_TAB' => 'Detaylar',
    'LBL_PARTICIPANTS_TAB' => 'Davetliler',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Son',
    'LBL_REPEAT_END_AFTER' => 'Sonra',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'üzerinde / tarihinde',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_SECURITYGROUPS' => 'Güvenlik grubu filtresi ile kullanıcı listesi oluştur',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Paz",
            "Pts",
            "Sal",
            "Çar",
            "Per",
            "Cum",
            "Cts",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Pazar",
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe",
            "Cuma",
            "Cumartesi",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Oca",
            "Şub",
            "Mar",
            "Nis",
            "Mayıs",
            "Haz",
            "Tem",
            "Ağu",
            "Eyl",
            "Eki",
            "Kas",
            "Ara",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Ocak",
            "Şubat",
            "Mart",
            "Nisan",
            "Mayıs",
            "Haziran",
            "Temmuz",
            "Ağustos",
            "Eylül",
            "Ekim",
            "Kasım",
            "Aralık",
        ),
);
?>
