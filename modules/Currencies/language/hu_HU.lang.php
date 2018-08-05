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
  'LBL_MODULE_NAME' => 'Pénznemek',
  'LBL_LIST_FORM_TITLE' => 'Pénznemek',
  'LBL_CURRENCY' => 'Pénznem',
  'LBL_ADD' => 'Hozzáadás',
  'LBL_MERGE' => 'Összefűzés',
  'LBL_MERGE_TXT' => 'Válassza ki azokat a pénznemeket, amiket szeretne  átváltani a kiválasztott pénznembe. Ez a pipával rendelkező pénznemek közül törölni fogja és az újra kijelölteket értékét társítja a kiválasztott pénznemmel.',
  'LBL_US_DOLLAR' => 'Amerikai dollár',
  'LBL_DELETE' => 'Törlés',
  'LBL_LIST_SYMBOL' => 'Pénznem szimbóluma',
  'LBL_LIST_NAME' => 'Pénznem neve',
  'LBL_LIST_ISO4217' => 'ISO 4217-kód',
  'LBL_LIST_ISO4217_HELP' => 'Adja meg a hárombetűs ISO 4217-kód, amely meghatározza a pénznem nevét és valuta szimbólumát.',
  'LBL_UPDATE' => 'Frissítés',
  'LBL_LIST_RATE' => 'Átváltási ráta',
  'LBL_LIST_RATE_HELP' => 'Az átváltási ráta 0,5 Euro azt jelenti, hogy 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Állapot',
  'LNK_NEW_CONTACT' => 'Új kapcsolat',
  'LNK_NEW_ACCOUNT' => 'Új kliens',
  'LNK_NEW_OPPORTUNITY' => 'Új lehetőség',
  'LNK_NEW_CASE' => 'Új eset',
  'LNK_NEW_NOTE' => 'Megjegyzés vagy csatolmány létrehozása',
  'LNK_NEW_CALL' => 'Új hívás',
  'LNK_NEW_EMAIL' => 'Új Email',
  'LNK_NEW_MEETING' => 'Új Találkozó',
  'LNK_NEW_TASK' => 'Feladat létrehozása',
  'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törölni kívánja a rekordot? Bármilyen tételt, ami használja ezt a pénznemet, át fogja váltani a rendszer alapértelmezett pénznemmé, amikor használják őket. Javasoljuk, hogy állapotát tegye inaktívba.',
  'LBL_BELOW_MIN' => 'Váltószámnak 0 kell lennie',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktív',
    'Inactive' => 'Inaktív',
  ),
  'LBL_CREATED_BY' => 'Létrehozva',
	'LBL_EDIT_LAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
);


?>