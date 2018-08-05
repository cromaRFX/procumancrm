<?php
// created: 2015-10-31 17:25:25
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_lines_aos_products"] = array (
  'name' => 'po_purchase_lines_aos_products',
  'type' => 'link',
  'relationship' => 'po_purchase_lines_aos_products',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_PO_PURCHASE_LINES_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'po_purchase_lines_aos_productsaos_products_ida',
);
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_lines_aos_products_name"] = array (
  'name' => 'po_purchase_lines_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PO_PURCHASE_LINES_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'po_purchase_lines_aos_productsaos_products_ida',
  'link' => 'po_purchase_lines_aos_products',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["PO_Purchase_lines"]["fields"]["po_purchase_lines_aos_productsaos_products_ida"] = array (
  'name' => 'po_purchase_lines_aos_productsaos_products_ida',
  'type' => 'link',
  'relationship' => 'po_purchase_lines_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PO_PURCHASE_LINES_AOS_PRODUCTS_FROM_PO_PURCHASE_LINES_TITLE',
);
