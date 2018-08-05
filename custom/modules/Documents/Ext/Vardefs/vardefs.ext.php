<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-20 15:59:01
$dictionary['Document']['fields']['public_url_c']['inline_edit']='';
$dictionary['Document']['fields']['public_url_c']['labelValue']='Public URL';

 

// created: 2016-10-25 11:14:38
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1"] = array (
  'name' => 'reinv_invoices_received_documents_1',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_documents_1',
  'source' => 'non-db',
  'module' => 'reinv_Invoices_Received',
  'bean_name' => 'reinv_Invoices_Received',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
);
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1_name"] = array (
  'name' => 'reinv_invoices_received_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
  'save' => true,
  'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
  'link' => 'reinv_invoices_received_documents_1',
  'table' => 'reinv_invoices_received',
  'module' => 'reinv_Invoices_Received',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["reinv_invoices_received_documents_1reinv_invoices_received_ida"] = array (
  'name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
  'type' => 'link',
  'relationship' => 'reinv_invoices_received_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2016-04-01 06:37:43
$dictionary["Document"]["fields"]["rfx_rfx_documents_1"] = array (
  'name' => 'rfx_rfx_documents_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_documents_1',
  'source' => 'non-db',
  'module' => 'RFX_RFx',
  'bean_name' => 'RFX_RFx',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_RFX_RFX_TITLE',
  'id_name' => 'rfx_rfx_documents_1rfx_rfx_ida',
);
$dictionary["Document"]["fields"]["rfx_rfx_documents_1_name"] = array (
  'name' => 'rfx_rfx_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_RFX_RFX_TITLE',
  'save' => true,
  'id_name' => 'rfx_rfx_documents_1rfx_rfx_ida',
  'link' => 'rfx_rfx_documents_1',
  'table' => 'rfx_rfx',
  'module' => 'RFX_RFx',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["rfx_rfx_documents_1rfx_rfx_ida"] = array (
  'name' => 'rfx_rfx_documents_1rfx_rfx_ida',
  'type' => 'link',
  'relationship' => 'rfx_rfx_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);



$dictionary['Document']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_documents',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2016-12-03 15:00:09
$dictionary["Document"]["fields"]["asset_assets_documents_1"] = array (
  'name' => 'asset_assets_documents_1',
  'type' => 'link',
  'relationship' => 'asset_assets_documents_1',
  'source' => 'non-db',
  'module' => 'asset_assets',
  'bean_name' => 'asset_assets',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_ASSET_ASSETS_TITLE',
  'id_name' => 'asset_assets_documents_1asset_assets_ida',
);
$dictionary["Document"]["fields"]["asset_assets_documents_1_name"] = array (
  'name' => 'asset_assets_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_ASSET_ASSETS_TITLE',
  'save' => true,
  'id_name' => 'asset_assets_documents_1asset_assets_ida',
  'link' => 'asset_assets_documents_1',
  'table' => 'asset_assets',
  'module' => 'asset_assets',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["asset_assets_documents_1asset_assets_ida"] = array (
  'name' => 'asset_assets_documents_1asset_assets_ida',
  'type' => 'link',
  'relationship' => 'asset_assets_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2016-12-04 15:07:36
$dictionary["Document"]["fields"]["project_documents_1"] = array (
  'name' => 'project_documents_1',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_documents_1project_ida',
);
$dictionary["Document"]["fields"]["project_documents_1_name"] = array (
  'name' => 'project_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_documents_1project_ida',
  'link' => 'project_documents_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["project_documents_1project_ida"] = array (
  'name' => 'project_documents_1project_ida',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2016-04-10 10:39:03
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1"] = array (
  'name' => 'porq_purchase_request_documents_1',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_documents_1',
  'source' => 'non-db',
  'module' => 'porq_Purchase_Request',
  'bean_name' => 'porq_Purchase_Request',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
);
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1_name"] = array (
  'name' => 'porq_purchase_request_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
  'save' => true,
  'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
  'link' => 'porq_purchase_request_documents_1',
  'table' => 'porq_purchase_request',
  'module' => 'porq_Purchase_Request',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["porq_purchase_request_documents_1porq_purchase_request_ida"] = array (
  'name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
  'type' => 'link',
  'relationship' => 'porq_purchase_request_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-11-01 18:41:48
$dictionary["Document"]["fields"]["aos_quotes_documents_1"] = array (
  'name' => 'aos_quotes_documents_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_documents_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_documents_1aos_quotes_ida',
);
$dictionary["Document"]["fields"]["aos_quotes_documents_1_name"] = array (
  'name' => 'aos_quotes_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_documents_1aos_quotes_ida',
  'link' => 'aos_quotes_documents_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["aos_quotes_documents_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_documents_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-11-01 15:17:45
$dictionary["Document"]["fields"]["aos_products_documents_1"] = array (
  'name' => 'aos_products_documents_1',
  'type' => 'link',
  'relationship' => 'aos_products_documents_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_documents_1aos_products_ida',
);
$dictionary["Document"]["fields"]["aos_products_documents_1_name"] = array (
  'name' => 'aos_products_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_documents_1aos_products_ida',
  'link' => 'aos_products_documents_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["aos_products_documents_1aos_products_ida"] = array (
  'name' => 'aos_products_documents_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2016-10-26 09:10:38
$dictionary['Document']['fields']['active_date']['required']=false;
$dictionary['Document']['fields']['active_date']['inline_edit']=true;
$dictionary['Document']['fields']['active_date']['merge_filter']='disabled';
$dictionary['Document']['fields']['active_date']['enable_range_search']=false;

 

// created: 2016-04-23 07:25:34
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1',
  'type' => 'link',
  'relationship' => 'gdrcp_goods_receipt_documents_1',
  'source' => 'non-db',
  'module' => 'gdrcp_Goods_Receipt',
  'bean_name' => 'gdrcp_Goods_Receipt',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
  'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
);
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1_name"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
  'save' => true,
  'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
  'link' => 'gdrcp_goods_receipt_documents_1',
  'table' => 'gdrcp_goods_receipt',
  'module' => 'gdrcp_Goods_Receipt',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida"] = array (
  'name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
  'type' => 'link',
  'relationship' => 'gdrcp_goods_receipt_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);

?>