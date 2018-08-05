<?php
$dashletData['AccountsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'account_type' => 
  array (
    'default' => '',
  ),
  'industry' => 
  array (
    'default' => '',
  ),
  'billing_address_country' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
    'label' => 'LBL_ASSIGNED_TO',
  ),
);
$dashletData['AccountsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'account_type',
  ),
  'website' => 
  array (
    'width' => '8%',
    'label' => 'LBL_WEBSITE',
    'default' => true,
    'name' => 'website',
  ),
  'phone_office' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
    'name' => 'phone_office',
  ),
  'billing_address_country' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => true,
    'name' => 'billing_address_country',
  ),
  'credit_limit_c' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_CREDIT_LIMIT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'phone_fax' => 
  array (
    'width' => '8%',
    'label' => 'LBL_PHONE_FAX',
    'name' => 'phone_fax',
    'default' => false,
  ),
  'phone_alternate' => 
  array (
    'width' => '8%',
    'label' => 'LBL_OTHER_PHONE',
    'name' => 'phone_alternate',
    'default' => false,
  ),
  'billing_address_city' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'name' => 'billing_address_city',
    'default' => false,
  ),
  'billing_address_street' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'name' => 'billing_address_street',
    'default' => false,
  ),
  'billing_address_state' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'name' => 'billing_address_state',
    'default' => false,
  ),
  'billing_address_postalcode' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'name' => 'billing_address_postalcode',
    'default' => false,
  ),
  'shipping_address_city' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'name' => 'shipping_address_city',
    'default' => false,
  ),
  'shipping_address_street' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'name' => 'shipping_address_street',
    'default' => false,
  ),
  'shipping_address_state' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'name' => 'shipping_address_state',
    'default' => false,
  ),
  'shipping_address_postalcode' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'name' => 'shipping_address_postalcode',
    'default' => false,
  ),
  'shipping_address_country' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'name' => 'shipping_address_country',
    'default' => false,
  ),
  'email1' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'name' => 'email1',
    'default' => false,
  ),
  'parent_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_MEMBER_OF',
    'sortable' => false,
    'name' => 'parent_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
