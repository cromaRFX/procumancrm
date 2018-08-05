<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2015-11-01 18:41:48
$layout_defs["AOS_Quotes"]["subpanel_setup"]['aos_quotes_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'aos_quotes_documents_1',
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


$layout_defs['AOS_Quotes']['subpanel_setup']['reinv_invoices_received'] = array(
'order' => 103,
'sort_by' => 'name',
'sort_order' => 'asc',
'module' => 'reinv_Invoices_Received',
'refresh_page'=>1,
'subpanel_name' => 'default',
'get_subpanel_data' => 'reinv_invoices_received',
'title_key' => 'LBL_REINV_INVOICES_RECEIVED',
'top_buttons' => array(
			array('widget_class' => 'SubPanelTopButtonQuickCreate'),
			array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect'),
 		),
);



 // created: 2016-12-03 06:25:04
$layout_defs["AOS_Quotes"]["subpanel_setup"]['aos_quotes_porq_purchase_request_1'] = array (
  'order' => 100,
  'module' => 'porq_Purchase_Request',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_QUOTES_PORQ_PURCHASE_REQUEST_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'get_subpanel_data' => 'aos_quotes_porq_purchase_request_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-04-08 06:53:34
$layout_defs["AOS_Quotes"]["subpanel_setup"]['aos_quotes_pay_payments_1'] = array (
  'order' => 100,
  'module' => 'pay_payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
  'get_subpanel_data' => 'aos_quotes_pay_payments_1',
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



$layout_defs['AOS_Quotes']['subpanel_setup']['securitygroups'] = array(
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






//auto-generated file DO NOT EDIT
$layout_defs['AOS_Quotes']['subpanel_setup']['aos_quotes_porq_purchase_request_1']['override_subpanel_name'] = 'AOS_Quotes_subpanel_aos_quotes_porq_purchase_request_1';


//auto-generated file DO NOT EDIT
$layout_defs['AOS_Quotes']['subpanel_setup']['aos_quotes_reinv_invoices_received_1']['override_subpanel_name'] = 'AOS_Quotes_subpanel_aos_quotes_reinv_invoices_received_1';


//auto-generated file DO NOT EDIT
$layout_defs['AOS_Quotes']['subpanel_setup']['aos_quotes_appr_approvals_1']['override_subpanel_name'] = 'AOS_Quotes_subpanel_aos_quotes_appr_approvals_1';


//auto-generated file DO NOT EDIT
$layout_defs['AOS_Quotes']['subpanel_setup']['aos_quotes_gdrcp_goods_receipt_1']['override_subpanel_name'] = 'AOS_Quotes_subpanel_aos_quotes_gdrcp_goods_receipt_1';

?>