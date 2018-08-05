<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Gerente do Contrato',
    'LBL_CONTRACT_ACCOUNT' => 'Conta',
    'LBL_OPPORTUNITY' => 'Oportunidade',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_ID' => 'Modificado Por Id',
    'LBL_MODIFIED_NAME' => 'Modificado Por Nome',
    'LBL_CREATED' => 'Criado Por',
    'LBL_CREATED_ID' => 'Criado Por Id',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Título do Contrato',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contratos',
    'LBL_MODULE_NAME' => 'Contratos',
    'LBL_MODULE_TITLE' => 'Contratos: Início',
    'LBL_HOMEPAGE_TITLE' => 'Meus Contratos',
    'LNK_NEW_RECORD' => 'Criar Contrato',
    'LNK_LIST' => 'Exibir Contratos',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Importar Contratos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Contratos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Exibir Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
    'LBL_NEW_FORM_TITLE' => 'Novo Contrato',
    'LBL_CONTRACT_NAME' => 'Nome do Contrato',
    'LBL_REFERENCE_CODE ' => 'Código de Referência',
    'LBL_START_DATE' => 'Data de Início',
    'LBL_END_DATE' => 'Data de Término',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valor do Contrato',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data de Assinatura do Cliente',
    'LBL_COMPANY_SIGNED_DATE' => 'Data de Assinatura da Empresa',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data do Lembrete de Renovação',
    'LBL_CONTRACT_TYPE' => 'Tipo de Contrato',
    'LBL_CONTACT' => 'Contato',
    'LBL_ADD_GROUP' => 'Adicionar Grupo',
    'LBL_DELETE_GROUP' => 'Excluir Grupo',
    'LBL_GROUP_NAME' => 'Nome do Grupo',
    'LBL_GROUP_TOTAL' => 'Total do Grupo',
    'LBL_PRODUCT_QUANITY' => 'Quantidade',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Número da Peça',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrição',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_TYPE' => 'Tipo',
    'LBL_DISCOUNT_AMT' => 'Desconto',
    'LBL_UNIT_PRICE' => 'Preço de Venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Imposto',
    'LBL_VAT_AMT' => 'Valor do Imposto',
    'LBL_SERVICE_NAME' => 'Serviço',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Preço de Venda',
    'LBL_SERVICE_DISCOUNT' => 'Desconto',
    'LBL_LINE_ITEMS' => 'Linhas de Itens',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Desconto',
    'LBL_TAX_AMOUNT' => 'Imposto',
    'LBL_SHIPPING_AMOUNT' => 'Frete',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total Geral',
    'LBL_SHIPPING_TAX' => 'Imposto sobre Frete',
    'LBL_SHIPPING_TAX_AMT' => 'Imposto sobre Frete',
    'LBL_ADD_PRODUCT_LINE' => 'Adicionar Linha de Produto',
    'LBL_ADD_SERVICE_LINE' => 'Adicionar Linha de Serviço',
    'LBL_PRINT_AS_PDF' => 'Imprimir PDF',
    'LBL_EMAIL_PDF' => 'PDF por Email',
    'LBL_PDF_NAME' => 'Contrato',
    'LBL_EMAIL_NAME' => 'Contrato para',
    'LBL_NO_TEMPLATE' => 'ERROR\nNenhum modelo encontrado. Por favor, crie um modelo de Contrato no módulo de Modelos PDF',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Moeda Padrão)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Desconto (Moeda Padrão)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Imposto (Moeda Padrão)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frete (Moeda Padrão)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Moeda Padrão)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Imposto sobre Frete (Moeda Padrão)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Imposto sobre Frete (Moeda Padrão)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total Geral (Moeda Padrão)',
);
?>
