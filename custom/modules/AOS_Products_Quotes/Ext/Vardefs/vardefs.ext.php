<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary["AOS_Products_Quotes"]["fields"]["item_code_c"] = array (
	'name' => 'item_code_c',
    'vname' => 'LBL_ITEM_CODE_C',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["total_price_bc_c"] = array (
	'name' => 'total_price_bc_c', // Total Price Base Currency
    // 'vname' => 'LBL_SERVICE_NOTE_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'default' => 0,
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["cost_center_id_c"] = array (
	'name' => 'cost_center_id_c',
    'vname' => 'LBL_COST_CENTER_C',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["assets_id_c"] = array (
    'required' => false,
    'name' => 'assets_id_c',
    'vname' => 'LBL_ASSET_NO_C',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  );


$dictionary["AOS_Products_Quotes"]["fields"]["delivery_to_id_c"] = array (
	'name' => 'delivery_to_id_c',
    'vname' => 'LBL_DELIVERY_CODE_C',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["delivery_to_name_c"] = array (
	'name' => 'delivery_to_name_c',
    'type' => 'relate',
    'module' => 'brch_Branch',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
    'ext2' => 'brch_Branch',
    'id_name' => 'delivery_to_id_c',
    'rname' => 'name',
);


 // created: 2016-12-08 09:07:12
$dictionary['AOS_Products_Quotes']['fields']['color_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['color_c']['labelValue']='Color';

 

$dictionary["AOS_Products_Quotes"]["fields"]["exchange_rate_c"] = array (
	'name' => 'exchange_rate_c',
    // 'vname' => 'LBL_SERVICE_NOTE_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'default' => 0,
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["budget_code_id_c"] = array (
	'name' => 'budget_code_id_c',
    'vname' => 'LBL_BUDGET_CODE_C',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

 // created: 2016-12-08 09:07:30
$dictionary['AOS_Products_Quotes']['fields']['size_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['size_c']['labelValue']='Size';

 

 // created: 2016-12-16 09:31:21
$dictionary['AOS_Products_Quotes']['fields']['color_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['color_c']['labelValue']='Color';

 

 // created: 2017-01-13 15:14:03
$dictionary['AOS_Products_Quotes']['fields']['product_qty']['inline_edit']=true;
$dictionary['AOS_Products_Quotes']['fields']['product_qty']['merge_filter']='disabled';
$dictionary['AOS_Products_Quotes']['fields']['product_qty']['precision']='2';

 

$dictionary["AOS_Products_Quotes"]["fields"]["cost_center_name_c"] = array (
	'name' => 'cost_center_name_c',
    'type' => 'relate',
    'module' => 'costc_cost_center',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
    'ext2' => 'costc_cost_center',
    'id_name' => 'cost_center_id_c',
    'rname' => 'name',
);


 // created: 2016-12-16 08:58:38
$dictionary['AOS_Products_Quotes']['fields']['size_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['size_c']['labelValue']='Size';

 

$dictionary["AOS_Products_Quotes"]["fields"]["note_c"] = array (
	'name' => 'note_c',
    'vname' => 'LBL_SERVICE_NOTE_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["unit_of_measure_c"] = array (
	'name' => 'unit_of_measure_c',
    'vname' => 'LBL_UNIT_OF_MEASURE_C',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'options' => 'unit_of_measure_c',
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["asset_name_c"] = array (
	'name' => 'asset_name_c',
    'type' => 'relate',
    'module' => 'asset_assets',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
    'ext2' => 'asset_assets',
    'id_name' => 'assets_id_c',
    'rname' => 'name',
);


$dictionary["AOS_Products_Quotes"]["fields"]["ahi_c"] = array (
	'name' => 'ahi_c',
    'vname' => 'LBL_AHI_C',
    'type' => 'bool',
    'default' => '0',
    'massupdate' => false,
    'studio' => false,
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["supplier_name_c"] = array (
	'name' => 'supplier_name_c',
    'vname' => 'LBL_SUPPLIER_NAME_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
);
 

 // created: 2016-10-29 20:12:12
$dictionary['AOS_Products_Quotes']['fields']['po_number_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['po_number_c']['labelValue']='PO number';

 

$dictionary["AOS_Products_Quotes"]["fields"]["sap_line_no_c"] = array (
	'name' => 'sap_line_no_c',
    'vname' => 'LBL_SAP_LINE_NO_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

 // created: 2016-10-29 19:47:58
$dictionary['AOS_Products_Quotes']['fields']['status_c']['inline_edit']='';
$dictionary['AOS_Products_Quotes']['fields']['status_c']['labelValue']='Status';

 

$dictionary["AOS_Products_Quotes"]["fields"]["sap_po_no_c"] = array (
	'name' => 'sap_po_no_c',
    'vname' => 'LBL_SAP_PO_NO_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["unit_price_bc_c"] = array (
	'name' => 'unit_price_bc_c', // Unit Price Base Currency
    // 'vname' => 'LBL_SERVICE_NOTE_C',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'default' => 0,
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
);
 

$dictionary["AOS_Products_Quotes"]["fields"]["budget_code_name_c"] = array (
	'name' => 'budget_code_name_c',
    'type' => 'relate',
    'module' => 'budgt_Budget',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'required' => 'false',
    'duplicate_merge' => 'disabled',
    'audited' => true,
    'reportable' => true,
    'studio' => 'visible',
    'ext2' => 'budgt_Budget',
    'id_name' => 'budget_code_id_c',
    'rname' => 'name',
);


// created: 2016-05-01 18:45:29
$dictionary["AOS_Products_Quotes"]["fields"]["aos_products_quotes_gdrcp_goods_receipt_1"] = array (
  'name' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'type' => 'link',
  'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
  'source' => 'non-db',
  'module' => 'gdrcp_Goods_Receipt',
  'bean_name' => 'gdrcp_Goods_Receipt',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
);

?>