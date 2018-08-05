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
	'LBL_SEND_DATE_TIME'						=> 'Envoyé à partir de',
	'LBL_IN_QUEUE'								=> 'En cours',
	'LBL_IN_QUEUE_DATE'							=> 'Date d&#39;entrée dans la file',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Seulement de valeurs numériques entiers sont autorisées pour les Emails Per Run',

	'LBL_ATTACHMENT_AUDIT'						=> ' a été envoyé. Il n&#39;a pas été dupliqué localement pour conserver l&#39;utilisation du disque.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurer les paramètres emails',
	'LBL_CUSTOM_LOCATION'						=> 'Defini par l&#39;Utilisateur',
	'LBL_DEFAULT_LOCATION'						=> 'Defaut',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Ajouter un pied de page à tous les emails',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Contenu du pied de page',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'NOTICE: Ce message email est à utilisation uniquement des destinataires prévus et peut contenir das données confidentielle et privilégiée. Toutes visualisation, utilisation ou distribution est formellement interdire. Si vous n&#39;etes pas un des destinataires prévus, veuillez détruire toutes les copies de ce message et en informer l&#39;expéditeur afin que notre listing d&#39;adresse soit corrigé. Merci.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Encodage par défaut des emails envoyés',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Client email utilisé par défaut',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Lors de la suppression d&#39;un email, supprimer les pièces jointes et Notes qui lui sont rattachées.',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Nombre d&#39;emails envoyés dans chaque lot:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Activer "SMTP over SSL"',
	'LBL_EMAIL_USER_TITLE'						=> 'Préférences par défaut',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuration SMTP',
	'LBL_EMAILS_PER_RUN'						=> 'Nombre d&#39;emails envoyés par batch:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Campagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Traité',
	'LBL_LIST_FORM_TITLE'						=> 'File d&#39;attente',
	'LBL_LIST_FROM_EMAIL'						=> 'Email de',
	'LBL_LIST_FROM_NAME'						=> 'Nom de',
	'LBL_LIST_IN_QUEUE'							=> 'En cours',
	'LBL_LIST_MESSAGE_NAME'						=> 'Message ',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Email du destinataire',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nom du destinataire',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Tentative(s) d&#39;envoi',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Envoyé à partir de',
	'LBL_LIST_USER_NAME'						=> 'Nom Utilisateur',
	'LBL_LOCATION_ONLY'							=> 'Localisation',
	'LBL_LOCATION_TRACK'						=> 'Localisation du "tracker" (campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Garder une copie des messages envoyés via les Campagnes:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Voulez-vous stocker une copie complète de <bold>CHAQUE</bold> email envoyé durant toutes les campagnes ?  <bold>La valeur par défaut qui est aussi notre recommandation est Non</bold>. En chosissant Non, seul le modèle du mail envoyé sera stocké et les variables seront donc nécessaires pour re-construire les messages.',
	'LBL_MAIL_SENDTYPE'							=> '</td></tr><tr><th class="dataLabel" align="left" colspan="4"><h4 class="dataLabel" style="padding-bottom:5px;">Serveur utilisé par le Système pour envoyer emails</h4></td></tr><tr><td class="dataLabel" width="20%">Agent de Transfert de Mail:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Utiliser l&#39;authentification&nbsp;SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Mot de Passe SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Serveur SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Identifiant SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Choisissez votre fournisseur de messagerie:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail - Mot de passe:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail - Email:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail - Mot de passe:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail - Email:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange - Mot de passe:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange - Nom Utilisateur:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange - Port SMTP:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange - Serveur SMTP:',
	'LBL_EMAIL_LINK_TYPE'				=> 'Client Email utilisé',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '< b > Messagerie SuiteCRM: < / b > Envoyer des emails en utilisant le client de messagerie interne de SuiteCRM <br> < b >Messagerie Externe : . < / b > Envoyer des emails en utilisant un client de messagerie externe à SuiteCRM , comme Microsoft Outlook .',
	'LBL_MARKETING_ID'							=> 'ID Marketing',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Paramètrages liés aux emails',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Paramètres liés aux Campagnes de type "Emails"',
	'LBL_MODULE_TITLE'							=> 'Gestion de la file d&#39;attente des "Envois en Masse" (Campagnes de Type Email ou Newsletter)',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Envoyer un email de notification lorsque un enregistrement est assigné.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Adresse email de l&#39;expéditeur des emails envoyés par le Système (Attention: peut parfois être surchargé par votre serveur d&#39;envoi):',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nom de l&#39;expéditeur des emails envoyés par Système:',
	'LBL_NOTIFY_ON'								=> 'Activer les Notifications',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Envoyer un email de bienvenue aux nouveaux utilisateurs',
	'LBL_NOTIFY_TITLE'							=> 'Paramètres liés aux envois de mails par le système (Notifications et Campagnes de type Email ou Newsletters)</h4><br><i>Une notification est un email envoyé à un utilisateur lorsqu&#39;un autre utilisateur lui assigne un enregistrement.</i><br>&nbsp;',
	'LBL_OLD_ID'								=> 'Ancien Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Options des emails sortants',
	'LBL_RELATED_ID'							=> 'Enregistrement lié (ID)',
	'LBL_RELATED_TYPE'							=> 'Enregistrement de l&#39;enregistrement lié',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Sauvegarder les entêtes des Emails Sortants',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Rechercher dans les traités',
	'LBL_SEARCH_FORM_TITLE'						=> 'Rechercher dans la file d&#39;attente',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Afficher les Emails traités',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'File d&#39;attente',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'http://translate.sugarcrm.com/latest',
	'TXT_REMOVE_ME_ALT'							=> 'Pour vous retirer de cette liste d email',
	'TXT_REMOVE_ME_CLICK'						=> 'cliquez ici',
	'TXT_REMOVE_ME'								=> 'Si vous ne souhaitez plus recevoir d email de notre part',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'L&#39;expéditeur des notifications est l&#39;utilisateur qui assigne',

	'LBL_SECURITY_TITLE'						=> 'Sécurité',
	'LBL_SECURITY_DESC'							=> 'Les tags sélectionnés dans la liste ci-dessous ne seront PAS acceptés ni affichés dans les Emails entrants ou dans le module "Emails".',
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
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Sélectionner les options de sécurité minimum selon Outlook.',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Sélectionner/Désélectionner toutes les options',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Oui',
    'LBL_NO'                                    => 'Non',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Tentatives d&#39;envoi',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Paramètres du serveur SMTP pour les notifications et les alertes.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Sélectionnez le serveur SMTP pour tous les Utilisateurs:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quand cette option est activée, tous les utilisateurs utilisent le même serveur SMTP<br>pour les notifications et les alertes. Sinon chaque utilisateur peut<br>définir et choisir son propre serveur SMTP.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Si activé, le nom de l utilisateur assigné ainsi que son email seront utilisés pour le champ "From" de l email. Cela ne peut fonctionner que si le serveur SMTP utilisé autorise la surcharge de cette information, pas gmail par exemple.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
);

?>