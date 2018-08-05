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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
global $sugar_config;

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Processar Tarefas do Workflow',
    'LBL_OOTB_REPORTS' => 'Executar Tarefas Agendadas de Geração de Relatório',
    'LBL_OOTB_IE' => 'Verificar Caixa de Entrada de E-mails',
    'LBL_OOTB_BOUNCE' => 'Executar Processo Noturno de Emails de Campanha Retornados',
    'LBL_OOTB_CAMPAIGN' => 'Executar Processo Noturno de Campanhas por Email em Massa',
    'LBL_OOTB_PRUNE' => 'Suprimir Banco de Dados no dia 1º do Mês',
    'LBL_OOTB_TRACKER' => 'Remover apagados das tabelas de trackers',
    'LBL_OOTB_SUGARFEEDS' => 'Limpar Tabelas de Feed do SuiteCRM',
    'LBL_OOTB_LUCENE_INDEX' => 'Executar Indexação Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Otimizar Indexação AOD',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Atualizar tabela tracker_sessions',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar notificações de lembrete de e-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar trabalhos na fila',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Remoção de documentos do sistema de arquivos',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
    'LBL_LIST_LIST_ORDER' => 'Agendas:',
    'LBL_LIST_NAME' => 'Agendador:',
    'LBL_LIST_RANGE' => 'Intervalo:',
    'LBL_LIST_REMOVE' => 'Remover:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista de Tarefas agendadas:',
    'LBL_LIST_EXECUTE_TIME' => 'Horário de Execução:',
