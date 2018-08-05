<?php
$module_name = 'reinv_Invoices_Received';
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
      'reference_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REFERENCE',
        'width' => '10%',
        'name' => 'reference_c',
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
      'invoice_paid' => 
      array (
        'type' => 'date',
        'label' => 'LBL_INVOICE_PAID',
        'width' => '10%',
        'default' => true,
        'name' => 'invoice_paid',
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
        'width' => '10%',
        'default' => true,
      ),
      'cost_center_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COST_CENTER',
        'id' => 'COSTC_COST_CENTER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'cost_center_c',
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
      0 => 'name',
      1 => 
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
