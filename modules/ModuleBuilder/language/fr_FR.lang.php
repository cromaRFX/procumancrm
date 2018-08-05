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


$mod_strings = array(
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Masquer options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered by SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Quand vous choisissez le <b>Type</b> de module que vous voulez créer, garder à l&#39;esprit les types de champ que vous aimeriez avoir dans le module.<br /><br />Chaque modèle de module contient un ensemble de champ afférents au type du module décrit par le titre.<br /><br /><b>Basique</b> - Fournit les champs basiques qui apparaissent dans les modules standard comme le Nom, Assigné à, l&#39;équipe, la date de création et la Description.<br /><br /><b>Sociétés</b> - Fournit les champs spécifiques aux organisations comme le Nom de la Société, l&#39;Industrieet l&#39;adresse de facturation. Utiliser ce modèle pour créer les modules qui sont similaires au module standard Comptes.<br /><br /><b>Personne</b> - Fournit les champs spécifiques aux personnes individuelles comme la Salutation, le Titre, le Nom, l&#39;Adresse et le Numéro de téléphone. Utiliser ce modèle pour créer des modules qui sont similaires au module standard Contacts et Leads.<br /><br /><b>Problème</b> - Fournitdes champs spécifiques aux bugs et aux différents cas comme un Numéro, un Statuts, une Priorité et une Description. Utiliser ce modèle pour créer des modules qui sont similaires aux modules standards Suivi de Bugs et Cas.<br /><br />Note: Aprés avoir créé le module, vous pouvez éditer les champs fournit par le modèle, ainsi que de créer et d&#39;ajouter des champs personnalisés à l&#39;ensemble des champs déjà contenus dans le module.',
            'modify' => 'Il y a trois colonnes d&#39;affichées à gauche. La colonne "Défaut" contient les champs affichés par défaut dans les vues listes, la colonne "Disponible" contient les champs dont l&#39;utilisateur peut se servir pour créer des vues listes personnalisées, et la colonne "Caché" contient les champs disponible pour vous en tant qu&#39;administrateur et que vous pouvez ajouter dans la colonne "Disponible" ou "Défaut" pour que les utilisateurs puissent s&#39;en servir.',
            'name' => 'Ceci est le <b>Nom</b> du package. Ce nom sera affiché durant l&#39;installation.',
            'author' => 'Ceci est le nom de l&#39;<b>auteur</b> qui est affiché durant l&#39;installation comme le nom de l&#39;entité qui à créé ce package. L&#39;auteur peut être une entité physique (individu) ou morale (société).',
            'description' => 'Ceci est la <b>Description</b> du package qui sera affichée durant l&#39;installation.',
            'publishbtn' => 'En cliquant sur ce bouton cela permet d&#39;enregistrer toutes les modifications, puis de créer un fichier zip contenant une version installable de ce package.',
            'deploybtn' => 'En cliquant sur ce bouton cela permet d&#39;enregistrer toutes les modifications puis d&#39;installer ce package sur l&#39;environnement actuel.',
            'duplicatebtn' => 'Cliquez sur <b>Dupliquer</b> pour copier les propriétés du module dans un nouveau module et afficher le nouveau module. <br /> <br />Pour le nouveau module, un nouveau nom sera généré automatiquement en ajoutant un nombre à la fin du nom du module utilisé pour créer le nouveau module.',
            'exportbtn' => 'Cliquez sur <b>Exporter</b> pour créer un fichier zip contenant toutes les modifications faites dans ce package.<br><br>Le fichier généré n&#39;est pas une version installable du package.<br><br>Utiliser le <b>Chargeur de Module</b> pour importer le fichier zip sur un autre SugarCRM, le package apparaitra avec toutes ces modifications dans le Module Builder.',
            'deletebtn' => 'Cliquez sur <b>Supprimer</b> supprimera ce module.',
            'savebtn' => 'Cliquez sur ce bouton sauvegarde les changements et les rend actifs',
            'existing_module' => 'Cliquez sur l&#39;icône du <b>module</b> pour modifier les propriétés et personnaliser les champs, les relations et la mise en page associée à ce module.',
            'new_module' => 'Cliquez sur <b> nouveau module </b> pour créer un nouveau module pour ce package.',
            'key' => 'La <b>Clé</b> (chaîne alphanumérique  de 5 lettres max) sera utilisée pour préfixer tous les répertoires, les noms de classe et les tables de base de données de tous les modules du Package.<br /><br />Cette clé est utilisée dans un effort d&#39;unicité des noms de table.',
            'readme' => 'Cliquer pour ajouter un texte <b>Lisez moi</b> pour ce package.<br /><br />Ce Lisez moi sera disponible durant l&#39;installation.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Entrez un <b>Nom</b> pour le module. L\'<b>Etiquette</b> que vous saisissez apparaitra dans l\'onglet de navigation. <br/><br/>Choisissez d\'afficher un onglet de navigation pour le module en cochant la case à cochet l\'<b>Onglet de navigation</b> <br/><br/>Choisissez alors le type de module que vous souhaitez créer. <br/><br/>Sellectionnez un modèle (template) type. Chaque modèle (template) contient une collection de champs spécifique, De même qju\'une apparence pré-définie, à utiliser comme base pour votre module. <br/><br/>Cliquez <b>Sauvegarder</b> pour créer le module.',
            'modify' => 'Vous pouvez personnaliser le module ou en modifier les propriétés <b>Champs</b>, <b>Relations</b> et <b>Apparence</b> ',
            'importable' => 'Cocher la case <b>Import</b> pour activer la fonctionnalité d&#39;import pour ce module.<br><br>Un lien vers l&#39;assistant d&#39;Import apparaitra dans le menu des raccourcis de ce module. L&#39;assistant d&#39;import facilite l&#39;import des données depuis une source externe dans le module créé.',
            'team_security' => 'Cochez cette case permet d&#39;activer la sécurité par équipe pour ce module.',
            'reportable' => 'Cochez cette case permet d&#39;avoir de pouvoir réaliser des rapports sur ce module.',
            'assignable' => 'Cochez cette case permet d&#39;assigné à un utilisateur les enregistrements de ce module.',
            'has_tab' => 'Cochez cette case permet d&#39;avoir un onglet de navigation pour ce module.',
            'acl' => 'Cochez cette case permet d&#39;activer les contrôles d&#39;accès à ce module y compris la sécurité par champ',
            'studio' => 'Cochez cette case permet d&#39;autoriser les admins à personnaliser ce module via le Studio',
            'audit' => 'Cochez cette case permet de supporter les audits de modification. Cela stockera les changements de certains champs, les admins pourront ainsi visualiser les changements.',
            'viewfieldsbtn' => 'Cliquez sur <b>Voir les champs</b> pour afficher les champs associés au module et pour créer/modifier des champs personnalisés.',
            'viewrelsbtn' => 'Cliquez sur <b>Voir les Relations</b> pour afficher les liens associés à ce module et créer de nouvelles relations.',
            'viewlayoutsbtn' => 'Cliquez sur <b>Voir les mise en page</b> pour afficher la mise en page du module et personnaliser la mise en page des champs.',
            'duplicatebtn' => 'Cliquez sur <b>Dupliquer</b> pour copier les propriétés du module dans un nouveau module et afficher le nouveau module. <br /> <br />Pour le nouveau module, un nouveau nom sera généré automatiquement en ajoutant un nombre à la fin du nom du module utilisé pour créer le nouveau module.',
            'deletebtn' => 'Cliquez sur <b>Supprimer</b> pour supprimer ce module.',
            'name' => 'Ceci est le <b>Nom</b> du module.actuel. <br/><br/> Le nom doit être un caractère alpha-numérique et doit commencer par une lettre et ne contenir aucun espace (Exemple: Gestion_RH)',
            'label' => 'Ceci est le <b>Libellé</b> qui apparaitra dans l&#39;onglet de navigation pour ce module.',
            'savebtn' => 'Cliquez sur <b>Sauvegarder</b> pour sauvegarder toutes les données liées à ce module.',
            'type_basic' => 'La mise en page <b>Basique</b> fournie les champs basiques, comme le nom, assigné à, l&#39;équipe, la date de création et la description.',
            'type_company' => 'Le modèle <b>Société</b> prévoit la mise en page des champs spécifiques, tels que Nom de l&#39;entreprise, l&#39;activité et l&#39;adresse de facturation. <br /><br />Utiliser ce modèle afin de créer des modules qui sont semblables au module Compte.',
            'type_issue' => 'Le modèle <b>Problème</b> prévoit la mise en page des champs spécifiques aux Bugs et Tickets, comme le Nombre, le Statut, la Priorité et la Description.<br /><br />Utilisez ce modèle afin de créer des modules qui sont semblables aux modules Ticket et Suivi de Bugs.',
            'type_person' => 'Le modèle <b>Personne</b> prévoit la mise en page des champs spécifiques aux personnes, comme le Titre, le Nom, l&#39;Adresse et le Numéro de Téléphone.<br /><br />Utiliser ce modèle afin de créer des modules qui sont semblables aux modules Contacts et Leads.',
            'type_sale' => 'Le modèle <b>Vente</b> prévoit la mise en page des champs spécifiques aux Affaires, comme la source du Lead, les phases de l&#39;affaire, le montant et la probabilité. <br/><br/>Utiliser ce modèle pour créer des modules qui sont semblables au module Affaire.',
            'type_file' => 'Le modèle <b>Fichier</b> prévoit la mise en page des champs spécifiques au Document, comme un Nom de fichier, un Type de document et une date de Publication.<br><br>Utiliser ce modèle pour créer des modules qui sont semblables au module Document.',

        ),
        'dropdowns' => array(
            'default' => 'Il y a deux colonnes affichées à gauche. La colonne de droite, intitulée "Mise en Page Courante" ou "Prévisualisation de la Mise en Page", est l&#39;endroit où vous pouvez changer la mise en page du module. La colonne de gauche, intitulée "Boîte à outils", contient des éléments utiles et des outils pour une utilisation lors de l&#39;édition de la mise en page. <br /> <br /> Si la zone de mise en page est intitulée "Mise en Page Courante" alors vous travaillez sur une copie de la mise en page actuellement utilisée par le module pour l&#39;affichage. <br /> <br /> Si elle est intitulée "Prévisualisation de la Mise en Page" alors vous travaillez sur une copie créée plus tôt par un clic sur le bouton Enregistrer, qui pourraient déjà avoir été changée par rapport à la version courante vue par les utilisateurs de ce module.',
            'editdropdown' => 'Les listes déroulantes peuvent être utilisé pour des champs de type custom ou standard dans tous les modules.<br><br>Fournir un <b>Nom</b> pour la liste déroulante.<br><br>Si plusieurs packs de langue sont installés, vous pouvez Sélectionnez la <b>Langue</b> à utiliser pour les éléments de la liste.<br><br>Dans le champ <b>Nom de l&#39;élément</b>, saisir un nom pour une option de la liste déroulante. Ce n&#39;est pas le nom qui apparait dans les listes déroulantes visibles par les utilisateurs.<br><br>Dans le champ <b>libellé Affiché</b> saisir un libellé qui sera visible par les utilisateurs.<br><br>Après avoir fournit un nom et un libellé, cliquez sur <b>Ajouter<b> pour ajouter cet élément à la liste déroulante.<br><br>Pour ordonner les enregistrements dans la liste, glisser/déposer les enregistrements dans l&#39;ordre voulue.<br><br>Pour éditer un libellé d&#39;un élément, cliquez sur <b>l&#39;icône Editer</b>, et saisir un nouveau libellé. Pour supprimer un élément de la liste déroulante, cliquez sur <b>l&#39;icône Supprimer</b>.<br><br> Pour annuler un changement effectuer sur un lable, cliquez sur <b>Annuler</b>. Pour re-effectuer un changement annulé, cliquez sur <b>Re-Faire</b>.<br><br>Cliquez sur <b>Sauvegarder</b> pour sauvegarder la liste déroulante.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tout les champs qui peuvent être affichés dans le <b>Sous-panneau</b> apparaissent ici..<br><br>La colonne <b>par Défaut</b> contient les champs qui sont affichés dans le Sous-panneau.<br/><br/>La colonne <b>Cachée</b> contient des champs qui peuvent être ajoutés à la colonne par Défaut.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez sur <b>voir l&#39;historique</b> pour voir et restaurer une version précédement sauvegardée de la mise en page.',
            'historyDefault' => 'Cliquez sur <b>Réinitialiser</b> pour restaurer l&#39;affichage par défaut.',
            'Hidden' => 'Les champs cachés sont des champs qui ne sont pas disponibles aux utilisateurs et qui ne peuvent donc pas les utiliser dans les vues listes.',
            'Default' => 'Les champs par défaut sont proposés aux utilisateurs qui n&#39;ont pas paramétrés de liste personnalisée.',

        ),
        'listViewEditor' => array(
            'modify' => 'Tout les champs qui peuvent être affiché dans la <b>Vue Liste</b> apparaissent ici.<br><br>La colonne <b>par Défaut</b> contient les champs qui sont affichés dans la Vue Liste par Défaut.<br/><br/>La colonne <b>Disponible</b> contient des champs qu\'un utilisateur peut sélectionner dans la Recherche pour créer une Vue Liste personnalisée<br/><br/>La colonne <b>Cachée</b> contient des champs qui peuvent être ajoutés à la colonne Disponible ou par Défaut'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique une mise en page sauvegardé précédemment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans la mise en page précédemment sauvegardé. Pour modifier le libellé du champ, cliquez l\'icone Editer à coté du champ concerné.',
            'historyDefault' => 'Cliquez <b>Restaurer Défaut</b> pour restaurer le visuel sur la mise en page originale.<br><br><b>Restaurer Défaut</b> ne restaure que l\'emplacement du champ dans la mise en page originale. Pour modifier les libellés, cliquez l\'icone Editer à coté du champ concerné.',
            'Hidden' => 'Les champs <b>Cachés</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Available' => 'Les champs <b>Disponible</b> ne sont pas affichés par défaut, mais ils peuvent être ajoutés à la liste des vues par les utilisateurs..',
            'Default' => 'Les champs par <b>Défaut</b> sont proposés dans les listes de vues qui n&#39;ont pas personnalisées par les utilisateurs.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Tous les champs qui peuvent être affichés dans la <b>Vue Liste</b> apparaissent ici.<br><br>La colonne <b>par Défaut</b> contient les champs qui sont affichés dans la Vue Liste par défaut.<br/><br/>LA colonne <b>Cachée</b> contient des champs qui peuvent être ajoutés à la colonne Disponible ou par Défaut.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un modèle sauvegardé précédemment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le modèle précédemment sauvegardé. Pour modifier le libellé du champ, cliquez l\'icone Editer à coté du champ concerné.',
            'historyDefault' => 'Cliquez <b>Restaurer Défaut</b> pour restaurer le visuel sur le modèle original.<br><br><b>Restaurer Défaut</b> ne restaure que l\'emplacement du champ dans le modèle original. Pour modifier les libellés, cliquez l\'icone Editer à coté du champ concerné.',
            'Hidden' => 'Les champs <b>Cachés</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Default' => 'Les champs par <b>Défaut</b> sont proposés dans les listes de vues qui n&#39;ont pas personnalisées par les utilisateurs.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Tout les champs qui peuvent être affichés dans le <b>Panneau Recherche</b> apparaissent ici..<br><br>La colonne <b>par Défaut</b> contient les champs qui sont affichés dans le Panneau Recherche.<br/><br/>La colonne <b>Cachée</b> contient des champs disponibles pour vous en tant qu\'admin à ajouter au formulaire de Recherche.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
            'Hidden' => 'Les champs <b>Cachés</b> n\'apparaissent pas dans la recherche.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un modèle sauvegardé précédemment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le modèle précédemment sauvegardé. Pour modifier le libellé du champ, cliquez l\'icone Editer à coté du champ concerné.',
            'historyDefault' => 'Cliquez <b>Restaurer Défaut</b> pour restaurer le visuel sur le modèle original.<br><br><b>Restaurer Défaut</b> ne restaure que l\'emplacement du champ dans le modèle original. Pour modifier les libellés, cliquez l\'icone Editer à coté du champ concerné.',
            'Default' => 'Les champs <b>par Défaut</b> apparaissent dans la Recherche.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'La zone de <b>Mise en page</b> contient tous les champs qui sont affiché dans le <b>Vue Détail</b>.<br><br>La <b>Boîte à outils</b> contient la <b>Corbeille</b> ainsi que tous les éléments qui peuvent être ajoutés dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/Déposer sur les éléments désirés entre la <b>Boîte à outils</b> et la zone de <b>Mise en page</b> où vous souhaitez voir apparaître le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/Déposer sur les éléments désirés entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprimés apparaîtront alors dans la liste des champs diponible au sein de la boîte à outils afin de pouvoir les remettre en page ultérieurement si besoin.'
        ,
            'defaultquickcreate' => 'La zone <b>Mise en page</b> contient les champs actuellement visible dans le fomulaire de <b>Création Rapide</b>.<br><br>Le formulaire de création rapide apparait dans le sous-panel du module où l&#39;on a cliqué sur le bouton de Création.<br><br>La <b>Boîte à outils</b> contient la <b>Corbeille</b> ainsi que tous les éléments qui peuvent être ajoutés dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/Déposer sur les éléments désirés entre la <b>Boîte à outils</b> et la zone de <b>Mise en page</b> où vous souhaitez voir apparaître le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/Déposer sur les éléments désirés entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprimés apparaîtront alors dans la liste des champs diponible au sein de la boîte à outils afin de pouvoir les remettre en page ultérieurement si besoin.'
        ,
            //this defualt will be used for edit view
            'default' => 'La zone de <b>Mise en page</b> contient tous les champs qui sont affichés dans le menu d\'<b>Édition de Vue</b>.<br><br>La <b>Boîte à outils</b> contient la <b>Corbeille</b> ainsi que tous les éléments qui peuvent être ajoutés dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/Déposer sur les éléments désirés entre la <b>Boîte à outils</b> et la zone de <b>Mise en page</b> où vous souhaitez voir apparaître le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/Déposer sur les éléments désirés entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprimés apparaîtront alors dans la liste des champs disponible au sein de la boîte à outils afin de pouvoir les remettre en page ultérieurement si besoin.'
        ,
            'saveBtn' => 'Cliquez sur ce bouton sauvegarde la mise en page et vous permet ainsi de conserver vos changements. Quand vous retournez sur ce module vous pourrez commencer à changer cette mise en page. Votre mise en page ne sera pas visible par les utilisateurs tant que vous n&#39;avez pas cliqué sur le bouton "Sauvegarder et Publier".',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un modèle sauvegardé précédemment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le modèle précédemment sauvegardé. Pour modifier le libellé du champ, cliquez l\'icone Editer à coté du champ concerné.',
            'historyDefault' => 'Cliquez <b>Restaurer Défaut</b> pour restaurer le visuel sur le modèle original.<br><br><b>Restaurer Défaut</b> ne restaure que l\'emplacement du champ dans le modèle original. Pour modifier les libellés, cliquez l\'icone Editer à coté du champ concerné.',
            'publishBtn' => 'Cliquez sur ce bouton pour publier la mise en page. Cela rendra cette mise en page immédiatement visible par les utilisateurs de ce module.',
            'toolbox' => 'La boîte à outils contient une variété de fonctions utiles pour éditer la mise en page, y compris une zone poubelle, un ensemble d&#39;éléments supplémentaires et un ensemble de champ disponibles. Chacun de ces éléments peut être utilisé dans la mise en place via un glisser/déposer.',
            'panels' => 'Cette zone affiche ce que votre mise en page montrera aux utilisateurs de ce module quand il sera publié.<br /><br /> Vous pouvez re-positionner les éléments comme les champs, les lignes et les panels via un glisser/déposer; supprimer des éléments en les déplaçant dans la zone poubelle de la boite à outils, ou ajouter des nouveaux éléments en les faisant glisser depuis la boite à outils vers l&#39;endroit souhaité dans votre mise en page.',
            'delete' => 'Glisser / Déposer ici les éléments de votre mise en page à supprimer',
            'property' => 'Editer le libellé affiché pour le champ.<br><br>L&#39;<b>ordre de tabulation</b> permet de controler l&#39;ordre dans lequel le basculement d&#39;un champ à l&#39;autre ce fait au moyen de la touche Shift.',
        ),
        'fieldsEditor' => array(
            'default' => 'Les <b>Champs</b> qui disponibles listés ici pour ce module sont triés par Nom de Champs.<br><br>Les champs personnalisés créés pour ce module apparaissent au dessus des champs qui sont disponibles par défaut pour le module <br><br>Pour modifier un champ, cliquez sur le <b>Nom du Champ</b>.<br/><br/>Pour créer un nouveau champ cliquez sur <b>Ajouter Champ</b>.',
            'mbDefault' => 'Les <b>Champs</b> disponible pour le module sont listés ici et triés par Nom.<br><br>Pour personnaliser un libellé ou les propriétés d&#39;un champ, cliquez sur le nom du champ.<br><br>Pour créer un nouveau champ, cliquez sur <b>Ajouter un champ</b>. Le libellé ainsi que certaines autres propriétés du champs peuvent être éditées après la création du champ en cliquant sur son libellé.<br><br> Après le déploiement du module, les champs créés dans le Module Builder apparaissent comme des champs standards pour ce module dans le Studio.',
            'addField' => 'Sélectionnez un <b>Type de donnée</b> pour le nouveau champ. Le type que vous sélectionnez détermine les propriétés du champ à définir. Par exemple, seuls des chiffres peuvent être saisis si le type de données est Entier.<br><br>Fournir un <b>Nom</B> pour le champ. Le nom doit être sous forme alphanumérique sans espace, ni caractères spéciaux (sauf le caractère underscore "_").<br><br>Le <b>libellé affiché</b> est le libellé qui apparaitra dans les mises en page du module pour ce champ. Le <b>libellé système</b> est utilisé pour référencer le champ dans le code source.<br><br>En fonction du type de donnée, les propriétés à définir ne sont pas les mêmes.<br><br>Un<b> Texte d&#39;Aide</b> apparait temporairement au dessus du champ pour informer l&#39;utilisateur sur le type du champ utilisé.<br><br>Un<b> Texte de Commentaire</b> est seulement visible dans le Studio et/ou le Module Builder, il peut être utilisé pour décrire le champ aux administrateurs.<br><br>La <b>Valeur par Défaut</b> apparait dans le champ. Les utilisateurs peuvent entrer une nouvelle valeur dans le champ ou utiliser la valeur par défaut. Sélectionnez la case à cocher <b>Mise à jour Globale</b> pour rendre ce champ accessible dans cette fonctionnalité.<br><br>La <b>taille maximum</b> détermine le nombre maximum de caractères qui peuvent être saisis pour le champ.<br><br>Cocher la case <b>Champs Requis</b> pour rendre ce champ obligatoire dans les interface de saisie.<br><br>Sélectionnez la case à cocher <b>Rapports</b> pour rendre ce champ disponible dans les filtres et les données affichables dans les rapports.<br><br>Sélectionnez la case à cocher <b>Auditer</b> pour activer l&#39;historique des modifications lorsque ce champ change de valeur.<br><br>D&#39;autres propriétés peuvent être demandées en fonction du type de donnée.',
            'editField' => 'Le <b>libellé</b> d&#39;un champ Sugar peut être personnalisé. Les autres propriétés ne peuvent pas être modifiées.<br><br>Cliquez sur <b>Cloner</b> pour créer un nouveau champ avec les mêmes propriétés.',
            'mbeditField' => 'Le <b>libellé affiché</b> pour un modèle de champ peut être personnalisé. Les autres propriétés du champs ne peuvent plus être personnalisées.<br><br>Cliquez sur <b>Cloner</b> pour créer un nouveau champ avec les mêmes propriétés.<br><br>Pour supprimer un modèle de champ qui ne pas être affiché dans le module, il faut supprimer le champ des <b>mises en page</b> appropriées.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Cliquez sur <b>Export</b> pour créer un fichier .zip du package qui contient les personnalisations que vous désirez exporter.',
            'name' => 'Ceci est le <b>Nom</b> du package qui sera affichée durant l&#39;installation.',
            'author' => 'Ceci est le nom de l&#39;<b>auteur</b> qui est affiché durant l&#39;installation comme le nom de l&#39;entité qui à créé ce package. L&#39;auteur peut être une entité physique (individu) ou morale (société).',
            'description' => 'Ceci est la <b>Description</b> du package qui sera affichée durant l&#39;installation.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenue dans <b>La boite à outils des développeurs</b>. <br /><br />Utiliser les outils qui sont ici pour créer, gérer et personnaliser vos modules et vos champs.',
            'studioBtn' => 'Utiliser le <b>Studio</b> pour personnaliser les modules installés en changeant le positionnement des champs, Sélectionnez les champs disponibles et créer des champs de données personnalisés.',
            'mbBtn' => 'Utiliser le <b>Module Builder</b> pour créer de nouveaux modules.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Utiliser l&#39;<b>Editeur de liste déroulante</b> pour ajouter ou éditer une des listes déroulantes globales de l&#39;application.',
            'appBtn' => 'Utiliser le mode Application pour personnaliser les différentes propriétés du programme, comme le nombe de rapports TPS affichés sur la page d&#39;accueil',
            'backBtn' => 'Retourner à l&#39;étape précédente.',
            'studioHelp' => 'Utiliser le <b>Studio</b> pour personnalisé les modules installés. Sélectionnez un module pour commencer.',
            'moduleBtn' => 'Cliquer pour éditer le module.',
            'moduleHelp' => 'Sélectionnez le composant du module que vous voulez éditer',
            'fieldsBtn' => 'Editer les informations qui sont stockées dans le module. Vous pouvez créer, ici, des champs personnalisés.',
            'labelsBtn' => 'Editer les libellés à afficher pour les valeurs dans ce module.',
            'relationshipsBtn' => 'Personnalisation des relations entre le module courant et les autres modules de SugarCRM.',
            'layoutsBtn' => 'Editer la mise en page pour les vues Edition, Détails, Liste, et Recherche.',
            'subpanelBtn' => 'Editer quelles informations sont affichées dans les sous-panels de ce module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Sélectionnez une mise en page à éditer.<br/<br />Pour changer la mise en page qui contient des champs de données qui peuvent être saisis, cliquez sur <b>Editer la vue</b>.<br /><br />Pour changer la mise en page qui affiche les données saisies dans l&#39;édition, cliquez sur <b>Vue Détails</b>.<br /><br />Pour changer les colonnes qui apparaissent dans les listes par défaut, cliquez sur <b>Vue Liste</b>.<br /><br />Pour changer la mise en page des recherches basiques et avancées, cliquez sur <b>Recherche</b>.',
            'subpanelHelp' => 'Sélectionnez le sous-panel que vous voulez modifier en cliquant sur l&#39;cone adéquate.',
            'newPackage' => 'Cliquez sur <b>Nouveau Package</b> pour créer un nouveau package.',
            'exportBtn' => 'Cliquez sur "Exporter les personnalisations" pour créer un package contenant les modifications faites dans le Studio.',
            'mbHelp' => '<b>Bienvenue dans le Module Builder.</b><br /><br />Utiliser le <b>Module Builder</b> pour créer des projets qui contiennent des modules personnalisés basés sur des objets standars ou personalisés. <br /><br />Pour commencer, cliquez sur <b>Nouveau Package</b> pour créer un nouveau Package, ou Sélectionnez un package à éditer.<br /><br />Un <b>package</b> agit comme un agit comme un conteneur pour les modules personnalisés, qui sont tous une partie d&#39;un projet. Le package peut contenir un ou plusieurs modules personnalisés peuvant être liées entre eux ou avec des modules existants dans l&#39;application. <br /> <br /> Exemples: Vous avez peut-être envie de créer un package contenant un module de personnalisé, ce qui est relati au module Compte. Ou bien, vous pouvez créer un package contenant plusieurs nouveaux modules qui fonctionnent ensemble comme un projet et qui sont liés les uns aux autres et aux modules existants.',
            'viewBtnEditView' => 'Personnaliser la mise en page de l&#39;<b>Vue Edition</b> du module.<br><br> La Vue Edition est le formulaire contenant les champs permettant aux utilisateurs de saisir des données.',
            'viewBtnDetailView' => 'Personnaliser la mise en page de la <b>Vue Détail</b> du module.<br><br> La Vue Detail permet de visualiser les données saisies par les utilistateurs.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'personnaliser la mise en page de la <b>Vue Liste</b> du module.<br><br> La Vue Liste affiche les résultats des forumlaires de recherche.',
            'searchBtn' => 'Personnaliser la mise en page de la <b>Recherche</b> du module.<br><br>Permet de déterminer les champs qui seront utilisés pour filter les enregistrements qui apparaitront dans la Vue Liste.',
            'viewBtnQuickCreate' => 'Personnaliser la mise en page de la <b>Création rapide</b> du module.<br><br>Le formulaire de Création rapide apparait dans les sous-panels ainsi que dans le module Email.',
            'addLayoutHelp' => "Pour créer une mise en page personnalisée pour un groupe de sécurité, sélectionnez le groupe de sécurité puis la mise en page que vous souhaitez personnaliser.",

            'searchHelp' => 'Sélectionnez une mise en page recherchée à éditer.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'Les <b> Popups </ b> qui peuvent être personnalisés apparaissent ici.<br>',
            'PopupListViewBtn' => 'La <b>vue liste de la popup</b> affiche les enregistrements basés sur la vue recherche de la popup.',
            'PopupSearchViewBtn' => 'La <b>vue recherche de la popup</b> permet de rechercher les enregistrements dans la vue liste de la popup.',
            'BasicSearchBtn' => 'Personnaliser le formulaire de la <b>Recherche Basique</b> qui apparait dans l&#39;onglet de Recherche Basique dans la zone Recherche du module.',
            'AdvancedSearchBtn' => 'Personnaliser le formulaire de la <b>Recherche Avancée</b> qui apparait dans l&#39;onglet de Recherche Avancée dans la zone Recherche du module.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Toutes les <b>relations</b> entre le module courant et les autres modules apparaissent ici.<br><br>Le <b>Nom</b> de la relation est le nom système (stocké dans la base de données) de la relation.<br><br>Le <b>Module principal</b> est le module "propriétaire" des relations. Les propriétés de la relation sont stockées dans les tables rattachés au module principal. Par exemple, toutes les propriétés des relations dont le module Compte est le module principal sont stockées dans les tables contenant les données des Comptes.<br><br>Cliquez sur une des relations présentes dans le tableau ci-dessous pour voir et éditer les propriétés associées à cette relation.<br><br>Cliquez sur <b>Ajouter une relation</b> pour créer une nouvelle relation.<br><br>Des relations ne peuvent être créées qu&#39;entre deux modules déjà déployés.',
            'relationshipHelp' => 'Des <b>relations</b> peuvent être créées entre un module principal et un module déployé.<br><br>Les relations sont visibles de manière explicite via des sous-panels et des champs liés dans une vue d&#39;un enregistrement d&#39;un module.<br><br> Si une relation existe déjà entre deux modules, toutes nouvelles relations créés entre ces deux modules n&#39;apparaitra pas de manière explicite.<br><br>Sélection un des <b>Types</b> de relation possible pour le module:<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs liés.<br><br><b>One-to-Many</b> - L&#39;enregistrement du module principal contient un sous-panel et l&#39;enregistrement du module lié contient un champ lié.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> Sélectionnez le <b>Module Lié</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, sélectioner la vue du sous-panel pour le module approprié.<br><br>Cliquez sur <b>Déployer</b> pour créer la relation. Une fois une relation créé, celle-ci ne peut être ni modifié ni supprimé.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'Editer une liste déroulante globale',
            'addDropDownBtn' => 'Ajouter une nouvelle liste déroulante globale',
        ),
        'fieldsHelp' => array(
            'default' => 'Les <b>Champs</b> disponibles listés ici pour le module sont triés par Nom.de champs<br><br>Le modèle de module inclus un ensemble de champs.<br><br>Pour créer un nouveau champ, cliquez sur <b>Ajouter un champ</b>. Le libellé ainsi que certaines autres propriétés du champs peuvent être éditées après la création du champ en cliquant sur son libellé.<br><br> Après le déploiement du module, les champs créés dans le Module Builder apparaissent comme des champs standards pour ce module dans le Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Les <b>relations</b> créées entre le module courant et les autres modules apparaissent ici.<br><br>Le <b>Nom</b> de la relation est le nom système (stocké dans la base de données) de la relation.<br><br>Le <b>Module principal</b> est le module "propriétaire" des relations. Les propriétés de la relation sont stockées dans les tables rattachés au module principal. Le <b>Type</b> est le type de relation existante entre le Module Primaire et le <b>Module Correspondant</b>.<br><br>Cliquez sur le titre de la colonne pour trier selon cette colonne<br><br>Cliquez sur <b>une ligne du tableau des relations pour voir et modifier les propriétés associées à cette relation.<br><br>Cliquez <b>Ajouter relation</b> pour créer une nouvelle relation.',
            'addrelbtn' => 'Une aide apparait pour créer une relation.',
            'addRelationship' => 'Des <b>relations</b> peuvent être créées entre le module et un autre module personnalisé ou un module déployé.<br><br>Les relations sont visible au travers des sous-panels ou des champs liés dans un enregistrement du module.<br><br>Sélection un des <b>Types</b> de relation possible pour le module:<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs liés.<br><br< <b>One-to-Many</b> - L&#39;enregistrement du module principal contient un sous-panel et l&#39;enregistrement du module lié contient un champ lié.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> Sélectionnez le <b>Module Lié</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, sélectioner la vue du sous-panel pour le module approprié.<br><br>Cliquez sur <b>Sauvegarder</b> pour créer la relation.',
        ),
        'labelsHelp' => array(
            'default' => 'Les <b>Libellés</b> des champs et autres titres des modules peuvent être modifiés.<br><br>Editer le libellé en cliquant à l\'intérieur du champ, entrer le nouveau libellé et cliquer <b>Enregistrer</b>.<br><br> Si un package de langue est installé dans l\'application, vous pouvez sélectionner la <b>Langue</b> à utiliser pour les libellés.',
            'saveBtn' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer tous les changements.',
            'publishBtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
        ),
        'portalSync' => array(
            'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'You can customize the look of the SuiteCRM Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the SuiteCRM Portal the next time a sync is performed.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Pour démarrer un projet, cliquez sur <b>Nouveau Package</b> pour créer un nouveau package pour héberger vos modules personnalisés. <br /><br /> Chaque package peut contenir un ou plusieurs modules.<br /><br /> Par exemple, vous pouvez créer un package contenant un module personnalisé qui est relatif au module Compte. Ou, vous pouvez créer un package contenant plusieurs nouveaux modules qui fonctionnent ensemble comme un projet et qui sont liés les uns aux autres et aux modules existants.',
            'somepackages' => 'Un <b>package</b> agit comme un conteneur pour les modules personnalisés, qui sont tous une partie d&#39;un projet. Le package peut contenir un ou plusieurs </b>modules</b> personnalisés qui peuvent être liés les uns aux autres ou à des modules existants dans l&#39;application.<br /><br /> Après la création d&#39;un package pour votre projet, vous pouvez créer des modules pour le package, ou vous pouvez revenir à la création du module à une date ultérieure pour compléter le projet.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'Un <b> package </ b> agit comme un conteneur pour les modules personnalisés, qui font tous partie d\'un projet. Le package peut contenir un ou plusieurs  <b> Modules </ b> personnalisés qui peuvent être liée à d\'autres modules de l\'application. <br/> Après avoir créé un package pour votre projet, vous pouvez immédiatement créer des modules pour le paquet, ou vous pouvez revenir ultérieurement au Module Builder pour compléter le projet.',
        ),
        'main' => array(
            'welcome' => 'Bienvenue dans la zone des Outils pour dévellopeur. Utiliser les outils de cette zone pour créer et gérer vos champs standards ou personnalisés.<br /><br /> Pour gérer les modules existants, cliquez sur <b>Studio</b>. <br /><br /> Pour créer des modules personnalisés, cliquez sur <b>Module Builder</b>.',
            'studioWelcome' => 'Bienvenu dans le studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Ici, vous pouvez modifier les champs existants. Vous pouvez supprimer un champs existants ou ajouter des champs disponibles dans la fenêtre de gauche.',
            'create' => 'En choisissant le type de <b>Type</b> de module que vous souhaitez créer, gardez à l\'esprit les types de champs que vous voulez avoir dans le module. <br/><br/>Chaque modèle de module contient un ensemble de champs appartenant au type de module décrit par le titre. <br/><br/><b>Basique</b> - Fournit des champs de base qui apparaissent dans les modules standard, comme les champs : Nom, Assigné à, Equipe, Date de création et Description. <br/><br/> <b>Société</b> - Fournit des champs spécifiques aux organisation, comme Nom de société, Industrie et Adresse de facturation. Utilisez ces modèles pour créer des modules similaires au module standard Comptes.<br/><br/> <b>Personne</b> - fournit des champs spécifiques aux personnes, comme Salutations, Titre, Nom, Adresse et Numéro de téléphone. Utilisez ce modèle pour créer des modules similaires aux modules Prospect et Contact.<br/><br/><b>Problème</b> - Fournit des champs spécifiques aux modules Réclamations et Bugs. <br/><br/> Note: Après avoir créé le module, vous pouvez modifier les libellés des champs fourni par le modèle, ainsi que créer des champs personnalisés à ajouter à la mise en page du module.',
            'afterSave' => 'Personnaliser le module en fonction de vos besoins en éditant ou en créant des champs, en établissant des relations avec d\'autres modules et en organisant les champs dans les mises en page. <br/> Pour afficher les champs du modèle et gérer les champs personnalisés du module, cliquez sur <b > Voir champs </ b>. <br/> Pour créer et gérer les relations entre le module et les autres modules, même s\'il existe déjà des modules dans l\'application ou d\'autres modules personnalisés dans le même package, cliquez sur <b> Afficher les relations </ b>. <br/> Pour modifier les configurations de modules, cliquez sur <b> Voir mises en page </ b>. Vous pouvez changer la vue de détail,  la vue Edition et la vue Liste des mises en page pour le module comme vous le feriez pour les modules déjà dans l\'application au sein de Studio. <br/> Pour créer un module avec les mêmes propriétés que le module actuel, cliquez sur <b> Dupliquer </ b>. Vous pouvez personnaliser davantage le nouveau module.',
            'viewfields' => 'Les champs dans le module peuvent être personnalisés en fonction de vos besoins.<br /><br /> Pour créer des champs personnalisés, cliquez sur <b>Ajouter un champs</b>. Saisissez les propriétés du champ dans le panneau de droite et cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour changer les libellés de vos champs, cliquez sur<b>Editer les libellés</b>.<br /><br /> Pour éditer les champs, cliquez sur le nom du champs et les propriétés apparaitront dans le panneau de droite. Faite vos changements puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Vous pouvez créer rapidement de nouveaux champs qui ont des propriétés similaires en cliquant sur <b>Cloner</b>. Entrez les nouvelles propriétés, puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour supprimer un champ, vous pouvez le supprimer des mises en page appropriées.<br /><br />Note: Une fois le module installé, toutes les propriétés des champs ne sont pas éditables. Positionnez toutes les propriétés pour la mise en page des champs et des champs personnalisés avant de publier et d&#39;installer le package.',
            'viewrelationships' => 'Vous pouvez rapporter ce module avec les autres modules dans le même package ou à des modules déjà installés dans l&#39;application.<br /><br /> Pour modifier une relation existante, cliquez sur le  nom, et modifiez les propriétés dans le volet de droite.<br /><br /> Pour créer de nouvelle relation, cliquez sur <b>Ajouter une relation</b>. Les propriétés de la relation s&#39;affichent dans le volet de droite. Utilisez la liste déroulante <b>Relatif à</b> pour Sélectionnez le module. Fournisez un <b>Libellé</b> qui sera utilisé pour le sous-panel du module relatif. Vous pouvez être en mesure de Sélectionnez différents sous-panels dépendants du module sélectionnés.<br /><br /> Cliquez sur <b>Sauvegarder</b> pour créer une relation. Cliquez sur <b> Supprimer</p> pour supprimer la relation sélectionnée.',
            'viewlayouts' => 'Vous pouvez contrôler les champs qui sont disponibles pour la saisie des données dans la Vue Edition. Vous pouvez aussi controler les données qui seront affichées dans la Vue Détails. Les vues ne doivent pas forcement correspondres.<br /><br /> Vous pouvez déterminer la sécurité du module en utilisant la mise en page personnalisée et la gestion des rôles.',
            'existingModule' => 'Après avoir créé et personnalisé ce module, vous pouvez créer un module créer un module complémentaire ou retourner au package pour <b>Publier</b> ou <b>Deployer</b> le package.<br><br>Pour créer un module complémentaire, vous pouvez cliquez sur <b>Dupliquer</b> pour créer un module avec les mêmes propriétés que le module courant, ou retourner au package, et cliquez sur <b>Nouveau Module</b>.<br><br> Si vous ^tes prêt à <b>Publier</b> ou <b>Deployer</b> le package contenant ce module, retourner au package pour réaliser ces fonctions. Vous pouvez publier ou déployer des packages contenant au moins un module.',
            'labels' => 'Les libellés des champs standards ainsi que des champs personnalisés peuvent être modifiés. Changer les libellés des champs n&#39;aura pas d&#39;incidence sur les données stockées dans ces champs.',
        ),
        'listViewEditor' => array(
            'modify' => 'Il existe trois colonnes affichées à gauche. La colonne "Par défaut" contient les champs qui sont affichés dans une vue de liste par défaut, la colonne "Disponible" contient les champs que l\'utilisateur peut choisir d\'utiliser pour créer une vue de liste personnalisée, et la colonne "Caché" contient des champs disponibles mais sont actuellement désactivé.En tant qu\'administrateur vous pouvez les ajouter à la valeur par défaut ou bien aux  colonnes disponibles pour les utilisateurs, 
',
            'savebtn' => 'Cliquez sur <b>Sauvegarder</b> pour enregistrer tous les changements et les rendre actifs',
            'Hidden' => 'Les champs <b>Cachés</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Available' => 'Les champs disponibles sont des champs qui ne sont pas affichés par défaut, mais qui peuvent être activés par les utilisateurs.',
            'Default' => 'Les champs par défaut sont affichés aux utilisateurs qui n\'ont pas créé de liste personnalisées d\'affichage ..'
        ),

        'searchViewEditor' => array(
            'modify' => 'Il existe deux colonnes affichées à gauche. La colonne "Par défaut" contient les champs qui seront affichés dans la vue de la recherche, et la colonne "Caché" contient des champs disponibles en tant qu\'administrateur que vous pouvez ajouter à la vue.',
            'savebtn' => 'Cliquez sur <b>Sauvegarder & Déployer</b> pour sauvegarder tous les changements effectués et les rendre actifs dans le module.',
            'Hidden' => 'Les champs <b>Cachés</b> n\'apparaissent pas dans la recherche.',
            'Default' => 'Les champs par défaut qui seront affichés dans la vue recherche.'
        ),
        'layoutEditor' => array(
            'default' => 'Il existe deux colonnes affichées à gauche. La colonne de droite, intitulée Mise en page actuelle ou Aperçu Mise en page, est celle où vous pouvez changer la configuration du module. La colonne de gauche, intitulé Boîte à outils, contient des éléments utiles et des outils pour une utilisation lors de la modification de la mise en page. <br/> Si la zone de mise en page est intitulée Mise en page actuelle alors vous travaillez sur une copie de la disposition actuellement utilisée par le module pour l\'affichage. <br/> Si elle est intitulé Mise en page Aperçu alors vous travaillez sur une copie créé plus tôt , celle ci a pu déjà être modifiée depuis la version vue par les utilisateurs de ce module.',
            'saveBtn' => 'Cliquer sur ce bouton permet d\'enregistrer la mise en page afin de conserver vos modifications. Lorsque vous revenez à ce module, vous allez commencer à partir de cette mise en page modifiée. Votre mise en page ne sera pas visible par les utilisateurs du module jusqu\'à ce que vous cliquez sur le bouton Enregistrer et publier.',
            'publishBtn' => 'Cliquez sur ce bouton pour déployer la mise en page. Cela signifie que cette disposition sera immédiatement vue par les utilisateurs de ce module.',
            'toolbox' => 'La boîte à outils contient une variété de fonctionnalités utiles pour l\'édition des mises en page, y compris une poubelle, un ensemble d\'éléments supplémentaires et un ensemble de champs disponibles. Tout ces éléments peuvent être glissés et déposés sur le modèle.',
            'panels' => 'Cette zone montre comment votre mise en page se présentera aux utilisateurs de ce module quand il est déployé <br/> Vous pouvez repositionner des éléments tels que des champs, des lignes et des panneaux par glisser-déposer. supprimer des éléments par glisser-déposer sur la zone poubelle de la boîte à outils, ou ajouter de nouveaux éléments en les faisant glisser à partir de la boîte à outils et en les déposant sur la mise en page dans la position souhaitée.'
        ),
        'dropdownEditor' => array(
            'default' => 'Il existe deux colonnes affichées à gauche. La colonne de droite, intitulée Mise en page actuelle ou Aperçu Mise en page, est celle où vous pouvez changer la configuration du module. La colonne de gauche, intitulé Boîte à outils, contient des éléments utiles et des outils pour une utilisation lors de la modification de la mise en page. <br/> Si la zone de mise en page est intitulée Mise en page actuelle alors vous travaillez sur une copie de la disposition actuellement utilisée par le module pour l\'affichage. <br/> Si elle est intitulé Mise en page Aperçu alors vous travaillez sur une copie créé plus tôt , celle ci a pu déjà être modifiée depuis la version vue par les utilisateurs de ce module.',
            'dropdownaddbtn' => 'Cliquez sur ce bouton pour ajouter un nouvel élément à la liste déroulante.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Les personnalisations effectuées dans Studio au sein de cette instance peuvent être packagées et déployées dans une autre instance. <br> Spécifiez un <b> Nom du package </ b>. Vous pouvez aussi renseigner un <b> Auteur </ b> et une <b> Description </ b> pour le paquet. <br> Sélectionnez le ou les modules qui contiennent les personnalisations à exporter. (Seuls les modules contenant des personnalisations apparaîtront en sélection.) <br> Cliquez sur <b> Exporter </ b> pour créer un fichier .zip du paquet contenant les personnalisations. Le fichier .zip peut être téléchargé dans une autre instance à travers le <b> Module Loader </ b>.',
            'exportCustomBtn' => 'Cliquez sur <b>Export</b> pour créer un fichier .zip du package qui contient les personnalisations que vous désirez exporter.',
            'name' => 'Le <b> Nom </ b> du paquet sera affiché dans le module Loader après que le paquet soit téléchargé pour installation dans Studio.',
            'author' => 'L\' <b> Auteur </ b> est le nom de l\'entité qui a créé le package. L\'auteur peut être un individu ou une entreprise. <br> L\'auteur sera affiché dans le module Loader après que le paquet soit téléchargé pour installation dans Studio.',
            'description' => 'La <b> Description </ b> du paquet sera affiché dans le module Loader après que le paquet soit téléchargé pour installation dans Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenue sur la <b> Zone Outils de développement </ b1> <br/> <BR/> Utiliser les outils dans cette zone pour créer, gérer des modules et des champs standard ou personnalisés.',
            'studioBtn' => 'Utilisez <b> Studio </ b> pour personnaliser les modules installés en changeant la disposition des champs, sélectionner les champs disponibles ou créer des champs personnalisés.',
            'mbBtn' => 'Utiliser le <b>Module Builder</b> pour créer de nouveaux modules.',
            'appBtn' => 'Utilisez le mode d\'application pour personnaliser diverses propriétés du programme, tels que le nombre de rapports de TPS affichés sur la page d\'accueil',
            'backBtn' => 'Retourner à l&#39;étape précédente.',
            'studioHelp' => 'Utilisez <b>Studio</b> pour personnaliser les modules installés.',
            'moduleBtn' => 'Cliquer pour éditer le module.',
            'moduleHelp' => 'Sélectionnez le module que vous souhaitez modifier.',
            'fieldsBtn' => 'Modifier les informations stockées dans le module en contrôlant  <b> Les champs </ b> du module. <br/> Vous pouvez modifier et créer des champs personnalisés ici.',
            'labelsBtn' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer vos descriptions personnalisées.',
            'layoutsBtn' => 'Personnaliser les <b> Styles </ b> des vues Modifier, Détail, Liste et Recherche.',
            'subpanelBtn' => 'Modifier les informations présentes dans les sous-panneaux du modules.',
            'layoutsHelp' => 'Sélectionnez <b> Mise en page à modifier </ b>. <br/<br/> Pour changer la mise en page qui contient les champs pour la saisie des données, cliquez sur <b> Modifier la vue </ b>. <br/> <Br / > Pour modifier la mise en page qui affiche les données saisies dans les champs de la vue Edition, cliquez sur <b> Détail Voir </ b>. <br/> Pour modifier les colonnes qui apparaissent dans la liste par défaut, cliquez sur <b> Vue Liste </ b>. <br/> Pour modifier les mises en pages des vue Recherche simple et recherche avançée, cliquez sur <b> Recherche </ b>.',
            'subpanelHelp' => 'Selectionnez le <b>sous-panneau</b> à editer',
            'searchHelp' => 'Selectionner une mise en page <b>Recherche</b> à editer.',
            'labelsBtn' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer vos descriptions personnalisées.',
            'newPackage' => 'Cliquez sur <b>Nouveau Package</b> pour créer un nouveau package.',
            'mbHelp' => '<b> Bienvenue dans le Module Builder. </ b> <br/> Utilisez <b> Module Builder </ b> pour créer des packages contenant des modules personnalisés basés sur des objets standard ou personnalisés. <br/> Pour commencer, cliquez sur <b> Nouveau package </ b> pour créer un nouveau package, ou choisir un package à modifier. <br/> Un <b> package </ b > agit comme un conteneur pour les modules personnalisés, qui font tous partie d\'un projet. Le package peut contenir un ou plusieurs modules personnalisés qui peuvent être liés les uns aux autres ou à des modules de l\'application. <br/> Exemple : Vous voudrez peut-être créer un package contenant un module personnalisé qui est lié au module Comptes standard. Ou, vous pouvez créer un paquet contenant plusieurs nouveaux modules qui travaillent ensemble comme un projet et qui sont liés les uns aux autres et à des modules de l\'application.',
            'exportBtn' => 'Cliquez sur <b> Exporter les personnalisations </ b> pour créer un package contenant les personnalisations effectuées dans Studio pour des modules spécifiques.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editeur de liste déroulante',

//ASSISTANT
    'LBL_AS_SHOW' => 'Voir dorénavant l&#39;Assistant.',
    'LBL_AS_IGNORE' => 'Ignorer dorénavant l&#39;Assistant.',
    'LBL_AS_SAYS' => 'L&#39;Assistant vous informe :',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Module Builder',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editeur de listes déroulantes',
    'LBL_EDIT_DROPDOWN' => 'Editer la liste déroulante',
    'LBL_DEVELOPER_TOOLS' => 'Outils pour les développeurs',
    'LBL_SUGARPORTAL' => 'Editeur Portail SuiteCRM',
    'LBL_SYNCPORTAL' => 'Synchronisation du Portail',
    'LBL_PACKAGE_LIST' => 'Liste des Packages',
    'LBL_HOME' => 'Accueil',
    'LBL_NONE' => '-Aucun-',
    'LBL_DEPLOYE_COMPLETE' => 'Déploiement terminé',
    'LBL_DEPLOY_FAILED' => 'Une erreur s&#39;est produite pendant le processus de déploiement, votre paquet n&#39;est peut-être pas installé correctement',
    'LBL_ADD_FIELDS' => 'Ajouter des champs personnalisés',
    'LBL_AVAILABLE_SUBPANELS' => 'Sous-panels disponibles',
    'LBL_ADVANCED' => 'Avancée',
    'LBL_ADVANCED_SEARCH' => 'Recherche Avancée',
    'LBL_BASIC' => 'Basique',
    'LBL_BASIC_SEARCH' => 'Recherche Basique',
    'LBL_CURRENT_LAYOUT' => 'Mise en page courante',
    'LBL_CURRENCY' => 'Devise',
    'LBL_CUSTOM' => 'Personnalisé',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Vue Liste du Dashlet',
    'LBL_DASHLETSEARCH' => 'Vue Recherche du Dashlet',
    'LBL_POPUP' => 'Vue Popup',
    'LBL_POPUPLIST' => 'Vue Liste de la Popup',
    'LBL_POPUPLISTVIEW' => 'Vue Liste de la Popup',
    'LBL_POPUPSEARCH' => 'Vue Recherche de la Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Vue Recherche du Dashlet',
    'LBL_DISPLAY_HTML' => 'Afficher le code HTML',
    'LBL_DETAILVIEW' => 'Vue Détail',
    'LBL_DROP_HERE' => '[Déposer ici]',
    'LBL_EDIT' => 'Configuration du module:',
    'LBL_EDIT_LAYOUT' => 'Editer la mise en page',
    'LBL_EDIT_ROWS' => 'Editer les lignes',
    'LBL_EDIT_COLUMNS' => 'Editer les colonnes',
    'LBL_EDIT_LABELS' => 'Editer les libellés',
    'LBL_EDIT_PORTAL' => 'Editer le Portail pour ',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Champs',
    'LBL_FAILED_TO_SAVE' => 'Echec de la sauvegarde',
    'LBL_FAILED_PUBLISHED' => 'Echec de la publication',
    'LBL_HOMEPAGE_PREFIX' => 'Mes',
    'LBL_LAYOUT_PREVIEW' => 'Pré-visualisation de la Mise en page',
    'LBL_LAYOUTS' => 'Mise en page',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nouveau Package',
    'LBL_NEW_PANEL' => 'Nouveau Panneau',
    'LBL_NEW_ROW' => 'Nouvelle ligne',
    'LBL_PACKAGE_DELETED' => 'Package supprimé',
    'LBL_PUBLISHING' => 'Publication ...',
    'LBL_PUBLISHED' => 'Publié',
    'LBL_SELECT_FILE' => 'Sélectionnez un fichier',
    'LBL_SAVE_LAYOUT' => 'Sauvegarder la mise en page',
    'LBL_SELECT_A_SUBPANEL' => 'Sélectionnez un sous-panel',
    'LBL_SELECT_SUBPANEL' => 'Sélectionnez un sous-panel',
    'LBL_SUBPANELS' => 'Sous-panels',
    'LBL_SUBPANEL' => 'Sous-panel',
    'LBL_SUBPANEL_TITLE' => 'Titre :',
    'LBL_SEARCH_FORMS' => 'Recherche',
    'LBL_SEARCH' => 'Recherche',
    'LBL_STAGING_AREA' => 'Zone de stockage (glisser et déposer des éléments ici)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'Poubelle SuiteCRM (cliquer sur les éléments à ajouter dans la zone de dépot)',
    'LBL_TOOLBOX' => 'Boite à outils',
    'LBL_VIEW_SUGAR_FIELDS' => 'Voir les champs SuiteCRM',
    'LBL_VIEW_SUGAR_BIN' => 'Voir la poubelle SuiteCRM',
    'LBL_QUICKCREATE' => 'Creation Rapide',
    'LBL_EDIT_DROPDOWNS' => 'Editer une liste déroulante globale',
    'LBL_ADD_DROPDOWN' => 'Ajouter une nouvelle liste déroulante globale',
    'LBL_BLANK' => '-vide-',
    'LBL_TAB_ORDER' => 'Ordre des onglets',
    'LBL_TAB_PANELS' => 'Affichage des panneaux sous forme d&#39;onglets',
    'LBL_TAB_PANELS_HELP' => 'Affichage de chaque panneau comme un onglet au lieu d&#39;avoir tous les panneaux qui s&#39;affiche à la suite d&#39;une seule page',
    'LBL_TABDEF_TYPE' => 'Type d&#39;affichage',
    'LBL_TABDEF_TYPE_HELP' => 'Sélectionnez l&#39;affiche de cette vue. Cette option n&#39;a d&#39;effet que si vous avez activé les onglets sur cette vue.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Onglet',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panneau',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Sélectionnez "Panneau" pour avoir ce panneau affiché directement dans la vue. Sélectionnez "Onglet" pour avoir ce panneau affiché dans un onglet séparé de la vue. Lorsque "Onglet" est spécifié pour un panneau, les panneaux suivants définis en "Panneau" seront affichés dans un même onglet. Un nouvel onglet sera affiché pour le prochain panneau défini en tant que "Onglet". Si "Onglet" est sélectionné pour au moins un panneau alors le premier panneau sera forcément affiché dans un onglet.',
    'LBL_TABDEF_COLLAPSE' => 'Rétracter',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Sélectionnez pour rétracter par défaut ce panel.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nom de la liste déroulante',
    'LBL_DROPDOWN_LANGUAGE' => 'Langue de la liste déroulante',
    'LBL_DROPDOWN_ITEMS' => '<u>Eléments de la liste déroulante</u>',
    'LBL_DROPDOWN_ITEM_NAME' => 'Clé',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Libellé',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchro avec la vue Détail',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Sélectionner cette option pour synchroniser cette mise en page de la vue Edition avec la mise en page de la vue Détail correspondante. <br>Lors du clic sur le bouton Sauvegarde ou Sauvegarder et Déployer dans la vue Edition, la disposition des champs de la vue Détail sera automatiquement mise à jour avec celle-ci. <br>Il ne sera plus possible de modifier la mise en page des champs sur la vue Edition.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Cette vue Détail est synchronisée avec la vue Edition correspondante.<br>La disposition des champs dans cette vue Détail reflète la disposition des champs dans la vue Edition.<br>Les changements effectués sur la cette vue Détail ne seront pas sauvegardés. Effectuez le changement sur la vue Edition correspondante ou décocher la case "Syncrho avec la vue Détail" présente sur la vue Edition.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copie depuis la vue Edition',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Les valeurs sont obligatoires pour les deux parties : Clé et Libellé. Pour ajouter un élément vide, cliquez sur Ajouter sans entrée de valeur ni dans la Clé, ni dans le Libellé',
    'LBL_DROPDOWN_KEY_EXISTS' => 'La clé existe déjà dans la liste',
    'LBL_NO_SAVE_ACTION' => 'Impossible de trouver l&#039;action de sauvegarde (save) pour cette vue.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Module principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relation(s) créée(s) via le studio',
    'LBL_RELATIONSHIPS' => 'Relations',
    'LBL_RELATIONSHIP_EDIT' => 'Edition de la relation',
    'LBL_REL_NAME' => 'Nom',
    'LBL_REL_LABEL' => 'Libellé',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Module lié',
    'LBL_NO_RELS' => 'Aucune relation',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condition Optionnelle',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Colonne',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valeur',
    'LBL_SUBPANEL_FROM' => 'Libellé du Sous Panel listant les',
    'LBL_RELATIONSHIP_ONLY' => 'Aucun élément visible ne sera créé pour cette relation car il y a déjà une relation visible pré-existante entre ces deux modules.',
    'LBL_ONETOONE' => 'One to One',
    'LBL_ONETOMANY' => 'One to Many',
    'LBL_MANYTOONE' => 'Many to One',
    'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Sélectionnez une fonction ou un composant.',
    'LBL_QUESTION_MODULE1' => 'Sélectionnez un module.',
    'LBL_QUESTION_EDIT' => 'Sélectionnez le module que vous voulez modifier.',
    'LBL_QUESTION_LAYOUT' => 'Sélectionnez la vue que vous voulez modifier.',
    'LBL_QUESTION_SUBPANEL' => 'Sélectionnez le sous-panel que vous voulez modifier.',
    'LBL_QUESTION_SEARCH' => 'Sélectionnez le vue "recherche" que vous voulez modifier.',
    'LBL_QUESTION_MODULE' => 'Sélectionnez le composant que vous voulez modifier.',
    'LBL_QUESTION_PACKAGE' => 'Sélectionnez le package à modifier ou cliquez sur "Nouveau Package" pour en créer un nouveau.',
    'LBL_QUESTION_EDITOR' => 'Sélectionnez un outil.',
    'LBL_QUESTION_DROPDOWN' => 'Sélectionnez la liste déroulante que vous voulez modifier, ou créer une nouvelle liste déroulante.',
    'LBL_QUESTION_DASHLET' => 'Sélectionnez une mise en page de dashlet à éditer.',
    'LBL_QUESTION_POPUP' => 'Sélectionnez une mise en page de popup à éditer.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Relatif à',
    'LBL_NAME' => 'Nom',
    'LBL_LABELS' => 'Libellés',
    'LBL_MASS_UPDATE' => 'Mise à jour globale',
    'LBL_AUDITED' => 'Audit',
    'LBL_CUSTOM_MODULE' => 'Module',
    'LBL_DEFAULT_VALUE' => 'valeur par defaut',
    'LBL_REQUIRED' => 'Requis',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'PERSONNALISE',
    'LBL_HDEFAULT' => 'DEFAUT',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_CUSTOM_FIELDS' => '* champ créé via le Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editer les libellés',
    'LBL_SECTION_PACKAGES' => 'Packages',
    'LBL_SECTION_PACKAGE' => 'Package',
    'LBL_SECTION_MODULES' => 'Modules',
    'LBL_SECTION_PORTAL' => 'Portail',
    'LBL_SECTION_DROPDOWNS' => 'Listes déroulantes',
    'LBL_SECTION_PROPERTIES' => 'Propriétés',
    'LBL_SECTION_DROPDOWNED' => 'Editeur de liste déroulante',
    'LBL_SECTION_HELP' => 'Aide',
    'LBL_SECTION_ACTION' => 'Action',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_EDPANELLABEL' => 'Editer le libellé du panneau',
    'LBL_SECTION_FIELDEDITOR' => 'Editeur de champ',
    'LBL_SECTION_DEPLOY' => 'Déployer',
    'LBL_SECTION_MODULE' => 'Module',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Editer la visibilité',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Défaut',
    'LBL_HIDDEN' => 'Caché',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_LISTVIEW_DESCRIPTION' => 'Il y a trois colonnes affichées ci-dessous. La colonne <b>Par défaut</b> contient des champs qui sont affichés dans une liste par défaut. La colonne <b>Additionnel</b> contient des champs que l&#39;utilisateur peut choisir d&#39;utiliser pour créer un affichage personnalisé. La colonne <b>Disponible</b> affiche les champs disponibles pour vous comme admin à ajouter à la valeur par défaut ou des colonnes supplémentaires pour l&#39;utilisation par les utilisateurs.',
    'LBL_LISTVIEW_EDIT' => 'Editeur de liste',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Prévisualiser',
    'LBL_MB_RESTORE' => 'Restaurer',
    'LBL_MB_DELETE' => 'Supprimer',
    'LBL_MB_COMPARE' => 'Comparer',
    'LBL_MB_DEFAULT_LAYOUT' => 'Mise en page par défaut',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Ajouter',
    'LBL_BTN_SAVE' => 'Sauvegarder',
    'LBL_BTN_SAVE_CHANGES' => 'Sauvegarder les modifications',
    'LBL_BTN_DONT_SAVE' => 'Annuler les modifications',
    'LBL_BTN_CANCEL' => 'Annuler/Fermer',
    'LBL_BTN_CLOSE' => 'Fermer',
    'LBL_BTN_SAVEPUBLISH' => 'Sauvegarder &amp; Publier',
    'LBL_BTN_NEXT' => 'Suivant',
    'LBL_BTN_BACK' => 'Précédent',
    'LBL_BTN_CLONE' => 'Cloner',
    'LBL_BTN_ADDCOLS' => 'Ajouter des Colonnes',
    'LBL_BTN_ADDROWS' => 'Ajouter des Lignes',
    'LBL_BTN_ADDFIELD' => 'Ajouter un champ',
    'LBL_BTN_ADDDROPDOWN' => 'Ajouter une liste déroulante',
    'LBL_BTN_SORT_ASCENDING' => 'Tri Ascendant',
    'LBL_BTN_SORT_DESCENDING' => 'Tri Descendant',
    'LBL_BTN_EDLABELS' => 'Editer les libellés',
    'LBL_BTN_UNDO' => 'Annuler',
    'LBL_BTN_REDO' => 'Réappliquer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Ajouter des champs personnalisés',
    'LBL_BTN_EXPORT' => 'Exporter les personnalisations',
    'LBL_BTN_DUPLICATE' => 'Dupliquer',
    'LBL_BTN_PUBLISH' => 'Publier',
    'LBL_BTN_DEPLOY' => 'Déployer',
    'LBL_BTN_EXP' => 'Exporter',
    'LBL_BTN_DELETE' => 'Supprimer',
    'LBL_BTN_VIEW_LAYOUTS' => 'Voir les mises en page',
    'LBL_BTN_VIEW_FIELDS' => 'Voir les champs',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Voir les relations',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Ajouter une relation',
    'LBL_BTN_RENAME_MODULE' => 'Changer le nom du module',
    'LBL_BTN_INSERT' => 'Insérer',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Ce champ existe déjà',
    'ERROR_INVALID_KEY_VALUE' => "Valeur de la clé invalide : [&#39;]",
    'ERROR_NO_HISTORY' => 'Aucun fichier contenant un historique a été trouvé',
    'ERROR_MINIMUM_FIELDS' => 'Cette mise en page doit contenir au moins un champ',
    'ERROR_GENERIC_TITLE' => 'Une erreur s&#39;est produite',
    'ERROR_REQUIRED_FIELDS' => 'Etes-vous sûr de vouloir continuer? Les champs obligatoires suivants sont absents de la mise en page:',
    'ERROR_ARE_YOU_SURE' => 'Etes-vous sûr de vouloir continuer?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nom du Package :',
    'LBL_MODULE_NAME' => 'Nom du module :',
    'LBL_AUTHOR' => 'Auteur :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_KEY' => 'Clé :',
    'LBL_ADD_README' => 'Lisez-moi',
    'LBL_LAST_MODIFIED' => 'Date de modification:',
    'LBL_NEW_MODULE' => 'Nouveau Module',
    'LBL_LABEL' => 'Libellé',
    'LBL_LABEL_TITLE' => 'Libellé',
    'LBL_WIDTH' => 'Largeur',
    'LBL_PACKAGE' => 'Package :',
    'LBL_TYPE' => 'Type :',
    'LBL_TEAM_SECURITY' => 'Sécurité par équipe',
    'LBL_ASSIGNABLE' => 'Assignation',
    'LBL_PERSON' => 'Personne',
    'LBL_COMPANY' => 'Société',
    'LBL_ISSUE' => 'Ticket',
    'LBL_SALE' => 'Affaire',
    'LBL_FILE' => 'Document',
    'LBL_NAV_TAB' => 'Onglet de Navigation',
    'LBL_CREATE' => 'Créer',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Vue',
    'LBL_LIST_VIEW' => 'Vue Liste',
    'LBL_HISTORY' => 'Voir l&#39;Historique',
    'LBL_RESTORE_DEFAULT' => 'Réinitialiser',
    'LBL_ACTIVITIES' => 'Activités',
    'LBL_NEW' => 'Nouveau',
    'LBL_TYPE_BASIC' => 'basique',
    'LBL_TYPE_COMPANY' => 'société',
    'LBL_TYPE_PERSON' => 'personne',
    'LBL_TYPE_ISSUE' => 'ticket',
    'LBL_TYPE_SALE' => 'affaire',
    'LBL_TYPE_FILE' => 'document',
    'LBL_RSUB' => 'Ceci est le sous-panel qui apparaitra dans votre module',
    'LBL_MSUB' => 'Ceci est le sous-panel que votre module founis pour être affiché dans les modules qui lui sont liés',
    'LBL_MB_IMPORTABLE' => 'Import',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'visible',
    'LBL_VE_HIDDEN' => 'caché',
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] a été supprimé',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export des personnalisations',
    'LBL_EC_NAME' => 'Nom du package :',
    'LBL_EC_AUTHOR' => 'Auteur :',
    'LBL_EC_DESCRIPTION' => 'Déscription :',
    'LBL_EC_KEY' => 'Clé :',
    'LBL_EC_CHECKERROR' => 'Vous devez sélectionnez au moins un module',
    'LBL_EC_CUSTOMFIELD' => 'Champ(s) personnalisé(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'Mise(s) en page personnalisée(s)',
    'LBL_EC_NOCUSTOM' => 'Aucun module personnalisé',
    'LBL_EC_EMPTYCUSTOM' => 'n&#39;est pas personnalisé.',
    'LBL_EC_EXPORTBTN' => 'Exporter',
    'LBL_MODULE_DEPLOYED' => 'Le module a été déployé.',
    'LBL_UNDEFINED' => 'non défini',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Échec lors de la récupération de données',
    'LBL_AJAX_TIME_DEPENDENT' => 'Une action transparente est en cours, veuillez patienter et ré-essayer dans quelques secondes',
    'LBL_AJAX_LOADING' => 'Chargement...',
    'LBL_AJAX_DELETING' => 'Suppression...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construction en cours...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Déploiement en cours...',
    'LBL_AJAX_FIELD_EXISTS' => 'Le nom que vous avez choisi pour ce champ est déjà utilisé. Veuillez choisir un autre nom.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Résultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'En traitement...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Veuillez patienter pendant le chargement...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Etes-vous sûr(e) de vouloir supprimer ce Package ? Cela supprimera définitivement tous les fichiers associés à celui-ci.',
    'LBL_JS_REMOVE_MODULE' => 'Etes-vous sûr(e) de vouloir supprimer ce Module? Cela supprimera définitivement tous les fichiers associés à celui-ci.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Toutes les personnalisations que vous avez fait dans le Studio seront écrasées lorsque ce module sera de nouveau déployée. Etes-vous sûr de vouloir continuer?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Déploiement du package',
    'LBL_JS_VALIDATE_NAME' => 'Nom - Doit être alphanumérique sans espace et commencer par une lettre',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Ce nom de package existe déjà',
    'LBL_JS_VALIDATE_KEY' => 'Clé - Doit être alphanumérique sans espace et commencer par une lettre',
    'LBL_JS_VALIDATE_LABEL' => 'Veuillez saisir un libellé qui sera utilisé comme nom public pour ce module',
    'LBL_JS_VALIDATE_TYPE' => 'Veuillez sélectionnez le type de module que vous voulez construire dans la liste ci-dessus',
    'LBL_JS_VALIDATE_REL_NAME' => 'Nom - doit être un alphanumérique sans espace',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Libellé - veuillez ajouter un libellé qui sera affiché au dessus du sous-panel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Etes-vous sûr(e) de vouloir supprimer cette relation ?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Cela rendra votre relation permanente. Etes-vous sûr(e) de vouloir déployer cette relation ?',
    'LBL_CONFIRM_DONT_SAVE' => 'Attention vous avez fait des modifications depuis votre dernière sauvegarde, voulez-vous sauvegarder ces modifications ?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Sauvegarder les changements ?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Les données peuvent être tronqués et cela ne peut pas être annulée, êtes-vous sûr de vouloir continuer ?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Sélectionnez le type de donnée du champ que vous voulez ajouter',
    'LBL_POPHELP_SEARCHABLE' => 'Vous devez réalise un index système complet après avoir changé le niveau de boost.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Oui</b>: Le champ sera importable.<br><b>Non</b>: Le champ ne sera pas importable.<br><b>Requis</b>: Le champ sera obligatoire lors des imports.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Entrez un nombre pour la largeur, mesurée en pixels.<br> L&#39;image téléchargée sera réduite à cette largeur.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Entrez un nombre pour la hauteur, mesurée en pixels.<br> L&#39;image téléchargée sera réduite à cette hauteur.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Non utilisable dans la recherche de doublons et NON Fusionnable</b> : Le champ n&#39;apparaitra pas dans les écrans de fusion, et ne pourra pas être utilisé dans les filtres pour rechercher les doublons.<br><b>Uniquement Fusionnable</b> : Le champ apparaitra dans les écrans de fusion, mais ne pourra pas être utilisé dans les filtres pour rechercher les doublons.<br><b>Utilisable dans la recherche de doublons et Fusionnable</b> : Le champ apparaitra dans les écrans de fusion, et pourra être utilisé dans les filtres pour rechercher les doublons.<br><b>Utilisable dans la recherche de doublons (sélectionné par défaut) et Fusionnable</b> : Le champ apparaitra par défaut dans les écrans de fusion et pourra être aussi utilisé dans les filtres pour rechercher les doublons.<br><b>Utilisable dans la recherche de doublons mais NON Fusionnable</b> : Le champ n&#39;apparaitra pas dans les écrans de dédoublonnage, mais pourra être utilisé dans les filtres pour rechercher les doublons.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Sélectionner pour utiliser ce champ dans la recherche globale sur ce module.',
