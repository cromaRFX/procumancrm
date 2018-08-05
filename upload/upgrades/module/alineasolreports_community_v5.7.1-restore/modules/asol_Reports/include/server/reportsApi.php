<?php

require_once("modules/asol_Common/include/commonUtils.php");
require_once("modules/asol_Reports/include/server/reportsUtils.php");
require_once("modules/asol_Reports/include/server/controllers/controllerReports.php");

$returnResult = "";
$actionTarget = $_REQUEST["actionTarget"];
$actionValue = $_REQUEST["actionValue"];

switch ($actionTarget) {

	case "list_reports":
		require_once("modules/asol_Reports/include/server/controllers/controllerList.php");
		$_REQUEST['filters'] = $actionValue['filters'];
		$_REQUEST['position'] = $actionValue['position'];
		$returnResult = asol_ControllerList::display(true, true);
		break;
		
	case "export_report":
		$returnResult = asol_ControllerReports::exportReport(json_decode(urldecode(html_entity_decode($actionValue)), true));
		break;
			
	case "import_report":
		$returnResult = asol_ControllerReports::importReport();
		break;
		
	case "delete_report":
		asol_ControllerReports::deleteReport($actionValue);
		break;
		
	case "display_report":
		require_once("modules/asol_Reports/include/server/controllers/controllerDetail.php");
		if (isset($_REQUEST['actionContext']) && !empty($_REQUEST['actionContext'])) {
			if (in_array($_REQUEST['actionContext']['module'], array('asol_Views', 'asol_Reports')) && isset($_REQUEST['actionContext']['record'])) {
				$_REQUEST['actionContext']['id'] = $_REQUEST['actionContext']['record'];
				unset($_REQUEST['actionContext']['record']);
			}
			foreach($_REQUEST['actionContext'] as $contextKey=>$contextValue) {
				$_REQUEST[$contextKey] = $contextValue;
			}
		}
		if (isset($_REQUEST['actionMapping'])) {
			$_REQUEST['overrideParameters'] = urlencode(json_encode($_REQUEST['actionMapping']));
		}
		$returnResult = asol_ControllerReportDetail::display($actionValue, true, true);
		break;
		
	case "check_report":
		$returnResult = asol_ControllerReports::checkReport();
		break;
		
}

ob_clean();
echo $returnResult;
