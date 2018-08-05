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
    'LBL_ASSIGNED_TO_NAME' => 'Contract Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Account',
    'LBL_OPPORTUNITY' => 'Peluang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_ID' => 'Modifikasi berdasarkan ID',
    'LBL_MODIFIED_NAME' => 'Modifikasi berdasarkan Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_CREATED_ID' => 'Dibuat oleh Id',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Hapus',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Dibuat oleh Pemakai',
    'LBL_MODIFIED_USER' => 'Modifikasi oleh Pemakai',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Kontrak',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Create Contract',
    'LNK_LIST' => 'View Contracts',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Import Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitas',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Kontrak',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Tanggal Mulai',
    'LBL_END_DATE' => 'Tanggal Akhir',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Kontak',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_PRODUCT_QUANITY' => 'Jumlah',
    'LBL_PRODUCT_NAME' => 'Produk',
    'LBL_PART_NUMBER' => 'Nomor Barang',
    'LBL_PRODUCT_NOTE' => 'Catatan',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsi',
    'LBL_LIST_PRICE' => 'Daftar',
    'LBL_DISCOUNT_TYPE' => 'Tipe',
    'LBL_DISCOUNT_AMT' => 'Diskon',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Pajak',
    'LBL_VAT_AMT' => 'Total Pajak',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Daftar',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Diskon',
    'LBL_LINE_ITEMS' => 'Item baris',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Diskon',
    'LBL_TAX_AMOUNT' => 'Pajak',
    'LBL_SHIPPING_AMOUNT' => 'Pengiriman',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_PRINT_AS_PDF' => 'Cetak sebagai PDF [Alt+P]',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
);
?>
