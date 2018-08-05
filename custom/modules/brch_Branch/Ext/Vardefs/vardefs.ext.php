<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2016-11-05 08:01:20
$dictionary['brch_Branch']['fields']['website']['inline_edit']=true;
$dictionary['brch_Branch']['fields']['website']['merge_filter']='disabled';
$dictionary['brch_Branch']['fields']['website']['link_target']='_self';

 

 // created: 2016-11-05 08:03:28
$dictionary['brch_Branch']['fields']['company_website_c']['inline_edit']='';
$dictionary['brch_Branch']['fields']['company_website_c']['labelValue']='Company Website';

 

 // created: 2016-11-02 19:12:06
$dictionary['brch_Branch']['fields']['headquarter_c']['inline_edit']='';
$dictionary['brch_Branch']['fields']['headquarter_c']['labelValue']='Headquarter';

 

 // created: 2016-11-04 16:34:02
$dictionary['brch_Branch']['fields']['tax_number_c']['inline_edit']='';
$dictionary['brch_Branch']['fields']['tax_number_c']['labelValue']='Tax Number';

 

 // created: 2017-01-09 07:45:46
$dictionary['brch_Branch']['fields']['name']['inline_edit']=true;
$dictionary['brch_Branch']['fields']['name']['comments']='Name of the Company';
$dictionary['brch_Branch']['fields']['name']['merge_filter']='disabled';
$dictionary['brch_Branch']['fields']['name']['unified_search']=false;

 

// created: 2016-11-02 19:03:05
$dictionary["brch_Branch"]["fields"]["brch_branch_users_1"] = array (
  'name' => 'brch_branch_users_1',
  'type' => 'link',
  'relationship' => 'brch_branch_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_BRCH_BRANCH_USERS_1_FROM_USERS_TITLE',
);


 // created: 2017-01-09 07:46:19
$dictionary['brch_Branch']['fields']['company_name_c']['inline_edit']='1';
$dictionary['brch_Branch']['fields']['company_name_c']['labelValue']='Company Name';

 
?>