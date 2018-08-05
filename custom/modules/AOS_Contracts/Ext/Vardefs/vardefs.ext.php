<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-10-01 19:46:37
$dictionary['AOS_Contracts']['fields']['line_items']['function']['name'] = 'display_lines';
$dictionary['AOS_Contracts']['fields']['line_items']['function']['returns'] =  'html';
$dictionary['AOS_Contracts']['fields']['line_items']['function']['include'] = 'custom/modules/AOS_Products_Quotes/Line_Items.php';

 

 // created: 2016-04-21 18:09:14
$dictionary['AOS_Contracts']['fields']['contract_id_c']['inline_edit']='';
$dictionary['AOS_Contracts']['fields']['contract_id_c']['labelValue']='Contract ID';

 

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


 // created: 2016-02-20 13:27:01
$dictionary['AOS_Contracts']['fields']['contract_account']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['contract_account']['merge_filter']='disabled';

 

 // created: 2016-10-01 19:46:37
$dictionary['AOS_Contracts']['fields']['shipping_tax_amt']['function']['name'] = 'display_shipping_vat';
$dictionary['AOS_Contracts']['fields']['shipping_tax_amt']['function']['returns'] =  'html';
$dictionary['AOS_Contracts']['fields']['shipping_tax_amt']['function']['include'] = 'custom/modules/AOS_Products_Quotes/Line_Items.php';

 
?>