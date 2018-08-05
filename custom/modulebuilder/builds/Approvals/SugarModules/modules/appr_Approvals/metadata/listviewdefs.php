<?php
$module_name = 'appr_Approvals';
$listViewDefs [$module_name] = 
array (
  'APPROVAL_LEVEL' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPROVAL_LEVEL',
    'width' => '10%',
  ),
  'APPROVAL_STATUS' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_APPROVAL_STATUS',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'APPROVED_AMOUNT' => 
  array (
    'type' => 'float',
    'label' => 'LBL_APPROVED_AMOUNT',
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
  'REMARK' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARK',
    'width' => '10%',
    'default' => true,
  ),
);
?>
