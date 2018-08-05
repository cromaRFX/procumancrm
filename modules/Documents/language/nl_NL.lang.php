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
	'LBL_MODULE_NAME' => 'Documenten',
	'LBL_MODULE_TITLE' => 'Documenten: Home',
	'LNK_NEW_DOCUMENT' => 'Nieuw document',
	'LNK_DOCUMENT_LIST'=> 'Documentenlijst',
	'LBL_DOC_REV_HEADER' => 'Document revisie',
	'LBL_SEARCH_FORM_TITLE'=> 'Documenten zoeken',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Document Id',
	'LBL_NAME' => 'Document naam',
	'LBL_DESCRIPTION' => 'Beschrijving',
	'LBL_CATEGORY' => 'Categorie',
	'LBL_SUBCATEGORY' => 'Sub-categorie',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Gemaakt door',
	'LBL_DATE_ENTERED'=> 'Datum ingevoerd',
	'LBL_DATE_MODIFIED'=> 'Datum gewijzigd',
	'LBL_DELETED' => 'Verwijderd',
	'LBL_MODIFIED'=> 'Gewijzigd door',
	'LBL_MODIFIED_USER' => 'Gewijzigd door',
	'LBL_CREATED'=> 'Gemaakt door',
	'LBL_REVISIONS'=>'Revisies',
	'LBL_RELATED_DOCUMENT_ID'=>'Gerelateerd document ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Gerelateerd document revisie ID',
	'LBL_IS_TEMPLATE'=>'Is een template',
	'LBL_TEMPLATE_TYPE'=>'Documenttype',
	'LBL_ASSIGNED_TO_NAME'=>'Toegewezen aan:',
	'LBL_REVISION_NAME' => 'Revisienummer',
	'LBL_MIME' => 'Mime type',
	'LBL_REVISION' => 'Revisie',
	'LBL_DOCUMENT' => 'Gerelateerd document',
	'LBL_LATEST_REVISION' => 'Laatste revisie',
	'LBL_CHANGE_LOG'=> 'Wijzigings log:',
	'LBL_ACTIVE_DATE'=> 'Plaatsings datum',
	'LBL_EXPIRATION_DATE' => 'Expiratie datum',
	'LBL_FILE_EXTENSION'  => 'Bestandsextensie',
	'LBL_LAST_REV_MIME_TYPE' => 'Laatste wijziging MIME-type',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Ongespecificeerd',
    'LBL_HOMEPAGE_TITLE' => 'Mijn documenten',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nieuw document',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Document naam:',
	'LBL_FILENAME' => 'Bestandsnaam:',
	'LBL_LIST_FILENAME' => 'Bestand:',
	'LBL_DOC_VERSION' => 'Revisie:',
	'LBL_FILE_UPLOAD' => 'Bestand:',

	'LBL_CATEGORY_VALUE' => 'Productcategorie',
	'LBL_LIST_CATEGORY' => 'Categorie',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub-categorie:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revisie gemaakte door:',
	'LBL_LASTEST_REVISION_NAME' => 'Laatste revisie naam:',
	'LBL_SELECTED_REVISION_NAME' => 'Geselecteerde revisie naam:',
	'LBL_CONTRACT_STATUS' => 'Contract status:',
	'LBL_CONTRACT_NAME' => 'Contractnaam:',
	'LBL_LAST_REV_DATE' => 'Revisie datum:',
	'LBL_DOWNNLOAD_FILE'=> 'Download bestand:',
	'LBL_DET_RELATED_DOCUMENT'=>'Gerelateerd document:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Gerelateerd document revisie:",
	'LBL_DET_IS_TEMPLATE'=>'Template? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Documenttype:',
	'LBL_DOC_DESCRIPTION'=>'Omschrijving:',
	'LBL_DOC_ACTIVE_DATE'=> 'Plaatsings datum:',
	'LBL_DOC_EXP_DATE'=> 'Expiratie datum:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Document lijst',
	'LBL_LIST_DOCUMENT' => 'Document',
	'LBL_LIST_SUBCATEGORY' => 'Sub-categorie',
	'LBL_LIST_REVISION' => 'Revisie',
	'LBL_LIST_LAST_REV_CREATOR' => 'Gepubliceerd door',
	'LBL_LIST_LAST_REV_DATE' => 'Revisie datum',
	'LBL_LIST_VIEW_DOCUMENT'=>'Bekijk',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Plaatsings datum',
	'LBL_LIST_EXP_DATE' => 'Expiratie datum',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Verbonden id',
	'LBL_SELECTED_REVISION_ID' => 'Geselecteerde revisie id',
	'LBL_LATEST_REVISION_ID' => 'Laatste herziening id',
	'LBL_SELECTED_REVISION_FILENAME' => 'Geselecteerde revisie bestandsnaam',
	'LBL_FILE_URL' => 'Bestand url',
    'LBL_REVISIONS_PANEL' => 'Herziening Details',
    'LBL_REVISIONS_SUBPANEL' => 'Herzieningen',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Document naam:',
	'LBL_SF_CATEGORY' => 'Productcategorie',
	'LBL_SF_SUBCATEGORY'=> 'Sub-categorie:',
	'LBL_SF_ACTIVE_DATE' => 'Plaatsings datum:',
	'LBL_SF_EXP_DATE'=> 'Expiratie datum:',

	'DEF_CREATE_LOG' => 'Document aangemaakt',

	//error messages
	'ERR_DOC_NAME'=>'Document naam',
	'ERR_DOC_ACTIVE_DATE'=>'Plaatsings datum',
	'ERR_DOC_EXP_DATE'=> 'Expiratie datum',
	'ERR_FILENAME'=> 'Bestandsnaam',
	'ERR_DOC_VERSION'=> 'Document versie',
	'ERR_DELETE_CONFIRM'=> 'Wil je deze revisie van het document verwijderen?',
	'ERR_DELETE_LATEST_VERSION'=> 'Je mag de laatste revisie van een document niet verwijderen.',
	'LNK_NEW_MAIL_MERGE' => 'Mail merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mail merge template:',
	'ERR_MISSING_FILE' => 'Dit document mist een bestand, waarschijnlijk door een fout tijdens het uploaden.  Probeer het bestand nogmaals te uploaden of neem contact op met de beheerder.',

	'LBL_TREE_TITLE' => 'Documenten',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Document naam',
	'LBL_LIST_IS_TEMPLATE'=>'Template?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Documenttype',
	'LBL_LIST_SELECTED_REVISION'=>'Geselecteerde revisie',
	'LBL_LIST_LATEST_REVISION'=>'Laatste revisie',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Gerelateerde contacten',
	'LBL_LAST_REV_CREATE_DATE'=>'Laatste revisie gemaakt op',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Contracten',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversions',
    'LBL_DOCUMENT_INFORMATION' => 'Document Overzicht',
	'LBL_DOC_ID' => 'Document bron ID',
	'LBL_DOC_TYPE' => 'Bron',
	'LBL_LIST_DOC_TYPE' => 'Bron',
    'LBL_DOC_TYPE_POPUP' => 'Selecteer een bron waarop dit document wordt geüpload <br> en van waaruit het beschikbaar zal zijn.',
	'LBL_DOC_URL' => 'Document bron URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Bestandsnaam',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De eerste 20 meest recent gewijzigde bestanden worden weergegeven in aflopende volgorde in de lijst hieronder. Gebruik de zoekfunctie om andere bestanden te vinden.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Bestandsnaam',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'De login controle is mislukt voor API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'De login controle mislukt voor externe API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Relaties',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Klachten',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Aanhalingstekens',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Producten',
);


?>
