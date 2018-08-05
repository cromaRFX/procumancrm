<?php
// created: 2018-03-07 16:27:23
$subpanel_layout['list_fields'] = array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'approval_status' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'vname' => 'LBL_APPROVAL_STATUS',
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
  'approved_amount' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_APPROVED_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'remark' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_REMARK',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'appr_Approvals',
    'width' => '5%',
    'default' => true,
  ),
);