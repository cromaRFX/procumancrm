<?php

global $current_user;

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
   sugar_die("Unauthorized access to administration.");
}

require_once('modules/asol_Common/include/commonUtils.php');

//***********************//
//***AlineaSol Premium***//
//***********************//
$returnedPremiumHtml = asol_CommonUtils::managePremiumFeature("commonFieldsManagement", "commonFunctions.php", "getCommonFieldsManagementPanel", null);
$returnedHtml = ($returnedPremiumHtml !== false) ? $returnedPremiumHtml : '';
//***********************//
//***AlineaSol Premium***//
//***********************//

echo $returnedHtml;


?>