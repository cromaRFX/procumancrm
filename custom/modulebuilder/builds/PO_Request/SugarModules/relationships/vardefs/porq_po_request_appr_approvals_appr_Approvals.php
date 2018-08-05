<?php
// created: 2016-04-04 20:24:02
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvals"] = array (
  'name' => 'porq_po_request_appr_approvals',
  'type' => 'link',
  'relationship' => 'porq_po_request_appr_approvals',
  'source' => 'non-db',
  'module' => 'porq_PO_Request',
  'bean_name' => false,
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_PORQ_PO_REQUEST_TITLE',
  'id_name' => 'porq_po_request_appr_approvalsporq_po_request_ida',
);
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvals_name"] = array (
  'name' => 'porq_po_request_appr_approvals_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_PORQ_PO_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_po_request_appr_approvalsporq_po_request_ida',
  'link' => 'porq_po_request_appr_approvals',
  'table' => 'porq_po_request',
  'module' => 'porq_PO_Request',
  'rname' => 'name',
);
$dictionary["appr_Approvals"]["fields"]["porq_po_request_appr_approvalsporq_po_request_ida"] = array (
  'name' => 'porq_po_request_appr_approvalsporq_po_request_ida',
  'type' => 'link',
  'relationship' => 'porq_po_request_appr_approvals',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_APPR_APPROVALS_TITLE',
);
