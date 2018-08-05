<?php

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
	sugar_die("Unauthorized access to administration.");
}
	
$result = array();
$result[] = array('asol_Common', translate('LBL_ASOL_CONFIG_TITLE', 'asol_Common'), translate('LBL_ASOL_CONFIG_DESC', 'asol_Common'), './index.php?module=asol_Common&action=index&view=edit');
$result[] = array('asol_Common', translate('LBL_COMMON_MENU_MANAGEMENT_ACTION', 'asol_Common'), translate('LBL_COMMON_MENU_MANAGEMENT_ACTION', 'asol_Common'), './index.php?module=asol_Common&action=ManageCommonMenus');

//***********************//
//***AlineaSol Premium***//
//***********************//
require_once("modules/asol_Common/include/commonUtils.php");

$adminTemplatesPanel = asol_CommonUtils::managePremiumFeature("commonTemplatesManagement", "commonFunctions.php", "getCommonTemplatesManagementAdminPanel", null);
if ($adminTemplatesPanel !== false) {
	$result[] = $adminTemplatesPanel;
}

$adminFieldsPanel = asol_CommonUtils::managePremiumFeature("commonFieldsManagement", "commonFunctions.php", "getCommonFieldsManagementAdminPanel", null);
if ($adminFieldsPanel !== false) {
	$result[]= $adminFieldsPanel;
}

$adminPropertiesPanel = asol_CommonUtils::managePremiumFeature("commonPropertiesManagement", "commonFunctions.php", "getCommonPropertiesManagementAdminPanel", null);
if ($adminPropertiesPanel !== false) {
	$result[] = $adminPropertiesPanel;
}

$adminLicensePanel = asol_CommonUtils::managePremiumFeature("commonLicenseManagement", "commonFunctions.php", "getCommonLicensingManagementAdminPanel", null);
if ($adminLicensePanel !== false) {
	$result[] = $adminLicensePanel;
}
//***********************//
//***AlineaSol Premium***//
//***********************//

$html = '<h3>'.translate('LBL_ASOL_COMON_TITLE', 'asol_Common').'</h3><span>'.translate('LBL_ASOL_ADMIN_PANEL_DESC', 'asol_Common').'</span><table style="margin-top:5px" class="other view">';

foreach ($result as $key => $value) {
	
	if ($key%2 == 0) $html .= "<tr>";
	
		$html .=  '<td width="20%" scope="row"><img src="custom/themes/default/images/asol_Common.gif" border="0" align="absmiddle" alt="'.$value[1].'">&nbsp;<a href="'.$value[3].'" class="tabDetailViewDL2Link">'.$value[1].'</a></td>';
		$html .=  '<td width="30%">'.$value[2].'</td>';
		
	if ($key%2 == 1) $html .= "</tr>";
	
}
$html .= '</table>';

echo $html;
