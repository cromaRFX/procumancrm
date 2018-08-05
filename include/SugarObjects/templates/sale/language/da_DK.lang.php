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
  'LBL_MODULE_NAME' => 'Salg',
  'LBL_MODULE_TITLE' => 'Salg: Startside',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter salg',
  'LBL_VIEW_FORM_TITLE' => 'Salgsvisning',
  'LBL_LIST_FORM_TITLE' => 'Salgsliste',
  'LBL_SALE_NAME' => 'Salgsnavn:',
  'LBL_SALE' => 'Salg:',
  'LBL_NAME' => 'Name',
  'LBL_LIST_SALE_NAME' => 'Navn',
  'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
  'LBL_LIST_AMOUNT' => 'Beløb',
  'LBL_LIST_DATE_CLOSED' => 'Luk',
  'LBL_LIST_SALE_STAGE' => 'Salgsstadie',
  'LBL_ACCOUNT_ID'=>'Kunde ID',
   'LBL_CURRENCY_ID'=>'Valuta ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Salg - valutaopdatering',
  'UPDATE_DOLLARAMOUNTS' => 'Opdatering U.S. Dollar beløb',
  'UPDATE_VERIFY' => 'Verificer beløb',
  'UPDATE_VERIFY_TXT' => 'Bekræfter, at beløbsværdierne i salg er gyldige decimaltal med kun numeriske tegn (0-9) og decimaler (.)',
  'UPDATE_FIX' => 'Fix beløb',
  'UPDATE_FIX_TXT' => 'Prøver at fixe ugyldige beløb.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Opdater USD-beløb for salg baseret på de aktuelle valutakurser. Denne værdi bruges til at beregne diagrammer og vise valutabeløb.',
  'UPDATE_CREATE_CURRENCY' => 'Opretter ny valuta:',
  'UPDATE_VERIFY_FAIL' => 'Mislykket række verifikation:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Nuværende beløb:',
  'UPDATE_VERIFY_FIX' => 'Fix vil give',
  'UPDATE_INCLUDE_CLOSE' => 'Incl lukkede rækker',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nyt beløb:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
  'UPDATE_DONE' => 'Færdig.',
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
  'LBL_AMOUNT_USDOLLAR' => 'Beløb i USD:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_CLOSED' => 'Forventet lukkedato:',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Emner',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',  
  'LBL_NEXT_STEP' => 'Næste trin:',
  'LBL_LEAD_SOURCE' => 'Kilde:',
  'LBL_SALES_STAGE' => 'Salgsstadie:',
  'LBL_PROBABILITY' => 'Sandsynlighed (%):',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_DUPLICATE' => 'Muligt identisk salg',
  'MSG_DUPLICATE' => 'Den salgspost, du er ved at oprette, kan være en dublet af en salgspost, der allerede findes. Salgsposter, som indeholder lignende navne, er vist nedenfor.<br>Klik på Gem for at fortsætte med at oprette dette nye salg, eller klik på Annuller for at vende tilbage til modulet uden at oprette salget.',
  'LBL_NEW_FORM_TITLE' => 'Opret salg',
  'LNK_NEW_SALE' => 'Opret salg',
  'LNK_SALE_LIST' => 'Salg',
  'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette salget.',
  'LBL_TOP_SALES' => 'Mine bedste åbne salg',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne kontakt fra salget?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på, at du vil fjerne dette salg fra projektet?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Salg',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'History',
    'LBL_RAW_AMOUNT'=>'Raw Beløb',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
	'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
  'LBL_MY_CLOSED_SALES' => 'Mine lukkede salg',
  'LBL_TOTAL_SALES' => 'Salg i alt',
  'LBL_CLOSED_WON_SALES' => 'Lukkede vundne salg',
  'LBL_ASSIGNED_TO_ID' =>'Tildelt til id',
  'LBL_CREATED_ID'=>'Oprettet af id',
  'LBL_MODIFIED_ID'=>'Ændret af id',
  'LBL_MODIFIED_NAME'=>'Ændret af brugernavn',
  'LBL_SALE_INFORMATION'=>'Salgsoplysninger',
  'LBL_CURRENCY_NAME'=>'Valutanavn',
  'LBL_CURRENCY_SYMBOL'=>'Valutasymbol',
  'LBL_EDIT_BUTTON' => 'Rediger',
   'LBL_REMOVE' => 'Slet',


);

?>
