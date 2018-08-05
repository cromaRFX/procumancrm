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
  'LBL_MODULE_NAME' => 'Cronologia',
  'LBL_MODULE_TITLE' => 'Cronologia: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Cronologia',
  'LBL_LIST_FORM_TITLE' => 'Cronologia',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_LIST_CONTACT' => 'Contatto',
  'LBL_LIST_RELATED_TO' => 'Relativo a',
  'LBL_LIST_DATE' => 'Data',
  'LBL_LIST_TIME' => 'Ora Inizio',
  'LBL_LIST_CLOSE' => 'Chiudi',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_STATUS' => 'Stato:',
  'LBL_LOCATION' => 'Luogo:',
  'LBL_DATE_TIME' => 'Data e Ora Inizio:',
  'LBL_DATE' => 'Data Inizio:',
  'LBL_TIME' => 'Ora Inizio:',
  'LBL_DURATION' => 'Durata:',
  'LBL_HOURS_MINS' => '(ore/minuti)',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_MEETING' => 'Riunione:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Pianificato',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_EMAIL' => 'Archivia Email',
  'LNK_CALL_LIST' => 'Chiamate',
  'LNK_MEETING_LIST' => 'Riunioni',
  'LNK_TASK_LIST' => 'Compiti',
  'LNK_NOTE_LIST' => 'Note',
  'LNK_EMAIL_LIST' => 'Email',
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler eliminare questo invitato dalla riunione?',
  'LBL_INVITEE' => 'Invitati',
  'LBL_LIST_DIRECTION' => 'Ordine',
  'LBL_DIRECTION' => 'Ordine',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_VIEW_CALENDAR' => 'Oggi',
  'LBL_OPEN_ACTIVITIES' => 'Attività Aperte',
  'LBL_HISTORY' => 'Cronologia',
  'LBL_UPCOMING' => 'I miei Prossimi Appuntamenti',
  'LBL_TODAY' => 'per',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Nuovo Compito',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Nuovo Compito',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Nuova Riunione',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Nuova Riunione',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Nuova Chiamata',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Nuova Chiamata',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nuova Nota o Allegato',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nuova Nota o Allegato',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_DUE_DATE' => 'Data Scadenza',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima Modifica',
  'NTC_NONE_SCHEDULED' => 'Niente di pianificato.',
  'appointment_filter_dom' => array(
  	 'today' => 'oggi'
  	,'tomorrow' => 'domani'
  	,'this Saturday' => 'questa settimana'
  	,'next Saturday' => 'la prossima settimana'
  	,'last this_month' => 'questo mese'
  	,'last next_month' => 'il prossimo mese'
  ),
  'LNK_IMPORT_NOTES'=>'Importa Note',
  'NTC_NONE'=>'Nessuno',
	'LBL_ACCEPT_THIS'=>'Accetti?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cronologia',
);

?>