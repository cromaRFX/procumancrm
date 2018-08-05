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
    'LBL_LOADING' => 'Caricamento' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Nascondi Opzioni' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Cancella' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Dai un <b>Nome</b> al pacchetto. Il nome deve essere alfanumerico e non contenere spazi. (Esempio: HR_Management)<br /><br />Puoi fornire un Autore e una Descrizione per pacchetto. <br /><br />Clicca Salva per creare il pacchetto.',
            'modify' => 'Le proprietà e le possibili azioni per il <b>Pacchetto</b> vengono visualizzate qui. <br /><br />Puoi modificare il <b>Nome</b>, l´<b>Autore</b> e la <b>Descrizione</b> del pacchetto, così come visualizzare e customizzare tutt i moduli contenuti all´interno del pacchetto.<br /><br />Clicca Nuovo Modulo per creare un modulo per il pacchetto. <br /><br />Se il pacchetto contiene almeno un modulo, puoi Pubblicare il pacchetto, così come Esportare le customizzazioni fatte nel pacchetto.',
            'name' => 'Questo è il <b>Nome</b> del seguente pacchetto. <br /><br />Il nome deve essere alfanumerico, iniziare con una lettere e non contenere spazi. (Esempio: HR_Management)',
            'author' => 'Questo è l´<b>Autore</b> che viene visualizzato durante l´installazione come nome dell´entità che ha creato il pacchetto.<br /><br />L´Autore può essere sia un individuo che un´azienda.',
            'description' => 'Questa è la <b>Descrizione</b> del pacchetto che viene visualizzata durante l´installazione.',
            'publishbtn' => 'Clicca <b>Esporta modulo</b> per salvare tutti i dati inseriti e creare un file .zip che è una versione installabile del pacchetto. <br /><br />Utilizza il Carica Moduli per caricare il file .zip e installare il pacchetto.',
            'deploybtn' => 'Clicca <b>Salva e Pubblica</b> per salvare tutti i dati inseriti e installare il pacchetto, inclusi i moduli, nella seguente instanza.',
            'duplicatebtn' => 'Clicca <b>Duplica</b> per copiare in contenuti del pacchetto in un nuovo pacchetto e pubblicarlo.<br /><br />Per il nuovo pachetto, sarà generato automaticamente un nuovo nome con un numero alla fine del nome del pacchetto utilizzato per creare il nuovo pacchetto. Puoi rinominare il nome del nuovo pacchetto inserendo un nuovo Nome e cliccando Salva.',
            'exportbtn' => 'Clicca <b>Esporta progetto</b> per creare un file .zip contenente le customizzazioni fatte nel pacchetto. <br /><br />Il file generato non è una versione installabile del pacchetto. <br /><br />Utilizza il Carica Moduli per importare il file .zip e visualizzare il pacchetto, incluse le customizzazioni, nel Costruttore Modulo.',
            'deletebtn' => 'Clicca <b>Cancella</b> per eliminare il pacchetto e tutti i files collegati al pacchetto.',
            'savebtn' => 'Clicca <b>Salva</b> per salvare tutti i dati inseriti collegati al pacchetto.',
            'existing_module' => 'Clicca l´icona del <b>Modulo</b> per modificare le proprietà e customizzare i campi, le relazioni e i layouts associati al modulo.',
            'new_module' => 'Clicca Nuovo Modulo per creare un nuovo modulo per questo pacchetto.',
            'key' => 'This 5-letter, alphanumeric <b>Key</b> will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br><br>The key is used in an effort to achieve table name uniqueness.',
            'readme' => 'Click to add <b>Readme</b> text for this package.<br><br>The Readme will be available at the time of installation.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Checking the <b>Importable</b> checkbox will enable importing for this module.<br><br>A link to the Import Wizard will appear in the Shortcuts panel in the module.  The Import Wizard facilitates importing of data from external sources into the custom module.',
            'team_security' => 'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module ',
            'reportable' => 'Checking this box will allow this module to have reports run against it.',
            'assignable' => 'Checking this box will allow a record in this module to be assigned to a selected user.',
            'has_tab' => 'Checking <b>Navigation Tab</b> will provide a navigation tab for the module.',
            'acl' => 'Checking this box will enable Access Controls on this module, including Field Level Security.',
            'studio' => 'Checking this box will allow administrators to customize this module within Studio.',
            'audit' => 'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
            'viewfieldsbtn' => 'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
            'viewrelsbtn' => 'Click <b>View Relationships</b> to view the relationships associated with this module and to create new relationships.',
            'viewlayoutsbtn' => 'Click <b>View Layouts</b> to view the layouts for the module and to customize the field arrangement within the layouts.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'Questo è il <b>Nome</b> del seguente pacchetto. <br /><br />Il nome deve essere alfanumerico, iniziare con una lettere e non contenere spazi. (Esempio: HR_Management)',
            'label' => 'This is the <b>Label</b> that will appear in the navigation tab for the module.',
            'savebtn' => 'Clicca <b>Salva</b> per salvare tutti i dati inseriti collegati al pacchetto.',
            'type_basic' => 'The <b>Basic</b> template type provides basic fields, such as the Name, Assegnato a, Team, Date Created and Description fields.',
            'type_company' => 'The <b>Company</b> template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br /><br />Use this template to create modules that are similar to the standard Accounts module.',
            'type_issue' => 'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br /><br />Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.',
            'type_person' => 'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br /><br />Use this template to create modules that are similar to the standard Contacts and Leads modules.',
            'type_sale' => 'The <b>Sale</b> template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability. <br /><br />Use this template to create modules that are similar to the standard Opportunities module.',
            'type_file' => 'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br /><br />Use this template to create modules that are similar to the standard Documents module.',

        ),
        'dropdowns' => array(
            'default' => 'All of the <b>Dropdowns</b> for the application are listed here.<br><br>The dropdowns can be used for dropdown fields in any module.<br><br>To make changes to an existing dropdown, click on the dropdown name.<br><br>Click <b>Add Dropdown</b> to create a new dropdown.',
            'editdropdown' => 'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list.  This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>.  To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
            'Hidden' => '<b>Hidden</b> fields do not appear in the subpanel.',
            'Default' => '<b>Default</b> fields appear in the subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>Vedi log Cambiamenti</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>Vedi log Cambiamenti</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Search</b> appear here.<br /><br />The <b>Default</b> column contains the fields that are displayed in the Search form.<br /><br />The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.<br /><br /><img src="themes/default/images/SuiteCRMLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br /><img src="themes/default/images/SuiteCRMLogic/icon_calculated.png"/>Indicates a Calculated field whose value will be automatically determined based on a formula.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> Hidden fields do not appear in the Search.',
            'historyBtn' => 'Click <b>Vedi log Cambiamenti</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.<br/><br/><img src="themes/default/images/SuiteCRMLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><img src="themes/default/images/SuiteCRMLogic/icon_calculated.png"/>Indicates a Calculated field whose value will be automatically determined based on a formula.'
        ,
            'defaultquickcreate' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.<br/><br/><img src="themes/default/images/SuiteCRMLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><img src="themes/default/images/SuiteCRMLogic/icon_calculated.png"/>Indicates a Calculated field whose value will be automatically determined based on a formula.'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Click <b>Save</b> to preserve the changes you made to the layout since the last time you saved it.<br><br>The changes will not be displayed in the module until you Deploy the saved changes.',
            'historyBtn' => 'Click <b>Vedi log Cambiamenti</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br><br>The layout will immediately be displayed in the module.',
            'toolbox' => 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
            'panels' => 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
            'delete' => 'Drag and drop any element here to remove it from the layout',
            'property' => 'Edit The label displayed for this field. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
            'addField' => 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
            'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
            'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Questa è la <b>Descrizione</b> del pacchetto che viene visualizzata durante l´installazione.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize deployed modules.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
            'appBtn' => 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use <b>Studio</b> to determine what and how information is displayed in the modules',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'The components that you can customize for the module appear here.<br /><br />Click an icon to select the component to edit.',
            'fieldsBtn' => 'Create and customize <b>Fields</b> to store information in the module.',
            'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.',
            'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.',
            'layoutsBtn' => 'Customize the module <b>Layouts</b>. The layouts are the different views of the module contaning fields.<br /><br />You can determine which fields appear and how they are organized in each layout.',
            'subpanelBtn' => 'Determine which fields appear in the <b>Subpanels</b> in the module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'The module <b>Layouts</b> that can be customized appear here.<br /><br />The layouts display fields and field data.<br /><br />Click an icon to select the layout to edit.',
            'subpanelHelp' => 'The <b>Subpanels</b> in the module that can be customized appear here.<br /><br />Click an icon to select the module to edit.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
            'mbHelp' => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "Per creare una struttura personalizzata per un Gruppo di Sicurezza, selezionare il Gruppo di Sicurezza appropriato e la struttura da copiare come punto di partenza.",

            'searchHelp' => 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'The <b>Popup</b> layouts that can be customized appear here.<br>',
            'PopupListViewBtn' => 'The <b>Popup ListView</b> displays records based on the Popup search views.',
            'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
            'BasicSearchBtn' => 'Customize the <b>Basic Search</b> form that appears in the Basic Search tab in the Search area for the module.',
            'AdvancedSearchBtn' => 'Customize the <b>Advanced Search</b> form that appears in the Advanced Search tab in the Search area for the module.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'All of the <b>Relationships</b> that exist between the module and other deployed modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships.  For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.<br><br>Relationships can be created between any two deployed modules.',
            'relationshipHelp' => '<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'Edit a global Dropdown',
            'addDropDownBtn' => 'Add a new global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br /><br />The module template includes a pre-determined set of fields.<br /><br />To create a new field, click <b>Add Field</b>.<br /><br />To edit a field, click the <b>Field Name</b>.<br /><br />After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br /><br />The relationship <b>Name</b> is the system-generated name for the relationship.<br /><br />The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br /><br />The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br /><br />Click a column title to sort by the column.<br /><br />Click a row in the relationship table to view and edit the properties associated with the relationship.<br /><br />Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse over help for add relationship..',
            'addRelationship' => '<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br /><br />Relationships are visually expressed through subpanels and relate fields in the module records.<br /><br />Select one of the following relationship <b>Types</b> for the module:<br /><br /><b>One-to-One</b> - Both modules&amp;#39; records will contain relate fields.<br /><br /><b>One-to-Many</b> - The Primary Module&amp;#39;s record will contain a subpanel, and the Related Module&amp;#39;s record will contain a relate field.<br /><br /><b>Many-to-Many</b> - Both modules&amp;#39; records will display subpanels.<br /><br />Select the <b>Related Module</b> for the relationship. <br /><br />If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br /><br />Click <b>Save</b> to create the relationship.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br /><br />Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br /><br />If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => 'Click <b>Save</b> to save all changes.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes and make them active.',
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
            'nopackages' => 'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/><br/>To manage modules in the application, click <b>Studio</b>. <br/><br/>To create custom modules, click <b>Module Builder</b>.',
            'studioWelcome' => 'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
            'viewfields' => 'The fields in the module can be customized to suit your needs.<br/><br/>You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
            'viewrelationships' => 'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => 'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br><br>To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br><br> If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
            'labels' => 'The labels of the standard fields as well as custom fields can be changed.  Changing field labels will not affect the data stored in the fields.',
        ),
        'listViewEditor' => array(
            'modify' => 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
            'savebtn' => 'Clicking <b>Save</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that are not currently available to users for use in list views.',
            'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
            'Default' => 'Default fields are displayed to users who have not created custom list view settings.'
        ),

        'searchViewEditor' => array(
            'modify' => 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that will not be shown in the search view.',
            'Default' => 'Default fields will be shown in the search view.'
        ),
        'layoutEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'saveBtn' => 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
            'publishBtn' => 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
            'toolbox' => 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
            'panels' => 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
        ),
        'dropdownEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'dropdownaddbtn' => 'Clicking this button adds a new item to the dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br /><br />The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br /><br />Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use Studio to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use Studio to customize installed modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the Fields in the module.<br /><br />You can edit and create custom fields here.',
            'labelsBtn' => 'Edit the Labels to display for values in this module.',
            'layoutsBtn' => 'Customize the Layouts of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a Layout to edit.<br />To change the layout that contains data fields for entering data, click Edit View.<br /><br />To change the layout that displays the data entered into the fields in the Edit View, click Detail View.<br /><br />To change the columns which appear in the default list, click List View.<br /><br />To change the Basic and Advanced search form layouts, click Search.',
            'subpanelHelp' => 'Select a Subpanel to edit.',
            'searchHelp' => 'Select a Search layout to edit.',
            'labelsBtn' => 'Edit the Labels to display for values in this module.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'mbHelp' => 'Welcome to Module Builder.<br /><br />Use Module Builder to create packages containing custom modules based on standard or custom objects. <br /><br />To begin, click New Package to create a new package, or select a package to edit.<br /><br />A package acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br /><br />Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click Export Customizations to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Modifica Dropdowns',

