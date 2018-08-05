<?php
 // created: 2015-10-27 17:57:09
$layout_defs["AOS_Products"]["subpanel_setup"]['po_purchase_lines_aos_products'] = array (
  'order' => 100,
  'module' => 'PO_Purchase_lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PO_PURCHASE_LINES_AOS_PRODUCTS_FROM_PO_PURCHASE_LINES_TITLE',
  'get_subpanel_data' => 'po_purchase_lines_aos_products',
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
