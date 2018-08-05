<?php
$popupMeta = array (
    'moduleMain' => 'stkwd_stock_withdrawal',
    'varName' => 'stkwd_stock_withdrawal',
    'orderBy' => 'stkwd_stock_withdrawal.name',
    'whereClauses' => array (
  'name' => 'stkwd_stock_withdrawal.name',
),
    'searchInputs' => array (
  0 => 'stkwd_stock_withdrawal_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'searchdefs' => array (
),
    'listviewdefs' => array (
  'PICK_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PICK_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'REQUEST' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_REQUEST',
    'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'REMARK' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARK',
    'width' => '10%',
    'default' => true,
  ),
),
);
