<?php
 // created: 2015-10-27 18:04:37
$layout_defs["PO_Purchase_header"]["subpanel_setup"]['po_purchase_header_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PO_PURCHASE_HEADER_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'po_purchase_header_documents',
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
