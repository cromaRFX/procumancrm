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
    'LBL_MODULE_TITLE' => 'Projekt: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Projekt keresése',
    'LBL_LIST_FORM_TITLE' => 'Projektlista',
    'LBL_HISTORY_TITLE' => 'Előzmények',

    'LBL_ID' => 'Azonosító',
    'LBL_DATE_ENTERED' => 'Dátum rögzítve:',
    'LBL_DATE_MODIFIED' => 'Dátum módosítva:',
    'LBL_ASSIGNED_USER_ID' => 'Felelős:',
    'LBL_ASSIGNED_USER_NAME' => 'Felelős:',
    'LBL_MODIFIED_USER_ID' => 'Módosító felhasználó azonosítója:',
    'LBL_CREATED_BY' => 'Létrehozta:',
    'LBL_TEAM_ID' => 'Csoport:',
    'LBL_NAME' => 'Név:',
    'LBL_PDF_PROJECT_NAME' => 'Projekt neve:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DELETED' => 'Törölve:',
    'LBL_DATE' => 'Dátum',
    'LBL_DATE_START' => 'Kezdés dátuma:',
    'LBL_DATE_END' => 'Befejezés dátuma:',
    'LBL_PRIORITY' => 'Prioritás:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_MY_PROJECTS' => 'Projektjeim',
    'LBL_MY_PROJECT_TASKS' => 'Projektfeladataim',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Teljes becsült erőfeszítés (óra):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Összes tényleges erőfeszítés (óra):',

    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_DAYS' => 'nap',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Felelős:',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Teljes becsült erőfeszítés (óra):',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Összes tényleges erőfeszítés (óra):',
    'LBL_LIST_UPCOMING_TASKS' => 'Közelgő feladatok (1 hét)',
    'LBL_LIST_OVERDUE_TASKS' => 'Lejárt feladatok',
    'LBL_LIST_OPEN_CASES' => 'Nyitott esetek',
    'LBL_LIST_END_DATE' => 'Befejezés dátuma',
    'LBL_LIST_TEAM_ID' => 'Csoport',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektfeladatok',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Kliensek',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Lehetőség',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Árajánlatok',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Új projekt',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Biztosan el akarja távolítani ezt a kapcsolatot a projektből?',

    'LNK_NEW_PROJECT' => 'Projekt létrehozása',
    'LNK_PROJECT_LIST' => 'Projektlista megtekintése',
    'LNK_NEW_PROJECT_TASK' => 'Projektfeladat létrehozása',
    'LNK_PROJECT_TASK_LIST' => 'Projektfeladatok megtekintése',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ACTIVITIES_TITLE' => 'Tevékenységek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_QUICK_NEW_PROJECT' => 'Új projekt',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektfeladatok',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kliensek',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibák',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Termékek',


    'LBL_TASK_ID' => 'Azonosító',
    'LBL_TASK_NAME' => 'Feladat neve',
    'LBL_DURATION' => 'Időtartam',
    'LBL_ACTUAL_DURATION' => 'Tényleges időtartam',
    'LBL_START' => 'Kezdés',
    'LBL_FINISH' => 'Befejezés',
    'LBL_PREDECESSORS' => 'Előzmények',
    'LBL_PERCENT_COMPLETE' => '% Kész:',
    'LBL_MORE' => 'Még több ...',

    'LBL_PERCENT_BUSY' => 'Foglalt%',
    'LBL_TASK_ID_WIDGET' => 'azonosító',
    'LBL_TASK_NAME_WIDGET' => 'Leírás',
    'LBL_DURATION_WIDGET' => 'Időtartama',
    'LBL_START_WIDGET' => 'kezdés_dátuma',
    'LBL_FINISH_WIDGET' => 'befejezés_dátuma',
    'LBL_PREDECESSORS_WIDGET' => 'előzmények_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'százalékban_kész',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Projektfeladatok szerkesztése',

    'LBL_OPPORTUNITIES' => 'Lehetőség',
    'LBL_LAST_WEEK' => 'Előző',
    'LBL_NEXT_WEEK' => 'Következő>',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektforrások',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektfeladat',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Szabadságok',
    'LBL_PROJECT_INFORMATION' => 'Projekt áttekintése',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Insert Rows' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektfeladatok',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Időtartam',
    'LBL_ASSIGNED_USER_NAME' => 'Felelős:',
    'LBL_ASSIGNED_USER_ID' => 'Felelős:',
    'LBL_TASK_TITLE' => 'Feladat módosítás',
    'LBL_PREDECESSOR_TITLE' => 'Előd módosítás',
    'LBL_START_DATE_TITLE' => 'Kezdő dátum',
    'LBL_END_DATE_TITLE' => 'Befejezés dátuma',
    'LBL_DURATION_TITLE' => 'Időtartam módosítás',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Módosítás %kész',
    'LBL_ACTUAL_DURATION_TITLE' => 'Aktuális időtartam módosítás',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_LAG' => 'Késés',
    'LBL_DAYS' => 'Nap',
    'LBL_HOURS' => 'Óra',
    'LBL_MONTHS' => 'Hónapok',
    'LBL_SUBTASK' => 'Feladat',
    'LBL_MILESTONE_FLAG' => 'Mérföldkő:',
    'LBL_ADD_NEW_TASK' => 'Új feladat hozzáadás',
    'LBL_DELETE_TASK' => 'Feladat törlés',
    'LBL_EDIT_TASK_PROPERTIES' => 'Feladat tulajdonságok módosítása',
    'LBL_PARENT_TASK_ID' => 'Szülő Feladat Id',
    'LBL_PERCENT_COMPLETE' => '% Kész:',
    'LBL_RESOURCE_CHART' => 'Forrás grafikon',
    'LBL_RESOURCE_CHART_START' => 'Kezdés dátuma',
    'LBL_RESOURCE_CHART_END' => 'Befejezés dátuma:',
    'LBL_RESOURCES' => 'Forrás kiválasztás',
    'LBL_RELATIONSHIP_TYPE' => 'Összefüggés Típus',
    'LBL_TASK_NAME' => 'Feladat neve',
    'LBL_PREDECESSORS' => 'Előzmények',
    'LBL_ASSIGNED_TO' => 'Projekt felelős:',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projekt sablon',
    'LBL_STATUS' => 'Állapot:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Felelős:',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Projekt szünidő',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Feladat neve',
    'LBL_TOOLTIP_TITLE' => 'Feladatok ezen a napon',
    'LBL_TOOLTIP_TASK_DURATION' => 'Időtartam',
    'LBL_PROJECT_TITLE_HOVER' => 'Projekt részletes nézet',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Forrás felhasználó',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Forrás Kapcsolattartó',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Előző hónap',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Következő hónap',
    'LBL_RESOURCE_CHART_WEEK' => 'Hét',
    'LBL_RESOURCE_CHART_DAY' => 'Nap',
    'LBL_RESOURCE_CHART_WARNING' => 'Nincsenek források rendelve a projekthez',
    'LBL_PROJECT_DELETE_MSG' => 'Biztosan törölni szeretné a projektet és a hozzá kapcsolt feladatokat?',
    'LBL_LIST_MY_PROJECT' => 'Projektjeim',
    'LBL_LIST_ASSIGNED_USER' => 'Projekt felelős:',
    'LBL_UNASSIGNED' => 'Független',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Forrás',
);
?>
