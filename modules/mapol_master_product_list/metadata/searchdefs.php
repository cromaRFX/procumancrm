<?php
$module_name = 'mapol_master_product_list';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'product_category' => 
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
      'internal_item_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INTERNAL_ITEM_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'internal_item_code',
      ),
      'preferred_supplier' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PREFERRED_SUPPLIER',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
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
        'default' => true,
        'name' => 'preferred_product',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'internal_item_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INTERNAL_ITEM_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'internal_item_code',
      ),
      'product_category' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT_CATEGORY',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
        'name' => 'product_category',
      ),
      'etender' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ETENDER',
        'id' => 'RFX_RFX_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'etender',
      ),
      'preferred_product' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PREFERRED_PRODUCT',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'AOS_PRODUCTS_ID_C',
        'name' => 'preferred_product',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
