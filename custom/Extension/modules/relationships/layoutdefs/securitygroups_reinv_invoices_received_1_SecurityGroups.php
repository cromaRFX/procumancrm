<?php
 // created: 2016-12-06 21:05:25
$layout_defs["SecurityGroups"]["subpanel_setup"]['securitygroups_reinv_invoices_received_1'] = array (
  'order' => 100,
  'module' => 'reinv_Invoices_Received',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SECURITYGROUPS_REINV_INVOICES_RECEIVED_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'get_subpanel_data' => 'securitygroups_reinv_invoices_received_1',
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
