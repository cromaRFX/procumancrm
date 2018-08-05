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
    'LBL_MODULE_NAME' => 'Projekty',
    'LBL_MODULE_TITLE' => 'Projekty: Strona główna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie projektów',
    'LBL_LIST_FORM_TITLE' => 'Lista projektów',
    'LBL_HISTORY_TITLE' => 'Historia',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data utworzenia:',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_ASSIGNED_USER_ID' => 'Przydzielony do:',
    'LBL_ASSIGNED_USER_NAME' => 'Przydzielony do:',
    'LBL_MODIFIED_USER_ID' => 'ID Użytkownika modyfikującego:',
    'LBL_CREATED_BY' => 'Utworzone przez:',
    'LBL_TEAM_ID' => 'Zespół:',
    'LBL_NAME' => 'Nazwa:',
    'LBL_PDF_PROJECT_NAME' => 'Nazwa projektu:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DELETED' => 'Usunięty:',
    'LBL_DATE' => 'Data:',
    'LBL_DATE_START' => 'Data rozpoczęcia:',
    'LBL_DATE_END' => 'Data zakończenia:',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_STATUS' => 'Status',
    'LBL_MY_PROJECTS' => 'Moje Projekty',
    'LBL_MY_PROJECT_TASKS' => 'Moje zadania projektu',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Całkowita liczba roboczogodzin:',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',

    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_DAYS' => 'Dni',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Przydzielony do',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Całkowita liczba roboczogodzin:',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',
    'LBL_LIST_UPCOMING_TASKS' => 'Nadchodzące zadania (1 Tydzień)',
    'LBL_LIST_OVERDUE_TASKS' => 'Przeterminowane zadania',
    'LBL_LIST_OPEN_CASES' => 'Otwarte zgłoszenia',
    'LBL_LIST_END_DATE' => 'Data zakończenia',
    'LBL_LIST_TEAM_ID' => 'Zespół',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Oferty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nowy projekt',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć ten kontakt z tej projektu?',

    'LNK_NEW_PROJECT' => 'Utwórz projekt',
    'LNK_PROJECT_LIST' => 'Lista projektów',
    'LNK_NEW_PROJECT_TASK' => 'Utwórz zadanie projektu',
    'LNK_PROJECT_TASK_LIST' => 'Lista zadań projektu',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ACTIVITIES_TITLE' => 'Wydarzenia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_QUICK_NEW_PROJECT' => 'Nowy projekt',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nazwa zadania',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_ACTUAL_DURATION' => 'Aktualny czas',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Koniec',
    'LBL_PREDECESSORS' => 'Poprzednie',
    'LBL_PERCENT_COMPLETE' => '% wykonano',
    'LBL_MORE' => 'Więcej...',

    'LBL_PERCENT_BUSY' => '% Zaangażowania',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'Opis',
    'LBL_DURATION_WIDGET' => 'Czas trwania',
    'LBL_START_WIDGET' => 'data_rozpoczęcia',
    'LBL_FINISH_WIDGET' => 'data_zakończenia',
    'LBL_PREDECESSORS_WIDGET' => 'poprzednie_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'procent_wykonano',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Edytuj zadania projektu',

    'LBL_OPPORTUNITIES' => 'Szanse Sprzedaży',
    'LBL_LAST_WEEK' => 'Poprzedni',
    'LBL_NEXT_WEEK' => 'Następny',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Zasoby projektu',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Wakacje',
    'LBL_PROJECT_INFORMATION' => 'Przegląd projektu',
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Wstaw wiersze' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_VIEW_GANTT_TITLE' => 'Zobaczy Wykres Gantta',
    'LBL_VIEW_GANTT_DURATION' => 'Czas Trwania',
    'LBL_ASSIGNED_USER_NAME' => 'Przydzielony do:',
    'LBL_ASSIGNED_USER_ID' => 'Przydzielony do:',
    'LBL_TASK_TITLE' => 'Edytuj zadanie',
    'LBL_PREDECESSOR_TITLE' => 'Edytować poprzednika',
    'LBL_START_DATE_TITLE' => 'Wybierz datę rozpoczęcia',
    'LBL_END_DATE_TITLE' => 'Wybierz Datę Zakończenia',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edit %Complete',
    'LBL_ACTUAL_DURATION_TITLE' => 'Edit Actual Duration',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_LAG' => 'Opóźnienie',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Godziny',
    'LBL_MONTHS' => 'Miesiące',
    'LBL_SUBTASK' => 'Zadania',
    'LBL_MILESTONE_FLAG' => 'Kamień milowy',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_PERCENT_COMPLETE' => '% wykonano',
    'LBL_RESOURCE_CHART' => 'Resource Chart',
    'LBL_RESOURCE_CHART_START' => 'Date Start:',
    'LBL_RESOURCE_CHART_END' => 'Date End:',
    'LBL_RESOURCES' => 'Select Resources:',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_TASK_NAME' => 'Nazwa zadania',
    'LBL_PREDECESSORS' => 'Poprzednie',
    'LBL_ASSIGNED_TO' => 'Menedżer Projektu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Przydzielony do',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Dni wolne',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekty',
    'LBL_TOOLTIP_TASK_NAME' => 'Nazwa Etapu',
    'LBL_TOOLTIP_TITLE' => 'Zadania na ten dzień',
    'LBL_TOOLTIP_TASK_DURATION' => 'Czas Trwania',
    'LBL_PROJECT_TITLE_HOVER' => 'Project Detail View',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Poprzedni miesiąc',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Przyszły miesiąc',
    'LBL_RESOURCE_CHART_WEEK' => 'Tygodniowy',
    'LBL_RESOURCE_CHART_DAY' => 'Dniowy',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Moje Projekty',
    'LBL_LIST_ASSIGNED_USER' => 'Menedżer Projektu',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
);
?>
