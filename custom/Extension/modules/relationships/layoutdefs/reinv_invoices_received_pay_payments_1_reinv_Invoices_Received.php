<?php
 // created: 2018-04-08 06:54:08
$layout_defs["reinv_Invoices_Received"]["subpanel_setup"]['reinv_invoices_received_pay_payments_1'] = array (
  'order' => 100,
  'module' => 'pay_payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
  'get_subpanel_data' => 'reinv_invoices_received_pay_payments_1',
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
