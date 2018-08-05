<?php
// created: 2016-11-02 19:03:05
$dictionary["User"]["fields"]["brch_branch_users_1"] = array (
  'name' => 'brch_branch_users_1',
  'type' => 'link',
  'relationship' => 'brch_branch_users_1',
  'source' => 'non-db',
  'module' => 'brch_Branch',
  'bean_name' => 'brch_Branch',
  'vname' => 'LBL_BRCH_BRANCH_USERS_1_FROM_BRCH_BRANCH_TITLE',
  'id_name' => 'brch_branch_users_1brch_branch_ida',
);
$dictionary["User"]["fields"]["brch_branch_users_1_name"] = array (
  'name' => 'brch_branch_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BRCH_BRANCH_USERS_1_FROM_BRCH_BRANCH_TITLE',
  'save' => true,
  'id_name' => 'brch_branch_users_1brch_branch_ida',
  'link' => 'brch_branch_users_1',
  'table' => 'brch_branch',
  'module' => 'brch_Branch',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["brch_branch_users_1brch_branch_ida"] = array (
  'name' => 'brch_branch_users_1brch_branch_ida',
  'type' => 'link',
  'relationship' => 'brch_branch_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BRCH_BRANCH_USERS_1_FROM_USERS_TITLE',
);
