<?php
// created: 2015-10-31 17:25:25
$dictionary["po_purchase_header_po_purchase_lines"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'po_purchase_header_po_purchase_lines' => 
    array (
      'lhs_module' => 'PO_Purchase_header',
      'lhs_table' => 'po_purchase_header',
      'lhs_key' => 'id',
      'rhs_module' => 'PO_Purchase_lines',
      'rhs_table' => 'po_purchase_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'po_purchase_header_po_purchase_lines_c',
      'join_key_lhs' => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
      'join_key_rhs' => 'po_purchase_header_po_purchase_linespo_purchase_lines_idb',
    ),
  ),
  'table' => 'po_purchase_header_po_purchase_lines_c',
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
      'name' => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'po_purchase_header_po_purchase_linespo_purchase_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'po_purchase_header_po_purchase_linesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'po_purchase_header_po_purchase_lines_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'po_purchase_header_po_purchase_lines_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'po_purchase_header_po_purchase_linespo_purchase_lines_idb',
      ),
    ),
  ),
);