<?php
$dashletData['asset_assetsDashlet']['searchFields'] = array (
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
$dashletData['asset_assetsDashlet']['columns'] = array (
  'asset_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_ASSET_TYPE',
    'width' => '10%',
  ),
  'short_description' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHORT_DESCRIPTION',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'contact' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
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
  'serial_nr' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERIAL_NR',
    'width' => '10%',
    'default' => false,
  ),
  'decommission_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DECOMMISSION_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'room' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ROOM',
    'width' => '10%',
    'default' => false,
  ),
  'asset_value' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASSET_VALUE',
    'width' => '10%',
    'default' => false,
  ),
  'building' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BUILDING',
    'width' => '10%',
    'default' => false,
  ),
  'last_inspection' => 
  array (
    'type' => 'date',
    'label' => 'LBL_LAST_INSPECTION',
    'width' => '10%',
    'default' => false,
  ),
  'purchase_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PURCHASE_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'warranty' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WARRANTY',
    'width' => '10%',
    'default' => false,
  ),
  'project' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'product' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'purchase_order' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_ORDER',
    'id' => 'AOS_QUOTES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
