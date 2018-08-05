<?php
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