//Revert Module labels
    'LBL_RESET' => 'Réinitialiser',
    'LBL_RESET_MODULE' => 'Réinitialiser Module',
    'LBL_REMOVE_CUSTOM' => 'Supprimer Personnalisations',
    'LBL_CLEAR_RELATIONSHIPS' => 'Nettoyer Relations',
    'LBL_RESET_LABELS' => 'Réinitialiser Libellés',
    'LBL_RESET_LAYOUTS' => 'Initialliser les mises en pages',
    'LBL_REMOVE_FIELDS' => 'Supprimer Champs personnalisés',
    'LBL_CLEAR_EXTENSIONS' => 'Nettoyer Extensions',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => 'historique',


    'LBL_ADD_LAYOUT' => 'Ajouter une mise en page',
    'LBL_ADD_LAYOUTS' => 'Ajouter une mise en page',
    'LBL_QUESTION_ADD_LAYOUT' => 'Sélectionner un groupe de mises en page à ajouter',
    'LBL_REMOVE_LAYOUT' => 'Supprimer un groupe de mises en page',

    'LBL_SECURITYGROUP' => 'Groupes de sécurité :',
    'LBL_COPY_FROM' => 'Copier depuis :',
    'LBL_ADDLAYOUTDONE' => 'Mise en page sauvegardée',
    'LBL_REMOVELAYOUTDONE' => 'Mise en page supprimée',
    'LBL_REMOVE_CONFIRM' => 'Êtes-vous vraiment certain ?',

    'fieldTypes' => array(
        'varchar' => 'Saisie libre',
        'int' => 'Entier',
        'float' => 'Float',
        'bool' => 'Case à cocher',
        'enum' => 'Liste à choix simple',
        'dynamicenum' => 'Menu déroulant dynamique',
        'multienum' => 'Liste à choix multiple',
        'date' => 'Date',
        'phone' => 'Téléphone',
        'currency' => 'Devise',
        'html' => 'HTML',
        'radioenum' => 'Bouton Radio',
        'relate' => 'Champ relatif',
        'address' => 'Adresse',
        'text' => 'Mémo',
        'url' => 'URL Plugins',
        'iframe' => 'I-Frame',
        'datetimecombo' => 'Date et Heure',
        'decimal' => 'Décimal',
        'image' => 'Image',
    ),
    'labelTypes' => array(
        "" => "Libellés fréquemment utilisés",
        "all" => "Tous les libellés",
    ),

    'parent' => 'Rattachement d\'inflexion',

    'LBL_ILLEGAL_FIELD_VALUE' => "La clé dans une liste déroulante ne peut pas contenir des guillemets.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Vous avez sélectionné un élément de la liste déroulante à supprimer. Tous les champs de type liste déroulante utilisant cette liste ne vont plus afficher cette valeur, et elle ne pourra plus être sélectionnée dans la liste déroulante de ces champs. Etes-vous sûr de vouloir continuer ?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'tous les modules',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ID lié {1})',
);

