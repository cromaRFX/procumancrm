<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

error_reporting(1); //E_ERROR 

global $sugar_config, $db;


//***********************************//
//*******Reports Global Config*******//
//***********************************//
require_once("modules/asol_Common/include/commonUtils.php");
$globalConfiguration = asol_CommonUtils::getGlobalConfiguration();

$storedFilesTtl = (!empty($globalConfiguration['storedFilesTtl']) ? $globalConfiguration['storedFilesTtl'] : '7');

$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
$tmpStoredDir = "storedReports/";
//***********************************//
//*******Reports Global Config*******//
//***********************************//


//***********************************//
//******Clean Old Report Files*******//
//***********************************//
$directorio = opendir($tmpFilesDir);
$aWeek = time() - (3600*24*$storedFilesTtl);

while ($archivo = readdir($directorio)) {

	if ((filemtime($tmpFilesDir.$archivo) < $aWeek) && ( endsWith(strtolower($archivo), ".xml") || endsWith(strtolower($archivo), ".js") || endsWith(strtolower($archivo), ".html") || endsWith(strtolower($archivo), ".zip") || endsWith(strtolower($archivo), ".pdf") || endsWith(strtolower($archivo), ".png") || endsWith(strtolower($archivo), ".txt") || endsWith(strtolower($archivo), ".csv") || endsWith(strtolower($archivo), ".xls") ))
		@unlink ($tmpFilesDir.$archivo);

}
closedir($directorio);
//***********************************//
//******Clean Old Report Files*******//
//***********************************//


//******************************************//
//******Clean Old Stored Report Files*******//
//******************************************//
$directorio = opendir($tmpFilesDir.$tmpStoredDir);
$aWeek = time() - (3600*24*$storedFilesTtl);

while ($archivo = readdir($directorio)) {

	if ((filemtime($tmpFilesDir.$tmpStoredDir.$archivo) < $aWeek) && ( endsWith(strtolower($archivo), ".js") || endsWith(strtolower($archivo), ".txt") ))
		@unlink ($tmpFilesDir.$tmpStoredDir.$archivo);

}
closedir($directorio);
//******************************************//
//******Clean Old Stored Report Files*******//
//******************************************//


//***********************************//
//*****Clean DB ReportDispatcher*****//
//***********************************//
if (asol_ReportsUtils::dispatcherTableExists()) {
	
	$currentTime = time();
	
	$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
	$timedOutStamp = $currentTime - $sugar_config['asolReportsMaxExecutionTime']; //Time to check report execution expiration time
	$closedWindowStamp = $currentTime - ($checkHttpFileTimeout / 500);  //Time to check last recall not updated for manual Reports (browser screen closed). 
	
	$cleanDispatcherTableSql = "DELETE FROM asol_reports_dispatcher WHERE (status IN ('terminated', 'timeout')) OR (request_init_date < '".date("Y-m-d H:i:s", $timedOutStamp)."') OR ((status = 'waiting') AND (request_type = 'manual') AND (last_recall < '".date("Y-m-d H:i:s", $closedWindowStamp)."'))";
	$db->query($cleanDispatcherTableSql);
	
}
//***********************************//
//*****Clean DB ReportDispatcher*****//
//***********************************//


//**********************************//
//*****Kill Active Long Queries*****//
//**********************************//

	//***AlineaSol Premium***//
	$reloadedQueryRows = asol_ReportsUtils::managePremiumFeature("reportActiveQueriesManagement", "reportFunctions.php", "killActiveLongQueries", null);
	//***AlineaSol Premium***//
	
//**********************************//
//*****Kill Active Long Queries*****//
//**********************************//


function endsWith( $str, $sub ) {
	return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
}


?>