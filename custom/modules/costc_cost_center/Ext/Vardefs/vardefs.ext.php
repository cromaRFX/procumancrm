<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-05 05:47:22
$dictionary['costc_cost_center']['fields']['eps_business_area_id_c']['inline_edit']=1;

 

 // created: 2018-06-05 05:47:22
$dictionary['costc_cost_center']['fields']['business_area_c']['inline_edit']='1';
$dictionary['costc_cost_center']['fields']['business_area_c']['labelValue']='Business Area';

 

// created: 2016-04-26 15:55:42
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_center"] = array (
  'name' => 'dprt_departments_costc_cost_center',
  'type' => 'link',
  'relationship' => 'dprt_departments_costc_cost_center',
  'source' => 'non-db',
  'module' => 'dprt_Departments',
  'bean_name' => false,
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
  'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
);
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_center_name"] = array (
  'name' => 'dprt_departments_costc_cost_center_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
  'save' => true,
  'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
  'link' => 'dprt_departments_costc_cost_center',
  'table' => 'dprt_departments',
  'module' => 'dprt_Departments',
  'rname' => 'name',
);
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_centerdprt_departments_ida"] = array (
  'name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
  'type' => 'link',
  'relationship' => 'dprt_departments_costc_cost_center',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_COSTC_COST_CENTER_TITLE',
);


 // created: 2016-11-04 15:58:20
$dictionary['costc_cost_center']['fields']['branch_c']['inline_edit']='';
$dictionary['costc_cost_center']['fields']['branch_c']['labelValue']='Branch';

 

// created: 2016-03-06 18:18:44
$dictionary["costc_cost_center"]["fields"]["costc_cost_center_budgt_budget_1"] = array (
  'name' => 'costc_cost_center_budgt_budget_1',
  'type' => 'link',
  'relationship' => 'costc_cost_center_budgt_budget_1',
  'source' => 'non-db',
  'module' => 'budgt_Budget',
  'bean_name' => 'budgt_Budget',
  'side' => 'right',
  'vname' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
);


 // created: 2018-06-05 05:48:08
$dictionary['costc_cost_center']['fields']['eps_company_id_c']['inline_edit']=1;

 

 // created: 2018-06-05 05:48:08
$dictionary['costc_cost_center']['fields']['company_c']['inline_edit']='1';
$dictionary['costc_cost_center']['fields']['company_c']['labelValue']='Company';

 

 // created: 2016-11-04 15:58:20
$dictionary['costc_cost_center']['fields']['brch_branch_id_c']['inline_edit']=1;

 

 // created: 2018-06-05 05:50:21
$dictionary['costc_cost_center']['fields']['status_c']['inline_edit']='1';
$dictionary['costc_cost_center']['fields']['status_c']['labelValue']='Status';

 

// created: 2016-03-06 18:43:50
$dictionary["costc_cost_center"]["fields"]["costc_cost_center_aos_quotes_1"] = array (
  'name' => 'costc_cost_center_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'costc_cost_center_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'side' => 'right',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);

?>