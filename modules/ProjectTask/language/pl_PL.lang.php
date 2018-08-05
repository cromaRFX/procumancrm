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
	'LBL_MODULE_NAME' => 'Zadania w Projekcie',
	'LBL_MODULE_TITLE' => 'Zadania Projektu: Strona główna',
	'LBL_SEARCH_FORM_TITLE' => 'Szukaj Zadań Projektu',
	'LBL_LIST_FORM_TITLE'=> 'Lista elementów Projektu',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Edytuj elementy w siatce',    
	
	'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'ID elementu Projektu:',
    'LBL_PROJECT_ID' => 'ID Projektu:',
	'LBL_DATE_ENTERED' => 'Data rozpoczęcia:',
	'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
	'LBL_ASSIGNED_USER_ID' => 'Przydzielony do:',
	'LBL_MODIFIED_USER_ID' => 'ID użytkownika modyfikującego:',
	'LBL_CREATED_BY' => 'Stworzony przez:',
	'LBL_TEAM_ID' => 'Zespół:',
	'LBL_NAME' => 'Nazwa:',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_DUE' => 'Data zakończenia:',
	'LBL_TIME_DUE' => 'Czas trwania:',
    'LBL_RESOURCE' => 'Źródło:',
    'LBL_PREDECESSORS' => 'Poprzednik:',
	'LBL_DATE_START' => 'Data rozpoczęcia:',
    'LBL_DATE_FINISH' => 'Data zakończenia:',    
	'LBL_TIME_START' => 'Czas rozpoczęcia:',
    'LBL_TIME_FINISH' => 'Czas zakończenia:',
    'LBL_DURATION' => 'Czas Trwania:',
    'LBL_DURATION_UNIT' => 'Jednostka czasu trwania:',
    'LBL_ACTUAL_DURATION' => 'Stan zaawansowania:',
	'LBL_PARENT_ID' => 'Realizacja:',
    'LBL_PARENT_TASK_ID' => 'ID nadrzędnego elementu:',    
    'LBL_PERCENT_COMPLETE' => 'Procent zaawansowania (%):',
	'LBL_PRIORITY' => 'Priorytet:',
	'LBL_DESCRIPTION' => 'Notatki:',
	'LBL_ORDER_NUMBER' => 'Kolejność:',
	'LBL_TASK_NUMBER' => 'Numer Projektu:',
    'LBL_TASK_ID' => 'ID elementu:',
	'LBL_DEPENDS_ON_ID' => 'Zależy od:',
	'LBL_MILESTONE_FLAG' => 'Kamień milowy:',
	'LBL_ESTIMATED_EFFORT' => 'Spodziewana liczba roboczogodzin:',
	'LBL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',
	'LBL_UTILIZATION' => 'Użycie (%):',
	'LBL_DELETED' => 'Usunięty:',

	'LBL_LIST_ORDER_NUMBER' => 'Kolejność',
	'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_DAYS' => 'dni',
	'LBL_LIST_PARENT_NAME' => 'Projekt',
	'LBL_LIST_PERCENT_COMPLETE' => 'Zaawansowanie (%)',
	'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DURATION' => 'Czas trwania',
    'LBL_LIST_ACTUAL_DURATION' => 'Aktualny stan zaawansowania',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Przydzielony do',
	'LBL_LIST_DATE_DUE' => 'Okres trwania',
	'LBL_LIST_DATE_START' => 'Data rozpoczęcia',
    'LBL_LIST_DATE_FINISH' => 'Data zakończenia',    
	'LBL_LIST_PRIORITY' => 'Priorytet',
	'LBL_LIST_CLOSE' => 'Zamknij',
	'LBL_PROJECT_NAME' => 'Nazwa Projektu',

	'LNK_NEW_PROJECT'	=> 'Utwórz Projekt',
	'LNK_PROJECT_LIST'	=> 'Lista Projektu',
	'LNK_NEW_PROJECT_TASK'	=> 'Utwórz element Projektu',
	'LNK_PROJECT_TASK_LIST'	=> 'Elementy Projektu',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Moje otwarte elementy Projektu',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'elementy Projektu',
	'LBL_NEW_FORM_TITLE' => 'Nowy element Projektu',

	'LBL_ACTIVITIES_TITLE'=>'Działania',
	'LBL_HISTORY_TITLE'=>'Historia',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia', 
	'DATE_JS_ERROR' => 'Wprowadź datę odpowiednią dla wprowadzonej godziny',

    'LBL_ASSIGNED_USER_NAME' => 'Przydzielone do',
    'LBL_PARENT_NAME' => 'Nazwa Projektu',
    'LBL_LIST_PROJECT_NAME' => 'Projekty',
	'LBL_EDITLAYOUT' => 'Edytuj Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Oś czasu',
	
	'LBL_SUBTASK' => 'Podzadanie',
	'LBL_LAG' => 'Opóźnienie',
	'LBL_DAYS' => 'Dni',
	'LBL_HOURS' => 'Godziny',
	'LBL_RELATIONSHIP_TYPE' => 'Typ Powiązania',
);

?>