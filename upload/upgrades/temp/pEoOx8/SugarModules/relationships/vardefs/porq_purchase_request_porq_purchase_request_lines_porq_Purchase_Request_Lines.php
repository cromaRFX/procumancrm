<?php
// created: 2016-04-09 17:48:38
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => false,
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purch2f10request_ida',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines_name"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purch2f10request_ida',
  'link' => 'porq_purchase_request_porq_purchase_request_lines',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purch2f10request_ida"] = array (
  'name' => 'porq_purch2f10request_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
);
