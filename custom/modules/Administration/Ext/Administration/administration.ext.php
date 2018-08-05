<?php 
 //WARNING: The contents of this file are auto-generated



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




$admin_option_defs=array();
$admin_option_defs['Administration']['asol_common_config']= array('asol_Common',translate('LBL_ASOL_CONFIG_TITLE', 'asol_Common'),translate('LBL_ASOL_CONFIG_DESC', 'asol_Common'),'./index.php?module=asol_Common&action=index&view=edit');
$admin_option_defs['Administration']['asol_common_menus_management'] = array('asol_Common', translate('LBL_COMMON_MENU_MANAGEMENT_ACTION', 'asol_Common'), translate('LBL_COMMON_MENU_MANAGEMENT_ACTION', 'asol_Common'), './index.php?module=asol_Common&action=ManageCommonMenus');

//***********************//
//***AlineaSol Premium***//
//***********************//
require_once("modules/asol_Common/include/commonUtils.php");

$adminTemplatesPanel = asol_CommonUtils::managePremiumFeature("commonTemplatesManagement", "commonFunctions.php", "getCommonTemplatesManagementAdminPanel", null);
if ($adminTemplatesPanel !== false) {
	$admin_option_defs['Administration']['asol_common_templates_management'] = $adminTemplatesPanel;
}

$adminFieldsPanel = asol_CommonUtils::managePremiumFeature("commonFieldsManagement", "commonFunctions.php", "getCommonFieldsManagementAdminPanel", null);
if ($adminFieldsPanel !== false) {
	$admin_option_defs['Administration']['asol_common_fields_management'] = $adminFieldsPanel;
}

$adminPropertiesPanel = asol_CommonUtils::managePremiumFeature("commonPropertiesManagement", "commonFunctions.php", "getCommonPropertiesManagementAdminPanel", null);
if ($adminPropertiesPanel !== false) {
	$admin_option_defs['Administration']['asol_common_properties_management'] = $adminPropertiesPanel;
}

$adminLicensePanel = asol_CommonUtils::managePremiumFeature("commonLicenseManagement", "commonFunctions.php", "getCommonLicensingManagementAdminPanel", null);
if ($adminLicensePanel !== false) {
	$admin_option_defs['Administration']['asol_license_information'] = $adminLicensePanel;
}
//***********************//
//***AlineaSol Premium***//
//***********************//

$admin_group_header[]= array(translate('LBL_ASOL_COMON_TITLE', 'asol_Common'),'',false,$admin_option_defs, translate('LBL_ASOL_ADMIN_PANEL_DESC', 'asol_Common'));



/*********************************************************************************
 * This file is part of QuickCRM Mobile CE.
 * QuickCRM Mobile CE is a mobile client for SugarCRM
 *
 * Author : NS-Team (http://www.ns-team.fr)
 *
 * QuickCRM Mobile CE is licensed under GNU General Public License v3 (GPLv3)
 *
 * You can contact NS-Team at NS-Team - 55 Chemin de Mervilla - 31320 Auzeville - France
 * or via email at infos@ns-team.fr
 *
 ********************************************************************************/

$admin_option_defs=array();
$admin_option_defs['Administration']['quickcrm_update']= array('Administration','LBL_UPDATE_QUICKCRM_TITLE','LBL_UPDATE_QUICKCRM','./index.php?module=Administration&action=updatequickcrm');


$admin_option_defs['Administration'] = array_merge((array)$admin_group_header[1][3]['Administration'],(array)$admin_option_defs['Administration']);

$admin_group_header[1]= array('LBL_ADMINISTRATION_HOME_TITLE','',false,$admin_option_defs, 'LBL_ADMINISTRATION_HOME_DESC');




?>