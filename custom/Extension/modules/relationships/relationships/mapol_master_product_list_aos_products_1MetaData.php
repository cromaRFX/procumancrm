<?php
// created: 2016-12-06 19:44:57
$dictionary["mapol_master_product_list_aos_products_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mapol_master_product_list_aos_products_1' => 
    array (
      'lhs_module' => 'mapol_master_product_list',
      'lhs_table' => 'mapol_master_product_list',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mapol_master_product_list_aos_products_1_c',
      'join_key_lhs' => 'mapol_mast4e8ect_list_ida',
      'join_key_rhs' => 'mapol_master_product_list_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'mapol_master_product_list_aos_products_1_c',
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
      'name' => 'mapol_mast4e8ect_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mapol_mast4e8ect_list_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mapol_master_product_list_aos_products_1aos_products_idb',
      ),
    ),
  ),
);