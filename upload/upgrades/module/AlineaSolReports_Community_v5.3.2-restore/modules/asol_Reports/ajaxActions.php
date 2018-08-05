<?php

error_reporting(1); //E_ERROR

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");

$actionTarget = $_REQUEST['actionTarget'];
$actionValue = json_decode(html_entity_decode($_REQUEST['actionValue'], ENT_QUOTES), true);

if ($actionTarget == 'downloadExportedReport') {

	require_once("modules/asol_Reports/include/generateReportsFunctions.php");
	
	$mimeType = (!empty($_REQUEST['mimeType']) ? $_REQUEST['mimeType'] : 'application/octet-stream');
	$fileName = $_REQUEST['fileName'];
	$fileType = $_REQUEST['fileType'];
	$getContent = ($_REQUEST['getContent'] === 'true' ? true : false);
	$openPopup = ($_REQUEST['executionMode'] === 'popup' ? true : false);
	$isWsExecution = ($_REQUEST['isWsExecution'] === '1' ? true : false);

	$exportFolder = "modules/asol_Reports/tmpReportFiles/";
	$currentDir = getcwd()."/";
	
	if ($getContent) {

		$pngs = $_REQUEST['pngs'];
		$legends = $_REQUEST['legends'];
		$engines = $_REQUEST['engines'];
		
		if ($fileType == 'app' && $openPopup) {
			
			$exportedReportData = asol_ReportsGenerationFunctions::getExportedSerializedReportFileContent($fileName);
			$unserializedReport = $exportedReportData['unserializedReport'];

			$reportScheduledTypeArray = explode(':', $unserializedReport["reportScheduledType"]);
			$reportScheduledType = (empty($reportScheduledTypeArray[0])) ? 'email' : $reportScheduledTypeArray[0];
			$reportScheduledTypeInfo = (empty($reportScheduledTypeArray[1])) ? null : json_decode(urldecode($reportScheduledTypeArray[1]), true);

			$isDetailedReport = $unserializedReport["isDetailedReport"];
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'scheduledTypeInfo' => $reportScheduledTypeInfo,
				'csvData' => array(
					'reportName' => $unserializedReport['report_name'],
					'resultset' => $unserializedReport['resultset'],
					'resultsetNoFormat' => $unserializedReport['resultsetNoFormat'],
					'subtotals' => '',
					'isDetailed' => $isDetailedReport,
					'rowIndexDisplay' => $unserializedReport['row_index_display']
				)
			);
			
			$parsedParameters = asol_ReportsUtils::managePremiumFeature("externalApplicationReports", "reportFunctions.php", "getReportExternalApplicationParsedParameters", $extraParams);
			$applicationPopupHtml = asol_ReportsUtils::managePremiumFeature("externalApplicationReports", "reportFunctions.php", "getApplicationPopupHtml", array('parsedParameters' => $parsedParameters));
			
			$returnedHtml = ($applicationPopupHtml !== false ? $applicationPopupHtml : '');
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else {
		
			if ($isWsExecution) {
			
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'fileName' => $fileName
				);
				$downloadedWebServiceReport = asol_ReportsUtils::managePremiumFeature("webServiceReport", "reportFunctions.php", "downloadWebServiceReport", $extraParams);
				
				$exportedReportData = ($downloadedWebServiceReport !== false ? $downloadedWebServiceReport : null);
				
				$unserializedReport = $exportedReportData['unserializedReport'];
				$reportDate = $exportedReportData['reportDate'];
				$userTZ = $exportedReportData['userTZ'];
				
				$downloadedFile = asol_ReportsGenerationFunctions::processDownloadRequest($unserializedReport, $userTZ, $reportDate, $fileType, $pngs, $legends, $engines);
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			} else {
	
				$exportedReportData = asol_ReportsGenerationFunctions::getExportedSerializedReportFileContent($fileName);
				$unserializedReport = $exportedReportData['unserializedReport'];
				$reportDate = $exportedReportData['reportDate'];
				$userTZ = $exportedReportData['userTZ'];
				
				$downloadedFile = asol_ReportsGenerationFunctions::processDownloadRequest($unserializedReport, $userTZ, $reportDate, $fileType, $pngs, $legends, $engines);
				
			}
			
			$returnedHtml = $downloadedFile['fileContent'];
			
			header("Content-Type: ".$mimeType);
			header("Content-Disposition: attachment; filename=\"".$downloadedFile['fileName']."\"");
			header("Content-Description: File Transfer");
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: ".mb_strlen($returnedHtml, "8bit")."\"");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Pragma: public");
			 
			ob_clean();
			flush();
	
			unlink($currentDir.$exportFolder.$downloadedFile['fileName']);
			
		}
		
	}
	
} else if ($actionTarget == 'getCurrentReportSQL') {
	
	require_once("modules/asol_Reports/include/generateReportsFunctions.php");
	
	global $current_user;
	
	$currentSql = null;
	$currentQueryData = json_decode(urldecode($_REQUEST['currentQuery']), true);
		
	if (!empty($currentQueryData['module'])) {

		$phpDateTime = new DateTime(null, new DateTimeZone($current_user->getPreference("timezone")));
		$hourOffset = $phpDateTime->getOffset()*-1;
		
		$currentConfig = asol_ReportsGenerationFunctions::getCurrentConfig($current_user->id);
				
		$alternativeDb = ($_REQUEST['selectedDb'] >= 0) ? $_REQUEST['selectedDb'] : false;
		$hasDeleted = (isset($_REQUEST['hasDeleted']) ? ($_REQUEST['hasDeleted'] == '1' ? true : false) : false);
		$externalDataBaseQueryParams = asol_ReportsGenerationFunctions::manageExternalDatabaseQueries($alternativeDb, $currentQueryData['module'], true);
		$domainField = $externalDataBaseQueryParams["domainField"];
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		require_once("modules/asol_Common/include/commonUtils.php");
		$predefinedTemplatesResult = asol_CommonUtils::managePremiumFeature("templatesCommon", "commonFunctions.php", "getPredefinedTemplates", null);
		$predefinedTemplates = ($predefinedTemplatesResult !== false ? $predefinedTemplatesResult : null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$currentFilters = json_decode($currentQueryData['filters'], true);
		$avoidTrim = $currentFilters['config']['avoidTrim'];
		
		$extraParams = array(
			'convertDates' => true,
			'alternativeDb' => $_REQUEST['selectedDb'],
			'hasDeleted' => $hasDeleted,
			'isSubQuery' => (isset($_REQUEST['isSubQuery']) && $_REQUEST['isSubQuery'] == '1' ? true : false),
			'currentQuery' => $currentQueryData, 
			'index' => $_REQUEST['index'], 
			'hourOffset' => $hourOffset, 
			'quarterMonth' => $currentConfig["fiscalMonthInit"], 
			'weekStart' => $currentConfig["week_start"], 
			'currentUser' => $current_user, 
			'schedulerCall' => false, 
			'reportDomain' => (asol_CommonUtils::isDomainsInstalled() ? $current_user->asol_default_domain : null), 
			'domainField' => $domainField, 
			'sqlTemplates' => $predefinedTemplates['sql'],
			'avoidTrim' => $avoidTrim,
		);
		$currentSql = asol_ReportsUtils::managePremiumFeature("showSQLQuery", "reportFunctions.php", "getSqlFromReport", $extraParams);
	}
	
	$returnedHtml = ((!empty($currentSql) && ($currentSql !== false)) ? $currentSql : 'No Query Available');
	
} else if ($actionTarget == 'saveReportEntry') {
	
	global $db, $current_user;
	
	$reportTable = $_REQUEST['reportTable'];
	$entryId = (isset($_REQUEST['entryId']) ? $_REQUEST['entryId'] : null);
	
	if ($current_user->is_admin && in_array($reportTable, array('asol_reports_relations'))) {
		
		if ($reportTable == 'asol_reports_relations') {
			
			$name = $_REQUEST['name'];
			$scope = $_REQUEST['scope'];
			$module = $_REQUEST['module'];
			$field = $_REQUEST['field'];
			$relation_module = $_REQUEST['relation_module'];
			$relation_field = $_REQUEST['relation_field'];
			$alternative_database = $_REQUEST['alternative_database'];
			
			if ($entryId == null) {
				$entryId = create_guid();
				$db->query("INSERT INTO ".$reportTable." (id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, scope, module, field, relation_module, relation_field, alternative_database) VALUES ('".$entryId."', '".$name."', '".gmdate("Y-m-d H:i:s")."', '".gmdate("Y-m-d H:i:s")."', '".$current_user->id."', '".$current_user->id."', NULL, 0, '".$scope."', '".$module."', '".$field."', '".$relation_module."', '".$relation_field."', '".$alternative_database."')");
			} else {
				$db->query("UPDATE ".$reportTable." SET name='".$name."', date_modified='".gmdate("Y-m-d H:i:s")."', modified_user_id='".$current_user->id."', scope='".$scope."', module='".$module."', field='".$field."', relation_module='".$relation_module."', relation_field='".$relation_field."', alternative_database='".$alternative_database."' WHERE id='".$entryId."'");
			}
			
			$returnedHtml = json_encode(array('id' => $entryId, 'name' => $name, 'scope' => $scope, 'module' => $module, 'field' => $field, 'relation_module' => $relation_module, 'relation_field' => $relation_field, 'alternative_database' => $alternative_database));
	
		}
		
	}
	
}

echo $returnedHtml;
