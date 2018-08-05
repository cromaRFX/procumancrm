<?php
$module_name = 'mapol_master_product_list';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'internal_item_code',
            'label' => 'LBL_INTERNAL_ITEM_CODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferred_supplier',
            'studio' => 'visible',
            'label' => 'LBL_PREFERRED_SUPPLIER',
          ),
          1 => 
          array (
            'name' => 'product_category',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_CATEGORY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'preferred_product',
            'studio' => 'visible',
            'label' => 'LBL_PREFERRED_PRODUCT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
