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
'LBL_EDIT_LAYOUT'=>'Elrendezés szerkesztése',
'LBL_EDIT_ROWS'=>'Sorok szerkesztése',
'LBL_EDIT_COLUMNS'=>'Oszlopok szerkesztése',
'LBL_EDIT_LABELS'=>'Címkék szerkesztése',
'LBL_EDIT_FIELDS'=>'Egyéni mezők szerkesztése',
'LBL_ADD_FIELDS'=>'Egyéni mezők hozzáadása',
'LBL_DISPLAY_HTML'=>'HTML-kód megjelenítése',
'LBL_SELECT_FILE'=> 'Válasszon fájlt',
'LBL_SAVE_LAYOUT'=> 'Elrendezés mentése',
'LBL_SELECT_A_SUBPANEL' => 'Válasszon ki egy alpanelt',
'LBL_SELECT_SUBPANEL' => 'Válasszon alpanelt',
'LBL_MODULE_TITLE' => 'Stúdió',
'LBL_TOOLBOX' => 'Eszköztár',
'LBL_STAGING_AREA' => 'Színpad terület (Húzd és ejtsd ide a tételeket)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Nem sikerült menteni',
'LBL_CONFIRM_UNSAVE' => 'Egyes módosítások nem lettek elmentve. Biztos tovább akar menni?',
'LBL_PUBLISHING' => 'Közzététel ...',
'LBL_PUBLISHED' => 'Publikálva',
'LBL_FAILED_PUBLISHED' => 'Nem sikerült a közzététel',
'LBL_DROP_HERE' => '[Húzza ide]',

//CUSTOM FIELDS
'LBL_NAME'=>'Név',
'LBL_LABEL'=>'Címke',
'LBL_MASS_UPDATE'=>'Összes frissítése',
'LBL_AUDITED'=>'Ellenőrzés',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Alapértelmezett érték',
'LBL_REQUIRED'=>'Szükséges',
'LBL_DATA_TYPE'=>'Típus',


'LBL_HISTORY'=>'Előzmény',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'Üdvözöljük a Stúdióban! Mit szeretne ma csinálni? Kérjük, válasszon az alábbi lehetőségek közül.',
'LBL_SW_EDIT_MODULE'=>'Modul szerkesztése',
'LBL_SW_EDIT_DROPDOWNS'=>'Legördülő lista szerkesztése',
'LBL_SW_EDIT_TABS'=>'Fülek konfigurálása',
'LBL_SW_RENAME_TABS'=>'Fülek átnevezése',
'LBL_SW_EDIT_GROUPTABS'=>'Csoport fülek konfigurálása',
'LBL_SW_EDIT_PORTAL'=>'Portál szerkesztése',
'LBL_SW_EDIT_WORKFLOW'=>'Munkafolyamat szerkesztése',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Egyéni mezők javítása',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Egyedi mezők migrálása',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'Üdvözöljük a Stúdióban! Kérjük, válasszon az alábbi modulokból.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'Modul szerkesztése. Mit akar csinálni ebben a modulban? Kérjük válassza ki, milyen tevékenységet szeretne végezni.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Egyéni mezők szerkesztése',
'LBL_SMA_EDIT_LAYOUT'=>'Elrendezés szerkesztése',
'LBL_SMA_EDIT_LABELS' =>'Címkék szerkesztése',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Előnézet',
'LBL_MB_RESTORE'=>'Visszaállítás',
'LBL_MB_DELETE'=>'Törlés',
'LBL_MB_COMPARE'=>'Összehasonlítás',
'LBL_MB_WELCOME'=> 'Előzmények. Az Előzmények opció lehetővé teszi, hogy visszanézze a korábban létrehozott fájlokat. Szükség esetén összehasonlíthatja és vissza is állíthatja a korábbi verzióra. Visszaállítás esetén a program visszatér ahhoz a fájlhoz, amellyel épp dolgozik. Kérem, válasszon az alábbi lehetőségek közül.',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Hozzon létre egy legördülő értéklistát',
'LBL_ED_WELCOME'=>'Szerkeszthet egy már meglévő legördülő listát vagy létre is hozhat egy újat.',
'LBL_DROPDOWN_NAME' => 'Legördülő neve:',
'LBL_DROPDOWN_LANGUAGE' => 'Legördülő nyelve:',
'LBL_TABGROUP_LANGUAGE' => 'Nyelv:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'Egyéni mezőszerkesztő <br>Szerkeszthet egy már meglévő egyedi mezőt, létrehozhat egy újat vagy törölheti is az ideiglenes tárhelyből.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Egyedi mezők megjenítése',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Egyéni mező létrehozása',
'LBL_EC_CLEAR_CACHE'=>'A gyorsítótár törlése',

