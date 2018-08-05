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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Mostrar Usuários Ativos',
		  'ShowLastModifiedRecords' => 'Últimos 10 Registros Modificados',
		  'ShowTopUser' => 'Usuário Top',
		  'ShowMyModuleUsage' => 'A Minha Utilização de Módulo',
		  'ShowMyWeeklyActivities' => 'A Minha Atividade Semanal',
		  'ShowTop3ModulesUsed' => 'O Meu Top 3 de Módulos Utilizados',
		  'ShowLoggedInUserCount' => 'Contagem de Usuários Activos',
		  'ShowMyCumulativeLoggedInTime' => 'O Meu Tempo de Login Cumulativo (Esta Semana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tempo de Login Cumulativo dos Usuários (Esta Semana)',
		  
		  //Column header mapping
		  'action' => 'Ação',
		  'active_users' => 'Contagem de Usuários Ativos',
		  'date_modified' => 'Data da Última Ação',
		  'different_modules_accessed' => 'Número de Módulos Acessados',
		  'first_name' => 'Primeiro Nome',
		  'item_id' => 'ID',
		  'item_summary' => 'Nome',
		  'last_action' => 'Data/Hora da Última Ação',
		  'last_name' => 'Último Nome',
		  'module_name' => 'Nome do Módulo',
		  'records_modified' => 'Total de Registros Modificados',
		  'top_module' => 'Top de Módulos Acessados',
		  'total_count' => 'Total da Visualização de Páginas',
		  'total_login_time' => 'Tempo (hh:mm:ss) ',
		  'user_name' => 'Nome de Usuário',
		  'users' => 'Usuários',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Activo',
		  'LBL_MODULE_NAME_TITLE' => 'Rastreadores',
		  'LBL_MODULE_NAME' => 'Rastreadores',
		  'LBL_TRACKER_SETTINGS' => 'Configurações de Tracker',
		  'LBL_TRACKER_QUERIES_DESC' => 'Queries Tracker',
		  'LBL_TRACKER_QUERIES_HELP' => 'Monitorar instruções SQL quando as dump_slow_queries estiverem ativas e o tempo de execução de query é inferior ao valor slow_query_time_msec em config.php',
		  'LBL_TRACKER_PERF_DESC' => 'Desempenho do Tracker',
		  'LBL_TRACKER_PERF_HELP' => 'Monitorizar circuitos de bases de dados, arquivos acessados e utilização de memória',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sessões de Tracker',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Monitorizar Usuários ativos e informação de sessões',
		  'LBL_TRACKER_DESC' => 'Acões de Tracker',
		  'LBL_TRACKER_HELP' => 'Monitorar visualizações de páginas Usuários (módulos e Registros acedidos) e gravações de Registros',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Número de dias dos dados do Tracker para armazenar quando o agendador depurar as tabelas',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Número de dias',
);
?>