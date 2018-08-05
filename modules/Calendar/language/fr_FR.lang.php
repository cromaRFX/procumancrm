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

    'LBL_MODULE_NAME' => 'Calendrier',
    'LBL_MODULE_TITLE' => 'Calendrier',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_CALL_LIST' => 'Appels',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_VIEW_CALENDAR' => 'Aujourd&#39;hui',
    'LNK_IMPORT_CALLS' => 'Import des Appels',
    'LNK_IMPORT_MEETINGS' => 'Import des Réunions',
    'LNK_IMPORT_TASKS' => 'Import des Tâches',
    'LBL_MONTH' => 'Mois',
    'LBL_DAY' => 'Jour',
    'LBL_YEAR' => 'Année',
    'LBL_WEEK' => 'Semaine',
    'LBL_PREVIOUS_MONTH' => 'Mois Précédent',
    'LBL_PREVIOUS_DAY' => 'Jour Précédent',
    'LBL_PREVIOUS_YEAR' => 'Année Précédente',
    'LBL_PREVIOUS_WEEK' => 'Sem. précédente',
    'LBL_NEXT_MONTH' => 'Mois Suivant',
    'LBL_NEXT_DAY' => 'Jour Suivant',
    'LBL_NEXT_YEAR' => 'Année Suivante',
    'LBL_NEXT_WEEK' => 'Sem. suivante',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planifié',
    'LBL_BUSY' => 'Occupé',
    'LBL_CONFLICT' => 'Conflit',
    'LBL_USER_CALENDARS' => 'Calendriers des utilisateurs',
    'LBL_SHARED' => 'Partagé',
    'LBL_PREVIOUS_SHARED' => 'Précédent',
    'LBL_NEXT_SHARED' => 'Suivant',
    'LBL_SHARED_CAL_TITLE' => 'Calendrier partagé',
    'LBL_USERS' => 'Assigné à',
    'LBL_REFRESH' => 'Rafraîchir',
    'LBL_EDIT_USERLIST' => 'Liste des Utilisateurs',
    'LBL_SELECT_USERS' => 'Selectionner les utilisateurs à afficher sur le calendrier',
    'LBL_FILTER_BY_TEAM' => 'Filtrer la liste des utilisateurs par Equipe:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_DATE' => 'Date et Heure de début',
    'LBL_CREATE_MEETING' => 'Planifier Réunion',
    'LBL_CREATE_CALL' => 'Planifier Appel',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_SETTINGS' => 'Paramètres',
    'LBL_CREATE_NEW_RECORD' => 'Créer une activité',
    'LBL_LOADING' => 'Chargement .....',
    'LBL_SAVING' => 'Sauvegarde .....',
    'LBL_SENDING_INVITES' => 'Envoi des invitations ....',
    'LBL_CONFIRM_REMOVE' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Etes vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
    'LBL_EDIT_RECORD' => 'Editer activité',
    'LBL_ERROR_SAVING' => 'Erreur lors de la sauvegarde',
    'LBL_ERROR_LOADING' => 'Erreur lors du chargement',
    'LBL_GOTO_DATE' => 'Aller à la date',
    'NOTICE_DURATION_TIME' => 'La durée doit être supérieure à 0',
    'LBL_STYLE_BASIC' => 'Basique',
    'LBL_STYLE_ADVANCED' => 'Avancée',

    'LBL_INFO_TITLE' => 'Informations complémentaires',
    'LBL_INFO_DESC' => 'Description',
    'LBL_INFO_START_DT' => 'Date de début',
    'LBL_INFO_DUE_DT' => 'Date d&#39;échéance',
    'LBL_INFO_DURATION' => 'Durée',
    'LBL_INFO_NAME' => 'Sujet',
    'LBL_INFO_RELATED_TO' => 'Relatif à',

    'LBL_NO_USER' => 'Aucune correspondance pour le champ : Assigné à',
    'LBL_SUBJECT' => 'Sujet',
    'LBL_DURATION' => 'Durée',
    'LBL_STATUS' => 'Statut',
    'LBL_DATE_TIME' => 'Date et Heure',


    'LBL_SETTINGS_TITLE' => 'Paramètres',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afficher les créneaux horaires dans les vues Jour et Semaine:',
    'LBL_SETTINGS_TIME_STARTS' => 'Heure début :',
    'LBL_SETTINGS_TIME_ENDS' => 'Heure fin :',
    'LBL_SETTINGS_CALLS_SHOW' => 'Voir les appels :',
    'LBL_SETTINGS_TASKS_SHOW' => 'Voir les tâches :',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Voir les réunion, appels et tâches terminés :',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Appliquer',
    'LBL_SEND_INVITES' => 'Envoyer Invitations',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Clôturer',

    'LBL_GENERAL_TAB' => 'Détails',
    'LBL_PARTICIPANTS_TAB' => 'Participants',
    'LBL_REPEAT_TAB' => 'Récurrence',

    'LBL_REPEAT_TYPE' => 'Répéter',
    'LBL_REPEAT_INTERVAL' => 'Intervalle',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Après',
    'LBL_REPEAT_OCCURRENCES' => 'occurrences',
    'LBL_REPEAT_END_BY' => 'Le',
    'LBL_REPEAT_DOW' => 'Le',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Nombre d’occurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Votre requête allait créer plus de $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les occurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les occurrences',

    'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de début',
    'ERR_YEAR_BETWEEN' => 'Désolé, le calendrier ne peut pas afficher l&#039;année que vous avez demandée<br>Année doit être compris entre 1970 et 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non définit pour cette vue',
    'LBL_NO_ITEMS_MOBILE' => 'Votre calendrier est libre pour la semaine.',
    'LBL_SECURITYGROUPS' => 'Filtrer la liste des utilisateurs par groupe de sécurité',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Dim",
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Le dimanche",
            "Le lundi",
            "Le mardi",
            "Le mercredi",
            "Le jeudi",
            "Le vendredi",
            "Le samedi",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Jan",
            "Fév",
            "Mar",
            "Avr",
            "Mai",
            "Juin",
            "Juil",
            "Août",
            "Sept",
            "Oct",
            "Nov",
            "Déc",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Janvier",
            "Février",
            "Mars",
            "Avr",
            "Mai",
            "Juin",
            "Juil",
            "Août",
            "Sept",
            "Oct",
            "Nov",
            "Déc",
        ),
);
?>
