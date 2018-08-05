<?php
 // created: 2016-12-06 21:06:19
$layout_defs["RFX_RFx"]["subpanel_setup"]['securitygroups_rfx_rfx_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SECURITYGROUPS_RFX_RFX_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'securitygroups_rfx_rfx_1',
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
