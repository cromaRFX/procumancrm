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
	//module
	'LBL_MODULE_NAME' => 'Documentos',
	'LBL_MODULE_TITLE' => 'Documentos: Início',
	'LNK_NEW_DOCUMENT' => 'Novo Documento',
	'LNK_DOCUMENT_LIST'=> 'Lista de Documentos',
	'LBL_DOC_REV_HEADER' => 'Revisões do Documento',
	'LBL_SEARCH_FORM_TITLE'=> 'Pesquisar Documentos',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Documento',
	'LBL_NAME' => 'Nome do Documento',
	'LBL_DESCRIPTION' => 'Descrição',
	'LBL_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY' => 'Subcategoria',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Criado por',
	'LBL_DATE_ENTERED'=> 'Data de Registro',
	'LBL_DATE_MODIFIED'=> 'Data de Modificação',
	'LBL_DELETED' => 'Excluido',
	'LBL_MODIFIED'=> 'Modificado por ID',
	'LBL_MODIFIED_USER' => 'Modificado por',
	'LBL_CREATED'=> 'Criado por',
	'LBL_REVISIONS'=>'Revisões',
	'LBL_RELATED_DOCUMENT_ID'=>'ID do Documento Relacionado',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID da Revisão do Documento Relacionado',
	'LBL_IS_TEMPLATE'=>'É um Modelo',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_ASSIGNED_TO_NAME'=>'Atribuído a:',
	'LBL_REVISION_NAME' => 'Número de Revisão',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Revisão',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => 'Última Revisão',
	'LBL_CHANGE_LOG'=> 'Registro de Alterações:',
	'LBL_ACTIVE_DATE'=> 'Data de Publicação',
	'LBL_EXPIRATION_DATE' => 'Data de Expiração',
	'LBL_FILE_EXTENSION'  => 'Extensão do Arquivo',
	'LBL_LAST_REV_MIME_TYPE' => 'MIME type da última revisão',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Não Especificado',
    'LBL_HOMEPAGE_TITLE' => 'Meus Documentos',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Novo Documento',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nome Documento:',
	'LBL_FILENAME' => 'Nome Arquivo:',
	'LBL_LIST_FILENAME' => 'Nome do Arquivo',
	'LBL_DOC_VERSION' => 'Revisão:',
	'LBL_FILE_UPLOAD' => 'Arquivo',

	'LBL_CATEGORY_VALUE' => 'Categoria:',
	'LBL_LIST_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revisão Criada por:',
	'LBL_LASTEST_REVISION_NAME' => 'Nome da última revisão',
	'LBL_SELECTED_REVISION_NAME' => 'Nome da Revisão Seleccionada',
	'LBL_CONTRACT_STATUS' => 'Status do Contrato:',
	'LBL_CONTRACT_NAME' => 'Nome do Contato',
	'LBL_LAST_REV_DATE' => 'Data da Revisão:',
	'LBL_DOWNNLOAD_FILE'=> 'Transferir Arquivo:',
	'LBL_DET_RELATED_DOCUMENT'=>'Documento Relacionado:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisão do Documento Relacionado:",
	'LBL_DET_IS_TEMPLATE'=>'Modelo? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_DOC_DESCRIPTION'=>'Descrição:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicação:',
	'LBL_DOC_EXP_DATE'=> 'Data de Expiração:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documento',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
	'LBL_LIST_REVISION' => 'Revisão',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
	'LBL_LIST_LAST_REV_DATE' => 'Data da Revisão',
	'LBL_LIST_VIEW_DOCUMENT'=>'Exibir',
    'LBL_LIST_DOWNLOAD'=> 'Baixar',
	'LBL_LIST_ACTIVE_DATE' => 'Data de Publicação',
	'LBL_LIST_EXP_DATE' => 'Data de Expiração',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Id ligado',
	'LBL_SELECTED_REVISION_ID' => 'Id da revisão selecionada',
	'LBL_LATEST_REVISION_ID' => 'Id da última revisão',
	'LBL_SELECTED_REVISION_FILENAME' => 'Nome da revisão selecionada',
	'LBL_FILE_URL' => 'URL do Arquivo',
    'LBL_REVISIONS_PANEL' => 'Detalhes da Revisão',
    'LBL_REVISIONS_SUBPANEL' => 'Revisões',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Documento:',
	'LBL_SF_CATEGORY' => 'Categoria:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
	'LBL_SF_EXP_DATE'=> 'Data de Expiração:',

	'DEF_CREATE_LOG' => 'Documento Criado',

	//error messages
	'ERR_DOC_NAME'=>'Nome do Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Data de Publicação',
	'ERR_DOC_EXP_DATE'=> 'Data de Expiração',
	'ERR_FILENAME'=> 'Nome do Arquivo',
	'ERR_DOC_VERSION'=> 'Versão do Documento',
	'ERR_DELETE_CONFIRM'=> 'Tem a certeza que deseja eliminar esta revisão do documento?',
	'ERR_DELETE_LATEST_VERSION'=> 'Não tem permissão para eliminar a última revisão do documento.',
	'LNK_NEW_MAIL_MERGE' => 'Mesclar e-mail',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Modelo de Mail Merge:',
	'ERR_MISSING_FILE' => 'Este documento está faltando um arquivo, provavelmente devido a um erro durante o upload. Por favor, tente novamente fazer o upload do arquivo ou contate o administrador.',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nome do Documento',
	'LBL_LIST_IS_TEMPLATE'=>'Modelo?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_LIST_SELECTED_REVISION'=>'Revisão Selecionada',
	'LBL_LIST_LATEST_REVISION'=>'Última Revisão',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
	'LBL_LAST_REV_CREATE_DATE'=>'Data da Criação da Última Revisão',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversões',
    'LBL_DOCUMENT_INFORMATION' => 'Informação do documento',
	'LBL_DOC_ID' => 'ID do Documento Fonte',
	'LBL_DOC_TYPE' => 'Origem',
	'LBL_LIST_DOC_TYPE' => 'Origem',
    'LBL_DOC_TYPE_POPUP' => 'Selecionar uma fonte para o qual este documento irá ser carregado e de onde estará disponível.',
	'LBL_DOC_URL' => 'URL do Documento Fonte',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome do Documento',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Os 20 ultimos arquivos modificados serão mostrados na ordem decrescente da lista abaixo. Utilize a busca para achar outros arquivos.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome Arquivo:',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'O usuário tentou acesso a um inválido API externo ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'O Login marcou falha para API externo ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
);


?>
