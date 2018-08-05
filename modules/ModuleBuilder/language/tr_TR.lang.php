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
    'LBL_LOADING' => 'Yükleniyor...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Seçeneklerini gizle' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'SugarCRM tarafından desteklenmektedir' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Modülü adlandırır.  Etiket dolaşma sekmesinde görünecektir.
Dolaşma sekmesi kontrol kutusunu işaretleyerek, modül için bir dolaşam sekmesi görüntülenmesini seçin.
Şablon tipi seçin. Her şablon kendine ait bir alan grubunu (önceden tanımlanmış görünüm de olduğu gibi ) içerir ve modülünüz için temel olarak kullanılır.
Kaydet tuşuna tıklyarak modülü oluşturun.',
            'modify' => 'The properties and possible actions for the <b>Package</b> appear here.<br><br>You can modify the <b>Name</b>, <b>Author</b> and <b>Description</b> of the package, as well as view and customize all of the modules contained within the package.<br><br>Click <b>New Module</b> to create a module for the package.<br><br>If the package contains at least one module, you can <b>Publish</b> and <b>Deploy</b> the package, as well as <b>Export</b> the customizations made in the package.',
            'name' => 'This is the <b>Name</b> of the current package. <br/><br/>The name you enter must be alphanumeric, start with a letter and contain no spaces. (Example: HR_Management)',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package.<br><br>The Author could be either an individual or a company.',
            'description' => 'This is the <b>Description</b> of the package that is displayed during installation.',
            'publishbtn' => 'Click <b>Publish</b> to save all entered data and to create a .zip file that is an installable version of the package.<br><br>Use <b>Module Loader</b> to upload the .zip file and install the package.',
            'deploybtn' => 'Click <b>Deploy</b> to save all entered data and to install the package, including all modules, in the current instance.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the contents of the package into a new package and to display the new package. <br/><br/>For the new package, a new name will be generated automatically by appending a number to the end of the name of the package used to create the new one. You can rename the new package by entering a new <b>Name</b> and clicking <b>Save</b>.',
            'exportbtn' => 'Click <b>Export</b> to create a .zip file containing the customizations made in the package.<br><br> The generated file is not an installable version of the package.<br><br>Use <b>Module Loader</b> to import the .zip file and to have the package, including customizations, appear in Module Builder.',
            'deletebtn' => 'Bu modülü silmek için Sil tuşuna tıklayın.',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the package.',
            'existing_module' => 'Click the <b>Module</b> icon to edit the properties and customize the fields, relationships and layouts associated with the module.',
            'new_module' => 'Click <b>New Module</b> to create a new module for this package.',
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
            'has_tab' => 'Dolaşma sekmesi seçimi, modül için aktifleştirilecektir.',
            'acl' => 'Checking this box will enable Access Controls on this module, including Field Level Security.',
            'studio' => 'Checking this box will allow administrators to customize this module within Studio.',
            'audit' => 'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
            'viewfieldsbtn' => 'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
            'viewrelsbtn' => 'Click <b>View Relationships</b> to view the relationships associated with this module and to create new relationships.',
            'viewlayoutsbtn' => 'Click <b>View Layouts</b> to view the layouts for the module and to customize the field arrangement within the layouts.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Modüle dolaşma sekmesinde gözükecek etikettir. ',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => 'The <b>Basic</b> template type provides basic fields, such as the Name, Assigned to, Team, Date Created and Description fields.',
            'type_company' => 'The <b>Company</b> template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br/><br/>Use this template to create modules that are similar to the standard Accounts module.',
            'type_issue' => 'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br/><br/>Use this template to create modules that are similar to the standard Cases and Bugs modules.',
            'type_person' => 'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br/><br/>Use this template to create modules that are similar to the standard Contacts and Leads modules.',
            'type_sale' => 'The <b>Sale</b> template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability. <br/><br/>Use this template to create modules that are similar to the standard Opportunities module.',
            'type_file' => 'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Use this template to create modules that are similar to the standard Documents module.',

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
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
        ,
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> fields do not appear in the Search.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'defaultquickcreate' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Click <b>Save</b> to preserve the changes you made to the layout since the last time you saved it.<br><br>The changes will not be displayed in the module until you Deploy the saved changes.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
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
            'description' => 'This is the <b>Description</b> of the package that is displayed during installation.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize deployed modules.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Uygulamaya global açlıan liste eklemek ve düzenleme yapmak için Açılan Liste Düzenleyicisini kullan',
            'appBtn' => 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Bir önceki adıma geri dön.',
            'studioHelp' => 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'The components that you can customize for the module appear here.<br><br>Click an icon to select the component to edit.',
            'fieldsBtn' => 'Create and customize <b>Fields</b> to store information in the module.',
            'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.',
            'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.',
            'layoutsBtn' => 'Customize the module <b>Layouts</b>.  The layouts are the different views of the module contaning fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
            'subpanelBtn' => 'Determine which fields appear in the <b>Subpanels</b> in the module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Düzenlemek için bir görünüm seç',
            'subpanelHelp' => 'Düzenlemek için bir alt panel seç',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
            'mbHelp' => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",

            'searchHelp' => 'Düzenlemek için bir arama görünüşü seç',
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
            'editDropDownBtn' => 'Global Açılan Liste  Düzenle',
            'addDropDownBtn' => 'Yeni Global Açılan Liste',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse over help for add relationship..',
            'addRelationship' => '<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
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
            'dropdownaddbtn' => 'Açılan listeye yeni bir eleman eklemek için bu tuşa tıklayın.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Bir önceki adıma geri dön.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Açılan Liste Düzenleyici',

