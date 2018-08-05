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
	'LBL_MODULE_NAME' => 'Dokumen',
	'LBL_MODULE_TITLE' => 'Dokumen: Home',
	'LNK_NEW_DOCUMENT' => 'Buat Dokumen',
	'LNK_DOCUMENT_LIST'=> 'Lihat Dokumen',
	'LBL_DOC_REV_HEADER' => 'Revisi Dokumen',
	'LBL_SEARCH_FORM_TITLE'=> 'Cari Dokumen',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokumen ID',
	'LBL_NAME' => 'Nama Dokumen',
	'LBL_DESCRIPTION' => 'Deskripsi',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Sub Kategori',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Dibuat oleh',
	'LBL_DATE_ENTERED'=> 'Tanggal dimasukkan',
	'LBL_DATE_MODIFIED'=> 'Tanggal diubah',
	'LBL_DELETED' => 'Terhapus',
	'LBL_MODIFIED'=> 'Diubah oleh',
	'LBL_MODIFIED_USER' => 'Diubah oleh',
	'LBL_CREATED'=> 'Dibuat oleh',
	'LBL_REVISIONS'=>'Revisi',
	'LBL_RELATED_DOCUMENT_ID'=>'ID Dokumen terkait',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID Revisi Dokumen yang Terkait',
	'LBL_IS_TEMPLATE'=>'Template?',
	'LBL_TEMPLATE_TYPE'=>'Tipe Dokumen',
	'LBL_ASSIGNED_TO_NAME'=>'Ditugaskan ke:',
	'LBL_REVISION_NAME' => 'Nomor Revisi',
	'LBL_MIME' => 'Tipe Mime',
	'LBL_REVISION' => 'Revisi',
	'LBL_DOCUMENT' => 'Dokumen Terkait',
	'LBL_LATEST_REVISION' => 'Revisi Terakhir',
	'LBL_CHANGE_LOG'=> 'Log Perubahan',
	'LBL_ACTIVE_DATE'=> 'Tanggal Terbit',
	'LBL_EXPIRATION_DATE' => 'Tanggal kadaluarsa',
	'LBL_FILE_EXTENSION'  => 'Ekstensi File',
	'LBL_LAST_REV_MIME_TYPE' => 'Revisi terakhir tipe MIME',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Belum ditentukan',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Dokumen baru',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nama Dokumen:',
	'LBL_FILENAME' => 'Nama File:',
	'LBL_LIST_FILENAME' => 'Nama File',
	'LBL_DOC_VERSION' => 'Revisi:',
	'LBL_FILE_UPLOAD' => 'Nama File',

	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub Kategori:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_LAST_REV_CREATOR' => 'Revisi Dibuat Oleh:',
	'LBL_LASTEST_REVISION_NAME' => 'Nama revisi terakhir:',
	'LBL_SELECTED_REVISION_NAME' => 'Nama revisi terpilih:',
	'LBL_CONTRACT_STATUS' => 'Status kontrak:',
	'LBL_CONTRACT_NAME' => 'Nama kontrak:',
	'LBL_LAST_REV_DATE' => 'Revisi Tanggal:',
	'LBL_DOWNNLOAD_FILE'=> 'Download File:',
	'LBL_DET_RELATED_DOCUMENT'=>'Dokumen terkait:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisi dokumen terkait:",
	'LBL_DET_IS_TEMPLATE'=>'Template? : ',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipe Dokumen:',
	'LBL_DOC_DESCRIPTION'=>'Deskripsi:',
	'LBL_DOC_ACTIVE_DATE'=> 'Tanggal Terbit:',
	'LBL_DOC_EXP_DATE'=> 'Tanggal Kadaluarsa:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Daftar Dokumen',
	'LBL_LIST_DOCUMENT' => 'Dokumen',
	'LBL_LIST_SUBCATEGORY' => 'Sub Kategori',
	'LBL_LIST_REVISION' => 'Revisi',
	'LBL_LIST_LAST_REV_CREATOR' => 'Ditampilkan Oleh',
	'LBL_LIST_LAST_REV_DATE' => 'Tanggal Revisi',
	'LBL_LIST_VIEW_DOCUMENT'=>'Lihat',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Tanggal Terbit',
	'LBL_LIST_EXP_DATE' => 'Tanggal Kadaluarsa',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Linked id',
	'LBL_SELECTED_REVISION_ID' => 'ID revisi terpilih',
	'LBL_LATEST_REVISION_ID' => 'ID Revisi terakhir',
	'LBL_SELECTED_REVISION_FILENAME' => 'Nama file revisi terpilih',
	'LBL_FILE_URL' => 'URL File',
    'LBL_REVISIONS_PANEL' => 'Rincian revisi',
    'LBL_REVISIONS_SUBPANEL' => 'Revisi',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nama Dokumen:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Sub Kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Tanggal diterbitkan:',
	'LBL_SF_EXP_DATE'=> 'Tanggal Kadaluarsa:',

	'DEF_CREATE_LOG' => 'Dokumen Telah Dibuat',

	//error messages
	'ERR_DOC_NAME'=>'Nama Dokumen',
	'ERR_DOC_ACTIVE_DATE'=>'Tanggal Terbit',
	'ERR_DOC_EXP_DATE'=> 'Tanggal Kadaluwarsa',
	'ERR_FILENAME'=> 'Nama File',
	'ERR_DOC_VERSION'=> 'Versi Dokumen',
	'ERR_DELETE_CONFIRM'=> 'Apakah Anda ingin menghapus revisi dokumen ini?',
	'ERR_DELETE_LATEST_VERSION'=> 'Anda tidak diperbolehkan untuk menghapus revisi terbaru dokumen.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Template Mail Merge:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Dokumen',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nama Dokumen',
	'LBL_LIST_IS_TEMPLATE'=>'Template?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipe Dokumen',
	'LBL_LIST_SELECTED_REVISION'=>'Revisi yang Dipilih',
	'LBL_LIST_LATEST_REVISION'=>'Revisi Terakhir',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Kontrak terkait',
	'LBL_LAST_REV_CREATE_DATE'=>'Tanggal Pembuatan Revisi Terakhir',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Kontrak',
    'LBL_CREATED_USER' => 'Dibuat User',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Pengembalian',
    'LBL_DOCUMENT_INFORMATION' => 'Informasi dokumen',
	'LBL_DOC_ID' => 'Document Source ID',
	'LBL_DOC_TYPE' => 'Source',
	'LBL_LIST_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
	'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nama File',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nama File',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Account',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Peluang',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasus',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kerusakan',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Penawaran',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produk',
);


?>
