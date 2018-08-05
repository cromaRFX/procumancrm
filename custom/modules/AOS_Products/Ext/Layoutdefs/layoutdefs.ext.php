<?php 
 //WARNING: The contents of this file are auto-generated


unset($layout_defs['AOS_Products']['subpanel_setup']['aos_products_purchases']);



$layout_defs['AOS_Products']['subpanel_setup']['securitygroups'] = array(
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






 // created: 2015-11-01 15:17:45
$layout_defs["AOS_Products"]["subpanel_setup"]['aos_products_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'aos_products_documents_1',
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


 // created: 2016-04-16 16:11:28
$layout_defs["AOS_Products"]["subpanel_setup"]['aos_products_stkwd_stock_withdrawal_1'] = array (
  'order' => 100,
  'module' => 'stkwd_stock_withdrawal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_STKWD_STOCK_WITHDRAWAL_TITLE',
  'get_subpanel_data' => 'aos_products_stkwd_stock_withdrawal_1',
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
$layout_defs['AOS_Products']['subpanel_setup']['aos_products_purchases']['override_subpanel_name'] = 'AOS_Products_subpanel_aos_products_purchases';

?>