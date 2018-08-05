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


	'LBL_RE'					=> 'SV:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Brugernavn eller adgangskode er forkert',
	'ERR_BODY_TOO_LONG'		=> '\rBrødteksten er for lang til at fange hele e-mailen. Trimmes.',
	'ERR_INI_ZLIB'			=> '"Zlib-komprimeringen kunne ikke slukkes midlertidigt. ""Testindstillinger"" kan fejle."',
	'ERR_MAILBOX_FAIL'		=> 'Ingen e-mail-konti kunne hentes.',
	'ERR_NO_IMAP'			=> 'Ingen IMAP-biblioteker blev fundet. Løs dette problem, før du fortsætter med Indgående e-mail',
	'ERR_NO_OPTS_SAVED'		=> 'Ingen optimale blev gemt med din konto Indgående e-mail. Gennemgå indstillingerne.',
	'ERR_TEST_MAILBOX'		=> 'Kontrollér dine indstillinger, og prøv igen.',

	'LBL_APPLY_OPTIMUMS'	=> 'Anvend optimale',
	'LBL_ASSIGN_TO_USER'	=> 'Tildel til bruger',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Indstillinger for automatiske svar',
	'LBL_AUTOREPLY'			=> 'Skabelon til automatiske svar',
	'LBL_AUTOREPLY_HELP'	=> 'Vælg et automatisk svar for at give e-mail-afsendere besked om, at deres svar er modtaget.',
	'LBL_BASIC'				=> 'Oplysninger om e-mail-konto',
	'LBL_CASE_MACRO'		=> 'Sagsmakro',
	'LBL_CASE_MACRO_DESC'	=> 'Indstil den makro, der skal analyseres og bruges til at oprette link til importeret e-mail til en sag.',
	'LBL_CASE_MACRO_DESC2'	=> '"Angiv dette til en værdi, men bevar <b>""%1""</b>."',
	'LBL_CERT_DESC'			=> 'Gennemtving validering af e-mail-serverens sikkerhedscertifikat - må ikke anvendes ved egensignering.',
	'LBL_CERT'				=> 'Valider certifikat',
	'LBL_CLOSE_POPUP'		=> 'Luk vindue',
	'LBL_CREATE_NEW_GROUP'	=> '- Opret gruppe ved Gem -',
	'LBL_CREATE_TEMPLATE'	=> 'Opret',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Abonner på mapper',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Standard:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Standard:',
	'LBL_DELETE_SEEN'		=> 'Slet læste e-mails efter import',
	'LBL_EDIT_TEMPLATE'		=> 'Rediger',
	'LBL_EMAIL_OPTIONS'		=> 'Indstillinger for e-mail-håndtering',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Indstillinger for afvisningshåndtering',
	'LBL_FILTER_DOMAIN_DESC'=> 'Undlad at sende automatiske svar til dette domæne.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Til indstillingen Opret sag skal der vælges en gruppemappe',
	'LBL_FILTER_DOMAIN'		=> 'Ingen automatiske svar til dette domæne',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Finder optimale forbindelsesvariabler.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Find den optimale konfiguration',
	'LBL_FIND_SSL_WARN'		=> '<br>Test af SSL kan tage lang tid. Vær tålmodig.<br>',
	'LBL_FORCE_DESC'		=> 'Nogle IMAP/POP3-servere kræver særlige parametre. Kontrollér for at gennemtvinge en negativ parameter ved tilslutning "dvs. /notls"',
	'LBL_FORCE'				=> 'Gennemvving negativ',
	'LBL_FOUND_MAILBOXES'	=> 'Følgende anvendelige mapper blev fundet. <br>Klik på en for at vælge den:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Optimale indstillinger blev fundet. Tryk på knappen nedenfor for at anvende dem til din mail-konto.',
	'LBL_FROM_ADDR'			=> 'Fra adresse',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.",
	'LBL_FROM_NAME_ADDR'	=> 'Fra navn/e-mail',
	'LBL_FROM_NAME'			=> 'Fra navn',
	'LBL_GROUP_QUEUE'		=> 'Tildel til gruppe',
    'LBL_HOME'              => 'Startside',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Brug af e-mail-konto',
	'LBL_LIST_NAME'			=> 'Navn:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Type',
	'LBL_LIST_SERVER_URL'	=> 'E-mail-server:',
	'LBL_LIST_STATUS'		=> 'Status:',
	'LBL_LOGIN'				=> 'Brugernavn',
	'LBL_MAILBOX_DEFAULT'	=> 'INDBAKKE',
	'LBL_MAILBOX_SSL_DESC'	=> '"Brug SSL til at oprette forbindelse. Hvis dette ikke virker, skal du kontrollere, at din PHP-installation har medtaget ""- with-imap-ssl"" i konfigurationen."',
	'LBL_MAILBOX_SSL'		=> 'Brug SSL',
	'LBL_MAILBOX_TYPE'		=> 'Mulige handlinger',
	'LBL_DISTRIBUTION_METHOD' => 'Distributionsmetode',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Skabelon til automatiske svar på ny sag',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Vælg et automatisk svar for at give e-mail-afsendere besked om, at en sag er oprettet. E-mailen indeholder sagsnummeret i emnelinjen, hvilket er i overensstemmelse med indstillingen Sagsmakro. Dette svar sendes først, når den første e-mail er modtaget fra modtageren.',
	'LBL_MAILBOX'			=> 'Overvågede mapper',
	'LBL_TRASH_FOLDER'		=> 'Mappen Papirkurv',
	'LBL_GET_TRASH_FOLDER'	=> 'Hent mappen Papirkurv',
	'LBL_SENT_FOLDER'		=> 'Mappen Sendt',
	'LBL_GET_SENT_FOLDER'	=> 'Hent mappen Sendt',
	'LBL_SELECT'				=> 'Vælg',
	'LBL_MARK_READ_DESC'	=> 'Markér meddelelser som læst på e-mail-serveren ved import. Undlad at slette.',
	'LBL_MARK_READ_NO'		=> 'E-mail markeret som slettet efter import',
	'LBL_MARK_READ_YES'		=> 'E-mail tilbage på serveren efter import',
	'LBL_MARK_READ'			=> 'Lad meddelelser forblive på serveren',
	'LBL_MAX_AUTO_REPLIES'	=> 'Antal automatiske svar',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Angiv det maksimale antal automatiske svar, der skal sendes til en entydig e-mail-adresse i løbet af 24 timer.',
	'LBL_PERSONAL_MODULE_NAME' => 'Personlig e-mail-konto',
	'LBL_CREATE_CASE'      => 'Opret sag fra e-mail',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Gruppe-e-mail-konto',
	'LBL_BOUNCE_MODULE_NAME' => 'Postkasse til afvisningshåndtering',
	'LBL_MODULE_TITLE'		=> 'Indgående e-mail',
	'LBL_NAME'				=> 'Navn',
    'LBL_NONE'              => 'Ingen',
	'LBL_NO_OPTIMUMS'		=> 'Kunne ikke finde optimale. Kontrollér dine indstillinger, og prøv igen.',
	'LBL_ONLY_SINCE_DESC'	=> 'Når du bruger POP3, kan PHP ikke filtrere for nye/ulæste meddelelser. Dette flag giver mulighed for at anmode om, at der tjekkes for meddelelser, siden e-mail-kontoen sidst blev adspurgt. Dette vil i høj grad forbedre ydeevnen, hvis din e-mail-server ikke understøtter IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Nej. Kontrollér i forhold til alle e-mails på e-mail-serveren.',
	'LBL_ONLY_SINCE_YES'	=> 'Ja',
	'LBL_ONLY_SINCE'		=> 'Importér kun siden sidste tjek:',
	'LBL_OUTBOUND_SERVER'	=> 'Udgående e-mail-server',
	'LBL_PASSWORD_CHECK'	=> 'Tjek adgangskode',
	'LBL_PASSWORD'			=> 'Adgangskode',
	'LBL_POP3_SUCCESS'		=> 'Din POP3-testforbindelse virkede.',
	'LBL_POPUP_FAILURE'		=> 'Testforbindelsen fejlede. Fejlen er vist nedenfor.',
	'LBL_POPUP_SUCCESS'		=> 'Testforbindelsen virkede. Dine indstillinger fungerer.',
	'LBL_POPUP_TITLE'		=> 'Testindstillinger',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Henter mappeliste',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Vælg abonnerede mapper',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Vælg mappen Papirkurv',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Vælg mappen Sendt',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Følgende mapper %s findes enten ikke eller er blevet slettet fra serveren',
	'LBL_PORT'				=> 'E-mail-serverport',
	'LBL_QUEUE'				=> 'Kø på e-mail-konto',
	'LBL_REPLY_NAME_ADDR'	=> 'Besvar navn/e-mail',
	'LBL_REPLY_TO_NAME'		=> 'Svar til-navn',
	'LBL_REPLY_TO_ADDR'		=> 'Svar til-adresse',
	'LBL_SAME_AS_ABOVE'		=> 'Bruger fra navn/adresse',
	'LBL_SAVE_RAW'			=> 'Gem rå kilde',
	'LBL_SAVE_RAW_DESC_1'	=> '"Vælg ""Ja"", hvis du vil bevare den rå kilde til hver importeret e-mail."',
	'LBL_SAVE_RAW_DESC_2'	=> 'Store vedhæftede filer kan forårsage fejl med konservativt eller forkert konfigurerede databaser.',
	'LBL_SERVER_OPTIONS'	=> 'Avanceret konfiguration',
	'LBL_SERVER_TYPE'		=> 'E-mail-server-protokol',
	'LBL_SERVER_URL'		=> 'E-mail-server-adresse',
	'LBL_SSL_DESC'			=> 'Hvis din e-mail-server understøtter Secure Socket-forbindelser, vil en aktivering af dette gennemtvinge SSL-forbindelser, når du importerer e-mail.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Det valgte team har adgang til e-mail-kontoen.',
	'LBL_SSL'				=> 'Brug SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Systemstandard',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test',
	'LBL_TEST_SETTINGS'		=> 'Testindstillinger',
	'LBL_TEST_SUCCESSFUL'	=> 'Forbindelsen blev oprettet.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Et øjeblik...',
	'LBL_TLS_DESC'			=> 'Brug Transport Layer Security, når du opretter forbindelse til e-mail-serveren - brug det kun, hvis din e-mail-server understøtter denne protokol.',
	'LBL_TLS'				=> 'Brug TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Indgående e-mail deaktiveret',
	'LBL_WARN_IMAP'			=> 'Advarsler!',
	'LBL_WARN_NO_IMAP'		=> 'Indgående e-mail <b>kan ikke</b> fungere, uden at IMAP c-client-biblioteker er aktiveret/kompileret med PHP-modulet. Kontakt administratoren for at løse problemet.',

	'LNK_CREATE_GROUP'		=> 'Opret en ny gruppe',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Ny gruppe-e-mail-konto',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Ny konto til afvisningshåndtering',
	'LNK_LIST_MAILBOXES'	=> 'Alle e-mail-konti',
	'LNK_LIST_QUEUES'		=> 'Alle køer',
	'LNK_LIST_SCHEDULER'	=> 'Planlæggere',
	'LNK_LIST_TEST_IMPORT'	=> 'Test e-mail-import',
	'LNK_NEW_QUEUES'		=> 'Opret en ny kø',
	'LNK_SEED_QUEUES'		=> 'Startkøer fra team',
	'LBL_GROUPFOLDER_ID'	=> 'Gruppemappe-id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Tildel til gruppemappe',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Tillad brugere at sende e-mails ved at anvende "fra" navn og adresse som svar-adressen',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Når denne mulighed er valgt, vil Fra navnet og Fra email adressen tilknyttet denne gruppe mail konto vises som mulighed i Fra felter ved oprettelse af emails fra brugere som har adgang til gruppe mail kontoen.',
    'LBL_STATUS_ACTIVE'     => 'Aktiv',
    'LBL_STATUS_INACTIVE'   => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importér e-mails automatisk',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Advarsel: Du er i færd med at redigere indstillingen for automatisk import, hvilket kan resultere i tab af data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Advarsel: Automatisk import skal aktiveres, når sager oprettes automatisk.',
	'LBL_EDIT_LAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
);
?>
