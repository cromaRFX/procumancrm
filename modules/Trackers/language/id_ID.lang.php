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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Tampilkan Pengguna Aktif',
		  'ShowLastModifiedRecords' => '10 Record terakhir yang diubah',
		  'ShowTopUser' => 'Pengguna Utama',
		  'ShowMyModuleUsage' => 'Penggunaan Modul saya',
		  'ShowMyWeeklyActivities' => 'Aktivitas Mingguan saya',
		  'ShowTop3ModulesUsed' => '3 Modul Utama yang saya gunakan',
		  'ShowLoggedInUserCount' => 'Menghitung Pengguna Aktif',
		  'ShowMyCumulativeLoggedInTime' => 'Kumulatif Waktu Login saya (Minggu ini)',
		  'ShowUsersCumulativeLoggedInTime' => 'Kumulatif Waktu Login saya (Minggu ini)',
		  
		  //Column header mapping
		  'action' => 'Aksi',
		  'active_users' => 'Menghitung Pengguna Aktif',
		  'date_modified' => 'Tanggal Terakhir Aktivitas',
		  'different_modules_accessed' => 'Jumlah Modul yang Diakses',
		  'first_name' => 'Nama Awal',
		  'item_id' => 'ID',
		  'item_summary' => 'Nama',
		  'last_action' => 'Tanggal/Waktu terakhir aktivitas',
		  'last_name' => 'Nama Akhir',
		  'module_name' => 'Nama Modul',
		  'records_modified' => 'Jumlah Records yang Diubah',
		  'top_module' => 'Top Modul yang diakses',
		  'total_count' => 'Jumlah tampilan halaman',
		  'total_login_time' => 'Waktu (hh: mm: dd)',
		  'user_name' => 'Nama Pengguna',
		  'users' => 'Pemakai',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Diaktifkan',
		  'LBL_MODULE_NAME_TITLE' => 'Tracker',
		  'LBL_MODULE_NAME' => 'Tracker',
		  'LBL_TRACKER_SETTINGS' => 'Pengaturan Tracker ',
		  'LBL_TRACKER_QUERIES_DESC' => 'Tracker Query',
		  'LBL_TRACKER_QUERIES_HELP' => 'Track sintaks SQL jika "Log Sloq Queries" diaktifkan dan waktu eksekusi melebihi nilai "batas waktu permintaan Slow"',
		  'LBL_TRACKER_PERF_DESC' => 'Performa Tracker',
		  'LBL_TRACKER_PERF_HELP' => 'Track database roundtrips, akses file, dan penggunaan memori',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sesi Tracker',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Track Pengguna Aktif dan informasi Sesi Pengguna&rsquo; ',
		  'LBL_TRACKER_DESC' => 'Tracker Actions',
		  'LBL_TRACKER_HELP' => 'Track page view Pengguna (modules dan records yang diakses) dan penyimpanan record',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Jumlah hari untuk menyimpan data Tracker ketika scheduler melakukan prune table',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Jumlah hari',
);
?>