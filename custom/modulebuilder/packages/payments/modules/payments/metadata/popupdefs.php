<?php
$popupMeta = array (
    'moduleMain' => 'pay_payments',
    'varName' => 'pay_payments',
    'orderBy' => 'pay_payments.name',
    'whereClauses' => array (
  'name' => 'pay_payments.name',
  'payment_date' => 'pay_payments.payment_date',
  'payment_status' => 'pay_payments.payment_status',
  'payment_type' => 'pay_payments.payment_type',
  'assigned_user_name' => 'pay_payments.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'payment_date',
  5 => 'payment_status',
  6 => 'payment_type',
  7 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'payment_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PAYMENT_DATE',
    'width' => '10%',
    'name' => 'payment_date',
  ),
  'payment_status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
    'name' => 'payment_status',
  ),
  'payment_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_TYPE',
    'width' => '10%',
    'name' => 'payment_type',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
);
