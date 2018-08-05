<?php
// created: 2018-07-19 12:25:40
$dictionary["eps_company_brch_branch_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'eps_company_brch_branch_1' => 
    array (
      'lhs_module' => 'eps_company',
      'lhs_table' => 'eps_company',
      'lhs_key' => 'id',
      'rhs_module' => 'brch_Branch',
      'rhs_table' => 'brch_branch',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eps_company_brch_branch_1_c',
      'join_key_lhs' => 'eps_company_brch_branch_1eps_company_ida',
      'join_key_rhs' => 'eps_company_brch_branch_1brch_branch_idb',
    ),
  ),
  'table' => 'eps_company_brch_branch_1_c',
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
      'name' => 'eps_company_brch_branch_1eps_company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eps_company_brch_branch_1brch_branch_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eps_company_brch_branch_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eps_company_brch_branch_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'eps_company_brch_branch_1eps_company_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'eps_company_brch_branch_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eps_company_brch_branch_1brch_branch_idb',
      ),
    ),
  ),
);