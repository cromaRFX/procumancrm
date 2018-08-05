<?php
// created: 2016-05-22 15:01:21
$dictionary["rfx_rfx_rfxa_rfx_answer_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'rfx_rfx_rfxa_rfx_answer_1' => 
    array (
      'lhs_module' => 'RFX_RFx',
      'lhs_table' => 'rfx_rfx',
      'lhs_key' => 'id',
      'rhs_module' => 'rfxa_RFX_Answer',
      'rhs_table' => 'rfxa_rfx_answer',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rfx_rfx_rfxa_rfx_answer_1_c',
      'join_key_lhs' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
      'join_key_rhs' => 'rfx_rfx_rfxa_rfx_answer_1rfxa_rfx_answer_idb',
    ),
  ),
  'table' => 'rfx_rfx_rfxa_rfx_answer_1_c',
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
      'name' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rfx_rfx_rfxa_rfx_answer_1rfxa_rfx_answer_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rfx_rfx_rfxa_rfx_answer_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rfx_rfx_rfxa_rfx_answer_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rfx_rfx_rfxa_rfx_answer_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rfx_rfx_rfxa_rfx_answer_1rfxa_rfx_answer_idb',
      ),
    ),
  ),
);