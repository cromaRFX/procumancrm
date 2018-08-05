<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-01-20 12:22:34

 

 // created: 2014-01-20 12:22:33

 

// created: 2016-12-04 15:07:36
$dictionary["Project"]["fields"]["project_documents_1"] = array (
  'name' => 'project_documents_1',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-06-25 23:55:39
$dictionary["Project"]["fields"]["am_projectholidays_project"] = array (
  'name' => 'am_projectholidays_project',
  'type' => 'link',
  'relationship' => 'am_projectholidays_project',
  'source' => 'non-db',
  'module' => 'AM_ProjectHolidays',
  'bean_name' => 'AM_ProjectHolidays',
  'side' => 'right',
  'vname' => 'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE',
);



$dictionary['Project']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_project',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2016-11-12 08:29:15
$dictionary["Project"]["fields"]["project_aos_contracts_1"] = array (
  'name' => 'project_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'project_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);


 // created: 2014-01-20 12:22:34

 

// created: 2016-11-11 12:35:33
$dictionary["Project"]["fields"]["project_budgt_budget_1"] = array (
  'name' => 'project_budgt_budget_1',
  'type' => 'link',
  'relationship' => 'project_budgt_budget_1',
  'source' => 'non-db',
  'module' => 'budgt_Budget',
  'bean_name' => 'budgt_Budget',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
);


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


 // created: 2014-01-20 12:22:34

 
?>