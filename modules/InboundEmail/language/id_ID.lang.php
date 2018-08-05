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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(


	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Login atau Password Salah',
	'ERR_BODY_TOO_LONG'		=> 'Body teks terlalu panjang untuk mendapat FULL email. Dipotong. ',
	'ERR_INI_ZLIB'			=> 'Tidak dapat mematikan sementara kompresi zlib. "Test Settings" mungkin gagal. ',
	'ERR_MAILBOX_FAIL'		=> 'Tidak dapat mengambil semua mail account.',
	'ERR_NO_IMAP'			=> 'Tidak ada IMAP Library ditemukan. Silakan menyelesaikan ini sebelum melanjutkan dengan Inbound Email ',
	'ERR_NO_OPTS_SAVED'		=> 'Tidak ada optimums diselamatkan dengan Inbound Email account Anda. Harap periksa pengaturan ',
	'ERR_TEST_MAILBOX'		=> 'Silakan periksa pengaturan Anda dan coba lagi.',

	'LBL_APPLY_OPTIMUMS'	=> 'Terapkan Optimums',
	'LBL_ASSIGN_TO_USER'	=> 'Tugaskan Untuk User',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Pilihan Auto-Reply',
	'LBL_AUTOREPLY'			=> 'Template Auto-Reply',
	'LBL_AUTOREPLY_HELP'	=> 'Select an automated response to notify email senders that their response has been received.',
	'LBL_BASIC'				=> 'Basic Setup',
	'LBL_CASE_MACRO'		=> 'Macro Kasus',
	'LBL_CASE_MACRO_DESC'	=> 'Atur macro yang akan dapat di-parse dan digunakan untuk menghubungkan email yang diimpor Case.',
	'LBL_CASE_MACRO_DESC2'	=> 'Set ini ke nilai apapun, tapi tetap pertahankan <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Paksakan validasi dari mail server\'s Security Certificate - jangan gunakan jika self-signing. ',
	'LBL_CERT'				=> 'Validasi Sertifikat',
	'LBL_CLOSE_POPUP'		=> 'Tutup Window',
	'LBL_CREATE_NEW_GROUP'	=> 'Buat Grup Saat menyimpan',
	'LBL_CREATE_TEMPLATE'	=> 'Buat',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Subscribe Folder',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Default:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Default:',
	'LBL_DELETE_SEEN'		=> 'Hapus Email yang sudah dibaca Setelah Impor',
	'LBL_EDIT_TEMPLATE'		=> 'Edit',
	'LBL_EMAIL_OPTIONS'		=> 'Pilihan Pengaturan Email',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce Handling Options',
	'LBL_FILTER_DOMAIN_DESC'=> 'Jangan mengirim balasan otomatis ke domain ini.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Untuk pilihan Buat Kasus, sebuah Group Folder harus dipilih',
	'LBL_FILTER_DOMAIN'		=> 'Tidak ada auto-reply untuk domain ini',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Mencari variabel koneksi yang optimal.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Cari Konfigurasi Optimum',
	'LBL_FIND_SSL_WARN'		=> 'Pengujian SSL mungkin memerlukan waktu lama. Harap bersabar. ',
	'LBL_FORCE_DESC'		=> 'Beberapa server IMAP/POP3 memerlukan switch khusus. Check untuk memaksa negative switch ketika melakukan koneksi (i.e., /notls)',
	'LBL_FORCE'				=> 'Force Negatif',
	'LBL_FOUND_MAILBOXES'	=> 'Ditemukan beberapa folder yang bisa digunakan. Klik untuk memilih salah satu :',
	'LBL_FOUND_OPTIMUM_MSG'	=> 'Menemukan pengaturan optimal. Tekan tombol di bawah ini untuk menerapkannya pada account email Anda. ',
	'LBL_FROM_ADDR'			=> ' "Dari" Alamat',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.",
	'LBL_FROM_NAME_ADDR'	=> 'Dari Nama / Email',
	'LBL_FROM_NAME'			=> ' "Dari" Nama',
	'LBL_GROUP_QUEUE'		=> 'Tetapkan Untuk Grup',
    'LBL_HOME'              => 'Halaman utama',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Pemakaian Mail Account',
	'LBL_LIST_NAME'			=> 'Nama:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Group / Personal',
	'LBL_LIST_SERVER_URL'	=> 'Mail Server:',
	'LBL_LIST_STATUS'		=> 'Status',
	'LBL_LOGIN'				=> 'Nama Pengguna',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Gunakan SSL saat menghubungkan. Jika ini tidak berhasil, periksa apakah instalasi PHP Anda memiliki "--with-imap-ssl" dalam konfigurasi. ',
	'LBL_MAILBOX_SSL'		=> 'Menggunakan SSL',
	'LBL_MAILBOX_TYPE'		=> 'Kemungkinan Tindakan',
	'LBL_DISTRIBUTION_METHOD' => 'Metode Distribusi',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Buat Template Auto Reply untuk Kasus',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting.  This response is only sent when the first email is received from the recipient.',
	'LBL_MAILBOX'			=> 'Folder yang Dimonitor',
	'LBL_TRASH_FOLDER'		=> 'Folder Trash',
	'LBL_GET_TRASH_FOLDER'	=> 'Dapatkan Trash Folder',
	'LBL_SENT_FOLDER'		=> 'Folder terkirim',
	'LBL_GET_SENT_FOLDER'	=> 'Dapatkan Folder terkirim',
	'LBL_SELECT'				=> 'Pilih',
	'LBL_MARK_READ_DESC'	=> 'Tandai pesan membaca mail server pada impor, jangan hapus.',
	'LBL_MARK_READ_NO'		=> 'Email ditandai dihapus setelah impor',
	'LBL_MARK_READ_YES'		=> 'Email ditinggalkan di server setelah impor',
	'LBL_MARK_READ'			=> 'Tinggalkan Pesan Pada Server',
	'LBL_MAX_AUTO_REPLIES'	=> 'Jumlah tanggapan otomatis',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Set jumlah maksimal tanggapan otomatis untuk mengirim ke alamat email yang unik selama periode 24 jam.',
	'LBL_PERSONAL_MODULE_NAME' => 'Personal Mail Account',
	'LBL_CREATE_CASE'      => 'Create Case from Email',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Inbound Email Setup',
	'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling Mailbox',
	'LBL_MODULE_TITLE'		=> 'Email Masuk',
	'LBL_NAME'				=> 'Nama',
    'LBL_NONE'              => 'Tidak ada',
	'LBL_NO_OPTIMUMS'		=> 'Tidak dapat menemukan optimums. Silakan cek pengaturan anda dan coba lagi. ',
	'LBL_ONLY_SINCE_DESC'	=> 'Ketika menggunakan POP3, PHP tidak dapat filter untuk pesan yang baru/belum dibaca. Flag ini memungkinkan permintaan untuk memeriksa pesan sejak waktu terakhir dikumpulkan. Ini akan secara signifikan meningkatkan performa jika mail server anda tidak mendukung IMAP. ',
	'LBL_ONLY_SINCE_NO'		=> 'No Periksa terhadap semua email di server mail. ',
	'LBL_ONLY_SINCE_YES'	=> 'Ya.',
	'LBL_ONLY_SINCE'		=> 'Impor Hanya Sejak Terakhir Periksa:',
	'LBL_OUTBOUND_SERVER'	=> 'Outgoing Mail Server',
	'LBL_PASSWORD_CHECK'	=> 'PeriksaPassword',
	'LBL_PASSWORD'			=> 'Password',
	'LBL_POP3_SUCCESS'		=> 'Uji koneksi POP3 berhasil.',
	'LBL_POPUP_FAILURE'		=> 'Tes koneksi gagal. Kesalahan ditunjukkan di bawah ini. ',
	'LBL_POPUP_SUCCESS'		=> 'Tes koneksi berhasil. Pengaturan Anda bekerja. ',
	'LBL_POPUP_TITLE'		=> 'Tes Pengaturan',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Mendapatkan daftar Folder',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Pilih Langganan Folder',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Pilih Trash Folder',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Pilih Sent Folder',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Folder berikut tidak ada atau telah dihapus dari server',
	'LBL_PORT'				=> 'Port Mail Server',
	'LBL_QUEUE'				=> 'Antrian Mail Account',
	'LBL_REPLY_NAME_ADDR'	=> 'Nama/Email balasan',
	'LBL_REPLY_TO_NAME'		=> '\\"Balas-ke\\" Nama',
	'LBL_REPLY_TO_ADDR'		=> '\\"Balas-ke\\" Alamat',
	'LBL_SAME_AS_ABOVE'		=> 'Menggunakan Dari Nama/Alamat',
	'LBL_SAVE_RAW'			=> 'Simpan Raw Source',
	'LBL_SAVE_RAW_DESC_1'	=> 'Pilih \\"Ya\\" jika Anda ingin menyimpan raw source untuk setiap email yang diimpor.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Attachment yang besar dapat menyebabkan kegagalan dengan database jenis lama atau yang salah konfigurasi.',
	'LBL_SERVER_OPTIONS'	=> 'Pengaturan Lanjutan',
	'LBL_SERVER_TYPE'		=> 'Protokol Mail Server',
	'LBL_SERVER_URL'		=> 'Alamat Mail Server',
	'LBL_SSL_DESC'			=> 'Jika mail server anda mendukung secure socket connection, aktifkan iji akan memaksa koneksi SSL ketika mengimpor email.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Tim yang dipilih memiliki akses ke Mail Account.',
	'LBL_SSL'				=> 'Menggunakan SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Sistem Default',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Tes [Alt + T]',
	'LBL_TEST_SETTINGS'		=> 'Tes Pengaturan',
	'LBL_TEST_SUCCESSFUL'	=> 'Koneksi berhasil diselesaikan.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Mohon tunggu...',
	'LBL_TLS_DESC'			=> 'Gunakan Transport Layer Security saat menghubungkan ke mail server - gunakan ini hanya jika mail server anda mendukung protokol ini.',
	'LBL_TLS'				=> 'Gunakan TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Inbound Email Tidak Aktif',
	'LBL_WARN_IMAP'			=> 'Peringatan:',
	'LBL_WARN_NO_IMAP'		=> 'Inbound Email tidak bisa berfungsi tanpa library IMAP c-client diaktifkan/dicompile dengan modul PHP. Silakan hubungi administrator Anda untuk mengatasi masalah ini. ',

	'LNK_CREATE_GROUP'		=> 'Buat Grup Baru',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Group Mail Account Baru',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Account',
	'LNK_LIST_MAILBOXES'	=> 'Semua Mail Account',
	'LNK_LIST_QUEUES'		=> 'Semua antrian',
	'LNK_LIST_SCHEDULER'	=> 'Penjadwalan',
	'LNK_LIST_TEST_IMPORT'	=> 'Tes Impor Email',
	'LNK_NEW_QUEUES'		=> 'Buat Antrian Baru',
	'LNK_SEED_QUEUES'		=> 'Benih antrian Dari Tim',
	'LBL_GROUPFOLDER_ID'	=> 'Grup Folder Id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Tugaskan Untuk Group Folder',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Allow users to send emails using the "From" Name and Address as the reply to address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE'     => 'Aktif',
    'LBL_STATUS_INACTIVE'   => 'Nonaktif',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'Grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Impor Email secara otomatis',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Peringatan: Anda mengubah pengaturan otomasi import yang bisa menyebabkan kehilangan data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Peringatan: Auto import harus diaktifkan jika ingin membuat case secara otomatis.',
	'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
?>
