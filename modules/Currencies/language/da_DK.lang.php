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
  'LBL_MODULE_NAME' => 'Valutaer',
  'LBL_LIST_FORM_TITLE' => 'Valutaer',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_ADD' => 'Tilføj',
  'LBL_MERGE' => 'Flet',
  'LBL_MERGE_TXT' => 'Vælg de valutaer, du vil knytte til den valgte valuta. Dette sletter alle valutaer, der har en markering, og omfordeler en eventuel værdi, der er forbundet med dem, til den valgte valuta.',
  'LBL_US_DOLLAR' => 'US-dollar',
  'LBL_DELETE' => 'Slet',
  'LBL_LIST_SYMBOL' => 'Valutasymbol',
  'LBL_LIST_NAME' => 'Valutanavn',
  'LBL_LIST_ISO4217' => 'ISO 4217-kode',
  'LBL_LIST_ISO4217_HELP' => 'Indtast en 3-bogstavs ISO 4217 kode, der definerer valutanavn og valutasymbol.',
  'LBL_UPDATE' => 'Opdater',
  'LBL_LIST_RATE' => 'Omregningssats',
  'LBL_LIST_RATE_HELP' => 'En omregningssats på 0,5 for euro betyder, at 10 USD = 5 euro.',
  'LBL_LIST_STATUS' => 'Status',
  'LNK_NEW_CONTACT' => 'Ny kontakt',
  'LNK_NEW_ACCOUNT' => 'Ny virksomhed',
  'LNK_NEW_OPPORTUNITY' => 'Ny salgsmulighed',
  'LNK_NEW_CASE' => 'Ny sag',
  'LNK_NEW_NOTE' => 'Opret note eller vedhæftet fil',
  'LNK_NEW_CALL' => 'Nyt opkald',
  'LNK_NEW_EMAIL' => 'Ny e-mail',
  'LNK_NEW_MEETING' => 'Nyt møde',
  'LNK_NEW_TASK' => 'Opret opgave',
  'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post? Alle poster, der bruger denne valuta, konverteres til systemets standardvaluta, når de åbnes. Det kan være en god ide at angive status til inaktiv.',
  'LBL_BELOW_MIN' => 'Omregningskursen skal være over 0',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'LBL_CREATED_BY' => 'Oprettet af',
	'LBL_EDIT_LAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
);


?>