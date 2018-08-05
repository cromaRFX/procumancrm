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

 


$mod_strings = array (
  'LBL_MODULE_NAME' => 'Historique',
  'LBL_MODULE_TITLE' => 'Historique : Accueil',
  'LBL_SEARCH_FORM_TITLE' => 'Historique : Recherche',
  'LBL_LIST_FORM_TITLE' => 'Historique',
  'LBL_LIST_SUBJECT' => 'Sujet',
  'LBL_LIST_CONTACT' => 'Contacts',
  'LBL_LIST_RELATED_TO' => 'Rattachée à',
  'LBL_LIST_DATE' => 'Date',
  'LBL_LIST_TIME' => 'Heure de début',
  'LBL_LIST_CLOSE' => 'Fermer',
  'LBL_SUBJECT' => 'Sujet:',
  'LBL_STATUS' => 'Statut:',
  'LBL_LOCATION' => 'Localisation:',
  'LBL_DATE_TIME' => 'Date et Heure début:',
  'LBL_DATE' => 'Date de début:',
  'LBL_TIME' => 'Heure de début:',
  'LBL_DURATION' => 'Durée:',
  'LBL_HOURS_MINS' => '(heures/minutes)',
  'LBL_CONTACT_NAME' => 'Nom du contact :',
  'LBL_MEETING' => 'Réunion:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description',
  'LBL_DESCRIPTION' => 'Déscription :',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planifiée',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_EMAIL' => 'Archiver Email',
  'LNK_CALL_LIST' => 'Appels',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_TASK_LIST' => 'Tâches',
  'LNK_NOTE_LIST' => 'Notes',
  'LNK_EMAIL_LIST' => 'Mails',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'NTC_REMOVE_INVITEE' => 'Etes-vous sûr(e) de vouloir supprimer ce participant de la réunion ?',
  'LBL_INVITEE' => 'Participants',
  'LBL_LIST_DIRECTION' => 'Direction',
  'LBL_DIRECTION' => 'Direction',
  'LNK_NEW_APPOINTMENT' => 'Nouveau Rendez-vous',
  'LNK_VIEW_CALENDAR' => 'Aujourd&#39;hui',
  'LBL_OPEN_ACTIVITIES' => 'Activités en cours :',
  'LBL_HISTORY' => 'Historique',
  'LBL_UPCOMING' => 'Mes prochains rendez-vous :',
  'LBL_TODAY' => 'via',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Créer Tâche',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Créer Tâche',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Planifier Réunion',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Planifier Réunion',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Planifier Appel',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Planifier Appel',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Créer Note',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Créer Note',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver Email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver Email',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_DUE_DATE' => 'Date d&#39;échéance',
  'LBL_LIST_LAST_MODIFIED' => 'Date de modification',
  'NTC_NONE_SCHEDULED' => 'Aucun prévus.',
  'appointment_filter_dom' => array(
  	 'today' => 'ce jour'
  	,'tomorrow' => 'demain'
  	,'this Saturday' => 'cette semaine'
  	,'next Saturday' => 'semaine prochaine'
  	,'last this_month' => 'ce mois-ci'
  	,'last next_month' => 'mois prochain'
  ),
  'LNK_IMPORT_NOTES'=>'Import Notes',
  'NTC_NONE'=>'Sans Pièce Jointe',
	'LBL_ACCEPT_THIS'=>'Accepter ?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Historique',
);

?>