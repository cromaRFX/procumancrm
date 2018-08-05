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

    'LBL_MODULE_NAME' => 'Calendário',
    'LBL_MODULE_TITLE' => 'Calendário',
    'LNK_NEW_CALL' => 'Agendar Ligação',
    'LNK_NEW_MEETING' => 'Criar Nova Reunião',
    'LNK_NEW_APPOINTMENT' => 'Criar Novo Compromisso',
    'LNK_NEW_TASK' => 'Criar Nova Tarefa',
    'LNK_CALL_LIST' => 'Ligações',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_VIEW_CALENDAR' => 'Hoje',
    'LNK_IMPORT_CALLS' => 'Importar Ligações',
    'LNK_IMPORT_MEETINGS' => 'Importar Reuniões',
    'LNK_IMPORT_TASKS' => 'Importar Tarefas',
    'LBL_MONTH' => 'Mês',
    'LBL_DAY' => 'Dia',
    'LBL_YEAR' => 'Ano',
    'LBL_WEEK' => 'Semana',
    'LBL_PREVIOUS_MONTH' => 'Mês Anterior',
    'LBL_PREVIOUS_DAY' => 'Dia Anterior',
    'LBL_PREVIOUS_YEAR' => 'Ano Anterior',
    'LBL_PREVIOUS_WEEK' => 'Semana Anterior',
    'LBL_NEXT_MONTH' => 'Próximo Mês',
    'LBL_NEXT_DAY' => 'Próximo Dia',
    'LBL_NEXT_YEAR' => 'Próximo Ano',
    'LBL_NEXT_WEEK' => 'Próxima Semana',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Criado',
    'LBL_BUSY' => 'Ocupado',
    'LBL_CONFLICT' => 'Conflito',
    'LBL_USER_CALENDARS' => 'Calendários do Usuário',
    'LBL_SHARED' => 'Partilhado',
    'LBL_PREVIOUS_SHARED' => 'Anterior',
    'LBL_NEXT_SHARED' => 'Próximo',
    'LBL_SHARED_CAL_TITLE' => 'Calendário Partilhado',
    'LBL_USERS' => 'Usuário',
    'LBL_REFRESH' => 'Atualizar',
    'LBL_EDIT_USERLIST' => 'Lista de Usuários',
    'LBL_SELECT_USERS' => 'Selecione Usuários para exibir o calendário',
    'LBL_FILTER_BY_TEAM' => 'Filtrar lista de Usuários por equipe:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_DATE' => 'Data e Hora de Início',
    'LBL_CREATE_MEETING' => 'Criar Nova Reunião',
    'LBL_CREATE_CALL' => 'Nova ligação',
    'LBL_HOURS_ABBREV' => 'Hrs',
    'LBL_MINS_ABBREV' => 'Mnts',


    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_SETTINGS' => 'Configurações',
    'LBL_CREATE_NEW_RECORD' => 'Criar Atividade',
    'LBL_LOADING' => 'Carregando ...',
    'LBL_SAVING' => 'Salvando...',
    'LBL_SENDING_INVITES' => 'Enviando Convites',
    'LBL_CONFIRM_REMOVE' => 'Tem certeza que deseja remover este registro?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ten certeza que deseja remover todos os registros recorrentes?',
    'LBL_EDIT_RECORD' => 'Editar Atividade',
    'LBL_ERROR_SAVING' => 'Erro ao Salvar',
    'LBL_ERROR_LOADING' => 'Erro ao Carregar',
    'LBL_GOTO_DATE' => 'Vá para Data',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_STYLE_BASIC' => 'Básica',
    'LBL_STYLE_ADVANCED' => 'Avançada',

    'LBL_INFO_TITLE' => 'Detalhes Adicionais',
    'LBL_INFO_DESC' => 'Descrição',
    'LBL_INFO_START_DT' => 'Data de Início',
    'LBL_INFO_DUE_DT' => 'Data de término',
    'LBL_INFO_DURATION' => 'Duração:',
    'LBL_INFO_NAME' => 'Assunto',
    'LBL_INFO_RELATED_TO' => 'Referente a',

    'LBL_NO_USER' => 'Usuário não encontrado',
    'LBL_SUBJECT' => 'Assunto',
    'LBL_DURATION' => 'Duração:',
    'LBL_STATUS' => 'Status',
    'LBL_DATE_TIME' => 'Data e Hora de Início:',


    'LBL_SETTINGS_TITLE' => 'Configurações',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar horários nas visualizações de Dia e Semana',
    'LBL_SETTINGS_TIME_STARTS' => 'Data de Início',
    'LBL_SETTINGS_TIME_ENDS' => 'Data de término',
    'LBL_SETTINGS_CALLS_SHOW' => 'Mostrar Ligações',
    'LBL_SETTINGS_TASKS_SHOW' => 'Mostrar Tarefas',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostrar as reuniões, chamadas e tarefas concluídas:',

    'LBL_SAVE_BUTTON' => 'Salvar',
    'LBL_DELETE_BUTTON' => 'Deletar',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Enviar convites',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fechar',

    'LBL_GENERAL_TAB' => 'Detalhes',
    'LBL_PARTICIPANTS_TAB' => 'Convidados',
    'LBL_REPEAT_TAB' => 'Ocorrência',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Intervalo',
    'LBL_REPEAT_END' => 'Fim',
    'LBL_REPEAT_END_AFTER' => 'Depois',
    'LBL_REPEAT_OCCURRENCES' => 'Ocorrências',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'Em',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Número de Ocorrências',
    'LBL_REPEAT_LIMIT_ERROR' => 'Sua requisição irá gerar mais que o Limite de reuniões',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas as Ocorrências',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Remover todas Ocorrências',

    'LBL_DATE_END_ERROR' => 'Data final está antes de data incial',
    'ERR_YEAR_BETWEEN' => 'Desculpe, calendário não consegue lidar com o ano que você solicitou <brasil>O ano deve estar entre 1970 e 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: não definida para esta visualização',
    'LBL_NO_ITEMS_MOBILE' => 'Seu calendário está limpo para a semana.',
    'LBL_SECURITYGROUPS' => 'Filtrar a lista de usuários pelo Grupo de Segurança',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Dom",
            "Seg",
            "Ter",
            "Qua",
            "Qui",
            "Sex",
            "Sáb",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Domingo",
            "Segunda",
            "Terça",
            "Quarta",
            "Quinta",
            "Sexta",
            "Sábado",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Jan",
            "Fev",
            "Mar",
            "Abr",
            "Maio",
            "Jun",
            "Jul",
            "Ago",
            "Set",
            "Out",
            "Nov",
            "Dez",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro",
        ),
);
?>
