<?php
$module_name='porq_Purchase_Request_Lines';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'porq_Purchase_Request_Lines',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'line' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_LINE',
      'width' => '10%',
      'default' => true,
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
  ),
);