<?php
$dashletData['porq_Purchase_RequestDashlet']['searchFields'] = array (
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
  'branch_c' => 
  array (
    'default' => '',
  ),
  'requested_for_c' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
);
$dashletData['porq_Purchase_RequestDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'total_cost' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TOTAL_COST',
    'width' => '10%',
    'default' => true,
    'name' => 'total_cost',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'requested_for_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REQUESTED_FOR',
    'width' => '10%',
    'name' => 'requested_for_c',
  ),
  'date_entered' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'expense_code_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EXPENSE_CODE',
    'width' => '10%',
  ),
  'project_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'request_id_c' => 
  array (
    'type' => 'autoincrement',
    'default' => false,
    'label' => 'LBL_REQUEST_ID',
    'width' => '10%',
    'name' => 'request_id_c',
  ),
  'remarks_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REMARKS',
    'width' => '10%',
    'name' => 'remarks_c',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'cost_center' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COST_CENTER',
    'id' => 'COSTC_COST_CENTER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'cost_center',
  ),
  'line_items_c' => 
  array (
    'type' => 'multi_lines',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_LINE_ITEMS',
    'width' => '10%',
    'name' => 'line_items_c',
  ),
  'department_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTMENT',
    'id' => 'DPRT_DEPARTMENTS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'department_c',
  ),
  'branch_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BRANCH',
    'id' => 'BRCH_BRANCH_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'branch_c',
  ),
  'justification' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_JUSTIFICATION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'justification',
  ),
);
