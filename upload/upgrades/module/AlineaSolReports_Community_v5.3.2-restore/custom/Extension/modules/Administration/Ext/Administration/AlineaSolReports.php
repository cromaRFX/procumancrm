<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['asol_reports_validations'] = array('asol_Reports', translate('LBL_REPORT_CHECK_ACTION', 'asol_Reports'),translate('LBL_REPORT_CHECK_ACTION', 'asol_Reports'),'./index.php?module=asol_Reports&action=CheckConfigurationDefs');
$admin_option_defs['Administration']['asol_reports_customizer'] = array('asol_Reports', translate('LBL_REPORT_CUSTOMIZE_ACTION', 'asol_Reports'),translate('LBL_REPORT_CUSTOMIZE_ACTION', 'asol_Reports'),'./index.php?module=asol_Reports&action=CustomizeCss');

//***********************//
//***AlineaSol Premium***//
//***********************//
require_once("modules/asol_Reports/include/server/reportsUtils.php");

$adminRelatesPanel = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportRelatesManagementAdminPanel", null);
if ($adminRelatesPanel !== false) {
	$admin_option_defs['Administration']['asol_reports_relates_management'] = $adminRelatesPanel;
}

$adminWebServicePanel = asol_ReportsUtils::managePremiumFeature("webServiceReports", "reportFunctions.php", "getReportWebServiceSynchronizationAdminPanel", null);
if ($adminWebServicePanel !== false) {
	$admin_option_defs['Administration']['asol_reports_webservice_reports_synch'] = $adminWebServicePanel;
}

$adminActiveQueryPanel = asol_ReportsUtils::managePremiumFeature("reportActiveQueriesManagement", "reportFunctions.php", "getReportActiveQueryAdminPanel", null);
if ($adminActiveQueryPanel !== false) {
	$admin_option_defs['Administration']['asol_reports_active_query_management'] = $adminActiveQueryPanel;
}
//***********************//
//***AlineaSol Premium***//
//***********************//

$admin_group_header[] = array(translate('LBL_ASOL_REPORTS_TITLE', 'asol_Reports'), '', false, $admin_option_defs, translate('LBL_ASOL_REPORTS_PANEL_DESC', 'asol_Reports'));

?>