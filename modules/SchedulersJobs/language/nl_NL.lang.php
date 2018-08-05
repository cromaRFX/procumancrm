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
'LBL_NAME' => 'Taak naam',
'LBL_EXECUTE_TIME'			=> 'Uitvoertijd',
'LBL_SCHEDULER_ID' 	=> 'Planner',
'LBL_STATUS' 	=> 'Taak status',
'LBL_RESOLUTION' 	=> 'Resultaat',
'LBL_MESSAGE' 	=> 'Berichten',
'LBL_DATA' 	=> 'Taak Data',
'LBL_REQUEUE' 	=> 'Opnieuw proberen wanneer mislukt',
'LBL_RETRY_COUNT' 	=> 'Maximaal aantal keren opnieuw',
'LBL_FAIL_COUNT' 	=> 'Mislukkingen',
'LBL_INTERVAL' 	=> 'Minimale tijd tussen de pogingen',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Percentage compleet',
// Errors
'ERR_CALL' 	=> "Kan de functie niet oproepen: %s",
'ERR_CURL' => "Geen CURL - kan de taak niet uitvoeren Url",
'ERR_FAILED' => "Onverwachte fout, kijk in de PHP logs en sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "Geen gebruikers Id gedefinieerd voor de taak",
'ERR_NOSUCHUSER' => "Gebruikers Id %s niet gevonden",
'ERR_JOBTYPE' 	=> "Onbekend taak type: %s",
'ERR_TIMEOUT' => "Onvoldoende tijd daardoor mislukt",
'ERR_JOB_FAILED_VERBOSE' => 'Taak %1$s (%2$s) mislukt in CRON uitvoering',
);
