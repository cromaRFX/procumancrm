<?php
 // created: 2018-07-19 12:25:40
$layout_defs["eps_company"]["subpanel_setup"]['eps_company_brch_branch_1'] = array (
  'order' => 100,
  'module' => 'brch_Branch',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EPS_COMPANY_BRCH_BRANCH_1_FROM_BRCH_BRANCH_TITLE',
  'get_subpanel_data' => 'eps_company_brch_branch_1',
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
