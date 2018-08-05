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
    'LBL_MODULE_NAME' => 'Fırsatlar',
    'LBL_MODULE_TITLE' => 'Fırsatlar: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Fırsat Arama',
    'LBL_VIEW_FORM_TITLE' => 'Fırsat Görüntüleme',
    'LBL_LIST_FORM_TITLE' => 'Fırsat Listesi',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat Adı:',
    'LBL_OPPORTUNITY' => 'Fırsat:',
    'LBL_NAME' => 'Fırsat Name',
    'LBL_INVITEE' => 'İlgililer',
    'LBL_CURRENCIES' => 'Para Birimleri',
    'LBL_LIST_OPPORTUNITY_NAME' => 'İsim',
    'LBL_LIST_ACCOUNT_NAME' => 'Müşteri Adı',
    'LBL_LIST_AMOUNT' => 'Tutar',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Tutar',
    'LBL_LIST_DATE_CLOSED' => 'Kapat',
    'LBL_LIST_SALES_STAGE' => 'Satış Aşaması',
    'LBL_ACCOUNT_ID' => 'Müşteri ID',
    'LBL_CURRENCY_ID' => 'Para Birimi ID',
    'LBL_CURRENCY_NAME' => 'Para Birimi',
    'LBL_CURRENCY_SYMBOL' => 'Para Birimi Sembolü',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Fırsat - Para Birimi Güncelle',
    'UPDATE_DOLLARAMOUNTS' => 'ABD Doları Tutarını Güncelle',
    'UPDATE_VERIFY' => 'Tutarı  doğrula',
    'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
    'UPDATE_FIX' => 'Sabit tutarlar',
    'UPDATE_FIX_TXT' => 'Hatalı miktarlar şu anki değerlerden sayısal değer üretilerek düzeltmeye çalışılıyor. Değiştirilen herhangi bir değer, amount_backup veritabanı alanında yedeklenecek. Eğer bu rutini çalıştırır ve hata ile karşılaşırsanız, bu alanı yedekten dönmeden tekrar çalıştırmayınız, çünkü tekrar çalıştırma yedeklenen değerin bozulmasına neden olacaktır.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
    'UPDATE_CREATE_CURRENCY' => 'Yeni Para Birimi Oluşturma:',
    'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Şu anki tutar:',
    'UPDATE_VERIFY_FIX' => 'Running Fix would give',
    'UPDATE_INCLUDE_CLOSE' => 'Kapanmış kayıtları içerir',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Yeni tutar:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Yeni para birimi:',
    'UPDATE_DONE' => 'Tamam',
    'UPDATE_BUG_COUNT' => 'Bugs Found and Attempted to Resolve:',
    'UPDATE_BUGFOUND_COUNT' => 'Hatalar bulundu:',
    'UPDATE_COUNT' => 'Kayıtlar güncellendi:',
    'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
    'UPDATE_RESTORE' => 'Restore Amounts',
    'UPDATE_RESTORE_TXT' => 'Düzeltme sırasında yaratılmış yedekten miktar değerleri geri döndürür.',
    'UPDATE_FAIL' => 'Güncellenemiyor - ',
    'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
    'UPDATE_MERGE' => 'Para Birimi Birleştir',
    'UPDATE_MERGE_TXT' => 'Birden fazla para birimini tek bir para birimine birleştir. Aynı para birimi için birden fazla para birimi kayıtları varsa, bunları birleştirirsiniz. Bu ayrıca bütün diğer modüllerdeki para birimlerini de birleştirecektir.',
    'LBL_ACCOUNT_NAME' => 'Müşteri Adı',
    'LBL_AMOUNT' => 'Tutar:',
    'LBL_AMOUNT_USDOLLAR' => 'YTL Tutarı:',
    'LBL_CURRENCY' => 'Para Birimi',
    'LBL_DATE_CLOSED' => 'Tahmini kapanış tarihi:',
    'LBL_TYPE' => 'Türü:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_NEXT_STEP' => 'Bir sonraki adım:',
    'LBL_LEAD_SOURCE' => 'Talep Kaynağı:',
    'LBL_SALES_STAGE' => 'Satış Aşaması:',
    'LBL_PROBABILITY' => 'Olasılık(%):',
    'LBL_DESCRIPTION' => 'Tanım:',
    'LBL_DUPLICATE' => 'Olası duble fırsat',
    'MSG_DUPLICATE' => 'Şu anda yaratmakta olduğunuz Fırsat kaydı, başka bir Fırsat kaydının aynısı olabilir. Benzer ismi içeren Fırsat kayıtları aşağıda listelenmektedir.<br>Kaydet tuşuna basarak Fırsatı yaratmaya devam edebilir, veya İptal tuşuna basarak Fırsatı yaratmadan modüle geri dönebilirsiniz.',
    'LBL_NEW_FORM_TITLE' => 'Fırsat Oluştur',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Oluştur',
    'LNK_OPPORTUNITY_LIST' => 'Fırsatlar',
    'ERR_DELETE_RECORD' => 'Fırsatı silmek için kayıt nosu belirtilmelidir.',
    'LBL_TOP_OPPORTUNITIES' => 'En iyi açık fırsatlarım',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Bu ilgiliyi fırsattan silmek istediğinizden emin misiniz? ',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bu fırsatı projeden silmek istediğinizden emin misiniz?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Etkinlikler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
    'LBL_RAW_AMOUNT' => 'İşlenmemiş Miktar',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Talepler',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgililer',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dökümanlar',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kullanıcı',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Kapanmış Fırsatlarım',
    'LBL_TOTAL_OPPORTUNITIES' => 'Toplam Fırsatlar',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Kapatılan Kazanılmış Fırsatlar',
    'LBL_ASSIGNED_TO_ID' => 'ID\'ye ata',
    'LBL_CREATED_ID' => 'ID oluşturuldu',
    'LBL_MODIFIED_ID' => 'ID değiştirildi',
    'LBL_MODIFIED_NAME' => 'Değiştiren kullanıcı adı',
    'LBL_CREATED_USER' => 'Oluşturan kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanyalar',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LABEL_PANEL_ASSIGNMENT' => 'Atama',
    'LNK_IMPORT_OPPORTUNITIES' => 'Sisteme Fırsat Aktar',
    'LBL_EDITLAYOUT' => 'Sayfa Görünümü Düzenleme' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanya ID',
    'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanmış kullanıcı adı',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atanmış kullanıcı ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Değiştiren ID:',
    'LBL_EXPORT_CREATED_BY' => 'Oluşturan Id:',
    'LBL_EXPORT_NAME' => 'Paket Adı:',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'İlgili kişi e-postaları',
    'TWITTER_USER_C' => 'Twitter Kullanıcısı',
);

?>