// human readable:
    'LBL_SUN' => 'Domingo',
    'LBL_MON' => 'Segunda',
    'LBL_TUE' => 'Terça',
    'LBL_WED' => 'Quarta',
    'LBL_THU' => 'Quinta',
    'LBL_FRI' => 'Sexta',
    'LBL_SAT' => 'Sábado',
    'LBL_ALL' => 'Todos os Dias',
    'LBL_EVERY_DAY' => 'Todos os dias',
    'LBL_AT_THE' => 'às',
    'LBL_EVERY' => 'Todo(a)',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'No(a)',
    'LBL_RANGE' => 'a',
    'LBL_AT' => 'às',
    'LBL_IN' => 'em',
    'LBL_AND' => 'e',
    'LBL_MINUTES' => 'minutos',
    'LBL_HOUR' => 'horas',
    'LBL_HOUR_SING' => 'hora',
    'LBL_MONTH' => 'mês',
    'LBL_OFTEN' => 'Tão frequente quanto possível.',
    'LBL_MIN_MARK' => 'marca de minuto',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'h',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'meses',
    'LBL_DAY_OF_WEEK' => 'dia',
    'LBL_CRONTAB_EXAMPLES' => 'A lista acima usa notações crontab padrão.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'As especificações do cron são executadas com base no fuso horário do servidor (',
    'LBL_CRONTAB_SERVER_TIME_POST' => 'Please specify the scheduler execution time accordingly.',
// Labels
    'LBL_ALWAYS' => 'Sempre',
    'LBL_CATCH_UP' => 'Executar Se Falhar',
    'LBL_CATCH_UP_WARNING' => 'Desmarque se esta Tarefa levar mais do que um momento para se executada.',
    'LBL_DATE_TIME_END' => 'Data e Hora de Fim',
    'LBL_DATE_TIME_START' => 'Data e Hora de Início',
    'LBL_INTERVAL' => 'Intervalo',
    'LBL_JOB' => 'Tarefa',
    'LBL_JOB_URL' => 'URL do trabalho',
    'LBL_LAST_RUN' => 'Última Execução com Sucesso',
    'LBL_MODULE_NAME' => 'Agendador do SuiteCRM',
    'LBL_MODULE_TITLE' => 'Agendadores',
    'LBL_NAME' => 'Nome da Tarefa',
    'LBL_NEVER' => 'Nunca',
    'LBL_NEW_FORM_TITLE' => 'Nova Tarefa agendada',
    'LBL_PERENNIAL' => 'perpétua',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Agendador',
    'LBL_SCHEDULER' => 'Agendador:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Ativo Desde',
    'LBL_TIME_TO' => 'Ativo Até',
    'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
    'LBL_WARN_CURL' => 'Aviso:',
    'LBL_WARN_NO_CURL' => 'Este sistema não possui as bibliotecas cURL habilitadas/compiladas no módulo PHP (--with-curl=/path/to/curl_library).  Por favor contate o seu administrador de sistemas para resolver esta questão.  Sem a funcionalidade cURL, o agendador não pode executar as suas tarefas.',
    'LBL_BASIC_OPTIONS' => 'Configuração Básica',
    'LBL_ADV_OPTIONS' => 'Opções Avançadas',
    'LBL_TOGGLE_ADV' => 'Opções Avançadas',
    'LBL_TOGGLE_BASIC' => 'Opções Básicas',
// Links
    'LNK_LIST_SCHEDULER' => 'agendador',
    'LNK_NEW_SCHEDULER' => 'Nova Tarefa agendada',
    'LNK_LIST_SCHEDULED' => 'Tarefas agendadas',
// Messages
    'SOCK_GREETING' => "\"\nEsta é a interface para o Serviço Agendadores do SuiteCRM. \n [ Comandos daemon disponíveis: start|restart|shutdown|status] \nTo sair, digite \"quit\".  Para desligar a serviço \"shutdown\". \n \"",
    'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para eliminar o agendamento.',
    'ERR_CRON_SYNTAX' => 'Sintaxe Cron inválida',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registro?',
    'NTC_STATUS' => 'Configure o status como Inativo para excluir este agendamento das listas de valores possíveis do agendador',
    'NTC_LIST_ORDER' => 'Configure a ordem pela qual este agendamento aparecerá nas listas de valores possíveis do campo agendador',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar o agendador do Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar o Crontab',
    'LBL_CRON_LINUX_DESC' => 'Nota: Para executar SuiteCRM agendadores, adicione a seguinte linha ao arquivo crontab: ',
    'LBL_CRON_WINDOWS_DESC' => 'Nota: Para executar os agendadores de SuiteCRM, crie um arquivo em lotes para executar usando tarefas agendadas do Windows. O arquivo de lote deve incluir os seguintes comandos: ',
    'LBL_NO_PHP_CLI' => 'Se o host não tem o binário PHP disponível, você pode usar wget ou curl para lançar seus trabalhos.<br>para wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Tarefas Ativas',
    'LBL_EXECUTE_TIME' => 'Tempo de Execução',

//jobstrings
    'LBL_REFRESHJOBS' => 'Atualizar Tarefas',
    'LBL_POLLMONITOREDINBOXES' => 'Verificar Contas de Entrada de E-mail',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistema de índice de pesquisa de texto completo',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar toda a noite campanhas de e-mail em massa',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar toda a noite o Processamento de E-mails Retornados de Campanhas',
    'LBL_PRUNEDATABASE' => 'Remover Apagados da Base de Dados no primeiro dia do Mês',
    'LBL_TRIMTRACKER' => 'Remover Apagados das Tabelas de Trackers',
    'LBL_TRIMSUGARFEEDS' => 'Limpar Tabelas de Feed do SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending.',
    'LBL_CLEANJOBQUEUE' => 'Limpar fila de trabalho',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Remoção de documentos do sistema de arquivos',

    'LBL_AODOPTIMISEINDEX' => 'Otimizar o Indice do Advanced OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Indexar documentos não indexados',
    'LBL_POLLMONITOREDINBOXESAOP' => 'Poll de Caixas de Entrada Monitoradas AOP',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Executar Relatórios Agendados',
    'LBL_PROCESSAOW_WORKFLOW' => 'Processar Workflow do AOW',
);
?>
