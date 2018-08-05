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
    'LBL_OOTB_WORKFLOW' => 'Voer workflow taken uit',
    'LBL_OOTB_REPORTS' => 'Het rapport uitvoeren van de geplande taken',
    'LBL_OOTB_IE' => 'Contreer inkomende e-mailboxen',
    'LBL_OOTB_BOUNCE' => 'Draai \'s nachts opgestuurde teruggekomen campagne e-mails',
    'LBL_OOTB_CAMPAIGN' => 'Verstuur \'s nachts campagnes e-mails',
    'LBL_OOTB_PRUNE' => 'Schoon database elke 1e van de maand op',
    'LBL_OOTB_TRACKER' => 'Schoon gebruikers geschiedenis tabel elke 1e van de maand op',
    'LBL_OOTB_SUGARFEEDS' => 'Schoon SuiteCRM Feed Tables op',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimaliseer AOD index',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tracker_sessions Tabel',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Draai e-mail herinnering notificaties',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Schoon taken rij op',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Verwijderen van documenten van het bestandssysteem',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Taakplanners:',
    'LBL_LIST_NAME' => 'Taakplanner:',
    'LBL_LIST_RANGE' => 'Bereik:',
    'LBL_LIST_REMOVE' => 'Verwijderen:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Taaklijst:',
    'LBL_LIST_EXECUTE_TIME' => 'Wordt uitgevoerd om:',
// human readable:
    'LBL_SUN' => 'Zondag',
    'LBL_MON' => 'Maandag',
    'LBL_TUE' => 'Dinsdag',
    'LBL_WED' => 'Woensdag',
    'LBL_THU' => 'Donderdag',
    'LBL_FRI' => 'Vrijdag',
    'LBL_SAT' => 'Zaterdag',
    'LBL_ALL' => 'Elke dag',
    'LBL_EVERY_DAY' => 'Elke dag ',
    'LBL_AT_THE' => 'op ',
    'LBL_EVERY' => 'elke ',
    'LBL_FROM' => 'Van ',
    'LBL_ON_THE' => 'op ',
    'LBL_RANGE' => 'to',
    'LBL_AT' => 'op ',
    'LBL_IN' => 'in ',
    'LBL_AND' => 'en ',
    'LBL_MINUTES' => 'minuten ',
    'LBL_HOUR' => ' uren',
    'LBL_HOUR_SING' => ' uur',
    'LBL_MONTH' => ' maand',
    'LBL_OFTEN' => ' Zo vaak mogelijk',
    'LBL_MIN_MARK' => ' minuutaanwijzing',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'uur',
    'LBL_DAY_OF_MONTH' => 'datum',
    'LBL_MONTHS' => 'ma',
    'LBL_DAY_OF_WEEK' => 'dag',
    'LBL_CRONTAB_EXAMPLES' => 'Bovenstaand kan de standaard CRONTAB notatie gebruikt worden.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'De cron specificaties uitgevoerd op basis van de server tijdzone (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Specificeer s.v.p. de scheduler overeenkomstig.',
// Labels
    'LBL_ALWAYS' => 'Altijd',
    'LBL_CATCH_UP' => 'Uitvoeren wanneer gemist',
    'LBL_CATCH_UP_WARNING' => 'Uitvinken als deze taak vrij lang gaat duren',
    'LBL_DATE_TIME_END' => 'Einddatum en tijd',
    'LBL_DATE_TIME_START' => 'Startdatum en tijd',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Taak',
    'LBL_JOB_URL' => 'Taak Url',
    'LBL_LAST_RUN' => 'Laatste succesvolle run',
    'LBL_MODULE_NAME' => 'SuiteCRM taakplanner',
    'LBL_MODULE_TITLE' => 'Taakplanners',
    'LBL_NAME' => 'Taaknaam',
    'LBL_NEVER' => 'Never',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe taak',
    'LBL_PERENNIAL' => 'oneindig',
    'LBL_SEARCH_FORM_TITLE' => 'Taak zoeken',
    'LBL_SCHEDULER' => 'Taakplanner:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Actief van',
    'LBL_TIME_TO' => 'Actief tot',
    'LBL_WARN_CURL_TITLE' => 'cURL waarschuwing:',
    'LBL_WARN_CURL' => 'Waarschuwing:',
    'LBL_WARN_NO_CURL' => 'Dit systeem heeft geen cURL libraries geactiveerd/gecompileerd in de PHP module (--with-curl=/path/to/curl_library). Neem contact op met je systeembeheerder om dit probleem op te lossen. Zonder cURL functionaliteit werkt de Taakplanner in Sugar niet.',
    'LBL_BASIC_OPTIONS' => 'Standaard setup',
    'LBL_ADV_OPTIONS' => 'Geavanceeerde opties',
    'LBL_TOGGLE_ADV' => 'Geavanceeerde opties',
    'LBL_TOGGLE_BASIC' => 'Standaard opties',
// Links
    'LNK_LIST_SCHEDULER' => 'Taakplanners',
    'LNK_NEW_SCHEDULER' => 'Nieuwe taak',
    'LNK_LIST_SCHEDULED' => 'Geplande taken',
// Messages
    'SOCK_GREETING' => "Dit is de interface voor de SuiteCRM taakplanner service. De beschikbare deamon commandos zijn: [start|restart|shutdown|status] Om te stoppen, type 'quit'. Om de Service te stoppen type 'shutdown'.",
    'ERR_DELETE_RECORD' => 'Een recordnummer moet worden opgegeven om de taak te verwijderen.',
    'ERR_CRON_SYNTAX' => 'Ongeldige CRON syntax',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_STATUS' => 'Zet de status op inactief om deze taak uit de takenlijst te verwijderen.',
    'NTC_LIST_ORDER' => 'Zet de volgorde van de taken in de takenlijst',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Configureer windows taakplanner',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Configureer crontab',
    'LBL_CRON_LINUX_DESC' => 'Opmerking: Om SuiteCRM planners uit te voeren, voeg de volgende regel aan het bestand crontab toe: ',
    'LBL_CRON_WINDOWS_DESC' => 'Opmerking: Om SuiteCRM planners uit te voeren, maak een batch-file aan (en zet deze in Windows Takenplanner) met de volgende commando\'s: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Taaklog',
    'LBL_EXECUTE_TIME' => 'Uitvoertijd',

//jobstrings
    'LBL_REFRESHJOBS' => 'Vernieuwen Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Controleer inkomende e-mail accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Volledige tekst zoek index systeem',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Draai Nightly Massa E-mail campagnes',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Draao Nightly Proces Bounced Campagne e-mails',
    'LBL_PRUNEDATABASE' => 'Opschonen database op de 1e van de maand',
    'LBL_TRIMTRACKER' => 'Opschonen tracker Tabellen',
    'LBL_TRIMSUGARFEEDS' => 'Schoon SuiteCRM Feed Tables op',
    'LBL_SENDEMAILREMINDERS' => 'Draai e-mail herrinering verzending',
    'LBL_CLEANJOBQUEUE' => 'Schoon taken rij op',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Verwijderen van documenten van het bestandssysteem',

    'LBL_AODOPTIMISEINDEX' => 'Optimaliseer Advanced OpenDiscovery index',
    'LBL_AODINDEXUNINDEXED' => 'Indexeer niet geindexeerde documenten',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll gecontroleerde Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Voer geplande rapporten uit',
    'LBL_PROCESSAOW_WORKFLOW' => 'Proces AOW Workflow',
);
?>
