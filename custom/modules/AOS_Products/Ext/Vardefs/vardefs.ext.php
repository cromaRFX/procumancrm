<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-10-09 09:45:49
$dictionary['AOS_Products']['fields']['trade_license_expiry_date_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['trade_license_expiry_date_c']['labelValue']='Trade License Expiry Date';

 

 // created: 2016-12-06 19:23:07
$dictionary['AOS_Products']['fields']['is_preferred_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['is_preferred_c']['labelValue']='Is Preferred';

 

 // created: 2017-01-13 19:47:07
$dictionary['AOS_Products']['fields']['price_usdollar']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['price_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Products']['fields']['price_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Products']['fields']['price_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Products']['fields']['price_usdollar']['enable_range_search']=false;

 

 // created: 2018-03-29 20:01:50
$dictionary['AOS_Products']['fields']['price']['required']=true;
$dictionary['AOS_Products']['fields']['price']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['price']['merge_filter']='disabled';
$dictionary['AOS_Products']['fields']['price']['help']='excl VAT';
$dictionary['AOS_Products']['fields']['price']['comments']='excl VAT';

 

 // created: 2016-12-05 20:06:10
$dictionary['AOS_Products']['fields']['internal_item_code_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['internal_item_code_c']['labelValue']='Internal Item Code';

 

// created: 2015-09-20 12:57:59
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1"] = array (
  'name' => 'accounts_aos_products_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_aos_products_1accounts_ida',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1_name"] = array (
  'name' => 'accounts_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_aos_products_1accounts_ida',
  'link' => 'accounts_aos_products_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1accounts_ida"] = array (
  'name' => 'accounts_aos_products_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


$dictionary['AOS_Products']['fields']['accounts_aos_products_1_name']['required']=true;


 // created: 2016-04-23 11:33:54
$dictionary['AOS_Products']['fields']['reorder_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['reorder_c']['labelValue']='Re-Order Level';

 

 // created: 2017-02-22 15:14:56
$dictionary['AOS_Products']['fields']['brand_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['brand_c']['labelValue']='Brand';

 

 // created: 2016-02-12 14:49:37
$dictionary['AOS_Products']['fields']['product_image']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['product_image']['comments']='File name associated with the note (attachment)';
$dictionary['AOS_Products']['fields']['product_image']['merge_filter']='disabled';

 

 // created: 2016-04-24 12:06:47
$dictionary['AOS_Products']['fields']['in_stock_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['in_stock_c']['labelValue']='Available in Stock';

 

 // created: 2016-04-23 11:01:54
$dictionary['AOS_Products']['fields']['dimensions_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['dimensions_c']['labelValue']='Dimensions';

 

 // created: 2016-04-23 11:19:48
$dictionary['AOS_Products']['fields']['unit_of_measure_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['unit_of_measure_c']['labelValue']='UOM';

 

 // created: 2016-02-12 15:56:53
$dictionary['AOS_Products']['fields']['sales_unit_size_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['sales_unit_size_c']['labelValue']='Sales Unit Size';

 

 // created: 2017-03-23 20:55:43
$dictionary['AOS_Products']['fields']['supplier_name_c']['name']='supplier_name_c';
$dictionary['AOS_Products']['fields']['supplier_name_c']['vname']='LBL_SUPPLIER_NAME_C';
$dictionary['AOS_Products']['fields']['supplier_name_c']['type']='varchar';
$dictionary['AOS_Products']['fields']['supplier_name_c']['massupdate']=0;
$dictionary['AOS_Products']['fields']['supplier_name_c']['no_default']=false;
$dictionary['AOS_Products']['fields']['supplier_name_c']['comments']='';
$dictionary['AOS_Products']['fields']['supplier_name_c']['help']='';
$dictionary['AOS_Products']['fields']['supplier_name_c']['importable']='true';
$dictionary['AOS_Products']['fields']['supplier_name_c']['required']=false;
$dictionary['AOS_Products']['fields']['supplier_name_c']['duplicate_merge']='disabled';
$dictionary['AOS_Products']['fields']['supplier_name_c']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Products']['fields']['supplier_name_c']['audited']=true;
$dictionary['AOS_Products']['fields']['supplier_name_c']['reportable']=true;
$dictionary['AOS_Products']['fields']['supplier_name_c']['unified_search']=false;
$dictionary['AOS_Products']['fields']['supplier_name_c']['merge_filter']='disabled';
$dictionary['AOS_Products']['fields']['supplier_name_c']['len']='255';
$dictionary['AOS_Products']['fields']['supplier_name_c']['size']='20';
$dictionary['AOS_Products']['fields']['supplier_name_c']['inline_edit']=true;

 

// created: 2015-11-01 15:17:45
$dictionary["AOS_Products"]["fields"]["aos_products_documents_1"] = array (
  'name' => 'aos_products_documents_1',
  'type' => 'link',
  'relationship' => 'aos_products_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2016-04-23 11:32:48
$dictionary['AOS_Products']['fields']['moq_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['moq_c']['labelValue']='Min Order Qty';

 

 // created: 2016-11-11 15:33:13
$dictionary['AOS_Products']['fields']['aos_contracts_id_c']['inline_edit']=1;

 


$dictionary['AOS_Products']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_aos_products',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2016-04-16 16:11:28
$dictionary["AOS_Products"]["fields"]["aos_products_stkwd_stock_withdrawal_1"] = array (
  'name' => 'aos_products_stkwd_stock_withdrawal_1',
  'type' => 'link',
  'relationship' => 'aos_products_stkwd_stock_withdrawal_1',
  'source' => 'non-db',
  'module' => 'stkwd_stock_withdrawal',
  'bean_name' => 'stkwd_stock_withdrawal',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_STKWD_STOCK_WITHDRAWAL_TITLE',
);


// created: 2016-12-06 19:44:57
$dictionary["AOS_Products"]["fields"]["mapol_master_product_list_aos_products_1"] = array (
  'name' => 'mapol_master_product_list_aos_products_1',
  'type' => 'link',
  'relationship' => 'mapol_master_product_list_aos_products_1',
  'source' => 'non-db',
  'module' => 'mapol_master_product_list',
  'bean_name' => 'mapol_master_product_list',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
  'id_name' => 'mapol_mast4e8ect_list_ida',
);
$dictionary["AOS_Products"]["fields"]["mapol_master_product_list_aos_products_1_name"] = array (
  'name' => 'mapol_master_product_list_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
  'save' => true,
  'id_name' => 'mapol_mast4e8ect_list_ida',
  'link' => 'mapol_master_product_list_aos_products_1',
  'table' => 'mapol_master_product_list',
  'module' => 'mapol_master_product_list',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["mapol_mast4e8ect_list_ida"] = array (
  'name' => 'mapol_mast4e8ect_list_ida',
  'type' => 'link',
  'relationship' => 'mapol_master_product_list_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


 // created: 2016-02-12 14:51:24
$dictionary['AOS_Products']['fields']['product_pic_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['product_pic_c']['labelValue']='Product Image';

 

 // created: 2016-11-09 17:13:48
$dictionary['AOS_Products']['fields']['price_valid_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['price_valid_c']['labelValue']='Price Valid Until';

 

 // created: 2016-11-11 15:33:13
$dictionary['AOS_Products']['fields']['contract_c']['inline_edit']='';
$dictionary['AOS_Products']['fields']['contract_c']['labelValue']='Contract';

 
?>