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
  'LBL_MODULE_NAME' => 'Währungen',
  'LBL_LIST_FORM_TITLE' => 'Währungen',
  'LBL_CURRENCY' => 'Währung',
  'LBL_ADD' => 'Hinzufügen',
  'LBL_MERGE' => 'Zusammenführen',
  'LBL_MERGE_TXT' => 'Bitte wählen Sie die Währungen aus, die Sie zusammenführen möchten. Dieser Befehl löscht alle ausgewählten Währungen, nachdem die betreffenden Einträge neu zugeordnet wurden..',
  'LBL_US_DOLLAR' => 'Euro',
  'LBL_DELETE' => 'Löschen',
  'LBL_LIST_SYMBOL' => 'Währungssymbol',
  'LBL_LIST_NAME' => 'Währungsname',
  'LBL_LIST_ISO4217' => 'ISO 4217 Code',
  'LBL_LIST_ISO4217_HELP' => 'Geben Sie den 3-stelligen ISO 4217 Code ein, der Währungsnamen und -symbol definiert.',
  'LBL_UPDATE' => 'Aktualisieren',
  'LBL_LIST_RATE' => 'Wechselkurs',
  'LBL_LIST_RATE_HELP' => 'Ein Wechselkurs von 0,5 für Euro bedeutet, dass 10 USD = 5 Euro entsprechen.',
  'LBL_LIST_STATUS' => 'Status',
  'LNK_NEW_CONTACT' => 'Neuer Kontakt',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_NEW_CASE' => 'Neue Anfrage',
  'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_EMAIL' => 'Neue E-Mail',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_TASK' => 'Aufgabe erstellen',
  'NTC_DELETE_CONFIRMATION' => 'Möchten Sie diesen Datensatz wirklich löschen? Es ist wahrscheinlich besser, den Status dieser Währung auf \'Inaktiv\' zu ändern, ansonsten werden alle Einträge in der Datenbank, welche diese Währung verwenden, automatisch in die Standardwährung konvertiert.',
  'LBL_BELOW_MIN' => 'Umrechnungskurs muss > 0 sein',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'LBL_CREATED_BY' => 'Erstellt von',
	'LBL_EDIT_LAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
);


?>