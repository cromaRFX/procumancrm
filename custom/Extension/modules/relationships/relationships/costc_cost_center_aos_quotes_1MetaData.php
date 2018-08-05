<?php
// created: 2016-03-06 18:43:49
$dictionary["costc_cost_center_aos_quotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'costc_cost_center_aos_quotes_1' => 
    array (
      'lhs_module' => 'costc_cost_center',
      'lhs_table' => 'costc_cost_center',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Quotes',
      'rhs_table' => 'aos_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'costc_cost_center_aos_quotes_1_c',
      'join_key_lhs' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
      'join_key_rhs' => 'costc_cost_center_aos_quotes_1aos_quotes_idb',
    ),
  ),
  'table' => 'costc_cost_center_aos_quotes_1_c',
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
      'name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'costc_cost_center_aos_quotes_1aos_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'costc_cost_center_aos_quotes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'costc_cost_center_aos_quotes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'costc_cost_center_aos_quotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'costc_cost_center_aos_quotes_1aos_quotes_idb',
      ),
    ),
  ),
);