<?php
// created: 2016-12-06 19:44:57
$dictionary["AOS_Products"]["fields"]["mapol_master_product_list_aos_products_1"] = array (
  'name' => 'mapol_master_product_list_aos_products_1',
  'type' => 'link',
  'relationship' => 'mapol_master_product_list_aos_products_1',
  'source' => 'non-db',
  'module' => 'mapol_master_product_list',
  'bean_name' => 'mapol_master_product_list',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
  'id_name' => 'mapol_mast4e8ect_list_ida',
);
$dictionary["AOS_Products"]["fields"]["mapol_master_product_list_aos_products_1_name"] = array (
  'name' => 'mapol_master_product_list_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
  'save' => true,
  'id_name' => 'mapol_mast4e8ect_list_ida',
  'link' => 'mapol_master_product_list_aos_products_1',
  'table' => 'mapol_master_product_list',
  'module' => 'mapol_master_product_list',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["mapol_mast4e8ect_list_ida"] = array (
  'name' => 'mapol_mast4e8ect_list_ida',
  'type' => 'link',
  'relationship' => 'mapol_master_product_list_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
