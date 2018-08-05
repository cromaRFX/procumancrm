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
	'DESC_MODULES_INSTALLED'					=> 'Die folgenden Module wurden installiert:',
	'DESC_MODULES_QUEUED'						=> 'Die folgenden Module können installiert werden:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Gruppe kann nicht bestimmt werden',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Besitzer kann nicht bestimmt werden',
	'ERR_UW_CONFIG_WRITE'						=> 'Fehler beim Aktualisieren der config.php mit neuen Versionsinformationen.',
	'ERR_UW_CONFIG'								=> 'Bitte setzten Sie Schreibrechte für die config.php Datei und laden Sie diese Seite erneut.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Nicht beschreibbar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Datei nicht kopiert.',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem beim Entfernen eines Paketes',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Datei kann nicht gelesen werden.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Datei kann nicht verschoben oder geschrieben werden',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade-Edition: ',
	'ERR_UW_FLAVOR'								=> 'SuiteCRM System Edition:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log konnte nicht erstellt/geschrieben werden. Bitte überprüfen Sie die Berechtigungen in Ihrem SuiteCRM Verzeichnis.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload ist höher als 1. Bitte in der php.ini ändern und danach den Webserver neu starten.',
	'ERR_UW_MYSQL_VERSION'						=> 'SuiteCRM benötigt MySQL Version 4.1.2 oder neuer. Gefunden:',
	'ERR_UW_OCI8_VERSION'				        => 'Ihre Oracle Version wird von SuiteCRM nicht unterstützt. Sie müssen eine kompatible Version installieren. Bitte überprüfen Sie dazu die Kompatibilitätsmatrix in den Release Notes für kompatible Oracle Versionen. Aktuelle Version:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Bitte geben Sie eine Datei an und versuchen Sie es erneut!',
	'ERR_UW_NO_FILES'							=> 'Ein Fehler ist aufgetreten, keine Dateien für die Überprüfung gefunden.',
	'ERR_UW_NO_MANIFEST'						=> 'In der zip Datei fehlt die manifest.php Datei. Kann nicht fortfahren.',
	'ERR_UW_NO_VIEW'							=> 'Ungültige Ansicht angegeben.',
	'ERR_UW_NO_VIEW2'							=> 'Ansicht nicht definiert. Bitte gehen Sie auf die Verwaltungsstartseite, um auf diese Seite zu gelangen.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Kein gültiger Upload.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Das temporäre Verzeichnis konnte nicht erstellt werden. Dateiberechtigungen überprüfen.',
	'ERR_UW_ONLY_PATCHES'						=> 'Auf dieser Seite können Sie nur Patches hochladen.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fehler gefunden während den letzten Kontrollen',
	'ERR_UW_UPLOAD_ERR'							=> 'Beim Hochladen der Datei ist ein Fehler aufgetreten, bitte versuchen Sie es erneut!<br>\n',
	'ERR_UW_VERSION'							=> 'SuiteCRM Systemversion: ',
	'ERR_UW_WRONG_TYPE'							=> 'Diese Seite dient nicht der Ausführung',
	'LBL_BUTTON_BACK'							=> '< Zurück',
	'LBL_BUTTON_CANCEL'							=> 'Abbrechen',
	'LBL_BUTTON_DELETE'							=> 'Paket löschen',
	'LBL_BUTTON_DONE'							=> 'Fertig',
	'LBL_BUTTON_EXIT'							=> 'Verlassen',
	'LBL_BUTTON_INSTALL'						=> 'Letzte Kontrollen',
	'LBL_BUTTON_NEXT'							=> 'Weiter >',
	'LBL_BUTTON_RECHECK'						=> 'Nachprüfung',
	'LBL_BUTTON_RESTART'						=> 'Neu starten',

	'LBL_UPLOAD_UPGRADE'						=> 'Akutalisierungspaket hochladen',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Datei zum Hochladen nicht gefunden',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Datei-Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Gesicherte Dateien von diesem Upgrade finden Sie in',
	'LBL_UW_BACKUP'								=> 'Datei sichern',
	'LBL_UW_CANCEL_DESC'						=> 'Die Aktualisierung wurde abgebrochen. Kopierte Temporärdateien und alle bereits hochgeladenen Dateien wurden gelöscht.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Zeichensatzschema-Änderungen',
	'LBL_UW_CHECK_ALL'							=> 'Alle markieren',
	'LBL_UW_CHECKLIST'							=> 'Upgrade-Schritte',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Sicherungen der überschriebenen Dateien sind in folgendem Verzeichnis:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Führen Sie die folgenden Dateien manuell zusammen:\"",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Upgrade-Prozess: Dateien manuell zusammenführen',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Bitte benutzen Sie eine gängige Methode, um diese Dateien zusammenzuführen. Bis dieser Schritt fertig ist, ist Ihre SuiteCRM Installation in einem instabilen Zustand und die Aktualisierung ist nicht beendet.',
	'LBL_UW_COMPLETE'							=> 'Abgeschlossen',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Diese neue SuiteCRM Version enthält eine neue Lizenzvereinbarung. Wollen Sie fortfahren?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Alle erforderlichen Systemeinstellungen erfüllt',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Einstellungen: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL Modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings-Modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP-Einstellungen: Speicher-Limit',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP-Einstellungen: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimale MySQL Version',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Databankversion',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Speicherort der php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimale PHP-Version',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP-Einstellungen: Sicherer Modus',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Server-Einstellungen prüfen',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Gefundene Einstellungen',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Parsing',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Unterstützung',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE-Version',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Dateien wurden erfolgreich kopiert.',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Eigene Tabellen Schemaänderungen',

	'LBL_UW_DB_CHOICE1'							=> 'Aktualisierungsassistent führt SQL durch',
	'LBL_UW_DB_CHOICE2'							=> 'Manuelle SQL Abfragen',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT fehlgeschlagen - verglichene Resultate unterschiedlich',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Datenbankberechtigungen',
	'LBL_UW_DB_ISSUES'							=> 'Datenbankprobleme',
	'LBL_UW_DB_METHOD'							=> 'Aktualisierungsmethode der Datenbank',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'TABELLE ERSTELLEN [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'LÖSCHEN AUS[table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABELLE [table] DROP SPALTE [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'TABELLE ABLEGEN [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alle verfügbaren Berechtigungen',
	'LBL_UW_DB_NO_INSERT'						=> 'EINFÜGEN IN [table]',
	'LBL_UW_DB_NO_SELECT'						=> '[x] AUS [table] AUSWÄHLEN',
	'LBL_UW_DB_NO_UPDATE'						=> 'AKTUALISIEREN [table]',
	'LBL_UW_DB_PERMS'							=> 'Notwendige Berechtigungen',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Die folgenden Aktualisierungspakete wurden installiert:',
	'LBL_UW_END_DESC'							=> 'Das System wurde aktualisiert.',
	'LBL_UW_END_DESC2'							=> 'Falls Sie einige Schritte manuell durchführen möchten - wie Dateizusammenführungen oder SQL-Abfragen - tun Sie dies jetzt. Ihr System ist in einem instabilen Zustand, bis Sie diese Schritte durchgeführt haben.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Die Aktualisierung wurde abgeschlossen.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Klicken Sie auf Verlassen, um den Aktualisierungsassistenten zu beenden.',
	'LBL_UW_END_LOGOUT'							=> 'Wenn Sie vorhaben, ein weiteres Paket über den Aktualisierungsassistenten zu installieren, melden Sie sich bitte zuvor einmal ab und dann wieder an.',
	'LBL_UW_END_LOGOUT2'						=> 'Abmelden',
	'LBL_UW_REPAIR_INDEX'						=> 'Für eine verbesserte Leistung der Datenbank, führen Sie bitte das <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> Script aus."',

	'LBL_UW_FILE_DELETED'						=> " wurde entfernt.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Gruppe',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Dateiberechtigungen',
	'LBL_UW_FILE_ISSUES'						=> 'Dateiprobleme',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Datei benötigt manuellen Vergleich',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alle schreibbaren Dateien</b>',
	'LBL_UW_FILE_OWNER'							=> 'Besitzer',
	'LBL_UW_FILE_PERMS'							=> 'Berechtigungen',
	'LBL_UW_FILE_UPLOADED'						=> ' Es wurde hochgeladen',
	'LBL_UW_FILE'								=> 'Dateiname',
	'LBL_UW_FILES_QUEUED'						=> 'Die folgenden Aktualisierungspakete sind bereit für die Installation:',
	'LBL_UW_FILES_REMOVED'						=> "Die folgenden Dateien werden aus dem System entfernt:<br>\"",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Klicken Sie auf Weiter zum Hochladen von Aktualisierungspaketen.</b>",
	'LBL_UW_FROZEN'								=> 'Laden Sie ein Paket, bevor Sie fortfahren.',
	'LBL_UW_HIDE_DETAILS'						=> 'Details verbergen',
	'LBL_UW_IN_PROGRESS'						=> 'In Bearbeitung',
	'LBL_UW_INCLUDING'							=> 'Einschließlich',
	'LBL_UW_INCOMPLETE'							=> 'Unvollständig',
	'LBL_UW_INSTALL'							=> 'Datei installieren',
	'LBL_UW_MANUAL_MERGE'						=> 'Datei zusammenführen',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Das Modul kann nun deinstalliert werden. Klicken Sie aufAusführen\" , um mit der Installation fortzufahren.<br>\"",
	'LBL_UW_MODULE_READY'						=> "Das Modul kann nun installiert werden. Klicken Sie aufAusführen\" , um mit der Installation fortzufahren.\"",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Keine aufgezeichneten Aktualisierungen gefunden.',
	'LBL_UW_NONE'								=> 'Kein(e)',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nicht verfügbar',
	'LBL_UW_OVERWRITE_DESC'						=> "Alle geänderten Dateien werden überschrieben - inklusive Anpassungen am Code und an den Vorlagen. Sind Sie sicher, dass Sie fortfahren wollen?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Alle Dateien überschreiben',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuelles Zusammenführen - Alle behalten',
	'LBL_UW_OVERWRITE_FILES'					=> 'Zusammenführungsmethode',
	'LBL_UW_PATCH_READY'						=> 'Der Patch ist bereit durchgeführt zu werden. Klicken Sie aufAusführen", um den Aktualisierungsprozess abzuschließen."',
	'LBL_UW_PATCH_READY2'						=> '<h2>Hinweis: Angepasste Layouts gefunden</h2><br />Die folgende(n) Datei(en) besitzen neue Felder oder es wurden im Studio Layouts verändert. Der Patch, den Sie gerade installieren, enthält Änderungen für diese Datei(en). Für <u>jede Datei</u> können Sie:<br><ul><li>[<b>Standard</b>] Behalten Sie Ihre Version, indem Sie das Kästchen nicht markieren. Die Modifikationen durch den Patch werden ignoriert.</li>oder<li>Akzeptieren Sie die Änderungen, indem Sie das Kästchen markieren. Ihre Layouts müssen im Studio angepasst werden.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Aufgabe für manuelles Zusammenführen erstellen?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Letzte Kontrollen',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differenziert',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Sich selbst eine Erinnerung für das manuelle Zusammenführen per E-Mail senden?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Die unten angeführten Dateien wurden verändert. Entfernen Sie die Markierung bei Positionen die einen manuellen Abgleich erfordern. <i><i>Gefundene Änderungen an Layouts werden automatisch deaktiviert"',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Keine manuelle Dateizusammenführung erforderlich.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nicht benötigt.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-erhaltende Dateien:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Alle vorbereitenden Kontrollen erfolgreich durchgeführt.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klicken Sie auf Weiter, um die aktualisierten Dateien auf das System zu kopieren.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Bitte beachten Sie,</b> dass der Rest des Aktualisierungsprozesses verpflichtend ist und ein Klick auf Weiter <b>verlangt,</b> den Vorgang auch abzuschließen wird. Wenn Sie nicht fortfahren wollen, klicken Sie auf Abbrechen.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Alle Dateien de- / aktivieren',

	'LBL_UW_REBUILD_TITLE'						=> 'Resultat der Wiederherstellung',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schemaänderungen',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Gefundene Einstellungen anzeigen',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Fehlende Datenbankberechtigungen anzeigen',
	'LBL_UW_SHOW_DETAILS'						=> 'Details zeigen',
	'LBL_UW_SHOW_DIFFS'							=> 'Dateien anzeigen, die manuell zusammengeführt werden müssen',
	'LBL_UW_SHOW_NW_FILES'						=> 'Dateien mit falschen Berechtigungen anzeigen',
	'LBL_UW_SHOW_SCHEMA'						=> 'Schemaänderungsskript anzeigen',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Falsche Abfragen anzeigen',
	'LBL_UW_SHOW'								=> 'Zeigen',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Übersprungene Dateien',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Datei überschreiben übersprungen - Manuelle Zusammenführung gewählt',
	'LBL_UW_SQL_RUN'							=> 'Überprüfen, wann SQL manuell gelaufen ist',
	'LBL_UW_START_DESC'							=> 'Der Assistent hilft Ihnen bei der Aktualisierung dieser SuiteCRM Instanz.',
	'LBL_UW_START_DESC2'						=> 'Bitte beachten: Sichern Sie die Datenbank und die Systemdateien (alle Dateien im SuiteCRM Verzeichnis), bevor Sie die Aktualisierung durchführen. Wir empfehlen auch, die Aktualisierung IMMER ZUERST auf einer geklonten Instanz des Produktivservers zu testen.',
	'LBL_UW_START_DESC3'						=> 'Klicken Sie auf Weiter und führen Sie eine Überprüfung Ihres Systems durch, um sicherzustellen, dass es bereit für das Upgrade ist. Die Prüfung umfasst Dateirechte, Datenbankberechtigungen und Servereinstellungen.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Der neue Aktualisierungsassistent wird nun den Aktualisierungsprozess fortsetzen.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Willkommen beim neuen Aktualisierungsassistent',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Überprüfe, bitte warten. Dies kann bis zu 30 Sekunden dauern.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Alle passenden Dateien für den Check finden.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Dateien',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Gefunden',

	'LBL_UW_TITLE_CANCEL'						=> 'Abbrechen',
	'LBL_UW_TITLE_COMMIT'						=> 'Upgrade ausführen',
	'LBL_UW_TITLE_END'							=> 'Nachkontrolle',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Letzte Kontrollen',
	'LBL_UW_TITLE_START'						=> 'Willkommen',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Systemüberprüfung',
	'LBL_UW_TITLE_UPLOAD'						=> 'Paket hochladen',
	'LBL_UW_TITLE'								=> 'Aktualisierungsassistent',
	'LBL_UW_UNINSTALL'							=> 'Deinstallieren',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Lizenz annehmen',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Lizenz umwandeln',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Upgrade/Eigene Module',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Die folgende Module sind selbst entwickelt und werden beibehalten',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Die folgende Module sind mit Studio angepasst worden und wurden aktualisiert',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'Die SuiteCRM Community Edition 6.1 verwendet GNU Affero General Public License Version 3. Dieses Upgrade wird Ihre bestehende Lizenz auf die neue Lizenz, wie unten angezeigt, konvertieren.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Startvorgang in Arbeit',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Systemüberprüfung wird durchgeführt',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Lizenzprüfung wird durchgeführt',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Überprüfung der Voraussetzungen wird durchgeführt',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopieren von Dateien wird durchgeführt',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Eigentliche Aktualisierung wird durchgeführt',
    'LBL_UW_COMMIT_DESC'						=> 'Klicken Sie auf Weiter, um zusätzliche Aktualisierungsskripte ausführen.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Aktualisierungsskripte werden durchgeführt',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Eine Zusammenfassung der Aktualisierung wird erstellt',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'wird durchgeführt',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Zeit abgelaufen',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Aktualisierungsstop und Aufräumen werden durchgeführt',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Das Upgrade kann einige Zeit dauern',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Hochgeladene Dateien werden überprüft',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Aktualisierungspaket wird hochgeladen',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Wollen Sie, dass SuiteCRM die alten 451 Schemata entfernt?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Aktualisierungsassistent entfernt das alte 451 Schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Entfernen Sie das Schema nach der Aktualisierung manuell',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Altes Schema Löschmethode',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Zeige altes Schema, das entfernt werden kann',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Übersprungene Abfragen',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'PHP Version 5 oder später wird benötigt.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Ihre PHP Version wird nicht unterstützt. Sie müssen eine kompatible Version installieren. Bitte überprüfen Sie dazu die Kompatibilitätsmatrix in den Release Notes. Ihre Version ist',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'PHP Rückwärts Kompatibilitätsmodus ist eingeschaltet. Setzen Sie den zend.ze1_compatibility_mode auf Off um fortzufahren.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Aktion',
    'LBL_ML_CANCEL'             => 'Abbrechen',
    'LBL_ML_COMMIT'=>'Durchführen',
    'LBL_ML_DESCRIPTION' => 'Beschreibung',
    'LBL_ML_INSTALLED' => 'Installationsdatum',
    'LBL_ML_NAME' => 'Name',
    'LBL_ML_PUBLISHED' => 'Veröffentlichungsdatum',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Deinstallierbar',
    'LBL_ML_VERSION' => 'Version',
	'LBL_ML_INSTALL'=>'Installieren',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(Ihre aktuelle php Version ist ',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Empfohlene php Version ist 5.2.2 oder höher)',
	'LBL_MODULE_NAME' => 'Aktualisierungsassistent',
	'LBL_UPLOAD_SUCCESS' => 'Aktualisierungspaket erfolgreich hochgeladen. Klicken Sie auf Weiter für eine Endkontrolle.',
	'LBL_UW_TITLE_LAYOUTS' => 'Layouts bestätigen',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Es stehen neue Felder zur Verfügung, die als Teil dieses Upgrade hinzugefügt wurden. Diese können automatisch an Ihre vorhandenen Modul-Layouts angefügt werden. Um mehr über diese neuen Felder zu erfahren, lesen Sie bitte die Release Notes für die Version, auf die Sie gerade aktualisieren.<br><br> Wenn Sie nicht wollen, dass neue Felder angefügt werden, deaktivieren Sie bitte das Modul, und Ihre benutzerdefinierten Layouts bleiben unverändert. Die Felder stehen nach der Aktualisierung natürlich auch im Studio zur Verfügung. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klicken Sie auf Weiter, um die Änderungen zu bestätigen und um die Aktualisierung zu beenden.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klicken Sie auf Weiter, um die Aktualisierung abzuschließen.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Layouts bestätigen',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Layout Resultate bestätigen',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Die folgenden Layouts wurden erfolgreich zusammengeführt:',
	'LBL_SELECT_FILE' => 'Datei auswählen:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Die geladene Datei ist nicht mit dieser SuiteCRM Version kompatibel:',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Die hochgeladene Datei ist nicht kompatibel mit dieser SuiteCRM Edition (Community Edition, Professional oder Enterprise).:',
	'LBL_LANGPACKS' => 'Sprachpakete' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module verwalten' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Designs' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Aktualisieren' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'In Bearbeitung' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Die hochgeladene Datei ist größer als upload_max_filesize in php.ini.',
													2 => 'Die hochgeladene Datei ist größer als die MAX_FILE_SIZE Richtlinie, die im HTML Fomular angegeben wurde.',
													3 => 'Die Datei wurde nur teilweise hochgeladen.',
													4 => 'Keine Datei hochgeladen.',
													5 => 'Unbekannter Fehler.',
													6 => 'Ein temporäres Verzeichnis fehlt.',
													7 => 'Datei konnte nicht geschrieben werden.',
													8 => 'Datei hochladen von Erweiterung gestoppt.',
),
);
