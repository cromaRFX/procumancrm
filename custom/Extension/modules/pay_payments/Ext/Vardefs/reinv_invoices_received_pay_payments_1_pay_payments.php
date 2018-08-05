<?php
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
