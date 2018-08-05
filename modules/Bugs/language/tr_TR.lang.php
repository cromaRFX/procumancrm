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
  'LBL_MODULE_NAME' => 'Hatalar',
  'LBL_MODULE_TITLE' => 'Hata İzleyici : Ana Sayfa',
  'LBL_MODULE_ID' => 'Hatalar',
  'LBL_SEARCH_FORM_TITLE' => 'Hata Arama',
  'LBL_LIST_FORM_TITLE' => 'Hata Listesi',
  'LBL_NEW_FORM_TITLE' => 'Yeni Hata',
  'LBL_CONTACT_BUG_TITLE' => 'Yetikili-Hata:',
  'LBL_SUBJECT' => 'Konu:',
  'LBL_BUG' => 'Bugün:',
  'LBL_BUG_NUMBER' => 'Hata Sayısı:',
  'LBL_NUMBER' => 'Sayı:',
  'LBL_STATUS' => 'Durum:',
  'LBL_PRIORITY' => 'Öncelik:',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_CONTACT_NAME' => 'Yetiki Adı:',
  'LBL_BUG_SUBJECT' => 'Hata Konusu:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_LIST_NUMBER' => 'No.',
  'LBL_LIST_SUBJECT' => 'Konu',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_PRIORITY' => 'Öncelik',
  'LBL_LIST_RELEASE' => 'Yayım',
  'LBL_LIST_RESOLUTION' => 'Çözüm',
  'LBL_LIST_LAST_MODIFIED' => 'Son Değiştirme:',
  'LBL_INVITEE' => 'İlgililer',
  'LBL_TYPE' => 'Türü:',
  'LBL_LIST_TYPE' => 'Türü:',
  'LBL_RESOLUTION' => 'Çözüm:',
  'LBL_RELEASE' => 'Yayım',
  'LNK_NEW_BUG' => 'Hata Raporla',
  'LNK_BUG_LIST' => 'Hatalar',
  'NTC_REMOVE_INVITEE' => 'Yetikili\'yi bu hatadan silmek istediğinizden emin misiniz?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Bu müşteriden, bu hatayı kaldırmak istediğinizden emin misiniz?',
  'ERR_DELETE_RECORD' => 'Bu hatayı silmek için bir kayıt nosu belirtmelisiniz.',
  'LBL_LIST_MY_BUGS' => 'Bana atanmılş hatalar',
  'LNK_IMPORT_BUGS' => 'Hataları Al',
  'LBL_FOUND_IN_RELEASE' => 'Bulunduğu Yayın(Sürüm):',
  'LBL_FIXED_IN_RELEASE' => 'Düzeltildiği Yayın (Sürüm):',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Düzeltildiği Yayın (Sürüm)',
  'LBL_WORK_LOG' => 'İş Günlüğü:',
  'LBL_SOURCE' => 'Kaynak:',
  'LBL_PRODUCT_CATEGORY' => 'Kategori:',

  'LBL_CREATED_BY' => 'Oluşturan:',
  'LBL_DATE_CREATED' => 'Oluşturma Tarihi:',
  'LBL_MODIFIED_BY' => 'Son değiştiren: :',
  'LBL_DATE_LAST_MODIFIED' => 'Değiştirme Tarihi:',

  'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
  'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
  'LBL_LIST_ACCOUNT_NAME' => 'Müşteri Adı',
  'LBL_LIST_PHONE' => 'Telefon',
  'NTC_DELETE_CONFIRMATION' => 'Yetikili\'yi bu hatadan silmek istediğinizden emin misiniz?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hata İzleme',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Etkinlikler',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Tarihçe',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgililer',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Müşteriler',
  'LBL_CASES_SUBPANEL_TITLE' => 'Şikayetler',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dökümanlar',
  'LBL_SYSTEM_ID' => 'Sistem ID',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kullanıcı',
	'LBL_ASSIGNED_TO_NAME' => 'Atama',

	'LBL_BUG_INFORMATION' => 'Hedef Bilgi',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Bulunduğu Sürüm:',
    'LBL_PORTAL_VIEWABLE' => 'Portal görüntülenebilir',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanmış kullanıcı adı',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atanmış kullanıcı ID',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Düzeltildiği Sürüm',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Değiştiren ID:',
    'LBL_EXPORT_CREATED_BY' => 'Oluşturan Id:',


  );
?>
