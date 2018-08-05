<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings  = array(
    'LBL_MODULE_NAME' => 'Főoldal',
    'LBL_MODULES_TO_SEARCH' => 'Modulok keresése',
    'LBL_NEW_FORM_TITLE' => 'Új kapcsolat',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Adatcsatornám',
    'LBL_PIPELINE_FORM_TITLE' => 'Adatcsatorna - Eladások szerint',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'RGRAPH Pipeline By Sales Stage',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampány megtérülése',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Lezárt, sikeres lehetőségeim mutatója',
    'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
    'LNK_NEW_ACCOUNT' => 'Kliens létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_NEW_LEAD' => 'Ajánlás létrehozása',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány létrehozása',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_EMAIL' => 'Email archíválása',
    'LNK_COMPOSE_EMAIL' => 'Email írása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_NEW_BUG' => 'Hibajelentés',
    'LBL_ADD_BUSINESSCARD' => 'Adja meg a névjegykártya adatait',
    'ERR_ONE_CHAR' => 'Kérjük, adjon meg legalább egy betűt vagy számot a keresésre ...',
    'LBL_OPEN_TASKS' => 'Nyitott feladataim',
    'LBL_SEARCH_RESULTS_IN' => 'A',
    'LNK_NEW_SEND_EMAIL' => 'Email írása',
    'LBL_NO_ACCESS' => 'Ön nem férhet hozzá ehhez az oldalhoz. Lépjen kapcsolatba a webhely rendszergazdájával, a hozzáféréshez',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nincs találat --',
    'LBL_NO_RESULTS' => 'Nem volt találat. Kérjük, keressen újra!',
    'LBL_NO_RESULTS_TIPS' => 'Győződjön meg róla, hogy a megfelelő kategóriát választotta ki.<br />Bővítse a keresési feltételeket.<br />Ha még mindig nem talál semmilyen eredményt próbálja meg a speciális keresési lehetőséget.',

  'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
  'LBL_ADD_DASHLETS' => 'Sugar Dashlet hozzáadása',
  'LBL_ADD_PAGE' => 'Oldal hozzáadása',
  'LBL_DEL_PAGE' => 'Oldal törlése',
  'LBL_WEBSITE_TITLE' => 'Honlap',
  'LBL_RSS_TITLE' => 'Hírforrás',
  'LBL_DELETE_PAGE' => 'Oldal törlése',
  'LBL_CHANGE_LAYOUT' => 'Elrendezés váltása',
  'LBL_RENAME_PAGE' => 'Oldal átnevezése',
  'LBL_CLOSE_DASHLETS' => 'Bezár',
  'LBL_OPTIONS' => 'Opciók',
  // dashlet search fields
  'LBL_TODAY'=>'Ma',
  'LBL_YESTERDAY' => 'Tegnap',
  'LBL_TOMORROW'=>'Holnap',
  'LBL_LAST_WEEK'=>'Múlt hét',
  'LBL_NEXT_WEEK'=>'Következő hét',
  'LBL_LAST_7_DAYS'=>'Utolsó 7 nap',
  'LBL_NEXT_7_DAYS'=>'Következő 7 nap',
  'LBL_LAST_MONTH'=>'Múlt hónap',
  'LBL_NEXT_MONTH'=>'Következő hónap',
  'LBL_LAST_QUARTER'=>'Elmúlt negyedév',
  'LBL_THIS_QUARTER'=>'Aktuális negyedév',
  'LBL_LAST_YEAR'=>'Múlt év',
  'LBL_NEXT_YEAR'=>'Következő év',
  'LBL_LAST_30_DAYS' => 'Elmúlt 30 nap',
  'LBL_NEXT_30_DAYS' => 'Következő 30 nap',
  'LBL_THIS_MONTH' => 'Aktuális hónap',
  'LBL_THIS_YEAR' => 'Aktuális év',

    'LBL_MODULES' => 'Modulok',
    'LBL_CHARTS' => 'Grafikonok',
    'LBL_TOOLS' => 'Eszközök',
    'LBL_WEB' => 'Internet',
    'LBL_SEARCH_RESULTS' => 'Keresés eredménye',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Modul Nézetek',
      'Portal' => 'Portal',
      'Charts' => 'Diagramok',
      'Tools' => 'Eszközök',
      'Miscellaneous' => 'Vegyes'),
  'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add a new one.',
  'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
  'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Általános',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Szűrők',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Csak a saját tételeim',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulus',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Sorok megjelenítése',

  'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
  'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
  'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    'LBL_TRAINING_TITLE' => 'Tréning',

  'LBL_CREATING_NEW_PAGE' => 'Új oldal létrehozása...',
  'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add SuiteCRM Dashlets option.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Valóban törölni akarja ezt a lapot?',
  'LBL_SAVING_PAGE_TITLE' => 'Az oldal címének mentése...',
  'LBL_RETRIEVING_PAGE' => 'Oldal visszaállítása...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'My CRM',
  'LBL_HOME_PAGE_2_NAME' => 'Eladások',
  'LBL_HOME_PAGE_3_NAME' => 'Támogatás',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Követés',
  'LBL_CLOSE_SITEMAP' => 'Bezár',

    'LBL_SEARCH' => 'Keres',
    'LBL_CLEAR' => 'Töröl',

    'LBL_BASIC_CHARTS' => 'Alap diagramok',
    'LBL_REPORT_CHARTS' => 'Diagramok lekérése',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Kedvenc jelentéseim',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Globális csoport jelentései',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Csoportom jelentései',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Mentett jelentéseim',

  'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Verzió',
    'LBL_BUILD' => 'Felépít',


    'LBL_VIEWLICENSE_COM' => '<P>This program is free software; you can redistribute it and/or modify it under the terms of the <a href="LICENSE.txt" target="_blank" class="body"> GNU Affero General Public License version 3</a> as published by the Free Software Foundation, including the additional permission set forth in the source code header.</P>',
    'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_AND' => "és",
  'LBL_ARE' => "van(nak)",
  'LBL_TRADEMARKS' => 'védjegyek',
  'LBL_OF' => 'A',
  'LBL_FOUNDERS' => 'Szerzők',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the SuiteCRM Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop SuiteCRM extensions',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified SuiteCRM extensions',
  'LBL_TRAINING' => 'Tréning',
  'LBL_DETAILS_TRAINING' => 'Learn about SuiteCRM using online and interactive learning content',
  'LBL_FORUMS' => 'Fórumok',
  'LBL_DETAILS_FORUMS' => 'Discuss SuiteCRM with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Alapismeretek keresése a fejlesztői és felhasználói topikokban',
  'LBL_DEVSITE' => 'Fejlesztői oldal',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
 'LBL_GET_SUGARCRM_RSS' => 'Get SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'SuiteCRM News',
  'LBL_ALL_NEWS' => 'Összes hír',
  'LBL_SOURCE_CODE' => 'Forráskód',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Egy sablon motor PHP-ben. Létrehozta Debreceni Barnabás',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - készlet PHP-hez ami lehetővé teszi a fejlesztők számára webszervizek készítését. Készítette NuSphere Corporation és Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS naptár - Naptár dátumok beviteléhez. Készítette Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Könyvtár PDF dokumentumok készítéséhez. Készítette Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP-WebDav_Server - WebDAV szerver megvalósítás PHP-ben',
  'LBL_SOURCE_PCLZIP' => 'PcIZip - Könyvtár tömörítő és kicsomagoló funkciókkal ZIP formátumú mentésekhez. Készítette Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Minta modul PHP-hez',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - UI Library Utilities elősegíti a kliens oldali felhasználás megvalósítását',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Mindenre kiterjedő email továbbítás PHP-hez',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Lehetővé teszi a kétirányú szimmetrikus blokkrejtjel titkosítást anélkül hogy megkövetelné a MCrypt PHP bővítést.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - SAX szintaktikai elemző HTML-hez és hibásan formázott XML dokumentumokhoz',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Kiterjesztés Yahoo! felhasználói felület könyvtárhoz. Készítette Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player parancsfájl felismeréséhez és beágyazásához.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYG szerkesztő ellenőrző azon böngészőkhöz, amelyek lehetővé teszik a felhasználónak HTML tartalmak szerkesztését.',
  'LBL_SOURCE_EXT' => 'Ext - Felhasználó oldali JavaSceipt keretrendszer webes alkalmazások készítéséhez.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Ingyenes CAPTCHA szervíz könyvek, újságok és régi rádiós műsorok digitalizálásához.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PHP gyűjtemény PDF dokumentumok készítéséhez.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - css szintaktikai elemző',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Egyszerű SAML csomag PHP-hez',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Túlcsordulás: scroll mobil csomaghoz. Natív görgetési lehetőség fix szélességű/magasságú elemen belül.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas egy JavaScript könyvtár, amely HTML5 Canvas támogatást ad Internet Exprorer-hez. A Flash rajzoló API segítségével legenerálja a görbéket és a képeket. Támogatja az összes Canvas API-t, és a legtöbb esetben jóval gyorsabb, mint a hasonló VML vagy Silverlight megoldásokat használó könyvtárak.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis - Ez a csomag a weben megjelenő Interaktív Adat Vizualizációk létrehozásához (megjelenítéséhez) nyújt támogatást.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser for PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Use PHP functions in JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - PHP client for the distributed search engine elasticsearch ',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery is a fast, small, and feature-rich JavaScript library.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

  'LBL_DASHLET_TITLE' => 'Oldalaim',
  'LBL_DASHLET_OPT_TITLE' => 'Titulus',
  'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
  'LBL_DASHLET_OPT_URL' => 'Weboldal helye',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet magasság (képpontban)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Fedezze fel a SuiteCRM-et!',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'További részletek' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Alap' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Haladó' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Modulok',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Teljes szöveges keresés',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Értesítések',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Gyors létrehozás',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => 'Névjegy',
    'LBL_CONTRIBUTORS' => 'Közreműködők',
    'LBL_ABOUT_SUITE' => 'SuiteCRM névjegy',
    'LBL_PARTNERS' => 'Partnerek',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE és ütemező modulok SalesAgility -től.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite fejlesztője Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps fejlesztője Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM logó tervezője: Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',


    'LBL_LANGUAGE_SPANISH' => 'Spanyol fordítás felelőse Distyel openConsulting.',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM a SugarCRM egy másik ága . Sok cikket talál az interneten, amely elmagyarázza, hogy ez az elágazás miért vált szükségessé.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM nyílt forráskódú GPL3 licensz szerint publikált.',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM teljesen kompatibilis a SugarCRM 6.5.x -el.',
    'LBL_ABOUT_SUITE_4' => 'Minden SuiteCRM kód a nyílt forráskódú GNU GPL3 szerint fejlesztett és terjesztett.',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM támogatás ingyenes és fizetős konstrukciókban. ',

    'LBL_SUITE_PARTNERS' => 'Mi hűséges SuitCRM partnerek vagyunk, akik elkötelezettek a nyílt forráskód iránt. Ha meg szeretné nézni a teljes partnerlistát, akkor kattintson a honlapunkra!',

);
