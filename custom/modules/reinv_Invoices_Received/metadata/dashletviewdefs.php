<?php
$dashletData['reinv_Invoices_ReceivedDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['reinv_Invoices_ReceivedDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'invoice_value' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INVOICE_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_value',
  ),
  'po_number_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
    'name' => 'po_number_c',
  ),
  'invoice_paid' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_PAID',
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_paid',
  ),
  'invoice_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_date',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'purchase_order' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_ORDER',
    'id' => 'AOS_QUOTES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'purchase_order',
  ),
  'reference_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REFERENCE',
    'width' => '10%',
    'name' => 'reference_c',
  ),
  'invoice_auto_id_c' => 
  array (
    'type' => 'autoincrement',
    'default' => false,
    'label' => 'LBL_INVOICE_AUTO_ID',
    'width' => '10%',
    'name' => 'invoice_auto_id_c',
  ),
  'invoice_received_date_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_INVOICE_RECEIVED_DATE',
    'width' => '10%',
    'name' => 'invoice_received_date_c',
  ),
  'invoice_status_c' => 
  array (
    'type' => 'radioenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_STATUS_C',
    'width' => '10%',
    'name' => 'invoice_status_c',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'gl_account_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GL_ACCOUNT',
    'id' => 'GLA_GL_ACCOUNTS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'gl_account_c',
  ),
  'terms_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TERMS',
    'width' => '10%',
    'name' => 'terms_c',
  ),
  'cost_center_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COST_CENTER',
    'id' => 'COSTC_COST_CENTER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'cost_center_c',
  ),
  'tax_c' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TAX',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'tax_c',
  ),
  'branch_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BRANCH',
    'id' => 'BRCH_BRANCH_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'branch_c',
  ),
  'currency_id' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
    'name' => 'currency_id',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
