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
'LBL_EDIT_LAYOUT'=>'Edit Layout',
'LBL_EDIT_ROWS'=>'Edit Baris',
'LBL_EDIT_COLUMNS'=>'Edit Kolom',
'LBL_EDIT_LABELS'=>'Edit Label',
'LBL_EDIT_FIELDS'=>'Edit Custom Fields',
'LBL_ADD_FIELDS'=>'Tambah Custom Fields',
'LBL_DISPLAY_HTML'=>'Tampilkan Kode HTML',
'LBL_SELECT_FILE'=> 'Pilih File',
'LBL_SAVE_LAYOUT'=> 'Simpan Layout',
'LBL_SELECT_A_SUBPANEL' => 'Pilih Subpanel',
'LBL_SELECT_SUBPANEL' => 'Pilih Subpanel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Toolbox',
'LBL_STAGING_AREA' => 'Staging Area (Drag dan drop item ke sini)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Gagal Menyimpan',
'LBL_CONFIRM_UNSAVE' => 'Setiap perubahan yang belum disimpan akan Hilang. Apakah Anda yakin ingin melanjutkan? ',
'LBL_PUBLISHING' => 'Dipublish...',
'LBL_PUBLISHED' => 'Telah Dipublish',
'LBL_FAILED_PUBLISHED' => 'Gagal untuk dipublish',
'LBL_DROP_HERE' => '[Drop di sini]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nama',
'LBL_LABEL'=>'Label',
'LBL_MASS_UPDATE'=>'Update Masal',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Nilai Default',
'LBL_REQUIRED'=>'Harus diisi',
'LBL_DATA_TYPE'=>'Tipe',


'LBL_HISTORY'=>'Histori',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'Selamat Datang di Studio! </h2><br> Apa yang ingin Anda lakukan hari ini?<br><b> Silakan pilih dari opsi di bawah.</b>',
'LBL_SW_EDIT_MODULE'=>'Edit Modul',
'LBL_SW_EDIT_DROPDOWNS'=>'Edit Drop Down',
'LBL_SW_EDIT_TABS'=>'Konfigurasi Tabs',
'LBL_SW_RENAME_TABS'=>'Mengubah nama Tabs',
'LBL_SW_EDIT_GROUPTABS'=>'Konfigurasi Grup Tabs',
'LBL_SW_EDIT_PORTAL'=>'Edit Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Edit Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Perbaikan Custom Fields',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrasi Custom Fields',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Selamat Datang di Studio! </h2><br><b>Silakan pilih sebuah modul dari bawah.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Mengedit Modul</h2> Apa yang ingin Anda lakukan dengan modul itu?br><b> Silakan pilih tindakan apa yang ingin Anda ambil.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Edit Custom Fields',
'LBL_SMA_EDIT_LAYOUT'=>'Edit Layout',
'LBL_SMA_EDIT_LABELS' =>'Edit Label',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Preview',
'LBL_MB_RESTORE'=>'Mengembalikan',
'LBL_MB_DELETE'=>'Hapus',
'LBL_MB_COMPARE'=>'Bandingkan',
'LBL_MB_WELCOME'=> '<h2>Histori</h2><br>Histori memungkinkan Anda untuk melihat edisi sebelumnya dari file yang sedang Anda kerjakan. Anda dapat membandingkan dan mengembalikan versi sebelumnya. Jika Anda mengembalikan file tersebut, file itu akan menjadi working file Anda. Anda harus mendeploy file itu sebelum bisa terlihat oleh orang lain.<br> Apa yang ingin Anda lakukan hari ini?<br><b>  Silakan pilih dari opsi di bawah.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Buat Drop Down',
'LBL_ED_WELCOME'=>'<h2>Drop Down Editor</h2><br><b> Anda dapat mengedit yang sudah ada atau membuat drop down yang baru.',
'LBL_DROPDOWN_NAME' => 'Nama Dropdown:',
'LBL_DROPDOWN_LANGUAGE' => 'Bahasa Dropdown:',
'LBL_TABGROUP_LANGUAGE' => 'Bahasa Grup Tab:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Custom Field Editor </h2><br><b>Anda dapat melihat dan mengedit custom field yang ada, buat custom field yang baru atau clear custom field cache.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Lihat Custom Fields',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Buat Bidang Kustom',
'LBL_EC_CLEAR_CACHE'=>'Hapus Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> 'Histori: Silakan pilih file yang ingin Anda lihat.',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Tampilkan Nilai',
'LBL_DD_DATABASEVALUE'=>'Database Nilai',
'LBL_DD_ALL'=>'Semua',

