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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Peluang',
    'LBL_MODULE_TITLE' => 'Peluang: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Peluang',
    'LBL_VIEW_FORM_TITLE' => 'Lihat Peluang',
    'LBL_LIST_FORM_TITLE' => 'Daftar Peluang',
    'LBL_OPPORTUNITY_NAME' => 'Nama Peluang:',
    'LBL_OPPORTUNITY' => 'Peluang:',
    'LBL_NAME' => 'Nama peluang',
    'LBL_INVITEE' => 'Kontak',
    'LBL_CURRENCIES' => 'Mata Uang',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nama',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Account',
    'LBL_LIST_AMOUNT' => 'Jumlah',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Jumlah',
    'LBL_LIST_DATE_CLOSED' => 'Tutup',
    'LBL_LIST_SALES_STAGE' => 'Tahap Penjualan',
    'LBL_ACCOUNT_ID' => 'ID Akun',
    'LBL_CURRENCY_ID' => 'Mata Uang ID',
    'LBL_CURRENCY_NAME' => 'Nama Mata Uang',
    'LBL_CURRENCY_SYMBOL' => 'Simbol Mata Uang',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Peluang Update mata uang',
    'UPDATE_DOLLARAMOUNTS' => 'Update jumlah US Dollar',
    'UPDATE_VERIFY' => 'Verifikasi Jumlah',
    'UPDATE_VERIFY_TXT' => 'Memverifikasi bahwa nilai-nilai dalam jumlah Peluang berlaku adalah angka desimal yang valid dengan karakter angka (0-9) dan desimal (.)',
    'UPDATE_FIX' => 'Fix Amount',
    'UPDATE_FIX_TXT' => 'Upaya untuk memperbaiki jumlah yang tidak valid dengan membuat desimal yang valid dari jumlah saat ini. Setiap jumlah yang diubah dibackup dalam field database amount_backup. Jika Anda menjalankan ini dan menemukan ada bug, jangan jalankan kembali tanpa mengembalikan terlebih dahulu dari backup karena dapat menimpa backup dengan data baru yang tidak valid. ',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Perbaharui jumlah dalam US Dollar untuk Peluang, dengan mata uang yang diset saat ini. Nilai ini digunakan untuk menghitung Grafik dan jumlah dalam List View. ',
    'UPDATE_CREATE_CURRENCY' => 'Membuat Mata Uang Baru:',
    'UPDATE_VERIFY_FAIL' => 'Record Gagal diverifikasi:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Jumlah Sekarang:',
    'UPDATE_VERIFY_FIX' => 'Menjalankan Fix akan memberi',
    'UPDATE_INCLUDE_CLOSE' => 'Sertakan Closed Records',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Jumlah Baru:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Mata Uang Baru:',
    'UPDATE_DONE' => 'Selesai',
    'UPDATE_BUG_COUNT' => 'Bug Ditemukan dan dicoba untk diperbaiki:',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs ditemukan:',
    'UPDATE_COUNT' => 'Records telah Diperbarui:',
    'UPDATE_RESTORE_COUNT' => 'Jumlah Record direstore:',
    'UPDATE_RESTORE' => 'Restore Jumlah',
    'UPDATE_RESTORE_TXT' => 'Mengembalikan nilai jumlah dari backup yang dibuat saat perbaikan.',
    'UPDATE_FAIL' => 'Tidak dapat update',
    'UPDATE_NULL_VALUE' => 'Jumlah adalah NULL mengaturnya menjadi 0 -',
    'UPDATE_MERGE' => 'Merge Mata Uang',
    'UPDATE_MERGE_TXT' => 'Gabung berbagai mata uang ke mata uang tunggal. Jika ada beberapa record mata uang untuk mata uang yang sama, Anda akan menggabungkan mereka bersama-sama. Ini juga akan menggabungkan mata uang untuk semua modul lain. ',
    'LBL_ACCOUNT_NAME' => 'Nama Account:',
    'LBL_AMOUNT' => 'Jumlah:',
    'LBL_AMOUNT_USDOLLAR' => 'Jumlah:',
    'LBL_CURRENCY' => 'Mata Uang:',
    'LBL_DATE_CLOSED' => 'Tanggal Penutupan Perkiraan:',
    'LBL_TYPE' => 'Tipe:',
    'LBL_CAMPAIGN' => 'Kampanye:',
    'LBL_NEXT_STEP' => 'Langkah Berikutnya:',
    'LBL_LEAD_SOURCE' => 'Sumber Lead:',
    'LBL_SALES_STAGE' => 'Tahap Penjualan:',
    'LBL_PROBABILITY' => 'Probabilitas :',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DUPLICATE' => 'Kemungkinan adanya Peluang yang Duplikat',
    'MSG_DUPLICATE' => 'Record Peluang yang akan Anda buat mungkin merupakan duplikat dari record peluang yang sudah ada. Record Peluang berisi nama yang mirip tercantum di bawah ini. Klik Simpan untuk melanjutkan menciptakan Peluang baru ini, atau klik Batal untuk kembali ke modul tanpa menciptakan Peluang. ',
    'LBL_NEW_FORM_TITLE' => 'Buat Peluang',
    'LNK_NEW_OPPORTUNITY' => 'Buat Peluang',
    'LNK_OPPORTUNITY_LIST' => 'Lihat Peluang',
    'ERR_DELETE_RECORD' => 'Nomor record harus ditentukan untuk menghapus Peluang.',
    'LBL_TOP_OPPORTUNITIES' => 'Peluang Utama Saya yang Open',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Apakah anda yakin ingin menghapus kontak dari peluang?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Apakah anda yakin ingin menghapus Peluang ini dari proyek? ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Peluang',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kegiatan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histori',
    'LBL_RAW_AMOUNT' => 'Raw Amount',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumen',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyek',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan ke:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'User yang ditugaskan',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Closed Opportunities Saya',
    'LBL_TOTAL_OPPORTUNITIES' => 'Jumlah Peluang',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Peluang Closed Won',
    'LBL_ASSIGNED_TO_ID' => 'User yang ditugaskan',
    'LBL_CREATED_ID' => 'Dibuat oleh ID',
    'LBL_MODIFIED_ID' => 'Diubah oleh ID',
    'LBL_MODIFIED_NAME' => 'Nama Pengguna diubah oleh',
    'LBL_CREATED_USER' => 'User yang Dibuat',
    'LBL_MODIFIED_USER' => 'User yang Diubah',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanye',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyek',
    'LABEL_PANEL_ASSIGNMENT' => 'Tugas',
    'LNK_IMPORT_OPPORTUNITIES' => 'Impor Peluang',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Kampanye',
    'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_NAME' => 'Nama',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
    'TWITTER_USER_C' => 'Twitter User',
);

?>
