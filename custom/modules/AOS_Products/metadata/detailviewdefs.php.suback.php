<?php
$module_name = 'AOS_Products';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mapol_master_product_list_aos_products_1_name',
          ),
          1 => 
          array (
            'name' => 'is_preferred_c',
            'label' => 'LBL_IS_PREFERRED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'part_number',
            'label' => 'LBL_PART_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_aos_products_1_name',
            'label' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'brand_c',
            'label' => 'LBL_BRAND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aos_product_category_name',
            'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
          ),
          1 => 
          array (
            'name' => 'in_stock_c',
            'label' => 'LBL_IN_STOCK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'sales_unit_size_c',
            'label' => 'LBL_SALES_UNIT_SIZE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'unit_of_measure_c',
            'studio' => 'visible',
            'label' => 'LBL_UNIT_OF_MEASURE',
          ),
          1 => 
          array (
            'name' => 'dimensions_c',
            'label' => 'LBL_DIMENSIONS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'moq_c',
            'label' => 'LBL_MOQ',
          ),
          1 => 
          array (
            'name' => 'reorder_c',
            'label' => 'LBL_REORDER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'contact',
            'label' => 'LBL_CONTACT',
          ),
          1 => 
          array (
            'name' => 'url',
            'label' => 'LBL_URL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'price_valid_c',
            'label' => 'LBL_PRICE_VALID',
          ),
          1 => 
          array (
            'name' => 'type',
            'label' => 'LBL_TYPE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'trade_license_expiry_date_c',
            'label' => 'LBL_TRADE_LICENSE_EXPIRY_DATE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'contract_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT',
          ),
          1 => 
          array (
            'name' => 'internal_item_code_c',
            'label' => 'LBL_INTERNAL_ITEM_CODE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'product_pic_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_PIC',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
?>
