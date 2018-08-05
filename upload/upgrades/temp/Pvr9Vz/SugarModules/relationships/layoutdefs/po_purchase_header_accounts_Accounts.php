<?php
 // created: 2015-10-26 15:34:26
$layout_defs["Accounts"]["subpanel_setup"]['po_purchase_header_accounts'] = array (
  'order' => 100,
  'module' => 'PO_Purchase_header',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PO_PURCHASE_HEADER_ACCOUNTS_FROM_PO_PURCHASE_HEADER_TITLE',
  'get_subpanel_data' => 'po_purchase_header_accounts',
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
