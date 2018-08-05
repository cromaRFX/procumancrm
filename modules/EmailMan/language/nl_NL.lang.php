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
	'LBL_SEND_DATE_TIME'						=> 'Verzend datum',
	'LBL_IN_QUEUE'								=> 'In wachtrij?',
	'LBL_IN_QUEUE_DATE'							=> 'In wachtrij sinds',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Gebruik alleen een geheel om het \'aantal E-mails per pakket\' aan te geven.',

	'LBL_ATTACHMENT_AUDIT'						=> ' is verzonden. Het is lokaal niet gekopieerd om hardeschijf ruimte te besparen.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configureer',
	'LBL_CUSTOM_LOCATION'						=> 'Zelfgedefinieerd',
	'LBL_DEFAULT_LOCATION'						=> 'Standaard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Voeg disclosure bericht toe aan elke e-mail',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Disclosure bericht',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'NOTICE: This email message is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use, disclosure, or distribution is prohibited. If you are not the intended recipient, please destroy all copies of the original message and notify the sender so that our address record can be corrected. Thank you.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'E-mail opstellen in deze karakterset',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'E-mail opstellen in deze client',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Verwijder gerelateerde notities en attachments bij het verwijdern van een e-mail',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail waarden invullen',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Aantal e-mails verstuurd per pakket:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SSL over SMTP inschakelen',
	'LBL_EMAIL_USER_TITLE'						=> 'Gebruiker e-mail standaardinstellingen',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Uitgaande mail configuratie',
	'LBL_EMAILS_PER_RUN'						=> 'Aantal e-mails verstuurd per pakket:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campagnes',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Verwerkt',
	'LBL_LIST_FORM_TITLE'						=> 'Wachtrij',
	'LBL_LIST_FROM_EMAIL'						=> 'E-mail afzender',
	'LBL_LIST_FROM_NAME'						=> 'From name',
	'LBL_LIST_IN_QUEUE'							=> 'In behandeling',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing bericht',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'E-mail ontvanger',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Naam ontvanger',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Verzendpogingen',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Verstuur op',
	'LBL_LIST_USER_NAME'						=> 'Gebruikersnaam',
	'LBL_LOCATION_ONLY'							=> 'Locatie',
	'LBL_LOCATION_TRACK'						=> 'Locatie van de Campagne tracking bestanden (bijvoorbeeld campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Behoud kopieen van campagne berichten',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Wilt u complete kopien van <bold>ELKE</bold> verstuurde e-mail opslaan? <bold>We raden dit af</bold>. Als u nee kiest, wordt de template met variabelen WEL opgeslagen.',
	'LBL_MAIL_SENDTYPE'							=> 'E-mail transfer agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Gebruik SMTP authenticatie?',
	'LBL_MAIL_SMTPPASS'							=> 'SMTP wachtwoord:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP poort:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP server:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTP gebruikersnaam:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Kies uw e-mailprovider',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo Mail wachtwoord',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail-wachtwoord',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail email adres',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange-wachtwoord',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Gebruikersnaam',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-mail client',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Stuur e-mails met behulp van de e-mail client in de SuiteCRM toepassing. <br> <b>Externe e-mailclient:</b> Stuur een email met behulp van een e-mail client buiten de SuiteCRM toepassing, zoals Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing ID',
    'LBL_MODULE_ID'                             => 'E-mailBeheer',
	'LBL_MODULE_NAME'							=> 'Email settings',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configureer campagne e-mailinstellingen',
	'LBL_MODULE_TITLE'							=> 'Uitgaande e-mail wachtrij management',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Verzend notificatie emails wanneer records zijn toegewezen.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '\'Van\' adres:',
	'LBL_NOTIFY_FROMNAME' 						=> '\'Van\' naam:',
	'LBL_NOTIFY_ON'								=> 'Notificaties aan?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Stuur aanmeldingen aan nieuwe gebruikers',
	'LBL_NOTIFY_TITLE'							=> 'E-mail notificatie opties',
	'LBL_OLD_ID'								=> 'Oude ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Uitgaande e-mail opties',
	'LBL_RELATED_ID'							=> 'Gerelateerd ID',
	'LBL_RELATED_TYPE'							=> 'Gerelateerd Type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Sla RAW uitgaande e-mail op',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Zoektocht voltooid',
	'LBL_SEARCH_FORM_TITLE'						=> 'Zoektocht in Wachtrij',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Bekijk Verwerkte E-mails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Bekijk de E-mail in de Wachtrij',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Waarde van config.php instelling site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Om jezelf af te melden van deze E-maillijst ga naar',
	'TXT_REMOVE_ME_CLICK'						=> 'klik hier',
	'TXT_REMOVE_ME'								=> 'Om jezelf af te melden van deze E-maillijst ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Verzend notificatie e-mails vanuit e-mailadres van de toewijzende gebruiker?',

	'LBL_SECURITY_TITLE'						=> 'E-mail beveiligings instellingen',
	'LBL_SECURITY_DESC'							=> 'Vink aan wat NIET toegestaan is bij inkomende e-mails of de e-mail manager.',
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
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Selecteer minimum voorzorgsmaatregelen van MS Outlook (aangaande het weergeven van e-mails)',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Schakel allemaal',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nee',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Verstuur pogingen',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configureren de standaard uitgaande mail server voor het verzenden van e-mailberichten notificaties, inclusief workflow waarschuwingen.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Stel gebruikers in staat om dit account te gebruiken voor uitgaande e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Wanneer deze optie is geselecteerd, zullen alle gebruikers in staat zijn om e-mails verzenden met behulp van hetzelfde uitgaande mailaccount dat gebruikt wordt door het systeem voor het verzenden van notificaties en meldingen. Als de optie niet is geselecteerd,  kunnen gebruikers de uitgaande mailserver nog steeds gebruiken nadat zij hun eigen account informatie hebben ingegeven.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Wanneer ingeschakeld, zal de toekennende gebruiker\\\'s naam en e-mail adres worden opgenomen in het van-veld van de e-mail.  Deze functie werkt mogelijk niet met SMTP-servers die niet toestaan te verzenden vanuit een ander e-mailaccount dan die van het server account.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
);

?>