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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'A következő modulok lettek telepítve:',
	'DESC_MODULES_QUEUED'						=> 'A következő modulok készen állnak a telepítésre:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nem meghatározható a csoport',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Nem lehet meghatározni a Tulajdonos',
	'ERR_UW_CONFIG_WRITE'						=> 'Hiba a config.php fájlban az új verzió információ frissítésekor.',
	'ERR_UW_CONFIG'								=> 'Kérjük tegye írhatóvá a config.php fájlt majd frissítse az oldalt.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'A könyvtár nem írható',
	'ERR_UW_FILE_NOT_COPIED'					=> 'A fájl nem másolható',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Probléma lépett fel a csomag eltávolítása közben',
	'ERR_UW_FILE_NOT_READABLE'					=> 'A fájl nem olvasható.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'A fájl nem mozgatható és nem írható.',
	'ERR_UW_FLAVOR_2'							=> 'Frissítés:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM rendszer jellemzők:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log fájlt nem lehetett létrehozni / írni. Kérjük, javítsa az engedélyeket a SuiteCRM könyvtárban.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload beállított értéke 1-nél nagyobb. Kérjük, változtassa meg ezt a php.ini-ben és indítsd újra a webszervert.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM MySQL 4.1.2 verziót vagy újabbat igényel. Jelenlegi verzió:',
	'ERR_UW_OCI8_VERSION'				        => 'Your version of Oracle is not supported by SuiteCRM.  You will need to install a version that is compatible with the SuiteCRM application.  Please consult the Compatibility Matrix in the Release Notes for supported Oracle Versions. Current version: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Kérjük, adja meg a fájlt, és próbálja újra!',
	'ERR_UW_NO_FILES'							=> 'Hiba történt, egyetlen fájl sem található az ellenőrzéshez.',
	'ERR_UW_NO_MANIFEST'						=> 'A zip fájl nem található a mainfest.php fájlban. A művelet nem folytatható.',
	'ERR_UW_NO_VIEW'							=> 'Nézet nincs definiálva.',
	'ERR_UW_NO_VIEW2'							=> 'Nézet nincs definiálva. Kérem, menjen az Adminisztráció főoldalára.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Nem érvényes feltöltés.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nem sikerült létrehozni az ideiglenes könyvtárat. Ellenőrizze a fájl engedélyeit.',
	'ERR_UW_ONLY_PATCHES'						=> 'Csak javító csomagok tölthetők fel erre az oldalra.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Előkészítés alatt talált hibák ellenőrzése',
	'ERR_UW_UPLOAD_ERR'							=> 'Hiba történt a fájl feltöltésével, próbálkozzon újra!<br />\\ N',
	'ERR_UW_VERSION'							=> 'SugarCRM rendszer verziója:',
	'ERR_UW_WRONG_TYPE'							=> 'Ez az oldal nem fut',
	'LBL_BUTTON_BACK'							=> '< Vissza',
	'LBL_BUTTON_CANCEL'							=> 'Mégsem',
	'LBL_BUTTON_DELETE'							=> 'Csomag törlése',
	'LBL_BUTTON_DONE'							=> 'Kész',
	'LBL_BUTTON_EXIT'							=> 'Kilépés',
	'LBL_BUTTON_INSTALL'						=> 'Előkészítés frissítése',
	'LBL_BUTTON_NEXT'							=> 'Következő>',
	'LBL_BUTTON_RECHECK'						=> 'Újraellenőrzés',
	'LBL_BUTTON_RESTART'						=> 'Újraindítás',

	'LBL_UPLOAD_UPGRADE'						=> 'Frissítő csomag feltöltése',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'A feltöltendő fájl nem taláható',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Biztonsági mentés',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Ehhez a frissítéshez tartozó biztonsági másolatok megtalálhatók',
	'LBL_UW_BACKUP'								=> 'Biztonsági MENTÉS',
	'LBL_UW_CANCEL_DESC'						=> 'A frissítés megszakítva. Az ideiglenes fájlokat, amelyek másolásra kerültek, valamint feltöltésre került, törölve lett.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'A karakterbeállítás séma megváltozott',
	'LBL_UW_CHECK_ALL'							=> 'Összes ellenőrzése',
	'LBL_UW_CHECKLIST'							=> 'Frissítés lépései',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "A felülírt fájlok mentése a következő könyvtárban:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Manuálisan egyesíti a következő fájlok:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Frissítési folyamat: manuális fájl egyesítés',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Kérjük, használjon egy másik módszert, ami megbízhatóbb, hogy egyesíteni tudja ezeket a fájlokat. Amíg ez nem jön létre, a SugarCRM telepítés állapota bizonytalan, és a frissítés nem teljes.',
	'LBL_UW_COMPLETE'							=> 'Kész',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Ez a SugarCRM új verziója tartalmaz egy új licencszerződést. Szeretné folytatni?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Minden rendszerbeállítási feltétel teljesült',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Setting: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL Modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP Beállítás : Memória Limit',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Setting: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server és PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Szükséges MySQL Verzió',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Database Version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'A php.ini helye',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Szükséges PHP Verzió',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP Beállítás : Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Szerver Beállításainak Ellenőrzése',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Észlelt beállítások',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML feldolgozás',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Support',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE Version',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Sikeres fáj másolás',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Egyéni Táblázat kinézet módosítása',

	'LBL_UW_DB_CHOICE1'							=> 'Frissítés varázsló futtatja az SQL-t',
	'LBL_UW_DB_CHOICE2'							=> 'Kézi SQL lekérdezés',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT sikerült - összehasonlított eredmények eltérőek',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Adatbázis jogosultságok',
	'LBL_UW_DB_ISSUES'							=> 'Adatbázis kérdések',
	'LBL_UW_DB_METHOD'							=> 'Adatbázis frissítési eljárás',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Minden jogosultság elérhető',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Szükséges jogosultságok',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'A következő frissítéseket telepítettük:',
	'LBL_UW_END_DESC'							=> 'A rendszer frissítve.',
	'LBL_UW_END_DESC2'							=> 'Ha úgy dönt, hogy kézzel futtat minden lépést, mint például a fájl egyesítés vagy az SQL lekérdezések, kérjük, ezt tegye meg most. A rendszer instabil állapotban lesz, amíg ezek a lépések végrehajtásra kerülnek.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'A frissítés sikeres.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Kattintson a Kész [Done] gombra a kilépéshez a Frissítés Varázslóból!',
	'LBL_UW_END_LOGOUT'							=> 'Ha más frissítést szeretne telepíteni, akkor lépjen ki és vissza a Frissítés Varázslóba.',
	'LBL_UW_END_LOGOUT2'						=> 'Kilépés',
	'LBL_UW_REPAIR_INDEX'						=> 'Az adatbázis teljesítményének javítására futtassa a [Index újraépítés] szkriptet.',

	'LBL_UW_FILE_DELETED'						=> "törölve.",
	'LBL_UW_FILE_GROUP'							=> 'Csoport',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Fájl engedélyek',
	'LBL_UW_FILE_ISSUES'						=> 'Fájlproblémák',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'File Requires Manual Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> 'Minden fájl írható',
	'LBL_UW_FILE_OWNER'							=> 'Tulajdonos',
	'LBL_UW_FILE_PERMS'							=> 'Engedélyek',
	'LBL_UW_FILE_UPLOADED'						=> 'feltöltve',
	'LBL_UW_FILE'								=> 'Fájlnév',
	'LBL_UW_FILES_QUEUED'						=> 'A következő frissítés csomagok készen állnak a telepítésre:',
	'LBL_UW_FILES_REMOVED'						=> "A következő fájlokat kell távolítani a rendszerből:",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Kattintson a Tovább gombra a frissítő csomagok feltöltéséhez.",
	'LBL_UW_FROZEN'								=> 'Töltsön fel egy csomagot a folytatás előtt.',
	'LBL_UW_HIDE_DETAILS'						=> 'Részletek elrejtése',
	'LBL_UW_IN_PROGRESS'						=> 'Folyamatban',
	'LBL_UW_INCLUDING'							=> 'Tartalmazza a(z)',
	'LBL_UW_INCOMPLETE'							=> 'Sikertelen befejezés',
	'LBL_UW_INSTALL'							=> 'Fájl INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Fájl egyesítése',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "A modul kész a törlésre. Kattintson a Megerősítés [Commit] gombra a törléshez!",
	'LBL_UW_MODULE_READY'						=> "Modul készen áll a telepítésre. Kattintson a \"Megerősítés\" [Commit] gombra, hogy folytassa a telepítést!",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Rögzítetlen frissítések észlelése.',
	'LBL_UW_NONE'								=> 'Nincs',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nem érhető el',
	'LBL_UW_OVERWRITE_DESC'						=> "Valamennyi módosított fájl felülírásra kerül, beleértve az Ön által módosított sablonokat és kódokat. Biztos benne, hogy folytatni szeretné?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Összes fájl felülírása',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuális egyesítés - Mindent megőriz',
	'LBL_UW_OVERWRITE_FILES'					=> 'Egyesítés metódus',
	'LBL_UW_PATCH_READY'						=> 'A javító készen áll a végrehajtáshoz. Kattintson a Megerősítés [Commit] gombra, hogy a frissítés folytatódjon!',
	'LBL_UW_PATCH_READY2'						=> 'Közlemény: Egyedi elrendezés észlelése<br /><br />A STUDIO-val a következő fájl(ok) új mezőit vagy képernyő elrendezését módosította. A javító csomagban lévő fájlok is tartalmaznak módosításokat.  Valamennyi fájl esetében lehet:<br />[Default] Őrizze meg az Ön változatát, hagyja a négyzetet üresen. A javítás a módosításokat figyelmen kívül hagyja.<br />VAGY<br />Fogadja el a frissített fájlokat a jelölőnégyzet bekapcsolásával. Ebben az esetben Önnek újra kell építeni az elrendezést a Studio segítségével.',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Feladat létrehozása a kézi egyesítéshez?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Előkészítés előtti ellenőrzés',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differenciált',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Küldjön Email emlékeztetőt a manuális egyesítésről?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Alábbiakban listázott fájlok lettek módosítva. Törölje a listából azokat a tételeket, amelyek manuális egyesítést igényelnek. Minden észlelt módosítás esetén automatikusan megszünteti a kijelölést. Minden kijelölés felülírást fog eredményezni.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nem szükséges kézi fájlegyesítés.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nem szükséges.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-védett fájlok:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Az előkészítés végrehajtása sikeresen megtörtént.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Kattintson a Tovább gombra a frissített fájlok felmásolásához.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Megjegyzés: A többi frissítés elvégzése kötelező, kattintson a Tovább gombra, a folyamat befejezéséhez. Ha nem szeretné folytatni, kattintson a Mégse gombra.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Minden fájl kijelölése',

	'LBL_UW_REBUILD_TITLE'						=> 'Újraépítés eredménye',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Séma módosítások',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'A detektált beállítások megjelenítése',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Hiányzó Adatbázis Engedélyek Megjelenítése',
	'LBL_UW_SHOW_DETAILS'						=> 'Részletek megjenítése',
	'LBL_UW_SHOW_DIFFS'							=> 'A manuális egyesítést igénylő fájlok megjelenítése',
	'LBL_UW_SHOW_NW_FILES'						=> 'Hibás fájl engedélyek megjelenítése',
	'LBL_UW_SHOW_SCHEMA'						=> 'A séma módosító szkript megjelenítése',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Hibás lekérdezések megjelenítése',
	'LBL_UW_SHOW'								=> 'Mutat',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Kihagyott fájlok',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ugorja át a felülírást - Manuális egyesítés bekapcsolva.',
	'LBL_UW_SQL_RUN'							=> 'Ellenőrizze, ha az SQL manuálisan lett elindítva',
	'LBL_UW_START_DESC'							=> 'Ez a varázsló segíti Önt a SugarCRM korszerűsítésében.',
	'LBL_UW_START_DESC2'						=> 'Megjegyzés: Javasoljuk, hogy készítsen mentést Sugar-adatbázisról és a rendszer fájlokról (az összes fájlt a SugarCRM mappában) mielőtt frissíti az Ön alkalmazását. Javasoljuk, hogy először végezzen tesztelést az Ön alkalmazásának egy klónozott példányán.',
	'LBL_UW_START_DESC3'						=> 'A Tovább gombra kattintva ellenőrzés történik arra vonatkozóan, hogy a  rendszer készen áll-e a frissítésre. Az ellenőrzés magában foglalja a fájl jogosultságokat, kiváltságokat és adatbázis-kiszolgáló beállításainak ellenőrzését.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Az új Frissítés Varázsló most megismétli a frissítési folyamatot. Kérjük,folytassa a frissítést!',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Üdvözöljük az új Frissítés Varázslóban',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Ellenőrzés, kérem várjon. Ez eltarthat akár 30 másodpercig is',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Kapcsolódó fájlok ellenőrzésének indítása.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Fájlok',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Talált',

	'LBL_UW_TITLE_CANCEL'						=> 'Mégsem',
	'LBL_UW_TITLE_COMMIT'						=> 'Frissítés megerősítése',
	'LBL_UW_TITLE_END'							=> 'Debrief',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Előkészítés ellenőrzése',
	'LBL_UW_TITLE_START'						=> 'Üdvözöljük',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Rendszer ellenőrzés',
	'LBL_UW_TITLE_UPLOAD'						=> 'Frissítő csomag',
	'LBL_UW_TITLE'								=> 'Frissítő varázsló',
	'LBL_UW_UNINSTALL'							=> 'Eltávolítás',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Licenc elfogadása',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Licenc konvertálása',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Frissített/Testre szabott modulok',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'A következő modulok lettek detektálva, testre szabva és levédve',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'A következő modulok lettek detektálva, Studio egyedi beállításként és frissítve',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'The SuiteCRM Community Edition 5.0 uses GNU Affero General Public License version 3. This upgrade will convert your existing license to the new license displayed below.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Frissítés megkezdése folyamatban',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Rendszer ellenőrzés folyamatban',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Licenc ellenőrzése folyamatban',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Előkészítés ellenőrzése folyamatban',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Fájl másolás folyamatban',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Frissítés folyamatban',
    'LBL_UW_COMMIT_DESC'						=> 'Kattintson a Tovább gombra a frissítési szkriptek futtatásához.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Frissítés szkript folyamatban',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Frissítés összesítő folyamatban',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'folyamatban van',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Eltelt idő',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Frissítés megszakítása és karbantartás folyamatban',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'A frissítés eltarthat egy ideig',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Feltöltés ellenőrzése folyamatban',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Frissítő csomag feltöltése',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Would you like SuiteCRM to drop the depricated 451 Schema ?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard Drops old 451 schem',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Kézi Drop-séma Post Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Régi séma DROP-módszer',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Régi séma megjelenítése',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Kihagyott lekérdezések',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php 5-ös verzió vagy újabb szükséges.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Ön által használt PHP verzió nem támogatja a SugarCRM-et. Szüksége lesz egy frissebb verzióra, amely kompatibilis a Sugar alkalmazással. Kérjük, olvassa el a kompatibilitási mátrix  Release Notes bejegyzést a támogatott PHP verziókról. Az Ön által használt verzió',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php visszamenőleges kompatibilitási mód be van kapcsolva. Állítsa zend.ze1_compatibility_mode -ot  off-ra.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Feladat',
    'LBL_ML_CANCEL'             => 'Mégsem',
    'LBL_ML_COMMIT'=>'Jóváhagyás',
    'LBL_ML_DESCRIPTION' => 'Leírás',
    'LBL_ML_INSTALLED' => 'Telepítés időpontja',
    'LBL_ML_NAME' => 'Név',
    'LBL_ML_PUBLISHED' => 'Közzétéve',
    'LBL_ML_TYPE' => 'Típus',
    'LBL_ML_UNINSTALLABLE' => 'Nem telepíthető',
    'LBL_ML_VERSION' => 'Verzió',
	'LBL_ML_INSTALL'=>'Telepítse',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Követés',
	'LBL_CURRENT_PHP_VERSION' => 'Az Ön által használt php verzió',
	'LBL_RECOMMENDED_PHP_VERSION' => 'Ajánlott php verzió 5.2.x)',
	'LBL_MODULE_NAME' => 'Frissítés Varázsló',
	'LBL_UPLOAD_SUCCESS' => 'A frissítő csomag sikeresen feltöltve. Kattintson a Tovább gombra a végső ellenőrzéshez.',
	'LBL_UW_TITLE_LAYOUTS' => 'Frissítés véglegesítése',
	'LBL_LAYOUT_MODULE_TITLE' => 'Elrendezések',
	'LBL_LAYOUT_MERGE_DESC' => 'Vannak új szabad mezők, amelyeket hozzáadott frissítés részeként, és automatikusan csatolni tudja a már meglévő modul elrendezéshez. Ha többet szeretne megtudni az új mezőkről, kérjük, olvassa el az aktuális verzió leírását, amelyről frissített.<br /><br />Ha nem kíván hozzáfűzni az új mezőt, kérjük, törölje a modult, és az egyéni elrendezések változatlanok maradnak. A mezők elérhetők lesznek a Studio-ban a frissítés után.',
	'LBL_LAYOUT_MERGE_TITLE' => 'A Tovább gombra kattintva jóváhagyhatja a változtatásokat, és befejezni a frissítést.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'A Tovább gombra kattintva elkészül a frissítést.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Erősítse meg az elrendezést',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Erősítse meg az elrendezés eredményét',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'A következő elrendezések összevonása sikeresen megtörtént:',
	'LBL_SELECT_FILE' => 'Válassza ki a fájlt:',
    'ERROR_VERSION_INCOMPATIBLE' => 'A feltöltött állomány nem kompatibilis a Sugar Suite ezen verziójával: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'The uploaded file is not compatible with this flavor (Community Edition, Professional, or Enterprise) of SuiteCRM: ',
	'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Modul Betöltő' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Téma:' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Frissítés' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Feldolgozás' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'A feltöltött fájl mérete meghaladja a php.ini-ben beállított upload_max_filesize-t.',
													2 => 'A feltöltött fájl mérete meghaladja a MAX_FILE_SIZE beállítást, amit a HTML formban megadott.',
													3 => 'A feltöltött fájlt csak részben töltődött fel.',
													4 => 'A feltöltés sikertelen volt.',
													5 => 'Ismeretlen hiba.',
													6 => 'Hiányzik egy ideiglenes mappa.',
													7 => 'Nem sikerült lemezre írni a fájlt.',
													8 => 'A fájl feltöltése megszakadt.',
),
);
