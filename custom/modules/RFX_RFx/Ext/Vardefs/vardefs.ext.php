<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-11-02 19:54:58
$dictionary['RFX_RFx']['fields']['branch_c']['inline_edit']='';
$dictionary['RFX_RFx']['fields']['branch_c']['labelValue']='Responsible Branch';

 

 // created: 2016-12-22 17:25:56
$dictionary['RFX_RFx']['fields']['project_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['project_c']['labelValue']='Project';

 

 // created: 2016-12-22 17:25:56
$dictionary['RFX_RFx']['fields']['project_id_c']['inline_edit']=1;

 

 // created: 2016-05-05 16:51:41
$dictionary['RFX_RFx']['fields']['rfx_title_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['rfx_title_c']['labelValue']='RFX Title';

 

 // created: 2016-06-01 18:12:57
$dictionary['RFX_RFx']['fields']['delivery_dest_c']['inline_edit']='';
$dictionary['RFX_RFx']['fields']['delivery_dest_c']['labelValue']='Delivery Destination';

 

 // created: 2016-04-21 18:04:44
$dictionary['RFX_RFx']['fields']['rfx_id_c']['inline_edit']='';
$dictionary['RFX_RFx']['fields']['rfx_id_c']['labelValue']='RFX Number';

 

// created: 2016-05-22 15:01:21
$dictionary["RFX_RFx"]["fields"]["rfx_rfx_rfxa_rfx_answer_1"] = array (
  'name' => 'rfx_rfx_rfxa_rfx_answer_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_rfxa_rfx_answer_1',
  'source' => 'non-db',
  'module' => 'rfxa_RFX_Answer',
  'bean_name' => 'rfxa_RFX_Answer',
  'side' => 'right',
  'vname' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFXA_RFX_ANSWER_TITLE',
);


// created: 2016-06-06 12:55:35
$dictionary["RFX_RFx"]["fields"]["rfx_rfx_accounts_1"] = array (
  'name' => 'rfx_rfx_accounts_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_RFX_RFX_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


 // created: 2016-04-21 20:04:26
$dictionary['RFX_RFx']['fields']['rfx_valid_c']['inline_edit']='';
$dictionary['RFX_RFx']['fields']['rfx_valid_c']['labelValue']='RFX Deadline';

 

 // created: 2016-12-22 17:20:51
$dictionary['RFX_RFx']['fields']['prepaid_freight_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['prepaid_freight_c']['labelValue']='Prepaid Freight';

 

// created: 2016-12-06 21:06:19
$dictionary["RFX_RFx"]["fields"]["securitygroups_rfx_rfx_1"] = array (
  'name' => 'securitygroups_rfx_rfx_1',
  'type' => 'link',
  'relationship' => 'securitygroups_rfx_rfx_1',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_SECURITYGROUPS_RFX_RFX_1_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2016-05-06 14:43:33
$dictionary['RFX_RFx']['fields']['date_entered']['options']='';

 

 // created: 2016-12-22 17:19:43
$dictionary['RFX_RFx']['fields']['ship_carrier_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['ship_carrier_c']['labelValue']='Ship Carrier';

 

 // created: 2016-11-02 19:54:58
$dictionary['RFX_RFx']['fields']['brch_branch_id_c']['inline_edit']=1;

 

 // created: 2016-12-22 17:15:56
$dictionary['RFX_RFx']['fields']['required_delivery_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['required_delivery_c']['labelValue']='Required Delivery';

 

// created: 2016-02-12 14:30:25
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1"] = array (
  'name' => 'opportunities_rfx_rfx_1',
  'type' => 'link',
  'relationship' => 'opportunities_rfx_rfx_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_rfx_rfx_1opportunities_ida',
);
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1_name"] = array (
  'name' => 'opportunities_rfx_rfx_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_rfx_rfx_1opportunities_ida',
  'link' => 'opportunities_rfx_rfx_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1opportunities_ida"] = array (
  'name' => 'opportunities_rfx_rfx_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_rfx_rfx_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_RFX_RFX_TITLE',
);


 // created: 2016-04-22 08:55:07
$dictionary['RFX_RFx']['fields']['rfx_type']['default']='RFQ';

 

 // created: 2016-05-31 18:18:19
$dictionary['RFX_RFx']['fields']['delivery_terms_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['delivery_terms_c']['labelValue']='Delivery Terms';

 

 // created: 2016-05-05 16:45:24
$dictionary['RFX_RFx']['fields']['description']['rows']='10';
$dictionary['RFX_RFx']['fields']['description']['required']=true;

 

// created: 2016-04-01 06:37:43
$dictionary["RFX_RFx"]["fields"]["rfx_rfx_documents_1"] = array (
  'name' => 'rfx_rfx_documents_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2016-05-31 06:22:07
$dictionary['RFX_RFx']['fields']['rfxa_url_c']['inline_edit']='';
$dictionary['RFX_RFx']['fields']['rfxa_url_c']['labelValue']='eTender URL';

 

 // created: 2016-05-05 16:42:11
$dictionary['RFX_RFx']['fields']['name']['required']=false;
$dictionary['RFX_RFx']['fields']['name']['full_text_search']=array (
);

 

 // created: 2016-02-12 14:34:22
$dictionary['RFX_RFx']['fields']['request_sent_date_c']['inline_edit']='1';
$dictionary['RFX_RFx']['fields']['request_sent_date_c']['labelValue']='Request Sent Date';

 
?>