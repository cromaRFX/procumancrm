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
	'LBL_MODULE_NAME' => 'Dokumenter',
	'LBL_MODULE_TITLE' => 'Dokumenter',
	'LNK_NEW_DOCUMENT' => 'Opret dokument',
	'LNK_DOCUMENT_LIST'=> 'Dokumentliste',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokument Søg',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokument Id',
	'LBL_NAME' => 'Dokumentnavn',
	'LBL_DESCRIPTION' => 'Beskrivelse',
	'LBL_ASSIGNED_TO' => 'Tildelt til:',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Sub-kategori',
	'LBL_STATUS' => 'Status',
	'LBL_IS_TEMPLATE'=>'Er en skabelob',
	'LBL_TEMPLATE_TYPE'=>'Dokumenttype',
	'LBL_REVISION_NAME' => 'Revisionsnr',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Revision',
	'LBL_DOCUMENT' => 'Relateret dokument',
	'LBL_LATEST_REVISION' => 'Seneste revision',
	'LBL_CHANGE_LOG'=> 'Ændringslog',
	'LBL_ACTIVE_DATE'=> 'Udgivelsesdato',
	'LBL_EXPIRATION_DATE' => 'Udløbsdato',
	'LBL_FILE_EXTENSION'  => 'Filtype',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Uspecifieret',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nyt dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokumentnavn:',
	'LBL_FILENAME' => 'Filnavn:',
	'LBL_FILE_UPLOAD' => 'Filnavn',
	'LBL_DOC_VERSION' => 'Revision:',
	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub-kategori:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumenttype:',
	'LBL_DOC_DESCRIPTION'=>'Beskrivelse:',
	'LBL_DOC_ACTIVE_DATE'=> 'Udgivelsesdato:',
	'LBL_DOC_EXP_DATE'=> 'Udløbsdato:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
	'LBL_LIST_DOCUMENT' => 'Dokumenter',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_LIST_SUBCATEGORY' => 'Sub-kategori',
	'LBL_LIST_REVISION' => 'Revision',
	'LBL_LIST_LAST_REV_CREATOR' => 'Udgivet af',
	'LBL_LIST_LAST_REV_DATE' => 'Revisionsdato',
	'LBL_LIST_VIEW_DOCUMENT'=>'Se',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Udgivelsesdato',
	'LBL_LIST_EXP_DATE' => 'Udløbsdato',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokumentnavn:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Sub-kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Udgivelsesdato:',
	'LBL_SF_EXP_DATE'=> 'Udløbsdato:',

	'DEF_CREATE_LOG' => 'Dokument Oprettet',

	//error messages
	'ERR_DOC_NAME'=>'Dokumentnavn',
	'ERR_DOC_ACTIVE_DATE'=>'Udgivelsesdato',
	'ERR_DOC_EXP_DATE'=> 'Udløbsdato',
	'ERR_FILENAME'=> 'Filnavn',

	'LBL_TREE_TITLE' => 'Dokumenter',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentnavn',

    'LBL_EDIT_BUTTON' => 'Edit ',
    'LBL_REMOVE' => 'Slet',

);


?>