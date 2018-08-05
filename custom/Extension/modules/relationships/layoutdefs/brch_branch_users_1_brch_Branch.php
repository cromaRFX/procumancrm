<?php
 // created: 2016-11-02 19:03:05
$layout_defs["brch_Branch"]["subpanel_setup"]['brch_branch_users_1'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BRCH_BRANCH_USERS_1_FROM_USERS_TITLE',
  'get_subpanel_data' => 'brch_branch_users_1',
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
