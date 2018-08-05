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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Os seguintes módulos foram instalados:',
	'DESC_MODULES_QUEUED'						=> 'Os seguintes módulos estão prontos para serem instalados:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Não foi possível determinar o Grupo',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Não é possível determinar o Proprietário',
	'ERR_UW_CONFIG_WRITE'						=> 'Erro ao atualizar o config.php com a nova informação de versão.',
	'ERR_UW_CONFIG'								=> 'Por favor, torne o seu arquivo config.php gravável e recarregue esta páǵina.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Diretório não é gravável',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Arquivo não copiado',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problema ao remover pacote ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Arquivo não pôde ser lido.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Arquivo não pode ser movido ou gravado',
	'ERR_UW_FLAVOR_2'							=> 'Versão da Atualização: ',
	'ERR_UW_FLAVOR'								=> 'Versão da Atualização do SuiteCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log não pôde ser criado/gravado.  Por favor, corrija as permissões no diretório do SuiteCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload definido como um valor maior que 1.  Por favor, modifique este parâmetro no seu php.ini e reinicie o servidor web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SuiteCRM requer MySQL versão 4.1.2 ou mais recente.  Encontrada: ',
	'ERR_UW_OCI8_VERSION'				        => 'Sua versão do Oracle não é suportada pelo SugarCRM. Você precisa instalar uma versão compatível. Favor consultar as opções compatíveis nos releases.',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Por favor especifique um arquivo e tente novamente!',
	'ERR_UW_NO_FILES'							=> 'Ocorreu um erro, nenhum arquivo foi encontrado para a verificação.',
	'ERR_UW_NO_MANIFEST'						=> 'No arquivo zip está em falta o arquivo manifest.php. Não podemos prosseguir.',
	'ERR_UW_NO_VIEW'							=> 'Visualização especificada inválida.',
	'ERR_UW_NO_VIEW2'							=> 'Visualização não definida. Por favor aceda à página de administração para navegar até esta página.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Carregamento não valido',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Não pode criar o Diretório temp. Verifique as permissões do arquivo.',
	'ERR_UW_ONLY_PATCHES'						=> 'Apenas pode carregar patches nesta página.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Erros encontrados durante a verificação Preflight',
	'ERR_UW_UPLOAD_ERR'							=> 'Ocorreu um erro ao carregar o arquivo, por favor tente novamente!',
	'ERR_UW_VERSION'							=> 'SuiteCRM - Versão do Sistema: ',
	'ERR_UW_WRONG_TYPE'							=> 'Esta página não é para ser executada',
	'LBL_BUTTON_BACK'							=> 'Voltar',
	'LBL_BUTTON_CANCEL'							=> 'Cancelar',
	'LBL_BUTTON_DELETE'							=> 'Excluir Pacote',
	'LBL_BUTTON_DONE'							=> 'Concluído',
	'LBL_BUTTON_EXIT'							=> 'Sair',
	'LBL_BUTTON_INSTALL'						=> 'Atualização Preflight',
	'LBL_BUTTON_NEXT'							=> 'Próximo >',
	'LBL_BUTTON_RECHECK'						=> 'Verificar novamente',
	'LBL_BUTTON_RESTART'						=> 'Reiniciar',

	'LBL_UPLOAD_UPGRADE'						=> 'Carregar um Pacote de Atualização',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'arquivo de carregamento não encontrado',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'arquivo de Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'arquivos de Backup desta atualização não podem ser encontrados em',
	'LBL_UW_BACKUP'								=> 'arquivo de Backup',
	'LBL_UW_CANCEL_DESC'						=> 'A atualização foi cancelada. Todos os arquivos temporários copiados e todos os arquivo da atualização carregados foram excluídos.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Alterações de Character Set Schema',
	'LBL_UW_CHECK_ALL'							=> 'Verificar todos',
	'LBL_UW_CHECKLIST'							=> 'Passos da atualização',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups dos arquivos sobrescritos estão no seguinte Diretório:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Fundir manualmente os seguintes arquivos:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Processo de atualização: Fundir Manualmente os arquivos',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Por favor utilize o seu método preferido de diff para juntar os arquivos. Até então a sua instalação do SugarCRM estará incompleta.',
	'LBL_UW_COMPLETE'							=> 'Completo',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Esta nova versão do Sugar contém um novo acordo de licença. Pretende continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Todos os Requisitos de Configurações do Sistema satisfeitos',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Configurações do PHP: Passagem de Tempo da chamada por Referência',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Módulo de cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Módulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Módulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parâmetro MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Configurações PHP: Limite de Memória',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Configurações PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server e PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versão mínima do MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versão mínima do banco de dados',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Localização do php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versão mínima do PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Definições do PHP: Modo Seguro',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Verificar Definições do Servidor',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Definições Detectadas',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parsing XML',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Suporte a ZIP',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'Versão do PCRE',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'arquivos copiados com sucesso',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Alterações do Esquema de Tabela Customizada',

	'LBL_UW_DB_CHOICE1'							=> 'Assistente de atualização Executa SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Queries SQL Manuais',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT falhou - resultados comparados diferem',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilégios da base de dados',
	'LBL_UW_DB_ISSUES'							=> 'Edições da base de dados',
	'LBL_UW_DB_METHOD'							=> 'Método de atualização da base de dados',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTERAR TABELA [tabela] ADICIONAR COLUNA [coluna]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTERAR TABELA [tabela] MUDAR COLUNA [coluna]',
	'LBL_UW_DB_NO_CREATE'						=> 'CRIAR TABELA [tabela]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETAR DE [tabela]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTERAR TABELA [tabela] SOLTAR COLUNA [coluna]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'SOLTAR COLUNA [tabela]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Todos os privilégios disponíveis',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERIR [TABELA]',
	'LBL_UW_DB_NO_SELECT'						=> 'LELECIONAR [x] DE [tabela]',
	'LBL_UW_DB_NO_UPDATE'						=> 'ATUALIZAR [tabela]',
	'LBL_UW_DB_PERMS'							=> 'Privilégio necessário',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Os seguintes pacotes de atualização foram instalados:',
	'LBL_UW_END_DESC'							=> 'O sistema foi atualizado.',
	'LBL_UW_END_DESC2'							=> 'Se você selecionou executar manualmente quaisquer etapas como: mesclagens de arquivo mesclagens ou consultas SQL, por favor faça isso agora.  Seu sistema estará em um estado instável, até que essas etapas sejam concluídas.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'A atualização está completa.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Clique em "Concluído" para sair do Wizard de atualizações.',
	'LBL_UW_END_LOGOUT'							=> 'Se você planeja aplicar outro pacote de atualização usando o Assistente de Atualização, saia do sistema e efetue login novamente antes de fazer a atualização.',
	'LBL_UW_END_LOGOUT2'						=> 'Sair',
	'LBL_UW_REPAIR_INDEX'						=> 'Para melhorar a performance da sua base de dados, por favor execute o script <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Reparar Índices</>.',

	'LBL_UW_FILE_DELETED'						=> "foi removido.",
	'LBL_UW_FILE_GROUP'							=> 'Grupo',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permissões do arquivo',
	'LBL_UW_FILE_ISSUES'						=> 'Edições do arquivo',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'arquivo requer manual Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> 'Todos os arquivos podem ser escritos',
	'LBL_UW_FILE_OWNER'							=> 'Proprietário',
	'LBL_UW_FILE_PERMS'							=> 'Permissões',
	'LBL_UW_FILE_UPLOADED'						=> 'foi carregado',
	'LBL_UW_FILE'								=> 'Nome do arquivo',
	'LBL_UW_FILES_QUEUED'						=> 'As seguintes atualizações estão prontas para serem instaladas:',
	'LBL_UW_FILES_REMOVED'						=> "Os seguintes arquivos serão removidos do sistema: <br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Clique em Avançar para carregar pacotes de atualização.",
	'LBL_UW_FROZEN'								=> 'As etapas requeridas devem ser terminadas antes de continuar.',
	'LBL_UW_HIDE_DETAILS'						=> 'Esconder Detalhes',
	'LBL_UW_IN_PROGRESS'						=> 'Em processamento',
	'LBL_UW_INCLUDING'							=> 'Incluindo',
	'LBL_UW_INCOMPLETE'							=> 'Incompleto',
	'LBL_UW_INSTALL'							=> 'arquivo INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Fundir arquivos',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "O Módulo está pronto para ser desinstalado. Clique em \"Commit\" para continuar com a instalação.",
	'LBL_UW_MODULE_READY'						=> "O Módulo está pronto para ser instalado. Clique em \"Commit\" para continuar com a instalação.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nenhuma atualização gravada detectada.',
	'LBL_UW_NONE'								=> 'Nenhum',
	'LBL_UW_NOT_AVAILABLE'						=> 'Não disponível',
	'LBL_UW_OVERWRITE_DESC'						=> "Todos os arquivos alterados serão substituídos, incluindo quaisquer personalizações de código e mudanças de modelo que você fez. Tem certeza que deseja prosseguir?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sobrescrever todos os arquivos',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Fundir Manualmente - Preservar todos',
	'LBL_UW_OVERWRITE_FILES'					=> 'Método de Fusão',
	'LBL_UW_PATCH_READY'						=> 'O patch está pronto para prosseguir. Clique no botão &quot;Instalar&quot; abaixo para completar o processo de atualização.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Aviso: Layouts Customizados Encontrados</h2>< br / > Os seguintes arquivo(s) possuem campos novos ou layouts de tela modificados aplicados através do Estúdio. O patch que você está prestes a instalar também contém alterações para os arquivo(s). Para <u>cada arquivo</u>, você poderá: <br><ul><li>[<b>Padrão</b>] mantenha a sua versão, deixando a caixa de seleção em branco. As modificações do patch serão ignoradas.</li> ou <li>Aceitar os arquivos atualizados, marcando a caixa de seleção. Seus layouts precisarão ser reaplicados via Estúdio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Criar um item da tarefa para fundir manualmente?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Verificar Preflight',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenciado',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Deseja receber um e-mail de aviso sobre a Fusão Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Os arquivos listados abaixo foram modificados. Itens não marcados que exigem uma junção manual. Qualquer mudança detectada no layout será automaticamente desmarcada; marque qualquer uma que possa ser sobrescrita.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Não é necessário fundir arquivos manualmente.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Sem necessidade.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'arquivos preservados automaticamente',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Todos os testes Preflight aprovados. Pressione "Próximo" para submeter estas modificações.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Clique em Próximo para copiar os arquivos atualizados para o sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Por favor, repare que o resto do processo de atualização é obrigatório, e clicando em Seguinte, terá que concluir o processo. Se não deseja prosseguir, clique no botão cancelar.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Substituir todos os arquivos',

	'LBL_UW_REBUILD_TITLE'						=> 'Resultado da reconstrução',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Alterar Schema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostrar Definições detectadas.',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostrar permissões da Base de Dados em falta.',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostrar Detalhes',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostrar arquivos que requerem fusão manual',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostrar arquivos com Más Permissões',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostrar Schema Change Script',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostrar Más Queries',
	'LBL_UW_SHOW'								=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'arquivos Ignorados',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ignorar arquivos sobrescritos -  Fundir manualmente os selecionados.',
	'LBL_UW_SQL_RUN'							=> 'Verificar quando o SQL foi executado manualmente',
	'LBL_UW_START_DESC'							=> 'Bem-vindo ao Assistente de atualização SugarCRM. Este ambiente é projetado para ajudar os administradores quando forem fazer a atualização do SugarCRM. Por favor siga as instruções dadas cuidadosamente.',
	'LBL_UW_START_DESC2'						=> 'Recomendamos que realize a atualização num servidor clone antes de realizar no servidor de produção. Por favor faça o backup da sua base de dados e arquivos do sistema (todos os arquivos na sua pasta SugarCRM) antes de realizar a operação - prevenir sempre é melhor do que remediar.',
	'LBL_UW_START_DESC3'						=> 'Clique em Avançar para executar uma verificação de sistema para se certificar de que o sistema está pronto para o atualização. A verificações inclui permissões de arquivos e privilégios de base de dados, bem como configurações do servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'O novo Assistente de atualização irá agora retomar o processo de atualização. Por favor continue a sua atualização.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bem-Vindo ao Novo Assistente de atualização',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'A verificar, por favor espere. Isto pode levar mais do que 30 segundos.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Procurando todos os arquivos pertinentes para a verificação',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'arquivos',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Encontrado',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancelar',
	'LBL_UW_TITLE_COMMIT'						=> 'Aplicar atualização',
	'LBL_UW_TITLE_END'							=> 'Reportar',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Verificação Preflight',
	'LBL_UW_TITLE_START'						=> 'Iniciar',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Verificação do Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Carregamento da Pacote',
	'LBL_UW_TITLE'								=> 'Assistente de atualização',
	'LBL_UW_UNINSTALL'							=> 'Desinstalar',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Aceitar Licença',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converter Licença',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Módulos Atualizados/Customizados',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Os seguintes módulos foram detectados como personalizados e preservados',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Os seguintes módulos foram detectados como personalizados no Estúdio e foram atualizados',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'A Comunidade SuiteCRM Edition 5.0 usa GNU Affero General Public License versão 3. Esta atualização irá converter sua licença existente para a nova licença exibida abaixo.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Iniciar em progresso',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Verificação do Sistema em Andamento',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Verificação de Licença em progresso',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Verificação Preflight em progresso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Cópia de arquivos em andamento',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade em progresso',
    'LBL_UW_COMMIT_DESC'						=> 'Clique em Avançar para executar scripts de atualização adicionais.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'atualização de Scripts em execução',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Sumário de atualização em progresso',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'em progresso',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tempo decorrido',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'atualização de Cancelar e Limpar em progresso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'atualização pode demorar algum tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Verificações de carregamento em progresso',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Carregando pacote de atualização...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Pretende que o Sugar remova o obsoleto 451 Schema?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Wizard de atualização Remove antigo 451 schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Pós-atualização de Remoção Manual de Schema',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Método Antigo de Remoção de Schema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostrar Schema Antigo que pode ser removido',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Queries Ignoradas',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'É necessário PHP versão 5 ou acima',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'A sua versão de PHP não é suportada pelo Sugar. Necessita de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_CANCEL'             => 'Cancelar',
    'LBL_ML_COMMIT'=>'Submeter',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de Instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de Publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não-instalável',
    'LBL_ML_VERSION' => 'Versão',
	'LBL_ML_INSTALL'=>'Instalar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Definições do Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(A sua versão PHP actual é',
	'LBL_RECOMMENDED_PHP_VERSION' => '. A versão PHP recomendada é a 5.2.1 ou acima)',
	'LBL_MODULE_NAME' => 'Assistente de atualização',
	'LBL_UPLOAD_SUCCESS' => 'O pacote de atualização foi carregado com sucesso. Clique em Avançar para executar uma verificação final.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirme Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Existem novos campos disponíveis que foram adicionados como parte desta atualização e podem ser acrescentados automaticamente seus layouts existentes do módulo.  Para saber mais sobre os novos campos, por favor, consulte as notas de lançamento para a versão à qual você está atualizando. <br><br>Se você não deseja acrescentar novos campos, por favor, desmarque o módulo, e seus layouts personalizados permanecerá inalterados. Os campos estará disponíveis no Studio após a atualização. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Clique em Avançar para confirmar as alterações e finalizar a atualização.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em Avançar para concluir a atualização.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirme Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados da confirmação de Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os layouts foram fundidos com êxito:',
	'LBL_SELECT_FILE' => 'selecione um arquivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'O arquivo carregado não é compatível com esta versão (Community Edition, Professional ou Enterprise) do Sugar:',
	'LBL_LANGPACKS' => 'Pacotes de idioma' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Carregador de Módulo' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Atualizações de segurança' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Work Flow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Atualização:' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processando' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'O arquivo carregado excede a diretiva upload_max_filesize no php.ini',
													2 => 'O arquivo carregado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
													3 => 'O arquivo carregado foi apenas parcialmente carregado.',
													4 => 'Nenhum arquivo foi carregado.',
													5 => 'Erro desconhecido.',
													6 => 'Pasta temporária em falta.',
													7 => 'Falha ao escrever o arquivo para o disco.',
													8 => 'Carregamento do arquivo interrompido por extensão.',
),
);
