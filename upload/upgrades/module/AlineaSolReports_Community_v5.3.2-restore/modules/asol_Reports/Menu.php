<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user, $mod_strings, $app_strings;

require_once("modules/asol_Reports/include/server/reportsUtils.php");

//***********************//
//***AlineaSol Premium***//
//***********************//
$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
//***********************//
//***AlineaSol Premium***//
//***********************//

if (ACLController::checkAccess('asol_Reports', 'list', true)) {
	
	$module_menu[]=Array("index.php?module=asol_Reports&action=index", $mod_strings["LBL_REPORT_REPORTS_ACTION"], "asol_Reports");

}
	
if (ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode) {
	
	$module_menu[]=Array("index.php?module=asol_Reports&action=EditView", $mod_strings["LBL_REPORT_CREATE_ACTION"], "Createasol_Reports");
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$metaMenuOption = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "getMetaMenuOption", null);
	if ($metaMenuOption !== false) {
	 	$module_menu[] = $metaMenuOption;
	}
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
}

if (asol_ReportsUtils::isCommonBaseInstalled()) {

	$module_menu[]=Array("index.php?module=asol_Common&action=index&view=edit&return_module=asol_Reports&return_action=index", $mod_strings["LBL_REPORT_CONFIG_ACTION"], "asol_Reports");

}

?>