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
	'LBL_MODULE_NAME' => 'Projekt opgaver',
	'LBL_MODULE_TITLE' => 'Projekt opgave: Hjem',
	'LBL_SEARCH_FORM_TITLE' => 'Projekt opgave søgning',
	'LBL_LIST_FORM_TITLE'=> 'Projekt opgave liste',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Rediger opgave i gitter',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Projektopgave-id:',
    'LBL_PROJECT_ID' => 'Projekt-id:',
	'LBL_DATE_ENTERED' => 'Oprettelsesdato:',
	'LBL_DATE_MODIFIED' => 'Ændret dato:',
	'LBL_ASSIGNED_USER_ID' => 'Tildelt til:',
	'LBL_MODIFIED_USER_ID' => 'Ændret bruger Id:',
	'LBL_CREATED_BY' => 'Oprettet af:',
	'LBL_TEAM_ID' => 'Team:',
	'LBL_NAME' => 'Navn:',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_DUE' => 'Slutdato:',
	'LBL_TIME_DUE' => 'Sluttidspunkt:',
    'LBL_RESOURCE' => 'Ressource:',
    'LBL_PREDECESSORS' => 'Foregående:',
	'LBL_DATE_START' => 'Startdato:',
    'LBL_DATE_FINISH' => 'Slutdato:',    
	'LBL_TIME_START' => 'Starttidspunkt:',
    'LBL_TIME_FINISH' => 'Sluttidspunkt:',
    'LBL_DURATION' => 'Varighed:',
    'LBL_DURATION_UNIT' => 'Varighedsenhed:',
    'LBL_ACTUAL_DURATION' => 'Faktisk varighed',
	'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'Overordnet opgave-id:',    
    'LBL_PERCENT_COMPLETE' => 'Fremdrift (%):',
	'LBL_PRIORITY' => 'Prioritet:',
	'LBL_DESCRIPTION' => 'Noter:',
	'LBL_ORDER_NUMBER' => 'Rækkefølge:',
	'LBL_TASK_NUMBER' => 'opgave nummer:',
    'LBL_TASK_ID' => 'Opgave-id:',
	'LBL_DEPENDS_ON_ID' => 'Afhængighed:',
	'LBL_MILESTONE_FLAG' => 'Milepæl:',
	'LBL_ESTIMATED_EFFORT' => 'Estimeret forbrug (timer):',
	'LBL_ACTUAL_EFFORT' => 'Faktisk forbrug (timer):',
	'LBL_UTILIZATION' => 'Udnyttelse (%):',
	'LBL_DELETED' => 'Slettet:',

	'LBL_LIST_ORDER_NUMBER' => 'Rækkefølge',
	'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_DAYS' => 'dage',
	'LBL_LIST_PARENT_NAME' => 'Projekt',
	'LBL_LIST_PERCENT_COMPLETE' => 'Fremdrift (%)',
	'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DURATION' => 'Varighed',
    'LBL_LIST_ACTUAL_DURATION' => 'Faktisk varighed',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Tildelt til',
	'LBL_LIST_DATE_DUE' => 'Slutdato',
	'LBL_LIST_DATE_START' => 'Startdato',
    'LBL_LIST_DATE_FINISH' => 'Slutdato',    
	'LBL_LIST_PRIORITY' => 'Prioritet',
	'LBL_LIST_CLOSE' => 'Luk',
	'LBL_PROJECT_NAME' => 'Projektnavn',

	'LNK_NEW_PROJECT'	=> 'Opret projekt',
	'LNK_PROJECT_LIST'	=> 'Projekt iste',
	'LNK_NEW_PROJECT_TASK'	=> 'Opret projekt opgave',
	'LNK_PROJECT_TASK_LIST'	=> 'Projekt opgaver',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Mine åbne projekt opgaver',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekt opgaver',
	'LBL_NEW_FORM_TITLE' => 'Ny projekt opgave',

	'LBL_ACTIVITIES_TITLE'=>'Aktiviteter',
	'LBL_HISTORY_TITLE'=>'Historik',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historik', 
	'DATE_JS_ERROR' => 'Indtast en dato som stemmer overens med tidspunkt',

    'LBL_ASSIGNED_USER_NAME' => 'Tildelt til',
    'LBL_PARENT_NAME' => 'Moder navn',
    'LBL_LIST_PROJECT_NAME' => 'Projekter',
	'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',
	
	'LBL_SUBTASK' => 'Sub-Task',
	'LBL_LAG' => 'Lag',
	'LBL_DAYS' => 'Dage',
	'LBL_HOURS' => 'Timer',
	'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
);

?>