<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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

    'LBL_ADD_MODULE' => 'Dodaj',
    'LBL_ADDRCITY' => 'Miejscowość',
    'LBL_ADDRCOUNTRY' => 'Kraj',
    'LBL_ADDRCOUNTRY_ID' => 'ID kraju',
    'LBL_ADDRSTATEPROV' => 'Województwo',
    'LBL_ADMINISTRATION' => 'Administracja łącznikami',
    'LBL_ADMINISTRATION_MAIN' => 'Ustawienia łącznika',
    'LBL_AVAILABLE' => 'Dostępne',
    'LBL_BACK' => '< Z powrotem',
    'LBL_COMPANY_ID' => 'ID przedsiębiorstwa',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Niektóre wymagane pola są puste. Kontynuować zapisywanie zmian?',
    'LBL_CONNECTOR' => 'Łącznik',
    'LBL_CONNECTOR_FIELDS' => 'Pola łącznika',
    'LBL_DATA' => 'Dane',
    'LBL_DEFAULT' => 'Domyślne',
    'LBL_DELETE_MAPPING_ENTRY' => 'Czy na pewno chcesz usunąć ten wpis?',
    'LBL_DISABLED' => 'Niedostępne',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Nie znaleziono wyników pasujących do zadanych kryteriów wyszukiwania.',
    'LBL_ENABLED' => 'Włączone',
    'LBL_EXTERNAL' => 'Pozwól uzytkownikom utworzyć rekordy kont zewnętrznych do tego łącznika. Aby użyć tego łącznika, należy ustawić właściwości w ustawieniach właściwości łącznika.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Aby korzystać z tego łącznika, właściwości powinny być ustawione w pliku właściwości ustawień strony.',
    'LBL_FINSALES' => 'Finsales',
    'LBL_MARKET_CAP' => 'Market Cap',
    'LBL_MERGE' => 'Połącz',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Włącz łączniki',
    'LBL_MODIFY_DISPLAY_DESC' => 'Wybierz, które łączniki zostaną włączone dla których modułów.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Ustawienia łączników: Włączanie łączników',
    'LBL_MODULE_FIELDS' => 'Pola modułu',
    'LBL_MODIFY_MAPPING_TITLE' => 'Mapowanie pól łączników',
    'LBL_MODIFY_MAPPING_DESC' => 'Mapuj pola łączników do pól modułów w celu określnia, które dane łącznika będą widoczne i połączone z rekordami modułu.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Ustawienia łączników: Mapuj pola łączników',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Konfiguracja właściwości łącznika',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfiguruj właściwości dla każdego łącznika,  również adresy URL i klucze API.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Ustawienia łączników: Ustawienia właściwości łącznika',
    'LBL_MODIFY_SEARCH_TITLE' => 'Zarządzaj wyszukiwaniem w łącznikach',
    'LBL_MODIFY_SEARCH' => 'Wyszukaj',
    'LBL_MODIFY_SEARCH_DESC' => 'Wybierz pola łącznika, które będą przeszukiwane  dla każdego modułu.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Ustawienia łączników: Zarządzanie wyszukiwaniem w łącznikach',
    'LBL_MODULE_NAME' => 'Łączniki',
    'LBL_NO_PROPERTIES' => 'Nie ma konfigurowalnych właściwości dla tego łącznika.',
    'LBL_PARENT_DUNS' => 'Nadrzędne DUNS',
    'LBL_PREVIOUS' => '< Z powrotem',
    'LBL_QUOTE' => 'Zapytanie',
    'LBL_RECNAME' => 'Nazwa firmy',
    'LBL_RESET_TO_DEFAULT' => 'Wróć do domyślnych ustawień',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Czy na pewno chcesz powrócić do domyślnych ustawień?',
    'LBL_RESET_BUTTON_TITLE' => 'Resetuj',
    'LBL_RESULT_LIST' => 'Lista danych',
    'LBL_RUN_WIZARD' => 'Uruchom kreator',
    'LBL_SAVE' => 'Zachowaj',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Wyszukiwanie...',
    'LBL_SHOW_IN_LISTVIEW' => 'Pokaż w widoku scalania',
    'LBL_SMART_COPY' => 'Sprytna kopia',
    'LBL_SUMMARY' => 'Podsumowanie',
    'LBL_STEP1' => 'Wyszukaj i pokaż dane',
    'LBL_STEP2' => 'Scal rekordy z',
    'LBL_TEST_SOURCE' => 'Sprawdź działanie łącznika',
    'LBL_TEST_SOURCE_FAILED' => 'Test nie powiódł się',
    'LBL_TEST_SOURCE_RUNNING' => 'Przeprowadzam test...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test zakończony powodzeniem',
    'LBL_TITLE' => 'Scalanie danych',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Ultimate Parent DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Błąd: Wybierz przed kontynuacją wybierz rekord z listy.',
    'ERROR_EMPTY_WRAPPER' => 'Błąd: Nie można otrzymać instancji dla źródła [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Błąd: ID źródła nie określone, lub puste.',
    'ERROR_EMPTY_RECORD_ID' => 'Błąd: ID Rekordu nie określone, lub puste.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Błąd: Nie znaleziono dodatkowych szczegółów dla tego rekordu.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Żadne moduły nie zostały włączone dla tego łącznika. Wybierz moduł dla tego łącznika na stronie <b>Włączanie łączników</b>.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Błąd: Brak włączonych łączników, które mają określone pola wyszukiwania.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Błąd: Nie odnaleziono pliku sourcedefs.php.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Bład: Nie określono źródeł, z których należało pobrać dane.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Bład: Nie ma łączników zamapowanych do tego modułu.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Bład: Nie ma zdefiniowanych pól wyszukiwania dla modułu i łącznika. Skontaktuj się z administratorem systemu.',
    'ERROR_NO_FIELDS_MAPPED' => 'Błąd: Musisz zamapować co najmniej jedno pole łącznika do pola modułu dla każdego wybranego modułu.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Bład: Nie ma zdefiniowanych pól modułu, które zostały zamapowane do wyświetlenia w wynikach . Skontaktuj się z administratorem systemu.',
    'LBL_TWITTER_USER' => 'Nazwa użytkownika - Twitter',
    'LBL_FACEBOOK_USER' => 'Nazwa użytkownika - Facebook',
    'LBL_INFO_INLINE' => 'Informacja' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Zamknij' /*for 508 compliance fix*/,

);

?>