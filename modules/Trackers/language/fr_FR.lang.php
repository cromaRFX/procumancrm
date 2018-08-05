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
		  'ShowActiveUsers'      => 'Voir les utilisateurs actifs',
		  'ShowLastModifiedRecords' => '10 derniers enregistrements modifiés',
		  'ShowTopUser' => 'Top Utilisateur',
		  'ShowMyModuleUsage' => 'Mes modules utilisés',
		  'ShowMyWeeklyActivities' => 'Mon activité de la semaine',
		  'ShowTop3ModulesUsed' => 'Mon Top 3 des modules utilisés',
		  'ShowLoggedInUserCount' => 'Nb utilisateurs actifs',
		  'ShowMyCumulativeLoggedInTime' => 'Mon temps de login cumulé (Cette semaine)',
		  'ShowUsersCumulativeLoggedInTime' => 'Temps de login cumulé pour tous les utilisateurs (Cette semaine)',
		  
		  //Column header mapping
		  'action' => 'Action',
		  'active_users' => 'Nb utilisateurs actifs',
		  'date_modified' => 'Date dernière action',
		  'different_modules_accessed' => 'Nombre de modules accédés',
		  'first_name' => 'Prénom',
		  'item_id' => 'ID',
		  'item_summary' => 'Nom',
		  'last_action' => 'Dernière action Date/Heure',
		  'last_name' => 'Prénom',
		  'module_name' => 'Nom du module',
		  'records_modified' => 'Nb total enregistrements modifiés',
		  'top_module' => 'Top modules accédés',
		  'total_count' => 'Total pages vues',
		  'total_login_time' => 'Heure (hh:mm:ss)',
		  'user_name' => 'Nom utilisateur',
		  'users' => 'Utilisateurs',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Activé',
		  'LBL_MODULE_NAME_TITLE' => 'Suivis',
		  'LBL_MODULE_NAME' => 'Suivis',
		  'LBL_TRACKER_SETTINGS' => 'Paramètres du Suivi',
		  'LBL_TRACKER_QUERIES_DESC' => 'Suivi des Requêtes',
		  'LBL_TRACKER_QUERIES_HELP' => 'Trace les états SQL quand "Logger les requêtes lentes" est activé et que le paramètre "Seuil pour les requêtes lentes" est dépassé',
		  'LBL_TRACKER_PERF_DESC' => 'Suivi des performances',
		  'LBL_TRACKER_PERF_HELP' => 'Suivi des allers-retours de base de données, des fichiers accédés et de la mémoire utilisée',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Suivi des Sessions',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Suivi des utilisateurs actifs et des informations de sessions des utilisateurs',
		  'LBL_TRACKER_DESC' => 'Suivi des Actions',
		  'LBL_TRACKER_HELP' => 'Suivi des pages vues par les utilisateurs (enregistrements et modules accédés) et des enregistrements sauvegardés',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Nombre de jours durant lesquels les données de Suivi sont sauvegardées avant d&#39;être purgées par le planificateur de tâches.',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Nombre de jours',
);
?>