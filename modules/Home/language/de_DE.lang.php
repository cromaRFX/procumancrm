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
    'LBL_MODULE_NAME' => 'Startseite',
    'LBL_MODULES_TO_SEARCH' => 'Module für Suche',
    'LBL_NEW_FORM_TITLE' => 'Neuer Kontakt',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Meine Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline nach Verkaufsphasen',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'RGRAPH Pipeline By Sales Stage',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampagnen ROI',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Meine abgeschlossenen, gewonnenen Verkaufschancen',
    'LNK_NEW_CONTACT' => 'Kontakt erstellen',
    'LNK_NEW_ACCOUNT' => 'Firma erstellen',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_NEW_LEAD' => 'Interessent erstellen',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_EMAIL' => 'E-Mail archivieren',
    'LNK_COMPOSE_EMAIL' => 'Neue E-Mail',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_NEW_BUG' => 'Fehler melden',
    'LBL_ADD_BUSINESSCARD' => 'Visitenkarte hinzufügen',
    'ERR_ONE_CHAR' => 'Bitte geben Sie mindestens einen Buchstaben oder eine Zahl für Ihre Suche ein...',
    'LBL_OPEN_TASKS' => 'Meine offenen Aufgaben',
    'LBL_SEARCH_RESULTS_IN' => 'in',
    'LNK_NEW_SEND_EMAIL' => 'Neue E-Mail',
    'LBL_NO_ACCESS' => 'Sie haben keinen Zugang zu diesem Bereich. Bitte kontaktieren Sie den Administrator, um Zugang zu erhalten',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Keine Resultate --',
    'LBL_NO_RESULTS' => '<h2>Suche ergab keinen Treffer. Bitte wiederholen Sie die Suche.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Such-Tipps:</h3><ul><li>Stellen Sie sicher, dass Sie die richtigen Kategorien gewählt haben.</li><li>Erweitern Sie Ihre Suchkriterien.</li><li>Falls Sie weiterhin keine Resultate finden, versuchen Sie es mit der Erweiterten Suche in dem jeweiligen Modul...</li></ul>',

  'LBL_RELOAD_PAGE' => 'Bitte <a href="javascript: window.location.reload()">das Fenster neu laden</a> um dieses Dashlet zu verwenden.',
  'LBL_ADD_DASHLETS' => 'SuiteCRM Dashlets hinzufügen',
  'LBL_ADD_PAGE' => 'Seite hinzufügen',
  'LBL_DEL_PAGE' => 'Seite löschen',
  'LBL_WEBSITE_TITLE' => 'Webseite',
  'LBL_RSS_TITLE' => 'News Feed',
  'LBL_DELETE_PAGE' => 'Seite löschen',
  'LBL_CHANGE_LAYOUT' => 'Ansicht ändern',
  'LBL_RENAME_PAGE' => 'Seite umbenennen',
  'LBL_CLOSE_DASHLETS' => 'Schließen',
  'LBL_OPTIONS' => 'Optionen',
  // dashlet search fields
  'LBL_TODAY'=>'Heute',
  'LBL_YESTERDAY' => 'Gestern',
  'LBL_TOMORROW'=>'Morgen',
  'LBL_LAST_WEEK'=>'Letzte Woche',
  'LBL_NEXT_WEEK'=>'Nächste Woche',
  'LBL_LAST_7_DAYS'=>'Letzte 7 Tage',
  'LBL_NEXT_7_DAYS'=>'Nächste 7 Tage',
  'LBL_LAST_MONTH'=>'Letzter Monat',
  'LBL_NEXT_MONTH'=>'Nächster Monat',
  'LBL_LAST_QUARTER'=>'Letztes Quartal',
  'LBL_THIS_QUARTER'=>'Dieses Quartal',
  'LBL_LAST_YEAR'=>'Letztes Jahr',
  'LBL_NEXT_YEAR'=>'Nächstes Jahr',
  'LBL_LAST_30_DAYS' => 'Letzte 30 Tage',
  'LBL_NEXT_30_DAYS' => 'Nächste 30 Tage',
  'LBL_THIS_MONTH' => 'Dieser Monat',
  'LBL_THIS_YEAR' => 'Dieses Jahr',

    'LBL_MODULES' => 'Module',
    'LBL_CHARTS' => 'Diagramme',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Suchergebnis',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Modulansichten',
      'Portal' => 'Portal',
      'Charts' => 'Diagramme',
      'Tools' => 'Tools',
      'Miscellaneous' => 'Verschiedenes'),
  'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add a new one.',
  'LBL_ADDING_DASHLET' => 'SuiteCRM Dashlet wird hinzugefügt ...
