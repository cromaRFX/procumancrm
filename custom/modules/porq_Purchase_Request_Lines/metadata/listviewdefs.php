<?php
$module_name = 'porq_Purchase_Request_Lines';
$listViewDefs [$module_name] = 
array (
  'LINE_NR_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LINE_NR',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  'PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_FROM_PORQ_PURCHASE_REQUEST_TITLE',
    'id' => 'PORQ_PURCH2F10REQUEST_IDA',
    'width' => '10%',
    'default' => false,
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
