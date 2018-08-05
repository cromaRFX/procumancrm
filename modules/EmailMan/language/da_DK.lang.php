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
	'LBL_SEND_DATE_TIME'						=> 'Send dato',
	'LBL_IN_QUEUE'								=> 'I Kø?',
	'LBL_IN_QUEUE_DATE'							=> 'I kø dato',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Du skal angive et tal',

	'LBL_ATTACHMENT_AUDIT'						=> ' blev sendt.  Blev ikke kopieret lokalt for at spare plads.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigureret',
	'LBL_CUSTOM_LOCATION'						=> 'Brugerdefineret',
	'LBL_DEFAULT_LOCATION'						=> 'Standard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Tilføj Disclosure meddelelse til hver email',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Disclosure indhold',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'BEMÆRK! Denne e-mail er alene til brug for den eller de tilsigtede modtagere og kan indeholde fortrolige og beskyttede oplysninger. Uautoriseret gennemgang, brug, videregivelse eller distribution er forbudt. Hvis du ikke er den tilsigtede modtager, skal du destruere alle kopier af den oprindelige meddelelse og underrette afsenderen, så vores adressepost kan blive korrigeret. På forhånd tak.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Sammensæt email meddelelser med dette tegnsæt',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Sammensæt email med denne klient',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Slet relaterede noter & vedhæftede filer når emails slettes',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Prefill Gmail Standarder',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Antal emails sendt pr batch:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Tillad SMTP over SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Bruger Email standarder',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Konfiguration af udgående e-mail',
	'LBL_EMAILS_PER_RUN'						=> 'Antal emails sendt pr batch:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Kampagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Behandlet',
	'LBL_LIST_FORM_TITLE'						=> 'Kø',
	'LBL_LIST_FROM_EMAIL'						=> 'Fra email',
	'LBL_LIST_FROM_NAME'						=> 'Fra navn',
	'LBL_LIST_IN_QUEUE'							=> 'Behandles',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing meddelelse',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Modtager email',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Modtager navn',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Antal send forsøg',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Send til',
	'LBL_LIST_USER_NAME'						=> 'Brugernavn',
	'LBL_LOCATION_ONLY'							=> 'Placering',
	'LBL_LOCATION_TRACK'						=> 'Placering af kampagne tracking filer (f.eks campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Behold kopier af kampagne meddelelser:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Ønsker du å lagre ferdige kopier av <bold> e-postmelding sendt under alle kampanjene? <bold> Vi anbefaler og standard til nei </bold>. Ved å velge nei, vil kun de sendte malene, og de nødvendige variabler for å gjenskape den enkelte melding lagres.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent for e-post overføring',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Brug SMTP Authentication?',
	'LBL_MAIL_SMTPPASS'							=> 'SMTP Adgangskode:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP-port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Server:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTP Brugernavn:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Vælg din e-mail-udbyder',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail adgangskode',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail adgangskode',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail e-mail-adresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange adgangskode',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange brugernavn',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-mail-klient',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing Id',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Email indstillinger',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurer kampagne e-mail-indstillinger',
	'LBL_MODULE_TITLE'							=> 'Outbound Email Kø Management',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Sender notifikation emails når opgave tildelses.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Fra" adresse:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Fra" navn:',
	'LBL_NOTIFY_ON'								=> 'Notifikationer til?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Send notifikationer som standard for nye brugere?',
	'LBL_NOTIFY_TITLE'							=> 'Email Notifikation Optioner',
	'LBL_OLD_ID'								=> 'Gl Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Outbound Email Optioner',
	'LBL_RELATED_ID'							=> 'Relateret Id',
	'LBL_RELATED_TYPE'							=> 'Relateret Type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Gem Outbound Raw Emails',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Behandlet Søg',
	'LBL_SEARCH_FORM_TITLE'						=> 'Kø Søgning',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Se behandlet emails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Se emails i kø',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Værdi af Config.php af site_url',
	'TXT_REMOVE_ME_ALT'							=> 'For at slette dig selv fra denne email liste. Gå til',
	'TXT_REMOVE_ME_CLICK'						=> 'Klik her',
	'TXT_REMOVE_ME'								=> 'For at slette dig selv fra denne email liste ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Send notifikation fra tildelingsbrugers email adresse?',

	'LBL_SECURITY_TITLE'						=> 'Email sikkerhedsindstilling',
	'LBL_SECURITY_DESC'							=> 'Kontrollér følgende, som IKKE må være tilladt i via InboundEmail eller vises i modulet E-mails.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Form tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Vælg Outlooks standard minimumsikkerhedsindstillinger (fejl i siden af korrekt visning)',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Toggle All Options',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nej',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Antal send forsøg',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurer den udgående standard-e-mail-server til at sende e-mail-meddelelser, herunder arbejdsgangbeskeder.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Tillad at brugerne bruger denne konto til udgående e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Når denne indstilling er valgt, kan alle brugere sende e-mails ved hjælp af den samme udgående <br>e-mail-konto, som bruges til at sende systemmeddelelser og -beskeder. Hvis indstillingen ikke er valgt,<br> kan brugerne stadig bruge den udgående e-mail-server, når de har angivet deres kontooplysninger.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Når aktiveret, vil den tildelte brugers navn og email adresse være inkluderet i Fra felter i emailen. Denne funktion vil muligvis ikke virke på SMTP servere som ikke tillader afsendelse fra en anden email konto end server kontoen.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hjælp' /*for 508 compliance fix*/,
);

?>