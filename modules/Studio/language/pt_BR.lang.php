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
'LBL_EDIT_LAYOUT'=>'Editar Layout',
'LBL_EDIT_ROWS'=>'Editar Linhas',
'LBL_EDIT_COLUMNS'=>'Editar Colunas',
'LBL_EDIT_LABELS'=>'Editar Rótulos',
'LBL_EDIT_FIELDS'=>'Editar Campos Customizados',
'LBL_ADD_FIELDS'=>'Adicionar Campos Customizados',
'LBL_DISPLAY_HTML'=>'Exibir Código HTML',
'LBL_SELECT_FILE'=> 'Selecionar Arquivo',
'LBL_SAVE_LAYOUT'=> 'Salvar Layout',
'LBL_SELECT_A_SUBPANEL' => 'Selecione um Subpainel',
'LBL_SELECT_SUBPANEL' => 'Selecionar Subpainel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Ferramentas',
'LBL_STAGING_AREA' => 'Área de Transferência (arraste e solte os itens aqui)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos SuiteCRM (clique nos itens para adicionar à área de armazenamento)',
'LBL_SUGAR_BIN_STAGE' => 'Bin SuiteCRM (clique nos itens para adicionar à área de armazenamento)',
'LBL_VIEW_SUGAR_FIELDS' => 'Exibir Campos do SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Exibir Bin do SuiteCRM',
'LBL_FAILED_TO_SAVE' => 'Falha ao Salvar',
'LBL_CONFIRM_UNSAVE' => 'Nenhuma alteração será salva. Tem certeza que deseja continuar?',
'LBL_PUBLISHING' => 'Publicando ...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_FAILED_PUBLISHED' => 'Falha ao Publicar',
'LBL_DROP_HERE' => '[Solte Aqui]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nome',
'LBL_LABEL'=>'Rótulo',
'LBL_MASS_UPDATE'=>'Atualização em Massa',
'LBL_AUDITED'=>'Auditoria',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Padrão',
'LBL_REQUIRED'=>'Obrigatório',
'LBL_DATA_TYPE'=>'Tipo',


'LBL_HISTORY'=>'Histórico',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Bem-vindo ao Studio!</h2><br>O que gostaria de fazer hoje?<br><b>Por favor, selecione as opções abaixo.</b>',
'LBL_SW_EDIT_MODULE'=>'Editar um Módulo',
'LBL_SW_EDIT_DROPDOWNS'=>'Editar Dropdowns',
'LBL_SW_EDIT_TABS'=>'Configurar Guias',
'LBL_SW_RENAME_TABS'=>'Renomear Guias',
'LBL_SW_EDIT_GROUPTABS'=>'Configurar Agrupamento de Guias',
'LBL_SW_EDIT_PORTAL'=>'Editar Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Editar Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparar Campos Customizados',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrar Campos Customizados',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Bem-vindo ao Studio!</h2><br><b>Por favor, selecione um dos módulos abaixo.</b>.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editar um Módulo</h2>O que deseja fazer com esse módulo? <br><b>Por favor, selecione a ação que você gostaria de realizar.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editar Campos Customizados',
'LBL_SMA_EDIT_LAYOUT'=>'Editar Layout',
'LBL_SMA_EDIT_LABELS' =>'Editar Rótulos',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Visualizar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Excluir',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_WELCOME'=> '<h2>Histórico</h2> <br>O Histórico permite que você veja as edições previamente publicadas do arquivo que está sendo trabalhado. É possível comparar e restaurar as versões anteriores. Se você não restaurar o arquivo, ele será o arquivo que está sendo trabalhado. Você deve publicá-lo antes que ele se torne visível para todos. <br>O que você gostaria de fazer hoje? <br><b>Por favor, selecione uma das opções abaixo.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Criar um Dropdown',
'LBL_ED_WELCOME'=>'<h2>Editor Dropdown</h2> <br><b>Você pode editar dropdown existente ou criar um novo.',
'LBL_DROPDOWN_NAME' => 'Nome do Dropdown:',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma do Dropdown:',
'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Editor de Campo Customizado</h2> <br><b>Você pode ver e editar um campo customizado existente, criar um novo ou limpar o cache de campo personalizado.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Visualizar Campos Customizados',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Criar Campos Customizados',
'LBL_EC_CLEAR_CACHE'=>'Limpar Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<b>Histórico<BR><BR>Por favor Selecione o arquivo que gostaria de visualizar</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Valor exibido',
'LBL_DD_DATABASEVALUE'=>'Valor da Base de Dados',
'LBL_DD_ALL'=>'Todos',

