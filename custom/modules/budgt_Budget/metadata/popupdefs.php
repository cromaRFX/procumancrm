<?php
$popupMeta = array (
    'moduleMain' => 'budgt_Budget',
    'varName' => 'budgt_Budget',
    'orderBy' => 'budgt_budget.name',
    'whereClauses' => array (
  'name' => 'budgt_budget.name',
),
    'searchInputs' => array (
  0 => 'budgt_budget_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BUDGET',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
),
);
