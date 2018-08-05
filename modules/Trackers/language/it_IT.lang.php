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
		  'ShowActiveUsers'      => 'Mostra Utenti Attivi',
		  'ShowLastModifiedRecords' => 'Ultimi 10 Record Modificati',
		  'ShowTopUser' => 'Top User',
		  'ShowMyModuleUsage' => 'Il mio Modulo in Uso',
		  'ShowMyWeeklyActivities' => 'Le mie Attività Settimanali',
		  'ShowTop3ModulesUsed' => 'I miei 3 moduli più utilizzati',
		  'ShowLoggedInUserCount' => 'Conteggio degli Utenti Attivi',
		  'ShowMyCumulativeLoggedInTime' => 'Il mio tempo di accesso cumulativo (Questa Settimana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tempo di accesso cumulativo degli utenti (Questa Settimana)',
		  
		  //Column header mapping
		  'action' => 'Azione',
		  'active_users' => 'Conteggio Utenti Attivi',
		  'date_modified' => 'Data Ultima Azione',
		  'different_modules_accessed' => 'Numero di moduli visitati',
		  'first_name' => 'Nome',
		  'item_id' => 'ID',
		  'item_summary' => 'Nome',
		  'last_action' => 'Ultima azione data/ora',
		  'last_name' => 'Cognome',
		  'module_name' => 'Nome modulo',
		  'records_modified' => 'Totale record modificati',
		  'top_module' => 'Modulo più visitato',
		  'total_count' => 'Totale pagine viste',
		  'total_login_time' => 'Tempo (hh:mm:ss)',
		  'user_name' => 'Nome Utente',
		  'users' => 'Utenti',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Abilita',
		  'LBL_MODULE_NAME_TITLE' => 'Tracker',
		  'LBL_MODULE_NAME' => 'Tracker',
		  'LBL_TRACKER_SETTINGS' => 'Impostazioni Trackers',
		  'LBL_TRACKER_QUERIES_DESC' => 'Query Trackers',
		  'LBL_TRACKER_QUERIES_HELP' => 'Traccia le istruzioni SQL quando dump_slow_queries è abilitato e il tempo d´esecuzione delle query è inferiore al valore di slow_query_time_msec nel config.php',
		  'LBL_TRACKER_PERF_DESC' => 'Trackers Performance',
		  'LBL_TRACKER_PERF_HELP' => 'Traccia lo scambio di dati del database, files aperti e utilizzo di memoria',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Trackers Sessioni',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Traccia gli utenti attivi e informazioni delle sessioni degli utenti',
		  'LBL_TRACKER_DESC' => 'Trackers Azioni',
		  'LBL_TRACKER_HELP' => 'Traccia le visualizzazioni per pagina (moduli e record visitati) e record salvati',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Numero di giorni di validità dei dati degli indicatori da memorizzare quando lo schedulatore svuoterà le tabelle',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Numero di giorni',
);
?>