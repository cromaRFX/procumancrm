<?php
// created: 2018-07-13 12:31:43
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines_1"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purchf0edrequest_ida',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines_1_name"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purchf0edrequest_ida',
  'link' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchf0edrequest_ida"] = array (
  'name' => 'porq_purchf0edrequest_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
);
