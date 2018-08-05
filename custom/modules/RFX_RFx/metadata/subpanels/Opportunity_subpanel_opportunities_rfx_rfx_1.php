<?php
// created: 2016-02-20 13:37:23
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'rfx_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_RFX_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'request_sent_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_REQUEST_SENT_DATE',
    'width' => '10%',
  ),
  'received_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'RFX_RFx',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'RFX_RFx',
    'width' => '5%',
    'default' => true,
  ),
);