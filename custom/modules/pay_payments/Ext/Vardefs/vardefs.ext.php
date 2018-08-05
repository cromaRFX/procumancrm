<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-08 07:10:59
$dictionary['pay_payments']['fields']['payment_status']['default']='2';

 

// created: 2018-04-08 06:54:08
$dictionary["pay_payments"]["fields"]["reinv_invoices_received_pay_payments_1"] = array (
  'name' => 'reinv_invoices_received_pay_payments_1',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_pay_payments_1',
  'source' => 'non-db',
  'module' => 'reinv_Invoices_Received',
  'bean_name' => 'reinv_Invoices_Received',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'id_name' => 'reinv_invod260eceived_ida',
);
$dictionary["pay_payments"]["fields"]["reinv_invoices_received_pay_payments_1_name"] = array (
  'name' => 'reinv_invoices_received_pay_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'save' => true,
  'id_name' => 'reinv_invod260eceived_ida',
  'link' => 'reinv_invoices_received_pay_payments_1',
  'table' => 'reinv_invoices_received',
  'module' => 'reinv_Invoices_Received',
  'rname' => 'name',
);
$dictionary["pay_payments"]["fields"]["reinv_invod260eceived_ida"] = array (
  'name' => 'reinv_invod260eceived_ida',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_pay_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
);


// created: 2018-04-08 06:53:34
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1"] = array (
  'name' => 'aos_quotes_pay_payments_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_pay_payments_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
);
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1_name"] = array (
  'name' => 'aos_quotes_pay_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
  'link' => 'aos_quotes_pay_payments_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_pay_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
);


// created: 2018-04-08 06:53:05
$dictionary["pay_payments"]["fields"]["porq_purchase_request_pay_payments_1"] = array (
  'name' => 'porq_purchase_request_pay_payments_1',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_pay_payments_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
);
$dictionary["pay_payments"]["fields"]["porq_purchase_request_pay_payments_1_name"] = array (
  'name' => 'porq_purchase_request_pay_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
  'link' => 'porq_purchase_request_pay_payments_1',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["pay_payments"]["fields"]["porq_purchase_request_pay_payments_1porq_purchase_request_ida"] = array (
  'name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_pay_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
);

?>