<?php
$module_name = 'eps_request_form';
$listViewDefs [$module_name] = 
array (
  'RF_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RF_NUMBER',
    'width' => '10%',
  ),
  'PO_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PO_TYPE',
    'width' => '10%',
  ),
  'RF_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_RF_DATE',
    'width' => '10%',
  ),
  'REQ_DESC_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REQ_DESC',
    'sortable' => false,
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
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
;
?>
