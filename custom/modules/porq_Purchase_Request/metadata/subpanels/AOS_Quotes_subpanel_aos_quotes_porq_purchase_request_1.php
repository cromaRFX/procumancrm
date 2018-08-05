<?php
// created: 2016-04-24 16:09:31
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'request_id_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'vname' => 'LBL_REQUEST_ID',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'cost_center' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_COST_CENTER',
    'id' => 'COSTC_COST_CENTER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'costc_cost_center',
    'target_record_key' => 'costc_cost_center_id_c',
  ),
  'date_required_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_REQUIRED',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'total_cost' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_TOTAL_COST',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'porq_Purchase_Request',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'porq_Purchase_Request',
    'width' => '5%',
    'default' => true,
  ),
);