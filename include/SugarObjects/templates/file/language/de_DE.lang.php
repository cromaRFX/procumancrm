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
	'LBL_MODULE_NAME' => 'Dokumente',
	'LBL_MODULE_TITLE' => 'Dokumente',
	'LNK_NEW_DOCUMENT' => 'Neues Dokument',
	'LNK_DOCUMENT_LIST'=> 'Dokumentenliste',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumente Suche',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokument ID',
	'LBL_NAME' => 'Dokument Name',
	'LBL_DESCRIPTION' => 'Beschreibung',
	'LBL_ASSIGNED_TO' => 'Zugewiesen an:',
	'LBL_CATEGORY' => 'Kategorie',
	'LBL_SUBCATEGORY' => 'Unterkategorie',
	'LBL_STATUS' => 'Status',
	'LBL_IS_TEMPLATE'=>'Ist ein Template',
	'LBL_TEMPLATE_TYPE'=>'Dokumententyp',
	'LBL_REVISION_NAME' => 'Versionsnummer',
	'LBL_MIME' => 'Mime-Typ',
	'LBL_REVISION' => 'Version',
	'LBL_DOCUMENT' => 'Verknüpftes Dokument',
	'LBL_LATEST_REVISION' => 'Letzte Version',
	'LBL_CHANGE_LOG'=> 'Änderungs-Log:',
	'LBL_ACTIVE_DATE'=> 'Veröffentlichungsdatum',
	'LBL_EXPIRATION_DATE' => 'Ablaufdatum',
	'LBL_FILE_EXTENSION'  => 'Dateiendung',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Unspezifisch',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Neues Dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokument Name:',
	'LBL_FILENAME' => 'Dateiname:',
	'LBL_FILE_UPLOAD' => 'Dateinamen',
	'LBL_DOC_VERSION' => 'Version:',
	'LBL_CATEGORY_VALUE' => 'Kategorie',
	'LBL_SUBCATEGORY_VALUE'=> 'Unterkategorie:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumententyp:',
	'LBL_DOC_DESCRIPTION'=>'Beschreibung:',
	'LBL_DOC_ACTIVE_DATE'=> 'Veröffentlichungsdatum:',
	'LBL_DOC_EXP_DATE'=> 'Ablaufdatum:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumente Liste',
	'LBL_LIST_DOCUMENT' => 'Dokumente',
	'LBL_LIST_CATEGORY' => 'Kategorie',
	'LBL_LIST_SUBCATEGORY' => 'Unterkategorie',
	'LBL_LIST_REVISION' => 'Version',
	'LBL_LIST_LAST_REV_CREATOR' => 'Veröffentlicht von',
	'LBL_LIST_LAST_REV_DATE' => 'Versionsdatum',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ansicht',
    'LBL_LIST_DOWNLOAD'=> 'Herunterladen',
	'LBL_LIST_ACTIVE_DATE' => 'Veröffentlichungsdatum',
	'LBL_LIST_EXP_DATE' => 'Ablaufdatum',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokument Name:',
	'LBL_SF_CATEGORY' => 'Kategorie',
	'LBL_SF_SUBCATEGORY'=> 'Unterkategorie:',
	'LBL_SF_ACTIVE_DATE' => 'Veröffentlichungsdatum:',
	'LBL_SF_EXP_DATE'=> 'Ablaufdatum:',

	'DEF_CREATE_LOG' => 'Dokument erstellt:',

	//error messages
	'ERR_DOC_NAME'=>'Dokument Name',
	'ERR_DOC_ACTIVE_DATE'=>'Veröffentlichungsdatum',
	'ERR_DOC_EXP_DATE'=> 'Ablaufdatum',
	'ERR_FILENAME'=> 'Dateiname',

	'LBL_TREE_TITLE' => 'Dokumente',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokument Name',

    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',

);


?>