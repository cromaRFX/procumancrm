<?php
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

?>