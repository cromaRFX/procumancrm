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
	'LBL_MODULE_NAME' => 'Tugas Proyek',
	'LBL_MODULE_TITLE' => 'Tugas Proyek: Home',
	'LBL_SEARCH_FORM_TITLE' => 'Cari Tugas Proyek',
	'LBL_LIST_FORM_TITLE'=> 'Daftar Tugas Proyek',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Ubah Tugas Pada Gris',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'ID tugas Proyek:',
    'LBL_PROJECT_ID' => 'Id Proyek:',
	'LBL_DATE_ENTERED' => 'Tanggal Dibuat:',
	'LBL_DATE_MODIFIED' => 'Tanggal diubah:',
	'LBL_ASSIGNED_USER_ID' => 'Ditugaskan ke:',
	'LBL_MODIFIED_USER_ID' => 'User ID yang Diubah:',
	'LBL_CREATED_BY' => 'Dibuat Oleh:',
	'LBL_TEAM_ID' => 'Kelompok:',
	'LBL_NAME' => 'Nama:',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_DUE' => 'Tanggal Jatuh Tempo:',
	'LBL_TIME_DUE' => 'Batas Waktu:',
    'LBL_RESOURCE' => 'Sumber:',
    'LBL_PREDECESSORS' => 'pendahulu:',
	'LBL_DATE_START' => 'Tanggal Mulai',
    'LBL_DATE_FINISH' => 'Tanggal selesai:',    
	'LBL_TIME_START' => 'Waktu Mulai',
    'LBL_TIME_FINISH' => 'Waktu Selesai:',
    'LBL_DURATION' => 'Durasi',
    'LBL_DURATION_UNIT' => 'Durasi Unit:',
    'LBL_ACTUAL_DURATION' => 'Durasi Aktual:',
	'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'ID Induk Tugas:',    
    'LBL_PERCENT_COMPLETE' => 'Persen Selesai (%):',
	'LBL_PRIORITY' => 'Prioritas:',
	'LBL_DESCRIPTION' => 'Catatan:',
	'LBL_ORDER_NUMBER' => 'Pesan:',
	'LBL_TASK_NUMBER' => 'Nomor Tugas:',
    'LBL_TASK_ID' => 'Tugas ID:',
	'LBL_DEPENDS_ON_ID' => 'Tergantung Pada:',
	'LBL_MILESTONE_FLAG' => 'Batu:',
	'LBL_ESTIMATED_EFFORT' => 'Perkiraan Usaha (jam):',
	'LBL_ACTUAL_EFFORT' => 'Aktual Usaha (jam):',
	'LBL_UTILIZATION' => 'Pemanfaatan (%):',
	'LBL_DELETED' => 'Dihapus:',

	'LBL_LIST_ORDER_NUMBER' => 'Pesanan',
	'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_DAYS' => 'hari',
	'LBL_LIST_PARENT_NAME' => 'Proyek',
	'LBL_LIST_PERCENT_COMPLETE' => 'Persentase Selesai (%)',
	'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DURATION' => 'Durasi',
    'LBL_LIST_ACTUAL_DURATION' => 'Durasi aktual',
	'LBL_LIST_ASSIGNED_USER_ID' => 'ditugaskan kepada',
	'LBL_LIST_DATE_DUE' => 'Tanggal Jatuh Tempo',
	'LBL_LIST_DATE_START' => 'Tanggal Mulai',
    'LBL_LIST_DATE_FINISH' => 'Selesai Tanggal',    
	'LBL_LIST_PRIORITY' => 'Prioritas',
	'LBL_LIST_CLOSE' => 'Tutup',
	'LBL_PROJECT_NAME' => 'Nama Proyek',

	'LNK_NEW_PROJECT'	=> 'Buat Proyek',
	'LNK_PROJECT_LIST'	=> 'Daftar Proyek',
	'LNK_NEW_PROJECT_TASK'	=> 'Buat Tugas Proyek',
	'LNK_PROJECT_TASK_LIST'	=> 'Tugas Proyek',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Tugas proyek saya',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tugas Proyek',
	'LBL_NEW_FORM_TITLE' => 'Tugas proyek baru',

	'LBL_ACTIVITIES_TITLE'=>'Kegiatan',
	'LBL_HISTORY_TITLE'=>'Histori',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Kegiatan',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Histori', 
	'DATE_JS_ERROR' => 'Silakan masukkan tanggal yang sesuai dengan waktu masuk',

    'LBL_ASSIGNED_USER_NAME' => 'ditugaskan  kepada',
    'LBL_PARENT_NAME' => 'Nama Proyek',
    'LBL_LIST_PROJECT_NAME' => 'Proyek',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',
	
	'LBL_SUBTASK' => 'Sub-Task',
	'LBL_LAG' => 'Lag',
	'LBL_DAYS' => 'Hari',
	'LBL_HOURS' => 'Jam',
	'LBL_RELATIONSHIP_TYPE' => 'Tipe Hubungan',
);

?>