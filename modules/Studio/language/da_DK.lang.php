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
'LBL_EDIT_LAYOUT'=>'Rediger layout',
'LBL_EDIT_ROWS'=>'Rediger rækker',
'LBL_EDIT_COLUMNS'=>'Rediger kolonner',
'LBL_EDIT_LABELS'=>'Rediger etiketter',
'LBL_EDIT_FIELDS'=>'Rediger brugerdefinerede felter',
'LBL_ADD_FIELDS'=>'Tilføj brugerdefinerede felter',
'LBL_DISPLAY_HTML'=>'Vis HTML-kode',
'LBL_SELECT_FILE'=> 'Vælg fil',
'LBL_SAVE_LAYOUT'=> 'Gem layout',
'LBL_SELECT_A_SUBPANEL' => 'Vælg et underpanel',
'LBL_SELECT_SUBPANEL' => 'Vælg underpanel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Værktøjskasse',
'LBL_STAGING_AREA' => 'Mellemstation "træk og slip poster her"',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Det lykkedes ikke at gemme',
'LBL_CONFIRM_UNSAVE' => 'Eventuelle ændringer gemmes ikke. Er du sikker på, at du vil fortsætte?',
'LBL_PUBLISHING' => 'Udgiver ...',
'LBL_PUBLISHED' => 'Udgivet',
'LBL_FAILED_PUBLISHED' => 'Det lykkedes ikke at udgive',
'LBL_DROP_HERE' => '[Slip her]',

//CUSTOM FIELDS
'LBL_NAME'=>'Navn',
'LBL_LABEL'=>'Etiket',
'LBL_MASS_UPDATE'=>'Masseopdatering',
'LBL_AUDITED'=>'Revision',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Standardværdi',
'LBL_REQUIRED'=>'Obligatorisk',
'LBL_DATA_TYPE'=>'Type',


'LBL_HISTORY'=>'Historik',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Velkommen til Studio!</h2><br> Hvad vil du gøre i dag?<br><b> Vælg blandt indstillingerne nedenfor.</b>',
'LBL_SW_EDIT_MODULE'=>'Rediger et modul',
'LBL_SW_EDIT_DROPDOWNS'=>'Rediger rullelister',
'LBL_SW_EDIT_TABS'=>'Konfigurer faner',
'LBL_SW_RENAME_TABS'=>'Omdøb faner',
'LBL_SW_EDIT_GROUPTABS'=>'Konfigurer gruppefaner',
'LBL_SW_EDIT_PORTAL'=>'Rediger portal',
'LBL_SW_EDIT_WORKFLOW'=>'Rediger arbejdsgang',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparer brugerdefinerede felter',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Overflyt brugerdefinerede felter',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Velkommen til Studio!</h2><br><b>Vælg et modul nedenfor.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Rediger et modul</h2>Hvad vil du gøre med dette modul?<br><b>Vælg, hvilken handling du vil udføre.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Rediger brugerdefinerede felter',
'LBL_SMA_EDIT_LAYOUT'=>'Rediger layout',
'LBL_SMA_EDIT_LABELS' =>'Rediger etiketter',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Eksempel',
'LBL_MB_RESTORE'=>'Gendan',
'LBL_MB_DELETE'=>'Slet',
'LBL_MB_COMPARE'=>'Sammenlign',
'LBL_MB_WELCOME'=> '<h2>Historik</h2><br> I Historik har du mulighed for at se tidligere installerede udgaver af den fil, du i øjeblikket arbejder på. Du kan sammenligne og gendanne tidligere versioner. Hvis du gendanner en fil, bliver den din arbejdsfil. Du skal installere den, før den er synlig for alle andre.<br> Hvad vil du gøre i dag?<br><b> Vælg blandt nedenstående indstillinger.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Opret en rulleliste',
'LBL_ED_WELCOME'=>'<h2>Rullelisteeditor</h2><br><b>Du kan enten redigere en eksisterende rulleliste eller oprette en ny rulleliste.',
'LBL_DROPDOWN_NAME' => 'Rullelistenavn:',
'LBL_DROPDOWN_LANGUAGE' => 'Rullelistesprog:',
'LBL_TABGROUP_LANGUAGE' => 'Fanegruppesprog:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Brugerdefineret felt-editor</h2><br><b>Du kan enten se og redigere et eksisterende brugerdefineret felt, oprette et ny brugerdefineret felt eller rydde cachen med brugerdefinerede felter.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Vis brugerdefinerede felter',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Opret brugerdefineret felt',
'LBL_EC_CLEAR_CACHE'=>'Ryd cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historik</h2><br><b>Vælg den fil, du vil se.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Vis værdi',
'LBL_DD_DATABASEVALUE'=>'Databaseværdi',
'LBL_DD_ALL'=>'Alle',

