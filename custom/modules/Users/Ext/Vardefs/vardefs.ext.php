<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-12-28 10:24:25
$dictionary['User']['fields']['department']['inline_edit']=true;
$dictionary['User']['fields']['department']['merge_filter']='disabled';

 

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


 // created: 2016-11-01 13:42:52
$dictionary['User']['fields']['emp_id_c']['inline_edit']='';
$dictionary['User']['fields']['emp_id_c']['labelValue']='Employee ID';

 

 // created: 2016-12-28 10:25:15
$dictionary['User']['fields']['dprt_departments_id_c']['inline_edit']=1;

 

 // created: 2016-12-28 10:25:15
$dictionary['User']['fields']['department_master_c']['inline_edit']='1';
$dictionary['User']['fields']['department_master_c']['labelValue']='department master';

 

 // created: 2016-09-16 10:39:41
$dictionary['User']['fields']['cost_center_c']['inline_edit']='';
$dictionary['User']['fields']['cost_center_c']['labelValue']='Cost Center';

 

 // created: 2018-07-16 06:20:36
$dictionary['User']['fields']['signature_c']['inline_edit']='1';
$dictionary['User']['fields']['signature_c']['labelValue']='Signature';

 

 // created: 2017-01-19 13:44:05
$dictionary['User']['fields']['approval_limit_c']['inline_edit']='';
$dictionary['User']['fields']['approval_limit_c']['labelValue']='Approval Limit';

 

 // created: 2016-09-16 10:39:41
$dictionary['User']['fields']['costc_cost_center_id_c']['inline_edit']=1;

 
?>