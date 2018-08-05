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


$mod_strings = array(
    'LBL_LOADING' => 'Carregando' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ocultar Opções' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Informe um <b>Nome</b> para o pacote.  O nome informado deve ser alfanumérico e sem espaços. (Exemplo: HR_Management) <br/><br/> Você também pode informar o <b>Autor</b> e a <b>Descrição</b> do pacote. <br/><br/> Clique em <b>Salvar</b> para criar o pacote.',
            'modify' => 'As propriedades e ações possíveis para o <b>Pacote</b> apaecem aqui. <br><br>Você pode modificar o <b>Nome</b>, o <b>Autor</b> e a <b>Descrição</b> do pacote, assim como visualizar e customizar todos os módulos contidos no pacote. <br><br>Clique em <b>Novo Módulo</b> para criar um módulo para o pacote. <br><br>Se o pacote tiver pelo menos um módulo, você poderá <b>Publicar</b> e <b>Implantar</b> o pacote, assim como <b>Exportar</b> as customizações feitas no pacote.',
            'name' => 'Este é o <b>Nome</b> do pacote atual. <br/><br/> O nome informado deve ser alfanumérico, começar com uma letra e sem espaços. (Exemplo: HR_Management)',
            'author' => 'Este é o <b>autor</b> que é exibido durante a instalação, como o nome da entidade que criou o pacote. <br><br>o autor pode ser um indivíduo ou uma empresa.',
            'description' => 'Esta é a <b>Descrição</b> do pacote que é exibida durante a instalação.',
            'publishbtn' => 'Clique em <b>Publicar</b> para salvar todos os dados inseridos e criar um arquivo .zip que é a versão de instalação do pacote.<br><br>Utilize o <b>Carregador de Módulo</b> para carregar o arquivo .zip e instalar o pacote.',
            'deploybtn' => 'Clique em <b>Implementar </b> para salvar todos os dados informados e instalar o pacote, incluindo todos os módulos, na instância atual.',
            'duplicatebtn' => 'Clique em <b>duplicar</b> para copiar o conteúdo do pacote em um novo pacote e exibir o novo pacote. <br/> <br/> Para o novo pacote, um novo nome será gerado automaticamente anexando um número ao final do nome do pacote usado para criar um novo. Você pode renomear o novo pacote inserindo um novo <b>Nome</b> e clicando em <b>Salvar</b>.',
            'exportbtn' => 'Clicar <b>Exportar</b> para criar um Arquivo .zip contendo as personalizações feitas ao pacote.<br/><br/> O Arquivo gerado não será uma versão de instalação do pacote.<br><br>Use o <b>Carregador de Módulo</b> para importar o Arquivo .zip para ter o pacote, incluindo as suas personalizações, a aparecer no Construtor de Módulos.',
            'deletebtn' => 'Clique em <b>Eliminar</b> para eliminar este módulo.',
            'savebtn' => 'Clicar <b>Guardar</b> irá guardar todas as alterações e torna-las activas.',
            'existing_module' => 'Clicar no ícone do <b>Módulo</b> para editar as propriedades e personalizações dos campos, relações e layouts associados com o módulo.',
            'new_module' => 'Clicar <b>Novo Módulo</b> para criar um novo módulo para este pacote.',
            'key' => 'Esta <b>Chave</b> de cinco letras, alfanumérica será usada como prefixo em todas os diretórios, nomes de classes e tabelas de base de dados para todos os módulos do pacote atual.<br/><br/>A chave é usada para garantir que o nome das tabelas seja único.',
            'readme' => 'Clicar para adicionar texto <b>Leia-me</b> para este pacote.<br/><br/>O Leia-me estará disponível na altura da instalação.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Forneça um <b>Nome</b> para o módulo. O <b>Rótulo</b> que você fornecer será exibido na guia de navegação <br/> <br/> Selecione por exibir um guia de navegação para o módulo, marcando a caixa de seleção <b>Guia de Navegação</b>. <br/> <br/> Em seguida, escolha o tipo de módulo que você gostaria de criar. <br/> <br/> Selecione um tipo do modelo. Cada modelo contém um conjunto específico de campos, assim como os layouts pré-definidos, para usar como base para seu módulo. <br/> <br/> Clique em <b>Salvar</b> para criar o módulo.',
            'modify' => 'Você pode alterar as propriedades de módulo ou personalizar os <b>Campos</b>, <b>Relacionamentos</b> e <b>Layouts</b> relacionados ao módulo.',
            'importable' => 'Selecionar a caixa de selecção <b>Importável</b> irá permitir importar este módulo.<br/><br/> Um link para o Assistente de Importação irá aparecer no painel de Atalhos dentro do módulo.  O Assistente de Importação facilita a importação de dados de fontes externas para o módulo.',
            'team_security' => 'Selecionar a caixa de selecção <b>Segurança de Equipa</b> irá disponibilizar segurança de equipa para este módulo. <br/><br/>Se a segurança de equipa estiver ligada, o campo de selecção Equipa irá aparecer nos registros do módulo',
            'reportable' => 'Selecionar esta caixa irá permitir que este módulo terá relatórios a correr sobre ele.',
            'assignable' => 'Selecionar esta caixa irá permitir a um registro deste módulo ser atribuído a um utilizador selecionado.',
            'has_tab' => 'Selecionar <b>Separador de Navegação</b> irá fornecer um separador de navegação para o módulo.',
            'acl' => 'Selecionar esta caixa irá permitir Controlo de Acessos neste módulo, incluindo Segurança ao Nível de Campos.',
            'studio' => 'Selecionar esta caixa irá permitir aos administradores personalizar este módulo dentro do Studio.',
            'audit' => 'Selecionar esta caixa irá permitir Auditorias para este módulo. Alterações a certos campos serão registados para que os administradores possam rever a história de alterações.',
            'viewfieldsbtn' => 'Clique em <b>Ver Campos</b> para ver os campos associados com o módulo e criar ou editar campos personalizados.',
            'viewrelsbtn' => 'Clique em <b>Ver Relações</b> para ver as relações associadas com este módulo e para criar novas relações.',
            'viewlayoutsbtn' => 'Clique em <b>Ver Layouts</b> para ver os layouts para o módulo e para personalizar a disposição dos campos dentro dos layouts.',
            'duplicatebtn' => 'Clique em <b>Duplicar</b> para copiar as propriedades do módulo em um novo módulo e para exibir o novo módulo. <br/> <br/> Para o novo módulo, será gerado automaticamente um novo nome anexando um número ao final do nome do módulo usado para criar um novo.',
            'deletebtn' => 'Clique em <b>Excluir</b> para excluir este módulo.',
            'name' => 'Este é o <b>Nome</b> do módulo atual. <br/> <br/> O nome deve ser alfanumérica e deve começar com uma letra e sem conter espaços. (Exemplo: HR_Management)',
            'label' => 'Este é o <b>Rótulo</b> que irá aparecer no separador de navegação do módulo.',
            'savebtn' => 'Clique em <b>Salvar</b> para salvar todos os dados informados relacionados ao módulo.',
            'type_basic' => 'O tipo de modelo <b>Básico</b> fornece campos básicos, como o Nome, Atribuído a, Equipa, Data de Criação e Descrição.',
            'type_company' => 'O tipo de modelo <b>Companhia</b> fornece campos específicos de organizações, como Nome da Companhia, Indústria e Morada de Facturação.<br/><br/>Usar este modelo para criar módulos que são similares ao módulo padrão Entidades.',
            'type_issue' => 'O tipo de modelo <b>Questão</b> fornece campos específicos de Ocorrências e Bugs, como por exemplo Número, Estado, Prioridade e Descrição.<br/><br/>Usar este modelo para criar módulos que são similares aos módulos padrão Ocorrências e Bug Tracker.',
            'type_person' => 'O tipo de modelo <b>Pessoa</b> fornece campos específicos de indivíduos, como a Saudação, Título, Nome, Morada e Número de Telefone.<br/><br/>Usar este modelo para criar módulos que são similares aos módulos padrão Contactos e Leads.',
            'type_sale' => 'O tipo de modelo  <b>Venda</b> fornece campos específicos de oportunidade, como a Fonte da Lead, Fase, Quantidade e Probabilidade.<br/><br/>Usar este modelo para criar módulos que são similares ao módulo padrão Oportunidades.',
            'type_file' => 'O tipo de modelo  <b>Arquivo</b> fornece campos específicos de Documento, como o Nome do Arquivo, tipo de Documento e Data de Publicação.<br><br>Usar este modelo para criar módulos que são similares ao módulo padrão Documentos.',

        ),
        'dropdowns' => array(
            'default' => 'Existem duas colunas exibidas à esquerda. A coluna da direita, rotulada de Layout atual ou Pré-visualização de Layout é onde pode alterar o layout do módulo. A coluna da esquerda, intitulada Ferramentas, contém elementos úteis e ferramentas para utilizar aquando a edição do layout.<br/><br/>Se a área do layout tem o título de Layout atual então está a trabalhar numa cópia do layout usado atualmente pelo módulo para exibição.<br/><br/>Se é intitulada Pré-visualização de Layout então está a trabalhar numa cópia criada anteriormente quando o botão Guardar foi clicado, que poderia já ter sido mudada da versão visualizada pelos utilizadores deste módulo.',
            'editdropdown' => 'Listas das Caixas de Selecção podem ser usadas em campos de caixas de selecção padrão ou personalizadas em qualquer módulo.<br/><br/>Fornecer um <b>Nome</b> para a lista da caixa de selecção.<br/><br/>Se algum pacote de idioma estiver instalado na aplicação, poderá Selecionar o <b>Idioma</b> para usar os itens da lista.<br/><br/>No campo <b>Nome do Item</b>, fornecer um nome para a opção na lista da caixa de selecção.  Este nome não irá aparecer na lista da caixa de selecção que é visível aos utilizadores.<br/><br/>Depois de fornecer o nome do item e o rótulo, clicar <b>Adicionar</b> para adicionar o item à lista da caixa de selecção.<br/><br/>Para reordenar os itens na lista, arrastar e largar os itens na posição desejada.<br/><br/>Para editar um rótulo de um item, clicar no <b>ícone de Edição</b>, e inserir um novo rótulo. Para apagar um item da lista da caixa de selecção, clicar no  <b>ícone de Eliminação</b>.<br/><br/>Para voltar atrás na alteração feita a um rótulo, clicar <b>Voltar atrás</b>. Para voltar a fazer a alteração que foi desfeita, clicar <b>Voltar a fazer</b>.<br/><br/>Clicar <b>Guardar</b> para guardar a lista da caixa de selecção.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos no <b>Subpainel</b> aparecem aqui. <br><br>A coluna <b>Padrão</b> contém os campos que são exibidos no Subpainel. <br/> <br/> A coluna <b>Oculto</b> contém campos que podem ser adicionados à coluna Padrão.'
        ,
            'savebtn' => 'Clique em <b>Salvar & Implementar</b> para salvar e ativar as alterações feitas no módulo.',
            'historyBtn' => 'Clicar em <b>Ver Histórico </b> para ver e restaurar um layout gravado previamente do histórico.',
            'historyDefault' => 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
            'Hidden' => 'Campos escondidos são campos que não estão visíveis aos utilizadores para utilização nas listagens.',
            'Default' => 'Campos por defeito são exibidos aos utilizadores que não criaram uma lista personalizada.',

        ),
        'listViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos na <b>Exibição em Lista</b> aparecem aqui. <br><br> A coluna <b>Padrão</b> contém os campos que são exibidos, por padrão, na Exibição em Lista. <br/> <br/> A coluna <b>Disponível</b> contém campos que um usuário pode selecionar na Pesquisa para criar uma Exibição em Lista personalizada. <br/> <br/> A coluna <b>Oculto</b> contém campos que podem ser adicionados às colunas Padrão ou Disponível.'
        ,
            'savebtn' => 'Clique em <b>Salvar & Implementar</b> para salvar e ativar as alterações feitas no módulo.',
            'historyBtn' => 'Clique em <b>Exibir Histórico</b> para visualizar e restaurar um layout previamente salvo do histórico. <br><br>A função <b>Restaurar</b>, em <b>Exibir Histórico</b> restaura o posicionamento do campo dentro dos layouts previamente salvos. Para alterar os rótulos dos campos, clique no ícone Editar ao lado de cada campo.',
            'historyDefault' => 'Clique em <b>Restaurar Padrão</b> para restaurar a exibição ao seu layout original. <br><br><b>Restaurar Padrão</b> apenas restaura o posicionamento do campo no layout original. Para alterar os rótulos de campo, clique no ícone Editar ao lado de cada campo.',
            'Hidden' => 'Campos <b>Ocultos</b> não estão disponíveis, no momento, para que os usuários os vejam nas Exibições em Lista.',
            'Available' => 'Campos <b>Disponíveis</b> não são exibidos por padrão, mas podem ser adicionados às Exibições em Lista pelos usuários.',
            'Default' => 'Campos <b>Padrões</b> aparecem nas Exibições em LIsta que não foram personalizados pelos usuários.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos na <b>Exibição em Lista</b> aparecem aqui. <br><br>Na coluna <b>Padrão</b> estão os campos que são exibidos por padrão na Exibição em Lista. <br/> <br/> Na coluna <b>Oculto</b> estão os campos que podem ser adicionados às colunas Padrão ou Disponível.'
        ,
            'savebtn' => 'Clique em <b>Salvar & Implementar</b> para salvar e ativar as alterações feitas no módulo.',
            'historyBtn' => 'Clique em <b>Exibir Histórico</b> para visualizar e restaurar um layout previamente salvo do histórico. <br><br>A função <b>Restaurar</b>, em <b>Exibir Histórico</b> restaura o posicionamento do campo dentro dos layouts previamente salvos. Para alterar os rótulos dos campos, clique no ícone Editar ao lado de cada campo.',
            'historyDefault' => 'Clique em <b>Restaurar Padrão</b> para restaurar a exibição ao seu layout original. <br><br><b>Restaurar Padrão</b> apenas restaura o posicionamento do campo no layout original. Para alterar os rótulos de campo, clique no ícone Editar ao lado de cada campo.',
            'Hidden' => 'Campos <b>Ocultos</b> não estão disponíveis, no momento, para que os usuários os vejam nas Exibições em Lista.',
            'Default' => 'Campos <b>Padrões</b> aparecem nas Exibições em LIsta que não foram personalizados pelos usuários.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos em <b>Pesquisar</b> são exibidos aqui. <br><br>Na coluna <b>Padrão</b> estão os campos que serão exibidos no formulário Pesquisar. <br/> <br/> Na coluna <b>Oculto</b> estão os campos disponíveis para que você, como administrador, adicione ao formulário de Pesquisa.'
        ,
            'savebtn' => 'Clique em <b>Salvar & Implementar</b> para salvar e ativar todas as alterações',
            'Hidden' => 'Campos <b>Ocultos</b> não aparecem na Pesquisa.',
            'historyBtn' => 'Clique em <b>Exibir Histórico</b> para visualizar e restaurar um layout previamente salvo do histórico. <br><br>A função <b>Restaurar</b>, em <b>Exibir Histórico</b> restaura o posicionamento do campo dentro dos layouts previamente salvos. Para alterar os rótulos dos campos, clique no ícone Editar ao lado de cada campo.',
            'historyDefault' => 'Clique em <b>Restaurar Padrão</b> para restaurar a exibição ao seu layout original. <br><br><b>Restaurar Padrão</b> apenas restaura o posicionamento do campo no layout original. Para alterar os rótulos de campo, clique no ícone Editar ao lado de cada campo.',
            'Default' => 'Campos <b>Padrões</b> aparecem na Pesquisa.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'A área de <b>Layout</b> contém os campos que são exibidos atualmente na tela de <b>Detalhes</b>. <br/> <br/> A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos que podem ser adicionados ao layout. <br><br>Faça alterações no layout arrastando e soltando elementos e campos entre a <b>Caixa de Ferramentas</b> e o <b>Layout</b> e dentro do próprio layout. <br> <br>Para remover um campo do layout, arraste o campo para a <b>Lixeira</b>. O campo estará disponível na Caixa de Ferramentas para ser adicionado ao layout.'
        ,
            'defaultquickcreate' => 'A área de <b>Layout</b> contém os campos que estão atualmente exibidos dentro do formulário <b>Criação Rápida</b>.<br/><br/>O formulário de Criação Rápida aparece nos sub-painéis para o módulo quando o botão Criar é clicado.<br/><br/>As <b>Ferramentas</b> contêm a <b>Reciclagem</b> e todos os campos e elementos de layout que podem ser adicionados ao layout.<br/><br/>Para efectuar alterações ao layout arrastar e largar elementos e campos entre as <b>Ferramentas</b> e o  <b>Layout</b> e dentro do próprio layout.<br/><br/>Para remover um campo do layout, arrastar o campo para a <b>Reciclagem</b>. O campo será estará então disponível nas Ferramentas para adicionar ao layout.&#39;<br />    . &#39;<br/><br/><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indica um campo Dependente que pode ou não ser visível com base em um valor de uma fórmula.<br/><img src="themes/default/images/SugarLogic/icon_calculated.png"/>Indica um campo Calculado cujo valor será determinado automaticamente com base em uma fórmula.'
        ,
            //this defualt will be used for edit view
            'default' => 'A área de <b>Layout</b> contém os campos que são exibidos atualmente na  <b>Edição</b>. <br/> <br/> A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos que podem ser adicionados ao layout. <br><br>Faça alterações no layout arrastando e soltando elementos e campos entre a <b>Caixa de Ferramentas</b> e o <b>Layout</b> e dentro do próprio layout. <br> <br>Para remover um campo do layout, arraste o campo para a <b>Lixeira</b>. O campo estará disponível na Caixa de Ferramentas para ser adicionado ao layout.'
        ,
            'saveBtn' => 'Clique em <b>Salvar</b> para preservar as alterações feitas no layout desde a última vez que você o salvou. <br><br>As alterações não serão exibidas no módulo até que você Implemente as alterações salvas.',
            'historyBtn' => 'Clique em <b>Exibir Histórico</b> para visualizar e restaurar um layout previamente salvo do histórico. <br><br>A função <b>Restaurar</b>, em <b>Exibir Histórico</b> restaura o posicionamento do campo dentro dos layouts previamente salvos. Para alterar os rótulos dos campos, clique no ícone Editar ao lado de cada campo.',
            'historyDefault' => 'Clique em <b>Restaurar Padrão</b> para restaurar a exibição ao seu layout original. <br><br><b>Restaurar Padrão</b> apenas restaura o posicionamento do campo no layout original. Para alterar os rótulos de campo, clique no ícone Editar ao lado de cada campo.',
            'publishBtn' => 'Clique em <b>Save & Implementar</b> para salvar todas as alterações feitas no layout desde a última vez que você o salvou e para tornar as alterações ativas no módulo. <br><br>O layout será exibido imediatamente no módulo.',
            'toolbox' => 'A <b>Caixa de Ferramentas</b> contém: a <b>Lixeira</b>, os elementos de layout adicionais e o conjunto de campos disponíveis para adicionar ao layout. <br/> <br/> Os campos e elementos de layout na Caixa de Ferramentas podem ser arrastados e soltos ao layout. E, os campos e elementos de layout podem ser arrastados e soltos do layout para a Caixa de Ferramentas. <br><br>Os elmentos de layout são os <b>Painéis</b> e as <b>Linhas</b>. Adicione uma nova linha ou um novo painel ao layout para disponibilizar locais adicionais no layout para os campos. <br/> <br/> Arraste e solte qualquer campo da Caixa de Ferramentas ou layout sobre a posição ocupada por outro campo para trocar os locais dos dois campos. <br/> <br/> O campo de <b>Preenchimento</b> cria um espaço em branco no layout onde é colocado.',
            'panels' => 'A área de <b>Layout</b> oferece uma visão de como o layout será exibida dentro do módulo, quando as alterações feitas no layout forem implementadas. <br/> <br/> É possível reposicionar os campos, linhas e painéis, arrastando e soltando os elementos no local desejado. <br/> <br/> Para remover, arraste e solte os elementos sobre a <b>Lixeira</b>, na Caixa de Ferramentas, ou para adicionar novos elementos e campos, arraste o elemento desejado da <b>Caixa de Ferramentas</b> e o solte no local desejado no layout.',
            'delete' => 'Arrastar e largar qualquer elemento aqui para o remover do layout',
            'property' => 'Editar o rótulo exibido para este campo. <br/><b>Ordem dos Separadores</b> controla em que ordem a tecla tab muda entre os campos.',
        ),
        'fieldsEditor' => array(
            'default' => 'Os <b>Campos</b>, que estão disponíveis para o módulo, são listados aqui pelo Nome do Campo. <br><br>Campos personalizados criados para o módulo aparecem acima dos campos padrões disponíveis para o módulo. <br> <br>Para editar um campo, clique no <b>Nome do Campo</b>. <br/> <br/> Para criar um campo novo, clique em <b>Adicionar Campo</b>.',
            'mbDefault' => 'Os <b>Campos</b> que estão disponíveis para o módulo, estão listados aqui pelo Nome do Campo.<br><br>Para configurar as propriedades para um campo, clique no Nome do Campo.<br><br>Para criar um campo novo, clique em <b>Adicionar Campo</b>. O rótulo e outras propriedades do novo campo poderão ser editadas posteriormente clicando no Nome do Campo.<br><br> Depois que o módulo for implementado, os novos campos criados no Construtor de Módulos serão considerados como campos padrões no Estúdio.',
            'addField' => 'Selecione um <b>Tipo de Dados</b> para o novo campo. Este tipo determina quais caracteres poderão ser inseridos no campo. Por exemplo, apenas números inteiros poderão ser inseridos em campos do tipo de dados Inteiro.<br><br> Informe um <b>Nome</b> para o campo. O nome deve ser alfanumérico e não pode conter espaços. Underscores são válidos.<br><br> O <b>Rótulo de Exibição</b> é o rótulo que será exibido para o campo nos layouts do módulo. O <b>Rótulo de Sistema</b> é usado para referenciar o campo no código.<br><br> Dependendo do tipo de dados selecionado para o campo, algumas ou todas as seguintes propriedades podem ser definidas:<br><br> <b>Texto de Ajuda</b> aparece temporariamente quando o usuário passar o mouse por cima do campo e pode ser usado para informar qual o tipo de entrada desejado.<br><br> <b>Comentários</b> é visível apenas no Studio e/ou no Construtor de Módulos. Pode ser utilizado para descrever o campo para administradores.<br><br> <b>Valor Padrão</b> aparecerá no campo. Os usuários poderão inserir um novo valor ou usar o valor padrão do campo.<br><br> Marque a caixa de seleção <b>Atualização em Massa</b> para que seja possível utilizar a funcionalidade de Atualização em Massa.<br><br>O valor do <b>Tamanho Máximo</b> determina o número máximo de caracteres que podem ser inseridos no campo.<br><br> Marque a caixa de seleção <b>Campo Obrigatório</b> para tornar o campo obrigatório. Um valor deverá ser informado no campo para que seja possível salvar o registro.<br><br> Marque a caixa de seleção <b>Reportável</b> para permitir que o campo seja usado por filtros e exiba os dados em Relatórios.<br><br> Marque a caixa de seleção <b>Auditoria</b> para permitir a rastreabilidade de modificações no campo em Log de Alterações.<br><br>Selecione a opção <b>Importável</b> para permitir, negar ou solicitar que o campo seja importado no Assistente de Importação<br><br>Selecione a opção <b>Mesclar Duplicados</b> para habilitar ou desabilitar as funcionalidades de Mesclar Duplicados e Encontrar Duplicados.<br><br>Propriedades adicionais podem ser definidas para alguns tipos de dados.',
            'editField' => 'As propriedades deste campo podem ser personalizadas.<br/><br/>Clicar <b>Clonar</b> para criar um novo campo com as mesmas propriedades.',
            'mbeditField' => 'O <b>Rótulo de Exibição</b> de um campo modelo pode ser personalizado. As outras propriedades do campo não poderão ser personalizadas.<br/><br/>Clicar <b>Clonar</b> para criar um novo campo com as mesmas propriedades.<br/><br/>Para remover o campo modelo para que não seja mostrado no módulo, remover o campo dos <b>Layouts</b> apropriados.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporte as personalizações feitas no Estúdio ao criar pacotes que podem ser carregados em outra instância do SuiteCRM através do <b>Carregador de Módulo</b>. <br><br>Primeiro, forneça um <b>Nome de Pacote</b>.  Você também poderá informar o <b>Autor</b> e <b>Descrição</b> do pacote. <br><br>Selecione o(s) módulo(s) que contêm as personalizações que você deseja exportar. Somente os módulos contendo personalizações serão exibidos para seleção. <br><br>Em seguida clique em <b>Exportar</b> para criar um arquivo. zip para o pacote que contém as personalizações.',
            'exportCustomBtn' => 'Clicar <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo as personalizações do que pretende exportar.',
            'name' => 'Este é o <b>Nome</b> do pacote. Este nome será exibido durante a instalação.',
            'author' => 'Este é o <b>Autor</b> que é exibida durante a instalação, como o nome da entidade que criou o pacote. O autor pode ser um indivíduo ou uma empresa.',
            'description' => 'A <b>Descrição</b> do pacote que é exibida no Carregador de Módulo depois do pacote ser carregado para instalação no Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bem-vindo à área de <b>Ferramentas do Programador</b>. <br/><br/>Use as ferramentas desta área para criar e gerir módulos padrão e personalizados e campos.',
            'studioBtn' => 'Use o <b>Estúdio</b> para personalizar módulos implementados.',
            'mbBtn' => 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
            'sugarPortalBtn' => 'Use o <b>Editor do Portal do SuiteCRM</b> para gerenciar e personalizar o Portal do SuiteCRM.',
            'dropDownEditorBtn' => 'Use o <b>Editor de Caixa de Selecção</b> para adicionar e editar caixas de selecção globais para campos de caixa de selecção.',
            'appBtn' => 'Use o modo de Aplicação para personalizar várias propriedades do programa, como por exemplo quantos relatórios TPS são exibidos na página principal',
            'backBtn' => 'Voltar ao passo anterior.',
            'studioHelp' => 'Use o <b>Studio</b> para personalizar módulos instalados.',
            'moduleBtn' => 'Clicar para editar este módulo.',
            'moduleHelp' => 'Selecionar o componente do módulo que pretenda editar',
            'fieldsBtn' => 'Edite a informação que é gravada no módulo controlando os <b>Campos</b> no módulo.<br/><br/>Pode editar e criar campos personalizados aqui.',
            'labelsBtn' => 'Edite os <b>Rótulos</b> para exibir os valores neste módulo.',
            'relationshipsBtn' => 'Adicionar uma nova ou ver as <b>Relações</b> existentes no módulo.',
            'layoutsBtn' => 'Personalize os <b>Layouts</b> da Edição, Detalhe, Listagem e pesquisa.',
            'subpanelBtn' => 'Edite qual a informação que é exibida nos sub-painéis deste módulo.',
            'portalBtn' => 'Personalize o módulo <b>Layouts</b> que aparece no <b>Portal do SuiteCRM</b>.',
            'layoutsHelp' => 'Selecionar o <b>Layout a editar</b>.<br/<br/>Para alterar o layout que contenha campo de dados para inserir dados, clique em <b>Edição</b>.<br/><br/>Para alterar o layout que exiba os dados inseridos nos campos da Edição, clique em <b>Detalhes</b>.<br/><br/>Para alterar as colunas que aparecem na lista por defeito, clique na <b>Listagem</b>.<br/><br/>Para alterar o layout do formulário de pesquisa Básica e Avançada, clique <b>Pesquisa</b>.',
            'subpanelHelp' => 'Selecione um <b>Sub-painel</b> para editar.',
            'newPackage' => 'Clicar em <b>Novo Pacote</b> para criar um novo pacote.',
            'exportBtn' => 'Clicar <b>Exportar Personalizações</b> para criar o pacote contendo as personalizações feitas no Studio para módulos específicos.',
            'mbHelp' => '<b>Bem vindo ao Construtor de Módulos.</b><br/><br/>Use o <b>Construtor de Módulos</b> para criar pacotes que contenham módulos personalizados baseados em objectos padrão ou personalizados. <br/><br/>Para começar, clique em <b>Novo Pacote</b> para criar um novo pacote, ou Selecione um pacote a editar.<br/><br/> Um <b>pacote</b> funciona como um recipiente para módulos personalizados, que fazem parte de todo um projecto. O pacote pode conter um ou mais módulos personalizados que podem estar relacionados um com os outros ou com módulos da aplicação. <br/><br/>Exemplos: Poderá querer criar um pacote que contenha um módulo personalizado que está relacionado com o módulo padrão de Entidades. Ou poderá querer criar um pacote que contenha novos módulos que funcionem juntos como um projecto que estão relacionados entre si e com outros módulos da aplicação.',
            'viewBtnEditView' => 'Personalizar o layout da <b>Edição</b> do módulo.<br/><br/>A Edição é um formulário que contem os campos para guardar os dados inseridos pelo utilizador.',
            'viewBtnDetailView' => 'Customizar o layout da tela de <b>Detalhes</b> do módulo. <br><br>a tela de Detalhes exibe os dados inseridos nos campos pelo usuário.',
            'viewBtnDashlet' => 'Personalize o <b>Dashlet do SuiteCRM</b>, incluindo os Dashlets de Exibição em LIsta e Pesquisa. <br><br>O Dashlet do SuiteCRM estará disponível para ser adicionado às páginas no módulo Início.',
            'viewBtnListView' => 'Personalizar o layout da <b>Listagem</b> do layout.<br/><br/>Os resultados da Pesquisa aparecem na Listagem.',
            'searchBtn' => 'Personalizar o layout da <b>Pesquisa</b>.<br/><br/>Determinar quais os campos que podem ser usados para filtrar registros que aparecem na Listagem.',
            'viewBtnQuickCreate' => 'Personalizar o layout do <b>Criar Rápido</b> do módulo.<br/><br/>O formulário do Criar Rápido aparece em sub-painéis e no módulo de Emails.',
            'addLayoutHelp' => "Para criar um layout customizado para um Grupo de Segurança, inicie selecionando o Grupo de Segurança apropriado e o layout do qual deseja copiar.",

            'searchHelp' => 'Selecione um layout de <b>Pesquisa</b> para editar.',
            'dashletHelp' => 'Os layouts de <b>Dashlet do SuiteCRM</b> disponíveis para personalização são exibidos aqui. <br><br>O Dashlet do SuiteCRM estará disponível para ser adicionaod às páginas no módulo Início.',
            'DashletListViewBtn' => 'O <b>Dashlet de Exibição em Lista do SuiteCRM </b> exibe os registros com base nos filtros de pesquisa do Dashlet.',
            'DashletSearchViewBtn' => 'O <b>Dashlet de Pesquisa do SuiteCRM</b> filtra os registros para o Dashlet de Exibição em Lista do SuiteCRM.',
            'popupHelp' => 'Os layouts de <b>Popup</b> que podem ser personalizados aparecem aqui.<br/>',
            'PopupListViewBtn' => 'A <b>Listagem do Popup</b> mostra registros baseados na pesquisa do Popup.',
            'PopupSearchViewBtn' => 'A <b>Pesquisa do Popup</b> mostra registros para a listagem do Popup.',
            'BasicSearchBtn' => 'Personalizar o formulário da <b>Pesquisa Básica</b> que aparece no separador da Pesquisa Básica na área de Pesquisa para o módulo.',
            'AdvancedSearchBtn' => 'Personalizar o formulário da <b>Pesquisa Avançada</b> que aparece no separador da Pesquisa Avançada na área de Pesquisa para o módulo.',
            'portalHelp' => 'Gerenciar e personalizar o <b>Portal do SuiteCRM</b>.',
            'SPUploadCSS' => 'Carregar uma <b>Folha de Estilo</b> para o Portal do SuiteCRM.',
            'SPSync' => '<b>Sincronize</b> as personalizações com a instância do Portal do SuiteCRM.',
            'Layouts' => 'Personalize os <b>Layouts</b> dos módulos do Portal do SuiteCRM.',
            'portalLayoutHelp' => 'Os módulos no Portal do SuiteCRM são exibidos nesta área. <br><br>Selecione um módulo para editar os <b>Layouts</b>.',
            'relationshipsHelp' => 'Todos os <b>Relacionamentos</b> existentes entre o módulo e outros módulos implementados são exibidos aqui. <br><br>O <b>Nome</b> do relacionamento é gerado pelo sistema. <br> <br>O <b>Módulo Principal</b>  é o módulo detentor dos relacionamentos.  Por exemplo, todas as propriedades dos relacionamentos, nos quais o módulo de Contas é o módulo principal, são armazenadas nas tabelas de Contas no banco de dados. <br><br>O <b>Tipo</b> é o tipo de relacionamento existente entre o módulo Principal e o <b>Módulo Relacionado</b>. <br><br>Clique no título da coluna para classificar pela coluna. <br><br>Clique na linha do relacionamento para exibir as propriedades associadas ao relacionamento. <br><br> Clique em <b>Adicionar Relacionamento</b> para criar um novo relacionamento.<br><br>Relacionamentos podem ser criados entre qualquer par de módulos implementados.',
            'relationshipHelp' => '<b>Relacionamentos</b> podem ser criados entre o módulo e o outro módulo implementado. <br><br>Relacionamentos são visualmente expressos através de subpainéis e campos referenciados nos registos do módulo. <br><br>Selecione uma dos seguintes <b>Tipos</b> de relacionamentos para o módulo: <br><br><b>Um-para-Um</b>-Ambos os módulos conterão campos referenciados. <br> <br><b>Um-para-Muitos</b> - O registro do Módulo Principal conterá um subpainel e registro do módulo relacionado conterá um campo referenciado. <br><br><b>Muitos-para-Muitos</b> - Registros de ambos os módulos exibirão subpainéis. <br> <br>Selecione o <b>Módulo Relacionado</b> para o relacionamento. <br><br>Se o tipo de relacionamento envolver subpainéis, selecione a visualização do subpainel para os módulos apropriados. <br> <br>, Clique em <b>Salvar</b> para criar o relacionamento.',
            'convertLeadHelp' => 'Aqui você pode adicionar módulos para o layout da tela de conversão e modificar os layouts dos existentes.<br/>
Você pode reordenar os módulos arrastando suas linhas na tabela.<br/><br/>
<b>Módulo:</b> O nome do módulo.<br/><br/>
<b>Necessário:</b> Módulos necessários devem ser criados ou selecionados antes que o Potencial possa ser convertido.<br/><br/>
<b>Copiar dados:</b> Se marcado, campos do Potencial serão copiados para os campos com o mesmo nome no novo registro a ser criado.<br/<br/>
<b>Permitir seleção:</b> Módulos com um campo de relacionamento em Contatos podem ser selecionados em vez de criados durante o processo de conversão do Potencial.<br/><br/>
<b>Editar:</b> Modificar o layout de conversão para este módulo. <br/><br/>
<b>Excluir:</b> Excluir este módulo do layout de conversão. <br/><br/>',
            'editDropDownBtn' => 'Editar um Menu de Selecção global',
            'addDropDownBtn' => 'Adicionar um novo Menu de Selecção global',
        ),
        'fieldsHelp' => array(
            'default' => 'Os <b>Campos</b> no módulo estão listados aqui pelo Nome do Campo. <br><br>O modelo do módulo inclui um conjunto pré-determinado de campos. <br> <br>Para criar um campo novo, clique em <b>Adicionar Campo</b>. <br><br>Para editar um campo, clique no <b>Nome do Campo</b>. <br/> <br/> Depois que o módulo for implantado, os novos campos criados no Construtor de Módulos, assim como os campos do modelo, serão considerados como campos padrões no Estúdio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Os <b>Relacionamentos</b> que foram criados entre o módulo e outros módulos são exibidos aqui. <br><br>O <b>Nome</b> do relacionamento é gerado pelo sistema. <br> <br>O <b>Módulo Principal</b> é o módulo detentor dos relacionamentos. As propriedades do relacionamento são armazenadas nas tabelas do banco de dados pertencentes ao módulo principal. <br><br>O <b>Tipo</b> é o tipo de relacionamento existente entre o módulo Principal e o <b>Módulo Relacionado</b>. <br> <br>Clique no título da coluna para classificar pela coluna. <br><br>Clique na linha do relacionamento para exibir e editar as propriedades associadas ao relacionamento. <br><br> Clique em <b>Adicionar Relacionamento</b> para criar um novo relacionamento.',
            'addrelbtn' => 'ajuda para adicionar relações.',
            'addRelationship' => '<b>Relações</b> podem ser criadas entre o módulo e outro módulo personalizado ou um módulo implementado.<br/><br/> Relações são expressadas visualmente através de sub-painéis e relaciona campos nos registros do módulo.<br/><br/>Selecionar um dos seguintes <b>Tipos</b> de relações para o módulo:<br/><br/> <b>Um-para-Um</b> - Ambos os registros dos módulos irão ter campos relacionados.<br/><br/> <b>Um-para-Muitos</b> - Os registros do Módulo Primário irão ter um sub-painel e os registros do Módulo Relacionado irão ter um campo relacionado.<br/><br/> <b>Muitos-para-Muitos</b> - Ambos os registros dos módulos irão mostrar sub-painéis.<br/><br/> Selecionar o <b>Módulo Relacionado</b> para a relação.<br/><br/>Se o tipo de relação involver sub-painéis, escolher uma visualização de sub-painel para os módulos apropriados.<br/><br/> Clicar <b>Guardar</b> para criar a relação.',
        ),
        'labelsHelp' => array(
            'default' => 'Os <b>Rótulos</b> para os campos e outros títulos no módulo podem ser alterados. <br><br>Edite o rótulo clicando no do campo, informando um novo rótulo e clicando em <b>Salvar</b>. <br> <br>Se algum pacote de idioma estiver instalado no aplicativo, você poderá selecionar o <b>Idioma</b> que será  utilizado para os rótulos.',
            'saveBtn' => 'Clique em <b>Salvar</b> para salvar todas as alterações.',
            'publishBtn' => 'Clique em <b>Salvar & Implantar</b> para salvar e ativar todas as alterações.',
        ),
        'portalSync' => array(
            'default' => 'Digite a <b>URL do Portal do SuiteCRM</b> da instância a atualizar e clique em <b>Ir</b>. <br><br>Em seguida, informe um usuário e senha do SuiteCRM válidos e clique em <b>Iniciar Sincronização</b>. <br> <br>As personalizações feitas para os <b>Layouts</b> do Portal do SuiteCRM, assim como a <b>Folha de Estilos</b>, caso carregada, serão transferidos paraa instância do portal especificado .',
        ),
        'portalStyle' => array(
            'default' => 'Você poderá personalizar a aparência do Portal do SuiteCRM, usando uma folha de estilo. <br><br>Selecione uma <b>Folha de Estilo</b> para carregar. <br> <br>A folha de estilo será implementada na próxima vez que a sincronização for executada com o Portal do SuiteCRM.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para começar um projecto, clicar em <b>Novo Pacote</b> para criar um novo pacote para albergar o(s) seu(s) módulo(s) personalizado(s). <br/><br/>Cada pacote pode conter um ou mais módulos.<br/><br/>Por exemplo, poderá querer criar um pacote contendo um módulo personalizado que está relacionado com o módulo padrão Entidades. Ou poderá querer criar um pacote contendo vários módulos novos que trabalhem junto como um projecto e que estão relacionados entre si e com outros módulos já existentes na aplicação.',
            'somepackages' => 'Um <b>pacote</b> funciona com um recipiente para módulos personalizados que fazem parte de um projecto. O pacote pode conter um ou mais <b>módulos</b> personalizados que podem estar relacionados entre si ou com outros módulos da aplicação.<br/><br/>Depois de criar um pacote para o projecto, pode criar módulos para o pacote logo de seguida, ou poderá voltar ao Construtor de Módulos mais tarde para completar o projecto.<br/><br/>Quando o projecto é completado, pode <b>Implementar</b> o pacote para instalar os módulos personalizados na aplicação.',
            'afterSave' => 'Seu novo pacote deve conter pelo menos um módulo. Você pode criar um ou mais módulos personalizados para o pacote. <br/> <br/> Clique em <b>Novo Módulo</b> para criar um módulo personalizado para este pacote. <br/> <br/> Após a criação de pelo menos um módulo, você poderá publicar ou implantar o pacote para torná-lo disponível na sua instância e/ou instâncias de outros usuários. <br/> <br/> Para implantar o pacote, em uma única etapa, dentro de sua instância de SuiteCRM, clique em <b>Implantar</b>. <br><br>Clique em <b>Publicar</b> para salvar o pacote em um arquivo .zip. Depois que o arquivo. zip for salvo em seu sistema, use o <b>Carregador de Módulo</b> para carregar e instalar o pacote na sua instância do SuiteCRM.  <br/> <br/> Você poderá distribuir o arquivo para que outros usuários carreguem e instalem o pacote em suas instâncias do SuiteCRM.',
            'create' => 'Um <b>Pacote</b> atua como um contêiner para módulos personalizados, os quais fazem parte de um projeto. O pacote pode conter um ou mais <b>módulos</b> personalizados que podem ser relacionados uns aos outros ou demais módulos no aplicativo. <br/> <br/> Depois de criar um pacote para o seu projeto, você poderá criar módulos para o pacote imediatamente, ou você pode retornar ao Construtor de Módulos em um momento posterior para finalizar o projeto.',
        ),
        'main' => array(
            'welcome' => 'Use as <b>Ferramentas de Programador</b> para criar e gerir módulos padrão e personalizados e campos. <br/><br/>Para gerir módulos na aplicação, clicar <b>Studio</b>. <br/><br/>Para criar módulos personalizados, clicar <b>Construtor de Módulos</b>.',
            'studioWelcome' => 'Todos os módulos instalados, incluindo os padrão e objectos carregados por módulos, são personalizáveis dentro do Studio.'
        ),
        'module' => array(
            'somemodules' => "Como o pacote atual contém pelo menos um módulo, você poderá <b>Implantar</b> os módulos do pacote na sua instância de SuiteCRM, ou <b>Publicar</b> o pacote para ser instalado na instância atual do SuiteCRM ou em outra instância usando o <b>Carregador de Módulos</b>. <br/> <br/> Para instalar o pacote diretamente na sua instância do SuiteCRM, clique em <b>Implantar</b>. <br><br>Para criar um arquivo. zip do pacote, que poderá ser carregado e instalado na instância atual do SuiteCRM e outras instâncias usando o <b>Carregador de Módulos</b>, clique em <b>Publicar</b>. <br/> <br/> Você poderá construir os módulos para este pacote em fases, e publicá-los ou implantá-los quando tudo estiver pronto. <br/> <br/> Após a publicação ou implantação do pacote, você poderá continuar a alterar as propriedades do pacote e personalizar módulos.  Em seguida, publique ou implante novamente o pacote para aplicar as alterações.",
            'editView' => 'Aqui pode editar os campos existentes. Pode remover qualquer dos campos existentes ou adicionar campos disponíveis no painel esquerdo.',
            'create' => 'Ao escolher o <b>Tipo</b> de módulo que você deseja criar, tenha em mente os tipos de campos que você gostaria de ter no módulo. <br/> <br/> Cada modelo de módulo contém um conjunto de campos referentes ao tipo de módulo descrito pelo título. <br/> <br/> <b>Básico</b> - fornece campos básicos que aparecem em módulos padrões, tais como: campos de Nome, Atribuído a, Equipe, Data de Criação e Descrição. <br/> <br/> <b>Empresa</b> - fornece campos específicos da organização, tais como: Nome da Empresa, da Indústria e Endereço de Faturamento.  Use esse modelo para criar módulos que são semelhantes ao módulo padrão de Contas. <br/> <br/> <b>Pessoa</b> - fornece campos específicos do indivíduo, como: Saudação, Cargo, Nome, Endereço e Número de Telefone.  Use esse modelo para criar módulos que são semelhantes aos módulos padrões de Contatos e Leads. <br/> <br/> <b>Ocorrência</b> - fornece campos específicos a bugs e ocorrências, como: Número, Status, Prioridade e Descrição.  Use esse modelo para criar módulos que são semelhantes aos módulos padrões de Ocorrências e Bugs. <br/> <br/> Nota: Depois de criar o módulo, você poderá editar os rótulos dos campos fornecidos pelo modelo, assim como criar campos personalizados para adicionar aos layouts do módulo.',
            'afterSave' => 'Personalize o módulo para atender às suas necessidades: editando e criando campos, estabelecendo relacionamentos com outros módulos e organizando os campos nos layouts. <br/> <br/> Para exibir os campos do modelo e gerenciar campos personalizados no módulo, clique em <b>Exibir Campos</b>. <br/> <br/> Para criar e gerenciar relacionamentos entre o módulo e outros módulos, já existentes na aplicação ou dentro do mesmo pacote, clique em <b>Exibir Relacionamentos</b>. <br/> <br/> Para editar os layouts do módulo, clique em <b>Exibir Layouts</b>. Você pode alterar os layouts das telas de Detalhes, Edição e Lista para o módulo, da mesma maneira que você faria dentro do Estúdio, para módulos já existentes no aplicativo. <br/> <br/> Para criar um módulo com as mesmas propriedades que o módulo atual, clique em <b>Duplicar</b>.  Em seguida, você pode personalizar o novo módulo.',
            'viewfields' => 'Os campos no módulo podem ser personalizados para servir as necessidades.<br/><br/>Não é possível apagar os campos padrão, mas é possível remove-los dos layouts adequados dentro das páginas de Layout.<br/><br/>Pode criar rapidamente novos campos que têm propriedades similares dos campos existentes clicando em <b>Clonar</b> no formulário das <b>Propriedades</b>. Inserir quaisquer novas propriedades e clicar <b>Guardar</b>.<br/><br/>É recomendado que se defina todas as propriedades para os campos padrão e os campos personalizados antes de publicar e instalar o pacote que contém o módulo personalizado.',
            'viewrelationships' => 'Pode criar relações muitos-para-muitos entre o módulo atual e outros módulos do pacote, e/ou entre o módulo atual e módulos já instalados na aplicação.<br><br> Para criar relações um-para-muitos e um-para-um, criar campos <b>Relacionado</b> and <b>Relacionado Flexível </b> para os módulos.',
            'viewlayouts' => 'Você pode controlar quais campos estarão disponíveis para a captura de dados na tela de <b>Edição</b>.  Você também pode controlar quais dados serão exibidos na tela de <b>Detalhes</b>.  As telas não precisam ser iguais. <br/> <br/> O formulário de Criação Rápida é exibido quando clicar em <b>Criar</b> no subpainel do módulo. Por padrão, o layout do formulário de <b>Criação Rápida</b> é o mesmo layout da tela de <b>Edição</b> padrão. Você pode customizar o formulário de Criação Rápida, para que ele contenha menos e/ou campos diferentes do que o layout da tela de Edição. <br><br>Você pode determinar a segurança do módulo ao usar a customização do Layout, junto com o <b>Gerenciamento de Função</b>. <br> <br>',
            'existingModule' => 'Depois de criar e personalizar este módulo, poderá criar módulos adicionais ou voltar ao pacote para <b>Publicar</b> ou <b>Implementar</b> o pacote.<br/><br/>Para criar módulos adicionais, clicar <b>Duplicar</b> para criar um módulo com as mesmas propriedades que o módulo atual, ou voltar ao pacote e clicar <b>Novo Módulo</b>.<br/><br/>Se já está pronto para <b>Publicar</b> ou <b>Implementar</b> o pacote que contém este módulo, voltar ao pacote para realizar estas funções. Pode publicar e implementar pacotes que contenham pelo menos um módulo.',
            'labels' => 'Os rótulos dos campos padrão assim com os dos campos personalizados podem ser alterados. Alterar os rótulos dos campos não afecta os dados guardados nos campos.',
        ),
        'listViewEditor' => array(
            'modify' => 'Há três colunas exibidas à esquerda. A coluna "Padrão" contém os campos que são exibidos na lista, por padrão. A coluna "Disponível" contém campos que um usuário poderá escolher para usar em uma lista personalizada. E, a coluna "Oculto" contém campos desabilitados no momento e disponíveis para que você, como administrador, os adicione às colunas Padrão ou Disponível e os disponibilize aos usuários.',
            'savebtn' => 'Clicando em <b>Salvar</b>, salvará e ativará todas as alterações.',
            'Hidden' => 'Campos ocultos são campos que não estão atualmente disponíveis aos usuários utilizá-los nas listas.',
            'Available' => 'Campos disponíveis são campos que não são exibidos por padrão, mas podem ser habilitados pelos usuários.',
            'Default' => 'Padrão campos são exibidos aos usuários que não tenham criadas configurações em uma lista personalizada.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Há duas colunas exibidas à esquerda. A coluna "Padrão" contém os campos que serão exibidos na pesquisa, e a coluna "Oculto" contém campos disponíveis para que você, como administrador, adicione à exibição.',
            'savebtn' => 'Clicando em <b>Salvar & implantar</b> salvará e ativará todas as alterações.',
            'Hidden' => 'Campos ocultos são campos que não serão exibidos na tela de pesquisa.',
            'Default' => 'Campos padrões serão exibidos na tela de pesquisa.'
        ),
        'layoutEditor' => array(
            'default' => 'Há duas colunas exibidas à esquerda. A coluna da direita, denominada Layout ou Prévia do Layout, é onde é possível alterar o layout do módulo. Na coluna da esquerda, denominada Caixa de Ferramentas, contém ferramentas e elementos úteis para uso durante a edição o layout. <br/> <br/> Se a área de layout estiver denominada Layout Atual, você está trabalhando em uma cópia do layout atualmente usado pelo módulo para exibição. <br/> <br/> Se for denominado Prévia do Layout, você está trabalhando em uma cópia criada previamente ao clicar botão Salvar. Essa cópia pode já ter sido alterado da versão exibida aos usuários deste módulo.',
            'saveBtn' => 'Clique neste botão para salvar o layout e preservar as alterações. Quando retornar a este módulo, você iniciará a partir deste layout alterado. No entanto, seu layout no não será visto pelos usuários do módulo até que você clique no botão Salvar e Publicar.',
            'publishBtn' => 'Clique neste botão para implantar o layout. Isto significa que este layout será visto imediatamente pelos usuários deste módulo.',
            'toolbox' => 'A Caixa de Ferramentas contém vários recursos úteis para edição de layouts, incluindo uma área de lixeira, um conjunto de campos e elementos adicionais disponíveis. Qualquer um destes objetos pode ser arrastado e solto sobre o layout.',
            'panels' => 'Essa área mostra como seu layout será exibido aos usuários deste módulo, quando ele for implementado. <br/> <br/> É possível reposicionar os elementos tais como: campos, linhas e painéis, arrastando e soltando os elementos; para excluir, arraste e solte os elementos sobre área da lixeira, na caixa de ferramentas; para adicionar novos elementos, arraste o elemento desejado da caixa de ferramentas e o solte na posição desejada no layout.'
        ),
        'dropdownEditor' => array(
            'default' => 'Há duas colunas exibidas à esquerda. A coluna da direita, denominada Layout ou Prévia do Layout, é onde é possível alterar o layout do módulo. Na coluna da esquerda, denominada Caixa de Ferramentas, contém ferramentas e elementos úteis para uso durante a edição o layout. <br/> <br/> Se a área de layout estiver denominada Layout Atual, você está trabalhando em uma cópia do layout atualmente usado pelo módulo para exibição. <br/> <br/> Se for denominado Prévia do Layout, você está trabalhando em uma cópia criada previamente ao clicar botão Salvar. Essa cópia pode já ter sido alterado da versão exibida aos usuários deste módulo.',
            'dropdownaddbtn' => 'Clicando neste botão adicionar um novo item no menu de selecção.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Personalizações feitas no Estúdio, nesta instância, podem ser empacotadas e implementadas em outra instância.  <br><br>Forneça um <b>Nome de Pacote</b>.  Também é possível fornecer informações do <b>Autor</b> e <b>Descrição</b> do pacote. <br><br>Selecione o(s) módulo(s) que contêm as personalizações para exportar. (Serão exibidos para seleção, somente os módulos que contém personalizações). <br><br>, Clique em <b>Exportar</b> para criar um arquivo. zip para o pacote que contém as personalizações.  O arquivo. zip pode ser carregado em outra instância através do <b>Carregador de Módulos</b>.',
            'exportCustomBtn' => 'Clicar <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo as personalizações do que pretende exportar.',
            'name' => 'O <b>Nome</b> do pacote será exibido no Carregador de Módulos, depois que o pacote for carregado para a instalação no Estúdio.',
            'author' => 'O <b>Autor</b> é o nome da entidade que criou o pacote. O autor pode ser um indivíduo ou uma empresa. <br><br>O Autor será exibido no Carregador de Módulos, depois que o pacote for carregado para a instalação no Estúdio.',
            'description' => 'A <b>Descrição</b> do pacote será exibido no Carregador de Módulos, depois que o pacote for carregado para a instalação no Estúdio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bem-vindo à área de <b>Ferramentas do Desenvolvedor</b1>. <br/> <br/> Use as ferramentas desta área para criar e gerenciar campos e módulos padrões e personalizados.',
            'studioBtn' => 'Use o <b>Estúdio</b> para personalizar módulos instalados: alterando o posicionamento dos campos, selecionando quais campos estarão disponíveis e criando de dados personalizados.',
            'mbBtn' => 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
            'appBtn' => 'Use o Modo de Aplicativo para personalizar várias propriedades do programa, como: quantos relatórios TPS foram exibidos na página inicial',
            'backBtn' => 'Voltar ao passo anterior.',
            'studioHelp' => 'Use o <b>Estúdio</b> para personalizar módulos instalados.',
            'moduleBtn' => 'Clicar para editar este módulo.',
            'moduleHelp' => 'Selecione o componente do módulo que você deseja editar',
            'fieldsBtn' => 'Edite quais informações serão armazenadas no módulo ao controlar os <b>Campos</b> no módulo. <br/> <br/> Você pode editar e criar campos personalizados aqui.',
            'labelsBtn' => 'Clique em <b>Salvar</b> para salvar seus rótulos personalizados.',
            'layoutsBtn' => 'Personalize os <b>Layouts</b> das telas de Edição, Detalhes, Lista e pesquisa.',
            'subpanelBtn' => 'Edite quais informações serão exibidas nestes subpainéis de módulos.',
            'layoutsHelp' => 'Selecione um <b>Layout para Editar</b>. < br / <br/> Para alterar o layout que contém campos de dados para preenchimento, clique em <b>Edição</b>. <br/> <br/> Para alterar o layout que exibe os dados inseridos nos campos no modo de Edição, clique em <b>Detalhes</b>. <br/> <br/> Para alterar as colunas que aparecem na lista padrão, clique em <b>Lista</b>. <br/> <br/> Para alterar os layouts dos formulários de pesquisa básica e avançada, clique em <b>Pesquisa</b>.',
            'subpanelHelp' => 'Selecione um <b>Subpainel</b> para editar.',
            'searchHelp' => 'Selecione um layout de <b>Pesquisa</b> para editar.',
            'labelsBtn' => 'Clique em <b>Salvar</b> para salvar seus rótulos personalizados.',
            'newPackage' => 'Clicar em <b>Novo Pacote</b> para criar um novo pacote.',
            'mbHelp' => '<b>Bem-vindo ao Construtor de Módulos.</b> <br/> <br/> Utilize o <b>Construtor de Módulos</b> para criar pacotes contendo módulos personalizados baseados em objetos padrões ou personalizados. <br/> <br/> Para começar, clique em <b>Novo Pacote</b> para criar um novo pacote ou selecione um pacote para editar. <br/> <br/> Um <b>pacote</b> atua como um contêiner para módulos personalizados, que são parte de um projeto. O pacote pode conter um ou mais módulos personalizados que podem ser relacionados uns aos outros ou aos módulos da aplicação. <br/> <br/> Exemplos: Você pode querer criar um pacote que contém um módulo personalizado que está relacionado com o módulo padrão de Contas. Ou, você pode querer criar um pacote contendo vários novos módulos que trabalham juntos como um projeto e que estão relacionados entre si e aos módulos da aplicação.',
            'exportBtn' => 'Clique em <b>Exportar Personalizações</b> para criar um pacote contendo as personalizações feitas no Estúdio para módulos específicos.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor Dropdown',

//ASSISTANT
    'LBL_AS_SHOW' => 'Exibir Assistente no futuro.',
    'LBL_AS_IGNORE' => 'Ignorar Assistente no futuro.',
    'LBL_AS_SAYS' => 'Assistente Diz:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Construtor de Módulo',
    'LBL_STUDIO' => 'Estúdio',
    'LBL_DROPDOWNEDITOR' => 'Editor Dropdown',
    'LBL_EDIT_DROPDOWN' => 'Editar Dropdown',
    'LBL_DEVELOPER_TOOLS' => 'Ferramentas do Desenvolvedor',
    'LBL_SUGARPORTAL' => 'Editor do Portal do SuiteCRM',
    'LBL_SYNCPORTAL' => 'Sincronizar Portal',
    'LBL_PACKAGE_LIST' => 'Lista de Pacotes',
    'LBL_HOME' => 'Início',
    'LBL_NONE' => '-Nada-',
    'LBL_DEPLOYE_COMPLETE' => 'Implementação Completa',
    'LBL_DEPLOY_FAILED' => 'Ocorreu um erro durante o processo de implementação e seu pacote pode não ter sido instalado corretamente',
    'LBL_ADD_FIELDS' => 'Adicionar Campos Customizados',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpainéis Disponíveis',
    'LBL_ADVANCED' => 'Avançada',
    'LBL_ADVANCED_SEARCH' => 'Pesquisa Avançada',
    'LBL_BASIC' => 'Básica',
    'LBL_BASIC_SEARCH' => 'Pesquisa Básica',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_CUSTOM' => 'Customizar',
    'LBL_DASHLET' => 'Dashlet do SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Exibição em Lista dos Dashlets do SuiteCRM',
    'LBL_DASHLETSEARCH' => 'Pesquisar Dashlet do SuiteCRM',
    'LBL_POPUP' => 'Exibição Popup',
    'LBL_POPUPLIST' => 'Exibição em Lista do Popup',
    'LBL_POPUPLISTVIEW' => 'Exibição em Lista do Popup',
    'LBL_POPUPSEARCH' => 'Pesquisar Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Pesquisar Dashlet do SuiteCRM',
    'LBL_DISPLAY_HTML' => 'Exibir Código HTML',
    'LBL_DETAILVIEW' => 'Detalhes',
    'LBL_DROP_HERE' => '[Soltar Aqui]',
    'LBL_EDIT' => 'Editar',
    'LBL_EDIT_LAYOUT' => 'Editar Layout',
    'LBL_EDIT_ROWS' => 'Editar Linhas',
    'LBL_EDIT_COLUMNS' => 'Editar Colunas',
    'LBL_EDIT_LABELS' => 'Editar Rótulos',
    'LBL_EDIT_PORTAL' => 'Editar Portal para',
    'LBL_EDIT_FIELDS' => 'Editar Campos',
    'LBL_EDITVIEW' => 'Edição',
    'LBL_FILLER' => '(preencher)',
    'LBL_FIELDS' => 'Campos',
    'LBL_FAILED_TO_SAVE' => 'Falha ao Salvar',
    'LBL_FAILED_PUBLISHED' => 'Falha ao Publicar',
    'LBL_HOMEPAGE_PREFIX' => 'Meu',
    'LBL_LAYOUT_PREVIEW' => 'Prévia do Layout',
    'LBL_LAYOUTS' => 'Layouts',
    'LBL_LISTVIEW' => 'Exibição em Lista',
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_TITLE' => 'Estúdio',
    'LBL_NEW_PACKAGE' => 'Novo Pacote',
    'LBL_NEW_PANEL' => 'Novo Painel',
    'LBL_NEW_ROW' => 'Nova Linha',
    'LBL_PACKAGE_DELETED' => 'Pacote Excluído',
    'LBL_PUBLISHING' => 'Publicando ...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_SELECT_FILE' => 'Selecionar Arquivo',
    'LBL_SAVE_LAYOUT' => 'Salvar Layout',
    'LBL_SELECT_A_SUBPANEL' => 'Selecionar um Subpainel',
    'LBL_SELECT_SUBPANEL' => 'Selecionar Subpainel',
    'LBL_SUBPANELS' => 'Subpainéis',
    'LBL_SUBPANEL' => 'Subpainel',
    'LBL_SUBPANEL_TITLE' => 'Título:',
    'LBL_SEARCH_FORMS' => 'Pesquisar',
    'LBL_SEARCH' => 'Pesquisar',
    'LBL_STAGING_AREA' => 'Área de Transferência (arraste e solte os itens aqui)',
    'LBL_SUGAR_FIELDS_STAGE' => 'Campos SuiteCRM (clique nos itens para adicionar à área de armazenamento)',
    'LBL_SUGAR_BIN_STAGE' => 'Bin SuiteCRM (clique nos itens para adicionar à área de armazenamento)',
    'LBL_TOOLBOX' => 'Caixa de Ferramentas',
    'LBL_VIEW_SUGAR_FIELDS' => 'Exibir Campos do SuiteCRM',
    'LBL_VIEW_SUGAR_BIN' => 'Exibir Bin do SuiteCRM',
    'LBL_QUICKCREATE' => 'Criação Rápida',
    'LBL_EDIT_DROPDOWNS' => 'Editar uma Lista Suspensa Global',
    'LBL_ADD_DROPDOWN' => 'Adicionar uma nova Lista Suspensa Global',
    'LBL_BLANK' => '-vazio-',
    'LBL_TAB_ORDER' => 'Ordem da Guia',
    'LBL_TAB_PANELS' => 'Ativar guias',
    'LBL_TAB_PANELS_HELP' => 'Quando as guias estiverem habilitadas, use a lista suspensa "tipo" < br / > para cada seção para definir como elas serão exibidas (guia ou painel)',
    'LBL_TABDEF_TYPE' => 'Tipo de Exibição',
    'LBL_TABDEF_TYPE_HELP' => 'Selecione como esta seção deve ser exibida. Esta opção só tem efeito se você tiver habilitado as guias nesta exibição.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Guia',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Painel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecione Painel para ter este painel exibido dentro da exibição do layout. Selecione Guia para ter este painel exibido dentro de uma guia separada do layout. Quando Guia é especificado para um painel, painéis subsequentes definidos para serem exibidos como Painel, serão exibidos dentro da guia. <br/> Uma nova Guia será iniciada para o próximo painel, para que o qual a Guia foi selecionada. Se Guia está selecionada para um painel abaixo do primeiro painel, o primeiro painel será necessariamente uma Guia.',
    'LBL_TABDEF_COLLAPSE' => 'Comprimir',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Selecione para tornar este painel comprimido, por padrão.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nome',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
    'LBL_DROPDOWN_ITEMS' => 'Listar Itens',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nome do Item',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Exibir Rótulo',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar para o Detalhes',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selecione esta opção para sincronizar este layout da tela de Edição com o da tela de Detalhes correspondente. Os campos e o posicionamento dos campos na tela de Edição<br>serão sincronizados e salvas automaticamente com a tela de Detalhes, após clicar em Salvar ou Salvar & Implantar na tela de Edição. <br>Alterações de layout não poderão ser feitas na tela de Detalhes.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Esta tela de Detalhes está sincronizada com a tela de Edição correspondente.<br />Os campos e o posicionamento dos campos neste Detalhe refletem os campo e o posicionamento na tela de Edição.<br />Alterações na tela de Detalhes não poderão ser salvar ou implementados nesta página. Faça as alterações ou desative a sincronização com os layouts de Edição.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiar da Edição',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Os valores requeridos são ambos para o Nome do Item e para Legenda do Display. Para adicionar um item em branco, carregar em Adicionar sem introduzir qualquer valor para o Nome do Item e para a Legenda do Display.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Chave já existe na lista',
    'LBL_NO_SAVE_ACTION' => 'Não foi possível encontrar a ação para está view',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: Documento mal formado',


//RELATIONSHIPS
    'LBL_MODULE' => 'Módulo',
    'LBL_LHS_MODULE' => 'Módulo Principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relacionamento criado no Studio ou no Construtor de Módulos',
    'LBL_RELATIONSHIPS' => 'Relacionamentos',
    'LBL_RELATIONSHIP_EDIT' => 'Editar Relacionamento',
    'LBL_REL_NAME' => 'Nome',
    'LBL_REL_LABEL' => 'Rótulo',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'Módulo Relacionado',
    'LBL_NO_RELS' => 'Sem Relacionamentos',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condição Opcional',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Coluna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
    'LBL_SUBPANEL_FROM' => 'Sub-painel de',
    'LBL_RELATIONSHIP_ONLY' => 'Nenhum elemento visível será criado para este relacionamento, dado que há um relacionamento visível pré-existente entre estes dois módulos.',
    'LBL_ONETOONE' => 'Um para Um',
    'LBL_ONETOMANY' => 'Um para Muitos',
    'LBL_MANYTOONE' => 'Muitos para Um',
    'LBL_MANYTOMANY' => 'Muitos para Muitos',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Selecione uma função ou componente.',
    'LBL_QUESTION_MODULE1' => 'Selecione um módulo.',
    'LBL_QUESTION_EDIT' => 'Selecione um módulo para editar.',
    'LBL_QUESTION_LAYOUT' => 'Selecione um layout para editar.',
    'LBL_QUESTION_SUBPANEL' => 'Selecione um sub-painel para editar.',
    'LBL_QUESTION_SEARCH' => 'Selecione um layout de pesquisa para editar.',
    'LBL_QUESTION_MODULE' => 'Selecione um componente de módulo para editar.',
    'LBL_QUESTION_PACKAGE' => 'Selecione um pacote para editar, ou crie um novo pacote.',
    'LBL_QUESTION_EDITOR' => 'Selecione uma ferramenta.',
    'LBL_QUESTION_DROPDOWN' => 'Selecione uma lista dropdown para editar, ou crie uma nova lista dropdown.',
    'LBL_QUESTION_DASHLET' => 'Selecione um layout de dashlet para editar.',
    'LBL_QUESTION_POPUP' => 'Selecione o layout de um popup para editar.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Relacionar Com',
    'LBL_NAME' => 'Nome do Pacote:',
    'LBL_LABELS' => 'Rótulos',
    'LBL_MASS_UPDATE' => 'Atualização em Massa',
    'LBL_AUDITED' => 'Auditoria',
    'LBL_CUSTOM_MODULE' => 'Módulo',
    'LBL_DEFAULT_VALUE' => 'Valor Padrão',
    'LBL_REQUIRED' => 'Obrigatório',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'PERSONALIZADO',
    'LBL_HDEFAULT' => 'PADRÃO',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CUSTOM_FIELDS' => 'Campos Customizados',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editar Rótulos',
    'LBL_SECTION_PACKAGES' => 'Pacotes',
    'LBL_SECTION_PACKAGE' => 'Pacote',
    'LBL_SECTION_MODULES' => 'Módulos',
    'LBL_SECTION_PORTAL' => 'Portal',
    'LBL_SECTION_DROPDOWNS' => 'Listas Dropdown',
    'LBL_SECTION_PROPERTIES' => 'Propriedades',
    'LBL_SECTION_DROPDOWNED' => 'Editor de Listas Dropdown',
    'LBL_SECTION_HELP' => 'Ajuda',
    'LBL_SECTION_ACTION' => 'Acção',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_EDPANELLABEL' => 'Editar Rótulo de Painel',
    'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
    'LBL_SECTION_DEPLOY' => 'Implementar',
    'LBL_SECTION_MODULE' => 'Módulo',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Editar Visibilidade',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Padrão',
    'LBL_HIDDEN' => 'Oculto',
    'LBL_AVAILABLE' => 'Disponível',
    'LBL_LISTVIEW_DESCRIPTION' => 'Há três colunas exibidas abaixo. A coluna <b>Padrão</b> contém campos que são exibidos na lista, por padrão. A coluna <b>Adicional</b> contém campos que um usuário poderá escolher para criar uma exibição customizada. A coluna <b>Disponível</b> contém os campos disponíveis para que você, como administrador, os adicione às colunas Padrão ou Adicional para uso dos usuários.',
    'LBL_LISTVIEW_EDIT' => 'Editor Exibição de Lista',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Prever',
    'LBL_MB_RESTORE' => 'Restaurar',
    'LBL_MB_DELETE' => 'Eliminar',
    'LBL_MB_COMPARE' => 'Comparar',
    'LBL_MB_DEFAULT_LAYOUT' => 'Layout Padrão',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Adicionar',
    'LBL_BTN_SAVE' => 'Salvar',
    'LBL_BTN_SAVE_CHANGES' => 'Salvar Alterações',
    'LBL_BTN_DONT_SAVE' => 'Descartar Alterações',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_CLOSE' => 'Encerrar',
    'LBL_BTN_SAVEPUBLISH' => 'Salvar & Implementar',
    'LBL_BTN_NEXT' => 'Próximo',
    'LBL_BTN_BACK' => 'Anterior',
    'LBL_BTN_CLONE' => 'Duplicar',
    'LBL_BTN_ADDCOLS' => 'Adicionar Colunas',
    'LBL_BTN_ADDROWS' => 'Adicionar Linhas',
    'LBL_BTN_ADDFIELD' => 'Adicionar Campo',
    'LBL_BTN_ADDDROPDOWN' => 'Adicionar Lista Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Ordenação Ascendente',
    'LBL_BTN_SORT_DESCENDING' => 'Ordenação Descendente',
    'LBL_BTN_EDLABELS' => 'Editar Rótulos',
    'LBL_BTN_UNDO' => 'Desfazer',
    'LBL_BTN_REDO' => 'Refazer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Adicionar Campo Customizado',
    'LBL_BTN_EXPORT' => 'Exportar Customizações',
    'LBL_BTN_DUPLICATE' => 'Duplicar',
    'LBL_BTN_PUBLISH' => 'Publicar',
    'LBL_BTN_DEPLOY' => 'Implementar',
    'LBL_BTN_EXP' => 'Exportar',
    'LBL_BTN_DELETE' => 'Eliminar',
    'LBL_BTN_VIEW_LAYOUTS' => 'Ver Layouts',
    'LBL_BTN_VIEW_FIELDS' => 'Ver Campos',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ver Relacionamentos',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Adicionar Relacionamento',
    'LBL_BTN_RENAME_MODULE' => 'Renomear Módulo',
    'LBL_BTN_INSERT' => 'Inserir',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Erro: Campo Já Existente',
    'ERROR_INVALID_KEY_VALUE' => "Erro: Valor-Chave Inválido: [&#39;]",
    'ERROR_NO_HISTORY' => 'Nenhuns Arquivos de histórico encontrados',
    'ERROR_MINIMUM_FIELDS' => 'Este layout deve conter pelo menos um campo',
    'ERROR_GENERIC_TITLE' => 'Ocorreu um erro',
    'ERROR_REQUIRED_FIELDS' => 'Tem certeza que deseja continuar? Os seguintes campos obrigatórios não estão no layout:',
    'ERROR_ARE_YOU_SURE' => 'De certeza que deseja continuar?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nome do Pacote',
    'LBL_MODULE_NAME' => 'Nome do Módulo:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_KEY' => 'Chave:',
    'LBL_ADD_README' => 'Leia-me',
    'LBL_LAST_MODIFIED' => 'Última Modificação:',
    'LBL_NEW_MODULE' => 'Novo Módulo',
    'LBL_LABEL' => 'Rótulo:',
    'LBL_LABEL_TITLE' => 'Rótulo',
    'LBL_WIDTH' => 'Largura',
    'LBL_PACKAGE' => 'Pacote:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_TEAM_SECURITY' => 'Segurança de Equipe',
    'LBL_ASSIGNABLE' => 'Atribuível',
    'LBL_PERSON' => 'Pessoa',
    'LBL_COMPANY' => 'Empresa',
    'LBL_ISSUE' => 'Assunto',
    'LBL_SALE' => 'Venda',
    'LBL_FILE' => 'Arquivo',
    'LBL_NAV_TAB' => 'Tabulador de Navegação',
    'LBL_CREATE' => 'Criar',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Vista',
    'LBL_LIST_VIEW' => 'Listagem',
    'LBL_HISTORY' => 'Ver Histórico',
    'LBL_RESTORE_DEFAULT' => 'Restaurar Padrão',
    'LBL_ACTIVITIES' => 'Atividades',
    'LBL_NEW' => 'Novo',
    'LBL_TYPE_BASIC' => 'básico',
    'LBL_TYPE_COMPANY' => 'empresa',
    'LBL_TYPE_PERSON' => 'pessoa',
    'LBL_TYPE_ISSUE' => 'assunto',
    'LBL_TYPE_SALE' => 'venda',
    'LBL_TYPE_FILE' => 'Arquivo',
    'LBL_RSUB' => 'Este é o sub-painel que será exibido no seu módulo',
    'LBL_MSUB' => 'Este é o sub-painel que o seu módulo fornece ao módulo relacionado para exibir',
    'LBL_MB_IMPORTABLE' => 'Importando',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'visível',
    'LBL_VE_HIDDEN' => 'oculto',
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] foi excluído',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportar Personalizações',
    'LBL_EC_NAME' => 'Nome do Pacote:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descrição:',
    'LBL_EC_KEY' => 'Chave:',
    'LBL_EC_CHECKERROR' => 'Por favor Selecione um módulo.',
    'LBL_EC_CUSTOMFIELD' => 'campo(s) personalizado(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'layout(s) personalizado(s)',
    'LBL_EC_NOCUSTOM' => 'Nenhum módulo foi personalizados.',
    'LBL_EC_EMPTYCUSTOM' => 'Contém personalizações vazias.',
    'LBL_EC_EXPORTBTN' => 'Exportar',
    'LBL_MODULE_DEPLOYED' => 'Módulo foi implementado.',
    'LBL_UNDEFINED' => 'indefinido',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Falhou ao recuperar dados',
    'LBL_AJAX_TIME_DEPENDENT' => 'Uma ação dependente do tempo está em progresso. Por favor aguarde e tente de novo daqui a uns segundos.',
    'LBL_AJAX_LOADING' => 'Carregando...',
    'LBL_AJAX_DELETING' => 'Excluindo...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construção em Progresso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Implementação em Andamento...',
    'LBL_AJAX_FIELD_EXISTS' => 'O nome do campo que introduziu já existe. Por favor insira um novo nome de campo.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultado',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Esta operação foi concluída com sucesso',
    'LBL_AJAX_LOADING_TITLE' => 'Em Andamento..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Por favor aguarde, carregando..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Tem a certeza que pretende remover este pacote? Isto irá eliminar permanentemente todos os Arquivos associados a este pacote.',
    'LBL_JS_REMOVE_MODULE' => 'Tem a certeza que pretende remover este módulo? Isto irá eliminar permanentemente todos os Arquivos associados a este módulo.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Qualquer personalização que você fez no Estúdio serão substituídas quando este módulo for re-implementado. Tem certeza que deseja prosseguir?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Implementando Pacote',
    'LBL_JS_VALIDATE_NAME' => 'Nome - Deve ser alfanumérico, sem espaços e começando por uma letra',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'O Nome do Pacote já existe',
    'LBL_JS_VALIDATE_KEY' => 'Chave - Deve ser alfanumérica, sem espaços e começando por uma letra',
    'LBL_JS_VALIDATE_LABEL' => 'Por favor introduza um rótulo que será utilizado como Nome de Exibição para este módulo',
    'LBL_JS_VALIDATE_TYPE' => 'Por favor Selecione o tipo de módulo que pretende construir da lista acima',
    'LBL_JS_VALIDATE_REL_NAME' => 'Nome - Deve ser alfanumérico e sem espaços',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Rótulo - por favor adicione um rótulo que será exibido acima do sub-painel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Excluir este campo customizado irá apagar também todos os dados relacionados a este campo no banco de dados. Esse campo não será mais exibido em nenhum layout do módulo. \n\nDeseja continuar?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Tem a certeza que pretende eliminar este relacionamento?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Isso fará com que este relacionamento seja permanente. Tem certeza que deseja implementar este relacionamento?',
    'LBL_CONFIRM_DONT_SAVE' => 'Foram feitas alterações desde a última vez que você salvou, gostaria de salvar?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvar Alterações?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Há dados que podem ser eliminados, e isso não pode ser desfeito, tem certeza que deseja continuar?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selecione o tipo de base de dados apropriado baseado no tipo de dados que será introduzido no campo.',
    'LBL_POPHELP_SEARCHABLE' => 'Você tem que acionar o Full System Index após alterar o &#39;boost level"',
    'LBL_POPHELP_IMPORTABLE' => '<b>Sim</b>: O campo será incluído numa operação de importação.<br><b>Não</b>: O campo não será incluído numa importação.<br><b>Obrigatório</b>: Um valor para o campo deve ser fornecido em qualquer importação.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'A imagem carregada vai ser dimensionada para esta largura.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'A imagem carregada vai ser dimensionada para esta altura.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Activo</b>: O campo irá aparecer na funcionalidade Fundir Duplicados, mas não ficará disponível para utilizar nas condições de filtro na funcionalidade Procurar Duplicados.<br><b>Inactivo</b>: O campo não irá aparecer na funcionalidade Fundir Duplicados, e não ficará disponível para utilizar nas condições de filtro na funcionalidade Procurar Duplicados.<br><b>Em Filtro</b>: O campo irá aparecer na funcionalidade Fundir Duplicados e ficará disponível para utilizar na funcionalidade Procurar Duplicados.<br><b>Filtro Apenas</b>: O campo não irá aparecer na funcionalidade Fundir Duplicados, mas ficará disponível para utilizar na funcionalidade Procurar Duplicados.<br><b>Filtro Selecionado Padrão</b>: O campo será utilizado como condição de filtro por defeito na página Procurar Duplicados e irá aparecer igualmente na funcionalidade Fundir Duplicados.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Selecione este campo para busca Global',
