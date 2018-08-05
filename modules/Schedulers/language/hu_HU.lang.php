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
    'LBL_OOTB_WORKFLOW' => 'Workflow Feladatok Feldolgozása',
    'LBL_OOTB_REPORTS' => 'Jelentés Készítő Ütemezett Feladatok Futtatása',
    'LBL_OOTB_IE' => 'Bejövő Email Fiókok Ellenőrzése',
    'LBL_OOTB_BOUNCE' => 'Visszapattant Kampány Emailek Feldolgozása',
    'LBL_OOTB_CAMPAIGN' => 'Tömeges Email Kampányok Futtatása',
    'LBL_OOTB_PRUNE' => 'Adatbázis vágása a hónap első napjától',
    'LBL_OOTB_TRACKER' => 'Követő táblázatok vágása',
    'LBL_OOTB_SUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Követő_folyamatok tábláinak frissítése',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-mail emlékeztető értesítés futtatása',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Munka várólista törlése',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Dokumentumok eltávolítása a fájlrendszerből',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Időtartam:',
    'LBL_LIST_LIST_ORDER' => 'Ütemezők:',
    'LBL_LIST_NAME' => 'Ütemező:',
    'LBL_LIST_RANGE' => 'Tartomány:',
    'LBL_LIST_REMOVE' => 'Eltávolít:',
    'LBL_LIST_STATUS' => 'Állapot:',
    'LBL_LIST_TITLE' => 'Ütemezési lista:',
    'LBL_LIST_EXECUTE_TIME' => 'Mikor fog futni:',
// human readable:
    'LBL_SUN' => 'Vasárnap',
    'LBL_MON' => 'Hétfő',
    'LBL_TUE' => 'Kedd',
    'LBL_WED' => 'Szerda',
    'LBL_THU' => 'Csütörtök',
    'LBL_FRI' => 'Péntek',
    'LBL_SAT' => 'Szombat',
    'LBL_ALL' => 'Minden nap',
    'LBL_EVERY_DAY' => 'Minden nap ',
    'LBL_AT_THE' => 'At the ',
    'LBL_EVERY' => 'Minden ',
    'LBL_FROM' => 'Tól ',
    'LBL_ON_THE' => 'On the ',
    'LBL_RANGE' => ' to ',
    'LBL_AT' => ' at ',
    'LBL_IN' => ' in ',
    'LBL_AND' => ' and ',
    'LBL_MINUTES' => ' percek ',
    'LBL_HOUR' => ' órák',
    'LBL_HOUR_SING' => ' óra',
    'LBL_MONTH' => ' hónap',
    'LBL_OFTEN' => ' Olyan gyakran, amilyen gyakran lehetséges.',
    'LBL_MIN_MARK' => ' perc jelző',


// crontabs
    'LBL_MINS' => 'perc',
    'LBL_HOURS' => 'órák',
    'LBL_DAY_OF_MONTH' => 'dátum',
    'LBL_MONTHS' => 'hó',
    'LBL_DAY_OF_WEEK' => 'nap',
    'LBL_CRONTAB_EXAMPLES' => 'A fönti rész szabványos crontab jelölési módot használ',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'The cron specifications run based on the server timezone (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Please specify the scheduler execution time accordingly.',
// Labels
    'LBL_ALWAYS' => 'Mindig',
    'LBL_CATCH_UP' => 'Futtassa ha elumasztott',
    'LBL_CATCH_UP_WARNING' => 'Szedje ki a pipát ha ez a munka több mint egy pillanatig fut.',
    'LBL_DATE_TIME_END' => 'Időpont vég',
    'LBL_DATE_TIME_START' => 'Időpont kezdet',
    'LBL_INTERVAL' => 'Időtartam',
    'LBL_JOB' => 'Munka',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Utoljára futott',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Ütemező',
    'LBL_NAME' => 'Munka név',
    'LBL_NEVER' => 'Soha',
    'LBL_NEW_FORM_TITLE' => 'Új ütemezés',
    'LBL_PERENNIAL' => 'szakadatlan',
    'LBL_SEARCH_FORM_TITLE' => 'Ütemező keresés',
    'LBL_SCHEDULER' => 'Ütemező:',
    'LBL_STATUS' => 'Állapot',
    'LBL_TIME_FROM' => 'Innentől aktív',
    'LBL_TIME_TO' => 'Idáig aktív',
    'LBL_WARN_CURL_TITLE' => 'cURL Figyelmeztetés:',
    'LBL_WARN_CURL' => 'Figyelem:',
    'LBL_WARN_NO_CURL' => 'Ezen a rendszeren a cURL könyvtárak nem elérhetők, vagy nincsenek PHP modulba fordítva (--with-curl=/path/to/curl_library).  Kérem vegye föl a kapcsolatot a rendszergazdával, hogy megoldja ezt a problémát. A cURL könyvtárak nélkül az ütemező nem tudja végrehajtani a munkákat.',
    'LBL_BASIC_OPTIONS' => 'Alapbeállítások',
    'LBL_ADV_OPTIONS' => 'Haladó beállítások',
    'LBL_TOGGLE_ADV' => 'Haladó beállítások',
    'LBL_TOGGLE_BASIC' => 'Alapbeállítások',
// Links
    'LNK_LIST_SCHEDULER' => 'Ütemezők',
    'LNK_NEW_SCHEDULER' => 'Ütemező létrehozása',
    'LNK_LIST_SCHEDULED' => 'Ütemezett munkák',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'A munkaterv törléséhez meg kell adnia egy rekordsorszámot.',
    'ERR_CRON_SYNTAX' => 'Érvénytelen Cron szintaxis',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törli ezt a rekordot?',
    'NTC_STATUS' => 'Állítsa az állapotot Inaktívra hogy eltávolítsa ezt a munkatervet az ütemező lenyíló listáiból.',
    'NTC_LIST_ORDER' => 'Beállítja a munkaterv pozícióját, ahogy az az ütemező lenyíló listáiban megjelenik.',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'A Windows Ütemező beállításához',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'A Crontab beállításához',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Aktív munkák',
    'LBL_EXECUTE_TIME' => 'Futási idő',

//jobstrings
    'LBL_REFRESHJOBS' => 'Feladatok frissítése',
    'LBL_POLLMONITOREDINBOXES' => 'Ellenőrizze a beérkező leveleit',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Tömeges Email Kampányok Futtatása',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Visszapattant Kampány Emailek Feldolgozása',
    'LBL_PRUNEDATABASE' => 'Adatbázis vágása a hónap első napjától',
    'LBL_TRIMTRACKER' => 'Követő táblák vágása',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Dokumentumok eltávolítása a fájlrendszerből',

    'LBL_AODOPTIMISEINDEX' => 'Részletes OpenIndex optimalizálás',
    'LBL_AODINDEXUNINDEXED' => 'Nemindexelt dokumentumok indexelése',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AIP Inbox monitor',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Ütemezett jelentések indítása',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOW munkafolyamat feldolgozása',
);
?>
