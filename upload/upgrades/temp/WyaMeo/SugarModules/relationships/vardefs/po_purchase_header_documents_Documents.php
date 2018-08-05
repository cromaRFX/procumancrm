<?php
// created: 2015-10-27 17:57:09
$dictionary["Document"]["fields"]["po_purchase_header_documents"] = array (
  'name' => 'po_purchase_header_documents',
  'type' => 'link',
  'relationship' => 'po_purchase_header_documents',
  'source' => 'non-db',
  'module' => 'PO_Purchase_header',
  'bean_name' => 'PO_Purchase_header',
  'vname' => 'LBL_PO_PURCHASE_HEADER_DOCUMENTS_FROM_PO_PURCHASE_HEADER_TITLE',
  'id_name' => 'po_purchase_header_documentspo_purchase_header_ida',
);
$dictionary["Document"]["fields"]["po_purchase_header_documents_name"] = array (
  'name' => 'po_purchase_header_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_HEADER_DOCUMENTS_FROM_PO_PURCHASE_HEADER_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_header_documentspo_purchase_header_ida',
  'link' => 'po_purchase_header_documents',
  'table' => 'po_purchase_header',
  'module' => 'PO_Purchase_header',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["po_purchase_header_documentspo_purchase_header_ida"] = array (
  'name' => 'po_purchase_header_documentspo_purchase_header_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_header_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_HEADER_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
