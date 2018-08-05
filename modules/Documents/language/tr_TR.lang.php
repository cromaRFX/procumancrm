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
	//module
	'LBL_MODULE_NAME' => 'Dokümanlar',
	'LBL_MODULE_TITLE' => 'Dokümanlar: Ana Sayfa',
	'LNK_NEW_DOCUMENT' => 'Doküman Oluştur',
	'LNK_DOCUMENT_LIST'=> 'Dokümanları Görüntüle',
	'LBL_DOC_REV_HEADER' => 'Doküman Revizyonları',
	'LBL_SEARCH_FORM_TITLE'=> 'Doküman Arama',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Doküman ID',
	'LBL_NAME' => 'Doküman Adı',
	'LBL_DESCRIPTION' => 'Tanım',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Alt Kategori',
	'LBL_STATUS' => 'Durum',
	'LBL_CREATED_BY'=> 'Oluşturan:',
	'LBL_DATE_ENTERED'=> 'Oluşturulma Tarihi',
	'LBL_DATE_MODIFIED'=> 'Değiştirilme Tarihi',
	'LBL_DELETED' => 'Silindi',
	'LBL_MODIFIED'=> 'Değiştiren ID',
	'LBL_MODIFIED_USER' => 'Değiştiren',
	'LBL_CREATED'=> 'Oluşturan:',
	'LBL_REVISIONS'=>'Revizyonlar',
	'LBL_RELATED_DOCUMENT_ID'=>'Bağlantılı Doküman ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Bağlantılı Doküman Revizyon ID',
	'LBL_IS_TEMPLATE'=>'Şablon mu?',
	'LBL_TEMPLATE_TYPE'=>'Doküman Tipi',
	'LBL_ASSIGNED_TO_NAME'=>'Atanan Kişi:',
	'LBL_REVISION_NAME' => 'Revizyon Numarası',
	'LBL_MIME' => 'Mime Tipi',
	'LBL_REVISION' => 'Revizyon',
	'LBL_DOCUMENT' => 'İlişkili Doküman',
	'LBL_LATEST_REVISION' => 'En Son Revizyon',
	'LBL_CHANGE_LOG'=> 'Değişiklik Tarihçesi',
	'LBL_ACTIVE_DATE'=> 'Yayın Tarihi',
	'LBL_EXPIRATION_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_FILE_EXTENSION'  => 'Dosya Uzantısı',
	'LBL_LAST_REV_MIME_TYPE' => 'Son revizyon MIME tipi',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Belirtilmemiş',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Yeni Doküman',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Doküman Adı:',
	'LBL_FILENAME' => 'Dosya Adı:',
	'LBL_LIST_FILENAME' => 'DOsya adı ',
	'LBL_DOC_VERSION' => 'Revizyon:',
	'LBL_FILE_UPLOAD' => 'DOsya adı ',

	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY_VALUE'=> 'Alt Kategori:',
	'LBL_DOC_STATUS'=> 'Durum:',
	'LBL_LAST_REV_CREATOR' => 'Revizyonu Oluşturan:',
	'LBL_LASTEST_REVISION_NAME' => 'Son revizyonun adı:',
	'LBL_SELECTED_REVISION_NAME' => 'Seçili revizyon ismi:',
	'LBL_CONTRACT_STATUS' => 'Kontrat durumu:',
	'LBL_CONTRACT_NAME' => 'Kontrat Adı:',
	'LBL_LAST_REV_DATE' => 'Revizyon Tarihi:',
	'LBL_DOWNNLOAD_FILE'=> 'Dosya İndir:',
	'LBL_DET_RELATED_DOCUMENT'=>'İlgili Doküman:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Bağlantılı Doküman Revizyonu:",
	'LBL_DET_IS_TEMPLATE'=>'Şablon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Doküman Tipi:',
	'LBL_DOC_DESCRIPTION'=>'Tanım:',
	'LBL_DOC_ACTIVE_DATE'=> 'Yayın Tarihi:',
	'LBL_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Doküman Listesi',
	'LBL_LIST_DOCUMENT' => 'Doküman',
	'LBL_LIST_SUBCATEGORY' => 'Alt Kategori',
	'LBL_LIST_REVISION' => 'Revizyon',
	'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan:',
	'LBL_LIST_LAST_REV_DATE' => 'Revizyon Tarihi',
	'LBL_LIST_VIEW_DOCUMENT'=>'Görünüm',
    'LBL_LIST_DOWNLOAD'=> 'İndir',
	'LBL_LIST_ACTIVE_DATE' => 'Yayın Tarihi',
	'LBL_LIST_EXP_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_LIST_STATUS'=>'Durum',
	'LBL_LINKED_ID' => 'Bağlantı ID',
	'LBL_SELECTED_REVISION_ID' => 'Seçili revizyon ID',
	'LBL_LATEST_REVISION_ID' => 'Son revizyon ID',
	'LBL_SELECTED_REVISION_FILENAME' => 'Seçili revizyon dosya adı',
	'LBL_FILE_URL' => 'Dosya url',
    'LBL_REVISIONS_PANEL' => 'Revizyon Detayları',
    'LBL_REVISIONS_SUBPANEL' => 'Revizyonlar',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Doküman Adı:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Alt Kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Yayın Tarihi:',
	'LBL_SF_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	'DEF_CREATE_LOG' => 'Doküman Oluşturuldu',

	//error messages
	'ERR_DOC_NAME'=>'Doküman Adı',
	'ERR_DOC_ACTIVE_DATE'=>'Yayın Tarihi',
	'ERR_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi',
	'ERR_FILENAME'=> 'Dosya Adı',
	'ERR_DOC_VERSION'=> 'Doküman Sürümü',
	'ERR_DELETE_CONFIRM'=> 'Bu revizyonu silmek istediğinizden emin misiniz?',
	'ERR_DELETE_LATEST_VERSION'=> 'Dokümanın son revize edilmiş halini silmeye izniniz yok.',
	'LNK_NEW_MAIL_MERGE' => 'Posta Birleştir',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Posta Birleştir Şablonu:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Dokümanlar',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Doküman Adı',
	'LBL_LIST_IS_TEMPLATE'=>'Şablon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Doküman Tipi',
	'LBL_LIST_SELECTED_REVISION'=>'Seçili Revizyon',
	'LBL_LIST_LATEST_REVISION'=>'En Son Revizyon',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'İlişkili Kontratlar',
	'LBL_LAST_REV_CREATE_DATE'=>'Son revizyon oluşturulma tarihi',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Kontratlar',
    'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Revizyonlar',
    'LBL_DOCUMENT_INFORMATION' => 'Doküman Genel Bakış',
	'LBL_DOC_ID' => 'Belge kaynak ID',
	'LBL_DOC_TYPE' => 'Kaynak',
	'LBL_LIST_DOC_TYPE' => 'Kaynak',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
	'LBL_DOC_URL' => 'Belge Kaynak URL\'si',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dosya Adı',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Dosya Adı',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Müşteriler',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgililer',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Şikayetler',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Fiyat Teklifleri',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Ürünler',
);


?>
