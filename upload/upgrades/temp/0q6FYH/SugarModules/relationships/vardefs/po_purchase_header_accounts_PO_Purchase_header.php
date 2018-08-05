<?php
// created: 2015-10-27 17:58:10
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_accounts"] = array (
  'name' => 'po_purchase_header_accounts',
  'type' => 'link',
  'relationship' => 'po_purchase_header_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_PO_PURCHASE_HEADER_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'po_purchase_header_accountsaccounts_ida',
);
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_accounts_name"] = array (
  'name' => 'po_purchase_header_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_HEADER_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_header_accountsaccounts_ida',
  'link' => 'po_purchase_header_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_accountsaccounts_ida"] = array (
  'name' => 'po_purchase_header_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_header_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_HEADER_ACCOUNTS_FROM_PO_PURCHASE_HEADER_TITLE',
);
