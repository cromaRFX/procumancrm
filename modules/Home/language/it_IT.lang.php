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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_MODULES_TO_SEARCH' => 'Moduli di Ricerca',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Contatto',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_PHONE' => 'Telefono:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'La mia Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'La mia Pipeline per fase di vendita',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'RGRAPH Pipeline By Sales Stage',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Campagna ROI',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Grafico delle mie Opportunità Chiuse Vinte',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_NEW_LEAD' => 'Nuovo Lead',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
    'LNK_NEW_CALL' => 'Nuova Chiamata',
    'LNK_NEW_EMAIL' => 'Archivia Email',
    'LNK_COMPOSE_EMAIL' => 'Componi Email',
    'LNK_NEW_MEETING' => 'Nuova Riunione',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_NEW_BUG' => 'Report sui Bug',
    'LBL_ADD_BUSINESSCARD' => 'Inserisci Biglietto da Visita',
    'ERR_ONE_CHAR' => 'Per la ricerca si prega di inserire almeno una lettera o un numero...',
    'LBL_OPEN_TASKS' => 'I miei compiti aperti',
    'LBL_SEARCH_RESULTS_IN' => 'in',
    'LNK_NEW_SEND_EMAIL' => 'Scrivi Email',
    'LBL_NO_ACCESS' => 'Non hai accesso a quest´area.  Contatta l´amministratore del sistema per ottenere il permesso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nessun Risultato --',
    'LBL_NO_RESULTS' => '<h2>Non ci sono risultati. Si prega di cercare ancora.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Suggerimenti di ricerca :</h3><ul><li>Assicuratevi di aver selezionato le categorie adeguate.</li><li>Estendere i vostri test di ricerca.</li><li>Se non avete  ancora trovato tutti i risultati provate la ricerca avanzate del modulo.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Si prega di <a href="javascript: window.location.reload()">ricaricare la finestra</a> per usare questa Dashlet.',
  'LBL_ADD_DASHLETS' => 'Aggiungi Dashlets di SuiteCRM',
  'LBL_ADD_PAGE' => 'Aggiungi Pagina',
  'LBL_DEL_PAGE' => 'Elimina Pagina',
  'LBL_WEBSITE_TITLE' => 'Sito Web',
  'LBL_RSS_TITLE' => 'News Feed',
  'LBL_DELETE_PAGE' => 'Cancella Pagina',
  'LBL_CHANGE_LAYOUT' => 'Cambia Layout',
  'LBL_RENAME_PAGE' => 'Rinomina Pagina',
  'LBL_CLOSE_DASHLETS' => 'Chiudi',
  'LBL_OPTIONS' => 'Opzioni',
  // dashlet search fields
  'LBL_TODAY'=>'Oggi',
  'LBL_YESTERDAY' => 'Ieri',
  'LBL_TOMORROW'=>'Domani',
  'LBL_LAST_WEEK'=>'Ultima Settimana',
  'LBL_NEXT_WEEK'=>'Prossima Settimana',
  'LBL_LAST_7_DAYS'=>'Ultimi 7 Giorni',
  'LBL_NEXT_7_DAYS'=>'Prossimi 7 Giorni',
  'LBL_LAST_MONTH'=>'Ultimo Mese',
  'LBL_NEXT_MONTH'=>'Prossimo Mese',
  'LBL_LAST_QUARTER'=>'Ultimo Trimestre',
  'LBL_THIS_QUARTER'=>'Trimestre Corrente',
  'LBL_LAST_YEAR'=>'Anno Precedente',
  'LBL_NEXT_YEAR'=>'Anno Successivo',
  'LBL_LAST_30_DAYS' => 'Ultimi 30 Giorni',
  'LBL_NEXT_30_DAYS' => 'Prossimi 30 Giorni',
  'LBL_THIS_MONTH' => 'Mese Corrente',
  'LBL_THIS_YEAR' => 'Anno Corrente',

    'LBL_MODULES' => 'Moduli',
    'LBL_CHARTS' => 'Tabelle',
    'LBL_TOOLS' => 'Strumenti',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Risultati Ricerca',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Viste modulo',
      'Portal' => 'Portale',
      'Charts' => 'Tabelle',
      'Tools' => 'Strumenti',
      'Miscellaneous' => 'Varie'),
  'LBL_MAX_DASHLETS_REACHED' => 'Avete raggiunto il numero massimo dei dashlets di SuiteCRM che il vostro amministratore ha impostato. Per aggiungerne ancora occorre rimuovere una dashlet di SuiteCRM.',
  'LBL_ADDING_DASHLET' => 'Aggiunta della Dashlet di SuiteCRM in corso...',
  'LBL_ADDED_DASHLET' => 'Dashlet di SuiteCRM Aggiunta',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Sei sicuro di voler rimuovere la Dashlet di SuiteCRM?',
  'LBL_REMOVING_DASHLET' => 'Rimozione della Dashlet di SuiteCRM in corso...',
  'LBL_REMOVED_DASHLET' => 'Dashlet di SuiteCRM Rimossa',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generale',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Solo i miei elementi',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titolo',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vedi righe',

  'LBL_DASHLET_DELETE' => 'Cancella la Dashlet di SuiteCRM',
  'LBL_DASHLET_REFRESH' => 'Riaggiorna la Dashlet di SuiteCRM',
  'LBL_DASHLET_EDIT' => 'Modifica Dashlet',

    'LBL_TRAINING_TITLE' => 'Training',

  'LBL_CREATING_NEW_PAGE' => 'Creazione Nuova Pagina in corso...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Hai creato una nuova pagina. Puoi aggiungere un nuovo contenuto con l´opzione Aggiungi Dashlets di SuiteCRM.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Sei sicuro di voler cancellare questa pagina?',
  'LBL_SAVING_PAGE_TITLE' => 'Salvataggio Titolo Pagina in corso...',
  'LBL_RETRIEVING_PAGE' => 'Recupero Pagina...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Il mio CRM',
  'LBL_HOME_PAGE_2_NAME' => 'Vendite',
  'LBL_HOME_PAGE_3_NAME' => 'Assistenza',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Impostazioni indicatore',
  'LBL_CLOSE_SITEMAP' => 'Chiudi',

    'LBL_SEARCH' => 'Ricerca',
    'LBL_CLEAR' => 'Azzera',

    'LBL_BASIC_CHARTS' => 'Tabelle di Base',
    'LBL_REPORT_CHARTS' => 'Report Tabelle',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'I miei Report preferiti',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Report globali su Gruppo',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Report sul mio Gruppo',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'I miei Report Salvati',

  'LBL_DASHLET_SEARCH' => 'Ricerca Dashlets di SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versione',
    'LBL_BUILD' => 'Build',


    'LBL_VIEWLICENSE_COM' => '

