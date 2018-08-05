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
  'LBL_MODULE_NAME' => 'Devises',
  'LBL_LIST_FORM_TITLE' => 'Devises',
  'LBL_CURRENCY' => 'Devise',
  'LBL_ADD' => 'Ajouter',
  'LBL_MERGE' => 'Fusionner',
  'LBL_MERGE_TXT' => 'Veuillez sélectionner les devises que vous voulez affecter à la devise sélectionnée. Ceci effacera toutes les devises cochées et ré-assignera les valeurs associées à la devise sélectionnée.',
  'LBL_US_DOLLAR' => 'Dollar US',
  'LBL_DELETE' => 'Supprimer',
  'LBL_LIST_SYMBOL' => 'Symbole de la devise',
  'LBL_LIST_NAME' => 'Devise',
  'LBL_LIST_ISO4217' => 'Code devise ISO 4217',
  'LBL_LIST_ISO4217_HELP' => 'Saisir un code ISO 4217 à trois lettres qui définit la devise et son symbole.',
  'LBL_UPDATE' => 'Enregistrer',
  'LBL_LIST_RATE' => 'Taux de conversion',
  'LBL_LIST_RATE_HELP' => 'Un taux de conversion de 0.5 par Euro signifie que 10 Dollars = 5 Euro.',
  'LBL_LIST_STATUS' => 'Statut',
  'LNK_NEW_CONTACT' => 'Nouveau Contact',
  'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
  'LNK_NEW_OPPORTUNITY' => 'Nouvelle Affaire',
  'LNK_NEW_CASE' => 'Nouveau Ticket',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_CALL' => 'Nouvel appel',
  'LNK_NEW_EMAIL' => 'Nouvel email',
  'LNK_NEW_MEETING' => 'Nouveau rendez-vous',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'NTC_DELETE_CONFIRMATION' => 'Êtes-vous certain de vouloir effacer cet enregistrement ? Tout enregistrement précédent utilisant cette devise sera converti en devis par défaut. Il peut être préférable d\'utiliser un statut "inactif".',
  'LBL_BELOW_MIN' => 'Le taux de conversion doit être supérieur à 0',
  'currency_status_dom' => 
  array (
    'Active' => 'Actif',
    'Inactive' => 'Inactif',
  ),
  'LBL_CREATED_BY' => 'Créé par',
	'LBL_EDIT_LAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
);


?>