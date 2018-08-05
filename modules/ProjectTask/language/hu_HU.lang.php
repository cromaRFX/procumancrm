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
	'LBL_MODULE_NAME' => 'Projektfeladatok',
	'LBL_MODULE_TITLE' => 'Projektfeladatok: Home',
	'LBL_SEARCH_FORM_TITLE' => 'Projektfeladat keresés',
	'LBL_LIST_FORM_TITLE'=> 'Projektfeladat lista',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Kereten belüli feladat módosítás',    
	
	'LBL_ID' => 'Azonosító:',
    'LBL_PROJECT_TASK_ID' => 'Projektfeladat azonosító:',
    'LBL_PROJECT_ID' => 'Projekt azonosító:',
	'LBL_DATE_ENTERED' => 'Létrehozva:',
	'LBL_DATE_MODIFIED' => 'Módosítva:',
	'LBL_ASSIGNED_USER_ID' => 'Hozzárendelve:',
	'LBL_MODIFIED_USER_ID' => 'Módosító felhasználó ID:',
	'LBL_CREATED_BY' => 'Létrehozó:',
	'LBL_TEAM_ID' => 'Csapat:',
	'LBL_NAME' => 'Név:',
	'LBL_STATUS' => 'Állapot:',
	'LBL_DATE_DUE' => 'Határidő dátum:',
	'LBL_TIME_DUE' => 'Határidő időpont:',
    'LBL_RESOURCE' => 'Forrás:',
    'LBL_PREDECESSORS' => 'Elődei:',
	'LBL_DATE_START' => 'Kezdés dátuma:',
    'LBL_DATE_FINISH' => 'Befejezés dátuma:',    
	'LBL_TIME_START' => 'Kezdés ideje:',
    'LBL_TIME_FINISH' => 'Befejezés ideje:',
    'LBL_DURATION' => 'Időtartam:',
    'LBL_DURATION_UNIT' => 'Időtartam egység:',
    'LBL_ACTUAL_DURATION' => 'Aktuális időtartam:',
	'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'SzülőTask Id:',    
    'LBL_PERCENT_COMPLETE' => 'Készültség (%):',
	'LBL_PRIORITY' => 'Prioritás:',
	'LBL_DESCRIPTION' => 'Feljegyzések:',
	'LBL_ORDER_NUMBER' => 'Sorrend:',
	'LBL_TASK_NUMBER' => 'Feladatszám:',
    'LBL_TASK_ID' => 'Task ID:',
	'LBL_DEPENDS_ON_ID' => 'Függ ettől:',
	'LBL_MILESTONE_FLAG' => 'Mérföldkő:',
	'LBL_ESTIMATED_EFFORT' => 'Becsült Ráfordítás (órák):',
	'LBL_ACTUAL_EFFORT' => 'Aktuális ráfordítás (órák):',
	'LBL_UTILIZATION' => 'Hasznosítás (%):',
	'LBL_DELETED' => 'Törölve:',

	'LBL_LIST_ORDER_NUMBER' => 'Sorrend',
	'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_DAYS' => 'Napok:',
	'LBL_LIST_PARENT_NAME' => 'Projekt',
	'LBL_LIST_PERCENT_COMPLETE' => 'Készültség (%)',
	'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_DURATION' => 'Időtartam',
    'LBL_LIST_ACTUAL_DURATION' => 'Aktuális időtartam',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Hozzárendelve',
	'LBL_LIST_DATE_DUE' => 'Határidő',
	'LBL_LIST_DATE_START' => 'Kezdés dátuma',
    'LBL_LIST_DATE_FINISH' => 'Befejezés dátuma',    
	'LBL_LIST_PRIORITY' => 'Prioritás',
	'LBL_LIST_CLOSE' => 'Bezár',
	'LBL_PROJECT_NAME' => 'Projekt név',

	'LNK_NEW_PROJECT'	=> 'Projekt létrehozása',
	'LNK_PROJECT_LIST'	=> 'Projektlista',
	'LNK_NEW_PROJECT_TASK'	=> 'Projektfeladat létrehozása',
	'LNK_PROJECT_TASK_LIST'	=> 'Projektfeladatok',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Saját nyitott projekt-feladataim',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektfeladatok',
	'LBL_NEW_FORM_TITLE' => 'Új projektfeladat',

	'LBL_ACTIVITIES_TITLE'=>'Tevékenységek',
	'LBL_HISTORY_TITLE'=>'Előzmények',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tevékenységek',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Előzmények', 
	'DATE_JS_ERROR' => 'Kérem adjon meg egy dátumot ami a beírt időhöz tartozik',

    'LBL_ASSIGNED_USER_NAME' => 'Felelős:',
    'LBL_PARENT_NAME' => 'Project név:',
    'LBL_LIST_PROJECT_NAME' => 'Projektek',
	'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Idővonal',
	
	'LBL_SUBTASK' => 'Alfeladat',
	'LBL_LAG' => 'Késés',
	'LBL_DAYS' => 'Nap',
	'LBL_HOURS' => 'Óra',
	'LBL_RELATIONSHIP_TYPE' => 'Összefüggés típusa',
);

?>