This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.
',
    'LBL_ADD_TERM_COM' => '

The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the "Powered by SuiteCRM" logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words "Powered by SuiteCRM".
',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_AND' => "e",
  'LBL_ARE' => "sono",
  'LBL_TRADEMARKS' => 'trademarks',
  'LBL_OF' => 'di',
  'LBL_FOUNDERS' => 'Fondatori',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Unisciti alla SuiteCRM Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collabora e sviluppa estensioni di SuiteCRM',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Compra e vendi estensioni certificate di SuiteCRM',
  'LBL_TRAINING' => 'Training',
  'LBL_DETAILS_TRAINING' => 'Impara ad usare SuiteCRM usando documentazione online e contenuti interattivi',
  'LBL_FORUMS' => 'Forum',
  'LBL_DETAILS_FORUMS' => 'Discuti di SuiteCRM con utenti e sviluppatori esperti della community',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Cerca knowledge base dell´utente e argomenti per sviluppatori',
  'LBL_DEVSITE' => 'Sviluppatore Sito',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
 'LBL_GET_SUGARCRM_RSS' => 'Get SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'Novità SuiteCRMForge',
  'LBL_ALL_NEWS' => 'Tutte le novità',
  'LBL_SOURCE_CODE' => 'Source Code',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - A template engine for PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - A full featured email transfer class for PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier scritto in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - A free CAPTCHA service that helps to digitize books, newspapers and old time radio shows.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - A PHP class for generating PDF documents.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit. Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
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

  'LBL_DASHLET_TITLE' => 'I miei siti',
  'LBL_DASHLET_OPT_TITLE' => 'Titolo',
  'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
  'LBL_DASHLET_OPT_URL' => 'Indirizzo Sito Web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altezza Dashlet (in pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Scoprire SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Più dettagli' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Ricerca di Base' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Ricerca Avanzata' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icona Home Page',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Torna rapidamente alla dashboard della tua Home Page con un click.',
    'LBL_TOUR_MODULES' => 'Moduli',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tutti i moduli più importanti sono visualizzati qui.',
    'LBL_TOUR_MORE' => 'Più Moduli',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Gli altri moduli sono visualizzati qui.',
    'LBL_TOUR_SEARCH' => 'Ricerca Full Text',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'La ricerca è migliorata ulteriormente.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifiche',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Le notifiche delle applicazioni di SuiteCRM saranno visualizzate qui.',
    'LBL_TOUR_PROFILE' => 'Profilo',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Accesso al profilo, impostazioni e logout.',
    'LBL_TOUR_QUICKCREATE' => 'Creazione Rapida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Creazione rapida di nuovi records senza cambiare pagina.',
    'LBL_TOUR_FOOTER' => 'Piè di pagina comprimibile',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Espandi e comprimi facilmente il piè di pagina.',
    'LBL_TOUR_CUSTOM' => 'Apps Custom',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Le integrazioni Custom saranno visualizzate qui.',
    'LBL_TOUR_BRAND' => 'Il tuo Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Il tuo logo è inserito qui. Cliccaci sopra per maggiori informazioni.',
    'LBL_TOUR_WELCOME' => 'Benvenuto in SuiteCRM',
    'LBL_TOUR_WATCH' => 'Guarda le Novità di SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nuova barra di navigazione semplificata</li><li class="icon-ok">Nuovo piè di pagina comprimibile</li><li class="icon-ok">Motore di ricerca più potente</li><li class="icon-ok">Menu Azioni aggiornato</li></ul><p>e molto ancora!</p>',
    'LBL_TOUR_VISIT' => 'Per maggiori informazioni si prega di visitare la nostra applicazione',
    'LBL_TOUR_DONE' => 'Operazione Completata',
    'LBL_TOUR_REFERENCE_1' => 'Si può sempre fare riferimento al nostro',
    'LBL_TOUR_REFERENCE_2' => 'attraverso il link "Support" nella scheda profilo.',
    'LNK_TOUR_DOCUMENTATION' => 'documentazione',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => 'About',
    'LBL_CONTRIBUTORS' => 'Collaboratori esterni',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE e i moduli di Rischedulazione sono di SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite di Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps di Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Fornito da Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contributo di ResponseTap al rilascio 7.3 di SuiteCRM',


    'LBL_LANGUAGE_SPANISH' => 'Traduzione Spagnola Fornita da Disytel openConsulting',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM è un progetto derivato da SugarCRM. Ci sono molti articoli nel web che spigano le ragioni che hanno reso necessaria questa separazione da SugarCRM.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM è pubblicata con licenza open source - GPL3',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM è totalmente compatibile con SuiteCRM 6.5.x',
    'LBL_ABOUT_SUITE_4' => 'Tutto il codice gestito e sviluppato per il progetto verrà rilasciato come open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'Il supporto di SuiteCRM è disponibile sia nell\'opzione gratuita che a pagamento',

    'LBL_SUITE_PARTNERS' => 'Abbiamo fedeli partner di SuiteCRM che sono appassionati di open source. Per vedere la lista completa, consulta il nostro sito web.',

);
