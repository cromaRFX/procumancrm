<?php
$popupMeta = array (
    'moduleMain' => 'reinv_Invoices_Received',
    'varName' => 'reinv_Invoices_Received',
    'orderBy' => 'reinv_invoices_received.name',
    'whereClauses' => array (
  'name' => 'reinv_invoices_received.name',
),
    'searchInputs' => array (
  0 => 'reinv_invoices_received_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PURCHASE_ORDER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_ORDER',
    'id' => 'AOS_QUOTES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'purchase_order',
  ),
  'PO_NUMBER_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
  ),
  'REFERENCE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REFERENCE',
    'width' => '10%',
    'name' => 'reference_c',
  ),
  'INVOICE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_date',
  ),
  'INVOICE_PAID' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_PAID',
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_paid',
  ),
  'INVOICE_VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INVOICE_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_value',
  ),
  'INVOICE_STATUS_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_STATUS_C',
    'width' => '10%',
    'name' => 'invoice_status_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
