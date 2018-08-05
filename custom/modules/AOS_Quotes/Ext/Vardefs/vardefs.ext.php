<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-11-01 18:41:48
$dictionary["AOS_Quotes"]["fields"]["aos_quotes_documents_1"] = array (
  'name' => 'aos_quotes_documents_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2017-02-06 09:40:13
$dictionary['AOS_Quotes']['fields']['billing_contact']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['billing_contact']['merge_filter']='disabled';

 

 // created: 2016-04-28 17:37:08
$dictionary['AOS_Quotes']['fields']['approval_issue']['audited']=false;
$dictionary['AOS_Quotes']['fields']['approval_issue']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['approval_issue']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['approval_issue']['rows']='4';
$dictionary['AOS_Quotes']['fields']['approval_issue']['cols']='20';

 

 // created: 2016-04-25 15:47:59
$dictionary['AOS_Quotes']['fields']['incoterms_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['incoterms_c']['labelValue']='Incoterms';

 

 // created: 2017-01-04 19:36:58
$dictionary['AOS_Quotes']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2016-11-04 16:43:18
$dictionary['AOS_Quotes']['fields']['billing_account']['required']=true;
$dictionary['AOS_Quotes']['fields']['billing_account']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['billing_account']['merge_filter']='disabled';

 

 // created: 2016-06-11 16:25:43
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-09-17 14:48:08
$dictionary['AOS_Quotes']['fields']['supplier_reference_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['supplier_reference_c']['labelValue']='Supplier Reference';

 

 // created: 2016-09-18 18:36:02
$dictionary['AOS_Quotes']['fields']['documents_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['documents_c']['labelValue']='Required Documents';

 

 // created: 2016-04-28 17:39:28
$dictionary['AOS_Quotes']['fields']['approval_status']['audited']=false;
$dictionary['AOS_Quotes']['fields']['approval_status']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['approval_status']['merge_filter']='disabled';

 

 // created: 2016-06-21 19:32:16
$dictionary['AOS_Quotes']['fields']['project_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['project_c']['labelValue']='Project';

 

 // created: 2016-09-17 14:58:35
$dictionary['AOS_Quotes']['fields']['po_reference_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['po_reference_c']['labelValue']='Our PO Reference';

 

 // created: 2016-06-21 19:32:16
$dictionary['AOS_Quotes']['fields']['project_id_c']['inline_edit']=1;

 

 // created: 2016-04-28 17:34:40
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt_usdollar']['enable_range_search']=false;

 

 // created: 2016-10-01 19:46:37
$dictionary['AOS_Quotes']['fields']['line_items']['function']['name'] = 'display_lines';
$dictionary['AOS_Quotes']['fields']['line_items']['function']['returns'] =  'html';
$dictionary['AOS_Quotes']['fields']['line_items']['function']['include'] = 'custom/modules/AOS_Products_Quotes/Line_Items.php';

 

 // created: 2016-04-28 17:38:00
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount']['audited']=false;
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_tax_amount']['enable_range_search']=false;

 


$dictionary['AOS_Quotes']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_aos_quotes',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2016-04-14 19:21:42
$dictionary['AOS_Quotes']['fields']['date_required_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['date_required_c']['labelValue']='Date Required';

 

 // created: 2016-09-17 15:34:43
$dictionary['AOS_Quotes']['fields']['term']['audited']=false;
$dictionary['AOS_Quotes']['fields']['term']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['term']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['term']['options']='payment_terms';

 

 // created: 2016-04-28 17:36:21
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-04-25 15:55:37
$dictionary['AOS_Quotes']['fields']['stage']['required']=false;
$dictionary['AOS_Quotes']['fields']['stage']['audited']=false;
$dictionary['AOS_Quotes']['fields']['stage']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['stage']['merge_filter']='disabled';

 

 // created: 2016-04-28 17:35:58
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-04-28 17:33:56
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-06-11 12:22:34
$dictionary['AOS_Quotes']['fields']['currency_code_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['currency_code_c']['labelValue']='Currency Code';

 

 // created: 2016-04-28 17:37:39
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['audited']=false;
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['enable_range_search']=false;

 

 // created: 2016-04-28 17:36:52
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amt_usdollar']['enable_range_search']=false;

 

 // created: 2017-03-01 13:48:06
$dictionary['AOS_Quotes']['fields']['rfxa_rfx_answer_id_c']['inline_edit']=1;

 

 // created: 2016-12-22 15:27:06
$dictionary['AOS_Quotes']['fields']['ship_carrier_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['ship_carrier_c']['labelValue']='Ship with Carrier';

 

 // created: 2016-11-02 19:21:51
$dictionary['AOS_Quotes']['fields']['brch_branch_id_c']['inline_edit']=1;

 

// created: 2016-12-03 06:25:04
$dictionary["AOS_Quotes"]["fields"]["aos_quotes_porq_purchase_request_1"] = array (
  'name' => 'aos_quotes_porq_purchase_request_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_porq_purchase_request_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_AOS_QUOTES_PORQ_PURCHASE_REQUEST_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
);


// created: 2016-03-06 18:43:50
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1"] = array (
  'name' => 'costc_cost_center_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'costc_cost_center_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'costc_cost_center',
  'bean_name' => 'costc_cost_center',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_COSTC_COST_CENTER_TITLE',
  'id_name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
);
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1_name"] = array (
  'name' => 'costc_cost_center_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_COSTC_COST_CENTER_TITLE',
  'save' => true,
  'id_name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
  'link' => 'costc_cost_center_aos_quotes_1',
  'table' => 'costc_cost_center',
  'module' => 'costc_cost_center',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1costc_cost_center_ida"] = array (
  'name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
  'type' => 'link',
  'relationship' => 'costc_cost_center_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);

 
$dictionary["AOS_Quotes"]["fields"]["reinv_invoices_received"] = array (
	'name' => 'reinv_invoices_received',
	'type' => 'link',
	'relationship' => 'reinv_invoices_received_aos_quotes',
	'source' => 'non-db',
	'vname' => 'LBL_REINV_INVOICES_RECEIVED',
);


 // created: 2016-11-02 19:21:51
$dictionary['AOS_Quotes']['fields']['delivery_branch_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['delivery_branch_c']['labelValue']='Delivery to Branch';

 

 // created: 2016-04-28 17:40:32
$dictionary['AOS_Quotes']['fields']['expiration']['required']=false;
$dictionary['AOS_Quotes']['fields']['expiration']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['expiration']['display_default']='';
$dictionary['AOS_Quotes']['fields']['expiration']['audited']=false;
$dictionary['AOS_Quotes']['fields']['expiration']['inline_edit']='';

 

 // created: 2016-04-28 17:33:32
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-01-14 19:57:33
$dictionary['AOS_Quotes']['fields']['description']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['description']['comments']='';
$dictionary['AOS_Quotes']['fields']['description']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['description']['cols']='60';
$dictionary['AOS_Quotes']['fields']['description']['rows']='4';

 

 // created: 2016-04-28 17:37:27
$dictionary['AOS_Quotes']['fields']['discount_amount']['audited']=false;
$dictionary['AOS_Quotes']['fields']['discount_amount']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['discount_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount']['enable_range_search']=false;

 

 // created: 2017-01-04 19:36:58
$dictionary['AOS_Quotes']['fields']['our_contact_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['our_contact_c']['labelValue']='Our Contact';

 

 // created: 2016-04-28 17:40:54
$dictionary['AOS_Quotes']['fields']['invoice_status']['audited']=false;
$dictionary['AOS_Quotes']['fields']['invoice_status']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['invoice_status']['merge_filter']='disabled';

 

 // created: 2017-03-01 13:48:06
$dictionary['AOS_Quotes']['fields']['rfx_quote_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['rfx_quote_c']['labelValue']='RFQ Offer';

 

 // created: 2016-04-28 17:38:18
$dictionary['AOS_Quotes']['fields']['tax_amount']['audited']=false;
$dictionary['AOS_Quotes']['fields']['tax_amount']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['tax_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount']['enable_range_search']=false;

 

 // created: 2016-04-28 17:38:35
$dictionary['AOS_Quotes']['fields']['terms_c']['audited']=false;
$dictionary['AOS_Quotes']['fields']['terms_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['terms_c']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['terms_c']['rows']='4';
$dictionary['AOS_Quotes']['fields']['terms_c']['cols']='20';

 

// created: 2018-04-08 06:53:34
$dictionary["AOS_Quotes"]["fields"]["aos_quotes_pay_payments_1"] = array (
  'name' => 'aos_quotes_pay_payments_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_pay_payments_1',
  'source' => 'non-db',
  'module' => 'pay_payments',
  'bean_name' => 'pay_payments',
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
);


 // created: 2016-04-29 16:37:34
$dictionary['AOS_Quotes']['fields']['name']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['name']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['name']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['name']['unified_search']=false;

 

 // created: 2016-04-28 17:38:47
$dictionary['AOS_Quotes']['fields']['total_amt']['audited']=false;
$dictionary['AOS_Quotes']['fields']['total_amt']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['total_amt']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amt']['enable_range_search']=false;

 

 // created: 2016-04-28 17:34:58
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['audited']=false;
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-01-14 20:00:49
$dictionary['AOS_Quotes']['fields']['internal_notes_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['internal_notes_c']['labelValue']='Internal Notes';

 

 // created: 2016-10-01 19:46:37
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt']['function']['name'] = 'display_shipping_vat';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt']['function']['returns'] =  'html';
$dictionary['AOS_Quotes']['fields']['shipping_tax_amt']['function']['include'] = 'custom/modules/AOS_Products_Quotes/Line_Items.php';

 
?>