<?php
// created: 2016-04-26 16:15:57
$dictionary["gla_gl_accounts_aos_quotes"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'gla_gl_accounts_aos_quotes' => 
    array (
      'lhs_module' => 'gla_GL_Accounts',
      'lhs_table' => 'gla_gl_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Quotes',
      'rhs_table' => 'aos_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gla_gl_accounts_aos_quotes_c',
      'join_key_lhs' => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
      'join_key_rhs' => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
    ),
  ),
  'table' => 'gla_gl_accounts_aos_quotes_c',
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
      'name' => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gla_gl_accounts_aos_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gla_gl_accounts_aos_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gla_gl_accounts_aos_quotes_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
      ),
    ),
  ),
);