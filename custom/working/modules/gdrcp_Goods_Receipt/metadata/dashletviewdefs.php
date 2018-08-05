<?php
$dashletData['gdrcp_Goods_ReceiptDashlet']['searchFields'] = array (
  'gdrcp_goods_receipt_aos_products_quotes_1_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['gdrcp_Goods_ReceiptDashlet']['columns'] = array (
  'receipt_id_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_RECEIPT_ID',
    'width' => '10%',
    'name' => 'receipt_id_c',
  ),
  'storage' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STORAGE',
    'width' => '10%',
    'default' => true,
    'name' => 'storage',
  ),
  'quantity' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
    'name' => 'quantity',
  ),
  'received_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'received_date',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'width' => '40%',
    'label' => 'LBL_NAME',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'quantity_rejected_c' => 
  array (
    'type' => 'float',
    'default' => false,
    'label' => 'LBL_QUANTITY_REJECTED',
    'width' => '10%',
  ),
  'product_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'reinv_invoices_received_gdrcp_goods_receipt_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
    'id' => 'REINV_INVOA2FFECEIVED_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'currency_id' => 
  array (
    'type' => 'currency_id',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'invoiced_amount_c' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_INVOICED_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'quantity_ordered_c' => 
  array (
    'type' => 'float',
    'default' => false,
    'label' => 'LBL_QUANTITY_ORDERED',
    'width' => '10%',
  ),
  'quantity_invoiced_c' => 
  array (
    'type' => 'float',
    'default' => false,
    'label' => 'LBL_QUANTITY_INVOICED',
    'width' => '10%',
  ),
  'po_number_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
  ),
  'po_line_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PO_LINE',
    'width' => '10%',
  ),
  'aos_products_quotes_gdrcp_goods_receipt_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
    'id' => 'AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1AOS_PRODUCTS_QUOTES_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'packing_list_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PACKING_LIST',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'remarks' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARKS',
    'width' => '10%',
    'default' => false,
    'name' => 'remarks',
  ),
);
