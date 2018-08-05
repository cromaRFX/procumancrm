<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2018-07-18 03:57:09

 

 // created: 2018-07-18 05:42:15
$dictionary['budgt_Budget']['fields']['invoice_amount_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['invoice_amount_c']['labelValue']='invoice amount';

 

 // created: 2018-07-18 03:59:42
$dictionary['budgt_Budget']['fields']['cost_center_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['cost_center_c']['labelValue']='Cost Center';

 

 // created: 2018-07-18 05:41:50
$dictionary['budgt_Budget']['fields']['gr_amount_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['gr_amount_c']['labelValue']='gr amount';

 

 // created: 2018-07-18 05:41:37
$dictionary['budgt_Budget']['fields']['po_amount_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['po_amount_c']['labelValue']='po amount';

 

 // created: 2018-07-18 04:00:08
$dictionary['budgt_Budget']['fields']['locked_budget_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['locked_budget_c']['labelValue']='Locked Budget';

 

 // created: 2018-07-18 03:55:18
$dictionary['budgt_Budget']['fields']['name']['inline_edit']='';
$dictionary['budgt_Budget']['fields']['name']['len']='20';
$dictionary['budgt_Budget']['fields']['name']['required']=true;
$dictionary['budgt_Budget']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-07-18 05:21:27
$dictionary['budgt_Budget']['fields']['available_budget_c']['inline_edit']='1';
$dictionary['budgt_Budget']['fields']['available_budget_c']['labelValue']='available budget';

 

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

?>