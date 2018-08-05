<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");


error_reporting(1); //E_ERROR 

global $current_language, $timedate, $db, $sugar_config;


$asolDefaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"])) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us";
$current_language = (empty($current_language)) ? $asolDefaultLanguage : $current_language;
	

if (!isset($_REQUEST['scheduledReports'])) {

	$schedulerMinutaryInterval = 5;
	
	$sqlScheduled = "SELECT * FROM asol_reports WHERE ((report_type LIKE 'scheduled%' AND (report_scheduled_type IS NULL OR report_scheduled_type LIKE 'email%') AND email_list IS NOT NULL AND email_list != '\${pipe}\${pipe}\${pipe}\${pipe}\${pipe}\${pipe}\${pipe}\${pipe}\${pipe}') OR (report_scheduled_type LIKE 'app%') OR (report_scheduled_type LIKE 'ftp%') OR (report_scheduled_type LIKE 'tl%') OR (report_type LIKE 'stored%')) AND report_tasks IS NOT NULL AND deleted=0";
	$scheduledReports = asol_Reports::getSelectionResults($sqlScheduled, null, false);


	$currentTimeStamp = time();
	$scheduled_reports = array();

	if (count($scheduledReports) == 0)
		$scheduledReports = array();

	foreach ($scheduledReports as $key=>$scheduledReport) {

		$scheduledTasks = json_decode(rawurldecode($scheduledReport['report_tasks']), true);
		
		$currentW = date("w", $currentTimeStamp);
		$currentJ = date("j", $currentTimeStamp);
		$currentH = date("H", $currentTimeStamp);
		$currentI = date("i", $currentTimeStamp);
		$currentDate = date("Y-m-d", $currentTimeStamp);
		
		
		//Check if report has some user_input filter
		$hasUserInputFilter = false;
		$reportFilters = unserialize(base64_decode($scheduledReport['report_filters']));
		
		foreach ($reportFilters['data'] as $currentFilter){
			if ($currentFilter['behavior'] == 'user_input') {
				$hasUserInputFilter = true;
				break;
			}	
		}

				
		if (!$hasUserInputFilter) {

			$storedOffset = $scheduledTasks['offset'];
			
			foreach ($scheduledTasks['data'] as $currentTask){

				$currentTaskDateTime = date("Y-m-d H:i:s", strtotime($currentDate.' '.$currentTask['time'])+$storedOffset);
				$currentTask['time'] = $timedate->swap_formats($currentTaskDateTime, $timedate->get_db_date_time_format(), "H:i");
				
				$timeValue = explode(":", $currentTask['time']);

				$taskMinute = $timeValue[1];
				$taskHour = $timeValue[0];

				if ($currentTask['status'] == "active") {

					switch ($currentTask['range']['type']) {

						case "weekly":
							$dayWeek = $currentTask['range']['value'];
							$dayMonth = "-1";
							break;

						case "monthly":
							$dayWeek = "-1";
							$dayMonth = $currentTask['range']['value'];
							break;

						case "daily":
							$dayWeek = "-1";
							$dayMonth = "-1";
							break;
							
					}

					if (((($currentW == $dayWeek%7) || ($currentJ == $dayMonth) || ($currentTask['range']['type'] == "daily")) &&
					($currentH == $taskHour) && (($currentI >= $taskMinute) && ($currentI < ($taskMinute + $schedulerMinutaryInterval)))) && ($currentTask['status'] == "active") &&
					(empty($currentTask['end']) || ($currentDate <= $currentTask['end']))) {

						if (asol_CommonUtils::isDomainsInstalled()) {
				
							require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
							
							$reportDomainId = $scheduledReport['asol_domain_id'];
							$reportDomainIsPublished = ($scheduledReport['asol_published_domain'] == '1') ? true : false;
		
							$reportDomainPublishedMode = $scheduledReport['asol_domain_published_mode'];
							$reportDomainPublishedLevels = ($scheduledReport['asol_domain_child_share_depth'] === ';;') ? array() : explode(';;', substr($scheduledReport['asol_domain_child_share_depth'], 1, -1));
							$reportDomainPublishedDomains = ($scheduledReport['asol_multi_create_domain'] === ';;') ? array() : explode(';;', substr($scheduledReport['asol_multi_create_domain'], 1, -1)); 
							
							
							if (($reportDomainPublishedMode != '0') && $reportDomainIsPublished) {
								
								$domainPublishingInfo = array(
									'domains' => $reportDomainPublishedDomains,
									'levels' => $reportDomainPublishedLevels,
									'mode' => $reportDomainPublishedMode,
									'mainDomain' => $reportDomainId,
									'isPublished' => $reportDomainIsPublished
								);
								
								foreach (asol_manageDomains::getDomainsPublished($domainPublishingInfo) as $reportPublishedDomain) {
								
									$scheduled_reports[] = array(
										'id' => $scheduledReports[$key]['id'],
										'created_by' => $scheduledReports[$key]['created_by'],
										'report_type' => $scheduledReports[$key]['report_type'],
										'domain_id' => $reportPublishedDomain
									);
									
									asol_ReportsUtils::reports_log('asol', 'Scheduled Report Id: '.$scheduledReports[$key]['id'].' Domain: '.$reportPublishedDomain.' ', __FILE__, __METHOD__, __LINE__);
								
								}
							
							} else {
								
								$scheduled_reports[] = array(
									'id' => $scheduledReports[$key]['id'],
									'created_by' => $scheduledReports[$key]['created_by'],
									'report_type' => $scheduledReports[$key]['report_type'],
									'domain_id' => $reportDomainId
								);
								
								asol_ReportsUtils::reports_log('asol', 'Scheduled Report Id: '.$scheduledReports[$key]['id'].' Domain: '.$reportDomainId.' ', __FILE__, __METHOD__, __LINE__);
								
							}
							
						} else {
						
							$scheduled_reports[] = array(
								'id' => $scheduledReports[$key]['id'],
								'created_by' => $scheduledReports[$key]['created_by'],
								'report_type' => $scheduledReports[$key]['report_type'],
								'domain_id' => null
							);
							
							asol_ReportsUtils::reports_log('asol', 'Scheduled Report Id: '.$scheduledReport['id'], __FILE__, __METHOD__, __LINE__);

						}

						//Se rompe el bucle foreach una vez se haya comprobado que hay que realizar una tarea
						break;

					} //Fin de la condicion de que se cumpla la fecha y hora


				} //Fin de la condicion de que la tarea actual este activa


			}
				
		} else {

			asol_ReportsUtils::reports_log('asol', 'Scheduled Reports with Id ['.$scheduledReport['id'].'] has user_input filters', __FILE__, __METHOD__, __LINE__);

		}

	}

} else {

	$scheduled_reports = unserialize(base64_decode($_REQUEST['scheduledReports']));

}



