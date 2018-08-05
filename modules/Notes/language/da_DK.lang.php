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
	'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
	'LBL_ACCOUNT_ID' => 'Kunde ID:',
	'LBL_CASE_ID' => 'Sags ID:',
	'LBL_CLOSE' => 'Luk:',
	'LBL_COLON' => ':',
	'LBL_CONTACT_ID' => 'Kontakt ID:',
	'LBL_CONTACT_NAME' => 'Kontakt:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Noter',
	'LBL_DESCRIPTION' => 'Beskrivelse',
	'LBL_EMAIL_ADDRESS' => 'Email adresse:',
    'LBL_EMAIL_ATTACHMENT' => 'Email vedhæft',
	'LBL_FILE_MIME_TYPE' => 'Mime Type',
	'LBL_FILE_URL' => 'Fil URL',
	'LBL_FILENAME' => 'Vedhæft:',
	'LBL_LEAD_ID' => 'Emne ID:',
	'LBL_LIST_CONTACT_NAME' => 'Kontakt',
	'LBL_LIST_DATE_MODIFIED' => 'Sidst ændret',
	'LBL_LIST_FILENAME' => 'Vedhæft',
	'LBL_LIST_FORM_TITLE' => 'Note liste',
	'LBL_LIST_RELATED_TO' => 'Relateret til',
	'LBL_LIST_SUBJECT' => 'Emne',
	'LBL_LIST_STATUS' => 'Status',
	'LBL_LIST_CONTACT' => 'Kontakt',
	'LBL_MODULE_NAME' => 'Noter',
	'LBL_MODULE_TITLE' => 'Noter: Hjem',
	'LBL_NEW_FORM_TITLE' => 'Opret note eller vedhæft',
	'LBL_NOTE_STATUS' => 'Noter',
	'LBL_NOTE_SUBJECT' => 'Note emne:',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Vedhæft',
	'LBL_NOTE' => 'Note:',
	'LBL_OPPORTUNITY_ID' => 'Mulighed ID:',
	'LBL_PARENT_ID' => 'Moder ID:',
	'LBL_PARENT_TYPE' => 'Moder Type',
	'LBL_PHONE' => 'Telefon:',
	'LBL_PORTAL_FLAG' => 'Vis i Portal?',
	'LBL_EMBED_FLAG' => 'Indbygget i email?',
	'LBL_PRODUCT_ID' => 'Produkt ID:',
	'LBL_QUOTE_ID' => 'Kvote ID:',
	'LBL_RELATED_TO' => 'Relateret til:',
	'LBL_SEARCH_FORM_TITLE' => 'Note søgning',
	'LBL_STATUS' => 'Status',
	'LBL_SUBJECT' => 'Emne:',
	'LNK_IMPORT_NOTES' => 'Importer noter',
	'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
	'LNK_NOTE_LIST' => 'Noter',
	'LBL_MEMBER_OF' => 'Medlem af:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_REMOVING_ATTACHMENT'=>'Sletter vedhæftede filer...',
    'ERR_REMOVING_ATTACHMENT'=>'Mislykket med at seltte vedhæftede filer...',
    'LBL_CREATED_BY'=>'Oprettet af',
    'LBL_MODIFIED_BY'=>'Ændret af',
    'LBL_SEND_ANYWAYS'=> 'Denne email har ikke noget emne.  Send/gem alligevel?',
	'LBL_LIST_EDIT_BUTTON' => 'Rediger',
	'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
	'LBL_PANEL_DETAILS' => 'Detaljer',
	'LBL_NOTE_INFORMATION' => 'Målgruppe Information',
	'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
	'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'Fornavn',
    'LBL_LAST_NAME' => 'Efternavn',
    'LBL_EXPORT_PARENT_TYPE' => 'Related To Module',
    'LBL_EXPORT_PARENT_ID' => 'Related To ID',
    'LBL_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_DATE_MODIFIED' => 'Ændret dato',
    'LBL_DELETED' => 'Slet',
);

?>