//BUTTONS
'LBL_BTN_SAVE'=>'Gem',
'LBL_BTN_CANCEL'=>'Afbryd',
'LBL_BTN_SAVEPUBLISH'=>'Gem og installer',
'LBL_BTN_HISTORY'=>'Historik',
'LBL_BTN_NEXT'=>'Næste',
'LBL_BTN_BACK'=>'Tilbage',
'LBL_BTN_ADDCOLS'=>'Tilføj kolonner',
'LBL_BTN_ADDROWS'=>'Tilføj rækker',
'LBL_BTN_UNDO'=>'Fortryd',
'LBL_BTN_REDO'=>'Annuller fortryd',
'LBL_BTN_ADDCUSTOMFIELD'=>'Tilføj brugerdefineret felt',
'LBL_BTN_TABINDEX'=>'Rediger fanerækkefølge',

//TABS
'LBL_TAB_SUBTABS'=>'Underfaner',
'LBL_MODULES'=>'Moduler',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administration',
'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurer fanegrupper',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Fanerne og de grupperede faner nedenfor vises for de brugere, der vælger at få vist grupperede moduler på navigationslinjen. Træk og slip moduler til og fra fanefelterne for at konfigurere, hvilke underfaner der skal vises under hvilke faner. Tomme fanegrupper vises ikke på navigationslinjen.',
'LBL_RENAME_TAB_WELCOME'=>'Klik på en fanes Vis værdi i tabellen nedenfor for at omdøbe fanen.',
'LBL_DELETE_MODULE'=>'Fjern modul<br />fra gruppe',
'LBL_DISPLAY_OTHER_TAB_HELP' => '"Markér dette felt for at få vist fanen ""Andet"" på navigationslinjen. Som standard viser fanen ""Andet"" alle de moduler, der ikke allerede er medtaget i andre grupper."',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Hvis du vil angive fanegruppeetiketterne på andre tilgængelige sprog, skal du vælge et sprog, redigere etiketterne og klikke på Gem og installer for at foretage ændringerne på det pågældende sprog.',
'LBL_ADD_GROUP'=>'Tilføj gruppe',
'LBL_NEW_GROUP'=>'Ny gruppe',
'LBL_RENAME_TABS'=>'Omdøb faner',
'LBL_DISPLAY_OTHER_TAB' => 'Vis fanen \'Andet\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standard',
'LBL_ADDITIONAL'=>'Yderligere',
'LBL_AVAILABLE'=>'Tilgængelige',
'LBL_LISTVIEW_DESCRIPTION'=>'Der vises tre kolonner nedenfor. Standardkolonnen indeholder de felter, der vises i en listevisning som standard, den ekstra kolonne indeholder felter, som en bruger kan vælge at bruge til at oprette en brugerdefineret visning, og de tilgængelige kolonner er kolonner, som en administrator kan tilføje til standardkolonnerne eller de ekstra kolonner til brug for brugerne, men som ikke bruges i øjeblikket.',
'LBL_LISTVIEW_EDIT'=>'Listevisningseditor',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Fejl: Feltet findes allerede',
'ERROR_INVALID_KEY_VALUE'=> "Fejl: Ugyldig nøgleværdi: [ ']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'SuiteCRM Portal',
'LBL_SMP_WELCOME'=>' Vælg et modul, du vil redigere, fra nedenstående liste',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Synkronisering af portal',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Der findes to kolonner nedenfor: Standard, som er de felter, der vises, og Tilgængelige, som er de felter, der ikke vises, men som kan blive vist. Du skal blot trække felterne mellem de to kolonner. Du kan også ændre rækkefølgen af posterne i en kolonne ved at trække og slippe dem.',
'LBL_SP_STYLESHEET'=>'Upload et typografiark',
'LBL_SP_UPLOADSTYLE'=>'Klik på knappen Gennemse, og vælg et typografiark, du vil uploade fra computeren.<br> Næste gang du synkroniserer i forhold til portalen, uploader du typografiarket sammen med den.',
'LBL_SP_UPLOADED'=> 'Uploadet',
'ERROR_SP_UPLOADED'=>'Sørg for, at du uploader et css-typografiark.',
'LBL_SP_PREVIEW'=>'Her er et eksempel på, hvordan dit typografiark vil se ud',

	'LBL_SAVE' => 'Gem [Alt+S]' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Fortryd' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Annuller fortryd' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Slet' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Tilføj felt' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'udgivet' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Tilføj rækker' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Tilføj felt' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Rediger' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
'LBL_SINGULAR' => 'Singular Label',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
?>