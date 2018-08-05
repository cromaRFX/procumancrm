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
    'LBL_OOTB_WORKFLOW' => 'Zadania procesów przepływu pracy',
    'LBL_OOTB_REPORTS' => 'Wykonaj Raport z Wykonania Zaplanowanych Zadań',
    'LBL_OOTB_IE' => 'Sprawdź Skrzynki Poczty Przychodzącej',
    'LBL_OOTB_BOUNCE' => 'Wykonaj nocną wysyłkę odbitej poczty kampanii',
    'LBL_OOTB_CAMPAIGN' => 'Wykonaj nocną masową wysyłkę poczty kampanii',
    'LBL_OOTB_PRUNE' => 'Oczyść bazę danych 1-go dnia miesiąca',
    'LBL_OOTB_TRACKER' => 'Oczyść tabele tropiciela',
    'LBL_OOTB_SUGARFEEDS' => 'Przytnij  tabele SuiteCRM Feed',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Uaktualnij tabele sesji śledzenia',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Uruchom Powiadomienia Mailowe',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Wyczyść Kolejkę Zadań',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Usówanie wszstkich dokumentów z systemu plików',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interwał:',
    'LBL_LIST_LIST_ORDER' => 'Harmonogramy:',
    'LBL_LIST_NAME' => 'Harmonogram:',
    'LBL_LIST_RANGE' => 'Zakres:',
    'LBL_LIST_REMOVE' => 'Usuń:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Lista harmonogramów:',
    'LBL_LIST_EXECUTE_TIME' => 'Rozpocznie się o:',
// human readable:
    'LBL_SUN' => 'Niedziela',
    'LBL_MON' => 'Poniedziałek',
    'LBL_TUE' => 'Wtorek',
    'LBL_WED' => 'Środa',
    'LBL_THU' => 'Czwartek',
    'LBL_FRI' => 'Piątek',
    'LBL_SAT' => 'Sobota',
    'LBL_ALL' => 'Każdego dnia',
    'LBL_EVERY_DAY' => 'Każdego dnia',
    'LBL_AT_THE' => 'O',
    'LBL_EVERY' => 'Każdego',
    'LBL_FROM' => 'Od',
    'LBL_ON_THE' => 'Co',
    'LBL_RANGE' => 'do',
    'LBL_AT' => 'o',
    'LBL_IN' => 'w',
    'LBL_AND' => 'i',
    'LBL_MINUTES' => 'minut',
    'LBL_HOUR' => 'godzin',
    'LBL_HOUR_SING' => 'godzina',
    'LBL_MONTH' => 'miesiąc',
    'LBL_OFTEN' => 'Tak często, jak tylko możliwe.',
    'LBL_MIN_MARK' => 'minut',


// crontabs
    'LBL_MINS' => 'minuty',
    'LBL_HOURS' => 'godziny',
    'LBL_DAY_OF_MONTH' => 'dzień miesiąca',
    'LBL_MONTHS' => 'miesiąc',
    'LBL_DAY_OF_WEEK' => 'dzień tygodnia',
    'LBL_CRONTAB_EXAMPLES' => 'Powyżej użyto notacji crontaba.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'The cron specifications run based on the server timezone (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Proszę określić odpowiednio czas realizacji.',
// Labels
    'LBL_ALWAYS' => 'Zawsze',
    'LBL_CATCH_UP' => 'Przeprowadź, jeżeli przegapiono',
    'LBL_CATCH_UP_WARNING' => 'Odznacz, jeżeli to działanie ma potrwać dłuzej.',
    'LBL_DATE_TIME_END' => 'Data i czas zakończenia',
    'LBL_DATE_TIME_START' => 'Data i czas rozpoczęcia',
    'LBL_INTERVAL' => 'Interwał',
    'LBL_JOB' => 'Praca',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Ostanie wykonanie',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Harmonogram',
    'LBL_NAME' => 'Nazwa pracy',
    'LBL_NEVER' => 'Nigdy',
    'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
    'LBL_PERENNIAL' => 'bez przerwy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukanie harmonogramu',
    'LBL_SCHEDULER' => 'Harmonogram:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktywny od',
    'LBL_TIME_TO' => 'Aktywny do',
    'LBL_WARN_CURL_TITLE' => 'Ostrzeżenie cURL:',
    'LBL_WARN_CURL' => 'Ostrzeżenie:',
    'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL włączonych lub wkompilowanych w moduł PHP (--with-curl=/path/to/curl_library).  Skontaktuj się z Administratorem, aby rozwiązać ten problem.  Bez cURL nie można przeprowadzić harmonogramu.',
    'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
    'LBL_ADV_OPTIONS' => 'Opcje zaawansowane',
    'LBL_TOGGLE_ADV' => 'Opcje zaawansowane',
    'LBL_TOGGLE_BASIC' => 'Podstawowe ustawienia',
// Links
    'LNK_LIST_SCHEDULER' => 'Harmonogramy',
    'LNK_NEW_SCHEDULER' => 'Utwórz harmonogram',
    'LNK_LIST_SCHEDULED' => 'Zaplanowane prace',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'Musi być podany numer rekordu, aby usunąć ten harmonogram.',
    'ERR_CRON_SYNTAX' => 'Niewłaściwa składnia Crona',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
    'NTC_STATUS' => 'Ustaw status na Nieaktywny, aby usunąć ten harmonogram z listy rozwijalnej harmonogramów',
    'NTC_LIST_ORDER' => 'Kolejność wykonywania tego Harmonogramu pojawi się na liście rozwijalnej',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawić Harmonogram Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawić Crontab',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Aktwyne prace',
    'LBL_EXECUTE_TIME' => 'Czas wykonania',

//jobstrings
    'LBL_REFRESHJOBS' => 'Odśwież prace',
    'LBL_POLLMONITOREDINBOXES' => 'Sprawdź konta poczty przychodzącej',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Wykonaj nocną masową kampanię e-mail',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Wykonaj nocną wysyłkę odbitej poczty kampanii',
    'LBL_PRUNEDATABASE' => 'Oczyść bazę danych 1-go dnia miesiąca',
    'LBL_TRIMTRACKER' => 'Oczyść tabele tropiciela',
    'LBL_TRIMSUGARFEEDS' => 'Przytnij  tabele SuiteCRM Feed',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Usówanie wszstkich dokumentów z systemu plików',

    'LBL_AODOPTIMISEINDEX' => 'Optymalizuj indeks Advanced OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Zindeksuj niezindeksowane dokumenty',
    'LBL_POLLMONITOREDINBOXESAOP' => 'Monitorowane Skrzynki Pocztowe AOP',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Uruchom zaplanowane raporty',
    'LBL_PROCESSAOW_WORKFLOW' => 'Przetwarzaj zadania AOW',
);
?>
