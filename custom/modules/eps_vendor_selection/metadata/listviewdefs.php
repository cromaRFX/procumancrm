<?php
$module_name = 'eps_vendor_selection';
$listViewDefs [$module_name] = 
array (
  'RFX_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RFX_NUMBER',
    'width' => '10%',
  ),
  'RFX_TITLE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RFX_TITLE',
    'width' => '10%',
  ),
  'RFX_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RFX_TYPE',
    'width' => '10%',
  ),
  'RFX_DEADLINE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_RFX_DEADLINE',
    'width' => '10%',
  ),
  'DELIVERY_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DELIVERY_DATE',
    'width' => '10%',
  ),
);
;
?>
