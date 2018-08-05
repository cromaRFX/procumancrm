<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/asol_Reports/include/server/reportsUtils.php');

if (!asol_ReportsUtils::isCommonBaseInstalled()) {
	die("<font color='red'>".str_replace("%[v]", asol_ReportsUtils::$common_version, $mod_strings["LBL_REPORT_COMMON_BASE_NEEDED"])."</font>");
}

asol_ReportsUtils::initReportsFunctions();

require_once("modules/asol_Common/include/commonUtils.php");
require_once("modules/asol_Reports/include/server/controllers/controllerList.php");
require_once("modules/asol_Reports/include/server/controllers/controllerEdit.php");
require_once("modules/asol_Reports/include/server/controllers/controllerDetail.php");
require_once("modules/asol_Reports/include/server/views/viewHeader.php");

$view = (isset($_REQUEST['view']) ? $_REQUEST['view'] : 'list');
$record = (isset($_REQUEST['record']) ? $_REQUEST['record'] : null);
$unique = (isset($_REQUEST['unique']) ? ($_REQUEST['unique'] == 'true') : false);

if ((!$unique) || ($unique && $view == 'list')) {
	asol_ControllerList::display($view == 'list');
}
if ((!$unique) || ($unique && $view == 'edit')) {
	asol_ControllerEdit::display($record, $view == 'edit');
}
if ((!$unique) || ($unique && $view == 'detail')) {
	asol_ControllerReportDetail::display($record, $view == 'detail', false);
}

?>