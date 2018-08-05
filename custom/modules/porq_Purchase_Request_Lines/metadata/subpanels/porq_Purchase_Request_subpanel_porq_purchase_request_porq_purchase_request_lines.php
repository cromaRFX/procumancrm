<?php
// created: 2016-04-21 17:25:59
$subpanel_layout['list_fields'] = array (
  'line_nr_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'vname' => 'LBL_LINE_NR',
    'width' => '10%',
  ),
  'vendor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_VENDOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'quantity' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'price' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'cost' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_COST',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'porq_Purchase_Request_Lines',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'porq_Purchase_Request_Lines',
    'width' => '5%',
    'default' => true,
  ),
);