<?php
$module_name = 'gdrcp_Goods_Receipt';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'received_date',
            'label' => 'LBL_RECEIVED_DATE',
          ),
          1 => 
          array (
            'name' => 'product_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aos_products_quotes_gdrcp_goods_receipt_1_name',
            'tabindex' => 'Purchase Order Line',
          ),
          1 => 
          array (
            'name' => 'po_number_c',
            'label' => 'LBL_PO_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'po_line_c',
            'label' => 'LBL_PO_LINE',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'storage',
            'label' => 'LBL_STORAGE',
          ),
          1 => 
          array (
            'name' => 'packing_list_c',
            'label' => 'LBL_PACKING_LIST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'quantity_rejected_c',
            'label' => 'LBL_QUANTITY_REJECTED',
          ),
          1 => 
          array (
            'name' => 'remarks',
            'label' => 'LBL_REMARKS',
          ),
        ),
      ),
    ),
  ),
);
?>
