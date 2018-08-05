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
  'LBL_MODULE_NAME' => 'Penjualan',
  'LBL_MODULE_TITLE' => 'Penjualan: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cari Penjualan',
  'LBL_VIEW_FORM_TITLE' => 'Lihat Penjualan',
  'LBL_LIST_FORM_TITLE' => 'Daftar Penjualan',
  'LBL_SALE_NAME' => 'Nama Penjualan:',
  'LBL_SALE' => 'Penjualan:',
  'LBL_NAME' => 'Nama Penjualan',
  'LBL_LIST_SALE_NAME' => 'Nama',
  'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
  'LBL_LIST_AMOUNT' => 'Jumlah',
  'LBL_LIST_DATE_CLOSED' => 'Tutup',
  'LBL_LIST_SALE_STAGE' => 'Tahapan Penjualan',
  'LBL_ACCOUNT_ID'=>'ID Akun',
   'LBL_CURRENCY_ID'=>'ID Mata uang',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Penjualan - Update Mata Uang',
  'UPDATE_DOLLARAMOUNTS' => 'Update Jumlah dalam U.S. Dollar',
  'UPDATE_VERIFY' => 'Verifikasi Jumlah',
  'UPDATE_VERIFY_TXT' => 'Verifikasi bahwa nilai jumlah dalam penjualan adalah angka desimal yang valid dengan karakter numerik 0-9 dan decimal.',
  'UPDATE_FIX' => 'Betulkan Jumlah',
  'UPDATE_FIX_TXT' => 'Upaya untuk membetulkan jumlah yang tidak valid dengan membuat nilai yang valid dari jumlah saat ini. Jumlah yang diubah dibackup ke dalam field amount_backup di database. Jika Anda menjalankan ini dan menemukan adanya bug,jangan mengulang proses ini tanpa melakukan restore dari backup karena bisa menyebabkan data backup ditulis ulang dengan data baru yang tidak valid.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Perbaharui jumlah US Dollar untuk penjualan berdasarkan nilai mata uang saat ini. Nilai ini akan digunakan untuk kalkulasi grafik dan List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Membuat Mata Uang Baru:',
  'UPDATE_VERIFY_FAIL' => 'Record Gagal Diverifikasi:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Jumlah saat ini:',
  'UPDATE_VERIFY_FIX' => 'Koreksi akan ',
  'UPDATE_INCLUDE_CLOSE' => 'Mengikutsertakan Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Jumlah Baru:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Mata Uang Baru:',
  'UPDATE_DONE' => 'Selesai',
  'UPDATE_BUG_COUNT' => 'Bugs ditemukan dan sedang dipecahkan:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs yang ditemukan:',
  'UPDATE_COUNT' => 'Record ter-update:',
  'UPDATE_RESTORE_COUNT' => 'Jumlah Record yang di-restore:',
  'UPDATE_RESTORE' => 'Jumlah yang di-restore',
  'UPDATE_RESTORE_TXT' => 'Restore jumlah dari backup yang dibuat saat melakukan perbaikan.',
  'UPDATE_FAIL' => 'Tidak bisa update - ',
  'UPDATE_NULL_VALUE' => 'Jumlahnya NULL, buat menjadi 0 -',
  'UPDATE_MERGE' => 'Menggabungkan Mata Uang',
  'UPDATE_MERGE_TXT' => 'Gabungkan beberapa mata uang menjadi satu mata uang. Jika ada beberapa record mata uang untuk mata uang yang sama, Anda akan menggabungkan semuanya. Ini juga akan menggabungkan mata uang untuk semua modul.',
  'LBL_ACCOUNT_NAME' => 'Nama Account:',
  'LBL_AMOUNT' => 'Jumlah:',
  'LBL_AMOUNT_USDOLLAR' => 'Jumlah USD:',
  'LBL_CURRENCY' => 'Mata Uang:',
  'LBL_DATE_CLOSED' => 'Close Date yang Diharapkan:',
  'LBL_TYPE' => 'Tipe:',
  'LBL_CAMPAIGN' => 'Kampanye:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyek',  
  'LBL_NEXT_STEP' => 'Tahap Selanjutnya:',
  'LBL_LEAD_SOURCE' => 'Sumber Lead:',
  'LBL_SALES_STAGE' => 'Tahap penjualan:',
  'LBL_PROBABILITY' => 'Peluang (%):',
  'LBL_DESCRIPTION' => 'Deskripsi:',
  'LBL_DUPLICATE' => 'Duplikasi penjualan yang mungkin',
  'MSG_DUPLICATE' => 'Record penjualan yang akan dibuat sepertinya memiliki duplikat, record penjualan yang serupa sudah ada.Record penjualan yang memiliki nama yang sama ditampilkan di bawah. <br>Klik Save untuk melanjutkan membuat penjualan yang baru atau klik Cancel untuk kembali ke module sebelumnya tanpa membuat penjualan. ',
  'LBL_NEW_FORM_TITLE' => 'Buat Penjualan',
  'LNK_NEW_SALE' => 'Buat Penjualan',
  'LNK_SALE_LIST' => 'Penjualan',
  'ERR_DELETE_RECORD' => 'No Record harus dipilih untuk menghapus penjualan.',
  'LBL_TOP_SALES' => 'Top Open Sale Saya',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Anda yaking ingin menghapus kontak ini dari penjualan?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Anda yakin ingin menghapus kontak ini dari proyek?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Penjualan',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktivitas',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Riwayat',
    'LBL_RAW_AMOUNT'=>'Raw Amount',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
	'LBL_ASSIGNED_TO_NAME' => 'Pengguna:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Pengguna yang di-assign',
  'LBL_MY_CLOSED_SALES' => 'Daftar Penjualan yang telah ditutup',
  'LBL_TOTAL_SALES' => 'Total Penjualan',
  'LBL_CLOSED_WON_SALES' => 'Penjualan yang menang dan telah ditutup',
  'LBL_ASSIGNED_TO_ID' =>'Tugaskan kepada ID',
  'LBL_CREATED_ID'=>'Dibuat oleh ID',
  'LBL_MODIFIED_ID'=>'diubah oleh ID',
  'LBL_MODIFIED_NAME'=>'Nama yang memodifikasi',
  'LBL_SALE_INFORMATION'=>'Informasi Penjualan',
  'LBL_CURRENCY_NAME'=>'Nama Mata Uang',
  'LBL_CURRENCY_SYMBOL'=>'Simbol Mata Uang',
  'LBL_EDIT_BUTTON' => 'Edit',
   'LBL_REMOVE' => 'Menghapus',


);

?>
