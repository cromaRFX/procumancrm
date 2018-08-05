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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => ' Português (Brasil) - pt_BR',
  'moduleList' =>
  array (
    'Home' => 'Início',
    'Contacts' => 'Contatos',
    'Accounts' => 'Contas',
    'Opportunities' => 'Oportunidades',
    'Cases' => 'Ocorrências',
    'Notes' => 'Notas',
    'Calls' => 'Ligações',
    'Emails' => 'E-mails',
    'Meetings' => 'Reuniões',
    'Tasks' => 'Tarefas',
    'Calendar' => 'Calendário',
    'Leads' => 'Contatos',
    'Currencies' => 'Moedas',
    'Activities' => 'Atividades',
    'Bugs' => 'Bugs',
    'Feeds' => 'RSS',
    'iFrames'=>'Meus Sites',
    'TimePeriods'=>'Horários',
    'TaxRates'=>'Taxas de Impostos',
    'ContractTypes' => 'Tipos de Contrato',
    'Schedulers'=>'Agendadores',
    'Project'=>'Projetos',
    'ProjectTask'=>'Tarefas de Projeto',
    'Campaigns'=>'Campanhas',
    'CampaignLog'=>'Log de Campanha',
    'Documents'=>'Documentos',
    'DocumentRevisions'=>'Revisões do Documento',
    'Connectors'=>'Conectores',
    'Roles'=>'Funções',
    'Notifications'=>'Notificações',
    'Sync'=>'Sincronizar',
    'Users' => 'Usuários',
    'Employees' => 'Funcionários',
    'Administration' => 'Administração',
    'ACLRoles' => 'Funções',
    'InboundEmail' => 'Email de Entrada',
    'Releases' => 'Versões',
    'Prospects' => 'Alvos',
    'Queues' => 'Filas',
    'EmailMarketing' => 'E-mail Marketing',
    'EmailTemplates' => 'Modelos de Email',
    'SNIP' => "Arquivamento de Email",
    'ProspectLists' => 'Listas de Alvos',
    'SavedSearch' => 'Pesquisas Salvas',
    'UpgradeWizard' => 'Assistente de Atualização',
    'Trackers' => 'Rastreadores',
    'TrackerPerfs' => 'Desempenho do Rastreador',
    'TrackerSessions' => 'Sessões do Rastreador',
    'TrackerQueries' => 'Consultas do Rastreador',
    'FAQ' => 'Perguntas Frequentes',
    'Newsletters' => 'Informativos',
    'SugarFeed'=>'Feed do SuiteCRM',
    'KBDocuments' => 'Base de Conhecimento',
  'SugarFavorites'=>'Favoritos do SuiteCRM',

    'OAuthKeys' => 'Chaves OAuth Consumer',
    'OAuthTokens' => 'Tokens OAuth',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Início',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contato',
    'Accounts' => 'Conta',
    'Opportunities' => 'Oportunidade',
    'Cases' => 'Ocorrência',
    'Notes' => 'Nota',
    'Calls' => 'Ligação',
    'Emails' => 'E-mail',
    'Meetings' => 'Reunião',
    'Tasks' => 'Tarefa',
    'Calendar' => 'Calendário',
    'Leads' => 'Contato',
    'Activities' => 'Atividade',
    'Bugs' => 'Bug',
    'KBDocuments' => 'Documento BC',
    'Feeds' => 'RSS',
    'iFrames'=>'Meus Sites',
    'TimePeriods'=>'Horário',
    'Project'=>'Projeto',
    'ProjectTask'=>'Tarefa de Projeto',
    'Prospects' => 'Alvo',
    'Campaigns'=>'Campanha',
    'Documents'=>'Documento',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Sincronizar',
    'Users' => 'Usuário',
  'SugarFavorites'=>'Favoritos do SuiteCRM'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Sim',
    '2'=>'Não',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analista',
    'Competitor' => 'Concorrente',
    'Customer' => 'Cliente',
    'Integrator' => 'Integrador',
    'Investor' => 'Investidor',
    'Partner' => 'Parceiro',
    'Press' => 'Imprensa',
    'Prospect' => 'Potencial',
    'Reseller' => 'Revendedor',
    'Other' => 'Outro',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Têxtil',
    'Banking' => 'Banco',
    'Biotechnology' => 'Biotecnologia',
    'Chemicals' => 'Químico',
    'Communications' => 'Comunicações',
    'Construction' => 'Construção',
    'Consulting' => 'Consultoria',
    'Education' => 'Educação',
    'Electronics' => 'Eletrônicos',
    'Energy' => 'Energia',
    'Engineering' => 'Engenharia',
    'Entertainment' => 'Entretenimento',
    'Environmental' => 'Ambiental',
    'Finance' => 'Financeira',
    'Government' => 'Governo',
    'Healthcare' => 'Saúde',
    'Hospitality' => 'Hotelaria',
    'Insurance' => 'Seguros',
    'Machinery' => 'Máquinas',
    'Manufacturing' => 'Manufatura',
    'Media' => 'Mídia',
    'Not For Profit' => 'Sem Fins Lucrativos',
    'Recreation' => 'Entretenimento',
    'Retail' => 'Varejo',
    'Shipping' => 'Frete',
    'Technology' => 'Tecnologia',
    'Telecommunications' => 'Telecomunicações',
    'Transportation' => 'Transportes',
    'Utilities' => 'Serviços Públicos',
    'Other' => 'Outro',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Chamada Espontânea',
    'Existing Customer' => 'Cliente Existente',
    'Self Generated' => 'Auto Gerado',
    'Employee' => 'Colaborador',
    'Partner' => 'Parceiro',
    'Public Relations' => 'Relações Públicas',
    'Direct Mail' => 'Mala Direta',
    'Conference' => 'Conferência',
    'Trade Show' => 'Feira/Evento',
    'Web Site' => 'Site de Internet',
    'Word of mouth' => 'Ouviu falar',
    'Email' => 'E-mail',
    'Campaign'=>'Campanha',
    'Other' => 'Outro',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Negócios Existentes',
    'New Business' => 'Novos Negócios',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Faturamento',
    'Investment'=>'Investimento',
    'Expected_Revenue'=>'Faturamento Esperado',
    'Budget'=>'Orçamento',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Decisor Principal',
    'Business Decision Maker' => 'Decisor de Negócios',
    'Business Evaluator' => 'Avaliador de Negócios',
    'Technical Decision Maker' => 'Decisor Técnico',
    'Technical Evaluator' => 'Avaliador Técnico',
    'Executive Sponsor' => 'Patrocinador Executivo',
    'Influencer' => 'Influenciador',
    'Other' => 'Outro',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Contato Principal',
    'Alternate Contact' => 'Contato Alternativo',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => '15 dias sem desconto',
    'Net 30' => '30 dias sem desconto',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'elasticsearch'
  ),
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Prospecção',
    'Qualification' => 'Qualificação',
    'Needs Analysis' => 'Análise das Necessidades',
    'Value Proposition' => 'Proposta de Valor',
    'Id. Decision Makers' => 'Id. dos Tomadores de Decisão',
    'Perception Analysis' => 'Análise de Percepção',
    'Proposal/Price Quote' => 'Proposta/Cotação',
    'Negotiation/Review' => 'Negociação/Revisão',
    'Closed Won' => 'Fechada Ganha',
    'Closed Lost' => 'Fechada Perdida',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Rascunho',
    'Negotiation' => 'Negociação',
    'Delivered' => 'Entregue',
    'On Hold' => 'Em Espera',
    'Confirmed' => 'Confirmado',
    'Closed Accepted' => 'Fechado Aceita',
    'Closed Lost' => 'Fechada Perdida',
    'Closed Dead' => 'Fechada Inoperante',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Ligação',
    'Meeting' => 'Reunião',
    'Task' => 'Tarefa',
    'Email' => 'E-mail',
    'Note' => 'Nota',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Sr.',
        'Ms.' => 'Srta.',
        'Mrs.' => 'Sra.',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> '1 minuto antes',
                                  300=> '5 minutos antes',
                                  600=> '10 minutos antes',
                                  900=> '15 minutos antes',
                                  1800=> '30 minutos antes',
                                  3600=> '1 hora antes',
                                  7200 => '2 horas antes',
                                  10800 => '3 horas antes',
                                  18000 => '5 horas antes',
                                  86400 => '1 dia antes',
                                 ),

  'task_priority_default' => 'Média',
  'task_priority_dom' =>
  array (
    'High' => 'Alto',
    'Medium' => 'Médio',
    'Low' => 'Baixo',
  ),
  'task_status_default' => 'Não Iniciado',
  'task_status_dom' =>
  array (
    'Not Started' => 'Não Iniciada',
    'In Progress' => 'Em Andamento',
    'Completed' => 'Concluída',
    'Pending Input' => 'Informação Pendente',
    'Deferred' => 'Adiada',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Planejada',
    'Held' => 'Realizada',
    'Not Held' => 'Não Realizada',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Outro',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Planejada',
    'Held' => 'Realizada',
    'Not Held' => 'Não Realizada',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Entrada',
    'Outbound' => 'Saída',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Novo',
    'Assigned' => 'Atribuído',
    'In Process' => 'Em Processamento',
    'Converted' => 'Convertida',
    'Recycled' => 'Reciclada',
    'Dead' => 'Morta',
  ),
   'gender_list' =>
  array (
    'male' => 'Masculino',
    'female' => 'Feminino',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Novo',
  'case_status_dom' =>
  array (
    'New' => 'Novo',
    'Assigned' => 'Atribuído',
    'Closed' => 'Encerrado',
    'Pending Input' => 'Informação Pendente',
    'Rejected' => 'Rejeitado',
    'Duplicate' => 'Duplicado',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Alta',
    'P2' => 'Média',
    'P3' => 'Baixa',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Usuário Regular',
    'Administrator' => 'Administrador:',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Ativo',
    'Inactive' => 'Inativo',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Ativo',
    'Terminated' => 'Desligado',
    'Leave of Absence' => 'De licença',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Alto',
        'Medium' => 'Médio',
        'Low' => 'Baixo',
    ),
    'project_task_priority_default' => 'Média',

    'project_task_status_options' => array (
        'Not Started' => 'Não Iniciada',
        'In Progress' => 'Em Andamento',
        'Completed' => 'Concluída',
        'Pending Input' => 'Informação Pendente',
        'Deferred' => 'Adiada',
    ),
    'project_task_utilization_options' => array (
        '0' => 'nenhum',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Rascunho',
        'In Review' => 'Em Revisão',
        'Underway' => 'Em andamento',
        'On_Hold' => 'Em Espera',
        'Completed' => 'Concluída',
    ),
    'project_status_default' => 'Rascunho',

    'project_duration_units_dom' => array (
        'Days' => 'Dias',
        'Hours' => 'Horas',
    ),

    'project_priority_options' => array (
        'High' => 'Alto',
        'Medium' => 'Médio',
        'Low' => 'Baixo',
    ),
    'project_priority_default' => 'Média',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Entidades',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Conta',
    'Opportunities' => 'Oportunidade',
    'Cases' => 'Ocorrência',
    'Leads' => 'Contato',
    'Contacts' => 'Contato', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Bug',
    'Project' => 'Projeto',

    'Prospects' => 'Alvo',
    'ProjectTask' => 'Tarefa de Projeto',


    'Tasks' => 'Tarefa',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Conta',
    'Contacts' => 'Contato',
    'Opportunities' => 'Oportunidade',
    'Tasks' => 'Tarefa',
    'Emails' => 'E-mail',

    'Bugs' => 'Bug',
    'Project' => 'Projeto',
    'ProjectTask' => 'Tarefa de Projeto',
    'Prospects' => 'Alvo',
    'Cases' => 'Ocorrência',
    'Leads' => 'Contato',

    'Meetings' => 'Reunião',
    'Calls' => 'Ligação',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Conta',
    'Contacts' => 'Contato',
    'Tasks' => 'Tarefa',
    'Opportunities' => 'Oportunidade',



    'Bugs' => 'Bug',
    'Cases' => 'Ocorrência',
    'Leads' => 'Contato',

    'Project' => 'Projeto',
    'ProjectTask' => 'Tarefa de Projeto',

    'Prospects' => 'Alvo',

  ),

  'issue_priority_default_key' => 'Média',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Urgente',
    'High' => 'Alto',
    'Medium' => 'Médio',
    'Low' => 'Baixo',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Aceito',
    'Duplicate' => 'Duplicado',
    'Closed' => 'Encerrado',
    'Out of Date' => 'Desatualizado',
    'Invalid' => 'Inválido',
  ),

  'issue_status_default_key' => 'Novo',
  'issue_status_dom' =>
  array (
    'New' => 'Novo',
    'Assigned' => 'Atribuído',
    'Closed' => 'Encerrado',
    'Pending' => 'Pendente',
    'Rejected' => 'Rejeitado',
  ),

  'bug_priority_default_key' => 'Média',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Urgente',
    'High' => 'Alto',
    'Medium' => 'Médio',
    'Low' => 'Baixo',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Aceito',
    'Duplicate' => 'Duplicado',
    'Fixed' => 'Corrigido',
    'Out of Date' => 'Desatualizado',
    'Invalid' => 'Inválido',
    'Later' => 'Mais tarde',
  ),
  'bug_status_default_key' => 'Novo',
  'bug_status_dom' =>
  array (
    'New' => 'Novo',
    'Assigned' => 'Atribuído',
    'Closed' => 'Encerrado',
    'Pending' => 'Pendente',
    'Rejected' => 'Rejeitado',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defeito',
    'Feature' => 'Recurso',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Administração',
    'Product' => 'Produto',
    'User' => 'Usuário',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Interno',
    'Forum' => 'Fórum',
    'Web' => 'Web',
    'InboundEmail' => 'Email de Entrada'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Contas',
    'Activities' => 'Atividades',
    'Bugs' => 'Bugs',
    'Calendar' => 'Calendário',
    'Calls' => 'Ligações',
    'Campaigns' => 'Campanhas',
    'Cases' => 'Ocorrências',
    'Contacts' => 'Contatos',
    'Currencies' => 'Moedas',
  'Dashboard' => 'Dashboard',
  'Documents' => 'Documentos',
    'Emails' => 'E-mails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Previsões',
    'Help' => 'Ajuda',
    'Home' => 'Início',
  'Leads' => 'Contatos',
  'Meetings' => 'Reuniões',
    'Notes' => 'Notas',
    'Opportunities' => 'Oportunidades',
    'Outlook Plugin' => 'Plugin do Outlook',
    'Projects' => 'Projetos',
    'Quotes' => 'Cotações',
    'Releases' => 'Versões',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Atualização:',
    'Users' => 'Usuários',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planejamento',
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
        'Complete' => 'Finalizada',
        'In Queue' => 'Na Fila',
        'Sending'=> 'Enviando',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Televendas',
        'Mail' => 'Email',
        'Email' => 'E-mail',
        'Print' => 'Impresso',
        'Web' => 'Web',
        'Radio' => 'Rádio',
        'Television' => 'Televisão',
        'NewsLetter' => 'Informativo',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Semanal',
        'Monthly' => 'Mensal',
        'Quarterly' => 'Trimestral',
        'Annually' => 'Anual',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"Janeiro",
                '2'=>"Fevereiro",
                '3'=>"Março",
                '4'=>"Abril",
                '5'=>"Maio",
                '6'=>"Junho",
                '7'=>"Julho",
                '8'=>"Agosto",
                '9'=>"Setembro",
                '10'=>"Outubro",
                '11'=>"Novembro",
                '12'=>"Dezembro",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Jan",
                '2'=>"Fev",
                '3'=>"Mar",
                '4'=>"Abr",
                '5'=>"Mai",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Ago",
                '9'=>"Set",
                '10'=>"Out",
                '11'=>"Nov",
                '12'=>"Dez",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Domingo",
                '2'=>"Segunda",
                '3'=>"Terça",
                '4'=>"Quarta",
                '5'=>"Quinta",
                '6'=>"Sexta",
                '7'=>"Sábado",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Dom",
                '2'=>"Seg",
                '3'=>"Ter",
                '4'=>"Qua",
                '5'=>"Qui",
                '6'=>"Sex",
                '7'=>"Sáb",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"am",
                'pm'=>"pm"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'AM',
                 'PM'=>'PM'
        ),

    'dom_report_types'=>array(
                'tabular'=>'Linhas e Colunas',
                'summary'=>'Soma',
                'detailed_summary'=>'Soma com detalhes',
                'Matrix' => 'Matriz',
        ),


    'dom_email_types'=> array(
        'out'       => 'Enviado',
        'archived'  => 'Arquivado',
        'draft'     => 'Rascunho',
        'inbound'   => 'Recebido',
        'campaign'  => 'Campanha'
    ),
    'dom_email_status' => array (
        'archived'  => 'Arquivado',
        'closed'    => 'Fechado',
        'draft'     => 'Rascunho',
        'read'      => 'Lido',
        'replied'   => 'Respondido',
        'sent'      => 'Enviado',
        'send_error'=> 'Erro no Envio',
        'unread'    => 'Não Lido',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Arquivado',
    ),

    'dom_email_server_type' => array(   ''          => '--Nenhum--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--Nenhum--',
                                     'createcase'  => 'Criar Ocorrência',
                                     'bounce'   => 'Gestão de Emails Retornados',
    ),
    'dom_email_distribution'=> array(''             => '--Nenhum--',
                                     'direct'       => 'Atribuição Direta',
                                     'roundRobin'   => 'Circular',
                                     'leastBusy'    => 'Menos Ocupado',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Circular',
                                                     'leastBusy'    => 'Menos Ocupado',
    ),
    'dom_email_errors'      => array(1 => 'Seleciona apenas um usuário ao Atribuir Diretamente os itens.',
                                     2 => 'É obrigatório atribuir os itens Somente Marcados ao Atribuir Diretamente os itens.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Sim',
                                     'bool_false' => 'Não',
    ),
    'dom_int_bool'          => array(1 => 'Sim',
                                     0 => 'Não',
    ),
    'dom_switch_bool'       => array ('on' => 'Sim',
                                        'off' => 'Não',
                                        '' => '--Nenhum--', ),

    'dom_email_link_type'   => array(   'sugar'     => 'Cliente de Email SuiteCRM',
                                        'mailto'    => 'Cliente de Email Externo'),


    'dom_email_editor_option'=> array(  ''          => '--Nenhum--',
                                        'html'      => 'Email HTML',
                                        'plain'     => 'Email Texto'),

    'schedulers_times_dom'  => array(   'not run'       => 'Passado tempo de execução, Não Wxecutado',
                                        'ready'         => 'Pronto',
                                        'in progress'   => 'Em Progresso',
                                        'failed'        => 'Falhou',
                                        'completed'     => 'Concluído',
                                        'no curl'       => 'Não executado: cURL não disponível',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Minutos',
        'hour' => 'Horas',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Ativo',
    'Inactive' => 'Inativo',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Direto',
    'Rollup' => 'Rolar',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Base de Conhecimento',
    'Sales' => 'Vendas',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Marketing Colateral',
    'Product Brochures' => 'Brochuras de Produtos',
    'FAQ' => 'Perguntas Frequentes',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Ativo',
    'Draft' => 'Rascunho',
    'FAQ' => 'Perguntas Frequentes',
    'Expired' => 'Expirado',
    'Under Review' => 'Em Revisão',
    'Pending' => 'Pendente',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Mesclar e-mail',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'Termos da Licença',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Aceitar',
    'decline' => 'Recusar',
    'tentative' => 'Tentarei',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Aceito',
    'decline' => 'Recusado',
    'tentative' => 'Tentarei',
    'none'      => 'Nenhum',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => '--Nenhum--',
    	'Daily'	=> 'Diariamente',
	'Weekly' => 'Semanal',
	'Monthly' => 'Mensal',
	'Yearly' => 'Anualmente',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dia(s)',
        'Weekly' => 'semana(s)',
        'Monthly' => 'mês(es)',
        'Yearly' => 'ano(s)',
    ),

    'duration_dom' => array(
    	'' => '--Nenhum--',
    	'900' => '15 minutos',
	'1800' => '30 minutos',
	'2700' => '45 minutos',
	'3600' => '1 hora',
	'5400' => '1,5 horas',
	'7200' => '2 horas',
	'10800' => '3 horas',
	'21600' => '6 horas',
	'86400' => '1 dia',
	'172800' => '2 dias',
	'259200' => '3 dias',
	'604800' => '1 semana',
    ),

// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',
    'Mailbox' => 'Mailbox',
),
*/
//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Padrão',
    'seed' => 'Automático',
    'exempt_domain' => 'Lista de Supressão - Por Domínio',
    'exempt_address' => 'Lista de Aupressão - Por Endereço de Email',
    'exempt' => 'Lista de Supressão - Por Id',
    'test' => 'Teste',
  ),

  'email_settings_num_dom' =>
  array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),
  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'Ativo',
    'inactive'=>'Inativo'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Mensagem Enviada/Tentativa',
    'send error'=>'Mensagens Retornadas, Outro',
    'invalid email'=>'Mensagens Retornadas, Email Inválido',
    'link'=>'Clicou no Link',
    'viewed'=>'Visualizou Mensagem',
    'removed'=>'Optou por Sair',
    'lead'=>'Leads Criados',
    'contact'=>'Contatos Criados',
    'blocked'=>'Suprimido por endereço ou domínio',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Contatos',
    'Users'=>'Usuários',
    'Prospects'=>'Alvos',
    'Leads'=>'Contatos',
    'Accounts'=>'Contas',
  ),
  'merge_operators_dom' => array (
    'like'=>'Contém',
    'exact'=>'Exatamente',
    'start'=>'Começa com',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Sim',
    'false'=>'Não',
    'required'=>'Obrigatório',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Desativado',
        '1'=>'Baixo Pulso',
        '2'=>'Médio Pulso',
        '3'=>'Alto Pulso',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Desativado',
        1=>'Ativo',
  ),

  'navigation_paradigms' => array(
        'm'=>'Módulos',
        'gm'=>'Módulos Agrupados',
  ),


    'projects_priority_options' => array (
        'high'      => 'Alto',
        'medium'    => 'Médio',
        'low'       => 'Baixo',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Não Iniciado',
        'inprogress'    => 'Em Andamento',
        'completed'     => 'Concluído',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Expandir Legenda',
        'collapselegend'    => 'Comprimir Legenda',
        'clickfordrilldown' => 'Clique para Drilldown',
        'drilldownoptions'  => 'Opções Drill Down',
        'detailview'        => 'Mais Detalhes...',
        'piechart'          => 'Gráfico de Pizza',
        'groupchart'        => 'Gráfico de Grupo',
        'stackedchart'      => 'Gráfico Empilhado',
        'barchart'      => 'Gráfico de Colunas',
        'horizontalbarchart'   => 'Gráfico de Barras',
        'linechart'         => 'Gráfico de Linha',
        'noData'            => 'Dados não disponíveis',
        'print'       => 'Imprimir',
        'pieWedgeName'      => 'seções',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Aspa Simples (\')',
        '"' => 'Aspas Duplas (")',
        '' => '--Nenhum--',
        'other' => 'Outro:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Outro:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Nova Janela',
        '_self' => 'Mesma Janela',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => 'Manualmente',
        '30'  => 'A Cada 30 segundos',
        '60'  => 'A Cada minuto',
        '180'   => 'A Cada 3 minutos',
        '300'   => 'A Cada 5 minutos',
        '600'   => 'A Cada 10 minutos',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Nunca',
        '30'  => 'Cada 30 segundos',
        '60'  => 'A Cada minuto',
        '180'   => 'A Cada 3 minutos',
        '300'   => 'A Cada 5 minutos',
        '600'   => 'A Cada 10 minutos',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Igual a',
    'not_equal' => 'Não em',
    'greater_than' => 'Depois',
    'less_than' => 'Antes',
    'last_7_days' => 'Últimos 7 Dias',
    'next_7_days' => 'Próximos 7 Dias',
    'last_30_days' => 'Últimos 30 Dias',
    'next_30_days' => 'Próximos 30 Dias',
    'last_month' => 'Mês Passado',
    'this_month' => 'Este Mês',
    'next_month' => 'Próximo Mês',
    'last_year' => 'Ano Passado',
    'this_year' => 'Este Ano',
    'next_year' => 'Próximo Ano',
    'between' => 'Está Entre',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Igual a',
    'not_equal' => 'Diferente De',
    'greater_than' => 'Maior Que',
    'greater_than_equals' => 'Maior Que Ou Igual A',
    'less_than' => 'Menor Que',
    'less_than_equals' => 'Menor Que Ou Igual A',
    'between' => 'Está Entre',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Copiar',
        'move' => 'Mover',
        'donothing' => 'Ignorar',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Próximo',
  'LBL_TOUR_SKIP' => 'Pular',
  'LBL_TOUR_BACK' => 'Voltar',
  'LBL_TOUR_CLOSE' => 'Fechar',
  'LBL_TOUR_TAKE_TOUR' => 'Iniciar o tour',
  'LBL_MY_AREA_LINKS' => 'Meus links de área:' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Aguardando' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Bem-vindo' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Pesquisa Avançada' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'Mais detalhes' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Editar Em Linha' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Exibição' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Pesquisar' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Remover' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Adicionar' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Coluna' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 Colunas' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 Colunas' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Pesquisa Avançada' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Adicionar' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Ocultar/Exibir' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Excluir' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Adicionar' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Limpar' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Remover' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Adicionar' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Logotipo da Empresa' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Calendário' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Avançada',
    'LBL_BASIC' => 'Básica',
    'LBL_MODULE_FILTER' => 'Filtrar Por',
    'LBL_CONNECTORS_POPUPS'=>'Popups de Conectores',
    'LBL_CLOSEINLINE'=>'Fechar',
    'LBL_EDITINLINE'=>'Editar',
    'LBL_VIEWINLINE'=>'Visualizar',
    'LBL_INFOINLINE'=>'Informação',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered By SugarCRM',
    'LBL_PRINT' => 'Imprimir',
    'LBL_HELP' => 'Ajuda',
    'LBL_ID_FF_SELECT' => 'Selecionar',
    'DEFAULT'                              => 'Básica',
    'LBL_SORT'                              => 'Classificar',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Adicionar Servidor...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'Ativar SMTP sobre SSL',
    'LBL_NO_ACTION'                         => 'Nenhuma ação com esse nome.',
    'LBL_NO_DATA'                           => 'Sem Dados',
    'LBL_ROUTING_ADD_RULE'                  => 'Adicionar Função',
    'LBL_ROUTING_ALL'                       => 'Pelo Menos',
    'LBL_ROUTING_ANY'                       => 'Qualquer',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Cancelar',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Salvar Regra',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Copiar Mensagem',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Excluir Objeto SuiteCRM',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Excluir Arquivo',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Excluir Email',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Encaminhar Email',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Marcar Email',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Marcar como Lido',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Marcar como Não Lido',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Mover Email',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Executar as seguintes ações',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Responder ao Email',

    'LBL_ROUTING_CHECK_RULE'                => 'Um erro foi detectado:\n',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Por favor, verifique todos os campos que estão marcados.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Tem certeza que deseja excluir esta regra?\nEstaação não pode ser desfeita.',

    'LBL_ROUTING_FLAGGED'                   => 'marca definida',
    'LBL_ROUTING_FORM_DESC'                 => 'Regras Salvas são ativadas imediatamente.',
    'LBL_ROUTING_FW'                        => 'EN:',
    'LBL_ROUTING_LIST_TITLE'                => 'Regras',
    'LBL_ROUTING_MATCH'                     => 'Se',
    'LBL_ROUTING_MATCH_2'                   => 'alguma das seguintes condições for atendida:',
    'LBL_NOTIFICATIONS'                     => 'Notificações',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Conteúdo do Corpo',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'De',
    'LBL_ROUTING_MATCH_NAME'                => 'Assunto',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Prioridade Alta',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Prioridade Normal',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Prioridade Baixa',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Para',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Contém',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Não contém',

    'LBL_ROUTING_NAME'                      => 'Nome da Regra',
    'LBL_ROUTING_NEW_NAME'                  => 'Nova Regra',
    'LBL_ROUTING_ONE_MOMENT'                => 'Um momento por favor...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Mensagem original a seguir.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Salvando Regra',
    'LBL_ROUTING_SUB_DESC'                  => 'Regras marcadas estão ativas. Clique no nome para editar.',
    'LBL_ROUTING_TO'                        => 'para',
    'LBL_ROUTING_TO_ADDRESS'                => 'endereço para',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'com modelo',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Este registro contém valores nos campos Telefone Comercial e Endereço. Para substituir estes valores com o Telefone Comercial e Endereço da Conta selecionada, clique em "OK". Para manter os valores atuais, clique em "Cancelar".',
  'LBL_DROP_HERE' => '[Largue Aqui]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Editar',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Preencher Padrões do Gmail&#153;',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Nome',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Propriedades do Servidor de Envio de Email',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Agente de transferência de email',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Utilizar Autenticação SMTP?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'Senha SMTP:',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'Porta SMTP:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'Servidor SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Usar SSL ao conectar',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'Usuário SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Padrão',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Alerta: Infomrações de usuário e senha para a conta de envio de email ausentes.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'Usuário SMTP necessário',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'Senha SMTP necessária',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Gestão da Conta de Email',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Protocolo do tipo POP3 para Servidor de Email não será suportado na próxima versão. Somente IMAP será suportado.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Configure Contas de Email para visualizar as mensagens recebidas de suas contas de email.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Forneça as informações do servidor SMTP para o envio de email nas Contas de Email.',
    'LBL_EMAIL_ADD'                         => 'Adicionar Endereço',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Concluído',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Limpar',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'Para:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Cco:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'Para/Cc/Cco',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Nova Lista',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Endereço de Email',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'No momento, apenas a edição de Contato é suportada.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filtro',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Primeiro Nome/Nome da Conta',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Sobrenome',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Meus Contatos',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Minhas Listas de Email',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Nome',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Nenhum Endereço encontrado',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Salvar e Adicionar à Agenda de Endereços',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Pesquisar',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Selecione Destinatários do Email',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Agenda de Endereços',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Relatórios',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Lista de Contatos',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Alerta! A conta de envio que você está tentando excluir está associada à uma conta de recebimento existente. Tem certeza que deseja continuar?',
    'LBL_EMAIL_ADDRESSES'                   => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Endereço de Email',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Endereços de Email',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Importar ao SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Atribuição',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Anexar',
    'LBL_EMAIL_ATTACHMENT'                  => 'Anexar',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Do Sistema Local',
    'LBL_EMAIL_ATTACHMENTS2'                => 'Dos Documentos SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Anexos de Modelo',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Arquivo',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Documentos',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Embutido',
    'LBL_EMAIL_BCC'                         => 'CCO',
    'LBL_EMAIL_CANCEL'                      => 'Cancelar',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Conjunto de Caracteres',
    'LBL_EMAIL_CHECK'                       => 'Verificar Email',
    'LBL_EMAIL_CHECKING_NEW'                => 'Verificando Novo Email',
    'LBL_EMAIL_CHECKING_DESC'               => 'Um momento, por favor... <br><br>Se esta é a primeira vez que verifica email nesta conta, este processo pode demorar um pouco.',
    'LBL_EMAIL_CLOSE'                       => 'Fechar',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Verificando Novo Email. <br><br>Grandes contas de email podem demorar consideravelmente.',
    'LBL_EMAIL_COMMON'                      => 'Comum',

    'LBL_EMAIL_COMPOSE'                     => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Por favor, informe o(s) destinatário(s) deste email. ',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Associar com',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'O corpo deste email está vazio. Enviar assim mesmo?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Este email não contém assunto. Enviar assim mesmo?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(sem assunto)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Ler & Escrever Email',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Enviar a partir da Conta de Email',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Opções',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Por favor, informe um endereço de email válido nos campos Para, CC e CCO.',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Descartar este email?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Remover estes registros da sua Agenda de Endereços?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Tem certeza que deseja excluir esta assinatura?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Criar ao Salvar--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Múltiplo',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vazio',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Data do Envio pelo Remetente',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Data de Recebimento',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Atribuído ao Usuário',
    'LBL_EMAIL_DATE_TODAY'                  => 'Hoje',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Ontem',
    'LBL_EMAIL_DD_TEXT'                     => 'email(s) selecionado(s).',
    'LBL_EMAIL_DEFAULTS'                    => 'Padrões',
    'LBL_EMAIL_DELETE'                      => 'Excluir',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Excluir mensagens selecionadas?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Email excluído com sucesso.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Excluindo Mensagem',
    'LBL_EMAIL_DETAILS'                     => 'Detalhes',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Exibindo email(s) {0} - {1} de {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Exibindo endereço(s) de email {0} - {1} de {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Editar Contato',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Somente o endereço Principal será utilizado ao trabalhar com Contatos.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Editar Lista de Email',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Esvaziando Lixeira',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Excluindo servidor de envio',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Limpando arquivos em cache',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Nenhum email a exibir.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Nenhum endereço de email a exibir.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Nome da Pasta deve ser único e preenchido. Por favor, tente novamente.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Não foi possível excluir a pasta. A pasta ou suas subpastas possuem emails ou uma caixa de email está associada à ela.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Não foi possível determinar a pasta destinatária a partir do contexto. Tente novamente.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Por favor, verifique as suas configurações.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Por favor, verifique se o sobrenome foi informado.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Erros foram detectados:',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Você não tem acesso a esta área. Por favor, contate o seu administrador de sistemas para obter acesso.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Nomes das Pastas SuiteCRM devem ser únicos.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Por favor, informe algum critério de pesquisa.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Ocorreu um erro',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Uma lista de email com este nome já existe',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Mensagem Removida do Servidor',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Tanto a mensagem Removida do Servidor quanto a movida para uma pasta diferente',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Conexão com o servidor de email falhou. Por favor, contate seu Administrador',
    'LBL_EMAIL_ERROR_MOVE'                  => 'No momento, a ação de movendo email entre servidor e/ou contas de email não é suportada. ',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Erro ao Mover',
    'LBL_EMAIL_ERROR_NAME'                  => 'Um nome é necessário.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Endereço De é necessário. Por favor, informe um endereço de email válido.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Por favor, forneça um arquivo.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'No momento, a ação de renomear pasta IMAP não é suportada.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Um endereço de servidor de email é necessário.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'A conta de email pode não ter sido salva.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Um erro ocorreu durante a comunicação com o servidor de email.',
    'LBL_EMAIL_ERROR_USER'                  => 'Um login é necessário.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Uma senha é necessária.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Uma porta do servidor de email é necessária.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Um protocolo do servidor é necessário.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Pasta Monitorada é necessária.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Pasta de Lixeira é necessária.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Esta informação está indisponível',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Nenhum servidor de envio de email informado.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Pastas',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Mover Para',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Adicionar',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Adicionar Nova Pasta',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renomear Pasta',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Salvar',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Adicionar esta pasta a',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Esta pasta não pode ser alterada',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Tem certeza que deseja excluir esta pasta?\nEste processo não pode ser revertido.\nExclusões de Pastas serão executadas em cascatas com todas subpastas.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Novo Nome de Pasta',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Por favor, selecione uma pasta antes de executar esta ação.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Gerenciamento de Pastas',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Usando Grupo',

    'LBL_EMAIL_FORWARD'                     => 'Encaminhar',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => '[[count]] de [[total]] emails baixados',
    'LBL_EMAIL_FOUND'                       => 'Encontrado',
    'LBL_EMAIL_FROM'                        => 'De',
    'LBL_EMAIL_GROUP'                       => 'grupo',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Grupo',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Início',
    'LBL_EMAIL_HTML_RTF'                    => 'Enviar HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Excluindo Conta de Email',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Excluindo assinatura',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Tem certeza que deseja excluir esta conta de email?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Exclusão efetuada com sucesso.',
    'LBL_EMAIL_IE_SAVE'                     => 'Salvando Informações da Conta de Email',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Importando Email',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Importar ao SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Configurações de Importação',
    'LBL_EMAIL_INVALID'                     => 'Inválido',
    'LBL_EMAIL_LOADING'                     => 'Carregando...',
    'LBL_EMAIL_MARK'                        => 'Marcar',
    'LBL_EMAIL_MARK_FLAGGED'                => 'Como Sinalizado',
    'LBL_EMAIL_MARK_READ'                   => 'Como Lido',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'Como Não Sinalizado',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Como Não Lido',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Atribuir a',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Criar Pasta',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Escrever para',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Excluir Pasta',
    'LBL_EMAIL_MENU_EDIT'                   => 'Editar',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Esvaziar Lixeira',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Sincronizar',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Limpar arquivos em cache',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Remover',
    'LBL_EMAIL_MENU_RENAME'                 => 'Renomear',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Renomear Pasta',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Renomeando Pasta',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Por favor, selecione antes de executar esta operação.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Criar uma Pasta (remota ou no SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Arquivar este(s) email(s) no SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Escrever email para as Listas de Emails selecionadas',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Escrever email para este Contato',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Remover um Contato',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Excluir este(s) email(s) ',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Excluir uma Pasta (remota ou no SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Editar um Contato',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Editar uma Lista de Email',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Esvaziar todas as pastas de Lixeira em suas contas de email',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Marcar este(s) email(s) sinalizado(s)',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Marcar este(s) email(s) lido(s)',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Marcar este(s) email(s) não sinalizado(s)',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Marcar este(s) email(s) não lido(s)',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Remover Listas de Emails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Renomeie uma Pasta (remota ou no SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Responder a este(s) email(s)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Responder a todos os destinatários para este(s) email(s)',

    'LBL_EMAIL_MESSAGES'                    => 'mensagens',

    'LBL_EMAIL_ML_NAME'                     => 'Nome da Lista',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Listas de Endereços selecionadas',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Listas de Endereços disponíveis',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Click</b> para seleção múltipla<br />(Usuários Mac devem usar <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'Não',
    'LBL_EMAIL_NOT_SENT'                    => 'O sistema é incapaz de processar o seu pedido. Por favor, contate o administrador do sistema.',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Um momento por favor...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Abrir Múltiplas Mensagens',
    'LBL_EMAIL_OPTIONS'                     => 'Opções',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Redação Rápida',
    'LBL_EMAIL_OPT_OUT'                     => 'Optou por Sair',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Desmarcada e Inválida',
    'LBL_EMAIL_PAGE_AFTER'                  => 'de {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Página',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Executando Tarefa',
    'LBL_EMAIL_PRIMARY'                     => 'Principal',
    'LBL_EMAIL_PRINT'                       => 'Imprimir',

    'LBL_EMAIL_QC_BUGS'                     => 'Bug',
    'LBL_EMAIL_QC_CASES'                    => 'Ocorrência',
    'LBL_EMAIL_QC_LEADS'                    => 'Contato',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Contato',
    'LBL_EMAIL_QC_TASKS'                    => 'Tarefa',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Oportunidade',
    'LBL_EMAIL_QUICK_CREATE'                => 'Criar Rápido',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Reconstruindo Pastas',
    'LBL_EMAIL_RELATE_TO'                   => 'Relacionar',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Visualizar Relacionamentos',
    'LBL_EMAIL_RECORD'                => 'Registro de Email',
    'LBL_EMAIL_REMOVE'                      => 'Remover',
    'LBL_EMAIL_REPLY'                       => 'Responder',
    'LBL_EMAIL_REPLY_ALL'                   => 'Responder Todos',
    'LBL_EMAIL_REPLY_TO'                    => 'Responder-para',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Recuperando Lista de Email',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Recuperando Mensagem',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Recuperando Registro de Email',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Por favor, selecione apenas um registro de email',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Retornar ao Módulo Anterior?',
    'LBL_EMAIL_REVERT'                      => 'Reverter',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Relacionar Email',

    'LBL_EMAIL_RULES_TITLE'                 => 'Gerenciamento de Regras',

    'LBL_EMAIL_SAVE'                        => 'Salvar',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Salvar e Responder',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Salvar Rascunho',

    'LBL_EMAIL_SEARCHING'                   => 'Realizando Pesquisa',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Pesquisa Avançada',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Data De',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Data Até',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Texto do Corpo',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Nenhum resultado encontrado com o seu critério de pesquisa.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Resultados da Pesquisa',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Pesquisa Simples',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Pesquisar conta de email',

    'LBL_EMAIL_SELECT'                      => 'Selecionar',

    'LBL_EMAIL_SEND'                        => 'Enviar',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Enviando Email',

    'LBL_EMAIL_SETTINGS'                    => 'Configurações',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Linhas',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Colunas',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Estilo do Layout',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Contas de Email',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Limpar Formulário',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Importar Email ao Visualizar',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Verificar Novo Email',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Usar Painel de Pré Visualização',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Usar Janela Popup',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Número de emails por página',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Editar Conta de Email',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Pastas',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Do Endereço',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Endereço de Email para Notificação de Teste:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'Para Endereço de Email',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Do Nome',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Responder ao Endereço',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Tela Cheia',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Sincronizar todas Contas de Email',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'Um email foi enviado para o endereço informado, utilizando as informações de configuração de envio de email fornecidas. Por favor, verifique se recebeu o email para confirmar se as configurações estão corretas.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Ao executar esta ação, as contas de email e seus conteúdos serão sincronizados.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Executar uma sincronização completa? \nGrandes contas de email podem levar alguns minutos para sincronizar.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Clique pressionando a tecla Shift ou Ctrl para seleção múltipla de pastas.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Geral',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Pastas de Grupo Disponíveis',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Criar Pastas de Grupo',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Salvando Pastas de Grupo',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Recuperando Pasta de Grupo',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Editar Pasta de Grupo',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Nome da Conta de Email',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Selecione o número de emails por página na Caixa de Entrada. Talvez seja necessário atualizar a página para que esta configuração tenha efeito.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Recuperando Conta de Email',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Regras',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'As configurações foram salvas.\n\nÉ necessário recarregar a página para que as novas configurações tenham efeito.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Somente Enviar Emails como Texto Puro',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Ativo',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Emails por Página',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Coloque as Guias para Baixo',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Configurações Visuais',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Preferências',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Mostrar Avançado',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Pastas de Usuário Disponíveis',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Erro:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'O servidor de envio selecionado para a conta de email que você está usando é inválido.  Verifique as configurações ou selecione um servidor de envio diferente para a conta de email.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Um servidor de envio não está configurado para enviar emails. Por favor, configure um servidor de envio ou selecione um para a conta de email que você está usando, em Configurações >> Conta de Email.',
    'LBL_EMAIL_SHOW_READ'                   => 'Exibir Todos',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Exibir Somente Não Lidos',
    'LBL_EMAIL_SIGNATURES'                  => 'Assinaturas:',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Criar Assinatura',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Nome da Assinatura',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Corpo da Assinatura',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Outro',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Pastas Remotas ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Pastas SuiteCRM ]',
    'LBL_EMAIL_SUBJECT'                     => 'Assunto',
    'LBL_EMAIL_SUCCESS'                     => 'Sucesso',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'Pasta SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Corpo do modelo de email está vazio',
    'LBL_EMAIL_TEMPLATES'                   => 'Modelos',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Primeira Página',
    'LBL_EMAIL_TEXT_PREV'                   => 'Pagina Anterior',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Próxima Página',
    'LBL_EMAIL_TEXT_LAST'                   => 'Última Página',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Atualizar',
    'LBL_EMAIL_TO'                          => 'Para',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Alternar Lista',
    'LBL_EMAIL_VIEW'                        => 'Exibição',
    'LBL_EMAIL_VIEWS'                       => 'Exibições',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Exibir Cabeçalhos',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Versão para Impressão',
    'LBL_EMAIL_VIEW_RAW'                    => 'Exibir Email sem Formatação',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Este recurso não é suportado quando usado com POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Texto do link padrão.',
    'LBL_EMAIL_YES'                         => 'Sim',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Enviar Email de Teste',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Email de Teste enviado',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Mensagem Não',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Importação Passou',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'A importação falhou porque a mensagem já foi importada ou foi excluída do servidor',

    'LBL_LINK_NONE'=> 'Nenhum',
    'LBL_LINK_ALL'=> 'Todos',
    'LBL_LINK_RECORDS'=> 'Registros',
    'LBL_LINK_SELECT'=> 'Selecionar',
    'LBL_LINK_ACTIONS'=> 'Ações',
    'LBL_LINK_MORE'=> 'Mais',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Confirmar",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Deseja realmente fechar este #module#?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Não mostrar essa mensagem no futuro: &nbsp;",
    'LBL_INVALID_FILE_EXTENSION' => 'Extensão de Arquivo Inválida',


    'ERR_AJAX_LOAD'     => 'Ocorreu um erro:',
    'ERR_AJAX_LOAD_FAILURE'     => 'Ocorreu um erro ao processar sua solicitação, por favor tente novamente mais tarde.',
    'ERR_AJAX_LOAD_FOOTER' => 'Se este erro persistir, por favor solicite ao administrador do sistema para desativar o Ajax para este módulo',
    'ERR_CREATING_FIELDS' => 'Erro no preenchimento dos campos de detalhes adicionais:',
    'ERR_CREATING_TABLE' => 'Erro ao criar a tabela:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "O caracter de separador decimal não pode ser o mesmo utilizado como separador de milhares..\n\n  Por favor, altere os valores.",
    'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para excluir o contato.',
    'ERR_EXPORT_DISABLED' => 'Exportação Desativada.',
    'ERR_EXPORT_TYPE' => 'Erro ao exportar',
    'ERR_INVALID_AMOUNT' => 'Por favor, informe um valor válido.',
    'ERR_INVALID_DATE_FORMAT' => 'O formato da data deve ser:',
    'ERR_INVALID_DATE' => 'Por favor, informe uma data válida.',
    'ERR_INVALID_DAY' => 'Por favor, informe um dia válido.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'endereço de e-mail inválido.',
    'ERR_INVALID_FILE_REFERENCE' => 'Referencia de Arquivo Inválida',
    'ERR_INVALID_HOUR' => 'Por favor, informe uma hora válida.',
    'ERR_INVALID_MONTH' => 'Por favor, informe um mês válido.',
    'ERR_INVALID_TIME' => 'Por favor, informe um horário válido.',
    'ERR_INVALID_YEAR' => 'Por favor, informe um ano válido com 4 dígitos.',
    'ERR_NEED_ACTIVE_SESSION' => 'É necessária uma sessão ativa para exportar o contéudo.',
    'ERR_NO_HEADER_ID' => 'Este recurso está indisponível neste tema.',
    'ERR_NOT_ADMIN' => "Acesso à administração não autorizada.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Campo obrigatório não preenchido:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obrigatório inválido:',
    'ERR_INVALID_VALUE' => 'Valor Inválido:',
    'ERR_NO_SUCH_FILE' =>'Arquivo não existente no sistema',
    'ERR_NO_SINGLE_QUOTE' => 'Não é possível usar a aspa simples para',
    'ERR_NOTHING_SELECTED' =>'Por favor, selecione antes de continuar.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Já existe uma oportunidade com o nome %s .  Por favor, informe outro nome abaixo.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Não foi informado um nome para a oportunidade.  Por favor, informe um nome para a oportunidade abaixo.',
    'ERR_POTENTIAL_SEGFAULT' => 'Foi detectada uma potencial falha de segmentação do Apache. Por favor, notifique o administrador do sistema para confirmar este problema e solicite a ele/ela que relate a falha ao SuiteCRM. ',
    'ERR_SELF_REPORTING' => 'Usuário não pode reportar-se a si mesmo.',
    'ERR_SINGLE_QUOTE'  => 'O uso da aspa simples não é suportado para este campo.  Por favor, altere o valor.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nenhum resultado para o campo:',
    'ERR_SQS_NO_MATCH' =>'Nenhum Resultado',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Por favor, especifique o índice \'chave\' no atributo displayParams na definição dos metadados.',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Erro: O Nome do Portal já está atribuído a um outro contrato.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'O valor do campo não é compatível com o valor da precisão',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Ocorreu um erro ao tentar salvar a conta externa.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Ocorreu um erro ao carregar o arquivo.  Por favor, certifique-se que o arquivo que está sendo carregado não está vazio.',
    'ERR_NO_DB' => 'Não foi possível conectar ao banco de dados. Por favor, verifique o arquivo de log de erros do SuiteCRM para maiores detalhes.',
    'ERR_DB_FAIL' => 'Falha do banco de dados. Por favor, verifique o arquivo de log de erros do SuiteCRM para maiores detalhes.',
    'ERR_EXTERNAL_API_403' => 'Permissão Negada. Tipo de arquivo não é suportado.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Token de Acesso OAuth faltante.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} arquivos só podem ser utilizados com um banco de dados SuiteCRM {1} .',


    'LBL_ACCOUNT'=>'Conta',
    'LBL_OLD_ACCOUNT_LINK'=>'Conta Antiga',
    'LBL_ACCOUNTS'=>'Contas',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Visualizar Resumo',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Visualizar Resumo',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Adicionar',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_ADD_DOCUMENT' => 'Adicionar Documento',
    'LBL_REPLACE_BUTTON' => 'Substituir',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Adicionar à Lista de Alvos',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Adicionar à lista de Alvos',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Clique para Fechar',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Fechar',
    'LBL_ADDITIONAL_DETAILS' => 'Detalhes Adicionais',
    'LBL_ADMIN' => 'Administrador',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arquivar',
    'LBL_ASSIGNED_TO_USER'=>'Atribuído ao Usuário',
    'LBL_ASSIGNED_TO' => 'Atribuído a:',
    'LBL_BACK' => 'Voltar',
    'LBL_BILL_TO_ACCOUNT'=>'Faturar para a Conta',
    'LBL_BILL_TO_CONTACT'=>'Faturar para o Contato',
    'LBL_BILLING_ADDRESS'=>'Endereço de Faturamento',
    'LBL_QUICK_CREATE_TITLE' => 'Criar Rápido',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS'=>'Bugs',
    'LBL_BY' => 'por',
    'LBL_CALLS'=>'Ligações',
    'LBL_CALL'=>'Ligação',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Enviar Emails de Campanhas em Fila de Espera',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Enviar',
    'LBL_CASE'=>'Ocorrência',
    'LBL_CASES'=>'Ocorrências',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Alterar senha',
    'LBL_CHANGE_BUTTON_LABEL' => 'Alterar',
    'LBL_CHANGE_BUTTON_TITLE' => 'Alterar',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Verificar Todos',
    'LBL_CITY' => 'Cidade:',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Limpar',
    'LBL_CLEAR_BUTTON_TITLE' => 'Limpar',
    'LBL_CLEARALL' => 'Limpar Tudo',
    'LBL_CLOSE_BUTTON_TITLE' =>'Fechar',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Fechar Janela',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Fechar Tudo',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Fechar Tudo',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Fechar e Criar Novo',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Fechar e Criar Novo',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Itens Abertos:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Escrever Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Escrever Email',
    'LBL_SEARCH_DROPDOWN_YES'=>'Sim',
    'LBL_SEARCH_DROPDOWN_NO'=>'Não',
    'LBL_CONTACT_LIST' => 'Lista de Contatos',
    'LBL_CONTACT'=>'Contato',
    'LBL_CONTACTS'=>'Contatos',
    'LBL_CONTRACTS'=>'Contratos',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATE_BUTTON_LABEL' => 'Criar',
    'LBL_CREATED_BY_USER'=>'Criado pelo Usuário',
    'LBL_CREATED_USER'=>'Criado pelo Usuário',
    'LBL_CREATED_ID' => 'Criado pelo Id',
    'LBL_CREATED' => 'Criado por:',
    'LBL_CURRENT_USER_FILTER' => 'Meus Itens:',
    'LBL_CURRENCY'=>'Moeda',
    'LBL_DOCUMENTS'=>'Documentos',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_DUPLICATE_BUTTON' => 'Duplicar',
    'LBL_DELETE_BUTTON' => 'Excluir',
    'LBL_DELETE' => 'Excluir',
    'LBL_DELETED'=>'Excluído',
    'LBL_DIRECT_REPORTS'=>'Reporta diretamente a',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Concluído',
    'LBL_DONE_BUTTON_TITLE' => 'Concluído',
    'LBL_DST_NEEDS_FIXIN' => 'O aplicativo necessita que seja aplicada uma correção sobre o Horário de Verão.  Por favor, vá em <a href="index.php?module=Administration&action=DstFix">Reparar</a> no painel de Administração e aplique a correção sobre o Horário de Verão.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Editar como Novo',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Editar como Novo',
    'LBL_FAVORITES' => 'Favoritos',
    'LBL_FILTER_MENU_BY' => 'Filtrar Menu Por',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Por favor, selecione um arquivo vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'o vCard não contém todos os campos obrigatórios para este módulo. Por favor, verifique o sugarcrm.log para maiores detalhes.',
    'LBL_VCARD_ERROR_FILESIZE' => 'O arquivo carregado excede o limite de tamanho de 30000 bytes, que foi especificado no formulário HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Ocorreu um erro ao carregar o arquivo vCard. Por favor, verifique o sugarcrm.log para maiores detalhes.',
    'LBL_IMPORT_VCARD' => 'Importar vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importar vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importar vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Exibição',
    'LBL_VIEW_BUTTON_TITLE' => 'Exibição',
    'LBL_VIEW_BUTTON' => 'Exibição',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email PDF',
    'LBL_EMAILS'=>'E-mails',
    'LBL_EMPLOYEES' => 'Funcionários',
    'LBL_ENTER_DATE' => 'Informe a Data',
    'LBL_EXPORT_ALL' => 'Exportar Tudo',
    'LBL_EXPORT' => 'Exportar',
    'LBL_FAVORITES_FILTER' => 'Meus Favoritos:',
    'LBL_GO_BUTTON_LABEL' => 'Ir',
    'LBL_GS_HELP' => 'Os campos neste módulo, que são usados nesta pesquisa, aparecem acima.  O texto realçado corresponde ao seu critério de pesquisa.',
    'LBL_HIDE'=>'Ocultar',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Importar',
    'LBL_IMPORT_STARTED' => 'Importação Iniciada:',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Deve especificar um delimitador customizado.',
    'LBL_LAST_VIEWED' => 'Vistos Recentemente',
    'LBL_SHOW_LESS' => 'Exibir Menos',
    'LBL_SHOW_MORE' => 'Exibir Mais',
    'LBL_TODAYS_ACTIVITIES' => 'Atividades de Hoje',
    'LBL_LEADS'=>'Contatos',
    'LBL_LESS' => 'menos',
    'LBL_CAMPAIGN' => 'Campanha:',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGNLOG' => 'Log da Campanha',
    'LBL_CAMPAIGN_CONTACT'=>'Campanhas',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Mapa do Site',
    'LBL_THEME'=>'Tema:',
    'LBL_THEME_PICKER'=>'Estilo de Página',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Alerta: O Internet Explorer 6 não é suportado para o tema selecionado. Clique em OK para selecioná-lo de qualquer maneira, ou clique em Cancelar para selecionar um tema diferente.',
    'LBL_FOUND_IN_RELEASE'=>'Encontrado na Versão:',
    'LBL_FIXED_IN_RELEASE'=>'Corrigido na Versão',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_ASSIGNED_USER' => 'Usuário',
    'LBL_LIST_CONTACT_NAME' => 'Nome do Contato',
    'LBL_LIST_CONTACT_ROLE' => 'Função do Contato',
    'LBL_LIST_DATE_ENTERED'=>'Data de Criação',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OF' => 'de',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_RELATED_TO' => 'Referente a',
    'LBL_LIST_USER_NAME' => 'Nome de usuário',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Tem certeza que deseja atualizar a lista toda?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Por favor, selecione pelo menos 1 registro para prosseguir.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Por favor, selecione pelo menos 2 registros para prosseguir.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Por favor, selecione menos de 10 registros para prosseguir.',
    'LBL_LISTVIEW_ALL' => 'Todos',
    'LBL_LISTVIEW_NONE' => 'Desmarcar Todos',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Selecione esta página',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Selecionar tudo',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Registros Selecionados',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selecionado:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'João',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Silva',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Extraordinário Programador',
    'LBL_LOGIN_TO_ACCESS' => 'Por favor, entre com sua senha para acessar esta área.',
    'LBL_LOGOUT' => 'Sair',
    'LBL_PROFILE' => 'Perfil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Mesclar e-mail',
    'LBL_MASS_UPDATE' => 'Atualização em Massa',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Não há campos disponíveis para a operação de Atualização em Massa',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Email Principal',
    'LBL_MEETINGS'=>'Reuniões',
    'LBL_MEETING'=>'Reunião',
    'LBL_MEETING_GO_BACK'=>'Retornar à reunião',
    'LBL_MEMBERS'=>'Membros',
    'LBL_MEMBER_OF'=>'Membro de',
    'LBL_MODIFIED_BY_USER'=>'Modificado pelo Usuário',
    'LBL_MODIFIED_USER'=>'Modificado pelo Usuário',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_MODIFIED_NAME'=>'Modificado Por Nome',
    'LBL_MODIFIED_ID'=>'Modificado Por Id',
    'LBL_MORE' => 'Mais',
    'LBL_MY_ACCOUNT' => 'Minhas Configurações',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Criar',
    'LBL_NEW_BUTTON_TITLE' => 'Criar',
    'LBL_NEXT_BUTTON_LABEL' => 'Próximo',
    'LBL_NONE' => '--Nenhum--',
    'LBL_NOTES'=>'Notas',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Abrir Todos',
    'LBL_OPENALL_BUTTON_TITLE' => 'Abrir Todos',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Abrir Para:',
    'LBL_OPENTO_BUTTON_TITLE' => 'Abrir Para:',
    'LBL_OPPORTUNITIES'=>'Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_OPPORTUNITY'=>'Oportunidade',
    'LBL_OR' => 'OU',
    'LBL_LOWER_OR' => 'ou',
    'LBL_PANEL_OVERVIEW' => 'Visão geral',
    'LBL_PANEL_ASSIGNMENT' => 'Outro',
    'LBL_PANEL_ADVANCED' => 'Mais Informações',
    'LBL_PARENT_TYPE' => 'Tipo de Referência',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Intervalo',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Endereço Principal - Cidade:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Endereço Principal - País:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Endereço Principal - CEP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Endereço Principal - Estado:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Endereço Principal - Rua 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Endereço Principal - Rua 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Endereço Principal - Rua:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço Principal:',

	'LBL_BILLING_STREET'=> 'Rua:',
	'LBL_SHIPPING_STREET'=> 'Rua:',

    'LBL_PROSPECTS'=>'Potenciais',
    'LBL_PRODUCT_BUNDLES'=>'Pacotes de Produto',
    'LBL_PRODUCTS'=>'Produtos',
    'LBL_PROJECT_TASKS'=>'Tarefas de Projetos',
    'LBL_PROJECTS'=>'Projetos',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Criar Oportunidade a partir da Cotação',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Criar Oportunidade a partir da Cotação',
    'LBL_QUOTES_SHIP_TO'=>'Cotações Entregar para',
    'LBL_QUOTES'=>'Cotações',

    'LBL_RELATED' => 'Relacionado',
    'LBL_RELATED_INFORMATION' => 'Informações Relacionadas',
    'LBL_RELATED_RECORDS' => 'Registros Relacionados',
    'LBL_REMOVE' => 'Remover',
    'LBL_REPORTS_TO' => 'Reporta a',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indica campo obrigatório',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Concluído',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Salvar Como',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Salvar Como',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formulário Completo',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formulário Completo',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salvar & Criar Novo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salvar & Criar Novo',
    'LBL_SAVE_OBJECT' => 'Salvar {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Pesquisar',
    'LBL_SEARCH_BUTTON_TITLE' => 'Pesquisar',
    'LBL_SEARCH' => 'Pesquisar',
    'LBL_SEARCH_TIPS' => "Pressione o botão de pesquisa ou clique em entrar para obter uma correspondência exata para os critérios.",
    'LBL_SEARCH_TIPS_2' => "Pressione o botão de pesquisa ou clique em entrar para obter uma correspondência exata para",
    'LBL_SEARCH_MORE' => 'mais',
    'LBL_SEE_ALL' => 'Ver Todos',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Formato de arquivo inválido, somente arquivo de imagem pode ser carregado.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Selecionar',
    'LBL_SELECT_BUTTON_TITLE' => 'Selecionar',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Adicionar Time(s)',
    'LBL_SELECT_TEAMS_TITLE' => 'Adicionar Time(s)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Procurar Documentos',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Procurar Documentos',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selecionar Contato',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selecionar Contato',
    'LBL_GRID_SELECTED_FILE' => 'arquivo selecionado',
    'LBL_GRID_SELECTED_FILES' => 'arquivos selecionados',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selecione a partir de Relatórios',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Relatórios Selecionados',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Selecionar Usuário',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Selecionar Usuário',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Limpar Seleção',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Limpar Seleção',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Limpar Seleção',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Limpar Seleção',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selecionar Arquivo',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Selecionar Arquivo',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Limpar Arquivo',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Limpar Arquivo',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Selecionar Usuário',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Selecionar Usuário',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Limpar Usuário',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Limpar Usuário',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Selecionar Conta',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Selecionar Conta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Limpar Conta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Limpar Conta',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Selecionar Campanha',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Selecionar Campanha',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Limpar Campanha',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Limpar Campanha',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Selecionar Contato',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Selecionar Contato',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Limpar Contato',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Limpar Contato',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Selecionar Equipe',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Selecionar Equipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Limpar Equipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Limpar Equipe',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Recursos usados para construir esta página (consultas, arquivos)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'segundos.',
    'LBL_SERVER_RESPONSE_TIME' => 'Tempo de resposta do servidor:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Uso da Memória do Servidor: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Uso: - módulo: {0} - ação: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Piso de Uso da Memória do Servidor: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Entregar para a Conta',
    'LBL_SHIP_TO_CONTACT'=>'Entregar para o Contato',
    'LBL_SHIPPING_ADDRESS'=>'Endereço de Entrega',
    'LBL_SHORTCUTS' => 'Atalhos',
    'LBL_SHOW'=>'Mostrar',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Estado:',
    'LBL_STATUS_UPDATED'=>'Seu Status para este evento foi atualizado!',
    'LBL_STATUS'=>'Status:',
    'LBL_STREET'=>'Rua',
    'LBL_SUBJECT' => 'Assunto',

    'LBL_INBOUNDEMAIL_ID' => 'ID do Email de Entrada',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2013 SugarCRM Inc. O Programa é fornecido COMO ESTÁ, sem garantias.  Licenciado sob <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM é uma marca registrada de SugarCRM, Inc. Todos os outros nomes de empresas e produtos podem ser marcas registradas de suas respectivas empresas, nas quais eles podem estar associados.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Todos Direitos Reservados.<br />SugarCRM é uma marca registrada de SugarCRM, Inc. Todos os outros nomes de empresas e produtos podem ser marcas registradas de suas respectivas empresas, nas quais eles podem estar associados.',


    'LBL_SYNC' => 'Sincronizar',
    'LBL_TABGROUP_ALL' => 'Todos',
    'LBL_TABGROUP_ACTIVITIES' => 'Atividades',
    'LBL_TABGROUP_COLLABORATION' => 'Colaboração',
    'LBL_TABGROUP_HOME' => 'Dashboard',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Meus Sites',
    'LBL_TABGROUP_OTHER' => 'Outro',
    'LBL_TABGROUP_REPORTS' => 'Relatórios',
    'LBL_TABGROUP_SALES' => 'Comercial',
    'LBL_TABGROUP_SUPPORT' => 'Suporte',
    'LBL_TABGROUP_TOOLS' => 'Ferramentas',
    'LBL_TASKS'=>'Tarefas',
    'LBL_TEAMS_LINK'=>'Equipes',
    'LBL_THEME_COLOR'=>'Cor',
    'LBL_THEME_FONT'=>'Fonte',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arquivar Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arquivar Email',
    'LBL_UNAUTH_ADMIN' => 'Acesso à administração não autorizado',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Desfazer Exclusão',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Desfazer Exlcusão',
    'LBL_UNDELETE_BUTTON' => 'Desfazer Exclusão',
    'LBL_UNDELETE' => 'Desfazer Exclusão',
    'LBL_UNSYNC' => 'Dessincronizar',
    'LBL_UPDATE' => 'Atualizar',
    'LBL_USER_LIST' => 'Lista de Usuários',
    'LBL_USERS_SYNC'=>'Sincronizar Usuários',
    'LBL_USERS'=>'Usuários',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Verificando por registro de email existente...',
    'LBL_VERIFY_PORTAL_NAME'=>'Verificando por nome de portal existente...',
    'LBL_VIEW_IMAGE' => 'visualizar',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Imprimir PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Imprimir PDF',


    'LNK_ABOUT' => 'Sobre',
    'LNK_ADVANCED_SEARCH' => 'Pesquisa Avançada',
    'LNK_BASIC_SEARCH' => 'Pesquisa Básica',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Visualizar todos resultados',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Exibir Todos',
    'LNK_CLOSE' => 'fechar',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Modificar pesquisa atual',
    'LNK_SAVED_VIEWS' => 'Opções de Layout',
    'LNK_DELETE_ALL' => 'excl. todos',
    'LNK_DELETE' => 'excluir',
    'LNK_EDIT' => 'editar',
    'LNK_GET_LATEST'=>'Obter mais recente',
    'LNK_GET_LATEST_TOOLTIP'=>'Substituir pela versão mais recente',
    'LNK_HELP' => 'Ajuda',
    'LNK_CREATE' => 'Criar',
    'LNK_LIST_END' => 'Fim',
    'LNK_LIST_NEXT' => 'Próximo',
    'LNK_LIST_PREVIOUS' => 'Anterior',
    'LNK_LIST_RETURN' => 'Retornar à Lista',
    'LNK_LIST_START' => 'Iniciar',
    'LNK_LOAD_SIGNED'=>'Assinar',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Substituir pelo documento assinado',
    'LNK_PRINT' => 'Imprimir',
    'LNK_BACKTOTOP' => 'Voltar ao topo',
    'LNK_REMOVE' => 'remover',
    'LNK_RESUME' => 'Continuar',
    'LNK_VIEW_CHANGE_LOG' => 'Visualizar Log de Modificações',


    'NTC_CLICK_BACK' => 'Por favor, clique no botão voltar do navegador e corrija o erro.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(aaaa-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Tem certeza que deseja excluir o(s) registro(s) selecionado(s)?',
    'NTC_TEMPLATE_IS_USED' => 'O modelo é usado em pelo menos um registro de email marketing. Tem certeza que deseja excluí-lo?',
    'NTC_TEMPLATES_IS_USED' => 'Os modelos a seguir são utilizados em registros de email marketing. Tem certeza que deseja exclui-los? \n',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registro?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Tem certeza que deseja excluir o',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Tem certeza que deseja atualizar o',
    'NTC_DELETE_SELECTED_RECORDS' =>' resgistro(s) selecionado(s)?',
    'NTC_LOGIN_MESSAGE' => 'Por favor, informe seu nome de usuário e senha.',
    'NTC_NO_ITEMS_DISPLAY' => 'nenhum',
    'NTC_REMOVE_CONFIRMATION' => 'Tem certeza que deseja remover este relacionamento? Somente o relacionamento será removido. O registro não será excluído.',
    'NTC_REQUIRED' => 'Indica campo obrigatório',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bem-vindo',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'LOGIN_LOGO_ERROR'=> 'Por favor, substitua os logotipos do SuiteCRM.',
    'WARN_ONLY_ADMINS'=> "Somente administradores podem logar.",
    'WARN_UNSAVED_CHANGES'=> "Você está prestes a sair deste registro sem salvar as alterações que você pode ter feito nele. Tem certeza que deseja sair deste registros?",
    'ERROR_NO_RECORD' => 'Erro ao recuperar o registro.  Este registro pode ter sido excluído ou você não está autorizado a visualizá-lo.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Alerta:</b> A versão do seu navegador não é mais suportada ou você está utilizando um navegador não suportado.<p></p>As versões recomendas de navegadores são:<p></p><ul><li>Internet Explorer 10 (modo de exibição de compatibilidade não é suportado)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Alerta:</b> Seu navegador está em modo de exibição de compatibilidade do IE, que não é suportado.",
    'ERROR_TYPE_NOT_VALID' => 'Erro. Este tipo não é válido.',
    'ERROR_NO_BEAN' => 'Falha ao obter o bean.', 
    'LBL_DUP_MERGE'=>'Localizar Duplicados',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Gerenciar Assinaturas:',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Gerenciar Assinaturas para ',
    'LBL_SUBSCRIBE'=>'Inscrever',
    'LBL_UNSUBSCRIBE'=>'Cancelar a Inscrição',
    // Ajax status strings
    'LBL_LOADING' => 'Carregando ...',
    'LBL_SEARCHING' => 'Pesquisando...',
    'LBL_SAVING_LAYOUT' => 'Salvar o Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout foi salvo.',
    'LBL_SAVED' => 'Salvo',
    'LBL_SAVING' => 'Salvando',
    'LBL_FAILED' => 'Falhou!',
    'LBL_DISPLAY_COLUMNS' => 'Exibir Colunas',
    'LBL_HIDE_COLUMNS' => 'Ocultar Colunas',
    'LBL_SEARCH_CRITERIA' => 'Critérios de Pesquisa',
    'LBL_SAVED_VIEWS' => 'Visões Salvas',
    'LBL_PROCESSING_REQUEST'=>'Processando..',
    'LBL_REQUEST_PROCESSED'=>'Concluído',
    'LBL_AJAX_FAILURE' => 'Falha do Ajax',
    'LBL_MERGE_DUPLICATES'  => 'Mesclado',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Pesquisas Gravadas',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Realize uma pesquisa utilizando o formulário de pesquisa acima',
    'LBL_DETAILVIEW'=>'Detalhes',
    'LBL_LISTVIEW'=>'Exibição de Lista',
    'LBL_EDITVIEW'=>'Visão de Edição',
    'LBL_SEARCHFORM'=>'Formulário de Pesquisa',
    'LBL_SAVED_SEARCH_ERROR' => 'Por favor, forneça um nome para esta visão.',
    'LBL_DISPLAY_LOG' => 'Exibir Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Tempo Limite da Sessão',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sua sessão expirará em 2 minutos. Por favor, salve seu trabalho.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Sua sessão expirou.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "
Agenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Reunião',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Ligação',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Horário: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Local:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Descrição:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Referente a:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "
Clique em OK para visualizar esta ligação ou clique em Cancelar para descartar esta mensagem.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "
Clique em OK para ver esta reunião ou clique em Cancelar para descartar esta mensagem.",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evento',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'O Evento não está definido.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Local não está definido.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data de início não está definida.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "Nenhum resultado encontrado.",
	'MSG_LIST_VIEW_NO_RESULTS' => "Nenhum resultado encontrado para <item1>",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "Criar <item1> como um novo <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "Atualmente, você não possui nenhum registro salvo. <item2> ou <item3> um agora.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> para conhecer mais sobre o módulo <item1>. Para acessar maiores informações, localize a Ajuda utilizando o menu suspenso localizado na barra de navegação principal.",

    'LBL_CLICK_HERE' => "Clique aqui",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Adicionar aos Meus Favoritos',
    'LBL_MARK_AS_FAVORITES' => 'Marcar como Favorito',
    'LBL_CREATE_CONTACT' => 'Criar Contato',
    'LBL_CREATE_CASE' => 'Criar Ocorrência',
    'LBL_CREATE_NOTE' => 'Criar Nota',
    'LBL_CREATE_OPPORTUNITY' => 'Criar Oportunidade',
    'LBL_SCHEDULE_CALL' => 'Registrar Ligação',
    'LBL_SCHEDULE_MEETING' => 'Agendar Reunião',
    'LBL_CREATE_TASK' => 'Criar Tarefa',
    'LBL_REMOVE_FROM_FAVORITES' => 'Remover dos Meus Favoritos',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Gerar Formulário',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Salvar Formulário Web To Lead',

    'LBL_PLEASE_SELECT' => 'Por favor, Selecione',
    'LBL_REDIRECT_URL'=>'URL de Redirecionamento',
    'LBL_RELATED_CAMPAIGN' =>'Campanha Relacionada',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Adicionar Todos os Campos',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Remover Todos os Campos',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Somente os seguintes tipos de imagem anexados podem ser incorporados: JPG, PNG.',
    'LBL_TRAINING' => 'Suporte',
    'ERR_DATABASE_CONN_DROPPED'=>'Erro ao executar uma consulta. Possivelmente, caiu a conexão com o seu banco de dados. Por favor, atualize esta página. Pode ser necessário reiniciar o servidor web.',
    'ERR_MSSQL_DB_CONTEXT' =>'Contexto de banco de dados alterado para',
  'ERR_MSSQL_WARNING' =>'Alerta:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Alerta: o campo [[field]] não possui uma entrada mapeada no arquivo vardefs.php do  [moduleDir] ',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erro: Arquivo [[file]] está faltando.  Não é possível criar porque nenhum arquivo HTML correspondente foi encontrado.',
  'ERR_CANNOT_FIND_MODULE' => 'Erro: Módulo [module] não existe.',
  'LBL_ALT_ADDRESS' => 'Endereço Alternativo:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erro: Há um número divergente de argumentos para os elementos \'key\' e \'copy\' na matriz displayParams.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Índice ausente na matriz displayParams para: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Geral',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Apenas os Meus Itens',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Exibir as Linhas',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Criando Nova Página ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Você criou uma nova página. Você pode adicionar novos conteúdos utilizando as opções do menu Adicionar Dashlets.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Tem certeza que deseja excluir esta página?',
    'LBL_SAVING_PAGE_TITLE' => 'Salvando Título da Página ...',
    'LBL_RETRIEVING_PAGE' => 'Recuperando Página ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Você atingiu o número máximo de Dashlets do SuiteCRM permitidos pelo seu administrador. Por favor, remova um Dashlet do SuiteCRM Dashlet para adicionar outro.',
    'LBL_ADDING_DASHLET' => 'Adicionando Dashlet do SuiteCRM ...',
    'LBL_ADDED_DASHLET' => 'Dashlet do SuiteCRM Adicionado',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Tem certeza que deseja remover este Dashlet do SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Removendo Dashlet do SuiteCRM ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet do SuiteCRM Removido',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Adicionar Página',
    'LBL_DELETE_PAGE' => 'Eliminar Página',
    'LBL_CHANGE_LAYOUT' => 'Modificar Layout',
    'LBL_RENAME_PAGE' => 'Renomear Página',

    'LBL_LOADING_PAGE' => 'Carregando página, por favor aguarde...',

    'LBL_RELOAD_PAGE' => 'Por favor, <a href="javascript: window.location.reload()">recarregue a janela</a> para usar este Dashlet do SuiteCRM.',
    'LBL_ADD_DASHLETS' => 'Adicionar Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Fechar',
    'LBL_OPTIONS' => 'Opções',
    'LBL_NUMBER_OF_COLUMNS' => 'Selecione o número de colunas',
    'LBL_1_COLUMN' => '1 Coluna',
    'LBL_2_COLUMN' => '2 Colunas',
    'LBL_3_COLUMN' => '3 Colunas',
    'LBL_PAGE_NAME' => 'Nome da Página',

    'LBL_SEARCH_RESULTS' => 'Resultados da Pesquisa',
    'LBL_SEARCH_MODULES' => 'Módulos',
    'LBL_SEARCH_CHARTS' => 'Gráficos',
    'LBL_SEARCH_REPORT_CHARTS' => 'Gráficos de Relatório',
    'LBL_SEARCH_TOOLS' => 'Ferramentas',
    'LBL_SEARCH_HELP_TITLE' => 'Dicas de Pesquisa',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Fechar',
    'LBL_SEARCH_RESULTS_FOUND' => 'Resultados Encontrados para a Pesquisa',
    'LBL_SEARCH_RESULTS_TIME' => 'Sra.',
    'ERR_BLANK_PAGE_NAME' => 'Por favor, informe um nome de página.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Sem Imagem',

    'LBL_MODULE' => 'Módulo',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copiar o endereço da esquerda:',
    'LBL_SAVE_AND_CONTINUE' => 'Salvar e Continuar',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Controles de Seleção Múltipla</strong></p><ul><li>Clique nos valores para selecionar um atributo.</li><li>Ctrl-clique&nbsp;para&nbsp;seleção múltipla. Usuários Mac devem usar CMD-clique.</li><li>Para selecionar todos os valores entre dois atributos,&nbsp; clique no primeiro valor&nbsp;e então shift-clique no último valor.</li></ul><p><strong>Pesquisa Avançada & Opções de Layout</strong><br><br>Utilizando a opção <b>Pesquisas Salvas & Layout</b>, você pode salvar um conjunto de parâmetros de pesquisa e/ou um layout de Exibição de Lista personalizados. Isto pode ser utilizado para obter, rapidamente, um resultado de pesquisa no futuro. É possível salvar um número ilimitado de layouts e pesquisas personalizadas. Todas as pesquisas salvas são exibidas pelo nome na lista de Pesquisas Salvar, e a última pesquisa carregada aparece no topo da lista.<br><br>Para personalizar um layout de Exibição de Lista, utilize as caixas Ocultar Colunas e Exibir Colunas para selecionar quais campos serão exibidos nos resultados da pesquisa. Por exemplo, é possível exibir ou ocultar detalhes nos resultados da pesquisa como: nome do registro, usuário atribuído, equipe atribuída. Para adicionar uma coluna à Exibição de Lista, selecione o campo desejado a partir da lista Ocultar Colunas e utilize a seta para a esquerda para mover o campo para a lista Exibir Colunas. Para remover uma coluna da Exibição de Lista, selecione-a na lista Exibir Colunas e utilize a seta para a direita para movê-la para a lista Ocultar Colunas.<br><br>Se você salvar as configurações de layout, será possível recarregá-las a qualquer momento para visualizar os resultados da pesquisa em um layout personalizado.<br><br>Para salvar e atualizar uma pesquisa e/ou layout:<ol><li>Informe um nome para os resultados da pesquisa no campo <b>Salvar esta pesquisa como</b> e clique em <b>Salvar</b>. O nome será exibido na lista de Pesquisas Salvas, adjacente ao botão <b>Limpar</b>.</li><li>Para visualizar uma pesquisa salva, selecione-a a partir da lista de Pesquisas Salvar. Os resultados da pesquisa serão mostrados na Exibição de Lista.</li><li>Para atualizar as propriedades de uma pesquisa salvar, selecione-a a partir da lista, informe o novo critério de pesquisa e/ou opções de layout na área de Pesquisa Avançada, e clique em <b>Atualizar</b>, próximo a <b>Modificar Pesquisa Atual</b>.</li><li>Para excluir uma pesquisa salva, selecione-a a partir da lista de Pesquisas Salvas, e clique em <b>Excluir</b>, próximo a <b>Modificar Pesquisa Atual</b>, e então clique em <b>OK</b> para confirmar a exclusão.</li></ol><p><strong>Dicas</strong><br><br>Ao usar o caractere % as é possível fazer uma pesquisa mais abrangente.  Por exemplo, ao invés de simplesmente pesquisar por resultados iguais a "Maçãs", é possível modificar sua pesquisa para "Maçãs%". Isto buscará todos os resultados que iniciem com a palavra Maçãs, mas que podem conter outros caracteres na sequência.</p>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Erro: Limite de consulta de $limit atingido para o módulo $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Erro: ResourceObserver->notify() precisa de ser substituído.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erro: Não foi possível criar o monitor porque o arquivo de metadados está vazio ou o arquivo não existe.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erro: Não há nenhum monitor configurado para nome solicitado',
    'ERR_UNDEFINED_METRIC' => 'Erro: Não foi possível definir o valor para a métrica indefinida',
    'ERR_STORE_FILE_MISSING' => 'Erro: Não foi possível localizar arquivo de implementação Store',

    'LBL_MONITOR_ID' => 'Id do Monitor',
    'LBL_USER_ID' => 'Id do Usuário',
    'LBL_MODULE_NAME' => 'Nome do Módulo',
    'LBL_ITEM_ID' => 'Id do Item',
    'LBL_ITEM_SUMMARY' => 'Resumo do Item',
    'LBL_ACTION' => 'Ação',
    'LBL_SESSION_ID' => 'Id da Sessão',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack criado para o id do usuário {0}',
    'LBL_VISIBLE' => 'Registro Visível',
    'LBL_DATE_LAST_ACTION' => 'Data da Última Ação',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'não antes de',
  'MSG_IS_MORE_THAN' => 'é mais de',
  'MSG_IS_LESS_THAN' => 'é menos de',
  'MSG_SHOULD_BE' => 'deve ser',
  'MSG_OR_GREATER' => 'ou maior',

    'LBL_PORTAL_WELCOME_TITLE' => 'Bem-vindo ao Portal do SuiteCRM',
    'LBL_PORTAL_WELCOME_INFO' => 'O Portal do SuiteCRM é um framework que fornece uma visão em tempo real de ocorrências, bugs & informativos etc para os clientes. Esta é uma interface externa ao SuiteCRM, que pode ser implantada dentro de qualquer site.',
    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Criar Bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 Registros Encontrados -',

    'DATA_TYPE_DUE' => 'Limite:',
    'DATA_TYPE_START' => 'Início:',
    'DATA_TYPE_SENT' => 'Enviado:',
    'DATA_TYPE_MODIFIED' => 'Modificado:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Contagem',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'imagem do objeto',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Selecione a Data',

    'LBL_VALIDATE_RANGE' => 'não está dentro do intervalo válido',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Por favor, escolha um intervalo com as datas inicial e final',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Por favor, escolha um intervalo com as entradas inicial e final',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Todos',

    'LBL_OPERATOR_IN_TEXT' => 'é um dos:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'não é um dos:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erro: A contagem da Matriz de parâmetros do bean não coincide com a contagem da Matriz dos resultados.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erro: Entrada de mapeamento para o módulo faltante.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erro: Não é possível recuperar os dados para o Conector {0} .  O serviço pode estar inacessível no momento ou as definições de configuração podem estar inválidas.  Mensagem de erro do Conector: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Obter Dados',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Tem certeza que deseja desativar a integração do conector para este módulo?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Para experiência ideal usando IIS/FastCGI sapi, defina fastcgi.logging como 0 no seu arquivo php.ini.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'A equipe Global não pode ser excluída.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'Esta equipe particular [{0}] não pode ser excluída, até que o usuário [{1}] seja excluído.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'O Abobe Flash está desativado ou você está utilizando uma versão antiga do Adobe Flash Player. Para obter a versão mais recente do Flash Player, <a href="http://www.adobe.com/go/getflashplayer/"> clique aqui</a>.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Nome',
  'LBL_COLLECTION_PRIMARY' => 'Principal',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Campo obrigatório vazio',
    'LBL_COLLECTION_EXACT' => 'Exata',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_DESCRIPTION' => 'Descrição',

  'LBL_YESTERDAY'=> 'ontem',
  'LBL_TODAY'=>'hoje',
  'LBL_TOMORROW'=>'amanhã',
  'LBL_NEXT_WEEK'=> 'próxima semana',
  'LBL_NEXT_MONDAY'=>'próxima segunda',
  'LBL_NEXT_FRIDAY'=>'próxima sexta',
  'LBL_TWO_WEEKS'=> 'duas semanas',
  'LBL_NEXT_MONTH'=> 'próximo mês',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'primeiro dia do mês que vem',
  'LBL_THREE_MONTHS'=> 'três meses',
  'LBL_SIXMONTHS'=> 'seis meses',
  'LBL_NEXT_YEAR'=> 'próximo ano',
    'LBL_FILTERED' => 'Filtrado',

    //Datetimecombo fields
    'LBL_HOURS' => 'Horas',
    'LBL_MINUTES' => 'Minutos',
    'LBL_MERIDIEM' => 'Meridiano',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Atualizar',

    'LBL_DURATION_DAY' => 'dia',
    'LBL_DURATION_HOUR' => 'hora',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'dias',
    'LBL_DURATION_HOURS' => 'horas',
    'LBL_DURATION_MINUTES' => 'minutos',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Escolha o Mês',
    'LBL_ENTER_YEAR' => 'Informe o Ano',
    'LBL_ENTER_VALID_YEAR' => 'Por favor, informe um ano válido',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Por favor, informe um número de telefone dos EUA, incluindo código de área.',

    //File write error label
    'ERR_FILE_WRITE' => 'Erro: Não foi possível salvar o arquivo {0}.  Por favor, verifique as permissões do sistema e do servidor web.',
  'ERR_FILE_NOT_FOUND' => 'Erro: Não foi possível carregar o arquivo {0}.  Por favor, verifique as permissões do sistema e do servidor web.',

    'LBL_AND' => 'E',
    'LBL_BEFORE' => 'Antes',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Carregar do Seu Computador',
    'LBL_SEARCH_EXTERNAL_API' => 'Arquivo em Fonte Externa',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Segurança',
    'LBL_SHARE_PRIVATE' => 'Privada',
    'LBL_SHARE_COMPANY' => 'Empresa',
    'LBL_SHARE_LINKABLE' => 'Com Link',
    'LBL_SHARE_PUBLIC' => 'Pública',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'Feed RSS',
    'LBL_RSS_RECORDS_FOUND' => 'registro(s) encontrado(s)',
    'ERR_RSS_INVALID_INPUT' => 'RSS não é um input_type válido',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS não é uma response_type válida para este método.',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs não suporta o formato de arquivo fornecido.',

    'LBL_EMPTY' => 'Vazio',
    'LBL_IS_EMPTY' => 'Está vazio',
    'LBL_IS_NOT_EMPTY' => 'Não está vazio',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Este é um exemplo de arquivo de importação que fornece um exemplo do conteúdo esperado de um arquivo pronto para importação."
"O arquivo é um arquivo .csv, delimitado por vírgulas. Utiliza aspas duplas como o qualificador de campo".

"A linha de cabeçalho é a linha mais ao topo do arquivo e contém os rótulos de campo, como você os veria na aplicação."
"Esses rótulos são usados para mapear os dados no arquivo com os campos na aplicação".

"Notas: os nomes do banco de dados também podem ser usados na linha de cabeçalho. Isso é útil quando você estiver usando o phpMyAdmin ou outra ferramenta de banco de dados para fornecer uma lista exportada de dados para importar."
"A ordem das colunas não é crítica, pois o processo de importação coincide os dados com os campos apropriados, baseado na linha de cabeçalho".


"Para usar este arquivo como um modelo, faça o seguinte:" 
"1. remover as linhas de amostra de dados" 
"2. Remova o texto de ajuda que você está lendo agora"
"3. Insira seus próprios dados  para as linhas e colunas apropriadas"
"4. Salve o arquivo em um local conhecido no seu sistema"
"5. Clique na opção Importar do menu Ações na aplicação e escolha o arquivo para carregar"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atribuído a',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atribuído ao Usuário',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Reporta ao ID',
    'LBL_EXPORT_FULL_NAME' => 'Nome Completo',
    'LBL_EXPORT_TEAM_ID' => 'ID da Equipe',
    'LBL_EXPORT_TEAM_NAME' => 'Equipes',
    'LBL_EXPORT_TEAM_SET_ID' => 'ID do Conjunto de Equipes',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navegando...',

    'LBL_PENDING_NOTIFICATIONS' => 'Notificações',
    'LBL_NOTIFICATIONS_NONE' => 'Sem Notificações Atuais',
    'LBL_ALT_ADD_TEAM_ROW' => 'Adicionar nova linha de equipe',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Remover a equipe',
    'LBL_ALT_SPOT_SEARCH' => 'Pesquisa Spot',
    'LBL_ALT_SORT_DESC' => 'Classificados Decrescente',
    'LBL_ALT_SORT_ASC' => 'Classificados Crescente',
    'LBL_ALT_SORT' => 'Classificar',
    'LBL_ALT_SHOW_OPTIONS' => 'Exibir Opções',
    'LBL_ALT_HIDE_OPTIONS' => 'Ocultar Opções',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Mover a entrada selecionada para a lista à esquerda',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Mover a entrada selecionada para a lista à direta',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Subir a entrada selecionada na ordem da lista exibida',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Baixar a entrada selecionada na ordem da lista exibida',
    'LBL_ALT_INFO' => 'Informações',
	'MSG_DUPLICATE' => 'O registro {0} que está prestes a criar talvez esteja duplicado com o registro {0}, que já existe. {1} registros contendo nomes semelhantes estão listados abaixo. <br>, Clique em Criar {1} para continuar a criar este novo {0}, ou selecione um existente {0} listado abaixo.',
    'MSG_SHOW_DUPLICATES' => 'O registro {0} que está prestes a criar talvez esteja duplicado com o registro {0}, que já existe. {1} registros contendo nomes semelhantes estão listados abaixo.  Clique em Salvar para continuar a criar este novo {0}, ou clique em Cancelar para retornar ao módulo sem criar a {0}.',
    'LBL_EMAIL_TITLE' => 'endereço de email',
    'LBL_EMAIL_OPT_TITLE' => 'endereço de email opted out',
    'LBL_EMAIL_INV_TITLE' => 'endereço de email inválido',
    'LBL_EMAIL_PRIM_TITLE' => 'endereço de email principal',
    'LBL_SELECT_ALL_TITLE' => 'Selecionar todos',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Selecionar esta linha',
    'LBL_TEAM_SELECTED_TITLE' => 'Equipe Selecionada ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Selecione para fazer desta equipe a principal',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'ERRO: Ocorreu um erro ao carregar. Código de erro: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERRO: Ocorreu um erro ao carregar. Código de erro: {0} - {1}. O upload_maxsize é {2} ',
    'UPLOAD_ERROR_HOME_TEXT'     => 'ERRO: Ocorreu um erro ao carregar. Por favor, entre em contato com o administrador para obter ajuda.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Tamanho do Upload ({0} bytes) excedeu o máximo permitido: {1} bytes',
    'UPLOAD_REQUEST_ERROR'    => 'Ocorreu um erro. Por favor, atualize sua página e tente novamente.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Editar',
    'LBL_EDIT_BUTTON_TITLE' => 'Editar',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicar',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicar',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Excluir',
    'LBL_DELETE_BUTTON_TITLE' => 'Excluir',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Salvar',
    'LBL_SAVE_BUTTON_TITLE' => 'Salvar',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancelar',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancelar',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Teclas de Atalho',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Funcionalidade de Formulário - Alt+</strong><br/> I = ed<b>I</b>tar (exibição detalhada)<br/> U = d<b>U</b>plicar (exibição detalhada)<br/> D = <b>E</b>xcluir (exibição detalhada)<br/> A = s<b>A</b>lvar (exibição detalhada)<br/> L = cance<b>L</b>ar (exibição detalhada) <br/><br/></p><p><strong>Pesquisa e Navegação  - Alt+</strong><br/> 7 = primeiro campo no formulário de Edição<br/> 8 = Link de Pesquisa Avançada<br/> 9 = Primeiro campo no Formulário de Pesquisa<br/> 0 = Entrada da pesquisa Unificada<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'matriz de conectores em {0} foi definido incorretamente ou está vazia e não pode ser utilizada.',
    'ERR_SUHOSIN' => 'Upload de fluxo está bloqueado pelo Suhosin, por favor, adicione &quot;upload&quot; para  suhosin.executor.include.whitelist (consulte sugarcrm.log para obter mais informações)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Má resposta do servidor',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Cotação',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Preço de Venda',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Manualmente',
        '5' => 'A Cada 5 minutos',
        '15' => 'A Cada 15 minutos',
        '30' => 'A Cada 30 minutos',
        '60' => 'A Cada hora',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Um lembrete está vazio ou incorreto.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Lembrete não está definido para popup ou email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Nenhum convidado para lembrete.'

    );

$app_list_strings['moduleList']['Library'] = 'Biblioteca';
$app_list_strings['library_type'] = array('Books'=>'Livro', 'Music'=>'Música', 'DVD'=>'DVD', 'Magazines'=>'Revistas');
$app_list_strings['moduleList']['EmailAddresses'] = 'Endereço de E-mail';
$app_list_strings['project_priority_default'] = 'Média';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Alto',
    'Medium' => 'Médio',
    'Low' => 'Baixo',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Rascunho',
    'Expired' => 'Expirado',
    'In Review' => 'Em Revisão',
    'Published' => 'Publicado',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Nenhum--',
    'Create New Tag' => 'Criar Nova Etiqueta',
    'Delete Tag'=>'Excluir Etiqueta',
    'Rename Tag'=>'Renomear Etiqueta',
    'Move Selected Articles'=>'Mover Artigos Selecionados',
    'Apply Tags On Articles'=>'Aplicar Etiquetas aos Artigos',
    'Delete Selected Articles'=>'Excluir Artigos Selecionados',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Possui Anexos',
        'none' => 'Nenhum',
        'mime' => 'Especificar Mime Type',
        'name' => 'Especificar Nome',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Base de Conhecimento';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Criar Artigo';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Top 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Bot_5'  => 'Últimos 5',
    'Bot_10' => 'Últimos 10',
    'Bot_20' => 'Últimos 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Todos',
        'added' => 'Adicionado nos Últimos 30 Dias',
        'pending' => 'Aguardando Minha Aprovação',
        'updated' =>'Atualizado nos Últimos 30 Dias',
        'faqs' => 'Perguntas freqüentes',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'Em',
    'before' => 'Antes',
    'after' => 'Depois',
    'between_dates' => 'Está Entre',
    'last_7_days' => 'Últimos 7 Dias',
    'next_7_days' => 'Próximos 7 Dias',
    'last_month' => 'Mês Passado',
    'this_month' => 'Este Mês',
    'next_month' => 'Próximo Mês',
    'last_30_days' => 'Últimos 30 Dias',
    'next_30_days' => 'Próximos 30 Dias',
    'last_year' => 'Ano Passado',
    'this_year' => 'Este Ano',
    'next_year' => 'Próximo Ano',
    'isnull' => 'É Nulo',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFEGANISTÃO',
        'ALBANIA' => 'ALBÂNIA',
        'ALGERIA' => 'ARGÉLIA',
        'AMERICAN SAMOA' => 'SAMOA AMERICANA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTÁRTICA',
        'ANTIGUA' => 'ANTÍGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMÉNIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRÁLIA',
        'AUSTRIA' => 'ÁUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJÃO',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHREIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BIELORÚSSIA',
        'BELGIUM' => 'BÉLGICA',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDAS',
        'BHUTAN' => 'BUTÃO',
        'BOLIVIA' => 'BOLÍVIA',
        'BOSNIA' => 'BÓSNIA',
        'BOTSWANA' => 'BOTSUANA',
        'BOUVET ISLAND' => 'ILHAS BOUVET',
        'BRAZIL' => 'BRASIL',
        'BRITISH ANTARCTICA TERRITORY' => 'TERRITÓRIO DA ANTÁRTIDA BRITÂNICA',
        'BRITISH INDIAN OCEAN TERRITORY' => 'TERRITÓRIO DO OCEANO ÍNDICO BRITÂNICO',
        'BRITISH VIRGIN ISLANDS' => 'ILHAS VIRGENS BRITÂNICAS',
        'BRITISH WEST INDIES' => 'ÍNDIAS ORIENTAIS BRITÂNICAS',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGÁRIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODJA',
        'CAMEROON' => 'CAMARÕES',
        'CANADA' => 'CANADÁ',
        'CANAL ZONE' => 'ZONA DO CANAL',
        'CANARY ISLAND' => 'ILHAS CANÁRIAS',
        'CAPE VERDI ISLANDS' => 'ILHAS DE CABO VERDE',
        'CAYMAN ISLANDS' => 'ILHAS CAIMÃO',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHADE',
        'CHANNEL ISLAND UK' => 'ILHA DO CANAL',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'ILHA DE NATAL',
        'COCOS (KEELING) ISLAND' => 'ILHAS COCOS (KEELING)',
        'COLOMBIA' => 'COLÔMBIA',
        'COMORO ISLANDS' => 'ILHAS COMORO',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO-KINSHASA',
        'COOK ISLANDS' => 'ILHAS COOK',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROÁCIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURAÇAU',
        'CYPRUS' => 'CHIPRE',
        'CZECH REPUBLIC' => 'REPÚBLICA CHECA',
        'DAHOMEY' => 'DAOMÉ',
        'DENMARK' => 'DINAMARCA',
        'DJIBOUTI' => 'DJIBUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'REPÚBLICA DOMINICANA',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'EQUADOR',
        'EGYPT' => 'EGIPTO',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'GUINÉ EQUATORIAL',
        'ESTONIA' => 'ESTÓNIA',
        'ETHIOPIA' => 'ETIÓPIA',
        'FAEROE ISLANDS' => 'ILHAS FAROÉ',
        'FALKLAND ISLANDS' => 'ILHAS FALKLAND',
        'FIJI' => 'ILHAS FIJI',
        'FINLAND' => 'FINLÂNDIA',
        'FRANCE' => 'FRANÇA',
        'FRENCH GUIANA' => 'GUIANA FRANCESA',
        'FRENCH POLYNESIA' => 'POLINÉSIA FRANCESA',
        'GABON' => 'GABÃO',
        'GAMBIA' => 'GÂMBIA',
        'GEORGIA' => 'GEÓRGIA',
        'GERMANY' => 'ALEMANHA',
        'GHANA' => 'GANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GRÉCIA',
        'GREENLAND' => 'GRONELÂNDIA',
        'GUADELOUPE' => 'GUADALUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINÉ',
        'GUYANA' => 'GUIANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGRIA',
        'ICELAND' => 'ISLÂNDIA',
        'IFNI' => 'IFNI',
        'INDIA' => 'ÍNDIA',
        'INDONESIA' => 'INDONÉSIA',
        'IRAN' => 'IRÃO',
        'IRAQ' => 'IRAQUE',
        'IRELAND' => 'IRLANDA',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITÁLIA',
        'IVORY COAST' => 'COSTA DO MARFIM',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPÃO',
        'JORDAN' => 'JORDÂNIA',
        'KAZAKHSTAN' => 'CAZAQUISTÃO',
        'KENYA' => 'QUÉNIA',
        'KOREA' => 'COREIA',
        'KOREA, SOUTH' => 'COREIA DO SUL',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'QUIRGUISTÃO',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LETÓNIA',
        'LEBANON' => 'LÍBANO',
        'LEEWARD ISLANDS' => 'ILHAS LEEWARD',
        'LESOTHO' => 'LESOTO',
        'LIBYA' => 'LÍBIA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITUÂNIA',
        'LUXEMBOURG' => 'LUXEMBURGO',
        'MACAO' => 'MACAU',
        'MACEDONIA' => 'MACEDÓNIA',
        'MADAGASCAR' => 'MADAGÁSCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALÁSIA',
        'MALDIVES' => 'MALDIVAS',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINICA',
        'MAURITANIA' => 'MAURITÂNIA',
        'MAURITIUS' => 'ILHAS MAURÍCIAS',
        'MELANESIA' => 'MELANÉSIA',
        'MEXICO' => 'MÉXICO',
        'MOLDOVIA' => 'MOLDÁVIA',
        'MONACO' => 'MÓNACO',
        'MONGOLIA' => 'MONGÓLIA',
        'MOROCCO' => 'MARROCOS',
        'MOZAMBIQUE' => 'MOÇAMBIQUE',
        'MYANAMAR' => 'MYANMAR',
        'NAMIBIA' => 'NAMÍBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'HOLANDA',
        'NETHERLANDS ANTILLES' => 'ANTILHAS HOLANDESAS',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONA NEUTRA DAS ANTILHAS HOLANDESAS',
        'NEW CALADONIA' => 'NOVA CALEDÓNIA',
        'NEW HEBRIDES' => 'NOVA HÉBRIDES',
        'NEW ZEALAND' => 'NOVA ZELÂNDIA',
        'NICARAGUA' => 'NICARÁGUA',
        'NIGER' => 'NÍGER',
        'NIGERIA' => 'NIGÉRIA',
        'NORFOLK ISLAND' => 'ILHAS NORFOLK',
        'NORWAY' => 'NORUEGA',
        'OMAN' => 'OMÃ',
        'OTHER' => 'OUTRO',
        'PACIFIC ISLAND' => 'ILHAS DO PACÍFICO',
        'PAKISTAN' => 'PAQUISTÃO',
        'PANAMA' => 'PANAMÁ',
        'PAPUA NEW GUINEA' => 'PAPUA NOVA GUINÉ',
        'PARAGUAY' => 'PARAGUAI',
        'PERU' => 'PERÚ',
        'PHILIPPINES' => 'FILIPINAS',
        'POLAND' => 'POLÓNIA',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'TIMOR-LESTE',
        'PUERTO RICO' => 'PORTO RICO',
        'QATAR' => 'Catar',
        'REPUBLIC OF BELARUS' => 'REPÚBLICA DA BIELORÚSSIA',
        'REPUBLIC OF SOUTH AFRICA' => 'REPÚBLICA DA ÁFRICA DO SUL',
        'REUNION' => 'REUNIÃO',
        'ROMANIA' => 'ROMÉNIA',
        'RUSSIA' => 'RÚSSIA',
        'RWANDA' => 'RUANDA',
        'RYUKYU ISLANDS' => 'ILHAS RYUKYU',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'ARÁBIA SAUDITA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SÉRVIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SERRA LEOA',
        'SINGAPORE' => 'SINGAPURA',
        'SLOVAKIA' => 'ESLOVÁQUIA',
        'SLOVENIA' => 'ESLOVÉNIA',
        'SOMALILIAND' => 'SOMÁLIA',
        'SOUTH AFRICA' => 'ÁFRICA DO SUL',
        'SOUTH YEMEN' => 'IÉMEN DO SUL',
        'SPAIN' => 'ESPANHA',
        'SPANISH SAHARA' => 'SAHARA ESPANHOL',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'SÃO CRISTÓVÃO E NEVIS',
        'ST. LUCIA' => 'SANTA LÚCIA',
        'SUDAN' => 'SUDÃO',
        'SURINAM' => 'SURINAME',
        'SW AFRICA' => 'ÁFRICA SUDOESTE',
        'SWAZILAND' => 'SUAZILÂNDIA',
        'SWEDEN' => 'SUÉCIA',
        'SWITZERLAND' => 'SUÍÇA',
        'SYRIA' => 'SÍRIA',
        'TAIWAN' => 'Taiwan',
        'TAJIKISTAN' => 'TAJIQUISTÃO',
        'TANZANIA' => 'TANZÂNIA',
        'THAILAND' => 'TAILÂNDIA',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINDADE',
        'TUNISIA' => 'TUNÍSIA',
        'TURKEY' => 'TURQUIA',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UCRÂNIA',
        'UNITED ARAB EMIRATES' => 'EMIRADOS ÁRABES UNIDOS',
        'UNITED KINGDOM' => 'REINO UNIDO',
        'UPPER VOLTA' => 'ALTO VOLTA',
        'URUGUAY' => 'URUGUAI',
        'US PACIFIC ISLAND' => 'ILHA DO PACÍFICO AMERICANO',
        'US VIRGIN ISLANDS' => 'ILHAS VIRGENS AMERICANAS',
        'USA' => 'EUA',
        'UZBEKISTAN' => 'UZBEQUISTÃO',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'CIDADE DO VATICANO',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAME',
        'WAKE ISLAND' => 'ILHAS WAKE',
        'WEST INDIES' => 'ÍNDIAS ORIENTAIS',
        'WESTERN SAHARA' => 'SAHARA ORIENTAL',
        'YEMEN' => 'IÉMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZÂMBIA',
        'ZIMBABWE' => 'ZIMBABUÉ',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Taiwan e Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillic)',
    'CP1252'    => 'CP1252 (MS Europa Ocidental & EUA)',
    'EUC-CN'    => 'EUC-CN (Chinês Simplificado GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japonês)',
    'EUC-KR'    => 'EUC-KR (Coreano)',
    'EUC-TW'    => 'EUC-TW (Taiwanes)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonês)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coreano)',
    'ISO-8859-1'  => 'ISO-8859-1 (Europa Ocidental e EUA)',
    'ISO-8859-2'  => 'ISO-8859-2 (Europa Central e Oriental)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6'  => 'ISO-8859-6 (Árabe)',
    'ISO-8859-7'  => 'ISO-8859-7 (Grego)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebreu)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'África/Argel',
  'Africa/Luanda' => 'África/Luanda',
  'Africa/Porto-Novo' => 'África/Porto-Novo',
  'Africa/Gaborone' => 'África/Gaborone',
  'Africa/Ouagadougou' => 'África/Ouagadougou',
  'Africa/Bujumbura' => 'África/Bujumbura',
  'Africa/Douala' => 'África/Douala',
  'Atlantic/Cape_Verde' => 'Atlântico/Cabo Verde',
  'Africa/Bangui' => 'África/Bangui',
  'Africa/Ndjamena' => 'África/Ndjamena',
  'Indian/Comoro' => 'Indian/Franco comorense',
  'Africa/Kinshasa' => 'África/Kinshasa',
  'Africa/Lubumbashi' => 'África/Lubumbashi',
  'Africa/Brazzaville' => 'África/Brazzaville',
  'Africa/Abidjan' => 'África/Abidjan',
  'Africa/Djibouti' => 'África/Djibouti',
  'Africa/Cairo' => 'África/Cairo',
  'Africa/Malabo' => 'África/Malabo',
  'Africa/Asmera' => 'África/Asmera',
  'Africa/Addis_Ababa' => 'África/Addis_Ababa',
  'Africa/Libreville' => 'África/Libreville',
  'Africa/Banjul' => 'África/Banjul',
  'Africa/Accra' => 'África/Accra',
  'Africa/Conakry' => 'África/Conakry',
  'Africa/Bissau' => 'África/Bissau',
  'Africa/Nairobi' => 'África/Nairobi',
  'Africa/Maseru' => 'África/Maseru',
  'Africa/Monrovia' => 'África/Monrovia',
  'Africa/Tripoli' => 'África/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'África/Blantyre',
  'Africa/Bamako' => 'África/Bamako',
  'Africa/Nouakchott' => 'África/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'África/Casablanca',
  'Africa/El_Aaiun' => 'África/El_Aaiun',
  'Africa/Maputo' => 'África/El_Aaiun',
  'Africa/Windhoek' => 'África/El_Aaiun',
  'Africa/Niamey' => 'África/Niamey',
  'Africa/Lagos' => 'África/Lagos',
  'Indian/Reunion' => 'Indian/Reunião',
  'Africa/Kigali' => 'África/Kigali',
  'Atlantic/St_Helena' => 'Atlântico/St_Helena',
  'Africa/Sao_Tome' => 'África/São_Tomé',
  'Africa/Dakar' => 'África/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'África/Freetown',
  'Africa/Mogadishu' => 'África/Mogadishu',
  'Africa/Johannesburg' => 'África/Johannesburg',
  'Africa/Khartoum' => 'África/Khartoum',
  'Africa/Mbabane' => 'África/Mbabane',
  'Africa/Dar_es_Salaam' => 'África/Dar_es_Salaam',
  'Africa/Lome' => 'África/Lome',
  'Africa/Tunis' => 'África/Tunis',
  'Africa/Kampala' => 'África/Kampala',
  'Africa/Lusaka' => 'África/Lusaka',
  'Africa/Harare' => 'África/Harare',
  'Antarctica/Casey' => 'Antártica/Casey',
  'Antarctica/Davis' => 'Antártica/Davis',
  'Antarctica/Mawson' => 'Antártica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antártica/DumontDUrville',
  'Antarctica/Syowa' => 'Antártica/Syowa',
  'Antarctica/Vostok' => 'Antártica/Vostok',
  'Antarctica/Rothera' => 'Antártica/Rothera',
  'Antarctica/Palmer' => 'Antártica/Palmer',
  'Antarctica/McMurdo' => 'Antártica/McMurdo',
  'Asia/Kabul' => 'Ásia/Kabul',
  'Asia/Yerevan' => 'Ásia/Yerevan',
  'Asia/Baku' => 'Ásia/Baku',
  'Asia/Bahrain' => 'Ásia/Bahrain',
  'Asia/Dhaka' => 'Ásia/Dhaka',
  'Asia/Thimphu' => 'Ásia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Ásia/Brunei',
  'Asia/Rangoon' => 'Ásia/Rangoon',
  'Asia/Phnom_Penh' => 'Ásia/Phnom_Penh',
  'Asia/Beijing' => 'Ásia/Pequim',
  'Asia/Harbin' => 'Ásia/Harbin',
  'Asia/Shanghai' => 'Ásia/Shanghai',
  'Asia/Chongqing' => 'Ásia/Chongqing',
  'Asia/Urumqi' => 'Ásia/Urumqi',
  'Asia/Kashgar' => 'Ásia/Kashgar',
  'Asia/Hong_Kong' => 'Ásia/Hong_Kong',
  'Asia/Taipei' => 'Ásia/Taipei',
  'Asia/Macau' => 'Ásia/Macau',
  'Asia/Nicosia' => 'Ásia/Nicosia',
  'Asia/Tbilisi' => 'Ásia/Tbilisi',
  'Asia/Dili' => 'Ásia/Dili',
  'Asia/Calcutta' => 'Ásia/Calcutta',
  'Asia/Jakarta' => 'Ásia/Jakarta',
  'Asia/Pontianak' => 'Ásia/Pontianak',
  'Asia/Makassar' => 'Ásia/Makassar',
  'Asia/Jayapura' => 'Ásia/Jayapura',
  'Asia/Tehran' => 'Ásia/Tehran',
  'Asia/Baghdad' => 'Ásia/Baghdad',
  'Asia/Jerusalem' => 'Ásia/Jerusalem',
  'Asia/Tokyo' => 'Ásia/Tokyo',
  'Asia/Amman' => 'Ásia/Amman',
  'Asia/Almaty' => 'Ásia/Almaty',
  'Asia/Qyzylorda' => 'Ásia/Qyzylorda',
  'Asia/Aqtobe' => 'Ásia/Aqtobe',
  'Asia/Aqtau' => 'Ásia/Aqtau',
  'Asia/Oral' => 'Ásia/Oral',
  'Asia/Bishkek' => 'Ásia/Bishkek',
  'Asia/Seoul' => 'Ásia/Seoul',
  'Asia/Pyongyang' => 'Ásia/Pyongyang',
  'Asia/Kuwait' => 'Ásia/Kuwait',
  'Asia/Vientiane' => 'Ásia/Vientiane',
  'Asia/Beirut' => 'Ásia/Beirut',
  'Asia/Kuala_Lumpur' => 'Ásia/Kuala_Lumpur',
  'Asia/Kuching' => 'Ásia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Ásia/Hovd',
  'Asia/Ulaanbaatar' => 'Ásia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Ásia/Choibalsan',
  'Asia/Katmandu' => 'Ásia/Katmandu',
  'Asia/Muscat' => 'Ásia/Muscat',
  'Asia/Karachi' => 'Ásia/Karachi',
  'Asia/Gaza' => 'Ásia/Gaza',
  'Asia/Manila' => 'Ásia/Manila',
  'Asia/Qatar' => 'Ásia/Qatar',
  'Asia/Riyadh' => 'Ásia/Riyadh',
  'Asia/Singapore' => 'Ásia/Singapore',
  'Asia/Colombo' => 'Ásia/Colombo',
  'Asia/Damascus' => 'Ásia/Damascus',
  'Asia/Dushanbe' => 'Ásia/Dushanbe',
  'Asia/Bangkok' => 'Ásia/Bangkok',
  'Asia/Ashgabat' => 'Ásia/Ashgabat',
  'Asia/Dubai' => 'Ásia/Dubai',
  'Asia/Samarkand' => 'Ásia/Samarkand',
  'Asia/Tashkent' => 'Ásia/Tashkent',
  'Asia/Saigon' => 'Ásia/Saigon',
  'Asia/Aden' => 'Ásia/Aden',
  'Australia/Darwin' => 'Austrália/Darwin',
  'Australia/Perth' => 'Austrália/Perth',
  'Australia/Brisbane' => 'Austrália/Brisbane',
  'Australia/Lindeman' => 'Austrália/Lindeman',
  'Australia/Adelaide' => 'Austrália/Adelaide',
  'Australia/Hobart' => 'Austrália/Hobart',
  'Australia/Currie' => 'Austrália/Currie',
  'Australia/Melbourne' => 'Austrália/Melbourne',
  'Australia/Sydney' => 'Austrália/Sydney',
  'Australia/Broken_Hill' => 'Austrália/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacífico/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacífico/Fiji',
  'Pacific/Gambier' => 'Pacífico/Gambier',
  'Pacific/Marquesas' => 'Pacífico/Marquesas',
  'Pacific/Tahiti' => 'Pacífico/Tahiti',
  'Pacific/Guam' => 'Pacífico/Guam',
  'Pacific/Tarawa' => 'Pacífico/Tarawa',
  'Pacific/Enderbury' => 'Pacífico/Enderbury',
  'Pacific/Kiritimati' => 'Pacífico/Kiritimati',
  'Pacific/Saipan' => 'Pacífico/Saipan',
  'Pacific/Majuro' => 'Pacífico/Majuro',
  'Pacific/Kwajalein' => 'Pacífico/Kwajalein',
  'Pacific/Truk' => 'Pacífico/Truk',
  'Pacific/Pohnpei' => 'Pacífico/Pohnpei',
  'Pacific/Kosrae' => 'Pacífico/Kosrae',
  'Pacific/Nauru' => 'Pacífico/Nauru',
  'Pacific/Noumea' => 'Pacífico/Noumea',
  'Pacific/Auckland' => 'Pacífico/Auckland',
  'Pacific/Chatham' => 'Pacífico/Chatham',
  'Pacific/Niue' => 'Pacífico/Niue',
  'Pacific/Norfolk' => 'Pacífico/Norfolk',
  'Pacific/Palau' => 'Pacífico/Palau',
  'Pacific/Port_Moresby' => 'Pacífico/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacífico/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacífico/Pago_Pago',
  'Pacific/Apia' => 'Pacífico/Apia',
  'Pacific/Guadalcanal' => 'Pacífico/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacífico/Fakaofo',
  'Pacific/Tongatapu' => 'Pacífico/Tongatapu',
  'Pacific/Funafuti' => 'Pacífico/Funafuti',
  'Pacific/Johnston' => 'Pacífico/Johnston',
  'Pacific/Midway' => 'Pacífico/Midway',
  'Pacific/Wake' => 'Pacífico/Wake',
  'Pacific/Efate' => 'Pacífico/Efate',
  'Pacific/Wallis' => 'Pacífico/Wallis',
  'Europe/London' => 'Europa/Londres',
  'Europe/Dublin' => 'Europa/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europa/Tirana',
  'Europe/Andorra' => 'Europa/Andorra',
  'Europe/Vienna' => 'Europa/Viena',
  'Europe/Minsk' => 'Europa/Minsk',
  'Europe/Brussels' => 'Europa/Bruxelas',
  'Europe/Sofia' => 'Europa/Sófia',
  'Europe/Prague' => 'Europa/Praga',
  'Europe/Copenhagen' => 'Europa/Copenhaga',
  'Atlantic/Faeroe' => 'Atlântico/Faroé',
  'America/Danmarkshavn' => 'América/Danmarkshavn',
  'America/Scoresbysund' => 'América/Scoresbysund',
  'America/Godthab' => 'América/Godthab',
  'America/Thule' => 'América/Thule',
  'Europe/Tallinn' => 'Europa/Tallinn',
  'Europe/Helsinki' => 'Europa/Helsínquia',
  'Europe/Paris' => 'Europa/Paris',
  'Europe/Berlin' => 'Europa/Berlim',
  'Europe/Gibraltar' => 'Europa/Gibraltar',
  'Europe/Athens' => 'Europa/Atenas',
  'Europe/Budapest' => 'Europa/Budapeste',
  'Atlantic/Reykjavik' => 'Atlântico/Reykjavik',
  'Europe/Rome' => 'Europa/Roma',
  'Europe/Riga' => 'Europa/Riga',
  'Europe/Vaduz' => 'Europa/Vaduz',
  'Europe/Vilnius' => 'Europa/Vilnius',
  'Europe/Luxembourg' => 'Europa/Luxemburgo',
  'Europe/Malta' => 'Europa/Malta',
  'Europe/Chisinau' => 'Europa/Chisinau',
  'Europe/Monaco' => 'Europa/Mónaco',
  'Europe/Amsterdam' => 'Europa/Amesterdão',
  'Europe/Oslo' => 'Europa/Oslo',
  'Europe/Warsaw' => 'Europa/Varsóvia',
  'Europe/Lisbon' => 'Europa/Lisboa',
  'Atlantic/Azores' => 'Atlântico/Açores',
  'Atlantic/Madeira' => 'Atlântico/Madeira',
  'Europe/Bucharest' => 'Europa/Bucareste',
  'Europe/Kaliningrad' => 'Europa/Kaliningrad',
  'Europe/Moscow' => 'Europa/Moscovo',
  'Europe/Samara' => 'Europa/Samara',
  'Asia/Yekaterinburg' => 'Ásia/Yekaterinburg',
  'Asia/Omsk' => 'Ásia/Omsk',
  'Asia/Novosibirsk' => 'Ásia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Ásia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Ásia/Irkutsk',
  'Asia/Yakutsk' => 'Ásia/Yakutsk',
  'Asia/Vladivostok' => 'Ásia/Vladivostok',
  'Asia/Sakhalin' => 'Ásia/Sakhalin',
  'Asia/Magadan' => 'Ásia/Magadan',
  'Asia/Kamchatka' => 'Ásia/Kamchatka',
  'Asia/Anadyr' => 'Ásia/Anadyr',
  'Europe/Belgrade' => 'Europa/Belgrado' ,
  'Europe/Madrid' =>'Europa/Madrid' ,
  'Africa/Ceuta' => 'África/Ceuta',
  'Atlantic/Canary' => 'Atlântico/Canary',
  'Europe/Stockholm' => 'Europa/Estocolmo',
  'Europe/Zurich' => 'Europa/Zurique' ,
  'Europe/Istanbul' => 'Europa/Istambul',
  'Europe/Kiev' => 'Europa/Kiev',
  'Europe/Uzhgorod' => 'Europa/Uzhgorod',
  'Europe/Zaporozhye' => 'Europa/Zaporozhye',
  'Europe/Simferopol' => 'Europa/Simferopol',
  'America/New_York' => 'América/New_York',
  'America/Chicago' =>'América/Chicago' ,
  'America/North_Dakota/Center' => 'América/North_Dakota/Center',
  'America/Denver' => 'América/Denver',
  'America/Los_Angeles' => 'América/Los_Angeles',
  'America/Juneau' => 'América/Juneau',
  'America/Yakutat' => 'América/Yakutat',
  'America/Anchorage' => 'América/Anchorage',
  'America/Nome' =>'América/Nome' ,
  'America/Adak' => 'América/Adak',
  'Pacific/Honolulu' => 'Pacífico/Honolulu',
  'America/Phoenix' => 'América/Phoenix',
  'America/Boise' => 'América/Boise',
  'America/Indiana/Indianapolis' => 'América/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'América/Indiana/Marengo',
  'America/Indiana/Knox' =>  'América/Indiana/Knox',
  'America/Indiana/Vevay' => 'América/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'América/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'América/Kentucky/Monticello' ,
  'America/Detroit' => 'América/Detroit',
  'America/Menominee' => 'América/Menominee',
  'America/St_Johns' => 'América/St_Johns',
  'America/Goose_Bay' => 'América/Goose_Bay' ,
  'America/Halifax' => 'América/Halifax',
  'America/Glace_Bay' =>'América/Glace_Bay' ,
  'America/Montreal' => 'América/Montreal',
  'America/Toronto' => 'América/Toronto',
  'America/Thunder_Bay' => 'América/Thunder_Bay' ,
  'America/Nipigon' => 'América/Nipigon',
  'America/Rainy_River' => 'América/Rainy_River',
  'America/Winnipeg' => 'América/Winnipeg',
  'America/Regina' => 'América/Regina',
  'America/Swift_Current' => 'América/Swift_Current',
  'America/Edmonton' =>  'América/Edmonton',
  'America/Vancouver' => 'América/Vancouver',
  'America/Dawson_Creek' => 'América/Dawson_Creek',
  'America/Pangnirtung' => 'América/Pangnirtung'  ,
  'America/Iqaluit' => 'América/Iqaluit' ,
  'America/Coral_Harbour' => 'América/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'América/Rankin_Inlet',
  'America/Cambridge_Bay' => 'América/Cambridge_Bay',
  'America/Yellowknife' => 'América/Yellowknife',
  'America/Inuvik' =>'América/Inuvik' ,
  'America/Whitehorse' => 'América/Whitehorse' ,
  'America/Dawson' => 'América/Dawson',
  'America/Cancun' => 'América/Cancun',
  'America/Merida' => 'América/Merida',
  'America/Monterrey' => 'América/Monterrey',
  'America/Mexico_City' => 'América/Mexico_City',
  'America/Chihuahua' => 'América/Chihuahua',
  'America/Hermosillo' => 'América/Hermosillo',
  'America/Mazatlan' => 'América/Mazatlan',
  'America/Tijuana' => 'América/Tijuana',
  'America/Anguilla' => 'América/Anguilla',
  'America/Antigua' => 'América/Antigua',
  'America/Nassau' =>'América/Nassau' ,
  'America/Barbados' => 'América/Barbados',
  'America/Belize' => 'América/Belize',
  'Atlantic/Bermuda' => 'Atlântico/Bermuda',
  'America/Cayman' => 'América/Cayman',
  'America/Costa_Rica' => 'América/Costa_Rica',
  'America/Havana' => 'América/Havana',
  'America/Dominica' => 'América/Dominica',
  'America/Santo_Domingo' => 'América/Santo_Domingo',
  'America/El_Salvador' => 'América/El_Salvador',
  'America/Grenada' => 'América/Grenada',
  'America/Guadeloupe' => 'América/Guadeloupe',
  'America/Guatemala' => 'América/Guatemala',
  'America/Port-au-Prince' => 'América/Port-au-Prince',
  'America/Tegucigalpa' => 'América/Tegucigalpa',
  'America/Jamaica' => 'América/Jamaica',
  'America/Martinique' => 'América/Martinique',
  'America/Montserrat' => 'América/Montserrat',
  'America/Managua' => 'América/Managua',
  'America/Panama' => 'América/Panama',
  'America/Puerto_Rico' =>'América/Puerto_Rico' ,
  'America/St_Kitts' => 'América/St_Kitts',
  'America/St_Lucia' => 'América/St_Lucia',
  'America/Miquelon' => 'América/Miquelon',
  'America/St_Vincent' => 'América/St_Vincent',
  'America/Grand_Turk' => 'América/Grand_Turk',
  'America/Tortola' => 'América/Tortola',
  'America/St_Thomas' => 'América/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'América/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'América/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'América/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'América/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'América/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'América/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'América/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'América/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'América/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'América/Argentina/Ushuaia',
  'America/Aruba' => 'América/Aruba',
  'America/La_Paz' => 'América/La_Paz',
  'America/Noronha' => 'América/Noronha',
  'America/Belem' => 'América/Belem',
  'America/Fortaleza' => 'América/Fortaleza',
  'America/Recife' => 'América/Recife',
  'America/Araguaina' => 'América/Araguaina',
  'America/Maceio' => 'América/Maceio',
  'America/Bahia' => 'América/Bahia',
  'America/Sao_Paulo' => 'América/Sao_Paulo',
  'America/Campo_Grande' => 'América/Campo_Grande',
  'America/Cuiaba' => 'América/Cuiaba',
  'America/Porto_Velho' => 'América/Porto_Velho',
  'America/Boa_Vista' => 'América/Boa_Vista',
  'America/Manaus' => 'América/Manaus',
  'America/Eirunepe' => 'América/Eirunepe',
  'America/Rio_Branco' => 'América/Rio_Branco',
  'America/Santiago' => 'América/Santiago',
  'Pacific/Easter' => 'Pacífico/Easter' ,
  'America/Bogota' => 'América/Bogota',
  'America/Curacao' => 'América/Curacao',
  'America/Guayaquil' => 'América/Guayaquil',
  'Pacific/Galapagos' => 'Pacífico/Galapagos' ,
  'Atlantic/Stanley' => 'Atlântico/Stanley',
  'America/Cayenne' => 'América/Cayenne',
  'America/Guyana' => 'América/Guyana',
  'America/Asuncion' => 'América/Asuncion',
  'America/Lima' => 'América/Lima',
  'Atlantic/South_Georgia' => 'Atlântico/South_Georgia',
  'America/Paramaribo' => 'América/Paramaribo',
  'America/Port_of_Spain' => 'América/Port_of_Spain',
  'America/Montevideo' => 'América/Montevideo',
  'America/Caracas' => 'América/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Favoritos';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'Ir à reunião',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Contatos do Google',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Google Docs',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Solicitação',
        2 => 'Acesso',
        3 => 'Inválido',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Campanha' ,
    'email' => 'E-mail',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Campanha' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Campanha' ,
    'email' => 'E-mail',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Documentação',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de Conhecimento';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Categorias da Base de Conhecimento';
$app_list_strings['aok_status_list']['Draft'] = 'Rascunho';
$app_list_strings['aok_status_list']['Expired'] = 'Expirou';
$app_list_strings['aok_status_list']['In_Review'] = 'Em Revisão';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privada';
$app_list_strings['aok_status_list']['published_public'] = 'Pública';


$app_list_strings['moduleList']['Reminders'] = 'Lembretes';
$app_list_strings['moduleListSingular']['Reminders'] = 'Lembrete';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Eventos';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locais';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Convidado';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Não convidado';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Participou';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Não participou';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Aceite';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Recusado';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Não Respondeu';

$app_strings['LBL_STATUS_EVENT'] = 'Status do Convite';
$app_strings['LBL_ACCEPT_STATUS'] = 'Aceitar Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Selecione esta página';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Selecionar tudo';
$app_strings['LBL_LISTVIEW_NONE'] = 'Desmarcar Todos';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indexar Evento';
$app_list_strings['moduleList']['AOD_Index'] = 'Índice';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Eventos de Ocorrência';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Tipos de atualizações';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Eventos de Ocorrência';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Tipos de atualizações';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '====== Por favor responda acima desta linha ======';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Aberto',
        'Closed' => 'Fechado',
    );

$app_list_strings['case_status_default_key'] = 'Novo';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Novo',
        'Open_Assigned' => 'Atribuído',
        'Closed_Closed' => 'Fechado',
        'Open_Pending Input' => 'A Aguardar Resposta',
        'Closed_Rejected' => 'Rejeitado',
        'Closed_Duplicate' => 'Duplicar',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Único usuário',
        'Account' => 'Conta do usuário',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'Usar Padrão AOP',
    'singleUser' => 'Único Usuário',
    'roundRobin' => 'Circular',
    'leastBusy' => 'Menos Ocupado',
    'random' => 'Aleatório',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Relatórios';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Relatório - Condições';
$app_list_strings['moduleList']['AOR_Charts'] = 'Gráficos de Relatório';
$app_list_strings['moduleList']['AOR_Fields'] = 'Relatório - Campos';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Relatórios Agendados';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Igual A';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Diferente De';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Maior Que';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Menor Que';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Maior Que ou Igual A';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Menor que ou Igual A';
$app_list_strings['aor_operator_list']['Contains'] = 'Contém';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Começa com';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Termina Com';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Amd';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/A';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aor_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aor_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aor_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aor_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aor_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aor_sql_operator_list']['Contains'] = 'COMO';
$app_list_strings['aor_sql_operator_list']['Starts_With'] = 'COMO';
$app_list_strings['aor_sql_operator_list']['Ends_With'] = 'COMO';
$app_list_strings['aor_condition_operator_list']['And'] = 'E';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valor';
$app_list_strings['aor_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Um dos';
$app_list_strings['aor_condition_type_list']['Period'] = 'Período';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Usuário Atual';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutos';
$app_list_strings['aor_date_type_list']['hour'] = 'Horas';
$app_list_strings['aor_date_type_list']['day'] = 'Dias';
$app_list_strings['aor_date_type_list']['week'] = 'Semanas';
$app_list_strings['aor_date_type_list']['month'] = 'Meses';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Horário Comercial';
$app_list_strings['aor_date_options']['now'] = 'Agora';
$app_list_strings['aor_date_options']['field'] = 'Este Campo';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascendente';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descendente';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Contagem';
$app_list_strings['aor_function_list']['MIN'] = 'Mínimo';
$app_list_strings['aor_function_list']['MAX'] = 'Máximo';
$app_list_strings['aor_function_list']['SUM'] = 'Soma';
$app_list_strings['aor_function_list']['AVG'] = 'Média';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Contagem';
$app_list_strings['aor_total_options']['SUM'] = 'Soma';
$app_list_strings['aor_total_options']['AVG'] = 'Média';
$app_list_strings['aor_chart_types']['bar'] = 'Gráfico de Colunas';
$app_list_strings['aor_chart_types']['line'] = 'Gráfico de Linhas';
$app_list_strings['aor_chart_types']['pie'] = 'Gráfico de Pizza';
$app_list_strings['aor_chart_types']['radar'] = 'Gráfico de Radar';
$app_list_strings['aor_chart_types']['polar'] = 'Gráfico Polar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Colunas empilhadas';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Colunas agrupadas';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensal';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Semanal';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Diariamente';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Ativo';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inativo';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilizador';
$app_list_strings['aor_email_type_list']['Users'] = 'Usuários';
$app_list_strings['aor_assign_options']['all'] = 'Todos Usuários';
$app_list_strings['aor_assign_options']['role'] = 'Todos Usuários na Função';
$app_list_strings['aor_assign_options']['security_group'] = 'Todos Usuários no Grupo de Segurança';
$app_list_strings['date_time_period_list']['today'] = 'Hoje';
$app_list_strings['date_time_period_list']['yesterday'] = 'Ontem';
$app_list_strings['date_time_period_list']['this_week'] = 'Esta Semana';
$app_list_strings['date_time_period_list']['last_week'] = 'Semana Passada';
$app_list_strings['date_time_period_list']['last_month'] = 'Mês Passado';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Este Trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Trimestre Passado';
$app_list_strings['date_time_period_list']['this_year'] = 'Este Ano';
$app_list_strings['date_time_period_list']['last_year'] = 'Ano Passado';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'no';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'em';
$app_strings['LBL_CRON_AT'] = 'em';
$app_strings['LBL_CRON_RAW'] = 'Avançada';
$app_strings['LBL_CRON_MIN'] = 'Minuto';
$app_strings['LBL_CRON_HOUR'] = 'Hora';
$app_strings['LBL_CRON_DAY'] = 'Dia';
$app_strings['LBL_CRON_MONTH'] = 'Mês';
$app_strings['LBL_CRON_DOW'] = 'DIA';
$app_strings['LBL_CRON_DAILY'] = 'Diariamente';
$app_strings['LBL_CRON_WEEKLY'] = 'Semanal';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensal';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contratos';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faturas';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'Modelos de PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Categorias de Produto';
$app_list_strings['moduleList']['AOS_Products'] = 'Produtos';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Linhas de Itens';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Grupos de Linha de Item';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Cotações';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrador';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investidor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Parceiro';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Imprensa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Potencial Cliente';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendedor';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Outro';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Rascunho';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negociação';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Entregue';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Em Espera';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmado';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Fechado Aceita';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Fechada Perdida';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Fechada Inoperante';
$app_list_strings['quote_term_dom']['Net 15'] = '15 dias sem desconto';
$app_list_strings['quote_term_dom']['Net 30'] = '30 dias sem desconto';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Aprovado';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Reprovado';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Perc';
$app_list_strings['discount_list']['Amount'] = 'Vlr';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrador';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investidor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Parceiro';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Imprensa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Potencial Cliente';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendedor';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Outro';
$app_list_strings['invoice_status_dom']['Paid'] = 'Pago';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Não Pago';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancelado';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Não Faturado';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Faturado';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Notebooks';
$app_list_strings['product_category_dom']['Desktops'] = 'Computadores';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Produto';
$app_list_strings['product_type_dom']['Service'] = 'Serviço';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Cotações';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faturas';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contratos';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Cotações';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faturas';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contratos';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Entidades';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contactos';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Contatos';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Não Iniciado';
$app_list_strings['contract_status_list']['In Progress'] = 'Em Andamento';
$app_list_strings['contract_status_list']['Signed'] = 'Assinado';
$app_list_strings['contract_type_list']['Type'] = 'Tipo';
$app_strings['LBL_GENERATE_LETTER'] = 'Gerar Carta';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Por favor Selecione um Modelo';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNenhum modelo encontrado.\nPor favor, crie um modelo de Contrato no módulo de Modelos PDF';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Fluxo de Serviço';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condições de fluxo de trabalho';
$app_list_strings['moduleList']['AOW_Processed'] = 'Auditoria em Processo';
$app_list_strings['moduleList']['AOW_Actions'] = 'Ações de Fluxo de Serviço';
$app_list_strings['aow_status_list']['Active'] = 'Ativo';
$app_list_strings['aow_status_list']['Inactive'] = 'Inativo';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Igual A';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Diferente De';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Maior Que';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Menor Que';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Maior Que ou Igual A';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Menor que ou Igual A';
$app_list_strings['aow_operator_list']['Contains'] = 'Contém';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Começa com';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Termina Com';
$app_list_strings['aow_operator_list']['is_null'] = 'É Nulo';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'COMO';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'COMO';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'COMO';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Finalizada';
$app_list_strings['aow_process_status_list']['Running'] = 'Executando';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pendente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Falhou';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valor';
$app_list_strings['aow_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Qualquer Alteração';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'No Grupo de Segurança';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Um dos';
$app_list_strings['aow_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Circular';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Menos Ocupado';
$app_list_strings['aow_action_type_list']['Random'] = 'Aleatório';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutos';
$app_list_strings['aow_date_type_list']['hour'] = 'Horas';
$app_list_strings['aow_date_type_list']['day'] = 'Dias';
$app_list_strings['aow_date_type_list']['week'] = 'Semanas';
$app_list_strings['aow_date_type_list']['month'] = 'Meses';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Horário Comercial';
$app_list_strings['aow_date_options']['now'] = 'Agora';
$app_list_strings['aow_date_options']['today'] = 'Hoje';
$app_list_strings['aow_date_options']['field'] = 'Este Campo';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Todos Usuários';
$app_list_strings['aow_assign_options']['role'] = 'Todos Usuários na Função';
$app_list_strings['aow_assign_options']['security_group'] = 'Todos Usuários no Grupo de Segurança';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Registrar Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Campo Relacionado';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilizador';
$app_list_strings['aow_email_type_list']['Users'] = 'Usuários';
$app_list_strings['aow_email_to_list']['to'] = 'Para';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cco';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Todos Registros';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Novos Registros';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Registros Modificados';
$app_list_strings['aow_run_when_list']['Always'] = 'Sempre';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Somente Ao Salvar';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Somente Ao Agendar';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Modelos de Projetos';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Modelos de Tarefas Projetos';
$app_list_strings['relationship_type_list']['FS'] = 'Término a Início';
$app_list_strings['relationship_type_list']['SS'] = 'Início a Início';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Folga de Projetos';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Contactos';
$app_list_strings['holiday_resource_dom']['Users'] = 'Usuários';
$app_list_strings['duration_unit_dom']['Days'] = 'Dias';
$app_list_strings['duration_unit_dom']['Hours'] = 'Horas';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Exibir Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Exibir Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Novo Projeto';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';
$app_strings['LBL_MAPS'] = 'Mapas';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status de geocódigo';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Endereço:';
$app_strings['LBL_BUG_FIX'] = 'Correção de bug';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mapas';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Marcadores do Mapa';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Áreas do Mapa';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cache de Endereço do Mapa';

$app_list_strings['map_unit_type_list']['mi'] = 'Milhas';
$app_list_strings['map_unit_type_list']['km'] = 'Quilômetros';

$app_list_strings['map_module_type_list']['Accounts'] = 'Entidades';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contactos';
$app_list_strings['map_module_type_list']['Cases'] = 'Ocorrências';
$app_list_strings['map_module_type_list']['Leads'] = 'Contatos';
$app_list_strings['map_module_type_list']['Meetings'] = 'Reuniões';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Oportunidades';
$app_list_strings['map_module_type_list']['Project'] = 'Projectos';
$app_list_strings['map_module_type_list']['Prospects'] = 'Alvos';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Conta';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contato';
$app_list_strings['map_relate_type_list']['Cases'] = 'Ocorrência';
$app_list_strings['map_relate_type_list']['Leads'] = 'Contato';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Reunião';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Oportunidade';
$app_list_strings['map_relate_type_list']['Project'] = 'Projeto';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Alvo';

$app_list_strings['marker_image_list']['accident'] = 'Acidente';
$app_list_strings['marker_image_list']['administration'] = 'Administração';
$app_list_strings['marker_image_list']['agriculture'] = 'Agricultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aeronave Pequena';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avião de Turismo';
$app_list_strings['marker_image_list']['airport'] = 'Aeroporto ';
$app_list_strings['marker_image_list']['amphitheater'] = 'Anfiteatro';
$app_list_strings['marker_image_list']['apartment'] = 'Apartamento';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquário';
$app_list_strings['marker_image_list']['arch'] = 'Arco';
$app_list_strings['marker_image_list']['atm'] = 'Caixa Eletrônico';
$app_list_strings['marker_image_list']['audio'] = 'Áudio';
$app_list_strings['marker_image_list']['bank'] = 'Banco';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banco Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banco Libra';
$app_list_strings['marker_image_list']['bar'] = 'Barra';
$app_list_strings['marker_image_list']['beach'] = 'Praia';
$app_list_strings['marker_image_list']['beautiful'] = 'Linda';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicicletário';
$app_list_strings['marker_image_list']['big_city'] = 'Cidade Grande';
$app_list_strings['marker_image_list']['bridge'] = 'Ponte';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Ponte Moderna';
$app_list_strings['marker_image_list']['bus'] = 'Ônibus';
$app_list_strings['marker_image_list']['cable_car'] = 'Teleférico';
$app_list_strings['marker_image_list']['car'] = 'Carro';
$app_list_strings['marker_image_list']['car_rental'] = 'Aluguel de Carro';
$app_list_strings['marker_image_list']['carrepair'] = 'Oficina Mecânica';
$app_list_strings['marker_image_list']['castle'] = 'Castelo';
$app_list_strings['marker_image_list']['cathedral'] = 'Catedral';
$app_list_strings['marker_image_list']['chapel'] = 'Capela';
$app_list_strings['marker_image_list']['church'] = 'Igreja';
$app_list_strings['marker_image_list']['city_square'] = 'Praça';
$app_list_strings['marker_image_list']['cluster'] = 'Agrupamento';
$app_list_strings['marker_image_list']['cluster_2'] = 'Agrupamento 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Agrupamento 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Agrupamento 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Agrupamento 5';
$app_list_strings['marker_image_list']['coffee'] = 'Café';
$app_list_strings['marker_image_list']['community_centre'] = 'Centro Comunitário';
$app_list_strings['marker_image_list']['company'] = 'Empresa';
$app_list_strings['marker_image_list']['conference'] = 'Conferência';
$app_list_strings['marker_image_list']['construction'] = 'Construção';
$app_list_strings['marker_image_list']['convenience'] = 'Conveniência';
$app_list_strings['marker_image_list']['court'] = 'Tribunal';
$app_list_strings['marker_image_list']['cruise'] = 'Cruzeiro';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Casa de Câmbio';
$app_list_strings['marker_image_list']['customs'] = 'Aduaneira';
$app_list_strings['marker_image_list']['cycling'] = 'Ciclovia';
$app_list_strings['marker_image_list']['dam'] = 'Barragem';
$app_list_strings['marker_image_list']['days_dim'] = 'Dias Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Dias Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Dias Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Dias Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Dias Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Dias Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Dias Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Dias Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Dias Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Dias Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Dias Sáb';
$app_list_strings['marker_image_list']['days_sam'] = 'Dias Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Dias Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Dias Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Dias Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Dias Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Dias Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Loja de Departamentos';
$app_list_strings['marker_image_list']['disability'] = 'Deficiência';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Estacionamento para Deficiente';
$app_list_strings['marker_image_list']['doctor'] = 'Médico';
$app_list_strings['marker_image_list']['dog_leash'] = 'Correia para Cachorro';
$app_list_strings['marker_image_list']['down'] = 'Baixo';
$app_list_strings['marker_image_list']['down_left'] = 'Baixo à Esquerda';
$app_list_strings['marker_image_list']['down_right'] = 'Baixo à Direita';
$app_list_strings['marker_image_list']['down_then_left'] = 'Baixo, depois à Esquerda';
$app_list_strings['marker_image_list']['down_then_right'] = 'Baixo, depois à Direita';
$app_list_strings['marker_image_list']['drugs'] = 'Remédios';
$app_list_strings['marker_image_list']['elevator'] = 'Elevador';
$app_list_strings['marker_image_list']['embassy'] = 'Embaixada';
$app_list_strings['marker_image_list']['expert'] = 'Especialista';
$app_list_strings['marker_image_list']['factory'] = 'Fábrica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Queda de Rochas';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast-Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiorde';
$app_list_strings['marker_image_list']['forest'] = 'Floresta';
$app_list_strings['marker_image_list']['fountain'] = 'Fonte';
$app_list_strings['marker_image_list']['friday'] = 'Sexta';
$app_list_strings['marker_image_list']['garden'] = 'Jardim';
$app_list_strings['marker_image_list']['gas_station'] = 'Posto de Combustível';
$app_list_strings['marker_image_list']['geyser'] = 'Gêiser ';
$app_list_strings['marker_image_list']['gifts'] = 'Presentes';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Mercearia';
$app_list_strings['marker_image_list']['hairsalon'] = 'Cabeleireiro';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicóptero';
$app_list_strings['marker_image_list']['highway'] = 'Rodovia';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Bairro Histórico';
$app_list_strings['marker_image_list']['home'] = 'Início';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Estrela';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Estrelas';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Estrelas';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Estrelas';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Estrelas';
$app_list_strings['marker_image_list']['info'] = 'Informação';
$app_list_strings['marker_image_list']['justice'] = 'Justiça';
$app_list_strings['marker_image_list']['lake'] = 'Lago';
$app_list_strings['marker_image_list']['laundromat'] = 'Lavanderia';
$app_list_strings['marker_image_list']['left'] = 'Esquerda';
$app_list_strings['marker_image_list']['left_then_down'] = 'Esquerda, depois para Baixo';
$app_list_strings['marker_image_list']['left_then_up'] = 'Esquerda, depois para Cima';
$app_list_strings['marker_image_list']['library'] = 'Biblioteca';
$app_list_strings['marker_image_list']['lighthouse'] = 'Farol';
$app_list_strings['marker_image_list']['liquor'] = 'Licor';
$app_list_strings['marker_image_list']['lock'] = 'Bloqueio';
$app_list_strings['marker_image_list']['main_road'] = 'Rodovia Principal';
$app_list_strings['marker_image_list']['massage'] = 'Mensagem';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Torre de Celular';
$app_list_strings['marker_image_list']['modern_tower'] = 'Torre Moderna';
$app_list_strings['marker_image_list']['monastery'] = 'Mosteiro';
$app_list_strings['marker_image_list']['monday'] = 'Segunda';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Mesquita';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocicleta';
$app_list_strings['marker_image_list']['museum'] = 'Museu';
$app_list_strings['marker_image_list']['music_live'] = 'Música ao vivo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pumpjack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palácio';
$app_list_strings['marker_image_list']['panoramic'] = 'Panorâmica';
$app_list_strings['marker_image_list']['park'] = 'Parque';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parque e Passeio';
$app_list_strings['marker_image_list']['parking'] = 'Estacionamento';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Piquenique';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Lugares não Visitados';
$app_list_strings['marker_image_list']['places_visited'] = 'Lugares Visitados';
$app_list_strings['marker_image_list']['playground'] = 'Parque Infantil';
$app_list_strings['marker_image_list']['police'] = 'Polícia';
$app_list_strings['marker_image_list']['port'] = 'Porta';
$app_list_strings['marker_image_list']['postal'] = 'Correios';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poste de Energia';
$app_list_strings['marker_image_list']['power_plant'] = 'Usina de Energia';
$app_list_strings['marker_image_list']['power_substation'] = 'Subestação de Energia';
$app_list_strings['marker_image_list']['public_art'] = 'Arte Pública';
$app_list_strings['marker_image_list']['rain'] = 'Chuva';
$app_list_strings['marker_image_list']['real_estate'] = 'Imóveis';
$app_list_strings['marker_image_list']['regroup'] = 'Reagrupar';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurante';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurante Africano';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Churrsacaria';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurante Chinês';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurante de Peixes';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurante de Peixe Frito';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurante Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurante Grego';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurante Indiano';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurante Italiano';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurante Japonês';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurante Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurante Coreano';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurante Mediterrâneo';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurante Mexicano';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurante Romântico';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurante Tailandês';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurante Turco';
$app_list_strings['marker_image_list']['right'] = 'Direito';
$app_list_strings['marker_image_list']['right_then_down'] = 'Direita, depois para Baixo';
$app_list_strings['marker_image_list']['right_then_up'] = 'Direita, depois para Cima';
$app_list_strings['marker_image_list']['satursday'] = 'Sábado';
$app_list_strings['marker_image_list']['school'] = 'Escola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping';
$app_list_strings['marker_image_list']['shore'] = 'Litoral';
$app_list_strings['marker_image_list']['sight'] = 'Paisagem';
$app_list_strings['marker_image_list']['small_city'] = 'Cidade Pequena';
$app_list_strings['marker_image_list']['snow'] = 'Neve';
$app_list_strings['marker_image_list']['spaceport'] = 'Porto Espacial';
$app_list_strings['marker_image_list']['speed_100'] = 'Velocidade 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Velocidade 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Velocidade 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Velocidade 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Velocidade 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Velocidade 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Velocidade 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Velocidade 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Velocidade 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Velocidade 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Velocidade 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Velocidade 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Lombada';
$app_list_strings['marker_image_list']['stadium'] = 'Estádio';
$app_list_strings['marker_image_list']['statue'] = 'Estátua';
$app_list_strings['marker_image_list']['steam_train'] = 'Trem a Vapor';
$app_list_strings['marker_image_list']['stop'] = 'Pare';
$app_list_strings['marker_image_list']['stoplight'] = 'Semáforo';
$app_list_strings['marker_image_list']['subway'] = 'Metrô';
$app_list_strings['marker_image_list']['sun'] = 'Dom';
$app_list_strings['marker_image_list']['sunday'] = 'Domingo';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermercado';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Táxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Corredor de Táxi';
$app_list_strings['marker_image_list']['teahouse'] = 'Casa de Chá';
$app_list_strings['marker_image_list']['telephone'] = 'Telefone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Templo Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terraço';
$app_list_strings['marker_image_list']['text'] = 'Texto';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Parque Temático';
$app_list_strings['marker_image_list']['thursday'] = 'Quinta';
$app_list_strings['marker_image_list']['toilets'] = 'Banheiros';
$app_list_strings['marker_image_list']['toll_station'] = 'Pedágio';
$app_list_strings['marker_image_list']['tower'] = 'Torre';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Radar Eletrônico';
$app_list_strings['marker_image_list']['train'] = 'Trem';
$app_list_strings['marker_image_list']['tram'] = 'Bonde';
$app_list_strings['marker_image_list']['truck'] = 'Caminhão';
$app_list_strings['marker_image_list']['tuesday'] = 'Terça';
$app_list_strings['marker_image_list']['tunnel'] = 'Túnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Vire à Esquerda';
$app_list_strings['marker_image_list']['turn_right'] = 'Vire à Direita';
$app_list_strings['marker_image_list']['university'] = 'Universidade';
$app_list_strings['marker_image_list']['up'] = 'Acima';
$app_list_strings['marker_image_list']['up_left'] = 'Acima à Esquerda';
$app_list_strings['marker_image_list']['up_right'] = 'Acima à Direita';
$app_list_strings['marker_image_list']['up_then_left'] = 'Acima, depois à Esquerda';
$app_list_strings['marker_image_list']['up_then_right'] = 'Adima, depois à Direita';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vídeo';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Água';
$app_list_strings['marker_image_list']['waterfall'] = 'Cachoeira';
$app_list_strings['marker_image_list']['watermill'] = 'Moinho de Água';
$app_list_strings['marker_image_list']['waterpark'] = 'Parque Aquático';
$app_list_strings['marker_image_list']['watertower'] = 'Torre de Água';
$app_list_strings['marker_image_list']['wednesday'] = 'Quarta';
$app_list_strings['marker_image_list']['wifi'] = 'Wi-fi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbina de Vento';
$app_list_strings['marker_image_list']['windmill'] = 'Moinho de Vento';
$app_list_strings['marker_image_list']['winery'] = 'Adega';
$app_list_strings['marker_image_list']['work_office'] = 'Escritório';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Patrimônio Mundial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoológico';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Ausente';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Em Reunião';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Remarcar';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Por favor, informe os dados para reagendamento';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motivo:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Por favor, selecione uma data válida';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Por favor, selecione um motivo';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Remarcar';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Histórico de tentativa de ligação';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentativas de Ligação';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Gerenciamento de Grupos de Segurança';
$app_strings['LBL_LOGIN_AS'] = "Acessar como ";
$app_strings['LBL_LOGOUT_AS'] = "Sair como ";
$app_strings['LBL_SECURITYGROUP'] = 'Grupo de Segurança';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Usuário do Facebook';
$app_strings['LBL_TWITTER_USER_C'] = 'Usuário do Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalhe do Feed Social';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtro';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Criar Entidade';
$app_strings['LBL_QUICK_CONTACT'] = 'Criar Contato';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Criar Oportunidade';
$app_strings['LBL_QUICK_LEAD'] = 'Novo Potencial';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Criar Documento';
$app_strings['LBL_QUICK_CALL'] = 'Registrar Ligação';
$app_strings['LBL_QUICK_TASK'] = 'Criar Tarefa';
$app_strings['LBL_COLLECTION_TYPE'] = 'Tipo';

$app_strings['LBL_ADD_TAB'] = 'Adicionar Guia';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Painel do SuiteCRM ';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Informe um Nome para o Painel:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Selecione o número de colunas';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Tem certeza que deseja excluir o';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Painel?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Adicionar uma Página no Painel';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remover a Página Atual do Painel';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renomear Página do Painel';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Descubra o SuiteCRM';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Tarefas', 'Meetings' => 'Reuniões', 'Calls' => 'Ligações', 'Notes' => 'Notas', 'Emails' => 'E-mails' );

?>
