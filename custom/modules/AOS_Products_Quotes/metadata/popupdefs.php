<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products_Quotes',
    'varName' => 'AOS_Products_Quotes',
    'orderBy' => 'aos_products_quotes.name',
    'whereClauses' => array (
  'name' => 'aos_products_quotes.name',
  'part_number' => 'aos_products_quotes.part_number',
  'po_number_c' => 'aos_products_quotes_cstm.po_number_c',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'part_number',
  9 => 'po_number_c',
),
    'searchdefs' => array (
  'po_number_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
    'name' => 'po_number_c',
  ),
  'part_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
    'name' => 'part_number',
  ),
  'name' => 
  array (
    'type' => 'text',
    'link' => true,
    'label' => 'LBL_NAME',
    'sortable' => false,
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'PO_NUMBER_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
    'name' => 'po_number_c',
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'label' => 'LBL_FLEX_RELATE',
    'link' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'width' => '10%',
    'default' => true,
    'name' => 'parent_name',
  ),
  'NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_NUM',
    'width' => '10%',
    'default' => true,
    'name' => 'number',
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PART_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
    'name' => 'part_number',
  ),
  'PRODUCT_QTY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRODUCT_QTY',
    'width' => '10%',
    'default' => true,
    'name' => 'product_qty',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status_c',
  ),
),
);
