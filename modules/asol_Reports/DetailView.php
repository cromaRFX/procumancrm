<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("modules/asol_Common/include/commonUtils.php");
require_once("modules/asol_Reports/include/server/controllers/controllerDetail.php");

echo '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>';
asol_ControllerReportDetail::display($_REQUEST['record'], true, false);

?>