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
  'LBL_MODULE_NAME' => 'Valuta',
  'LBL_LIST_FORM_TITLE' => 'Valuta',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_ADD' => 'Toevoegen',
  'LBL_MERGE' => 'Duplicaten samenvoegen',
  'LBL_MERGE_TXT' => 'Vink de valuta aan die u naar de geselecteerde valuta wilt omzetten. Alle aangevinkte valuta worden verwijderd en waarden die aan deze valuta zijn gekoppeld worden gekoppeld aan de geselecteerde valuta.',
  'LBL_US_DOLLAR' => 'U.S. Dollar',
  'LBL_DELETE' => 'Verwijder',
  'LBL_LIST_SYMBOL' => 'Valutasymbool',
  'LBL_LIST_NAME' => 'Valuta naam',
  'LBL_LIST_ISO4217' => 'ISO 4217 Code',
  'LBL_LIST_ISO4217_HELP' => 'Voer een drie-letterige ISO 4217-code in die de valuta naam en het valutasymbool definieert.',
  'LBL_UPDATE' => 'Bijwerken',
  'LBL_LIST_RATE' => 'Wisselkoers',
  'LBL_LIST_RATE_HELP' => 'Een Omrekeningskoers van 0,5 voor Euro betekent dat 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Status',
  'LNK_NEW_CONTACT' => 'Nieuwe contactpersoon',
  'LNK_NEW_ACCOUNT' => 'Nieuw relatie',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
  'LNK_NEW_CASE' => 'Nieuw verzoek',
  'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
  'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
  'LNK_NEW_EMAIL' => 'Nieuwe e-mail',
  'LNK_NEW_MEETING' => 'Nieuwe afspraak',
  'LNK_NEW_TASK' => 'Nieuwe taak',
  'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u deze valuta wilt verwijderen? Het is wellicht beter om de status op inactief te zetten omdat anders alle records die deze valuta gebruiken worden omgezet naar Dollars wanneer ze worden geraadpleegd.',
  'LBL_BELOW_MIN' => 'Omrekeningskoers moet boven 0 zijn',
  'currency_status_dom' => 
  array (
    'Active' => 'Actief',
    'Inactive' => 'Inactief',
  ),
  'LBL_CREATED_BY' => 'Aangemaakt door',
	'LBL_EDIT_LAYOUT' => 'Bewerk lay-out' /*for 508 compliance fix*/,
);


?>