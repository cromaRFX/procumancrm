<?php
$module_name = 'budgt_Budget';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'costc_cost_center_budgt_budget_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_COSTC_COST_CENTER_TITLE',
        'id' => 'COSTC_COST_CENTER_BUDGT_BUDGET_1COSTC_COST_CENTER_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'costc_cost_center_budgt_budget_1_name',
      ),
      'start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      'end_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'end_date',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
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
