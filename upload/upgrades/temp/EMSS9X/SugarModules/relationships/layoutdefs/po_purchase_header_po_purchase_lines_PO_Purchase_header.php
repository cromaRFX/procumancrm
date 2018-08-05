<?php
 // created: 2015-10-26 19:56:56
$layout_defs["PO_Purchase_header"]["subpanel_setup"]['po_purchase_header_po_purchase_lines'] = array (
  'order' => 100,
  'module' => 'PO_Purchase_lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PO_PURCHASE_HEADER_PO_PURCHASE_LINES_FROM_PO_PURCHASE_LINES_TITLE',
  'get_subpanel_data' => 'po_purchase_header_po_purchase_lines',
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
