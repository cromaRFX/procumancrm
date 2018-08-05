<?php

global $current_user;

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
   sugar_die("Unauthorized access to administration.");
}


//***********************//
//***AlineaSol Premium***//
//***********************//
$returnedPremiumHtml = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportRelatesManagementPanel", null);
$returnedHtml = ($returnedPremiumHtml !== false) ? $returnedPremiumHtml : '';
//***********************//
//***AlineaSol Premium***//
//***********************//

echo $returnedHtml;


?>