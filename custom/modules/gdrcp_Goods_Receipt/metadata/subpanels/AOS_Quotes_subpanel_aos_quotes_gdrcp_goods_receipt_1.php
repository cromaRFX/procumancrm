<?php
// created: 2016-04-08 09:18:37
$subpanel_layout['list_fields'] = array (
  'received_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'quantity' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'storage' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_STORAGE',
    'width' => '10%',
    'default' => true,
  ),
  'remarks' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_REMARKS',
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
    'module' => 'gdrcp_Goods_Receipt',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'gdrcp_Goods_Receipt',
    'width' => '5%',
    'default' => true,
  ),
);