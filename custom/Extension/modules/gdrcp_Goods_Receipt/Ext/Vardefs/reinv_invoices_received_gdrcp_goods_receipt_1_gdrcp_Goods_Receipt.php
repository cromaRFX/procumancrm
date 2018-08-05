<?php
// created: 2016-12-21 16:08:47
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoices_received_gdrcp_goods_receipt_1"] = array (
  'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'module' => 'reinv_Invoices_Received',
  'bean_name' => 'reinv_Invoices_Received',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'id_name' => 'reinv_invoa2ffeceived_ida',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoices_received_gdrcp_goods_receipt_1_name"] = array (
  'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'save' => true,
  'id_name' => 'reinv_invoa2ffeceived_ida',
  'link' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'table' => 'reinv_invoices_received',
  'module' => 'reinv_Invoices_Received',
  'rname' => 'name',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoa2ffeceived_ida"] = array (
  'name' => 'reinv_invoa2ffeceived_ida',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
);
