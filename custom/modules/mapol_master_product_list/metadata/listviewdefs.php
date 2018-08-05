<?php
$module_name = 'mapol_master_product_list';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  ),
  'INTERNAL_ITEM_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INTERNAL_ITEM_CODE',
    'width' => '10%',
    'default' => true,
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
  ),
  'ETENDER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ETENDER',
    'id' => 'RFX_RFX_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
?>
