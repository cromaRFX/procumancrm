<?php
$module_name = 'porq_Purchase_Request_Lines';
$listViewDefs [$module_name] = 
array (
  'LINE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LINE',
    'width' => '10%',
    'default' => true,
  ),
  'VENDOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_VENDOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'float',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'float',
    'label' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'COST' => 
  array (
    'type' => 'float',
    'label' => 'LBL_COST',
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
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
