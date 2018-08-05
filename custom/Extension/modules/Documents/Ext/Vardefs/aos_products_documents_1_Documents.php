<?php
// created: 2015-11-01 15:17:45
$dictionary["Document"]["fields"]["aos_products_documents_1"] = array (
  'name' => 'aos_products_documents_1',
  'type' => 'link',
  'relationship' => 'aos_products_documents_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_documents_1aos_products_ida',
);
$dictionary["Document"]["fields"]["aos_products_documents_1_name"] = array (
  'name' => 'aos_products_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_documents_1aos_products_ida',
  'link' => 'aos_products_documents_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["aos_products_documents_1aos_products_ida"] = array (
  'name' => 'aos_products_documents_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
