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




$mod_strings = array (
	'LBL_MODULE_NAME' => 'Tâches Projet',
	'LBL_MODULE_TITLE' => 'Tâches Projet',
	'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Tâche Projet',
	'LBL_LIST_FORM_TITLE'=> 'Liste des Tâches Projet',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Editer la Tâche dans la Grille',    
	
	'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'Tâches Projet (ID):',
    'LBL_PROJECT_ID' => 'Projet (ID):',
	'LBL_DATE_ENTERED' => 'Date de création:',
	'LBL_DATE_MODIFIED' => 'Date de modification:',
	'LBL_ASSIGNED_USER_ID' => 'Affecté à (ID):',
	'LBL_MODIFIED_USER_ID' => 'Modifié par (ID):',
	'LBL_CREATED_BY' => 'Créé par:',
	'LBL_TEAM_ID' => 'Equipe (ID):',
	'LBL_NAME' => 'Nom:',
	'LBL_STATUS' => 'Statut:',
	'LBL_DATE_DUE' => 'Date échéance:',
	'LBL_TIME_DUE' => 'Heure échéance:',
    'LBL_RESOURCE' => 'Ressource:',
    'LBL_PREDECESSORS' => 'Prédécesseurs:',
	'LBL_DATE_START' => 'Date de début:',
    'LBL_DATE_FINISH' => 'Date de Fin:',    
	'LBL_TIME_START' => 'Heure de début:',
    'LBL_TIME_FINISH' => 'Heure de Fin:',
    'LBL_DURATION' => 'Durée:',
    'LBL_DURATION_UNIT' => 'Unité des durées:',
    'LBL_ACTUAL_DURATION' => 'Durée en cours:',
	'LBL_PARENT_ID' => 'Projet (ID):',
    'LBL_PARENT_TASK_ID' => 'Tâche Parent (ID):',    
    'LBL_PERCENT_COMPLETE' => 'Progression (%):',
	'LBL_PRIORITY' => 'Priorité:',
	'LBL_DESCRIPTION' => 'Notes:',
	'LBL_ORDER_NUMBER' => 'Tri:',
	'LBL_TASK_NUMBER' => 'Numéro de tâche:',
    'LBL_TASK_ID' => 'Tâche Projet (ID):',
	'LBL_DEPENDS_ON_ID' => 'Dépend de:',
	'LBL_MILESTONE_FLAG' => 'Etape importante:',
	'LBL_ESTIMATED_EFFORT' => 'Effort estimé (hrs):',
	'LBL_ACTUAL_EFFORT' => 'Effort actuel (hrs):',
	'LBL_UTILIZATION' => 'Avancement (%):',
	'LBL_DELETED' => 'Supprimé:',

	'LBL_LIST_ORDER_NUMBER' => 'Tri',
	'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_DAYS' => 'jours',
	'LBL_LIST_PARENT_NAME' => 'Projet',
	'LBL_LIST_PERCENT_COMPLETE' => 'Progression (%)',
	'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_DURATION' => 'Durée',
    'LBL_LIST_ACTUAL_DURATION' => 'Durée en cours',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Assigné à (ID)',
	'LBL_LIST_DATE_DUE' => 'Date d&#39;échéance:',
	'LBL_LIST_DATE_START' => 'Date de début',
    'LBL_LIST_DATE_FINISH' => 'Date de Fin',    
	'LBL_LIST_PRIORITY' => 'Priorité',
	'LBL_LIST_CLOSE' => 'Fermer',
	'LBL_PROJECT_NAME' => 'Projet',

	'LNK_NEW_PROJECT'	=> 'Créer Projet',
	'LNK_PROJECT_LIST'	=> 'Liste des Projets',
	'LNK_NEW_PROJECT_TASK'	=> 'Créer Tâche Projet',
	'LNK_PROJECT_TASK_LIST'	=> 'Tâches Projet',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Mes Tâches Projet',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tâches Projet',
	'LBL_NEW_FORM_TITLE' => 'Nouvelle Tâche Projet',

	'LBL_ACTIVITIES_TITLE'=>'Activités',
	'LBL_HISTORY_TITLE'=>'Historique',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activités à Réaliser',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historique et Activités terminées', 
	'DATE_JS_ERROR' => 'Veuillez entrer une date correspondant à cette heure',

    'LBL_ASSIGNED_USER_NAME' => 'Assigné à:',
    'LBL_PARENT_NAME' => 'Projet',
    'LBL_LIST_PROJECT_NAME' => 'Projets',
	'LBL_EDITLAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Echéancier',
	
	'LBL_SUBTASK' => 'Sous-tâche',
	'LBL_LAG' => 'Retard',
	'LBL_DAYS' => 'Jours',
	'LBL_HOURS' => 'Heures',
	'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
);

?>