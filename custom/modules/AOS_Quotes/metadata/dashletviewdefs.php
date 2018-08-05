<?php
$dashletData['AOS_QuotesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'billing_account' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['AOS_QuotesDashlet']['columns'] = array (
  'number' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUM',
    'default' => true,
    'name' => 'number',
  ),
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'stage' => 
  array (
    'width' => '15%',
    'label' => 'LBL_STAGE',
    'default' => true,
    'name' => 'stage',
  ),
  'total_amount' => 
  array (
    'width' => '15%',
    'label' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'default' => true,
    'name' => 'total_amount',
  ),
  'expiration' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EXPIRATION',
    'default' => true,
    'name' => 'expiration',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'billing_account' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ACCOUNT',
    'name' => 'billing_account',
    'default' => false,
  ),
  'billing_contact' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_CONTACT',
    'name' => 'billing_contact',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'line_items' => 
  array (
    'type' => 'function',
    'label' => 'LBL_LINE_ITEMS',
    'width' => '10%',
    'default' => false,
  ),
  'opportunity' => 
  array (
    'width' => '25%',
    'label' => 'LBL_OPPORTUNITY',
    'name' => 'opportunity',
    'default' => false,
  ),
  'total_amt' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_AMT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'subtotal_amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'currency_id' => 
  array (
    'type' => 'id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'term' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TERM',
    'width' => '10%',
    'default' => false,
  ),
  'terms_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_TERMS_C',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'approval_status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_APPROVAL_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'invoice_status' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_STATUS',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'subtotal_tax_amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL_TAX_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'currency_code_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CURRENCY_CODE',
    'width' => '10%',
  ),
  'costc_cost_center_aos_quotes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_COSTC_COST_CENTER_TITLE',
    'id' => 'COSTC_COST_CENTER_AOS_QUOTES_1COSTC_COST_CENTER_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'project_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROJECT',
    'id' => 'PROJECT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'incoterms_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_INCOTERMS',
    'width' => '10%',
  ),
  'date_required_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_REQUIRED',
    'width' => '10%',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'supplier_reference_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUPPLIER_REFERENCE',
    'width' => '10%',
  ),
  'po_reference_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PO_REFERENCE',
    'width' => '10%',
  ),
  'delivery_branch_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DELIVERY_BRANCH',
    'id' => 'BRCH_BRANCH_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ship_carrier_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SHIP_CARRIER',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
