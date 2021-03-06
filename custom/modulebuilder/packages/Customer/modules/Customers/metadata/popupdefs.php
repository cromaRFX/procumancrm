<?php
$popupMeta = array (
    'moduleMain' => 'ctmr_Customers',
    'varName' => 'ctmr_Customers',
    'orderBy' => 'ctmr_customers.name',
    'whereClauses' => array (
  'name' => 'ctmr_customers.name',
  'customer_code' => 'ctmr_customers.customer_code',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'customer_code',
),
    'searchdefs' => array (
  'customer_code' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CUSTOMER_CODE',
    'width' => '10%',
    'name' => 'customer_code',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'CUSTOMER_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CUSTOMER_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
