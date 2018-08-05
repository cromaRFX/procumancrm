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
	'ERR_DELETE_RECORD' => 'Aby usunąć rekord musisz określić numer.',
	'LBL_ACCOUNT_ID' => 'ID Kontrahenta:',
	'LBL_CASE_ID' => 'ID Zgłoszenia:',
	'LBL_CLOSE' => 'Zamknij:',
	'LBL_COLON' => ':',
	'LBL_CONTACT_ID' => 'ID Kontaktu:',
	'LBL_CONTACT_NAME' => 'Kontakt:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notatki',
	'LBL_DESCRIPTION' => 'Notatka',
	'LBL_EMAIL_ADDRESS' => 'Adresy e-mail:',
    'LBL_EMAIL_ATTACHMENT' => 'Załączniki wiadomości',
	'LBL_FILE_MIME_TYPE' => 'Typ [Mime]',
	'LBL_FILE_URL' => 'URL Pliku',
	'LBL_FILENAME' => 'Załącznik:',
	'LBL_LEAD_ID' => 'ID Potencjalnego Klienta',
	'LBL_LIST_CONTACT_NAME' => 'Kontakt',
	'LBL_LIST_DATE_MODIFIED' => 'Data modyfikacji',
	'LBL_LIST_FILENAME' => 'Załączniki',
	'LBL_LIST_FORM_TITLE' => 'Lista Notatek',
	'LBL_LIST_RELATED_TO' => 'Powiązany z',
	'LBL_LIST_SUBJECT' => 'Temat',
	'LBL_LIST_STATUS' => 'Status',
	'LBL_LIST_CONTACT' => 'Kontakt',
	'LBL_MODULE_NAME' => 'Notatki',
	'LBL_MODULE_TITLE' => 'Notatki: Strona główna',
	'LBL_NEW_FORM_TITLE' => 'Utwórz notatkę lub Dodaj załącznik',
	'LBL_NOTE_STATUS' => 'Notatka',
	'LBL_NOTE_SUBJECT' => 'Temat:',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Załączniki',
	'LBL_NOTE' => 'Notatki:',
	'LBL_OPPORTUNITY_ID' => 'ID szansy sprzedaży',
	'LBL_PARENT_ID' => 'Identyfikator rodzica',
	'LBL_PARENT_TYPE' => 'Typ rodzica',
	'LBL_PHONE' => 'Telefon:',
	'LBL_PORTAL_FLAG' => '>Wyświetl w portalu?',
	'LBL_EMBED_FLAG' => 'Umieścić w wiadomości email?',
	'LBL_PRODUCT_ID' => 'ID produktu:',
	'LBL_QUOTE_ID' => 'ID Oferty:',
	'LBL_RELATED_TO' => 'Powiązany z:',
	'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie notatki',
	'LBL_STATUS' => 'Status',
	'LBL_SUBJECT' => 'Temat:',
	'LNK_IMPORT_NOTES' => 'Importuj notatki',
	'LNK_NEW_NOTE' => 'Dodaj notatkę',
	'LNK_NOTE_LIST' => 'Lista notatek',
	'LBL_MEMBER_OF' => 'Podlega pod:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
    'LBL_REMOVING_ATTACHMENT'=>'Usuwanie załącznika ...',
    'ERR_REMOVING_ATTACHMENT'=>'Błąd podczas Usuwania załączników...',
    'LBL_CREATED_BY'=>'Utworzony przez',
    'LBL_MODIFIED_BY'=>'Modyfikowany przez',
    'LBL_SEND_ANYWAYS'=> 'Ta wiadomość nie ma tematu. Czy wysłać/zachować mimo to?',
	'LBL_LIST_EDIT_BUTTON' => 'Edytuj',
	'LBL_ACTIVITIES_REPORTS' => 'Raport aktywności',
	'LBL_PANEL_DETAILS' => 'Szczegóły',
	'LBL_NOTE_INFORMATION' => 'Opis',
	'LBL_MY_NOTES_DASHLETNAME' => 'Moje Notatki',
	'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'Imię',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_EXPORT_PARENT_TYPE' => 'Powiązany z modułem',
    'LBL_EXPORT_PARENT_ID' => 'Powiązane z ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_DELETED' => 'Usunięte',
);

?>
