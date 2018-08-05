<?php
// created: 2016-10-25 11:14:38
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1"] = array (
  'name' => 'reinv_invoices_received_documents_1',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_documents_1',
  'source' => 'non-db',
  'module' => 'reinv_Invoices_Received',
  'bean_name' => 'reinv_Invoices_Received',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
);
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1_name"] = array (
  'name' => 'reinv_invoices_received_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'save' => true,
  'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
  'link' => 'reinv_invoices_received_documents_1',
  'table' => 'reinv_invoices_received',
  'module' => 'reinv_Invoices_Received',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1reinv_invoices_received_ida"] = array (
  'name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
