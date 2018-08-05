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
'LBL_EDIT_LAYOUT'=>'Editer la mise en page',
'LBL_EDIT_ROWS'=>'Editer les lignes',
'LBL_EDIT_COLUMNS'=>'Editer les colonnes',
'LBL_EDIT_LABELS'=>'Editer les libellés',
'LBL_EDIT_FIELDS'=>'Editer les champs personnalisés',
'LBL_ADD_FIELDS'=>'Ajouter des champs personnalisés',
'LBL_DISPLAY_HTML'=>'Afficher le code HTML',
'LBL_SELECT_FILE'=> 'Selectionner un fichier',
'LBL_SAVE_LAYOUT'=> 'Sauvegarder la mise en page',
'LBL_SELECT_A_SUBPANEL' => 'Selectionner un sous-panel',
'LBL_SELECT_SUBPANEL' => 'Selectionner un sous-pan',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Boîte à outils',
'LBL_STAGING_AREA' => 'Zone pour déposer des éléments (glisser et deposer les éléments ici)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Poubelle SuiteCRM (cliquer sur les éléments à ajouter dans la zone de dépot)',
'LBL_VIEW_SUGAR_FIELDS' => 'Voir les champs SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Voir la poubelle SuiteCRM',
'LBL_FAILED_TO_SAVE' => 'Echec de la sauvegarde',
'LBL_CONFIRM_UNSAVE' => 'Toutes les modifications seront perdues. Etes-vous sûr(e) de vouloir continuer ?',
'LBL_PUBLISHING' => 'Publication ...',
'LBL_PUBLISHED' => 'Publié',
'LBL_FAILED_PUBLISHED' => 'Echec de publication',
'LBL_DROP_HERE' => '[Glisser ici]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nom',
'LBL_LABEL'=>'Libellé',
'LBL_MASS_UPDATE'=>'Mise à jour de Masse',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Valeur par défaut',
'LBL_REQUIRED'=>'Obligatoire',
'LBL_DATA_TYPE'=>'Type',


'LBL_HISTORY'=>'Historique',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Bienvenue à Studio!</h2><br> Que souhaitez-vous faire ?<br><b> Merci de choisir une option ci-dessous.</b>',
'LBL_SW_EDIT_MODULE'=>'Editer un Module',
'LBL_SW_EDIT_DROPDOWNS'=>'Editer une Liste déroulante',
'LBL_SW_EDIT_TABS'=>'Configurer les Onglets',
'LBL_SW_RENAME_TABS'=>'Renommer les Onglets',
'LBL_SW_EDIT_GROUPTABS'=>'Configurer les Groupes d&#39;onglets',
'LBL_SW_EDIT_PORTAL'=>'Editer le Portail',
'LBL_SW_EDIT_WORKFLOW'=>'Gestion des Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Réparer les champs personnalisés',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrer les champs personnalisés',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Bienvenue au Studio!</h2><br><b>Merci de selectionner un module.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editer un Module</h2>Que souhaitez-vous faire avec ce module?<br><b>Merci de selectionner une action à réaliser.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editer les Champs personnalisés',
'LBL_SMA_EDIT_LAYOUT'=>'Editer la mise en page',
'LBL_SMA_EDIT_LABELS' =>'Editer les libellés',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Prévisualiser',
'LBL_MB_RESTORE'=>'Restaurer',
'LBL_MB_DELETE'=>'Supprimer',
'LBL_MB_COMPARE'=>'Comparer',
'LBL_MB_WELCOME'=> '<h2>Historique</h2><br> L&#39;Historique vous permet de prévisualiser avant publication le fichier sur lequel vous êtes en train de travailler. Vous pouvez comparer et restaurer les versions précédentes. Si vous restaurez un fichier il deviendra le fichier de travail. Vous devez le publier avant que celui-ci ne soit visible par n&#39;imporet qui.<br> Que souhaitez-vous faire ?<br><b> Merci de selectionner une des options ci-dessous.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Créer une Liste déroulante',
'LBL_ED_WELCOME'=>'<h2>Edition d&#39;une Liste déroulante</h2><br><b>Vous pouvez soit éditer une liste existante  soit créer une nouvelle liste.',
'LBL_DROPDOWN_NAME' => 'Nom de la Liste déroulante:',
'LBL_DROPDOWN_LANGUAGE' => 'Langue de la Liste déroulante:',
'LBL_TABGROUP_LANGUAGE' => 'Langue du Groupe:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Edition de Champs personnalisés</h2><br><b>Vous pouvez soit voir et editer un champ personnalisé existant, créer un nouveau champ personnalisé ou nettoyer le cache des champs personnalisés.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Voir les Champs personnalisés',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Créer un Champ personnalisé',
'LBL_EC_CLEAR_CACHE'=>'Effacer le Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historique</h2><br><b>Merci de selectionner le fichier que vous souhaitez voir.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Valeur à afficher',
'LBL_DD_DATABASEVALUE'=>'Valeur dans la base de données',
'LBL_DD_ALL'=>'Tout',

