<?php

error_reporting(1); //E_ERROR

/*
 * $vardefFilters -> used for AlineasolReports Fields
 */
function displayReport($reportId, $vardefFilters, $sort_field, $sort_direction, $sort_index, $page_number = '', $isDashlet = false, $dashletId = '', $getLibraries = true, $getReloadFunctions = true, $returnHtml = false, $getExportData = false, $override_entries = null, $override_info = null, $override_filters = null, $avoidAjaxRequest = false, $contextDomainId = null) {

	global $current_user, $timedate, $mod_strings, $app_strings, $theme, $db, $app_list_strings, $beanList, $beanFiles, $current_language, $sugar_config;

	require_once('modules/asol_Reports/include_basic/reportsUtils.php');
	require_once('modules/asol_Reports/include_basic/ReportChart.php');
	require_once('modules/asol_Reports/ReportsDashletChart.php');
	require_once('modules/asol_Reports/include_basic/generateReportsFunctions.php');


	//****************************//
	//****Instance Report Bean****//
	//****************************//
	$focus = asol_Report::getReportBean($reportId);
	

	//****************************//
	//****Variables Definition****//
	//****************************//
	$isPreview = ((isset($_REQUEST['isPreview'])) && ($_REQUEST['isPreview'] == 'true'));
	$hasVardefFilter = (!empty($vardefFilters));
	$hasSecurityGroupsDisabled = ((isset($sugar_config["asolReportsSecurityGroupsDisabled"])) && ($sugar_config["asolReportsSecurityGroupsDisabled"] == true));
	$hasCurlRequestEnabled = (isset($sugar_config["asolReportsCurlRequestUrl"]) ? true : false);
	$hasNoPagination = ((isset($sugar_config["asolReportsAvoidReportsPagination"])) && ($sugar_config["asolReportsAvoidReportsPagination"] == true));
	$dispatcherMaxRequests = (isset($sugar_config['asolReportsDispatcherMaxRequests']) ? $sugar_config['asolReportsDispatcherMaxRequests'] : 0);
	$dashletExportButtons = (isset($sugar_config['asolReportsDashletExportButtons']) ? $sugar_config['asolReportsDashletExportButtons'] : true);

	$isHttpReportRequest = ((isset($_REQUEST['sourceCall'])) && ($_REQUEST['sourceCall'] == "httpReportRequest"));
	$isReloadReport = ((isset($_REQUEST['entryPoint'])) && ($_REQUEST['entryPoint'] == 'reloadReport'));
	$isWsExecution = ((isset($_REQUEST['asolReportsWebServiceExecution'])) && ($_REQUEST['asolReportsWebServiceExecution']));
	$isMetaReport = ($focus->is_meta === '1');

	$entryPointExecuted = (isset($_REQUEST['entryPoint']) && in_array($_REQUEST['entryPoint'], array('reloadReport', 'viewReport')));
	$executeReportDirectly = ((!$hasCurlRequestEnabled) || ($avoidAjaxRequest));

	$reorderDetailGroups = true;
	

	//*********************************//
	//***Unserialize Report Elements***//
	//*********************************//
	$storedSelectedFields = (isset($_REQUEST['previewFields']) && !empty($_REQUEST['previewFields']) ? json_decode(urldecode(html_entity_decode($_REQUEST['previewFields'])), true) : unserialize(base64_decode($focus->report_fields)));
	$storedSelectedFilters = (isset($_REQUEST['previewFilters']) && !empty($_REQUEST['previewFilters']) ? json_decode(urldecode(html_entity_decode($_REQUEST['previewFilters'])), true) : unserialize(base64_decode($focus->report_filters)));
	$storedSelectedCharts = (isset($_REQUEST['previewCharts']) && !empty($_REQUEST['previewCharts']) ? json_decode(urldecode(html_entity_decode($_REQUEST['previewCharts'])), true) : unserialize(base64_decode($focus->report_charts_detail)));
	$storedSelectedDescription = (isset($_REQUEST['previewDescription']) && !empty($_REQUEST['previewDescription']) ? json_decode(urldecode(html_entity_decode($_REQUEST['previewDescription'])), true) : unserialize(base64_decode($focus->description)));

	
	//***********************************//
	//****Preview Override Parameters****//
	//***********************************//
	$focus->alternative_database = (isset($_REQUEST['previewDatabase']) && $_REQUEST['previewDatabase'] !== '' ? $_REQUEST['previewDatabase'] : $focus->alternative_database);
	$focus->audited_report = (isset($_REQUEST['previewAudit']) && $_REQUEST['previewAudit'] !== '' ? $_REQUEST['previewAudit'] : $focus->audited_report);
	$focus->report_module = (isset($_REQUEST['previewModule']) && !empty($_REQUEST['previewModule']) ? urldecode(html_entity_decode($_REQUEST['previewModule'])) : $focus->report_module);
	$focus->dynamic_tables = (isset($_REQUEST['previewDynamicTables']) && $_REQUEST['previewDynamicTables'] !== '' ? $_REQUEST['previewDynamicTables'] : $focus->dynamic_tables);
	$focus->dynamic_sql = (isset($_REQUEST['previewDynamicSql']) && !empty($_REQUEST['previewDynamicSql']) ? urldecode(html_entity_decode($_REQUEST['previewDynamicSql'])) : $focus->dynamic_sql);
	$focus->report_charts = (isset($_REQUEST['previewDisplay']) && !empty($_REQUEST['previewDisplay']) ? $_REQUEST['previewDisplay'] : $focus->report_charts);
	$focus->report_charts_engine = (isset($_REQUEST['previewChartsEngine']) && !empty($_REQUEST['previewChartsEngine']) ? $_REQUEST['previewChartsEngine'] : $focus->report_charts_engine);
	$focus->row_index_display = (isset($_REQUEST['previewIndexDisplay']) && $_REQUEST['previewIndexDisplay'] !== '' ? $_REQUEST['previewIndexDisplay'] : $focus->row_index_display);
	$focus->results_limit = (isset($_REQUEST['previewResultsLimit']) && !empty($_REQUEST['previewResultsLimit']) ? urldecode(html_entity_decode($_REQUEST['previewResultsLimit'])) : $focus->results_limit);
	
	
	//*********************//
	//***Data Visibility***//
	//*********************//
	$dataVisibility = array(
		'field' => ($focus->report_charts !== 'Char'),
		'filter' => ($focus->report_charts !== 'Char'),
		'chart' => ($focus->report_charts !== 'Tabl'),
	);
	//*********************//
	//***Data Visibility***//
	//*********************//
	
	
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$metaReportData = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "overrideMetaReportData", array('overrideInfo' => $override_info, 'overrideFilters' => $override_filters, 'fields' => $storedSelectedFields, 'filters' => $storedSelectedFilters, 'charts' => $storedSelectedCharts));
	$storedSelectedFields = (($metaReportData !== false) ? $metaReportData['data']['fields'] : $storedSelectedFields);
	$storedSelectedFilters = (($metaReportData !== false) ? $metaReportData['data']['filters'] : $storedSelectedFilters);
	$storedSelectedCharts = (($metaReportData !== false) ? $metaReportData['data']['charts'] : $storedSelectedCharts);
	
	$dataVisibility = (($metaReportData !== false) && isset($metaReportData['display']) ? $metaReportData['display'] : $dataVisibility);
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$predefinedTemplatesResult = asol_ReportsUtils::managePremiumFeature("templatesReports", "reportFunctions.php", "getPredefinedTemplates", array('json_encode' => false, 'currentModule' => null));
	$predefinedTemplates = ($predefinedTemplatesResult !== false ? $predefinedTemplatesResult : null);
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$currentReportCss = asol_ReportsUtils::managePremiumFeature("cssPerReport", "reportFunctions.php", "getCurrentReportCss", array('reportTemplates' => $storedSelectedFields['tables'][0]['templates'], 'selectedValue' => $storedSelectedFields['tables'][0]['css'], 'jsonCssTemplates' => $predefinedTemplates['css'], 'dashletId' => $dashletId, 'isMetaSubReport' => isset($override_info)));
	$currentReportCss = ($currentReportCss !== false ? $currentReportCss : '');
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
				

	//****************************//
	//*****module Strings FIX*****//
	//****************************//
	$mod_strings['MSG_REPORT_SEND_EMAIL_ALERT'] = str_replace("&#039", "\&#039", str_replace("'", "\&#039", translate('MSG_REPORT_SEND_EMAIL_ALERT', 'asol_Reports')));



	//****************************************//
	//****Check if External App is defined****//
	//****************************************//
	$reportScheduledTypeArray = explode('${dollar}', $focus->report_scheduled_type);
	$reportScheduledAppArray = explode('${pipe}', $reportScheduledTypeArray[1]);
	$hasExternalApp = (!empty($reportScheduledAppArray[1]));

	
	//****************************************//
	//********Get External Parameters*********//
	//****************************************//
	$externalParams = asol_ReportsGenerationFunctions::getExternalRequestParams();
		
	$current_language = $externalParams["current_language"];
	$mod_strings = $externalParams["mod_strings"];
	$current_user = $externalParams["current_user"];
	

	//****************************************//
	//****Clean DataBase Report Dispatcher****//
	//****************************************//
	if (empty($vardefFilters)) {
		asol_ReportsGenerationFunctions::cleanDataBaseReportDispatcher();
	}


	$reportTypeSplitted = explode(':', $focus->report_type);
	$reportType = $reportTypeSplitted[0]; //report_type

	if ($isMetaReport && ($entryPointExecuted || $executeReportDirectly || $getExportData)) {
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'reportId' => $reportId,
			'isDashlet' => $isDashlet,
			'dashletId' => $dashletId,
			'getLibraries' => $getLibraries,
			'returnHtml' => $returnHtml,
			'getExportData' => $getExportData,
			'contextDomainId' => $contextDomainId,
			'currentReportCss' => $currentReportCss
		);
		$metaReportExecution = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "executeMetaReport", $extraParams);
		if ($metaReportExecution === false) {
			die("Cannot get metaReport Premium Feature. executeMetaReport() Function Called.");
		} else {
			
			$justDisplay = (!$isHttpReportRequest);
			
			if ((isset($justDisplay)) && ($justDisplay)) {
				if ($returnHtml) {
					return $metaReportExecution;
				}
			}
			
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
	} else if (($reportType === 'webservice_remote') && $entryPointExecuted) {

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'reportId' => $reportId,
			'vardefFilters' => $vardefFilters,
			'sort_field' => $sort_field,
			'sort_direction' => $sort_direction,
			'sort_index' => $sort_index,
			'page_number' => $page_number,
			'isDashlet' => $isDashlet,
			'dashletId' => $dashletId,
			'getLibraries' => $getLibraries
		);
		$executedWebServiceReport = asol_ReportsUtils::managePremiumFeature("webServiceReport", "reportFunctions.php", "executeWebServiceReport", $extraParams);
		$executedWebServiceReportHtml = ($executedWebServiceReport !== false ? $executedWebServiceReport : null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		

		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		$httpHtmlFile = $_REQUEST['httpHtmlFile'];
		$justDisplay = (!$isHttpReportRequest);
		
		if ((isset($justDisplay)) && ($justDisplay)) {
		
			if ($returnHtml) {
				return $executedWebServiceReportHtml;
			} else {
				echo $executedWebServiceReportHtml;
			}
			
		} else {
			
			$exportHttpFile = fopen($tmpFilesDir.$httpHtmlFile, "w");
			fwrite($exportHttpFile, $executedWebServiceReportHtml);
			fclose($exportHttpFile);
			
			if ($returnHtml)
				return false;
			
		}

	} else if (($reportType === 'stored') && ($_REQUEST['entryPoint'] != 'viewReport')) { // Stored Report!

		//****************************************//
		//*********Get Stored Report Data*********//
		//****************************************//
		$reportType = explode(':', $focus->report_type);
		echo asol_ReportsGenerationFunctions::getStoredReportData($reportType[1], $reportId, $isDashlet, $dashletId, $focus->report_charts);

	} else { // Anything else Report!

		if ($entryPointExecuted || $executeReportDirectly || $getExportData) {

			//*********************************//
			//****Check Access To Reports******//
			//*********************************//
			if ((!ACLController::checkAccess('asol_Reports', 'view', true)) && (!$hasVardefFilter)) {
				die("<font color='red'>".$app_strings["LBL_EMAIL_DELETE_ERROR_DESC"]."</font>");
			}
			
			
			//*************************************************//
			//******Requiring FilesGet External Parameters*****//
			//*************************************************//
			require_once('modules/asol_Reports/include_basic/ReportExcel.php');
			require_once('modules/asol_Reports/include_basic/ReportFile.php');
			require_once('modules/asol_Reports/include_basic/ReportChart.php');
			require_once('modules/asol_Reports/include_basic/manageReportsFunctions.php');
			require_once('modules/asol_Reports/include_basic/generateQuery.php');
				
			//*****************************//
			//****Variable Definition******//
			//*****************************//
			$reportHeadersHtml = '';
			$fixedReportId = str_replace("-", "", $focus->id);
			$fixedDashletId = str_replace("-", "", $dashletId);
			
			$return_action = (isset($_REQUEST['return_action'])) ? $_REQUEST['return_action'] : "";
				

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'isDynamic' => ($focus->dynamic_tables == '1'),
				'dynamicTableValue' => $focus->dynamic_sql,
				'usedDb' => ($focus->alternative_database >= 0 ? $focus->alternative_database : false),
			);
			$matchTablesResult = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "getMatchTablesResult", $extraParams);
			$reportUsedModules = ($matchTablesResult !== false ? $matchTablesResult : array($focus->report_module));
			$multiModuleReport = ($matchTablesResult !== false && count($matchTablesResult) > 1 );
			$hasNoPagination = ($multiModuleReport ? true : $hasNoPagination);
			$externalDbSimpleName = ($matchTablesResult !== false ? true : false);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			

			$report_data['record'] = $focus->id;
			$report_data['report_name'] = (isset($_REQUEST['previewName']) && !empty($_REQUEST['previewName']) ? urldecode(html_entity_decode($_REQUEST['previewName'])) : $focus->name);
			$report_data['audited_report'] = $focus->audited_report;
			$report_data['description'] = $storedSelectedDescription;
			$report_data['assigned_user_id'] = $focus->assigned_user_id;
			$report_data['created_by'] = $focus->created_by;
			$report_data['report_scope'] = $focus->report_scope;
			$report_data['report_attachment_format'] = $focus->report_attachment_format;
			$report_data['report_charts'] = $focus->report_charts;
			$report_data['report_charts_engine'] = $focus->report_charts_engine;
			$report_data['scheduled_images'] = $focus->scheduled_images;
			$report_data['row_index_display'] = $focus->row_index_display;
			$report_data['results_limit'] = $focus->results_limit;
			$report_data['table_config'] = asol_ReportsGenerationFunctions::getTableConfiguration($storedSelectedFields, 0);
				
			$audited_report = ($report_data['audited_report'] == '1');
			$hasRowIndexDisplay = ($report_data['row_index_display'] == '1');
			
			$availableReport = true;
			$oversizedReport = false;
				
			$detailMultiQuery = ((isset($report_data['table_config']['multiQuery'])) && ($report_data['table_config']['multiQuery']));
			$grossExecution = ((isset($report_data['table_config']['grossExecution'])) && ($report_data['table_config']['grossExecution']));
			$displayTitles = ((!isset($report_data['table_config']['titles']['visible'])) || ($report_data['table_config']['titles']['visible']));
			$displayHeaders = ((!isset($report_data['table_config']['headers']['visible'])) || ($report_data['table_config']['headers']['visible']));
			$displaySubtotals = ((!isset($report_data['table_config']['subtotals']['visible'])) || ($report_data['table_config']['subtotals']['visible']));
			$displayTotals = ((!isset($report_data['table_config']['totals']['visible'])) || ($report_data['table_config']['totals']['visible']));
			$paginationType = (isset($report_data['table_config']['pagination']['visible']) ? $report_data['table_config']['pagination']['visible'] : 'all');
			$displayPagination = (isset($override_info) ? null : $paginationType);
				
			$allowExportGeneratedFile = ((!isset($vardefFilters)) || $isWsExecution);
			$externalCall = false;
			$schedulerCall = false;
			$userTZ = null;
				
			$searchCriteria = isset($_REQUEST['search_criteria']);
			$currentUserId = $_REQUEST['currentUserId'];

			
			//****************************************//
			//****External Dispatcher Management******//
			//****************************************//
			if ((!$hasVardefFilter) && (isset($_REQUEST['sourceCall'])) && ($_REQUEST['sourceCall'] == "external")) {
				asol_ReportsGenerationFunctions::manageReportExternalDispatcher($dispatcherMaxRequests);
				asol_ReportsUtils::reports_log('asol', 'Executing Report with Id ['.$reportId.']'.(asol_ReportsUtils::isDomainsInstalled() ? ' Domain ['.$contextDomainId.']' : ''), __FILE__, __METHOD__, __LINE__);
			}
				
				
			if (((isset($_REQUEST['sourceCall'])) && ($_REQUEST['sourceCall'] == "external")) || ((isset($_REQUEST['schedulerCall'])) && ($_REQUEST['schedulerCall'] == "true"))) {
	
				//**********************************************************//
				//********Manage External Execution Report Variables********//
				//**********************************************************//
				$externalCall = true;
				$overridedExternalVariables = asol_ReportsGenerationFunctions::overrideExternalReportVariables($report_data['created_by']);

				$theUser = $overridedExternalVariables["theUser"];
				$current_user = $overridedExternalVariables["current_user"];
				$allowExportGeneratedFile = $overridedExternalVariables["allowExportGeneratedFile"];
				$schedulerCall = $overridedExternalVariables["schedulerCall"];
				$externalUserDateFormat = $overridedExternalVariables["externalUserDateFormat"];
				$externalUserDateTimeFormat = $overridedExternalVariables["externalUserDateTimeFormat"];

			}
				
			
			//*************************************//
			//********Manage Report Domain*********//
			//*************************************//
			if (asol_ReportsUtils::isDomainsInstalled()) {

				$reportDomain = ($contextDomainId !== null) ? $contextDomainId : $current_user->asol_default_domain;
				
				if ($focus->report_type !== 'external') {
				
					$currentReportDomain = (empty($reportId) ? $reportDomain : $focus->asol_domain_id); 
					$manageReportDomain = asol_ReportsGenerationFunctions::manageReportDomain($reportId, $reportDomain, $currentReportDomain);
					
					if (!$manageReportDomain) {
	
						$availableReport = false;
						if ($returnHtml) {
							return (include "modules/asol_Reports/include_basic/DetailViewHttpSave.php");
						} else {
							include "modules/asol_Reports/include_basic/DetailViewHttpSave.php";
							exit();
						}
							
					}
				
				}
					
			}

			
			//*********************************************************//
			//********Reset Global Format & UserPrefs Variables********//
			//*********************************************************//
			$userDateFormat = ($externalCall ? $externalUserDateFormat : $current_user->getPreference('datef'));
			$userDateTimeFormat = ($externalCall ? $externalUserDateTimeFormat : $current_user->getPreference('datef').' '.$current_user->getPreference('timef'));

			$gmtZone = ($externalCall) ? $theUser->getUserDateTimePreferences() : $current_user->getUserDateTimePreferences();
			$userTZlabel = ($externalCall) ? $theUser->getPreference("timezone")." ".$gmtZone["userGmt"] : $current_user->getPreference("timezone")." ".$gmtZone["userGmt"];
				
			$userTZ = ($externalCall) ? $theUser->getPreference("timezone") : $current_user->getPreference("timezone");
			date_default_timezone_set($userTZ);
				
			$phpDateTime = new DateTime(null, new DateTimeZone($userTZ));
			$hourOffset = $phpDateTime->getOffset()*-1;	


			//****************************************//
			//*****Get Current User Configuration*****//
			//****************************************//
			$currentUserAsolConfig = asol_ReportsGenerationFunctions::getCurrentUserAsolConfig($current_user->id);
				
			$quarter_month = $currentUserAsolConfig["quarter_month"];
			$entriesPerPage = $currentUserAsolConfig["entriesPerPage"];
			$pdf_orientation = $currentUserAsolConfig["pdf_orientation"];
			$week_start = $currentUserAsolConfig["week_start"];
			$pdf_img_scaling_factor = $currentUserAsolConfig["pdf_img_scaling_factor"];
			$scheduled_files_ttl = $currentUserAsolConfig["scheduled_files_ttl"];
			$host_name = $currentUserAsolConfig["host_name"];


			//**************************************//
			//****Override Pagination Parameters****//
			//**************************************//
			if (($externalCall) || ($hasNoPagination)) {
				$entriesPerPage = 1000000;
			}
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			if ($hasVardefFilter) {
				$extraParams = array(
					'overrideEntries' => $override_entries
				);
				$paginationEntries = asol_ReportsUtils::managePremiumFeature("reportFieldsManagement", "reportFunctions.php", "getReportFieldsManagementPaginationEntries", $extraParams);
				if ($paginationEntries !== false) {
					$hasNoPagination = false;
					$entriesPerPage = $paginationEntries;
				}
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//	
			
			
			
			//*********************************************//
			//****Avoid auto adding "deleted" filtering****//
			//*********************************************//
			$hasDeletedUsage = (isset($storedSelectedFields['tables'][0]['config']['deletedUsage']) && $storedSelectedFields['tables'][0]['config']['deletedUsage']);
			
			
			
			//****************************************************//
			//****Show totals below column for grouped reports****//
			//****************************************************//
			$hasGroupedTotalBelowColumn = (!isset($storedSelectedFields['tables'][0]['config']['expandGroupedTotals']) || !$storedSelectedFields['tables'][0]['config']['expandGroupedTotals']);
				
			
			
			//************************//
			//****Clean Up Styling****//
			//************************//
			$cleanUpStyling = (isset($storedSelectedFields['tables'][0]['config']['cleanUpStyling']) && $storedSelectedFields['tables'][0]['config']['cleanUpStyling']);
				

			
			//****************************************//
			//******Pagination report management******//
			//****************************************//
			$reportPaginationUsage = (isset($storedSelectedFields['tables'][0]['config']['paginationUsage']) && $storedSelectedFields['tables'][0]['config']['paginationUsage']);
			$reportPaginationEntries = $storedSelectedFields['tables'][0]['config']['paginationEntries'];
			
			if ($reportPaginationUsage) {
				$hasNoPagination = false;
				$entriesPerPage = (!empty($reportPaginationEntries) ? $reportPaginationEntries : $entriesPerPage);
			}
			
			
			//**************************************//
			//***Manage Pagination when Exporting***//
			//**************************************//
			if ($getExportData) {
				$hasNoPagination = true;
				$entriesPerPage = 1000000;
			}
			
			
			//*********************************************//
			//**Execute report with default filter values**//
			//*********************************************//
			$initialExecution = $storedSelectedFilters['config']['initialExecution'];
			if ((isset($initialExecution)) && ($initialExecution)) {
				$searchCriteria = true;
			}
			
				
			//*****************************//
			//*****Variable Definition*****//
			//*****************************//
			$rs_user_name = asol_Report::getSelectionResults("SELECT user_name FROM users WHERE id = '".$focus->assigned_user_id."'", null, false);
			$report_data['assigned_user_name'] = $rs_user_name[0]['user_name'];

			$reportType = explode(':', $focus->report_type);
			$report_data['report_type'] = $reportType[0];
			$report_data['report_type_stored_data'] = $reportType[1];

			$isStoredReport = ($report_data['report_type'] == 'stored') ? true : false;
				
			$report_data['email_list'] = $focus->email_list;
				
			$report_name = $report_data['report_name'];
			$report_charts_engine = $report_data['report_charts_engine'];
				
			
			
			//********************************************//
			//*****Resultation Arrays Initialization******//
			//********************************************//
			$rs = array();
			$rsTotals = array();
			
			$subGroups = array();
			$subTotals = array();
			$subTotalsC = array();

			
			foreach ($reportUsedModules as $moduleIteration=>$currentUsedModule) {
			
				$lastModuleIteration = ($moduleIteration === (count($reportUsedModules) - 1));
				
				//******************************//
				//***Get Back Report Elements***//
				//******************************//
				$selectedFields = $storedSelectedFields;
				$selectedFilters = $storedSelectedFilters;
				$selectedCharts = $storedSelectedCharts;
				$selectedDescription = $storedSelectedDescription;

				
				//*****************************//
				//*****Variable Definition*****//
				//*****************************//
				$publicDescription = $selectedDescription['public'];
				$report_module = $report_data['report_module'] = $focus->report_module = $currentUsedModule;
				
				
				//********************************************//
				//*****Managing External Database Queries*****//
				//********************************************//
				$alternativeDb = ($focus->alternative_database >= 0 ? $focus->alternative_database : false);
				$externalDataBaseQueryParams = asol_ReportsGenerationFunctions::manageExternalDatabaseQueries($alternativeDb, $report_module, $externalDbSimpleName);
					
				$useExternalDbConnection = true;
					
				$useAlternativeDbConnection = $externalDataBaseQueryParams["useAlternativeDbConnection"];
				$domainField = $externalDataBaseQueryParams["domainField"];
				$gmtDates = $externalDataBaseQueryParams["gmtDates"];
				$report_module = $externalDataBaseQueryParams["report_module"];
				$report_table = $externalDataBaseQueryParams["report_table"];
					
				$report_table_primary_key = $externalDataBaseQueryParams["report_table_primary_key"];
					
	
				
				//*****************************//
				//*******Temporal Fixes********//
				//*****************************//
				asol_ReportsGenerationFunctions::doTemporalFixes($report_table, $selectedFields, $selectedFilters);
		
					
				//*************************************//
				//******Generate Chart Info Array******//
				//*************************************//
				$urlChart = array();
				$chartSubGroupsValues = array();
					
				$chartInfoParams = asol_ReportsGenerationFunctions::getChartInfoParams($selectedCharts, $audited_report, $report_table);
	
				$hasStackChart = $chartInfoParams["hasStackChart"];
				$chartInfo = $chartInfoParams["chartInfo"];
				$chartConfig = $chartInfoParams["chartConfig"];
				
	
				//***********************************************//
				//*******Manage Filters & External Filters*******//
				//***********************************************//
				$extFilters = asol_ReportsGenerationFunctions::buildExternalFilters($_REQUEST["external_filters"], $vardefFilters, $userDateFormat);
				
				$filteringParams = asol_ReportsGenerationFunctions::getFilteringParams($selectedFilters, $extFilters, $report_module, $predefinedTemplates, $dashletId, $userDateFormat, $audited_report);
	
				$filterValuesData = $filteringParams["filterValues"]["data"];
				$filtersPanel = $filteringParams["filtersPanel"];
				$filtersHiddenInputs = $filteringParams["filtersHiddenInputs"];
	
	
				if (($filtersHiddenInputs == false) || ($searchCriteria == true)) {

					//************************************//
					//*******Prepare SQL SubClauses*******//
					//************************************//
					foreach ($selectedFields['tables'][0]['data'] as $index => & $currentValues) {
			
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$currentSql = asol_ReportsUtils::managePremiumFeature("predefinedTemplates", "reportFunctions.php", "getSqlTemplateValue", array('currentSQL' => $currentValues['sql'], 'template' => $currentValues['templates']['sql'], 'sqlTemplates' => $predefinedTemplates['sql']));
						$currentValues['sql'] = ($currentSql !== false) ? $currentSql : $currentValues['sql'];
						asol_ReportsGenerateQuery::validateSqlRemovedFields($currentValues['sql'], $alternativeDb, $report_table, $hasDeletedUsage);
						
						if (empty($currentValues['sql']) && !empty($currentValues["subQuery"]["module"])) {
							$externalDataBaseQueryParams = asol_ReportsGenerationFunctions::manageExternalDatabaseQueries($alternativeDb, $currentValues["subQuery"]['module'], true);
							$domainSubField = $externalDataBaseQueryParams["domainField"];
				
							$currentSql = asol_ReportsUtils::managePremiumFeature("subReports", "reportFunctions.php", "getSqlFromReport", array('isSubQuery' => true, 'alternativeDb' => $alternativeDb, 'hasDeletedUsage' => $hasDeletedUsage, 'currentQuery' => $currentValues["subQuery"], 'index' => $index, 'hourOffset' => $hourOffset, 'quarterMonth' => $quarter_month, 'weekStart' => $week_start, 'currentUser' => $current_user, 'schedulerCall' => $schedulerCall, 'reportDomain' => $reportDomain, 'domainField' => $domainSubField, 'sqlTemplates' => $predefinedTemplates['sql']));
							$currentValues['sql'] = ($currentSql !== false) ? $currentSql : $currentValues['sql'];
						}
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						
					}
					
					
					//*********************************//
					//*******Get Queries [Joins]*******//
					//*********************************//
					$fieldsByRef = array();
					$joinQueryArray = asol_ReportsGenerateQuery::getSqlJoinQuery($selectedFields, $filterValuesData, $hasDeletedUsage, $report_data['results_limit'], $report_module, $report_table, $audited_report, $alternativeDb, $fieldsByRef, '', $domainField);
	
					$moduleCustomJoined = $joinQueryArray["moduleCustomJoined"];
					$moduleCountCustomJoined = $joinQueryArray["moduleCountCustomJoined"];
					$aliasIndexTable = $joinQueryArray["aliasIndexTable"];
					$sqlJoin = $joinQueryArray["querys"]["Join"];
					$sqlCountJoin = $joinQueryArray["querys"]["CountJoin"];
	
					
					
					foreach ($selectedFields['tables'][0]['data'] as $index => & $currentValues) {
						
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array('currentSql' => $currentValues['sql'], 'fieldsByRef' => $fieldsByRef, 'suppressChars' => true);
						$currentSql = asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "replaceSqlReferenceByValue", $extraParams);
						$currentValues['sql'] = ($currentSql !== false) ? $currentSql : $currentValues['sql'];
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						
					}
					
	
					//**********************************//
					//*******Get Queries [Select]*******//
					//**********************************//
					$filtersByRef = array();
					asol_ReportsGenerateQuery::generateSqlWhere($selectedFields, $filterValuesData, $report_table, $hourOffset, $quarter_month, $week_start, $fieldsByRef, $filtersByRef);
					$selectQueryArray = asol_ReportsGenerateQuery::getSqlSelectQuery($selectedFields, $chartInfo, $predefinedTemplates, $alternativeDb, $report_table, $hourOffset, $quarter_month, $week_start, $audited_report, $displayTotals, $displaySubtotals, $fieldsByRef, $filtersByRef, $aliasIndexTable, '');

					$referenceAlias =  $selectQueryArray["referenceAlias"];
					$columns = $selectQueryArray["columns"];
					$types = $selectQueryArray["types"];
					$columnsU = $selectQueryArray["columnsU"]; //Untranslated Alias
					$columnsO = $selectQueryArray["columnsO"]; //Original Field with Join Alias
					$columnsN = $selectQueryArray["columnsN"]; //Not Modified Field
					$columnsI = $selectQueryArray["columnsI"]; //Field Index
					$columnsR = $selectQueryArray["columnsR"]; //Field Reference
	
					$isGroupedReport = $selectQueryArray["hasGrouped"];
					$hasGroupedFunctionWithSQL = ($isGroupedReport && $selectQueryArray["hasFunctionWithSQL"]);
	
					$groupSubTotalField = $selectQueryArray["groupSubTotalField"];
					$groupSubTotalFieldAscSort = $selectQueryArray["groupSubTotalFieldAscSort"];
	
					$totals = $selectQueryArray["totals"];
					$resulset_fields = $selectQueryArray["resultsetFields"];
	
					$sqlTotalsC = $selectQueryArray["querys"]["Charts"];
					//***AlineaSol Premium***//
					$fieldSqlFilterReference  = asol_ReportsUtils::managePremiumFeature("sqlFilterReference", "reportFunctions.php", "replaceReportsFilterVars", array('filtersByRef' => $filtersByRef, 'currentField' => null, 'sqlContent' => $sqlTotalsC));
					if ($fieldSqlFilterReference !== false) {
						$sqlTotalsC = (isset($fieldSqlFilterReference['sql']) ? $fieldSqlFilterReference['sql'] : $sqlTotalsC);
					}
					//***AlineaSol Premium***//
					
					$sqlSelect = $selectQueryArray["querys"]["Select"];
					//***AlineaSol Premium***//
					$fieldSqlFilterReference  = asol_ReportsUtils::managePremiumFeature("sqlFilterReference", "reportFunctions.php", "replaceReportsFilterVars", array('filtersByRef' => $filtersByRef, 'currentField' => null, 'sqlContent' => $sqlSelect));
					if ($fieldSqlFilterReference !== false) {
						$sqlSelect = (isset($fieldSqlFilterReference['sql']) ? $fieldSqlFilterReference['sql'] : $sqlSelect);
					}
					//***AlineaSol Premium***//
			
					$sqlTotals = $selectQueryArray["querys"]["Totals"];
					//***AlineaSol Premium***//
					$fieldSqlFilterReference  = asol_ReportsUtils::managePremiumFeature("sqlFilterReference", "reportFunctions.php", "replaceReportsFilterVars", array('filtersByRef' => $filtersByRef, 'currentField' => null, 'sqlContent' => $sqlTotals));
					if ($fieldSqlFilterReference !== false) {
						$sqlTotals = (isset($fieldSqlFilterReference['sql']) ? $fieldSqlFilterReference['sql'] : $sqlTotals);
					}
					//***AlineaSol Premium***//
					
	
					//********************************//
					//*******Get Queries [From]*******//
					//********************************//
					$sqlFrom = asol_ReportsGenerateQuery::getSqlFromQuery($report_table, $audited_report, '');
	
	
					//*********************************//
					//*******Get Queries [Where]*******//
					//*********************************//
					asol_ReportsGenerateQuery::replaceFiltersWithNamedFieldAlias($selectedFields, $filtersByRef, $isGroupedReport);
					$filteringQueryArray = asol_ReportsGenerateQuery::getSqlFilteringQuery($filtersByRef, $hasDeletedUsage, $report_table, $useAlternativeDbConnection, '');
					$hasGroupedFunctionWithHaving = ($isGroupedReport && $filteringQueryArray["hasHavingFilters"]);
					$sqlWhere = $filteringQueryArray["querys"]['Where'];
					$sqlHaving = $filteringQueryArray["querys"]['Having'];
	
					//***AlineaSol Premium***//
					$extraParams = array('currentSql' => $sqlWhere, 'fieldsByRef' => $fieldsByRef, 'suppressChars' => true);
					$currentSql = asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "replaceSqlReferenceByValue", $extraParams);
					$sqlWhere = ($currentSql !== false) ? $currentSql : $sqlWhere;
					
					$extraParams = array('currentSql' => $sqlHaving, 'fieldsByRef' => $fieldsByRef, 'suppressChars' => true);
					$currentHaving = asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "replaceSqlReferenceByValue", $extraParams);
					$sqlHaving = ($currentHaving !== false) ? $currentHaving : $sqlHaving;
					//***AlineaSol Premium***//
					
					if (asol_ReportsUtils::isDomainsInstalled()) {
						asol_ReportsGenerateQuery::modifySqlWhereForAsolDomainsQuery($sqlWhere, $report_table, $current_user, $schedulerCall, $reportDomain, $domainField, '');
					}
	
					if (asol_ReportsUtils::isSecurityGroupsInstalled() && !$hasSecurityGroupsDisabled && $alternativeDb === false) {
						asol_ReportsGenerateQuery::modifySqlWhereForSecurityGroups($sqlWhere, $report_module, $report_table, $current_user);
					}
					
					//***********************//
					//****Get Email Alert****//
					//***********************//
					$sendEmailquestion = asol_ReportsGenerationFunctions::getSendEmailAlert($focus->email_list, $reportDomain);
	
	
					//***********************************//
					//*******Get Queries [GroupBy]*******//
					//***********************************//
					$groupQueryArray = asol_ReportsGenerateQuery::getSqlGroupByQuery($selectedFields, $report_table, $filtersByRef);
	
					$sqlGroup = $groupQueryArray["querys"]["Group"];
					$sqlChartGroup = $groupQueryArray["querys"]["ChartGroup"];
					$details = $groupQueryArray["details"];
					$groups = $groupQueryArray["groups"];
	
					$isDetailedReport = $groupQueryArray["hasDetail"];
					$isGroupedReport = $groupQueryArray["hasGrouped"];
					$hasFunctionField = $groupQueryArray["hasFunctionField"];
					$massiveData = $groupQueryArray["massiveData"];
	
	
					//***********************************//
					//****Manage Query Autoprotection****//
					//***********************************//
					if (!$grossExecution) {
						$totalEntriesArray = asol_ReportsGenerationFunctions::getReportTotalEntries($sqlFrom, $sqlCountJoin, $sqlWhere, $sqlGroup, $sqlHaving, $details, $groups, $useExternalDbConnection, $alternativeDb, $report_table);
						$totalEntries = $totalEntriesArray['totalEntries'];
						$totalUngroupedEntries = $totalEntriesArray['totalUngroupedEntries'];
					}
						
					$checkMaxAllowedResults = (isset($sugar_config['asolReportsMaxAllowedResults']) ? true : false);
					$checkMaxAllowedNotIndexedOrderBy = (isset($sugar_config['asolReportsMaxAllowedNotIndexedOrderBy']) ? true : false);
					$checkMaxAllowedGroupByEntries = (isset($sugar_config['asolReportsMaxAllowedGroupByEntries']) ? true : false);
					$checkMaxAllowedDisplayed = (!$grossExecution) && (isset($sugar_config['asolReportsMaxAllowedDisplayed']) ? true : false);
					$checkMaxAllowedParseMultiTable = (!$grossExecution) && (isset($sugar_config['asolReportsMaxAllowedParseMultiTable']) ? true : false);

					$maxAllowedResults = false;
					$maxAllowedNotIndexedOrderBy = false;
	
					if ($checkMaxAllowedResults || $checkMaxAllowedNotIndexedOrderBy || $checkMaxAllowedDisplayed || $checkMaxAllowedGroupByEntries || $checkMaxAllowedParseMultiTable) {
	
						$maxAllowedResultsQuery = "EXPLAIN ".$sqlSelect.$sqlFrom.$sqlJoin.$sqlWhere.$sqlGroup.$sqlHaving.$sqlLimit;
						$maxAllowedResultsRow = asol_Report::getSelectionResults($maxAllowedResultsQuery, null, $useExternalDbConnection, $alternativeDb, null, null, null, true);
	
						$productResults = 1;
	
						foreach ($maxAllowedResultsRow as $maxAllowedResult) {
							if ($maxAllowedResult['select_type'] == 'PRIMARY') {
								$productResults *= $maxAllowedResult['rows'];
							}
						}
							
							
						$maxAllowedResults = ($checkMaxAllowedResults && ($sugar_config['asolReportsMaxAllowedResults'] < $productResults));
						$maxAllowedNotIndexedOrderBy = ($checkMaxAllowedNotIndexedOrderBy && ($sugar_config['asolReportsMaxAllowedNotIndexedOrderBy'] < $totalEntries));
							
						$entriesPhpProcessed = (($hasNoPagination || $allowExportGeneratedFile) ? $totalEntries : $entriesPerPage);
						$maxAllowedGroupByEntries = ($checkMaxAllowedGroupByEntries && $isGroupedReport && ($sugar_config['asolReportsMaxAllowedGroupByEntries'] < $totalUngroupedEntries));
						$maxAllowedDisplayed = ($checkMaxAllowedDisplayed && ($sugar_config['asolReportsMaxAllowedDisplayed'] < $entriesPhpProcessed));
						$maxAllowedParseMultiTable = ($checkMaxAllowedParseMultiTable && $multiModuleReport && ($sugar_config['asolReportsMaxAllowedParseMultiTable'] < $entriesPhpProcessed));
						
						if ($maxAllowedResults) {
							asol_Report::manageMaxAllowedResultsReached($schedulerCall, $productResults, $sqlSelect.$sqlFrom.$sqlJoin.$sqlWhere.$sqlGroup.$sqlHaving.$sqlLimit);
						}
							
						if ($maxAllowedDisplayed || $maxAllowedGroupByEntries || $maxAllowedParseMultiTable) {
							$oversizedReport = true;
						}
							
					}
	
	
					if (!$oversizedReport) {
	
						//***********************************//
						//*******Get Queries [OrderBy]*******//
						//***********************************//
						$initialSortDirection = $sort_direction;
						$orderQueryArray = asol_ReportsGenerateQuery::getSqlOrderByQuery($selectedFields, $report_table, $alternativeDb, $isGroupedReport, ($grossExecution ? true : $maxAllowedNotIndexedOrderBy), $sort_field, $sort_direction, $sort_index);
	
						$hasDeletedNotIndexedOrderBy = $orderQueryArray['hasDeletedNotIndexedOrderBy'];
						$sqlOrder = $orderQueryArray["query"];
						$sort_direction = $orderQueryArray["sortDirection"];
						$sort_type = $orderQueryArray["sortType"];
						
							
						//***********************************//
						//*******Pagination Management*******//
						//***********************************//
						if ($hasNoPagination) {
	
							$sqlLimit = "";
							$sqlLimitExport = "";
							$total_entries_basic = $totalEntries;
								
						} else {
	
							//*********************************//
							//*******Get Queries [Limit]*******//
							//*********************************//
							$orderQueryArray = asol_ReportsGenerateQuery::getSqlLimitQuery($report_data['results_limit'], $entriesPerPage, $page_number, $totalEntries, $externalCall);
	
							$sqlLimit = $orderQueryArray["querys"]["Limit"];
							$sqlLimitExport = $orderQueryArray["querys"]["LimitExport"];
							$total_entries_basic = $orderQueryArray["totalEntriesBasic"];
	
						}
							
							
						//******************************************//
						//*****Correct Fields for Empty Reports*****//
						//******************************************//
						$correctedEmptyReport = asol_ReportsGenerationFunctions::correctEmptyReport($sqlSelect, $sqlTotals, $alternativeDb, $report_table, $groups);

						if ($displayHeaders) {
							$columns[0] = ($correctedEmptyReport["select"] !== null) ? $correctedEmptyReport["select"] : $columns[0];
						}
						$sqlSelect .= ($correctedEmptyReport["select"] !== null) ? $correctedEmptyReport["select"] : "";
						$sqlOrder .= ($correctedEmptyReport["select"] !== null) ? $correctedEmptyReport["select"] : "";
							
						$sqlTotals .= ($correctedEmptyReport["totals"]["sql"] !== null) ? $correctedEmptyReport["totals"]["sql"] : "";
						$totals[0]['alias'] = ($correctedEmptyReport["totals"]["column"] !== null) ? $correctedEmptyReport["totals"]["column"] : $totals[0]['alias'];
							
							
						//*******************************************************//
						//*****Get Extended Where Clause for Limited Reports*****//
						//*******************************************************//
						$sqlLimitSubSet = asol_ReportsGenerateQuery::getSqlSubSetLimitQuery($focus->alternative_database, $report_data['results_limit'], $totalEntries, $entriesPerPage, $page_number, $report_table, $report_table_primary_key, $sqlFrom, $sqlJoin, $sqlWhere, $sqlGroup, $sqlHaving);
							
							
						if ($audited_report) {
								
							//************************************//
							//********Manage Audited Field********//
							//************************************//
							$auditedFieldTypeArray = asol_Report::getFieldInfoFromVardefs($report_module, $filterValuesData[0]['parameters']['first'][0]);
							$auditedFieldType = $auditedFieldTypeArray["values"];
								
							$auditedAppliedFields = array($report_table."_audit.before_value_string", $report_table."_audit.after_value_string", $report_table."_audit.before_value_text", $report_table."_audit.after_value_text");
								
						}
	
							
						//************************************************************//
						//********Override Chart Names If Http Request Enabled********//
						//************************************************************//
						$chartsHttpQueryUrls = (!isset($_REQUEST['chartsHttpQueryUrls'])) ? array() : explode('${pipe}', $_REQUEST['chartsHttpQueryUrls']);
							
	
						//*************************//
						//******DETAIL REPORT******//
						//*************************//
						if ($isDetailedReport) {
								
							asol_ReportsUtils::reports_log('debug', 'Detailed Report', __FILE__, __METHOD__, __LINE__);
	
							//***************************************//
							//******Initialize Detail Variables******//
							//***************************************//
							$currentSubGroups = array();
							$currentSubTotals = array();
							$currentSubTotalsC = array();
	
							$i=0;
							$detailFieldInfo = $details[$i];
	
							switch ($detailFieldInfo['grouping']) {
									
								case "Detail":
	
									//***********************************************//
									//*****Calculate Detail Pagination Variables*****//
									//***********************************************//
									$orderPaginationDetailVars = asol_ReportsGenerationFunctions::getOrderPaginationSingleDetailVars($detailFieldInfo, $detailMultiQuery, $report_data['results_limit'], $sqlFrom, $sqlJoin, $sqlWhere, $sqlGroup, $sqlHaving, $useExternalDbConnection, $alternativeDb, $report_table, $groups);
	
									$rsGroups = $orderPaginationDetailVars["rsGroups"];
									$sizes = $orderPaginationDetailVars["sizes"];
									$fullSizes = $orderPaginationDetailVars["fullSizes"];
	
									break;
	
								case "Minute Detail":
								case "Quarter Hour Detail":
								case "Hour Detail":
								case "Day Detail":
								case "DoW Detail":
								case "WoY Detail":
								case "Month Detail":
								case "Natural Quarter Detail":
								case "Fiscal Quarter Detail":
								case "Natural Year Detail":
								case "Fiscal Year Detail":
	
									//*************************************************************//
									//*****Calculate Day/DoW/Month Detail Pagination Variables*****//
									//*************************************************************//
									$orderPaginationMonthDayDetailVars = asol_ReportsGenerationFunctions::getOrderPaginationDateDetailVars($detailFieldInfo, $detailMultiQuery, $report_data['results_limit'], $sqlFrom, $sqlJoin, $sqlWhere, $useExternalDbConnection, $alternativeDb, $report_table, $groups, $week_start);
	
									$rsGroups = $orderPaginationMonthDayDetailVars["rsGroups"];
									$sizes = $orderPaginationMonthDayDetailVars["sizes"];
									$fullSizes = $orderPaginationMonthDayDetailVars["fullSizes"];
									$reorderDetailGroups = false;
	
									break;
	
							}
	
	
							//*************************************//
							//*****Manage Pagination Variables*****//
							//*************************************//
							$paginationMainVariables = asol_ReportsGenerationFunctions::getPaginationMainVariables($page_number, $entriesPerPage, $sizes);
	
							$init_group = $paginationMainVariables["init_group"];
							$end_group = $paginationMainVariables["end_group"];
							$current_entries = $paginationMainVariables["current_entries"];
							$first_entry = $paginationMainVariables["first_entry"];
	
	
							$groupField = array();
							$subGroup = array();
							
							if ($dataVisibility['field'] || (($hasStackChart) && ((count($groups) != 0) && (strtolower($groups[0]['display']) == 'yes'))) || ($report_data['results_limit'] != 'all')) {
	
								$subGroupsExport = Array();
								$subTotalsExport = Array();
								$subTotalsExportNoFormat = Array();
	
								$groupField = array();
								$subGroup = array();
									
								if ($detailMultiQuery) {
										
									foreach ($rsGroups as $index=>$currentGroup) {
											
										if (($report_data['results_limit'] == "all") && (!$allowExportGeneratedFile) && (($index < $init_group) || ($index > $end_group)))
											continue;
											
										//********************************************//
										//******Limit Clause For Detail Grouping******//
										//********************************************//
										$detailWhereGrouping = asol_ReportsGenerateQuery::getDetailWhereGrouping($sqlWhere, $currentGroup['group'], $detailFieldInfo);
	
										$subGroup = $detailWhereGrouping["subGroup"];
										$sqlDetailWhere = $detailWhereGrouping["sqlDetailWhere"];
											
										$sqlLimit = asol_ReportsGenerateQuery::getSqlDetailLimitQuery($report_data['results_limit'], $fullSizes[$index]);
	
										$sqlDetailQuery = $sqlSelect.$sqlFrom.$sqlJoin.$sqlDetailWhere.$sqlGroup.$sqlHaving.$sqlOrder.$sqlLimit;
										$rsDetail = asol_Report::getSelectionResults($sqlDetailQuery, null, $useExternalDbConnection, $alternativeDb);
	
	
										//***************************//
										//******Format SubGroup******//
										//***************************//
										if ((!$grossExecution) && ($detailFieldInfo['function'] == '0')) {
											$subGroup = asol_ReportsGenerateQuery::formatDateSpecialsGroup($reportId, $dashletId, $subGroup, $detailFieldInfo, $userDateFormat, $userTZ, $focus->currency_id, $gmtDates);
										}
	
	
										if ((empty($subGroup)) && ($subGroup !== "0"))
											continue;
	
	
										foreach($rsDetail as $currentDetail) {
											if (($index >= $init_group) && ($index <= $end_group)) {
												$currentSubGroups[$subGroup][] = $currentDetail;
											}
											$subGroupsExport[$subGroup][] = $currentDetail;
										}
											
										//***********************************************//
										//*******Subtotals Query for Current Group*******//
										//***********************************************//
										if ($displaySubtotals) {
	
											$limitedGroupTotals = array();
	
											if (($report_data['results_limit'] == "all") && (!$hasGroupedFunctionWithSQL) && (!$hasGroupedFunctionWithHaving)) {
	
												$sqlSubQueryTotals = $sqlTotals.$sqlFrom.$sqlCountJoin.$sqlDetailWhere;
												$rsSubTotals = asol_Report::getSelectionResults($sqlSubQueryTotals, null, $useExternalDbConnection, $alternativeDb);
													
											} else if (!$isGroupedReport) {
	
												$limitedIds = array();
												$limitIds = asol_Report::getSelectionResults("SELECT ".$report_table.".".$report_table_primary_key." ".$sqlFrom.$sqlCountJoin.$sqlDetailWhere.$sqlOrder.$sqlLimit, null, $useExternalDbConnection, $alternativeDb);
												foreach ($limitIds as $limitId)
												$limitedIds[] = $limitId[$report_table_primary_key];
													
												$sqlLimitWhere = " AND ".$report_table.".".$report_table_primary_key." IN ('".implode("','", $limitedIds)."')";
													
												$sqlSubQueryTotals = $sqlTotals.$sqlFrom.$sqlCountJoin.$sqlDetailWhere.$sqlLimitWhere;
												$rsSubTotals = asol_Report::getSelectionResults($sqlSubQueryTotals, null, $useExternalDbConnection, $alternativeDb);
	
											} else {
	
												//**************************************//
												//******Generate SubTotals Manually*****//
												//**************************************//
												$limitedGroupTotals = $limitedGroupTotalsExport = asol_ReportsGenerateQuery::generateManuallySubTotals($rsDetail, $totals, $report_data['results_limit']);
	
											}
											
											$rsSubTotalsExport = $rsSubTotals;
												
											if (!empty($limitedGroupTotalsExport[0])) {
												if (($index >= $init_group) && ($index <= $end_group)) {
													$rsSubTotals[0] = $limitedGroupTotals[0];
												}
												$rsSubTotalsExport[0] = $limitedGroupTotalsExport[0];
											}
												
												
											//Obtenemos el resultado de la query de los SubTotales para el subgrupo actual
											$subTotalsLimit[] = $rsSubTotalsExport[0];
	
											$subTotalsExportNoFormat[$subGroup] = $rsSubTotalsExport[0];
	
											//**********************************//
											//******Apply Displaying Format*****//
											//**********************************//
											if (!$grossExecution) {
												$rsSubTotals = asol_ReportsGenerateQuery::formatGroupTotals($reportId, $dashletId, $rsSubTotals, $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $focus->currency_id, $gmtDates, $audited_report, $auditedAppliedFields, $auditedFieldType);
												$rsSubTotalsExport = asol_ReportsGenerateQuery::formatGroupTotals($reportId, $dashletId, $rsSubTotalsExport, $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $focus->currency_id, $gmtDates, $audited_report, $auditedAppliedFields, $auditedFieldType);
											}	
											
											$currentSubTotals[$subGroup] = $rsSubTotals[0];
											$subTotalsExport[$subGroup] = $rsSubTotalsExport[0];
	
										}
	
									}
									
									
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									$extraParams = array(
										'isGroupedReport' => $isGroupedReport,
										'groups' => $groups,
										'currentSubGroups' => $currentSubGroups,
										'subGroups' => $subGroups,
										'resulsetTotals' => $totals,
										'moduleIteration' => $moduleIteration
									);
									$returnedSubGroups = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeDetailResultsets", $extraParams);
									$subGroups = $subGroupsExport = ($returnedSubGroups !== false ? $returnedSubGroups : $currentSubGroups);
									//***********************//
									//***AlineaSol Premium***//
									//***********************//

									
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									$extraParams = array(
										'currentSubTotals' => $currentSubTotals,
										'subTotals' => $subTotals,
										'resulsetTotals' => $totals,
										'moduleIteration' => $moduleIteration,
										'isChartsTotals' => false,
									);
									$returnedSubTotals = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeDetailTotalsResultsets", $extraParams);
									$subTotals = ($returnedSubTotals !== false ? $returnedSubTotals : $currentSubTotals);
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									
									if ($hasNoPagination) {
										$subTotalsExport = $subTotals;
									}
									
								} else {
	
									$formatInfo = array(
										'reportId' => $reportId, 
										'dashletId' => $dashletId, 
										'userDateFormat' => $userDateFormat, 
										'userTZ' => $userTZ, 
										'currencyId' => $focus->currency_id,
										'gmtDates' => $gmtDates
									);
	
									$sqlDetailGroupBy = (!empty($sqlGroup) ? $sqlGroup.', '.$detailFieldInfo['field'] : '');
									$sqlDetailQuery = $sqlSelect.",".$detailFieldInfo['field']." AS 'asol_grouping_field' ".$sqlFrom.$sqlJoin.$sqlWhere.$sqlDetailGroupBy.$sqlHaving.$sqlOrder;
									$rsDetail = asol_Report::getSelectionResults($sqlDetailQuery, null, $useExternalDbConnection, $alternativeDb, null, $detailFieldInfo, $formatInfo, false);
	
	
									if ($hasNoPagination) {
	
										if ($report_data['results_limit'] !== "all") {
	
											foreach($rsDetail as $subGroup=>$currentDetail) {
												$res_limit = explode('${dp}', $report_data['results_limit']);
												if ($res_limit[1] == 'first') {
													$currentDetail = array_slice($currentDetail, 0, $res_limit[2]);
												} else if ($res_limit[1] == 'last') {
													$currentDetail = array_slice($currentDetail, -$res_limit[2]);
												}
												$currentSubGroups[$subGroup] = $currentDetail;
											}
	
										} else {
	
											$currentSubGroups = $rsDetail;
												
										}
										
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										$extraParams = array(
											'isGroupedReport' => $isGroupedReport,
											'groups' => $groups,
											'currentSubGroups' => $currentSubGroups,
											'subGroups' => $subGroups,
											'resulsetTotals' => $totals,
											'moduleIteration' => $moduleIteration
										);
										$returnedSubGroups = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeDetailResultsets", $extraParams);
										$subGroups = $subGroupsExport = ($returnedSubGroups !== false ? $returnedSubGroups : $currentSubGroups);
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										
									} else {
	
										$index = 0;
										foreach($rsDetail as $subGroup=>$currentDetail) {
	
											if ($report_data['results_limit'] !== "all") {
												$res_limit = explode('${dp}', $report_data['results_limit']);
												if ($res_limit[1] == 'first') {
													$currentDetail = array_slice($currentDetail, 0, $res_limit[2]);
												} else if ($res_limit[1] == 'last') {
													$currentDetail = array_slice($currentDetail, -$res_limit[2]);
												}
											}
	
											if (($index >= $init_group) && ($index <= $end_group)) {
												$currentSubGroups[$subGroup] = $currentDetail;
											}
	
											if ($allowExportGeneratedFile || $report_data['report_charts'] != 'Tabl') {
												$subGroupsExport[$subGroup] = $currentDetail;
											}
	
											$index++;
	
										}
										
										$subGroups = $currentSubGroups;
											
									}
	
	
									if ($displaySubtotals) {
											
										$limitedGroupTotals = array();
											
										if (($report_data['results_limit'] == "all") && (!$hasGroupedFunctionWithSQL) && (!$hasGroupedFunctionWithHaving)) {
	
											$sqlDetailGroupBy = ' GROUP BY '.$detailFieldInfo['field'];
											$sqlSubQueryTotals = $sqlTotals.",".$detailFieldInfo['field']." AS 'asol_grouping_field' ".$sqlFrom.$sqlCountJoin.$sqlWhere.$sqlDetailGroupBy.$sqlHaving;
											$rsSubTotals  = asol_Report::getSelectionResults($sqlSubQueryTotals, null, $useExternalDbConnection, $alternativeDb, null, null, null, false);
	
										} else if (!$isGroupedReport) {
	
											$sqlDetailGroupBy = ' GROUP BY '.$report_table.".".$report_table_primary_key;
											$sqlSubQueryTotals = $sqlTotals.",".$detailFieldInfo['field']." AS 'asol_grouping_field' ".$sqlFrom.$sqlCountJoin.$sqlWhere.$sqlDetailGroupBy.$sqlHaving;
											$sqlSubQueryTotals .= ($report_data['results_limit'] == "all" ? '' : $sqlOrder);
											$rsSubTotals = asol_Report::getSelectionResults($sqlSubQueryTotals, null, $useExternalDbConnection, $alternativeDb, null, null, null, false);
	
											//**************************************//
											//******Generate SubTotals Manually*****//
											//**************************************//
											$rsSubTotals = asol_ReportsGenerateQuery::generateManuallySubTotals($rsSubTotals, $totals, $report_data['results_limit'], true);
	
										} else {
	
											$sqlDetailGroupBy = (!empty($sqlGroup) ? $sqlGroup.', '.$detailFieldInfo['field'] : '');
											$sqlSubQueryTotals = $sqlTotals.",".$detailFieldInfo['field']." AS 'asol_grouping_field' ".$sqlFrom.$sqlCountJoin.$sqlWhere.$sqlDetailGroupBy.$sqlHaving;
											$sqlSubQueryTotals .= ($report_data['results_limit'] == "all" ? '' : $sqlOrder);
											$rsSubTotals  = asol_Report::getSelectionResults($sqlSubQueryTotals, null, $useExternalDbConnection, $alternativeDb, null, null, null, false);
	
											//**************************************//
											//******Generate SubTotals Manually*****//
											//**************************************//
											$rsSubTotals = asol_ReportsGenerateQuery::generateManuallySubTotals($rsSubTotals, $totals, $report_data['results_limit'], true);
	
										}
	
										foreach ($rsSubTotals as $rsSubTotal) {
	
											//**********************************//
											//******Apply Displaying Format*****//
											//**********************************//
											$theGroup = $rsSubTotal['asol_grouping_field'];
											
											if (!$grossExecution) {
												$theGroup = asol_ReportsGenerateQuery::formatDateSpecialsGroup($reportId, $dashletId, $theGroup, $detailFieldInfo, $userDateFormat, $userTZ, $focus->currency_id, $gmtDates);
												$theGroup = (($theGroup === '') ? $mod_strings['LBL_REPORT_NAMELESS'] : $theGroup);
											}
											
											$currentSubTotals[$theGroup] = $rsSubTotal;

										}
										
										
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										$extraParams = array(
											'currentSubTotals' => $currentSubTotals,
											'subTotals' => $subTotals,
											'resulsetTotals' => $totals,
											'moduleIteration' => $moduleIteration,
											'isChartsTotals' => false,
										);
										$returnedSubTotals = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeDetailTotalsResultsets", $extraParams);
										$subTotals = ($returnedSubTotals !== false ? $returnedSubTotals : $currentSubTotals);
										//***********************//
										//***AlineaSol Premium***//
										//***********************//

										if ($lastModuleIteration) {

											foreach ($subTotals as & $subTotal) {
										
												//**********************************//
												//******Apply Displaying Format*****//
												//**********************************//
												unset($subTotal['asol_grouping_field']);
												if (!$grossExecution) {
													$subTotal = asol_ReportsGenerateQuery::formatGroupTotals($reportId, $dashletId, array($subTotal), $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $focus->currency_id, $gmtDates, $audited_report, $auditedAppliedFields, $auditedFieldType);
													$subTotal = $subTotal[0];
												}
												
											}
										
										}
										
										$subTotalsExport = $subTotals;
										
									}
	
								}
	
								//Order resultset for grouped totals
								if ($reorderDetailGroups) {
	
									if ($details[0]['order'] == 'DESC') {
										krsort($subGroups);
										krsort($subGroupsExport);
									} else if ($details[0]['order'] == 'ASC') {
										ksort($subGroups);
										ksort($subGroupsExport);
									}
	
								}
									
							}
							
							
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							$extraParams = array(
								'subGroups' => $subGroups,
								'resulsetFields' => $resulset_fields,
								'referenceAlias' => $referenceAlias
							);
							$returnedPhpSubGroups = asol_ReportsUtils::managePremiumFeature("reportPhpFunctions", "reportFunctions.php", "formatPhpDetailResultSet", $extraParams);
							$subGroups = ($returnedPhpSubGroups !== false) ? $returnedPhpSubGroups : $subGroups;
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							
							
							if (($report_data['results_limit'] != "all") || ($allowExportGeneratedFile)) {
								
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$extraParams = array(
									'subGroups' => $subGroupsExport,
									'resulsetFields' => $resulset_fields,
									'referenceAlias' => $referenceAlias
								);
								$returnedPhpSubGroups = asol_ReportsUtils::managePremiumFeature("reportPhpFunctions", "reportFunctions.php", "formatPhpDetailResultSet", $extraParams);
								$subGroupsExport = ($returnedPhpSubGroups !== false) ? $returnedPhpSubGroups : $subGroupsExport;
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								
							}
							
	
							//**********************************************//
							//******Generate Values for Chart Totals********//
							//**********************************************//
						
							if ($dataVisibility['chart'] && (count($chartInfo) > 0) && (strlen($sqlTotalsC) > 7)) {
								if ($report_data['results_limit'] != 'all') {
	
									$currentSubTotalsC = $subTotalsExportNoFormat;
										
								} else {
									switch ($detailFieldInfo['grouping']) {
	
										case "Detail":
											$rsSubTotalsC = asol_Report::getSelectionResults($sqlTotalsC.",".$detailFieldInfo['field']." AS 'asol_grouping_field' ".$sqlFrom.$sqlCountJoin.$sqlWhere.$sqlChartGroup.$sqlHaving, null, $useExternalDbConnection, $alternativeDb);
											
											foreach ($rsSubTotalsC as $rsSubTotalC) {
													
												$theGroup = $rsSubTotalC['asol_grouping_field'];
												unset($rsSubTotalC['asol_grouping_field']);
												$theGroup = (($theGroup === '') ? $mod_strings['LBL_REPORT_NAMELESS'] : $theGroup);
													
												if (!$grossExecution) {
													$theGroup = asol_ReportsGenerateQuery::formatSubGroup($reportId, $dashletId, $theGroup, $detailFieldInfo, $userTZ, $currency_id, $gmtDates);
												}
												
												if (!$massiveData)
												$currentSubTotalsC[$theGroup] = $rsSubTotalC;
												else
												$currentSubTotalsC[$theGroup][] = $rsSubTotalC;
													
											}
	
											break;
	
	
										case "Minute Detail":
										case "Quarter Hour Detail":
										case "Hour Detail":
										case "Day Detail":
										case "DoW Detail":
										case "WoY Detail":
										case "Month Detail":
										case "Natural Quarter Detail":
										case "Fiscal Quarter Detail":
										case "Natural Year Detail":
										case "Fiscal Year Detail":
	
											foreach ($rsGroups as $currentGroup) {
	
												$monthDayDetailGroupWhereExtensionQuery = asol_ReportsGenerationFunctions::getDateDetailGroupWhereExtensionQuery($sqlWhere, $detailFieldInfo['field'], $detailFieldInfo['grouping'], $currentGroup['group']);
	
												$subGroupC = $monthDayDetailGroupWhereExtensionQuery['subGroup'];
												$sqlDetailWhereC = $monthDayDetailGroupWhereExtensionQuery['sqlDetailWhere'];
	
												//***************************//
												//******Format SubGroup******//
												//***************************//
												if ((!$grossExecution) && ($detailFieldInfo['function'] == '0')) {
													$subGroupC = asol_ReportsGenerateQuery::formatDateSpecialsGroup($reportId, $dashletId, $subGroupC, $detailFieldInfo, $userDateFormat, $userTZ, $focus->currency_id, $gmtDates);
												}
													
												//Obtenemos el resultado de la query de los SubTotales para el subgrupo actual
												$sqlSubQueryTotalsC = $sqlTotalsC.$sqlFrom.$sqlCountJoin.$sqlDetailWhereC;
												$rsSubTotalsC = asol_Report::getSelectionResults($sqlSubQueryTotalsC, null, $useExternalDbConnection, $alternativeDb);
												$currentSubTotalsC[$subGroupC] = ($massiveData ? $rsSubTotalsC : $rsSubTotalsC[0]);
													
											}
	
											break;
	
									}
	
								}
								
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$extraParams = array(
									'currentSubTotals' => $currentSubTotalsC,
									'subTotals' => $subTotalsC,
									'resulsetTotals' => $chartInfo,
									'moduleIteration' => $moduleIteration,
									'isChartsTotals' => true,
								);
								$returnedSubTotalsC = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeDetailTotalsResultsets", $extraParams);
								$subTotalsC = ($returnedSubTotalsC !== false ? $returnedSubTotalsC : $currentSubTotalsC);
								//***********************//
								//***AlineaSol Premium***//
								//***********************//

								
								if ($lastModuleIteration) {

									//********************************//
									//***Data For Charts Generation***//
									//********************************//	
									$dataForChartsGeneration = asol_ReportsCharts::getDataForChartsGeneration($chartInfo, $chartConfig, $selectedFields, $subTotalsC, $subGroupsExport, $massiveData, true, $isGroupedReport, $hasFunctionField,  $groups, $groupExport, $userDateFormat);

									$subGroupsChart = $dataForChartsGeneration['subGroupsChart'];
									$chartValues = $dataForChartsGeneration['chartValues'];
									$chartConfigs = $dataForChartsGeneration['chartConfigs'];
									$chartTemplates = $dataForChartsGeneration['chartTemplates'];
									$chartYAxisLabels = $dataForChartsGeneration['chartYAxisLabels'];
									//********************************//
									//***Data For Charts Generation***//
									//********************************//
									
										
										
									//**************************************//
									//***Generate Chart Files & ExtraData***//
									//**************************************//
									$chartFilesWithExtraData = asol_ReportsCharts::getChartFilesWithExtraData($focus->report_charts_engine, true, $massiveData, $chartInfo, $chartConfigs, $chartTemplates, $predefinedTemplates['color'], $chartYAxisLabels, $chartValues, $subGroupsChart, $reportId, $dashletId, $report_module, $chartsHttpQueryUrls, $isDetailedReport, $isGroupedReport, $isStoredReport);
		
									$urlChart = $chartFilesWithExtraData['urlChart'];
									$chartSubGroupsValues = $chartFilesWithExtraData['chartSubGroupsValues'];
									//**************************************//
									//***Generate Chart Files & ExtraData***//
									//**************************************//

								}
										
							}
								
	
							//**********************************//
							//******Apply Displaying Format*****//
							//**********************************//
							if (!$grossExecution) {
							
								if ($lastModuleIteration) {
									$subGroups = asol_ReportsGenerateQuery::formatDetailResultSet($reportId, $dashletId, $subGroups, $resulset_fields, $userDateFormat, $userDateTimeFormat, $userTZ, $currency_id, $gmtDates, $isGroupedReport, $audited_report, $auditedAppliedFields, $auditedFieldType, $referenceAlias);
									$subGroups = asol_ReportsGenerateQuery::formatDetailGroupedFields($subGroups, $resulset_fields, $userDateFormat);
								}
		
								//Order resultsetExport for grouped totals
								$subGroupsExport = (empty($subGroupsExport) ? array() : $subGroupsExport);
								
								if ((($report_data['results_limit'] != "all") || $allowExportGeneratedFile) && $lastModuleIteration) {
		
									$subGroupsExport = asol_ReportsGenerateQuery::formatDetailResultSet($reportId, $dashletId, $subGroupsExport, $resulset_fields, $userDateFormat, $userDateTimeFormat, $userTZ, $currency_id, $gmtDates, $isGroupedReport, $audited_report, $auditedAppliedFields, $auditedFieldType, $referenceAlias);
									$subGroupsExport = asol_ReportsGenerateQuery::formatDetailGroupedFields($subGroupsExport, $resulset_fields, $userDateFormat);
										
								}
							
							}
								
								
							//Obtenemos los valores relaciones con el paginado
								
							if ($report_data['results_limit'] != "all") {
								$total_entries_basic = 0;
								foreach ($subGroupsExport as $subExp)
								$total_entries_basic += count($subExp);
								$data['total_entries'] = $total_entries_basic;
							} else {
								$data['total_entries'] = $totalEntries;
							}
								
								
							$data['first_entry'] = $first_entry;
							$data['current_entries'] = (!empty($current_entries_limit)) ? $current_entries_limit : $current_entries;
							$data['page_number'] = $page_number;
	
							//Calcular numero de paginas en funciones de array sizes
							$parcial = 0;
							$num_pages = 0;
	
							foreach($sizes as $currentSize) {
									
								$parcial += $currentSize;
									
								if (($parcial >= $entriesPerPage)) {
									$num_pages++;
									$parcial = 0;
								}
									
							}
								
							$data['num_pages'] = ($parcial == 0) ? $num_pages-1 : $num_pages;
								
	
							//*************************//
							//******SIMPLE REPORT******//
							//*************************//
						} else {
	
							asol_ReportsUtils::reports_log('debug', 'Simple Report', __FILE__, __METHOD__, __LINE__);
	
							$sqlLimit = (!empty($sqlLimitSubSet)) ? $sqlLimitSubSet : $sqlLimit;
	
							//Obtenemos el resultado de la Query generada
							$sqlQuery = $sqlSelect.$sqlFrom.$sqlJoin.$sqlWhere.$sqlGroup.$sqlHaving.$sqlOrder.$sqlLimit;
							$currentRs = asol_Report::getSelectionResults($sqlQuery, null, $useExternalDbConnection, $alternativeDb);
	
							
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							$extraParams = array(
								'isGroupedReport' => $isGroupedReport,
								'groups' => $groups,
								'currentRs' => $currentRs,
								'rs' => $rs,
								'resulsetTotals' => $totals,
								'moduleIteration' => $moduleIteration
							);
							$returnedRs = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeSingleResultsets", $extraParams);
							$rs = ($returnedRs !== false ? $returnedRs : $currentRs);
							
							$extraParams = array(
								'rs' => $rs,
								'resulsetFields' => $resulset_fields,
								'referenceAlias' => $referenceAlias
							);
							$returnedPhpRs = asol_ReportsUtils::managePremiumFeature("reportPhpFunctions", "reportFunctions.php", "formatPhpResultSet", $extraParams);
							$rs = ($returnedPhpRs !== false) ? $returnedPhpRs : $rs;
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							
							if ($multiModuleReport && $lastModuleIteration) {
								asol_ReportsGenerationFunctions::sortAssocArray($rs, $sort_field, ($initialSortDirection === 'ASC'), (in_array($sort_type, array('int', 'bigint', 'decimal', 'double', 'currency'))));
							}
							
							if ($allowExportGeneratedFile || $report_data['report_charts'] != 'Tabl') {
									
								if ($hasNoPagination) {
	
									$rsExport = $rs;
	
								} else {
	
									$sqlQueryExport = $sqlSelect.$sqlFrom.$sqlJoin.$sqlWhere.$sqlGroup.$sqlHaving.$sqlOrder.$sqlLimitExport;
									$rsExport = asol_Report::getSelectionResults($sqlQueryExport, null, $useExternalDbConnection, $alternativeDb);
										
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									$extraParams = array(
										'rs' => $rsExport,
										'resulsetFields' => $resulset_fields,
										'referenceAlias' => $referenceAlias
									);
									$returnedPhpRs = asol_ReportsUtils::managePremiumFeature("reportPhpFunctions", "reportFunctions.php", "formatPhpResultSet", $extraParams);
									$rsExport = ($returnedPhpRs !== false) ? $returnedPhpRs : $rsExport;
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									
									if ($multiModuleReport && $lastModuleIteration) {
										asol_ReportsGenerationFunctions::sortAssocArray($rsExport, $sort_field, ($initialSortDirection === 'ASC'), (in_array($sort_type, array('int', 'bigint', 'decimal', 'double', 'currency'))));
									}
									
								}
									
							}
							
							//********************************************//
							//********** SINGLE REPORTS CHARTS ***********//
							//********************************************//
								
							if ($isGroupedReport) {
									
								//********************************//
								//***Data For Charts Generation***//
								//********************************//
								$dataForChartsGeneration = asol_ReportsCharts::getDataForChartsGeneration($chartInfo, $chartConfig, $selectedFields, $rsExport, null, null, false, true, $hasFunctionField, $groups, null, $userDateFormat);
	
								$subGroupsChart = $dataForChartsGeneration['subGroupsChart'];
								$chartValues = $dataForChartsGeneration['chartValues'];
								$chartConfigs = $dataForChartsGeneration['chartConfigs'];
								$chartTemplates = $dataForChartsGeneration['chartTemplates'];
								$chartYAxisLabels = $dataForChartsGeneration['chartYAxisLabels'];
								//********************************//
								//***Data For Charts Generation***//
								//********************************//

									
								//**************************************//
								//***Generate Chart Files & ExtraData***//
								//**************************************//
								$chartFilesWithExtraData = asol_ReportsCharts::getChartFilesWithExtraData($focus->report_charts_engine, false, false, $chartInfo, $chartConfigs, $chartTemplates, $predefinedTemplates['color'], $chartYAxisLabels, $chartValues, $subGroupsChart, $reportId, $dashletId, $report_module, $chartsHttpQueryUrls, false, false, $isStoredReport);
									
								$urlChart = $chartFilesWithExtraData['urlChart'];
								$chartSubGroupsValues = $chartFilesWithExtraData['chartSubGroupsValues'];
								//**************************************//
								//***Generate Chart Files & ExtraData***//
								//**************************************//
	
							}
	
							//********************************************//
							//********** SINGLE REPORTS CHARTS ***********//
							//********************************************//
	
	
							// Totals beginning
							if ($displayTotals) {
								
								if ((($isGroupedReport) && (($report_data['results_limit'] != 'all') || $multiModuleReport)) || $hasGroupedFunctionWithSQL || $hasGroupedFunctionWithHaving) {
	
									//**************************************//
									//******Generate SubTotals Manually*****//
									//**************************************//
									$limitedTotals = asol_ReportsGenerateQuery::generateManuallySubTotals($rsExport, $totals, $report_data['results_limit'], false, $subTotalsLimit);
	
								}
									
							}
							// Totals end
								

							if (!$grossExecution) {
							
								//***********************************//
								//********ResultSet Formatting*******//
								//***********************************//
								if ($lastModuleIteration) {
									$rs = asol_ReportsGenerateQuery::formatResultSet($reportId, $dashletId, $rs, $resulset_fields, $userDateFormat, $userDateTimeFormat, $userTZ, $currency_id, $gmtDates, $isGroupedReport, $audited_report, $auditedAppliedFields, $auditedFieldType, $referenceAlias);
									$rs = asol_ReportsGenerateQuery::formatGroupedFields($rs, $resulset_fields, $userDateFormat);
								}
								//***********************************//
								//********ResultSet Formatting*******//
								//***********************************//
		
		
								//***********************************//
								//***Exported ResultSet Formatting***//
								//***********************************//
								if ($lastModuleIteration && $allowExportGeneratedFile) {
									$rsExport = asol_ReportsGenerateQuery::formatResultSet($reportId, $dashletId, $rsExport, $resulset_fields, $userDateFormat, $userDateTimeFormat, $userTZ, $currency_id, $gmtDates, $isGroupedReport, $audited_report, $auditedAppliedFields, $auditedFieldType, $referenceAlias);
									$rsExport = asol_ReportsGenerateQuery::formatGroupedFields($rsExport, $resulset_fields, $userDateFormat);
								}
								//***********************************//
								//***Exported ResultSet Formatting***//
								//***********************************//
								
							}
								
							$data['total_entries'] = $total_entries_basic;
							$data['entriesPerPage'] = $entriesPerPage;
							$data['current_entries'] = count($rs);
							$data['page_number'] = $page_number;
							$data['num_pages'] = (($data['total_entries'] % $entriesPerPage) != 0) ? floor($data['total_entries'] / $entriesPerPage) : floor($data['total_entries'] / $entriesPerPage) -1 ;
								
						}


						$hasDisplayedCharts = ((count($urlChart) > 0) && ($report_data['report_charts'] != 'Tabl'));
							
							
						$data['page_number_label'] = $data['page_number'] + 1;
						$data['num_pages_label'] = $data['num_pages'] + 1;
							
							
						// Totals beginning
						if ($displayTotals) {
	
							$sqlQueryTotals = $sqlTotals.$sqlFrom.$sqlCountJoin.$sqlWhere;
							$currentRsTotals = asol_Report::getSelectionResults($sqlQueryTotals, null, $useExternalDbConnection, $alternativeDb);

							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							$extraParams = array(
								'currentRsTotals' => $currentRsTotals,
								'rsTotals' => $rsTotals,
								'resulsetTotals' => $totals,
								'moduleIteration' => $moduleIteration
							);
							$returnedRsTotals = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "parseMergeTotalsResultsets", $extraParams);
							$rsTotals = ($returnedRsTotals !== false ? $returnedRsTotals : $currentRsTotals);
							
							
							//**********************************//
							//******Apply Displaying Format*****//
							//**********************************//
							if ((!$grossExecution) && ($lastModuleIteration)) {
							
								$rsTotals = asol_ReportsGenerateQuery::formatGroupTotals($reportId, $dashletId, $rsTotals, $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $focus->currency_id, $gmtDates, $audited_report, $auditedAppliedFields, $auditedFieldType);
							
								if (($report_data['results_limit'] != "all") || ($allowExportGeneratedFile)) {
			
									$limitedTotals = asol_ReportsGenerateQuery::formatGroupTotals($reportId, $dashletId, $limitedTotals, $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $focus->currency_id, $gmtDates, $audited_report, $auditedAppliedFields, $auditedFieldType);
		
								}
									
								$rsTotals = (!empty($limitedTotals) ? $limitedTotals : $rsTotals);
							
							}
	
						}
						// Totals end
		
					}
						
				}
				
			}
			
			if (!$oversizedReport) {
				
				$columnsDataRefs = array();
				$columnsDataTypes = array();
				$columnsDataFunctions = array();
				$columnsDataWidths = array();
				$columnsDataVisible = array();
				
				foreach ($resulset_fields as $currentField) {
					
					$currentType = (!empty($currentField['format']['type']) ? $currentField['format']['type'] : $currentField['type']);
					$currentVisible = $currentField['visible'];
					$parenthesesPosition = strpos($currentType, '(');
					if ($parenthesesPosition != false) {
						$currentType = substr($currentType, 0, $parenthesesPosition);
					}
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'dataType' => $currentType,
						'dataFormat' => $currentField['format'],
					);
					$buttonTypeResult = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "getButtonTypeClass", $extraParams);
					$buttonTypeClass = $buttonTypeResult['class'];
					$delimiterToken = (empty($buttonTypeResult['delimiter']) ? $delimiterToken : $buttonTypeResult['delimiter']);
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					
					$columnsDataRefs[$currentField['alias']] = $currentField['fieldReference'];
					$columnsDataTypes[$currentField['alias']] = ($buttonTypeClass !== false ? $buttonTypeClass : $currentType);
					$columnsDataFunctions[$currentField['alias']] = ($currentField['function'] === '0' ? null : $currentField['function']);
					$columnsDataVisible[$currentField['alias']] = $currentVisible;
					
				}
				
				
				$typesWeightedWidth = asol_ReportsGenerationFunctions::getTypesWeightedWidthArray();
				$totalWeightedWidth = asol_ReportsGenerationFunctions::getRowTotalWeightedWidth($columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $typesWeightedWidth, $isGroupedReport, $hasRowIndexDisplay);
				if ($hasRowIndexDisplay) {
					$columnsDataWidths['rowIndexDisplay'] = asol_ReportsGenerationFunctions::getCellWidthBasedOnTypology('index', $typesWeightedWidth, $totalWeightedWidth);
				}
				foreach ($columnsDataTypes as $columnsDataKey => $columnsDataType) {
					if ((!in_array($columnsDataVisible[$columnsDataKey], array('html', 'internal'))) && ($isGroupedReport || !isset($columnsDataFunctions[$columnsDataKey]))) {
						$columnsDataWidths[$columnsDataKey] = asol_ReportsGenerationFunctions::getCellWidthBasedOnTypology($columnsDataType, $typesWeightedWidth, $totalWeightedWidth);
					}
				}
				
				
				//**************************************//
				//****Save Report Data into Txt File****//
				//**************************************//
				if ($allowExportGeneratedFile) {

					$exportedReport = Array();

					$exportedReport['id'] = $reportId;
					$exportedReport['reportName'] = $report_name;
					$exportedReport['report_type'] = $report_data['report_type'];
					$exportedReport['report_type_stored_data'] = $report_data['report_type_stored_data'];
					$exportedReport['module'] = $app_list_strings["moduleList"][$report_module];
					$exportedReport['description'] = $report_data['description'];
					$exportedReport['report_charts'] = $report_data['report_charts'];
					$exportedReport['report_charts_engine'] = $report_data['report_charts_engine'];
					$exportedReport['report_attachment_format'] = $report_data['report_attachment_format'];
					$exportedReport['row_index_display'] = $report_data['row_index_display'];
					$exportedReport['results_limit'] = $report_data['results_limit'];
					$exportedReport['email_list'] = $focus->email_list;
					$exportedReport['created_by'] = $focus->created_by;

					if (asol_ReportsUtils::isDomainsInstalled()) {
						$exportedReport['asol_domain_id'] = $focus->asol_domain_id;
						$exportedReport['asol_domain_external'] = BeanFactory::getBean('asol_Domains', $focus->asol_domain_id)->external_id;
					}
					
					$exportedReport['displayTitles'] = $displayTitles;
					$exportedReport['displayHeaders'] = $displayHeaders;
					$exportedReport['displayTotals'] = $displayTotals;
					$exportedReport['displaySubtotals'] = $displaySubtotals;
					$exportedReport['hasGroupedTotalBelowColumn'] = $hasGroupedTotalBelowColumn;
					
					$exportedReport['pdf_orientation'] = $pdf_orientation;
					$exportedReport['pdf_img_scaling_factor'] = $pdf_img_scaling_factor;

					$exportedReport['totals'] = $rsTotals;
					$exportedReport['headers'] = $columns;
					$exportedReport['types'] = $types;

					$exportedReport['headersTotals'] = $totals;

					$exportedReport['current_user_id'] = $current_user->id;
					$exportedReport['context_domain_id'] = $reportDomain;

					$exportedReport['isDetailedReport'] = $isDetailedReport;
					$exportedReport['isGroupedReport'] = $isGroupedReport;
					$exportedReport['hasDisplayedCharts'] = $hasDisplayedCharts;

					$exportedReport['reportScheduledType'] = $focus->report_scheduled_type;
					
					if ($isDetailedReport) {
						$exportedReport['resultset'] = $subGroupsExport;
						$exportedReport['subTotals'] = $subTotalsExport;
					} else {
						$exportedReport['resultset'] = $rsExport;
					}
					
					$exportedReport['columnsDataTypes'] = $columnsDataTypes;
					$exportedReport['columnsDataFunctions'] = $columnsDataFunctions;
					$exportedReport['columnsDataVisible'] = $columnsDataVisible;
					$exportedReport['columnsDataWidths'] = $columnsDataWidths;
					
					$exportedReport['currentReportCss'] = $currentReportCss;


					//Guardamos el fichero en disco por si surge un export
					$exportedReportName = preg_replace('/[^a-zA-Z0-9]/', '', $report_data['report_name']);
					$reportNameNoSpaces = strtolower(str_replace(":", "", str_replace(" ", "_", $exportedReportName)));
					$exportedReportFile = $reportNameNoSpaces."_".dechex(time()).dechex(rand(0,999999)).".txt";

					$exportFolder = "modules/asol_Reports/tmpReportFiles/";
					$storedReportsSubFolder = "storedReports/";

					//If Scheduled-Stored Report, save report in StoredReports subfolder & update Report with reportFileName
					if ($report_data['report_type'] == 'stored') {
							
						$storedReportData = (empty($exportedReport['report_type_stored_data'])) ? array() : unserialize(base64_decode($exportedReport['report_type_stored_data']));
							
						$chartFiles = array();
							
						foreach ($chartInfo as $key=>$info) {

							if (!empty($urlChart[$key])) {
								$chartFiles[] = array(
									'file' => $urlChart[$key],
									'type' => $info["type"],
									'subGroups' => $info["subgroups"]
								);
							}

						}

						$accessKey = (asol_ReportsUtils::isDomainsInstalled()) ? $reportDomain : 'base';
							
						$storedReportData[$accessKey] = array(
							'infoTxt' => $storedReportsSubFolder.$exportedReportFile,
							'chartFiles' => $chartFiles
						);

						$updatedSerializedStoredData = base64_encode(serialize($storedReportData));
							
						$setStoredReportFile = "UPDATE asol_reports SET report_type = 'stored:".$updatedSerializedStoredData."' WHERE id = '".$reportId."' LIMIT 1";
						$db->query($setStoredReportFile);
							
						$exportFolder .= $storedReportsSubFolder;
							
					}


					$exportFile = fopen($exportFolder.$exportedReportFile, "w");
					fwrite($exportFile, serialize($exportedReport));
					fclose($exportFile);
						
				}
				
				//********************************************//
				//****Do Final Action for Executed Reports****//
				//********************************************//
				if ((!isset($_REQUEST['return_action'])) && (!$hasVardefFilter)) {
					asol_ReportsGenerationFunctions::doFinalExecuteReportActions($reportId, $dispatcherMaxRequests);
				}
				
			}
				

			if ((!$externalCall) && (empty($vardefFilters))) {

				$reportHeadersHtml .= '
				<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">
				<script type="text/javascript" src="modules/asol_Reports/include_basic/js/LAB.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>
				<script type="text/javascript" src="modules/asol_Reports/include_basic/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';

			}

			$externalCssUsage = (isset($_REQUEST['useExternalCss']) && $_REQUEST['useExternalCss'] == 'true');
			if (($focus->report_type === 'external') && $externalCssUsage) {
				
				$reportHeadersHtml .= '<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/external.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">';
				
			}
				
			if ((!$externalCall) && $getLibraries) {

				if ($dataVisibility['chart']) {
						
					$reportHeadersHtml .= asol_ReportsCharts::getChartEngineLibraries($focus->report_charts_engine, $isDashlet, $isPreview);
					
				}


				if (empty($vardefFilters)) {

					$reportHeadersHtml .=
					'<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">
					<script type="text/javascript" src="modules/asol_Reports/include_basic/js/LAB.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>
					'.asol_ReportsManagementFunctions::getLoadJqueryScript(true, true).'
					<script type="text/javascript" src="modules/asol_Reports/include_basic/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';

				}

				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extendedFunctionsScript = asol_ReportsUtils::managePremiumFeature("ExtendedJavascriptFunctions", "reportFunctions.php", "getExtendedJavaScriptFunctions", null);
				if (($extendedFunctionsScript !== false) && (empty($vardefFilters))) {
					$reportHeadersHtml .= $extendedFunctionsScript;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//

			}

			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'overrideParam' => (!isset($vardefFilters) ? null : $vardefFilters)
			);
			$vardefFilters = asol_ReportsUtils::managePremiumFeature("reportFieldsManagement", "reportFunctions.php", "getVardefFilterRequest", $extraParams);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

			if ($getReloadFunctions) {
				$reportHeadersHtml .= '<script type="text/javascript">'.asol_ReportsGenerationFunctions::getReloadCurrentDashletScriptFunction($reportId, $isDashlet, $dashletId, '', $getLibraries, $vardefFilters, $override_entries, $current_user->id, isset($override_info), true).'</script>';
			}
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			if (!empty($currentReportCss)) {
				$reportHeadersHtml .= $currentReportCss;
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			//Asignamos los valores para el ordenado
			$report_data['sort_field'] = $sort_field;
			$report_data['sort_direction'] = $sort_direction;
			$report_data['sort_index'] = $sort_index;
				

			$rsTotals = (!empty($limitedTotals) ? $limitedTotals : (empty($rsTotals) ? array() : $rsTotals));

			$reportFields = ($isDetailedReport) ? $subGroups : $rs;

			if ($isHttpReportRequest) {

				if ((isset($_REQUEST['schedulerCall'])) && ($_REQUEST['schedulerCall'] == 'true')) { //Scheduled Reports

					if ($report_data['report_type'] == "scheduled") {

						$reportScheduledTypeArray = explode('${dollar}', $focus->report_scheduled_type);
						$reportScheduledType = (empty($reportScheduledTypeArray[0])) ? 'email' : $reportScheduledTypeArray[0];


						if ($reportScheduledType == 'email') { //Send Email

							//$exportedReportFile
							$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
								
							$descriptionArray = unserialize(base64_decode($report_data['description']));
								
							
							$mail = asol_ReportsGenerationFunctions::getRetrievedReportMailer($focus->email_list, $report_data['created_by'], $report_data['report_name'], $report_data['report_module'], $descriptionArray['public'], $reportDomain);
								
							if ($scheduled_images == "1") {

								$chartFiles = array();
								
								foreach ($chartInfo as $key=>$info){
								
									if (!empty($urlChart[$key])) {
										$chartFiles[] = array(
											'file' => $urlChart[$key],
											'type' => $info["type"],
											'subGroups' => $info["subgroups"]
										);
									}
								
								}
								
								$accessKey = 'base';
								
								$storedReportData[$accessKey] = array(
									'infoTxt' => $exportedReportFile,
									'chartFiles' => $chartFiles
								);
									
								$serializedStoredData = base64_encode(serialize($storedReportData));
								
								
								$uri = (!empty($host_name)) ? $host_name : $sugar_config['site_url'];
								$uri .= "/index.php";
								$uri .= "?entryPoint=scheduledEmailReport&module=asol_Reports&storedReportInfo=".$serializedStoredData;
								
								asol_ReportsUtils::reports_log('asol', 'scheduledImages is enabled - URI Rebuild: '.$uri, __FILE__, __METHOD__, __LINE__);
								//Generamos la url para reconstruir el report en un entryPoint
								
								
								$mail->Body .= "<br><br>";
								$mail->Body .= "<a href='".$uri."'>".$mod_strings['LBL_REPORT_EMAIL_TTL_TEXT_1']."</a> ".$mod_strings['LBL_REPORT_EMAIL_TTL_TEXT_2']."<br><br>";
								$mail->Body .= "<i>".$mod_strings['LBL_REPORT_EMAIL_AVAILABLE_TEXT_1']." ".$scheduled_files_ttl." ".$mod_strings['LBL_REPORT_EMAIL_AVAILABLE_TEXT_2']."</i>";
								
								$mail->AltBody .= "\n\n";
								$mail->AltBody .= $mod_strings['LBL_REPORT_ALT_EMAIL_TTL_TEXT'].": ".$uri."\n\n";
								$mail->AltBody .= $mod_strings['LBL_REPORT_EMAIL_AVAILABLE_TEXT_1']." ".$scheduled_files_ttl." ".$mod_strings['LBL_REPORT_EMAIL_AVAILABLE_TEXT_2'];

							}


							if (!$isDetailedReport) {

								$rsExport = $rs;
								$subTotalsExport = "";

							} else {

								$rsExport = $subGroups;
								$subTotalsExport = $subTotals;

							}


							if ($report_data['report_charts'] != 'Char') {//If only charts Report, do not attach a generated file

								$descriptionArray = unserialize(base64_decode($report_data["description"]));
								$description = $descriptionArray['public'];
									
								switch ($report_data['report_attachment_format']) {

									case "PDF":
										$attachment = generateFile($displayTitles, $displayHeaders, $report_data['report_name'], $app_list_strings["moduleList"][$report_data['report_module']], $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, Array(), Array(), Array(), false, true, 100, time(), $userTZlabel, $report_data['row_index_display'], $report_data['report_charts'], $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $reportDomain);
										break;
									case "HTML":
										$attachment = generateFile($displayTitles, $displayHeaders, $report_data['report_name'], $app_list_strings["moduleList"][$report_data['report_module']], $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, Array(), Array(), Array(), true, true, 100, time(), $userTZlabel, $report_data['row_index_display'], $report_data['report_charts'], $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $reportDomain);
										break;
									case "CSV":
										$attachment = generateCsv($report_data['report_name'] ,$columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $report_data['row_index_display'], $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
										break;
									case "CSVC":
										$attachment = generateCsv($report_data['report_name'] ,$columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $report_data['row_index_display'], $columnsDataVisible, true, true, false, true, true);
										break;
									case "XLS":
										$attachment = generateXls($report_data['report_name'] ,$columns, null, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $report_data['row_index_display'], $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
										break;
									case "XLSC":
										$attachment = generateXls($report_data['report_name'] ,$columns, null, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $report_data['row_index_display'], $columnsDataVisible, true, true, false, true, true);
										break;

								}
										
								
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$autoZipScheduledAttachmentResult = asol_ReportsUtils::managePremiumFeature("autoZipScheduledAttachments", "reportFunctions.php", "generateAutoZipAttachment", array('attachment' => $attachment, 'reportName' => $report_data['report_name']));
								$attachment = ($autoZipScheduledAttachmentResult !== false ? $autoZipScheduledAttachmentResult : $attachment);
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								

								//Añadimos el Report como fichero adjunto del e-mail
								$mail->AddAttachment(getcwd()."/".$tmpFilesDir.$attachment, $attachment);

							}

								
							$success = $mail->Send();

							$tries=1;
							while ((!$success) && ($tries < 5)) {

								sleep(5);
								$success = $mail->Send();
								$tries++;

							}

							if ($report_data['report_charts'] != 'Char') {
								unlink(getcwd()."/".$tmpFilesDir.$attachment);
							}
								
						} else { // Send Application
								
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							$extraParams = array(
								'reportScheduledType' => $focus->report_scheduled_type,
								'cvsData' => array(
									'reportName' => $report_data['report_name'],
									'resultset' => $rsExport,
									'subtotals' => $subTotalsExport,
									'isDetailed' => $isDetailedReport,
									'rowIndexDisplay' => $report_data['row_index_display']
								)
							);
								
							asol_ReportsUtils::managePremiumFeature("externalApplicationReports", "reportFunctions.php", "sendReportToExternalApplication", $extraParams);
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
								
						}
							
					}
						
				} else {
						
					$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
					$httpHtmlFile = $_REQUEST['httpHtmlFile'];

					$noDataReport = ((empty($urlChart)) && (asol_ReportsGenerationFunctions::isEmptyResultSet($reportFields)));
					$reportedError = asol_Report::$reported_error;
						
					if ($returnHtml) {
						return $reportHeadersHtml.(include "modules/asol_Reports/include_basic/DetailViewHttpSave.php");
					} else {
						echo $reportHeadersHtml;
						include "modules/asol_Reports/include_basic/DetailViewHttpSave.php";
					}
						
				}

			} else {

				$justDisplay = true;

				$noDataReport = ((empty($urlChart)) && (asol_ReportsGenerationFunctions::isEmptyResultSet($reportFields)));
				$reportedError = asol_Report::$reported_error;

				if ($returnHtml) {
					
					if (isset($override_info)) {

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$retunedHtmls = array();
						foreach ($override_info as $singleKey => $singleInfo) {

							$dataReferences = $singleInfo['reportData'];
							$reportVisibility = $singleInfo['reportVisibility'];
							
							$dataVisibility = array(
								'field' => (isset($dataReferences['fields'])),
								'filter' => (isset($dataReferences['filters'])),
								'chart' => (isset($dataReferences['charts']))
							);
							$displayTitles = $reportVisibility['titles'];
							$displayHeaders = $reportVisibility['headers'];
							$displaySubtotals = $reportVisibility['subtotals'];
							$displayTotals = $reportVisibility['totals'];
							$displayPagination = ($reportVisibility['pagination'] ? $paginationType : null);

							$hasGroupedTotalBelowColumn = !$reportVisibility['expand'];
							$cleanUpStyling = $reportVisibility['cleanup'];
							
							$retunedHtmls[] = $currentReportCss.(include "modules/asol_Reports/include_basic/DetailViewHttpSave.php");
							
						}
						
						return $retunedHtmls;
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
					
					} else {
						return $reportHeadersHtml.(include "modules/asol_Reports/include_basic/DetailViewHttpSave.php");
					}
					
				} else {
					
					if (isset($override_info)) {

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$justDisplay = true;
						$returnHtml = true;
						
						$retunedHtmls = array();
						foreach ($override_info as $singleKey => $singleInfo) {

							$dataReferences = $singleInfo['reportData'];
							$reportVisibility = $singleInfo['reportVisibility'];
							
							$dataVisibility = array(
								'field' => (isset($dataReferences['fields'])),
								'filter' => (isset($dataReferences['filters'])),
								'chart' => (isset($dataReferences['charts']))
							);
							$displayTitles = $reportVisibility['titles'];
							$displayHeaders = $reportVisibility['headers'];
							$displaySubtotals = $reportVisibility['subtotals'];
							$displayTotals = $reportVisibility['totals'];
							$displayPagination = ($reportVisibility['pagination'] ? $paginationType : null);
							
							$hasGroupedTotalBelowColumn = !$reportVisibility['expand'];
							$cleanUpStyling = $reportVisibility['cleanup'];
							
							$retunedHtmls[] = $currentReportCss.(include "modules/asol_Reports/include_basic/DetailViewHttpSave.php");
							
						}

						echo json_encode($retunedHtmls);
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						
					} else {
						echo $reportHeadersHtml;
						include "modules/asol_Reports/include_basic/DetailViewHttpSave.php";
					}
					exit();
					
				}
					
			}

		} else {
				
			require_once('modules/asol_Reports/include_basic/ReportChart.php');
			require_once('modules/asol_Reports/include_basic/generateQuery.php');
			require_once('modules/asol_Reports/include_basic/generateReportsFunctions.php');
			require_once('modules/asol_Reports/include_basic/manageReportsFunctions.php');
				
			asol_ReportsUtils::reports_log('debug', 'HttpRequest REPORT!!', __FILE__, __METHOD__, __LINE__);

			$hasSearchCriteria = (!isset($_REQUEST['search_criteria'])) ? false : true;

			$pageNumber = (empty($_REQUEST['page_number'])) ? "" : "&page_number=".$_REQUEST['page_number'];
			$sortingField = (empty($_REQUEST['sort_field'])) ? "" : "&sort_field=".$_REQUEST['sort_field']."&sort_direction=".$_REQUEST['sort_direction']."&sort_index=".$_REQUEST['sort_index'];
				
			$externalFilters = (!isset($_REQUEST['external_filters'])) ? "" : "&external_filters=".html_entity_decode($_REQUEST['external_filters']);
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'overrideParam' => (!isset($vardefFilters) ? null : $vardefFilters)
			);
			$vardefFilters = asol_ReportsUtils::managePremiumFeature("reportFieldsManagement", "reportFunctions.php", "getVardefFilterRequest", $extraParams);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				
			$overrideEntries = (empty($override_entries)) ? "" : "&overrideEntries=".$override_entries;
			$vardefFilters = (empty($vardefFilters)) ? "" : "&vardefFilters=".$vardefFilters;
			$searchCriteria = (!isset($_REQUEST['search_criteria'])) ? "" : "&search_criteria=1";
			$filtersHiddenInputs = (empty($_REQUEST['filters_hidden_inputs'])) ? "" : "&filters_hidden_inputs=".$_REQUEST['filters_hidden_inputs'];
			$currentUserId = (isset($_REQUEST['currentUserId'])) ? "&currentUserId=".$_REQUEST['currentUserId'] : "&currentUserId=".$current_user->id;
			$contextDomain = (isset($contextDomainId)) ? "&contextDomainId=".$contextDomainId : "";
			$returnHtmlParam = (isset($returnHtml) && $returnHtml) ? "&returnHtml=true" : "";
				
			$isDashletQuery = (!empty($isDashlet)) ? "&dashlet=true" : "";
			$isDashletQuery .= (!empty($dashletId)) ? "&dashletId=".$dashletId : "";

			$focus = asol_Report::getReportBean($reportId);

			//*************************************//
			//********Manage Report Domain*********//
			//*************************************//
			if (asol_ReportsUtils::isDomainsInstalled()) {

				$reportDomain = ($contextDomainId !== null) ? $contextDomainId : $current_user->asol_default_domain;

				$currentReportDomain = (empty($reportId) ? $reportDomain : $focus->asol_domain_id);
				$manageReportDomain = asol_ReportsGenerationFunctions::manageReportDomain($reportId, $reportDomain, $currentReportDomain);
				
				if (!$manageReportDomain) {

					$availableReport = false;
					include "modules/asol_Reports/include_basic/DetailViewHttpSave.php";
					exit();
						
				}
					
			}

			
			$rsHttp = asol_Report::getSelectionResults("SELECT * FROM asol_reports WHERE id = '".$reportId."' LIMIT 1", null, false);
			
			//Guardamos el fichero en disco por si surge un export
			$httpHtmlFile = asol_ReportsGenerationFunctions::getReportExportedFileName($rsHttp[0]['name']).".html";
			
			
			if (!$isMetaReport) {
		
				//Ver si hay charts para pasar los nombres		
				$chartsUrls = array();
				$chartsInfo = array();
					
	
				$filtersArray = unserialize(base64_decode($rsHttp[0]['report_filters']));
					
				//Check if there is some user_input fiter to show
				$hasUserInputsFilters = false;
					
				foreach ($filtersArray['data'] as $currentFilter){
					if ($currentFilter['behavior'] == 'user_input') {
						$hasUserInputsFilters = true;
						break;
					}
				}
				//Check if there is some user_inut fiter to show
					
				// Execute report with default filter values
				if ((isset($filtersArray['config']['initialExecution'])) && ($filtersArray['config']['initialExecution'])) {
					$hasSearchCriteria = true;
					$searchCriteria = "&search_criteria=1";
				}
				// Execute report with default filter values
					
					
	
				
				
				$selectedCharts = unserialize(base64_decode($rsHttp[0]['report_charts_detail']));
				$chartsUrls = asol_ReportsGenerationFunctions::generateChartFileNames($focus->report_charts_engine, $selectedCharts);
				$chartsQueryUrls = (empty($chartsUrls)) ? "" : "&chartsHttpQueryUrls=".implode('${pipe}', $chartsUrls);

				
				if (empty($vardefFilters)) {
					echo '<script type="text/javascript" src="modules/asol_Reports/include_basic/js/LAB.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>
					'.asol_ReportsManagementFunctions::getLoadJqueryScript(true);
				}
					
				if ($getLibraries) {
	
					if ($dataVisibility['chart']) {
	
						echo asol_ReportsCharts::getChartEngineLibraries($focus->report_charts_engine, $isDashlet, $isPreview);
							
					}
	
					echo '<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">';
					
					echo '
					<script type="text/javascript" src="modules/asol_Reports/include_basic/js/LAB.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>	
					'.asol_ReportsManagementFunctions::getLoadJqueryScript(true).'
					<script type="text/javascript" src="modules/asol_Reports/include_basic/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';
	
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extendedFunctionsScript = asol_ReportsUtils::managePremiumFeature("ExtendedJavascriptFunctions", "reportFunctions.php", "getExtendedJavaScriptFunctions", null);
					if ($extendedFunctionsScript !== false) {
						echo $extendedFunctionsScript;
					}
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
	
				}
				
				$setUpInputCalendarsScript = asol_ReportsGenerationFunctions::getSetUpInputCalendarsScriptFunction($reportId, $filtersArray['data']);
				if (isset($setUpInputCalendarsScript)) {
					echo '<script>'.$setUpInputCalendarsScript.'</script>';
				}
			
			
			}
			
				
			$waitForReport = false;
			$reportRequestId = "";
				
			$asolUrlQuery = $pageNumber.$sortingField.$overrideEntries.$externalFilters.$vardefFilters.$searchCriteria.$filtersHiddenInputs.$currentUserId.$contextDomain.$returnHtmlParam.$isDashletQuery;
				
			$baseRequestedUrl = (isset($sugar_config["asolReportsCurlRequestUrl"])) ? $sugar_config["asolReportsCurlRequestUrl"] : $sugar_config["site_url"];
			$curlRequestedUrl = $baseRequestedUrl.'/index.php?entryPoint=viewReport&record='.$reportId.'&language='.$current_language.'&sourceCall=httpReportRequest'.$chartsQueryUrls.$asolUrlQuery.'&httpHtmlFile='.$httpHtmlFile.$reportRequestId;

			//REPORTS DISPATCHER
			$hasVardefFilter = (!empty($vardefFilters));
			$manageDispatcher = (($dispatcherMaxRequests > 0) && ((!$hasUserInputsFilters) || (($hasUserInputsFilters) && (isset($_REQUEST['external_filters'])))) && (!$hasVardefFilter));
			if ($manageDispatcher) {

				$requestId = create_guid();
				$currentGMTTime = time();
				$currentGMTDate = date('Y-m-d H:i:s', $currentGMTTime);

				asol_ReportsUtils::reports_log('debug', 'Init GMDate(): '.$currentGMTDate, __FILE__, __METHOD__, __LINE__);

				$reportRequestId = "&reportRequestId=".$requestId;
				$initRequestTimeStamp = "&initRequestDateTimeStamp=".$currentGMTTime;

				$curlRequestedUrl .= $reportRequestId.$initRequestTimeStamp;


				asol_ReportsUtils::reports_log('debug', 'Reporting Queue Feature Enabled.', __FILE__, __METHOD__, __LINE__);
					

				$reportsDispatcherSql = "SELECT COUNT(DISTINCT id) as 'reportsThreads' FROM asol_reports_dispatcher WHERE status = 'executing'";
				$reportsDispatcherRs = $db->query($reportsDispatcherSql);
				$reportsDispatcherRow = $db->fetchByAssoc($reportsDispatcherRs);

				$currentReportsRunningThreads = $reportsDispatcherRow["reportsThreads"];

				$waitForReport = ($currentReportsRunningThreads >= $dispatcherMaxRequests);
				$dispatcherReportSql = "INSERT INTO asol_reports_dispatcher VALUES ('".$requestId."', '".$reportId."', '".$curlRequestedUrl."', '".($waitForReport ? 'waiting' : 'executing')."', '".$currentGMTDate."', '".$currentGMTDate."', 'manual', '".$current_user->id."')";
				$db->query($dispatcherReportSql);

			}
			//REPORTS DISPATCHER

			if (!$waitForReport) { //Execute report if not is waiting in queue
					
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL, $curlRequestedUrl);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, 1);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);

				curl_exec($ch);
				curl_close($ch);

			}

			$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
				
			echo '
				<script>';

			if (!isset($_REQUEST['entryPoint'])) {
					
				echo asol_ReportsGenerationFunctions::getSendAjaxRequestScriptFunction($reportId, $dashletId, $checkHttpFileTimeout, $httpHtmlFile, $reportRequestId, $initRequestTimeStamp, $hasCalendarInputs);
				echo asol_ReportsGenerationFunctions::getInitialAjaxRequest2GenerateReportScript($reportId);
					
			}

			if ($getReloadFunctions) {
				echo asol_ReportsGenerationFunctions::getReloadCurrentDashletScriptFunction($reportId, $isDashlet, $dashletId, '', $getLibraries, $vardefFilters, $override_entries, $current_user->id, isset($override_info), true);
			}
			
			echo '
				</script>';

			if (!$isDashlet) {

				echo asol_ReportsGenerationFunctions::getStandByReportHtml('', false);
					
			}

		}

	}

}
	
?>
