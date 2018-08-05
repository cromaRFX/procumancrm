<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-04-21 17:23:28
$dictionary['porq_Purchase_Request_Lines']['fields']['line_nr_c']['inline_edit']='1';
$dictionary['porq_Purchase_Request_Lines']['fields']['line_nr_c']['labelValue']='Line';

 

 // created: 2016-04-21 14:30:53
$dictionary['porq_Purchase_Request_Lines']['fields']['price']['len']='8';

 

// created: 2018-07-13 12:31:43
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines_1"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purchf0edrequest_ida',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchase_request_porq_purchase_request_lines_1_name"] = array (
  'name' => 'porq_purchase_request_porq_purchase_request_lines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purchf0edrequest_ida',
  'link' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["porq_Purchase_Request_Lines"]["fields"]["porq_purchf0edrequest_ida"] = array (
  'name' => 'porq_purchf0edrequest_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_porq_purchase_request_lines_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
);


 // created: 2018-07-20 10:22:30
$dictionary['porq_Purchase_Request_Lines']['fields']['description']['inline_edit']=true;
$dictionary['porq_Purchase_Request_Lines']['fields']['description']['comments']='Full text of the note';
$dictionary['porq_Purchase_Request_Lines']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-07-20 10:23:43

 

 // created: 2018-07-20 10:22:42
$dictionary['porq_Purchase_Request_Lines']['fields']['name']['inline_edit']='';
$dictionary['porq_Purchase_Request_Lines']['fields']['name']['full_text_search']=array (
);

 

 // created: 2016-04-21 17:03:09

 
?>