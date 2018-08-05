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
	'DESC_MODULES_INSTALLED'					=> 'Følgende moduler er installeret:',
	'DESC_MODULES_QUEUED'						=> 'Følgende moduler er klar til at blive installeret:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Gruppen kan ikke bestemmes',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Ejeren kan ikke bestemmes',
	'ERR_UW_CONFIG_WRITE'						=> 'Fejl under opdatering af config.php med nye versionsoplysninger.',
	'ERR_UW_CONFIG'								=> 'Gør filen config.php skrivbar, og genindlæs denne side.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Mappen er ikke skrivbar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Filen blev ikke kopieret',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Der opstod et problem under fjernelsen af pakken',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Filen kunne ikke læses.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Filen kan ikke flyttes, eller der kan ikke skrives til den',
	'ERR_UW_FLAVOR_2'							=> 'Opgraderingsvariant:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM-systemvariant:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log kunne ikke oprettes, eller der kunne ikke skrives til den. Rediger tilladelserne til mappen SugarCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload er angivet til en værdi, der er højere end 1. Ret dette i php.ini, og genstart webserveren.',
	'ERR_UW_MYSQL_VERSION'						=> 'SuiteCRM kræver MySQL version 4.1.2 eller nyere. Fundet: ',
	'ERR_UW_OCI8_VERSION'				        => 'Your version of Oracle is not supported by SuiteCRM.  You will need to install a version that is compatible with the SuiteCRM application.  Please consult the Compatibility Matrix in the Release Notes for supported Oracle Versions. Current version: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Angiv en fil, og prøv igen!',
	'ERR_UW_NO_FILES'							=> 'Der opstod en fejl. Der blev ikke fundet nogen filer at kontrollere.',
	'ERR_UW_NO_MANIFEST'						=> 'Zip-filen mangler en fil af typen manifest.php. Der kan ikke fortsættes.',
	'ERR_UW_NO_VIEW'							=> 'Der er angivet en ugyldig visning.',
	'ERR_UW_NO_VIEW2'							=> 'Visningen er ikke defineret. Gå til startsiden Administration for at navigere til denne side.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Ikke en gyldig upload.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Mappen Temp kunne ikke oprettes. Kontrollér filtilladelserne.',
	'ERR_UW_ONLY_PATCHES'						=> 'Du kan kun uploade programrettelser på denne side.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fejl under Preflight-kontrol',
	'ERR_UW_UPLOAD_ERR'							=> 'Der opstod en fejl under upload af filen. Prøv igen!<br>\n',
	'ERR_UW_VERSION'							=> 'SuiteCRM-systemversion: ',
	'ERR_UW_WRONG_TYPE'							=> 'Denne side er ikke beregnet til kørsel',
	'LBL_BUTTON_BACK'							=> 'Tilbage',
	'LBL_BUTTON_CANCEL'							=> 'Annuller',
	'LBL_BUTTON_DELETE'							=> 'Slet pakke',
	'LBL_BUTTON_DONE'							=> 'Udført',
	'LBL_BUTTON_EXIT'							=> 'Afslut',
	'LBL_BUTTON_INSTALL'						=> 'Preflight-opgradering',
	'LBL_BUTTON_NEXT'							=> 'Næste',
	'LBL_BUTTON_RECHECK'						=> 'Kontrollér igen',
	'LBL_BUTTON_RESTART'						=> 'Genstart',

	'LBL_UPLOAD_UPGRADE'						=> 'Upload en opgradering',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Uploadfilen blev ikke fundet',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Sikkerhedskopi af fil',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Sikkerhedskopierede filer fra denne opgradering findes i',
	'LBL_UW_BACKUP'								=> 'SIKKERHEDSKOPI af fil',
	'LBL_UW_CANCEL_DESC'						=> '"Guiden Opgradering er blevet annulleret. Alle midlertidige filer og den uploadede zip-fil er blevet slettet.<br><br>Tryk på ""Udført"" for at genstarte guiden Opgradering."',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Ændringer af tegnsætskema',
	'LBL_UW_CHECK_ALL'							=> 'Tjek alt',
	'LBL_UW_CHECKLIST'							=> 'Opgraderingstrin',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Sikkerhedskopier af overskrevne filer findes i følgende mappe:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Flet følgende filer manuelt:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Opgraderingsproces: Flet filer manuelt',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Brug den diff. metode, du kender bedst, til at flette disse filer. Indtil du har fuldført den, er din SugarCRM-installation usikker, og opgraderingen er ikke fuldført.',
	'LBL_UW_COMPLETE'							=> 'Fuldført',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Denne nye version af Sugar indeholder en ny licensaftale. Vil du fortsætte?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Alle krav til systemindstillinger er opfyldt',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP-indstilling: Overførsel af opkaldstid som reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL-modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP-modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings-modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings-parameteren mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP-indstilling: Hukommelsesgrænse',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Setting: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server og PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Mindste MySQL-version',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Database Version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Placering af php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Mindste PHP-version',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP-indstilling: Sikker tilstand',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Tjek serverindstillinger',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Registrerede indstillinger',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML-parsing',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Support',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE Version',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Filer blev kopieret',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Ændringer af brugerdefineret tabelskema',

	'LBL_UW_DB_CHOICE1'							=> 'Guiden Opgradering kører SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Manuelle SQL-forespørgsler',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT mislykkedes - sammenlignede resultater afviger',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Databaserettigheder',
	'LBL_UW_DB_ISSUES'							=> 'Databaseproblemer',
	'LBL_UW_DB_METHOD'							=> 'Databaseopdateringsmetode',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [tabel] ADD COLUMN [kolonne]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [tabel] CHANGE COLUMN [kolonne]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [tabel]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [tabel]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [tabel] DROP COLUMN [kolonne]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [tabel]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alle rettigheder er tilgængelige',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Nødvendige rettigheder',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Følgende opgraderinger er installeret:',
	'LBL_UW_END_DESC'							=> 'Tillykke, systemet er nu opgraderet.',
	'LBL_UW_END_DESC2'							=> 'Hvis du har valgt at køre nogle trin manuelt, f.eks. filfletninger eller SQL-forespørgsler, skal du gøre det nu. Systemet er ustabilt, indtil disse trin er fuldført.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Upgraderingen er gennemført.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Klik "færdig" for at afslutte opgraderingsguiden.',
	'LBL_UW_END_LOGOUT'							=> 'Log af kontoen, hvis du planlægger at opgradere yderligere end dette programrettelses-/opgraderingsniveau.',
	'LBL_UW_END_LOGOUT2'						=> 'Log af',
	'LBL_UW_REPAIR_INDEX'						=> '"Du kan forbedre databasens ydeevne ved at køre scriptet <a href=""index.php?module=Administration&action=RepairIndex"" target=""_blank"">Reparer indeks</a>."',

	'LBL_UW_FILE_DELETED'						=> "er blevet fjernet.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Gruppe',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Filtilladelser',
	'LBL_UW_FILE_ISSUES'						=> 'Filproblemer',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Filen kræver manuel diff.',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alle filer er skrivbare</b>',
	'LBL_UW_FILE_OWNER'							=> 'Ejer',
	'LBL_UW_FILE_PERMS'							=> 'Tilladelser',
	'LBL_UW_FILE_UPLOADED'						=> 'er blevet uploadet',
	'LBL_UW_FILE'								=> 'Filnavn',
	'LBL_UW_FILES_QUEUED'						=> 'Følgende opgraderinger er klar til at blive installeret:',
	'LBL_UW_FILES_REMOVED'						=> "Følgende filer fjernes fra systemet:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Klik \"næste\" for at overføre opgraderingspakkerne.",
	'LBL_UW_FROZEN'								=> 'Du skal udføre de obligatoriske trin, før du fortsætter.',
	'LBL_UW_HIDE_DETAILS'						=> 'Skjul detaljer',
	'LBL_UW_IN_PROGRESS'						=> 'Startet',
	'LBL_UW_INCLUDING'							=> 'Inklusive',
	'LBL_UW_INCOMPLETE'							=> 'Ikke fuldført',
	'LBL_UW_INSTALL'							=> 'INSTALLER fil',
	'LBL_UW_MANUAL_MERGE'						=> 'Flet fil',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "\"Modulet er klar til at blive afinstalleret. Klik på \"\"Forpligt\"\" for at fortsætte med installationen.<br>\"",
	'LBL_UW_MODULE_READY'						=> "\"Modulet er klar til at blive installeret. Klik på \"\"Forpligt\"\" for at fortsætte med installationen.\"",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Ingen registrerede opgraderinger blev fundet.',
	'LBL_UW_NONE'								=> 'Ingen',
	'LBL_UW_NOT_AVAILABLE'						=> 'Ikke tilgængelig',
	'LBL_UW_OVERWRITE_DESC'						=> "Alle ændrede filer overskrives, herunder alle de kodetilpasninger og skabelonændringer, du har foretaget. Er du sikker på, at du vil fortsætte?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Overskriv alle filer',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuel fletning - bevar alt',
	'LBL_UW_OVERWRITE_FILES'					=> 'Flettemetode',
	'LBL_UW_PATCH_READY'						=> '"Programrettelsen er klar til at fortsætte. Klik på knappen ""Forpligt"" nedenfor for at fuldføre opgraderingsprocessen."',
	'LBL_UW_PATCH_READY2'						=> '<h2>Bemærk! Tilpassede layout blev fundet</h2><br />Følgende fil"er" indeholder nye felter eller redigerede skærmlayout, som er anvendt via Studio. Den programrettelse, du er ved at installere, indeholder også ændringer til filen eller filerne. For <u>hver fil</u> kan du gøre følgende:<br><ul><li>[<b>Standard</b>] Bevar din version ved at lade afkrydsningsfeltet være tomt. Programrettelsesændringerne ignoreres.</li>or<li>Acceptér de opdaterede filer ved at markere afkrydsningsfeltet. Dine layout skal anvendes igen via Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Vil du oprette opgaveposten til manuel fletning?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Preflight-kontrol',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differentieret',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Vil du sende en e-mail-påmindelse om manuel fletning til dig selv?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Filerne nedenfor er blevet ændret. Fjern markeringen af de poster, der kræver manuel fletning. <i>Markeringen fjernes automatisk ved alle registrerede layoutændringer. Markér dem, der skal overskrives.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Ingen manuel filfletning kræves.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Ikke nødvendig.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automatisk bevarede filer:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> '"Alle Preflight-test er bestået. Tryk på ""Næste"" for at bekræfte disse ændringer."',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klik "næste" for at kopiere opgraderingsfilerne til systemet.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Resten af opgraderingsprocessen er obligatorisk, og ved at klikke "næste" fuldføres processen. Hvis du ikke ønsker at fortsætte, klik da "annullér".',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Slå alle filer til/fra',

	'LBL_UW_REBUILD_TITLE'						=> 'Gendan resultat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Skemaændringer',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Vis registrerede indstillinger',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Vis manglende databasetilladelser',
	'LBL_UW_SHOW_DETAILS'						=> 'Vis detaljer',
	'LBL_UW_SHOW_DIFFS'							=> 'Vis filer, der kræver manuel fletning',
	'LBL_UW_SHOW_NW_FILES'						=> 'Vis filer med ugyldige tilladelser',
	'LBL_UW_SHOW_SCHEMA'						=> 'Vis script med skemaændringer',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Vis ugyldige forespørgsler',
	'LBL_UW_SHOW'								=> 'Vis',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Filer sprunget over',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Springer over filoverskrivninger - manuel fletning er valgt.',
	'LBL_UW_SQL_RUN'							=> 'Kontrollér, hvornår SQL er blevet kørt manuelt',
	'LBL_UW_START_DESC'							=> 'Velkommen til guiden Opgradering af SugarCRM. Denne guide hjælper administratorer med at opgradere deres SugarCRM-forekomster. Følg vejledningen omhyggeligt.',
	'LBL_UW_START_DESC2'						=> 'Det anbefales, at du først udfører opgraderingen på en klonet forekomst af produktionsserveren. Sikkerhedskopiér database- og systemfilerne "alle filerne i mappen SugarCRM", før du udfører denne handling.',
	'LBL_UW_START_DESC3'						=> 'Tryk "næste" for at udføre et tjek af dit system for at sikre, at systemet er klar til at opgradere. Tjekket inkluderer filtilladelser, databaseprivilegier og serverindstillinger.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Den nye opgraderingsguide fortsætter nu opgraderingsprocessen. Fortsæt opgraderingen.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Velkommen til den nye opgraderingsguide.',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Kontrollerer nu. Vent et øjeblik. Det kan tage op til 30 sekunder.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Finder alle de relevante filer, der skal kontrolleres.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Filer',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Fundet',

	'LBL_UW_TITLE_CANCEL'						=> 'Annuller',
	'LBL_UW_TITLE_COMMIT'						=> 'Forpligt opgradering',
	'LBL_UW_TITLE_END'							=> 'Rapportér',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Preflight-kontrol',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Systemkontrol',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upload opgradering',
	'LBL_UW_TITLE'								=> 'Guiden Opgradering',
	'LBL_UW_UNINSTALL'							=> 'Afinstaller',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Acceptér licens',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Konverter licens',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Opgraderede/tilpassede moduler',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Følgende moduler er registreret som tilpasset og bevaret',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Følgende moduler er registreret som Studio-tilpasset og er blevet opgraderet',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'The SuiteCRM Community Edition 5.0 uses GNU Affero General Public License version 3. This upgrade will convert your existing license to the new license displayed below.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Start er startet',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Systemkontrol er startet',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Licenskontrol er startet',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight-kontrol er startet',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Fil kopiering i gang.',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Forpligt opgradering er startet',
    'LBL_UW_COMMIT_DESC'						=> 'Klik på "næste" for at køre yderligere opgraderingsscripts.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Opgraderingscripts er i gang.',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Opgraderingsoversigt er startet',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'startet',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tiden er udløbet',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Opgraderingen blev annulleret, og oprydningen er startet',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Opgraderingen kan tage et stykke tid',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Kontrol af upload er startet',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Uploader opgraderingspakke...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Kunne du tænke dig at få Sugar til at droppe depricated 451-skemaet?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Opgraderingsguiden Drops old 451-skema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Manuel dropning af skema efter opgradering',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metoden Drop gamle skema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Vis det gamle skema, der kan droppes',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Forespørgsler, der springes over',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php version 5 eller nyere er påkrævet.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Din version af PHP understøttes ikke af Sugar. Du skal installere en version, der er kompatibel med Sugar-programmet. Se kompatibilitetsmatrixen "Compatibility Matrix" i produktbemærkningerne "Release Notes" for understøttede PHP-versioner. Din version er',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Tilstanden Php-bagudkompatibilitet er aktiveret. Angiv zend.ze1_compatibility_mode til Fra for at fortsætte',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Handling',
    'LBL_ML_CANCEL'             => 'Annuller',
    'LBL_ML_COMMIT'=>'Forpligt',
    'LBL_ML_DESCRIPTION' => 'Beskrivelse',
    'LBL_ML_INSTALLED' => 'Installeret den',
    'LBL_ML_NAME' => 'Navn',
    'LBL_ML_PUBLISHED' => 'Udgivet den',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Ikke-installerbar',
    'LBL_ML_VERSION' => 'Version',
	'LBL_ML_INSTALL'=>'Installer',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Sporing',
	'LBL_CURRENT_PHP_VERSION' => '"Din aktuelle php-version er',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Den anbefalede php-version er 5.2.1 eller nyere"',
	'LBL_MODULE_NAME' => 'Opgraderingsguide',
	'LBL_UPLOAD_SUCCESS' => 'Opgraderingspakken er overført med succes. Klik "næste" for et sidste tjek.',
	'LBL_UW_TITLE_LAYOUTS' => 'Bekræft layout',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layout',
	'LBL_LAYOUT_MERGE_DESC' => 'Der er nye felter til rådighed, som er blevet tilføjet som en del af denne opgradering, og som automatisk kan blive tilføjet til dit eksisterende modul layout. Hvis du vil vide mere om de nye felter, henvises der til udgivelsesbemærkningerne for den version, som du har opgraderet til.<br><br /><br><br />Hvis du ikke ønsker at føje de nye felter, skal du fjerne afkrydsningen af modulet, og dit brugerdefinerede layout vil forblive uændret. Felterne vil være tilgængelig i Studio efter opgraderingen.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klik "næste" for at bekræfte ændringerne og for at afslutte opgraderingen.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klik på "næste" for at gennemføre opgraderingen.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Bekræft layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bekræft layout resultater',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'De følgende layout blev sammeflettet med succes:',
	'LBL_SELECT_FILE' => 'Vælg fil:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Den uploaded fil er ikke en Sugar fil: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Den uploadede fil er ikke kompatibel med denne variant "Community Edition, Professional eller Enterprise" af Sugar:',
	'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Tema' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Opgradering' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Behandler' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Den uploadede fil overstiger upload_max_filesize-direktivet i php.ini.',
													2 => 'Den uploadede fil overstiger MAX_FILE_SIZE-direktivet, som er angivet i HTML-formularen.',
													3 => 'Den uploadede fil blev kun delvist uploadet.',
													4 => 'Ingen fil blev uploadet.',
													5 => 'Ukendt fejl.',
													6 => 'En midlertidig mappe mangler.',
													7 => 'Filen kunne ikke skrives på disken.',
													8 => 'Upload af filen blev stoppet af filtypen.',
),
);
