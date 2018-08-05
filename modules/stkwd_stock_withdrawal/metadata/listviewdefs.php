<?php
$module_name = 'stkwd_stock_withdrawal';
$listViewDefs [$module_name] = 
array (
  'PICK_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PICK_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'REQUEST' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_REQUEST',
    'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'REMARK' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARK',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
);
?>
