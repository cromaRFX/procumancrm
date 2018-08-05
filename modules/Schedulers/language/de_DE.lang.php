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
global $sugar_config;

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Workflow-Aufgaben verarbeiten',
    'LBL_OOTB_REPORTS' => 'Aufgabenberichte verarbeiten',
    'LBL_OOTB_IE' => 'Eingehende E-Mail Konten überprüfen',
    'LBL_OOTB_BOUNCE' => 'Unzustellbare Kampagnen E-Mails verarbeiten (Nacht)',
    'LBL_OOTB_CAMPAIGN' => 'E-Mail Kampagnen-Massenaussendung (Nacht)',
    'LBL_OOTB_PRUNE' => 'Datenbank am 1. des Monats säubern',
    'LBL_OOTB_TRACKER' => 'Benutzerverlauf löschen',
    'LBL_OOTB_SUGARFEEDS' => 'SuiteCRMFeed Tabellen löschen',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimiere AOD Index
',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Tracker_sessions-Tabelle aktualisieren',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-Mail Erinnerungsbenachrichtigungen ausführen',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Job-Warteschlange leeren',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Entfernung von Dokumenten aus dem Dateisystem',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervall:',
    'LBL_LIST_LIST_ORDER' => 'Geplante Aufgaben:',
    'LBL_LIST_NAME' => 'Geplante Aufgabe:',
    'LBL_LIST_RANGE' => 'Bereich:',
    'LBL_LIST_REMOVE' => 'Entfernen:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Aufgaben Liste:',
    'LBL_LIST_EXECUTE_TIME' => 'Wird gestartet am:',
// human readable:
    'LBL_SUN' => 'Sonntag',
    'LBL_MON' => 'Montag',
    'LBL_TUE' => 'Dienstag',
    'LBL_WED' => 'Mittwoch',
    'LBL_THU' => 'Donnerstag',
    'LBL_FRI' => 'Freitag',
    'LBL_SAT' => 'Samstag',
    'LBL_ALL' => 'Jeden Tag',
    'LBL_EVERY_DAY' => 'Jeden Tag',
    'LBL_AT_THE' => 'Am',
    'LBL_EVERY' => 'alle',
    'LBL_FROM' => 'Von',
    'LBL_ON_THE' => 'Am',
    'LBL_RANGE' => 'bis',
    'LBL_AT' => 'um',
    'LBL_IN' => 'In',
    'LBL_AND' => ' und ',
    'LBL_MINUTES' => ' Minuten ',
    'LBL_HOUR' => ' Stunden',
    'LBL_HOUR_SING' => ' Stunde',
    'LBL_MONTH' => 'Monat',
    'LBL_OFTEN' => ' So oft wie möglich.',
    'LBL_MIN_MARK' => 'Minuten nach',


// crontabs
    'LBL_MINS' => 'Min',
    'LBL_HOURS' => 'h',
    'LBL_DAY_OF_MONTH' => 'Datum',
    'LBL_MONTHS' => 'Monate',
    'LBL_DAY_OF_WEEK' => 'Tag',
    'LBL_CRONTAB_EXAMPLES' => 'Das oben stehende verwendet die Standard Crontab Notation.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'Die Cron-Spezifierungen laufen basierend auf der Zeitzone des Servers (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Bitte stellen Sie die Ausführungszeiten entsprechend ein.',
// Labels
    'LBL_ALWAYS' => 'Immer',
    'LBL_CATCH_UP' => 'Ausführen, wenn versäumt',
    'LBL_CATCH_UP_WARNING' => 'Deaktivieren, wenn der Lauf dieses Jobs mehr als einen Moment dauert.',
    'LBL_DATE_TIME_END' => 'Enddatum &  Zeit',
    'LBL_DATE_TIME_START' => 'Startdatum & Zeit',
    'LBL_INTERVAL' => 'Intervall',
    'LBL_JOB' => 'Auftrag',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Letzte erfolgreiche Durchführung',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Geplante Aufgaben',
    'LBL_NAME' => 'Name des Jobs',
    'LBL_NEVER' => 'Nie',
    'LBL_NEW_FORM_TITLE' => 'Neuer Termin',
    'LBL_PERENNIAL' => 'andauernd',
    'LBL_SEARCH_FORM_TITLE' => 'Geplante Aufgabe suchen',
    'LBL_SCHEDULER' => 'Geplante Aufgabe:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv von',
    'LBL_TIME_TO' => 'Aktiv bis',
    'LBL_WARN_CURL_TITLE' => 'cURL Warnung:',
    'LBL_WARN_CURL' => 'Warnung:',
    'LBL_WARN_NO_CURL' => 'In diesem System sind die cURL Bibliotheken im PHP Modul nicht aktiviert (--with-curl=/pfad/zu/curl_library). Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems. Ohne diese Funktionalität kann der Zeitplaner die Jobs nicht einreihen.',
    'LBL_BASIC_OPTIONS' => 'Basis Setup',
    'LBL_ADV_OPTIONS' => 'Erw. Optionen',
    'LBL_TOGGLE_ADV' => 'Zeige erweiterte Optionen',
    'LBL_TOGGLE_BASIC' => 'Basisoptionen anzeigen',
// Links
    'LNK_LIST_SCHEDULER' => 'Geplante Aufgaben',
    'LNK_NEW_SCHEDULER' => 'Neue Aufgabe',
    'LNK_LIST_SCHEDULED' => 'Geplante Jobs',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'Um diesen Plan zu löschen, muss eine Datensatznummer angegeben werden.',
    'ERR_CRON_SYNTAX' => 'Ungültige Cron Syntax',
    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
    'NTC_STATUS' => 'Zum Entfernen dieses Plans vom Auswahlmenü des Terminplaners setzen Sie den Status auf inaktiv',
    'NTC_LIST_ORDER' => 'Setzen Sie die Reihenfolge, in der dieser Plan in der Terminplaner Auswahlliste erscheinen soll',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Konfiguration des Windows Terminplaners',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Konfiguration eines crontab Eintrages',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Aktive Jobs',
    'LBL_EXECUTE_TIME' => 'Ausführungszeit',

//jobstrings
    'LBL_REFRESHJOBS' => 'Jobs aktualisieren',
    'LBL_POLLMONITOREDINBOXES' => 'Eingehende E-Mail Konten überprüfen',
    'LBL_PERFORMFULLFTSINDEX' => 'Volltextsuche Systemindexierung',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'E-Mail Kampagnen-Massenaussendung (Nacht)',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Unzustellbare Kampagnen E-Mails verarbeiten (Nacht)',
    'LBL_PRUNEDATABASE' => 'Datenbank am 1. des Monats säubern',
    'LBL_TRIMTRACKER' => 'Benutzerverlauf löschen',
    'LBL_TRIMSUGARFEEDS' => 'SuiteCRMFeed Tabellen löschen',
    'LBL_SENDEMAILREMINDERS' => 'E-Mail Erinnerungs Benachrichtigungen senden',
    'LBL_CLEANJOBQUEUE' => 'Jobs Warteschlange leeren',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Entfernung von Dokumenten aus dem Dateisystem',

    'LBL_AODOPTIMISEINDEX' => 'Advanced OpenDiscovery Index optimieren',
    'LBL_AODINDEXUNINDEXED' => 'Nicht indizierte Dokumente indizieren',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP überwachten Posteingang abrufen',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Geplanten Bericht ausführen',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOW Workflow verarbeiten',
);
?>
