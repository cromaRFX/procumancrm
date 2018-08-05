<?php
// created: 2016-11-12 08:29:15
$dictionary["AOS_Contracts"]["fields"]["project_aos_contracts_1"] = array (
  'name' => 'project_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'project_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_AOS_CONTRACTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_aos_contracts_1project_ida',
);
$dictionary["AOS_Contracts"]["fields"]["project_aos_contracts_1_name"] = array (
  'name' => 'project_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AOS_CONTRACTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_aos_contracts_1project_ida',
  'link' => 'project_aos_contracts_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["project_aos_contracts_1project_ida"] = array (
  'name' => 'project_aos_contracts_1project_ida',
  'type' => 'link',
  'relationship' => 'project_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);
