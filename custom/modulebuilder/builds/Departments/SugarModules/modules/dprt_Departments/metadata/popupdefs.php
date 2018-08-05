<?php
$popupMeta = array (
    'moduleMain' => 'dprt_Departments',
    'varName' => 'dprt_Departments',
    'orderBy' => 'dprt_departments.name',
    'whereClauses' => array (
  'name' => 'dprt_departments.name',
),
    'searchInputs' => array (
  0 => 'dprt_departments_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ABBREVIATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ABBREVIATION',
    'width' => '10%',
    'default' => true,
  ),
),
);
