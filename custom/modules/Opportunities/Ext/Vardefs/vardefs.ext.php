<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-04-23 07:30:22
$dictionary['Opportunity']['fields']['scouting_id_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['scouting_id_c']['labelValue']='Scouting ID';

 

 // created: 2014-01-20 12:22:33

 


 // created: 2014-01-20 12:22:32

 


 // created: 2016-02-10 12:47:54
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['required']=false;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';

 

 // created: 2016-02-10 12:47:43
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';

 

 // created: 2014-01-20 12:22:33

 


// created: 2016-02-12 14:30:25
$dictionary["Opportunity"]["fields"]["opportunities_rfx_rfx_1"] = array (
  'name' => 'opportunities_rfx_rfx_1',
  'type' => 'link',
  'relationship' => 'opportunities_rfx_rfx_1',
  'source' => 'non-db',
  'module' => 'RFX_RFx',
  'bean_name' => 'RFX_RFx',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_RFX_RFX_TITLE',
);


 // created: 2014-01-20 12:22:33

 


 // created: 2016-02-10 12:44:16
$dictionary['Opportunity']['fields']['name']['inline_edit']=true;
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
);

 

 // created: 2016-02-10 12:26:58
$dictionary['Opportunity']['fields']['date_closed']['inline_edit']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';

 
?>