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
    'LBL_MODULE_NAME' => 'Progetto',
    'LBL_MODULE_TITLE' => 'Progetti: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Progetto',
    'LBL_LIST_FORM_TITLE' => 'Visualizza Progetti',
    'LBL_HISTORY_TITLE' => 'Cronologia',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data Inserimento:',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_ASSIGNED_USER_ID' => 'Assegnato a:',
    'LBL_ASSIGNED_USER_NAME' => 'Assegnato a:',
    'LBL_MODIFIED_USER_ID' => 'ID Utente Modificato:',
    'LBL_CREATED_BY' => 'Creato Da:',
    'LBL_TEAM_ID' => 'Gruppo:',
    'LBL_NAME' => 'Nome:',
    'LBL_PDF_PROJECT_NAME' => 'Nome Progetto:',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DELETED' => 'Cancellato:',
    'LBL_DATE' => 'Data',
    'LBL_DATE_START' => 'Data Inizio:',
    'LBL_DATE_END' => 'Data Fine:',
    'LBL_PRIORITY' => 'Priorità:',
    'LBL_STATUS' => 'Stato:',
    'LBL_MY_PROJECTS' => 'I miei Progetti',
    'LBL_MY_PROJECT_TASKS' => 'Compiti del Mio Progetto',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Totale Sforzo Stimato (ore):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Totale Sforzo Effettivo (ore):',

    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DAYS' => 'giorni',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Assegnato A:',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totale Sforzo Stimato (ore)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Totale Sforzo Effettivo (ore)',
    'LBL_LIST_UPCOMING_TASKS' => 'Prossimi Compiti (1 Settimana)',
    'LBL_LIST_OVERDUE_TASKS' => 'Compiti Scaduti',
    'LBL_LIST_OPEN_CASES' => 'Reclami Aperti',
    'LBL_LIST_END_DATE' => 'Data Fine',
    'LBL_LIST_TEAM_ID' => 'Gruppo',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contatti',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Aziende',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Offerte',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nuovo Progetto',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Sei sicuro di voler rimuovere questo contatto dal progetto?',

    'LNK_NEW_PROJECT' => 'Nuovo Progetto',
    'LNK_PROJECT_LIST' => 'Visualizza Progetti',
    'LNK_NEW_PROJECT_TASK' => 'Nuovo Compito di Progetto',
    'LNK_PROJECT_TASK_LIST' => 'Visualizza Compiti di Progetto',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_ACTIVITIES_TITLE' => 'Attività',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_QUICK_NEW_PROJECT' => 'Nuovo Progetto',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gestione Bug',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Prodotti',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome Compito',
    'LBL_DURATION' => 'Durata',
    'LBL_ACTUAL_DURATION' => 'Durata Attuale',
    'LBL_START' => 'Inizio',
    'LBL_FINISH' => 'Fine',
    'LBL_PREDECESSORS' => 'Predecessori',
    'LBL_PERCENT_COMPLETE' => '% Completo',
    'LBL_MORE' => 'Per saperne di più...',

    'LBL_PERCENT_BUSY' => '% Occupato',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'descrizione',
    'LBL_DURATION_WIDGET' => 'durata',
    'LBL_START_WIDGET' => 'data_inizio',
    'LBL_FINISH_WIDGET' => 'data_fine',
    'LBL_PREDECESSORS_WIDGET' => 'predecessori_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percentuale_completamento',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Modifica Compiti di Progetto',

    'LBL_OPPORTUNITIES' => 'Opportunità',
    'LBL_LAST_WEEK' => 'Precedente',
    'LBL_NEXT_WEEK' => 'Prossima',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Risorse Progetto',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Festività',
    'LBL_PROJECT_INFORMATION' => 'Informazioni Progetto',
    'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Inserire Righe' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_VIEW_GANTT_TITLE' => 'Visualizza Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durata',
    'LBL_ASSIGNED_USER_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_USER_ID' => 'Assegnato a:',
    'LBL_TASK_TITLE' => 'Modifica Compito',
    'LBL_PREDECESSOR_TITLE' => 'Modifica Predecessore',
    'LBL_START_DATE_TITLE' => 'Seleziona Data Inizio',
    'LBL_END_DATE_TITLE' => 'Seleziona Data Fine',
    'LBL_DURATION_TITLE' => 'Modifica Durata',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Modifica % Completamento',
    'LBL_ACTUAL_DURATION_TITLE' => 'Modifica Durata Effettiva',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_LAG' => 'Ritardo',
    'LBL_DAYS' => 'Giorni',
    'LBL_HOURS' => 'Ore',
    'LBL_MONTHS' => 'Mesi',
    'LBL_SUBTASK' => 'Compiti',
    'LBL_MILESTONE_FLAG' => 'Compito Fondamentale',
    'LBL_ADD_NEW_TASK' => 'Aggiungi Compito',
    'LBL_DELETE_TASK' => 'Rimuovi Compito',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifica le Proprietà del Compito.',
    'LBL_PARENT_TASK_ID' => 'ID Compito Padre',
    'LBL_PERCENT_COMPLETE' => '% Completo',
    'LBL_RESOURCE_CHART' => 'Diagramma Risorse',
    'LBL_RESOURCE_CHART_START' => 'Data Inizio:',
    'LBL_RESOURCE_CHART_END' => 'Data Fine:',
    'LBL_RESOURCES' => 'Selezione Risorse:',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo Relazione',
    'LBL_TASK_NAME' => 'Nome Compito',
    'LBL_PREDECESSORS' => 'Predecessori',
    'LBL_ASSIGNED_TO' => 'Assegnato a:',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Template Progetto',
    'LBL_STATUS' => 'Stato:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Assegnato A:',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Vacanze Progetto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Progetti',
    'LBL_TOOLTIP_TASK_NAME' => 'Nome Attività',
    'LBL_TOOLTIP_TITLE' => 'Compiti di questo giorno',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durata',
    'LBL_PROJECT_TITLE_HOVER' => 'Vista Dettaglio Progetto',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La Risorsa è un Utente',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La Risorsa è un Contatto',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mese Precedente',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Prossimo Mese',
    'LBL_RESOURCE_CHART_WEEK' => 'Settimana',
    'LBL_RESOURCE_CHART_DAY' => 'Giorno',
    'LBL_RESOURCE_CHART_WARNING' => 'Nessuna Risorsa assegnata ad un progetto.',
    'LBL_PROJECT_DELETE_MSG' => 'Sei sicuro di voler eliminare questo Progetto ed i Compiti ad esso associati?',
    'LBL_LIST_MY_PROJECT' => 'I miei Progetti',
    'LBL_LIST_ASSIGNED_USER' => 'Assegnato a:',
    'LBL_UNASSIGNED' => 'Non Assegnato',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Risorse',
);
?>
