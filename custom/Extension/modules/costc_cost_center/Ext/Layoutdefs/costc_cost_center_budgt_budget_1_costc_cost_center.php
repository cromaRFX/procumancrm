<?php
 // created: 2016-03-06 18:18:44
$layout_defs["costc_cost_center"]["subpanel_setup"]['costc_cost_center_budgt_budget_1'] = array (
  'order' => 100,
  'module' => 'budgt_Budget',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
  'get_subpanel_data' => 'costc_cost_center_budgt_budget_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
