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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
 $mod_strings = array (
  'LBL_MODULE_NAME' => 'Sprzedaż',
  'LBL_MODULE_TITLE' => 'Sprzedaż: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie sprzedaży',
  'LBL_VIEW_FORM_TITLE' => 'Widok sprzedaży',
  'LBL_LIST_FORM_TITLE' => 'Lista sprzedaży',
  'LBL_SALE_NAME' => 'Nazwa sprzedaży:',
  'LBL_SALE' => 'Sprzedaż:',
  'LBL_NAME' => 'Nazwa',
  'LBL_LIST_SALE_NAME' => 'Nazwa',
  'LBL_LIST_ACCOUNT_NAME' => 'Konto',
  'LBL_LIST_AMOUNT' => 'Kwota',
  'LBL_LIST_DATE_CLOSED' => 'Zamknij',
  'LBL_LIST_SALE_STAGE' => 'Etap Sprzedaży',
  'LBL_ACCOUNT_ID'=>'Id Konta',
   'LBL_CURRENCY_ID'=>'ID Waluty',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Sprzedaż - aktualizacja waluty',
  'UPDATE_DOLLARAMOUNTS' => 'Aktualizuj Ilość Dolarów Amerykańskich',
  'UPDATE_VERIFY' => 'Zwerfikuj Ilości',
  'UPDATE_VERIFY_TXT' => 'Sprawdza, czy wartości kwot w module sprzedaży są wyrażeniami dziesiętnymi, złożonymi wyłącznie ze znaków numerycznych (0-9) i dziesiętnych(.)',
  'UPDATE_FIX' => 'Ustawione Ilości',
  'UPDATE_FIX_TXT' => 'Próby naprawy nieważnych kwot poprzez utworzenie obowiązującego ułamka dziesiętnego z bieżącej ilości. Spowoduje to cofnięcie jakichkolwiek kwot, które modyfikuje do pola amount_backup bazy danych. Jeśli uruchomisz to(co? Program?) i zaobserwujesz wystąpienie błędu systemowego, nie uruchamiaj (programu) ponownie bez uprzedniego przywrócenia  stanu początkowego z kopii. W przeciwnym razie może (program?) zapisać kopię z nowymi nieaktualnymi danymi.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Uaktualnia kwoty w dolarach amerykańskich dla sprzedaży, na podstawie ustawionych obecnie kursów waluty. Ta wartość jest używana do wykreślania wykresow i Widoku listy kwot waluty.',
  'UPDATE_CREATE_CURRENCY' => 'Tworzenie nowej waluty:',
  'UPDATE_VERIFY_FAIL' => 'Błąd weryfikacji rekordu:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Bierzące przychody:',
  'UPDATE_VERIFY_FIX' => 'przeprowadzenie Fix dałoby',
  'UPDATE_INCLUDE_CLOSE' => 'Uwzględnij Zamknięte Pozycje',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nowy przychód:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nowa waluta:',
  'UPDATE_DONE' => 'Wykonane',
  'UPDATE_BUG_COUNT' => 'Błędy Wykryte:',
  'UPDATE_BUGFOUND_COUNT' => 'Błędy Wykryte:',
  'UPDATE_COUNT' => 'Rekord zaktualizowany:',
  'UPDATE_RESTORE_COUNT' => 'Odzyskano przychód:',
  'UPDATE_RESTORE' => 'Przywróć Kwoty',
  'UPDATE_RESTORE_TXT' => 'Przywróć wartości kwoty z kopii utworzonych podczas naprawiania.',
  'UPDATE_FAIL' => 'Aktualizacja nie powiodła się ',
  'UPDATE_NULL_VALUE' => 'Ilości są nieważne. Ustawianie do 0-',
  'UPDATE_MERGE' => 'Łączyć Waluty',
  'UPDATE_MERGE_TXT' => 'Łączyć wilokrotne waluty w jedną walutę.Jeśli zauważysz, że istnieją wielokrotne zapisy walut dla tej samej waluty, możesz wybrać łączenie ich w jedną. To dzaiałanie połączy także wszystkie inne waluty we wszystkich modułach.',
  'LBL_ACCOUNT_NAME' => 'Konto:',
  'LBL_AMOUNT' => 'Kwota:',
  'LBL_AMOUNT_USDOLLAR' => 'Kwota w USD:',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_CLOSED' => 'Data Zakończenia Etapu:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampania:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',  
  'LBL_NEXT_STEP' => 'Następny Krok:',
  'LBL_LEAD_SOURCE' => 'Źródło Pozyskania:',
  'LBL_SALES_STAGE' => 'Etap Sprzedaży:',
  'LBL_PROBABILITY' => 'Szansa (%):',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Możliwość duplikacji sprzedaży',
  'MSG_DUPLICATE' => 'Rekordy sprzedaży, które zamierzasz utworzyć mogą spowodować duplikację rekordów, które już istnieją. Rekordy sprzedaży, które zawierają podobne nazwy są wymienione poniżej.<br>kliknij Zachowaj, aby kontynuować tworzenie tej sprzedaży, lub klinij Skasuj, aby powrócić do modułu bez tworzenia sprzedaży.',
  'LBL_NEW_FORM_TITLE' => 'Utwórz nową sprzedaż',
  'LNK_NEW_SALE' => 'Utwórz sprzedaż',
  'LNK_SALE_LIST' => 'Wyprzedaż',
  'ERR_DELETE_RECORD' => 'Musi być określony numer rekordu, aby usunąć tę sprzedaż.',
  'LBL_TOP_SALES' => 'Moje najlepsze otwarte sprzedaże',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt ze sprzedaży?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć tę sprzedaż z projektu?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Wyprzedaż',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Pierwotna Suma/ilość',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ASSIGNED_TO_NAME' => 'Przypisane do:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Użytkownik Przypisany',
  'LBL_MY_CLOSED_SALES' => 'Moje zamknięte sprzedaże',
  'LBL_TOTAL_SALES' => 'Wszystkie Sprzedaże',
  'LBL_CLOSED_WON_SALES' => 'Sprzedaże zakończone wygraną',
  'LBL_ASSIGNED_TO_ID' =>'Przydzielone do ID',
  'LBL_CREATED_ID'=>'Stworzone przez ID',
  'LBL_MODIFIED_ID'=>'Zmodyfikowane przez ID',
  'LBL_MODIFIED_NAME'=>'Nazwa użytkownika modyfikującego',
  'LBL_SALE_INFORMATION'=>'Informacje o sprzedaży',
  'LBL_CURRENCY_NAME'=>'Nazwa waluty',
  'LBL_CURRENCY_SYMBOL'=>'Symbol Waluty',
  'LBL_EDIT_BUTTON' => 'Edytuj',
   'LBL_REMOVE' => 'Usuń',


);

?>
