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


	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Username of wachtwoord incorrect.',
	'ERR_BODY_TOO_LONG'		=> '\rBody tekst te lang voor FULL commando. Getrimd.',
	'ERR_INI_ZLIB'			=> 'Kon Zlib niet tijdelijk uitschakelen. "Test instellingen" zal wellicht niet werken.',
	'ERR_MAILBOX_FAIL'		=> 'Het is niet mogelijk om mailboxen te onvangen',
	'ERR_NO_IMAP'			=> 'Geen IMAP libraries gevonde. Los dit probleem op voordat u doorgaat met ingaande e-mail.',
	'ERR_NO_OPTS_SAVED'		=> 'Er zijn geen optimale instellingen gevonden voor uw inkomende e-mail. Controleer aub uw instellingen.',
	'ERR_TEST_MAILBOX'		=> 'Controleer je instellingen en probeer het nog eens.',

	'LBL_APPLY_OPTIMUMS'	=> 'Pas optimale instellingen toe',
	'LBL_ASSIGN_TO_USER'	=> 'Toewijzen aan gebruiker',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opties automatisch beantwoorden',
	'LBL_AUTOREPLY'			=> 'Automatisch beantwoorden template',
	'LBL_AUTOREPLY_HELP'	=> 'Selecteer een automatisch antwoord om e-mail afzenders te informeren dat hun reactie is ontvangen.',
	'LBL_BASIC'				=> 'Standaard setup',
	'LBL_CASE_MACRO'		=> 'Case macro',
	'LBL_CASE_MACRO_DESC'	=> 'Set the macro which will be parsed and used to link imported email to a Case.',
	'LBL_CASE_MACRO_DESC2'	=> 'Set this to any value, but preserve the <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Forceer validatie van het Security Certificaat van de mailserver.',
	'LBL_CERT'				=> 'Valideer certificaat',
	'LBL_CLOSE_POPUP'		=> 'Sluit venster',
	'LBL_CREATE_NEW_GROUP'	=> '---Maak e-mailbox groep aan bij opslaan---',
	'LBL_CREATE_TEMPLATE'	=> 'Nieuw',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Abonneren op mappen',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Standaard: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Standaard: ',
	'LBL_DELETE_SEEN'		=> 'Verwijder gelezen e-mails na importeren',
	'LBL_EDIT_TEMPLATE'		=> 'Wijzigen',
	'LBL_EMAIL_OPTIONS'		=> 'E-mail beheer opties',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounceverwerking Opties',
	'LBL_FILTER_DOMAIN_DESC'=> 'Stuur geen automatische replies naar dit domein.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Selecteer automatisch om e-mail records aan te maken in SuiteCRM voor alle inkomende e-mails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Om "Maak case" te kunnen gebruiken moet er een groepsmap worden geselecteerd',
	'LBL_FILTER_DOMAIN'		=> 'Geen automatische reply naar domein',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Zoek optimale verbindingsinstellingen',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Zoek optimale configuratie',
	'LBL_FIND_SSL_WARN'		=> '<br> Het testen van SSL kan lang duren. Wees geduldig. <br>',
	'LBL_FORCE_DESC'		=> 'Sommige IMAP/POP3 servers hebben speciale instellingen nodig. Selecteer deze optie om deze te forceren. ( /notls)',
	'LBL_FORCE'				=> 'Forceer negatief',
	'LBL_FOUND_MAILBOXES'	=> 'De volgende bruikbare mappen zijn gevonden. <br> Klik om een te kiezen:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br> Optimale instellingen gevonden. Druk op de onderstaande knop om ze toe te passen op uw e-mailaccount.',
	'LBL_FROM_ADDR'			=> '\'Van\' adres',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Het hier opgegeven e-mailadres wordt mogelijk niet getoond in het \"Van\"-adres veld van de verstuurde e-mail vanwege opgelegde beperkingen door de e-mail service provider. Indien dit het geval is, zal het e-mailadres dat is geconfigureerd in de uitgaande mailserver instellingen worden gebruikt.",
	'LBL_FROM_NAME_ADDR'	=> 'Afzender naam/e-mail',
	'LBL_FROM_NAME'			=> '\'Van\' naam',
	'LBL_GROUP_QUEUE'		=> 'Wijs toe aan group',
    'LBL_HOME'              => 'Start',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Mailbox gebruik',
	'LBL_LIST_NAME'			=> 'Naam:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Groep/Persoonlijk',
	'LBL_LIST_SERVER_URL'	=> 'E-mail server:',
	'LBL_LIST_STATUS'		=> 'Status:',
	'LBL_LOGIN'				=> 'Gebruikersnaam',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Gebruik SSL om verbinding te maken. Als dit niet werkt, controleer dat je PHP installatie \'--with-imap-ssl\' in de configuratie heeft staan.',
	'LBL_MAILBOX_SSL'		=> 'Gebruik SSL',
	'LBL_MAILBOX_TYPE'		=> 'Mogelijke acties',
	'LBL_DISTRIBUTION_METHOD' => 'Distributie methode',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Maak Verzoek antwoord template',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecteer een automatisch antwoord voor e-mail afzenders om deze te informeren dat een klacht is aangemaakt. De e-mail bevat het nummer van de klacht in de onderwerpregel die overeenkomt met de klachten Macro. Deze reactie wordt alleen verzonden bij de eerste e-mail van de ontvanger.',
	'LBL_MAILBOX'			=> 'Gevolgde map',
	'LBL_TRASH_FOLDER'		=> 'Prullenbak map',
	'LBL_GET_TRASH_FOLDER'	=> 'Verkrijg Prullenbak map',
	'LBL_SENT_FOLDER'		=> 'Verzonden items map',
	'LBL_GET_SENT_FOLDER'	=> 'Verkrijg Verzonden items map',
	'LBL_SELECT'				=> 'Selecteer',
	'LBL_MARK_READ_DESC'	=> 'Markeer berichten als gelezen tijdens de import, niet verwijderen.',
	'LBL_MARK_READ_NO'		=> 'E-mail verwijderen na de import',
	'LBL_MARK_READ_YES'		=> 'E-mail op de server laten staan na de import',
	'LBL_MARK_READ'			=> 'Laat berichten op de server staan',
	'LBL_MAX_AUTO_REPLIES'	=> 'Aantal auto responses',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Stel het maximale aantal auto responses in dat in 24 uur naar een adres wordt gestuurd.',
	'LBL_PERSONAL_MODULE_NAME' => 'Persoonlijke e-mailaccount',
	'LBL_CREATE_CASE'      => 'Maak klacht van e-mail',
	'LBL_CREATE_CASE_HELP'  => 'Selecteer deze optie om automatisch records aan te maken in SuiteCRM van inkomende e-mails.',
	'LBL_MODULE_NAME'		=> 'Inkomende e-mail instellingen',
	'LBL_BOUNCE_MODULE_NAME' => 'Bounceverwerking Mailbox',
	'LBL_MODULE_TITLE'		=> 'Inkomende e-mail',
	'LBL_NAME'				=> 'Naam',
    'LBL_NONE'              => 'geen',
	'LBL_NO_OPTIMUMS'		=> 'Kon het geen optimale instelling vinden Controleer uw instellingen en probeer het opnieuw.',
	'LBL_ONLY_SINCE_DESC'	=> 'Als je POP3 gebruikt kan PHP niet filteren op nieuwe/ongelezen berichten.Deze instelling zorgt ervoor dat alleen hoeft worden gekeken naar nieuwe berichten sinds de laatste keer dat de externe mailbox is uitgevraagd. Dit zorgt voor een significante verbetering in performance als je server geen IMAP ondersteund.',
	'LBL_ONLY_SINCE_NO'		=> 'Nee, Check tegen alle e-mails op de mailserver.',
	'LBL_ONLY_SINCE_YES'	=> 'Ja',
	'LBL_ONLY_SINCE'		=> 'Importeer alleen de e-mail sinds de laatste check:',
	'LBL_OUTBOUND_SERVER'	=> 'Uitgaande e-mail server',
	'LBL_PASSWORD_CHECK'	=> 'Wachtwoord controle',
	'LBL_PASSWORD'			=> 'Wachtwoord',
	'LBL_POP3_SUCCESS'		=> 'Uw POP3-test verbinding was succesvol.',
	'LBL_POPUP_FAILURE'		=> 'De testverbinding kon niet tot stand worden gebracht. De foutmelding staat hieronder weergegeven.',
	'LBL_POPUP_SUCCESS'		=> 'De testverbinding is sucsesvol. Je instellingen werken prima.',
	'LBL_POPUP_TITLE'		=> 'Test instellingen',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Mappen lijst verkrijgen',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Selecter geabonneerde mappen',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Selecteer prullenbak map',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Select verzonden items map',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'De volgende map(pen) %s bestaat niet of is verwijderd van de server.',
	'LBL_PORT'				=> 'E-mail server poort',
	'LBL_QUEUE'				=> 'E-mailbox wachtrij',
	'LBL_REPLY_NAME_ADDR'	=> 'Beantwoord naam/adres',
	'LBL_REPLY_TO_NAME'		=> '"Reply-to" naam',
	'LBL_REPLY_TO_ADDR'		=> '"Reply-to" adres',
	'LBL_SAME_AS_ABOVE'		=> 'Gebruik van naam/adres',
	'LBL_SAVE_RAW'			=> 'Sla RAW e-mail op',
	'LBL_SAVE_RAW_DESC_1'	=> 'Selecteer Ja als u van elke e-mail de rauwe bron op wilt slaan.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Grote attachments kunnen problemen veroorzaken met conservatief ingestelde databases.',
	'LBL_SERVER_OPTIONS'	=> 'Geavanceerde instellingen',
	'LBL_SERVER_TYPE'		=> 'E-mail server protocol',
	'LBL_SERVER_URL'		=> 'E-mail server adres',
	'LBL_SSL_DESC'			=> 'Activeer deze instelling als je Mailserver authenticatie ondersteund en je SSL connecties wilt gebruiken voor het importeren van E-mail.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Het geselecteerde team heeft toegang tot de e-mailaccount. Als er een groepsmap wordt geselecteerd, dan heeft het team dat bij die groepsmap hoort toegang.',
	'LBL_SSL'				=> 'Gebruik SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Standaardinstelling',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [ALT+T]',
	'LBL_TEST_SETTINGS'		=> 'Test instellingen',
	'LBL_TEST_SUCCESSFUL'	=> 'Verbinding met e-mailserver succesvol!',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Even geduld aub...',
	'LBL_TLS_DESC'			=> 'Gebruik Transport Layer Security (TLS) om verbinding te maken met de mailserver. Gebruik dit alleen als de maildserver dit protocol ondersteunt.',
	'LBL_TLS'				=> 'Gebruik TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Inkomende e-mail uitgeschakeld',
	'LBL_WARN_IMAP'			=> 'Waarschuwingen:',
	'LBL_WARN_NO_IMAP'		=> 'Inkomende e-mail kan <b>niet</b> funtioneren zonder PHP IMAP ondersteuning.',

	'LNK_CREATE_GROUP'		=> 'Nieuwe groep',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nieuwe Groep Mail-account',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nieuwe bounceverwerking account',
	'LNK_LIST_MAILBOXES'	=> 'Alle e-mailboxen',
	'LNK_LIST_QUEUES'		=> 'Alle wachtrijen',
	'LNK_LIST_SCHEDULER'	=> 'Taakplanners',
	'LNK_LIST_TEST_IMPORT'	=> 'Test e-mail import',
	'LNK_NEW_QUEUES'		=> 'Nieuwe wachtrij',
	'LNK_SEED_QUEUES'		=> 'Vul de wachtrij van teams',
	'LBL_GROUPFOLDER_ID'	=> 'Groepmap ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Toewijzen aan groepmap',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Stel gebruikers in staat om e-mails te versturen met het \\"Van\\" Naam en adres als antwoord-adres.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Als deze optie is geselecteerd, zal de Van naam en van E-mail Adres van dit groeps mailaccount als optie verschijnen voor het \\"Van\\" veld bij de aanmaak van e-mails voor gebruikers die toegang hebben tot de groep mailaccount hebben.',
    'LBL_STATUS_ACTIVE'     => 'Actief',
    'LBL_STATUS_INACTIVE'   => 'Inactief',
    'LBL_IS_PERSONAL' => 'Persoonlijk',
    'LBL_IS_GROUP' => 'groep',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatisch e-mails importeren',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Waarschuwing: U bent uw automatische import instelling aan het aanpassen dit kan leiden tot gegevensverlies.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Waarschuwing: Auto import moet zijn ingeschakeld voor het automatisch aanmaken van klachten.',
	'LBL_EDIT_LAYOUT' => 'Bewerk lay-out' /*for 508 compliance fix*/,
);
?>