//BUTTONS
'LBL_BTN_SAVE'=>'Simpan',
'LBL_BTN_CANCEL'=>'Batal',
'LBL_BTN_SAVEPUBLISH'=>'Simpan & Sebarkan',
'LBL_BTN_HISTORY'=>'Histori',
'LBL_BTN_NEXT'=>'Selanjutnya',
'LBL_BTN_BACK'=>'Kembali',
'LBL_BTN_ADDCOLS'=>'Tambah Kolom',
'LBL_BTN_ADDROWS'=>'Tambah Baris',
'LBL_BTN_UNDO'=>'Batal',
'LBL_BTN_REDO'=>'Kembalikan',
'LBL_BTN_ADDCUSTOMFIELD'=>'Tambah Bidang Kustom',
'LBL_BTN_TABINDEX'=>'Edit Tabbing Order',

//TABS
'LBL_TAB_SUBTABS'=>'Sub Tabs',
'LBL_MODULES'=>'Modul',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administrasi',
'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurasi Grup tab',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Tab dan grup subtab akan ditampilkan untuk pengguna yang memilih untuk melihat Group Modules pada panel navigasi. Drag and drop modul dari kotak Tab untuk mengubah subtabs yang muncul di bawah tab. Grup tab yang kosong tidak akan ditampilkan pada panel navigasi.',
'LBL_RENAME_TAB_WELCOME'=>'Klik pada setiap Tab\'s Diplay value untuk mengubah nama tab. ',
'LBL_DELETE_MODULE'=>'Hapus&nbsp;Module<br />Dari&nbsp;Grup',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Pilih untuk menampilkan tan "Lainnya" pada panel navigasi. Secara default, tab "Lainnya" akan menampilkan modul-modul yang tidak termasuk ke dalam kelompok lain.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Untuk set label Grup Tab untuk bahasa lainnya yang tersedia, pilih bahasa, edit label dan klik Save & Deploy untuk membuat perubahan bahasa tersebut.',
'LBL_ADD_GROUP'=>'Tambah Grup',
'LBL_NEW_GROUP'=>'Grup Baru',
'LBL_RENAME_TABS'=>'Mengubah nama Tabs',
'LBL_DISPLAY_OTHER_TAB' => 'Tampilkan Tab Lainnya',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Default',
'LBL_ADDITIONAL'=>'tambahan',
'LBL_AVAILABLE'=>'Lainnya',
'LBL_LISTVIEW_DESCRIPTION'=>'Ada tiga kolom ditampilkan di bawah. Kolom default berisi kolom yang ditampilkan dalam List View secara default, kolom tambahan berisi field yang pengguna pilih untuk menampilkan custom view, dan kolom yang tersedia adalah kolom yang tersedia bagi Anda sebagai Admin untuk menambahkan ke default atau ke tambahan.',
'LBL_LISTVIEW_EDIT'=>'Editor List View',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Field Sudah ada',
'ERROR_INVALID_KEY_VALUE'=> "Error: Nilai Tidak Valid: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'SuiteCRM Portal',
'LBL_SMP_WELCOME'=>'Silakan pilih modul yang akan diedit dari daftar di bawah ini',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Portal Sync',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Ada dua kolom di bawah ini: Default adalah yang akan ditampilkan dan Available merupakan field yang belum ditampilkan, namun tersedia untuk ditampilkan. Drag saja field antara dua kolom tersebut. Anda juga dapat menyusun ulang item dalam kolom dengan drag and drog. ',
'LBL_SP_STYLESHEET'=>'Upload Style Sheet',
'LBL_SP_UPLOADSTYLE'=>'Klik pada tombol browse dan pilih sebuah style sheet dari komputer Anda untuk diupload. Untuk selanjutnya jika Anda sync down ke portal, maka akan memiliki style sheet yang disertakan sebelumnya.',
'LBL_SP_UPLOADED'=> 'Telah diupload',
'ERROR_SP_UPLOADED'=>'Harap pastikan bahwa yang Anda upload adalah css style sheet.',
'LBL_SP_PREVIEW'=>'Berikut adalah preview seperti apa style sheet Anda akan terlihat',

	'LBL_SAVE' => 'Simpan [Alt+S]' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Batal' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Kembalikan' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Hapus' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Tambah Field' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Mempublikasi' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Tambah Baris' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Tambah Field' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Edit' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
'LBL_SINGULAR' => 'Singular Label',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
?>