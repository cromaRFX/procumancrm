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
  'LBL_MODULE_NAME' => 'Verkauf',
  'LBL_MODULE_TITLE' => 'Verkauf: Startseite',
  'LBL_SEARCH_FORM_TITLE' => 'Verkauf suchen',
  'LBL_VIEW_FORM_TITLE' => 'Verkauf Ansicht',
  'LBL_LIST_FORM_TITLE' => 'Liste Verkauf',
  'LBL_SALE_NAME' => 'Verkauf Name:',
  'LBL_SALE' => 'Verkauf:',
  'LBL_NAME' => 'Verkauf Name',
  'LBL_LIST_SALE_NAME' => 'Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_AMOUNT' => 'Betrag',
  'LBL_LIST_DATE_CLOSED' => 'Schließen',
  'LBL_LIST_SALE_STAGE' => 'Verkaufsphase',
  'LBL_ACCOUNT_ID'=>'Firmen ID',
   'LBL_CURRENCY_ID'=>'Währungs ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Verkauf - Währungsaktualisierung',
  'UPDATE_DOLLARAMOUNTS' => 'U.S. Dollar Beträge aktualisieren',
  'UPDATE_VERIFY' => 'Beträge überprüfen',
  'UPDATE_VERIFY_TXT' => 'Prüft, ob alle angegebenen Werte gültige Dezimalwerte sind ( Ziffern 0 - 9 und Bindestriche)',
  'UPDATE_FIX' => 'Beträge reparieren',
  'UPDATE_FIX_TXT' => 'Ungültige Beträge werden durch das Setzen korrekter Dezimalzeichen zu korrigieren versucht. Für jeden geänderten Betrag existiert eine Sicherheitskopie im Datenbankfeld amount_backup. Falls Sie beim Aufrufen dieser Funktion Fehler entdecken, müssen Sie vor einem erneuten Versuch die alten Beträge im Backup wieder herstellen, um das Überschreiben der ursprünglichen Datenbankbeträge mit den ungültigen Beträgen zu vermeiden.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Die Verkäufe (in U.S. Dollar) werden mit den eingetragenen Wechselkursen aktuallisiert. Die Werte werden für Graphiken und Währungstabellen verwendet.',
  'UPDATE_CREATE_CURRENCY' => 'Neue Währung erstellen:',
  'UPDATE_VERIFY_FAIL' => 'Datensatz konnte nicht verifiziert werden',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktuelle Größe:',
  'UPDATE_VERIFY_FIX' => 'Berichtigter Betrag:',
  'UPDATE_INCLUDE_CLOSE' => 'Auch abgeschlossene Angebote überprüfen',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Neuer Betrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Neue Währung:',
  'UPDATE_DONE' => 'Fertig',
  'UPDATE_BUG_COUNT' => 'Fehler gefunden und zu beheben versucht ',
  'UPDATE_BUGFOUND_COUNT' => 'Gefundene Fehler:',
  'UPDATE_COUNT' => 'Datensatz aktualisiert',
  'UPDATE_RESTORE_COUNT' => 'Wiederhergestellte Beträge:',
  'UPDATE_RESTORE' => 'Beträge wiederherstellen',
  'UPDATE_RESTORE_TXT' => 'Stellt die Beträge wieder her, die während der Reparatur gesichert wurden.',
  'UPDATE_FAIL' => 'Update konnte nicht durchgeführt werden -',
  'UPDATE_NULL_VALUE' => 'Betragsfeld ist leer und wird deshalb auf 0 gesetzt -',
  'UPDATE_MERGE' => 'Währungen zusammenführen',
  'UPDATE_MERGE_TXT' => 'Zusammenführung mehrerer Währungen in eine. Falls es mehrere Einträge mit der gleichen Währung gibt, können diese zusammengeführt werden. Dies gilt analog für alle anderen Module.',
  'LBL_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_AMOUNT' => 'Betrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_CURRENCY' => 'Währung:',
  'LBL_DATE_CLOSED' => 'Erwartetes Abschlussdatum:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',  
  'LBL_NEXT_STEP' => 'Nächster Schritt:',
  'LBL_LEAD_SOURCE' => 'Quelle Interessenten:',
  'LBL_SALES_STAGE' => 'Verkaufsphase:',
  'LBL_PROBABILITY' => 'Wahrscheinlichkeit (%):',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DUPLICATE' => 'Möglicher doppelter Verkauf',
  'MSG_DUPLICATE' => 'Der neu erstellte Verkauf könnte das Duplikat eines bereits bestehenden Verkaufs sein. Ähnliche Verkäufe sind unten aufgeführt.<br>Klicken Sie Speichern, um fortzufahren, oder Abbrechen, um zum Modul zurückzukehren, ohne den Verkauf zu speichern.',
  'LBL_NEW_FORM_TITLE' => 'Sonderaktion erstellen',
  'LNK_NEW_SALE' => 'Sonderaktion erstellen',
  'LNK_SALE_LIST' => 'Verkauf',
  'ERR_DELETE_RECORD' => 'Um diesen Verkauf zu löschen, muss eine Datensatznummer angegeben werden.',
  'LBL_TOP_SALES' => 'Top-Liste meiner offenen Verkäufe',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich aus dem Verkauf entfernen?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Möchten Sie diesen Verkauf wirklich von diesem Projekt entfernen?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkauf',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktivitäten',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Verlauf',
    'LBL_RAW_AMOUNT'=>'Geschätzter Betrag ',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
	'LBL_ASSIGNED_TO_NAME' => 'Benutzer:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_MY_CLOSED_SALES' => 'Meine geschlossenen Verkäufe',
  'LBL_TOTAL_SALES' => 'Verkäufe gesamt',
  'LBL_CLOSED_WON_SALES' => 'Geschlossene gewonnene Verkäufe',
  'LBL_ASSIGNED_TO_ID' =>'Zugewiesen an ID',
  'LBL_CREATED_ID'=>'Erstellt von ID',
  'LBL_MODIFIED_ID'=>'Geändert von ID',
  'LBL_MODIFIED_NAME'=>'Geändert von Benutzername',
  'LBL_SALE_INFORMATION'=>'Verkaufsinformation',
  'LBL_CURRENCY_NAME'=>'Währungsname',
  'LBL_CURRENCY_SYMBOL'=>'Währungssymbol',
  'LBL_EDIT_BUTTON' => 'Bearbeiten',
   'LBL_REMOVE' => 'Entfernen',


);

?>
