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
    'LBL_MODULE_NAME' => 'Kansen',
    'LBL_MODULE_TITLE' => 'Kansen: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Kans zoeken',
    'LBL_VIEW_FORM_TITLE' => 'Overzicht kansen',
    'LBL_LIST_FORM_TITLE' => 'Kansen',
    'LBL_OPPORTUNITY_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY' => 'Kans:',
    'LBL_NAME' => 'Kansnaam',
    'LBL_INVITEE' => 'Contactpersonen',
    'LBL_CURRENCIES' => 'Valuta',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Naam',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_AMOUNT' => 'Bedrag',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Bedrag',
    'LBL_LIST_DATE_CLOSED' => 'Sluiten',
    'LBL_LIST_SALES_STAGE' => 'Verkoopstadium',
    'LBL_ACCOUNT_ID' => 'Relatie ID',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    'LBL_CURRENCY_NAME' => 'Valuta naam',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbool',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Kans - Valuta update',
    'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar bedragen',
    'UPDATE_VERIFY' => 'Controleer bedragen',
    'UPDATE_VERIFY_TXT' => 'Controleert of de bedragen in kansen geldige numerieke waarden bevatten.',
    'UPDATE_FIX' => 'Herstel bedragen',
    'UPDATE_FIX_TXT' => 'Probeert ongeldige decimale waarden te herstellen. De originele waarden worden gebackup-ed in het database veld \'bedrag backup\'. Wanneer u deze functie gebruikt en u stuit op fouten, start de actie dan pas op nieuw nadat u de backup terug hebt gezet.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update de U.S. Dollar bedragen voor kansen gebaseerd op de huidige set van wisselkoersen. Deze waarde wordt gebruikt voor de berekening van grafieken en valuta lijsten.',
    'UPDATE_CREATE_CURRENCY' => 'Nieuwe valuta:',
    'UPDATE_VERIFY_FAIL' => 'Controle van record mislukt:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Huidig bedrag:',
    'UPDATE_VERIFY_FIX' => 'Na herstel wordt dit',
    'UPDATE_INCLUDE_CLOSE' => 'Inclusief gesloten records',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nieuw bedrag:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nieuwe valuta:',
    'UPDATE_DONE' => 'Gereed',
    'UPDATE_BUG_COUNT' => 'Fouten gevonden en geprobeerd op te lossen:',
    'UPDATE_BUGFOUND_COUNT' => 'Gevonden fouten:',
    'UPDATE_COUNT' => 'Bijgewerkte records:',
    'UPDATE_RESTORE_COUNT' => 'Records waarvan bedragen zijn teruggezet:',
    'UPDATE_RESTORE' => 'Bedragen terugzetten',
    'UPDATE_RESTORE_TXT' => 'Zet bedragen terug uit de backup die is gemaakt gedurende het herstel.',
    'UPDATE_FAIL' => 'Kon niet bijwerken -',
    'UPDATE_NULL_VALUE' => 'Bedrag is NULL, word op 0 gezet -',
    'UPDATE_MERGE' => 'Valuta samenvoegen',
    'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If you notice that there are multiple currency records for the same currency, you may choose to merge them together. This will also merge the currencies for all other modules.',
    'LBL_ACCOUNT_NAME' => 'Relatie naam:',
    'LBL_AMOUNT' => 'Bedrag:',
    'LBL_AMOUNT_USDOLLAR' => 'Bedrag USD:',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_DATE_CLOSED' => 'Verwachte afsluitdatum:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campagnes:',
    'LBL_NEXT_STEP' => 'Volgende stap:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_SALES_STAGE' => 'Verkoopstadium:',
    'LBL_PROBABILITY' => 'Waarschijnlijkheid (%):',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele kans',
    'MSG_DUPLICATE' => 'Creating this opportunity may potentialy create a duplicate opportunity. You may either select an opportunity from the list below or you may click on Create New Opportunity to continue creating a new opportunity with the previously entered data.',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe kans',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_OPPORTUNITY_LIST' => 'Kansen',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze kans te verwijderen.',
    'LBL_TOP_OPPORTUNITIES' => 'Mijn openstaande kansen',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen bij deze kans?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze Kans uit het project wilt verwijderen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kansen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_RAW_AMOUNT' => 'Ruw bedrag',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mijn gesloten kansen',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totaal kansen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnen kansen',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan ID',
    'LBL_CREATED_ID' => 'Gemaakt door ID',
    'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door user',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LABEL_PANEL_ASSIGNMENT' => 'Toekennen',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import kansen',
    'LBL_EDITLAYOUT' => 'Wijzig lay-out' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_OPPORTUNITY_TYPE' => 'Kans type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen gebruikersnaam',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruikers-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
    'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
    'LBL_EXPORT_NAME' => 'Naam',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Emails gerelateerde contactpersonen',
    'TWITTER_USER_C' => 'Twitter gebruiker',
);

?>
