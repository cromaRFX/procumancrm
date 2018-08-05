<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-05-22 15:01:21
$layout_defs["RFX_RFx"]["subpanel_setup"]['rfx_rfx_rfxa_rfx_answer_1'] = array (
  'order' => 100,
  'module' => 'rfxa_RFX_Answer',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RFX_RFX_RFXA_RFX_ANSWER_1_FROM_RFXA_RFX_ANSWER_TITLE',
  'get_subpanel_data' => 'rfx_rfx_rfxa_rfx_answer_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2016-06-06 12:55:35
$layout_defs["RFX_RFx"]["subpanel_setup"]['rfx_rfx_accounts_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RFX_RFX_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'rfx_rfx_accounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);



$layout_defs["RFX_RFx"]["subpanel_setup"]['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);


 // created: 2016-12-06 21:06:19
$layout_defs["RFX_RFx"]["subpanel_setup"]['securitygroups_rfx_rfx_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SECURITYGROUPS_RFX_RFX_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'securitygroups_rfx_rfx_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2016-04-01 06:37:43
$layout_defs["RFX_RFx"]["subpanel_setup"]['rfx_rfx_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'rfx_rfx_documents_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['RFX_RFx']['subpanel_setup']['rfx_rfx_rfxa_rfxa_1']['override_subpanel_name'] = 'RFX_RFx_subpanel_rfx_rfx_rfxa_rfxa_1';


//auto-generated file DO NOT EDIT
$layout_defs['RFX_RFx']['subpanel_setup']['rfx_rfx_rfxa_rfx_answer_1']['override_subpanel_name'] = 'RFX_RFx_subpanel_rfx_rfx_rfxa_rfx_answer_1';

?>