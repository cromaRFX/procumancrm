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
	'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registo deve ser informado.',
	'LBL_ACCOUNT_ID' => 'ID da Conta:',
	'LBL_CASE_ID' => 'ID da Ocorrência:',
	'LBL_CLOSE' => 'Fechar',
	'LBL_COLON' => ':',
	'LBL_CONTACT_ID' => 'ID do Contato',
	'LBL_CONTACT_NAME' => 'Contato',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notas ou Anexos',
	'LBL_DESCRIPTION' => 'Descrição',
	'LBL_EMAIL_ADDRESS' => 'E-mail',
    'LBL_EMAIL_ATTACHMENT' => 'Anexo do E-mail',
	'LBL_FILE_MIME_TYPE' => 'Mime Type',
	'LBL_FILE_URL' => 'URL do Arquivo',
	'LBL_FILENAME' => 'Anexo',
	'LBL_LEAD_ID' => 'ID do Potencial',
	'LBL_LIST_CONTACT_NAME' => 'Contato',
	'LBL_LIST_DATE_MODIFIED' => 'Última Modificação',
	'LBL_LIST_FILENAME' => 'Anexo',
	'LBL_LIST_FORM_TITLE' => 'Lista de Notas ou Anexos',
	'LBL_LIST_RELATED_TO' => 'Referente a',
	'LBL_LIST_SUBJECT' => 'Assunto',
	'LBL_LIST_STATUS' => 'Status',
	'LBL_LIST_CONTACT' => 'Contato',
	'LBL_MODULE_NAME' => 'Notas ou Anexos',
	'LBL_MODULE_TITLE' => 'Notas: Tela Principal',
	'LBL_NEW_FORM_TITLE' => 'Nova Nota ou Anexo',
	'LBL_NOTE_STATUS' => 'Nota ou Anexos',
	'LBL_NOTE_SUBJECT' => 'Assunto',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Anexos',
	'LBL_NOTE' => 'Notas',
	'LBL_OPPORTUNITY_ID' => 'ID da Oportunidade',
	'LBL_PARENT_ID' => 'ID de Referência',
	'LBL_PARENT_TYPE' => 'Tipo de Referência',
	'LBL_PHONE' => 'Telefone',
	'LBL_PORTAL_FLAG' => 'Exibir no Portal?',
	'LBL_EMBED_FLAG' => 'Embutido no E-mail?',
	'LBL_PRODUCT_ID' => 'ID do Produto',
	'LBL_QUOTE_ID' => 'ID da Cotação',
	'LBL_RELATED_TO' => 'Referente a',
	'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Notas ou Anexos',
	'LBL_STATUS' => 'Estado',
	'LBL_SUBJECT' => 'Assunto',
	'LNK_IMPORT_NOTES' => 'Importar Notas ou Anexos',
	'LNK_NEW_NOTE' => 'Nova Nota ou Anexo',
	'LNK_NOTE_LIST' => 'Notas ou Anexos',
	'LBL_MEMBER_OF' => 'Membro de',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
    'LBL_REMOVING_ATTACHMENT'=>'Removendo anexo...',
    'ERR_REMOVING_ATTACHMENT'=>'Falha ao remover anexo...',
    'LBL_CREATED_BY'=>'Criado por',
    'LBL_MODIFIED_BY'=>'Modificado Por',
    'LBL_SEND_ANYWAYS'=> 'Este e-mail está sem assunto. Enviar / Gravar mesmo assim?',
	'LBL_LIST_EDIT_BUTTON' => 'Editar',
	'LBL_ACTIVITIES_REPORTS' => 'Relatório de Atividades',
	'LBL_PANEL_DETAILS' => 'Detalhes',
	'LBL_NOTE_INFORMATION' => 'Informação da Nota',
	'LBL_MY_NOTES_DASHLETNAME' => 'As Minhas Notas',
	'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'Primeiro Nome',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_EXPORT_PARENT_TYPE' => 'Relacionado ao Módulo',
    'LBL_EXPORT_PARENT_ID' => 'Relacionado ao ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_DELETED' => 'Excluído',
);

?>
