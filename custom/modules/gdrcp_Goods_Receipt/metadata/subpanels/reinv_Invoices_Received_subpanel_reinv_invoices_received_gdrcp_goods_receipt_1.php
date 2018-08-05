<?php
// created: 2017-02-03 18:54:43
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'po_number_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_PO_NUMBER',
    'width' => '5%',
  ),
  'po_line_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_PO_LINE',
    'width' => '5%',
  ),
  'aos_products_quotes_gdrcp_goods_receipt_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
    'id' => 'AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1AOS_PRODUCTS_QUOTES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products_Quotes',
    'target_record_key' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
  ),
  'quantity' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'quantity_rejected_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_QUANTITY_REJECTED',
    'width' => '10%',
  ),
  'quantity_invoiced_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_QUANTITY_INVOICED',
    'width' => '10%',
  ),
  'invoiced_amount_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_INVOICED_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'gdrcp_Goods_Receipt',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'gdrcp_Goods_Receipt',
    'width' => '5%',
    'default' => true,
  ),
);