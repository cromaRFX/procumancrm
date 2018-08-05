<?php
// created: 2016-05-01 18:45:29
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'type' => 'link',
  'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'module' => 'AOS_Products_Quotes',
  'bean_name' => 'AOS_Products_Quotes',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
  'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1_name"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
  'link' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'table' => 'aos_products_quotes',
  'module' => 'AOS_Products_Quotes',
  'rname' => 'name',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
);
