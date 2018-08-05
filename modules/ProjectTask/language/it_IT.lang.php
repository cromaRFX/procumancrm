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
	'LBL_MODULE_NAME' => 'Compiti di Progetto',
	'LBL_MODULE_TITLE' => 'Compiti di Progetto: Home',
	'LBL_SEARCH_FORM_TITLE' => 'Cerca Compito di Progetto',
	'LBL_LIST_FORM_TITLE'=> 'Elenco Compiti di Progetto',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Modifica Compito in Griglia',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Id Compiti di Progetto:',
    'LBL_PROJECT_ID' => 'Id Progetto:',
	'LBL_DATE_ENTERED' => 'Data Inserimento:',
	'LBL_DATE_MODIFIED' => 'Data Modifica:',
	'LBL_ASSIGNED_USER_ID' => 'Assegnato a:',
	'LBL_MODIFIED_USER_ID' => 'ID Utente Modificato:',
	'LBL_CREATED_BY' => 'Creato Da:',
	'LBL_TEAM_ID' => 'Gruppo:',
	'LBL_NAME' => 'Nome:',
	'LBL_STATUS' => 'Stato:',
	'LBL_DATE_DUE' => 'Data Scadenza:',
	'LBL_TIME_DUE' => 'Ora Scadenza:',
    'LBL_RESOURCE' => 'Risorsa:',
    'LBL_PREDECESSORS' => 'Predecessori:',
	'LBL_DATE_START' => 'Data Inizio:',
    'LBL_DATE_FINISH' => 'Data Fine:',    
	'LBL_TIME_START' => 'Ora Inizio:',
    'LBL_TIME_FINISH' => 'Ora Fine:',
    'LBL_DURATION' => 'Durata:',
    'LBL_DURATION_UNIT' => 'Durata Unità:',
    'LBL_ACTUAL_DURATION' => 'Durata Effettiva:',
	'LBL_PARENT_ID' => 'Progetto:',
    'LBL_PARENT_TASK_ID' => 'Id Compito Padre:',    
    'LBL_PERCENT_COMPLETE' => 'Progresso (%):',
	'LBL_PRIORITY' => 'Priorità:',
	'LBL_DESCRIPTION' => 'Note:',
	'LBL_ORDER_NUMBER' => 'Ordine:',
	'LBL_TASK_NUMBER' => 'Numero Compito:',
    'LBL_TASK_ID' => 'ID Compito:',
	'LBL_DEPENDS_ON_ID' => 'Dipende Da:',
	'LBL_MILESTONE_FLAG' => 'Compito Fondamentale:',
	'LBL_ESTIMATED_EFFORT' => 'Sforzo Stimato (ore):',
	'LBL_ACTUAL_EFFORT' => 'Sforzo Effettivo (ore):',
	'LBL_UTILIZATION' => 'Utilizzo (%):',
	'LBL_DELETED' => 'Cancellato:',

	'LBL_LIST_ORDER_NUMBER' => 'Ordine',
	'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DAYS' => 'giorni',
	'LBL_LIST_PARENT_NAME' => 'Progetto',
	'LBL_LIST_PERCENT_COMPLETE' => 'Progresso (%)',
	'LBL_LIST_STATUS' => 'Stato',
    'LBL_LIST_DURATION' => 'Durata',
    'LBL_LIST_ACTUAL_DURATION' => 'Durata Effettiva',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Assegnato A:',
	'LBL_LIST_DATE_DUE' => 'Data Scadenza',
	'LBL_LIST_DATE_START' => 'Data Inizio',
    'LBL_LIST_DATE_FINISH' => 'Data Fine',    
	'LBL_LIST_PRIORITY' => 'Priorità',
	'LBL_LIST_CLOSE' => 'Chiudi',
	'LBL_PROJECT_NAME' => 'Nome Progetto',

	'LNK_NEW_PROJECT'	=> 'Nuovo Progetto',
	'LNK_PROJECT_LIST'	=> 'Visualizza Progetti',
	'LNK_NEW_PROJECT_TASK'	=> 'Nuovo Compito di Progetto',
	'LNK_PROJECT_TASK_LIST'	=> 'Compiti di Progetto',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'I miei Compiti di Progetto Aperti',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Compiti di Progetto',
	'LBL_NEW_FORM_TITLE' => 'Nuovo Compito di Progetto',

	'LBL_ACTIVITIES_TITLE'=>'Attività',
	'LBL_HISTORY_TITLE'=>'Cronologia',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Attività',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Cronologia', 
	'DATE_JS_ERROR' => 'Si prega di inserire una data corrispondente al periodo inserito',

    'LBL_ASSIGNED_USER_NAME' => 'Assegnato A',
    'LBL_PARENT_NAME' => 'Nome Progetto',
    'LBL_LIST_PROJECT_NAME' => 'Progetti',
	'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Cronologia',
	
	'LBL_SUBTASK' => 'Sotto-Compito',
	'LBL_LAG' => 'Ritardo',
	'LBL_DAYS' => 'Giorni',
	'LBL_HOURS' => 'Ore',
	'LBL_RELATIONSHIP_TYPE' => 'Tipo Relazione',
);

?>