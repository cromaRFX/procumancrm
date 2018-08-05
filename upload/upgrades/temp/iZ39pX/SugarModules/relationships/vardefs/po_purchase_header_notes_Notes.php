<?php
// created: 2015-10-31 17:25:25
$dictionary["Note"]["fields"]["po_purchase_header_notes"] = array (
  'name' => 'po_purchase_header_notes',
  'type' => 'link',
  'relationship' => 'po_purchase_header_notes',
  'source' => 'non-db',
  'module' => 'PO_Purchase_header',
  'bean_name' => 'PO_Purchase_header',
  'vname' => 'LBL_PO_PURCHASE_HEADER_NOTES_FROM_PO_PURCHASE_HEADER_TITLE',
  'id_name' => 'po_purchase_header_notespo_purchase_header_ida',
);
$dictionary["Note"]["fields"]["po_purchase_header_notes_name"] = array (
  'name' => 'po_purchase_header_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_HEADER_NOTES_FROM_PO_PURCHASE_HEADER_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_header_notespo_purchase_header_ida',
  'link' => 'po_purchase_header_notes',
  'table' => 'po_purchase_header',
  'module' => 'PO_Purchase_header',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["po_purchase_header_notespo_purchase_header_ida"] = array (
  'name' => 'po_purchase_header_notespo_purchase_header_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_header_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_HEADER_NOTES_FROM_NOTES_TITLE',
);
