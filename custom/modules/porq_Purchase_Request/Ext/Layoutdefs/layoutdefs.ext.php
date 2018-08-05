<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-12-03 06:25:04
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['aos_quotes_porq_purchase_request_1'] = array (
  'order' => 100,
  'module' => 'AOS_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_QUOTES_PORQ_PURCHASE_REQUEST_1_FROM_AOS_QUOTES_TITLE',
  'get_subpanel_data' => 'aos_quotes_porq_purchase_request_1',
  'top_buttons' => 
  array (

  ),
);



$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);


 // created: 2016-04-09 18:07:56
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['porq_po_request_appr_approvals'] = array (
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
  ),
);


 // created: 2018-07-13 12:31:43
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['porq_purchase_request_porq_purchase_request_lines_1'] = array (
  'order' => 100,
  'module' => 'porq_Purchase_Request_Lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
  'get_subpanel_data' => 'porq_purchase_request_porq_purchase_request_lines_1',
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


 // created: 2016-04-10 10:39:03
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['porq_purchase_request_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'porq_purchase_request_documents_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);


 // created: 2018-04-08 06:53:04
$layout_defs["porq_Purchase_Request"]["subpanel_setup"]['porq_purchase_request_pay_payments_1'] = array (
  'order' => 100,
  'module' => 'pay_payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
  'get_subpanel_data' => 'porq_purchase_request_pay_payments_1',
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


//auto-generated file DO NOT EDIT
$layout_defs['porq_Purchase_Request']['subpanel_setup']['porq_purchase_request_porq_purchase_request_lines']['override_subpanel_name'] = 'porq_Purchase_Request_subpanel_porq_purchase_request_porq_purchase_request_lines';


//auto-generated file DO NOT EDIT
$layout_defs['porq_Purchase_Request']['subpanel_setup']['aos_quotes_porq_purchase_request_1']['override_subpanel_name'] = 'porq_Purchase_Request_subpanel_aos_quotes_porq_purchase_request_1';


//auto-generated file DO NOT EDIT
$layout_defs['porq_Purchase_Request']['subpanel_setup']['porq_po_request_appr_approvals']['override_subpanel_name'] = 'porq_Purchase_Request_subpanel_porq_po_request_appr_approvals';


//auto-generated file DO NOT EDIT
$layout_defs['porq_Purchase_Request']['subpanel_setup']['securitygroups']['override_subpanel_name'] = 'porq_Purchase_Request_subpanel_securitygroups';

?>