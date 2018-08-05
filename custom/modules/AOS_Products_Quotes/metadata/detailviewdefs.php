<?php
// created: 2018-07-13 10:15:08
$viewdefs['AOS_Products_Quotes']['DetailView'] = array (
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
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'po_number_c',
          'label' => 'LBL_PO_NUMBER',
        ),
        1 => 
        array (
          'name' => 'number',
          'label' => 'LBL_LIST_NUM',
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
          'name' => 'product_qty',
          'label' => 'LBL_PRODUCT_QTY',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'part_number',
          'label' => 'LBL_PART_NUMBER',
        ),
        1 => 
        array (
          'name' => 'currency_id',
          'studio' => 'visible',
          'label' => 'LBL_CURRENCY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'product_cost_price',
          'label' => 'LBL_PRODUCT_COST_PRICE',
        ),
        1 => 
        array (
          'name' => 'product_list_price',
          'label' => 'LBL_PRODUCT_LIST_PRICE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'product_unit_price',
          'label' => 'LBL_PRODUCT_UNIT_PRICE',
        ),
        1 => 
        array (
          'name' => 'vat',
          'label' => 'LBL_VAT',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'vat_amt',
          'label' => 'LBL_VAT_AMT',
        ),
        1 => 
        array (
          'name' => 'product_total_price',
          'label' => 'LBL_PRODUCT_TOTAL_PRICE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'product',
          'label' => 'LBL_PRODUCT',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_FLEX_RELATE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
        1 => 
        array (
          'name' => 'status_c',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
        ),
      ),
    ),
  ),
);