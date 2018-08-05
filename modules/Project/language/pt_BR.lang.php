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
    'LBL_MODULE_NAME' => 'Projeto',
    'LBL_MODULE_TITLE' => 'Projetos: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projeto',
    'LBL_LIST_FORM_TITLE' => 'Lista de Projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data de Introdução:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a:',
    'LBL_MODIFIED_USER_ID' => 'ID Modificado por:',
    'LBL_CREATED_BY' => 'Criado por:',
    'LBL_TEAM_ID' => 'Equipe:',
    'LBL_NAME' => 'Nome:',
    'LBL_PDF_PROJECT_NAME' => 'Nome do Projeto:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DELETED' => 'Excluído:',
    'LBL_DATE' => 'Data',
    'LBL_DATE_START' => 'Data de Início',
    'LBL_DATE_END' => 'Data Final',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_STATUS' => 'Status:',
    'LBL_MY_PROJECTS' => 'Os Meus Projetos',
    'LBL_MY_PROJECT_TASKS' => 'As Minhas Tarefas de Projeto',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs):',

    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DAYS' => 'dias',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído a',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs)',
    'LBL_LIST_UPCOMING_TASKS' => 'Próximas Tarefas (1 Semana)',
    'LBL_LIST_OVERDUE_TASKS' => 'Tarefas Atrasadas',
    'LBL_LIST_OPEN_CASES' => 'Casos Em Aberto',
    'LBL_LIST_END_DATE' => 'Data Final',
    'LBL_LIST_TEAM_ID' => 'Equipe',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contatos',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Contas',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotações',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo Projeto',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Tem certeza de que pretende eliminar este contato do Projeto?',

    'LNK_NEW_PROJECT' => 'Novo Projeto',
    'LNK_PROJECT_LIST' => 'Lista de Projetos',
    'LNK_NEW_PROJECT_TASK' => 'Nova Tarefa de Projeto',
    'LNK_PROJECT_TASK_LIST' => 'Tarefas de Projeto',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ACTIVITIES_TITLE' => 'Atividades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_QUICK_NEW_PROJECT' => 'Novo Projeto',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug Tracker',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_START' => 'Iniciar',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Antecessor',
    'LBL_PERCENT_COMPLETE' => '% Completa',
    'LBL_MORE' => 'Mais...',

    'LBL_PERCENT_BUSY' => '% Ocupado',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'descrição',
    'LBL_DURATION_WIDGET' => 'duração',
    'LBL_START_WIDGET' => 'data de início',
    'LBL_FINISH_WIDGET' => 'data final',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'porcentagem',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Editar Tarefas de Projeto',

    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_LAST_WEEK' => 'Anterior',
    'LBL_NEXT_WEEK' => 'Próximo',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos do Projeto',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tarefa de Projeto',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Férias',
    'LBL_PROJECT_INFORMATION' => 'Informação do Projeto',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Inserir linhas' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Exibir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração:',
    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_TASK_TITLE' => 'Editar Tarefa',
    'LBL_PREDECESSOR_TITLE' => 'Editar Predecessor',
    'LBL_START_DATE_TITLE' => 'Selecione Data Inicial',
    'LBL_END_DATE_TITLE' => 'Selecione Data Final',
    'LBL_DURATION_TITLE' => 'Editar Duração',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edição %Completa',
    'LBL_ACTUAL_DURATION_TITLE' => 'Editar Duração Atual',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_LAG' => 'Atraso',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_MONTHS' => 'Meses',
    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_ADD_NEW_TASK' => 'Adicionar Nova Tarefa',
    'LBL_DELETE_TASK' => 'Excluir Tarefa',
    'LBL_EDIT_TASK_PROPERTIES' => 'Editar Propriedades da Tarefa',
    'LBL_PARENT_TASK_ID' => 'Id da tarefa pai',
    'LBL_PERCENT_COMPLETE' => '% Completa',
    'LBL_RESOURCE_CHART' => 'Gráfico do Recurso',
    'LBL_RESOURCE_CHART_START' => 'Data de Inicio:',
    'LBL_RESOURCE_CHART_END' => 'Data Final:',
    'LBL_RESOURCES' => 'Selecionar Recurso:',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de Relação',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_PREDECESSORS' => 'Antecessor',
    'LBL_ASSIGNED_TO' => 'Gerente de Projeto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modelo de Projeto',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído a',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Folga de Projetos',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projeto',
    'LBL_TOOLTIP_TASK_NAME' => 'Nome da Tarefa',
    'LBL_TOOLTIP_TITLE' => 'Tarefas de Hoje',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duração:',
    'LBL_PROJECT_TITLE_HOVER' => 'Detalhe do Projeto',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Recurso é um Usuário ',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Recurso é um Contato',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mês Anterior',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Próximo Mês',
    'LBL_RESOURCE_CHART_WEEK' => 'Semana',
    'LBL_RESOURCE_CHART_DAY' => 'Dia',
    'LBL_RESOURCE_CHART_WARNING' => 'Não há recursos associados ao projeto.',
    'LBL_PROJECT_DELETE_MSG' => 'Você tem certeza que deseja deletar este projeto e suas tarefas associadas?',
    'LBL_LIST_MY_PROJECT' => 'Os Meus Projetos',
    'LBL_LIST_ASSIGNED_USER' => 'Gerente de Projeto',
    'LBL_UNASSIGNED' => 'Não Associado',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Recurso',
);
?>
