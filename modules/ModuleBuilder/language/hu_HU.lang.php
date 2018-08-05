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
    'LBL_HIDEOPTIONS' => 'Beállítások elrejtése' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Törlés' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Miután kiválasztja annak a modulnak a Típusát, melyet létre szeretne hozni, jegyezze meg a mezők típusát is a modulon belül.<br /><br />Minden egyes modul sablon tartalmaz egy mezőbeállítást, mely a modul típusainak cím szerinti leírására vonatkozik.<br /><br />Alap: Az alapvető mezőket tartalmazza, úgy mint Név, Hozzárendel, Csoport, Dátum létrehozás, Leírás.<br /><br />Cég: A vállalat specifikus mezőket tartalmazza, úgy mint Cégnév, Iparág és Számlázási Cím.  Használja ezt a sablont ha a Kliensek modul mintáját szeretné alkalmazni.<br /><br />Személy: Egyed mezők, úgy mint Megszólítás, Cím, Név, Lakcím és Telefonszám. Használja ezt a sablont ha a Kapcsolatok és Ajánlások modulok mintáját szeretné alkalmazni.<br /><br />Kérdés: Hibák, esetek, úgy mint Szám, Állapot, Prioritás, Leírás.  Használja ezt a sablont ha az Esetek és Hiba Követő modulok mintáját szeretné alkalmazni.',
            'modify' => 'Három oszlop jelenik meg balra. Az "Alapértelmezett" oszlop tartalmazza a lista nézetben alapértelmezés szerint megjelenő mezőket, az "Elérhető" oszlop tartalmazza a felhasználó által egyéni lista nézeteket előállító választható mezőket és a "Rejtett" oszlop tartalmazza az adminisztrátor számára elérhető mezőket, melyek akár hozzáadhatók a felhasználók számára elérhető, jelenleg megjelenített Alapértelmezett, vagy Elérhető oszlopokhoz.',
            'name' => 'A csomag Neve meg fog jelenni a Module Loaderben, miután a csomag feltöltődött a telepítéshez a Studioban.',
            'author' => 'A Szerző a neve annak a személynek, aki létrehozta a csomagot. A Szerző lehet magán személy, vagy cég. A Szerző megjelenik a Modul Betöltőben, miután a csomag feltöltődött a telepítéshez a Studioban.',
            'description' => 'A csomag Leírása meg fog jelenni a Modul Betöltőben, miután a csomag feltöltődött a telepítéshez a Studioban.',
            'publishbtn' => 'Kattintson a Publikál gombra az összes megadott adat mentéséhez és egy ZIP fájl létrehozásához, mely a csomagnak egy telepíthető verziója lesz.',
            'deploybtn' => 'Kattintson a Telepít gombra az összes adat mentéséhez és a csomag telepítéséhez, magába foglalva az összes modult az aktuális példányban.',
            'duplicatebtn' => 'Kattintson a Duplikál gombra a csomag tartalmának másolásához, melynek segítségével létrehoz és megjelenít egy új csomagot. <br /><br />Az új csomaghoz automatikusan legenerálódik egy új név hozzáfűzve egy számot a csomag nevének végéhez, létrehozva ezzel az új csomagot. Szükség esetén átnevezheti a nevet.',
            'exportbtn' => 'Kattintson az Exportálás gombra a ZIP fájl létrehozásához.<br /><br />Ez a generált fájl a csomagnak nem a telepíthető verziója.<br /><br />Használja a Modult Betöltő-t a ZIP fájl importálásához, beleértve a testre szabhatóságot.',
            'deletebtn' => 'Kattintson a Törlés gombra ennek a csomagnak és az összes hozzá tartozó fájl törléséhez.',
            'savebtn' => 'A Mentés gombra kattintással elmenti a változtatásokat és aktívvá teszi őket.',
            'existing_module' => 'Kattintson a Modul ikonra a tulajdonságok szerkesztéséhez, valamint a mezők, kapcsolatok és felületek testre szabásához.',
            'new_module' => 'Kattintson az Új Modul-ra egy új modul létrehozásához ehhez a csomaghoz.',
            'key' => 'Ezt az 5 betűből álló alfanumerikus Kulcsot használja előtagként az összes könyvtár, osztálynév és adatbázis tábla az aktuális csomag összes moduljához.',
            'readme' => 'Kattintson az "Olvass el" fájlra a csomag részletesebb leírásához.<br /><br />Az "Olvass el" fájl a telepítés után lesz elérhető.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Az Importable jelölőnégyzet bejelölése lehetővé teszi az importálást erre a modulra.<br />A link az Import Wizzardhoz meg fog jelenni a Shortcut panelen. Az Import Wizzard megkönnyíti az adatok importálását külső forrásból az egyéni modulba.',
            'team_security' => 'A Team Security jelölőnégyzet bejelölése lehetővé teszi a csapat biztonságot erre a modulra.',
            'reportable' => 'Ennek a négyzetnek a bejelölése lehetővé teszi a jelentések futtatását.',
            'assignable' => 'Ennek a négyzetnek a bejelölése lehetővé tesz ebben a modulban, hogy egy eredményt hozzárendeljenek egy kiválasztott felhasználóhoz.',
            'has_tab' => 'A Navigation Tab bejelölése lehetőséget ad a navigációs lap eléréséhez.',
            'acl' => 'Ennek a négyzetnek a bejelölése lehetővé teszi a Hozzáférés Vezérlő-t ebben a modulan, beleértve a Mező Szintű Biztonságot.',
            'studio' => 'Ennek a négyzetnek a bejelölése lehetővé teszi az adminisztrátoroknak a testreszabást ezen a modulon belül a Studio keretein belül.',
            'audit' => 'Ennek a négyzetnek a bejelölése lehetővé teszi e modul könyvvizsgálatát. Bizonyos mezőkben a változtatások rögzítésre kerülnek, hogy az adminisztrátorok megtekinthetik a változások történetét.',
            'viewfieldsbtn' => 'Kattintson a Views Fields-re a modullal kapcsolatos mezők megtekintéséhez és az egyéni mezők létrehozásához és szerkesztéséhez.',
            'viewrelsbtn' => 'Kattintson a View Relationships-re a modulra vonatkozó kapcsolatok megtekintéséhez és új kapcsolatok kialakításához.',
            'viewlayoutsbtn' => 'Kattintson a View Layouts-ra a mondulra vonatkozó elrendezés megtekintéséhez és a mező elrendezésének testreszabásához.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Ez a Címke, ami meg fog jelenni a navigációs lapon.',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => 'Az Alap sablon típus alap mezőket szolgáltat, mint a Név, Hozzárendelt, Csoport, Dátum létrehozás és a mező Leírása.',
            'type_company' => 'A Cég sablon típus szervezet specifikus mezőket szolgáltat, mint a Cég Név, Gyár és Számlázási Cím.<br />Használja ezt a sablont az alap Kliens modulhoz hasonló modulok létrehozásához.',
            'type_issue' => 'A Kérdés sablon típus ügy- és hiba specifikus mezőket szolgáltat, mint a Szám, Állapot, Kiemet, Leírás.<br />Használja ezt a sablont az alap Esetek és Hiba Követő modulokhoz hasonló modulok létrehozásához.',
            'type_person' => 'A Személy sablon típus egyén-specifikus mezőket szolgáltat, mint a Köszöntés, Titulus, Név, Cím, Telefon szám.<br />Használja ezt a sablont az alap Kapcsolatok és Ajánlások modulokhoz hasonló modulok létrehozásához.',
            'type_sale' => 'Az Eladás sablon típus lehetőség specifikus mezőket szolgáltat, mint az Ajánlás Forrása, Szint, Összeg és Valószínűség.<br />Használja ezt a sablont az alap Lehetőségek modulokhoz hasonló modulok létrehozásához.',
            'type_file' => 'A Fájl sablon típus Dokumentum specifikus mezőket szolgáltat, mint Fájl Név, Dokumentum típus, Közzététel Dátuma.<br />Használja ez a sablont az alap Dokumentumok modulokhoz hasonló mondulok létrehozásához.',

        ),
        'dropdowns' => array(
            'default' => 'Két oszlop jelenik meg balra. A jobb oldali oszlop az Aktuális Elrendezés vagy Elrendezési Előnézet, ahol megváltoztathatja a modul elrendezését. A bal oldali oszlop az Eszköztár, az elrendezés szerkesztéséhez tartalmaz hasznos elemeket és eszközöket.<br /><br />Ha az elrendezés terület Jelenlegi Elrendezés elnevezésű, akkor Ön a modul által jelenleg használt elrendezés egy példányán dolgozik. Ha Elrendezés Előnézet a neve, akkor egy előzőleg a Mentés gombra kattintással készített másolaton dolgozik, amit lehet, hogy már megváltoztattak, a modul felhasználója által nézett példányhoz képest.',
            'editdropdown' => 'A legördülő menű listákat lehet használni alap vagy egyéni legördülő mezőkre bármelyik modulban.<br />Adjon meg Nevet a legördülő listához.<br />Ha nyelvi csomagok vannak telepítve az alkalmazásban, kiválaszthatja a Nyelv gombot a lista elemeinek használatához.<br />Az Elemek Neve mezőben, adjon meg egy nevet a lehetőségre a legördülő listában. Ez a név nem fog megjelenni a felhasználók számára látható legördülő listában.<br />A Kijelző Címke mezőben adjon meg egy nevet, ami látható lesz a felhasználók számára.<br />Miután megadta az Elemek Nevet, és a Kijelző Címkét, kattintson a Hozzáadás gombra a legördülő listához adáshoz.<br />A lista elemeinek átrendezéséhez fogd és vidd technikával tegye a kívánt helyre.<br />Egy tétel kijelző címkéjének szerkesztéséhez kattintson a Szerkeszt gombra és adjon meg egy új címkét. Egy tétel törléséhez a legördülő menűből kattintson a Törlés gombra.<br />A kijelző címkében történt változtatás visszavonásához kattintson a Visszavonás gombra. A visszavont változtatás újra végrehajtásához kattintson az Újra végrehajt gombra.<br />Kattintosn a Mentés gombra a legördülő lista mentéséhez.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Kattintson az Előzmények Megtekintése gombra az Előzményekből előzőleg mentett elrendezések megtekintéséhez és helyreállításához.',
            'historyDefault' => 'Kattintson az Alapértelmezett Visszaállítása gombra az eredeti elrendezés nézet visszaállításhoz.',
            'Hidden' => 'A Rejtett mezők azok, amik nem elérhetők a felhasználók számára a lista nézetben.',
            'Default' => 'Az Alapértelmezett mezők azok számára jelennek meg, akik nem hoztak létre egyéni lista nézet beállítást.',

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
            'defaultdetailview' => 'Az elrendezési felület tartalmazza a mezőt, amit jelenleg megjelenített a Részletes Nézetben.<br />Az Eszköztár tartalmazza a Kukát, valamint a mezők és az elrendezés elemeit amiket hozzá lehet adni az elrendezéshez.<br />Módosíthatja a elrendezést a "fogd és vidd" technikával az Eszköztár és az Elrendezés között, valamint magában az elrendezésben.<br />Eltávolíthat egy mezőt az elrendezésből a mező Kukába húzásával.<br />Függő mezőt jelez, amely látható, vagy láthatatlan a képlet értéke alapján.<br />Számított mezőt jelent, melynek az értéke automatikusan meghatározódik a képlet alapján.'
        ,
            'defaultquickcreate' => 'Az Elrendezés felület tartalmazza a mezőket, amit jelenleg megjelenített a Gyors Létrehozásban.<br />A Gyors Létrehozás forma megjelenik az alpanelen, amikor a Létrehoz gombra kattint.<br />Az Eszköztár tartalmazza a Kukát, valamint a mezők és az elrendezés elemeit amiket hozzá lehet adni az elrendezéshez.<br />Módosíthatja a elrendezést a "fogd és vidd" technikával az Eszköztár és az Elrendezés között, valamint magában az elrendezésben.'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Erre a gombra kattintva elmenti az elrendezést, hogy megőrizze a változtatásait. Mikor visszatér ehheze a modulhoz, erről a változtatott nézetről fog indulni. Ugyanakkor az Ön elrendezése nem lesz látható a modul használói számára addig, míg nem kattint a Mentés és Publikálás gombra.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Kattintson erre a gombra az elrendezés telepítéséhez. Ez azt jelenti, hogy ez az elrendezés azonnal láthatóvá válik a modul használói számára.',
            'toolbox' => 'Az eszköztár számos hasznos funkciót tartalmaz az elrendezés szerkesztéséhez, beleértve a lomtár területet, egy sor további kiegészítő elemet, és a rendelkezésre álló mezőket. Ezek közül bármi bemozgatható a felületbe.',
            'panels' => 'Ez a terület megmutatja a modul felhasználóinak, hogyan fog kinézni az elrendezés, amikor telepítődik. Át tud helyezni a "fogd és vidd" technikával elemeket, mint pl. mezők, sorok és panelek; kitörölni elemeket a "fogd és vidd" technikával az eszköztár kukájába, vagy hozzáadni új elemeket az eszköztárból az elrendezés kívánt helyére.',
            'delete' => 'A "fogd és vidd" technikával kitörölhet bármilyen elemet az elrendezésből.',
            'property' => 'Szerkesztheti az ezen a területen megjelent Címkét.<br />Tabulátor Sorrend ellenőrzi, hogy milyen sorrendben vált a tabulátor gomb a mezők között.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'A modulban elérhető Mezők itt vannak felsorolva Mező Név alatt.<br />A mező tulajdonságainak beállításához kattintson a Mező Nevére.<br />Egy új mező létrehozásához kattintson a Mező Hozzáadására. A címke mellet az új mező egyéb tulajdonságai létrehozás után szerkeszthető a Mező Névre kattintva. <br />Miután a modul lelepítve lett, a Modul Bilderben létrehozott új mezőket alap mezőknek tekinti a telepített modulban a Studioban.',
            'addField' => 'Válasszon egy Adattípust az új mezőhöz. Ennek segítségével lehet beállítani, hogy milyen típusú karaktereket engedélyezzünk a mező kitöltésekor. Például numerikus típus esetén csak számokat engedélyez.<br /><br />Adjon meg egy nevet a mezőhöz. A név csak alfanumerikus karaktereket és alulvonást tartalmazhat, szóközöket nem.<br /><br />A Megjelenítő címke a mezőknél jelenik meg a modul felületében. Rendszer címke a mezőre hivatkozik a kódban.<br /><br />Az adattípus kiválasztásától függően a mezők néhány vagy akár az összes tulajdonságát beállíthatjuk: <br /><br />A Segítség Szöveg addig jelenik meg, amíg a felhasználó el nem kezdi gépelni a kívánt szöveget.<br /><br />A Megjegyzés Szöveg - mely csak a Studio és/vagy a Modul Építőben látható - részletes leírásként használható az adminisztrátorok számára.<br /><br />Az Alapértelmezett Érték a mezőben fog megjelenni. A felhasználók megadhatnak egy új értéket a mezőben, de használhatják az alapértelmezettet is.<br /><br />Válassza ki a Tömeges Frissítés jelölőnégyzetet, amennyiben egyszerre nagyobb mennyiségű adat frissítését szeretné végrehajtani a mezőben. <br /><br />A Maximális Méret érték határozza meg, mekkora legyen az aktuális mezőben a maximálisan begépelhető karakterek száma.<br /><br />Válassza ki a Kötelező Mezők jelölőnégyzetet a kötelezően kitöltendő mezőkhöz. Ennek beállításával beállíthatjuk, mely adatokat szeretnénk kötelezően kitölthetővé tenni.<br /><br />Válassza ki a Riportolható jelölőnégyzetet ha szeretné szűrhetővé és megjeleníthetővé tenni a Riportokban lévő adatokat.<br /><br />Válassza ki az Auditálás jelölőnégyzetet ha nyomon szeretné követni a mező változásokat.<br /><br />Válassza ki az Importálható opciót ha szeretné importálhatóvá tenni az összes mezőt az Importálás Varázslóban.<br /><br />Válassza ki a Duplikált Mezők Egyesítése opciót a többszörös mezőnevek összeolvasztásához és a Duplikált Mezők Keresése tulajdonság engedélyezéséhez.<br /><br />A további tulajdonságok beállíthatóak a főbb adattípusoknál.',
            'editField' => 'E mező tulajdonságai testreszabhatók.<br />Kattintson a Klónra egy hasonló tulajdonságú új mező létrehozásához.',
            'mbeditField' => 'Egy sablon mező Kijelző Címkéje testreszabható. A mező többi tulajdonságai nem testreszabhatók.<br />Kattintson a Klónra egy hasonló tulajdonságú új mező létrehozásához.<br />A sablon mező eltávolításához, hogy ne jelenjen meg a modulban, tábolítsa el a mezőt a megfelelő Megjelenítésből.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Kattintson az Exportra egy egyéni beállításokat tartalmazó zip fájl létrehozásához, amiket exportálni akar.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'A csomag Leírása meg fog jelenni a Modul Betöltőben, miután a csomag feltöltődött a telepítéshez a Studioban.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Üdvözöljük a Fejlesztői Eszközök Területén. Használja az eszközöket ezen a területen alap-, és egyedi modulok, valamint mezők létrehozására, kezelésére.',
            'studioBtn' => 'Használja a Studiót, hogy testre szabja a telepített modulokat a mező elrendezéseinek megváltoztatásával, kiválasztva, hogy mely mezők érhetőek el hozhatóak létre egyéni adatmezők.',
            'mbBtn' => 'Használja a Module Buildert új modulok létrehozásához',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Használja a Legördülő Szerkesztőt, felveheti és szerkeszheti a teljes legördülőket a legördülő mezőben.',
            'appBtn' => 'Használja az Alkalmazási módot, ahol testre szabhatja a program különböző tulajdonságait, mint pl. hány TPS jelentés jelenjen meg a  honlapon.',
            'backBtn' => 'Térjen vissza az előző lépéshez.',
            'studioHelp' => 'Használja a Studiot, hogy milyen információk jelenjenek meg a moduban.',
            'moduleBtn' => 'Kattintson ennek a modulnak a szerkesztéséhez.',
            'moduleHelp' => 'Válassza ki a modul alkotórészét, amit szerkeszteni akar.',
            'fieldsBtn' => 'Szerkesztheti milyen információkat tárol a modul a Mezők ellenőrzésével kapcsolatban.<br />Szerkeszthet és létrehozhat egyedi mezőket itt.',
            'labelsBtn' => 'Szerkesztheti a Címkéket, amelyek megjelenítik az értékeket ebben a modulban.',
            'relationshipsBtn' => 'Adjon hozzá, vagy tekintsen meg meglévő Kapcsolatokat a modulban.',
            'layoutsBtn' => 'Testreszabhatja a Szerkesztés Elrendezését, a Részleteket, a Listát és a keresési nézetet.',
            'subpanelBtn' => 'Szerkesztése annak, amilyen információ megjelenik a modul alpanelében.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Válassza ki az Elrendezést szerkesztéshez.<br />Az adatokat tartalmazó mezők elrendezésének megváltoztatásához, kattintson a Szerkesztés Nézetre.<br />A Szerkesztés Nézetben bevitt adat mezők elrendezésének megváltoztatásához, kattintoson a Részletek Nézetre.<br />Az alapértelmezett lista oszlopainak megváltoztatásához, kattintson a Lista Nézetre.<br />Az elrendezésben lévő Alap és Részletes keresés megváltoztatásához, kattintson a Keresésre.',
            'subpanelHelp' => 'Válassza ki az Alpanelt szerkesztésre.',
            'newPackage' => 'Kattintosn az Új Csomagra az új csomag létrehozásához.',
            'exportBtn' => 'Kattintson az Export Testreszabásokra, hogy létrehozzon és letöltsön a Studioban speciális modulokra készített testreszabás csomagokat.',
            'mbHelp' => 'Üdvözöljük a Modul Építöben.<br />Használja a Modul Bildert egyedi csomagok létrehozására, melyek standard vagy egyedi tárgyakon alapulnak.<br />A kezdéshez, kattintson az Új Csomagra egy új csomag létrehozásához, vagy jelöljön ki egy csomagot szerkesztésre.<br />A csomag úgy viselkedik, mint az egyéni modulok tárolója, amelyek mind részét képezik egy projektnek. A csomag tartalmazhat egy, vagy több egyéni modult, amik kapcsolatba hozhatók egymással, vagy modulokkal az alkalmazásban.<br />Például: Létre akar hozni egy csomagot, ami egy egyéni modult tartalmaz, ami az alap Kliens modulhoz kapcsolódik. Vagy, létre akar hozni egy csomagot, ami több új modult tartalmaz, amik együtt dolgoznak egy projektként, és amik egymáshoz kapcsolódnak, valamint a modul alkalmazásaihoz.',
            'viewBtnEditView' => 'A modul Szerkesztő Nézet elrendezésének testreszabása.',
            'viewBtnDetailView' => 'A modul Részletes Nézet elrendezés testreszabása.<br />A Részletes Nézet jeleníti meg a felszanáló által bevitt mező adatot.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'A modul Lista Nézet elrendezésének a testreszabása.<br />A Keresési eredmények megjelennek a Lista Nézetben.',
            'searchBtn' => 'A modul Keresés elrendezésének a testreszabása.<br />Határozza meg, milyen mezőket lehet használni az adatok szűrésére, amelyek megjelennek a Lista Nézetben.',
            'viewBtnQuickCreate' => 'A modul Gyors Létrehozás elrendezésének testreszabása.<br />A Gyors Létrehozás forma megjelenik az alpanelen és az email modulban.',
            'addLayoutHelp' => "Biztonsági Csoport egyedi elrendezésének készítéséhez válassza ki a megfelelő csoportot és az elrendezést melyet kiindulásként használ a másoláskor.",

            'searchHelp' => 'Válassza ki a Keresés nézet szerkeztésre.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'A testreszabható Felugró elrendezések itt jelennek meg.',
            'PopupListViewBtn' => 'A Felugró Lista Nézet eredményeket jeleníti meg a a Felugró keresés nézet alapján.',
            'PopupSearchViewBtn' => 'A Felugró Keresés megjeleníti a Felugró listanézet számára.',
            'BasicSearchBtn' => 'Testreszabhatja az Alap Keresési formát, amely megjelenik az Alap Keresési fülön a modul Keresési területben.',
            'AdvancedSearchBtn' => 'Testreszabhatja a Részletes Keresési formát, amely megjelenik a Részletes Keresési fülön a modul Keresési területén.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Az összes Kapcsolat, mely két modul között létezik, itt jelenik meg.<br /><br />A Kapcsolat Név a rendszer által generált név.<br /><br />Az Elsődleges Modul az Ön saját moduljának kapcsolata. Például, a Kliensek modul kapcsolatának összes tulajdonsága lesz az elsődleges modul, mely a Kliensek adatbázis táblájában van letárolva.<br /><br />A Típus a Kapcsolat típusa, mely az Elsődleges modul és a Kapcsolódó Modul között létesít kapcsolatot.<br /><br />Kattintson az oszlop címére a rekordok sorba rendezéséhez. <br /><br />Kattintson egy sorra a kapcsolat táblában, hogy megtekinthesse a hozzá tartozó kapcsolat tulajdonságokat.<br /><br />Kattintson a Kapcsolat hozzáadása gombra egy új kapcsolat létrehozásához.<br /><br />A kapcsolatokat létrehozhat bármely két létrehozott modul között.',
            'relationshipHelp' => 'A Kapcsolatok két modul között (sima és telepített) között hozhatók létre.<br /><br />A Kapcsolatok a modul rekordokban lévő mezőkön és alpaneleken keresztül láthatók.<br /><br />Válassza ki a modulok számára az alábbi kapcsolat Típusokat:<br /><br />Egy-Egy: Mindkét modul rekord tartalmaz kapcsolódó mezőket.<br /><br />Egy-Sok: Az elsődleges Modul rekord tartalmazza az alpanelt, a Kapcsolódó Modul rekord pedig a mezőt.<br /><br />Sok-Sok: Mindkét rekord az alpaneleket jeleníti meg.<br /><br />Válassza ki a Kapcsolódó Modult a kapcsolat létrehozásához.<br /><br />Ha a kapcsolat típus alpaneleket is magába foglal, válassza az alpanel nézetet a megfelelő modulok megjelenítéséhez.<br /><br />Kattintson a Mentés gombra a kapcsolat létrehozásához.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'A globális Legördülő szerkesztése',
            'addDropDownBtn' => 'Új globális Legördülő hozzáadása',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'Segítséget kaphatunk a kapcsolatok hozzáadásához, ha az egeret fölé visszük.',
            'addRelationship' => 'Kapcsolatokat tudunk létrehozni a modul és egy másik egyedi modul között, vagy egy telepített modul között.<br />A kapcsolatok az alpaneleken és kapcsolódó mezőkön keresztül láthatók a modul eredményeiben.<br />Válasszon ki egyet a következő kapcsolatok közül, Típusok:<br />Egy-egy - Mindkét modul eredményei tartalmaznak kapcsolódó mezőket.<br />Egy-Sok - Az Elsődleges Modul eredménye tartalmazza az alpanelt, és a Kapcsolódó Modul eredménye tartalmazza a kapcsolódó mezőt.<br />Sok-Sok - Bindkét modul eredménye megjeleníti az alpaneleket.<br />Válassza a Kapcsolódó Modul a kapcsolatért.<br />Ha a kapcsolat típusa magában foglalja az alpanelt, akkor válassza a megfelelő modul alpanel nézetetét.<br />Kattintson a Mentés gombra a kapcsolat létrehozásához.',
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
            'nopackages' => 'A projekt indulásához kattintson az Új Csomag gombra, egy új csomag létrehozásához ahová elhelyezheti az egyedi moduljait.<br />Minden csomag tartalmazhat egy,  vagy több modult.',
            'somepackages' => 'Egy csomag egy konténerként szerepel az aktuális projekt egy részének összes egyedi moduljának. A csomag, mely egy vagy több egyedi modult is tartalmazhat, kapcsolódhatnak egymáshoz vagy az alkalmazásban egy másik modulhoz.<br /><br />A csomag létrehozása után azonnal létrehozhatja a modulokat vagy visszatérhet a Modul Építőhöz és később is befejezheti a projektet.<br /><br />Miután kész a projekt, elkészítheti a csomagot az alkalmazáson belül az egyedi modulok telepítéséhez.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Használja a Fejlesztő Eszközöket standard és egyedi modulok, valamint mezők létrehozására és kezelésére.<br />A modulok kezeléséhez az alkalmazásban, kattintson a Studiora.<br />Az egyedi modulok létrehozásához, kattintson a Modul Bilderre.',
            'studioWelcome' => 'Az összes jelenleg telepített modul testreszabható a Studioban, beleértve a standard és modul-betöltött tárgyakat.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Itt tudja szerkeszteni a meglévő mezőket. Eltávolíthat bármely meglévő mezőt, vagy hozzáadhat elérhető mezőket a bal panelben.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
            'viewfields' => 'Szükség esetén testre szabhatja a modulokban lévő mezőket.<br /><br />A alap mezőket nem tudja törölni, de eltávolíthatja a megfelelő felületekből a Felületek oldalon belül.<br /><br />Könnyedén hozhat létre új mezőt ugyanazzal a tulajdonsággal a Klónozás gombra kattintva a Tulajdonságok form-on. Adjon meg bármilyen tulajdonságot, majd kattintson a Mentés gombra.<br /><br />Javasolt beállítani az összes alap tulajdonságot a mezőkhöz, mielőtt publikálja és telepíti a csomagot.',
            'viewrelationships' => 'Az aktuális és egy másik modul között Sok-Sok kapcsolatot hozhat létre a csomagon belül.<br /><br />Az Egy-Sok, Egy-Egy kapcsolatok létrehozásához hozzon létre Reláció és Rugalmas Reláció mezőket a modulokhoz.',
            'viewlayouts' => 'Ellenőrizheti, mely mezőknél érhetőek el az adatok listázása a Szerkesztési Nézet-ben. Ezen kívül megvizsgálhatja, mely adatok jelennek meg a Részletes Nézet-ben. Ezen nézetek nem kapcsolhatóak össze.<br /><br />A Gyors Létrehozás űrlap akkor jelenik meg, ha az alpanel modulon belül a Létrehozás gombra kattint. Alapértelmezetten a Gyors Létehozás ugyanaz, mint az alap Szerkesztési Nézet. A különbség, hogy a Gyors Létrehozás-t testre szabhatja, ezért több/kevesebb különböző mezőt tartalmazhat.<br /><br />Beállíthatja a modul biztonságát a Felület testre szabás használata során a Szabályok Beállítása Menedzsment-en keresztül.',
            'existingModule' => 'E modul létrehozása és testreszabása után létrehozhat további modulokat, vagy visszatérhet a csomaghoz, hogy Közzétegye, vagy Telepítse a csomagot. <br /><br />További modulok létrehozásához kattintson a Másolás gombra az eredeti modullal megegyező tulajdonságú modul létrehozásához, vagy térjen vissza a csomaghoz, és kattintson az Új Modul gombra. <br /><br />Ha kész a csomag Közzétételére és Telepítésére, térjen vissza a csomaghoz, hogy végrehajtsa ezeket a funkciókat. Közzétehet és telepíthet legalább egy modulos csomagokat.',
            'labels' => 'A standard mezők címkéi és az egyéni mezők címkéi megváltoztathatók. A mező címke megváltoztatása nem befolyásolja a mezőben tárolt adatokat.',
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
            'dropdownaddbtn' => 'Erre a gombra kattintva hozzáadhat új elemeket a legördülőhöz.',

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
            'mbBtn' => 'Használja a Module Buildert új modulok létrehozásához',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Térjen vissza az előző lépéshez.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Kattintson ennek a modulnak a szerkesztéséhez.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'newPackage' => 'Kattintosn az Új Csomagra az új csomag létrehozásához.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Legördülő szerkesztő',

//ASSISTANT
    'LBL_AS_SHOW' => 'Segéd bekacsolása',
    'LBL_AS_IGNORE' => 'Segéd kikacsolása',
    'LBL_AS_SAYS' => 'Segéd ajánlása:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Modulépítő',
    'LBL_STUDIO' => 'Stúdió',
    'LBL_DROPDOWNEDITOR' => 'Legördülő szerkesztő',
    'LBL_EDIT_DROPDOWN' => 'Legördülő menü szerkesztés',
    'LBL_DEVELOPER_TOOLS' => 'Fejlesztőeszközök',
    'LBL_SUGARPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_SYNCPORTAL' => 'Portál szinkronizálása',
    'LBL_PACKAGE_LIST' => 'Csomag listája',
    'LBL_HOME' => 'Főoldal',
    'LBL_NONE' => 'Egyik sem',
    'LBL_DEPLOYE_COMPLETE' => 'A telepítés komplett',
    'LBL_DEPLOY_FAILED' => 'Hiba lépett fel a telepítési folyamatban, a csomagot még nem telepítette megfelelően',
    'LBL_ADD_FIELDS' => 'Egyéni mezők hozzáadása',
    'LBL_AVAILABLE_SUBPANELS' => 'Elérhető altábla',
    'LBL_ADVANCED' => 'Részletesen',
    'LBL_ADVANCED_SEARCH' => 'Részletes keresés',
    'LBL_BASIC' => 'Alap',
    'LBL_BASIC_SEARCH' => 'Egyszerű keresés',
    'LBL_CURRENT_LAYOUT' => 'Elrendezés',
    'LBL_CURRENCY' => 'Pénznem',
    'LBL_CUSTOM' => 'Saját',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_DASHLETSEARCH' => 'SuiteCRM Dashlet Search',
    'LBL_POPUP' => 'Popup lista',
    'LBL_POPUPLIST' => 'Popup listakép',
    'LBL_POPUPLISTVIEW' => 'Popup listakép',
    'LBL_POPUPSEARCH' => 'Popup keresés',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DISPLAY_HTML' => 'Kijelző HTML kód',
    'LBL_DETAILVIEW' => 'Részletes nézet',
    'LBL_DROP_HERE' => '[Húzza ide]',
    'LBL_EDIT' => 'Szerkesztés',
    'LBL_EDIT_LAYOUT' => 'Elrendezés szerkesztése',
    'LBL_EDIT_ROWS' => 'Sorok szerkesztése',
    'LBL_EDIT_COLUMNS' => 'Oszlopok szerkesztése',
    'LBL_EDIT_LABELS' => 'Címkék szerkesztése',
    'LBL_EDIT_PORTAL' => 'Portál szerkesztés',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Nézet szerkesztése',
    'LBL_FILLER' => '(töltő)',
    'LBL_FIELDS' => 'mezők',
    'LBL_FAILED_TO_SAVE' => 'Nem sikerült menteni',
    'LBL_FAILED_PUBLISHED' => 'Nem sikerült a közzététel',
    'LBL_HOMEPAGE_PREFIX' => 'Saját',
    'LBL_LAYOUT_PREVIEW' => 'Elrendezési nézet',
    'LBL_LAYOUTS' => 'Elrendezések',
    'LBL_LISTVIEW' => 'Lista nézet',
    'LBL_MODULES' => 'Modulok:',
    'LBL_MODULE_TITLE' => 'Stúdió',
    'LBL_NEW_PACKAGE' => 'Új csomag',
    'LBL_NEW_PANEL' => 'Új panel',
    'LBL_NEW_ROW' => 'Új sor',
    'LBL_PACKAGE_DELETED' => 'Csomag törölve',
    'LBL_PUBLISHING' => 'Publikálás ...',
    'LBL_PUBLISHED' => 'Publikálva',
    'LBL_SELECT_FILE' => 'Válasszon egy fájlt',
    'LBL_SAVE_LAYOUT' => 'Elrendezés mentése',
    'LBL_SELECT_A_SUBPANEL' => 'Válasszon ki egy alpanel',
    'LBL_SELECT_SUBPANEL' => 'Válassza ki az alpanel',
    'LBL_SUBPANELS' => 'Alpanelek',
    'LBL_SUBPANEL' => 'Alpanel',
    'LBL_SUBPANEL_TITLE' => 'Cím:',
    'LBL_SEARCH_FORMS' => 'Keresés',
    'LBL_SEARCH' => 'Keresés',
    'LBL_STAGING_AREA' => 'Terület (Fogd és Vidd módszer)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
    'LBL_TOOLBOX' => 'Eszköztár',
    'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
    'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'Gyors létrehozás',
    'LBL_EDIT_DROPDOWNS' => 'Globális legördülő szerkesztése',
    'LBL_ADD_DROPDOWN' => 'Új globális legördülő lista hozzáadása',
    'LBL_BLANK' => '-üres-',
    'LBL_TAB_ORDER' => 'Fül',
    'LBL_TAB_PANELS' => 'Megjelenítő panelek fülekként',
    'LBL_TAB_PANELS_HELP' => 'Egyablakos megjelenítés helyett füleken való elkülönítés.',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Név',
    'LBL_DROPDOWN_LANGUAGE' => 'Nyelv',
    'LBL_DROPDOWN_ITEMS' => 'Lista elemek',
    'LBL_DROPDOWN_ITEM_NAME' => 'Elem neve',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Megjelenítő címke',
    'LBL_SYNC_TO_DETAILVIEW' => 'Részletes Nézet szinkronizálása',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Válassza ki ezt az opciót ehhez a Szerkesztési Nézethez az adott Részletes Nézet felülethez. A Mezők szinkronizálva lesznek a Szerkesztési Nézetben és automatikusan el lesznek mentve a Részletes Nézetben, amint a Mentés vagy Mentés és Beállít gombra kattint.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'A Részletes Nézet szinkronizálva van a megfelelő Szerkesztési Nézet-tel. A Részletes Nézet-ben lévő Mezők ugyanúgy láthatóak a Szerkesztési Nézet-ben. A Részletes Nézet-ben lévő változások nem menthetőek ezen az oldalon belül. Módosítsa a beállításokat vagy ne szinkronizálja a felületeket a Szerkesztési Nézet-ben.',
    'LBL_COPY_FROM_EDITVIEW' => 'Másolás Szerkesztési Nézet-ből',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Az értékek megadása kötelező egyaránt az Elemnévre és a Képernyő Címkére. Egy üres elem hozzáadásához kattintson a Hozzáadás gombra értékek megadása nélkül.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Elsődleges modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* Studio-ban létrehozott kapcsolat',
    'LBL_RELATIONSHIPS' => 'Kapcsolatok',
    'LBL_RELATIONSHIP_EDIT' => 'Kapcsolat szerkesztése',
    'LBL_REL_NAME' => 'Név',
    'LBL_REL_LABEL' => 'Címke',
    'LBL_REL_TYPE' => 'Típus',
    'LBL_RHS_MODULE' => 'Kapcsolódó modul',
    'LBL_NO_RELS' => 'Nem találtak összefüggést',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Opciós feltétel',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Oszlop',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Érték',
    'LBL_SUBPANEL_FROM' => 'Alpanel innen',
    'LBL_RELATIONSHIP_ONLY' => 'Nem látható elemekkel jönne létre ez a kapcsolat, mivel e két modul között már létező kapcsolat látható.',
    'LBL_ONETOONE' => 'Egytől egyig',
    'LBL_ONETOMANY' => 'Egytől sokig',
    'LBL_MANYTOONE' => 'Soktól - egyig',
    'LBL_MANYTOMANY' => 'Soktól - sokig',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Válasszon egy funkciót vagykomponenst!',
    'LBL_QUESTION_MODULE1' => 'Válasszon egy modult!',
    'LBL_QUESTION_EDIT' => 'Válasszon egy szerkesztendő modult!',
    'LBL_QUESTION_LAYOUT' => 'Válassza ki a szerkesztendő elrendezést!',
    'LBL_QUESTION_SUBPANEL' => 'Válasszon egy alpanelt a szerkesztéshez!',
    'LBL_QUESTION_SEARCH' => 'Válasszon ki egy szerkesztendő kereső elrendezést!',
    'LBL_QUESTION_MODULE' => 'Válasszon ki egy szerkesztendő modulkomponenst!',
    'LBL_QUESTION_PACKAGE' => 'Válasszon ki egy szerkesztendő csomagot vagy készítsen egy újat!',
    'LBL_QUESTION_EDITOR' => 'Válasszon ki egy eszközt!',
    'LBL_QUESTION_DROPDOWN' => 'Válassza ki a szerkesztendő legördülő listát vagy készítsen egy újat!',
    'LBL_QUESTION_DASHLET' => 'Válassza ki a szerkesztendő dashlet elrendezést!',
    'LBL_QUESTION_POPUP' => 'Válassza ki a szerkesztendő felugró elrendezést!',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Kapcsolódik a(z)',
    'LBL_NAME' => 'Név',
    'LBL_LABELS' => 'Címkék',
    'LBL_MASS_UPDATE' => 'Tömeges frissítés',
    'LBL_AUDITED' => 'Ellenőrzés',
    'LBL_CUSTOM_MODULE' => 'Modul',
    'LBL_DEFAULT_VALUE' => 'Alapértelmezett érték',
    'LBL_REQUIRED' => 'Szükséges',
    'LBL_DATA_TYPE' => 'Típus',
    'LBL_HCUSTOM' => 'Szokásos',
    'LBL_HDEFAULT' => 'Alapértelmezett',
    'LBL_LANGUAGE' => 'Nyelv',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Címkék szerkesztése',
    'LBL_SECTION_PACKAGES' => 'Csomagok',
    'LBL_SECTION_PACKAGE' => 'Csomag',
    'LBL_SECTION_MODULES' => 'Modulok',
    'LBL_SECTION_PORTAL' => 'Portál',
    'LBL_SECTION_DROPDOWNS' => 'Legördülők',
    'LBL_SECTION_PROPERTIES' => 'Tulajdonságok',
    'LBL_SECTION_DROPDOWNED' => 'Legördülő menü szerkesztés',
    'LBL_SECTION_HELP' => 'Segítség',
    'LBL_SECTION_ACTION' => 'Akció',
    'LBL_SECTION_MAIN' => 'Fő',
    'LBL_SECTION_EDPANELLABEL' => 'Panel címke szerkesztése',
    'LBL_SECTION_FIELDEDITOR' => 'Mező szerkesztése',
    'LBL_SECTION_DEPLOY' => 'Telepítés',
    'LBL_SECTION_MODULE' => 'Modul',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Láthatóság szerkesztése',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Alapértelmezett',
    'LBL_HIDDEN' => 'Rejtett',
    'LBL_AVAILABLE' => 'Elérhető',
    'LBL_LISTVIEW_DESCRIPTION' => '3 oszlop látható. Az oszlop azt a mezőt tartalmazza, mely alapértelmezetten megjelenik a lista nézetben, a több oszlop az egyedi nézet létrehozását mutatja, rendszergazdai jogosultsággal olyan oszlopok is elérhetők, melyek jelenleg nem használhatók.',
    'LBL_LISTVIEW_EDIT' => 'Listanézet szerkesztő',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Előnézet',
    'LBL_MB_RESTORE' => 'Visszaállítás',
    'LBL_MB_DELETE' => 'Törlés',
    'LBL_MB_COMPARE' => 'Összehasonlítása',
    'LBL_MB_DEFAULT_LAYOUT' => 'Alapértelmezett elrendezés',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Hozzáadás',
    'LBL_BTN_SAVE' => 'Mentés',
    'LBL_BTN_SAVE_CHANGES' => 'Változtatások mentése',
    'LBL_BTN_DONT_SAVE' => 'Módosítások elvetése',
    'LBL_BTN_CANCEL' => 'Mégsem',
    'LBL_BTN_CLOSE' => 'Bezárás',
    'LBL_BTN_SAVEPUBLISH' => 'Mentés és telepítés',
    'LBL_BTN_NEXT' => 'Következő',
    'LBL_BTN_BACK' => 'Vissza',
    'LBL_BTN_CLONE' => 'Másolat',
    'LBL_BTN_ADDCOLS' => 'Oszlopokat hozzáad',
    'LBL_BTN_ADDROWS' => 'Sorokat hozzáad',
    'LBL_BTN_ADDFIELD' => 'Mező hozzáadása',
    'LBL_BTN_ADDDROPDOWN' => 'Legördülő lista hozzáadása',
    'LBL_BTN_SORT_ASCENDING' => 'Növekvő',
    'LBL_BTN_SORT_DESCENDING' => 'Rendezés csökkenő',
    'LBL_BTN_EDLABELS' => 'Címkék szerkesztése',
    'LBL_BTN_UNDO' => 'Visszavon',
    'LBL_BTN_REDO' => 'Újra',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Hozzáad egyéni mezőt',
    'LBL_BTN_EXPORT' => 'Export testreszabása',
    'LBL_BTN_DUPLICATE' => 'Duplikálás',
    'LBL_BTN_PUBLISH' => 'Közzétesz',
    'LBL_BTN_DEPLOY' => 'Telepítés',
    'LBL_BTN_EXP' => 'Export',
    'LBL_BTN_DELETE' => 'Törlés',
    'LBL_BTN_VIEW_LAYOUTS' => 'Elrendezések megtekintése',
    'LBL_BTN_VIEW_FIELDS' => 'Mezők megtekintése',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Kapcsolatok megtekintése',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Kapcsolat hozzáadása',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
    'LBL_BTN_INSERT' => 'Beszúr',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Hiba: Mező már létezik',
    'ERROR_INVALID_KEY_VALUE' => "Hiba: Érvénytelen kulcs érték: [']",
    'ERROR_NO_HISTORY' => 'Előzmény fájlok nem találhatók',
    'ERROR_MINIMUM_FIELDS' => 'Az elrendezés tartalmaznia kell legalább egy mezőt',
    'ERROR_GENERIC_TITLE' => 'Hiba történt',
    'ERROR_REQUIRED_FIELDS' => 'Biztos benne, hogy folytatni kívánja? Az alábbi kötelezően kitöltendő mezők hiányoznak az elrendezésről:',
    'ERROR_ARE_YOU_SURE' => 'Biztos benne, hogy folytatni kívánja?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Csomag neve:',
    'LBL_MODULE_NAME' => 'Modul neve:',
    'LBL_AUTHOR' => 'Szerző:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_KEY' => 'Kulcs:',
    'LBL_ADD_README' => 'Olvass el',
    'LBL_LAST_MODIFIED' => 'Utolsó módosítás:',
    'LBL_NEW_MODULE' => 'Új modul',
    'LBL_LABEL' => 'Címke',
    'LBL_LABEL_TITLE' => 'Címke',
    'LBL_WIDTH' => 'Szélesség',
    'LBL_PACKAGE' => 'Csomag:',
    'LBL_TYPE' => 'Típus:',
    'LBL_TEAM_SECURITY' => 'Csoport biztonság',
    'LBL_ASSIGNABLE' => 'Hozzárendelhető',
    'LBL_PERSON' => 'Személy',
    'LBL_COMPANY' => 'Cég',
    'LBL_ISSUE' => 'Eredmény',
    'LBL_SALE' => 'Értékesítés',
    'LBL_FILE' => 'Fájl',
    'LBL_NAV_TAB' => 'Navigációs fül',
    'LBL_CREATE' => 'Új létrehozás',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Megtekintés',
    'LBL_LIST_VIEW' => 'Lista nézet',
    'LBL_HISTORY' => 'Előzmények megtekintése',
    'LBL_RESTORE_DEFAULT' => 'Alapértelmezett érték visszaállítása',
    'LBL_ACTIVITIES' => 'Tevékenységek',
    'LBL_NEW' => 'Új',
    'LBL_TYPE_BASIC' => 'alap',
    'LBL_TYPE_COMPANY' => 'cég',
    'LBL_TYPE_PERSON' => 'személy',
    'LBL_TYPE_ISSUE' => 'eredmény',
    'LBL_TYPE_SALE' => 'eladás',
    'LBL_TYPE_FILE' => 'fájl',
    'LBL_RSUB' => 'Ez a subpanel lesz látható az Ön moduljában',
    'LBL_MSUB' => 'Ez az a subpanel, amelyet az Ön modulja szolgáltat a kapcsolódó modul megjelenítőjén.',
    'LBL_MB_IMPORTABLE' => 'Importálás',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'látható',
    'LBL_VE_HIDDEN' => 'rejtett',
    'LBL_PACKAGE_WAS_DELETED' => '[[Csomag]] törölve',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export testreszabása',
    'LBL_EC_NAME' => 'Csomag neve:',
    'LBL_EC_AUTHOR' => 'Szerző:',
    'LBL_EC_DESCRIPTION' => 'Leírás:',
    'LBL_EC_KEY' => 'Kulcs:',
    'LBL_EC_CHECKERROR' => 'Kérjük, válasszon egy modult!',
    'LBL_EC_CUSTOMFIELD' => 'egyéni mező (k)',
    'LBL_EC_CUSTOMLAYOUT' => 'egyéni elrendezés(ek)',
    'LBL_EC_NOCUSTOM' => 'Nincs modul a testreszabáshoz.',
    'LBL_EC_EMPTYCUSTOM' => 'üres testreszabások.',
    'LBL_EC_EXPORTBTN' => 'Export',
    'LBL_MODULE_DEPLOYED' => 'A modul bevezetésre került.',
    'LBL_UNDEFINED' => 'nem definiált',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nem sikerült lekérni az adatokat',
    'LBL_AJAX_TIME_DEPENDENT' => 'Az időfüggő tevékenység folyamatban van. Kérem, várjon és próbálkozzon újra egy pár másodperc múlva!',
    'LBL_AJAX_LOADING' => 'Betöltés ...',
    'LBL_AJAX_DELETING' => 'Törlés ...',
    'LBL_AJAX_BUILDPROGRESS' => 'Létrehozás folyamatban...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Telepítés folyamatban ...',
    'LBL_AJAX_FIELD_EXISTS' => 'A mező megadott néven már létezik. Kérem, adjon meg egy új mező nevet!',

    'LBL_AJAX_RESPONSE_TITLE' => 'Result',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Biztosan el szeretné távolítani ezt a csomagot? Ez a művelet véglegesen törli az összes fájlt társított ezt a csomagot.',
    'LBL_JS_REMOVE_MODULE' => 'Biztosan el szeretné távolítani ezt a modult? Ez a művelet végleg törli az összes fájlt amit társított  ehhez a modulhoz.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Minden testreszabás, ami a Stúdióban készült felülíródik, ha a modult újra létrhozza. Biztos benne, hogy folytatni szeretné?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Csomag telepítése',
    'LBL_JS_VALIDATE_NAME' => 'Név - csak alfanumerikus karakterek lehetnek szóköz nélkül, nagy kezdőbetűvel.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Csomagnév már létezik',
    'LBL_JS_VALIDATE_KEY' => 'Kulcs - csak alfanumerikus lehet',
    'LBL_JS_VALIDATE_LABEL' => 'Kérem, adja meg a címkét, amelyet ez a modul a megjelenő névként fog használni',
    'LBL_JS_VALIDATE_TYPE' => 'Kérem, válassza ki, milyen típusú modult kíván építeni a fenti listából!',
    'LBL_JS_VALIDATE_REL_NAME' => 'Név - csak alfanumerikus karakterek lehetnek szóköz nélkül',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Címke - Kérjük adja meg az alpanel címkéjét',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Biztosan törölni akarja ezt a kapcsolatot?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Ez a kapcsolat állandó. Biztos szeretné újra élesíteni ezt a kapcsolatot?',
    'LBL_CONFIRM_DONT_SAVE' => 'Változások történtek, mióta utoljára mentett, szeretne menteni?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Menti a változtatásokat?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Az adatok sérülhetnek, és ezt nem lehet visszavonni. Biztos, hogy folytatni szeretné?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Válassza ki, hogy milyen adattípusú adatokat szeretne majd ebbe a mezőbe felvinni!',
    'LBL_POPHELP_SEARCHABLE' => 'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
    'LBL_POPHELP_IMPORTABLE' => 'Igen: A mező adatbeviteli mező.<br />Nem: A mező nem adatbeviteli mező.<br />Szükséges: A mező értéke mindenképpen meg kell adni.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Írja be a szélességet, a képpontban mérve.<br />A feltöltött képet le kell kicsinyíteni, hogy a szélessége megfelelő legyen.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Írja be a magasságot, a képpontban mérve.<br />A feltöltött képet le kell kicsinyíteni hogy a magassága megfelelő legyen.',
    'LBL_POPHELP_DUPLICATE_MERGE' => 'Engedélyezve: A mező megjelenik a Körlevél Másolat funkcióban, de nem lesz elérhető a Keresési Másolat funkcióban lévő szűrési feltételek használatakor.<br />Letiltva: A mező nem jelenik meg a Körlevél Másolat funkcióban, és nem lesz elérhető a Keresési Másolat funkcióban lévő szűrési feltételek használatakor.<br />Szűrőben: A mező megjelenik a Körlevél Másolat funkcióban, és elérhető lesz Keresési Másolat funkcióban.<br />Csak Szűrés: A mező nem megjelenik a Körlevél Másolat funkcióban, de elérhető lesz a Keresési Másolat funkcióban.<br />Alapértelmezett Kiválasztott szűrő: Alapértelmezésben a mezők fogják használni a szűrő feltételt a Keresési Másolat oldalon, és az is megjelenik a Körlevél Másolat funkcióban.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
    'LBL_RESET' => 'Alapbeállítás',
    'LBL_RESET_MODULE' => 'Modul visszaállítása',
    'LBL_REMOVE_CUSTOM' => 'Testreszabás visszaállítása',
    'LBL_CLEAR_RELATIONSHIPS' => 'Kapcsolatok törlése',
    'LBL_RESET_LABELS' => 'Címkék törlése',
    'LBL_RESET_LAYOUTS' => 'Elrendezések visszaállítása"',
    'LBL_REMOVE_FIELDS' => 'Egyéni mezők törlése',
    'LBL_CLEAR_EXTENSIONS' => 'Kiterjesztések törlése',
    'LBL_HISTORY_TIMESTAMP' => 'Időbélyeg',
    'LBL_HISTORY_TITLE' => 'előzmények',


    'LBL_ADD_LAYOUT' => 'Elrendezés Hozzáadása',
    'LBL_ADD_LAYOUTS' => 'Elrendezés Hozzáadása',
    'LBL_QUESTION_ADD_LAYOUT' => 'Válasszon Csoport Elrendezést a hozzáadáshoz.',
    'LBL_REMOVE_LAYOUT' => 'Csoport Elrendezés Eltávolítása',

    'LBL_SECURITYGROUP' => 'Biztonsági Csoport:',
    'LBL_COPY_FROM' => 'Másolás Ebből:',
    'LBL_ADDLAYOUTDONE' => 'Elrendezés Mentve',
    'LBL_REMOVELAYOUTDONE' => 'Elrendezés Eltávolítva',
    'LBL_REMOVE_CONFIRM' => 'Valóban eltávolítja?',

    'fieldTypes' => array(
        'varchar' => 'Szövegmező',
        'int' => 'Egész szám',
        'float' => 'Lebegőpontos',
        'bool' => 'Jelölő négyzet',
        'enum' => 'Legördülő',
        'dynamicenum' => 'Dinamikus legördülő menü',
        'multienum' => 'MultiSelect',
        'date' => 'Dátum',
        'phone' => 'Telefon',
        'currency' => 'Pénznem',
        'html' => 'HTML',
        'radioenum' => 'Rádiógomb',
        'relate' => 'Összekapcsol',
        'address' => 'Cím',
        'text' => 'Szövegterület',
        'url' => 'URL:',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Dátum-Idő',
        'decimal' => 'Decimális',
        'image' => 'kép',
    ),
    'labelTypes' => array(
        "" => "gyakran használt címkék",
        "all" => "minden címke",
    ),

    'parent' => 'Rugalmas társítás',

    'LBL_ILLEGAL_FIELD_VALUE' => "Legördülő kulcs nem tartalmazhat idézőjelet.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Ön kiválasztja a törölni kívánt tételt a legördülő listából. Bármely legördülő mező ezen lista használatával nem fogja többet megjeleníteni az értéket, és az érték nem lesz többé kiválasztható a legördülő mezőkből. Biztos benne, hogy folytatja?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Minden modul',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

