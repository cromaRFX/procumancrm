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

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'De volgende modules zijn geïnstalleerd:',
	'DESC_MODULES_QUEUED'						=> 'De volgende modules staan klaar om te worden geïnstalleerd:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Kan de groep niet bepalen',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Kan de eigenaar niet bepalen',
	'ERR_UW_CONFIG_WRITE'						=> 'Fout bij het updaten van de config.php met nieuwe versie informatie',
	'ERR_UW_CONFIG'								=> 'Maak uw config.php bestand schrijfbaar en laad deze pagina opnieuw.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Directory is niet schrijfbaar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Bestand niet gekopieerd',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Probleem bij het verwijderen van het pakket',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Bestand kon niet worden gelezen.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Bestand kon niet worden verplaatst of geschreven',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Smaak: ',
	'ERR_UW_FLAVOR'								=> 'SuiteCRM Systeem Smaak: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log kon niet worden aangemaakt of geschreven.  Herstel de permissies van uw SuiteCRM direcory.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload staat ingesteld op een waarde > 1. Wijzig dit in uw php.ini en restart de webserver',
	'ERR_UW_MYSQL_VERSION'						=> 'SuiteCRM heeft minstens MySQL versie 4.1.2 nodig. Gevonden: ',
	'ERR_UW_OCI8_VERSION'				        => 'Uw versie van Oracle wordt niet ondersteund door SuiteCRM. U dient een versie te installeren die compatible is met de SuiteCRM applicatie. Raadpleeg aub de compatibiliteits matrix in de release notes voor ondersteunde Oracle versies. Huidige versie:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Geeft een bestand op en probeer opnieuw!',
	'ERR_UW_NO_FILES'							=> 'Een fout is opgetreden. Er zijn geen bestanden gevonden om te controleren.',
	'ERR_UW_NO_MANIFEST'						=> 'In het Zip-bestand ontbreekt een manifest.php bestand. Kan daarom niet doorgaan.',
	'ERR_UW_NO_VIEW'							=> 'Ongeldige view gespecificeerd.',
	'ERR_UW_NO_VIEW2'							=> 'View niet gedefinieerd. Ga a.u.b. naar de Beheerderspagina (admin)  om naar deze pagina te navigeren.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Geen geldige upload',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Kan de temp directory niet aanmaken. Controleer bestandspermissies.',
	'ERR_UW_ONLY_PATCHES'						=> 'U kunt alleen patches uploaden op deze pagina.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fouten gevonden tijdens de Preflight Controle',
	'ERR_UW_UPLOAD_ERR'							=> 'Een fout heeft zich voorgedaan tijdens het uploaden van het bestand. Probeer het aub nogmaals!<br>\n',
	'ERR_UW_VERSION'							=> 'SuiteCRM Systeem Versie: ',
	'ERR_UW_WRONG_TYPE'							=> 'Deze pagina is niet voor het uitvoeren van',
	'LBL_BUTTON_BACK'							=> 'Back',
	'LBL_BUTTON_CANCEL'							=> 'Annuleer',
	'LBL_BUTTON_DELETE'							=> 'Verwijder Pakket',
	'LBL_BUTTON_DONE'							=> 'Klaar',
	'LBL_BUTTON_EXIT'							=> 'Verlaat',
	'LBL_BUTTON_INSTALL'						=> 'Preflight-Upgrade',
	'LBL_BUTTON_NEXT'							=> 'Next',
	'LBL_BUTTON_RECHECK'						=> 'Opnieuw controleren',
	'LBL_BUTTON_RESTART'						=> 'Opnieuw',

	'LBL_UPLOAD_UPGRADE'						=> 'Upload an upgrade ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Upload bestand niet gevonden',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Bestands Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Back-up bestanden van deze upgrade kunnen worden gevonden in',
	'LBL_UW_BACKUP'								=> 'Bestand BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'De upgrade is geannuleerd. Alle tijdelijke bestanden die zijn gekopieerd en alle upgrade bestanden die zijn geüpload zijn verwijderd.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Karakter Set Schema Wijzigingen',
	'LBL_UW_CHECK_ALL'							=> 'Controleer alles',
	'LBL_UW_CHECKLIST'							=> 'Upgrade Stappen',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups van de overschreven bestanden staan in de volgende directory:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Handmatig samenvoegen van de volgende bestanden:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Upgrade-proces: handmatig bestanden samenvoegen',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Gebruik een diff methode waarme u het vertrouwd bent om deze bestanden samen te voegen. Totdat dit is voltooid, zal uw SuiteCRM installatie in een onzekere toestand verkeren, en is de upgrade onvolledig.',
	'LBL_UW_COMPLETE'							=> 'Compleet',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Deze nieuwe versie van Sugar bevat nieuwe licentieovereenkomst. Wilt u doorgaan?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'All system settings requirements satisfied',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Instellingen: Call Time Pass by reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL module',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Module',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Module',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP instellingen: Geheugen limiet',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Instelling: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL server & PHP Magin Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimale MySQL Versie',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Database versie',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Locatie van de php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimale PHP Versie',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP instelling: Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Server instellingen controle',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Geconstateerde Settings',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Parsing',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'ZIP ondersteuning',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE versie',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Bestand met succes gekopieerd',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Aangepasten tabellen schema veranderingen',

	'LBL_UW_DB_CHOICE1'							=> 'Upgrade wizards gebruikt SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Handmatige SQL queries',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT mislukt - vergelijk de resultaten diff',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Database priviliges',
	'LBL_UW_DB_ISSUES'							=> 'Database problemen',
	'LBL_UW_DB_METHOD'							=> 'Database update methode',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [tabel] ADD COLUMN [kolom]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [tabel] CHANGE COLUMN [kolom]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [tabel]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [tabel]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [tabel] DROP COLUMN [kolom]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [tabel]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alle priviliges beschikbaar',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [tabel]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [tabel]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [tabel]',
	'LBL_UW_DB_PERMS'							=> 'Noodzakelijke Privilege',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'The following upgrades have been installed:',
	'LBL_UW_END_DESC'							=> 'Het systeem is geupdate',
	'LBL_UW_END_DESC2'							=> 'Als u ervoor heeft gekozen om handmatig sommige stappen uit voeren zoals bestandssamenvoegingen of SQL queries, doe dit dan nu, Uw systeem zal instabiel zijn totdat deze stappen zijn afgerond.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'De upgrade is voltooid.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Klik op Gereed om de Wizard te verlaten.',
	'LBL_UW_END_LOGOUT'							=> 'Als u van plan bent een ander upgrade pakket te installeren met behulp van de Upgrade Wizard, log dan uit en log opnieuw in voor dat u verder gaat. ',
	'LBL_UW_END_LOGOUT2'						=> 'Uitloggen',
	'LBL_UW_REPAIR_INDEX'						=> 'Voor database performance verbeteringen, start a.u.b. het  <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> script.',

	'LBL_UW_FILE_DELETED'						=> "is verwijderd.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Groep',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Bestandspermissies',
	'LBL_UW_FILE_ISSUES'						=> 'Bestandsissues',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Bestand vereist een handmatige Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alle bestanden schrijfbaar</b>',
	'LBL_UW_FILE_OWNER'							=> 'Eigenaar',
	'LBL_UW_FILE_PERMS'							=> 'Bevoegdheden',
	'LBL_UW_FILE_UPLOADED'						=> ' is geüpload',
	'LBL_UW_FILE'								=> 'Bestandsnaam',
	'LBL_UW_FILES_QUEUED'						=> 'De volgende bestandspakketen zijn klaar om geinstalleerd te worden:',
	'LBL_UW_FILES_REMOVED'						=> "De volgende bestande zullen worden verwijderd:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Klik op Volgende om de pakketten te uploaden",
	'LBL_UW_FROZEN'								=> 'Upload een bestandspakket voor dat u verder gaat',
	'LBL_UW_HIDE_DETAILS'						=> 'Ververg Details',
	'LBL_UW_IN_PROGRESS'						=> 'In Bewerking',
	'LBL_UW_INCLUDING'							=> 'Inclusief',
	'LBL_UW_INCOMPLETE'							=> 'Incompleet',
	'LBL_UW_INSTALL'							=> 'Bestand INSTALLEER',
	'LBL_UW_MANUAL_MERGE'						=> 'Bestand Samenvoegen',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Moduel is gereed om gedeinstalleerd te worden. Klik \"Commit\" om door te gaan met het deinstalleren. <br>\n",
	'LBL_UW_MODULE_READY'						=> "Module is klaar om te worden geïnstalleerd. Klik op \"Commit\" om verder te gaan met de installatie.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Geen opgenomen Upgrades gedetecteerd.',
	'LBL_UW_NONE'								=> 'Geen',
	'LBL_UW_NOT_AVAILABLE'						=> 'Niet beschikbaar',
	'LBL_UW_OVERWRITE_DESC'						=> "Alle gewijzigde bestanden zullen worden overschreven, ook alle aanpassingen in de code en in de sjablonen die u heeft aangebracht. Weet u zeker dat u doorgaat?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Overschrijf alle bestanden',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Handmatig Samenvoegen - Bewaar alles',
	'LBL_UW_OVERWRITE_FILES'					=> 'Samenvoeg Methode',
	'LBL_UW_PATCH_READY'						=> 'De patch is klaar om verder te gaan. Klik op de "Commit" knop hieronder om het upgrade-proces te voltooien.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Opmerking: Aangepaste Layouts Gevonden</h2><br />De volgende bestanden hebben nieuwe velden of gewijzigde schermlayouts toegepast via de Studio. De patch die u nu gaat installeren bevat wijzigingen voor deze bestanden. Voor <u>ieder bestand</u> kunt u:<br><ul><li>[<b>Standaard</b>] Uw versie bewaren door de checkbox niet aan te vinken. De patch wijzigingen zullen dan worden genegeerd.</li>of<li>Accepteer de gewijzigde bestanden door de checkbox wel aan te vinken. Uw wijzigingen zullen opnieuw moeten worden aangebracht via de Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Taak aanmaken voor Handmatig Samenvoegen?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Preflight Controle',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Onderscheidend',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Wilt u uzelf een herinnering sturen voor de handmatige samenvoeging?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'De bestanden hieronder zijn gewijzigd. Vink de items uit die handmatig samengevoegd moeten worden. <i> Gedetecteerde lay-out wijzigingen worden automatisch uitgevinkt; vink diegene aan die wel moeten worden overschreven.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Geen handmatige bestandssamenvoeging vereist',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Niet nodig.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-bewaarde Bestanden:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Alle preflight testen zijn gedaan',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klik op Volgende om de bijgewerkte bestanden naar het systeem te kopiëren.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Opmerking: De rest van het upgrade proces is verplicht. Door op Volgende te klikken verplicht u zich het proces af te maken. Als u niet wilt doorgaan, klik dan op Annuleren.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Toggle Alle Bestanden',

	'LBL_UW_REBUILD_TITLE'						=> 'Herbouw Resultaat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schema Wijzigingen',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Toon Ontdekte Instellingen',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Toon Ontbrekende Database Permissies',
	'LBL_UW_SHOW_DETAILS'						=> 'Toon Details',
	'LBL_UW_SHOW_DIFFS'							=> 'Toon Bestanden die handmatige samenvoeging benodigd zijn',
	'LBL_UW_SHOW_NW_FILES'						=> 'Toon bestanden met foutieve permissies',
	'LBL_UW_SHOW_SCHEMA'						=> 'Toon Wijzig Schema Script',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Toon Foutieve Queries',
	'LBL_UW_SHOW'								=> 'Toon',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Bestanden overgeslagen',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Overschrijven Bestanden wordt overgeslagen - Handmatig Samenvoegen is geselecteerd',
	'LBL_UW_SQL_RUN'							=> 'Controleer of SQL handmatig is uitgevoerd',
	'LBL_UW_START_DESC'							=> 'Deze wizard zal u behulpzaam zijn tijdens de upgrade van SuiteCRM',
	'LBL_UW_START_DESC2'						=> 'Opmerking: We bevelen aan een backup te maken van de SuiteCRM database en de systeem bestanden (alle bestanden in de SuiteCRM map) voordat u, u productie systeem upgrade. Tevens bevelen we ten zeerste aan eerst een upgrade test te doen op een gekloonde versie van u productie systeem. ',
	'LBL_UW_START_DESC3'						=> 'Klik op Volgende om een ​​check op uw systeem uit te voeren om ervoor te zorgen dat het systeem klaar is voor de upgrade. De check bestaat uit bestandspermissies, database voorrechten en server-instellingen.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'De nieuwe Upgrade Wizard zal nu het upgrade proces hervatten. Ga dan verder met uw upgrade.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Welkom bij de nieuwe Upgrade Wizard',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Bezig met controleren, even geduld aub. Dit kan maximaal 30 seconden duren.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Het vinden van alle relevante bestanden om te controleren.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Bestanden',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Gevonden',

	'LBL_UW_TITLE_CANCEL'						=> 'Annuleer',
	'LBL_UW_TITLE_COMMIT'						=> 'Commit Upgrade',
	'LBL_UW_TITLE_END'							=> 'Eindrapport',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Preflight Controle',
	'LBL_UW_TITLE_START'						=> 'Welkom',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Systeem controle',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upload bestandspakket',
	'LBL_UW_TITLE'								=> 'Upgrade Wizard',
	'LBL_UW_UNINSTALL'							=> 'De-installeer',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Accepteer Licentie',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converteer Licentie',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Geüpgraded/Aangepaste Modules',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'De volgende modules worden gedetecteerd als op maat gemaakt en bewaard',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'De volgende modules worden gedetecteerd als aangepast in de Studio en zijn geüpgraded.',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'De SuiteCRM Community Edition 5.0 gebruikt GNU Affero General Public License version 3. Deze upgrade zal de bestaande licentie converteren naar een nieuwe licentie die hieronder getoont word. ',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Bezig met de Start',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Systeem controles zijn bezig',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Bezig met Licentie Check',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight-controle is bezig',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopiëren van bestanden is bezig',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Bezig met bijwerken',
    'LBL_UW_COMMIT_DESC'						=> 'Klik op Volgende om aanvullende upgrade scripts uit te voeren.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Upgrade Scripts is bezig',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Samenvatting is bezig',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'Bezig ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Verstreken Tijd',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Upgrade geannuleerd en Cleanup is bezig',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Upgrade kan enige tijd in beslag nemen',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Controles in vooruitgang uploaden',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Uploaden upgrade pakket',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Moet SuiteCRM het afgekeurde 451 Schema verwijderen?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard Verwijderd oud 451 schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Handmatig Verwijderen van Schema na Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Oude Schema Verwijder Methode',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Toon Oude Schema dat kan worden verwijderd',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Overgeslagen Queries',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php versie 5 of later is vereist',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Uw versie van PHP wordt niet ondersteund door Sugar. U moet een versie hebben die compatibel is. Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde PHP-versies. Uw versie is',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Backward Compatibility modus is ingeschakeld. Zet zend.ze1_compatibility_mode op Off/Uit voor u verder gaat',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Actie',
    'LBL_ML_CANCEL'             => 'Annuleer',
    'LBL_ML_COMMIT'=>'Bevestig',
    'LBL_ML_DESCRIPTION' => 'Beschrijving',
    'LBL_ML_INSTALLED' => 'Installatiedatum',
    'LBL_ML_NAME' => 'Naam',
    'LBL_ML_PUBLISHED' => 'Publiceerdatum',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Niet installeerbaar',
    'LBL_ML_VERSION' => 'Versie',
	'LBL_ML_INSTALL'=>'Installeren',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker instellingen',
	'LBL_CURRENT_PHP_VERSION' => '(Uw huidige php versie is',
	'LBL_RECOMMENDED_PHP_VERSION' => '.Aanbevolen php versie is 5.2.1 of hoger)',
	'LBL_MODULE_NAME' => 'Upgradewizard',
	'LBL_UPLOAD_SUCCESS' => 'Upgrade pakket succesvol geüpload. Klik op Volgende om een laatste controle uit te voeren.',
	'LBL_UW_TITLE_LAYOUTS' => 'Bevestig Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Lay-outs',
	'LBL_LAYOUT_MERGE_DESC' => 'Er zijn nieuwe velden beschikbaar die zijn toegevoegd als onderdeel van deze upgrade. Deze kunnen automatisch worden toegevoegd aan uw bestaande module lay-outs. Voor meer informatie over deze velden verwijzen we naar de Release Notes. Wilt u de nieuwe velden niet toevoegen, vink dan de betreffende modules uit. Deze zullen dan ongewijzigd blijven. De nieuwe velden zijn wel beschikbaar in de Studio nadat de upgrade is voltooid.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klik op Volgende om de wijzigingen te bevestigen en om de upgrade te voltooien.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klik op Volgende om de upgrade te voltooien.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Bevestig de lay-out.',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bevestig de lay-out resultaten',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'De volgende lay-outs zijn succesvol samengevoegd:',
	'LBL_SELECT_FILE' => 'Selecteer bestand',
    'ERROR_VERSION_INCOMPATIBLE' => 'Dit bestand is niet compatible met deze versie van de Sugar Suite:',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Het geupload bestand is niet geschikt voor deze versie (Community Edition, Professional, of Enterprise) of SuiteCRM:',
	'LBL_LANGPACKS' => 'Taalpakketten' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module lader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Thema instellingen' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Verwerken' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Het geüploade bestand is groter dan de upload_max_filesize directive in php.ini',
													2 => 'Het geüploade bestand is groter dan de MAX_FILE_SIZE richtlijn die is opgegeven in het HTML-formulier.',
													3 => 'Het geüploade bestand is slechts gedeeltelijk geüpload.',
													4 => 'Er is geen bestand geüpload',
													5 => 'Onbekende fout',
													6 => 'Er ontbreekt een tijdelijke map.',
													7 => 'Schrijven van bestand naar schijf is mislukt.',
													8 => 'Bestand uploaden gestopt door extensie.',
),
);
