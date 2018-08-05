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
    'LBL_MODULE_NAME' => 'Muligheder',
    'LBL_MODULE_TITLE' => 'Muligheder: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Mulighed søgning',
    'LBL_VIEW_FORM_TITLE' => 'Mulighed oversigt',
    'LBL_LIST_FORM_TITLE' => 'Mulighed liste',
    'LBL_OPPORTUNITY_NAME' => 'Mulighed Navn:',
    'LBL_OPPORTUNITY' => 'Mulighed:',
    'LBL_NAME' => 'Mulighed Navn',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_CURRENCIES' => 'Valutaer',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Mulighed',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_AMOUNT' => 'Beløb',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Beløb',
    'LBL_LIST_DATE_CLOSED' => 'Luk',
    'LBL_LIST_SALES_STAGE' => 'Salgsstadie',
    'LBL_ACCOUNT_ID' => 'Kunde ID',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    'LBL_CURRENCY_NAME' => 'Valutanavn',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Mulighed - Valuta Opdatering',
    'UPDATE_DOLLARAMOUNTS' => 'Opdatering U.S. Dollar beløb',
    'UPDATE_VERIFY' => 'Verificer beløb',
    'UPDATE_VERIFY_TXT' => 'Verificer at beløbet er valide beløb med cifre (0-9) og decimaler(,.)',
    'UPDATE_FIX' => 'Fix beløb',
    'UPDATE_FIX_TXT' => 'Prøver at fixe ugyldige beløb.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Opdater U.S. Dollar beløbet.',
    'UPDATE_CREATE_CURRENCY' => 'Opretter ny valuta:',
    'UPDATE_VERIFY_FAIL' => 'Mislykket række verifikation:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Nuværende beløb:',
    'UPDATE_VERIFY_FIX' => 'Fix vil give',
    'UPDATE_INCLUDE_CLOSE' => 'Incl lukkede rækker',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nyt beløb:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
    'UPDATE_DONE' => 'Færdig',
    'UPDATE_BUG_COUNT' => 'Fejl fundet og forsøgt løst:',
    'UPDATE_BUGFOUND_COUNT' => 'Fejl fundet:',
    'UPDATE_COUNT' => 'Rækker opdateret:',
    'UPDATE_RESTORE_COUNT' => 'Række beløb genetableret:',
    'UPDATE_RESTORE' => 'Genetabler beløb',
    'UPDATE_RESTORE_TXT' => 'Genetabler beløb fra backup dannet i forbindelse med fix kørsel.',
    'UPDATE_FAIL' => 'Kunne ikke opdatere - ',
    'UPDATE_NULL_VALUE' => 'Beløb er NULL sættes til 0 -',
    'UPDATE_MERGE' => 'Flet valutaer',
    'UPDATE_MERGE_TXT' => 'Fletter flere valutaer til en valuta.',
    'LBL_ACCOUNT_NAME' => 'Kundenavn:',
    'LBL_AMOUNT' => 'Beløb:',
    'LBL_AMOUNT_USDOLLAR' => 'Beløb:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Forventet lukkedato:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_NEXT_STEP' => 'Næste trin:',
    'LBL_LEAD_SOURCE' => 'Kilde:',
    'LBL_SALES_STAGE' => 'Salgsstadie:',
    'LBL_PROBABILITY' => 'Sandsynlighed (%):',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DUPLICATE' => 'Mulighed duplet Mulighed',
    'MSG_DUPLICATE' => 'Du danner en duplet. Du kan enten vælge en mulighed fra nedenstående listen eller du kan klikke på Gem og oprette dupletten.',
    'LBL_NEW_FORM_TITLE' => 'Opret mulighed',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_OPPORTUNITY_LIST' => 'Muligheder',
    'ERR_DELETE_RECORD' => 'En række skal angives for at slette en mulighed.',
    'LBL_TOP_OPPORTUNITIES' => 'Mine Top Åbne Muligheder',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne kontakt fra muligheden?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på at du ønsker at slette denne mulighed fra projektet?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Muligheder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_RAW_AMOUNT' => 'Raw Beløb',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Emner',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede salgsmuligheder',
    'LBL_TOTAL_OPPORTUNITIES' => 'Samlede salgsmuligheder',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede vundne salgsmuligheder',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger:',
    'LBL_CREATED_ID' => 'Oprettet af id',
    'LBL_MODIFIED_ID' => 'Ændret af id',
    'LBL_MODIFIED_NAME' => 'Ændret af brugernavn',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagner',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LABEL_PANEL_ASSIGNMENT' => 'Ansvar',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importér salgsmuligheder',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af ID',
    'LBL_EXPORT_CREATED_BY' => 'Oprettet af ID',
    'LBL_EXPORT_NAME' => 'Navn',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
    'TWITTER_USER_C' => 'Twitter Bruger',
);

?>
