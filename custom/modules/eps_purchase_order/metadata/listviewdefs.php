<?php
$module_name = 'eps_purchase_order';
$listViewDefs [$module_name] = 
array (
  'PO_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
  ),
  'PO_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PO_TYPE',
    'width' => '10%',
  ),
  'REQ_DESC_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REQ_DESC',
    'sortable' => false,
    'width' => '10%',
  ),
  'PO_STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PO_STATUS',
    'width' => '10%',
  ),
);
;
?>
