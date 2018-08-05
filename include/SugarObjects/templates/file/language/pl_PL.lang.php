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
	'LBL_MODULE_NAME' => 'Dokumenty',
	'LBL_MODULE_TITLE' => 'Dokumenty: Strona Główna',
	'LNK_NEW_DOCUMENT' => 'Utwórz Dokument',
	'LNK_DOCUMENT_LIST'=> 'Dokumenty',
	'LBL_SEARCH_FORM_TITLE'=> 'Wyszukiwanie Dokumentu',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Id Dokumentu',
	'LBL_NAME' => 'Nazwa Dokumentu',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_ASSIGNED_TO' => 'Przypisane do:',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Podktegoria',
	'LBL_STATUS' => 'Status',
	'LBL_IS_TEMPLATE'=>'Szablon?',
	'LBL_TEMPLATE_TYPE'=>'Rodzaj Dokumentu',
	'LBL_REVISION_NAME' => 'Numer Korekty',
	'LBL_MIME' => 'Typ MIME',
	'LBL_REVISION' => 'Korekta',
	'LBL_DOCUMENT' => 'Powiązany Dokument',
	'LBL_LATEST_REVISION' => 'Ostatnia Korekta',
	'LBL_CHANGE_LOG'=> 'Historia Zmian',
	'LBL_ACTIVE_DATE'=> 'Data Rozpoczęcia',
	'LBL_EXPIRATION_DATE' => 'Data Wygaśnięcia Licencji',
	'LBL_FILE_EXTENSION'  => 'Typ pliku',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nieokreślony',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nowy Dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nazwa Dokumentu:',
	'LBL_FILENAME' => 'Nazwa Pliku:',
	'LBL_FILE_UPLOAD' => 'Nazwa Pliku',
	'LBL_DOC_VERSION' => 'Korekta:',
	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Pod Kategoria:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_DET_TEMPLATE_TYPE'=>'Rodzaj Dokumentu:',
	'LBL_DOC_DESCRIPTION'=>'Opis:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data Ropoczęcia:',
	'LBL_DOC_EXP_DATE'=> 'Data Wygaśnięcia Licencji:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista Dokumentów',
	'LBL_LIST_DOCUMENT' => 'Dokumenty',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Podktegoria',
	'LBL_LIST_REVISION' => 'Korekta',
	'LBL_LIST_LAST_REV_CREATOR' => 'Wydane Przez',
	'LBL_LIST_LAST_REV_DATE' => 'Data Korekty',
	'LBL_LIST_VIEW_DOCUMENT'=>'Widok',
    'LBL_LIST_DOWNLOAD'=> 'Ściągnij',
	'LBL_LIST_ACTIVE_DATE' => 'Data Rozpoczęcia',
	'LBL_LIST_EXP_DATE' => 'Data Wygaśnięcia Licencji',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nazwa Dokumentu:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Pod Kategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data Ropoczęcia:',
	'LBL_SF_EXP_DATE'=> 'Data Wygaśnięcia Licencji:',

	'DEF_CREATE_LOG' => 'Dokument Utworzony',

	//error messages
	'ERR_DOC_NAME'=>'Nazwa Dokumentu',
	'ERR_DOC_ACTIVE_DATE'=>'Data Rozpoczęcia',
	'ERR_DOC_EXP_DATE'=> 'Data Wygaśnięcia Licencji',
	'ERR_FILENAME'=> 'Nazwa Pliku',

	'LBL_TREE_TITLE' => 'Dokumenty',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nazwa Dokumentu',

    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usuń',

);


?>