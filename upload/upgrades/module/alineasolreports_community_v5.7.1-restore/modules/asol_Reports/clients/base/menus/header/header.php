<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user, $mod_strings, $app_strings;

require_once("modules/asol_Reports/include/server/reportsUtils.php");

$module = 'asol_Reports';

$viewdefs[$module]['base']['menu']['header'] = array();

if (ACLController::checkAccess($module, 'list', true)) {
	$viewdefs[$module]['base']['menu']['header'][] = array(
		'route' => "#$module",
		'label' => translate('LBL_REPORT_REPORTS_ACTION', $module),
		'acl_action' => 'list',
		'acl_module' => $module,
		'icon' => 'icon-reorder',
	);
}

if (ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode) {
	$viewdefs[$module]['base']['menu']['header'][] = array(
		'route' => "#$module/create",
		'label' => translate('LBL_REPORT_CREATE_ACTION', $module),
		'acl_action' => 'create',
		'acl_module' => $module,
		'icon' => 'icon-plus',
	);
	$viewdefs[$module]['base']['menu']['header'][] = array(
		'route' => "#$module/create",
		'label' => translate('LBL_REPORT_CREATE_META_ACTION', $module),
		'acl_action' => 'create',
		'acl_module' => $module,
		'icon' => 'icon-plus',
	);
}

$viewdefs[$module]['base']['menu']['header'][] = array(
	'route' => "#bwc/index.php?module=Administration&action=asolCommon&action=index&view=edit&return_module=asol_Reports&return_action=index",// FIXME
	'label' => translate('LBL_REPORT_CONFIG_ACTION', $module),
	'acl_action' => 'asol_Common',
	'acl_module' => Administration,
	'icon' => 'icon-reorder',
);


