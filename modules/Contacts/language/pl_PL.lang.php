<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Aby usunąć Kontakt musisz określić numer rekordu.',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta:',
    'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_CAMPAIGN' => 'Kampania reklamowa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_ADD_BUSINESSCARD' => 'Wprowadź Wizytówkę',
    'LBL_ADDMORE_BUSINESSCARD' => 'Dodaj inną Wizytówkę',
    'LBL_ADDRESS_INFORMATION' => 'Dane adresowe',
    'LBL_ALT_ADDRESS_CITY' => 'Miasto dodatkowe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kraj dodatkowy',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kod pocztowy dodatkowy',
    'LBL_ALT_ADDRESS_STATE' => 'Województwo dodatkowe:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET' => 'Adres dodatkowy:',
    'LBL_ALTERNATE_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Numer telefonu:',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik',
    'LBL_ASSISTANT_PHONE' => 'Telefon asystenta:',
    'LBL_ASSISTANT' => 'Asystent:',
    'LBL_BIRTHDATE' => 'Data urodzin:',
    'LBL_BUSINESSCARD' => 'Wizytówka',
    'LBL_CITY' => 'Miasto:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej:',
    'LBL_CONTACT_INFORMATION' => 'Opis',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-temat:',
    'LBL_CONTACT_ROLE' => 'Rola:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego Kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono nowe połączenie',
    'LBL_CREATED_CONTACT' => 'Utworzono kontakt',
    'LBL_CREATED_MEETING' => 'Utworzono spotkanie',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono szanse sprzedaży',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEPARTMENT' => 'Dział:',
    'LBL_DESCRIPTION_INFORMATION' => 'Opis dodatkowy',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Raportowanie bezpośrednie',
    'LBL_DO_NOT_CALL' => 'Nie dzwonić:',
    'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wyłączyć system powiadomień:',
    'LBL_EXISTING_ACCOUNT' => 'Użyto istniejcego kontrahenta',
    'LBL_EXISTING_CONTACT' => 'Użyto istniejcego kontaktu',
    'LBL_EXISTING_OPPORTUNITY' => 'Użyto istniejcej szansy sprzedaży',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Imię:',
    'LBL_FULL_NAME' => 'Pełna nazwa:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Dom:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importuj vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatycznie twórz nowy kontakt z pliku vCard pobranego z Twojego sytemu.',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres email:',
    'LBL_INVITEE' => 'Raportowanie bezpośrednie',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_CONTACT_ROLE' => 'Rola',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Imię',
    'LBL_LIST_FORM_TITLE' => 'Lista Kontaków',
    'LBL_VIEW_FORM_TITLE' => 'Podgląd Kontaktu',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Inny adres email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_TITLE' => 'Tytuł',
    'LBL_MOBILE_PHONE' => 'Tel. komórkowy:',
    'LBL_MODIFIED' => 'Modyfikowany przez:',
    'LBL_MODULE_NAME' => 'Kontakty',
    'LBL_MODULE_TITLE' => 'Kontakty: Strona główna',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Dodaj Kontakt',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nowe hasło portalu:',
    'LBL_NOTE_SUBJECT' => 'Tytuł notatki',
    'LBL_OFFICE_PHONE' => 'Tel. służbowy:',
    'LBL_OPP_NAME' => 'Nazwa szansy sprzedaży:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID powiązania szansy sprzedaży:',
    'LBL_OPPORTUNITY_ROLE' => 'Zależność szansy sprzedaży',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres email:',
    'LBL_OTHER_PHONE' => 'Dodatkowy numer telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Aktywny użytkownik portalu:',
    'LBL_PORTAL_APP' => 'Aplikacje Portalu:',
    'LBL_PORTAL_INFORMATION' => 'Informacje o portalu',
    'LBL_PORTAL_NAME' => 'Nazwa portalu:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Hasło dla portalu ustalone?:',
    'LBL_STREET' => 'Ulica',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miasto główne:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Kraj główny:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kod pocztowy główny:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Województwo główne:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS' => 'Adres główny:',
    'LBL_PRODUCTS_TITLE' => 'Produkty',
    'LBL_RELATED_CONTACTS_TITLE' => 'Kontakty połączone',
    'LBL_REPORTS_TO_ID' => 'Raportuje do ID:',
    'LBL_REPORTS_TO' => 'Raportuje do:',
    'LBL_RESOURCE_NAME' => 'Nazwa źródła',
    'LBL_SALUTATION' => 'Forma grzecznościowa:',
    'LBL_SAVE_CONTACT' => 'Zapisz kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie kontaktu',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczone kontakty',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczone kontakty',
    'LBL_STATE' => 'Województwo:',
    'LBL_SYNC_CONTACT' => 'Synchronizuj z Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Grupy docelowe',
    'LBL_TITLE' => 'Tytuł:',
    'LNK_CONTACT_LIST' => 'Lista kontaktów',
    'LNK_IMPORT_VCARD' => 'Import vCard',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',
    'LNK_NEW_APPOINTMENT' => 'Utwórz termin spotkania',
    'LNK_NEW_CALL' => 'Utwórz połączenie telefoniczne',
    'LNK_NEW_CASE' => 'Utwórz Zgłoszenie',
    'LNK_NEW_CONTACT' => 'Utwórz kontakt',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Utwórz spotkanie',
    'LNK_NEW_NOTE' => 'Utwórz notatkę',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szanse Sprzedaży',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_SELECT_ACCOUNT' => "Wybierz Kontrahenta",
    'MSG_DUPLICATE' => 'Kontakt o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie, lub przycisk Anuluj lub przycisk Anuluj aby przerwać tworzenie.',
    'MSG_SHOW_DUPLICATES' => 'Kontakt o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie, lub przycisk Anuluj aby przerwać tworzenie.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiuj adres dodatkowy do adresu głównego',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiuj adres główny do adresu dodatkowego',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Utworzenie szans sprzedaży wymaga wybrania kontrahenta. Wybierz już istniejącego, lub utwórz nowego.',
    'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt z tego Zgłoszenia?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten zapis jako bezpośredni raport?',

    'LBL_USER_PASSWORD' => 'Hasło:',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Skopiuj do głównego adresu',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Skopiuj do dodatkowego adresu',

    'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECTS_RESOURCES' => 'Zasoby projektów',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Kampanie (cel kampanii) :',
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanie reklamowe',
    'LBL_LIST_CITY' => 'Miasto',
    'LBL_LIST_STATE' => 'Województwo',
    'LBL_HOMEPAGE_TITLE' => 'Moje kontakty',
    'LBL_OPPORTUNITIES' => 'Szanse Sprzedaży',

    'LBL_CHECKOUT_DATE' => 'Data zatwierdzenia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanie reklamowe',
    'LNK_IMPORT_CONTACTS' => 'Importuj kontakty',

    //For export labels
    'LBL_PHONE_HOME' => 'Telefon domowy',
    'LBL_PHONE_MOBILE' => 'Telefon komórkowy',
    'LBL_PHONE_WORK' => 'Telefon do pracy',
    'LBL_PHONE_OTHER' => 'Dodatkowy numer telefonu',
    'LBL_PHONE_FAX' => 'Fax',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Przydzielony użytkownik',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Przydzielony do (ID użytkownika)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Zmodyfikowane przez (ID)',
    'LBL_EXPORT_CREATED_BY' => 'Utworzony przez (ID)',
    'LBL_EXPORT_PHONE_HOME' => 'Telefon domowy',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefon komórkowy',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Powiązane Kontakty \\ Wiadomości e-mail',
    'LBL_USER_SYNC' => 'Użytkownik do synchronizacji',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Zdarzenia',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    'LBL_AOP_CASE_UPDATES' => 'Aktualizacje zgłoszeń',
    'LBL_CREATE_PORTAL_USER' => 'Utwórz Użytkownika Portalu',
    'LBL_ENABLE_PORTAL_USER' => 'Włącz Użytkownika Portalu',
    'LBL_DISABLE_PORTAL_USER' => 'Zablokuj użytkownika portalu',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nie udało się utworzyć użytkownika portalu',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nie udało się włączyć użytkownika portalu',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
);

?>
