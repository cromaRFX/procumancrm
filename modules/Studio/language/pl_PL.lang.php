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
'LBL_EDIT_LAYOUT'=>'Edytuj Układ',
'LBL_EDIT_ROWS'=>'Edytuj Wiersze',
'LBL_EDIT_COLUMNS'=>'Edytuj Kolumny',
'LBL_EDIT_LABELS'=>'Edytuj Etykiety',
'LBL_EDIT_FIELDS'=>'Edytuj Pola Osobiste',
'LBL_ADD_FIELDS'=>'Dodaj Pola Osobiste',
'LBL_DISPLAY_HTML'=>'Wyświetl Kod HTML',
'LBL_SELECT_FILE'=> 'Wybierz Plik',
'LBL_SAVE_LAYOUT'=> 'Zapisz Układ',
'LBL_SELECT_A_SUBPANEL' => 'Wybierz Subpanel',
'LBL_SELECT_SUBPANEL' => 'Wybierz Subpanel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Narzędzia',
'LBL_STAGING_AREA' => 'Projektowanie Powierzchni (obniżanie i podwyzszanie pozycji)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Zapisywanie Nie powiodło się',
'LBL_CONFIRM_UNSAVE' => 'Wszystkie zmiany zostaną pominięte. Czy na pewno chcesz kontynuować?',
'LBL_PUBLISHING' => 'Udostępnianie',
'LBL_PUBLISHED' => 'Opublikowany',
'LBL_FAILED_PUBLISHED' => 'Udostępnianie Nie Powiodło się ',
'LBL_DROP_HERE' => '[Upuść tutaj]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nazwa',
'LBL_LABEL'=>'Etykieta',
'LBL_MASS_UPDATE'=>'Masowa Aktualizacja',
'LBL_AUDITED'=>'Audyt',
'LBL_CUSTOM_MODULE'=>'Moduł',
'LBL_DEFAULT_VALUE'=>' Wartość Domyślna',
'LBL_REQUIRED'=>'Wymagane',
'LBL_DATA_TYPE'=>'Typ',


'LBL_HISTORY'=>'Historia',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Witamy w Studio!</h2><br> Co chciałbyś dziś zrobić?<br><b> Wybierz poniższe opcje.</b>',
'LBL_SW_EDIT_MODULE'=>'Edytuj Moduł',
'LBL_SW_EDIT_DROPDOWNS'=>'Edytuj Listy Drop-Down',
'LBL_SW_EDIT_TABS'=>'Konfiguruj Zakładki',
'LBL_SW_RENAME_TABS'=>'Zmień Nazwy Zakładek',
'LBL_SW_EDIT_GROUPTABS'=>'Konfiguruj Zakładki Grupowe ',
'LBL_SW_EDIT_PORTAL'=>'Edytuj Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Edytuj Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Napraw Pola Osobiste',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Przenieś Pola Osobiste',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Witamy w Studio!</h2><br><b> Wybierz modul z listy poniżej.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Edytuj Moduł</h2>Co chciałbyś zrobić z tym modułem?<br><b> Wybierz jakie działanie chcesz podjąc .</b>',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Edytuj Pola Osobiste',
'LBL_SMA_EDIT_LAYOUT'=>'Edytuj Layout',
'LBL_SMA_EDIT_LABELS' =>'Edytuj Etykiety',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Przeglądaj',
'LBL_MB_RESTORE'=>'Przywróć',
'LBL_MB_DELETE'=>'Usuń',
'LBL_MB_COMPARE'=>'Porównaj',
'LBL_MB_WELCOME'=> '<h2>Historia</h2><br> Historia pozwala Ci na obejrzenie poprzedniej wersji edytowanego pliku, który obecnie edytujesz. Możesz porównać i przywrócić poprzednią wersję. Jeżeli przywrócisz poprzednią wersje, stanie się ona twoim edytowanym plikiem. Musisz opublikować to, aby mogło być widziane przez wszystkich innych.<br> Co chcesz dzisiaj zrobić?<br><b> Wybierz jedną z opcji poniżej.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Utwórz Listę Drop Down',
'LBL_ED_WELCOME'=>'<h2>Edytor Listy Rozwijalnej</h2><br><b>Możesz edytować istniejące Listy Rozwijalne, lub utworzyć nowe.</b>',
'LBL_DROPDOWN_NAME' => 'Nazwa Dropdown:',
'LBL_DROPDOWN_LANGUAGE' => 'Język Dropdown:',
'LBL_TABGROUP_LANGUAGE' => 'Język:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Edytor Własnych Pól</h2><br><b>Możesz oglądać i edytować istniejące Własne pola, tworzyć nowe, lub wyczyścić cache.</b>',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Zobacz Pola Osobiste',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Utwórz Pole Osobiste',
'LBL_EC_CLEAR_CACHE'=>'Wyczyść Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historia</h2><br><b>Wybierz plik, który chcesz obejrzeć.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Wyświetl Wartość',
'LBL_DD_DATABASEVALUE'=>'Wartości Bazy Danych',
'LBL_DD_ALL'=>'Wszystko',

