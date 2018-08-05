<?php
$popupMeta = array (
    'moduleMain' => 'mapol_master_product_list',
    'varName' => 'mapol_master_product_list',
    'orderBy' => 'mapol_master_product_list.name',
    'whereClauses' => array (
  'name' => 'mapol_master_product_list.name',
  'preferred_product' => 'mapol_master_product_list.preferred_product',
  'product_category' => 'mapol_master_product_list.product_category',
  'preferred_supplier' => 'mapol_master_product_list.preferred_supplier',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'preferred_product',
  5 => 'product_category',
  6 => 'preferred_supplier',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'preferred_supplier' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PREFERRED_SUPPLIER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'preferred_supplier',
  ),
  'preferred_product' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PREFERRED_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'preferred_product',
  ),
  'product_category' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'product_category',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'PREFERRED_SUPPLIER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PREFERRED_SUPPLIER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PREFERRED_PRODUCT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PREFERRED_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'preferred_product',
  ),
  'INTERNAL_ITEM_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INTERNAL_ITEM_CODE',
    'width' => '10%',
    'default' => true,
    'name' => 'internal_item_code',
  ),
  'PRODUCT_CATEGORY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'product_category',
  ),
),
);
