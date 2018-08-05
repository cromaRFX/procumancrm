<?php
 // created: 2016-12-21 16:08:47
$layout_defs["reinv_Invoices_Received"]["subpanel_setup"]['reinv_invoices_received_gdrcp_goods_receipt_1'] = array (
  'order' => 100,
  'module' => 'gdrcp_Goods_Receipt',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
  'get_subpanel_data' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
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
