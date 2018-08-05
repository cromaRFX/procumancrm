<?php
$module_name='stkwd_stock_withdrawal';
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
      'popup_module' => 'stkwd_stock_withdrawal',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'pick_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PICK_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'quantity' => 
    array (
      'type' => 'float',
      'default' => true,
      'vname' => 'LBL_QUANTITY',
      'width' => '10%',
    ),
    'location' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_LOCATION',
      'width' => '10%',
      'default' => true,
    ),
    'request' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_REQUEST',
      'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'porq_Purchase_Request',
      'target_record_key' => 'porq_purchase_request_id_c',
    ),
    'remark' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_REMARK',
      'width' => '10%',
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '10%',
      'default' => true,
    ),
    'created_by_name' => 
    array (
      'type' => 'relate',
      'link' => true,
      'vname' => 'LBL_CREATED',
      'id' => 'CREATED_BY',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'created_by',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'stkwd_stock_withdrawal',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'stkwd_stock_withdrawal',
      'width' => '5%',
      'default' => true,
    ),
  ),
);