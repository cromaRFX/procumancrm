<?php
// created: 2016-04-23 07:25:34
$dictionary["gdrcp_goods_receipt_documents_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'gdrcp_goods_receipt_documents_1' => 
    array (
      'lhs_module' => 'gdrcp_Goods_Receipt',
      'lhs_table' => 'gdrcp_goods_receipt',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gdrcp_goods_receipt_documents_1_c',
      'join_key_lhs' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
      'join_key_rhs' => 'gdrcp_goods_receipt_documents_1documents_idb',
    ),
  ),
  'table' => 'gdrcp_goods_receipt_documents_1_c',
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
      'name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1documents_idb',
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
      'name' => 'gdrcp_goods_receipt_documents_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gdrcp_goods_receipt_documents_1documents_idb',
      ),
    ),
  ),
);