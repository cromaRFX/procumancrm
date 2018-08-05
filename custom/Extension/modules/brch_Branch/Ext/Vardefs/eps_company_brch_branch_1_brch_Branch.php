<?php
// created: 2018-07-19 12:25:40
$dictionary["brch_Branch"]["fields"]["eps_company_brch_branch_1"] = array (
  'name' => 'eps_company_brch_branch_1',
  'type' => 'link',
  'relationship' => 'eps_company_brch_branch_1',
  'source' => 'non-db',
  'module' => 'eps_company',
  'bean_name' => 'eps_company',
  'vname' => 'LBL_EPS_COMPANY_BRCH_BRANCH_1_FROM_EPS_COMPANY_TITLE',
  'id_name' => 'eps_company_brch_branch_1eps_company_ida',
);
$dictionary["brch_Branch"]["fields"]["eps_company_brch_branch_1_name"] = array (
  'name' => 'eps_company_brch_branch_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EPS_COMPANY_BRCH_BRANCH_1_FROM_EPS_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'eps_company_brch_branch_1eps_company_ida',
  'link' => 'eps_company_brch_branch_1',
  'table' => 'eps_company',
  'module' => 'eps_company',
  'rname' => 'name',
);
$dictionary["brch_Branch"]["fields"]["eps_company_brch_branch_1eps_company_ida"] = array (
  'name' => 'eps_company_brch_branch_1eps_company_ida',
  'type' => 'link',
  'relationship' => 'eps_company_brch_branch_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EPS_COMPANY_BRCH_BRANCH_1_FROM_BRCH_BRANCH_TITLE',
);
