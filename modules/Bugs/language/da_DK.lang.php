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
  'LBL_MODULE_NAME' => 'Fejlrapporter',
  'LBL_MODULE_TITLE' => 'Fejlrapporter: Hjem',
  'LBL_MODULE_ID' => 'Fejl',
  'LBL_SEARCH_FORM_TITLE' => 'Fejl søgning',
  'LBL_LIST_FORM_TITLE' => 'Fejlliste',
  'LBL_NEW_FORM_TITLE' => 'Ny fejl',
  'LBL_CONTACT_BUG_TITLE' => 'Kontakt-fejl:',
  'LBL_SUBJECT' => 'Emne:',
  'LBL_BUG' => 'Fejl:',
  'LBL_BUG_NUMBER' => 'Fejlnr:',
  'LBL_NUMBER' => 'Nummer:',
  'LBL_STATUS' => 'Status',
  'LBL_PRIORITY' => 'Prioritet:',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_CONTACT_NAME' => 'Kontaktnavn:',
  'LBL_BUG_SUBJECT' => 'Fejl emne:',
  'LBL_CONTACT_ROLE' => 'Rolle:',
  'LBL_LIST_NUMBER' => 'Num.',
  'LBL_LIST_SUBJECT' => 'Emne',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_PRIORITY' => 'Prioritet',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Løsning',
  'LBL_LIST_LAST_MODIFIED' => 'Sidst ændret',
  'LBL_INVITEE' => 'Kontakter',
  'LBL_TYPE' => 'Type:',
  'LBL_LIST_TYPE' => 'Type',
  'LBL_RESOLUTION' => 'Løsning:',
  'LBL_RELEASE' => 'Release:',
  'LNK_NEW_BUG' => 'Opret fejl',
  'LNK_BUG_LIST' => 'Fejl',
  'NTC_REMOVE_INVITEE' => 'Er du sikker på at du ønsker at slette denne kontakt fra fejlrapporten?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne fejlrapport fra kunden?',
  'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en fejlrapport.',
  'LBL_LIST_MY_BUGS' => 'Mine tildelte fejlrapporter',
  'LNK_IMPORT_BUGS' => 'Importer fejl',
  'LBL_FOUND_IN_RELEASE' => 'Fundet i Release:',
  'LBL_FIXED_IN_RELEASE' => 'Løst i Release:',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Løst i Release',
  'LBL_WORK_LOG' => 'Aktioner:',
  'LBL_SOURCE' => 'Kilde:',
  'LBL_PRODUCT_CATEGORY' => 'Kategori:',

  'LBL_CREATED_BY' => 'Oprettet af:',
  'LBL_DATE_CREATED' => 'Oprettelsesdato:',
  'LBL_MODIFIED_BY' => 'Sidst ændret af:',
  'LBL_DATE_LAST_MODIFIED' => 'Ændret dato:',

  'LBL_LIST_EMAIL_ADDRESS' => 'Email adresse',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
  'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
  'LBL_LIST_PHONE' => 'Telefon',
  'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne kontakt fra fejlrapporten?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fejlrapporter',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Historik',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kunder',
  'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
  'LBL_SYSTEM_ID' => 'System ID',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
	'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',

	'LBL_BUG_INFORMATION' => 'Målgruppe Information',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Found In Release Name',
    'LBL_PORTAL_VIEWABLE' => 'Portal Viewable',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger ID',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Fixed in Release Name',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af ID',
    'LBL_EXPORT_CREATED_BY' => 'Oprettet af ID',


  );
?>
