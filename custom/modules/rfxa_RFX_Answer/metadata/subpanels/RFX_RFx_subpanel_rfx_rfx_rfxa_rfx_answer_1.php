<?php
// created: 2016-05-23 12:46:31
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'supplier_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SUPPLIER_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'supplier' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_SUPPLIER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'status_id' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_DOC_STATUS',
    'width' => '10%',
  ),
  'comparable_value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_COMPARABLE_VALUE',
    'currency_format' => true,
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
  'exp_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_DOC_EXP_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'rfxa_RFX_Answer',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'rfxa_RFX_Answer',
    'width' => '5%',
    'default' => true,
  ),
);