//BUTTONS
'LBL_BTN_SAVE'=>'Zapisz',
'LBL_BTN_CANCEL'=>'Anuluj [Alt+X]',
'LBL_BTN_SAVEPUBLISH'=>'Zapisz & Publikuj',
'LBL_BTN_HISTORY'=>'Historia',
'LBL_BTN_NEXT'=>'Dalej',
'LBL_BTN_BACK'=>'Powrót',
'LBL_BTN_ADDCOLS'=>'Dodaj kolumnę',
'LBL_BTN_ADDROWS'=>'Dodaj Wiersze',
'LBL_BTN_UNDO'=>'Cofnij',
'LBL_BTN_REDO'=>'Przywróć',
'LBL_BTN_ADDCUSTOMFIELD'=>'Dodaj Pole Osobiste',
'LBL_BTN_TABINDEX'=>'Edytuj Tabbing Order',

//TABS
'LBL_TAB_SUBTABS'=>'Sub Tabs',
'LBL_MODULES'=>'Moduły',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administrator',
'LBL_CONFIGURE_GROUP_TABS' => 'Konfiguruj Zakładki Grupowe ',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Grupa zakładek wyglądu utworzona poniżej będzie używana, gdy użytkownik wybierze pogrupowane zakładki, zamiast zwykle używanego modułu zakładek w Moje konto >> Opcje wyglądu.',
'LBL_RENAME_TAB_WELCOME'=>'Aby zmienić nazwę zakładki, kliknij na dowolną zakładkę, wyświetlisz jej zawartość w tabelce poniżej.',
'LBL_DELETE_MODULE'=>'Usuń moduł&nbsp;<br />z filtra&nbsp;',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Wybierz, aby wyświetlić zakładkę \'Inne\' w pasku nawigacji. Domyślnie zakładka \'Inne\' wyświetla wszystkie moduły, które nie są przypisane do żadnej grupy.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Wybierz dostępny język, edytuj etykiety grupy i kliknij Zapisz i Udostępnij, aby zastosować etykiety w wybranym języku.',
'LBL_ADD_GROUP'=>'Dodaj Filtr',
'LBL_NEW_GROUP'=>'Nowa Grupa',
'LBL_RENAME_TABS'=>'Zmień Nazwy Zakładek',
'LBL_DISPLAY_OTHER_TAB' => 'Wyświetl Zakładkę \'Inne\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Lista Domyślna',
'LBL_ADDITIONAL'=>'Dodatkowy',
'LBL_AVAILABLE'=>'Dostępny',
'LBL_LISTVIEW_DESCRIPTION'=>'Poniżej znajdują się trzy kolumny. Kolumna domyślna zawiera pola, które wyświetlone zostały na liście jako domyślne, dodatkowa kolumna zawiera pola, które użytkownik może wybrać w celu utworzenia własnego widoku, natomiast dostępne kolumny są przeznaczone dla Ciebie jako admin w celu dodawania do domyślnych albo dodatkowych kolumn.',
'LBL_LISTVIEW_EDIT'=>'Edytor Listy Widoku',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Błąd: Takie Pole Już Istnieje',
'ERROR_INVALID_KEY_VALUE'=> "Błąd: Nieważny Klucz: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal SuiteCRM',
'LBL_SMP_WELCOME'=>' Z poniższej listy proszę wybrać moduł, który ma zostać edytowany',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Portal Sync',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Poniżej znajdują się dwie kolumny: Domyślna zawierająca  pola, które będą wyświetlane oraz Dostępna, której pola nie są aktualnie wyświetlane. Możesz przenosić pola z jednej kolumny do drugiej.',
'LBL_SP_STYLESHEET'=>'Załaduj Arkusz Stylów',
'LBL_SP_UPLOADSTYLE'=>'Kliknij na przycisk browse, a następnie wybierz z komputera załadowany arkusz stylów.

',
'LBL_SP_UPLOADED'=> 'Załadowane',
'ERROR_SP_UPLOADED'=>'Upewnij się, że pobierasz arkusz styli css',
'LBL_SP_PREVIEW'=>'Tak będzie wyglądał Twój arkusz stylów',

	'LBL_SAVE' => 'Zapisz [Alt+S]' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Cofnij' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Przywróć' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Usuń' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Dodaj Pole' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maksymalizuj' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimalizuj' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'publikuj' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Dodaj Wiersze' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Dodaj Pole' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Edytuj' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Wybierz język do edycji.',
'LBL_SINGULAR' => 'Pojedyncza Etykieta',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Kliknij <b>Zapisz</b> aby zatwierdzić zmiany.'

);
?>