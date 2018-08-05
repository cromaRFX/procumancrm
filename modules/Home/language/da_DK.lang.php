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
    'LBL_MODULE_NAME' => 'Startside',
    'LBL_MODULES_TO_SEARCH' => 'Moduler til søgning',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-mail-adresse:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline efter salgsfase',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'RGRAPH Pipeline By Sales Stage',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampagnes investeringsafkast',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Målestok for mine lukkede salgsmuligheder',
    'LNK_NEW_CONTACT' => 'Opret kontakt',
    'LNK_NEW_ACCOUNT' => 'Opret virksomhed',
    'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
    'LNK_NEW_LEAD' => 'Opret kundeemne',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_NOTE' => 'Opret note eller vedhæftet fil',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_EMAIL' => 'Arkivér e-mail',
    'LNK_COMPOSE_EMAIL' => 'Opret e-mail',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_NEW_BUG' => 'Rapportér fejl',
    'LBL_ADD_BUSINESSCARD' => 'Angiv visitkort',
    'ERR_ONE_CHAR' => 'Indtast mindst et bogstav eller tal til din søgning...',
    'LBL_OPEN_TASKS' => 'Mine åbne opgaver',
    'LBL_SEARCH_RESULTS_IN' => 'ind',
    'LNK_NEW_SEND_EMAIL' => 'Opret e-mail',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til dette område. Kontakt webstedsadministratoren for at få adgang',
    'LBL_NO_RESULTS_IN_MODULE' => '- Ingen resultater -',
    'LBL_NO_RESULTS' => '<h2>Der blev ikke fundet nogen resultater. Søg igen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Søgetip:</h3><ul><li>Sørg for, at du har valgt de korrekte kategorier ovenfor.</li><li>Udvid søgekriterierne.</li><li>Hvis du stadig ikke får nogen resultater, kan du prøve de avancerede søgeindstillinger.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
  'LBL_ADD_DASHLETS' => 'Tilføj SuiteCRM-dashlets',
  'LBL_ADD_PAGE' => 'Tilføj side',
  'LBL_DEL_PAGE' => 'Slet side',
  'LBL_WEBSITE_TITLE' => 'Websted',
  'LBL_RSS_TITLE' => 'Nyheds feed',
  'LBL_DELETE_PAGE' => 'Slet side',
  'LBL_CHANGE_LAYOUT' => 'Skift layout',
  'LBL_RENAME_PAGE' => 'Omdøb side',
  'LBL_CLOSE_DASHLETS' => 'Luk',
  'LBL_OPTIONS' => 'Indstillinger',
  // dashlet search fields
  'LBL_TODAY'=>'I dag',
  'LBL_YESTERDAY' => 'I går',
  'LBL_TOMORROW'=>'I morgen',
  'LBL_LAST_WEEK'=>'Sidste uge',
  'LBL_NEXT_WEEK'=>'Næste uge',
  'LBL_LAST_7_DAYS'=>'De sidste 7 dage',
  'LBL_NEXT_7_DAYS'=>'De næste 7 dage',
  'LBL_LAST_MONTH'=>'Sidste måned',
  'LBL_NEXT_MONTH'=>'Næste måned',
  'LBL_LAST_QUARTER'=>'Sidste kvartal',
  'LBL_THIS_QUARTER'=>'Dette kvartal',
  'LBL_LAST_YEAR'=>'Sidste år',
  'LBL_NEXT_YEAR'=>'Næste år',
  'LBL_LAST_30_DAYS' => 'De sidste 30 dage',
  'LBL_NEXT_30_DAYS' => 'De næste 30 dage',
  'LBL_THIS_MONTH' => 'Denne måned',
  'LBL_THIS_YEAR' => 'I år',

    'LBL_MODULES' => 'Moduler',
    'LBL_CHARTS' => 'Diagrammer',
    'LBL_TOOLS' => 'Funktioner',
    'LBL_WEB' => 'Internettet',
    'LBL_SEARCH_RESULTS' => 'Søgeresultat',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Modul oversigt',
      'Portal' => 'Portal',
      'Charts' => 'Grafer',
      'Tools' => 'Værktøjer',
      'Miscellaneous' => 'Diverse'),
  'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add a new one.',
  'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
  'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generelt',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Kun mine poster',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vis rækker',

  'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
  'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
  'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    'LBL_TRAINING_TITLE' => 'Uddannelse',

  'LBL_CREATING_NEW_PAGE' => 'Opretter ny side...',
  'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add SuiteCRM Dashlets option.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Er du sikker på, at du vil slette denne side?',
  'LBL_SAVING_PAGE_TITLE' => 'Gemmer sidetitel...',
  'LBL_RETRIEVING_PAGE' => 'Henter side...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'My CRM',
  'LBL_HOME_PAGE_2_NAME' => 'Salgsside',
  'LBL_HOME_PAGE_3_NAME' => 'Supportside',
  'LBL_HOME_PAGE_6_NAME' => 'Markedsføringsside',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Sporing',
  'LBL_CLOSE_SITEMAP' => 'Luk',

    'LBL_SEARCH' => 'Søg',
    'LBL_CLEAR' => 'Ryd',

    'LBL_BASIC_CHARTS' => 'Grundlæggende diagrammer',
    'LBL_REPORT_CHARTS' => 'Rapportdiagrammer',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mine favoritrapporter',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Globale teamrapporter',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Mine teamrapporter',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Mine gemte rapporter',

  'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Byg',


    'LBL_VIEWLICENSE_COM' => '<P>This program is free software; you can redistribute it and/or modify it under the terms of the <a href="LICENSE.txt" target="_blank" class="body"> GNU Affero General Public License version 3</a> as published by the Free Software Foundation, including the additional permission set forth in the source code header.</P>',
    'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_AND' => "og",
  'LBL_ARE' => "er",
  'LBL_TRADEMARKS' => 'varemærker',
  'LBL_OF' => 'af',
  'LBL_FOUNDERS' => 'Grundlæggerne',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the SuiteCRM Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop SuiteCRM extensions',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified SuiteCRM extensions',
  'LBL_TRAINING' => 'Uddannelse',
  'LBL_DETAILS_TRAINING' => 'Learn about SuiteCRM using online and interactive learning content',
  'LBL_FORUMS' => 'Fora',
  'LBL_DETAILS_FORUMS' => 'Discuss SuiteCRM with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Søg i videnbasen med emner for brugere og udviklere',
  'LBL_DEVSITE' => 'Udviklerwebsted',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
 'LBL_GET_SUGARCRM_RSS' => 'Get SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'SuiteCRM News',
  'LBL_ALL_NEWS' => 'Alle nyheder',
  'LBL_SOURCE_CODE' => 'Kildekodet',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - et skabelonprogram til PHP skabt af Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - et sæt PHP-klasser, der gør det muligt for udviklere at skabe og bruge webtjenester skabt af NuSphere Corporation og Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Kalender - en kalender til at indtaste datoer skabt af Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - et bibliotek til at oprette PDF-dokumenter skabt af Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - en WebDAV-serverimplementering i PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - biblioteket tilbyder komprimerings- og udpakningsfunktioner til Zip-formaterede arkiver ved Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - en skabelonprogram til PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - UI Library Utilities gør det lettere at implementere avancerede funktioner på klientsiden.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - en fuldt udbygget e-mail-overførselsklasse til PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - giver mulighed for hurtig tovejs blowfish-kryptering uden at kræve Mcrypt PHP-udvidelsen.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - en SAX-parser til HTML og andre forkert udformede XML-dokumenter',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - udvidelser til Yahoo! User Interface Library ved Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player-registrering og integreret script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - en WYSIWYG-editorkontrol til webbrowsere, der gør det muligt for brugeren at redigere HTML-indhold',
  'LBL_SOURCE_EXT' => 'Ext - en JavaScript-ramme på klientsiden til opbygning af webprogrammer.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - en gratis CAPTCHA-tjeneste, der hjælper med at digitalisere bøger, aviser og gamle radioudsendelser.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - en PHP-klasse til generering af PDF-dokumenter.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - En css parser og forminsker',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - En simpel SAML toolkit til PHP',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Overløbet: Rul for et mobil webkit. Født rulning i et element med fast højde/bredde.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas er et JavaScript bibliotek som tilføjer HTML5 lærred støtte til Internet Explorer. Det laver former og billeder via Flash tegning API. Det understøtter stort set alle lærreder og i mange tilfælde virker hurtigere en tilsvarende bibliotekter som bruger VML eller Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit levere værktøjer for at lave kreative interaktive data visualisering for Webben.',
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

  'LBL_DASHLET_TITLE' => 'Mine websteder',
  'LBL_DASHLET_OPT_TITLE' => 'Titel',
  'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
  'LBL_DASHLET_OPT_URL' => 'Webstedsplacering',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet-højde "i pixel"',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Discover SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'More Detail' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Søgning' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Advanceret søgning' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Moduler',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Full Text Search',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifikationer',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Kvik opret',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Velkommen til SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => 'Om',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'Om SuiteCRM',
    'LBL_PARTNERS' => 'Partnere',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite af Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',


    'LBL_LANGUAGE_SPANISH' => 'Spanish Translation Provided by Disytel openConsulting',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM is a fork of SugarCRM. There are many articles on the web that explain the reasons why a fork of SugarCRM became necessary.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - GPL3',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM is completely compatible with SugarCRM 6.5.x',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

);
