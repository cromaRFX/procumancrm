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
	'LBL_MODULE_NAME' => 'Project taken',
	'LBL_MODULE_TITLE' => 'Project taken: Start',
	'LBL_SEARCH_FORM_TITLE' => 'Project taken zoeken',
	'LBL_LIST_FORM_TITLE'=> 'Project taken lijst',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Wijzig taak in grid',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project taak ID:',
    'LBL_PROJECT_ID' => 'Project Id:',
	'LBL_DATE_ENTERED' => 'Ingevoerd:',
	'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
	'LBL_ASSIGNED_USER_ID' => 'Toegewezen aan:',
	'LBL_MODIFIED_USER_ID' => 'Gewijzigde gebruikers ID:',
	'LBL_CREATED_BY' => 'Aangemaakt door:',
	'LBL_TEAM_ID' => 'Team:',
	'LBL_NAME' => 'Naam:',
	'LBL_STATUS' => 'Status:',
	'LBL_DATE_DUE' => 'Vervaldatum:',
	'LBL_TIME_DUE' => 'Vervaltijdstip:',
    'LBL_RESOURCE' => 'Bron:',
    'LBL_PREDECESSORS' => 'Voorgangers:',
	'LBL_DATE_START' => 'Begindatum:',
    'LBL_DATE_FINISH' => 'Datum gereed:',    
	'LBL_TIME_START' => 'Aanvangstijd:',
    'LBL_TIME_FINISH' => 'Tijd gereed:',
    'LBL_DURATION' => 'Gespreksduur:',
    'LBL_DURATION_UNIT' => 'Duur eeneheid:',
    'LBL_ACTUAL_DURATION' => 'Werkelijke duur',
	'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'Ouder taak ID',    
    'LBL_PERCENT_COMPLETE' => 'Vooruitgang (%):',
	'LBL_PRIORITY' => 'Prioriteit:',
	'LBL_DESCRIPTION' => 'Notities:',
	'LBL_ORDER_NUMBER' => 'Volgorde',
	'LBL_TASK_NUMBER' => 'Taak nummer:',
    'LBL_TASK_ID' => 'Taak ID:',
	'LBL_DEPENDS_ON_ID' => 'Hangt af van:',
	'LBL_MILESTONE_FLAG' => 'Mijlpaal:',
	'LBL_ESTIMATED_EFFORT' => 'Geschatte inspanning (uren):',
	'LBL_ACTUAL_EFFORT' => 'Werkelijke inspanning (uren):',
	'LBL_UTILIZATION' => 'Gebruik (%):',
	'LBL_DELETED' => 'Verwijderd:',

	'LBL_LIST_ORDER_NUMBER' => 'Volgorde',
	'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_DAYS' => 'dagen',
	'LBL_LIST_PARENT_NAME' => 'Projecten',
	'LBL_LIST_PERCENT_COMPLETE' => 'Vooruitgang (%)',
	'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DURATION' => 'Gespreksduur',
    'LBL_LIST_ACTUAL_DURATION' => 'Werkelijke duur',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Toegewezen aan',
	'LBL_LIST_DATE_DUE' => 'Vervaldatum',
	'LBL_LIST_DATE_START' => 'Begindatum',
    'LBL_LIST_DATE_FINISH' => 'Datum gereed',    
	'LBL_LIST_PRIORITY' => 'Prioriteit',
	'LBL_LIST_CLOSE' => 'Sluiten',
	'LBL_PROJECT_NAME' => 'Project naam',

	'LNK_NEW_PROJECT'	=> 'Nieuw project',
	'LNK_PROJECT_LIST'	=> 'Projecten lijst',
	'LNK_NEW_PROJECT_TASK'	=> 'Nieuwe projecttaak',
	'LNK_PROJECT_TASK_LIST'	=> 'Project taak',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Mijn openstaande project taken',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Project taak',
	'LBL_NEW_FORM_TITLE' => 'Nieuwe projecttaak',

	'LBL_ACTIVITIES_TITLE'=>'Activiteiten',
	'LBL_HISTORY_TITLE'=>'Geschiedenis',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activiteiten',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Geschiedenis', 
	'DATE_JS_ERROR' => 'Geef een datum in die overeenkomt met de opgegeven tijd',

    'LBL_ASSIGNED_USER_NAME' => 'LBL_ASSIGNED_USER_NAME',
    'LBL_PARENT_NAME' => 'LBL_PARENT_NAME',
    'LBL_LIST_PROJECT_NAME' => 'Projecten',
	'LBL_EDITLAYOUT' => 'Wijzig lay-out' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Tijdslijn',
	
	'LBL_SUBTASK' => 'Bij-taak',
	'LBL_LAG' => 'Leggen',
	'LBL_DAYS' => 'Dagen',
	'LBL_HOURS' => 'Uren',
	'LBL_RELATIONSHIP_TYPE' => 'Relatie type',
);

?>