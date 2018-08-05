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
	'LBL_MODULE_NAME' => 'Dokumentumok',
	'LBL_MODULE_TITLE' => 'Dokumentumok: Főoldal',
	'LNK_NEW_DOCUMENT' => 'Dokumentum létrehozása',
	'LNK_DOCUMENT_LIST'=> 'Dokumentumok megtekintése',
	'LBL_DOC_REV_HEADER' => 'Dokumentum felülvizsgálata',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumentum keresése',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokumentum azonosító',
	'LBL_NAME' => 'Dokumentum neve',
	'LBL_DESCRIPTION' => 'Leírás',
	'LBL_CATEGORY' => 'Kategória',
	'LBL_SUBCATEGORY' => 'Alkategória',
	'LBL_STATUS' => 'Állapot',
	'LBL_CREATED_BY'=> 'Létrehozta',
	'LBL_DATE_ENTERED'=> 'Dátum rögzítve',
	'LBL_DATE_MODIFIED'=> 'Dátum módosítva',
	'LBL_DELETED' => 'Törölve',
	'LBL_MODIFIED'=> 'Módosító azonosítója',
	'LBL_MODIFIED_USER' => 'Módosította',
	'LBL_CREATED'=> 'Létrehozta',
	'LBL_REVISIONS'=>'Módosítások',
	'LBL_RELATED_DOCUMENT_ID'=>'Kapcsolódó dokumentum azonosítója',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Kapcsolódó dokumentum módosítás azonosítója',
	'LBL_IS_TEMPLATE'=>'Ez egy sablon',
	'LBL_TEMPLATE_TYPE'=>'Dokumentum típus',
	'LBL_ASSIGNED_TO_NAME'=>'Felelős:',
	'LBL_REVISION_NAME' => 'Felülvizsgálat száma',
	'LBL_MIME' => 'Mime típus',
	'LBL_REVISION' => 'Módosítás',
	'LBL_DOCUMENT' => 'Kapcsolódó dokumentum',
	'LBL_LATEST_REVISION' => 'Utolsó módosítás',
	'LBL_CHANGE_LOG'=> 'Változásnapló',
	'LBL_ACTIVE_DATE'=> 'Közzététel dátuma',
	'LBL_EXPIRATION_DATE' => 'Lejárat dátuma',
	'LBL_FILE_EXTENSION'  => 'Fájl kiterjesztése',
	'LBL_LAST_REV_MIME_TYPE' => 'Utolsó módosítás MIME típusa',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nincs részletezve',
    'LBL_HOMEPAGE_TITLE' => 'Dokumentumaim',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Új dokumentum',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokumentum neve:',
	'LBL_FILENAME' => 'Fájlnév:',
	'LBL_LIST_FILENAME' => 'Fájlnév',
	'LBL_DOC_VERSION' => 'Módosítás:',
	'LBL_FILE_UPLOAD' => 'Fájlnév',

	'LBL_CATEGORY_VALUE' => 'Kategória:',
	'LBL_LIST_CATEGORY' => 'Kategória',
	'LBL_SUBCATEGORY_VALUE'=> 'Alkategória:',
	'LBL_DOC_STATUS'=> 'Állapot:',
	'LBL_LAST_REV_CREATOR' => 'A módosítást készítette:',
	'LBL_LASTEST_REVISION_NAME' => 'Utolsó módosítás neve:',
	'LBL_SELECTED_REVISION_NAME' => 'Kiválasztott módosítás neve:',
	'LBL_CONTRACT_STATUS' => 'Szerződés státusz:',
	'LBL_CONTRACT_NAME' => 'Szeződés neve:',
	'LBL_LAST_REV_DATE' => 'Módosítás dátuma:',
	'LBL_DOWNNLOAD_FILE'=> 'Fájl letöltés:',
	'LBL_DET_RELATED_DOCUMENT'=>'Kapcsolódó dokumentum:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Kapcsolódó dokumentum módosítása:",
	'LBL_DET_IS_TEMPLATE'=>'Sablon?:',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumentum típusa:',
	'LBL_DOC_DESCRIPTION'=>'Leírás:',
	'LBL_DOC_ACTIVE_DATE'=> 'Közzététel dátuma:',
	'LBL_DOC_EXP_DATE'=> 'Lejárat dátuma:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumentum lista',
	'LBL_LIST_DOCUMENT' => 'Dokumentum',
	'LBL_LIST_SUBCATEGORY' => 'Alkategória',
	'LBL_LIST_REVISION' => 'Módosítás',
	'LBL_LIST_LAST_REV_CREATOR' => 'Közzétette',
	'LBL_LIST_LAST_REV_DATE' => 'Módosítás dátuma',
	'LBL_LIST_VIEW_DOCUMENT'=>'Mutat',
    'LBL_LIST_DOWNLOAD'=> 'Letöltés',
	'LBL_LIST_ACTIVE_DATE' => 'Közzététel dátuma',
	'LBL_LIST_EXP_DATE' => 'Lejárat dátuma',
	'LBL_LIST_STATUS'=>'Állapot',
	'LBL_LINKED_ID' => 'Kapcsolódás azonosító',
	'LBL_SELECTED_REVISION_ID' => 'Kiválasztott módosítás azonosítója',
	'LBL_LATEST_REVISION_ID' => 'Legutóbbi módosítás azonosítója',
	'LBL_SELECTED_REVISION_FILENAME' => 'Kiválasztott módosítás fájlneve',
	'LBL_FILE_URL' => 'Fájl URL',
    'LBL_REVISIONS_PANEL' => 'Módosítás részletei',
    'LBL_REVISIONS_SUBPANEL' => 'Módosítások',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokumentum neve:',
	'LBL_SF_CATEGORY' => 'Kategória:',
	'LBL_SF_SUBCATEGORY'=> 'Alkategória',
	'LBL_SF_ACTIVE_DATE' => 'Közzététel dátuma:',
	'LBL_SF_EXP_DATE'=> 'Lejárat dátuma:',

	'DEF_CREATE_LOG' => 'Dokumentum létrehozva',

	//error messages
	'ERR_DOC_NAME'=>'Dokumentum neve',
	'ERR_DOC_ACTIVE_DATE'=>'Közzététel dátuma',
	'ERR_DOC_EXP_DATE'=> 'Lejárat dátuma',
	'ERR_FILENAME'=> 'Fájlnév',
	'ERR_DOC_VERSION'=> 'Dokumentum verziója',
	'ERR_DELETE_CONFIRM'=> 'Biztos, hogy törölni akarja ezt a dokumentum módosítást?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nincs jogosultsága törölni a dokumentum utolsó módosítását.',
	'LNK_NEW_MAIL_MERGE' => 'Körlevél',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Körlevél Sablon:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Dokumentumok',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentum neve',
	'LBL_LIST_IS_TEMPLATE'=>'Sablon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumentum típus',
	'LBL_LIST_SELECTED_REVISION'=>'Kiválasztott módosítás',
	'LBL_LIST_LATEST_REVISION'=>'Utolsó módosítás',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Kapcsolódó szerződések',
	'LBL_LAST_REV_CREATE_DATE'=>'Utolsó módosítás létrehozásának dátuma',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Szerződések',
    'LBL_CREATED_USER' => 'Létrehozott felhasználó',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Visszaállítások',
    'LBL_DOCUMENT_INFORMATION' => 'Dokumentum áttekintése',
	'LBL_DOC_ID' => 'Dokumentum Forrás azonosító',
	'LBL_DOC_TYPE' => 'Forrás:',
	'LBL_LIST_DOC_TYPE' => 'Forrás:',
    'LBL_DOC_TYPE_POPUP' => 'Válassza ki a forrást ahonnan feltölti a dokumentumot, és ahonnan elérhető lesz.',
	'LBL_DOC_URL' => 'Dokumentum forrás URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dokumentum neve:',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Az alábbi listában az első 20 legutóbb módosított fájl található csökkenő sorrendben. Használja a Keresés gombot egyéb fájlok megtalálásához.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Fájlnév',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibák',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Termékek',
);


?>
