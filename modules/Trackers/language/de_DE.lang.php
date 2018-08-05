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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Zeige aktive Benutzer',
		  'ShowLastModifiedRecords' => '10 zuletzt geänderten Einträge',
		  'ShowTopUser' => 'Top Benutzer',
		  'ShowMyModuleUsage' => 'Meine Modulverwendung',
		  'ShowMyWeeklyActivities' => 'Meine wöchentliche Aktivität',
		  'ShowTop3ModulesUsed' => 'Meine Top 3 verwendeten Module',
		  'ShowLoggedInUserCount' => 'Anzahl aktiver Benutzer',
		  'ShowMyCumulativeLoggedInTime' => 'Meine gesamte Login Zeit (Diese Woche)',
		  'ShowUsersCumulativeLoggedInTime' => 'Die gesamte Login Zeit der Benutzer (Diese Woche)',
		  
		  //Column header mapping
		  'action' => 'Aktion',
		  'active_users' => 'Anzahl aktiver Benutzer',
		  'date_modified' => 'Datum der letzten Aktion',
		  'different_modules_accessed' => 'Anzahl von benutzten Modulen',
		  'first_name' => 'Vorname',
		  'item_id' => 'ID',
		  'item_summary' => 'Name',
		  'last_action' => 'Letzte Aktion Datum/Zeit',
		  'last_name' => 'Nachname',
		  'module_name' => 'Modulname',
		  'records_modified' => 'Summe veränderte Einträge',
		  'top_module' => 'Am häufigsten benutztes Modul',
		  'total_count' => 'Seitenaufrufe gesamt',
		  'total_login_time' => 'Zeit (hh:mm:ss)',
		  'user_name' => 'Benutzername',
		  'users' => 'Benutzer',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Aktiv',
		  'LBL_MODULE_NAME_TITLE' => 'Tracker Links',
		  'LBL_MODULE_NAME' => 'Tracker Links',
		  'LBL_TRACKER_SETTINGS' => 'Tracker Einstellungen',
		  'LBL_TRACKER_QUERIES_DESC' => 'Tracker-Abfragen',
		  'LBL_TRACKER_QUERIES_HELP' => 'SQL Abfragen aufzeichnen wennLangsame Abfragen aufzeichnen" aktiviert ist und die Ausführungszeit über dem Grenzwert für langsame Abfragen ist"',
		  'LBL_TRACKER_PERF_DESC' => 'Tracker Leistung',
		  'LBL_TRACKER_PERF_HELP' => 'Verfolgung von Datenbank Abfragen, Dateizugriffen und Speicherbenutzung.',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Tracker Sitzungen',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Aktive Benutzer und Sitzungsinformation aufzeichnen',
		  'LBL_TRACKER_DESC' => 'Tracker Aktionen',
		  'LBL_TRACKER_HELP' => 'Beobachten von Seitenaufrufen (Zugriffe auf Module und Datensätze) und gespeicherten Datensätzen von Benutzern.',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Anzahl der zu speichernden Beobachtungstage, wenn die Aufgabenplanung die Tabellen bereinigt',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Tagesanzahl',
);
?>