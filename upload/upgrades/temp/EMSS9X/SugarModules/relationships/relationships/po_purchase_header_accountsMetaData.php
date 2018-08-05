<?php
// created: 2015-10-26 19:56:56
$dictionary["po_purchase_header_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'po_purchase_header_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'PO_Purchase_header',
      'rhs_table' => 'po_purchase_header',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'po_purchase_header_accounts_c',
      'join_key_lhs' => 'po_purchase_header_accountsaccounts_ida',
      'join_key_rhs' => 'po_purchase_header_accountspo_purchase_header_idb',
    ),
  ),
  'table' => 'po_purchase_header_accounts_c',
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
      'name' => 'po_purchase_header_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'po_purchase_header_accountspo_purchase_header_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'po_purchase_header_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'po_purchase_header_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'po_purchase_header_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'po_purchase_header_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'po_purchase_header_accountspo_purchase_header_idb',
      ),
    ),
  ),
);