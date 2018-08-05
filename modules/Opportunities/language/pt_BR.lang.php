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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_TITLE' => 'Oportunidades: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Oportunidade',
    'LBL_VIEW_FORM_TITLE' => 'Visualizar Oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_OPPORTUNITY' => 'Oportunidade:',
    'LBL_NAME' => 'Nome da Oportunidade',
    'LBL_INVITEE' => 'Contatos',
    'LBL_CURRENCIES' => 'Moedas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Oportunidade',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_AMOUNT' => 'Valor da Oportunidade',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor',
    'LBL_LIST_DATE_CLOSED' => 'Data Prevista',
    'LBL_LIST_SALES_STAGE' => 'Fase da Venda',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_CURRENCY_ID' => 'ID da Moeda',
    'LBL_CURRENCY_NAME' => 'Nome da Moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo da Moeda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Oportunidade - Atualizar Moeda',
    'UPDATE_DOLLARAMOUNTS' => 'Atualizar Valores em U.S. Dollar',
    'UPDATE_VERIFY' => 'Verificar Valores',
    'UPDATE_VERIFY_TXT' => 'Verifica se os valores nas oportunidades são válidos com apenas dados numéricos (0-9) e ponto decimal (.)',
    'UPDATE_FIX' => 'Corrigir Valores',
    'UPDATE_FIX_TXT' => 'Tenta corrigir qualquer valor inválido criando um valor com casas decimais a partir do valor atual. Será feito o backup de qualquer valor alterado na base de dados. Caso execute este procedimento e receba uma mensagem de problemas, não execute novamente antes de restaurar o backup, pois de outra forma o backup pode ser sobrescrito com dados inválidos.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'atualiza os valores em U.S. Dollar nas oportunidades baseado na taxa de cotação atual. Este valor será utilizado para calcular os Gráficos e Listas com Valores de Cotações.',
    'UPDATE_CREATE_CURRENCY' => 'A criar Nova Moeda',
    'UPDATE_VERIFY_FAIL' => 'Verificação de Registros Falhou',
    'UPDATE_VERIFY_CURAMOUNT' => 'Valor atual',
    'UPDATE_VERIFY_FIX' => 'Executar Correções pode trazer',
    'UPDATE_INCLUDE_CLOSE' => 'Incluir Registros Fechados',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Novo Valor',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda',
    'UPDATE_DONE' => 'Completo',
    'UPDATE_BUG_COUNT' => 'Encontrados Bugs e Tentativas de Resolver',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados',
    'UPDATE_COUNT' => 'Registros atualizados',
    'UPDATE_RESTORE_COUNT' => 'Valores de Registros Restaurados',
    'UPDATE_RESTORE' => 'Restaurar Valores',
    'UPDATE_RESTORE_TXT' => 'Restaurar valores a partir do backup criado durante a Resolução.',
    'UPDATE_FAIL' => 'Impossível Atualizar -',
    'UPDATE_NULL_VALUE' => 'Valor é NULO definindo como 0 -',
    'UPDATE_MERGE' => 'Fundir Moedas',
    'UPDATE_MERGE_TXT' => 'Fundir múltiplas moedas numa moeda única. Caso seja informado de que existem múltiplos Registros de moedas para a mesma moeda, você pode optar por fundi-los. Isto também ira fundir moedas para todos os outros módulos.',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AMOUNT' => 'Valor da Oportunidade',
    'LBL_AMOUNT_USDOLLAR' => 'Valor USD',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_DATE_CLOSED' => 'Data Prevista',
    'LBL_TYPE' => 'Tipo',
    'LBL_CAMPAIGN' => 'Campanha',
    'LBL_NEXT_STEP' => 'Próximo Passo',
    'LBL_LEAD_SOURCE' => 'Origem do Potencial',
    'LBL_SALES_STAGE' => 'Fase da Venda',
    'LBL_PROBABILITY' => 'Probabilidade (%)',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DUPLICATE' => 'Possível Oportunidade Duplicada',
    'MSG_DUPLICATE' => 'Ao criar esta oportunidade pode duplicar uma oportunidade. Você pode selecionar uma oportunidade da lista abaixo ou clicar em Nova Oportunidade para continuar a criar com os dados entrados previamente.',
    'LBL_NEW_FORM_TITLE' => 'Nova Oportunidade',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'Um número de Registro deve ser especificado para eliminar a oportunidade.',
    'LBL_TOP_OPPORTUNITIES' => 'As Minhas Melhores Oportunidades',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Tem certeza de que pretende eliminar este contato desta oportunidade?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que deseja remover essa oportunidade deste projeto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_RAW_AMOUNT' => 'Valor Bruto',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'As Minhas Oportunidades Fechadas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Fechadas Ganhas',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_CREATED_ID' => 'ID Criado Por',
    'LBL_MODIFIED_ID' => 'Modificado por ID',
    'LBL_MODIFIED_NAME' => 'Modificado por Nome do Usuário',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanha',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectos',
    'LABEL_PANEL_ASSIGNMENT' => 'Atribuição',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo de oportunidade',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Usuário Atribuído',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
    'LBL_EXPORT_NAME' => 'Nome',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails relacionados',
    'TWITTER_USER_C' => 'Usuário do Twitter',
);

?>
