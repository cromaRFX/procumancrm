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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Sendungsdatum',
	'LBL_IN_QUEUE'								=> 'Wird bearbeitet',
	'LBL_IN_QUEUE_DATE'							=> 'Datum Warteschlange',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Nur Ganzzahlwerte zulässig für E-Mail Anzahl pro Stapel',

	'LBL_ATTACHMENT_AUDIT'						=> 'wurde gesendet. Um Speicher zu sparen, wurde keine lokale Kopie erstellt.',
	'LBL_CONFIGURE_SETTINGS'					=> 'E-Mail Einstellungen konfigurieren',
	'LBL_CUSTOM_LOCATION'						=> 'Benutzerdefiniert',
	'LBL_DEFAULT_LOCATION'						=> 'Standard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Vertraulichkeitshinweis an jede E-Mail anhängen',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Inhaltsoffenlegung',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'HINWEIS: Diese E-Mail sowie angehängte Anlagen sind vertraulich und nur für die benannte Person oder Firma bestimmt. Sollten Sie dieses E-Mail irrtümlicherweise erhalten haben, benachrichtigen Sie bitte den Absender und vernichten sie den Inhalt der E-Mail inklusive Anlagen von Ihrem System. Vielen Dank.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'E-Mail Nachrichten mit diesem Zeichensatz erstellen',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'E-Mail Nachrichten mit diesem Kunden erstellen',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Verknüpfte Notizen und Anhänge mit den E-Mails löschen',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Mit GMail Standardwerten füllen',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Anzahl Mails gesendet pro Stapel:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SMTP über SSL aktivieren?',
	'LBL_EMAIL_USER_TITLE'						=> 'Standardeinstellungen Benutzer-Email',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Ausgehende E-Mail Einstellungen',
	'LBL_EMAILS_PER_RUN'						=> 'Anzahl gesendeter E-Mails pro Stapel:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Verarbeitet',
	'LBL_LIST_FORM_TITLE'						=> 'Warteschlange',
	'LBL_LIST_FROM_EMAIL'						=> 'Von E-Mail',
	'LBL_LIST_FROM_NAME'						=> 'Von Name',
	'LBL_LIST_IN_QUEUE'							=> 'Wird bearbeitet',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing Nachricht',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Empfänger E-Mail',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Empfänger Name',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Sendungsversuche',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Senden Ein',
	'LBL_LIST_USER_NAME'						=> 'Benutzername',
	'LBL_LOCATION_ONLY'							=> 'Ort',
	'LBL_LOCATION_TRACK'						=> 'Speicherort der Kampagnentracking-Dateien (z.B. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Kopien der Kampagnen-Nachrichten behalten:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Wollen Sie den kompletten Text <bold>ALLER</bold> gesendeten E-Mails für alle Kampagnen speichern? <bold>Wird nicht empfohlen (Standard)</bold>. Wählen Sie Nein, um nur die Vorlage und die notwendigen Parameter zu speichern, damit individuelle Nachricht wiedergeherstellt werden können.',
	'LBL_MAIL_SENDTYPE'							=> 'E-Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP Authentifizierung verwenden:',
	'LBL_MAIL_SMTPPASS'							=> 'Passwort:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Mail Server:',
	'LBL_MAIL_SMTPUSER'							=> 'Benutzername:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Wählen Sie Ihren E-Mail Anbieter',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Passwort:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Passwort',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail E-Mail Adresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Passwort',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Benutzername',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-Mail Kunde',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing ID',
    'LBL_MODULE_ID'                             => 'Modul ID',
	'LBL_MODULE_NAME'							=> 'E-Mail Einstellungen',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Kampagnen E-Mail Einstellungen konfigurieren',
	'LBL_MODULE_TITLE'							=> 'Verwaltung der Warteschlange ausgehender E-Mails',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Bei Aktivierung werden E-Mails an Benutzer versandt, wenn diesen Daten zugewiesen sind.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Von" Adresse:"',
	'LBL_NOTIFY_FROMNAME' 						=> '"Von" Name:',
	'LBL_NOTIFY_ON'								=> 'Benachrichtigung über Zuweisung',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Benachrichtigung für neue Benutzer senden',
	'LBL_NOTIFY_TITLE'							=> 'E-Mail Optionen',
	'LBL_OLD_ID'								=> 'Alte Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Ausgehende E-Mail Optionen',
	'LBL_RELATED_ID'							=> 'Verknüpfte ID',
	'LBL_RELATED_TYPE'							=> 'Verknüpfter Typ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Ausgehende E-Mails als Quelltext speichern',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Verarbeitet Suche',
	'LBL_SEARCH_FORM_TITLE'						=> 'Warteschlange suchen',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Verarbeitete E-Mail Nachrichten anzeigen',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'E-Mail Warteschlange anzeigen',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Wert von site_url in config.php ',
	'TXT_REMOVE_ME_ALT'							=> 'Um sich von der E-Mail Liste abzumelden, gehen Sie zu',
	'TXT_REMOVE_ME_CLICK'						=> 'hier klicken',
	'TXT_REMOVE_ME'								=> 'Um sich von der E-Mail Liste abzumelden',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Benachrichtigung von der E-Mail Adresse des zuweisenden Benutzers senden',

	'LBL_SECURITY_TITLE'						=> 'E-Mail Sicherheitseinstellungen',
	'LBL_SECURITY_DESC'							=> 'Wählen Sie, was bei eingehenden E-Mails NICHT erlaubt bzw. im E-Mail Modul angezeigt werden soll.',
	'LBL_SECURITY_APPLET'						=> 'Applet Tag',
	'LBL_SECURITY_BASE'							=> 'Base Tag',
	'LBL_SECURITY_EMBED'						=> 'Embed Tag',
	'LBL_SECURITY_FORM'							=> 'Form Tag',
	'LBL_SECURITY_FRAME'						=> 'Frame Tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset Tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame Tag',
	'LBL_SECURITY_IMPORT'						=> 'Import Tag',
	'LBL_SECURITY_LAYER'						=> 'Layer Tag',
	'LBL_SECURITY_LINK'							=> 'Link Tag',
	'LBL_SECURITY_OBJECT'						=> 'Objekt Tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Wählen Sie den Wert ‚minimale Sicherheitseinstellungen‘ in Outlook ',
	'LBL_SECURITY_SCRIPT'						=> 'Script Tag',
	'LBL_SECURITY_STYLE'						=> 'Stil Tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Alle Optionen umschalten',
	'LBL_SECURITY_XMP'							=> 'Xmp Tag',
    'LBL_YES'                                   => '"Ja"',
    'LBL_NO'                                    => 'Nr.',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Sendungsversuche',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurieren Sie den Standard Mail Server (SMTP) zum Senden von E-Mail und/oder Workflow Benachrichtigungen.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Benutzern erlauben, dieses Konto für ausgehende E-Mails zu verwenden:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Wenn diese Option gewählt wurde, können alle Benutzer E-Mails über dieses <br> Email-Konto senden, das für Systembenachrichtigungen eingerichtet wurde. Wenn diese Option nicht ausgewählt ist,<br> können Benutzer trotzdem E-Mails über ihre selbst konfigurierten Mail Server versenden, nachdem sie ihre Kontoinformationen bereitgestellt haben.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Wenn aktiviert, wird der Name und die E-Mail Adresse des zuweisenden Benutzers im Von Feld der E-Mail angezeigt. Allerdings kann es sein, dass diese Einstellung keine Wirkung hat, wenn der SMTP Server keine Von Adressen zulässt, die von der Server Adresse abweichen.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo! Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hilfe' /*for 508 compliance fix*/,
);

?>