//SELECT MODULE
'LBL_SM_WELCOME'=> 'Előzmény<br>Kérem, jelölje ki azt a fájlt amit meg szeretne tekinteni!',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Érték megjelnítése',
'LBL_DD_DATABASEVALUE'=>'Adatbázis érték',
'LBL_DD_ALL'=>'Minden',

//BUTTONS
'LBL_BTN_SAVE'=>'Mentés',
'LBL_BTN_CANCEL'=>'Mégsem',
'LBL_BTN_SAVEPUBLISH'=>'Mentés és telepítés',
'LBL_BTN_HISTORY'=>'Előzmények',
'LBL_BTN_NEXT'=>'Következő>',
'LBL_BTN_BACK'=>'<Vissza',
'LBL_BTN_ADDCOLS'=>'Oszlopok hozzáadása',
'LBL_BTN_ADDROWS'=>'Sorok hozzáadása',
'LBL_BTN_UNDO'=>'Visszavon',
'LBL_BTN_REDO'=>'Újra',
'LBL_BTN_ADDCUSTOMFIELD'=>'Egyéni mező hozzáadása',
'LBL_BTN_TABINDEX'=>'Fülek sorrendszerkesztője',

//TABS
'LBL_TAB_SUBTABS'=>'Alfülek',
'LBL_MODULES'=>'Modulok',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Adminisztráció',
'LBL_CONFIGURE_GROUP_TABS' => 'Csoportos modulok konfigurálása',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Azon felhasználók számára lesz látható a csoportos nézet a navigációs sávban, akik a Csoportos Modulok nézetet választják ki. A Fogd és Vidd modulok segítségével lehet konfigurálni, mely modulok mely csoportokban jelennek meg. Megjegyzés: Az üres csoportok nem jelennek meg a navigációs sávban.',
'LBL_RENAME_TAB_WELCOME'=>'Kattintson a táblában bármelyik Képernyő fülre a fül átnevezéséhez.',
'LBL_DELETE_MODULE'=>'Vegye ki a modult a csoportból',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Válassza ki az "Egyéb" fület a navigációs sávban. Alapértelmezetten az "Egyéb" fül megjeleníti a nem csak az aktuális csoportokba tartozó elemeket.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Válasszon egy elérhető nyelvet, módosítsa a Csoportok címkét és kattintson a Mentés és Rendezés gombra.',
'LBL_ADD_GROUP'=>'Csoport hozzáadása',
'LBL_NEW_GROUP'=>'Új csoport',
'LBL_RENAME_TABS'=>'Fülek átnevezése',
'LBL_DISPLAY_OTHER_TAB' => '"Egyéb" fül megjelenítése',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Alapértelmezett',
'LBL_ADDITIONAL'=>'További',
'LBL_AVAILABLE'=>'Elérhető',
'LBL_LISTVIEW_DESCRIPTION'=>'3 oszlop látható. Az oszlop azt a mezőt tartalmazza, mely alapértelmezetten megjelenik a lista nézetben, a több oszlop az egyedi nézet létrehozását mutatja, rendszergazdai jogosultsággal olyan oszlopok is elérhetők, melyek jelenleg nem használhatók.',
'LBL_LISTVIEW_EDIT'=>'Listanézet szerkesztő',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Hiba: Mező már létezik',
'ERROR_INVALID_KEY_VALUE'=> "Hiba: Érvénytelen kulcs érték: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'SuiteCRM Portal',
'LBL_SMP_WELCOME'=>'Kérjük, válasszon egy modult, amit szeretne szerkeszteni az alábbi listából',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Portál szinkronizálás',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Az alábbi két oszlop látható: Azok a mezők, amelyek meg fognak jelenni és azok, amelyek nem. Csak húzza át a mezőket a két oszlop között. Az elemeket rendezheti is az oszlopban.',
'LBL_SP_STYLESHEET'=>'Stíluslap feltöltése',
'LBL_SP_UPLOADSTYLE'=>'Kattintson a Tallóz gombra és válassza ki a feltölteni kívánt stíluslapot. <br>Ezt követően a rendszer már az új stíluslappal fog megjelenni.',
'LBL_SP_UPLOADED'=> 'Feltöltve',
'ERROR_SP_UPLOADED'=>'Kérjük, ellenőrizze, helyes stíluslapot töltött-e fel.',
'LBL_SP_PREVIEW'=>'Ez egy előnézet, ahogy a stíluslap ki fog nézni',

	'LBL_SAVE' => 'Mentés' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Visszavon' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Újra' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Törlés' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Mező hozzáadása' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'publikál' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Sorok hozzáadása' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Mező hozzáadása' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Módosítás' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
'LBL_SINGULAR' => 'Singular Label',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
?>