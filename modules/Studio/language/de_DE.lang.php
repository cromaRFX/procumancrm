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
'LBL_EDIT_LAYOUT'=>'Layout bearbeiten',
'LBL_EDIT_ROWS'=>'Zeilen bearbeiten',
'LBL_EDIT_COLUMNS'=>'Spalten bearbeiten',
'LBL_EDIT_LABELS'=>'Bezeichnungen bearbeiten',
'LBL_EDIT_FIELDS'=>'Benutzerdefinierte Felder bearbeiten',
'LBL_ADD_FIELDS'=>'Benutzerdefinierte Felder hinzufügen',
'LBL_DISPLAY_HTML'=>'HTML Code anzeigen',
'LBL_SELECT_FILE'=> 'Datei auswählen',
'LBL_SAVE_LAYOUT'=> 'Layout speichern',
'LBL_SELECT_A_SUBPANEL' => 'Einen Subpanel auswählen',
'LBL_SELECT_SUBPANEL' => 'Subpanel auswählen',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Toolbox',
'LBL_STAGING_AREA' => 'Arbeitsbereich (Elemente hierher ziehen)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Papierkorb (klicken Sie auf das Element um es zum Arbeitsbereich hinzuzufügen)',
'LBL_VIEW_SUGAR_FIELDS' => 'SuiteCRM Felder anzeigen',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Fehler beim Speichern',
'LBL_CONFIRM_UNSAVE' => 'Änderungen werden nicht gespeichert. Möchten Sie wirklich fortfahren?',
'LBL_PUBLISHING' => 'Veröffentlichen ...',
'LBL_PUBLISHED' => 'Veröffentlicht',
'LBL_FAILED_PUBLISHED' => 'Fehler beim Veröffentlichen',
'LBL_DROP_HERE' => '[Hier ablegen]',

//CUSTOM FIELDS
'LBL_NAME'=>'Name',
'LBL_LABEL'=>'Bezeichnung',
'LBL_MASS_UPDATE'=>'Massenänderung',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Standardwert',
'LBL_REQUIRED'=>'Erforderlich',
'LBL_DATA_TYPE'=>'Typ',


'LBL_HISTORY'=>'Verlauf',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Willkommen im Studio!</h2><br> Was möchten Sie heute machen?<br><b> Bitte wählen Sie eine der folgenden Optionen.</b>',
'LBL_SW_EDIT_MODULE'=>'Modul bearbeiten',
'LBL_SW_EDIT_DROPDOWNS'=>'Auswahlmenüs bearbeiten',
'LBL_SW_EDIT_TABS'=>'Konfigurieren Sie die Registerkarten',
'LBL_SW_RENAME_TABS'=>'Reiter umbenennen',
'LBL_SW_EDIT_GROUPTABS'=>'Gruppen-Reiter konfigurieren',
'LBL_SW_EDIT_PORTAL'=>'Portal bearbeiten',
'LBL_SW_EDIT_WORKFLOW'=>'Workflow bearbeiten',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Benutzerdefinierte Felder reparieren',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Benutzerdefinierte Felder migrieren',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Willkommen im Studio!</h2><br><b>Bitte wählen Sie ein Modul.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Modul bearbeiten</h2>Was möchten Sie mit dem Modul machen?<br><b>Bitte wählen Sie eine Aktion, die Sie durchführen möchten.</b>',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Benutzerdefinierte Felder bearbeiten',
'LBL_SMA_EDIT_LAYOUT'=>'Layout bearbeiten',
'LBL_SMA_EDIT_LABELS' =>'Bezeichnungen bearbeiten',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vorschau',
'LBL_MB_RESTORE'=>'Stellen Sie wieder her',
'LBL_MB_DELETE'=>'Löschen',
'LBL_MB_COMPARE'=>'Vergleichen',
'LBL_MB_WELCOME'=> '<h2>Verlauf</h2><br> Der Verlauf erlaubt es Ihnen, ältere eingespielte Versionen der Dateien zu sehen an denen Sie gerade arbeiten. Sie können vergleichen und ältere Versionen wiederherstellen. Wenn Sie eine Datei wiederherstellen, wird dies Ihre aktuelle Datei. Sie müssen sie installieren, bevor sie für alle anderen sichtbar ist.<br>Was möchten Sie heute machen?<br><b>Bitte wählen Sie aus den Optionen unten.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Auswahlmenü erstellen',
'LBL_ED_WELCOME'=>'<h2>Auswahlmenü Editor</h2><br><b>Sie können entweder ein existierendes Auswahlmenü bearbeiten oder ein neues erstellen.',
'LBL_DROPDOWN_NAME' => 'Auswahlmenü Name:',
'LBL_DROPDOWN_LANGUAGE' => 'Auswahlmenü Sprache:',
'LBL_TABGROUP_LANGUAGE' => 'Sprache:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Benutzerdefinierte Feld Editor</h2><br><b>Sie können entweder ein bestehendes Feld anzeigen und anpassen, ein neues Feld erstellen oder den Cache der eigenen Felder löschen.</b>',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Benutzerdefinierte Felder anzeigen',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Benutzerdefinierte Felder erstellen',
'LBL_EC_CLEAR_CACHE'=>'Cache leeren',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Verlauf</h2><br><b>Bitte wählen Sie die Datei, welche Sie anzeigen möchten.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Wert anzeigen',
'LBL_DD_DATABASEVALUE'=>'Datenbankwert',
'LBL_DD_ALL'=>'Alle',