//********************************//
//****Current Report Execution****//
//********************************//
$currentScheduledReport = $scheduled_reports[0];

$record = $currentScheduledReport['id'];
$currentUserId = $currentScheduledReport['created_by'];

$reportType = explode(':', $currentScheduledReport['report_type']);
$storeReport = ($reportType[0] == 'stored') ? '&storedReport=true' : '';

$contextDomainId = (asol_CommonUtils::isDomainsInstalled() ? '&contextDomainId='.$currentScheduledReport['domain_id'] : '');


$ch = curl_init();
$curlRequestUrl = (isset($sugar_config["asolReportsCurlRequestUrl"])) ? $sugar_config["asolReportsCurlRequestUrl"] : $sugar_config["site_url"];
$requestedUrl = $curlRequestUrl.'/index.php?entryPoint=viewReport&record='.$record.'&language='.$current_language.'&sourceCall=httpReportRequest&currentUserId='.$currentUserId."&schedulerCall=true".$storeReport.$contextDomainId;


curl_setopt($ch, CURLOPT_URL, $requestedUrl);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($ch);
curl_close($ch);
//********************************//
//****Current Report Execution****//
//********************************//


//*****************************//
//****Next Report Execution****//
//*****************************//
if (!empty($scheduled_reports[0])) {

	array_shift($scheduled_reports);
	
	$nextRequestedUrl = (isset($sugar_config["asolReportsCurlRequestUrl"])) ? $sugar_config["asolReportsCurlRequestUrl"] : $sugar_config["site_url"];
	$nextRequestedPostParams = 'entryPoint=scheduledTask&module=asol_Reports&scheduledReports='.base64_encode(serialize($scheduled_reports));

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $nextRequestedUrl.'/index.php');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $nextRequestedPostParams);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	curl_exec($ch);
	curl_close($ch);
}
//*****************************//
//****Next Report Execution****//
//*****************************//


?>