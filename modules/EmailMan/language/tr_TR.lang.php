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
	'LBL_SEND_DATE_TIME'						=> 'Gönderim Tarihi',
	'LBL_IN_QUEUE'								=> 'İşleniyor',
	'LBL_IN_QUEUE_DATE'							=> 'Kuyruk Tarihi',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Her partide gönderilecek E-Posta sayısını belirtmek için yalnızca sayısal değer belirtiniz',

	'LBL_ATTACHMENT_AUDIT'						=> 'gönderildi. Makinanızda daha fazla disk alanı kaplamaması için bir kopyası oluşturulmaz.',
	'LBL_CONFIGURE_SETTINGS'					=> 'E-Posta Ayarlarını Yapılandır',
	'LBL_CUSTOM_LOCATION'						=> 'Kullanıcı Tarafından Tanımlı',
	'LBL_DEFAULT_LOCATION'						=> 'Varsayılan',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Açıklamayı Her E-Posta mesajına ekle',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Açıklama İçeriği',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'UYARI: Bu E-Posta mesajı, yalnızca gönderilen(ler) için olup gizli ve özel bilgi içerebilir. Herhangi bir yetkisiz inceleme, kullanım, veya paylaşım yasaktır. Eğer ulaşılmak istenen kişi değilseniz, lütfen orjinal mesajın bütün kopyalarını yok edip, gönderen kişiye bilgi veriniz. Bu sayede adres bilgileri düzeltilecektir. Teşekkürler.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'E-Posta mesajlarını bu karakter seti ile oluştur',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'E-Postayı bu istemci ile oluştur',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Silinen E-Postalar ile birlikte ilgili notlar & ekleri de sil',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail Varsayılan Değerleriyle Doldur',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Her partide gönderilen E-Posta sayısı:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SSL üzerinden SMTP\'yi aktif hale getir',
	'LBL_EMAIL_USER_TITLE'						=> 'E-Posta Varsayılan Değerleri Kullan',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Giden E-Posta Yapılanması',
	'LBL_EMAILS_PER_RUN'						=> 'Her partide gönderilen E-Posta sayısı:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanya',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'İşlenmiş',
	'LBL_LIST_FORM_TITLE'						=> 'Kuyruk',
	'LBL_LIST_FROM_EMAIL'						=> '"Kimden" E-Posta',
	'LBL_LIST_FROM_NAME'						=> '"Kimden" İsim',
	'LBL_LIST_IN_QUEUE'							=> 'İşlemde',
	'LBL_LIST_MESSAGE_NAME'						=> 'Pazarlama Mesajı',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Alıcı E-Posta',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Alıcı Adı',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Gönderi Denemeleri',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Gönderildi',
	'LBL_LIST_USER_NAME'						=> 'Kullanıcı Adı',
	'LBL_LOCATION_ONLY'							=> 'Yer',
	'LBL_LOCATION_TRACK'						=> 'Kampanya İzleme Dosyaları Lokasyonu (campaign_tracker.php gibi)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Kampanya mesajlarının kopyalarını tut:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Bütün kampanyalar sırasında gönderilen <bold>HER</bold> E-Postanın kopyasını saklamak istiyor musunuz?  <bold>Varsayılan değer olan Hayır\'ı öneriyoruz </bold>.  Hayır olarak işaretlemeniz durumunda, E-Posta şablon ve her bir mesajı tekrar oluşturmak için gerekli değişkenler saklanacaktır.',
	'LBL_MAIL_SENDTYPE'							=> 'Posta Transfer Protokolü',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP Kimlik Denetimi:',
	'LBL_MAIL_SMTPPASS'							=> 'Şifre:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Portu',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Sunucusu:',
	'LBL_MAIL_SMTPUSER'							=> 'Kullanıcı adı:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'E-Posta sağlayıcınızı seçiniz',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! E-Posta Şifresi',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! E-Posta ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Şifresi',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail E-Posta Adresi',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Şifresi',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Kullanıcı Adı',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Sunucu Portu',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Sunucusu',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-Posta İstemcisi',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Pazarlama ID',
    'LBL_MODULE_ID'                             => 'E-Posta Yöneticisi',
	'LBL_MODULE_NAME'							=> 'E-Posta Ayarları',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Kampanya E-Posta Ayarlarını Yapılandır',
	'LBL_MODULE_TITLE'							=> 'Gönderilen E-Posta Kuyruğu Yönetimi',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Etkinleştirildiği zaman, kullanıcılara her kayıt atandığında E-Posta gönderilir.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Kimden" Adres:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Kimden" İsim:',
	'LBL_NOTIFY_ON'								=> 'Atama Bildirileri',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Yeni kullanıcılara bildiri gönder',
	'LBL_NOTIFY_TITLE'							=> 'E-Posta Seçenekleri',
	'LBL_OLD_ID'								=> 'Eski ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Giden E-Posta Seçenekleri',
	'LBL_RELATED_ID'							=> 'Bağlantılı ID',
	'LBL_RELATED_TYPE'							=> 'İlişkili Tipi',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Gönderilen İşlenmemiş E-Postaları Sakla',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'İşlenmiş Arama',
	'LBL_SEARCH_FORM_TITLE'						=> 'Kuyruk Arama',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'İşlenmiş E-Postaları Görüntüle',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Kuyruktaki E-Postaları Görüntüle',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Config.php dosyasındaki site_url değeri',
	'TXT_REMOVE_ME_ALT'							=> 'Bu E-Posta listesinden kendinizi çıkarmak için şu adrese gidin:',
	'TXT_REMOVE_ME_CLICK'						=> 'buraya tıklayın',
	'TXT_REMOVE_ME'								=> 'Kendinizi bu E-Posta listesinden kaldırmak için',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Atayan kullanıcının E-Posta adresinden uyarı gönderilsin mi?',

	'LBL_SECURITY_TITLE'						=> 'E-Posta Güvenlik Ayarları',
	'LBL_SECURITY_DESC'							=> 'Aşağıdakilerden alınan E-Posta için izin verilmemesi gereken veya E-Posta modülünde gösterilmeyecek olanları seçiniz.',
	'LBL_SECURITY_APPLET'						=> 'Applet etiketi',
	'LBL_SECURITY_BASE'							=> 'Base etiketi',
	'LBL_SECURITY_EMBED'						=> 'Embed etiketi',
	'LBL_SECURITY_FORM'							=> 'Form etiketi',
	'LBL_SECURITY_FRAME'						=> 'Frame etiketi',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset etiketi',
	'LBL_SECURITY_IFRAME'						=> 'iFrame etiketi',
	'LBL_SECURITY_IMPORT'						=> 'Import etiketi',
	'LBL_SECURITY_LAYER'						=> 'Layer etiketi',
	'LBL_SECURITY_LINK'							=> 'Link etiketi',
	'LBL_SECURITY_OBJECT'						=> 'Object etiketi',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Outlook için varsayılan minimum güvenlik ayarlarını seçiniz.',
	'LBL_SECURITY_SCRIPT'						=> 'Script etiketi',
	'LBL_SECURITY_STYLE'						=> 'Style etiketi',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Bütün Seçenekleri İşaretleyiniz',
	'LBL_SECURITY_XMP'							=> 'Xmp etiketi',
    'LBL_YES'                                   => 'Evet',
    'LBL_NO'                                    => 'Hayır',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Gönderim Denemesi',
	'LBL_OUTGOING_SECTION_HELP'                 => 'İş akış uyarılarını içeren E-Posta bildirilerini gönderebilmek için varsayılan giden E-Posta sunucusunu yapılandırın.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Giden E-Postalar için kullanıcıların bu hesabı kullanmasına izin ver:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Bu seçenek seçildiğinde, tüm kullanıcılar sistem bildiri ve uyarılarını göndermek için kullanılan aynı giden posta hesabını kullanarak e-postalarını gönderebilecek. Eğer bu seçenek seçilmezse, kullanıcılar kendi hesap bilgilerini girdikten sonra giden mesaj sunucusunu kullanmaya devam edebilirler',
    'LBL_FROM_ADDRESS_HELP'                     => 'Seçildiğinde, atanan kullanıcının adı ve E-posta adresi "Kimden" alanında yer alacaktır. Farklı hesaplardan gönderime izin vermeyen sunucularda çalışmayabilir.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo posta' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
);

?>