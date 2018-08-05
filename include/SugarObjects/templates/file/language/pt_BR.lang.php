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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Documentos',
	'LBL_MODULE_TITLE' => 'Documentos: Início',
	'LNK_NEW_DOCUMENT' => 'Criar Documento',
	'LNK_DOCUMENT_LIST'=> 'Lista de Documentos',
	'LBL_SEARCH_FORM_TITLE'=> 'Pesquisa de Documentos',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID do Documento',
	'LBL_NAME' => 'Nome do Documento',
	'LBL_DESCRIPTION' => 'Descrição',
	'LBL_ASSIGNED_TO' => 'Atribuído a:',
	'LBL_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY' => 'Subcategoria',
	'LBL_STATUS' => 'Status',
	'LBL_IS_TEMPLATE'=>'É um Modelo',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_REVISION_NAME' => 'Número da Revisão',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Revisão',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => 'Última Revisão',
	'LBL_CHANGE_LOG'=> 'Modificar Registo',
	'LBL_ACTIVE_DATE'=> 'Data de Publicação',
	'LBL_EXPIRATION_DATE' => 'Data de Expiração',
	'LBL_FILE_EXTENSION'  => 'Extensão do Arquivo',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Não Especificado',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Novo Documento',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nome do Documento:',
	'LBL_FILENAME' => 'Nome do Arquivo:',
	'LBL_FILE_UPLOAD' => 'Arquivo',
	'LBL_DOC_VERSION' => 'Revisão:',
	'LBL_CATEGORY_VALUE' => 'Categoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_DOC_DESCRIPTION'=>'Descrição:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicação:',
	'LBL_DOC_EXP_DATE'=> 'Data de Expiração:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documento',
	'LBL_LIST_CATEGORY' => 'Categoria',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
	'LBL_LIST_REVISION' => 'Revisão',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado Por',
	'LBL_LIST_LAST_REV_DATE' => 'Data de Revisão',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ver',
    'LBL_LIST_DOWNLOAD'=> 'Baixar',
	'LBL_LIST_ACTIVE_DATE' => 'Data de Publicação',
	'LBL_LIST_EXP_DATE' => 'Data de Expiração',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nome do Documento:',
	'LBL_SF_CATEGORY' => 'Categoria',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
	'LBL_SF_EXP_DATE'=> 'Data de Expiração:',

	'DEF_CREATE_LOG' => 'Documento Criado',

	//error messages
	'ERR_DOC_NAME'=>'Nome do Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Data de Publicação',
	'ERR_DOC_EXP_DATE'=> 'Data de Expiração',
	'ERR_FILENAME'=> 'Nome do Arquivo',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nome do Documento',

    'LBL_EDIT_BUTTON' => 'Editar ',
    'LBL_REMOVE' => 'Remover',

);


?>