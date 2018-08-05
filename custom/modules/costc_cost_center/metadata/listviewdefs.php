<?php
$module_name = 'costc_cost_center';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'DPRT_DEPARTMENTS_COSTC_COST_CENTER_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
    'id' => 'DPRT_DEPARTMENTS_COSTC_COST_CENTERDPRT_DEPARTMENTS_IDA',
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
);
?>
