<?php
 // created: 2015-10-27 17:57:09
$layout_defs["AOS_Contracts"]["subpanel_setup"]['po_purchase_header_aos_contracts'] = array (
  'order' => 100,
  'module' => 'PO_Purchase_header',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PO_PURCHASE_HEADER_AOS_CONTRACTS_FROM_PO_PURCHASE_HEADER_TITLE',
  'get_subpanel_data' => 'po_purchase_header_aos_contracts',
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
