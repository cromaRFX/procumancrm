<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Vertragsverwaltung',
    'LBL_CONTRACT_ACCOUNT' => 'Firma',
    'LBL_OPPORTUNITY' => 'Verkaufschance',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellungsdatum',
    'LBL_DATE_MODIFIED' => 'Änderungsdatum',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_ID' => 'Geändert von Id',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_CREATED_ID' => 'Erstellt von Id',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Vertragstitel',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Vertragsliste',
    'LBL_MODULE_NAME' => 'Verträge',
    'LBL_MODULE_TITLE' => 'Verträge: Startseite',
    'LBL_HOMEPAGE_TITLE' => 'Meine Verträge',
    'LNK_NEW_RECORD' => 'Vertrag erstellen',
    'LNK_LIST' => 'Veträge ansehen',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Verträge importieren',
    'LBL_SEARCH_FORM_TITLE' => 'Verträge suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Verträge',
    'LBL_NEW_FORM_TITLE' => 'Neuer Vertrag',
    'LBL_CONTRACT_NAME' => 'Name des Vertrags',
    'LBL_REFERENCE_CODE ' => 'Referenz Code ',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_END_DATE' => 'Enddatum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Vertragswert',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Unterschrift Kunde Datum',
    'LBL_COMPANY_SIGNED_DATE' => 'Unterschrift Unternehmen Datum',
    'LBL_RENEWAL_REMINDER_DATE' => 'Erinnerungsdatum Verlängerung',
    'LBL_CONTRACT_TYPE' => 'Vertragstyp',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Gruppe hinzufügen',
    'LBL_DELETE_GROUP' => 'Gruppe löschen',
    'LBL_GROUP_NAME' => 'Gruppenname',
    'LBL_GROUP_TOTAL' => 'Gruppensumme',
    'LBL_PRODUCT_QUANITY' => 'Menge',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Teilenummer',
    'LBL_PRODUCT_NOTE' => 'Notiz',
    'LBL_PRODUCT_DESCRIPTION' => 'Beschreibung',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_TYPE' => 'Typ',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Verkaufspreis',
    'LBL_TOTAL_PRICE' => 'Gesamt',
    'LBL_VAT' => 'Steuer',
    'LBL_VAT_AMT' => 'MwSt.-Betrag',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Verkaufspreis',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_LINE_ITEMS' => 'Zeilenelemente',
    'LBL_SUBTOTAL_AMOUNT' => 'Zwischensumme',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Steuer',
    'LBL_SHIPPING_AMOUNT' => 'Versand',
    'LBL_TOTAL_AMT' => 'Gesamt',
    'LBL_GRAND_TOTAL' => 'Gesamtbetrag',
    'LBL_SHIPPING_TAX' => 'Versandsteuer',
    'LBL_SHIPPING_TAX_AMT' => 'Versandsteuer',
    'LBL_ADD_PRODUCT_LINE' => 'Produktzeile hinzufügen',
    'LBL_ADD_SERVICE_LINE' => 'Servicezeile hinzufügen',
    'LBL_PRINT_AS_PDF' => 'Als PDF drucken',
    'LBL_EMAIL_PDF' => 'PDF mit E-Mail versenden',
    'LBL_PDF_NAME' => 'Vertrag',
    'LBL_EMAIL_NAME' => 'Vertrag für',
    'LBL_NO_TEMPLATE' => 'FEHLER\nKeine Vorlagen gefunden. Wenn Sie noch keine Vertragsvorlage erstellt haben, gehen Sie zum PDF Vorlagenmodul und erstellen Sie eine',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Zwischensumme (Währung)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (Währung)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Steuer (Währung)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Versand (Währung)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Gesamt (Währung)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Versandsteuer (Standardwährung)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Versandsteuer (Standardwährung)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gesamtsumme (Währung)',
);
?>
