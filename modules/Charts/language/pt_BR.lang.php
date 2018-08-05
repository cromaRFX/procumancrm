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
    'ERR_NO_OPPS' => 'Por favor, crie algumas Oportunidades para ver os gráficos de Oportunidades.',
    'LBL_ALL_OPPORTUNITIES' => 'Valor total de todas as oportunidades é',
    'LBL_CHART_TYPE' => 'Tipo de Gráfico:',
    'LBL_CREATED_ON' => 'Última execução em ',
	'LBL_CLOSE_DATE_START' => 'Data esperada de fechamento - De:',
	'LBL_CLOSE_DATE_END'   => 'Data esperada de fechamento - a:',
    'LBL_DATE_END' => 'Data Final:',
    'LBL_DATE_RANGE_TO' => 'até',
    'LBL_DATE_RANGE' => 'O intervalo de datas é',
    'LBL_DATE_START' => 'Data Inicial:',
    'LBL_EDIT' => 'Editar',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Mostra os valores das oportunidades acumulados por fonte de lead selecionada por resultado para usuários selecionados. O resultado é baseado na fase da venda: Fechado Ganho, Fechado Perdido ou qualquer outro valor.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Todas as oportunidades por origem de lead por resultado',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Mostra os valores das oportunidades acumulados por origem de lead selecionada por usuários selecionados.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Todas as oportunidades por origem de lead',
    'LBL_LEAD_SOURCE_OTHER' => 'Outros',
    'LBL_LEAD_SOURCES' => 'Origens de Leads:',
    'LBL_MODULE_NAME' => 'Painel Gráfico',
    'LBL_MODULE_TITLE' => 'Painel Gráfico: Tela Principal',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Mostra os valores das oportunidades acumulados por mês por resultado para usuários selecionados quando a data de fechamento esperada se encontra dentro do intervalo de datas. O resultado é baseado na fase da venda: Ganhamos, Perdemos ou qualquer outro valor.',
    'LBL_NUMBER_OF_OPPS' => 'Número de Oportunidades',
    'LBL_OPP_SIZE' => 'Tamanho da Oportunidade',
    'LBL_OPP_THOUSANDS'=> 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'oportunidades onde a origem de lead é',
    'LBL_OPPS_IN_STAGE' => 'onde a fase da venda é',
    'LBL_OPPS_OUTCOME' => 'onde o resultado é',
    'LBL_OPPS_WORTH' => 'valor das Oportunidades',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Mostra o valor acumulado por fases de venda selecionadas para as suas Oportunidades quando a data de fechamento esperada se encontra dentro do intervalo de datas.',
    'LBL_CAMPAIGN_ROI_TITLE_DESC' => 'Mostra a resposta da campanha por retorno do investimento.',
    'LBL_REFRESH' => 'Atualizar',
    'LBL_ROLLOVER_DETAILS' => 'Passe com o mouse por cima da barra para obter mais detalhes.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Passe com o mouse por uma limite para obter mais detalhes.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Mostra os valores das oportunidades acumulados por fases de venda selecionadas para usuários selecionados quando a data de fechamento esperada se encontra dentro do intervalo de datas.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline por Fase da Venda',
    'LBL_SALES_STAGES' => 'Fase da Venda:',
    'LBL_TOTAL_PIPELINE' => 'Total do Pipeline é',
    'LBL_USERS' => 'Usuários:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline por mês e por Resultado',
    'LBL_YEAR' => 'Ano:',
    'LNK_NEW_ACCOUNT' => 'Nova Conta',
    'LNK_NEW_CALL' => 'Nova Chamada Telefônica',
    'LNK_NEW_CASE' => 'Nova Ocorrência',
    'LNK_NEW_CONTACT' => 'Novo Contato',
    'LNK_NEW_ISSUE' => 'Novo Bug',
    'LNK_NEW_LEAD' => 'Novo Potencial',
    'LNK_NEW_MEETING' => 'Nova Reunião',
    'LNK_NEW_NOTE' => 'Nova Anotação ou Anexo',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_NEW_QUOTE' => 'Nova Cotação',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'NTC_NO_LEGENDS' => 'Nada',
    
    'LBL_TITLE' => 'Título:',
    'LBL_MY_MODULES_USED_SIZE' => 'Contagem de Acesso',

    'LBL_CHART_ACTION' => 'Ação',
    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Ciclo por estágio de vendas',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Origem da Lead por resultado',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultados por Mês',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Ciclo por Origem da Lead',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'O Meu Pipeline por Fase de Vendas',
    'LBL_CHART_PIPELINE_BY_SALES_STAGE_FUNNEL' => 'Ciclo por estágio de vendas funnel',
    'LBL_CHART_OPPORTUNITIES_THIS_QUARTER' => 'Oportunidades neste trimestre',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Meus módulos usado (últimos 30 dias)',
    'LBL_CHART_MODULES_USED_DIRECT_REPORTS_30_DAYS' => 'Módulos usados pelos meus subordinados diretos (últimos 30 dias)',
    'LBL_CHART_DCE_ACTIONS_MONTH' => 'Ações do DCE por tipos (mês atual)',
);


?>