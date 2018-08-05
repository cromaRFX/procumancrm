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
  'LBL_MODULE_NAME' => 'Ventes',
  'LBL_MODULE_TITLE' => 'Ventes : Accueil',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher',
  'LBL_VIEW_FORM_TITLE' => 'Ventes',
  'LBL_LIST_FORM_TITLE' => 'Liste des ventes',
  'LBL_SALE_NAME' => 'Nom de la vente :',
  'LBL_SALE' => 'Vente :',
  'LBL_NAME' => 'Nom de la vente',
  'LBL_LIST_SALE_NAME' => 'Nom',
  'LBL_LIST_ACCOUNT_NAME' => 'Nom du compte',
  'LBL_LIST_AMOUNT' => 'Montant',
  'LBL_LIST_DATE_CLOSED' => 'Fermé',
  'LBL_LIST_SALE_STAGE' => 'Etape de vente',
  'LBL_ACCOUNT_ID'=>'Référence du compte',
   'LBL_CURRENCY_ID'=>'ID de la devise',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Mise à jour de la devise de la vente',
  'UPDATE_DOLLARAMOUNTS' => 'Mise à jour des montants en devise par défaut',
  'UPDATE_VERIFY' => 'Vérifier le montant',
  'UPDATE_VERIFY_TXT' => 'Vérifier la valeur des montants : chiffre uniquement et séparateur décimal (.)',
  'UPDATE_FIX' => 'Réparer les montants',
  'UPDATE_FIX_TXT' => 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Mise à jour des montants en devise par défaut',
  'UPDATE_CREATE_CURRENCY' => 'Créer une nouvelle devise',
  'UPDATE_VERIFY_FAIL' => 'Échec de vérification de l\'enregistrement :',
  'UPDATE_VERIFY_CURAMOUNT' => 'Montant actuel :',
  'UPDATE_VERIFY_FIX' => 'Lancer la réparation',
  'UPDATE_INCLUDE_CLOSE' => 'Inclure enregistrements clos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nouveau montant :',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nouvelle devise :',
  'UPDATE_DONE' => 'Terminé',
  'UPDATE_BUG_COUNT' => 'Bugs trouvés et en cours de résolution :',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs trouvés :',
  'UPDATE_COUNT' => 'Nombre d&#39;enregistrements mis à jour :',
  'UPDATE_RESTORE_COUNT' => 'Nombre de Montants enregistrés restaurés :',
  'UPDATE_RESTORE' => 'Restaurer les Montants',
  'UPDATE_RESTORE_TXT' => 'Montants restaurés sur la sauvegarde créée lors de la réparation.',
  'UPDATE_FAIL' => 'Mise à jour impossible',
  'UPDATE_NULL_VALUE' => 'Montant NULL, mise à 0',
  'UPDATE_MERGE' => 'Fusionner les devises',
  'UPDATE_MERGE_TXT' => 'Fusionner plusieurs devises en une seule devise. Si une devise présente plusieurs enregistrements, ils seront fusionnés en un seul enregistrement. Ceci fusionnera également les devises pour tous les autres modules.',
  'LBL_ACCOUNT_NAME' => 'Nom du compte :',
  'LBL_AMOUNT' => 'Montant :',
  'LBL_AMOUNT_USDOLLAR' => 'Montant (Devise par défaut) :',
  'LBL_CURRENCY' => 'Devise :',
  'LBL_DATE_CLOSED' => 'Date de cloture (prévue):',
  'LBL_TYPE' => 'Type :',
  'LBL_CAMPAIGN' => 'Campagne :',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',  
  'LBL_NEXT_STEP' => 'Prochaine étape :',
  'LBL_LEAD_SOURCE' => 'Origine principale :',
  'LBL_SALES_STAGE' => 'Phase de vente :',
  'LBL_PROBABILITY' => 'Probabilité (%) :',
  'LBL_DESCRIPTION' => 'Description :',
  'LBL_DUPLICATE' => 'Possibilité de duplication des ventes',
  'MSG_DUPLICATE' => 'Possibilité de doublon des ventes. Vous pouvez sélectionner une affaire dans la liste ci dessous ou cliquer sur "Sauvegarder" pour poursuivre la création.',
  'LBL_NEW_FORM_TITLE' => 'Créer une vente',
  'LNK_NEW_SALE' => 'Créer une vente',
  'LNK_SALE_LIST' => 'Ventes',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_TOP_SALES' => 'Top des ventes',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Êtes-vous sûr(e) de vouloir supprimer ce contact pour cette affaire ?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Êtes-vous sûr(e) de vouloir supprimer cette vente de ce projet ?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ventes',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activités à réaliser',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historique et activités terminées',
    'LBL_RAW_AMOUNT'=>'Montant brut',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Utilisateur :',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à ',
  'LBL_MY_CLOSED_SALES' => 'Mes ventes clôturées',
  'LBL_TOTAL_SALES' => 'Total des ventes',
  'LBL_CLOSED_WON_SALES' => 'Ventes clôturées et gagnées',
  'LBL_ASSIGNED_TO_ID' =>'Assigné à (ID)',
  'LBL_CREATED_ID'=>'Créé par (ID)',
  'LBL_MODIFIED_ID'=>'Modifié par (ID)',
  'LBL_MODIFIED_NAME'=>'Modifié par',
  'LBL_SALE_INFORMATION'=>'Informations de ventes',
  'LBL_CURRENCY_NAME'=>'Devise',
  'LBL_CURRENCY_SYMBOL'=>'Symbole de la devise',
  'LBL_EDIT_BUTTON' => 'Editer',
   'LBL_REMOVE' => 'Supprimer',


);

?>
