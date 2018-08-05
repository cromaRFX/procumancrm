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

	'ERR_BAD_LOGIN_PASSWORD'=> 'Utilisateur ou mot de passe incorrect',
	'ERR_BODY_TOO_LONG'		=> '\rLe Corps du message est trop long pour le récupérer dans sa totalité.  Message tronqué.',
	'ERR_INI_ZLIB'			=> 'Impossible de désactiver temporairement la compression Zlib. "Tester Paramétrage" peut échouer.',
	'ERR_MAILBOX_FAIL'		=> 'Ne peux accéder à aucune boîte email.',
	'ERR_NO_IMAP'			=> 'Livrairie IMAP non trouvée. Merci de résoudre le problème avant de poursuivre le paramétrage des emails entrants',
	'ERR_NO_OPTS_SAVED'		=> 'Pas de paramètres optimaux sauvegardés avec votre boîte email entrante. Merci de revoir les paramétrages',
	'ERR_TEST_MAILBOX'		=> 'Merci de vérifier vos Paramètres et essayer à nouveau.',

	'LBL_APPLY_OPTIMUMS'	=> 'Appliquer les paramètres optimaux',
	'LBL_ASSIGN_TO_USER'	=> 'Assigner à l&#39;utilisateur',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Options de réponse automatique',
	'LBL_AUTOREPLY'			=> 'Modèle de réponse automatique',
	'LBL_AUTOREPLY_HELP'	=> 'Sélectionner une réponse automatique de notification de réception.',
	'LBL_BASIC'				=> 'Paramètrages essentiels',
	'LBL_CASE_MACRO'		=> 'Mot clé Ticket',
	'LBL_CASE_MACRO_DESC'	=> 'Ce mot clé sera analysé et utilisé lors de la réception des emails entrants pour lier les emails dont le titre contient ce mot clé, au Ticket dont le numéro sera égal à la valeur de %1.',
	'LBL_CASE_MACRO_DESC2'	=> 'Choisir la chaîne de caractères souhaitée, mais préserver le <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Forcer la validation de ce certificat de sécurité du serveur mail - ne pas utiliser si le certificat est auto-signé.',
	'LBL_CERT'				=> 'Valider certificat',
	'LBL_CLOSE_POPUP'		=> 'Fermer fenêtre',
	'LBL_CREATE_NEW_GROUP'	=> '--Créer un groupe en sauvegardant--',
	'LBL_CREATE_TEMPLATE'	=> 'Créer',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Dossiers souscrits',
	'LBL_DEFAULT_FROM_ADDR'	=> '<br>Défaut: ',
	'LBL_DEFAULT_FROM_NAME'	=> '<br>Défaut: ',
	'LBL_DELETE_SEEN'		=> 'Supprimer les emails lus après l&#39;import.',
	'LBL_EDIT_TEMPLATE'		=> 'Editer',
	'LBL_EMAIL_OPTIONS'		=> 'Paramètres optionnels',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Options de gestion de bounce',
	'LBL_FILTER_DOMAIN_DESC'=> 'Le domaine spécifié ne recevra pas de "Réponse automatique"',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Pour l option de création de Ticket, un dossier de groupe doit être sélectionné',
	'LBL_FILTER_DOMAIN'		=> 'Pas de "Réponse automatique" pour le domaine',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Rechercher les paramètres de connexion optimaux',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Rechercher les paramètres optimaux',
	'LBL_FIND_SSL_WARN'		=> '<br>Le test SSL peut prendre un certain temps. Merci de patienter.<br>',
	'LBL_FORCE_DESC'		=> 'Certain serveur IMAP/POP3 nécessites des paramètres sépcifiques. Cochez pour forcer un paramètre négatif lors de la connexion (i.e. /notls)',
	'LBL_FORCE'				=> 'Forcer les paramètres négatifs',
	'LBL_FOUND_MAILBOXES'	=> 'Boîtes Mail trouvées:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Paramètres optimaux trouvés. Cliquer sur le bouton suivant pour les appliquer à votre Boîte Mail',
	'LBL_FROM_ADDR'			=> 'Adresse email de l&#39;expéditeur<br /><i>Note: ne sera prit en compte <br>que si le serveur d&#39;envoi <br>autorise la surcharge de l&#39;adresse email d&#39;envoi !</i>',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "L&#39;adresse email renseignée ici peut ne pas apparaître dans le champ \"From\" de l&#39;email envoyé à cause des restrictions imposées par votre fournisseur de service mail. Dans ce cas, l&#39;adresse email définie pour le serveur de mail sortant sera utilisée.",
	'LBL_FROM_NAME_ADDR'	=> 'Répondre Nom/Email:',
	'LBL_FROM_NAME'			=> 'Nom de l&#39;expéditeur',
	'LBL_GROUP_QUEUE'		=> 'Assigner à un Groupe',
    'LBL_HOME'              => 'Accueil',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Utilisation du compte email',
	'LBL_LIST_NAME'			=> 'Nom:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Type&nbsp;de&nbsp;Boîte',
	'LBL_LIST_SERVER_URL'	=> 'Serveur',
	'LBL_LIST_STATUS'		=> 'Statut',
	'LBL_LOGIN'				=> 'Nom Utilisateur',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Utiliser SSL lors de la connexion. Si cela ne marche pas, vérifiez que vous avez compilé PHP avec l&#39;option "--avec-imap-ssl".',
	'LBL_MAILBOX_SSL'		=> 'Utiliser SSL',
	'LBL_MAILBOX_TYPE'		=> 'Actions possibles<br>lors de la réception d&#39;emails dans cette boîte',
	'LBL_DISTRIBUTION_METHOD' => 'Méhtode de Distribution',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Modèle de Réponse pour une création de Ticket',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Sélectionnez une réponse automatique de notification de la création de Tickets avec le numéro du Ticket.',
	'LBL_MAILBOX'			=> 'Dossier Contrôlé',
	'LBL_TRASH_FOLDER'		=> 'Dossier Poubelle',
	'LBL_GET_TRASH_FOLDER'	=> 'Obtenir un Dossier Poubelle',
	'LBL_SENT_FOLDER'		=> 'Dossier Envoyé',
	'LBL_GET_SENT_FOLDER'	=> 'Obtenir un Dossier Envoyé',
	'LBL_SELECT'				=> 'Selectionner',
	'LBL_MARK_READ_DESC'	=> 'Marquer les Messages lus sur le Serveur Mail lors de l&#39;Import, ne pas Effacer.',
	'LBL_MARK_READ_NO'		=> 'Email marqué effacé après Import',
	'LBL_MARK_READ_YES'		=> 'Email laissé sur le Serveur après Import',
	'LBL_MARK_READ'			=> 'Laisser les Messages sur le Seveur',
	'LBL_MAX_AUTO_REPLIES'	=> 'Nombre de "Réponses Automatiques"',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Nombre maximum de "Réponses Automatiques" envoyées par 24 heures à une même adresse email.',
	'LBL_PERSONAL_MODULE_NAME' => 'Compte email personnel',
	'LBL_CREATE_CASE'      => 'Créer un Ticket',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Compte email Groupe',
	'LBL_BOUNCE_MODULE_NAME' => 'Compte email de gestion de Bounce',
	'LBL_MODULE_TITLE'		=> 'Paramètrages des Emails Entrants',
	'LBL_NAME'				=> 'Nom',
    'LBL_NONE'              => 'Aucun',
	'LBL_NO_OPTIMUMS'		=> 'Les paramètres optimaux n&#39;ont pas pu être trouvés. Veuillez vérifier vos paramètres et réessayer.',
	'LBL_ONLY_SINCE_DESC'	=> 'En utilisant POP3, PHP ne peut pas filtrer les Nouveaux messages ou les Messages non lus. Ce flag permet la vérification des messages DEPUIS la dernière interrogation. Ceci va considérablement augmenter les performances si votre serveur ne supporte pas IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Non. Vérifier tous les Emails sur le serveur Mail.',
	'LBL_ONLY_SINCE_YES'	=> 'Oui.',
	'LBL_ONLY_SINCE'		=> 'Importer seulement depuis la dernière vérification:',
	'LBL_OUTBOUND_SERVER'	=> 'Serveur de mail sortant',
	'LBL_PASSWORD_CHECK'	=> 'Vérification Mot de Passe',
	'LBL_PASSWORD'			=> 'Mot de Passe',
	'LBL_POP3_SUCCESS'		=> 'Test de connexion POP3 --> réussi.',
	'LBL_POPUP_FAILURE'		=> 'Test de connexion POP3 --> échoué. L&#39;erreur est indiquée ci-dessous:',
	'LBL_POPUP_SUCCESS'		=> 'Test de connexion POP3 --> réussi.  Vos paramètres fonctionnent.',
	'LBL_POPUP_TITLE'		=> 'Test du Paramétrage',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Obtenir la liste des Dossiers',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Sélectionner les Dossiers sousscrits',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Sélectionner le Dossier Poubelle',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Sélectionner le Dossier Envoyé',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Le dossier %s n&#39;existe pas ou a été supprimé du serveur',
	'LBL_PORT'				=> 'Port du serveur Mail',
	'LBL_QUEUE'				=> 'Queue Boîte Mail',
	'LBL_REPLY_NAME_ADDR'	=> 'Réponde Nom/Email',
	'LBL_REPLY_TO_NAME'		=> 'Nom du "Répondre à"',
	'LBL_REPLY_TO_ADDR'		=> 'Adresse Email du "Répondre à"',
	'LBL_SAME_AS_ABOVE'		=> 'Utiliser adresse/nom émetteur',
	'LBL_SAVE_RAW'			=> 'Sauvegarder les entêtes des Emails Entrants',
	'LBL_SAVE_RAW_DESC_1'	=> 'Si vous choissez "Oui" les entêtes des Emails Entrants seront conservés dans la base de données.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Attention alors aux pièces jointes trop importantes qui pourront éventuellement vous causer des problèmes si votre base de données est incorrectement configurée.',
	'LBL_SERVER_OPTIONS'	=> 'Options du Serveur Mail',
	'LBL_SERVER_TYPE'		=> 'Protocole du Serveur Mail',
	'LBL_SERVER_URL'		=> 'Serveur Mail',
	'LBL_SSL_DESC'			=> 'Si votre serveur de mail supporte les connexions par socket sécurisée, mieux vaut l&#39;activer cela forcera la connexion SSL lorsque vous importez des Emails, ce qui est plus sécurisé.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'L&#39;équipe sélectionnée a accès au compte email. Si un Dossier de Groupe est sélectionné, l&#39;équipe désignée pour le Dossier de Groupe surcharge l&#39;&quipe sélectionnée.',
	'LBL_SSL'				=> 'Activer SSL',
	'LBL_STATUS'			=> 'Statut',
	'LBL_SYSTEM_DEFAULT'	=> 'Système par défaut',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Tester [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Tester la connexion au Serveur Mail',
	'LBL_TEST_SUCCESSFUL'	=> 'Test de connexion réussi.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Veuillez patienter...',
	'LBL_TLS_DESC'			=> 'Utiliser Transport Layer Security lors de la connexion au serveur Mail - utiliser cette option seulement si votre serveur Mail maintient ce protocol.',
	'LBL_TLS'				=> 'Utiliser TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Email entrant désactivé',
	'LBL_WARN_IMAP'			=> 'Avertissements:',
	'LBL_WARN_NO_IMAP'		=> 'Le système n&#39;a pas les librairies c-client IMAP activées/compilées dans le module PHP (--with-imap=/path/to/imap_c-client_library). Veuillez contacter votre administrateur système pour activer cette librairie.',

	'LNK_CREATE_GROUP'		=> 'Créer un nouveau groupe',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nouvelle boîte de groupe',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nouvelle boîte de gestion de bounce',
	'LNK_LIST_MAILBOXES'	=> 'Liste des boîtes Email',
	'LNK_LIST_QUEUES'		=> 'Toutes les files d&#39;attente',
	'LNK_LIST_SCHEDULER'	=> 'Tâches planifiées',
	'LNK_LIST_TEST_IMPORT'	=> 'Tester l&#39;import d&#39;email',
	'LNK_NEW_QUEUES'		=> 'Créer nouvelle file d attente',
	'LNK_SEED_QUEUES'		=> 'Renseigner les files d&#39;attente depuis les équipes',
	'LBL_GROUPFOLDER_ID'	=> 'ID du Dossier de Groupe',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => '"Dossier de Groupe"<br>stockant les emails entrants',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Autoriser les utilisateurs à envoyer des emails en utilisant les informations du "From" nom et adresse en adresse de réponse (reply-to).',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Lorsque cette option est sélectionnée, les informations "From" nom et adresse associée avec ce compte email de groupe apparaitront en option pour le champ "From" lorsque les utilisateurs qui ont accès à cette boite composeront un email.',
    'LBL_STATUS_ACTIVE'     => 'Actif',
    'LBL_STATUS_INACTIVE'   => 'Inactif',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'Groupe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer automatiquement les emails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attention, vous aller modifier la configuration des imports automatiques des mails. Vous risquez des pertes de données.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attention : L&#39;import automatique des emails doit être activé pour la création automatique de tickets.',
	'LBL_EDIT_LAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
);
?>
