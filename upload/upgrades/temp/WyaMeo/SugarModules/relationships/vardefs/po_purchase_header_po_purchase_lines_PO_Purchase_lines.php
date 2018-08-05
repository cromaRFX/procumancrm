<?php
// created: 2015-10-27 17:57:09
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_header_po_purchase_lines"] = array (
  'name' => 'po_purchase_header_po_purchase_lines',
  'type' => 'link',
  'relationship' => 'po_purchase_header_po_purchase_lines',
  'source' => 'non-db',
  'module' => 'PO_Purchase_header',
  'bean_name' => 'PO_Purchase_header',
  'vname' => 'LBL_PO_PURCHASE_HEADER_PO_PURCHASE_LINES_FROM_PO_PURCHASE_HEADER_TITLE',
  'id_name' => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
);
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_header_po_purchase_lines_name"] = array (
  'name' => 'po_purchase_header_po_purchase_lines_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_HEADER_PO_PURCHASE_LINES_FROM_PO_PURCHASE_HEADER_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
  'link' => 'po_purchase_header_po_purchase_lines',
  'table' => 'po_purchase_header',
  'module' => 'PO_Purchase_header',
  'rname' => 'name',
);
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_header_po_purchase_linespo_purchase_header_ida"] = array (
  'name' => 'po_purchase_header_po_purchase_linespo_purchase_header_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_header_po_purchase_lines',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_HEADER_PO_PURCHASE_LINES_FROM_PO_PURCHASE_LINES_TITLE',
);
