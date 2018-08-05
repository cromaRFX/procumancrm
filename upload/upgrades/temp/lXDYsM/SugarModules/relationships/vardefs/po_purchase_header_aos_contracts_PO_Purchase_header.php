<?php
// created: 2015-10-26 19:58:45
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_aos_contracts"] = array (
  'name' => 'po_purchase_header_aos_contracts',
  'type' => 'link',
  'relationship' => 'po_purchase_header_aos_contracts',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_PO_PURCHASE_HEADER_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'po_purchase_header_aos_contractsaos_contracts_ida',
);
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_aos_contracts_name"] = array (
  'name' => 'po_purchase_header_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_HEADER_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_header_aos_contractsaos_contracts_ida',
  'link' => 'po_purchase_header_aos_contracts',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["PO_Purchase_header"]["fields"]["po_purchase_header_aos_contractsaos_contracts_ida"] = array (
  'name' => 'po_purchase_header_aos_contractsaos_contracts_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_header_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_HEADER_AOS_CONTRACTS_FROM_PO_PURCHASE_HEADER_TITLE',
);
