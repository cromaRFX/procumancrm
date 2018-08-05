<?php
// created: 2016-11-11 12:35:33
$dictionary["budgt_Budget"]["fields"]["project_budgt_budget_1"] = array (
  'name' => 'project_budgt_budget_1',
  'type' => 'link',
  'relationship' => 'project_budgt_budget_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_budgt_budget_1project_ida',
);
$dictionary["budgt_Budget"]["fields"]["project_budgt_budget_1_name"] = array (
  'name' => 'project_budgt_budget_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_budgt_budget_1project_ida',
  'link' => 'project_budgt_budget_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["budgt_Budget"]["fields"]["project_budgt_budget_1project_ida"] = array (
  'name' => 'project_budgt_budget_1project_ida',
  'type' => 'link',
  'relationship' => 'project_budgt_budget_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
);
