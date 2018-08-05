<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products',
    'varName' => 'AOS_Products',
    'orderBy' => 'aos_products.name',
    'whereClauses' => array (
  'name' => 'aos_products.name',
  'part_number' => 'aos_products.part_number',
  'accounts_aos_products_1_name' => 'aos_products.accounts_aos_products_1_name',
  'aos_product_category_name' => 'aos_products.aos_product_category_name',
  'is_preferred_c' => 'aos_products_cstm.is_preferred_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'part_number',
  8 => 'accounts_aos_products_1_name',
  11 => 'aos_product_category_name',
  12 => 'is_preferred_c',
),
    'searchdefs' => array (
  'is_preferred_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_IS_PREFERRED',
    'width' => '10%',
    'name' => 'is_preferred_c',
  ),
  'accounts_aos_products_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AOS_PRODUCTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_aos_products_1_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'part_number' => 
  array (
    'name' => 'part_number',
    'width' => '10%',
  ),
  'aos_product_category_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
    'id' => 'AOS_PRODUCT_CATEGORY_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'aos_product_category_name',
  ),
),
    'listviewdefs' => array (
  'IS_PREFERRED_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_PREFERRED',
    'width' => '10%',
    'name' => 'is_preferred_c',
  ),
  'ACCOUNTS_AOS_PRODUCTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AOS_PRODUCTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_aos_products_1_name',
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PART_NUMBER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PART_NUMBER',
    'default' => true,
    'name' => 'part_number',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'AOS_PRODUCT_CATEGORY_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
    'id' => 'AOS_PRODUCT_CATEGORY_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'aos_product_category_name',
  ),
  'PRICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRICE',
    'default' => true,
    'name' => 'price',
  ),
  'IN_STOCK_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_IN_STOCK',
    'width' => '10%',
    'name' => 'in_stock_c',
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency_id',
  ),
),
);
