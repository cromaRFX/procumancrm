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
  'LBL_MODULE_NAME' => 'Valute',
  'LBL_LIST_FORM_TITLE' => 'Valute',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_ADD' => 'Aggiungi',
  'LBL_MERGE' => 'Unisci',
  'LBL_MERGE_TXT' => 'Si prega di selezionare le valute che vuoi mappare nella valuta scelta. Le valute scelte verranno eliminate e gli importi relativi saranno contrassegnati con la valuta scelta.',
  'LBL_US_DOLLAR' => 'Dollaro USA',
  'LBL_DELETE' => 'Elimina',
  'LBL_LIST_SYMBOL' => 'Simbolo Valuta',
  'LBL_LIST_NAME' => 'Nome Valuta',
  'LBL_LIST_ISO4217' => 'Codice ISO 4217',
  'LBL_LIST_ISO4217_HELP' => 'Inserisci un codice ISO 4217 di tre lettere per definire il nome e il simbolo delle valuta.',
  'LBL_UPDATE' => 'Aggiorna',
  'LBL_LIST_RATE' => 'Tasso Conversione',
  'LBL_LIST_RATE_HELP' => 'Un tasso di conversione di 0.5 Euro significa che 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Stato',
  'LNK_NEW_CONTACT' => 'Nuovo Contatto',
  'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_EMAIL' => 'Nuova Email',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler cancellare questo record? Si consiglia di impostare lo stato in inattivo altrimenti tutti gli importi con questa valuta verranno convertiti in dollari USA al primo accesso.',
  'LBL_BELOW_MIN' => 'Il tasso di conversione deve essere superiore a 0',
  'currency_status_dom' => 
  array (
    'Active' => 'Attivo',
    'Inactive' => 'Inattivo',
  ),
  'LBL_CREATED_BY' => 'Creato Da',
	'LBL_EDIT_LAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
);


?>