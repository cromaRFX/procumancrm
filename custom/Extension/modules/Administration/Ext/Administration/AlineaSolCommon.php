<?php

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

?>