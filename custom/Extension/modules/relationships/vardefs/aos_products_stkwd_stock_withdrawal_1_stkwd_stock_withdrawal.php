<?php
// created: 2016-04-16 16:11:28
$dictionary["stkwd_stock_withdrawal"]["fields"]["aos_products_stkwd_stock_withdrawal_1"] = array (
  'name' => 'aos_products_stkwd_stock_withdrawal_1',
  'type' => 'link',
  'relationship' => 'aos_products_stkwd_stock_withdrawal_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_stkwd_stock_withdrawal_1aos_products_ida',
);
$dictionary["stkwd_stock_withdrawal"]["fields"]["aos_products_stkwd_stock_withdrawal_1_name"] = array (
  'name' => 'aos_products_stkwd_stock_withdrawal_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_stkwd_stock_withdrawal_1aos_products_ida',
  'link' => 'aos_products_stkwd_stock_withdrawal_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["stkwd_stock_withdrawal"]["fields"]["aos_products_stkwd_stock_withdrawal_1aos_products_ida"] = array (
  'name' => 'aos_products_stkwd_stock_withdrawal_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_stkwd_stock_withdrawal_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_STKWD_STOCK_WITHDRAWAL_TITLE',
);
