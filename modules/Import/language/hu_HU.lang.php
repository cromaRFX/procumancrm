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

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/

 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Import fájl olvasása sikerült',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'A rekord hiba miatt kihagyva',
    'LBL_UPDATE_SUCCESSFULLY' => 'Rekordok sikeresen frissítve',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Rekordok sikeresen létrehozva',
    'LBL_STEP_4_TITLE' => '4. lépés: Fájl importálás',
    'LBL_STEP_5_TITLE' => '5. lépés: Az eredmények megtekintése',
    'LBL_CUSTOM_ENCLOSURE' => 'Mezők határolókaraktere:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'A közzététel nem lehetséges. Már van egy Importálási megfeleltetés ugyanezen a néven.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Más tulajdonában lévő megfeleltetés közzétételének visszavonása nem lehetséges. Önnek van egy ugyanilyen nevű importálási megfeleltetése.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Import nincs beállítva erre a modultípusra',
    'LBL_IMPORT_TYPE' => 'Művelet importálása',
    'LBL_IMPORT_BUTTON' => 'Rekordok létrehozása',
    'LBL_UPDATE_BUTTON' => 'Rekord létrehozása és frissítése',
    'LBL_CREATE_BUTTON_HELP' => 'Use this option to create new records. Note: Rows in the import file containing values that match the IDs of existing records will not be imported if the values are mapped to the ID field.',
    'LBL_UPDATE_BUTTON_HELP' => 'Use this option to update existing records. The data in the import file will be matched to existing records based on the record ID in the import file.',
    'LBL_ERROR_INVALID_BOOL'=>'Érvénytelen érték (legyen 1 vagy 0)',
    'LBL_NO_ID' => 'Azonosító kötelező',
    'LBL_PRE_CHECK_SKIPPED' => 'Elő ellenőrzés kihagyva',
    'LBL_IMPORT_ERROR' => 'Importálási hibák adódtak',
    'LBL_ERROR' => 'Hiba:',
    'LBL_NOLOCALE_NEEDED' => 'Helyi konvertálás nem szükséges',
    'LBL_FIELD_NAME' => 'Mezőnév',
    'LBL_VALUE' => 'Érték',
    'LBL_ROW_NUMBER' => 'Sor száma',
    'LBL_NONE' => 'Egyik sem',
    'LBL_REQUIRED_VALUE' => 'A szükséges érték hiányzik',
    'LBL_ERROR_SYNC_USERS' => 'Invalid value to sync to Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'Ez az azonosító már létezik ebben a táblázatban',
    'LBL_ASSIGNED_USER' => 'Ha a felhasználó nem létezik, használja az aktuális felhasználót',
    'LBL_SHOW_HIDDEN' => 'Mezők mutatása, hogy normál módon nem importálható',
    'LBL_UPDATE_RECORDS' => 'A rekordok importálása helyett frissítse azokat (Nem visszafordítható)',
    'LBL_TEST'=> 'Teszt import (nem menti és változtatja meg az adatokat)',
    'LBL_TRUNCATE_TABLE' => 'Táblák kiürítése importálás előtt (minden rekordot töröl)',
    'LBL_RELATED_ACCOUNTS' => 'Ne hozzon létre kapcsolódó klienseket',
    'LBL_NO_DATECHECK' => 'Dátum ellenőrzés kihagyása (gyorsabb, de hibát okoz, ha a dátum hibás)',
    'LBL_NO_EMAILS' => 'Ne küldjön ki email értesítéseket az importálás alatt',
    'LBL_NO_PRECHECK' => 'Natív formátum mód',
    'LBL_STRICT_CHECKS' => 'Használjon szigorú szabályrendszert (Ellenőrizze az email címeket és a telefonszámokat is)',
    'LBL_ERROR_SELECTING_RECORD' => 'Hiba a rekord kiválasztásban:',
    'LBL_ERROR_DELETING_RECORD' => 'Hiba a rekord törlésben:',
    'LBL_NOT_SET_UP' => 'Import nincs beállítva ehhez a modul típushoz',
    'LBL_ARE_YOU_SURE' => 'Biztos benne? Ez minden adatot töröl ebben a modulban.',
    'LBL_NO_RECORD' => 'Nincs ilyen rekord ezzel az azonosítóval a frissítéshez',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import nincs beállítva ehhez a modultípushoz',
    'LBL_DEBUG_MODE' => 'Hibakeresés mód engedélyezése',
    'LBL_ERROR_INVALID_ID' => 'Az azonosító túl hosszú ehhez a mezőhöz (maximum 36 karakter)',
    'LBL_ERROR_INVALID_PHONE' => 'Érvénytelen telefonszám',
    'LBL_ERROR_INVALID_NAME' => 'Karakterlánc túl hosszú, hogy beleférjen a mezőbe',
    'LBL_ERROR_INVALID_VARCHAR' => 'Karakterlánc túl hosszú, hogy beleférjen a mezőbe',
    'LBL_ERROR_INVALID_DATE' => 'Érvénytelen dátum formátum',
    'LBL_ERROR_INVALID_DATETIME' => 'Érvénytelen dátum-idő',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Érvénytelen dátum-idő',
    'LBL_ERROR_INVALID_TIME' => 'Érvénytelen idő',
    'LBL_ERROR_INVALID_INT' => 'Érvénytelen egész szám',
    'LBL_ERROR_INVALID_NUM' => 'Érvénytelen számérték',
    'LBL_ERROR_INVALID_EMAIL'=>'Érvénytelen e-mail cím',
    'LBL_ERROR_INVALID_USER'=>'Érvénytelen felhasználói név vagy azonosító',
    'LBL_ERROR_INVALID_TEAM' => 'Érvénytelen csoportnév vagy azonosító',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Érvénytelen fiók név vagy azonosító',
    'LBL_ERROR_INVALID_RELATE' => 'Érvénytelen relációs mező',
    'LBL_ERROR_INVALID_CURRENCY' => 'Érvénytelen pénznem érték',
    'LBL_ERROR_INVALID_FLOAT' => 'Érvénytelen lebegőpontos szám',
    'LBL_ERROR_NOT_IN_ENUM' => 'Ez az érték nincs a legördülő listában. Az engedélyezett értékek:',
    'LBL_NOT_MULTIENUM' => 'Ez nem MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Import nincs beállítva ehhez a modul típushoz',
    'LBL_IMPORT_MODULE_NO_USERS' => 'Vigyázat: Nincsenek felhasználók felvéve a rendszerben. Ha importálást végez anélkül hogy felhasználókat adna a rendszerhez, minden rekord az Adminisztrátor tulajdonába kerül.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'A közzététel nem lehetséges. Már van egy Importálási megfeleltetés, ugyanezen a néven.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Más tulajdonában lévő megfeleltetés közzétételének visszavonása nem lehetséges. Önnek van egy ugyanilyen nevű importálási megfeleltetése.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'A könyvtár',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nem létezik vagy nem írható',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'A file feltöltése sikertelen. Lehetséges hogy a php.ini \'upload_max_filesize\' beállítása túl kis értékre van állítva',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fájl túl nagy. Max:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Change \'upload_maxsize\' in config.php',
    'LBL_MODULE_NAME' => 'Betöltés',
    'LBL_TRY_AGAIN' => 'Próbálja újra',
    'LBL_START_OVER' => 'Start Over',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'The import file contains {0} rows. The optimal number of rows is {1}. More rows may slow the import process. Click OK to continue importing. Click Cancel to revise and re-upload the import file.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Rendszer adminisztrátor felhasználót nem tud importálni',
    'ERR_MULTIPLE' => 'Több oszlop került meghatározásra az azonos mező névvel',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Kötelező mezők hiányoznak:',
    'ERR_MISSING_MAP_NAME' => 'Hiányzik az egyéni megfeleltetés neve',
    'ERR_SELECT_FULL_NAME' => 'Nem jelölhető ki teljes név, ha a keresztnév és vezetéknév ki vannak jelölve.',
    'ERR_SELECT_FILE' => 'Válassza ki a feltölteni kívánt fájlt.',
    'LBL_SELECT_FILE' => 'Válasszon fájlt:',
    'LBL_CUSTOM' => 'Egyéni',
    'LBL_CUSTOM_CSV' => 'Egyedi, vesszővel tagolt fájl',
    'LBL_CSV' => 'Vesszővel tagolt fájl',
    'LBL_EXTERNAL_SOURCE' => 'an external application or service',
    'LBL_TAB' => 'Tabulátorral tagolt fájl',
    'LBL_CUSTOM_DELIMITED' => 'Egyedi tagolt fájl',
    'LBL_CUSTOM_DELIMITER' => 'Mezők által határolt:',
    'LBL_FILE_OPTIONS' => 'Fájl opciók',
    'LBL_CUSTOM_TAB' => 'Egyedi TAB tagolású file',
    'LBL_DONT_MAP' => '-- A mező megfeleltetése nem lehetséges --',
    'LBL_STEP_MODULE' => 'Which module do you want to import data into?',
    'LBL_STEP_1_TITLE' => '1. lépés: Adatforrás kiválasztása és importálás indítása',
    'LBL_CONFIRM_TITLE' => 'Step {0}: Confirm Import File Properties',
    'LBL_CONFIRM_EXT_TITLE' => 'Step {0}: Confirm External Source Properties',
    'LBL_WHAT_IS' => 'Mi az adatforrás?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'The custom mappings for Microsoft Outlook rely on the import file being comma-delimited (.csv). If your import file is tab-delimited, the mappings will not be applied as expected.',
    'LBL_ACT' => 'ACT!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Mentett megfeleltetéseim:',
    'LBL_PUBLISH' => 'Közzétesz',
    'LBL_DELETE' => 'Töröl',
    'LBL_PUBLISHED_SOURCES' => 'Közzétett megfeleltetések:',
    'LBL_UNPUBLISH' => 'Nem teszi közzé',
    'LBL_NEXT' => 'Következő>',
    'LBL_BACK' => '<Vissza',
    'LBL_STEP_2_TITLE' => '2. lépés: Töltse fel az importálandó fájlt',
    'LBL_HAS_HEADER' => 'Van fejléc:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Jegyzet:',
    'LBL_NOW_CHOOSE' => 'Most válassza ki a fájlt az importáláshoz:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'A Microsoft Outlook 98 és 2000 tud vesszővel tagolt értékeket tartalmazó (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. Az Outlookból történő exportáláshoz kövesse az alábbi lépéseket:',
    'LBL_OUTLOOK_NUM_1' => 'Indítsa el az Outlook-t',
    'LBL_OUTLOOK_NUM_2' => 'Válassza a File menü Import és Export... pontját',
    'LBL_OUTLOOK_NUM_3' => 'Válassza az Export fájlba menüpontot és nyomja meg a Tovább gombot',
    'LBL_OUTLOOK_NUM_4' => 'Válassza a vesszővel tagolt értékek (azaz .csv Windows) és nyomja meg a Tovább gombot.<br />Megjegyzés: Előfordulhat hogy telepíteni kell az export komponenst',
    'LBL_OUTLOOK_NUM_5' => 'Válassza a Kapcsolatok mappát és nyomja meg a Tovább gombot. Választhat különböző Kapcsolatok mappákat, ha Önnek több ilyen is van.',
    'LBL_OUTLOOK_NUM_6' => 'Válasszon egy fájlnevet, majd kattintson a Tovább gombra',
    'LBL_OUTLOOK_NUM_7' => 'Kattintson a Befejezésre',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com tud vesszővel tagolt értékeket tartalmazó (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. A Salesforce.com-ról történő exportáláshoz kövesse az alábbi lépéseket:',
    'LBL_SF_NUM_1' => 'Nyissa meg böngészőben a http://www.salesforce.com oldalt, és jelentkezzen be az email címével és jelszavával',
    'LBL_SF_NUM_2' => 'Kattintson a Jelentések fülre a felső menüben',
    'LBL_SF_NUM_3' => 'Fiókok exportálása: Kilkkeljen az Aktív fiókók linkre Kapcsolatok exportálásához: Kattintson a Levelezési listák linkre',
    'LBL_SF_NUM_4' => '1. lépés: Válassza ki a jelentés típusát, válassza a Táblázatos jelentést és nyomja meg a Tovább gombot',
    'LBL_SF_NUM_5' => '2. lépés: Válassza ki a jelentés oszlopai-t amiket exportálni akar, és nyomja meg a Tovább gombot',
    'LBL_SF_NUM_6' => '3. lépés: Válassza ki az információkat az összefoglaláshoz, majd nyomja meg a Tovább gombot',
    'LBL_SF_NUM_7' => '4. lépés: Rendezze a jelentés oszlopait, majd nyomja meg a Tovább gombot.',
    'LBL_SF_NUM_8' => '5. lépés: Válassza ki a riport feltételeit, majd a Kezdő Dátum alatt válasszon egy dátumot, ami elég régi ahhoz hogy minden fiók beépüljön. Exportálhatja a Fiókok egy kisebb csoportját is részletes feltételek megadásával. Ha készen van, nyomja meg a Run Report gombot',
    'LBL_SF_NUM_9' => 'A jelentés létrejön, és az oldal megjeleníti Jelentés generálás állapota: Kész. Most nyomja meg az Export az Excel-be gombot',
    'LBL_SF_NUM_10' => 'Az Export Jelentés: Export File Formátum alatt válassza a vesszővel elválasztott (Comma Delimited) .csv-t, és nyomja meg az Export gombot.',
    'LBL_SF_NUM_11' => 'Egy felugró ablakban megadhatja az export file mentésének helyét.',
    'LBL_IMPORT_ACT_TITLE' => 'Az ACT! képes vesszővel tagolt értékek (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. Az ACT!-ból történő exportáláshoz kövesse az alábbi lépéseket:',
    'LBL_ACT_NUM_1' => 'ACT! indítása',
    'LBL_ACT_NUM_2' => 'Válassza a File menüben a Data Exchange menüpontot, azután az Export... menüpontot',
    'LBL_ACT_NUM_3' => 'Válassza file típusnak a Text-Delimited típust',
    'LBL_ACT_NUM_4' => 'Válasszon egy file nevet és egy elérési utat az exportált adatok számára, és nyomja meg a Tovább gombot',
    'LBL_ACT_NUM_5' => 'Válassza a csak Kapcsolat rekordok-at',
    'LBL_ACT_NUM_6' => 'Kattintson a Beállítások ... gombra',
    'LBL_ACT_NUM_7' => 'Válassza ki a vesszőt , mint a mező elválasztó karaktert',
    'LBL_ACT_NUM_8' => 'Jelölje ki az Igen, exportáld a mezőneveket checkbox-ot, és nyomja meg az OK gombot',
    'LBL_ACT_NUM_9' => 'Kattintson a Tovább gombra',
    'LBL_ACT_NUM_10' => 'Válassza ki az összes rekordot, és nyomja meg a Befejezés gombot',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Sok alkalmazás képes adatokat exportálni a vesszővel tagolt szöveges file (Comma Delimited text file .csv) formátumban, a következő lépésekkel:',
    'LBL_CUSTOM_NUM_1' => 'Indítsa el az alkalmazást és nyissa meg az adatfile-t',
    'LBL_CUSTOM_NUM_2' => 'Válassza ki a Mentés másként ... , vagy Export ... menüpontot',
    'LBL_CUSTOM_NUM_3' => 'Mentse a file-t CSV vagy vesszővel tagolt értékek (Comma Separated Values) formátumban',
    'LBL_IMPORT_TAB_TITLE' => 'Sok alkalmazás képes adatokat exportálni a Tabulátorral Tagolt szöveges file (Tab Delimited text file .csv) formátumban, a következő lépésekkel:',
    'LBL_TAB_NUM_1' => 'Indítsa el az alkalmazást és nyissa meg az adatfile-t',
    'LBL_TAB_NUM_2' => 'Válassza ki a Mentés másként ... , vagy Export ... menüpontot',
    'LBL_TAB_NUM_3' => 'Mentse a file-t TSV vagy Tabulátorral Tagolt Értékek (Tab Separated Values) formátumban',
    'LBL_STEP_3_TITLE' => '3. lépés: Ellenőrizze a mezőket és importáljon',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Possible Duplicates',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Az alul található listában válassza ki az import file azon mezőit, amiket importálni kell a rendszer megfelelő mezőibe. Ha készen van nyomja meg az Import most gombot:',
    'LBL_DATABASE_FIELD' => 'Adatbázis mező',
    'LBL_HEADER_ROW' => 'Fejléc sor',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Select if the top row of the import file is a Header Row containing field labels.',
    'LBL_ROW' => 'Sor',
    'LBL_SAVE_AS_CUSTOM' => 'Mentés mint Egyéni megfeleltetés:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Egyéni megfeleltetés neve:',
    'LBL_CONTACTS_NOTE_1' => 'A Vezetéknév és a Teljes név is legyen megfeleltetve.',
    'LBL_CONTACTS_NOTE_2' => 'Ha a Teljes név meg van feleltetve, akkor az Utónév és a Vezetéknév legyen kihagyva.',
    'LBL_CONTACTS_NOTE_3' => 'Ha a Teljes név meg van feleltetve, akkor a tartalma Vezetéknév és Utónév részekre lesz bontva az adatbázisba illesztéskor.',
    'LBL_CONTACTS_NOTE_4' => 'A 2. és 3. Cím Utca mezők együtt, összefűzve jelennek meg az adatbázisban.',
    'LBL_ACCOUNTS_NOTE_1' => 'A 2. és 3. Cím Utca mezők együtt összefűzve az elsődleges Cím Utca mezőben jelennek meg az adatbázisban.',
    'LBL_REQUIRED_NOTE' => 'Kötelező mező (k):',
    'LBL_IMPORT_NOW' => 'Import most',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Nem tudja megnyitni az importált fájlt olvasásra',
    'LBL_NOT_SAME_NUMBER' => 'Nem volt azonos a mezők száma soronként a fájlban',
    'LBL_NO_LINES' => 'Nem találhatók sorok az importált fájlban.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Az importálandói fájl már feldolgozott, vagy nem létezik',
    'LBL_SUCCESS' => 'Sikeres:',
	'LBL_FAILURE' => 'Importálási hiba:',
    'LBL_SUCCESSFULLY' => 'Sikeresen importálva',
    'LBL_LAST_IMPORT_UNDONE' => 'Az utolsó import visszavonásra került',
    'LBL_NO_IMPORT_TO_UNDO' => 'Nincs visszavonható import',
    'LBL_FAIL' => 'Sikertelen',
    'LBL_RECORDS_SKIPPED' => 'Egy vagy több hiányzó mező miatt kimaradtak rekordok',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Kimaradtak rekordok már létező vagy túl hosszú azonosító miatt (max. 36 karakter)',
    'LBL_RESULTS' => 'Eredmények',
    'LBL_CREATED_TAB' => 'Created Records',
    'LBL_DUPLICATE_TAB' => 'Duplicates',
    'LBL_ERROR_TAB' => 'Errors',
    'LBL_IMPORT_MORE' => 'További importálás',
    'LBL_FINISHED' => 'Vissza a',
    'LBL_UNDO_LAST_IMPORT' => 'Utolsó import visszavonása',
    'LBL_LAST_IMPORTED'=>'Utoljára létrehozott',
    'ERR_MULTIPLE_PARENTS' => 'Csak egy Szülő azonosítót adhat meg',
    'LBL_DUPLICATES' => 'Azonosakat talált',
    'LNK_DUPLICATE_LIST' => 'Duplikációk listájának letöltése',
    'LNK_ERROR_LIST' => 'Töltse le a hibák listáját',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Sikertelenül importált rekordok letöltése.',
    'LBL_UNIQUE_INDEX' => 'Index választása a duplikálási összehasonlításhoz',
    'LBL_VERIFY_DUPS' => 'Ellenőrizze ismétlődő bejegyzéseket a kiválasztott indexekkel szemben.',
    'LBL_INDEX_USED' => 'Használt Index(ek)',
    'LBL_INDEX_NOT_USED' => 'Nem használt index(ek):',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'File was not successfully uploaded.    Check the file permissions in your SuiteCRM installation cache directory.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Egyedi azonosító szám',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Név vagy azonosító',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonszám',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Csoportnév vagy azonosító',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Bármely szöveg',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Bármely szöveg',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Bármely szöveg',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Idő',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Dátum',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Dátum-Idő',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Felhasználó név vagy azonosító',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0 \'Vagy \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-mail cím',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numerikus (nem decimális)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerikus (nem decimális)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numerikus (nem decimális)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerikus (decimális megengedett)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerikus (decimális megengedett)',
    'LBL_DATE_FORMAT' => 'Dátum formátum:',
    'LBL_TIME_FORMAT' => 'Idő formátum:',
    'LBL_TIMEZONE' => 'Időzóna:',
    'LBL_ADD_ROW' => 'Mező hozzáadása',
    'LBL_REMOVE_ROW' => 'Mező törlése',
    'LBL_DEFAULT_VALUE' => 'Alapértelmezett érték',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Speciális beállítások megjelenítése',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Speciális beállítások elrejtése',
    'LBL_SHOW_NOTES' => 'Feljegyzések',
    'LBL_HIDE_NOTES' => 'Hide Notes',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Oszlopok láthatóságának engedélyezése',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Látható oszlopok elrejtése',
    'LBL_SAVE_MAPPING_AS' => 'Megfeleltetés mentése másként',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Egyszeres idézőjel (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dupla idézőjel (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Egyik sem',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Egyéb:',
    'LBL_IMPORT_COMPLETE' => 'Az importálás befejeződött',
    'LBL_IMPORT_COMPLETED' => 'Import Completed',
    'LBL_IMPORT_RECORDS' => 'Rekordok importálása',
    'LBL_IMPORT_RECORDS_OF' => 'a(z)',
    'LBL_IMPORT_RECORDS_TO' => 'ba',
    'LBL_CURRENCY' => 'Pénznem',
	'LBL_CURRENCY_SIG_DIGITS' => 'Pénznem számjeggyel',
    'LBL_NUMBER_GROUPING_SEP' => 'Ezres elválasztó',
    'LBL_DECIMAL_SEP' => 'Tizedesjel',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Név megjelenítés formátuma',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Példa',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '"s" Köszöntés<br />"f" Keresztnév<br />"l" Vezetéknév',
    'LBL_CHARSET' => 'Fájl kódolás',
    'LBL_MY_SAVED_HELP' => 'A mentett leképezés az adott adatforrás egy korábban használt kombinációját, és az adatbázis elérést biztosító mezők megjelenítését határozza meg az importált fájlban.<br /><br />Kattintson a Publikál gombra a más felhasználók számára elérhető leképezéshez.<br />Kattintson a Nem Publikál gombra a más felhasználók számára nem elérhető leképezéshez.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use this option to apply your pre-set import settings, including import properties, mappings, and any duplicate check settings, to this import.<br><br>Click <b>Publish</b> to make the mapping available to other users.<br>Click <b>Un-Publish</b> to make the mapping unavailable to other users.<br>Click <b>Delete</b> to delete a mapping for all users.',
    'LBL_MY_PUBLISHED_HELP' => 'A publikált leképezés az adott adatforrás egy korábban használt kombinációját, és az adatbázis elérést biztosító mezők megjelenítését határozza meg az importált fájlban.',
    'LBL_ENCLOSURE_HELP' => 'A speciális karakter használható csatolva a tervezett terület tartalmához, beleértve az összes karaktert, amelyek elválasztásra szolgálnak.<br /><br />Példa: Ha az elválasztó vessző (,) és a speciális karakter egy idézőjel ("),<br />Az importált "Cupertino, Kalifornia" nevek ugyanabban a mezőben fognak megjelenni Cupertino, Kalifornia-ként.<br />Ha nincsenek speciális karakterek vagy ha a két speciális karakter különböző,<br />A "Cupertino, Kalifornia" nevek a két szomszédos területen, mint "Cupertino és a "California" fognak megjelenni.<br /><br />Megjegyzés: Az importált fájl lehet, hogy nem tartalmaz semmilyen speciális karaktert.<br />Az alapértelmezett speciális karakter az idézőjelet, melyek az Excel-ben a vesszővel és tabulátorral tagolt fájlok.',
    'LBL_DELIMITER_COMMA_HELP' => 'Válassza ezt az opciót, ha a karakter, amely elválasztja a mezőket az import fájlban egy vessző, vagy ha a fájl kiterjesztése. csv.',
    'LBL_DELIMITER_TAB_HELP' => 'Válassza ezt az opciót, ha a karakter, amely elválasztja a mezőket az import fájlban egy TAB, és a fájl kiterjesztése. txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Válassza ezt a lehetőséget, ha az import file-ben található szeparátor karakter nem Vessző, nem Tabulátor és írja be a Határoló mezőbe a karaktert.',
    'LBL_DATABASE_FIELD_HELP' => 'Válasszon egy mezőt az összes mező listájából, ami létezik a modul adatbázisában.',
    'LBL_HEADER_ROW_HELP' => 'Ezek a mezőnevek találhatók az import fájl fejlécében.',
    'LBL_DEFAULT_VALUE_HELP' => 'Jelzi a használni kívánt mezők értékeit a létrehozott vagy naprakész nyilvántartásban, ha a mező  nem tartalmaz adatokat az importált fájlban.',
    'LBL_ROW_HELP' => 'Ez az adat az első a fejléc után az import fájlban.',
    'LBL_SAVE_MAPPING_HELP' => 'Írja be a nevét a megadott adatbázis mezőkhöz a fenti leképezett mezőkbe az importált fájl mezőkben.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Adja meg a beállításokat az import fájlban az adatok megfelelő importálásához. <br />Ezek a beállítások nem írják felül az Ön beállításait. A létrehozott és frissített rekordok tartalmazni fogják beállításait a Fiókom oldalon.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Válasszon mezőket az import file-ban a duplikációk ellenőrzéséhez.<br />Ha a kiválasztott mezők adatai megegyeznek egy már létező rekordban található adatokkal, az új rekord nem jön létre a duplikált adatokat tartalmazó sor adataival.<br />A duplikációkat tartalmazó sorok megtalálhatóak az Importálás Eredményében.',
    'LBL_IMPORT_STARTED' => 'Importálás megkezdődött:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Import fájl beállításai',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'A frissítés nem hajtható végre jogosultság probléma miatt',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Biztos törölni szeretné ezt a megfeleltetést?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'If the import file data was exported from any of the following sources, select which one.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Select the source to automatically apply custom mappings in order to simplify the mapping process (next step).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Use this option to import data directly from an external application or service, such as Gmail.',
    'LBL_EXAMPLE_FILE' => 'Download Import File Template',
    'LBL_CONFIRM_IMPORT' => 'You have selected to update records during the import process. Updates made to existing records cannot be undone. However, records created during the import process can be undone (deleted), if desired. Click Cancel to select to create new records only, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Warning: You have already selected a custom mapping for this import, do you want to continue?',
    'LBL_EXTERNAL_FIELD' => 'External Field',
    'LBL_SAMPLE_URL_HELP' => 'Download a sample import file containing a header row of the module fields. The file can be used as a template to create an import file containing the data that you would like to import.',
    'LBL_AUTO_DETECT_ERROR' => 'The field delimiter and qualifier in the import file could not be detected. Please verify the settings in the Import File Properties.',
    'LBL_MIME_TYPE_ERROR_1' => 'The selected file does not appear to contain a delimited list. Please check the file type. We recommend comma-delimited files (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'To proceed with importing the selected file, click OK. To upload a new file, click Try Again',
    'LBL_FIELD_DELIMETED_HELP' => 'The field delimiter specifies the character used to separate the field columns.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Select a file containing data that is separated by a delimiter, such as a comma- or tab- delimited file.  Files of the type .csv are recommended.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Unable to retrieve source adapter, please try again later.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Unable to retrieve external feed, please try again later.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache directory is not writable.',
    'LBL_ADD_FIELD_HELP' => 'Use this option to add a value to a field in all records created and/or updated. Select the field and then enter or select a value for that field in the Default Value column.',
    'LBL_MISSING_HEADER_ROW' => 'No Header Row Found',
    'LBL_CANCEL' => 'Mégsem',
    'LBL_SELECT_DS_INSTRUCTION' => 'Ready to start importing? Select the source of the data that you would like to import.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Select a file on your computer that contains the data that you would like to import, or download the template to get a head start on creating the import file.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Here is how the the first several rows of the import file appear with the detected file properties. If a header row was detected, it is displayed in the top row of the table. View the import file properties to make changes to the detected properties and to set additional properties. Updating the settings will update the data appearing in the table.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'To avoid creating duplicate records, select which of the mapped fields you would like to use to perform a duplicate check while data is being imported. Values within existing records in the selected fields will be checked against the data in the import file. If matching data is found, the rows in the import file containing the data will be displayed along with the import results (next page). You will then be able to select which of these rows to continue importing.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Sign In',
    'LBL_DUP_HELP' => 'Here are the rows in the import file that were not imported because they contain data that matches values in existing records based on the duplicate check. The data that matches is highlighted. To re-import these rows, download the list, make changes and click <b>Import Again</b>.',
    'LBL_DESELECT' => 'deselect',
    'LBL_SUMMARY' => 'Összefoglaló',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Here are the rows in the import file that were not imported due to errors. To re-import these rows, download the list, make changes and click <b>Import Again</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'The table below contains the fields in the external source and the module fields to which they are mapped. Check the mappings to make sure that they are what you expect, and make changes, as necessary. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_EXTERNAL_MAP_NOTE' => 'The import will be attempted for contacts within all Google Contacts groups.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'The User Names of the newly created users will be the Full Names of the Google Contact by default. The User Names can be changed after the user records are created.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Click <b>Import Now</b> to begin the import. Records will only be created for entries that include last names. Records will not be created for data identified as duplicate based on names and/or email addresses matching existing records.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'This column displays the fields in the external source containing data that will be used to create new records.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indicate a value to use for the field in the created record if the field in the external source contains no data.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.',
    'LBL_SIGN_IN_HELP' => 'To enable this service, please sign in under the External Accounts tab within your user settings page.'
);

global $timedate;
?>