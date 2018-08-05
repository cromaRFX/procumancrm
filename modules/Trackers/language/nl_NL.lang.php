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
		  'ShowActiveUsers'      => 'Toon actieve gebruiker',
		  'ShowLastModifiedRecords' => 'Laatste 10 gewijzigde records',
		  'ShowTopUser' => 'Top gebruiker',
		  'ShowMyModuleUsage' => 'Mijn module gebruik',
		  'ShowMyWeeklyActivities' => 'Mijn wekelijke activiteit',
		  'ShowTop3ModulesUsed' => 'Mijn top 3 gebruikte modules',
		  'ShowLoggedInUserCount' => 'Aantal actieve gebruikers',
		  'ShowMyCumulativeLoggedInTime' => 'Mijn totaal ingelogde tijd (deze week)',
		  'ShowUsersCumulativeLoggedInTime' => 'Gebruikers totaal ingelogde tijd (deze week)',
		  
		  //Column header mapping
		  'action' => 'Actie',
		  'active_users' => 'Aantal actieve gebruikers',
		  'date_modified' => 'Datum laatste aktie',
		  'different_modules_accessed' => 'Aantal modules benaderd',
		  'first_name' => 'Voornaam',
		  'item_id' => 'ID',
		  'item_summary' => 'Naam',
		  'last_action' => 'Laatste actie datum/tijd',
		  'last_name' => 'Achternaam',
		  'module_name' => 'Module naam',
		  'records_modified' => 'Totaal aantal records gewijzigd',
		  'top_module' => 'Top module',
		  'total_count' => 'Totaal aantal page views',
		  'total_login_time' => 'Tijd (hh:mm:ss)',
		  'user_name' => 'Gebruikersnaam',
		  'users' => 'Gebruikers',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Ingeschakeld',
		  'LBL_MODULE_NAME_TITLE' => 'Trackers',
		  'LBL_MODULE_NAME' => 'Trackers',
		  'LBL_TRACKER_SETTINGS' => 'Tracker instellingen',
		  'LBL_TRACKER_QUERIES_DESC' => 'Tracker Queries',
		  'LBL_TRACKER_QUERIES_HELP' => 'Traceer SQL statements wanneer \'dump_slow_queries\' is ingeschakeld en query executie tijd is onder de \'slow_query_time_msec\' waarde',
		  'LBL_TRACKER_PERF_DESC' => 'Traceer prestatie gegevens (geheugen-, database- en bestandsgebruik)',
		  'LBL_TRACKER_PERF_HELP' => 'Traceer database toegang, bestandstoegang en geheugengebruik',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Traceer gebruiker sessie informatie',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Track active users and users&rsquo; session information',
		  'LBL_TRACKER_DESC' => 'Traceer gebruiker acties',
		  'LBL_TRACKER_HELP' => 'Traceer bekeken en opgeslagen items en modules van gebruikers',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Aantal dagen dat de Tracker data bewaard moet worden voordat de Scheduler deze verwijdert.',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Aantal dagen',
);
?>