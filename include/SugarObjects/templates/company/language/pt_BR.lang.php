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


$mod_strings = array (
	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que deseja remover esta conta deste projeto?',
	'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registo deve ser informado.',
	'LBL_ACCOUNT_NAME' => 'Nome da Empresa:',
	'LBL_ACCOUNT' => 'Empresa:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
	'LBL_ADDRESS_INFORMATION' => 'Informação de Endereço',
	'LBL_ANNUAL_REVENUE' => 'Rendimento Anual:',
	'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
	'LBL_ANY_EMAIL' => 'Qualquer E-mail:',
    'LBL_EMAIL_NON_PRIMARY' => 'Não há emails primários ',
	'LBL_ANY_PHONE' => 'Qualquer Telefone:',
	'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
	'LBL_RATING' => 'Classificação',
	'LBL_ASSIGNED_TO' => 'Atribuído a:',
	'LBL_ASSIGNED_USER' => 'Atribuído a:',
	'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
	'LBL_BILLING_ADDRESS_CITY' => 'Cidade de Facturação:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'País de Facturação:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Código Postal de Facturação:',
	'LBL_BILLING_ADDRESS_STATE' => 'Estado de Facturação:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Rua de Facturação 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Rua de Facturação 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Rua de Facturação 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Rua de Facturação:',
	'LBL_BILLING_ADDRESS' => 'Endereço de Facturação:',
	'LBL_ACCOUNT_INFORMATION' => 'Informação da Empresa',
	'LBL_CITY' => 'Cidade:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
	'LBL_COUNTRY' => 'País:',
	'LBL_DATE_ENTERED' => 'Data de Introdução:',
	'LBL_DATE_MODIFIED' => 'Data de Modificação:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Entidades',
	'LBL_DESCRIPTION_INFORMATION' => 'Informação de Descrição',
	'LBL_DESCRIPTION' => 'Descrição:',
	'LBL_DUPLICATE' => 'Possível Entidade Duplicada',
	'LBL_EMAIL' => 'E-mail:',
	'LBL_EMPLOYEES' => 'Empregados:',
	'LBL_FAX' => 'Fax:',
	'LBL_INDUSTRY' => 'Indústria:',
	'LBL_LIST_ACCOUNT_NAME' => 'Nome da Entidade',
	'LBL_LIST_CITY' => 'Cidade',
	'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de E-mail',
	'LBL_LIST_PHONE' => 'Telefone',
	'LBL_LIST_STATE' => 'Estado',
	'LBL_LIST_WEBSITE' => 'Site Web',
	'LBL_MEMBER_OF' => 'Membro de:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Organizações Membro',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Organizações Membro',
	'LBL_NAME'=>'Nome:',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
	'LBL_OTHER_PHONE' => 'Outro Telefone:',
	'LBL_OWNERSHIP' => 'Propriedade:',
	'LBL_PARENT_ACCOUNT_ID' => 'ID Entidade de Origem',
	'LBL_PHONE_ALT' => 'Telefone Alternativo:',
	'LBL_PHONE_FAX' => 'Fax Telefone:',
	'LBL_PHONE_OFFICE' => 'Telefone Emprego:',
	'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL_ADDRESS' => 'Endereço(s) de E-mail',
	'LBL_EMAIL_ADDRESSES' => 'Endereço(s) de E-mail',
	'LBL_POSTAL_CODE' => 'Código Postal:',
	'LBL_PUSH_BILLING' => 'Ordenar Faturamento',
	'LBL_PUSH_SHIPPING' => 'Ordenar Envio',
	'LBL_SAVE_ACCOUNT' => 'Gravar Entidade',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade de Endereço de Envio:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Endereço de Envio:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código Postal de Endereço de Envio:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Estado de Endereço de Envio:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua de Endereço de Envio 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua de Endereço de Envio 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua de Endereço de Envio 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Rua de Endereço de Envio',
	'LBL_SHIPPING_ADDRESS' => 'Endereço de Envio',

	'LBL_STATE' => 'Estado:',
	'LBL_TICKER_SYMBOL' => 'Símbolo de Bolsa',
	'LBL_TYPE' => 'Tipo:',
	'LBL_USERS_ASSIGNED_LINK'=>'Utilizadores',
	'LBL_USERS_CREATED_LINK'=>'Criado por Utilizadores',
	'LBL_USERS_MODIFIED_LINK'=>'Utilizadores Modificados',
	'LBL_VIEW_FORM_TITLE' => 'Visualização da Entidade',
	'LBL_WEBSITE' => 'Site Web:',

	'LNK_ACCOUNT_LIST' => 'Entidades',
	'LNK_NEW_ACCOUNT' => 'Criar Entidade',

	'MSG_DUPLICATE' => 'A criação desta entidade poderá gerar potencialmente uma entidade duplicada. Você pode seleccionar uma entidade na lista abaixo ou clicar em Gravar para continuar a criar uma nova entidade com os dados previamente introduzidos.',
	'MSG_SHOW_DUPLICATES' => 'A criação desta entidade poderá gerar potencialmente uma entidade duplicada. Você pode clicar em Gravar para continuar a criar esta nova entidade com os dados previamente introduzidos ou pode clicar em Cancelar.',

	'NTC_COPY_BILLING_ADDRESS' => 'Copiar endereço de facturação para endereço de envio',
	'NTC_COPY_BILLING_ADDRESS2' => 'Copiar para envio',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar endereço de envio para endereço de facturação',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar para facturação',
	'NTC_DELETE_CONFIRMATION' => 'Tem a certeza que pretende eliminar este registo?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Tem a certeza que pretende remover este registo?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Tem a certeza que pretende remover este registo como organização membro?',

    'LBL_EDIT_BUTTON' => 'Editar  ',
    'LBL_REMOVE' => 'Remover',

);


