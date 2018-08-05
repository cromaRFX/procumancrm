<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


$mod_strings = array(

    'LBL_ADD_MODULE' => 'Ekle',
    'LBL_ADDRCITY' => 'Şehir',
    'LBL_ADDRCOUNTRY' => 'Ülke',
    'LBL_ADDRCOUNTRY_ID' => 'Ülke ID',
    'LBL_ADDRSTATEPROV' => 'Eyalet',
    'LBL_ADMINISTRATION' => 'Konnektör Yönetimi',
    'LBL_ADMINISTRATION_MAIN' => 'Konnektör Ayarları',
    'LBL_AVAILABLE' => 'Kullanılabilir',
    'LBL_BACK' => '< Önceki',
    'LBL_COMPANY_ID' => 'Şirket ID',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Bazı gerekli alanlar boş bırakıldı. Değişiklikler kaydedilsin mi?',
    'LBL_CONNECTOR' => 'Konnektör',
    'LBL_CONNECTOR_FIELDS' => 'Konnektör Alanları',
    'LBL_DATA' => 'Veri',
    'LBL_DEFAULT' => 'Varsayılan',
    'LBL_DELETE_MAPPING_ENTRY' => 'Bu girdiyi silmek istediğinizden emin misiniz?',
    'LBL_DISABLED' => 'Devre dışı',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Arama kriterinize göre bir sonuç bulunamadı.',
    'LBL_ENABLED' => 'Etkin',
    'LBL_EXTERNAL' => 'Enable users to create external account records to this connector.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' In order to use this connector, the properties should also be set in the Set Connector Properties settings page.',
    'LBL_FINSALES' => 'Yıllık Satış Miktarı',
    'LBL_MARKET_CAP' => 'Piyasa Değeri',
    'LBL_MERGE' => 'Birleştir',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Konnektörleri Etkinleştir',
    'LBL_MODIFY_DISPLAY_DESC' => 'Her bir konnektör için hangi modüllerin etkinleştirilmiş olduğunu seçer.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Konnektör Ayarları: Konnektörleri Etkinleştir',
    'LBL_MODULE_FIELDS' => 'Modül Alanları',
    'LBL_MODIFY_MAPPING_TITLE' => 'Konnektör Alanlarını Eşleştir',
    'LBL_MODIFY_MAPPING_DESC' => 'Hangi konnektör verisinin görüneceği ve modül kayıtlarıyla birleşeceğine karar vermek için modül alanları ile konnektör alanları eşleştirir.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Konnektör Ayarları: Konnektör Alanlarını Eşleştir',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Konnektör Özelliklerini Ayarla',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Her bir konnektör için URL\'ler ve API anahtarları dahil olmak üzere özelliklerini ayarlar.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Konnektör Ayarları: Konnektör Özelliklerini Ayarla',
    'LBL_MODIFY_SEARCH_TITLE' => 'Konnektör Aramayı Yönet',
    'LBL_MODIFY_SEARCH' => 'Ara',
    'LBL_MODIFY_SEARCH_DESC' => 'Her bir modül için veri aramak amacıyla konnektör alanları seçer',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Konnektör Ayarları: Konnektör Aramayı Yönet',
    'LBL_MODULE_NAME' => 'Konnektörler',
    'LBL_NO_PROPERTIES' => 'Bu konnektör için ayarlanabilecek özellik bulunmamaktadır.',
    'LBL_PARENT_DUNS' => 'Ana DUNS',
    'LBL_PREVIOUS' => '< Önceki',
    'LBL_QUOTE' => 'Teklif',
    'LBL_RECNAME' => 'Şirket Adı',
    'LBL_RESET_TO_DEFAULT' => 'Varsayılanlara Sıfırla',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Varsayılan ayarlara sıfırlamaya emin misiniz?',
    'LBL_RESET_BUTTON_TITLE' => 'Sıfırla [Alt+R]',
    'LBL_RESULT_LIST' => 'Veri Listesi',
    'LBL_RUN_WIZARD' => 'Sihirbazı Çalıştır',
    'LBL_SAVE' => 'Kaydet',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Arıyor...',
    'LBL_SHOW_IN_LISTVIEW' => 'Birleşmiş Liste görünümünde Göster',
    'LBL_SMART_COPY' => 'Akıllı Kopyalama',
    'LBL_SUMMARY' => 'Özet',
    'LBL_STEP1' => 'Ara ve Veriyi Gör',
    'LBL_STEP2' => 'Kayıtlar Birleştir:',
    'LBL_TEST_SOURCE' => 'Konnektörü Test Et',
    'LBL_TEST_SOURCE_FAILED' => 'Test Başarısız',
    'LBL_TEST_SOURCE_RUNNING' => 'Test gerçekleştiriliyor...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test Başarılı',
    'LBL_TITLE' => 'Veri Birleştirme',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Esas Ana DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Hata: Lütfen devam etmeden önce listeden bir kayıt seçin.',
    'ERROR_EMPTY_WRAPPER' => 'Hata: Kaynak için [{$source_id}] wrapper örneği alınamıyor',
    'ERROR_EMPTY_SOURCE_ID' => 'Hata: Kaynak ID belirtilmemiş veya boş.',
    'ERROR_EMPTY_RECORD_ID' => 'Hata: Kayıt ID belirtilmemiş veya boş.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Hata: Kayıt için ilave detaylar bulunmadı.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Bu konnektör için her hangi bir modül etkinleştirilmemiş. Konnektör Etkinleştir sayfasında bu konnektör için modül seçin.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Hata: Arama alanları tanımlı herhangi etkin bir konnektör bulunmamaktadır.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Hata: sourcedefs.php dosyası bulunamadı.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Hata: Veriyi alacak her hangi bir kaynak belirtilmedi.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Hata: Bu modüle eşlenmiş konnektör bulunmamaktadır.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Hata: Modül ve konnektör için herhangi bir arama alanı tanımlanmamış. Lütfen sistem yöneticisine başvurun.',
    'ERROR_NO_FIELDS_MAPPED' => 'Hata: Her bir modül girdisi için en azından bir tane Konnektör alanını modül alanı ile eşlemelisiniz.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Hata: Sonuçlarda gözükmesi için herhangi bir modül alanı belirtilmemiş. Lütfen sistem yöneticisine başvurun.',
    'LBL_TWITTER_USER' => 'Twitter Kullanıcısı',
    'LBL_FACEBOOK_USER' => 'Facebook kullanıcısı',
    'LBL_INFO_INLINE' => 'Bilgi:' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Kapat' /*for 508 compliance fix*/,

);

?>