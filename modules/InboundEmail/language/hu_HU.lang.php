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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(


	'LBL_RE'					=> 'Válasz:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Hibás Login vagy jelszó',
	'ERR_BODY_TOO_LONG'		=> 'Túl hosszú szöveg, Rövidítse le!',
	'ERR_INI_ZLIB'			=> 'Átmenetileg nem lehet kikapcsolni Zlib tömörítés. "Teszt Beállítás" sikertelen lehet.',
	'ERR_MAILBOX_FAIL'		=> 'Nem sikerült letölteni a mail fiókot.',
	'ERR_NO_IMAP'			=> 'Az IMAP könyvtárak nem találhatók. Kérjük, oldja meg ezt a problémát, mielőtt folytatná bejövő Emailek fogadását.',
	'ERR_NO_OPTS_SAVED'		=> 'Opcionálisan a bejövő Email fiók nincs mentve. Kérjük, ellenőrizze a beállításokat',
	'ERR_TEST_MAILBOX'		=> 'Kérem ellenőrizze a beállításait és próbálja újra.',

	'LBL_APPLY_OPTIMUMS'	=> 'Optimumok alkalmazása',
	'LBL_ASSIGN_TO_USER'	=> 'Felhasználóhoz rendel',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Automata-válasz opciók',
	'LBL_AUTOREPLY'			=> 'Automata-válasz sablon',
	'LBL_AUTOREPLY_HELP'	=> 'Válasszon ki egy automatikus válasz Emailt, hogy tájékoztassa a feladókat, hogy email érkezett.',
	'LBL_BASIC'				=> 'Levelezési fiók információ',
	'LBL_CASE_MACRO'		=> 'Makró beágyazás',
	'LBL_CASE_MACRO_DESC'	=> 'Állítsa be a makrót, ami elemzi és alkalmazza egy adott esetre az importált emaileket.',
	'LBL_CASE_MACRO_DESC2'	=> 'Állítsa be ezt bármilyen értékre, de őrizze meg a "%1"-et.',
	'LBL_CERT_DESC'			=> 'Levelező szerver biztonsági előírása érvényesítésének kikényszerítése - ne használja ha Ön már bejelentkezett.',
	'LBL_CERT'				=> 'Érvényesítés tanúsítvány',
	'LBL_CLOSE_POPUP'		=> 'Ablak bezárása',
	'LBL_CREATE_NEW_GROUP'	=> '--Csoport létrehozása a mentésen--',
	'LBL_CREATE_TEMPLATE'	=> 'Létrehozás',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Aláírt dossziék',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Alapértelmezett:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Alapértelmezett:',
	'LBL_DELETE_SEEN'		=> 'Importálás után az elolvasott levelek törlése',
	'LBL_EDIT_TEMPLATE'		=> 'Szerkeszt',
	'LBL_EMAIL_OPTIONS'		=> 'Email-kezelés beállításai',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Visszapattanó kezelés beállításai',
	'LBL_FILTER_DOMAIN_DESC'=> 'Domain megadása, akinek nem kell automatikus választ küldeni',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Select to automatically create email records in SuiteCRM for all incoming emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Az eset létrehozása opcióhoz, csoport mappát kell választania',
	'LBL_FILTER_DOMAIN'		=> 'Nincs automatikus válasz ehhez a domain-hez',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Optimális kapcsolódás keresése.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Optimális beállítás keresése',
	'LBL_FIND_SSL_WARN'		=> 'Az SSL tesztelése több időt vehet igénybe. Kérjük a türelmét.',
	'LBL_FORCE_DESC'		=> 'Néhány IMAP/POP szervernek szüksége van speciális csatlakozásokra. Ellenőrizze a beállításokat. (pl.: NOTLS)',
	'LBL_FORCE'				=> 'Negatív válasz kikényszerítése',
	'LBL_FOUND_MAILBOXES'	=> 'A következő használható dossziékat talalta.<br>Kattintson az egyikre a kiválasztáshoz:',
	'LBL_FOUND_OPTIMUM_MSG'	=> 'Megtalálta az optimális beállításokat. Nyomja meg a lenti gombot az alkalmazásához.',
	'LBL_FROM_ADDR'			=> 'Küldő cím',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.",
	'LBL_FROM_NAME_ADDR'	=> 'Feladó neve/címe',
	'LBL_FROM_NAME'			=> '"Feladó" neve',
	'LBL_GROUP_QUEUE'		=> 'Hozzárendelés a csoporthoz',
    'LBL_HOME'              => 'Főoldal',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Levelező fiók kezelés',
	'LBL_LIST_NAME'			=> 'Név:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Típus:',
	'LBL_LIST_SERVER_URL'	=> 'Levelező szerver',
	'LBL_LIST_STATUS'		=> 'Állapot',
	'LBL_LOGIN'				=> 'Felhasználó név',
	'LBL_MAILBOX_DEFAULT'	=> 'Bejövő levelek',
	'LBL_MAILBOX_SSL_DESC'	=> 'Használja az SSL-t csatlakozáskor. Hiba esetén ellenőrizze az Ön  PHP-telepítése tartalmazza-e a  "--with-imap-ssl" hivatkozást a konfigurációban.',
	'LBL_MAILBOX_SSL'		=> 'SSL használata',
	'LBL_MAILBOX_TYPE'		=> 'Lehetséges eljárások',
	'LBL_DISTRIBUTION_METHOD' => 'Terítési módszer',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Új eset Automatikus - válasz sablon',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Válasszon ki egy automatikus válasz Emailt, hogy tájékoztassa a címzettet, hogy az esetet létrehozták. Az Email Tárgy sora tartalmazza az eset számát. Ez a válasz csak akkor kerül elküldésre, ha az első levél megérkezik a címzettől.',
	'LBL_MAILBOX'			=> 'Megfigyelt mappák',
	'LBL_TRASH_FOLDER'		=> 'Kuka mappa',
	'LBL_GET_TRASH_FOLDER'	=> 'Kuka mappa létrehozása',
	'LBL_SENT_FOLDER'		=> 'Elküldöttek mappája',
	'LBL_GET_SENT_FOLDER'	=> 'Elküldöttek mappa létrehozása',
	'LBL_SELECT'				=> 'Válasszon',
	'LBL_MARK_READ_DESC'	=> 'Import esetén az üzenetek jelölése olvasott a mail-szerveren, ne törölje!',
	'LBL_MARK_READ_NO'		=> 'Importálás után az email-ek jelölése törölt',
	'LBL_MARK_READ_YES'		=> 'Email-ek a szerveren maradtak az importálás után',
	'LBL_MARK_READ'			=> 'Hagyja az üzenetek a szerveren',
	'LBL_MAX_AUTO_REPLIES'	=> 'Automatikus válaszok száma',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Az automatikus válaszok maximális számának beállítása egy egyedi email címre egy 24 órás időszak alatt.',
	'LBL_PERSONAL_MODULE_NAME' => 'Személyes levelező fiók',
	'LBL_CREATE_CASE'      => 'Eset létrehozása email-ből',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Csoport levelező fiók',
	'LBL_BOUNCE_MODULE_NAME' => 'Visszapattanó postaláda kezelés',
	'LBL_MODULE_TITLE'		=> 'Bejövő Email',
	'LBL_NAME'				=> 'Név',
    'LBL_NONE'              => 'nincs',
	'LBL_NO_OPTIMUMS'		=> 'Nem talál optimálisat. Ellenőrizze a beállításokat és próbálja újra.',
	'LBL_ONLY_SINCE_DESC'	=> 'A PHP nem látja az új üzeneteket a POP3 használata során. Ellenőrizze a kijelölést az utoljára vizsgált leveleknél, amelyek ki voltak választva. Ez jelentősen megnöveli a teljesítményt, ha a levelező szerver nem támogatja az IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Nem. Ellenőrizze újra az összes levelet a mail-szerveren.',
	'LBL_ONLY_SINCE_YES'	=> 'Igen.',
	'LBL_ONLY_SINCE'		=> 'Az utolsó ellenőrzés óta importált:',
	'LBL_OUTBOUND_SERVER'	=> 'Kimenő levelező szerver',
	'LBL_PASSWORD_CHECK'	=> 'Jelszó ellenőrzés',
	'LBL_PASSWORD'			=> 'Jelszó',
	'LBL_POP3_SUCCESS'		=> 'A POP3 teszt csatlakozás sikeres volt.',
	'LBL_POPUP_FAILURE'		=> 'Teszt csatlakozás hiba. A hibaüzenet alul látható.',
	'LBL_POPUP_SUCCESS'		=> 'Teszt csatlakozás rendben. A beállítások érvényben vannak.',
	'LBL_POPUP_TITLE'		=> 'Teszt csatlakozás',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Mappák lista lekérése',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Válasszon előjegyzett mappá(ka)t',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Válasszon kuka mappát',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Elküldöttek mappa kiválasztása',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'A következő mappa % vagy nem létezik, vagy törölték a szerverről',
	'LBL_PORT'				=> 'Levelező szerver port',
	'LBL_QUEUE'				=> 'Levelező fiók lista',
	'LBL_REPLY_NAME_ADDR'	=> 'Válasz név/email',
	'LBL_REPLY_TO_NAME'		=> '"Válasz" név',
	'LBL_REPLY_TO_ADDR'		=> '"Válasz" cím:',
	'LBL_SAME_AS_ABOVE'		=> 'Használva a Küldő Neve/Címe',
	'LBL_SAVE_RAW'			=> 'Nyers forrás mentése',
	'LBL_SAVE_RAW_DESC_1'	=> 'Válassza az "Igen", ha szeretné megőrizni a nyers forrást mindegyik importált emailre.',
	'LBL_SAVE_RAW_DESC_2'	=> 'A nagy mellékletek hibákat okozhatnak, vagy helytelenül beállított adatbázisok.',
	'LBL_SERVER_OPTIONS'	=> 'További beállítások',
	'LBL_SERVER_TYPE'		=> 'Levelező szerver protokoll',
	'LBL_SERVER_URL'		=> 'Levelező szerver címe',
	'LBL_SSL_DESC'			=> 'Ha a levelezési kiszolgáló támogatja a biztonságos socket kapcsolatokat, bekapcsolása esetén kikényszeríti az SSL kapcsolatot az Email importálásakor.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'A kiválasztott csoportnak hozzáférése van a levelező fiókhoz.',
	'LBL_SSL'				=> 'SSL használata',
	'LBL_STATUS'			=> 'Állapot',
	'LBL_SYSTEM_DEFAULT'	=> 'Rendszer alapbeállítás',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Teszt [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Teszt csatlakozás',
	'LBL_TEST_SUCCESSFUL'	=> 'Csatlakozás sikeresen létrejött.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Egy pillanat ...',
	'LBL_TLS_DESC'			=> 'Használja a Szállítási Szintű Biztonságot, amikor a levelező szerverhez csatlakozik - ezt csak akkor használja ha a levelező rendszere támogatja ezt a protokollt.',
	'LBL_TLS'				=> 'TLS használata',
	'LBL_WARN_IMAP_TITLE'	=> 'Bejövő email-ek letiltva',
	'LBL_WARN_IMAP'			=> 'Figyelmeztetés:',
	'LBL_WARN_NO_IMAP'		=> 'Bejövő Email nem működhet anélkül, hogy az IMAP-c-kliens könyvtárakat képes / összekapcsolni a PHP modullal. Kérjük, lépjen kapcsolatba a rendszergazdával, hogy megoldja ezt a problémát.',

	'LNK_CREATE_GROUP'		=> 'Csoport létrehozása',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Új csoport levelező fiók',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Új visszapattanó-kezelő fiók',
	'LNK_LIST_MAILBOXES'	=> 'Minden levelező fiók',
	'LNK_LIST_QUEUES'		=> 'Minden várólista',
	'LNK_LIST_SCHEDULER'	=> 'Ütemező',
	'LNK_LIST_TEST_IMPORT'	=> 'Email import tesztelése',
	'LNK_NEW_QUEUES'		=> 'Új várólista létrehozása',
	'LNK_SEED_QUEUES'		=> 'Várólisták kiemelése a csoportokból',
	'LBL_GROUPFOLDER_ID'	=> 'Csoport mappa azonosító',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Hozzárendelés a csoport mappához',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'A Küldő nevének és email címének engedélyezése válasz címként a felhasználók részére',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Ha ezt a beállítást választja, a Feladó neve és email címe hozzákötődik a csoport email fiókjához, és megjelenik mint választási lehetőség az email szerkesztése közben a Feladó mezőben azoknak a felhasználóknak, akiknek van hozzáférésük a csoport email fiókjához.',
    'LBL_STATUS_ACTIVE'     => 'Aktív',
    'LBL_STATUS_INACTIVE'   => 'Inaktív',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'csoport',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatikus email-import',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Figyelmeztetés: Az automatikus import beállításainak megváltoztatása az adatok elvesztésével járhat.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Figyelmeztetés: Az automatikus importot engedélyezni kell a fiókok automatikus létrehozásához.',
	'LBL_EDIT_LAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
);
?>
