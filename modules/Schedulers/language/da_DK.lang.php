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
    'LBL_OOTB_WORKFLOW' => 'Behandling af arbejdsgangopgaver',
    'LBL_OOTB_REPORTS' => 'Kør planlagte opgaver til rapportgenerering',
    'LBL_OOTB_IE' => 'Tjek indgående postkasser',
    'LBL_OOTB_BOUNCE' => 'Kør hver nat proces med afviste kampagne-e-mails',
    'LBL_OOTB_CAMPAIGN' => 'Kør hver nat kampagner med masse-e-mails',
    'LBL_OOTB_PRUNE' => 'Beskær databasen den 1. i måneden',
    'LBL_OOTB_TRACKER' => 'Beskær sporingstabeller',
    'LBL_OOTB_SUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Opdater sporingssessionstabel',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Removal of documents from filesystem',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Planlæggere:',
    'LBL_LIST_NAME' => 'Planlægger:',
    'LBL_LIST_RANGE' => 'Interval:',
    'LBL_LIST_REMOVE' => 'Fjern:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Liste over tidsplaner:',
    'LBL_LIST_EXECUTE_TIME' => 'Vil køre på:',
// human readable:
    'LBL_SUN' => 'Søndag',
    'LBL_MON' => 'Mandag',
    'LBL_TUE' => 'Tirsdag',
    'LBL_WED' => 'Onsdag',
    'LBL_THU' => 'Torsdag',
    'LBL_FRI' => 'Fredag',
    'LBL_SAT' => 'Lørdag',
    'LBL_ALL' => 'Hver dag',
    'LBL_EVERY_DAY' => 'Hver dag',
    'LBL_AT_THE' => 'På',
    'LBL_EVERY' => 'Hver',
    'LBL_FROM' => 'Fra',
    'LBL_ON_THE' => 'På den',
    'LBL_RANGE' => 'til',
    'LBL_AT' => 'på',
    'LBL_IN' => 'i',
    'LBL_AND' => 'og',
    'LBL_MINUTES' => 'minutter',
    'LBL_HOUR' => 'timer',
    'LBL_HOUR_SING' => 'time',
    'LBL_MONTH' => 'måned',
    'LBL_OFTEN' => 'Så tit som muligt.',
    'LBL_MIN_MARK' => 'minutmærke',


// crontabs
    'LBL_MINS' => 'min.',
    'LBL_HOURS' => 't.',
    'LBL_DAY_OF_MONTH' => 'dato',
    'LBL_MONTHS' => 'ma',
    'LBL_DAY_OF_WEEK' => 'dag',
    'LBL_CRONTAB_EXAMPLES' => 'Ovennævnte bruger standard crontab-notation.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'Cron specifikationer køre ud på serveren tidszone (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Specificer venligst Planlægger eksekverings tid tilsvarende.',
// Labels
    'LBL_ALWAYS' => 'Altid',
    'LBL_CATCH_UP' => 'Udfør hvis ubesvaret',
    'LBL_CATCH_UP_WARNING' => 'Fjern markeringen, hvis dette job må tage mere end et øjeblik at køre.',
    'LBL_DATE_TIME_END' => 'Dato & tid slut',
    'LBL_DATE_TIME_START' => 'Dato & tid start',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Job',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Seneste succesfulde kørsel',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Planlæggere',
    'LBL_NAME' => 'Jobnavn',
    'LBL_NEVER' => 'Aldrig',
    'LBL_NEW_FORM_TITLE' => 'Ny tidsplan',
    'LBL_PERENNIAL' => 'tidsubegrænset',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter planlægger',
    'LBL_SCHEDULER' => 'Planlægger:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv fra',
    'LBL_TIME_TO' => 'Aktiv til',
    'LBL_WARN_CURL_TITLE' => 'cURL-advarsel:',
    'LBL_WARN_CURL' => 'Advarsel:',
    'LBL_WARN_NO_CURL' => 'Dette system har ikke cURL-biblioteker aktiveret/kompileret i PHP-modulet "- with-curl=/sti/til/curl_library". Kontakt administratoren for at løse dette problem. Uden cURL-funktionaliteten, kan planlæggeren ikke tråde sine job.',
    'LBL_BASIC_OPTIONS' => 'Basiskonfiguration',
    'LBL_ADV_OPTIONS' => 'Avancerede indstillinger',
    'LBL_TOGGLE_ADV' => 'Avancerede indstillinger',
    'LBL_TOGGLE_BASIC' => 'Grundlæggende indstillinger',
// Links
    'LNK_LIST_SCHEDULER' => 'Planlæggere',
    'LNK_NEW_SCHEDULER' => 'Opret planlægger',
    'LNK_LIST_SCHEDULED' => 'Planlagte job',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'Du skal angive et postnummer for at slette tidsplanen.',
    'ERR_CRON_SYNTAX' => 'Ugyldig Cron-syntaks',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'NTC_STATUS' => 'Angiv status til Inaktiv for at fjerne denne tidsplan fra Planlægger-rullelisterne',
    'NTC_LIST_ORDER' => 'Angiv den rækkefølge, hvori denne tidsplan vil blive vist i Planlægger-rullelisterne',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Til Setup Windows Scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Til Setup crontab',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Joblog',
    'LBL_EXECUTE_TIME' => 'Udfør tid',

//jobstrings
    'LBL_REFRESHJOBS' => 'Opdater job',
    'LBL_POLLMONITOREDINBOXES' => 'Tjek indgående e-mail-konti',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Kør hver nat kampagner med masse-e-mails',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Kør hver nat proces med afviste kampagne-e-mails',
    'LBL_PRUNEDATABASE' => 'Beskær databasen den 1. i måneden',
    'LBL_TRIMTRACKER' => 'Beskær sporingstabeller',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Removal of documents from filesystem',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Kør Planlagte Rapporter',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',
);
?>
