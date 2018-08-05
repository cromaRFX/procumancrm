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


$mod_strings = array (
	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på at du ønsker at fjerne denne kunde fra projektet?',
	'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
	'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn:',
	'LBL_ACCOUNT' => 'Virksomhed:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
	'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
	'LBL_ANNUAL_REVENUE' => 'Årlig omsætning:',
	'LBL_ANY_ADDRESS' => 'Nogen adresse:',
	'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Sekundære E-mails',
	'LBL_ANY_PHONE' => 'Nogen telefon:',
	'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
	'LBL_RATING' => 'Rating',
	'LBL_ASSIGNED_TO' => 'Tildelt til:',
	'LBL_ASSIGNED_USER' => 'Tildelt til:',
	'LBL_ASSIGNED_TO_ID' => 'Tildelt til:',
	'LBL_BILLING_ADDRESS_CITY' => 'Faktura By:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktura Land:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktura Postnr:',
	'LBL_BILLING_ADDRESS_STATE' => 'Faktura Stat:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Faktura Gadenavn 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Faktura Gadenavn 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Faktura Gadenavn 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Faktura Gadenavn:',
	'LBL_BILLING_ADDRESS' => 'Faktura adresse:',
	'LBL_ACCOUNT_INFORMATION' => 'Virksomhedsinformation',
	'LBL_CITY' => 'By:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
	'LBL_COUNTRY' => 'Land:',
	'LBL_DATE_ENTERED' => 'Oprettet dato:',
	'LBL_DATE_MODIFIED' => 'Ændret dato:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kunder',
	'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse Information',
	'LBL_DESCRIPTION' => 'Beskrivelse:',
	'LBL_DUPLICATE' => 'Mulig kunde duplet',
	'LBL_EMAIL' => 'Email:',
	'LBL_EMPLOYEES' => 'Medarbejdere:',
	'LBL_FAX' => 'Fax:',
	'LBL_INDUSTRY' => 'Industri:',
	'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
	'LBL_LIST_CITY' => 'By',
	'LBL_LIST_EMAIL_ADDRESS' => 'Email adresse',
	'LBL_LIST_PHONE' => 'Telefon',
	'LBL_LIST_STATE' => 'Stat',
	'LBL_LIST_WEBSITE' => 'Hjemmeside',
	'LBL_MEMBER_OF' => 'Medlem af:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Medlemsorganisationer',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Medlemsorganisationer',
	'LBL_NAME'=>'Navn:',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Andre Email:',
	'LBL_OTHER_PHONE' => 'Andre Telefon:',
	'LBL_OWNERSHIP' => 'Ejerskab:',
	'LBL_PARENT_ACCOUNT_ID' => 'Moder kunde ID',
	'LBL_PHONE_ALT' => 'Alternativ Telefon:',
	'LBL_PHONE_FAX' => 'Fax:',
	'LBL_PHONE_OFFICE' => 'Arbejdstelefon:',
	'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Email',
	'LBL_EMAIL_ADDRESSES' => 'Email adresser',
	'LBL_POSTAL_CODE' => 'Postnr:',
	'LBL_PUSH_BILLING' => 'Push Fakturering',
	'LBL_PUSH_SHIPPING' => 'Push Levering',
	'LBL_SAVE_ACCOUNT' => 'Gem kunde',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Leveringsadresse By:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveringsadresse Land:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveringsadresse Postnr:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Leveringsadresse Stat:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveringsadresse Gadenavn 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveringsadresse Gadenavn 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveringsadresse Gadenavn 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Leveringsadresse Gadenavn:',
	'LBL_SHIPPING_ADDRESS' => 'Leveringsadresse:',

	'LBL_STATE' => 'Stat:',
	'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
	'LBL_TYPE' => 'Type:',
	'LBL_USERS_ASSIGNED_LINK'=>'Tildelt brugere',
	'LBL_USERS_CREATED_LINK'=>'Oprettet af brugere',
	'LBL_USERS_MODIFIED_LINK'=>'Ændrede brugere',
	'LBL_VIEW_FORM_TITLE' => 'Kunde oversigt',
	'LBL_WEBSITE' => 'Hjemmeside:',

	'LNK_ACCOUNT_LIST' => 'Kunder',
	'LNK_NEW_ACCOUNT' => 'Ny kunde',

	'MSG_DUPLICATE' => 'Oprettelse af denne kunde kan skabe en duplet.',
	'MSG_SHOW_DUPLICATES' => 'Oprettelse af denne kunde kan skabe en duplet.',

	'NTC_COPY_BILLING_ADDRESS' => 'Kopier faktura adresse til leveringsadresse',
	'NTC_COPY_BILLING_ADDRESS2' => 'Kopier til leveringsoplysninger',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Kopier leveringsadresse til faktura adresse',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopier faktureringsoplysninger',
	'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du ønsker at slette denne række?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Er du sikker på, at du ønsker at slette denne række?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Er du sikker på, at du ønsker at slette denne række?',

    'LBL_EDIT_BUTTON' => 'Rediger',
    'LBL_REMOVE' => 'Slet',

);


