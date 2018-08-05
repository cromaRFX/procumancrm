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
	'LBL_MODULE_NAME' => 'Dokumen',
	'LBL_MODULE_TITLE' => 'Dokumen: Home',
	'LNK_NEW_DOCUMENT' => 'Buat Dokumen',
	'LNK_DOCUMENT_LIST'=> 'Daftar Dokumen',
	'LBL_SEARCH_FORM_TITLE'=> 'Pencarian Dokumen',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID Dokumen',
	'LBL_NAME' => 'Nama Dokumen',
	'LBL_DESCRIPTION' => 'Deskripsi',
	'LBL_ASSIGNED_TO' => 'Menugaskan ke:',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Sub Kategori',
	'LBL_STATUS' => 'Status',
	'LBL_IS_TEMPLATE'=>'Apakah Sebuah Template',
	'LBL_TEMPLATE_TYPE'=>'Tipe Dokumen',
	'LBL_REVISION_NAME' => 'Nomor Revisi',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Revisi',
	'LBL_DOCUMENT' => 'Dokumen Terkait',
	'LBL_LATEST_REVISION' => 'Revisi Terakhir',
	'LBL_CHANGE_LOG'=> 'Log Perubahan',
	'LBL_ACTIVE_DATE'=> 'Tanggal Penerbitan',
	'LBL_EXPIRATION_DATE' => 'Tanggal Kadaluwarsa',
	'LBL_FILE_EXTENSION'  => 'File Extension',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Tidak Spesifik',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Dokumen Baru',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nama Dokumen:',
	'LBL_FILENAME' => 'Nama Folder:',
	'LBL_FILE_UPLOAD' => 'Nama File',
	'LBL_DOC_VERSION' => 'Revisi:',
	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub Kategori:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipe Dokumen:',
	'LBL_DOC_DESCRIPTION'=>'Deskripsi:',
	'LBL_DOC_ACTIVE_DATE'=> 'Tanggal Penerbitan:',
	'LBL_DOC_EXP_DATE'=> 'Tanggal Kadaluwarsa:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Daftar Dokumen',
	'LBL_LIST_DOCUMENT' => 'Dokumen',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_LIST_SUBCATEGORY' => 'Sub Kategori',
	'LBL_LIST_REVISION' => 'Revisi',
	'LBL_LIST_LAST_REV_CREATOR' => 'Diterbitkan Oleh',
	'LBL_LIST_LAST_REV_DATE' => 'Tanggal Revisi',
	'LBL_LIST_VIEW_DOCUMENT'=>'Lihat',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Tanggal Penerbitan',
	'LBL_LIST_EXP_DATE' => 'Tanggal Kadaluwarsa',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nama Dokumen:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Sub Kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Tanggal Penerbitan:',
	'LBL_SF_EXP_DATE'=> 'Tanggal Kadaluwarsa:',

	'DEF_CREATE_LOG' => 'Dokumen Dibuat',

	//error messages
	'ERR_DOC_NAME'=>'Nama Dokumen',
	'ERR_DOC_ACTIVE_DATE'=>'Tanggal Penerbitan',
	'ERR_DOC_EXP_DATE'=> 'Tanggal Kadaluwarsa',
	'ERR_FILENAME'=> 'Nama File',

	'LBL_TREE_TITLE' => 'Dokumen',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nama Dokumen',

    'LBL_EDIT_BUTTON' => 'Ubah',
    'LBL_REMOVE' => 'Hapus',

);


?>