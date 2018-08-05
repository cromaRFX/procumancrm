<?php
$module_name = 'PO_Purchase_lines';
$listViewDefs [$module_name] = 
array (
  'LINE_NR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_LINE_NR',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRODUCT_REF' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_REF',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
