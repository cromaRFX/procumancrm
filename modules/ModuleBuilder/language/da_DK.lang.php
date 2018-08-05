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
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Hide Options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Slet' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Giv et <b>navn</b> til pakken. Det navn, du indtaster, skal være alfanumerisk og må ikke indeholde mellemrum. (Eksempel: HR_Management)<br /><br />Du kan angive <b>forfatter</b> og <b>beskrivelsesinformation</b> for pakken.<br /><br />Klik på <b>Gem</b> for at oprette pakken.',
            'modify' => 'Egenskaber og muligheder for <b>pakken</b> vises her.<br /><br />Du kan ændre <br>navn</b>, <b>forfatter</b> og <b>beskrivelse</b> af pakken, samt se og tilpasse alle moduler, der er indeholdt i pakken.<br /><br />Klik på <b>Nyt modul</b> for at oprette et modul til pakken.<br /><br />Hvis pakken indeholder mindst et modul, kan du <b>udgive</b> og <b>installere</b> pakken, samt <b>eksporterer</b> tilpasningerne i pakken.',
            'name' => 'Dette er <b>navnet</b> på den nuværende pakke.<br /><br />Det navn, du indtaster, skal være alfanumerisk og starte med et bogstav og ikke indeholde mellemrum. (Eksempel: HR_Management)',
            'author' => 'Dette er <b>forfatteren</b>, der vises under installationen, som navnet på den/dem, der skabte pakken. Forfatteren kan enten være en enkeltperson eller en virksomhed.',
            'description' => 'Dette er <b>beskrivelsen</b> af pakken, der vises under installationen.',
            'publishbtn' => 'Klik på <b>Udgiv</b> for at gemme alle indtastede data og skabe en zip-fil, der er en installerbar version af pakken.<br /><br />Brug <b>Modulindlæser</b> til at uploade zip-filen og installere pakken.',
            'deploybtn' => 'Klik på <b>Installer</b> for at gemme alle indtastede data installere pakken, herunder alle moduler i den aktuelle Sugar løsning.',
            'duplicatebtn' => 'Klik på Dupliker for at kopiere indholdet af pakken over i en ny pakke og for at vise den nye pakke.<br /><br />For den nye pakke vil et nyt navn blive genereret automatisk ved at tilføje et tal i slutningen af navnet på den pakke, der bruges til at oprette den nye. Du kan omdøbe den nye pakke ved at indtaste et nyt <b>navn</b> og klikke på <b>Gem</b>.',
            'exportbtn' => 'Klik på <b>Eksporter</b> for at oprette en zip-fil, der indeholder tilpasninger foretaget i pakken.<br /><br />Den genererede fil er ikke en installerbar version af pakken.<br /><br />Brug <b>Modulindlæser</b> til at importere zip-filen og få pakken, herunder tilpasninger, vist i Modulgeneratoren.',
            'deletebtn' => 'Klik på <b>Slet</b> for at slette denne pakke og alle filer relateret til denne pakke.',
            'savebtn' => 'Klik på <b>Gem</b> for at gemme alle indtastede data i forbindelse med pakken.',
            'existing_module' => 'Klik på <b>Modul</b> ikonet for at redigere egenskaber og tilpas felter, relationer og layout i forbindelse med modulet.',
            'new_module' => 'Klik på <b>Nyt modul</b> for at oprette et nyt modul for denne pakke.',
            'key' => 'Denne 5-tegns alfanumeriske <b>nøgle</b> vil blive brugt til prefix på alle mapper, gruppenavne og databasetabeller for alle moduler i den nuværende pakke.<br /><br />Nøglen bliver brugt til at sikre unikke tabelnavne.',
            'readme' => 'Klik for at tilføje <b>readme</b> tekst til denne pakke.<br /><br />Readme teksten vil være tilgængelig på installationstidspunktet.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Afkrydsning af <b>Importerbar</b> i afkrydsningsfeltet vil gøre det muligt at importere til dette modul.<br /><br />Et link til Importeringsguiden vil vises i genvejepanelet i modulet. Importeringsguiden gør det lettere at importere data fra eksterne kilder ind i det brugerdefinerede modul.',
            'team_security' => 'Afkrydsning af <b>Team sikkerhed</b> i afkrydsningsfeltet vil aktivere team sikkerthed for dette modul.<br /><br />Hvis Team sikkerhed er aktiveret, vil team valgfeltet være tilstede i posterne i modulet.',
            'reportable' => 'Afkrydsning af dette felt vil tillade dette modul at få rapporter kørt imod det.',
            'assignable' => 'Afkrydsning af dette felt vil muliggøre en post i dette modul at blive tilknyttet en udvalgt bruger.',
            'has_tab' => 'Afkrydsning af <b>Navigationsfane</b> vil give en navigationsfane for modulet.',
            'acl' => 'Afkrydsning af dette felt vil aktivere adgangskontrol på dette modul, herunder feltniveausikkerhed.',
            'studio' => 'Afkrydsning af dette felt vil tillade administratorer at tilrette dette modul inde i Studio.',
            'audit' => 'Afkrydsning af dette felt vil aktivere revision til dette modul. Ændringer i visse områder vil blive registreret, så administratorer kan gennemgå ændringer i historik.',
            'viewfieldsbtn' => 'Klik på <b>vis felter</b> for at se de felter, der er forbundet med modulet, og for at oprette og redigere brugerdefinerede felter.',
            'viewrelsbtn' => 'Klik på <b>Vis relationer</b> for at se de tilknyttede relationer til dette modul og skabe nye relationer.',
            'viewlayoutsbtn' => 'Klik på <b>Vis layout</b> for at se layout for modulet, og for at tilpasse feltopsætningen inden for layoutet.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Dette er den <b>etiket</b>, der vil blive vist i navigationsfanen for modulet.',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => '<b>Standard</b> skabelontypen indeholder standard felter såsom navn, tildelt til, team, oprettet og beskrivelsesfelter.',
            'type_company' => '<b>Firma</b> skabelontypen giver organisationsspecifikke felter, såsom firmanavn, industri og faktureringsadresse.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard virksomhedsmodulet.',
            'type_issue' => '<b>Sager</b> skabelonentypen giver sags- og fejl-specifikke felter, såsom som nummer, status, prioritet og beskrivelse.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Sagsmodulet.',
            'type_person' => '<b>Kontakt</b> skabelontypen giver kontaktspecifikke felter, såsom hilsen, titel, navn, adresse og telefonnummer.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Kontaktmodulet.',
            'type_sale' => '<b>Salg</b> skabelontypen giver salgsmulighedsspecifikke felter, såsom kundeemnekilde, salgsfase, beløb og sandsynlighed.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Salgsmuligheder-modulet.',
            'type_file' => '<b>Fil</b> skabelontypen giver dokumentspecifikke felter, såsom filnavn, dokumenttype og udgivelsesdato.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Dokument-modulet.',

        ),
        'dropdowns' => array(
            'default' => 'Alle applikationens <b>Rullelister</b> er vist her.<br /><br />Rullelisterne kan bruges til rullelistefelter i alle moduler.<br /><br />For foretage ændringer i en eksisterende rulleliste, skal du klikke på rullelistenavnet.<br /><br />Klik på <b>Tilføj rulleliste</b> for at oprette en ny rulleliste.',
            'editdropdown' => 'Rullelister kan bruges til standard eller brugerdefinerede rullelistefelter i alle moduler.<br /><br />Give et <b>navn</b> til rullelisten.<br /><br />Hvis nogen sprogpakke er installeret i applikationen, kan du vælge det <b>sprog</b>, der bruges til elementerne på rullelisten.<br /><br /> I<b>Elementnavnsfeltet</b> angives et navn for muligheden i rullelisten. Dette navn vil ikke blive vist på rullelisten, der er synlig for brugerne.<br /><br />I <b>Etiket</b> feltet, angives en etiket, der vil være synlig for brugerne.<br /><br />Efter angivelsen af elementnavnet og etiketten, klik på <b>Tilføj</b> for at tilføje elementet til rullelisten.<br /><br />For at rearrangere elementer på listen, kan du trække og slippe elementer i den ønskede position.<br /><br />For redigere etiketten for et element, skal du klikke på <b>Rediger ikonet</b> og indtaste en ny etiket. For at slette et element fra rullelisten, skal du klikke på ikonet <b>Slet</b>.<br /><br />Hvis du vil fortryde en ændring til en etiket, skal du klikke på <b>Fortryd</b>. For genskabe en ændring, som var fortrudt, skal du klikke <b>Genskab</b>.<br /><br />Klik på <b>Gem</b> for at gemme rullelisten.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
            'historyDefault' => 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
            'Hidden' => '<b>Skjulte</b> felter vises ikke i underpaneler.',
            'Default' => '<b>Standard</b> felter vises i underpanelet.',

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
            'defaultdetailview' => '<b>Layout-området indeholder de felter, der aktuelt vises i detaljevisning.<br /><br />Værktøjskassen indeholder papirkurven samt felt- og layout elementer, der kan tilføjes layoutet.<br /><br />Foretage ændringer i layout ved at trække og slippe elementer og felter mellem værktøjskassen og layoutet og indenfor selve layoutet.<br /><br />Hvis du vil fjerne et felt fra layout, skal du trække feltet til papirkurven. Feltet vil være tilgængelige i værktøjskassen til at tilføje layoutet.<br /><br /><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Angiver et Afhængigt felt, der måske eller måske ikke er synligt baseret på værdien af en formel.<br /><img src="themes/default/images/SugarLogic/icon_calculated.png"/>Angiver et Beregnet felt, hvis værdi automatisk blive udfyldt ud fra en formel.</b>'
        ,
            'defaultquickcreate' => '<b>Layout-området indeholder de felter, der aktuelt vises i hurtigopretformularen.<br /><br />Hurtigopretformularen kommer frem i underpanelet for modulet, når der klikkes på opret-knappen.<br /><br />Hurtigopretformularen indeholder papirkurven samt felt- og layout elementer, der kan tilføjes layoutet.<br /><br />Foretage ændringer i layout ved at trække og slippe elementer og felter mellem værktøjskassen og layoutet og indenfor selve layoutet.<br /><br />Hvis du vil fjerne et felt fra layout, skal du trække feltet til papirkurven. Feltet vil være tilgængelige i værktøjskassen til at tilføje layoutet.<br /><br /><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Angiver et Afhængigt felt, der måske eller måske ikke er synligt baseret på værdien af en formel.<br /><img src="themes/default/images/SugarLogic/icon_calculated.png"/>Angiver et Beregnet felt, hvis værdi automatisk blive udfyldt ud fra en formel.</b>'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Klik på <b>Gem</b> for at bevare de ændringer, du har foretaget ved layoutet siden sidste gang du gemte det.<br /><br />Ændringerne vil ikke blive vist i modulet, indtil du implementerer gemte ændringer.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Klik på <b>Gem og Installer</b> for at gemme alle ændringer, du har foretaget ved layout, siden sidste gang du gemte det, og for at gøre ændringer aktive i modulet.<br /><br />Layoutet vil straks blive vist i modulet.',
            'toolbox' => 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
            'panels' => 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
            'delete' => 'Træk og slip ethvert element her for at fjerne det fra layoutet',
            'property' => 'Rediger etiketten, der vises for dette felt.<br /><b>Tab-rækkefølge</b> bestemmer i hvilken rækkefølge tabulatortasten skifter mellem felterne.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
            'addField' => 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
            'editField' => 'Egenskaberne for dette felt kan tilpasses.<br /><br />Klik <b>Klon</b> for at oprette et nyt felt med de samme egenskaber.',
            'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Klik på <b>Eksporter</b> for at oprette en zip-fil for pakken, der indeholder de tilpasninger, som du ønsker at eksportere.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Dette er <b>beskrivelsen</b> af pakken, der vises under installationen.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Velkommen til <b>Udviklerværktøjsområdet</b>.<br /><br />Brug værktøjerne i dette område til at oprette og håndtere standard og tilpassede moduler og felter.',
            'studioBtn' => 'Brug <b>Studio</b> til at tilpasse implementerede moduler.',
            'mbBtn' => 'Brug <b>modulgeneratoren</b> til at skabe nye moduler.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Brug <b>rullelisteeditor</b> til at tilføje og redigere globale rullelister i rullelistefelter.',
            'appBtn' => 'Applikationstilstand er hvor du kan tilpasse forskellige egenskaber i programmet, såsom hvor mange TPS rapporter, der vises på forsiden',
            'backBtn' => 'Tilbage til det forrige trin.',
            'studioHelp' => 'Brug <b>Studio</b> til at bestemme hvad og hvordan oplysninger vises i modulerne.',
            'moduleBtn' => 'Klik for at redigere dette modul.',
            'moduleHelp' => 'De komponenter, som du kan tilpasse for modulet, vises her.<br /><br />Klik på et ikon for at vælge det komponent, der skal redigeres.',
            'fieldsBtn' => 'Opret og tilpas <b>felter</b> for at lagre oplysninger i modulet.',
            'labelsBtn' => 'Redigere <b>etiketterne</b> som vises for felterne og andre titler i modulet.',
            'relationshipsBtn' => 'Tilføje nye eller se eksisterende <b>relationer</b> for modulet.',
            'layoutsBtn' => '<b>Tilpas layoutet for rediger-, detalje-, liste- og søgningsvisning.</b>',
            'subpanelBtn' => 'Bestem hvilke felter der vises i <b>underpanelerne</b> i modulet.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
            'subpanelHelp' => 'Klik på et ikon for at vælge modulet der skal redigeres.',
            'newPackage' => 'Klik på <b>Ny pakke</b> for at oprette en ny pakke.',
            'exportBtn' => 'Klik på <b>Eksporter tilpasninger</b> for at oprette og downloade en pakke, der indeholder tilpasninger lavet i Studio for specifikke moduler.',
            'mbHelp' => 'Brug <b>Modulgeneratoren</b> til at oprette pakker indeholdende brugerdefinerede moduler baseret på standard eller brugerdefinerede objekter.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",

            'searchHelp' => '<b>Vælg et søgningslayout der skal redigeres.</b>',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => '<b>Popup</b> layouts, der kan tilpasses, vises her.',
            'PopupListViewBtn' => '<b>Popup listevisningen</b> viser poster baseret på Popup søgevisningerne.',
            'PopupSearchViewBtn' => '<b>Popup søgning</b> viser poster for Popup listevisningen.',
            'BasicSearchBtn' => 'Tilpas <b>standard søgeformular</b>, der vises i den standard søgefanen i søgeområdet for modulet.',
            'AdvancedSearchBtn' => 'Tilpas <b>avanceret søgeformular</b>, der vises i den avancerede søgefanen i søgeområdet for modulet.',
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
            'editDropDownBtn' => 'Redigere en global rullelistning',
            'addDropDownBtn' => 'Tilføj en ny global rullelistning',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse-over hjælp for at tilføje relation ..',
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
            'studioWelcome' => 'Alle de allerede installerede moduler, herunder standard og modulindlæst objekter, kan tilpasses i Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
            'viewfields' => 'The fields in the module can be customized to suit your needs.<br/><br/>You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
            'viewrelationships' => 'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => 'I am an existing  module',
            'labels' => 'Etiketterne på standard felterne samt brugerdefinerede felter kan ændres. Ændring af feltetiketter vil ikke påvirke data gemt i felterne.',
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
            'dropdownaddbtn' => 'Hvis du klikker på denne knap føjes en ny post til rullelisten.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Klik på <b>Eksporter</b> for at oprette en zip-fil for pakken, der indeholder de tilpasninger, som du ønsker at eksportere.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Brug <b>modulgeneratoren</b> til at skabe nye moduler.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Tilbage til det forrige trin.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Klik for at redigere dette modul.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'newPackage' => 'Klik på <b>Ny pakke</b> for at oprette en ny pakke.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Rullelisteeditor',

//ASSISTANT
    'LBL_AS_SHOW' => 'Vis assistent fremover.',
    'LBL_AS_IGNORE' => 'Ignorer assistent fremover.',
    'LBL_AS_SAYS' => 'Assistenten siger:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Modulgenerator',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Rullelisteeditor',
    'LBL_EDIT_DROPDOWN' => 'Rediger rulleliste',
    'LBL_DEVELOPER_TOOLS' => 'Udviklerværktøjer',
    'LBL_SUGARPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_SYNCPORTAL' => 'Synkroniser portal',
    'LBL_PACKAGE_LIST' => 'Pakkeliste',
    'LBL_HOME' => 'Startside',
    'LBL_NONE' => '- Ingen -',
    'LBL_DEPLOYE_COMPLETE' => 'Implementering færdig',
    'LBL_DEPLOY_FAILED' => 'En fejl er fremkommende under installeringsprocessen, din programpakker er muligvis ikke installeret korret.',
    'LBL_ADD_FIELDS' => 'Tilføj brugerdefinerede felter',
    'LBL_AVAILABLE_SUBPANELS' => 'Tilgængelige underpaneler',
    'LBL_ADVANCED' => 'Avanceret',
    'LBL_ADVANCED_SEARCH' => 'Avanceret søgning',
    'LBL_BASIC' => 'Grundlæggende',
    'LBL_BASIC_SEARCH' => 'Grundlæggende søgning',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_CUSTOM' => 'Tilpas',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_DASHLETSEARCH' => 'SuiteCRM Dashlet Search',
    'LBL_POPUP' => 'Popup visning',
    'LBL_POPUPLIST' => 'Popup listevisning',
    'LBL_POPUPLISTVIEW' => 'Popup listevisning',
    'LBL_POPUPSEARCH' => 'Popup søgning',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DISPLAY_HTML' => 'Vis HTML-kode',
    'LBL_DETAILVIEW' => 'Detaljevisning',
    'LBL_DROP_HERE' => '[Slip her]',
    'LBL_EDIT' => 'Rediger',
    'LBL_EDIT_LAYOUT' => 'Rediger layout',
    'LBL_EDIT_ROWS' => 'Rediger rækker',
    'LBL_EDIT_COLUMNS' => 'Rediger kolonner',
    'LBL_EDIT_LABELS' => 'Rediger etiketter',
    'LBL_EDIT_PORTAL' => 'Rediger portal for',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Rediger visning',
    'LBL_FILLER' => '"udfylder"',
    'LBL_FIELDS' => 'Felter',
    'LBL_FAILED_TO_SAVE' => 'Det lykkedes ikke at gemme',
    'LBL_FAILED_PUBLISHED' => 'Det lykkedes ikke at udgive',
    'LBL_HOMEPAGE_PREFIX' => 'Min',
    'LBL_LAYOUT_PREVIEW' => 'Eksempel på layout',
    'LBL_LAYOUTS' => 'Layout',
    'LBL_LISTVIEW' => 'Listevisning',
    'LBL_MODULES' => 'Moduler:',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Ny pakke',
    'LBL_NEW_PANEL' => 'Nyt panel',
    'LBL_NEW_ROW' => 'Ny række',
    'LBL_PACKAGE_DELETED' => 'Pakken blev slettet',
    'LBL_PUBLISHING' => 'Udgiver ...',
    'LBL_PUBLISHED' => 'Udgivet',
    'LBL_SELECT_FILE' => 'Vælg fil',
    'LBL_SAVE_LAYOUT' => 'Gem layout',
    'LBL_SELECT_A_SUBPANEL' => 'Vælg et underpanel',
    'LBL_SELECT_SUBPANEL' => 'Vælg underpanel',
    'LBL_SUBPANELS' => 'Underpaneler',
    'LBL_SUBPANEL' => 'Underpanel',
    'LBL_SUBPANEL_TITLE' => 'Titel:',
    'LBL_SEARCH_FORMS' => 'Søg',
    'LBL_SEARCH' => 'Søg',
    'LBL_STAGING_AREA' => 'Mellemstation "træk og slip poster her"',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
    'LBL_TOOLBOX' => 'Værktøjskasse',
    'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
    'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'Hurtig oprettelse',
    'LBL_EDIT_DROPDOWNS' => 'Rediger en global rulleliste',
    'LBL_ADD_DROPDOWN' => 'Tilføj en ny global rulleliste',
    'LBL_BLANK' => '- tom -',
    'LBL_TAB_ORDER' => 'Tabulatorrækkefølge:',
    'LBL_TAB_PANELS' => 'Vis paneler som faner',
    'LBL_TAB_PANELS_HELP' => 'Vis hver enkelt panel som egen fane, i stedet for at have dem alle på en skærmvisning',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Navn',
    'LBL_DROPDOWN_LANGUAGE' => 'Sprog',
    'LBL_DROPDOWN_ITEMS' => 'Listeposter',
    'LBL_DROPDOWN_ITEM_NAME' => 'Postnavn',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Vist etiket',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synkroniser til detaljevisning',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Vælg denne mulighed for at synkronisere redigeringsvisningslayout med det tilsvarende detaljevisningslayout. Felter og feltplacering i redigeringsvisning vil blive synkroniseret med og gemt til detaljevisning ved at klikke på Gem eller Gem & Implementer i redigeringsvisning.<br />Layout ændringer finde sted i detaljevisning.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Detaljevisningslayoutet bliver synkroniseret med det tilsvarende redigeringsvisningslayout.<br />Felter og feltplacering i dette detaljevisningslayoutet afspejler felterne og feltplaceringen i redigeringsvisningslayoutet.<br />Ændringer i detaljevisningslayoutet kan ikke gemmes eller sættes ind i denne side. Foretage ændringer eller fjern synkroniseringen for layouts i redigeringsvisning.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopier fra redigeringsvisning',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Værdierne er påkrævet for både postnavn og vist etiket. For at tilføje en tom post, skal du klikke Tilføj uden at indtaste nogen værdier for postnavn og vist etiket.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primært modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relation oprettet i Studio',
    'LBL_RELATIONSHIPS' => 'Relationer',
    'LBL_RELATIONSHIP_EDIT' => 'Rediger relation',
    'LBL_REL_NAME' => 'Navn',
    'LBL_REL_LABEL' => 'Etiket',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Relateret modul',
    'LBL_NO_RELS' => 'Ingen relationer',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Valgfri betingelse',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolonne',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Værdi',
    'LBL_SUBPANEL_FROM' => 'Underpanel fra',
    'LBL_RELATIONSHIP_ONLY' => 'Ingen synlige elementer oprettes til denne relation, da der er en allerede eksisterende synlig relation mellem disse to moduler.',
    'LBL_ONETOONE' => 'En-til-en',
    'LBL_ONETOMANY' => 'En-til-mange',
    'LBL_MANYTOONE' => 'Mange-til-en',
    'LBL_MANYTOMANY' => 'Mange-til-mange',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Vælg en funktion eller komponent.',
    'LBL_QUESTION_MODULE1' => 'Vælg et modul.',
    'LBL_QUESTION_EDIT' => 'Vælg et modul, der skal redigeres.',
    'LBL_QUESTION_LAYOUT' => 'Vælg et layout, der skal redigeres.',
    'LBL_QUESTION_SUBPANEL' => 'Vælg et underpanel, der skal redigeres.',
    'LBL_QUESTION_SEARCH' => 'Vælg et søgelayout, der skal redigeres.',
    'LBL_QUESTION_MODULE' => 'Vælg en modulkomponent, der skal redigeres.',
    'LBL_QUESTION_PACKAGE' => 'Vælg en pakke, der skal redigeres, eller opret en ny pakke.',
    'LBL_QUESTION_EDITOR' => 'Vælg et værktøj.',
    'LBL_QUESTION_DROPDOWN' => 'Vælg en rulleliste, der skal redigeres, eller opret en ny rulleliste.',
    'LBL_QUESTION_DASHLET' => 'Vælg et dashletlayout, der skal redigeres.',
    'LBL_QUESTION_POPUP' => 'Vælg et popup layout at redigere',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Relater til',
    'LBL_NAME' => 'Navn',
    'LBL_LABELS' => 'Etiketter',
    'LBL_MASS_UPDATE' => 'Masseopdatering',
    'LBL_AUDITED' => 'Revision',
    'LBL_CUSTOM_MODULE' => 'Modul',
    'LBL_DEFAULT_VALUE' => 'Standardværdi',
    'LBL_REQUIRED' => 'Obligatorisk',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'BRUGERDEFINERET',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Sprog:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Rediger etiketter',
    'LBL_SECTION_PACKAGES' => 'Pakker',
    'LBL_SECTION_PACKAGE' => 'Pakke',
    'LBL_SECTION_MODULES' => 'Moduler',
    'LBL_SECTION_PORTAL' => 'Portal',
    'LBL_SECTION_DROPDOWNS' => 'Rullelister',
    'LBL_SECTION_PROPERTIES' => 'Egenskaber',
    'LBL_SECTION_DROPDOWNED' => 'Rediger rulleliste',
    'LBL_SECTION_HELP' => 'Hjælp',
    'LBL_SECTION_ACTION' => 'Handling',
    'LBL_SECTION_MAIN' => 'Primær',
    'LBL_SECTION_EDPANELLABEL' => 'Rediger paneletiket',
    'LBL_SECTION_FIELDEDITOR' => 'Rediger felt',
    'LBL_SECTION_DEPLOY' => 'Installer',
    'LBL_SECTION_MODULE' => 'Modul',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Rediger synlighed',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standard',
    'LBL_HIDDEN' => 'Skjult',
    'LBL_AVAILABLE' => 'Tilgængelige',
    'LBL_LISTVIEW_DESCRIPTION' => 'Der vises tre kolonner nedenfor. Kolonnen <b>Standard</b> indeholder felter, der som standard vises i en listevisning. Kolonnen <b>Yderligere</b> indeholder felter, som en bruger kan vælge at bruge til at oprette en brugerdefineret visning. Kolonnen <b>Tilgængelige</b> viser felter, der er tilgængelige for dig som administrator, så du kan føje dem til kolonnerne Standard eller Yderligere til brug for brugerne.',
    'LBL_LISTVIEW_EDIT' => 'Listevisningseditor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Eksempel',
    'LBL_MB_RESTORE' => 'Gendan',
    'LBL_MB_DELETE' => 'Slet',
    'LBL_MB_COMPARE' => 'Sammenlign',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standardlayout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Tilføj',
    'LBL_BTN_SAVE' => 'Gem',
    'LBL_BTN_SAVE_CHANGES' => 'Gem ændringer',
    'LBL_BTN_DONT_SAVE' => 'Fjern ændringer',
    'LBL_BTN_CANCEL' => 'Annuller',
    'LBL_BTN_CLOSE' => 'Luk',
    'LBL_BTN_SAVEPUBLISH' => 'Gem og installer',
    'LBL_BTN_NEXT' => 'Næste',
    'LBL_BTN_BACK' => 'Tilbage',
    'LBL_BTN_CLONE' => 'Klon',
    'LBL_BTN_ADDCOLS' => 'Tilføj kolonner',
    'LBL_BTN_ADDROWS' => 'Tilføj rækker',
    'LBL_BTN_ADDFIELD' => 'Tilføj felt',
    'LBL_BTN_ADDDROPDOWN' => 'Tilføj rulleliste',
    'LBL_BTN_SORT_ASCENDING' => 'Sortér stigende',
    'LBL_BTN_SORT_DESCENDING' => 'Sortér faldende',
    'LBL_BTN_EDLABELS' => 'Rediger etiketter',
    'LBL_BTN_UNDO' => 'Fortryd',
    'LBL_BTN_REDO' => 'Annuller fortryd',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Tilføj brugerdefineret felt',
    'LBL_BTN_EXPORT' => 'Eksportér tilpasninger',
    'LBL_BTN_DUPLICATE' => 'Dupliker',
    'LBL_BTN_PUBLISH' => 'Udgiv',
    'LBL_BTN_DEPLOY' => 'Installer',
    'LBL_BTN_EXP' => 'Eksportér',
    'LBL_BTN_DELETE' => 'Slet',
    'LBL_BTN_VIEW_LAYOUTS' => 'Vis layout',
    'LBL_BTN_VIEW_FIELDS' => 'Vis felter',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Vis relationer',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Tilføj relation',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
    'LBL_BTN_INSERT' => 'Indsæt',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Fejl: Feltet findes allerede',
    'ERROR_INVALID_KEY_VALUE' => "Fejl: Ugyldig nøgleværdi: [&#39;]",
    'ERROR_NO_HISTORY' => 'Ingen historikfiler blev fundet',
    'ERROR_MINIMUM_FIELDS' => 'Dette layout skal indeholde mindst ét felt',
    'ERROR_GENERIC_TITLE' => 'En fejl er opstået',
    'ERROR_REQUIRED_FIELDS' => 'Er du sikker på at du vil forsætte? Følgende påkrævende felter mangler i layoutet:',
    'ERROR_ARE_YOU_SURE' => 'Er du sikker på at du vil forsætte?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pakkenavn:',
    'LBL_MODULE_NAME' => 'Modulnavn:',
    'LBL_AUTHOR' => 'Forfatter:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_KEY' => 'Nøgle:',
    'LBL_ADD_README' => 'Vigtigt',
    'LBL_LAST_MODIFIED' => 'Sidst ændret:',
    'LBL_NEW_MODULE' => 'Nyt modul',
    'LBL_LABEL' => 'Etiket:',
    'LBL_LABEL_TITLE' => 'Etiket',
    'LBL_WIDTH' => 'Bredde',
    'LBL_PACKAGE' => 'Pakke:',
    'LBL_TYPE' => 'Type:',
    'LBL_TEAM_SECURITY' => 'Teamsikkerhed',
    'LBL_ASSIGNABLE' => 'Kan tildeles',
    'LBL_PERSON' => 'Person',
    'LBL_COMPANY' => 'Firma',
    'LBL_ISSUE' => 'Problem',
    'LBL_SALE' => 'Salg',
    'LBL_FILE' => 'Fil',
    'LBL_NAV_TAB' => 'Navigationsfane',
    'LBL_CREATE' => 'Opret',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Vis',
    'LBL_LIST_VIEW' => 'Listevisning',
    'LBL_HISTORY' => 'Vis historik',
    'LBL_RESTORE_DEFAULT' => 'Gendan standard',
    'LBL_ACTIVITIES' => 'Aktiviteter',
    'LBL_NEW' => 'Ny',
    'LBL_TYPE_BASIC' => 'grundlæggende',
    'LBL_TYPE_COMPANY' => 'firma',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'problem',
    'LBL_TYPE_SALE' => 'salg',
    'LBL_TYPE_FILE' => 'fil',
    'LBL_RSUB' => 'Dette underpanel bliver vist i dit modul',
    'LBL_MSUB' => 'Dette underpanel leveres af dit modul til visning i det relaterede modul',
    'LBL_MB_IMPORTABLE' => 'Importerer',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'synlig',
    'LBL_VE_HIDDEN' => 'skjult',
    'LBL_PACKAGE_WAS_DELETED' => '[[pakke]] blev slettet',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Eksportér tilpasninger',
    'LBL_EC_NAME' => 'Pakkenavn:',
    'LBL_EC_AUTHOR' => 'Forfatter:',
    'LBL_EC_DESCRIPTION' => 'Beskrivelse:',
    'LBL_EC_KEY' => 'Nøgle:',
    'LBL_EC_CHECKERROR' => 'Vælg et modul.',
    'LBL_EC_CUSTOMFIELD' => 'tilpassede felter',
    'LBL_EC_CUSTOMLAYOUT' => 'tilpassede layout',
    'LBL_EC_NOCUSTOM' => 'Ingen moduler er tilpasset.',
    'LBL_EC_EMPTYCUSTOM' => 'har tomme tilpasninger.',
    'LBL_EC_EXPORTBTN' => 'Eksportér',
    'LBL_MODULE_DEPLOYED' => 'Modulet er blevet installeret.',
    'LBL_UNDEFINED' => 'udefineret',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Det lykkedes ikke at hente data',
    'LBL_AJAX_TIME_DEPENDENT' => 'En tidsafhængig handling er startet. Vent, og prøv igen om et par sekunder.',
    'LBL_AJAX_LOADING' => 'Indlæser...',
    'LBL_AJAX_DELETING' => 'Sletter...',
    'LBL_AJAX_BUILDPROGRESS' => 'Opbygningen er startet...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Installationen er startet...',
    'LBL_AJAX_FIELD_EXISTS' => 'Det angivne feltnavn findes allerede. Angiv et nyt feltnavn.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Result',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Er du sikker på, at du vil fjerne denne pakke? Derved bliver alle de filer, der er knyttet til denne pakke, slettet permanent.',
    'LBL_JS_REMOVE_MODULE' => 'Er du sikker på, at du vil fjerne dette modul? Derved bliver alle de filer, der er knyttet til dette modul, slettet permanent.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Enhver tilretning, som du laver i Studio, vil blive overskrevet, når dette modul er gen-implementeret. Er du sikker på, at du ønsker at fortsætte?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Installerer pakke',
    'LBL_JS_VALIDATE_NAME' => 'Navn - skal være alfanumerisk og uden mellemrum og starte med et bogstav',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Pakkens navn eksisterer allerede',
    'LBL_JS_VALIDATE_KEY' => 'Nøgle - skal være alfanumerisk og uden mellemrum og starte med et bogstav',
    'LBL_JS_VALIDATE_LABEL' => 'Angiv en etiket, der skal bruges som vist navn til dette modul',
    'LBL_JS_VALIDATE_TYPE' => 'Vælg den type modul, du vil bygge, fra listen ovenfor',
    'LBL_JS_VALIDATE_REL_NAME' => 'Navn - skal være alfanumerisk og uden mellemrum',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiket - tilføj en etiket, der skal vises over underpanelet',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Er du sikker på, at du vil slette denne relation?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Derved bliver denne relation permanent. Er du sikker på, at du vil installere denne relation?',
    'LBL_CONFIRM_DONT_SAVE' => 'Der er foretaget ændringer, siden du sidst gemte. Vil du gemme?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Vil du gemme ændringer?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan blive afkortet, og dette kan ikke fortrydes. Er du sikker på, at du ønsker at fortsætte?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Vælg den relevante datatype på basis af den datatype, der skal angives i feltet.',
    'LBL_POPHELP_SEARCHABLE' => 'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Ja</b>: Feltet medtages i en importhandling.<br><b>Nej</b>: Feltet medtages ikke i en import.<br><b>Obligatorisk</b>: En værdi for feltet skal angives ved alle importer.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Indtast et tal for bredden, målt i pixel.<br><br />Det uploadede billede vil blive skaleret til denne bredde.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Indtast et tal for højden, målt i pixel.<br><br />Det uploadede billede vil blive skaleret til denne højde.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Aktiveret</b>: Feltet vises i funktionen Flet dubletter, men kan ikke bruges til filterbetingelserne i funktionen Find dubletter.<br><b>Deaktiveret</b>: Feltet vises ikke i funktionen Flet dubletter og kan ikke bruges til filterbetingelserne i funktionen Find dubletter.<br><b>I filter</b>: Feltet vises i funktionen Flet dubletter og er også tilgængeligt i funktionen Find dubletter.<br><b>Kun filter</b>: Feltet vises ikke i funktionen Flet dubletter, men er tilgængeligt i funktionen Find dubletter.<br><b>Brug det valgte filter som standard</b>: Feltet bruges som standard til en filterbetingelse på siden Find dubletter og vises også i funktionen Flet dubletter.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
    'LBL_RESET' => 'Nulstil',
    'LBL_RESET_MODULE' => 'Nulstil modul',
    'LBL_REMOVE_CUSTOM' => 'Fjern tilpasninger',
    'LBL_CLEAR_RELATIONSHIPS' => 'Ryd relationerne',
    'LBL_RESET_LABELS' => 'Nulstil etiketter',
    'LBL_RESET_LAYOUTS' => 'Nulstil layouts',
    'LBL_REMOVE_FIELDS' => 'Fjern brugerdefinerede felter',
    'LBL_CLEAR_EXTENSIONS' => 'Nulstil tilføjelser',
    'LBL_HISTORY_TIMESTAMP' => 'Tidsstempel',
    'LBL_HISTORY_TITLE' => 'Historik',


    'LBL_ADD_LAYOUT' => 'Tilføj Layout',
    'LBL_ADD_LAYOUTS' => 'Tilføj Layout',
    'LBL_QUESTION_ADD_LAYOUT' => 'Select a Group Layout to Add.',
    'LBL_REMOVE_LAYOUT' => 'Remove Group Layout',

    'LBL_SECURITYGROUP' => 'Sikkerhedsgruppe',
    'LBL_COPY_FROM' => 'Kopier fra:',
    'LBL_ADDLAYOUTDONE' => 'Layout Gemt',
    'LBL_REMOVELAYOUTDONE' => 'Layout Fjernet',
    'LBL_REMOVE_CONFIRM' => 'Er Du Sikker?',

    'fieldTypes' => array(
        'varchar' => 'Tekstfelt',
        'int' => 'Heltal',
        'float' => 'Decimal',
        'bool' => 'Afkrydsningsfelt',
        'enum' => 'Rulleliste',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => 'MultiSelect',
        'date' => 'Dato',
        'phone' => 'Telefon',
        'currency' => 'Valuta',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relater',
        'address' => 'Adresse',
        'text' => 'Tekstområde',
        'url' => 'Link',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Dato/klokkeslæt',
        'decimal' => 'Decimal',
        'image' => 'Billede',
    ),
    'labelTypes' => array(
        "" => "Ofte brugte etiketter",
        "all" => "Alle etiketter",
    ),

    'parent' => 'Fleks. relater',

    'LBL_ILLEGAL_FIELD_VALUE' => "Dropdown nøglen kan ikke indeholde anførselstegn.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Du har valgt dette element til fjernes fra dropdown listen. Ethvert dropdown felt, som bruger denne liste med dette element som en værdi, vil ikke længere vise værdien, og og værdien vil ikke længere kunne vælges fra dropdown felter. Er du sikker på, at du ønsker at fortsætte?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Alle moduler',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