',
  'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet hinzugefügt',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Wollen Sie dieses Dashlet wirklich löschen?',
  'LBL_REMOVING_DASHLET' => 'Dashlet wird entfernt ...',
  'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Allgemein',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Nur meine Einträge',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Zeilen zeigen',

  'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
  'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
  'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    'LBL_TRAINING_TITLE' => 'Training',

  'LBL_CREATING_NEW_PAGE' => 'Neue Seite erstellen...',
  'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add SuiteCRM Dashlets option.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Wollen Sie diese Seite wirklich löschen?',
  'LBL_SAVING_PAGE_TITLE' => 'Seitentitel speichern...',
  'LBL_RETRIEVING_PAGE' => 'Seite laden...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'My CRM',
  'LBL_HOME_PAGE_2_NAME' => 'Verkauf',
  'LBL_HOME_PAGE_3_NAME' => 'Support',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_CLOSE_SITEMAP' => 'Schließen',

    'LBL_SEARCH' => 'Suchen',
    'LBL_CLEAR' => 'Leeren',

    'LBL_BASIC_CHARTS' => 'Basisdiagramme',
    'LBL_REPORT_CHARTS' => 'Berichtsdiagramme',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Meine Favoritenberichte',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Globale Teamberichte',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Mein Team-Berichte',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Meine gespeicherten Berichte',

  'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Erstellen',


    'LBL_VIEWLICENSE_COM' => '<P>Dieses Programm ist freie Software; Sie können es unter der <a href="LICENSE.txt" target="_blank" class="body"> GNU General Public License Version 3</a> wie von der „Free Software Foundation“ publiziert, ändern und/oder weitergeben – inklusive der zusätzlichen Berechtigungen in den Kopfzeilen des Quelltextes.</P>',
    'LBL_ADD_TERM_COM' => '<P>Die interaktiven Benutzeroberflächen in modifizierten Quell-  und Objektcodeversionen dieses Programms müssen angemessene rechtliche Hinweise anzeigen, wie unter Abschnitt 5 der GNU General Public License Version 3 verlangt. Gemäß § 7 (b) der GNU General Public License Version 3 müssen diese angemessenen rechtlichen Hinweise dasPowered by SugarCRM" -Logo enthalten. Wenn die Anzeige des Logos aus technischen Gründen nicht zumutbar ist, muss der angemessene rechtliche Hinweis die WortePowered by SugarCRM" beinhalten. </P>"',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'SuiteCRM Community Edition',
  'LBL_AND' => "und",
  'LBL_ARE' => "sind",
  'LBL_TRADEMARKS' => 'Schutzmarken',
  'LBL_OF' => 'der',
  'LBL_FOUNDERS' => 'Gründer',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the SuiteCRM Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop SuiteCRM extensions',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified SuiteCRM extensions',
  'LBL_TRAINING' => 'Training',
  'LBL_DETAILS_TRAINING' => 'Learn about SuiteCRM using online and interactive learning content',
  'LBL_FORUMS' => 'Foren',
  'LBL_DETAILS_FORUMS' => 'Discuss SuiteCRM with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Suchen Sie in der Wissensdatenbank nach Benutzer- und Entwicklerthemen',
  'LBL_DEVSITE' => 'Entwickler Seite',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
 'LBL_GET_SUGARCRM_RSS' => 'Get SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'SuiteCRM News',
  'LBL_ALL_NEWS' => 'Alle Neuigkeiten',
  'LBL_SOURCE_CODE' => 'Quelltext',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'Xtemplate – Eine Template Engine für PHP, erstellt von Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP – Eine Sammlung von PHP Klassen mit denen Entwickler Webservices erstellen und verwenden können. Erstellt von der NuSphere Corporation und Dietrich Ayala.',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar – Ein Kalender zum Eintragen von Daten, erstellt von Mihai Bazon.',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF – Eine Bibliothek zum Erstellen von PDF Dokumenten. Erstellt von Wayne Munro.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP WebDAV Server – Eine WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip – eine Bibliothek die Kompressions- und Extrahierungsfunktionen für Zip Archive liefert. Von Vincent Blavet.',
  'LBL_SOURCE_SMARTY' => 'Smarty – Eine Template Engine für PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library – Die UI Biblitheks Utilities erleichtern die Implementation von umfassenden Funktionen auf Kundenseite.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer – Eine funktionsstarke E-Mail Transfer Klasse für PHP.',
  'LBL_SOURCE_JSHRINK' => 'JShrink - Ein Javascript Minifier geschrieben in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish – Erlaubt eine schnelle zweiseitige Blowfish Verschlüsselung ohne die Mcrypt PHP Erweiterung.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Ein SAX Parser für HTML und andere schlecht geformte XML Dokumente.',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Erweiterungen zu der Yahoo! User Interface Library von Jack Slocum.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject – JavaScript Flash Player Erkennungs- und Einbettungsscript',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE – Ein WYSIWYG Editor für Webbrowser mit dem HTML Inhalte bearbeitet werden können.',
  'LBL_SOURCE_EXT' => 'Ext – Ein kundenseitiges JavaScript Framework, um Webapplikationen zu erstellen',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Ein kostenloser CAPTCHA Service, mit dem Bücher, Zeitungen und alte Radiosendungen digitalisiert werden können.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - Eine PHP Klasse zum Generieren von PDF Dokumenten.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - Ein css Parser und Minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Ein einfaches SAML Werkzeug für PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Der overflow:scroll für das mobile Webkit. Scrolling in einem Elements mit fester Höhe/Breite.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas ist eine JavaScript Bibliothek, die HTML5 Canvas Unterstützung für den Internet Explorer bereitstellt. Sie stellt Formen und Bilder mittels des Flash drawing APIs dar. Sie unterstützt fast alle Canvas APIs und ist, in den meisten Fällen, schneller als vergleichbare Bibliotheken die VML oder Silverlight verwenden.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - Das JavaScript InfoVis Toolkit bietet Werkzeuge, um interaktive Datenvisualisierungen für das Web darzustellen.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - Ein Open-Source, objektorientiertes Web-Applikations-Framework für PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV Daten Parser für PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - PHP Funktionen in JavaScript benutzen',
  'LBL_SOURCE_PHPSQL' => 'PHP-SQL-Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - Eine standardkonforme HTML Filter Bibliothek.',
  'LBL_SOURCE_XHPROF' => 'XHProf - Ein hierarchischer Profiler für PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - Ein PHP client für die verteilte Suchmaschine elasticsearch',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery ist eine kleine, schnelle und funktionsreiche JavaScript Bibliothek.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI ist eine Anzahl von ausgesuchten Interaktionen für die Benutzeroberfläche, Effekten, Widgets und Designs, basierend auf der jQuery JavaScript Bibliothek.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - Die overlibmws Bibliothek benutzt Javascript für DHTML PopUps die als Informations- und Navigationshilfen für Webseiten fungieren.',

  'LBL_DASHLET_TITLE' => 'Meine Seiten',
  'LBL_DASHLET_OPT_TITLE' => 'Titel',
  'LBL_DASHLET_INCORRECT_URL' => 'Es wurde eine inkorrekte Website Adresse angegeben',
  'LBL_DASHLET_OPT_URL' => 'Adresse der Webseite',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet Höhe (in Pixel)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'SuiteCRM entdecken',
	'LBL_POWERED_BY_SUGAR' => 'Powered by SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Weitere Details' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Einfache Suche' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Erweiterte Suche' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Startseiten Symbol',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Gehen Sie mit einem Klick zurück zu Ihrer Startseite.',
    'LBL_TOUR_MODULES' => 'Module',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alle Ihre wichtigen Module sind hier.',
    'LBL_TOUR_MORE' => 'Mehr Module',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Die restlichen Module sind hier.',
    'LBL_TOUR_SEARCH' => 'Volltextsuche',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Die Suche hat sich deutlich verbessert.',
    'LBL_TOUR_NOTIFICATIONS' => 'Benachrichtigungen',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Zugriff auf Profil, Einstellungen und Abmeldung.',
    'LBL_TOUR_QUICKCREATE' => 'Schnelles Erstellen',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Erstellen Sie schnell Datensätze, ohne den Arbeitsbereich zu verlassen.',
    'LBL_TOUR_FOOTER' => 'Einklappbarer Fußbereich',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Der Fußbereich kann ein- und ausgeklappt werden.',
    'LBL_TOUR_CUSTOM' => 'Benuzterdefinierte Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Benutzerdefinierte Integrationen kommen hierher.',
    'LBL_TOUR_BRAND' => 'Ihre Marke',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Hier ist Platz für Ihr Logo. Für weitere Infos, fahren Sie mit der Maus über das Feld.',
    'LBL_TOUR_WELCOME' => 'Willkommen bei SuiteCRM',
    'LBL_TOUR_WATCH' => 'Schauen, was es Neues in SuiteCRM gibt',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Neue vereinfachte Navigationsleiste</li><li class="icon-ok">Neuer einklappbarer Fußbereich</li><li class="icon-ok">Verbesserte Suche</li><li class="icon-ok">Aktualisierte Aktionsmenüs</li></ul><p>und noch viel mehr!</p>"',
    'LBL_TOUR_VISIT' => 'Für weitere Informationen besuchen Sie unsere Applikation',
    'LBL_TOUR_DONE' => 'Sie sind fertig!',
    'LBL_TOUR_REFERENCE_1' => 'Sie können jederzeit unsere',
    'LBL_TOUR_REFERENCE_2' => 'durch denSupport" Link unter dem Profil Reiter aufrufen."',
    'LNK_TOUR_DOCUMENTATION' => 'Dokumentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Holen Sie Ihre neue geteilte Kalender URL.',
    'LBL_ABOUT' => 'Über',
    'LBL_CONTRIBUTORS' => 'Beitragende',
    'LBL_ABOUT_SUITE' => 'Über SuiteCRM',
    'LBL_PARTNERS' => 'Partner',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE Und Wiedervorlagemodule von SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite von Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps von Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO von Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',


    'LBL_LANGUAGE_SPANISH' => 'Spanische Übersetzung von Disytel openConsulting',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM ist eine Abspaltung von SugarCRM. Sie finden im Web viele Artikel, die beschreiben warum diese Abspaltung notwendig wurde.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM ist unter der Open Source Lizenz GPL3 veröffentlicht.',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM ist kompatibel mit SugarCRM 6.5. X',
    'LBL_ABOUT_SUITE_4' => 'Der gesamte Code von SuiteCRM wird als Open Source unter GPL3 veröffentlicht.',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM Support ist in einer freien und in einer bezahlten Variante erhältlich.',

    'LBL_SUITE_PARTNERS' => 'Für eine komplette Liste unserer Partner gehen Sie bitte auf unserer Webseite.',

);
