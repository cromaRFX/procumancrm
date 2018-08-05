<?php
$module_name = 'stkwd_stock_withdrawal';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'pick_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PICK_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'pick_date',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'request' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_REQUEST',
        'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'request',
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
    ),
    'advanced_search' => 
    array (
      'pick_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PICK_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'pick_date',
      ),
      'location' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LOCATION',
        'width' => '10%',
        'default' => true,
        'name' => 'location',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'request' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_REQUEST',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
        'name' => 'request',
      ),
      'remark' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REMARK',
        'width' => '10%',
        'default' => true,
        'name' => 'remark',
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
