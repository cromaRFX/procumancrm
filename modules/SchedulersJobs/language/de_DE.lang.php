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
'LBL_NAME' => 'Name des Jobs',
'LBL_EXECUTE_TIME'			=> 'Ausführungszeit',
'LBL_SCHEDULER_ID' 	=> 'Zeitplaner',
'LBL_STATUS' 	=> 'Job-Status',
'LBL_RESOLUTION' 	=> 'Ergebnis',
'LBL_MESSAGE' 	=> 'Nachrichten',
'LBL_DATA' 	=> 'Job Daten',
'LBL_REQUEUE' 	=> 'Bei Fehlschlag wiederholen',
'LBL_RETRY_COUNT' 	=> 'Maximale Wiederholungen',
'LBL_FAIL_COUNT' 	=> 'Fehlschläge',
'LBL_INTERVAL' 	=> 'Minimaler Intervall zwischen Versuchen',
'LBL_CLIENT' 	=> '??Eingentümer',
'LBL_PERCENT'	=> 'Vollständig in Prozent',
// Errors
'ERR_CALL' 	=> "Kann diese Funktion nicht aufrufen: %s",
'ERR_CURL' => "Kein CURL - Kann URL Jobs nicht durchführen",
'ERR_FAILED' => "Unerwarteter Fehler, bitte überprüfen Sie die Logs von SuiteCRM und php.",
'ERR_PHP' => "%s [%d]: %s in %s auf Zeile %d",
'ERR_NOUSER' => "Für diesen Job wurde keine Benutzer ID angegeben",
'ERR_NOSUCHUSER' => "Benutzer ID %s nicht gefunden",
'ERR_JOBTYPE' 	=> "Unbekannter Jobtyp: %s",
'ERR_TIMEOUT' => "Erzwungener Fehler durch Zeitablauf",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) im CRON Lauf fehlgeschlagen',
);
