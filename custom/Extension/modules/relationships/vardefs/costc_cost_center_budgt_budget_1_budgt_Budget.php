<?php
// created: 2016-03-06 18:18:44
$dictionary["budgt_Budget"]["fields"]["costc_cost_center_budgt_budget_1"] = array (
  'name' => 'costc_cost_center_budgt_budget_1',
  'type' => 'link',
  'relationship' => 'costc_cost_center_budgt_budget_1',
  'source' => 'non-db',
  'module' => 'costc_cost_center',
  'bean_name' => 'costc_cost_center',
  'vname' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_COSTC_COST_CENTER_TITLE',
  'id_name' => 'costc_cost_center_budgt_budget_1costc_cost_center_ida',
);
$dictionary["budgt_Budget"]["fields"]["costc_cost_center_budgt_budget_1_name"] = array (
  'name' => 'costc_cost_center_budgt_budget_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_COSTC_COST_CENTER_TITLE',
  'save' => true,
  'id_name' => 'costc_cost_center_budgt_budget_1costc_cost_center_ida',
  'link' => 'costc_cost_center_budgt_budget_1',
  'table' => 'costc_cost_center',
  'module' => 'costc_cost_center',
  'rname' => 'name',
);
$dictionary["budgt_Budget"]["fields"]["costc_cost_center_budgt_budget_1costc_cost_center_ida"] = array (
  'name' => 'costc_cost_center_budgt_budget_1costc_cost_center_ida',
  'type' => 'link',
  'relationship' => 'costc_cost_center_budgt_budget_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
);