//ASSISTANT
    'LBL_AS_SHOW' => 'Mostra l´Assistente in Fututo.',
    'LBL_AS_IGNORE' => 'Ignora l´Assistente in Futuro.',
    'LBL_AS_SAYS' => 'Consiglio dell´Assistente:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Costruttore Modulo',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Modifica DropDown',
    'LBL_EDIT_DROPDOWN' => 'Modifica Dropdown',
    'LBL_DEVELOPER_TOOLS' => 'Strumenti Sviluppatore',
    'LBL_SUGARPORTAL' => 'Modifica Portale SuiteCRM',
    'LBL_SYNCPORTAL' => 'Sincronizzazione Portale',
    'LBL_PACKAGE_LIST' => 'Elenco Pacchetti',
    'LBL_HOME' => 'Home',
    'LBL_NONE' => '-Nessuno-',
    'LBL_DEPLOYE_COMPLETE' => 'Pubblicazione completa',
    'LBL_DEPLOY_FAILED' => 'Si è verificato un errore durante il processo di pubblicazione, il tuo pacchetto potrebbe non essere stato caricato correttamente.',
    'LBL_ADD_FIELDS' => 'Aggiunge Campi Personalizzati',
    'LBL_AVAILABLE_SUBPANELS' => 'Sotto-Pannelli Disponibili',
    'LBL_ADVANCED' => 'Avanzata',
    'LBL_ADVANCED_SEARCH' => 'Ricerca Avanzata',
    'LBL_BASIC' => 'Basic',
    'LBL_BASIC_SEARCH' => 'Ricerca di Base',
    'LBL_CURRENT_LAYOUT' => 'Layout Attuale',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_CUSTOM' => 'Personalizzato',
    'LBL_DASHLET' => 'Dashlet di SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Vista Elenco delle Dashlet di SuiteCRM',
    'LBL_DASHLETSEARCH' => 'Cerca Dashlet di SuiteCRM',
    'LBL_POPUP' => 'Vista Popup',
    'LBL_POPUPLIST' => 'Vista elenco Popup',
    'LBL_POPUPLISTVIEW' => 'Vista elenco Popup',
    'LBL_POPUPSEARCH' => 'Ricerca Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Cerca Dashlet di SuiteCRM',
    'LBL_DISPLAY_HTML' => 'Visualizza Codice HTML',
    'LBL_DETAILVIEW' => 'Maschera di dettaglio',
    'LBL_DROP_HERE' => '[Lascia Qui]',
    'LBL_EDIT' => 'Modifica',
    'LBL_EDIT_LAYOUT' => 'Modifica Maschera',
    'LBL_EDIT_ROWS' => 'Modifica File',
    'LBL_EDIT_COLUMNS' => 'Modifica Colonne',
    'LBL_EDIT_LABELS' => 'Modifica Etichette',
    'LBL_EDIT_PORTAL' => 'Modifica Portale per...',
    'LBL_EDIT_FIELDS' => 'Modifica Campi',
    'LBL_EDITVIEW' => 'Maschera di modifica',
    'LBL_FILLER' => '(spaziatore)',
    'LBL_FIELDS' => 'Campi',
    'LBL_FAILED_TO_SAVE' => 'Salvataggio non riuscito',
    'LBL_FAILED_PUBLISHED' => 'Pubblicazione non riuscita',
    'LBL_HOMEPAGE_PREFIX' => 'Mio',
    'LBL_LAYOUT_PREVIEW' => 'Anteprima Maschera',
    'LBL_LAYOUTS' => 'Maschere',
    'LBL_LISTVIEW' => 'Maschera Elenco',
    'LBL_MODULES' => 'Moduli:',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nuovo Pacchetto',
    'LBL_NEW_PANEL' => 'Nuovo Pannello',
    'LBL_NEW_ROW' => 'Nuova Riga',
    'LBL_PACKAGE_DELETED' => 'Pacchetto Eliminato',
    'LBL_PUBLISHING' => 'Pubblicazione ...',
    'LBL_PUBLISHED' => 'Pubblicata',
    'LBL_SELECT_FILE' => 'Seleziona File',
    'LBL_SAVE_LAYOUT' => 'Salva Maschera',
    'LBL_SELECT_A_SUBPANEL' => 'Seleziona un Sotto-Pannello',
    'LBL_SELECT_SUBPANEL' => 'Seleziona un Sotto-Pannello',
    'LBL_SUBPANELS' => 'Sotto-Pannelli',
    'LBL_SUBPANEL' => 'Sotto-Pannello',
    'LBL_SUBPANEL_TITLE' => 'Titolo:',
    'LBL_SEARCH_FORMS' => 'Ricerca Moduli',
    'LBL_SEARCH' => 'Ricerca',
    'LBL_STAGING_AREA' => 'Area Organizzazione (trascina gli oggetti qui)',
    'LBL_SUGAR_FIELDS_STAGE' => 'Campi SuiteCRM (selezionare gli elementi da aggiungere in Area Organizzazione)',
    'LBL_SUGAR_BIN_STAGE' => 'Cestino (selezionare gli elementi da aggiungere in Area Organizzazione)',
    'LBL_TOOLBOX' => 'Strumenti',
    'LBL_VIEW_SUGAR_FIELDS' => 'Visualizza Campi SuiteCRM',
    'LBL_VIEW_SUGAR_BIN' => 'Mostra Cestino',
    'LBL_QUICKCREATE' => 'Creazione Rapida',
    'LBL_EDIT_DROPDOWNS' => 'Modifica un DropDown Globale',
    'LBL_ADD_DROPDOWN' => 'Aggiungi un nuovo DropDown Globale',
    'LBL_BLANK' => '-vuoto-',
    'LBL_TAB_ORDER' => 'Ordine Pannelli',
    'LBL_TAB_PANELS' => 'Visualizza i pannelli come schede',
    'LBL_TAB_PANELS_HELP' => 'Visualizza ogni pannello con una scheda propria anzichè visualizzarli tutti in un´unica schermata',
    'LBL_TABDEF_TYPE' => 'Tipo di Visualizzazione',
    'LBL_TABDEF_TYPE_HELP' => 'Seleziona la modalità di visualizzazione di questa sezione. Questa opzione ha effetto solo se sono state attivate schede in questa vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Scheda',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Pannello',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleziona Pannello per visualizzare questa sezione all&#39;interno del layout del record. Seleziona Scheda per visualizzare questa sezione come scheda seperata all&#39;interno del layout del record. Quando selezioni Scheda per una sezione, le sezioni successive impostate come Pannelli saranno visualizzate all&#39;interno della Scheda. Sarà creata una nuova Scheda per la sezione successiva per la quale è stata selezionata la tipologia Scheda. Se è stata selezionata la tipologia Scheda per una sezione successiva alla prima, la prima sezione sarà necessariamente visualizzata come Scheda.',
    'LBL_TABDEF_COLLAPSE' => 'Comprimi',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Seleziona per comprimere di default questo pannello.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nome Dropdown',
    'LBL_DROPDOWN_LANGUAGE' => 'Lingua Dropdown',
    'LBL_DROPDOWN_ITEMS' => 'Valori Dropdown',
    'LBL_DROPDOWN_ITEM_NAME' => 'Valore',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Label Visualizzata',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizza a Vista Dettaglio',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleziona questa opzione per sincronizzare questo layout di Vista Modifica al layout corrispondente di Vista Dettaglio. I campi e il posizionamento dei campi nella Vista Modifica saranno sincronizzati e salvati nella Vista Dettaglio automaticamente cliccando Salva o Salva & Pubblica nella Vista Modifica. Non potranno essere effettuate modifiche del layout  nella Vista Modifica.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Questo Vista Dettaglio è sincronizzata con la Vista Modifica corrispondente. <br />I campi e il posizionamento dei campi in questa Vista Dettaglio riflettono i campi e il loro posizionamento nella Vista Modifica.<br />Modifiche alla Vista Dettaglio non possono essere salvate o pubblicate in questa pagina. Apporta modifiche o non sincronizzare i layouts nella Vista Modifica.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copia da Vista Modifica',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Sono richiesti valori sia per il campo Nome che per il campo Visualizza Etichetta. Per aggiungere un campo vuoto, clicca Aggiungi senza inserire alcun valore per i campi Nome e Visualizza Etichetta.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Chiave esistente nella lista',
    'LBL_NO_SAVE_ACTION' => 'Salvataggio impossibile per questa vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal formato',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modulo',
    'LBL_LHS_MODULE' => 'Modulo primario',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relazione creata con Studio o Module Builder',
    'LBL_RELATIONSHIPS' => 'Relazioni',
    'LBL_RELATIONSHIP_EDIT' => 'Modifica Relazioni',
    'LBL_REL_NAME' => 'Nome',
    'LBL_REL_LABEL' => 'Etichetta',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'Modulo collegato',
    'LBL_NO_RELS' => 'Non sono presenti relazioni',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condizione opzionale',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Colonna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valore',
    'LBL_SUBPANEL_FROM' => 'Subpanel da',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'Uno a Uno',
    'LBL_ONETOMANY' => 'Uno a Molti',
    'LBL_MANYTOONE' => 'Molti a Uno',
    'LBL_MANYTOMANY' => 'Molti a Molti',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Selezionare una funzione o una componente.',
    'LBL_QUESTION_MODULE1' => 'Selezionare un modulo.',
    'LBL_QUESTION_EDIT' => 'Selezionare un modulo da modificare.',
    'LBL_QUESTION_LAYOUT' => 'Selezionare un layout da modificare.',
    'LBL_QUESTION_SUBPANEL' => 'Selezionare un sotto-pannello da modificare.',
    'LBL_QUESTION_SEARCH' => 'Selezionare una ricerca layout da modificare.',
    'LBL_QUESTION_MODULE' => 'Selezionare un componente del modulo da moficare.',
    'LBL_QUESTION_PACKAGE' => 'Selezionare un pacchetto da modificare, o creare un nuovo pacchetto.',
    'LBL_QUESTION_EDITOR' => 'Selezionare uno strumento.',
    'LBL_QUESTION_DROPDOWN' => 'Selezionare un dropdown da modificare, o creare un nuovo dropdown.',
    'LBL_QUESTION_DASHLET' => 'Selezionare un layout della dashlet da modificare.',
    'LBL_QUESTION_POPUP' => 'Seleziona il layout del popup da modificare.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Assegnato a',
    'LBL_NAME' => 'Nome Pacchetto:',
    'LBL_LABELS' => 'Etichette',
    'LBL_MASS_UPDATE' => 'Aggiornamento di Massa',
    'LBL_AUDITED' => 'Verifica',
    'LBL_CUSTOM_MODULE' => 'Modulo',
    'LBL_DEFAULT_VALUE' => 'Valore Default',
    'LBL_REQUIRED' => 'Richiesto',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'PERSONALIZZAZIONE',
    'LBL_HDEFAULT' => 'PREDEFINITA',
    'LBL_LANGUAGE' => 'Lingua:',
    'LBL_CUSTOM_FIELDS' => '* campi creati in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Modifica Etichette',
    'LBL_SECTION_PACKAGES' => 'Pacchetti',
    'LBL_SECTION_PACKAGE' => 'Pacchetto',
    'LBL_SECTION_MODULES' => 'Moduli',
    'LBL_SECTION_PORTAL' => 'Portale',
    'LBL_SECTION_DROPDOWNS' => 'Dropdown',
    'LBL_SECTION_PROPERTIES' => 'Proprietà',
    'LBL_SECTION_DROPDOWNED' => 'Modifica Dropdown',
    'LBL_SECTION_HELP' => 'Aiuto',
    'LBL_SECTION_ACTION' => 'Azione',
    'LBL_SECTION_MAIN' => 'Principale',
    'LBL_SECTION_EDPANELLABEL' => 'Modifica Etichetta Pannello',
    'LBL_SECTION_FIELDEDITOR' => 'Modifica Campo',
    'LBL_SECTION_DEPLOY' => 'Salva e Pubblica',
    'LBL_SECTION_MODULE' => 'Modulo',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Modifica Visibilità',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Predefinita',
    'LBL_HIDDEN' => 'Nascosto',
    'LBL_AVAILABLE' => 'Disponibile',
    'LBL_LISTVIEW_DESCRIPTION' => 'Qui sotto ci sono tre colonne. La colonna <b>Predefinita</b> contiene i campi che sono mostrati in elenco vista di default. Colonna  <b>Additional</b>  contiene i campi che utente può scegliere di usare per la creazione di viste personalizzate.  Colonna <b>Available</b>mostra i campi disponibili a te come amministratore per aggiungere colonne Default o Additional per uso da parte degli utenti.',
    'LBL_LISTVIEW_EDIT' => 'Modifica Maschera Elenco',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Anteprima',
    'LBL_MB_RESTORE' => 'Ripristina',
    'LBL_MB_DELETE' => 'Cancella',
    'LBL_MB_COMPARE' => 'Confronta',
    'LBL_MB_DEFAULT_LAYOUT' => 'Layout di Default',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Aggiungi',
    'LBL_BTN_SAVE' => 'Salva',
    'LBL_BTN_SAVE_CHANGES' => 'Salva Modifiche',
    'LBL_BTN_DONT_SAVE' => 'Annulla Modifiche',
    'LBL_BTN_CANCEL' => 'Annulla',
    'LBL_BTN_CLOSE' => 'Chiudi',
    'LBL_BTN_SAVEPUBLISH' => 'Salva &amp; Pubblica',
    'LBL_BTN_NEXT' => 'Avanti',
    'LBL_BTN_BACK' => 'Indietro',
    'LBL_BTN_CLONE' => 'Duplica',
    'LBL_BTN_ADDCOLS' => 'Aggiungi Colonne',
    'LBL_BTN_ADDROWS' => 'Aggiunge Fila',
    'LBL_BTN_ADDFIELD' => 'Aggiungi Campo',
    'LBL_BTN_ADDDROPDOWN' => 'Aggiungi Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Ordine Crescente',
    'LBL_BTN_SORT_DESCENDING' => 'Ordine Decrescente',
    'LBL_BTN_EDLABELS' => 'Modifica Etichette',
    'LBL_BTN_UNDO' => 'Annulla',
    'LBL_BTN_REDO' => 'Ripeti',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Aggiungi Campo Personalizzato',
    'LBL_BTN_EXPORT' => 'Esporta Personalizzazioni',
    'LBL_BTN_DUPLICATE' => 'Duplica',
    'LBL_BTN_PUBLISH' => 'Esporta modulo',
    'LBL_BTN_DEPLOY' => 'Salva e pubblica',
    'LBL_BTN_EXP' => 'Esporta progetto',
    'LBL_BTN_DELETE' => 'Cancella',
    'LBL_BTN_VIEW_LAYOUTS' => 'Visualizza Layout',
    'LBL_BTN_VIEW_FIELDS' => 'Visualizza Campi',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Visualizza Relazioni',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Aggiungi Relazione',
    'LBL_BTN_RENAME_MODULE' => 'Modifica Nome Modulo',
    'LBL_BTN_INSERT' => 'Inserisci',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Errore: Il campo esiste già',
    'ERROR_INVALID_KEY_VALUE' => "Errore: Valore Chiave Non Valido: [´]",
    'ERROR_NO_HISTORY' => 'Nessuna cronologia trovata',
    'ERROR_MINIMUM_FIELDS' => 'Questo layout deve contenere almeno un campo',
    'ERROR_GENERIC_TITLE' => 'Si è verificato un errore',
    'ERROR_REQUIRED_FIELDS' => 'Sei sicuro di voler continuare? Nel layout mancano i seguenti campi richiesti:',
    'ERROR_ARE_YOU_SURE' => 'Sei sicuro di voler continuare?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nome Pacchetto:',
    'LBL_MODULE_NAME' => 'Nome Modulo:',
    'LBL_AUTHOR' => 'Autore:',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_KEY' => 'Chiave:',
    'LBL_ADD_README' => 'Leggimi',
    'LBL_LAST_MODIFIED' => 'Ultima Modifica:',
    'LBL_NEW_MODULE' => 'Nuovo Modulo',
    'LBL_LABEL' => 'Etichetta:',
    'LBL_LABEL_TITLE' => 'Etichetta',
    'LBL_WIDTH' => 'Larghezza',
    'LBL_PACKAGE' => 'Pacchetto',
    'LBL_TYPE' => 'Tipo:',
    'LBL_TEAM_SECURITY' => 'Sicurezza Gruppo',
    'LBL_ASSIGNABLE' => 'Assegnabile',
    'LBL_PERSON' => 'Persona',
    'LBL_COMPANY' => 'Azienda',
    'LBL_ISSUE' => 'Edizione',
    'LBL_SALE' => 'Vendita',
    'LBL_FILE' => 'File',
    'LBL_NAV_TAB' => 'Pannello Navigazione',
    'LBL_CREATE' => 'Crea',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Visualizza',
    'LBL_LIST_VIEW' => 'Maschera Elenco',
    'LBL_HISTORY' => 'Cronologia',
    'LBL_RESTORE_DEFAULT' => 'Ripristina',
    'LBL_ACTIVITIES' => 'Attività',
    'LBL_NEW' => 'Nuovo',
    'LBL_TYPE_BASIC' => 'Base',
    'LBL_TYPE_COMPANY' => 'Azienda',
    'LBL_TYPE_PERSON' => 'Persona',
    'LBL_TYPE_ISSUE' => 'edizione',
    'LBL_TYPE_SALE' => 'Vendita',
    'LBL_TYPE_FILE' => 'File',
    'LBL_RSUB' => 'Questo sottopannello viene visualizzato sotto il modulo',
    'LBL_MSUB' => 'Questo è il sottopannello che il tuo modulo mette a disposizione dei moduli collegati.',
    'LBL_MB_IMPORTABLE' => 'Importazione',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'visibile',
    'LBL_VE_HIDDEN' => 'nascosto',
    'LBL_PACKAGE_WAS_DELETED' => '[[pacchetto]] è stato cancellato',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Esporta Personalizzazioni',
    'LBL_EC_NAME' => 'Nome Pacchetto:',
    'LBL_EC_AUTHOR' => 'Autore:',
    'LBL_EC_DESCRIPTION' => 'Descrizione:',
    'LBL_EC_KEY' => 'Chiave:',
    'LBL_EC_CHECKERROR' => 'Si Prega di selezionare un modulo.',
    'LBL_EC_CUSTOMFIELD' => 'campi personalizzati',
    'LBL_EC_CUSTOMLAYOUT' => 'layout personalizzati',
    'LBL_EC_NOCUSTOM' => 'Nessun modulo è stato personalizzato.',
    'LBL_EC_EMPTYCUSTOM' => 'Non ha personalizzazioni.',
    'LBL_EC_EXPORTBTN' => 'Esporta progetto',
    'LBL_MODULE_DEPLOYED' => 'Il modulo è stato distribuito.',
    'LBL_UNDEFINED' => 'no definito',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Impossibile Recuperare i dati',
    'LBL_AJAX_TIME_DEPENDENT' => 'Un´azione programmata è in corso, si prega di aspettare e riprovare tra alcuni secondi',
    'LBL_AJAX_LOADING' => 'Caricamento...',
    'LBL_AJAX_DELETING' => 'Cancellazione...',
    'LBL_AJAX_BUILDPROGRESS' => 'Costruzione In corso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Distribuzione In corso...',
    'LBL_AJAX_FIELD_EXISTS' => 'Il nome del campo inserito esiste già. Si prega di inserirne uno nuovo.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Risultato',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sei sicuro di voler rimuovere questo pacchetto? Questo cancellerà in modo permanente tutti i file associati a questo pacchetto.',
    'LBL_JS_REMOVE_MODULE' => 'Sei sicuro di voler rimuovere questo modulo? Tutti i file associati a questo modulo verranno cancellati definitivamente.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Ogni customizzazione fatta in Studio sarà sovrascritta quando questo modulo verrà ripubblicato. Sei sicuro di voler procedere?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Distribuzione Pacchetti',
    'LBL_JS_VALIDATE_NAME' => 'Nome - Deve essere alfa-numerico senza spazi e il primo carettere deve essere una lettera',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Nome Pacchetto già esistente',
    'LBL_JS_VALIDATE_KEY' => 'Chiave - Deve essere alfa-numerico senza spazi e il primo carettere deve essere una lettera',
    'LBL_JS_VALIDATE_LABEL' => 'Si prega di inserire una label che verrà utilizzata come Nome Display per questo modulo',
    'LBL_JS_VALIDATE_TYPE' => 'Si prega di selezionare il tipo di modulo che desideri costruire dalla lista qui sotto',
    'LBL_JS_VALIDATE_REL_NAME' => 'Nome - Deve essere alfanumerico e senza spazi',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - si prega di aggiungere una label che sarà visualizzata sotto il sottopannello',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sei sicuro di voler eliminare la relazione?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Questo renderà la relazione permanente. Sei sicuro di voler distribuire la relazione?',
    'LBL_CONFIRM_DONT_SAVE' => 'Sono stati fatti dei cambiamenti dopo ultimo salvataggio, vuoi salvare?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvare le modifiche?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'I dati potrebbero essere troncati e questo non può essere evitato, sei sicuro di voler continuare?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selezionare il tipo di dato appropriato in base al tipo di dato che vuoi inserire nel campo.',
    'LBL_POPHELP_SEARCHABLE' => 'Seleziona il grado di importanza di questo campo.<br />Ai campi contrassegnati con un grado di importanza più alto sarà dato più peso all´interno di una ricerca. Quando si esegue una ricerca, record corrispondenti contenenti campi con grado di importanza maggiore appariranno più in alto nei risultati di ricerca. <br />Se si cambia il grado di importanza per un campo da un livello all&#39;altro, si prega di eseguire un´indicizzazione di sistema per apportare la modifica. Assicurarsi di selezionare per cancellare i dati esistenti nel momento in cui l´indicizzazione di sistema viene eseguita.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Si</b>: Il campo sarà incluso dell´attività di importazione<br><b>No</b>: Il campo non sarà incluso nell´importazione.<br><b>Importante</b>: ll campo deve essere valorizzato in ogni importazione.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Inserire una misura per la larghezza (in pixel).<br>L´immagine caricata verrà scalata a questa larghezza.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Inserire una misura per l´altezza (in pixel). <br>L´immagine caricata verrà scalata a questa altezza.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Seleziona per usare questo campo durante la ricerca di record tramite ricerca globale su questo modulo.',
