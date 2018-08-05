<?php
// created: 2015-10-26 19:58:45
$dictionary["po_purchase_lines_aos_products"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'po_purchase_lines_aos_products' => 
    array (
      'lhs_module' => 'AOS_Products',
      'lhs_table' => 'aos_products',
      'lhs_key' => 'id',
      'rhs_module' => 'PO_Purchase_lines',
      'rhs_table' => 'po_purchase_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'po_purchase_lines_aos_products_c',
      'join_key_lhs' => 'po_purchase_lines_aos_productsaos_products_ida',
      'join_key_rhs' => 'po_purchase_lines_aos_productspo_purchase_lines_idb',
    ),
  ),
  'table' => 'po_purchase_lines_aos_products_c',
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
      'name' => 'po_purchase_lines_aos_productsaos_products_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'po_purchase_lines_aos_productspo_purchase_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'po_purchase_lines_aos_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'po_purchase_lines_aos_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'po_purchase_lines_aos_productsaos_products_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'po_purchase_lines_aos_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'po_purchase_lines_aos_productspo_purchase_lines_idb',
      ),
    ),
  ),
);