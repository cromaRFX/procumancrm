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
		  'ShowActiveUsers'      => 'Przeglądaj aktywnych użytkowników',
		  'ShowLastModifiedRecords' => '10 ostatnio modyfikowanych rekordów',
		  'ShowTopUser' => 'Najaktywniejsi użytkownicy',
		  'ShowMyModuleUsage' => 'Wykorzystanie mojego modułu',
		  'ShowMyWeeklyActivities' => 'Moja tygodniowa aktywność',
		  'ShowTop3ModulesUsed' => 'Moje trzy najbardziej aktywne moduły',
		  'ShowLoggedInUserCount' => 'Licznik aktywnych użytkowników',
		  'ShowMyCumulativeLoggedInTime' => 'Rzeczywisty pełny czas mojego zalogowania (w tym tygodniu)',
		  'ShowUsersCumulativeLoggedInTime' => 'Rzeczywisty pełny czas zalogowania wszystkich użytkowników (w tym tygodniu)',
		  
		  //Column header mapping
		  'action' => 'Akcja',
		  'active_users' => 'Licznik aktywności użytkowników',
		  'date_modified' => 'Data ostatniego działania',
		  'different_modules_accessed' => 'Licza używanych modułów',
		  'first_name' => 'Imię',
		  'item_id' => 'ID',
		  'item_summary' => 'Nazwa',
		  'last_action' => 'Data i czas ostatniej aktywności',
		  'last_name' => 'Nazwisko',
		  'module_name' => 'Nazwa modułu',
		  'records_modified' => 'Wszystkie zmodyfikowane rekordy',
		  'top_module' => 'Najbardziej aktywne moduły',
		  'total_count' => 'Wszystkie przeglądane strony',
		  'total_login_time' => 'Czas (gg:mm:ss)',
		  'user_name' => 'Nazwa użytkownika',
		  'users' => 'Użytkownicy',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Włączony',
		  'LBL_MODULE_NAME_TITLE' => 'Ślady',
		  'LBL_MODULE_NAME' => 'Ślady',
		  'LBL_TRACKER_SETTINGS' => 'Ustawienia śledzenia',
		  'LBL_TRACKER_QUERIES_DESC' => 'Śledzenie zapytań',
		  'LBL_TRACKER_QUERIES_HELP' => 'Śledź zapytania SQL, gdy jest włączona funkcja "Śledź wolne zapytania", a wartość wykonania zapytania przekracza, wartość funkcji "Przekroczenie wartości czasu wolnego zapytania" w config.php',
		  'LBL_TRACKER_PERF_DESC' => 'Śledzenie wydajności',
		  'LBL_TRACKER_PERF_HELP' => 'Śledzenie osiągów wykonywania zapytań bazy danych, liczby otwartych plików i wykorzystania pamięci',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Śledzenie sesji',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Informacje o śledzeniu sesji aktywnego użytkownika(ów)',
		  'LBL_TRACKER_DESC' => 'Śledzenie akcji',
		  'LBL_TRACKER_HELP' => 'Strona widoku śledzenia dla użytkownika(ów) (modułów i dostępu do plików) i zachowanych rekordów',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Ilość dni przechowywania danych śledzenia',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Liczba dni',
);
?>