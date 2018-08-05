<?php
// created: 2016-04-10 10:39:03
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1"] = array (
  'name' => 'porq_purchase_request_documents_1',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_documents_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
);
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1_name"] = array (
  'name' => 'porq_purchase_request_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
  'link' => 'porq_purchase_request_documents_1',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1porq_purchase_request_ida"] = array (
  'name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
