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
	'DESC_MODULES_INSTALLED'					=> 'Les modules suivant ont été installés:',
	'DESC_MODULES_QUEUED'						=> 'Les modules suivant sont prêts à être installé:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Impossible de définir le Groupe',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Impossible de définir le Propriétaire',
	'ERR_UW_CONFIG_WRITE'						=> 'Erreur de mise à jour du fichier config.php avec les nouvelles informations de version.',
	'ERR_UW_CONFIG'								=> 'Merci de mettre des droits d&#39;écriture sur votre fichier config.php file writable et raffraîchir cette page.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Répertoire ne disposant pas droits d&#39;écriture',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Fichier non copié',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problème lors de la suppression du package ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Le Fichier ne peut être lu.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Le Fichier ne peut pas être placé ou copié vers',
	'ERR_UW_FLAVOR_2'							=> 'Mise à jour de la version (CE/Pro/Ent) :',
	'ERR_UW_FLAVOR'								=> 'Edition (CE/Pro/Ent) de SugarCRM :',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log ne peut être créé ou écriture impossible.  Merci de vérifier les autorisations du répertoire SugarCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'La valeur de mbstring.func_overload est supérieure à 1. Merci de changer cette valeur dans votre fichier php.ini et de redémarrer le serveur web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM exige MySQL version 4.1.2 ou +. Version trouvée :',
	'ERR_UW_OCI8_VERSION'				        => 'Votre version actuelle d&#39;Oracle n&#39;est pas supportée par Sugar. Vous devez installer une version compatible avec Sugar. Veuillez consulter la matrice de compatibilité des "Release Notes" pour les versions d&#39;Oracle supportées. Version actuelle :',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Merci de choisir un fichier et essayez à nouveau !',
	'ERR_UW_NO_FILES'							=> 'Une erreur est survenue, aucuns fichiers à vérifier n&#39;a été trouvé.',
	'ERR_UW_NO_MANIFEST'						=> 'Le fichier zip ne contient pas de fichier manifest.php. Impossible de poursuivre.',
	'ERR_UW_NO_VIEW'							=> 'Vue spécifiée invalide.',
	'ERR_UW_NO_VIEW2'							=> 'Vue non définie. Merci de vous rendre sur la page d&#39;Accueil de l&#39;Administration pour vous diriger sur cette page.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Chargement invalide.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Impossible de créer un répertoire temporaire. Vérifier les droits.',
	'ERR_UW_ONLY_PATCHES'						=> 'Seuls les Patchs peuvent être chargés sur cette page.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Erreurs trouvées durant le pré-contrôle',
	'ERR_UW_UPLOAD_ERR'							=> 'Il y a une erreur lors du chargement du fichier, essayez à nouveau!<br>',
	'ERR_UW_VERSION'							=> 'Version de SugarCRM :',
	'ERR_UW_WRONG_TYPE'							=> 'Cette page n&#39;est pas utilisée pour l&#39;execution',
	'LBL_BUTTON_BACK'							=> 'Retour',
	'LBL_BUTTON_CANCEL'							=> 'Annuler',
	'LBL_BUTTON_DELETE'							=> 'Supprimer Package',
	'LBL_BUTTON_DONE'							=> 'Terminer',
	'LBL_BUTTON_EXIT'							=> 'Quitter',
	'LBL_BUTTON_INSTALL'						=> 'Tests pour la mise à jour',
	'LBL_BUTTON_NEXT'							=> 'Suivant',
	'LBL_BUTTON_RECHECK'						=> 'Vérifier à nouveau',
	'LBL_BUTTON_RESTART'						=> 'Redémarrer',

	'LBL_UPLOAD_UPGRADE'						=> 'Charger une mise à jour ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Fichier à charger introuvable',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Fichier Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Les fichiers sauvegardés pour cette mise à jour peuvent être trouvés dans',
	'LBL_UW_BACKUP'								=> 'Fichier BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'L&#39;assistant de mise à jour a été annulé. Tous les fichiers temporaires et le fichier zip chargé ont été supprimés.<br><br>Cliquer sur "Effectuer" pour relancer l&#39;assistant de mise à jour.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Schéma de modif du jeu de caractères',
	'LBL_UW_CHECK_ALL'							=> 'Tout vérifier',
	'LBL_UW_CHECKLIST'							=> 'Etapes de mise à jour',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Les backups des fichiers écrasés sont dans le dossier suivant :",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Fusion manuelle des fichiers suivants:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Procédure de mise à jour: Fusion manuelle des fichiers',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Utiliser une méthode de diff qui vous est familière pour fusionner les fichiers. Jusqu&#39;à la fin du traitement, votre installation SugarCRM sera dans un état instable ,et la mise à jour ne sera pas complète.',
	'LBL_UW_COMPLETE'							=> 'Terminée',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Cette nouvelle version de Sugar contient un nouvel accord de licence. Voulez-vous continuer ?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Tous les paramètres système exigés sont corrects',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Paramètre PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Module cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Module IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Module MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Paramètre MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Paramètre PHP: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Paramètre PHP : Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Version minimale de MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Version minimum de la base de données',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Chemin du fichier php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Version minimale de PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Paramètre PHP : Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Verification des paramètres serveur',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Paramètres détectés',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parseur XML',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Support compression Zip',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'Version PCRE',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Fichiers copiés avec succès',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Modification du schéma des tables custom',

	'LBL_UW_DB_CHOICE1'							=> 'Assistant d&#39;execution de mise à jour SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Requêtes SQL manuelles',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT a echoué',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilèges absents',
	'LBL_UW_DB_ISSUES'							=> 'Problèmes Base de données',
	'LBL_UW_DB_METHOD'							=> 'Methode de mise à jour de la base de données',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Pas de Privilèges absents',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilège nécessaire',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Les mises à jours suivantes ont été installées:',
	'LBL_UW_END_DESC'							=> 'Félicitation, votre système est maintenant mis à jour.',
	'LBL_UW_END_DESC2'							=> 'Si vous choisissez de lancer manuellement une des étapes telles que les fusion de fichiers ou les requêtes SQL, votre système risque d&#39;être instable après ces étapes terminées.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'La mise à jour est terminée.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Cliquez sur le bouton Terminer pour quitter l&#39;assistant de mise à jour.',
	'LBL_UW_END_LOGOUT'							=> 'Veuillez vous déconnecter de votre compte si vous planifiez de réaliser d&#39;autres mises à jour après celle-ci.',
	'LBL_UW_END_LOGOUT2'						=> 'Deconnexion',
	'LBL_UW_REPAIR_INDEX'						=> 'Pour l&#39;amélioration des performance de la base de données, merci de lancer le script <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Réparation des Index</a>.',

	'LBL_UW_FILE_DELETED'						=> " a été supprimé.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Groupe',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permissions fichier',
	'LBL_UW_FILE_ISSUES'						=> 'Problèmes fichier',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Le fichier nécessute une diff manuelle',
	'LBL_UW_FILE_NO_ERRORS'						=> 'Tous les fichiers ont les droits d&#39;écriture',
	'LBL_UW_FILE_OWNER'							=> 'Propriétaire',
	'LBL_UW_FILE_PERMS'							=> 'Permissions',
	'LBL_UW_FILE_UPLOADED'						=> ' a été chargé',
	'LBL_UW_FILE'								=> 'Nom de fichier',
	'LBL_UW_FILES_QUEUED'						=> 'Les mises à jours suivantes sont prêtes à être installées:',
	'LBL_UW_FILES_REMOVED'						=> "Les fichiers suivants vont être supprimés du système:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Cliquez sur Suivant pour transmettre le package de mise à jour.</b>",
	'LBL_UW_FROZEN'								=> 'Des étapes exigées doivent être accomplies avant de continuer.',
	'LBL_UW_HIDE_DETAILS'						=> 'Masquer les Détails',
	'LBL_UW_IN_PROGRESS'						=> 'En traitement',
	'LBL_UW_INCLUDING'							=> 'Comprenant',
	'LBL_UW_INCOMPLETE'							=> 'Incomplet',
	'LBL_UW_INSTALL'							=> 'Fichier INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Fichier de fusion',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Le Module est prêt à être désinstallé. Cliquer sur \"Lancer\" pour démarrer la désinstallation.<br>",
	'LBL_UW_MODULE_READY'						=> "Le Module est prêt à être installé. Cliquer sur \"Lancer\" pour démarrer l&#39;installation.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Aucunes mises à jour enregistrées détectées.',
	'LBL_UW_NONE'								=> 'Aucun(e)',
	'LBL_UW_NOT_AVAILABLE'						=> 'Indisponible',
	'LBL_UW_OVERWRITE_DESC'						=> "Tous les fichiers modifiés vont être écrasés - comprenant les personnalisations de code et modifications de template. Etes-vous sûr(e) de vouloir continuer ?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Ecraser tous les fichiers',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Fusion Manuelle - Tout garder',
	'LBL_UW_OVERWRITE_FILES'					=> 'Méthode de fusion',
	'LBL_UW_PATCH_READY'						=> 'Le patch est prêt à être appliqué. Cliquer sur le bouton "Lancer" pour terminer la procédure de mise à jour.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Note: Mises en page personnalisées trouvées</h2><br />Le/les fichiers suivants ont de nouveaux champs ou modifient la mise en page appliquée via le Studio. Le patch que vous êtes sur le point d&#39;installer contient des changements sur ces fichiers. Pour <u>chaque fichier</u> vous pouvez :<br><ul><li>[<b>Default</b>] Garder votre version en laissant la case non cochée. Les modifications apportées par le patch seront ignorées.</li>ou<li>Accepter la mise à jour des fichiers en cochant la case. Vos mises en page devront être réappliquées via le Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Créer une tâche pour la fusion manuelle?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Pré-vérifications terminées',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differencié ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Vous envoyer un email pour vous rappeler la fusion manuelle?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Les fichiers listés ci-dessous ont été modifiés. Décocher les éléments qui exigent une fusion manuelle. <i>Tous les changements détectés sur les mises en pages (fichiers html) sont automatiquement décochés; Cocher les fichiers qui doivent être écrasés.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Pas de fusion manuelle de fichier exigée.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Pas nécessaire.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Fichiers auto-préservés:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Tous les tests pré-vérifications sont passés. Cliquer sur "Suivant" pour appliquer ces changements.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Cliquez sur suivant pour copier les fichiers mis à jour sur le système.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '</b>Veuillez noter</b> que le reste du processus de mise à jour est obligatoire et cliquer sur Suivant <b>nécessitera</b> que vous finalisiez le processus. Si vous ne souhaitez pas continuer, cliquer sur le bouton annuler.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Permutter tous les fichiers',

	'LBL_UW_REBUILD_TITLE'						=> 'Résultat de la reconstruction',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Modification de schéma',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Voir les paramètres détectés',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Voir les permissions absentes de la base de données',
	'LBL_UW_SHOW_DETAILS'						=> 'Voir les détails',
	'LBL_UW_SHOW_DIFFS'							=> 'Voir les fichiers nécessitant une fusion manuelle',
	'LBL_UW_SHOW_NW_FILES'						=> 'Voir les fichiers avec des permissions non valides',
	'LBL_UW_SHOW_SCHEMA'						=> 'Voir le schéma du script de modification',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Voir les requêtes incorrectes',
	'LBL_UW_SHOW'								=> 'Voir',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Fichiers ignorés',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ignorer le fichier écrasé - Fusion manuelle sélectionnée.',
	'LBL_UW_SQL_RUN'							=> 'Vérifier quand SQL a été lancé manuellement',
	'LBL_UW_START_DESC'							=> 'Bienvenue à l&#39;assistant de mise à jour. Cette assistant est concu pour assister les administrateurs lors de la mise à jour de leurs instances SugarCRM.  Merci de suivre prudemment les instructions qui vous sont données.',
	'LBL_UW_START_DESC2'						=> 'Nous vous recommandons fortement de mettre à jour une copie de votre serveur de production.  Merci de sauvegarder votre base de données ainsi que les fichiers systèmes (tous les fichiers du dossier de votre SugarCRM) avant de lancer cette opération.',
	'LBL_UW_START_DESC3'						=> 'Cliquez sur Suivant pour vérifier votre système et s&#39;assurer qu&#39;il est prêt pour la mise à jour. La vérification inclus les permissions sur les fichiers, sur la base de données et les paramètres système.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Le nouvel assistant de mise à jour indiquera désormais les étapes de traitement. Merci de poursuivre votre mise à jour.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bienvenue au nouvel Assistant de mise à jour',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Vérification en cours, patientez. Ceci peut prendre jusqu&#39;à 30 secondes.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Recherche de tous les fichier corrects à vérifier.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Fichier',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Trouver',

	'LBL_UW_TITLE_CANCEL'						=> 'Annuler',
	'LBL_UW_TITLE_COMMIT'						=> 'Valider mise à jour',
	'LBL_UW_TITLE_END'							=> 'Compte rendu',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Pré-vérification',
	'LBL_UW_TITLE_START'						=> 'Démarrer',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Vérifications Système',
	'LBL_UW_TITLE_UPLOAD'						=> 'Charger une mise à jour',
	'LBL_UW_TITLE'								=> 'Assistant de mise à jour',
	'LBL_UW_UNINSTALL'							=> 'Désinstaller',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Accepter la licence',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Convertir la licence',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Améliorer / Personnaliser les Modules',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Les modules suivants sont détectés comme personnalisés et préservé',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Les modules suivants sont détectés comme personnalisé via le studio et ont été mis à niveau',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'L\'édition communautaire 5.0 de SuiteCRM utilise GNU Affero General Public License version 3. Cette mise à jour convertira votre license existante vers la nouvelle affichée ci-dessous.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Démarrage en cours',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Vérification système en cours',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Vérification de la licence en cours',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Tests préliminaires en cours',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Copie de fichier en cours.',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Envoi de la mise à jour en cours',
    'LBL_UW_COMMIT_DESC'						=> 'Cliquez sur Suivant pour lancer les scripts additionnels de mise à jour.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Scripts de mise à jour en cours',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Résumé de la mise à jour en cours',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'en cours',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Temps écoulé',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Abandon de la mise à jour et nettoyage en cours',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'La mise à jour peut prendre un certain temps',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Vérification des fichiers chargés en cours',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Chargement du package de mise à jour...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Voulez-vous que Sugar supprime le schéma 451 déprécié ?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'L&#39;assistant de mise à jour a supprimé l&#39;ancien schéma 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Suppression manuelle du schéma après la mise à jour',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Méthode de suppression de l&#39;ancien schéma',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Voir l&#39;ancien schéma qui doit être supprimé',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Requêtes ignorées',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php version 5 ou supérieur est requis.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Votre version de PHP n&#39; est pas supportée par SugarCRM. Vous devez installer une version de PHP compatible avec SugarCRM. Merci de consulter la matrice de compatibilté disponible dans le document "Release Notes" pour voir quelle versions de PHP sont supportées par SugarCRM. Votre version actuelle est',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Backward Compatibility mode est positionné à on. Mettre zend.ze1_compatibility_mode à Off pour pouvoir continuer',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL'             => 'Annuler',
    'LBL_ML_COMMIT'=>'Démarrer',
    'LBL_ML_DESCRIPTION' => 'Description',
    'LBL_ML_INSTALLED' => 'Date d&#39;installation',
    'LBL_ML_NAME' => 'Nom',
    'LBL_ML_PUBLISHED' => 'Date de publication',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Désinstallable',
    'LBL_ML_VERSION' => 'Version',
	'LBL_ML_INSTALL'=>'Installation',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Paramètres du Suivi',
	'LBL_CURRENT_PHP_VERSION' => '(Votre version courrante de PHP est la',
	'LBL_RECOMMENDED_PHP_VERSION' => '. La version de PHP recommandée est la 5.2.1 ou supérieure)',
	'LBL_MODULE_NAME' => 'Assistant de mise à jour',
	'LBL_UPLOAD_SUCCESS' => 'Package de mise à jour correctement transféré. Cliquez sur Suivant pour réaliser une dernière vérification.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirmer les mises en page',
	'LBL_LAYOUT_MODULE_TITLE' => 'Mise en page',
	'LBL_LAYOUT_MERGE_DESC' => 'Il y a de nouveaux champs disponibles qui ont été ajoutés dans cette mise à jour et qui peuvent être automatiquement ajoutés dans vos mises en page existantes. Pour en savoir plus sur les nouveaux champs, veuillez vous référez à la "release note" de la version vers laquelle vous allez.<br /><br />Si vous ne souhaitez pas ajouter ces nouveaux champs, veuillez désélectionner le ou les modules et vos mises en page ne seront pas impactées. Les champs seront tout de même disponibles dans le Studio après la mise à jour.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Cliquez sur Suivant pour confirmer les modifications et terminer la mise à jour.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Cliquez sur Suivant pour finaliser la mise à jour.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmer les mises en page',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmer les mises en page résultantes',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Les mises en pages suivantes ont été fusionnées avec succès :',
	'LBL_SELECT_FILE' => 'Sélectionnez un fichier:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Le fichier uploadé n&#39; est pas compatible avec cette version de Sugar :',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Le fichier uploadé n&#39; est pas compatible avec cette version (Community Edition, Professional, ou Enterprise) de SugarCRM :',
	'LBL_LANGPACKS' => 'Packages de langue' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Chargeur de modules' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch de mise à jour' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Thème' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'WorkFlow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Mise à jour:' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'En cours...' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Le fichier chargé dépasse la valeur upload_max_filesize dans php.ini.',
													2 => 'Le fichier chargé dépasse la valeur MAX_FILE_SIZE spécifiée dans le formulaire HTML.',
													3 => 'Le fichier a été chargé partiellement.',
													4 => 'Aucun fichier chargé.',
													5 => 'Erreur inconnue.',
													6 => 'Répertoire temporaire absent.',
													7 => 'Echec d&#39;écriture du fichier sur le disque.',
													8 => 'Chargement interrompu.',
),
);
