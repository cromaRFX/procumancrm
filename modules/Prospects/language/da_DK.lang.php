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
    'LBL_MODULE_NAME' => 'Målgrupper',
    'LBL_MODULE_ID' => 'Prospekter',
    'LBL_INVITEE' => 'Rapporter',
    'LBL_MODULE_TITLE' => 'Målgrupper: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Målgruppe søgning',
    'LBL_LIST_FORM_TITLE' => 'Målgruppe liste',
    'LBL_NEW_FORM_TITLE' => 'Opret Målgruppe',
    'LBL_PROSPECT' => 'Målgruppe:',
    'LBL_BUSINESSCARD' => 'Visitkort',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_LIST_PROSPECT_NAME' => 'Målgruppe navn',
    'LBL_LIST_TITLE' => 'Titel',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Anden Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_PROSPECT_ROLE' => 'Rolle',
    'LBL_LIST_FIRST_NAME' => 'Fornavn',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt til:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
//END DON'T CONVERT
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_EXISTING_PROSPECT' => 'Brugte en eksisterende kontakt',
    'LBL_CREATED_PROSPECT' => 'Oprettet en ny kontakt',
    'LBL_EXISTING_ACCOUNT' => 'Brugte en eksisterende kunde',
    'LBL_CREATED_ACCOUNT' => 'Oprettet en ny kunde',
    'LBL_CREATED_CALL' => 'Oprettet et nyt opkald',
    'LBL_CREATED_MEETING' => 'Oprettet et nyt møde',
    'LBL_ADDMORE_BUSINESSCARD' => 'Tilføj et andet visitkort',
    'LBL_ADD_BUSINESSCARD' => 'Indtast visitkort',
    'LBL_NAME' => 'Navn:',
    'LBL_FULL_NAME' => 'Navn',
    'LBL_PROSPECT_NAME' => 'Målgruppe navn:',
    'LBL_PROSPECT_INFORMATION' => 'Målgruppe Information',
    'LBL_MORE_INFORMATION' => 'Mere information',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_OFFICE_PHONE' => 'Arbejdstelefon:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Hjem:',
    'LBL_OTHER_PHONE' => 'Andre telefoner:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse Gadenavn:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse By:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse Stat:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse Postnr:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse Gadenavn:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse By:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse Land:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse Stat:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse Postnr:',
    'LBL_TITLE' => 'Titel:',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Anden Email:',
    'LBL_ANY_EMAIL' => 'Nogen Email:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
    'LBL_DO_NOT_CALL' => 'Ønsker ikke opkald:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
    'LBL_ALTERNATE_ADDRESS' => 'Anden adresse:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_CITY' => 'By:',
    'LBL_STATE' => 'Stat:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelse Information',
    'LBL_ADDRESS_INFORMATION' => 'Adresse Information',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_PROSPECT_ROLE' => 'Rolle:',
    'LBL_OPP_NAME' => 'Mulighed Navn:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatisk opret ny kontakt ved importing af vCard fil.',
    'LBL_DUPLICATE' => 'Mulig Duplet Målgruppe',
    'MSG_SHOW_DUPLICATES' => 'Du laver en duplet af kontakten. Du kan enten gemme og oprette kontakten eller klik afbryd.',
    'MSG_DUPLICATE' => 'Du laver en duplet af kontakten. Du kan enten gemme og oprette kontakten eller klik afbryd.',
    'LNK_IMPORT_VCARD' => 'Opret fra vCard',
    'LNK_NEW_ACCOUNT' => 'Opret kunde',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_EMAIL' => 'Arkiver email',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_NEW_APPOINTMENT' => 'Opret aftale',
    'LNK_IMPORT_PROSPECTS' => 'Importer Målgrupper',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne række?',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne kontakt fra sagen?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne rapport?',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette kontakten.',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopier primær adresse til alternativ adresse',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopier alternativ adresse til primær adresse',
    'LBL_SALUTATION' => 'Tiltale',
    'LBL_SAVE_PROSPECT' => 'Gem Målgruppe',
    'LBL_CREATED_OPPORTUNITY' => 'Oprettet en ny mulighed',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Oprettelse af en mulighed kræver en kunde.',
    'LNK_SELECT_ACCOUNT' => "Vælg kunde",
    'LNK_NEW_PROSPECT' => 'Opret Målgruppe',
    'LNK_PROSPECT_LIST' => 'Målgrupper',
    'LNK_NEW_CAMPAIGN' => 'Opret kampagne',
    'LNK_CAMPAIGN_LIST' => 'Kampagner',
    'LNK_NEW_PROSPECT_LIST' => 'Opret Målgruppe liste',
    'LNK_PROSPECT_LIST_LIST' => 'Målgruppe lister',
    'LNK_IMPORT_PROSPECT' => 'Importer Målgrupper',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg checkede Målgrupper',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg checkede Målgrupper',
    'LBL_INVALID_EMAIL' => 'Ugyldig Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Målgrupper',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
    'LBL_CONVERT_BUTTON_KEY' => 'V',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konverter Målgruppe',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konverter Målgruppe',
    'LBL_CONVERTPROSPECT' => 'Konverter Målgruppe',
    'LNK_NEW_CONTACT' => 'Opret kontakt',
    'LBL_CREATED_CONTACT' => "Oprettet en ny kontakt",
    'LBL_BACKTO_PROSPECTS' => 'Tilbage til Målgrupper',
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagne Log',
    'LBL_TRACKER_KEY' => 'Tracker Nøgle',
    'LBL_LEAD_ID' => 'Emne Id',
    'LBL_CONVERTED_LEAD' => 'Konverteret emne',
    'LBL_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kundenavn:',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagner',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
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
    'LBL_EXPORT_EMAIL2' => 'Andre email adresse',

    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
?>
