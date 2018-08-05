<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-21 08:05:31
$dictionary['gdrcp_Goods_Receipt']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['receipt_id_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['receipt_id_c']['labelValue']='Receipt ID';

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['product_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['product_c']['labelValue']='Product';

 

 // created: 2016-04-24 13:11:30
$dictionary['gdrcp_Goods_Receipt']['fields']['remarks']['inline_edit']='';

 

// created: 2016-04-23 07:25:34
$dictionary["gdrcp_Goods_Receipt"]["fields"]["gdrcp_goods_receipt_documents_1"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1',
  'type' => 'link',
  'relationship' => 'gdrcp_goods_receipt_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['po_line_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['po_line_c']['labelValue']='PO Line';

 

// created: 2016-05-01 18:45:29
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'type' => 'link',
  'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'module' => 'AOS_Products_Quotes',
  'bean_name' => 'AOS_Products_Quotes',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
  'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1_name"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
  'link' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'table' => 'aos_products_quotes',
  'module' => 'AOS_Products_Quotes',
  'rname' => 'name',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
);


 // created: 2018-06-21 08:05:30
$dictionary['gdrcp_Goods_Receipt']['fields']['aos_products_id_c']['inline_edit']=1;

 

 // created: 2018-06-21 08:05:31
$dictionary['gdrcp_Goods_Receipt']['fields']['gla_gl_accounts_id_c']['inline_edit']=1;

 

 // created: 2018-06-21 08:05:30
$dictionary['gdrcp_Goods_Receipt']['fields']['account_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['account_c']['labelValue']='GL Account';

 

// created: 2016-12-21 16:08:47
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoices_received_gdrcp_goods_receipt_1"] = array (
  'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'module' => 'reinv_Invoices_Received',
  'bean_name' => 'reinv_Invoices_Received',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'id_name' => 'reinv_invoa2ffeceived_ida',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoices_received_gdrcp_goods_receipt_1_name"] = array (
  'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'save' => true,
  'id_name' => 'reinv_invoa2ffeceived_ida',
  'link' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'table' => 'reinv_invoices_received',
  'module' => 'reinv_Invoices_Received',
  'rname' => 'name',
);
$dictionary["gdrcp_Goods_Receipt"]["fields"]["reinv_invoa2ffeceived_ida"] = array (
  'name' => 'reinv_invoa2ffeceived_ida',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
);


 // created: 2016-04-24 13:10:49
$dictionary['gdrcp_Goods_Receipt']['fields']['deleted']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['deleted']['comments']='Record deletion indicator';
$dictionary['gdrcp_Goods_Receipt']['fields']['deleted']['merge_filter']='disabled';
$dictionary['gdrcp_Goods_Receipt']['fields']['deleted']['reportable']=true;

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_invoiced_c']['inline_edit']='1';
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_invoiced_c']['labelValue']='Quantity Invoiced';

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['packing_list_c']['inline_edit']='1';
$dictionary['gdrcp_Goods_Receipt']['fields']['packing_list_c']['labelValue']='Packing List Nr.';

 

 // created: 2016-04-24 13:10:34
$dictionary['gdrcp_Goods_Receipt']['fields']['description']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['description']['comments']='Full text of the note';
$dictionary['gdrcp_Goods_Receipt']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['po_number_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['po_number_c']['labelValue']='PO Number';

 

 // created: 2016-04-24 13:11:02
$dictionary['gdrcp_Goods_Receipt']['fields']['received_date']['inline_edit']='';

 

 // created: 2016-04-28 18:35:31
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity']['audited']=true;
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity']['len']='8';
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity']['required']=true;

 

 // created: 2016-04-24 13:11:21
$dictionary['gdrcp_Goods_Receipt']['fields']['storage']['inline_edit']='';

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_rejected_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_rejected_c']['labelValue']='Quantity Rejected';

 

 // created: 2016-04-24 13:10:14
$dictionary['gdrcp_Goods_Receipt']['fields']['name']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_ordered_c']['inline_edit']='';
$dictionary['gdrcp_Goods_Receipt']['fields']['quantity_ordered_c']['labelValue']='Quantity Ordered';

 

 // created: 2018-06-21 08:05:32
$dictionary['gdrcp_Goods_Receipt']['fields']['invoiced_amount_c']['inline_edit']='1';
$dictionary['gdrcp_Goods_Receipt']['fields']['invoiced_amount_c']['labelValue']='Invoiced Amount';

 
?>