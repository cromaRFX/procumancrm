<?php
// created: 2016-11-02 19:03:05
$dictionary["brch_branch_users_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'brch_branch_users_1' => 
    array (
      'lhs_module' => 'brch_Branch',
      'lhs_table' => 'brch_branch',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'brch_branch_users_1_c',
      'join_key_lhs' => 'brch_branch_users_1brch_branch_ida',
      'join_key_rhs' => 'brch_branch_users_1users_idb',
    ),
  ),
  'table' => 'brch_branch_users_1_c',
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
      'name' => 'brch_branch_users_1brch_branch_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'brch_branch_users_1users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'brch_branch_users_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'brch_branch_users_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'brch_branch_users_1brch_branch_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'brch_branch_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'brch_branch_users_1users_idb',
      ),
    ),
  ),
);