//Revert Module labels
    'LBL_RESET' => 'Reimposta',
    'LBL_RESET_MODULE' => 'Reimposta Modulo',
    'LBL_REMOVE_CUSTOM' => 'Elimina le customizzazioni',
    'LBL_CLEAR_RELATIONSHIPS' => 'Azzera le relazioni',
    'LBL_RESET_LABELS' => 'Reimposta le etichette',
    'LBL_RESET_LAYOUTS' => 'Reimposta i layouts"',
    'LBL_REMOVE_FIELDS' => 'Rimuovi i campi personalizzati',
    'LBL_CLEAR_EXTENSIONS' => 'Azzera le estensioni',
    'LBL_HISTORY_TIMESTAMP' => 'Data e ora',
    'LBL_HISTORY_TITLE' => 'Cronologia',


    'LBL_ADD_LAYOUT' => 'Aggiungi Layout',
    'LBL_ADD_LAYOUTS' => 'Aggiungi Layout',
    'LBL_QUESTION_ADD_LAYOUT' => 'Seleziona un Gruppo di Layout da Aggiungere.',
    'LBL_REMOVE_LAYOUT' => 'Rimuovi Gruppo di Layout',

    'LBL_SECURITYGROUP' => 'Gruppo Security:',
    'LBL_COPY_FROM' => 'Copia Da:',
    'LBL_ADDLAYOUTDONE' => 'Layout Salvato',
    'LBL_REMOVELAYOUTDONE' => 'Layout Rimosso',
    'LBL_REMOVE_CONFIRM' => 'Sei veramente sicuro?',

    'fieldTypes' => array(
        'varchar' => 'Campo Testo',
        'int' => 'Intero',
        'float' => 'Float',
        'bool' => 'Checkbox',
        'enum' => 'DropDown',
        'dynamicenum' => 'DropDown Dinamico',
        'multienum' => 'Selezione Multipla',
        'date' => 'Data',
        'phone' => 'Telefono',
        'currency' => 'Valuta',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Collega',
        'address' => 'Indirizzo',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimale',
        'image' => 'Immagine',
    ),
    'labelTypes' => array(
        "" => "Frequently used labels",
        "all" => "All Labels",
    ),

    'parent' => 'Flex Relate',

    'LBL_ILLEGAL_FIELD_VALUE' => "Il Drop down non può contenere virgolette.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Stai selezionando questa voce da rimuovere dalla lista drop down. Ogni campo drop down che utilizza questa lista con questa voce come valore non visualizzerà più il valore, e il valore non potrà essere più selezionato dai campi drop down. Sei sicuro di voler continuare?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Tutti i Moduli',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relativo {1} ID)',
);

