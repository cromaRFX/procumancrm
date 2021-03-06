<?php
$popupMeta = array (
    'moduleMain' => 'gdrcp_Goods_Receipt',
    'varName' => 'gdrcp_Goods_Receipt',
    'orderBy' => 'gdrcp_goods_receipt.name',
    'whereClauses' => array (
  'product_c' => 'gdrcp_goods_receipt.product_c',
  'storage' => 'gdrcp_goods_receipt.storage',
  'received_date' => 'gdrcp_goods_receipt.received_date',
  'assigned_user_id' => 'gdrcp_goods_receipt.assigned_user_id',
  'receipt_id_c' => 'gdrcp_goods_receipt_cstm.receipt_id_c',
  'po_number_c' => 'gdrcp_goods_receipt_cstm.po_number_c',
  'po_line_c' => 'gdrcp_goods_receipt_cstm.po_line_c',
  'packing_list_c' => 'gdrcp_goods_receipt_cstm.packing_list_c',
),
    'searchInputs' => array (
  4 => 'product_c',
  6 => 'storage',
  7 => 'received_date',
  8 => 'assigned_user_id',
  9 => 'receipt_id_c',
  10 => 'po_number_c',
  11 => 'po_line_c',
  12 => 'packing_list_c',
),
    'searchdefs' => array (
  'po_number_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
    'name' => 'po_number_c',
  ),
  'po_line_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PO_LINE',
    'width' => '10%',
    'name' => 'po_line_c',
  ),
  'receipt_id_c' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_RECEIPT_ID',
    'width' => '10%',
    'name' => 'receipt_id_c',
  ),
  'packing_list_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PACKING_LIST',
    'width' => '10%',
    'name' => 'packing_list_c',
  ),
  'product_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'product_c',
  ),
  'storage' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STORAGE',
    'width' => '10%',
    'name' => 'storage',
  ),
  'received_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'name' => 'received_date',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
