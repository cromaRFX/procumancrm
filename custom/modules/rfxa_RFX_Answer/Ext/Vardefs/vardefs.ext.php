<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary["rfxa_RFX_Answer"]["fields"]["line_items_rfxa_c"] = array (
	'inline_edit' => 1,
	'labelValue' => 'testtttt',
	'required' => false,
	'name' => 'line_items_rfxa_c',
	'vname' => 'LBL_LINE_ITEMS_RFXA_C',
	'type' => 'multi_lines_rfxa',
	'massupdate' => 0,
	'default' => NULL,
	'no_default' => false,
	'comments' => '',
	'help' => '',
	'importable' => 0,
	'duplicate_merge' => 0,
	'duplicate_merge_dom_value' => '0',
	'audited' => false,
	'reportable' => 0,
	'unified_search' => false,
	'merge_filter' => 'disabled',
	'len' => '255',
	'size' => '20',
	'dbType' => 'text',
	'studio' => 'visible',
);





// created: 2016-05-22 15:01:21
$dictionary["rfxa_RFX_Answer"]["fields"]["rfx_rfx_rfxa_rfx_answer_1"] = array (
  'name' => 'rfx_rfx_rfxa_rfx_answer_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_rfxa_rfx_answer_1',
  'source' => 'non-db',
  'module' => 'RFX_RFx',
  'bean_name' => 'RFX_RFx',
  'vname' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFX_RFX_TITLE',
  'id_name' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
);
$dictionary["rfxa_RFX_Answer"]["fields"]["rfx_rfx_rfxa_rfx_answer_1_name"] = array (
  'name' => 'rfx_rfx_rfxa_rfx_answer_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFX_RFX_TITLE',
  'save' => true,
  'id_name' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
  'link' => 'rfx_rfx_rfxa_rfx_answer_1',
  'table' => 'rfx_rfx',
  'module' => 'RFX_RFx',
  'rname' => 'name',
);
$dictionary["rfxa_RFX_Answer"]["fields"]["rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida"] = array (
  'name' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
  'type' => 'link',
  'relationship' => 'rfx_rfx_rfxa_rfx_answer_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFXA_RFX_ANSWER_TITLE',
);


 // created: 2016-05-23 12:42:16
$dictionary['rfxa_RFX_Answer']['fields']['rfxa_id']['format']='{RFXA}{}{}{}{0000}{}{}';

 

 // created: 2016-05-23 12:37:06
$dictionary['rfxa_RFX_Answer']['fields']['supplier_name']['required']=false;

 
?>