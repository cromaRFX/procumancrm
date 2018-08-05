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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para eliminar o Contato.',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_CAMPAIGN' => 'Campanha',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADD_BUSINESSCARD' => 'Criar Cartão de Visita',
    'LBL_ADDMORE_BUSINESSCARD' => 'Incluir outro cartão de visita',
    'LBL_ADDRESS_INFORMATION' => 'Endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'CEP',
    'LBL_ALT_ADDRESS_STATE' => 'Estado :',
    'LBL_ALT_ADDRESS_STREET_2' => 'Rua 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Rua 3',
    'LBL_ALT_ADDRESS_STREET' => 'Rua',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço Alternativo',
    'LBL_ALT_ADDRESS' => 'Endereço Alternativo',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço',
    'LBL_ANY_EMAIL' => 'E-mail Qualquer',
    'LBL_ANY_PHONE' => 'Telefone',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_ASSISTANT_PHONE' => 'Telefone do Assistente',
    'LBL_ASSISTANT' => 'Assistente',
    'LBL_BIRTHDATE' => 'Data de Nascimento',
    'LBL_BUSINESSCARD' => 'Cartão de Visita',
    'LBL_CITY' => 'Cidade',
    'LBL_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_CONTACT_INFORMATION' => 'Informação do Contato',
    'LBL_CONTACT_NAME' => 'Nome de Contato',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contato-Oportunidade',
    'LBL_CONTACT_ROLE' => 'Função',
    'LBL_CONTACT' => 'Contato',
    'LBL_COUNTRY' => 'País',
    'LBL_CREATED_ACCOUNT' => 'Criada uma nova Conta',
    'LBL_CREATED_CALL' => 'Criada uma nova ligação',
    'LBL_CREATED_CONTACT' => 'Criado um novo Contato',
    'LBL_CREATED_MEETING' => 'Criada uma nova Reunião',
    'LBL_CREATED_OPPORTUNITY' => 'Criada uma nova Oportunidade',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DEPARTMENT' => 'Departamento',
    'LBL_DESCRIPTION_INFORMATION' => 'Informação Descritiva',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Reporta diretamente a',
    'LBL_DO_NOT_CALL' => 'Não Telefonar',
    'LBL_DUPLICATE' => 'Contatos Possivelmente Duplicados',
    'LBL_EMAIL_ADDRESS' => 'E-mail',
    'LBL_EMAIL_OPT_OUT' => 'Não Deseja receber E-mails',
    'LBL_EXISTING_ACCOUNT' => 'Conta existente',
    'LBL_EXISTING_CONTACT' => 'Contato existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Oportunidade existente',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_FIRST_NAME' => 'Primeiro Nome',
    'LBL_FULL_NAME' => 'Nome Completo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_HOME_PHONE' => 'Telefone Residencial',
    'LBL_ID' => 'ID',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar automaticamente um Contato novo importando um vCard de seu sistema de arquivos.',
    'LBL_INVALID_EMAIL' => 'Email Inválido',
    'LBL_INVITEE' => 'Reporta diretamente a',
    'LBL_LAST_NAME' => 'Último Nome',
    'LBL_LEAD_SOURCE' => 'Fonte',
    'LBL_LIST_ACCEPT_STATUS' => 'Status aceito',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome do Contato',
    'LBL_LIST_CONTACT_ROLE' => 'Função',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Primeiro Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contatos',
    'LBL_VIEW_FORM_TITLE' => 'Detalhe do Contato',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Outro E-mail',
    'LBL_LIST_PHONE' => 'Telefone Comercial',
    'LBL_LIST_TITLE' => 'Título',
    'LBL_MOBILE_PHONE' => 'Mobile',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODULE_NAME' => 'Contatos',
    'LBL_MODULE_TITLE' => 'Contatos: Tela Principal',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_FORM_TITLE' => 'Novo Contato',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nova senha do Portal',
    'LBL_NOTE_SUBJECT' => 'Assunto da Anotação',
    'LBL_OFFICE_PHONE' => 'Telefone do Escritório',
    'LBL_OPP_NAME' => 'Nome de Oportunidade',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID de Função de Oportunidade',
    'LBL_OPPORTUNITY_ROLE' => 'Função de Oportunidade',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail',
    'LBL_OTHER_PHONE' => 'Outro Telefone',
    'LBL_PHONE' => 'Telefone',
    'LBL_PORTAL_ACTIVE' => 'Portal Ativo',
    'LBL_PORTAL_APP' => 'Aplicação Portal',
    'LBL_PORTAL_INFORMATION' => 'Informação do Portal',
    'LBL_PORTAL_NAME' => 'Nome do Portal',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Palavra-chave do portal foi configurada',
    'LBL_STREET' => 'Rua',
    'LBL_POSTAL_CODE' => 'Código Postal',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Paí­s',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'CEP',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua',
    'LBL_PRIMARY_ADDRESS' => 'Endereço',
    'LBL_PRODUCTS_TITLE' => 'Produtos',
    'LBL_RELATED_CONTACTS_TITLE' => 'Contatos Relacionados',
    'LBL_REPORTS_TO_ID' => 'Reporta ao ID',
    'LBL_REPORTS_TO' => 'Reporta a',
    'LBL_RESOURCE_NAME' => 'Nome de Recurso',
    'LBL_SALUTATION' => 'Saudação',
    'LBL_SAVE_CONTACT' => 'Gravar Contato',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Contatos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Contatos Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Contatos Marcados',
    'LBL_STATE' => 'Estado',
    'LBL_SYNC_CONTACT' => 'Sincronizar Contato',
    'LBL_PROSPECT_LIST' => 'Lista de Potenciais Clientes',
    'LBL_TITLE' => 'Cargo',
    'LNK_CONTACT_LIST' => 'Contatos',
    'LNK_IMPORT_VCARD' => 'Criar a partir de um vCard',
    'LNK_NEW_ACCOUNT' => 'Nova Conta',
    'LNK_NEW_APPOINTMENT' => 'Novo Compromisso',
    'LNK_NEW_CALL' => 'Nova Ligação',
    'LNK_NEW_CASE' => 'Nova Ocorrência',
    'LNK_NEW_CONTACT' => 'Novo Contato',
    'LNK_NEW_EMAIL' => 'Novo E-mail',
    'LNK_NEW_MEETING' => 'Nova Reunião',
    'LNK_NEW_NOTE' => 'Nova Nota',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_NEW_TASK' => 'Criar Nova Tarefa',
    'LNK_SELECT_ACCOUNT' => "Selecionar Conta",
    'MSG_DUPLICATE' => 'Ao criar este Contato pode estar duplicando o mesmo, selecione um Contato da lista abaixo ou clique em Novo Contato para continuar a criação com os dados introduzidos previamente.',
    'MSG_SHOW_DUPLICATES' => 'Ao criar este Contato pode estar duplicando o mesmo, clique em Gravar para continuar ou escolha Cancelar.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia endereço alternativo para o endereço principal',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar o endereço principal para o endereço alternativo',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza que deseja eliminar este registro?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Criar uma oportunidade requer uma Conta. Por favor, crie uma ou selecione uma pré-existente.',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza que deseja remover este Contato desta ocorrência?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Tem a certeza que deseja remover este registro como um relatório direto?',

    'LBL_USER_PASSWORD' => 'Senha',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar para a Endereço Primário',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar para Outro Endereço',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Central de Suporte',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECTS_RESOURCES' => 'Recursos do Projeto',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Campanhas (Alvo)',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registro de Campanhas',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_HOMEPAGE_TITLE' => 'Meus Contatos',
    'LBL_OPPORTUNITIES' => 'Oportunidades',

    'LBL_CHECKOUT_DATE' => 'Data do Registro de Saída',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanhas',
    'LNK_IMPORT_CONTACTS' => 'Importar Contatos',

    //For export labels
    'LBL_PHONE_HOME' => 'Telefone Reseidencial',
    'LBL_PHONE_MOBILE' => 'Mobile',
    'LBL_PHONE_WORK' => 'Telefone Comercial',
    'LBL_PHONE_OTHER' => 'Outro Telefone',
    'LBL_PHONE_FAX' => 'Fax:',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Usuário Atribuído',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
    'LBL_EXPORT_PHONE_HOME' => 'Telefone Residencial:',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefone (Mobile)',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails relacionados',
    'LBL_USER_SYNC' => 'Sync do usuário',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Eventos',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegações',

    'LBL_AOP_CASE_UPDATES' => 'Tipos de atualizações',
    'LBL_CREATE_PORTAL_USER' => 'Criar Usuário do Portal',
    'LBL_ENABLE_PORTAL_USER' => 'Ativar Usuário do Portal',
    'LBL_DISABLE_PORTAL_USER' => 'Desativar Usuário do Portal',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Falha ao criar o usuário do portal',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Falha ao ativar o usuário do portal',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Falha ao desativar o usuário do portal',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Usuário do portal criado',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Usuário do portal ativado',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Usuário do portal desativado',
    'LBL_NO_JOOMLA_URL' => 'Nenhum URL do portal foi informada',
    'LBL_PORTAL_USER_TYPE' => 'Tipo de Usuário do Portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Conta Desativada',
);

?>
