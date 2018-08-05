<?php
$dashletData['RFX_RFxDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['RFX_RFxDashlet']['columns'] = array (
  'rfx_title_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RFX_TITLE',
    'width' => '10%',
    'name' => 'rfx_title_c',
  ),
  'rfx_id_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_RFX_ID',
    'width' => '10%',
    'name' => 'rfx_id_c',
  ),
  'rfx_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_RFX_TYPE',
    'width' => '10%',
    'name' => 'rfx_type',
  ),
  'rfx_valid_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_RFX_VALID',
    'width' => '10%',
    'name' => 'rfx_valid_c',
  ),
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'branch_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BRANCH',
    'id' => 'BRCH_BRANCH_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'project_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'prepaid_freight_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PREPAID_FREIGHT',
    'width' => '10%',
  ),
  'ship_carrier_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIP_CARRIER',
    'width' => '10%',
  ),
  'required_delivery_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_REQUIRED_DELIVERY',
    'width' => '10%',
  ),
  'request_sent_date_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_REQUEST_SENT_DATE',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'delivery_terms_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DELIVERY_TERMS',
    'width' => '10%',
  ),
  'received_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'delivery_dest_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DELIVERY_DEST',
    'width' => '10%',
  ),
  'rfxa_url_c' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_RFXA_URL',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
