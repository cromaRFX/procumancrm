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
	// DON'T CONVERT THESE THEY ARE MAPPINGS
	'db_name' => 'LBL_LIST_ACCOUNT_NAME',
	'db_website' => 'LBL_LIST_WEBSITE',
	'db_billing_address_city' => 'LBL_LIST_CITY',
	// END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
	// Dashlet Categories
	'LBL_CHARTS'    => 'Grafer',
	'LBL_DEFAULT' => 'Oversigter',
	'LBL_MISC'    => 'Diverse',
	'LBL_UTILS'    => 'Værktøjer',
	// END Dashlet Categories

	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på at du ønsker at slette denne kunde fra projektet?',
	'ERR_DELETE_RECORD' => 'Du ska angive en række for at slette kunden.',
	'LBL_ACCOUNT_INFORMATION' => 'Kunde Information',
	'LBL_ACCOUNT_NAME' => 'Kundenavn:',
	'LBL_ACCOUNT' => 'Kunde:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
	'LBL_ADDRESS_INFORMATION' => 'Adresse Information',
	'LBL_ANNUAL_REVENUE' => 'Årlig omsætning:',
	'LBL_ANY_ADDRESS' => 'Nogen adresse:',
	'LBL_ANY_EMAIL' => 'Nogen email:',
	'LBL_ANY_PHONE' => 'Nogen telefon:',
	'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
	'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger:',
	'LBL_BILLING_ADDRESS_CITY' => 'Faktura By:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktura Land:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktura Postnr:',
	'LBL_BILLING_ADDRESS_STATE' => 'Faktura Stat:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Faktura Gadenavn 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Faktura Gadenavn 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Faktura Gadenavn 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Faktura Gadenavn:',
	'LBL_BILLING_ADDRESS' => 'Faktura adresse:',
	'LBL_BUG_FORM_TITLE' => 'Kunder',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Fejl',
	'LBL_CALLS_SUBPANEL_TITLE' => 'Opkald',
	'LBL_CAMPAIGN_ID' => 'Kampagne ID',
	'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
	'LBL_CITY' => 'By:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
	'LBL_COUNTRY' => 'Land:',
	'LBL_DATE_ENTERED' => 'Oprettelsesdato:',
	'LBL_DATE_MODIFIED' => 'Ændret dato:',
	'LBL_MODIFIED_ID'=>'Ændret af Id',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kunder',
	'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse Information',
	'LBL_DESCRIPTION' => 'Beskrivelse:',
	'LBL_DUPLICATE' => 'Mulig duplet kunde',
	'LBL_EMAIL' => 'Email:',
	'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
	'LBL_EMAIL_ADDRESSES' => 'Email adresser',
	'LBL_EMPLOYEES' => 'Medarbejdere:',
	'LBL_FAX' => 'Fax:',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historik',
	'LBL_HOMEPAGE_TITLE' => 'Mine kunder',
	'LBL_INDUSTRY' => 'Industri:',
	'LBL_INVALID_EMAIL'=>'Ugyldig Email:',
	'LBL_INVITEE' => 'Kontakter',
	'LBL_LEADS_SUBPANEL_TITLE' => 'Emner',
	'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
	'LBL_LIST_CITY' => 'By',
	'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
	'LBL_LIST_EMAIL_ADDRESS' => 'Email adresse',
	'LBL_LIST_FORM_TITLE' => 'Kundeliste',
	'LBL_LIST_PHONE' => 'Telefon',
	'LBL_LIST_STATE' => 'Stat',
	'LBL_LIST_WEBSITE' => 'Hjemmeside',
	'LBL_MEETINGS_SUBPANEL_TITLE' => 'Møder',
	'LBL_MEMBER_OF' => 'Medlem af:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Medlemsorganisationer',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Medlemsorganisationer',
	'LBL_MODULE_NAME' => 'Kunder',
	'LBL_MODULE_TITLE' => 'Kunder: Hjem',
	'LBL_MODULE_ID'=> 'Kunder',
	'LBL_NAME'=>'Navn:',
	'LBL_NEW_FORM_TITLE' => 'Ny kunde',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Muligheder',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Andre Emails:',
	'LBL_OTHER_PHONE' => 'Andre Telefoner:',
	'LBL_OWNERSHIP' => 'Ejerskab:',
	'LBL_PARENT_ACCOUNT_ID' => 'Moder kunde ID',
	'LBL_PHONE_ALT' => 'Alternativ Telefon:',
	'LBL_PHONE_FAX' => 'Fax:',
	'LBL_PHONE_OFFICE' => 'Arbejdstelefon:',
	'LBL_PHONE' => 'Telefon:',
	'LBL_POSTAL_CODE' => 'Postnr:',
	'LBL_PRODUCTS_TITLE'=>'Produkter',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
	'LBL_PUSH_BILLING' => 'Push Faktura',
	'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopier til kontakter',
	'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopier...',
	'LBL_PUSH_SHIPPING' => 'Push Levering',
	'LBL_RATING' => 'Rating:',
	'LBL_SAVE_ACCOUNT' => 'Gem kunde',
	'LBL_SEARCH_FORM_TITLE' => 'Kunde søgning',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Leveringsadresse By:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveringsadresse Land:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveringsadresse Postnr:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Leveringsadresse Stat:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveringsadresse Gadenavn 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveringsadresse Gadenavn 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveringsadresse Gadenavn 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Leveringsadresse Gadenavn:',
	'LBL_SHIPPING_ADDRESS' => 'Leveringsadresse:',
	'LBL_SIC_CODE' => 'SIC kode:',
	'LBL_STATE' => 'Stat:',
	'LBL_TASKS_SUBPANEL_TITLE' => 'Opgaver',
	'LBL_TEAMS_LINK'=>'Team',
	'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
	'LBL_TYPE' => 'Type:',
	'LBL_USERS_ASSIGNED_LINK'=>'Tildelte brugere',
	'LBL_USERS_CREATED_LINK'=>'Oprettet af brugere',
	'LBL_USERS_MODIFIED_LINK'=>'Ændret af brugere',
	'LBL_VIEW_FORM_TITLE' => 'Kunde oversigt',
	'LBL_WEBSITE' => 'Hjemmeside:',
	'LBL_CREATED_ID'=>'Oprettet af Id',
	'LBL_CAMPAIGNS' =>'Kampagner',
	'LNK_ACCOUNT_LIST' => 'Kunde',
	'LNK_NEW_ACCOUNT' => 'Opret kunde',
	'LNK_IMPORT_ACCOUNTS' => 'Importér virksomheder',
	'MSG_DUPLICATE' => 'Du er ved at oprette en duplet kunde. Du kan enten vælge en kunde fra nedenstående liste eller du kan klikke på gem og oprette kunden.',
	'MSG_SHOW_DUPLICATES' => 'Du opretter en duplet kunde. Klik Gem eller Afbryd.',
	'NTC_COPY_BILLING_ADDRESS' => 'Kopier faktura adresse til leveringsadresse',
	'NTC_COPY_BILLING_ADDRESS2' => 'Kopier til levering',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Kopier leveringsadresse til faktura adresse',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopier til faktura',
	'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne række?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne række?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne række?',
	'LBL_ASSIGNED_USER_NAME' => 'Tildelt til:',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'Kunder',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
	'LBL_COPY' => 'Copy' /*for 508 compliance fix*/,
    //For export labels
    'LBL_ACCOUNT_TYPE' => 'Account Type',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_PHONE_ALTERNATE' => 'Phone Alternate',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
	'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',
);
?>
