<?php

error_reporting(1); //E_ERROR


require_once("modules/asol_Reports/include/manageReportsFunctions.php");

$htmlTarget = $_REQUEST['htmlTarget'];
$returnedHtml = "";
global $db, $mod_strings, $sugar_config, $current_user, $current_language, $timedate; 

$mod_strings = return_module_language($current_language, "asol_Reports");

$breadCrumbNavigation = (isset($sugar_config['asolReportsBreadCrumbNavigation']) ? $sugar_config['asolReportsBreadCrumbNavigation'] : false);


if ($htmlTarget == 'reportModuleTables') {
	
	$selectedDb = $_REQUEST['selectedDb'];
	$isSubQuery = ($_REQUEST['isSubQuery'] == 'true' ? true : false);
	$selectedTable = (isset($_REQUEST['selectedTable']) ? $_REQUEST['selectedTable'] : null);
	$isEditViewMode = (isset($_REQUEST['isEditViewMode']) ? ($_REQUEST['isEditViewMode'] == 'true' ? true : false) : true);
	$noRestrictions = (isset($_REQUEST['noRestrictions']) ? ($_REQUEST['noRestrictions'] == 'true' ? true : false) : false);
	$isDisabled = (isset($_REQUEST['isDisabled']) ? ($_REQUEST['isDisabled'] == 'true' ? true : false) : false);
	$onChangeFunction = (isset($_REQUEST['onChangeFunction']) ? $_REQUEST['onChangeFunction'] : null);
	
	$returnedHtml = asol_ReportsManagementFunctions::getReportModuleTablesHtml($selectedDb, $isSubQuery, $selectedTable, false, 0, 0, $isEditViewMode, $isDisabled, $noRestrictions, $onChangeFunction);
	
} else if ($htmlTarget == 'reportTableFields') {

	$selectedDb = $_REQUEST['selectedDb'];
	$selectedModule = $_REQUEST['selectedModule'];
	$hasDeleted = (isset($_REQUEST['hasDeleted']) ? ($_REQUEST['hasDeleted'] == '1' ? true : false) : false);
	$selectedField = (isset($_REQUEST['selectedField']) ? $_REQUEST['selectedField'] : null);
	$isEditViewMode = (isset($_REQUEST['isEditViewMode']) ? ($_REQUEST['isEditViewMode'] == 'true' ? true : false) : true);
	$auditedReport = (isset($_REQUEST['isAudited'])) ? $_REQUEST['isAudited'] : 0;
	$isDisabled = (isset($_REQUEST['isDisabled']) ? ($_REQUEST['isDisabled'] == 'true' ? true : false) : false);
	$treeMode = (isset($_REQUEST['treeMode']) && $_REQUEST['treeMode'] == 'true' ? (!$breadCrumbNavigation && true) : false);
	$subQueryMode = (isset($_REQUEST['subQueryMode']) ? ($_REQUEST['subQueryMode'] == 'true' ? true : false) : false);
	
	$moduleFields = asol_ReportsManagementFunctions::getFieldsSelectHtml($selectedDb, $selectedModule, $hasDeleted, $selectedField, $auditedReport, $isEditViewMode, $isDisabled, $treeMode, $subQueryMode);
	
	$returnedHtml = $moduleFields['html'];
	
	if ($isEditViewMode) {
	
		$returnedHtml .= '<script type="text/javascript"> $("#'.($subQueryMode ? 'addSubFieldsButton' : 'addFieldsButton').'").attr("onClick", "'.$moduleFields['javascript'].'"); </script>';
		
		if ($selectedDb === '-1') {
	
			if ($moduleFields['isAudited']) {
				
				$basicAuditInfo = asol_ReportsManagementFunctions::getBasicFieldFilterForAuditedReport($selectedModule, $hasDeleted);
				
				$returnedHtml .= '<script type="text/javascript"> $("#'.($subQueryMode ? 'auditedSubReportSpan' : 'auditedReportSpan').'").css("visibility", "visible");';
				$returnedHtml .= (($auditedReport == 1) ? 'if ($(".asolReportsFieldRow").length == 0) RememberFields("fields_Table", \''.$basicAuditInfo['auditFields'].'\', "1");' : '');
				$returnedHtml .= (($auditedReport == 1) ? 'if ($(".asolReportsFilterRow").length == 0) RememberFilters("filters_Table", \''.$basicAuditInfo['auditFilters'].'\', "1");' : '');
				$returnedHtml .= '</script>';
				
			} else {
				$returnedHtml .= '<script type="text/javascript"> $("#'.($subQueryMode ? 'auditedSubReportSpan' : 'auditedReportSpan').'").css("visibility", "hidden");';
				$returnedHtml .= '$("#audited_report").attr("checked", false);';
				$returnedHtml .= '</script>';
			}
			
		} else {
			
			$returnedHtml .= '<script type="text/javascript"> $("#'.($subQueryMode ? 'autoSubRefreshSpan' : 'autoRefreshSpan').'").css("display", "'.(empty($selectedModule) ? 'none' : 'block').'"); if (!window["subQueryMode"]) $("#reportDynamicTableAddImg, #reportDynamicTableCancelImg").css("display", "'.(empty($selectedModule) ? 'inline' : 'none').'"); </script>';
			
		}
		
	}

} else if ($htmlTarget == 'reportRelatedTableFields') {

	$selectedDb = $_REQUEST['selectedDb'];
	$selectedModule = $_REQUEST['selectedModule'];
	$hasDeleted = (isset($_REQUEST['hasDeleted']) ? ($_REQUEST['hasDeleted'] == '1' ? true : false) : false);
	$mainRelatedKey = (!empty($_REQUEST['mainRelatedKey']) ? $_REQUEST['mainRelatedKey'] : null);
	$mainRelatedModule = (!empty($_REQUEST['mainRelatedModule']) ? $_REQUEST['mainRelatedModule'] : null);
	$auditedReport = ((isset($_REQUEST['isAudited']) && ($_REQUEST['isAudited'] === '1')) ? 1 : 0);
	$treeMode = (isset($_REQUEST['treeMode']) && $_REQUEST['treeMode'] == 'true' ? (!$breadCrumbNavigation && true) : false);
	$subQueryMode = (isset($_REQUEST['subQueryMode']) ? ($_REQUEST['subQueryMode'] == 'true' ? true : false) : false);

	$rhsKeyExploded = explode('.', $_REQUEST['selectedRhsKey']);
	$rhsModExploded = explode('::', $rhsKeyExploded[0]);

	if (count($rhsKeyExploded) > 1) {
		
		$fixedTable = (substr(end($rhsModExploded), -strlen('_cstm')) === '_cstm' ? substr(end($rhsModExploded), 0, -strlen('_cstm')) : end($rhsModExploded));
		$tableModules = ($selectedDb === '-1' ? asol_ReportsUtils::getTableModulesAssociation($current_user->id) : null);
		$lastModule = ($selectedDb === '-1' ? (isset($tableModules[$fixedTable]) ? $tableModules[$fixedTable] : null) : $fixedTable);
		$selectedModule = $lastModule;
		$rhsKey = $rhsKeyExploded[1];
		
	} else {
		
		$rhsKey = $rhsKeyExploded[0];
		
	}
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array(
		'mainRelatedKey' => $mainRelatedKey,
		'rhsModExploded' => $rhsModExploded,
	);
	$relationLinkAvailable = asol_ReportsUtils::managePremiumFeature("multipleLinks", "reportFunctions.php", "isRelationLinkAvailable", $extraParams);
	$getRelateLinks = ($relationLinkAvailable !== false ? $relationLinkAvailable['getRelateLinks'] : false);
	$jumpedLinks = ($relationLinkAvailable !== false ? $relationLinkAvailable['jumpedLinks'] : 0);
	$linkColor = ($getRelateLinks ? $relationLinkAvailable['linkColor'] : null);
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	$auditedFields = ($auditedReport && ($jumpedLinks <= 1) ? 1 : 0);
	$moduleRelatedFields = asol_ReportsManagementFunctions::getRelatedFieldsSelectHtml($selectedDb, $selectedModule, $hasDeleted, $mainRelatedModule, $mainRelatedKey, $rhsKey, $getRelateLinks, $linkColor, $auditedFields, $treeMode, $subQueryMode);
	
	$returnedHtml = $moduleRelatedFields['html'];
	
	if (!$treeMode) {
		$returnedHtml .= '<script type="text/javascript">
			$("#addRelatedFieldsButton").attr("onClick", "'.$moduleRelatedFields['javascript'].'");
		</script>';
	}

} else if ($htmlTarget == 'checkMatchingDynamicTables') {

	$dynamicTableValue = html_entity_decode($_REQUEST['dynamicTableValue']);
	$usedDb = $_REQUEST['usedDb'];
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array(
		'isDynamic' => true,
		'dynamicTableValue' => $dynamicTableValue,
		'usedDb' => $usedDb,
	);
	$matchTablesResult = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "getMatchTablesResult", $extraParams);
	$matchedTables = ($matchTablesResult !== false ? $matchTablesResult : array());
	//***********************//
	//***AlineaSol Premium***//
	//***********************//

	$returnedHtml = json_encode($matchedTables);
	
} else if ($htmlTarget == 'getReportsByName') {
	
	$reportName = $_REQUEST['name'];
	$matchedReports = array();

	$reportList = asol_ReportsManagementFunctions::getFilteredReportList('-1', null, null, $reportName, null, '0');

	foreach ($reportList as $reportId => $reportName) {
		$matchedReports[] = array(
			'id' => $reportId,
			'name' => $reportName
		);
	}
	
	$returnedHtml = json_encode($matchedReports);
	
} else if ($htmlTarget == 'getReportAvailableItems') {
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array(
		'reportId' => $_REQUEST['id']
	);
	$metaAvailableItems = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "getReportMetaAvailableItems", $extraParams);
	$returnedHtml = ($metaAvailableItems !== false ? $metaAvailableItems : '');
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
} else if ($htmlTarget == 'getReportsFilters') {

	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array(
		'reportIds' => $_REQUEST['ids']
	);
	$metaFiltersPush = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "getReportsFilters", $extraParams);
	$returnedHtml = ($metaFiltersPush !== false ? $metaFiltersPush : '');
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
} else if ($htmlTarget == 'getReloadedQueryRows') {
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$reloadedQueryRows = asol_ReportsUtils::managePremiumFeature("reportActiveQueriesManagement", "reportFunctions.php", "getReloadedQueryRows", null);
	$returnedHtml = ($reloadedQueryRows !== false ? $reloadedQueryRows : '');
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
} else if ($htmlTarget == 'killSqlProcess') {
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array(
		'reportDb' => $_REQUEST['reportDb'],
		'dbNode' => $_REQUEST['dbNode'],
		'queryId' => $_REQUEST['queryId'],
		'waitForReturn' => true
	);
	$killSqlProcessResponse = asol_ReportsUtils::managePremiumFeature("reportActiveQueriesManagement", "reportFunctions.php", "killActiveSqlProcess", $extraParams);
	$returnedHtml = ($killSqlProcessResponse !== false ? $killSqlProcessResponse : '');
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
} else if ($htmlTarget == 'reportPlainTextName') {
	
	$reportRecord = $_REQUEST['record'];
	$returnedHtml = BeanFactory::getBean('asol_Reports', $reportRecord)->name;
	
} else if ($htmlTarget == '') {
	
	$returnedHtml = '';
	
}

echo $returnedHtml;


?>
