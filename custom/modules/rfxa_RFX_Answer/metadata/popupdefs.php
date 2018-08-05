<?php
$popupMeta = array (
    'moduleMain' => 'rfxa_RFX_Answer',
    'varName' => 'rfxa_RFX_Answer',
    'orderBy' => 'rfxa_rfx_answer.name',
    'whereClauses' => array (
  'name' => 'rfxa_rfx_answer.name',
  'rfx_rfx_rfxa_rfx_answer_1_name' => 'rfxa_rfx_answer.rfx_rfx_rfxa_rfx_answer_1_name',
  'supplier' => 'rfxa_rfx_answer.supplier',
  'supplier_name' => 'rfxa_rfx_answer.supplier_name',
  'document_name' => 'rfxa_rfx_answer.document_name',
  'exp_date' => 'rfxa_rfx_answer.exp_date',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'rfx_rfx_rfxa_rfx_answer_1_name',
  5 => 'supplier',
  6 => 'supplier_name',
  7 => 'document_name',
  8 => 'exp_date',
),
    'searchdefs' => array (
  'rfx_rfx_rfxa_rfx_answer_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFX_RFX_TITLE',
    'id' => 'RFX_RFX_RFXA_RFX_ANSWER_1RFX_RFX_IDA',
    'width' => '10%',
    'name' => 'rfx_rfx_rfxa_rfx_answer_1_name',
  ),
  'supplier' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SUPPLIER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'supplier',
  ),
  'supplier_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_NAME',
    'width' => '10%',
    'name' => 'supplier_name',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'name',
    'width' => '10%',
    'name' => 'name',
  ),
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
  ),
  'exp_date' => 
  array (
    'name' => 'exp_date',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'RFX_RFX_RFXA_RFX_ANSWER_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFX_RFX_TITLE',
    'id' => 'RFX_RFX_RFXA_RFX_ANSWER_1RFX_RFX_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'rfx_rfx_rfxa_rfx_answer_1_name',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'SUPPLIER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SUPPLIER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'supplier',
  ),
  'SUPPLIER_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'supplier_name',
  ),
  'SUPPLIER_REFERENCE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_REFERENCE',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
    'name' => 'exp_date',
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'name' => 'status_id',
  ),
  'SELECTION_REMARK' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SELECTION_REMARK',
    'width' => '10%',
    'default' => true,
    'name' => 'selection_remark',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
