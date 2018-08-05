<?php
 // created: 2016-04-09 18:07:56
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['porq_purchase_request_porq_purchase_request_lines'] = array (
  'order' => 100,
  'module' => 'porq_Purchase_Request_Lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
  'get_subpanel_data' => 'porq_purchase_request_porq_purchase_request_lines',
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
