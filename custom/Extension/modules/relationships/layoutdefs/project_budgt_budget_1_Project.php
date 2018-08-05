<?php
 // created: 2016-11-11 12:35:33
$layout_defs["Project"]["subpanel_setup"]['project_budgt_budget_1'] = array (
  'order' => 100,
  'module' => 'budgt_Budget',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
  'get_subpanel_data' => 'project_budgt_budget_1',
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