//BUTTONS
'LBL_BTN_SAVE'=>'Sauvegarder',
'LBL_BTN_CANCEL'=>'Annuler',
'LBL_BTN_SAVEPUBLISH'=>'Sauvegarder & Publier',
'LBL_BTN_HISTORY'=>'Historique',
'LBL_BTN_NEXT'=>'Suivant',
'LBL_BTN_BACK'=>'Retour',
'LBL_BTN_ADDCOLS'=>'Ajouter des Colonnes',
'LBL_BTN_ADDROWS'=>'Ajouter des Lignes',
'LBL_BTN_UNDO'=>'Annuler',
'LBL_BTN_REDO'=>'Réappliquer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Ajouter Champ personnalisé',
'LBL_BTN_TABINDEX'=>'Editer l&#39;ordre des onglets',

//TABS
'LBL_TAB_SUBTABS'=>'Sous-onglets',
'LBL_MODULES'=>'Modules',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administration',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurer les groupes d&#39;onglets',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'La mise en page de groupe d&#39;onglets sera utilisé quand un utilisateur choisira d&#39;utiliser l&#39;option Onglets Groupés dans Mon Compte > Options de Mise en page. Le groupe VIDE n&#39;est pas affiché dans la barre de navigation.',
'LBL_RENAME_TAB_WELCOME'=>'Cliquer sur chaque onglets Valeur Affichée dans la table ci-dessous pour renommer l&#39;onglet.',
'LBL_DELETE_MODULE'=>'Supprimer&nbsp;le&nbsp;Module<br />Du&nbsp;Groupe',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Afficher l&#39;onglet "VIDE" dans la barre de navigation. Par défaut, le groupe "VIDE" affiche les modules qui ne sont pas dans un autre Groupe.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Pour modifier les libellés dans Groupes d&#39;onglets dans d&#39;autres langues, veuillez choisir une langue, modifier le libellé et cliquer sur "Sauvegarder et déployer".',
'LBL_ADD_GROUP'=>'Ajouter un Groupe',
'LBL_NEW_GROUP'=>'Nouveau Groupe',
'LBL_RENAME_TABS'=>'Renommer les Onglets',
'LBL_DISPLAY_OTHER_TAB' => 'Afficher l&#39;onglet &#39;VIDE&#39;',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Défaut',
'LBL_ADDITIONAL'=>'Additionel',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'Il y a trois colonnes affichées ci-dessous. La colonne par défaut contient les champs qui sont affichés dans la vue liste par défaut, la colonne supplémentaire contient les champs qu&#39;un utilisateur peut choisir pour créer une vue personnalisée, et les colonnes disponibles pour un administrateur à ajouter par défaut ou des colonnes supplémentaires pour les utilisateurs mais qui ne sont pas utilisées actuellement.',
'LBL_LISTVIEW_EDIT'=>'Editeur de la Vue Liste',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Le Champ existe déjà',
'ERROR_INVALID_KEY_VALUE'=> "Erreur: valuer de clé invalide: [&#39;]",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portail SuiteCRM',
'LBL_SMP_WELCOME'=>'Merci de sélectionner le module que vous voulez éditer dans la liste suivante',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Synchro portail',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Il y a 2 colonnes ci-dessous: Mettez par défaut les fichiers qui doivent être affiché ou être disponibles pour être affichés. Faites simplement un "glisser-déposer". Vous pouvez également réordonner les éléments avec un "glisser-déposer".',
'LBL_SP_STYLESHEET'=>'Uploader une feuille de styles',
'LBL_SP_UPLOADSTYLE'=>'Cliquez sur le bouton Parcourir et sélectionnez une feuille de styles à uploader.<br>La prochaine fois que vous synchroniserez le portail, celui-ci récupérera la feuille de style.',
'LBL_SP_UPLOADED'=> 'Uploadé',
'ERROR_SP_UPLOADED'=>'Merci de vérifier que vous uploadez un fichier de feuille de styles css.',
'LBL_SP_PREVIEW'=>'Voici un aperçu de ce que votre feuille de style présentera',

	'LBL_SAVE' => 'Sauvegarder' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Annuler' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Réappliquer' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Edition à la volée' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Ajouter champ' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximiser' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimiser' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publier' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Ajouter des lignes' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Ajouter champ' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editer' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Sélectionner la langue a éditer.',
'LBL_SINGULAR' => 'Nom du module au singulier',
'LBL_PLURAL' => 'Nom du module au pluriel',
'LBL_RENAME_MOD_SAVE_HELP' => 'Cliquer sur <b>Sauvegarder</b> pour appliquer les changements.'

);
?>