<?php
// created: 2016-04-26 15:55:42
$dictionary["dprt_departments_costc_cost_center"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dprt_departments_costc_cost_center' => 
    array (
      'lhs_module' => 'dprt_Departments',
      'lhs_table' => 'dprt_departments',
      'lhs_key' => 'id',
      'rhs_module' => 'costc_cost_center',
      'rhs_table' => 'costc_cost_center',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dprt_departments_costc_cost_center_c',
      'join_key_lhs' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
      'join_key_rhs' => 'dprt_departments_costc_cost_centercostc_cost_center_idb',
    ),
  ),
  'table' => 'dprt_departments_costc_cost_center_c',
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
      'name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dprt_departments_costc_cost_centercostc_cost_center_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dprt_departments_costc_cost_centerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dprt_departments_costc_cost_center_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dprt_departments_costc_cost_centerdprt_departments_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dprt_departments_costc_cost_center_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dprt_departments_costc_cost_centercostc_cost_center_idb',
      ),
    ),
  ),
);