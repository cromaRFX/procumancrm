<?php

global $current_user;

require_once("modules/asol_Common/include/commonUtils.php");

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
   sugar_die("Unauthorized access to administration.");
}


//***********************//
//***AlineaSol Premium***//
//***********************//
asol_CommonUtils::managePremiumFeature("commonLicenseManagement", "commonFunctions.php", "displayCommonLicensingManagementPanel", null);
//***********************//
//***AlineaSol Premium***//
//***********************//

?>