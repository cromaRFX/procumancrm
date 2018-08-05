<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name = 'asol_Reports';
$listViewDefs[$module_name] = array(
	'NAME' => array(
		'width' => '32', 
		'label' => 'LBL_NAME', 
		'default' => true,
        'link' => true),         

	'REPORT_MODULE' => array(
		'width' => '15', 
		'label' => 'LBL_REPORT_MODULE',
        'default' => true),
		
	'ASSIGNED_USER_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_ASSIGNED_TO_NAME',
        'default' => true),
	
);

?>
