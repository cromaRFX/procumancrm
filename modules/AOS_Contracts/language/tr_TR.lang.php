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
    'LBL_ASSIGNED_TO_NAME' => 'Sözleşme Yöneticisi',
    'LBL_CONTRACT_ACCOUNT' => 'Müşteri',
    'LBL_OPPORTUNITY' => 'Fırsatlar',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Giriş Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Değiştiren:',
    'LBL_MODIFIED_ID' => 'Değiştiren ID:',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı:',
    'LBL_CREATED' => 'Oluşturan:',
    'LBL_CREATED_ID' => 'Oluşturan Id:',
    'LBL_DESCRIPTION' => 'Tanım',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_NAME' => 'Paket Adı:',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Kontratlar',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Sözleşme oluştur',
    'LNK_LIST' => 'View Contracts',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Import Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Etkinlikler',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Kontratlar',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Başlangıç Tarihi',
    'LBL_END_DATE' => 'Bitiş Tarihi',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Durum',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'İlgili ',
    'LBL_ADD_GROUP' => 'Grup ekleme',
    'LBL_DELETE_GROUP' => 'Grubu sil',
    'LBL_GROUP_NAME' => 'Grup adı',
    'LBL_GROUP_TOTAL' => 'Grup toplamı',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Ürün',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Not',
    'LBL_PRODUCT_DESCRIPTION' => 'Tanım',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_TYPE' => 'Türü:',
    'LBL_DISCOUNT_AMT' => 'İndirim',
    'LBL_UNIT_PRICE' => 'Satış Fiyatı',
    'LBL_TOTAL_PRICE' => 'Toplam',
    'LBL_VAT' => 'Vergi',
    'LBL_VAT_AMT' => 'Vergi tutarı',
    'LBL_SERVICE_NAME' => 'Servis',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Satış Fiyatı',
    'LBL_SERVICE_DISCOUNT' => 'İndirim',
    'LBL_LINE_ITEMS' => 'Satır Öğeleri',
    'LBL_SUBTOTAL_AMOUNT' => 'Alt toplam',
    'LBL_DISCOUNT_AMOUNT' => 'İndirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Taşıma',
    'LBL_TOTAL_AMT' => 'Toplam',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_SHIPPING_TAX' => 'Nakliye vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Nakliye vergisi',
    'LBL_ADD_PRODUCT_LINE' => 'Ürün satırı ekleyin',
    'LBL_ADD_SERVICE_LINE' => 'Hizmet satırı ekleyin ',
    'LBL_PRINT_AS_PDF' => 'PDF Olarak Yazdır [Alt+P]',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Alt toplam (varsayılan para birimi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim (varsayılan para birimi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (varsayılan para birimi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Nakliye (varsayılan para birimi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Toplam (varsayılan para birimi)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Nakliye vergisi (varsayılan para birimi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Nakliye vergisi (varsayılan para birimi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Genel toplam (varsayılan para birimi)',
);
?>
