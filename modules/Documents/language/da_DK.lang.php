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
	'LBL_MODULE_NAME' => 'Dokumenter',
	'LBL_MODULE_TITLE' => 'Dokumenter: Hjem',
	'LNK_NEW_DOCUMENT' => 'Opret dokument',
	'LNK_DOCUMENT_LIST'=> 'Dokumentliste',
	'LBL_DOC_REV_HEADER' => 'Dokument revisioner',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokument Søg',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokument Id',
	'LBL_NAME' => 'Dokumentnavn',
	'LBL_DESCRIPTION' => 'Beskrivelse',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Sub-kategori',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Oprettet af',
	'LBL_DATE_ENTERED'=> 'Oprettelsesdato',
	'LBL_DATE_MODIFIED'=> 'Ændret dato',
	'LBL_DELETED' => 'Slettet',
	'LBL_MODIFIED'=> 'Ændret af id',
	'LBL_MODIFIED_USER' => 'Ændret af',
	'LBL_CREATED'=> 'Oprettet af',
	'LBL_REVISIONS'=>'Revisioner',
	'LBL_RELATED_DOCUMENT_ID'=>'Relateret dokument Id',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Relateret dokument revisionsId',
	'LBL_IS_TEMPLATE'=>'Er en skabelob',
	'LBL_TEMPLATE_TYPE'=>'Dokumenttype',
	'LBL_ASSIGNED_TO_NAME'=>'Tildelt til:',
	'LBL_REVISION_NAME' => 'Revisionsnr',
	'LBL_MIME' => 'Mime type',
	'LBL_REVISION' => 'Revision',
	'LBL_DOCUMENT' => 'Relateret dokument',
	'LBL_LATEST_REVISION' => 'Seneste revision',
	'LBL_CHANGE_LOG'=> 'Ændringslog',
	'LBL_ACTIVE_DATE'=> 'Udgivelsesdato',
	'LBL_EXPIRATION_DATE' => 'Udløbsdato',
	'LBL_FILE_EXTENSION'  => 'Filtype',
	'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Uspecifieret',
    'LBL_HOMEPAGE_TITLE' => 'Mine dokumenter',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nyt dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokumentnavn:',
	'LBL_FILENAME' => 'Filnavn:',
	'LBL_LIST_FILENAME' => 'Filnavn',
	'LBL_DOC_VERSION' => 'Revision:',
	'LBL_FILE_UPLOAD' => 'Filnavn',

	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub-kategori:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_LAST_REV_CREATOR' => 'Revision oprettet af:',
	'LBL_LASTEST_REVISION_NAME' => 'Sidste revisionsnavn:',
	'LBL_SELECTED_REVISION_NAME' => 'Navn på valgt revision',
	'LBL_CONTRACT_STATUS' => 'Kontrakt status:',
	'LBL_CONTRACT_NAME' => 'Kontraktnavn:',
	'LBL_LAST_REV_DATE' => 'Revisionsdato:',
	'LBL_DOWNNLOAD_FILE'=> 'Download fil:',
	'LBL_DET_RELATED_DOCUMENT'=>'Relateret dokument:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Relateret dokument revision:",
	'LBL_DET_IS_TEMPLATE'=>'Skabelon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumenttype:',
	'LBL_DOC_DESCRIPTION'=>'Beskrivelse:',
	'LBL_DOC_ACTIVE_DATE'=> 'Udgivelsesdato:',
	'LBL_DOC_EXP_DATE'=> 'Udløbsdato:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_SUBCATEGORY' => 'Sub-kategori',
	'LBL_LIST_REVISION' => 'Revision',
	'LBL_LIST_LAST_REV_CREATOR' => 'Udgivet af',
	'LBL_LIST_LAST_REV_DATE' => 'Revisionsdato',
	'LBL_LIST_VIEW_DOCUMENT'=>'Se',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Udgivelsesdato',
	'LBL_LIST_EXP_DATE' => 'Udløbsdato',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Linket id',
	'LBL_SELECTED_REVISION_ID' => 'Vælg revision id',
	'LBL_LATEST_REVISION_ID' => 'Sidste revision id',
	'LBL_SELECTED_REVISION_FILENAME' => 'Valgt revision filnavn',
	'LBL_FILE_URL' => 'Fil-URL',
    'LBL_REVISIONS_PANEL' => 'Revision detaljer',
    'LBL_REVISIONS_SUBPANEL' => 'Revisioner',

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
	'ERR_DOC_VERSION'=> 'Dokument version',
	'ERR_DELETE_CONFIRM'=> 'Ønsker du at slette denne dokument revision?',
	'ERR_DELETE_LATEST_VERSION'=> 'Du må ikke slette den seneste revision af dokumentet.',
	'LNK_NEW_MAIL_MERGE' => 'Mail fejl',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mail flet skabelon:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Dokumenter',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentnavn',
	'LBL_LIST_IS_TEMPLATE'=>'Skabelon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumenttype',
	'LBL_LIST_SELECTED_REVISION'=>'Valgte revision',
	'LBL_LIST_LATEST_REVISION'=>'Seneste revision',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Relateret kontrakter',
	'LBL_LAST_REV_CREATE_DATE'=>'Seneste revision Oprettelsesdato',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Genindlæsninger',
    'LBL_DOCUMENT_INFORMATION' => 'Målgruppe Information',
	'LBL_DOC_ID' => 'Dokument kilde id',
	'LBL_DOC_TYPE' => 'Kilde',
	'LBL_LIST_DOC_TYPE' => 'Kilde',
    'LBL_DOC_TYPE_POPUP' => 'Vælg en kilde, som dette dokument vil blive uploadet fra,<br />og hvorfra det vil være til rådighed.',
	'LBL_DOC_URL' => 'Dokument kilde URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dokumentnavn',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De 20 sidst modificeret filer i aftagende orden i listen nedenfor. Brug Søg for at finde andre filer.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Filnavn',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kunder',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Muligheder',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fejlrapport',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Kvoter',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkter',
);


?>
