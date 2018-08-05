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
	'LBL_MODULE_NAME' => 'Dokumente',
	'LBL_MODULE_TITLE' => 'Dokumente: Startseite',
	'LNK_NEW_DOCUMENT' => 'Dokument erstellen',
	'LNK_DOCUMENT_LIST'=> 'Dokumente anzeigen',
	'LBL_DOC_REV_HEADER' => 'Dokumentversionen',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumente suchen',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokument ID',
	'LBL_NAME' => 'Dokumentname',
	'LBL_DESCRIPTION' => 'Beschreibung',
	'LBL_CATEGORY' => 'Kategorie',
	'LBL_SUBCATEGORY' => 'Unterkategorie',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Erstellt von',
	'LBL_DATE_ENTERED'=> 'Erstellungsdatum',
	'LBL_DATE_MODIFIED'=> 'Änderungsdatum',
	'LBL_DELETED' => 'Gelöscht',
	'LBL_MODIFIED'=> 'Geändert von ID',
	'LBL_MODIFIED_USER' => 'Geändert von',
	'LBL_CREATED'=> 'Erstellt von',
	'LBL_REVISIONS'=>'Versionen',
	'LBL_RELATED_DOCUMENT_ID'=>'Verknüpfte Dokument ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Verknüpfte Dokumentversions ID',
	'LBL_IS_TEMPLATE'=>'Ist eine Vorlage',
	'LBL_TEMPLATE_TYPE'=>'Dokumenttyp',
	'LBL_ASSIGNED_TO_NAME'=>'Zugewiesen an:',
	'LBL_REVISION_NAME' => 'Versionsnummer',
	'LBL_MIME' => 'MIME-Typ',
	'LBL_REVISION' => 'Version',
	'LBL_DOCUMENT' => 'Verknüpftes Dokument',
	'LBL_LATEST_REVISION' => 'Letzte Version',
	'LBL_CHANGE_LOG'=> 'Änderungsprotokoll',
	'LBL_ACTIVE_DATE'=> 'Veröffentlichungsdatum',
	'LBL_EXPIRATION_DATE' => 'Ablaufdatum',
	'LBL_FILE_EXTENSION'  => 'Dateiendung',
	'LBL_LAST_REV_MIME_TYPE' => 'MIME Typ letzte Version',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nicht spezifiziert',
    'LBL_HOMEPAGE_TITLE' => 'Eigene Dateien',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Neues Dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokumentname:',
	'LBL_FILENAME' => 'Dateiname:',
	'LBL_LIST_FILENAME' => 'Datei:',
	'LBL_DOC_VERSION' => 'Version:',
	'LBL_FILE_UPLOAD' => 'Datei:',

	'LBL_CATEGORY_VALUE' => 'Kategorie:',
	'LBL_LIST_CATEGORY' => 'Kategorie',
	'LBL_SUBCATEGORY_VALUE'=> 'Unterkategorie:',
	'LBL_DOC_STATUS'=> 'Status',
	'LBL_LAST_REV_CREATOR' => 'Version erstellt von:',
	'LBL_LASTEST_REVISION_NAME' => 'Letzter Versionsname:',
	'LBL_SELECTED_REVISION_NAME' => 'Gewählter Versionsname:',
	'LBL_CONTRACT_STATUS' => 'Vertragsstatus:',
	'LBL_CONTRACT_NAME' => 'Vertragsname:',
	'LBL_LAST_REV_DATE' => 'Versionsdatum:',
	'LBL_DOWNNLOAD_FILE'=> 'Download Datei:',
	'LBL_DET_RELATED_DOCUMENT'=>'Verknüpftes Dokument:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Verknüpfte Version dieses Dokuments:",
	'LBL_DET_IS_TEMPLATE'=>'Vorlage? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Belegart:',
	'LBL_DOC_DESCRIPTION'=>'Beschreibung:',
	'LBL_DOC_ACTIVE_DATE'=> 'Veröffentlichungsdatum:',
	'LBL_DOC_EXP_DATE'=> 'Gültig bis:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_SUBCATEGORY' => 'Unterkategorie',
	'LBL_LIST_REVISION' => 'Version',
	'LBL_LIST_LAST_REV_CREATOR' => 'Veröffentlicht von',
	'LBL_LIST_LAST_REV_DATE' => 'Versionsdatum',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ansicht',
    'LBL_LIST_DOWNLOAD'=> 'Herunterladen',
	'LBL_LIST_ACTIVE_DATE' => 'Veröffentlichungsdatum',
	'LBL_LIST_EXP_DATE' => 'Ablaufdatum',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Verknüpfte-id',
	'LBL_SELECTED_REVISION_ID' => 'Gewählte Versions ID',
	'LBL_LATEST_REVISION_ID' => 'Letzte Versions ID',
	'LBL_SELECTED_REVISION_FILENAME' => 'Gewählter Versions Dateiname',
	'LBL_FILE_URL' => 'Datei URL',
    'LBL_REVISIONS_PANEL' => 'Versionsdetails',
    'LBL_REVISIONS_SUBPANEL' => 'Versionen',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokument Name:',
	'LBL_SF_CATEGORY' => 'Kategorie:',
	'LBL_SF_SUBCATEGORY'=> 'Unterkategorie:',
	'LBL_SF_ACTIVE_DATE' => 'Veröffentlichungsdatum:',
	'LBL_SF_EXP_DATE'=> 'Gültig bis:',

	'DEF_CREATE_LOG' => 'Dokument erstellt',

	//error messages
	'ERR_DOC_NAME'=>'Dokument Name',
	'ERR_DOC_ACTIVE_DATE'=>'Veröffentlichungsdatum',
	'ERR_DOC_EXP_DATE'=> 'Ablaufdatum',
	'ERR_FILENAME'=> 'Dateiname',
	'ERR_DOC_VERSION'=> 'Dokument Version',
	'ERR_DELETE_CONFIRM'=> 'Möchten Sie diese Dokumentversion löschen?',
	'ERR_DELETE_LATEST_VERSION'=> 'Die letzte Version eines Dokuments kann nicht gelöscht werden.',
	'LNK_NEW_MAIL_MERGE' => 'Serienbrief',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Serienbriefvorlage:',
	'ERR_MISSING_FILE' => 'Für dieses Dokument fehlt eine Datei, höchstwahrscheinlich durch einen Fehler beim Hochladen. Bitte versuchen Sie die Datei erneut hochzuladen oder verständigen Sie Ihren Administrator.',

	'LBL_TREE_TITLE' => 'Dokumente',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Name',
	'LBL_LIST_IS_TEMPLATE'=>'Vorlage?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumenttyp',
	'LBL_LIST_SELECTED_REVISION'=>'Gewählte Version',
	'LBL_LIST_LATEST_REVISION'=>'Letzte Version',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Verknüpfte Kontakte',
	'LBL_LAST_REV_CREATE_DATE'=>'Erstellungsdatum Letzte Version',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Verträge',
    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Umkehrungen',
    'LBL_DOCUMENT_INFORMATION' => 'Übersicht',
	'LBL_DOC_ID' => 'ID Dokument Quelle',
	'LBL_DOC_TYPE' => 'Quelle',
	'LBL_LIST_DOC_TYPE' => 'Quelle',
    'LBL_DOC_TYPE_POPUP' => 'Wählen Sie eine Quelle zu welcher dieses Dokument hinaufgeladen werden soll<br> und von welcher es verfügbar sein wird.',
	'LBL_DOC_URL' => 'URL Dokument Quelle',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dateiname',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Die ersten 20 der zuletzt geänderten Dateien sind in absteigender Reihenfolge in der Liste unten angezeigt. Verwenden Sie die Suche, um andere Dateien zu finden.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Dateiname',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Der Benutzer versuchte eine ungültige externe API ({0}) aufzurufen',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Die Login Überprüfung für die externe API ({0}) ist fehlgeschlagen',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Fälle',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Angebote',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkte',
);


?>
