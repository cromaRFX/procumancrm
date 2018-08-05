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
  'LBL_MODULE_NAME' => 'Histori',
  'LBL_MODULE_TITLE' => 'History: Home',
  'LBL_SEARCH_FORM_TITLE' => 'History Search',
  'LBL_LIST_FORM_TITLE' => 'Histori',
  'LBL_LIST_SUBJECT' => 'Subjek',
  'LBL_LIST_CONTACT' => 'Kontak',
  'LBL_LIST_RELATED_TO' => 'Terkait dengan',
  'LBL_LIST_DATE' => 'Tanggal',
  'LBL_LIST_TIME' => 'Waktu Mulai',
  'LBL_LIST_CLOSE' => 'Tutup',
  'LBL_SUBJECT' => 'Subjek',
  'LBL_STATUS' => 'Status',
  'LBL_LOCATION' => 'Lokasi:',
  'LBL_DATE_TIME' => 'Tanggal & Waktu Mulai',
  'LBL_DATE' => 'Tanggal Mulai',
  'LBL_TIME' => 'Waktu Mulai',
  'LBL_DURATION' => 'Durasi',
  'LBL_HOURS_MINS' => '(jam / menit)',
  'LBL_CONTACT_NAME' => 'Nama Kontak: ',
  'LBL_MEETING' => 'Rapat:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informasi Deskripsi',
  'LBL_DESCRIPTION' => 'Deskripsi',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Merencanakan',
  'LNK_NEW_CALL' => 'Jadwal Panggilan',
  'LNK_NEW_MEETING' => 'Jadwal Rapat',
  'LNK_NEW_TASK' => 'Buat Tugas',
  'LNK_NEW_NOTE' => 'Membuat Catatan atau Lampiran',
  'LNK_NEW_EMAIL' => 'Arsip Email [Alt+K]',
  'LNK_CALL_LIST' => 'Panggilan',
  'LNK_MEETING_LIST' => 'Rapat',
  'LNK_TASK_LIST' => 'Tugas',
  'LNK_NOTE_LIST' => 'Catatan',
  'LNK_EMAIL_LIST' => 'Emails',
  'ERR_DELETE_RECORD' => 'Nomor Record harus ditentukan sebelum menghapus Account',
  'NTC_REMOVE_INVITEE' => 'Apakah anda yakin ingin menghapus undangan ini dari pertemuan?',
  'LBL_INVITEE' => 'Yang Diundang',
  'LBL_LIST_DIRECTION' => 'Arah',
  'LBL_DIRECTION' => 'Arah',
  'LNK_NEW_APPOINTMENT' => 'Janji Temu baru',
  'LNK_VIEW_CALENDAR' => 'Hari ini',
  'LBL_OPEN_ACTIVITIES' => 'Memulai Aktivitas',
  'LBL_HISTORY' => 'Histori',
  'LBL_UPCOMING' => 'Janji Temu yang akan datang',
  'LBL_TODAY' => 'melalui ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Buat Tugas',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Buat Tugas',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Jadwal Rapat',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'm',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Jadwal Rapat',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Jadwal Panggilan',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Jadwal Panggilan',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Membuat Catatan atau Lampiran',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Membuat Catatan atau Lampiran',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arsip Email [Alt+K]',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arsip Email [Alt+K]',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Tanggal Jatuh Tempo',
  'LBL_LIST_LAST_MODIFIED' => 'Terakhir diubah',
  'NTC_NONE_SCHEDULED' => 'Tidak ada jadwal.',
  'appointment_filter_dom' => array(
  	 'today' => 'hari ini'
  	,'tomorrow' => 'besok'
  	,'this Saturday' => 'Sabtu ini'
  	,'next Saturday' => 'Sabtu depan'
  	,'last this_month' => 'akhir bulan ini'
  	,'last next_month' => 'akhir bulan depan'
  ),
  'LNK_IMPORT_NOTES'=>'Impor Catatan',
  'NTC_NONE'=>'Tak Satupun',
	'LBL_ACCEPT_THIS'=>'Terima',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Histori',
);

?>