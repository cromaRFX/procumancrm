<?php
// created: 2016-04-09 18:07:56
$dictionary["porq_purchase_request_porq_purchase_request_lines"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'porq_purchase_request_porq_purchase_request_lines' => 
    array (
      'lhs_module' => 'porq_Purchase_Request',
      'lhs_table' => 'porq_purchase_request',
      'lhs_key' => 'id',
      'rhs_module' => 'porq_Purchase_Request_Lines',
      'rhs_table' => 'porq_purchase_request_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'porq_purchase_request_porq_purchase_request_lines_c',
      'join_key_lhs' => 'porq_purch2f10request_ida',
      'join_key_rhs' => 'porq_purch97d9t_lines_idb',
    ),
  ),
  'table' => 'porq_purchase_request_porq_purchase_request_lines_c',
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
      'name' => 'porq_purch2f10request_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'porq_purch97d9t_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'porq_purchase_request_porq_purchase_request_linesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'porq_purchase_request_porq_purchase_request_lines_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'porq_purch2f10request_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'porq_purchase_request_porq_purchase_request_lines_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'porq_purch97d9t_lines_idb',
      ),
    ),
  ),
);