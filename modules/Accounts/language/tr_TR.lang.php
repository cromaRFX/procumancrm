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
	// DON'T CONVERT THESE THEY ARE MAPPINGS
	'db_name' => 'LBL_LIST_ACCOUNT_NAME',
	'db_website' => 'LBL_LIST_WEBSITE',
	'db_billing_address_city' => 'LBL_LIST_CITY',
	// END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dökümanlar',
	// Dashlet Categories
	'LBL_CHARTS'    => 'Grafikler',
	'LBL_DEFAULT' => 'Görünümler',
	'LBL_MISC'    => 'Çeşitli',
	'LBL_UTILS'    => 'Utils',
	// END Dashlet Categories

	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Bu müşteriyi projeden kadlrımak istediğinizden emin misiniz?',
	'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt nosu girmelisiniz.',
	'LBL_ACCOUNT_INFORMATION' => 'Müşteri Bilgileri',
	'LBL_ACCOUNT_NAME' => 'Müşteri Adı',
	'LBL_ACCOUNT' => 'Müşteri:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Etkinlikler',
	'LBL_ADDRESS_INFORMATION' => 'Adres Bilgisi',
	'LBL_ANNUAL_REVENUE' => 'Yıllık Gelir:',
	'LBL_ANY_ADDRESS' => 'Diğer Adres:',
	'LBL_ANY_EMAIL' => 'Diğer E-posta:',
	'LBL_ANY_PHONE' => 'Diğer Telefon:',
	'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
	'LBL_ASSIGNED_TO_ID' => 'Atanan Kullanıcı:',
	'LBL_BILLING_ADDRESS_CITY' => 'Fatura Şehir:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatura Ülkesi:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatura Posta Kodu:',
	'LBL_BILLING_ADDRESS_STATE' => 'Fatura Eyaleti',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Fatura  Cadde 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Fatura Cadde 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Fatura Cadde 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Fatura Cadde:',
	'LBL_BILLING_ADDRESS' => 'Fatura Adresi:',
	'LBL_BUG_FORM_TITLE' => 'Müşteriler',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
	'LBL_CALLS_SUBPANEL_TITLE' => 'Tel.Aramaları',
	'LBL_CAMPAIGN_ID' => 'Kampanya ID',
	'LBL_CASES_SUBPANEL_TITLE' => 'Şikayetler',
	'LBL_CITY' => 'Şehir:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgililer',
	'LBL_COUNTRY' => 'Ülke:',
	'LBL_DATE_ENTERED' => 'Giriş Tarihi:',
	'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
	'LBL_MODIFIED_ID'=>'Değiştiren ID:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Müşteriler',
	'LBL_DESCRIPTION_INFORMATION' => 'Tanım Bilgisi',
	'LBL_DESCRIPTION' => 'Tanım:',
	'LBL_DUPLICATE' => 'Olası Çift Müşteri',
	'LBL_EMAIL' => 'E-Posta:',
	'LBL_EMAIL_OPT_OUT' => 'E-Posta Opt Out:',
	'LBL_EMAIL_ADDRESSES' => 'E-posta Adresleri',
	'LBL_EMPLOYEES' => 'Çalışanlar:',
	'LBL_FAX' => 'Faks:',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Tarihçe',
	'LBL_HOMEPAGE_TITLE' => 'Müşterilerim',
	'LBL_INDUSTRY' => 'Branş:',
	'LBL_INVALID_EMAIL'=>'Geçersiz E-posta:',
	'LBL_INVITEE' => 'İlgililer',
	'LBL_LEADS_SUBPANEL_TITLE' => 'Talepler',
	'LBL_LIST_ACCOUNT_NAME' => 'Müşteri Adı',
	'LBL_LIST_CITY' => 'Şehir',
	'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
	'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
	'LBL_LIST_FORM_TITLE' => 'Müşteri Listesi',
	'LBL_LIST_PHONE' => 'Telefon',
	'LBL_LIST_STATE' => 'Eyalet',
	'LBL_LIST_WEBSITE' => 'Web Sitesi',
	'LBL_MEETINGS_SUBPANEL_TITLE' => 'Toplantılar',
	'LBL_MEMBER_OF' => 'Üyesi:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Üye Organizasyonlar',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Üye Organizasyonlar',
	'LBL_MODULE_NAME' => 'Müşteriler',
	'LBL_MODULE_TITLE' => 'Müşteriler: Ana Sayfa',
	'LBL_MODULE_ID'=> 'Müşteriler',
	'LBL_NAME'=>'İsim:',
	'LBL_NEW_FORM_TITLE' => 'Yeni Müşteri',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-Posta:',
	'LBL_OTHER_PHONE' => 'Diğer Telefon:',
	'LBL_OWNERSHIP' => 'Sahibi::',
	'LBL_PARENT_ACCOUNT_ID' => 'Ana Hesap ID',
	'LBL_PHONE_ALT' => 'Alternatif Telefon:',
	'LBL_PHONE_FAX' => 'Ofis Faks:',
	'LBL_PHONE_OFFICE' => 'Ofis Telefonu:',
	'LBL_PHONE' => 'Telefon:',
	'LBL_POSTAL_CODE' => 'Posta Kodu:',
	'LBL_PRODUCTS_TITLE'=>'Ürünler',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
	'LBL_PUSH_BILLING' => 'Push Billing',
	'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'İlgililere Kopyala',
	'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopyala...',
	'LBL_PUSH_SHIPPING' => 'Gönderimi Başlat',
	'LBL_RATING' => 'Seviyesi:',
	'LBL_SAVE_ACCOUNT' => 'Hesabı Kaydet',
	'LBL_SEARCH_FORM_TITLE' => 'Müşteri Arama',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Teslim Adresi Şehir:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Teslim Adresi Ülke:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Teslim Adresi Posta Kodu',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Teslim Adresi Eyalet:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Teslim Adresi Cadde 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Teslim Adresi Cadde 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Teslim Adresi Cadde 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Teslim Adresi Cadde ',
	'LBL_SHIPPING_ADDRESS' => 'Teslim Adresi:',
	'LBL_SIC_CODE' => 'Kimlik Nosu:',
	'LBL_STATE' => 'Eyalet:',
	'LBL_TASKS_SUBPANEL_TITLE' => 'Görevler',
	'LBL_TEAMS_LINK'=>'Takımlar',
	'LBL_TICKER_SYMBOL' => 'Borsa Hisse Kodu',
	'LBL_TYPE' => 'Türü:',
	'LBL_USERS_ASSIGNED_LINK'=>'Kullanıcılara Atama',
	'LBL_USERS_CREATED_LINK'=>'Oluşturan Kullanıcılar:',
	'LBL_USERS_MODIFIED_LINK'=>'Değiştiren Kullanıcılar',
	'LBL_VIEW_FORM_TITLE' => 'Müşteri Görünümü',
	'LBL_WEBSITE' => 'Web Sitesi:',
	'LBL_CREATED_ID'=>'Oluşturan Id:',
	'LBL_CAMPAIGNS' =>'Kampanyalar',
	'LNK_ACCOUNT_LIST' => 'Müşteriler',
	'LNK_NEW_ACCOUNT' => 'Müşteri Yarat',
	'LNK_IMPORT_ACCOUNTS' => 'Müşterileri AL',
	'MSG_DUPLICATE' => 'Oluşturmak üzere olduğunuz müşteri kaydı, zaten var olan bir müşterinin aynı kaydı olabilir. Benzer isimleri içeren müşteriler aşağıda listelenmektedir.<br>Bu müşteriyi oluşturmaya devam etmek için Kayıt tuşuna basın, veya İptal tuşuna basarak müşteri oluşturmadan modüle dönünüz.',
	'MSG_SHOW_DUPLICATES' => 'Oluşturmak üzere olduğunuz müşteri kaydı, zaten var olan bir müşterinin aynı kaydı olabilir. Benzer isimleri içeren müşteriler aşağıda listelenmektedir.<br>Bu müşteriyi oluşturmaya devam etmek için Kayıt tuşuna basın, veya İptal tuşuna basarak müşteri oluşturmadan modüle dönünüz.',
	'NTC_COPY_BILLING_ADDRESS' => 'Fatura adresini teslim adresine kopyala',
	'NTC_COPY_BILLING_ADDRESS2' => 'Teslimata kopyala',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Teslim  adresini faturaya kopyala',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Faturaya kopyala',
	'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istedğinizden emin misiniz?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Bu kaydı üye organizasyon olarak silmek istediğinizden emin misiniz?',
	'LBL_ASSIGNED_USER_NAME' => 'Atanan Kişi:',
    'LBL_PROSPECT_LIST' => 'Olası Müşteriler ',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'Müşteriler',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
	'LBL_COPY' => 'Kopyala' /*for 508 compliance fix*/,
    //For export labels
    'LBL_ACCOUNT_TYPE' => 'Hesap türü',
    'LBL_PARENT_ID' => 'Ana ID',
    'LBL_PHONE_ALTERNATE' => 'Alternatif telefon',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanmış kullanıcı adı',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'İlgili kişi e-postaları',
	'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',
);
?>
