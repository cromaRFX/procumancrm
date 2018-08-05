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
    'LBL_MODULE_NAME' => 'Projekt',
    'LBL_MODULE_TITLE' => 'Projekte: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Projekte Suche',
    'LBL_LIST_FORM_TITLE' => 'Projektliste',
    'LBL_HISTORY_TITLE' => 'Verlauf',

    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Erstellt:',
    'LBL_DATE_MODIFIED' => 'Geändert am:',
    'LBL_ASSIGNED_USER_ID' => 'Zugewiesen an:',
    'LBL_ASSIGNED_USER_NAME' => 'Zugewiesen an:',
    'LBL_MODIFIED_USER_ID' => 'Geänder von:',
    'LBL_CREATED_BY' => 'Erstellt von:',
    'LBL_TEAM_ID' => 'Gruppe:',
    'LBL_NAME' => 'Name:',
    'LBL_PDF_PROJECT_NAME' => 'Projektname:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DELETED' => 'Gelöscht:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_DATE_END' => 'Enddatum:',
    'LBL_PRIORITY' => 'Priorität:',
    'LBL_STATUS' => 'Status',
    'LBL_MY_PROJECTS' => 'Meine Projekte',
    'LBL_MY_PROJECT_TASKS' => 'Meine Projektaufgaben',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Gesamtaufwand geplant (Std):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Gesamtaufwant tats. (Std):',

    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_DAYS' => 'Tage',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Zugewiesen an',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Gesamtaufwand geplant (Std)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Gesamtaufwand tats. (Std)',
    'LBL_LIST_UPCOMING_TASKS' => 'Bevorstehende Aufgaben (1 Woche)',
    'LBL_LIST_OVERDUE_TASKS' => 'Überfällige Aufgaben',
    'LBL_LIST_OPEN_CASES' => 'Offene Fälle',
    'LBL_LIST_END_DATE' => 'Enddatum',
    'LBL_LIST_TEAM_ID' => 'Gruppe',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Firmen',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Angebote',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Neues Projekt',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Sind Sie sicher dass Sie diesen Kontakt aus dem Projekt entfernen wollen?',

    'LNK_NEW_PROJECT' => 'Neues Projekt',
    'LNK_PROJECT_LIST' => 'Projektliste',
    'LNK_NEW_PROJECT_TASK' => 'Neue Projektaufgabe',
    'LNK_PROJECT_TASK_LIST' => 'Projektaufgaben',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekte',
    'LBL_ACTIVITIES_TITLE' => 'Aktivitäten',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_QUICK_NEW_PROJECT' => 'Neues Projekt',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Fälle',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkte',


    'LBL_TASK_ID' => 'Nr',
    'LBL_TASK_NAME' => 'Aufgabenname',
    'LBL_DURATION' => 'Dauer',
    'LBL_ACTUAL_DURATION' => 'Aktuelle Dauer',
    'LBL_START' => 'Starten',
    'LBL_FINISH' => 'Ende',
    'LBL_PREDECESSORS' => 'Vorgänger',
    'LBL_PERCENT_COMPLETE' => '% Fortschritt',
    'LBL_MORE' => 'Mehr...',

    'LBL_PERCENT_BUSY' => '% Beschäftigt',
    'LBL_TASK_ID_WIDGET' => 'ID',
    'LBL_TASK_NAME_WIDGET' => 'Beschreibung',
    'LBL_DURATION_WIDGET' => 'Dauer',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Projektaufgaben bearbeiten',

    'LBL_OPPORTUNITIES' => 'Verkaufschancen',
    'LBL_LAST_WEEK' => 'Zurück',
    'LBL_NEXT_WEEK' => 'Weiter',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektmittel',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Urlaub',
    'LBL_PROJECT_INFORMATION' => 'Projektübersicht',
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Zeile einfügen' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt ansehen',
    'LBL_VIEW_GANTT_DURATION' => 'Dauer',
    'LBL_ASSIGNED_USER_NAME' => 'Zugewiesen an:',
    'LBL_ASSIGNED_USER_ID' => 'Zugewiesen an:',
    'LBL_TASK_TITLE' => 'Aufgabe bearbeiten',
    'LBL_PREDECESSOR_TITLE' => 'Vorgänger bearbeiten',
    'LBL_START_DATE_TITLE' => 'Startdatum auswählen',
    'LBL_END_DATE_TITLE' => 'Enddatum auswählen',
    'LBL_DURATION_TITLE' => 'Dauer bearbeiten',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Bearbeitung zu % vollständig',
    'LBL_ACTUAL_DURATION_TITLE' => 'Aktuelle Dauer bearbeiten',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_LAG' => 'Verzögerung',
    'LBL_DAYS' => 'Tage',
    'LBL_HOURS' => 'Stunden',
    'LBL_MONTHS' => 'Monate',
    'LBL_SUBTASK' => 'Aufgaben',
    'LBL_MILESTONE_FLAG' => 'Meilenstein',
    'LBL_ADD_NEW_TASK' => 'Neue Aufgabe hinzufügen',
    'LBL_DELETE_TASK' => 'Aufgabe löschen',
    'LBL_EDIT_TASK_PROPERTIES' => 'Aufgabeneingeschaften bearbeiten',
    'LBL_PARENT_TASK_ID' => 'Übergeordnete Aufgaben-ID',
    'LBL_PERCENT_COMPLETE' => '% Fortschritt',
    'LBL_RESOURCE_CHART' => 'Ressourcen-Diagramm',
    'LBL_RESOURCE_CHART_START' => 'Anfangsdatum:',
    'LBL_RESOURCE_CHART_END' => 'Enddatum:',
    'LBL_RESOURCES' => 'Ressourcen auswählen',
    'LBL_RELATIONSHIP_TYPE' => 'Beziehungstyp',
    'LBL_TASK_NAME' => 'Aufgabenname',
    'LBL_PREDECESSORS' => 'Vorgänger',
    'LBL_ASSIGNED_TO' => 'Projektmanager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projektvorlage',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Zugewiesen an',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Projekt-Feiertage',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekte',
    'LBL_TOOLTIP_TASK_NAME' => 'Vorgangsname',
    'LBL_TOOLTIP_TITLE' => 'Aufgaben an diesem Tag',
    'LBL_TOOLTIP_TASK_DURATION' => 'Dauer',
    'LBL_PROJECT_TITLE_HOVER' => 'Projekt Detailansicht',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ressource ist ein Benutzer',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ressource ist ein Kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Vorheriger Monat',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Nächster Monat',
    'LBL_RESOURCE_CHART_WEEK' => 'Woche',
    'LBL_RESOURCE_CHART_DAY' => 'Tag',
    'LBL_RESOURCE_CHART_WARNING' => 'Keine Ressourcen wurden einem Projekt zugeordnet',
    'LBL_PROJECT_DELETE_MSG' => 'Sind Sie sicher, dass Sie dieses Projekt mit seinen Aufgaben löschen möchten?',
    'LBL_LIST_MY_PROJECT' => 'Meine Projekte',
    'LBL_LIST_ASSIGNED_USER' => 'Projektmanager',
    'LBL_UNASSIGNED' => 'Nicht zugewiesen',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressourcen',
);
?>