//ASSISTANT
    'LBL_AS_SHOW' => 'Yardımcıyı gelecekte göster.',
    'LBL_AS_IGNORE' => 'Yardımcıyı gelecekte yoksay.',
    'LBL_AS_SAYS' => 'Yardımcı diyor ki:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Modül Yapılandırıcı',
    'LBL_STUDIO' => 'Stüdyo',
    'LBL_DROPDOWNEDITOR' => 'Açılan Liste Düzenleyici',
    'LBL_EDIT_DROPDOWN' => 'Açılanı Düzenle',
    'LBL_DEVELOPER_TOOLS' => 'Geliştirici Araçlar',
    'LBL_SUGARPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_SYNCPORTAL' => 'Senkronize Portal',
    'LBL_PACKAGE_LIST' => 'Paket Listesi',
    'LBL_HOME' => 'Ana Sayfa',
    'LBL_NONE' => 'boş',
    'LBL_DEPLOYE_COMPLETE' => 'Konuşlandırma Tamamlandı',
    'LBL_DEPLOY_FAILED' => 'Konuşlandırma sürecinde bir hata oluştu, paketiniz doğru şekilde indirilememiş olabilir.',
    'LBL_ADD_FIELDS' => 'Kişisel Alan Ekle',
    'LBL_AVAILABLE_SUBPANELS' => 'Kullanılabilir Altpanelle',
    'LBL_ADVANCED' => 'Geliştirilmiş',
    'LBL_ADVANCED_SEARCH' => 'Geliştirilmiş Arama',
    'LBL_BASIC' => 'Temel',
    'LBL_BASIC_SEARCH' => 'Temel Arama',
    'LBL_CURRENT_LAYOUT' => 'Plan',
    'LBL_CURRENCY' => 'Geçerlilik',
    'LBL_CUSTOM' => 'Özel',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_DASHLETSEARCH' => 'SuiteCRM Dashlet Search',
    'LBL_POPUP' => 'Popup Görünümü',
    'LBL_POPUPLIST' => 'Popup Lİste Görünümü',
    'LBL_POPUPLISTVIEW' => 'Popup Liste Görünümü',
    'LBL_POPUPSEARCH' => 'Popup Araması',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DISPLAY_HTML' => 'HTML Kodunu Görüntüle',
    'LBL_DETAILVIEW' => 'Detay Görünümü',
    'LBL_DROP_HERE' => 'Buraya bırak',
    'LBL_EDIT' => 'Düzenle',
    'LBL_EDIT_LAYOUT' => 'Plan Düzenle',
    'LBL_EDIT_ROWS' => 'Satır Düzenle',
    'LBL_EDIT_COLUMNS' => 'Kolon Düzenle',
    'LBL_EDIT_LABELS' => 'Etiketleri Düzenle',
    'LBL_EDIT_PORTAL' => 'Portalı Düzenle',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Görünümü Düzenle',
    'LBL_FILLER' => '(doldurucu)',
    'LBL_FIELDS' => 'Alanlar',
    'LBL_FAILED_TO_SAVE' => 'Kaydetme işlemi başarısız oldu',
    'LBL_FAILED_PUBLISHED' => 'Yayınlama işlemi başarısız oldu',
    'LBL_HOMEPAGE_PREFIX' => 'Benim',
    'LBL_LAYOUT_PREVIEW' => 'Plan Önizleme',
    'LBL_LAYOUTS' => 'Planlar',
    'LBL_LISTVIEW' => 'Liste Görünümü',
    'LBL_MODULES' => 'Modüller',
    'LBL_MODULE_TITLE' => 'Stüdyo',
    'LBL_NEW_PACKAGE' => 'Yeni Paket',
    'LBL_NEW_PANEL' => 'Yeni Panel',
    'LBL_NEW_ROW' => 'Yeni Satır',
    'LBL_PACKAGE_DELETED' => 'Paket silindi',
    'LBL_PUBLISHING' => 'Yayınlanıyor',
    'LBL_PUBLISHED' => 'Yayınlandı',
    'LBL_SELECT_FILE' => 'Dosya Seçin:',
    'LBL_SAVE_LAYOUT' => 'Planı kaydet',
    'LBL_SELECT_A_SUBPANEL' => 'Bir altpanel seç',
    'LBL_SELECT_SUBPANEL' => 'Altpanel seç',
    'LBL_SUBPANELS' => 'Altpaneller',
    'LBL_SUBPANEL' => 'Altpanel',
    'LBL_SUBPANEL_TITLE' => 'Başlık',
    'LBL_SEARCH_FORMS' => 'Ara',
    'LBL_SEARCH' => 'Ara',
    'LBL_STAGING_AREA' => 'Hazırlanma Alanı (öğeleri buraya sürükle bırak)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
    'LBL_TOOLBOX' => 'Araçkutusu',
    'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
    'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'Hızlı Yarat',
    'LBL_EDIT_DROPDOWNS' => 'Genel Açılan Düzenle',
    'LBL_ADD_DROPDOWN' => 'Yeni Bir Genel Açılan Ekle',
    'LBL_BLANK' => 'Boşluk',
    'LBL_TAB_ORDER' => 'Sekme Emri',
    'LBL_TAB_PANELS' => 'Panelleri sekme gibi görüntüle',
    'LBL_TAB_PANELS_HELP' => 'Her bir paneli tek bir ekranda göstermektense her paneli kendi sekmesi gibi görüntüle',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'İsim',
    'LBL_DROPDOWN_LANGUAGE' => 'Dil',
    'LBL_DROPDOWN_ITEMS' => 'Liste Öğeleri',
    'LBL_DROPDOWN_ITEM_NAME' => 'Öğe Adı',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Etiketi Görüntüle',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync to DetailView',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modül',
    'LBL_LHS_MODULE' => 'Birincil Modül',
    'LBL_CUSTOM_RELATIONSHIPS' => 'İlişki Stüdyoda yaratıldı',
    'LBL_RELATIONSHIPS' => 'İlişkiler',
    'LBL_RELATIONSHIP_EDIT' => 'İlişkileri Düzenle',
    'LBL_REL_NAME' => 'İsim',
    'LBL_REL_LABEL' => 'Etiket',
    'LBL_REL_TYPE' => 'Tip',
    'LBL_RHS_MODULE' => 'İlişkili Modül',
    'LBL_NO_RELS' => 'İlişki yok',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Opsiyonlu Şart',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolon',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Değer',
    'LBL_SUBPANEL_FROM' => 'Altpanel',
    'LBL_RELATIONSHIP_ONLY' => 'Bu iki modül arasında önceden var olan belli bir ilişki varmış gibi bu ilişki için bir öğe yaratılmayacak.',
    'LBL_ONETOONE' => 'Birebir',
    'LBL_ONETOMANY' => 'Tekten Çoğa',
    'LBL_MANYTOONE' => 'Çoktan Teke',
    'LBL_MANYTOMANY' => 'Çoktan Çoğa',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Bir fonksiyon veya bileşen seç.',
    'LBL_QUESTION_MODULE1' => 'Bir modül seç.',
    'LBL_QUESTION_EDIT' => 'Düzenlemek için bir modül seç.',
    'LBL_QUESTION_LAYOUT' => 'Düzenlemek için bir plan seç.',
    'LBL_QUESTION_SUBPANEL' => 'Düzenlemek için bir altpanel seç.',
    'LBL_QUESTION_SEARCH' => 'Düzenlemek için bir plan araması seç.',
    'LBL_QUESTION_MODULE' => 'Düzenlemek için bir modül bileşeni seç.',
    'LBL_QUESTION_PACKAGE' => 'Düzenlemek için bir paket seç veya yeni bir paket yarat.',
    'LBL_QUESTION_EDITOR' => 'Bir araç seç.',
    'LBL_QUESTION_DROPDOWN' => 'Düzenlemek için bir açılan iste seç veya yeni bir açılan liste yarat.',
    'LBL_QUESTION_DASHLET' => 'Düzenlemek için bir dashlet planı seç.',
    'LBL_QUESTION_POPUP' => 'Düzenlemek için bir popup planı seç.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'İlgili',
    'LBL_NAME' => 'İsim',
    'LBL_LABELS' => 'Etiketler',
    'LBL_MASS_UPDATE' => 'Miktar Güncelleme',
    'LBL_AUDITED' => 'Denetleme',
    'LBL_CUSTOM_MODULE' => 'Modül',
    'LBL_DEFAULT_VALUE' => 'Varsayılan Değer',
    'LBL_REQUIRED' => 'Gerekli',
    'LBL_DATA_TYPE' => 'Tipi',
    'LBL_HCUSTOM' => 'Özel',
    'LBL_HDEFAULT' => 'Varsayılan',
    'LBL_LANGUAGE' => 'Dil',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Etiketleri Düzenle',
    'LBL_SECTION_PACKAGES' => 'Paketler',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Modüller',
    'LBL_SECTION_PORTAL' => 'Portal',
    'LBL_SECTION_DROPDOWNS' => 'Açılan listeler',
    'LBL_SECTION_PROPERTIES' => 'Özellikler',
    'LBL_SECTION_DROPDOWNED' => 'Açılan Listeyi Düzenle',
    'LBL_SECTION_HELP' => 'Yardım',
    'LBL_SECTION_ACTION' => 'Aksiyon',
    'LBL_SECTION_MAIN' => 'Temel',
    'LBL_SECTION_EDPANELLABEL' => 'Panel Etiketini Düzenle',
    'LBL_SECTION_FIELDEDITOR' => 'Alanı düzenle',
    'LBL_SECTION_DEPLOY' => 'Konuşlandır',
    'LBL_SECTION_MODULE' => 'Modül',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Görünürlüğü Düzenle',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Varsayılan',
    'LBL_HIDDEN' => 'Saklı',
    'LBL_AVAILABLE' => 'Kullanılabilir',
    'LBL_LISTVIEW_DESCRIPTION' => 'Aşağıda 3 kolon görünmektedir. Varsayılan kolon bir liste görünümünde belirtilen alanlar içermektedir. İlave edilen kolon bir kullanıcının özel bir görünüm yaratmak için seçebileceği alanları içermektedir. Kullanılacak olan kolon kullanıcılara bir admin gibi varsayılan veya ilave edilen kolonlara ekleyebilceğiniz alanları gösterir.',
    'LBL_LISTVIEW_EDIT' => 'Lİste Görünümü Düzenleyici',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Önzileme',
    'LBL_MB_RESTORE' => 'Geri Yükle',
    'LBL_MB_DELETE' => 'Sil',
    'LBL_MB_COMPARE' => 'Karşılaştır',
    'LBL_MB_DEFAULT_LAYOUT' => 'Varsayılan Plan',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Ekle',
    'LBL_BTN_SAVE' => 'Kaydet',
    'LBL_BTN_SAVE_CHANGES' => 'Değişiklikleri kaydet',
    'LBL_BTN_DONT_SAVE' => 'Değişiklikleri at',
    'LBL_BTN_CANCEL' => 'İptal',
    'LBL_BTN_CLOSE' => 'Kapat',
    'LBL_BTN_SAVEPUBLISH' => 'Kaydet & Yaygınlaştır',
    'LBL_BTN_NEXT' => 'Sonraki',
    'LBL_BTN_BACK' => 'Geri',
    'LBL_BTN_CLONE' => 'Çokla',
    'LBL_BTN_ADDCOLS' => 'Kolonlar Ekle',
    'LBL_BTN_ADDROWS' => 'Satırlar Ekle',
    'LBL_BTN_ADDFIELD' => 'Alan Ekle',
    'LBL_BTN_ADDDROPDOWN' => 'Açılan Liste Ekle',
    'LBL_BTN_SORT_ASCENDING' => 'Küçükten Büyüğe Sırala',
    'LBL_BTN_SORT_DESCENDING' => 'Büyükten Küçüğe Sırala',
    'LBL_BTN_EDLABELS' => 'Etiketleri Düzenle',
    'LBL_BTN_UNDO' => 'Geri Al',
    'LBL_BTN_REDO' => 'İleri Al',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Özel Alan Ekle',
    'LBL_BTN_EXPORT' => 'Veri Aktarım Özelleştirmeleri',
    'LBL_BTN_DUPLICATE' => 'Çoğaltmak',
    'LBL_BTN_PUBLISH' => 'Yayınla',
    'LBL_BTN_DEPLOY' => 'Konumlandır',
    'LBL_BTN_EXP' => 'Veri Aktarma',
    'LBL_BTN_DELETE' => 'Sil',
    'LBL_BTN_VIEW_LAYOUTS' => 'Planları Görüntüle',
    'LBL_BTN_VIEW_FIELDS' => 'Alanları Görüntüle',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'İlişkileri Görüntüle',
    'LBL_BTN_ADD_RELATIONSHIP' => 'İlişki ekle',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
    'LBL_BTN_INSERT' => 'Ekle',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Hata: Alan hazlihazırda mevcut.',
    'ERROR_INVALID_KEY_VALUE' => "Hata: Geçersiz değer",
    'ERROR_NO_HISTORY' => 'Tarih bilgisi bulunamadı',
    'ERROR_MINIMUM_FIELDS' => 'Plan en az bir alanı içermelidir',
    'ERROR_GENERIC_TITLE' => 'Bir hata oluştu',
    'ERROR_REQUIRED_FIELDS' => 'Devam etmek istediğinizden emin misiniz? Bir sonraki alanlar planda yer almamaktadır.',
    'ERROR_ARE_YOU_SURE' => 'Devam etmek istediğinizden emin misiniz?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paket İsmi',
    'LBL_MODULE_NAME' => 'Modül İsmi',
    'LBL_AUTHOR' => 'Yazar',
    'LBL_DESCRIPTION' => 'Tanım',
    'LBL_KEY' => 'Anahtar:',
    'LBL_ADD_README' => 'Beni oku',
    'LBL_LAST_MODIFIED' => 'En son değiştirilen',
    'LBL_NEW_MODULE' => 'Yeni Modül',
    'LBL_LABEL' => 'Etiket',
    'LBL_LABEL_TITLE' => 'Etiket',
    'LBL_WIDTH' => 'Genişlik',
    'LBL_PACKAGE' => 'Paket',
    'LBL_TYPE' => 'Tip',
    'LBL_TEAM_SECURITY' => 'Takım Güvenliği',
    'LBL_ASSIGNABLE' => 'Atanabilir',
    'LBL_PERSON' => 'Kişi',
    'LBL_COMPANY' => 'Şirket',
    'LBL_ISSUE' => 'sonuç',
    'LBL_SALE' => 'Satış',
    'LBL_FILE' => 'Dosya',
    'LBL_NAV_TAB' => 'Navigasyon Sekmesi',
    'LBL_CREATE' => 'Yarat',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Görünüm',
    'LBL_LIST_VIEW' => 'Liste Görüntüsü',
    'LBL_HISTORY' => 'Tarihçeyi Gör',
    'LBL_RESTORE_DEFAULT' => 'Varsayılanı Geri Yükle',
    'LBL_ACTIVITIES' => 'Aktiviteler',
    'LBL_NEW' => 'Yeni',
    'LBL_TYPE_BASIC' => 'Temel',
    'LBL_TYPE_COMPANY' => 'Şirket',
    'LBL_TYPE_PERSON' => 'Kişi',
    'LBL_TYPE_ISSUE' => 'Sonuç',
    'LBL_TYPE_SALE' => 'Satış',
    'LBL_TYPE_FILE' => 'Dosya',
    'LBL_RSUB' => 'Bu modülünüzde gösterilecek olan altpaneldir.',
    'LBL_MSUB' => 'Bu modülünüzün ilişkili modülün görünmesi için temin ettiği altpaneldir.',
    'LBL_MB_IMPORTABLE' => 'Veri indirme',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'Görünür',
    'LBL_VE_HIDDEN' => 'Saklı',
    'LBL_PACKAGE_WAS_DELETED' => '[[paket]] silindi',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Veri Aktarım Özelleştirmeleri',
    'LBL_EC_NAME' => 'Paket İsmi',
    'LBL_EC_AUTHOR' => 'Yazar:',
    'LBL_EC_DESCRIPTION' => 'Tanım',
    'LBL_EC_KEY' => 'Anahtar',
    'LBL_EC_CHECKERROR' => 'Lütfen bir modül seçiniz.',
    'LBL_EC_CUSTOMFIELD' => 'Özelleştirilmiş Alanlar',
    'LBL_EC_CUSTOMLAYOUT' => 'Özelleştirilmiş planlar',
    'LBL_EC_NOCUSTOM' => 'Özelleştirilmiş modül yer almamaktadır.',
    'LBL_EC_EMPTYCUSTOM' => 'Boş özelleştirmeler mevcut.',
    'LBL_EC_EXPORTBTN' => 'Veri Aktarma',
    'LBL_MODULE_DEPLOYED' => 'Modül konumlandırıldı.',
    'LBL_UNDEFINED' => 'Tanımlanmamış',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Veriye erişim başarısız oldu.',
    'LBL_AJAX_TIME_DEPENDENT' => 'Zamana bağlı bir faaliyet devam etmekte. Lütfen bekleyin ve kısa bir süre sonra tekrar deneyiniz.',
    'LBL_AJAX_LOADING' => 'Yüklüyor...',
    'LBL_AJAX_DELETING' => 'Siliyor...',
    'LBL_AJAX_BUILDPROGRESS' => 'İlerleme kaydedildi....',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Konumlandırma devam etmekte...',
    'LBL_AJAX_FIELD_EXISTS' => 'Girmiş olduğunuz alan adı mevcut. Lütfen yeni bir alan ismi giriniz.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Sonuçlar',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Bu paketi silmek istediğinizden emin misiniz? Bu paket ile ilişkili tüm dosyalar tümüyle silinecek.',
    'LBL_JS_REMOVE_MODULE' => 'Bu modülü silmek istediğinizden emin misiniz? Bu modül ile ilişkili tüm dosyalar tümüyle silinecek.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Bu modül tekrar konumlandırıldığında stüdyo içinde gerçekleştirdiğiniz tüm özelleştirmeler üzerine yazılıyor olacaktır. İlerlemel istediğinizden emin misiniz?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paketi konumlandırıyor',
    'LBL_JS_VALIDATE_NAME' => 'İsim - Harf ve rakamlardan oluşmalı, boşluk olmamalı ve bir harf ile başlamalıdır.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Package Name already exists',
    'LBL_JS_VALIDATE_KEY' => 'Anahtar - Harf ve rakamlardan oluşmalıdır',
    'LBL_JS_VALIDATE_LABEL' => 'Bu modül için isim olarak kullanılabilecek bir etiket girin.',
    'LBL_JS_VALIDATE_TYPE' => 'Yapılandıracağınız bir modül cinsini yukarıdaki listeden seçiniz.',
    'LBL_JS_VALIDATE_REL_NAME' => 'İsim - Hem rakam hem harf içermeli ve boşluk olmamalı',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiket - Yukarıdaki altpanelde görüntülenecek bir etiket ekleyiniz.',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'İlişkiyi silmek istediğinizden emin misiniz?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Bu işlem ilişkiyi sürekli kılacaktır. İlgili ilişkiyi konumlandırmak istediğinizden emin misiniz?',
    'LBL_CONFIRM_DONT_SAVE' => 'En son kayıt işleminizden sonraki değişiklikler yapıldı, ilgili değişiklikleri kaydetmek ister misiniz?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Değişiklikleri kaydetmek ister misiniz?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Veri kesik olabilir ve ilgili işlem gerçekleştirilemiyor, devam etmek istediğinizden emin misiniz?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Alanın içine girilecek olan veri cinsine bağlı uygun veri cinsini seçiniz.',
    'LBL_POPHELP_SEARCHABLE' => 'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
    'LBL_POPHELP_IMPORTABLE' => 'Evet: İlgili alan bir veri alım işlemine dahil olacaktır.<br />Hayır: İlgili alan bir veri alım işlemine dahil olmayacaktır.<br />Gereken: Her veri alımı, ilgili alan için bir değer temin etmelidir.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Genişlik için bir rakam girişi yapınız; piksel bazında ölçülmelidir.<br />Yüklenen imaj bu genişlik ile hesaplanacaktır.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Yükseklik için bir rakam girişi yapınız; piksel bazında ölçülmelidir.<br />Yüklenen imaj bu yükseklik ile hesaplanacaktır.',
    'LBL_POPHELP_DUPLICATE_MERGE' => 'Seçilen: İlgili alan Çiftleri Birleştir özelliğinde ortaya çıkacak, ama Çiftleri Bulma özelliğindeki filtreleme şartlarında kullanılır olmayacak.<br />Seçilmeyen: İlgili alan Çiftleri Birleştir özelliğinde ortaya çıkmayacak, ve Çiftleri Bulma özelliğindeki filtreleme şartlarında kullanılır olmayacak.<br />Filtrelenen: İlgili alan Çiftleri Birleştir özelliğinde ortaya çıkacak, ve aynı zamanda Çiftleri Bulma özelliğindeki filtreleme şartlarında kullanılır olacak.<br />Sadece filtrele:İlgili alan Çiftleri Birleştir özelliğinde ortaya çıkmayacak, ama Çiftleri Bulma özelliğindeki filtreleme şartlarında kullanılır olacak.<br />Varsayılan Seçilen Fitre:İlgili alan Çiftleri Bulma sayfasında bir filtreleme şartı için kullanılacak, ve aynı zamanda Çiftleri Birleştir özelliğinde ortaya çıkacak.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
    'LBL_RESET' => 'Sıfırla',
    'LBL_RESET_MODULE' => 'Modülü Sıfırla',
    'LBL_REMOVE_CUSTOM' => 'Özelleştirmeleri Ortadan Kaldır',
    'LBL_CLEAR_RELATIONSHIPS' => 'İlişkileri Netleştir',
    'LBL_RESET_LABELS' => 'Etiketleri Sıfırla',
    'LBL_RESET_LAYOUTS' => 'Planları Sıfırla',
    'LBL_REMOVE_FIELDS' => 'Özel Alanları Ortadan Kaldır',
    'LBL_CLEAR_EXTENSIONS' => 'Uzantıları Netleştir',
    'LBL_HISTORY_TIMESTAMP' => 'Zaman Damgası',
    'LBL_HISTORY_TITLE' => 'Tarihçe',


    'LBL_ADD_LAYOUT' => 'Şablon ekle',
    'LBL_ADD_LAYOUTS' => 'Şablon ekle',
    'LBL_QUESTION_ADD_LAYOUT' => 'Bir grup düzeni eklemek için seçin.',
    'LBL_REMOVE_LAYOUT' => 'Grup düzeni Kaldır ',

    'LBL_SECURITYGROUP' => 'Güvenlik grubu:',
    'LBL_COPY_FROM' => 'Kopyalama kaynağı:',
    'LBL_ADDLAYOUTDONE' => 'Şablon saklandı',
    'LBL_REMOVELAYOUTDONE' => 'Şablon kaldırıldı',
    'LBL_REMOVE_CONFIRM' => 'Gerçekten emin misin?',

    'fieldTypes' => array(
        'varchar' => 'Metin Alanı',
        'int' => 'Tamsayı',
        'float' => 'Sürükle',
        'bool' => 'Kontrol Kutusu',
        'enum' => 'Açılan',
        'dynamicenum' => 'Dinamik açılır liste',
        'multienum' => 'Çoklu Seçim',
        'date' => 'Tarih',
        'phone' => 'Telefon',
        'currency' => 'Para birimi',
        'html' => 'HTML',
        'radioenum' => 'Radyo',
        'relate' => 'Bağlantı kur',
        'address' => 'Adres',
        'text' => 'Metin Alanı',
        'url' => 'URL',
        'iframe' => 'İlerle',
        'datetimecombo' => 'TarihSaat',
        'decimal' => 'Ondalık',
        'image' => 'Resim',
    ),
    'labelTypes' => array(
        "" => "Frequently used labels",
        "all" => "All Labels",
    ),

    'parent' => 'Esnek İlgi',

    'LBL_ILLEGAL_FIELD_VALUE' => "Açılan anahtar kota içeremez.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Bu öğeyi açılan listeden kaldırılması için seçiyorsunuz. Tüm açılan alanlar bu öğenin yer aldığı listeyi bir daha değeri göstermeyecekmiş gibi kullanıyorlar ve ilgili değer bir daha açılan listeden seçilemeyecek. Devam etmek istediğinizden emin misiniz?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Tüm Modüller',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

