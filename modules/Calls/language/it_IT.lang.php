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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Chiamate',
    'LBL_MODULE_TITLE' => 'Chiamate: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Chiamata',
    'LBL_LIST_FORM_TITLE' => 'Elenco Chiamate',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Appuntamento',
    'LBL_LIST_CLOSE' => 'Chiudi',
    'LBL_LIST_SUBJECT' => 'Oggetto',
    'LBL_LIST_CONTACT' => 'Contatto',
    'LBL_LIST_RELATED_TO' => 'Relativo a',
    'LBL_LIST_RELATED_TO_ID' => 'Relativo a ID',
    'LBL_LIST_DATE' => 'Data Inizio',
    'LBL_LIST_TIME' => 'Ora Inizio',
    'LBL_LIST_DURATION' => 'Durata',
    'LBL_LIST_DIRECTION' => 'Direzione',
    'LBL_SUBJECT' => 'Oggetto:',
    'LBL_REMINDER' => 'Promemoria:',
    'LBL_CONTACT_NAME' => 'Contatto:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_STATUS' => 'Stato:',
    'LBL_DIRECTION' => 'Direzione',
    'LBL_DATE' => 'Data Inizio:',
    'LBL_DURATION' => 'Durata:',
    'LBL_DURATION_HOURS' => 'Durata Ore:',
    'LBL_DURATION_MINUTES' => 'Durata Minuti:',
    'LBL_HOURS_MINUTES' => '(ore/minuti)',
    'LBL_CALL' => 'Chiamata:',
    'LBL_DATE_TIME' => 'Data e Ora Inizio:',
    'LBL_TIME' => 'Ora Inizio:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_COLON' => ':',
    'LNK_NEW_CALL' => 'Nuova Chiamata',
    'LNK_NEW_MEETING' => 'Pianifica Riunione',
    'LNK_CALL_LIST' => 'Visualizza Chiamate',
    'LNK_IMPORT_CALLS' => 'Importa Chiamate',
    'ERR_DELETE_RECORD' => 'Per eliminare l´azienda è necessario fornire il numero del record.',
    'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler togliere questo invitato dalla chiamata?',
    'LBL_INVITEE' => 'Invitati',
    'LBL_RELATED_TO' => 'Relativo a:',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LBL_SCHEDULING_FORM_TITLE' => 'Gestione degli Invitati',
    'LBL_ADD_INVITEE' => 'Aggiungi Invitati',
    'LBL_NAME' => 'Nome',
    'LBL_FIRST_NAME' => 'Nome',
    'LBL_LAST_NAME' => 'Cognome',
    'LBL_EMAIL' => 'Emails',
    'LBL_PHONE' => 'Telefono',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL' => 'Emails',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Invia una Email a tutti gli invitati',
    'LBL_EMAIL_REMINDER' => 'Email di promemoria',
    'LBL_EMAIL_REMINDER_TIME' => 'Data di invio email di promemoria',
    'LBL_SEND_BUTTON_TITLE' => 'Invia Inviti [Alt+I]',
    'LBL_SEND_BUTTON_KEY' => 'I',
    'LBL_SEND_BUTTON_LABEL' => 'Invia Inviti',
    'LBL_DATE_END' => 'Data Fine',
    'LBL_TIME_END' => 'Ora Fine',
    'LBL_REMINDER_TIME' => 'Tempo di Avviso',
    'LBL_EMAIL_REMINDER_SENT' => 'Email di promemoria inviati',
    'LBL_SEARCH_BUTTON' => 'Cerca',
    'LBL_ACTIVITIES_REPORTS' => 'Report Attività',
    'LBL_ADD_BUTTON' => 'Aggiungi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Chiamate',
    'LBL_LOG_CALL' => 'Nuova Chiamata',
    'LNK_SELECT_ACCOUNT' => 'Seleziona Azienda',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LBL_DEL' => 'Cancella',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utenti',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_MEMBER_OF' => 'Membro di',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_LIST_MY_CALLS' => 'Le mie Chiamate',
    'LBL_SELECT_FROM_DROPDOWN' => 'Si prega prima di selezionare una voce dalla lista dropdown di Collegato a',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato:',
    'NOTICE_DURATION_TIME' => 'La durata deve essere superiore a 0',
    'LBL_CALL_INFORMATION' => 'Informazioni Chiamata',
    'LBL_REMOVE' => 'Canc',
    'LBL_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_ACCEPT_LINK' => 'Accetta Link',
    //For export labels
    'LBL_PARENT_ID' => 'ID Padre:',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
    'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
    'LBL_EXPORT_DATE_START' => 'Data e Ora inizio',
    'LBL_EXPORT_PARENT_TYPE' => 'Collegato al Modulo',
    'LBL_EXPORT_REMINDER_TIME' => 'Promemoria (in minuti)',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Creare un invitato',
    'LBL_CREATE_CONTACT' => 'Come Contatto',
    'LBL_CREATE_LEAD' => 'Come Lead',
    'LBL_CREATE_AND_ADD' => 'Crea & Aggiungi',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annulla',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nessun risultato trovato. Si prega di creare un invitato.',
    'LBL_NO_ACCESS' => 'Non hai i permessi di creare $module',

    'LBL_REPEAT_TYPE' => 'Ripetere Tipo',
    'LBL_REPEAT_INTERVAL' => 'Ripetere Intervallo',
    'LBL_REPEAT_DOW' => 'Ripetere Dow',
    'LBL_REPEAT_UNTIL' => 'Ripetere Fino',
    'LBL_REPEAT_COUNT' => 'Ripetere Conteggio',
    'LBL_REPEAT_PARENT_ID' => 'Ripetere ID Parent',
    'LBL_RECURRING_SOURCE' => 'Fonte Ricorrente',

    'LBL_SYNCED_RECURRING_MSG' => 'Questa telefonata è stata originata in un altro sistema e sincronizzata in SuiteCRM. Per effettuare delle modifiche, si prega di andare nella telefonata originale all´interno dell´altro sistema. Le modifiche fatte nell´altro sistema potranno essere sincronizzate con questo record di SuiteCRM.',

    // for reminders
    'LBL_REMINDERS' => 'Preavvisi?',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Rischedula',
    'LBL_RESCHEDULE_COUNT' => 'Tentativi di Chiamata',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Ragione',
    'LBL_RESCHEDULE_ERROR1' => 'Selezionare una data valida',
    'LBL_RESCHEDULE_ERROR2' => 'Selezionare un motivo',
    'LBL_RESCHEDULE_PANEL' => 'Rischedula',
    'LBL_RESCHEDULE_HISTORY' => 'Storico Tentativi di Chiamata'

);


?>