//BUTTONS
'LBL_BTN_SAVE'=>'Speichern',
'LBL_BTN_CANCEL'=>'Abbrechen',
'LBL_BTN_SAVEPUBLISH'=>'Speichern & Einspielen',
'LBL_BTN_HISTORY'=>'Verlauf',
'LBL_BTN_NEXT'=>'Weiter',
'LBL_BTN_BACK'=>'Zurück',
'LBL_BTN_ADDCOLS'=>'Spalten hinzufügen',
'LBL_BTN_ADDROWS'=>'Zeilen hinzufügen',
'LBL_BTN_UNDO'=>'Rückgängig',
'LBL_BTN_REDO'=>'Wiederholen',
'LBL_BTN_ADDCUSTOMFIELD'=>'Benutzerdefiniertes Feld hinzufügen',
'LBL_BTN_TABINDEX'=>'Reihenfolge der Reiter bearbeiten',

//TABS
'LBL_TAB_SUBTABS'=>'Sub-Reiter',
'LBL_MODULES'=>'Module',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Verwaltung',
'LBL_CONFIGURE_GROUP_TABS' => 'Modulmenüfilter konfigurieren',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Die Filter unten werden in derWeitere" Liste im Modulmenü angezeigt. Ändern Sie diese über die Drag-and-Drop Funktion. Leere Filter werden nicht im Menü angezeigt."',
'LBL_RENAME_TAB_WELCOME'=>'Auf eine Reiterbeschreibung in der Tabelle klicken, um den Reiter umzubenennen.',
'LBL_DELETE_MODULE'=>'Modul entfernen<br />aus Filter"',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Auswählen, um denAndere" Reiter in der Navigationsleiste anzuzeigen. Standardmäßig werden in diesem Reiter (Tab) alle Module angezeigt die sonst nirgends zugeordnet sind."',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Wählen Sie eine verfügbare Sprache, bearbeiten Sie die Anzeigenamen für die Gruppe und klicken Sie auf Speichern & Einspielen, um die Anzeigenamen in der gewählten Sprache anzuwenden.',
'LBL_ADD_GROUP'=>'Filter hinzufügen',
'LBL_NEW_GROUP'=>'Neue Gruppe',
'LBL_RENAME_TABS'=>'Module umbenennen',
'LBL_DISPLAY_OTHER_TAB' => 'ReiterAndere" anzeigen',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standard',
'LBL_ADDITIONAL'=>'Zusätzlich',
'LBL_AVAILABLE'=>'Verfügbar',
'LBL_LISTVIEW_DESCRIPTION'=>'Unten werden drei Spalten angezeigt. Die Standardspalte enthält die Felder, die in der Listenansicht standardmäßig angezeigt werden, die zusätzliche Spalte enthält Felder, die der Benutzer wählen kann, um eine eigene Ansicht zu erstellen und die verfügbaren Spalten sind derzeit nicht benutzte Spalten für den Administrator, um entweder Spalten zum Standard oder den zusätzlichen Spalten hinzuzufügen, damit sie von Benutzern verwendet werden kann.',
'LBL_LISTVIEW_EDIT'=>'Listenansicht Editor',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Fehler: Feld bereits vorhanden',
'ERROR_INVALID_KEY_VALUE'=> "Fehler: Ungültiger Schlüsselwert: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'SuiteCRM Portal',
'LBL_SMP_WELCOME'=>'Wählen Sie aus der unteren Liste ein Modul, das Sie bearbeiten wollen',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Portal synchronisieren',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Es gibt unten zwei Spalten: Standard zeigt die Felder die standardmäßig angezeigt werden und Verfügbar zeigt weitere verfügbare Felder die derzeit nicht angezeigt werden. Sie können die Felder mit der Maus zwischen den Spalten hin- und herbewegen. So können Sie auch die Reihenfolge ändern.',
'LBL_SP_STYLESHEET'=>'Stylesheet hochladen',
'LBL_SP_UPLOADSTYLE'=>'Klicken Sie auf die Durchsuchen Schaltfläche und wählen Sie ein Stylesheet von Ihrem Computer zum Upload.<br> Wenn Sie das nächste Mal mit dem Portal synchronisieren, wird das Stylesheet übertragen.',
'LBL_SP_UPLOADED'=> 'Hochgeladen',
'ERROR_SP_UPLOADED'=>'Bitte stellen Sie sicher, dass Sie ein css Stylesheet hochladen.',
'LBL_SP_PREVIEW'=>'Hier ist ein Entwurf, wie Ihr Stylesheet aussehen wird',

	'LBL_SAVE' => 'Speichern' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Rückgängig' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Wiederholen' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Feld hinzufügen' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximieren' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimieren' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Veröffentlichen' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Zeilen hinzufügen' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Feld hinzufügen' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Bearbeiten' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Zu bearbeitende Sprache auswählen.',
'LBL_SINGULAR' => 'Bezeichnung Einzahl',
'LBL_PLURAL' => 'Bezeichnung Mehrzahl',
'LBL_RENAME_MOD_SAVE_HELP' => 'Klicken Sie auf <b>Speichern,</b> um die Änderungen zu speichern.'

);
?>