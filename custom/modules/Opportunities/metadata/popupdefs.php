<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'account_name' => 'accounts.name',
  'scouting_id_c' => 'opportunities_cstm.scouting_id_c',
  'opportunity_type' => 'opportunities.opportunity_type',
  'sales_stage' => 'opportunities.sales_stage',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
  2 => 'scouting_id_c',
  3 => 'opportunity_type',
  4 => 'sales_stage',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'scouting_id_c' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_SCOUTING_ID',
    'width' => '10%',
    'name' => 'scouting_id_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
    'width' => '10%',
  ),
  'opportunity_type' => 
  array (
    'name' => 'opportunity_type',
    'width' => '10%',
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'SCOUTING_ID_C' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_SCOUTING_ID',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'name' => 'account_name',
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'default' => true,
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
