<?php
 // created: 2016-04-26 15:55:42
$layout_defs["dprt_Departments"]["subpanel_setup"]['dprt_departments_costc_cost_center'] = array (
  'order' => 100,
  'module' => 'costc_cost_center',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_COSTC_COST_CENTER_TITLE',
  'get_subpanel_data' => 'dprt_departments_costc_cost_center',
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
