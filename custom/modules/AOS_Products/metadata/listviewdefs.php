<?php
// created: 2018-07-13 10:15:08
$listViewDefs['AOS_Products'] = array (
  'PRODUCT_PIC_C' => 
  array (
    'type' => 'image',
    'default' => true,
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_PRODUCT_PIC',
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PART_NUMBER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PART_NUMBER',
    'default' => true,
  ),
  'PRICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'default' => true,
  ),
  'IN_STOCK_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_IN_STOCK',
    'width' => '10%',
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
    'related_fields' => 
    array (
      0 => 'aos_product_category_id',
    ),
  ),
  'IS_PREFERRED_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_PREFERRED',
    'width' => '10%',
  ),
  'CONTRACT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT',
    'id' => 'AOS_CONTRACTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'BRAND_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_BRAND',
    'width' => '10%',
  ),
  'ACCOUNTS_AOS_PRODUCTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AOS_PRODUCTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
    'module' => 'Users',
    'link' => true,
    'id' => 'CREATED_BY',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'COST' => 
  array (
    'width' => '10%',
    'label' => 'LBL_COST',
    'currency_format' => true,
    'default' => false,
  ),
  'PRICE_USDOLLAR' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'label' => 'LBL_PRICE_USDOLLAR',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
);