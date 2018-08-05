<?php

global $current_user;

require_once("modules/asol_Common/include/commonUtils.php");

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
   sugar_die("Unauthorized access to administration.");
}


//***********************//
//***AlineaSol Premium***//
//***********************//
$returnedPremiumHtml = asol_CommonUtils::managePremiumFeature("commonPropertiesManagement", "commonFunctions.php", "getCommonPropertiesManagementPanel", null);
$returnedHtml = ($returnedPremiumHtml !== false) ? $returnedPremiumHtml : '';
//***********************//
//***AlineaSol Premium***//
//***********************//

echo $returnedHtml;


?>