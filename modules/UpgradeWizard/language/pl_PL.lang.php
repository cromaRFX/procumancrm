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
	'DESC_MODULES_INSTALLED'					=> 'Następujący moduły zostały zainstalowane:',
	'DESC_MODULES_QUEUED'						=> 'Następujące moduły są gotowe do instalacji:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nie można określić Grupy',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'NIe można określić właściciela',
	'ERR_UW_CONFIG_WRITE'						=> 'Błąd uaktualnienia informacji o nowej wersji w pliku config.php.',
	'ERR_UW_CONFIG'								=> 'Uczyń plik config.php zapisywalnym i załaduj ponownie tę stronę.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Niezapisywalny katalog',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Plik nie został skopiowany',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem z usunięciem pakietu',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Plik nie może być odczytany.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Plik nie może zostać przesunięty, ani nadpisany',
	'ERR_UW_FLAVOR_2'							=> 'Ulepsz system:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM system:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'Plik ./upgradeWizard.log nie mógł być stworzony/zapisany.  Popraw uprawnienia w Twoim katalogu SugarCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'Funkcja mbstring.func_overload ma ustawioną wartość na więcej niż 1.  Zmień ją w twoim php.ini i przeładuj server.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM wymaga wersji MySQL  4.1.2 lub wyższej. Znaleziono:',
	'ERR_UW_OCI8_VERSION'				        => 'Your version of Oracle is not supported by SuiteCRM.  You will need to install a version that is compatible with the SuiteCRM application.  Please consult the Compatibility Matrix in the Release Notes for supported Oracle Versions. Current version: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Podaj nazwę pliku i spróbuj ponownie!<br>\n',
	'ERR_UW_NO_FILES'							=> 'Wykryto błąd. Nie znaleziono plików do sprawdzenia.',
	'ERR_UW_NO_MANIFEST'						=> 'Archiwum zip nie zawiera pliku manifest.php. Nie można kontynuować',
	'ERR_UW_NO_VIEW'							=> 'Określono nieprawidłowo widok.',
	'ERR_UW_NO_VIEW2'							=> 'Widok nie został zdefiniowany. Idź do głównej strony panelu administracyjnego  aby przejśc do tej strony.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Nieprawidłowy plik do załadownia.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nie moge utworzyć katalogu tymczasowego. Sprawdź prawa do plików.',
	'ERR_UW_ONLY_PATCHES'						=> 'Tylko na tej stronie możesz załadować poprawki.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Znaleziono błędy podzczas wstępnej instalacji',
	'ERR_UW_UPLOAD_ERR'							=> 'Wystąpił problem podczas załadowania pliku. Spróbuj jeszcze raz!<br>\n',
	'ERR_UW_VERSION'							=> 'Wersja systemu SugarCRM:',
	'ERR_UW_WRONG_TYPE'							=> 'Ta strona nie może być wyświetlona',
	'LBL_BUTTON_BACK'							=> 'Powrót',
	'LBL_BUTTON_CANCEL'							=> 'Skasuj',
	'LBL_BUTTON_DELETE'							=> 'Usuń pakiet',
	'LBL_BUTTON_DONE'							=> 'Zrobione',
	'LBL_BUTTON_EXIT'							=> 'Wyjdź',
	'LBL_BUTTON_INSTALL'						=> 'Wstępna instalacja',
	'LBL_BUTTON_NEXT'							=> 'Dalej',
	'LBL_BUTTON_RECHECK'						=> 'Sprawdź ponownie',
	'LBL_BUTTON_RESTART'						=> 'Uruchom ponownie',

	'LBL_UPLOAD_UPGRADE'						=> 'Załaduj poprawkę:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Nie znaleziono pliku aktualizacji',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Kopia zapasowa pliku',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Pliki określające z tego ulepszenia znajdują się w',
	'LBL_UW_BACKUP'								=> 'Kopia zapasowa pliku',
	'LBL_UW_CANCEL_DESC'						=> 'Kreator ulepszeń został zatrzymany. Wszystkie pliki tymczasowe i załadowanie archiwa zip zostały usunięte.<br><br>Naciśnij Zrobione, aby wznowić działanie kreaotra.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Zmiany schematu kodowania znaków',
	'LBL_UW_CHECK_ALL'							=> 'Sprawdź wszystko',
	'LBL_UW_CHECKLIST'							=> 'Kroki podczas ulepszania',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Kopia bezpieczeństwa nadpisanych plików znajdują sie w następującym katalogu: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Połącz ręcznie następujące pliki:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proces Ulepszania: Połączenie ręczne plików',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Użyj najlepszej dla siebie metody porównania plików podczas scalania.  Do czasu zakończenia procesu ulepszania Twoja instalacja jest niestabilna.',
	'LBL_UW_COMPLETE'							=> 'Zakończono',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Nowa wersja Sugar zawiera nową umowę licencyjną. Czy chcesz kontynuować?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Wszystkie wymagane ustawienia systemowe są właściwe',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Ustawienia PHP: Wywołanie poszczególnych funkcji',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Moduł cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Moduł IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Moduł MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parametr MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Ustawienie PHP: Limit pamięci',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Setting: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'Serwer MS SQL  i PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimalna wersja MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Database Version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Położenie pliku php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimalna wersja PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Ustawienie PHP: Tryb bezpieczny',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Sprawdzenie ustawień serwera',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Wykryte ustawienia',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parser XML',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Support',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'PCRE Version',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Pliki zostały skopiowane pomyślnie',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Zmiany dostosowywanych schematów tabeli',

	'LBL_UW_DB_CHOICE1'							=> 'Kreator aktualizacji skryptem SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Ręczne zapytania SQL',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT nie powiódł się - rezultat porównania rózni się',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Brak uprawnień',
	'LBL_UW_DB_ISSUES'							=> 'Wersja bazy',
	'LBL_UW_DB_METHOD'							=> 'Metoda aktualizacji bazy',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [tabela] ADD COLUMN [kolumna]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [tabela] CHANGE COLUMN [kolumna]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [tabela]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [tabela]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [tabela] DROP COLUMN [kolumna]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [tabela]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Nie stwierdzono braku uprawnień',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [tabela]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [tabela]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [tabela]',
	'LBL_UW_DB_PERMS'							=> 'Niezbędne uprawnienia',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Następujące ulepszenia zostały zainstalowane:',
	'LBL_UW_END_DESC'							=> 'Gratulacje, Twój system jest teraz ulepszony.',
	'LBL_UW_END_DESC2'							=> 'Jeżeli zdecydowałeś o ręcznym wykonaniu kroków, takich jak łączenie plików, lub zapytania SQL, zrób to teraz.  Twój system będzie niestabilny, dopóki nie wykonasz tych kroków.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Aktualizacja zakończona.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Kliknij Zrobione, aby wyjść z Kreatora aktualizacji.',
	'LBL_UW_END_LOGOUT'							=> 'Proszę się wylogować, jeżeli planujesz przejść dalej w procesie ulepszania.',
	'LBL_UW_END_LOGOUT2'						=> 'Wyloguj',
	'LBL_UW_REPAIR_INDEX'						=> 'W celu zwiększenia wydajności bazy, wykonaj skrypt <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a>',

	'LBL_UW_FILE_DELETED'						=> "został usunięty.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupa',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Prawa dostępu dla pliku',
	'LBL_UW_FILE_ISSUES'						=> 'Wersja Pliku',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Plik wymaga ręcznego porównania',
	'LBL_UW_FILE_NO_ERRORS'						=> 'Wszystkie zapisywalne pliki',
	'LBL_UW_FILE_OWNER'							=> 'Właściciel',
	'LBL_UW_FILE_PERMS'							=> 'Prawa dostępu',
	'LBL_UW_FILE_UPLOADED'						=> 'został załadowany',
	'LBL_UW_FILE'								=> 'Nazwa pliku',
	'LBL_UW_FILES_QUEUED'						=> 'Następujące ulepszenia są przygotowane do instalacji',
	'LBL_UW_FILES_REMOVED'						=> "Zaznaczone pliki zostały usunięte.",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Kliknij Dalej, aby załadować pakiety aktualizacji.",
	'LBL_UW_FROZEN'								=> 'Wymagane kroki muszą być zakończone, przed kontynuacją.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ukryj szczegóły',
	'LBL_UW_IN_PROGRESS'						=> 'W trakcie',
	'LBL_UW_INCLUDING'							=> 'Zawiera',
	'LBL_UW_INCOMPLETE'							=> 'Niekompletny',
	'LBL_UW_INSTALL'							=> 'Plik INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Ręczne scalanie',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Moduł gotowy do odinstlowania.  Kliknij \"Wykonaj\" aby kontynuować deinstalację.<br>",
	'LBL_UW_MODULE_READY'						=> "Moduł jest gotowy do instalacji.  Kliknij  <b>Wykonaj</b> aby kontynuować instalację.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nie wykryto zapisanych ulepszeń.',
	'LBL_UW_NONE'								=> 'Nic',
	'LBL_UW_NOT_AVAILABLE'						=> 'Niedostępne',
	'LBL_UW_OVERWRITE_DESC'						=> "Wszystkie zmieniane pliki zostaną nadpisane, łącznie ze zmianami w kodzie i wzorcami stworzonymi przez Ciebie. Czy na pewno chcesz kontynuować?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Nadpisz wszystkie pliki',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ręczne łączenie - zachowaj wszystko',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metoda łączenia',
	'LBL_UW_PATCH_READY'						=> 'Poprawka jest gotowa do instalacji. Kliknij klawisz <b>Wykonaj</b> poniżej, aby kontynuować proces instalacji',
	'LBL_UW_PATCH_READY2'						=> '<h2>Uwaga: Znaleziono własne formaty wyglądu</h2><br>Następujące pliki zawierają nowe pola, lub modyfikacje wygladu, wykonanego przez moduł Studio. Poprawka, która chcesz zainstalować, również zawiera takie modyfikacje Dla <u>każdego pliku </u> możesz:<br><ul><li>[<b>Domyślnie</b>] Zachować swoje wersje, pozostawiając puste pole wyboru. Zmiany zawarte w poprawce zostaną zignorowane. </li>lub<li>Zatwierdzić zmiany z plików poprawki przez zaznaczenie pola wyboru. Wtedy Twoje zmiany będą wymagały ponownego załadowania porzez moduł Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Utworzyć zadanie dla łączenia ręcznego?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Wstepne sprawdzanie zakończone',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Różniące się',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Czy wysłać wiadomość email, przypominającą o ręcznym scaleniu?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Pliki wyminenione poniżej zostały zmodfikowane. Odznacz elementy, które wymagają ręcznego scalenia. <i>Wszystkie wykryte zmiany wyglądu zostaną automatycznie odznaczone; wszystkie zaznaczone zostaną nadpisane.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nie jest wymagane żadne ręczne scalanie.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nie wymagane.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automatycznie zabezpieczone Pliki:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Wszystkie testy wstępnego sprawdzania zostały wykonane poprawnie. Naciśnij dalej, aby zatwierdzić te zmiany.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Kliknij Dalej, aby skopiować zaktualizowane pliki do systemu.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Uwaga: Dalszy proces aktualizacji jest obowiązkowy, i kliknięcie Dalej zobowiązuje do zakończenia procesu. Jeśli nie chcesz kontynuować, kliknij przycisk Anuluj.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Zaznacz wszystkie pliki',

	'LBL_UW_REBUILD_TITLE'						=> 'Przebuduj rezultaty',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schemat zmian',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Pokaż wykryte ustawienia',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Pokaż brakujące prawa dostępu do bazy',
	'LBL_UW_SHOW_DETAILS'						=> 'Pokaż szczegóły',
	'LBL_UW_SHOW_DIFFS'							=> 'Pokaż pliki wymagające ręcznego scalenia',
	'LBL_UW_SHOW_NW_FILES'						=> 'Pokaż pliki z niewłaściwymi prawami dostępu',
	'LBL_UW_SHOW_SCHEMA'						=> 'Pokaż skrypt zmian',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Pokaż złe zapytania',
	'LBL_UW_SHOW'								=> 'Pokaż',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'pominięte pliki',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Przeskakuje krok nadpisywania plików - Wybrano ręczne scalanie.',
	'LBL_UW_SQL_RUN'							=> 'Sprawdź kiedy SQL był uruchomiony ręcznie',
	'LBL_UW_START_DESC'							=> 'Witamy w kreatorze instalacyjnym SugarCRM. Ten kreator jest zaprojektowany, aby asystować admninistratorom podczas ulepszania ich wersji SugarCRM. Proszę wykonywać uważnie podane instrukcje.',
	'LBL_UW_START_DESC2'						=> 'Zdecydowanie polecamy wykonanie ulepszania na kopii Twojego serwera produkcyjnego. Wykonaj kopię bezpieczeństwa plików systemu (wszystkich, które znajdują sie w Twoim folderze z SugarCRM). Przed przeprowadzeniem tej operacji - zapobieganie jest zawsze lepsze, niż leczenie',
	'LBL_UW_START_DESC3'						=> 'Kliknij Dalek, aby wykonać sprawdzenie systemu w celu upewnienia się, że system jest gotowy do aktualizacji. Sprawdzenie obejmuje uprawnienia plików, przywileje baz danych oraz ustawienia serweru.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Nowy kreator ulepszeń podsumuje teraz proces ulepszania. Kontynuuj.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Witamy w nowym kreatorze ulepszeń',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Sprawdzam. Proszę czekać. Może to trwać do 30 sekund.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Znajdywanie wszystkich plików spełniających warunki.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Plików',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Znaleziono',

	'LBL_UW_TITLE_CANCEL'						=> 'Kasuj',
	'LBL_UW_TITLE_COMMIT'						=> 'Wykonaj ulepszenie',
	'LBL_UW_TITLE_END'							=> 'Sprawozdanie',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Sprawdzanie wstępne',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Sprawdzanie systemu',
	'LBL_UW_TITLE_UPLOAD'						=> 'Załaduj Ulepszenie',
	'LBL_UW_TITLE'								=> 'Kreator instalacji',
	'LBL_UW_UNINSTALL'							=> 'Odinstaluj',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Zaakceptuj licencję',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Konwertuj Licencję',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Ulepszone/dostosowywane moduły',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Następujące moduły wykryto jako dostosowywane i zabezpieczone',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Następujące moduły są dostosowywane przez Studio i zostały ulepszone.',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'The SuiteCRM Community Edition 5.0 uses GNU Affero General Public License version 3. This upgrade will convert your existing license to the new license displayed below.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Rozpoczęto',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Sprawdzanie systemu w toku',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Sprawdzanie licencji w toku',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Testowanie wstępnej instalacji w toku',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopiowanie pliku w toku',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Trwa wykonywanie ulepszeń',
    'LBL_UW_COMMIT_DESC'						=> 'Kliknij Dalej, aby uruchomić skrypty aktualizacji.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Aktualizacja skryptów w toku',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Tworzone jest podsumowanie ulepszenia',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'w toku',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Czas, który pozsotał',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Ulepszenie zatrzymane. Trwa czyszczenie',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Ulepszanie może zająć trochę czasu',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Testowanie połączenia',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Trwa pobieranie poprawek...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Czy chcesz, aby Sugar pominął nieaktualne schematy z v. 451?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Kreator ulepszeń pomija stare schematy z v. 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Ręczne usunięcie starych schematów po instalacji',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metoda usunięcia starych schematów',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Pokaż stare schematy, które mogą zostać usunięte',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Pominięte zapytania',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Jest wymagana co najmniej wersja php 5.0.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Twoja wersja PHP nie jest wspierana przez Sugar. Musisz zainstalować wersję, która jest kompatybilna z aplikacją. Sprawdź w macierzy kompatybilności w Uwagach do wydania dla wspieranych wersji PHP. Twoja wersja to',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Tryb wstecznej kompatybilności php jest włączony. Ustaw dyrektywę "zend.ze1_compatibility_mode" na "Off", aby kontynuować.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Akcja',
    'LBL_ML_CANCEL'             => 'Skasuj',
    'LBL_ML_COMMIT'=>'Wykonaj',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Data instalacji',
    'LBL_ML_NAME' => 'Nazwa',
    'LBL_ML_PUBLISHED' => 'Data publikacji',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Nieodinstalowywalny',
    'LBL_ML_VERSION' => 'Wersja',
	'LBL_ML_INSTALL'=>'Zainstaluj',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Śledzenie',
	'LBL_CURRENT_PHP_VERSION' => '(Twoja obecna wersja php to',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Rekomendowana wersja php to 5.2.1 lub powyższa)',
	'LBL_MODULE_NAME' => 'Kreator aktualizacji',
	'LBL_UPLOAD_SUCCESS' => 'Ładowanie pakietu aktualizacja zakończone pomyślnie. Kliknij Dalej, aby wykonać ostatnie sprawdzenie.',
	'LBL_UW_TITLE_LAYOUTS' => 'Potwierdź wygląd',
	'LBL_LAYOUT_MODULE_TITLE' => 'Wyglądy',
	'LBL_LAYOUT_MERGE_DESC' => 'Nowe dostępne pola zostały dodane jako część tej aktualizacji i mogą być automatycznie dołączane do twojego istniejącego wyglądu modułu. Aby dowiedzieć się więcej o nowych polach, proszę odnieś się do Uwag wydania dla wersji, którą aktualizujesz.<br /><br />Jeśli nie chcesz dołączyć nowych pól, proszę odznacz moduł, a twój własny wygląd pozostanie niezmieniony. Pola będą dostępne po aktualizacji w Studio.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Kliknij Dalej, aby potwierdzić zmiany i zakończyć aktualizację.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknij Dalej, aby dokończyć aktualizację.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Potwierdź wygląd',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potwierdź wyniki wyglądu',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Następujące wyglądy zostały pomyślnie połączone:',
	'LBL_SELECT_FILE' => 'Wybierz plik:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Pobrany plik nie jest kompatybilny z Sugar Suite: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Załadowany plik nie jest kompatybilny z (Open Source, Professional, or Enterprise) of Sugar Suite\': ',
	'LBL_LANGPACKS' => 'Pakiety Językowe' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Moduł Loader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Aktualizacje poprawek' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Theme' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Aktualizacja' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Przetwarzanie' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie upload_max_filesize w pliku php.ini.',
													2 => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie MAX_FILE_SIZE, określoną w formularzu HTML.',
													3 => 'Pliki zostały załadowane częściowo.',
													4 => 'Zadne pliki nie zostały załadowane.',
													5 => 'Nieznany błąd.',
													6 => 'Brak foldera tymczasowego.',
													7 => 'Nie można zapisać pliku na dysku.',
													8 => 'Ładowanie pliku zatrzymane z podowu rozszerzenia.',
),
);
