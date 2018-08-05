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
		  'ShowActiveUsers'      => 'Vis aktive brugere',
		  'ShowLastModifiedRecords' => 'Sidste 10 ændrede poster',
		  'ShowTopUser' => 'Hyppigste bruger',
		  'ShowMyModuleUsage' => 'Min modulbrug',
		  'ShowMyWeeklyActivities' => 'Min ugentlige aktivitet',
		  'ShowTop3ModulesUsed' => 'Mine tre mest brugte moduler',
		  'ShowLoggedInUserCount' => 'Antal aktive brugere',
		  'ShowMyCumulativeLoggedInTime' => 'Min akkumulerede tid logged på "denne uge"',
		  'ShowUsersCumulativeLoggedInTime' => 'Brugeres akkumulerede tid logged på "denne uge"',
		  
		  //Column header mapping
		  'action' => 'Handling',
		  'active_users' => 'Antal aktive brugere',
		  'date_modified' => 'Dato for seneste handling',
		  'different_modules_accessed' => 'Antal åbnede moduler',
		  'first_name' => 'Fornavn',
		  'item_id' => 'Id',
		  'item_summary' => 'Navn',
		  'last_action' => 'Seneste handlings dato/klokkeslæt',
		  'last_name' => 'Efternavn',
		  'module_name' => 'Modulnavn',
		  'records_modified' => 'Samlede antal ændrede poster',
		  'top_module' => 'Det hyppigst åbnede modul',
		  'total_count' => 'Samlede antal visninger',
		  'total_login_time' => 'Klokkeslæt "tt:mm:ss"',
		  'user_name' => 'Brugernavn',
		  'users' => 'Brugere',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Aktiveret',
		  'LBL_MODULE_NAME_TITLE' => 'Sporinger',
		  'LBL_MODULE_NAME' => 'Sporinger',
		  'LBL_TRACKER_SETTINGS' => 'Sporingsindstillinger',
		  'LBL_TRACKER_QUERIES_DESC' => 'Sporingsforespørgsler',
		  'LBL_TRACKER_QUERIES_HELP' => 'Spor SQL-sætninger, når "Logfør langsomme forespørgsler" er aktiveret, og forespørgselsudførelsestiden overstiger værdien "Tidsgrænse for langsomme forespørgsler"',
		  'LBL_TRACKER_PERF_DESC' => 'Sporingsperformance',
		  'LBL_TRACKER_PERF_HELP' => 'Spor database tur-retur, åbnede filer og hukommelsesbrug',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sporingssessioner',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Spor aktive brugere og brugeres sessionsoplysninger',
		  'LBL_TRACKER_DESC' => 'Sporingshandlinger',
		  'LBL_TRACKER_HELP' => 'Spor brugeres sidevisninger "åbnede moduler og poster" og lagring af poster',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Antal dage, som sporingsdata skal gemmes i, når planlæggeren beskærer tabellerne',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Antal dage',
);
?>