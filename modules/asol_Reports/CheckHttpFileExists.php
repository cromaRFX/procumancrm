<?php

global $db, $sugar_config, $current_language;

require_once("modules/asol_Reports/include_basic/reportsUtils.php");

$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
$httpHtmlFile = $_REQUEST['httpHtmlFile'];

if (!file_exists($tmpFilesDir.$httpHtmlFile)) {

	$returnedString = "false";
	
	if ((isset($sugar_config['asolReportsDispatcherMaxRequests'])) && ($sugar_config['asolReportsDispatcherMaxRequests'] > 0) && (isset($_REQUEST["reportRequestId"]))) { //Only if dispatcher is activated
		
		//************************************************//
		//***Clean database report_dispatcher if exists***//
		//************************************************//
		if (asol_ReportsUtils::dispatcherTableExists()) {
			
			$currentTime = time();
			
			$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
			$timedOutStamp = $currentTime - $checkHttpFileTimeout; //Time to check report execution expiration time
			$closedWindowStamp = $currentTime - ($checkHttpFileTimeout / 500);  //Time to check last recall not updated for manual Reports (browser screen closed). 
			
			$cleanDispatcherTableSql = "DELETE FROM asol_reports_dispatcher WHERE (status IN ('terminated', 'timeout')) OR (request_init_date < '".date("Y-m-d H:i:s", $timedOutStamp)."') OR ((status = 'waiting') AND (request_type = 'manual') AND (last_recall < '".date("Y-m-d H:i:s", $closedWindowStamp)."'))";
			$db->query($cleanDispatcherTableSql);
			
		}
		//************************************************//
		//***Clean database report_dispatcher if exists***//
		//************************************************//
		
		
		$reportsDispatcherSql = "SELECT COUNT(DISTINCT id) as 'reportsThreads' FROM asol_reports_dispatcher WHERE status = 'executing'";
		$reportsDispatcherRs = $db->query($reportsDispatcherSql);
		$reportsDispatcherRow = $db->fetchByAssoc($reportsDispatcherRs);
		
		$currentReportsRunningThreads = $reportsDispatcherRow["reportsThreads"];
		
		
		if ($currentReportsRunningThreads < $sugar_config['asolReportsDispatcherMaxRequests']) { //Execute Report
		
			$sqlExecuting = "SELECT * FROM asol_reports_dispatcher WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
			$rsExecuting = $db->query($sqlExecuting);
			$rowExecuting = $db->fetchByAssoc($rsExecuting);
			
			if ($rowExecuting["status"] == "waiting") {
				
				//Check if Report is ready to Run (order by time ascending)
				$availableReportThreads = $sugar_config['asolReportsDispatcherMaxRequests'] - $currentReportsRunningThreads;
				
				$sqlWaitingReports = "SELECT id FROM asol_reports_dispatcher WHERE status = 'waiting' ORDER BY request_init_date ASC LIMIT ".$availableReportThreads;
				$rsWaitingReports = $db->query($sqlWaitingReports);
				
				$firtReports = array();
				
				while($row = $db->fetchByAssoc($rsWaitingReports))
					$firtReports[] = $row['id'];
				//Check if Report is ready to Run (order by time ascending)
				
				if (in_array($_REQUEST["reportRequestId"], $firtReports)) {
					
					//********//
					//**Curl**//
					//********//
					$ch = curl_init();
					
					$curlRequestedUrl = $rowExecuting["curl_requested_url"];
				
					curl_setopt($ch, CURLOPT_URL, $curlRequestedUrl);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_TIMEOUT, 1);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
					
					curl_exec($ch);
					curl_close($ch);
					//********//
					//**Curl**//
					//********//
				
					$sqlExecutingStatus = "UPDATE asol_reports_dispatcher SET status = 'executing' WHERE id='".$_REQUEST["reportRequestId"]."' AND status = 'waiting' LIMIT 1";
					$db->query($sqlExecutingStatus);
					$returnedString = "exec";
					
				}
		
			}
				
		}
		
		
		$recallGMTTime = time();
		$recallGMTDate = date('Y-m-d H:i:s', $recallGMTTime);
		
		$initGMTDateTimeStamp = $_REQUEST["initRequestDateTimeStamp"];
		$recallGMTDateTimeStamp = $recallGMTDate;
		
		
		//Check Max Report Execution time
		$runningTimeSeconds = $recallGMTDateTimeStamp - $initGMTDateTimeStamp;
		asol_ReportsUtils::reports_log('debug', 'Running Time: '.$runningTimeSeconds, __FILE__, __METHOD__, __LINE__);
		
		if ((isset($sugar_config['asolReportsMaxExecutionTime'])) && ($sugar_config['asolReportsMaxExecutionTime'] > 0)) {
			
			if ($runningTimeSeconds > $sugar_config['asolReportsMaxExecutionTime']) {
				
				$returnedString = "timeout";
				
			}
			
		}
		
		$sqlLastRecall = "UPDATE asol_reports_dispatcher SET last_recall='".$recallGMTDate."' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
		$db->query($sqlLastRecall);
			
	}
	
	echo $returnedString;

} else {

    $importHttpFile = fopen($tmpFilesDir.$httpHtmlFile, "r");
    $HttpContent = fread($importHttpFile, filesize($tmpFilesDir.$httpHtmlFile));
    fclose($importHttpFile);

    echo $HttpContent;

}

?>