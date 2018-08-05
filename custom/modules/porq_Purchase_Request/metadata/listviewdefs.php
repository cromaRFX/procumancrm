<?php
$module_name = 'porq_Purchase_Request';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'REQUESTED_FOR_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REQUESTED_FOR',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_REQUIRED_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_REQUIRED',
    'width' => '10%',
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
  'EXPENSE_CODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EXPENSE_CODE',
    'width' => '10%',
  ),
  'COST_CENTER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COST_CENTER',
    'id' => 'COSTC_COST_CENTER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'PROJECT_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'BRANCH_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BRANCH',
    'id' => 'BRCH_BRANCH_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'REMARKS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REMARKS',
    'width' => '10%',
  ),
  'TOTAL_COST' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TOTAL_COST',
    'width' => '10%',
    'default' => false,
  ),
  'DEPARTMENT_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTMENT',
    'id' => 'DPRT_DEPARTMENTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'REQUEST_ID_C' => 
  array (
    'type' => 'autoincrement',
    'default' => false,
    'label' => 'LBL_REQUEST_ID',
    'width' => '10%',
  ),
  'LINE_ITEMS_C' => 
  array (
    'type' => 'multi_lines',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_LINE_ITEMS',
    'width' => '10%',
  ),
  'JUSTIFICATION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_JUSTIFICATION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
