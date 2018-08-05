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


	'LBL_RE'					=> 'YNT:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Kullanıcı ya daşifre yanlış',
	'ERR_BODY_TOO_LONG'		=> '\rBÜTÜN e-posta\'nın alınması için, İçerik metni çok uzun. Kesildi.',
	'ERR_INI_ZLIB'			=> 'Zlib sıkıştırması geçici süre durdurulamadı.  "Test Ayarları" çalışmayabilir.',
	'ERR_MAILBOX_FAIL'		=> 'Herhangi bir posta hesapları alamadı.',
	'ERR_NO_IMAP'			=> 'IMAP kütüphanesi bulunamadı.  "Gelen Posta" ile devam etmeden önce, bu problemi çözün',
	'ERR_NO_OPTS_SAVED'		=> 'Hiçbir optimal değer gelen e-posta hesabınızla kaydedilmedi.  Lütfen ayarları gözden geçirin',
	'ERR_TEST_MAILBOX'		=> 'Lütfen ayarlarınızı denetleyin ve yeniden deneyin.',

	'LBL_APPLY_OPTIMUMS'	=> 'Optimum Değerleri Uygula',
	'LBL_ASSIGN_TO_USER'	=> 'Kullanıcıya ata',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Otomatik Yanıt seçenekleri',
	'LBL_AUTOREPLY'			=> 'Otomatik Yanıt Şablonu',
	'LBL_AUTOREPLY_HELP'	=> 'E-Posta gönderen kişilerin mesajlarının ulaştığını bildirmek için otomatik bir yanıt seçin.',
	'LBL_BASIC'				=> 'Posta Hesap Bilgisi',
	'LBL_CASE_MACRO'		=> 'Talep Makro\'su',
	'LBL_CASE_MACRO_DESC'	=> 'Yüklenen e-posta\'nın Talep ile ilişkilendirilmesi için yorumlanacak ve kullanılacak makro\'yu belirtin.',
	'LBL_CASE_MACRO_DESC2'	=> 'Herhangi bir değer belirtin, fakat <b>"%1"</b> değerini koruyun.',
	'LBL_CERT_DESC'			=> 'Posta sunucusunun Güvenlik Sertifikasının denetlenmesini zorla - "self-signing" ise kullanmayınız.',
	'LBL_CERT'				=> 'Sertifikayı Denetleyin',
	'LBL_CLOSE_POPUP'		=> 'Pencereyi Kapat',
	'LBL_CREATE_NEW_GROUP'	=> '--Kaydetme Sırasında Grup Oluştur--',
	'LBL_CREATE_TEMPLATE'	=> 'Oluştur',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Abonelik Dosyaları',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Varsayılan: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Varsayılan: ',
	'LBL_DELETE_SEEN'		=> 'Veri Yükleme sonrasında, okunan E-Postaları Sil',
	'LBL_EDIT_TEMPLATE'		=> 'Düzenle',
	'LBL_EMAIL_OPTIONS'		=> 'E-Posta Yönetim Seçenekleri',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Ulaşmayan E-Posta Yönetim Posta Kutusu',
	'LBL_FILTER_DOMAIN_DESC'=> 'Bu domain\'e otomatik cevap gönderme',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Talep Oluştur opsiyonu için, bir Grup Dizini seçilmelidir',
	'LBL_FILTER_DOMAIN'		=> 'Domain\'e otomatik cevaplama yok',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Optimum bağlantı değişkenlerini bul',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Optimum Konfigürasyonu Bul',
	'LBL_FIND_SSL_WARN'		=> '<br>SSL Testi uzun sürebilir.  Lütfen sabırlı olun.<br>',
	'LBL_FORCE_DESC'		=> 'Bazı IMAP/POP3 sunucular için özel opsiyon ihtiyacı bulunmaktadır. Bağlanırken opsiyonun tersine zorlayın (örneğin, /notls)',
	'LBL_FORCE'				=> 'Tersine Zorla',
	'LBL_FOUND_MAILBOXES'	=> 'Aşağıdaki kullanılabilir dizinler bulundu.<br>Seçmek için birine tıklayınız:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Optimum ayarlar bulundu.  Lütfen aşağıdaki tuşa basarak, posta hesabınıza uygulayınız.',
	'LBL_FROM_ADDR'			=> '"Kimden" Adresi',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.",
	'LBL_FROM_NAME_ADDR'	=> 'İsim/e-Posta cevapla',
	'LBL_FROM_NAME'			=> '"Kimden" Adı',
	'LBL_GROUP_QUEUE'		=> 'Gruba ata',
    'LBL_HOME'              => 'Ana Sayfa',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Posta Hesabı Kullanımı',
	'LBL_LIST_NAME'			=> 'İsim:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Grup/Kişi',
	'LBL_LIST_SERVER_URL'	=> 'Posta sunucusu:',
	'LBL_LIST_STATUS'		=> 'Durum:',
	'LBL_LOGIN'				=> 'Kullanıcı Adı',
	'LBL_MAILBOX_DEFAULT'	=> 'Gelen Kutusu',
	'LBL_MAILBOX_SSL_DESC'	=> 'Bağlanırken SSL kullan. Eğer bu yöntem çalışmazsa, PHP kurulumu konfigurasyonunda "--with-imap-ssl" seçeneğinin olduğunu kontrol edin.',
	'LBL_MAILBOX_SSL'		=> 'SSL kullan',
	'LBL_MAILBOX_TYPE'		=> 'Olası aksiyonlar',
	'LBL_DISTRIBUTION_METHOD' => 'Dağıtım Metodu',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Talep Yanıtı Şablonu Oluştur',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'E-Posta Gönderen kişilere, bir Talebin Oluşturulduğunu bildirmek için otomatik bir yanıt seçin. E-Postanın Konu kısmı Talep Numarası içerir ve bu Talep Makro ayarlarına yapıştırılır. Bu cevap sadece ilk mesaj alıcı tarafından gönderilmiş ise geçerlidir.',
	'LBL_MAILBOX'			=> 'İzlenen Dosyalar',
	'LBL_TRASH_FOLDER'		=> 'Silinen Dosya',
	'LBL_GET_TRASH_FOLDER'	=> 'Silinen Dosyayı Al',
	'LBL_SENT_FOLDER'		=> 'Gönderilen Dosya',
	'LBL_GET_SENT_FOLDER'	=> 'Gönderilen Dosyayı al',
	'LBL_SELECT'				=> 'Seç ( Alt + T )',
	'LBL_MARK_READ_DESC'	=> 'Yükleme sırasında E-Posta sunucusundaki mesajları okundu olarak işaretle; silme.',
	'LBL_MARK_READ_NO'		=> 'E-posta içeri aktarmadan sonra silindi olarak işaretlendi',
	'LBL_MARK_READ_YES'		=> 'İçeri aktarmadan sonra sunucda kalan e-posta',
	'LBL_MARK_READ'			=> 'MEsajları sunucuda bırak',
	'LBL_MAX_AUTO_REPLIES'	=> 'Otomatik cevaplama sayısı',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> '24 saatlik zaman diliminde, bir E-Posta adresine gönderilen otomatik yanıtların maksimum adedini belirtin.',
	'LBL_PERSONAL_MODULE_NAME' => 'Kişisel Posta Hesabı',
	'LBL_CREATE_CASE'      => 'E-Postadan Talep Oluştur',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Gelen E-Posta Ayarları',
	'LBL_BOUNCE_MODULE_NAME' => 'Ulaşmayan E-Posta Yönetim Posta Kutusu',
	'LBL_MODULE_TITLE'		=> 'Gelen E-posta',
	'LBL_NAME'				=> 'İsim',
    'LBL_NONE'              => 'boş',
	'LBL_NO_OPTIMUMS'		=> 'Optimum değerleri bulamıyor.  Lütfen ayarlarınızı kontrol edip tekrar deneyiniz.',
	'LBL_ONLY_SINCE_DESC'	=> 'POP3 kullanırken, PHP Yeni/Okunmamış mesajları filtreleyemez.  Bu seçenek posta hesabına son bağlantıdan sonra oluşan mesajların kontrolününe izin verir.  Bu sunucunuz IMAP kullanmıyorsa, performansın önemli ölçüde artmasını sağlayacaktır.',
	'LBL_ONLY_SINCE_NO'		=> 'Hayır.Posta sunucusundaki tüm e-postaları kontrol et.',
	'LBL_ONLY_SINCE_YES'	=> 'Evet.',
	'LBL_ONLY_SINCE'		=> 'Yalnızca Son Kontrolden sonrasını Yükle:',
	'LBL_OUTBOUND_SERVER'	=> 'Giden Posta Sunucusu',
	'LBL_PASSWORD_CHECK'	=> 'Şifre Kontrol',
	'LBL_PASSWORD'			=> 'Şifre',
	'LBL_POP3_SUCCESS'		=> 'POP3 test bağlantınız başarılı.',
	'LBL_POPUP_FAILURE'		=> 'Test bağlantısı başarısız. Hata aşağıda gösterilmiştir.',
	'LBL_POPUP_SUCCESS'		=> 'Test bağlantısı başarılı. Ayarlarınız çalışıyor.',
	'LBL_POPUP_TITLE'		=> 'Test Ayarları',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Dizin Listesini Alıyor',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Üye Olunan Dizin(leri) seçiniz',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Silinen Dosyasını Seçin',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Gönderilen Dosyayı Seçin',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Şu dizinler mevcut değil veya sunucudan silindi: %s',
	'LBL_PORT'				=> 'Posta Sunucusu Port',
	'LBL_QUEUE'				=> 'Posta Hesabı Kuyruğu',
	'LBL_REPLY_NAME_ADDR'	=> 'İsim/e-Posta cevapla',
	'LBL_REPLY_TO_NAME'		=> 'İsme Cevaplandır',
	'LBL_REPLY_TO_ADDR'		=> 'Adrese Cevplandır',
	'LBL_SAME_AS_ABOVE'		=> 'İsim/Adres^ten Kullan',
	'LBL_SAVE_RAW'			=> 'İşlenmemiş Kaynağı Sakla',
	'LBL_SAVE_RAW_DESC_1'	=> 'Her yüklenen e-posta için işlenmemiş halini tutmak istiyorsanız "Evet" seçin.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Büyük Dosya Ekleri, yanlış veya ihtiyatlı yaralmış veritabanlarında hataya neden olabilir.',
	'LBL_SERVER_OPTIONS'	=> 'İleri düzey kurulum',
	'LBL_SERVER_TYPE'		=> 'Posta Sunucusu Protokolü',
	'LBL_SERVER_URL'		=> 'Posta Sunucusu Adresi',
	'LBL_SSL_DESC'			=> 'Eğer E-Posta sunucunuz güvenli "socket" bağlantısını destekliyorsa, bu seçenek E-Postaların içeri alınması sırasında SSL bağlantısını zorunlu kılacak.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Seçilen takımın posta hesabına ulaşımı var.',
	'LBL_SSL'				=> 'SSL kullan',
	'LBL_STATUS'			=> 'Durum',
	'LBL_SYSTEM_DEFAULT'	=> 'Sistem Varsayılanları',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt + T]',
	'LBL_TEST_SETTINGS'		=> 'Test Ayarları',
	'LBL_TEST_SUCCESSFUL'	=> 'Bağlantı başarıyla tamamnlandı.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Bir dakika lütfen...',
	'LBL_TLS_DESC'			=> 'E-Posta sunucusuna bağlanırken "Transport Layer Security" kullanın - yalnızca E-Posta sunucunuz bu protokol desteğini sağlıyorsa kullanılabilir.',
	'LBL_TLS'				=> 'TLS Kullan',
	'LBL_WARN_IMAP_TITLE'	=> '"Gelen E-Posta" Etkin Değil',
	'LBL_WARN_IMAP'			=> 'Uyarılar:',
	'LBL_WARN_NO_IMAP'		=> 'IMAP c-client kütüphaneleri PHP modülü ile aktive edilmiş/compile edilmiş değilse, "Gelen E-Posta" fonksiyonları <b>çalışamaz</b> .  Lütfen bu problemin çözümü için sistem yöneticiniz ile görüşünüz.',

	'LNK_CREATE_GROUP'		=> 'Yeni Grup Oluştur',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Yeni Grup E-Posta Hesabı',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Yeni Ulaşmayan E-Posta Yönetim Hesabı',
	'LNK_LIST_MAILBOXES'	=> 'Tüm posta hesapları',
	'LNK_LIST_QUEUES'		=> 'Tüm Kuyruklar',
	'LNK_LIST_SCHEDULER'	=> 'Zaman Çizelgeleri',
	'LNK_LIST_TEST_IMPORT'	=> 'E-posta içe alma testi',
	'LNK_NEW_QUEUES'		=> 'Yeni Kuyruk Oluştur',
	'LNK_SEED_QUEUES'		=> 'Takımlardan "Seed" Kuyrukları',
	'LBL_GROUPFOLDER_ID'	=> 'Grup Dizini ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Grup dizinine ata',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Kullanıcıların, "Kimden" İsim ve Adresini kullanarak E-Posta cevaplamalarına izin ver',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Bu seçenek seçili ise, grup E-Posta hesabına erişen kullanıcılar için E-Posta oluşturulurken, Grup ile ilişkili Kimden İsmi ve Adresi Kime alanında bir seçenek olarak çıkacaktır.',
    'LBL_STATUS_ACTIVE'     => 'Aktif',
    'LBL_STATUS_INACTIVE'   => 'Aktif değil',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'Grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Otomatik olarak e-postaları al',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Uyarı:otomatik alma ayarınızı değiştiriyorsunuz bu veri kaybına neden olabilir .',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Uyarı: Otomatik talep yaratırken otomatik al ayarı seçili olmalı.',
	'LBL_EDIT_LAYOUT' => 'Sayfa Görünümü Düzenleme' /*for 508 compliance fix*/,
);
?>
