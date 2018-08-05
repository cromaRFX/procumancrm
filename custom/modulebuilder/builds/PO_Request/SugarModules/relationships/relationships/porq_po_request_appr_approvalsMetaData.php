<?php
// created: 2016-04-04 20:24:02
$dictionary["porq_po_request_appr_approvals"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'porq_po_request_appr_approvals' => 
    array (
      'lhs_module' => 'porq_PO_Request',
      'lhs_table' => 'porq_po_request',
      'lhs_key' => 'id',
      'rhs_module' => 'appr_Approvals',
      'rhs_table' => 'appr_approvals',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'porq_po_request_appr_approvals_c',
      'join_key_lhs' => 'porq_po_request_appr_approvalsporq_po_request_ida',
      'join_key_rhs' => 'porq_po_request_appr_approvalsappr_approvals_idb',
    ),
  ),
  'table' => 'porq_po_request_appr_approvals_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'porq_po_request_appr_approvalsporq_po_request_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'porq_po_request_appr_approvalsappr_approvals_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'porq_po_request_appr_approvalsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'porq_po_request_appr_approvals_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'porq_po_request_appr_approvalsporq_po_request_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'porq_po_request_appr_approvals_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'porq_po_request_appr_approvalsappr_approvals_idb',
      ),
    ),
  ),
);