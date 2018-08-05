<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Geef een record ID op om de contactpersoon te verwijderen.',
    'LBL_ACCOUNT_ID' => 'Relatie ID:',
    'LBL_ACCOUNT_NAME' => 'Relatie:',
    'LBL_CAMPAIGN' => 'Campagnes:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADD_BUSINESSCARD' => 'Visitekaartje invoeren',
    'LBL_ADDMORE_BUSINESSCARD' => 'Nog een visitekaartje toevoegen',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ALT_ADDRESS_CITY' => 'Plaats:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Land:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_ALT_ADDRESS_STATE' => 'Provincie:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatief adres 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatief adres 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Straat:',
    'LBL_ALTERNATE_ADDRESS' => 'Alt. Adres:',
    'LBL_ALT_ADDRESS' => 'Andere Adres:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_ANY_EMAIL' => 'Willekeurige E-mail:',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker',
    'LBL_ASSISTANT_PHONE' => 'Telefoonnr assistent',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Geboortedag:',
    'LBL_BUSINESSCARD' => 'Visitekaartje',
    'LBL_CITY' => 'Plaats:',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_CONTACT_INFORMATION' => 'Contactpersoon gegevens',
    'LBL_CONTACT_NAME' => 'Contactpersoon:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contactpersoon-kans:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Naam contactpersoon:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Nieuw telefoongesprek aangemaakt',
    'LBL_CREATED_CONTACT' => 'Nieuwe contactpersoon aangemaakt',
    'LBL_CREATED_MEETING' => 'Nieuwe afspraak aangemaakt',
    'LBL_CREATED_OPPORTUNITY' => 'Nieuwe kans aangemaakt',
    'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Rapporteert aan',
    'LBL_DO_NOT_CALL' => 'Niet bellen:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele contactpersoon',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Bestaande relatie gebruikt',
    'LBL_EXISTING_CONTACT' => 'Bestaande contactpersoon gebruikt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestaande kans gebruikt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_FULL_NAME' => 'Volledige naam:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_HOME_PHONE' => 'Priv',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importeer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Maak automatisch een nieuwe contactpersoon aan door een vCard van uw computer te importeren.',
    'LBL_INVALID_EMAIL' => 'Ongeldige e-mail:',
    'LBL_INVITEE' => 'Rapporteert aan',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Acceptiestatus',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie',
    'LBL_LIST_CONTACT_NAME' => 'Contactpersoon',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Voornaam',
    'LBL_LIST_FORM_TITLE' => 'Contactpersonen',
    'LBL_VIEW_FORM_TITLE' => 'Contactpersonen overzicht',
    'LBL_LIST_LAST_NAME' => 'Achternaam',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Andere e-mail',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_TITLE' => 'Functie',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_MODIFIED' => 'Gewijzigd door gebruiker ID:',
    'LBL_MODULE_NAME' => 'Contactpersonen',
    'LBL_MODULE_TITLE' => 'Contactpersonen: Start',
    'LBL_NAME' => 'Naam:',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe contactpersoon',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nieuw portal wachtwoord:',
    'LBL_NOTE_SUBJECT' => 'Notitie onderwerp',
    'LBL_OFFICE_PHONE' => 'Telefoon (Werk):',
    'LBL_OPP_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Kans rol ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Kans rol',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres:',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_PORTAL_ACTIVE' => 'Portal actief:',
    'LBL_PORTAL_APP' => 'Portal Applicatie:',
    'LBL_PORTAL_INFORMATION' => 'Portal gegevens',
    'LBL_PORTAL_NAME' => 'Portal naam:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal wachtwoord is gezet:',
    'LBL_STREET' => 'Straat',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Provincie:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + Huisnummer:',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
    'LBL_PRODUCTS_TITLE' => 'Producten',
    'LBL_RELATED_CONTACTS_TITLE' => 'Gerelateerde contacten',
    'LBL_REPORTS_TO_ID' => 'Leidinggevende ID:',
    'LBL_REPORTS_TO' => 'Rapporteert aan:',
    'LBL_RESOURCE_NAME' => 'Resource naam',
    'LBL_SALUTATION' => 'Aanhef:',
    'LBL_SAVE_CONTACT' => 'Contactpersoon opslaan',
    'LBL_SEARCH_FORM_TITLE' => 'Contactpersoon zoeken',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteer gekozen contacten.',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecteer gekozen contacten.',
    'LBL_STATE' => 'Provincie:',
    'LBL_SYNC_CONTACT' => 'Synchroniseer naar MS Outlook:',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',
    'LBL_TITLE' => 'Functie:',
    'LNK_CONTACT_LIST' => 'Contactpersonen',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_NEW_ACCOUNT' => 'Nieuw relatie',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
    'LNK_NEW_CASE' => 'Nieuw verzoek',
    'LNK_NEW_CONTACT' => 'Nieuw contactpersoon',
    'LNK_NEW_EMAIL' => 'E-mail archiveren',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_NEW_NOTE' => 'Nieuwe notitie',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_NEW_TASK' => 'Nieuwe taak',
    'LNK_SELECT_ACCOUNT' => "Kies een relatie",
    'MSG_DUPLICATE' => 'Toevoegen van deze contactpersoon kan resulteren in een dubbele contactpersoon. Klik \'Contactpersoon toevoegen\' om door te gaan of Annuleren.',
    'MSG_SHOW_DUPLICATES' => 'Toevoegen van deze contactpersoon kan resulteren in een dubbele contactpersoon. Klik \'Contactpersoon toevoegen\' om door te gaan of Annuleren.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copieer alt. adres naar hoofdadres',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copieer hoofdadres naar alt. adres',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Voor het aanmaken van een kans is een relatie nodig. Maak een nieuwe relatie aan of kies een bestaande relatie waaraan u deze kans wilt koppelen.',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen voor dit verzoek?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen als \'direct report\'?',

    'LBL_USER_PASSWORD' => 'Wachtwoord:',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiëren naar primair adres',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiëren naar ander adres',

    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_PROJECTS_RESOURCES' => 'Project resources',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Campagne (Target van) :',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_STATE' => 'Provincie',
    'LBL_HOMEPAGE_TITLE' => 'Mijn contactpersonen',
    'LBL_OPPORTUNITIES' => 'Kansen',

    'LBL_CHECKOUT_DATE' => 'Checkout datum',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacten',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagnes',
    'LNK_IMPORT_CONTACTS' => 'Importeren Contactpersonen ',

    //For export labels
    'LBL_PHONE_HOME' => 'Telefoon thuis',
    'LBL_PHONE_MOBILE' => 'Telefoon mobiel',
    'LBL_PHONE_WORK' => 'Telefoon werk',
    'LBL_PHONE_OTHER' => 'Telefoon overig',
    'LBL_PHONE_FAX' => 'Fax',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen gebruikersnaam',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruikers-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
    'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
    'LBL_EXPORT_PHONE_HOME' => 'Telefoon thuis',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefoon mobiel',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Gerelateerde contactpersonen emails',
    'LBL_USER_SYNC' => 'Gebruikers sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Evenementen',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Gedelegeerden',

    'LBL_AOP_CASE_UPDATES' => 'Verzoeklijst bijwerken',
    'LBL_CREATE_PORTAL_USER' => 'Aanmaken Portal gebruiker',
    'LBL_ENABLE_PORTAL_USER' => 'Inschakelen Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER' => 'Uitschakelen Portal gebruiker',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker aan te maken',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker in te schakelen',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker uit te schakelen',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal gebruiker aangemaakt',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Ingeschakelt Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Uitgeschakelt Portal gebruiker',
    'LBL_NO_JOOMLA_URL' => 'Geen Portal URL gespecificeerd',
    'LBL_PORTAL_USER_TYPE' => 'Portal gebruikers type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account uitgeschakeld',
);

?>
