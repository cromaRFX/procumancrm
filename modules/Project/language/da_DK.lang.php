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
    'LBL_MODULE_TITLE' => 'Projekter: Startside',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter projekt',
    'LBL_LIST_FORM_TITLE' => 'Projektliste',
    'LBL_HISTORY_TITLE' => 'Historik',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Oprettet den:',
    'LBL_DATE_MODIFIED' => 'Ændret den:',
    'LBL_ASSIGNED_USER_ID' => 'Tildelt til:',
    'LBL_ASSIGNED_USER_NAME' => 'Tildelt til:',
    'LBL_MODIFIED_USER_ID' => 'Ændret bruger-id:',
    'LBL_CREATED_BY' => 'Oprettet af:',
    'LBL_TEAM_ID' => 'Team:',
    'LBL_NAME' => 'Navn:',
    'LBL_PDF_PROJECT_NAME' => 'Projektnavn:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DELETED' => 'Slettet:',
    'LBL_DATE' => 'Dato',
    'LBL_DATE_START' => 'Startdato:',
    'LBL_DATE_END' => 'Slutdato:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_STATUS' => 'Status',
    'LBL_MY_PROJECTS' => 'Mine projekter',
    'LBL_MY_PROJECT_TASKS' => 'Mine projektopgaver',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Samlet anslåede indsats "hrs":',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Samlet faktiske indsats "hrs":',

    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_DAYS' => 'dage',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Tildelt til',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Samlet anslåede indsats "hrs":',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Samlet faktiske indsats "hrs":',
    'LBL_LIST_UPCOMING_TASKS' => 'Kommende opgaver "1 uge"',
    'LBL_LIST_OVERDUE_TASKS' => 'Forfaldne opgaver',
    'LBL_LIST_OPEN_CASES' => 'Åbne sager',
    'LBL_LIST_END_DATE' => 'Slutdato',
    'LBL_LIST_TEAM_ID' => 'Team',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektopgaver',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Virksomheder',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Salgsmuligheder',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tilbud',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nyt projekt',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på, at du vil fjerne denne kontakt fra dette projekt?',

    'LNK_NEW_PROJECT' => 'Opret projekt',
    'LNK_PROJECT_LIST' => 'Projektliste',
    'LNK_NEW_PROJECT_TASK' => 'Opret projektopgave',
    'LNK_PROJECT_TASK_LIST' => 'Projektopgaver',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekter',
    'LBL_ACTIVITIES_TITLE' => 'Aktiviteter',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_QUICK_NEW_PROJECT' => 'Nyt projekt',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektopgaver',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Virksomheder',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Salgsmuligheder',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fejl',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkter',


    'LBL_TASK_ID' => 'Id',
    'LBL_TASK_NAME' => 'Opgavenavn',
    'LBL_DURATION' => 'Varighed',
    'LBL_ACTUAL_DURATION' => 'Faktisk varighed',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Udfør',
    'LBL_PREDECESSORS' => 'Foregående',
    'LBL_PERCENT_COMPLETE' => '% fuldført',
    'LBL_MORE' => 'Mere...',

    'LBL_PERCENT_BUSY' => '% optaget',
    'LBL_TASK_ID_WIDGET' => 'ID',
    'LBL_TASK_NAME_WIDGET' => 'beskrivelse',
    'LBL_DURATION_WIDGET' => 'varighed',
    'LBL_START_WIDGET' => 'startdato',
    'LBL_FINISH_WIDGET' => 'slutdato',
    'LBL_PREDECESSORS_WIDGET' => 'foregående_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'procent_fuldført',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Rediger projektopgaver',

    'LBL_OPPORTUNITIES' => 'Salgsmuligheder',
    'LBL_LAST_WEEK' => 'Foregående',
    'LBL_NEXT_WEEK' => 'Næste',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektressourcer',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektopgave',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Helligdage',
    'LBL_PROJECT_INFORMATION' => 'Projektoversigt',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Insert Rows' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektopgaver',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Varighed',
    'LBL_ASSIGNED_USER_NAME' => 'Tildelt til:',
    'LBL_ASSIGNED_USER_ID' => 'Tildelt til:',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_PREDECESSOR_TITLE' => 'Edit Predecessor',
    'LBL_START_DATE_TITLE' => 'Select Start Date',
    'LBL_END_DATE_TITLE' => 'Select End Date',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edit %Complete',
    'LBL_ACTUAL_DURATION_TITLE' => 'Edit Actual Duration',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dage',
    'LBL_HOURS' => 'Timer',
    'LBL_MONTHS' => 'Måneder',
    'LBL_SUBTASK' => 'Opgaver',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_PERCENT_COMPLETE' => '% fuldført',
    'LBL_RESOURCE_CHART' => 'Resource Chart',
    'LBL_RESOURCE_CHART_START' => 'Date Start:',
    'LBL_RESOURCE_CHART_END' => 'Date End:',
    'LBL_RESOURCES' => 'Select Resources:',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_TASK_NAME' => 'Opgavenavn',
    'LBL_PREDECESSORS' => 'Foregående',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Tildelt til',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Project Holidays',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekter',
    'LBL_TOOLTIP_TASK_NAME' => 'Opgavenavn',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Varighed',
    'LBL_PROJECT_TITLE_HOVER' => 'Project Detail View',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Forrige måned',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Næste måned',
    'LBL_RESOURCE_CHART_WEEK' => 'Uge',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Mine projekter',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
);
?>