//BUTTONS
'LBL_BTN_SAVE'=>'Gravar',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_SAVEPUBLISH'=>'Salvar & Implementar',
'LBL_BTN_HISTORY'=>'Histórico',
'LBL_BTN_NEXT'=>'Próximo',
'LBL_BTN_BACK'=>'Voltar',
'LBL_BTN_ADDCOLS'=>'Adicionar Colunas',
'LBL_BTN_ADDROWS'=>'Adicionar Linhas',
'LBL_BTN_UNDO'=>'Desfazer',
'LBL_BTN_REDO'=>'Refazer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Adicionar Campo Customizado',
'LBL_BTN_TABINDEX'=>'Editar Ordem dos Tabuladores',

//TABS
'LBL_TAB_SUBTABS'=>'Sub Tabuladores',
'LBL_MODULES'=>'Módulos',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administração',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurar Tabuladores de Grupos',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Os grupos abaixo será exibida na barra de navegação para os Usuários que escolhem para ler módulos agrupados. Arrastar e soltar os módulos para os Grupos pretendidos. Nota: Os grupos vazios não serão exibidas na barra de navegação.',
'LBL_RENAME_TAB_WELCOME'=>'Clique em qualquer tabulação Exibir Valor na tabela abaixo para renomear o tabulador.',
'LBL_DELETE_MODULE'=>'Eliminar Módulo',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Selecione para exibir o tabulodor "Outro" na barra de navegação. Por defeito, o tabulador "Outro" exibe quaisquer módulos que não estejam já incluídos em outros grupos.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecione um idioma disponível, edite os rótulos de Grupo e clique em Salvar & implementar para aplicar os rótulos no idioma selecionado.',
'LBL_ADD_GROUP'=>'Adicionar Grupo',
'LBL_NEW_GROUP'=>'Novo Grupo',
'LBL_RENAME_TABS'=>'Renomear Módulos',
'LBL_DISPLAY_OTHER_TAB' => 'Exibir Tabulador &#39;Outro&#39;',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Padrão',
'LBL_ADDITIONAL'=>'Adicional',
'LBL_AVAILABLE'=>'Disponível',
'LBL_LISTVIEW_DESCRIPTION'=>'Há três colunas exibidas abaixo. A coluna "Padrão" contém os campos que são exibidos na lista, por padrão. A coluna adicional contém campos que um usuário poderá escolher para criar uma exibição personalizada. E, a coluna disponível contém as colunas disponíveis, mas não em uso, para que você, como administrador, os adicione às colunas padrão ou adicional e as disponibilize aos usuários.',
'LBL_LISTVIEW_EDIT'=>'Editor Exibição de Lista',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Erro: Campo Já Existe',
'ERROR_INVALID_KEY_VALUE'=> "Erro: Valor da Chave Inválido: [*]",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal do SuiteCRM',
'LBL_SMP_WELCOME'=>'Por favor Selecione um módulo que queira editar da lista abaixo',
'LBL_SP_WELCOME'=>'Bem-vindo ao Studio do Portal SuiteCRM. Aqui você pode editar módulos ou sincronizar à uma instância do portal.<br> Por favor, selecione da lista abaixo.',
'LBL_SP_SYNC'=>'Sincronização do Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, insira a url da instância do portal que você deseja atualizar. Em seguida, pressione o botão Ir. <br>Isto abrirá uma tela para inserção do usuário e senha. <br>Por favor, insira seu usuário e senha do SuiteCRM e pressione o botão Iniciar Sincronização.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Existem duas colunas abaixo: Padrão que são os campos que serão exibidos e Disponível que são os campos que não são exibidos, mas que estão disponíveis para exibição. Arraste apenas os campos entre as duas colunas. Pode também reordenar os itens numa coluna ao arrastá-los e soltá-los.',
'LBL_SP_STYLESHEET'=>'Carregar uma Folha de Estilo',
'LBL_SP_UPLOADSTYLE'=>'Clique no botão procurar e selecione uma folha de estilo do seu computador para carga. <br>Na próxima vez que você sincronizar com o portal, a folha de estilo será carregada com a sincronização.',
'LBL_SP_UPLOADED'=> 'Carregado',
'ERROR_SP_UPLOADED'=>'Por favor assegure-se que está a carregar uma folha de estilo css.',
'LBL_SP_PREVIEW'=>'Esta é uma previsão de como será a sua folha de estilo.',

	'LBL_SAVE' => 'Salvar' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Desfazer' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Refazer' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Adicionar Linhas' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Selecione o idioma a editar.',
'LBL_SINGULAR' => 'Rótulo Singular',
'LBL_PLURAL' => 'Rótulo Plural',
'LBL_RENAME_MOD_SAVE_HELP' => 'Clique em <b>Salvar</b> para aplicar as alterações.'

);
?>