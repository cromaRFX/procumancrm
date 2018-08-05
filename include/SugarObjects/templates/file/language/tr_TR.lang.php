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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Dökümanlar',
	'LBL_MODULE_TITLE' => 'Dökümanlar',
	'LNK_NEW_DOCUMENT' => 'Belge Oluştur',
	'LNK_DOCUMENT_LIST'=> 'Belge Listesi',
	'LBL_SEARCH_FORM_TITLE'=> 'Belge Arama',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Belge Id',
	'LBL_NAME' => 'Belge Adı',
	'LBL_DESCRIPTION' => 'Tanım',
	'LBL_ASSIGNED_TO' => 'Atanan Kişi:',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Alt Kategori',
	'LBL_STATUS' => 'Durum',
	'LBL_IS_TEMPLATE'=>'Şablon mu?',
	'LBL_TEMPLATE_TYPE'=>'Belge Tipi',
	'LBL_REVISION_NAME' => 'Revizyon No',
	'LBL_MIME' => 'Mime Tipi',
	'LBL_REVISION' => 'Revizyon',
	'LBL_DOCUMENT' => 'Bağlantılı Belge',
	'LBL_LATEST_REVISION' => 'En Son Revizyon',
	'LBL_CHANGE_LOG'=> 'Değiştirme Günlüğü',
	'LBL_ACTIVE_DATE'=> 'Yayın Tarihi',
	'LBL_EXPIRATION_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_FILE_EXTENSION'  => 'Dosya uzantısı',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Belirtilmemiş',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Yeni Belge',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Belge Adı:',
	'LBL_FILENAME' => 'Dosya Adı:',
	'LBL_FILE_UPLOAD' => 'DOsya adı ',
	'LBL_DOC_VERSION' => 'Revizyon:',
	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_SUBCATEGORY_VALUE'=> 'Alt Kategori:',
	'LBL_DOC_STATUS'=> 'Durum',
	'LBL_DET_TEMPLATE_TYPE'=>'Belge Tipi:',
	'LBL_DOC_DESCRIPTION'=>'Tanım:',
	'LBL_DOC_ACTIVE_DATE'=> 'Yayın Tarihi:',
	'LBL_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Belge Listesi',
	'LBL_LIST_DOCUMENT' => 'Belge',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_LIST_SUBCATEGORY' => 'Alt Kategori',
	'LBL_LIST_REVISION' => 'Revizyon',
	'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan:',
	'LBL_LIST_LAST_REV_DATE' => 'Revizyon Tarihi',
	'LBL_LIST_VIEW_DOCUMENT'=>'Görünüm',
    'LBL_LIST_DOWNLOAD'=> 'İndir',
	'LBL_LIST_ACTIVE_DATE' => 'Yayın Tarihi',
	'LBL_LIST_EXP_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_LIST_STATUS'=>'Durum',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Belge Adı:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Alt Kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Yayın Tarihi:',
	'LBL_SF_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	'DEF_CREATE_LOG' => 'Belge oluşturuldu',

	//error messages
	'ERR_DOC_NAME'=>'Belge Adı',
	'ERR_DOC_ACTIVE_DATE'=>'Yayın Tarihi',
	'ERR_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi',
	'ERR_FILENAME'=> 'Dosya Adı',

	'LBL_TREE_TITLE' => 'Dökümanlar',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Belge Adı',

    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',

);


?>