<?php
 // created: 2016-04-04 20:24:02
$layout_defs["porq_PO_Request"]["subpanel_setup"]['porq_po_request_appr_approvals'] = array (
  'order' => 100,
  'module' => 'appr_Approvals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_APPR_APPROVALS_TITLE',
  'get_subpanel_data' => 'porq_po_request_appr_approvals',
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
