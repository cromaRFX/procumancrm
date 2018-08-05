<?php
// created: 2015-10-26 20:07:12
$dictionary["po_purchase_header_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'po_purchase_header_notes' => 
    array (
      'lhs_module' => 'PO_Purchase_header',
      'lhs_table' => 'po_purchase_header',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'po_purchase_header_notes_c',
      'join_key_lhs' => 'po_purchase_header_notespo_purchase_header_ida',
      'join_key_rhs' => 'po_purchase_header_notesnotes_idb',
    ),
  ),
  'table' => 'po_purchase_header_notes_c',
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
      'name' => 'po_purchase_header_notespo_purchase_header_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'po_purchase_header_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'po_purchase_header_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'po_purchase_header_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'po_purchase_header_notespo_purchase_header_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'po_purchase_header_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'po_purchase_header_notesnotes_idb',
      ),
    ),
  ),
);