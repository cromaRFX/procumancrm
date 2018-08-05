<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-04-15 16:17:20
$dictionary['appr_Approvals']['fields']['approved_product_c']['inline_edit']='';
$dictionary['appr_Approvals']['fields']['approved_product_c']['labelValue']='Approved Product';

 

 // created: 2016-11-03 19:15:33
$dictionary['appr_Approvals']['fields']['branch_c']['inline_edit']='';
$dictionary['appr_Approvals']['fields']['branch_c']['labelValue']='Branch';

 

 // created: 2017-02-12 09:48:56
$dictionary['appr_Approvals']['fields']['budget_report_c']['inline_edit']='';
$dictionary['appr_Approvals']['fields']['budget_report_c']['labelValue']='Check Budget Report';

 

 // created: 2016-04-15 16:17:19
$dictionary['appr_Approvals']['fields']['aos_products_id_c']['inline_edit']=1;

 

 // created: 2016-11-03 19:15:33
$dictionary['appr_Approvals']['fields']['brch_branch_id_c']['inline_edit']=1;

 

 // created: 2018-05-19 11:14:36
$dictionary['appr_Approvals']['fields']['alert_message_c']['inline_edit']='';
$dictionary['appr_Approvals']['fields']['alert_message_c']['labelValue']='alert message';

 

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

?>