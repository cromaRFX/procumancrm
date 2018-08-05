<?php
// created: 2015-10-31 17:25:25
$dictionary["po_purchase_header_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'po_purchase_header_documents' => 
    array (
      'lhs_module' => 'PO_Purchase_header',
      'lhs_table' => 'po_purchase_header',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'po_purchase_header_documents_c',
      'join_key_lhs' => 'po_purchase_header_documentspo_purchase_header_ida',
      'join_key_rhs' => 'po_purchase_header_documentsdocuments_idb',
    ),
  ),
  'table' => 'po_purchase_header_documents_c',
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
      'name' => 'po_purchase_header_documentspo_purchase_header_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'po_purchase_header_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'po_purchase_header_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'po_purchase_header_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'po_purchase_header_documentspo_purchase_header_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'po_purchase_header_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'po_purchase_header_documentsdocuments_idb',
      ),
    ),
  ),
);