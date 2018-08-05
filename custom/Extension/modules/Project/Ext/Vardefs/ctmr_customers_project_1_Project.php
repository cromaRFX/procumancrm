<?php
// created: 2017-01-07 08:26:44
$dictionary["Project"]["fields"]["ctmr_customers_project_1"] = array (
  'name' => 'ctmr_customers_project_1',
  'type' => 'link',
  'relationship' => 'ctmr_customers_project_1',
  'source' => 'non-db',
  'module' => 'ctmr_Customers',
  'bean_name' => 'ctmr_Customers',
  'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_CTMR_CUSTOMERS_TITLE',
  'id_name' => 'ctmr_customers_project_1ctmr_customers_ida',
);
$dictionary["Project"]["fields"]["ctmr_customers_project_1_name"] = array (
  'name' => 'ctmr_customers_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_CTMR_CUSTOMERS_TITLE',
  'save' => true,
  'id_name' => 'ctmr_customers_project_1ctmr_customers_ida',
  'link' => 'ctmr_customers_project_1',
  'table' => 'ctmr_customers',
  'module' => 'ctmr_Customers',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["ctmr_customers_project_1ctmr_customers_ida"] = array (
  'name' => 'ctmr_customers_project_1ctmr_customers_ida',
  'type' => 'link',
  'relationship' => 'ctmr_customers_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_PROJECT_TITLE',
);
