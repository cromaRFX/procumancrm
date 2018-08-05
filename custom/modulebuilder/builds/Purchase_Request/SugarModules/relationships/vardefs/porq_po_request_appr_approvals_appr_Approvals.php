<?php
// created: 2016-04-09 18:07:56
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvals"] = array (
  'name' => 'porq_po_request_appr_approvals',
  'type' => 'link',
  'relationship' => 'porq_po_request_appr_approvals',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => false,
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_po_request_appr_approvalsporq_purchase_request_ida',
);
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvals_name"] = array (
  'name' => 'porq_po_request_appr_approvals_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_po_request_appr_approvalsporq_purchase_request_ida',
  'link' => 'porq_po_request_appr_approvals',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvalsporq_purchase_request_ida"] = array (
  'name' => 'porq_po_request_appr_approvalsporq_purchase_request_ida',
  'type' => 'link',
  'relationship' => 'porq_po_request_appr_approvals',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_APPR_APPROVALS_TITLE',
);
