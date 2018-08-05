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
    'LBL_MODULE_NAME' => 'Projecten',
    'LBL_MODULE_TITLE' => 'Projecten: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Projecten zoeken',
    'LBL_LIST_FORM_TITLE' => 'Projecten lijst',
    'LBL_HISTORY_TITLE' => 'Geschiedenis',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Ingevoerd:',
    'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
    'LBL_ASSIGNED_USER_ID' => 'Toegewezen aan:',
    'LBL_ASSIGNED_USER_NAME' => 'Toegewezen aan:',
    'LBL_MODIFIED_USER_ID' => 'Gewijzigde gebruikers ID:',
    'LBL_CREATED_BY' => 'Aangemaakt door:',
    'LBL_TEAM_ID' => 'Team:',
    'LBL_NAME' => 'Naam:',
    'LBL_PDF_PROJECT_NAME' => 'Project naam:',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DELETED' => 'Verwijderd:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Begindatum:',
    'LBL_DATE_END' => 'Einddatum:',
    'LBL_PRIORITY' => 'Prioriteit:',
    'LBL_STATUS' => 'Status:',
    'LBL_MY_PROJECTS' => 'Mijn Projecten',
    'LBL_MY_PROJECT_TASKS' => 'Mijn openstaande projecttaken',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Totaal geschatte uren:',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Totaal werkelijke uren:',

    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_DAYS' => 'dagen',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Toegewezen aan',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totaal geschatte uren',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Totaal werkelijke uren',
    'LBL_LIST_UPCOMING_TASKS' => 'Opkomende taken (1 week)',
    'LBL_LIST_OVERDUE_TASKS' => 'Opkomende taken',
    'LBL_LIST_OPEN_CASES' => 'Open verzoeken',
    'LBL_LIST_END_DATE' => 'Einddatum',
    'LBL_LIST_TEAM_ID' => 'Team',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project taak',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Relatie',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Kansen',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Prijsopgaven',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nieuw project',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze contactpersoon wilt verwijderen uit dit project?',

    'LNK_NEW_PROJECT' => 'Nieuw project',
    'LNK_PROJECT_LIST' => 'Projecten lijst',
    'LNK_NEW_PROJECT_TASK' => 'Nieuwe projecttaak',
    'LNK_PROJECT_TASK_LIST' => 'Project taak',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projecten',
    'LBL_ACTIVITIES_TITLE' => 'Activiteiten',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_QUICK_NEW_PROJECT' => 'Nieuw project',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project taak',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Relaties',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Producten',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Naam taak',
    'LBL_DURATION' => 'Duur',
    'LBL_ACTUAL_DURATION' => 'Werkelijke duur',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Einde',
    'LBL_PREDECESSORS' => 'Voorgangers',
    'LBL_PERCENT_COMPLETE' => '% compleet',
    'LBL_MORE' => 'Meer...',

    'LBL_PERCENT_BUSY' => '% bezig',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'description',
    'LBL_DURATION_WIDGET' => 'duration',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Wijzig projecttaken',

    'LBL_OPPORTUNITIES' => 'Kansen',
    'LBL_LAST_WEEK' => 'Vorige',
    'LBL_NEXT_WEEK' => 'Volgende',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Project resources',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Project taken',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Vakanties',
    'LBL_PROJECT_INFORMATION' => 'Project overzicht',
    'LBL_EDITLAYOUT' => 'Wijzig lay-out' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Rijen invoegen' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project taak',
    'LBL_VIEW_GANTT_TITLE' => 'Toon Gantt-diagram',
    'LBL_VIEW_GANTT_DURATION' => 'Duur',
    'LBL_ASSIGNED_USER_NAME' => 'Toegewezen aan:',
    'LBL_ASSIGNED_USER_ID' => 'Toegewezen aan:',
    'LBL_TASK_TITLE' => 'Bewerk taak',
    'LBL_PREDECESSOR_TITLE' => 'Bewerk voorganger',
    'LBL_START_DATE_TITLE' => 'Selecteer start datum',
    'LBL_END_DATE_TITLE' => 'Selecteer eind datum',
    'LBL_DURATION_TITLE' => 'Bewerk tijdsduur',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Bewerk percentage compleet',
    'LBL_ACTUAL_DURATION_TITLE' => 'Bewerk actuele tijdsduur',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_LAG' => 'Leggen',
    'LBL_DAYS' => 'Dagen',
    'LBL_HOURS' => 'Uren',
    'LBL_MONTHS' => 'Maanden',
    'LBL_SUBTASK' => 'Taken',
    'LBL_MILESTONE_FLAG' => 'Mijlpaal',
    'LBL_ADD_NEW_TASK' => 'Toevoegen nieuwe taak',
    'LBL_DELETE_TASK' => 'Verwijder taak',
    'LBL_EDIT_TASK_PROPERTIES' => 'Bewerk taak eigenschappen',
    'LBL_PARENT_TASK_ID' => 'Ouder taak id',
    'LBL_PERCENT_COMPLETE' => '% compleet',
    'LBL_RESOURCE_CHART' => 'Bron grafiek',
    'LBL_RESOURCE_CHART_START' => 'Datum start:',
    'LBL_RESOURCE_CHART_END' => 'Datum einde:',
    'LBL_RESOURCES' => 'Selecteer bronnen',
    'LBL_RELATIONSHIP_TYPE' => 'Relatie type',
    'LBL_TASK_NAME' => 'Naam taak',
    'LBL_PREDECESSORS' => 'Voorgangers',
    'LBL_ASSIGNED_TO' => 'Project manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project sjabloon',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Toegewezen aan',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Project vakantiedagen',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projecten',
    'LBL_TOOLTIP_TASK_NAME' => 'Naam taak',
    'LBL_TOOLTIP_TITLE' => 'Taken voor vandaag',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duur',
    'LBL_PROJECT_TITLE_HOVER' => 'Project detail overzicht',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Bron is een gebruiker',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Bron is een contactpersoon',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Vorige maand',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Volgende maand',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'Geen bronnen zijn toegewezen aan dit project',
    'LBL_PROJECT_DELETE_MSG' => 'Bent u er zeker van dat u dit project wilt verwijderen met de gerelateerde taken?',
    'LBL_LIST_MY_PROJECT' => 'Mijn Projecten',
    'LBL_LIST_ASSIGNED_USER' => 'Project manager',
    'LBL_UNASSIGNED' => 'Niet toegewezen',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Bronnen',
);
?>
