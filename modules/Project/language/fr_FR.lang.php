<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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


$mod_strings = array(
    'LBL_MODULE_NAME' => 'Projet',
    'LBL_MODULE_TITLE' => 'Projets',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Projet',
    'LBL_LIST_FORM_TITLE' => 'Liste des Projets',
    'LBL_HISTORY_TITLE' => 'Historique',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Date de création:',
    'LBL_DATE_MODIFIED' => 'Date de modification:',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à:',
    'LBL_ASSIGNED_USER_NAME' => 'Assigné à :',
    'LBL_MODIFIED_USER_ID' => 'Assigné à (ID):',
    'LBL_CREATED_BY' => 'Créé par:',
    'LBL_TEAM_ID' => 'Equipe:',
    'LBL_NAME' => 'Nom:',
    'LBL_PDF_PROJECT_NAME' => 'Nom du Projet:',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DELETED' => 'Supprimé:',
    'LBL_DATE' => 'Date',
    'LBL_DATE_START' => 'Date de début:',
    'LBL_DATE_END' => 'Date de fin:',
    'LBL_PRIORITY' => 'Priorité:',
    'LBL_STATUS' => 'Statut:',
    'LBL_MY_PROJECTS' => 'Mes Projets',
    'LBL_MY_PROJECT_TASKS' => 'Mes Tâches Projets',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Effort total estimé (hrs):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Effort total actuel (hrs):',

    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_DAYS' => 'jours',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Assigné à',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Effort total estimé (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Effort total actuel (hrs)',
    'LBL_LIST_UPCOMING_TASKS' => 'Tâches à venir (1 Semaine)',
    'LBL_LIST_OVERDUE_TASKS' => 'Tâches en Retard',
    'LBL_LIST_OPEN_CASES' => 'Tickets Ouverts',
    'LBL_LIST_END_DATE' => 'Date de fin',
    'LBL_LIST_TEAM_ID' => 'Equipe',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaires',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Devis',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nouveau projet',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer ce Contact du Projet ?',

    'LNK_NEW_PROJECT' => 'Créer Projet',
    'LNK_PROJECT_LIST' => 'Liste des Projets',
    'LNK_NEW_PROJECT_TASK' => 'Créer Tâche Projet',
    'LNK_PROJECT_TASK_LIST' => 'Tâches Projet',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projets',
    'LBL_ACTIVITIES_TITLE' => 'Activités',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à Réaliser',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_QUICK_NEW_PROJECT' => 'Nouveau Projet',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produits',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom de la Tâche',
    'LBL_DURATION' => 'Durée',
    'LBL_ACTUAL_DURATION' => 'Durée en cours',
    'LBL_START' => 'Début',
    'LBL_FINISH' => 'Fin',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_PERCENT_COMPLETE' => '% effectué',
    'LBL_MORE' => 'Plus...',

    'LBL_PERCENT_BUSY' => '% Occupé',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'description',
    'LBL_DURATION_WIDGET' => 'duration',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Editer les Tâches Project',

    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_LAST_WEEK' => 'Précédent',
    'LBL_NEXT_WEEK' => 'Suivant',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Ressources Projet',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Congés',
    'LBL_PROJECT_INFORMATION' => 'Informations Project',
    'LBL_EDITLAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Ajouter des Lignes' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir le Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durée',
    'LBL_ASSIGNED_USER_NAME' => 'Assigné à :',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à:',
    'LBL_TASK_TITLE' => 'Modifier la tâche',
    'LBL_PREDECESSOR_TITLE' => 'Modifier le prédécesseur',
    'LBL_START_DATE_TITLE' => 'Choisir une date de démarrage',
    'LBL_END_DATE_TITLE' => 'Choisir une date de fin',
    'LBL_DURATION_TITLE' => 'Modifier la durée',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Modifier le taux de complétion',
    'LBL_ACTUAL_DURATION_TITLE' => 'Modifier la durée actuelle',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',
    'LBL_SUBTASK' => 'Tâches',
    'LBL_MILESTONE_FLAG' => 'Etape',
    'LBL_ADD_NEW_TASK' => 'Ajouter une nouvelle tâche',
    'LBL_DELETE_TASK' => 'Supprimer la tâche',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propriétés de la tâche',
    'LBL_PARENT_TASK_ID' => 'ID de la tâche principale',
    'LBL_PERCENT_COMPLETE' => '% effectué',
    'LBL_RESOURCE_CHART' => 'Table des ressources',
    'LBL_RESOURCE_CHART_START' => 'Date de début :',
    'LBL_RESOURCE_CHART_END' => 'Date de fin :',
    'LBL_RESOURCES' => 'Sélectionner des ressources :',
    'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
    'LBL_TASK_NAME' => 'Nom de la Tâche',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_ASSIGNED_TO' => 'Manager du projet',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modèle de projet',
    'LBL_STATUS' => 'Statut:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Assigné à',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Périodes d\'interruption du projet',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projets',
    'LBL_TOOLTIP_TASK_NAME' => 'Nom de la Tâche',
    'LBL_TOOLTIP_TITLE' => 'Tâches du jour',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durée',
    'LBL_PROJECT_TITLE_HOVER' => 'Vue détaillée du projet',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La ressource est un utilisateur',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La ressource est un contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mois Précédent',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Le mois prochain',
    'LBL_RESOURCE_CHART_WEEK' => 'Semaine',
    'LBL_RESOURCE_CHART_DAY' => 'Jour',
    'LBL_RESOURCE_CHART_WARNING' => 'Aucune ressource n\'a été affectée à ce projet.',
    'LBL_PROJECT_DELETE_MSG' => 'Êtes-vous certain de vouloir effacer ce projet et toutes les tâches liées.',
    'LBL_LIST_MY_PROJECT' => 'Mes Projets',
    'LBL_LIST_ASSIGNED_USER' => 'Manager du projet',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',
);
?>
