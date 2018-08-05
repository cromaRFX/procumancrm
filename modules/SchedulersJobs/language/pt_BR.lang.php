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
'LBL_NAME' => 'Nome do Job',
'LBL_EXECUTE_TIME'			=> 'Tempo de Execução',
'LBL_SCHEDULER_ID' 	=> 'Agendador',
'LBL_STATUS' 	=> 'Status do trabalho',
'LBL_RESOLUTION' 	=> 'Resultado',
'LBL_MESSAGE' 	=> 'Mensagens',
'LBL_DATA' 	=> 'Data do "Job "',
'LBL_REQUEUE' 	=> 'Repetir em caso de falha',
'LBL_RETRY_COUNT' 	=> 'Máximo de tentativas',
'LBL_FAIL_COUNT' 	=> 'Falhas',
'LBL_INTERVAL' 	=> 'Intervalo m;inimo entre tentativas',
'LBL_CLIENT' 	=> 'Cliente',
'LBL_PERCENT'	=> 'Por cento concluída',
// Errors
'ERR_CALL' 	=> "Impossibilitado de chamar funação %",
'ERR_CURL' => "No CURL - não podem executar tarefas de URL",
'ERR_FAILED' => "Falha inexperada, favor checar logs PHP e sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s em %s na linha %d",
'ERR_NOUSER' => "Nenhum ID de usuário especificado",
'ERR_NOSUCHUSER' => "ID de usuário não localizado",
'ERR_JOBTYPE' 	=> "Tipo de &#39;job\"desconhecido",
'ERR_TIMEOUT' => "Falha forçada Timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Falha na execução CRON do trabalho %1$s (%2$s)',
);
