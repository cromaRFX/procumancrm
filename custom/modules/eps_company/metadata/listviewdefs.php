<?php
$module_name = 'eps_company';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ABBREVIATION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ABBREVIATION',
    'width' => '10%',
  ),
  'COMPANY_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMPANY_NAME',
    'width' => '10%',
  ),
  'CURRENCY_CODE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY_CODE',
    'width' => '10%',
  ),
  'ADDRESS_1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_1',
    'width' => '10%',
  ),
);
;
?>
