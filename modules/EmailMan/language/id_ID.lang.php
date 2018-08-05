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
	'LBL_SEND_DATE_TIME'						=> 'Kirim Tanggal',
	'LBL_IN_QUEUE'								=> 'Dalam Proses',
	'LBL_IN_QUEUE_DATE'							=> 'Tanggal Antri',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Gunakan hanya nilai integer untuk menentukan jumlah email yang dikirim per batch',

	'LBL_ATTACHMENT_AUDIT'						=> 'sudah dikirim. Tidak digandakan secara lokal untuk menghemat penggunaan disk.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigurasi Pengaturan Email',
	'LBL_CUSTOM_LOCATION'						=> 'User yang ditugaskan',
	'LBL_DEFAULT_LOCATION'						=> 'Default',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Tambahkan Disclosure Message ke Setiap Email',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Disclosure Contents',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'PEMBERITAHUAN: email ini adalah khusus untuk penggunaan penerima pesan yang dituju dan mungkin berisi informasi yang rahasia dan informasi pribadi. Review, penggunaan, disclosure, atau distribusi tanpa ijin adalah dilarang. Jika Anda bukan penerima yang dimaksud, silakan menghancurkan semua salinan pesan asli dan memberitahu pengirim sehingga catatan alamat kami dapat diperbaiki. Terima kasih. ',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Tulis pesan email di set karakter ini',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Tulis email dengan menggunakan klien ini',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Hapus catatan & Attachment terkait dengan Emails',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Isi dengan Gmail Default',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Jumlah email yang dikirim per batch:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Aktifkan SMTP atas SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Email Pengguna Default',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Outgoing Mail Configuration',
	'LBL_EMAILS_PER_RUN'						=> 'Jumlah email yang dikirim per batch:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanye',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Diproses',
	'LBL_LIST_FORM_TITLE'						=> 'Antrian',
	'LBL_LIST_FROM_EMAIL'						=> 'Dari Email',
	'LBL_LIST_FROM_NAME'						=> 'Dari Nama',
	'LBL_LIST_IN_QUEUE'							=> 'Dalam Proses',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing MEssage',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Email Penerima',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nama Penerima',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Upaya Pengiriman',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Dikirim pada',
	'LBL_LIST_USER_NAME'						=> 'Nama Pengguna',
	'LBL_LOCATION_ONLY'							=> 'Lokasi',
	'LBL_LOCATION_TRACK'						=> 'Location of campaign tracking files (like campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Simpan salinan pesan kampanye:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Apakah Anda ingin menyimpan salinan lengkap <bold>SETIAP </bold>pesan email yang dikirim saat kampanye? Kami merekomendasikan untuk Tidak memilih hanya akan menyimpan template yang dikirimkan dan variabel yang diperlukan untuk menciptakan kembali pesan individu.',
	'LBL_MAIL_SENDTYPE'							=> 'Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Gunakan Otentikasi SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Password SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP :',
	'LBL_MAIL_SMTPSERVER'						=> 'Server SMTP :',
	'LBL_MAIL_SMTPUSER'							=> 'Username SMTP :',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Pilih Penyedia Email Anda',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Password Yahoo! Mail',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID Yahoo! Mail',
	'LBL_GMAIL_SMTPPASS'					=> 'Password Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Alamat Email Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Password Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Username Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Port Server Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Server Exchange',
	'LBL_EMAIL_LINK_TYPE'				=> 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'ID Pemasaran',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Pengaturan Email',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurasi Pengaturan Kampanye Email',
	'LBL_MODULE_TITLE'							=> 'Pengaturan Antrian Outbound Email',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Saat diaktifkan, email dikirim ke user ketika record ditugaskan kepada mereka. ',
	'LBL_NOTIFY_FROMADDRESS' 					=> ' "Dari" Alamat:',
	'LBL_NOTIFY_FROMNAME' 						=> ' "Dari" Nama:',
	'LBL_NOTIFY_ON'								=> 'Pemberitahuan Penugasan',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Kirim pemberitahuan untuk pengguna baru?',
	'LBL_NOTIFY_TITLE'							=> 'Pilihan Email',
	'LBL_OLD_ID'								=> 'ID yang lama',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Pilihan Outbound Email',
	'LBL_RELATED_ID'							=> 'ID Terkait',
	'LBL_RELATED_TYPE'							=> 'Tipe Terkait',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Simpang Outbound Raw Email',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Pencarian yang diproses',
	'LBL_SEARCH_FORM_TITLE'						=> 'Antrian Pencarian',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Lihat Email yang diproses',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Lihat Antrian Email',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Nilai dari Config.php setting site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Untuk menghapus diri sendiri dari daftar email ini pergi ke',
	'TXT_REMOVE_ME_CLICK'						=> 'Klik di sini',
	'TXT_REMOVE_ME'								=> 'Untuk menghapus diri sendiri dari daftar email ini',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Kirim pemberitahuan dari alamat email pengguna yang ditugaskan?',

	'LBL_SECURITY_TITLE'						=> 'Email Pengaturan Keamanan',
	'LBL_SECURITY_DESC'							=> 'Periksa yang berikut ini harus TIDAK diperbolehkan melalui Inbound Email atau ditampilkan dalam modul Email.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base Tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Form tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Select Outlook default minimum security settings (errs on the side of correct display).',
	'LBL_SECURITY_SCRIPT'						=> 'Script Tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Toggle Semua Pilihan',
	'LBL_SECURITY_XMP'							=> 'XMP tag',
    'LBL_YES'                                   => 'Ya',
    'LBL_NO'                                    => 'Tidak',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Upaya Pengiriman',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurasi default outgoing mail server untuk mengirimkan email pemberitahuan, termasuk alert workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Ijinkan Pengguna untuk memakai account ini untuk Outgoing Email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Jika opsi ini dipilih, semua user bisa mengirim email menggunakan outgoing mail yang sama dengan mail account yang digunakan untuk mengirimkan notifikasi sistem dan alert. Jika opsi ini tidak dipilih make user masih bisa menggunakan outgoing mail server dengan menyediakan informasi account mereka.',
    'LBL_FROM_ADDRESS_HELP'                     => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Membantu' /*for 508 compliance fix*/,
);

?>