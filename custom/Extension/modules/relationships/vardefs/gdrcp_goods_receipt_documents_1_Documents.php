<?php
// created: 2016-04-23 07:25:34
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1',
  'type' => 'link',
  'relationship' => 'gdrcp_goods_receipt_documents_1',
  'source' => 'non-db',
  'module' => 'gdrcp_Goods_Receipt',
  'bean_name' => 'gdrcp_Goods_Receipt',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
  'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
);
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1_name"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
  'save' => true,
  'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
  'link' => 'gdrcp_goods_receipt_documents_1',
  'table' => 'gdrcp_goods_receipt',
  'module' => 'gdrcp_Goods_Receipt',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
  'type' => 'link',
  'relationship' => 'gdrcp_goods_receipt_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
