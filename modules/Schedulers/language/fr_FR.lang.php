<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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
global $sugar_config;

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Actions des Processus de Workflow',
    'LBL_OOTB_REPORTS' => 'Lancer les actions planifiées de génération de rapports',
    'LBL_OOTB_IE' => 'Vérifier les boîtes emails entrants',
    'LBL_OOTB_BOUNCE' => 'Lancer le process nocturne de gestion des bounces des campagnes emails',
    'LBL_OOTB_CAMPAIGN' => 'Lancer le process nocture d&#39;envoi des Campagnes emails',
    'LBL_OOTB_PRUNE' => 'Purger la BDD le premier de chaque mois',
    'LBL_OOTB_TRACKER' => 'Purger les tables des Suivis',
    'LBL_OOTB_SUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Activer l\'indexation par Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimiser l\'index d\'Advanced OpenDiscovery',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Mettre à jour la table tracker_sessions',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Exécuter les notifications par email',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Nettoyer la file des jobs',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Suppression des documents du système de fichier',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Fréquence',
    'LBL_LIST_LIST_ORDER' => 'Actions planifiées:',
    'LBL_LIST_NAME' => 'Planificateur:',
    'LBL_LIST_RANGE' => 'Plage d&#39;activité',
    'LBL_LIST_REMOVE' => 'Supprimer:',
    'LBL_LIST_STATUS' => 'Statut:',
    'LBL_LIST_TITLE' => '&nbsp;',
    'LBL_LIST_EXECUTE_TIME' => 'Va s&#39;éxécuter à:',
// human readable:
    'LBL_SUN' => 'Le dimanche',
    'LBL_MON' => 'Le lundi',
    'LBL_TUE' => 'Le mardi',
    'LBL_WED' => 'Le mercredi',
    'LBL_THU' => 'Le jeudi',
    'LBL_FRI' => 'Le vendredi',
    'LBL_SAT' => 'Le samedi',
    'LBL_ALL' => 'Tous les jours',
    'LBL_EVERY_DAY' => 'Tous les jours',
    'LBL_AT_THE' => 'A le',
    'LBL_EVERY' => 'Tous',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'Toutes les',
    'LBL_RANGE' => 'à',
    'LBL_AT' => 'à',
    'LBL_IN' => 'et',
    'LBL_AND' => 'et',
    'LBL_MINUTES' => 'minutes',
    'LBL_HOUR' => 'heures',
    'LBL_HOUR_SING' => 'heures',
    'LBL_MONTH' => 'mois',
    'LBL_OFTEN' => 'Aussi souvent que possible.',
    'LBL_MIN_MARK' => ' minutes',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'hrs',
    'LBL_DAY_OF_MONTH' => 'date',
    'LBL_MONTHS' => 'mois',
    'LBL_DAY_OF_WEEK' => 'jour',
    'LBL_CRONTAB_EXAMPLES' => 'Les valeurs ci dessus utilisent les notations standard de la crontab.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'Les tâches planifiées sont basées sur la timezone du serveur (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Veuillez en tenir compte lorsque vous paramétrez des tâches planifiées.',
// Labels
    'LBL_ALWAYS' => '- toujours -',
    'LBL_CATCH_UP' => 'Relancer si manqué',
    'LBL_CATCH_UP_WARNING' => 'Décocher si cette action peut prendre du temps à s&#39;exectuer.',
    'LBL_DATE_TIME_END' => 'Date & heure de fin',
    'LBL_DATE_TIME_START' => 'Date & heure de démarrage',
    'LBL_INTERVAL' => 'Intervalle',
    'LBL_JOB' => 'Job',
    'LBL_JOB_URL' => 'URL du job',
    'LBL_LAST_RUN' => 'Dernière exécution',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Actions planifiées',
    'LBL_NAME' => 'Nom du Job',
    'LBL_NEVER' => '- jamais -',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle action planifiée',
    'LBL_PERENNIAL' => '- jamais -',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche action planifiée',
    'LBL_SCHEDULER' => 'Planificateur:',
    'LBL_STATUS' => 'Statut',
    'LBL_TIME_FROM' => 'Actif de:',
    'LBL_TIME_TO' => 'Actif jusqu à',
    'LBL_WARN_CURL_TITLE' => 'cURL Warning:',
    'LBL_WARN_CURL' => 'Attention:',
    'LBL_WARN_NO_CURL' => 'Ce système ne dispose pas des librairies cURL (activées/compilées) dans le module PHP (--with-curl=/path/to/curl_library).  Veuillez contacter votre administrateur pour résoudre ce problème.  Sans la fonctionnalité cURL, le planificateur ne pourra traiter ses jobs.',
    'LBL_BASIC_OPTIONS' => 'Paramétrages Essentiels',
    'LBL_ADV_OPTIONS' => 'Options avancées',
    'LBL_TOGGLE_ADV' => 'Options avancées',
    'LBL_TOGGLE_BASIC' => 'Options de base',
// Links
    'LNK_LIST_SCHEDULER' => 'Actions planifiées',
    'LNK_NEW_SCHEDULER' => 'Nouvelle action planifiée',
    'LNK_LIST_SCHEDULED' => 'Jobs Planifiés',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour supprimer la planification.',
    'ERR_CRON_SYNTAX' => 'Syntaxe de l&#39;action planifiée invalide',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_STATUS' => 'Passer le statut à Inactif pour supprimer cette planification de les listes déroulantes du planificateur',
    'NTC_LIST_ORDER' => 'L&#39;ordre de cette planification va apparaitre dans les listes déroulantes du planificateur',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pour configurer le planificateur Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pour configurer la Crontab',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Executions',
    'LBL_EXECUTE_TIME' => 'Date d&#39;execution',

//jobstrings
    'LBL_REFRESHJOBS' => 'Rafraichir les jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Vérifier les boîtes emails entrantes',
    'LBL_PERFORMFULLFTSINDEX' => 'système d&#39;indexation de recherche Full-Text',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Lancer de nuit les Campagnes d&#39;Emailing',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Lancer le processus de nuit des Campagnes d&#39;Emails de type Bounce',
    'LBL_PRUNEDATABASE' => 'Purger la BDD le premier de chaque mois',
    'LBL_TRIMTRACKER' => 'Purger les tables des historiques',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Exécuter l&#39;envoi des rappels par email',
    'LBL_CLEANJOBQUEUE' => 'Nettoyer le job de la file d&#39;attente',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Suppression des documents du système de fichier',

    'LBL_AODOPTIMISEINDEX' => 'Optimiser l\'index d\'Advanced OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'indexer les documents non indexés',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Sondage des boites monitorées',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Exécuter les rapports programmés',
    'LBL_PROCESSAOW_WORKFLOW' => 'Exécuter les processus AOW',
);
?>
