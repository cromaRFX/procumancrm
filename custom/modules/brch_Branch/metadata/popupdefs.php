<?php
$popupMeta = array (
    'moduleMain' => 'brch_Branch',
    'varName' => 'brch_Branch',
    'orderBy' => 'brch_branch.name',
    'whereClauses' => array (
  'name' => 'brch_branch.name',
  'address_street' => 'brch_branch.address_street',
  'address_postalcode' => 'brch_branch.address_postalcode',
  'address_country' => 'brch_branch.address_country',
),
    'searchInputs' => array (
  0 => 'name',
  4 => 'address_street',
  5 => 'address_postalcode',
  6 => 'address_country',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_postalcode' => 
  array (
    'name' => 'address_postalcode',
    'label' => 'LBL_POSTAL_CODE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_country' => 
  array (
    'name' => 'address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'width' => '10%',
  ),
),
);
