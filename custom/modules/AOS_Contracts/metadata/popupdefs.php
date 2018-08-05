<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Contracts',
    'varName' => 'AOS_Contracts',
    'orderBy' => 'aos_contracts.name',
    'whereClauses' => array (
  'name' => 'aos_contracts.name',
  'status' => 'aos_contracts.status',
  'start_date' => 'aos_contracts.start_date',
  'end_date' => 'aos_contracts.end_date',
  'contract_id_c' => 'aos_contracts_cstm.contract_id_c',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  5 => 'start_date',
  6 => 'end_date',
  7 => 'contract_id_c',
),
    'searchdefs' => array (
  'contract_id_c' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_CONTRACT_ID',
    'width' => '10%',
    'name' => 'contract_id_c',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'name' => 'start_date',
  ),
  'end_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'name' => 'end_date',
  ),
),
);
