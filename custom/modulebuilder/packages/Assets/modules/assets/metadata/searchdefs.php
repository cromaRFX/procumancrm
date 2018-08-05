<?php
$module_name = 'asset_assets';
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
      'purchase_order' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PURCHASE_ORDER',
        'id' => 'AOS_QUOTES_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'purchase_order',
      ),
      'product' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT',
        'id' => 'AOS_PRODUCTS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'product',
      ),
      'short_description' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SHORT_DESCRIPTION',
        'width' => '10%',
        'default' => true,
        'name' => 'short_description',
      ),
      'asset_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ASSET_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'asset_type',
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
      'serial_nr' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SERIAL_NR',
        'width' => '10%',
        'default' => true,
        'name' => 'serial_nr',
      ),
      'short_description' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SHORT_DESCRIPTION',
        'width' => '10%',
        'default' => true,
        'name' => 'short_description',
      ),
      'product' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'AOS_PRODUCTS_ID_C',
        'name' => 'product',
      ),
      'asset_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ASSET_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'asset_type',
      ),
      'project' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROJECT',
        'id' => 'PROJECT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'project',
      ),
      'purchase_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PURCHASE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'purchase_date',
      ),
      'last_inspection' => 
      array (
        'type' => 'date',
        'label' => 'LBL_LAST_INSPECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'last_inspection',
      ),
      'building' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BUILDING',
        'width' => '10%',
        'default' => true,
        'name' => 'building',
      ),
      'room' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ROOM',
        'width' => '10%',
        'default' => true,
        'name' => 'room',
      ),
      'contact' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CONTACT',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'contact',
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
