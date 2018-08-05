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
  'LBL_MODULE_NAME' => 'Histórico',
  'LBL_MODULE_TITLE' => 'História: Ínício',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Histórico',
  'LBL_LIST_FORM_TITLE' => 'Histórico',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_CONTACT' => 'Contato',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_DATE' => 'Data',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LIST_CLOSE' => 'Fechar',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_STATUS' => 'Status:',
  'LBL_LOCATION' => 'Local:',
  'LBL_DATE_TIME' => 'Data e Hora de Iní­cio:',
  'LBL_DATE' => 'Data de Início:',
  'LBL_TIME' => 'Hora de Início:',
  'LBL_DURATION' => 'Duração:',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_CONTACT_NAME' => 'Nome do Contato:',
  'LBL_MEETING' => 'Reunião:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrição',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planejada',
  'LNK_NEW_CALL' => 'Registrar Ligação',
  'LNK_NEW_MEETING' => 'Agendar Reunião',
  'LNK_NEW_TASK' => 'Criar Tarefa',
  'LNK_NEW_NOTE' => 'Criar Nota ou Anexo',
  'LNK_NEW_EMAIL' => 'Arquivar Email',
  'LNK_CALL_LIST' => 'Ligações',
  'LNK_MEETING_LIST' => 'Reuniões',
  'LNK_TASK_LIST' => 'Tarefas',
  'LNK_NOTE_LIST' => 'Notas',
  'LNK_EMAIL_LIST' => 'E-mails',
  'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registo deve ser informado.',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este convidado da reunião?',
  'LBL_INVITEE' => 'Convidados',
  'LBL_LIST_DIRECTION' => 'Endereço',
  'LBL_DIRECTION' => 'Endereço',
  'LNK_NEW_APPOINTMENT' => 'Novo Compromisso',
  'LNK_VIEW_CALENDAR' => 'Hoje',
  'LBL_OPEN_ACTIVITIES' => 'Atividades Abertas',
  'LBL_HISTORY' => 'Histórico',
  'LBL_UPCOMING' => 'Meus Futuros Compromissos',
  'LBL_TODAY' => 'através',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Criar Tarefa',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Criar Tarefa',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Agendar Reunião',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Agendar Reunião',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Registrar Ligação',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Registrar Ligação',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Criar Nota ou Anexo',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Criar Nota ou Anexo',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arquivar Email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arquivar Email',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Data Limite',
  'LBL_LIST_LAST_MODIFIED' => 'Última Modificação',
  'NTC_NONE_SCHEDULED' => 'Nada programado.',
  'appointment_filter_dom' => array(
  	 'today' => 'hoje'
  	,'tomorrow' => 'amanhã'
  	,'this Saturday' => 'esta semana'
  	,'next Saturday' => 'próxima semana'
  	,'last this_month' => 'este mês'
  	,'last next_month' => 'próximo mês'
  ),
  'LNK_IMPORT_NOTES'=>'Importar Notas',
  'NTC_NONE'=>'Nada',
	'LBL_ACCEPT_THIS'=>'Aceitar?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Histórico',
);

?>