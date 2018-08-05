<?php
$module_name = 'porq_Purchase_Request';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'request_id_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_REQUEST_ID',
        'width' => '10%',
        'name' => 'request_id_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'cost_center' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COST_CENTER',
        'id' => 'COSTC_COST_CENTER_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'cost_center',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
      'request_id_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_REQUEST_ID',
        'width' => '10%',
        'name' => 'request_id_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'cost_center' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COST_CENTER',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'COSTC_COST_CENTER_ID_C',
        'name' => 'cost_center',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
