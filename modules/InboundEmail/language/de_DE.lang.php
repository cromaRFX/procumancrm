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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(


	'LBL_RE'					=> 'AW:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Login oder Passwort stimmen nicht',
	'ERR_BODY_TOO_LONG'		=> '\rTextkörper zu lang um die GANZE E-Mail zu speichern. Abgeschnitten.',
	'ERR_INI_ZLIB'			=> 'Konnte Zlib Komprimierung nicht temporär ausschalten.Test Einstellungen" könnte fehlschlagen."',
	'ERR_MAILBOX_FAIL'		=> 'Konnte keine E-Mail Konten finden.',
	'ERR_NO_IMAP'			=> 'Keine IMAP Bibliotheken gefunden. Bitte korrigieren, bevor Sie mit eingehenden E-Mails weiterarbeiten können.',
	'ERR_NO_OPTS_SAVED'		=> 'Für Ihr eingehendes E-Mail Konto wurden keine Optimums gespeichert. Bitte überprüfen Sie die Einstellungen.',
	'ERR_TEST_MAILBOX'		=> 'Überprüfen Sie bitte Ihre Einstellungen und versuchen Sie es erneut.',

	'LBL_APPLY_OPTIMUMS'	=> 'Optimums anwenden',
	'LBL_ASSIGN_TO_USER'	=> 'Mit Benutzer verknüpfen',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Automatische Antwortoptionen',
	'LBL_AUTOREPLY'			=> 'Automatische Antwortvorlage',
	'LBL_AUTOREPLY_HELP'	=> 'Wählen Sie eine automatisierte Antwort, um dem Sender mitzuteilen, dass seine Nachricht empfangen wurde.',
	'LBL_BASIC'				=> 'E-Mail Konto Information',
	'LBL_CASE_MACRO'		=> 'Fall Makro',
	'LBL_CASE_MACRO_DESC'	=> 'Setzen Sie das Makro, das verwendet wird, um importierte E-Mails zu Fällen zuzuweisen.',
	'LBL_CASE_MACRO_DESC2'	=> 'Setzen Sie einen beliebigen Wert, aber behalten Sie das <b>"%1"</b>."',
	'LBL_CERT_DESC'			=> 'Überprüfung des Mailserver Sicherheitszertifikats erzwingen - nicht verwenden, wenn selbst zertifiziert.',
	'LBL_CERT'				=> 'Zertifikat validieren',
	'LBL_CLOSE_POPUP'		=> 'abcdefg',
	'LBL_CREATE_NEW_GROUP'	=> '--Postfach Gruppe beim Speichern erzeugen--',
	'LBL_CREATE_TEMPLATE'	=> 'Erstellen',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Abonnieren von Ordnern',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Standard: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Standard: ',
	'LBL_DELETE_SEEN'		=> 'Gelesene E-Mails nach Import löschen',
	'LBL_EDIT_TEMPLATE'		=> 'Bearbeiten',
	'LBL_EMAIL_OPTIONS'		=> 'E-Mail Handhabungsoptionen',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Optionen für nicht zustellbare E-Mails',
	'LBL_FILTER_DOMAIN_DESC'=> 'Geben Sie eine Domain an, die keine automatischen Antworten verschickt werden.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Für die OptionFall erstellen" muss ein Gruppenordner ausgewählt werden.',
	'LBL_FILTER_DOMAIN'		=> 'Keine automatische Antwort an diese Domain',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Suche optimale Verbindungsvariablen.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Suche optimale Konfiguration',
	'LBL_FIND_SSL_WARN'		=> '<br>Der SSL Test kann einige Zeit dauern. Bitte haben Sie etwas Geduld.<br>',
	'LBL_FORCE_DESC'		=> 'Einige IMAP/POP3 Server benötigen spezielle Schalter. Bitte markieren, um eine negative Schaltung bei der Verbindung zu erzwingen (z.B. /notls)',
	'LBL_FORCE'				=> 'Erzwinge Negativ',
	'LBL_FOUND_MAILBOXES'	=> 'Folgende verwendbare Postfächer gefunden:<br>Klicken Sie auf eines, um es auszuwählen:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Optimale Einstellungen wurden gefunden. Drücken Sie auf die Schaltfläche unten, um diese für Ihr E-Mail Konto zu übernehmen.',
	'LBL_FROM_ADDR'			=> '"Von" Adresse"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Die E-Mail Adresse hier könnte aufgrund von Beschränkungen des E-Mail Anbieters nicht in derVON\" Zeile der E-Mail erscheinen. In diesem Fall wird die E-Mail Adresse verwendet, die im ausgehenden Mail Server definiert wurde.\"",
	'LBL_FROM_NAME_ADDR'	=> 'Von Name/E-Mail',
	'LBL_FROM_NAME'			=> '"Von" Name',
	'LBL_GROUP_QUEUE'		=> 'An Gruppe zuweisen',
    'LBL_HOME'              => 'Startseite',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Postfach Nutzung',
	'LBL_LIST_NAME'			=> 'Name:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Typ',
	'LBL_LIST_SERVER_URL'	=> 'Mail Server',
	'LBL_LIST_STATUS'		=> 'Status',
	'LBL_LOGIN'				=> 'Benutzername',
	'LBL_MAILBOX_DEFAULT'	=> 'POSTEINGANG',
	'LBL_MAILBOX_SSL_DESC'	=> 'SSL zum Verbinden benutzen. Sollte dies nicht funktionieren, prüfen Sie, ob Ihre PHP Installation--with-imap-ssl" in der Konfiguration beinhaltet."',
	'LBL_MAILBOX_SSL'		=> 'Verwende SSL',
	'LBL_MAILBOX_TYPE'		=> 'Mögliche Aktionen',
	'LBL_DISTRIBUTION_METHOD' => 'Verteilermethode',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Automatische Antwortvorlage für neuen Fall',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Erstellen Sie eine automatische Antwort, um den Sender zu informieren, dass ein Fall erstellt wurde. Diese E-Mail enthält die Fallnummer in der Betreffzeile, wie sie oben im Makro definiert wurde. Diese Antwort wird allerdings nur einmal pro Fall versendet.',
	'LBL_MAILBOX'			=> 'Überwachter Ordner',
	'LBL_TRASH_FOLDER'		=> 'Papierkorb Ordner',
	'LBL_GET_TRASH_FOLDER'	=> 'Papierkorb Ordner holen',
	'LBL_SENT_FOLDER'		=> 'Gesendete Objekte',
	'LBL_GET_SENT_FOLDER'	=> 'Gesendet Ordner holen',
	'LBL_SELECT'				=> 'Auswählen',
	'LBL_MARK_READ_DESC'	=> 'Nachrichten auf Server als gelesen markieren"',
	'LBL_MARK_READ_NO'		=> 'E-Mails werden nach dem Import als gelöscht markiert',
	'LBL_MARK_READ_YES'		=> 'Verbleibende E-Mail auf dem Server nach Import"',
	'LBL_MARK_READ'			=> 'Nachrichten auf Server lassen',
	'LBL_MAX_AUTO_REPLIES'	=> 'Anzahl der automatischen Antworten',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Setzen Sie die Maximalanzahl automatischer Antworten für eine eindeutige E-Mail Adresse innerhalb von 24 Stunden.',
	'LBL_PERSONAL_MODULE_NAME' => 'Persönliches E-Mail Konto',
	'LBL_CREATE_CASE'      => 'Fall aus E-Mail erstellen',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Gruppen E-Mail Konto',
	'LBL_BOUNCE_MODULE_NAME' => 'Postfach für nicht zustellbare E-Mails',
	'LBL_MODULE_TITLE'		=> 'Eingehende E-Mail',
	'LBL_NAME'				=> 'Name',
    'LBL_NONE'              => 'Kein(e)',
	'LBL_NO_OPTIMUMS'		=> 'Konnte Optimale Einstellungen nicht finden. Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es dann erneut.',
	'LBL_ONLY_SINCE_DESC'	=> 'PHP kann bei POP3 neue bzw. ungelesenen E-Mails nicht filtern. Setzen Sie diese Flag, um neue Mitteilungen seit der letzten Abfrage zu suchen. Dies erhöht die Performance erheblich, falls Ihr Mail Server kein IMAP unterstützt!',
	'LBL_ONLY_SINCE_NO'		=> 'Nein. Prüfe alle E-Mails auf dem Mailserver.',
	'LBL_ONLY_SINCE_YES'	=> '"Ja".',
	'LBL_ONLY_SINCE'		=> 'Importieren nur seit letztem Abruf:',
	'LBL_OUTBOUND_SERVER'	=> 'Ausgehende Mail Server',
	'LBL_PASSWORD_CHECK'	=> 'Überprüfung des Passworts',
	'LBL_PASSWORD'			=> 'Passwort',
	'LBL_POP3_SUCCESS'		=> 'Ihre POP3 Test Verbindung war erfolgreich.',
	'LBL_POPUP_FAILURE'		=> 'Testverbindung fehlerhaft. Der Fehler wird unten angezeigt.',
	'LBL_POPUP_SUCCESS'		=> 'Testverbindung erfolgreich. Ihre Einstellungen funktionieren.',
	'LBL_POPUP_TITLE'		=> 'Testeinstellungen',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Hole Ordnerliste',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Abonnierte(n) Ordner auswählen',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Papierkorb Ordner auswählen',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Ordner für gesendete Objekte auswählen',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Folgende(r) Ordner %s existieren nicht oder wurden gelöscht',
	'LBL_PORT'				=> 'Mail Server Port',
	'LBL_QUEUE'				=> 'E-Mail Konto Warteschlange',
	'LBL_REPLY_NAME_ADDR'	=> 'Antwort Name/E-Mail',
	'LBL_REPLY_TO_NAME'		=> '"Antwort an" Name"',
	'LBL_REPLY_TO_ADDR'		=> '"Antwort an" Adresse"',
	'LBL_SAME_AS_ABOVE'		=> 'Verwenden aus Name/Adresse',
	'LBL_SAVE_RAW'			=> 'Quellcode speichern',
	'LBL_SAVE_RAW_DESC_1'	=> 'Wählen SieJa" wenn Sie den Quellcode für jede importierte E-Mail behalten wollen."',
	'LBL_SAVE_RAW_DESC_2'	=> 'Große Anhänge können bei konservativ oder nicht korrekt konfigurierten Datenbanken zu Fehlern führen.',
	'LBL_SERVER_OPTIONS'	=> 'Erweiterte Einstellungen',
	'LBL_SERVER_TYPE'		=> 'Mail Server Protokoll',
	'LBL_SERVER_URL'		=> 'Mail Server Adresse',
	'LBL_SSL_DESC'			=> 'Wenn Ihr Mail Server SSL Verbindungen unterstützt, werden beim Import der E-Mails SSL Verbindungen erzwungen.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Das gewählte Team hat Zugriff auf das Konto',
	'LBL_SSL'				=> 'Verwende SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Systemvorgabe',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test',
	'LBL_TEST_SETTINGS'		=> 'Testeinstellungen',
	'LBL_TEST_SUCCESSFUL'	=> 'Verbindung erfolgreich hergestellt.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Einen Moment bitte...',
	'LBL_TLS_DESC'			=> 'Verwende TLS beim Verbinden zum Mailserver - verwenden Sie dies nur, wenn Ihr Mailserver dieses Protokoll unterstützt.',
	'LBL_TLS'				=> 'Verwende TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Eingehende E-Mails deaktiviert',
	'LBL_WARN_IMAP'			=> 'Warnungen:',
	'LBL_WARN_NO_IMAP'		=> 'Eingehende E-Mail <b>kann nicht</b> funktionieren, ohne dass die IMAP c-client libraries im  PHP module integriert/aktiviert wurden. Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems.',

	'LNK_CREATE_GROUP'		=> 'Neue Gruppe',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Neues Gruppen E-Mail Konto',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'NeuesNicht zustellbar" Konto"',
	'LNK_LIST_MAILBOXES'	=> 'Alle E-Mail Konten',
	'LNK_LIST_QUEUES'		=> 'Alle Warteschlangen',
	'LNK_LIST_SCHEDULER'	=> 'Geplante Aufgaben',
	'LNK_LIST_TEST_IMPORT'	=> 'E-Mail Import testen',
	'LNK_NEW_QUEUES'		=> 'Neue Warteschlange',
	'LNK_SEED_QUEUES'		=> 'Warteschlangen der Teams',
	'LBL_GROUPFOLDER_ID'	=> 'Gruppenordner ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'An Gruppenordner zuweisen',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Benutzern erlauben, denVon" Namen / E-Mail Adresse als die Antworte an" Adresse zu verwenden?"',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Wenn diese Option ausgewählt wurde, dann erscheint für berechtigte Benutzer beim Verfassen einer E-Mail derVon" Name und dieVon" E-Mail Adresse des Gruppenkontos als Option imVon" Feld."',
    'LBL_STATUS_ACTIVE'     => 'Aktiv',
    'LBL_STATUS_INACTIVE'   => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'Gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatisches Importieren von E-Mails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warnung: Sie verändern Ihre automatischen Importeinstellungen. Dies kann zu Datenverlust führen.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warnung: Auto Import muss aktiviert sein, wenn Fälle automatisch erstellt werden sollen.',
	'LBL_EDIT_LAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
);
?>
