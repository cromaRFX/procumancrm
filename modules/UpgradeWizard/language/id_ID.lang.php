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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Modul berikut telah terinstal:',
	'DESC_MODULES_QUEUED'						=> 'Modul berikut siap di instal:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Tidak dapat menentukan Grup',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Tidak dapat menentukan Pemilik',
	'ERR_UW_CONFIG_WRITE'						=> 'Error mengupdate config.php dengan informasi versi baru.',
	'ERR_UW_CONFIG'								=> 'Silakan membuat file config.php Anda writeable dan reload halaman ini.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Direktori tidak dapat ditulis',
	'ERR_UW_FILE_NOT_COPIED'					=> 'File tidak disalin',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Error menghapus paket ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'File tidak bisa dibaca.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'File tidak dapat dipindahkan atau ditulis ke ',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Flavor:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM System Flavor:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> ',/upgradeWizard.log tidak bisa dibuat/ditulis. Harap Perbaiki hak akses pada direktori SugarCRM Anda. ',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload set ke nilai lebih besar dari 1. Harap ubah ini dalam php.ini dan restart web server. ',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM membutuhkan MySQL Versi 4.1.2 atau yang lebih baru. Yang ditemukan: ',
	'ERR_UW_OCI8_VERSION'				        => 'Your version of Oracle is not supported by SuiteCRM.  You will need to install a version that is compatible with the SuiteCRM application.  Please consult the Compatibility Matrix in the Release Notes for supported Oracle Versions. Current version: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Silakan tentukan file dan coba lagi!',
	'ERR_UW_NO_FILES'							=> 'Terjadi error, tidak ada file yang ditemukan untuk diperiksa.',
	'ERR_UW_NO_MANIFEST'						=> 'Zip file tidak memiliki file manifest.php. Tidak dapat diproses. ',
	'ERR_UW_NO_VIEW'							=> 'Invalid view yang ditentukan.',
	'ERR_UW_NO_VIEW2'							=> 'View tidak didefinisikan. Silakan pergi ke Administration Home untuk menavigasi ke halaman ini. ',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Bukan upload yang valid.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Tidak dapat membuat direktori sementara. Check file permissions.',
	'ERR_UW_ONLY_PATCHES'						=> 'Anda hanya bisa mengupload Patch di halaman ini.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Kesalahan Ditemukan Selama Pemeriksaan Preflight',
	'ERR_UW_UPLOAD_ERR'							=> 'Ada kesalahan saat meng-upload file, silakan coba lagi!<br>\n',
	'ERR_UW_VERSION'							=> 'Versi Sistem SugarCRM:',
	'ERR_UW_WRONG_TYPE'							=> 'Halaman ini bukan untuk menjalankan ',
	'LBL_BUTTON_BACK'							=> 'Kembali',
	'LBL_BUTTON_CANCEL'							=> 'Batal',
	'LBL_BUTTON_DELETE'							=> 'Hapus Paket',
	'LBL_BUTTON_DONE'							=> 'Selesai',
	'LBL_BUTTON_EXIT'							=> 'Impor selesai',
	'LBL_BUTTON_INSTALL'						=> 'Preflight Upgrade',
	'LBL_BUTTON_NEXT'							=> 'Berikutnya',
	'LBL_BUTTON_RECHECK'						=> 'Periksa Kembali',
	'LBL_BUTTON_RESTART'						=> 'Restart',

	'LBL_UPLOAD_UPGRADE'						=> 'Upload sebuah upgrade:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'File Upload tidak ditemukan',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Backup file',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Backup file dari upgrade ini dapat ditemukan dalam',
	'LBL_UW_BACKUP'								=> 'File Backup',
	'LBL_UW_CANCEL_DESC'						=> 'Upgrade Wizard telah dibatalkan. Semua file-file sementara dan file zip yang diupload telah dihapus. <br><br>Tekan "Selesai" untuk me-restart Upgrade Wizard. ',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Skema Perubahan Character Set',
	'LBL_UW_CHECK_ALL'							=> 'Pilih Semua',
	'LBL_UW_CHECKLIST'							=> 'Langkah Upgrade',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backup dari File yang ditimpa ada dalam direktori berikut: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Menggabungkan file-file berikut secara manual: ",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proses Upgrade : Merge File Secara Manual',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Silakan menggunakan metode mana yang familiar bagi Anda untuk menggabungkan file-file ini. Sampai ini selesai, instalasi SugarCRM Anda akan berada dalam keadaan yang tidak tentu, dan upgrade tidak lengkap. ',
	'LBL_UW_COMPLETE'							=> 'Selesai',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'versi SugarCRM ini berisi perjanjian lisensi yang baru. Apakah Anda ingin melanjutkan? ',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Semua requirement pengaturan sistem terpenuhi',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Setting: Call Time Pass by Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Modul cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Modul IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Modul MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parameter MBStrings mbstring.func overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP Setting: Batas Memori',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Setting: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versi MYSQL Minimum',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Database Version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Lokasi dari php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versi Minimum PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Setting PHP: Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Periksa Pengaturan Server',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Pengaturan yang Terdeteksi',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parsing XML',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Support',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE Version',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Penyalinan File Berhasil',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Perubahan Custom Table Schema',

	'LBL_UW_DB_CHOICE1'							=> 'Upgrade Wizard Menjalankan SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Manual SQL Queries',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT gagal - hasil yang dibandingkan berbeda',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Hak Akses Database',
	'LBL_UW_DB_ISSUES'							=> 'Database Issues',
	'LBL_UW_DB_METHOD'							=> 'Metode Update Database',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABEL [table] TAMBAH KOLOM [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABEL [table] Ganti KOLOM [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'BUAT TABEL [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'HAPUS DARI [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABEL [table] DROP KOLOM [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABEL [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Semua Hak Akses Tersedia',
	'LBL_UW_DB_NO_INSERT'						=> 'MASUKKAN KE [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'PILIH [x] DARI [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Hak Akses Diperlukan',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Upgrade berikut telah terinstal:',
	'LBL_UW_END_DESC'							=> 'Selamat, sekarang sistem anda telah diupgrade.',
	'LBL_UW_END_DESC2'							=> 'Jika anda telah memilih untuk menjalankan langkah-langkah secara manual seperti penggabungan file atau SQL queries, silakan lakukan sekarang ini. Sistem anda akan berada dalam keadaan yang tidak stabil sampai langkah-langkah tersebut selesai. ',
	'LBL_UW_END_LOGOUT_PRE'						=> 'The upgrade is complete.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Click Done to exit the Upgrade Wizard.',
	'LBL_UW_END_LOGOUT'							=> 'Silakan log out dari account Anda jika Anda berencana untuk upgrade lebih dari sekedar tingkat patch/upgrade.',
	'LBL_UW_END_LOGOUT2'						=> 'Keluar',
	'LBL_UW_REPAIR_INDEX'						=> 'Untuk peningkatan kinerja database, silahkan jalankan script <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a>',

	'LBL_UW_FILE_DELETED'						=> "telah dihapus.",
	'LBL_UW_FILE_GROUP'							=> 'Grup',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'File Permissions',
	'LBL_UW_FILE_ISSUES'						=> 'Issue pada File',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'File memerlukan Diff manual',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Semua File dapat ditulis</b>',
	'LBL_UW_FILE_OWNER'							=> 'Pemilik',
	'LBL_UW_FILE_PERMS'							=> 'Permissions',
	'LBL_UW_FILE_UPLOADED'						=> 'telah diupload',
	'LBL_UW_FILE'								=> 'Nama File',
	'LBL_UW_FILES_QUEUED'						=> 'Upgrade berikut siap untuk diinstal',
	'LBL_UW_FILES_REMOVED'						=> "File berikut ini akan dihapus dari sistem:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Click Next to upload upgrade packages.</b>",
	'LBL_UW_FROZEN'								=> 'Langkah-langkah yang disyaratkan harus diselesaikan sebelum melanjutkan.',
	'LBL_UW_HIDE_DETAILS'						=> 'Sembunyikan Detil',
	'LBL_UW_IN_PROGRESS'						=> 'Dalam Penyelesaian',
	'LBL_UW_INCLUDING'							=> 'Termasuk',
	'LBL_UW_INCOMPLETE'							=> 'lengkap',
	'LBL_UW_INSTALL'							=> 'File INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'File Merge',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modul siap untuk diuninstall. Klik Komit untuk melanjutkan dengan instalasi.",
	'LBL_UW_MODULE_READY'						=> "Modul sudah siap untuk diinstal. Klik \"Commit\" untuk melanjutkan instalasi.<br>\n",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Tidak ada record Upgrade terdeteksi.',
	'LBL_UW_NONE'								=> 'Tidak ada',
	'LBL_UW_NOT_AVAILABLE'						=> 'Tidak tersedia',
	'LBL_UW_OVERWRITE_DESC'						=> "Semua file yang berubah akan ditimpa, termasuk kode kustomisasi dan perubahan template yang telah Anda buat. Apakah Anda yakin ingin melanjutkan?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Overwrite Semua File',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Merge secara manual - Pertahankan Semua',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metode Merge',
	'LBL_UW_PATCH_READY'						=> 'Patch sudah siap untuk diproses. Klik button "Commit" di bawah ini untuk menyelesaikan proses upgrade.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Pemberitahuan: Customized Layouts Ditemukan</h2><br />File berikut memiliki field baru atau diubah layoutnya melalui Studio. Patch yang akan Anda instal juga berisi perubahan ke file tersebut. Untuk <u>setiap file </u>Anda dapat : <br><ul><li>[<b>Default</b>] Menyimpan versi Anda dengan meninggalkan kotak centang kosong. Modifikasi patch akan diabaikan. </li>or<li>Menerima file yang diperbarui dengan memilih kotak centang. Layout Anda perlu kembali diatur kembali melalui Studio. </li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Buat Tugas untuk Manual Merge?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Periksa Preflight',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Dibedakan',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Email diri sendiri sebuah reminder untuk Manual Merge?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'File yang tercantum di bawah ini telah diubah. Hapus kotak centang yang memerlukan manual merge. <i>Setiap perubahan layout yang terdeteksi secara otomatis tidak dicentang; ubah setiap yang perlu diganti. ',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Tidak diperlukan Manual File Merge.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Tidak diperlukan.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-preserved Files:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Semua tes Preflight telah berhasil. Tekan "Next" untuk melakukan perubahan ini. ',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Click Next to copy the upgraded files to the system.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Note: </b> The rest of the upgrade process is mandatory, and clicking Next will require you to complete the process. If you do not wish to proceed, click the Cancel button.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Toggle Semua File',

	'LBL_UW_REBUILD_TITLE'						=> 'Hasil Rebuild',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Skema Perubahan',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Tampilkan Pengaturan yang Terdeteksi',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Tampilkan Database Permissions yang hilang',
	'LBL_UW_SHOW_DETAILS'						=> 'Tampilkan Detil',
	'LBL_UW_SHOW_DIFFS'							=> 'Tampilkan File yang membutuhkan manual merge',
	'LBL_UW_SHOW_NW_FILES'						=> 'Tampilkan File dengan Bad Permissions',
	'LBL_UW_SHOW_SCHEMA'						=> 'Tampilkan script perubahan Schema',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Tampilkan Queries yang salah',
	'LBL_UW_SHOW'								=> 'Tampilkan',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'File yang Dilewati',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Skipping overwrite File - Manual Merge telah dipilih',
	'LBL_UW_SQL_RUN'							=> 'Periksa saat SQL dijalankan secara manual',
	'LBL_UW_START_DESC'							=> 'Selamat datang di SugarCRM Upgrade Wizard. Wizard ini dirancang untuk membantu administrator ketika meng-upgrade SugarCRM mereka. Silahkan ikuti petunjuk dengan seksama.',
	'LBL_UW_START_DESC2'						=> 'Kami sangat menyarankan Anda melakukan upgrade pada salinan Production Server Anda terlebih dahulu. Silakan backup database dan sistem file (semua file dalam folder SugarCRM) sebelum melakukan operasi ini. ',
	'LBL_UW_START_DESC3'						=> 'Click Next to perform a check on your system to make sure that the system is ready for the upgrade. The check includes file permissions, database privileges and server settings.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'New Upgrade Wizard sekarang akan melanjutkan proses upgrade. Silakan lanjutkan upgrade Anda.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Selamat datang di New Upgrade Wizard',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Sedang memeriksa, silakan tunggu. Ini dapat berlangsung hingga 30 detik. ',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Mencari semua file terkait untuk diperiksa.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Files',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Ditemukan',

	'LBL_UW_TITLE_CANCEL'						=> 'Batal',
	'LBL_UW_TITLE_COMMIT'						=> 'Commit Upgrade',
	'LBL_UW_TITLE_END'							=> 'Debried',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Periksa Preflight',
	'LBL_UW_TITLE_START'						=> 'Mulai',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Cek Sistem',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upload Package',
	'LBL_UW_TITLE'								=> 'Upgrade Wizard',
	'LBL_UW_UNINSTALL'							=> 'Hapus',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Terima Lisensi',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Konversi Lisensi',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Upgrade/ Customized Modul',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Modul berikut terdeteksi sudah dicustomized dan dipreserved',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Modul berikut terdeteksi telah diubai di Studio dan telah diupgrade',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'SugarCRM Community Edition 5,0 menggunakan GNU Affero General Public License Version 3. Upgrade ini akan mengkonversi lisensi untuk Anda yang sudah ada dengan lisensi baru yang ditampilkan di bawah ini. ',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Start sedang dalam proses',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'System Check sedang dalam proses',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Pemeriksaan Lisensi sedang dalam proses',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Cek Preflight sedang dalam proses',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'File Copying in Progress',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade sedang dalam proses',
    'LBL_UW_COMMIT_DESC'						=> 'Click Next to run additional upgrade scripts.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Upgrade Scripts in Progress',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Ringkasan Upgrade sedang dalam proses',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'sedang dalam proses',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Waktu berlalu',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Batalkan Upgrade dan Cleanup sedang dalam proses',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Upgrade mungkin memakan waktu',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Cek Upload sedang dalam proses',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Meng-upload paket upgrade',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Apakah anda ingin SugarCRM untuk menghapus depricated 451 Schema?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard menghapus skema 451 yang lama',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Hapus Manual Skema Setelah Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metode hapus skema yang lama',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Tampilkan Skema lama yang bisa dihapus',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Query yang dilewatkan',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php versi 5 atau lebih atas diperlukan.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Versi PHP Anda tidak didukung oleh SugarCRM. Anda akan perlu untuk menginstal sebuah versi yang kompatibel dengan aplikasi SugarCRM. Silahkan lihat Kompatibilitas Matriks di catatan Release Versi PHP yang didukung versi ini',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Mode Backward Compatibility diaktifkan. Set zend.ze1_compatibility_mode ke Tidak aktif untuk meneruskan lebih lanjut ',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Tindakan',
    'LBL_ML_CANCEL'             => 'Batal',
    'LBL_ML_COMMIT'=>'Commit',
    'LBL_ML_DESCRIPTION' => 'Deskripsi',
    'LBL_ML_INSTALLED' => 'Tanggal Diinstall',
    'LBL_ML_NAME' => 'Nama',
    'LBL_ML_PUBLISHED' => 'Tanggal Ditampilkan',
    'LBL_ML_TYPE' => 'Tipe',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Versi',
	'LBL_ML_INSTALL'=>'Memasang',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(Versi PHP Anda saat ini ',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Versi PHP yang direkomendasikan adalah versi 5.2.1 atau lebih baru)',
	'LBL_MODULE_NAME' => 'UpgradeWizard',
	'LBL_UPLOAD_SUCCESS' => 'Upgrade package successfully uploaded. Click Next to perform a final check.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirm Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts.  To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Click Next to confirm changes and to finish the upgrade.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Click Next to complete the upgrade.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirm Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirm Layout Results',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'The following layouts were merged successfully:',
	'LBL_SELECT_FILE' => 'Select File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'File upload tidak kompatibel dengan versi SugarCRM: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'File upload tidak kompatibel dengan rasa (Community Edition, Professional, atau Enterprise) SugarCRM:',
	'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Modul Loader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Tema' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'File yang di-upload melebihi ketentuan upload_max_filesize di php.ini.',
													2 => 'File yang di-upload melebihi MAX_FILE_SIZE perintah yang ditugaskan dalam bentuk HTML.',
													3 => 'File yang di upload hanya sebagian berhasil diupload.',
													4 => 'Tidak ada file yang diupload.',
													5 => 'Error yang tidak diketahui.',
													6 => 'Folder sementara tidak ada.',
													7 => 'Gagal untuk menulis file ke disk.',
													8 => 'File upload dihentikan oleh ekstensi.',
),
);
