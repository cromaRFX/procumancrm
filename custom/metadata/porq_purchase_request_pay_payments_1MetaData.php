<?php
// created: 2018-04-08 06:53:04
$dictionary["porq_purchase_request_pay_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'porq_purchase_request_pay_payments_1' => 
    array (
      'lhs_module' => 'porq_Purchase_Request',
      'lhs_table' => 'porq_purchase_request',
      'lhs_key' => 'id',
      'rhs_module' => 'pay_payments',
      'rhs_table' => 'pay_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'porq_purchase_request_pay_payments_1_c',
      'join_key_lhs' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
      'join_key_rhs' => 'porq_purchase_request_pay_payments_1pay_payments_idb',
    ),
  ),
  'table' => 'porq_purchase_request_pay_payments_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1pay_payments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'porq_purchase_request_pay_payments_1pay_payments_idb',
      ),
    ),
  ),
);