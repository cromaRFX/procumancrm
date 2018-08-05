<?php
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
