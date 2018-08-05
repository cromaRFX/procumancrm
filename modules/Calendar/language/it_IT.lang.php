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

    'LBL_MODULE_NAME' => 'Calendario',
    'LBL_MODULE_TITLE' => 'Calendario',
    'LNK_NEW_CALL' => 'Nuova Chiamata',
    'LNK_NEW_MEETING' => 'Nuova Riunione',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_CALL_LIST' => 'Visualizza Chiamate',
    'LNK_MEETING_LIST' => 'Visualizza Riunioni',
    'LNK_TASK_LIST' => 'Visualizza Compiti',
    'LNK_VIEW_CALENDAR' => 'Oggi',
    'LNK_IMPORT_CALLS' => 'Importa Chiamate',
    'LNK_IMPORT_MEETINGS' => 'Importa Riunioni',
    'LNK_IMPORT_TASKS' => 'Importa Compiti',
    'LBL_MONTH' => 'Mese',
    'LBL_DAY' => 'Giorno',
    'LBL_YEAR' => 'Anno',
    'LBL_WEEK' => 'Settimana',
    'LBL_PREVIOUS_MONTH' => 'Mese Precedente',
    'LBL_PREVIOUS_DAY' => 'Giorno Precedente',
    'LBL_PREVIOUS_YEAR' => 'Anno Precedente',
    'LBL_PREVIOUS_WEEK' => 'Settimana Precedente',
    'LBL_NEXT_MONTH' => 'Mese Successivo',
    'LBL_NEXT_DAY' => 'Giorno Successivo',
    'LBL_NEXT_YEAR' => 'Anno Successivo',
    'LBL_NEXT_WEEK' => 'Settimana Successiva',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Schedulato',
    'LBL_BUSY' => 'Occupato',
    'LBL_CONFLICT' => 'Conflitto',
    'LBL_USER_CALENDARS' => 'Calendari Utente',
    'LBL_SHARED' => 'Condiviso',
    'LBL_PREVIOUS_SHARED' => 'Precedente',
    'LBL_NEXT_SHARED' => 'Successiva',
    'LBL_SHARED_CAL_TITLE' => 'Calendario Condiviso',
    'LBL_USERS' => 'Utente',
    'LBL_REFRESH' => 'Aggiorna',
    'LBL_EDIT_USERLIST' => 'Elenco Utenti',
    'LBL_SELECT_USERS' => 'Selezionare gli utenti per la visualizzazione del calendario',
    'LBL_FILTER_BY_TEAM' => 'Filtra l´elenco degli utenti per gruppo:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_DATE' => 'Data e Ora di inizio',
    'LBL_CREATE_MEETING' => 'Pianifica Riunione',
    'LBL_CREATE_CALL' => 'Nuova Chiamata',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Sì',
    'LBL_NO' => 'TLS',
    'LBL_SETTINGS' => 'Impostazioni',
    'LBL_CREATE_NEW_RECORD' => 'Nuova Attività',
    'LBL_LOADING' => 'Caricamento...',
    'LBL_SAVING' => 'Salvataggio in corso...',
    'LBL_SENDING_INVITES' => 'Salvataggio & Invio inviti .....',
    'LBL_CONFIRM_REMOVE' => 'Sei sicuro di voler eliminare il record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sei sicuro di voler cancellare tutti i record ricorrenti?',
    'LBL_EDIT_RECORD' => 'Modifica Attività',
    'LBL_ERROR_SAVING' => 'Errore durante il salvataggio',
    'LBL_ERROR_LOADING' => 'Errore durante il caricamento',
    'LBL_GOTO_DATE' => 'Vai a data',
    'NOTICE_DURATION_TIME' => 'La durata deve essere superiore a 0',
    'LBL_STYLE_BASIC' => 'Basic',
    'LBL_STYLE_ADVANCED' => 'Avanzata',

    'LBL_INFO_TITLE' => 'Ulteriori Dettagli',
    'LBL_INFO_DESC' => 'Descrizione',
    'LBL_INFO_START_DT' => 'Data Ora Inizio',
    'LBL_INFO_DUE_DT' => 'Data Ora Scadenza',
    'LBL_INFO_DURATION' => 'Durata',
    'LBL_INFO_NAME' => 'Oggetto',
    'LBL_INFO_RELATED_TO' => 'Relativo a',

    'LBL_NO_USER' => 'Nessuna corrispondenza per il campo: Assegnato a',
    'LBL_SUBJECT' => 'Oggetto',
    'LBL_DURATION' => 'Durata',
    'LBL_STATUS' => 'Stato',
    'LBL_DATE_TIME' => 'Data e Ora',


    'LBL_SETTINGS_TITLE' => 'Impostazioni',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Visualizza le fasce orarie nelle viste giornaliere e settimanali:',
    'LBL_SETTINGS_TIME_STARTS' => 'Ora inizio:',
    'LBL_SETTINGS_TIME_ENDS' => 'Ora fine:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Mostra Chiamate:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Mostra Compiti:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostra Riunioni, Compiti e Chiamate Completate:',

    'LBL_SAVE_BUTTON' => 'Salva',
    'LBL_DELETE_BUTTON' => 'Elimina',
    'LBL_APPLY_BUTTON' => 'Applica',
    'LBL_SEND_INVITES' => 'Invia Inviti',
    'LBL_CANCEL_BUTTON' => 'Annulla',
    'LBL_CLOSE_BUTTON' => 'Chiudi',

    'LBL_GENERAL_TAB' => 'Dettagli',
    'LBL_PARTICIPANTS_TAB' => 'Invitati',
    'LBL_REPEAT_TAB' => 'Ricorrenze',

    'LBL_REPEAT_TYPE' => 'Ripetere',
    'LBL_REPEAT_INTERVAL' => 'Ogni',
    'LBL_REPEAT_END' => 'Fine',
    'LBL_REPEAT_END_AFTER' => 'Dopo',
    'LBL_REPEAT_OCCURRENCES' => 'Ricorrenze',
    'LBL_REPEAT_END_BY' => 'da',
    'LBL_REPEAT_DOW' => 'Su',
    'LBL_REPEAT_UNTIL' => 'Ripetere Fino',
    'LBL_REPEAT_COUNT' => 'Numero delle ricorrenze',
    'LBL_REPEAT_LIMIT_ERROR' => 'La tua richiesta stava per creare più di $limit riunioni.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Modifica tutte le ricorrenze',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Cancella tutte le ricorrenze',

    'LBL_DATE_END_ERROR' => 'Data fine precede la data inizio',
    'ERR_YEAR_BETWEEN' => 'Siamo spiacenti, il calendario non è in grado di gestire l\'anno richiesto. L\'anno deve essere compreso tra il 1970 e il 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non definito per questa vista',
    'LBL_NO_ITEMS_MOBILE' => 'Il calendario è pulito per la settimana',
    'LBL_SECURITYGROUPS' => 'Filtra elenco utente tramite Gruppo di sicurezza',

    'LBL_ADD_ITEM' => 'Add Item',
    'LBL_ADD_MEETING' => 'Add Meeting',
    'LBL_ADD_TASK' => 'Add Task',
    'LBL_ADD_CALL' => 'Add Call',

);

$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            "Dom",
            "Lun",
            "Mar",
            "Mer",
            "Gio",
            "Ven",
            "Sab",
        ),
    'dom_cal_weekdays_long' =>
        array(
            "Domenica",
            "Lunedì",
            "Martedì",
            "Mercoledì",
            "Giovedì",
            "Venerdì",
            "Sabato",
        ),
    'dom_cal_month' =>
        array(
            "",
            "Gen",
            "Feb",
            "Mar",
            "Apr",
            "Mag",
            "Giu",
            "Lug",
            "Ago",
            "Set",
            "Ott",
            "Nov",
            "Dic",
        ),
    'dom_cal_month_long' =>
        array(
            "",
            "Gennaio",
            "Febbraio",
            "Marzo",
            "Aprile",
            "Maggio",
            "Giugno",
            "Luglio",
            "Agosto",
            "Settembre",
            "Ottobre",
            "Novembre",
            "Dicembre",
        ),
);
?>