//Revert Module labels
    'LBL_RESET' => 'Reiniciar',
    'LBL_RESET_MODULE' => 'Reiniciar Módulo',
    'LBL_REMOVE_CUSTOM' => 'Remover personalizações',
    'LBL_CLEAR_RELATIONSHIPS' => 'Limpar Relacionamentos',
    'LBL_RESET_LABELS' => 'Reiniciar Rótulos',
    'LBL_RESET_LAYOUTS' => 'Reiniciar Layouts',
    'LBL_REMOVE_FIELDS' => 'Remover os Campos Customizados',
    'LBL_CLEAR_EXTENSIONS' => 'Limpar Extensões',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => 'histórico',


    'LBL_ADD_LAYOUT' => 'Adicionar Layout',
    'LBL_ADD_LAYOUTS' => 'Adicionar Layout',
    'LBL_QUESTION_ADD_LAYOUT' => 'Selecione um Layout de Grupo para Adicionar.',
    'LBL_REMOVE_LAYOUT' => 'Remover um Layout de Grupo',

    'LBL_SECURITYGROUP' => 'Grupo de Segurança:',
    'LBL_COPY_FROM' => 'Copiar De:',
    'LBL_ADDLAYOUTDONE' => 'Layout Salvo',
    'LBL_REMOVELAYOUTDONE' => 'Layout Removido',
    'LBL_REMOVE_CONFIRM' => 'Você tem certeza?',

    'fieldTypes' => array(
        'varchar' => 'Campo de Texto',
        'int' => 'Número Inteiro',
        'float' => 'Decimal',
        'bool' => 'Caixa de Seleção',
        'enum' => 'Menu suspenso',
        'dynamicenum' => 'Lista Suspensa Dinâmica',
        'multienum' => 'Multi-Seleção',
        'date' => 'Data',
        'phone' => 'Telefone',
        'currency' => 'Moeda',
        'html' => 'HTML',
        'radioenum' => 'Rádio',
        'relate' => 'Relacionar',
        'address' => 'Endereço',
        'text' => 'Área de Texto',
        'url' => 'Link',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Data/Hora',
        'decimal' => 'Decimal',
        'image' => 'Imagem',
    ),
    'labelTypes' => array(
        "" => "Rótulos usados frequentemente",
        "all" => "Todos os rótulos",
    ),

    'parent' => 'Flex Relacionar',

    'LBL_ILLEGAL_FIELD_VALUE' => "Chaves de dropdowns não podem conter plicas.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Quaisquer dropdowns que utilizem tenham este item como valor vão deixar de o exibir, e o valor vai deixar de ser selecionável nas dropdowns. Tem a certeza que quer continuar?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Selecione para validar este campo para a entrada de um<br> número de 10 dígitos, com inclusão do código do país 1 e<br> aplicar um formato dos E.U.A. para o número de telefone quando o registro<br> for salvo. Será aplicado o seguinte formato: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Todos os Módulos',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ID {1} relacionado)',
);

