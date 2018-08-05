<?php

require_once("modules/asol_Reports/include/server/reportsUtils.php");

global $sugar_config;


asol_ReportsUtils::reports_log('asol', 'Getting File '.$_REQUEST['fileName'], __FILE__, __METHOD__, __LINE__);

$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";

$op = (isset($_REQUEST['op'])) ? $_REQUEST['op'] : "";

if ($op != "css"){

	header("Content-type: application/force-download");
	header("Content-Disposition: attachment; filename=\"".trim($_REQUEST['fileName'])."\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($tmpFilesDir.trim($_REQUEST['fileName'])));
	
	readfile($tmpFilesDir.trim($_REQUEST['fileName'])); 

} else {
	
	header("Content-type: application/force-download");
	header("Content-Disposition: attachment; filename=\"".trim($_REQUEST['fileName'])."\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize("modules/asol_Reports/include/css/".trim($_REQUEST['fileName'])));
	
	readfile("modules/asol_Reports/include/css/".trim($_REQUEST['fileName'])); 
	
}

?>