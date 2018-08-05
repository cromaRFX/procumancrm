<?php
// created: 2015-09-20 12:57:59
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1"] = array (
  'name' => 'accounts_aos_products_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_aos_products_1accounts_ida',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1_name"] = array (
  'name' => 'accounts_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_aos_products_1accounts_ida',
  'link' => 'accounts_aos_products_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1accounts_ida"] = array (
  'name' => 'accounts_aos_products_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
