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
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kontakt.',
    'LBL_ACCOUNT_ID' => 'Kunde ID:',
    'LBL_ACCOUNT_NAME' => 'Kundenavn:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADD_BUSINESSCARD' => 'Indtast visitkort',
    'LBL_ADDMORE_BUSINESSCARD' => 'Tilføj et andet visitkort',
    'LBL_ADDRESS_INFORMATION' => 'Adresse information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse By:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse Land:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse Postnr:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse Stat:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adresse Gadenavn 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adresse Gadenavn 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse Gadenavn:',
    'LBL_ALTERNATE_ADDRESS' => 'Anden adresse:',
    'LBL_ALT_ADDRESS' => 'Anden adresse:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_BUSINESSCARD' => 'Visitkort',
    'LBL_CITY' => 'By:',
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_CONTACT_INFORMATION' => 'Kontakt information',
    'LBL_CONTACT_NAME' => 'Kontaktnavn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-mulighed:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Opret en ny kunde',
    'LBL_CREATED_CALL' => 'Oprettede et nyt opkald',
    'LBL_CREATED_CONTACT' => 'Oprettede en ny kontakt',
    'LBL_CREATED_MEETING' => 'Oprettede et nyt møde',
    'LBL_CREATED_OPPORTUNITY' => 'Oprettede en ny mulighed',
    'LBL_DATE_MODIFIED' => 'Ændret dato:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse information',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Rapporter',
    'LBL_DO_NOT_CALL' => 'Ønsker ikke opkald:',
    'LBL_DUPLICATE' => 'Mulig kontakt duplet',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Brugte en eksisterende kunde',
    'LBL_EXISTING_CONTACT' => 'Brugte en eksisterende kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Brugte en eksisterende mulighed',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_FULL_NAME' => 'Fuldenavn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_HOME_PHONE' => 'Hjem:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatisk oprettelse af en ny kontakt ved importering af vCard fil.',
    'LBL_INVALID_EMAIL' => 'Ugyldig email:',
    'LBL_INVITEE' => 'Rapporter',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_LEAD_SOURCE' => 'Kilde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accepter status',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_FIRST_NAME' => 'Fornavn',
    'LBL_LIST_FORM_TITLE' => 'Kontakt liste',
    'LBL_VIEW_FORM_TITLE' => 'Kontakt oversigt',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Anden email',
    'LBL_LIST_PHONE' => 'Arbejdstelefonnr',
    'LBL_LIST_TITLE' => 'Titel',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Ændret af:',
    'LBL_MODULE_NAME' => 'Kontakter',
    'LBL_MODULE_TITLE' => 'Kontakter: Hjem',
    'LBL_NAME' => 'Navn:',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_NEW_PORTAL_PASSWORD' => 'Ny portal adgangskode:',
    'LBL_NOTE_SUBJECT' => 'Note emne',
    'LBL_OFFICE_PHONE' => 'Arbejdstelefon:',
    'LBL_OPP_NAME' => 'Navn på mulighed:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Mulighed rolle ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Mulighed rolle',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Anden email:',
    'LBL_OTHER_PHONE' => 'Anden telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portal aktiv:',
    'LBL_PORTAL_APP' => 'Portal applikation:',
    'LBL_PORTAL_INFORMATION' => 'Portal information',
    'LBL_PORTAL_NAME' => 'Portalnavn:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal adgangskode er sat:',
    'LBL_STREET' => 'Gade',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse By:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse Postnr:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse Stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær adresse Gadenavn 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær adresse Gadenavn 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse Gadenavn:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
    'LBL_PRODUCTS_TITLE' => 'Produkter',
    'LBL_RELATED_CONTACTS_TITLE' => 'Relateret kontakter',
    'LBL_REPORTS_TO_ID' => 'Overordnet ID:',
    'LBL_REPORTS_TO' => 'Overordnet:',
    'LBL_RESOURCE_NAME' => 'Ressourcenavn',
    'LBL_SALUTATION' => 'Tiltale:',
    'LBL_SAVE_CONTACT' => 'Gem kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Kontakt søg',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg checkede kontakter',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg checkede kontakter',
    'LBL_STATE' => 'Stat:',
    'LBL_SYNC_CONTACT' => 'Synk med Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
    'LBL_TITLE' => 'Titel:',
    'LNK_CONTACT_LIST' => 'Kontakter',
    'LNK_IMPORT_VCARD' => 'Opret med vCard',
    'LNK_NEW_ACCOUNT' => 'Opret kunde',
    'LNK_NEW_APPOINTMENT' => 'Opret aftale',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_CONTACT' => 'Opret kontakt',
    'LNK_NEW_EMAIL' => 'Arkiver email',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_NOTE' => 'Opret note',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_SELECT_ACCOUNT' => "Vælg kunde",
    'MSG_DUPLICATE' => 'Du er ved at kopiere kontakten. Du kan enten vælge en kontakt fra nedenstående liste eller du kan klikke på Gem for at oprette kontakten.',
    'MSG_SHOW_DUPLICATES' => 'Du er ved at kopiere kontakten. Klik enten Gem for at oprette dupletten eller afbryd for at forlade uden at gemme.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopier alternative adresse til primær adresse',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopier primær adresse til alternativ adresse',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker du ønsker at slette denne række?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Oprettelse af en mulighed kræver en kunde.',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne kontakt fra sagen?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne rapport?',

    'LBL_USER_PASSWORD' => 'Adgangskode:',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Emne',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Muligheder',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy to Primary Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy to Other Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fejl',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Kampagner (Målgruppe) :',
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagner',
    'LBL_LIST_CITY' => 'By',
    'LBL_LIST_STATE' => 'Stat',
    'LBL_HOMEPAGE_TITLE' => 'Mine kontakter',
    'LBL_OPPORTUNITIES' => 'Muligheder',

    'LBL_CHECKOUT_DATE' => 'Check ud dato',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagner',
    'LNK_IMPORT_CONTACTS' => 'Importér kontakter',

    //For export labels
    'LBL_PHONE_HOME' => 'Phone Home',
    'LBL_PHONE_MOBILE' => 'Mobil',
    'LBL_PHONE_WORK' => 'Phone Work',
    'LBL_PHONE_OTHER' => 'Phone Other',
    'LBL_PHONE_FAX' => 'Fax:',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af ID',
    'LBL_EXPORT_CREATED_BY' => 'Oprettet af ID',
    'LBL_EXPORT_PHONE_HOME' => 'Privat telefonnr',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobil',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
);

?>
