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
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
                'name' => 'aos_products_quotes_gdrcp_goods_receipt_1_name',
                'number' => 'po_line_c',
                'po_number_c' => 'po_number_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'po_number_c',
            'label' => 'LBL_PO_NUMBER',
            'customCode' => '<input type="text" name="po_number_c" id="po_number_c" size="30" maxlength="10" value="{$fields.po_number_c.value}" title="" tabindex="0" style="background-color:#b1b1b1;" readonly="readonly">',
          ),
          1 => 
          array (
            'name' => 'quantity_rejected_c',
            'label' => 'LBL_QUANTITY_REJECTED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'po_line_c',
            'label' => 'LBL_PO_LINE',
            'customCode' => '<input type="text" name="po_line_c" id="po_line_c" size="30" maxlength="10" value="{$fields.po_line_c.value}" title="" tabindex="0" style="background-color:#b1b1b1;" readonly="readonly">',
          ),
          1 => 
          array (
            'name' => 'quantity_invoiced_c',
            'label' => 'LBL_QUANTITY_INVOICED',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'quantity_ordered_c',
            'label' => 'LBL_QUANTITY_ORDERED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'packing_list_c',
            'label' => 'LBL_PACKING_LIST',
          ),
          1 => 
          array (
            'name' => 'storage',
            'label' => 'LBL_STORAGE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1_name',
          ),
          1 => 
          array (
            'name' => 'invoiced_amount_c',
            'label' => 'LBL_INVOICED_AMOUNT',
          ),
        ),
        7 => 
        array (
          0 => 
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
