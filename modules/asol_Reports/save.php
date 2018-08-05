<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");
require_once("modules/asol_Reports/include/manageReportsFunctions.php");
require_once("modules/asol_Reports/include/generateReportsFunctions.php");

global $db, $timedate, $current_user, $sugar_config;


$focus = BeanFactory::getBean('asol_Reports', $_REQUEST['record']);

//Si es un nuevo report, no se le pasa el id, si ya existe se le pasa el id para realizar el update del registro

$delete = (!isset($_REQUEST['delete'])) ? false : ($_REQUEST['delete'] == "true") ? true : false;

if (!$delete) {
		
	$focus->name = (isset($_REQUEST['report_name']) ? $_REQUEST['report_name'] : $focus->name);
	
	$focus->dynamic_tables = ($_REQUEST['dynamic_tables'] == 1 ? 1 : 0);
	$focus->dynamic_sql = $_REQUEST['dynamic_sql'];
	
	$focus->assigned_user_id = $_REQUEST['assigned_user_id'];
	$focus->audited_report = (!isset($_REQUEST['audited_report'])) ? 0 : ($_REQUEST['audited_report'] == 1) ? 1 : 0;

	$internalDescription = trim($_REQUEST['internal_description']);
	$publicDescription = trim($_REQUEST['public_description']);
	$descriptionArray = array(
		'internal' => (empty($internalDescription) ? null : $internalDescription),
		'public' =>	(empty($publicDescription) ? null : $publicDescription),
	);
	$descriptionSerialized = base64_encode(serialize($descriptionArray));
	$focus->description = ((isset($_REQUEST['internal_description']) && isset($_REQUEST['public_description'])) ? $descriptionSerialized : $focus->description);
	
	$focus->internal_id = (empty($focus->internal_id) ? create_guid() : $focus->internal_id);
	
	$reportScopeRole = (isset($_REQUEST['report_scope_role'])) ? $_REQUEST['report_scope_role'] : array();
	$focus->report_scope = (isset($_REQUEST['report_scope']) ? ($_REQUEST['report_scope'] == "public" ? $_REQUEST['report_scope'] : $_REQUEST['report_scope'].'${dp}'.implode('${comma}', $reportScopeRole)) : $focus->report_scope);

	$focus->scheduled_images = (isset($_REQUEST['scheduled_images']) ? 1 : 0);
	
	$focus->is_meta = (isset($_REQUEST['is_meta']) ? $_REQUEST['is_meta'] : $focus->is_meta);
	$focus->meta_html = ($focus->is_meta == '1' ? $_REQUEST['metaHtml'] : null);

	$reportFieldsJson = json_decode(html_entity_decode($_REQUEST['selected_fields']), true);
	$focus->report_fields = base64_encode(serialize($reportFieldsJson));
	
	if ($focus->is_meta == '0') {
	
		$focus->alternative_database = (isset($_REQUEST['alternative_database']) ? $_REQUEST['alternative_database'] : $focus->alternative_database);
		$focus->report_module = (isset($_REQUEST['alternative_database']) ? ($_REQUEST['alternative_database'] >= 0 ? ($focus->dynamic_tables === 1 ? '' : $sugar_config["asolReportsAlternativeDbConnections"][$_REQUEST['alternative_database']]["asolReportsDbName"].".".$_REQUEST['alternative_database_table']." (External_Table)") : $_REQUEST['report_module']) : $focus->report_module);
		
		$focus->report_charts = (isset($_REQUEST['report_charts']) ? $_REQUEST['report_charts'] : $focus->report_charts);
		$focus->report_charts_engine = (isset($_REQUEST['report_charts_engine']) ? $_REQUEST['report_charts_engine'] : $focus->report_charts_engine);

		$reportChartsJson = json_decode(html_entity_decode($_REQUEST['selected_charts']), true);
		$focus->report_charts_detail = base64_encode(serialize($reportChartsJson));
		
		$focus->row_index_display = ($_REQUEST['row_index_display'] == 1 ? 1 : 0);
		$focus->results_limit = $_REQUEST['results_limit'];
	
		//formateo las fechas de los filtros
		$filtersArray = ($_REQUEST['selected_filters'] == '${v2.2.0}') ? array() : json_decode(html_entity_decode($_REQUEST['selected_filters']), true);
		asol_ReportsGenerationFunctions::convertDateFiltersToDatabaseFormat($filtersArray);
		$filtersJson = empty($filtersArray) ? '${v2.2.0}' : base64_encode(serialize($filtersArray));
		
		$focus->report_filters = $filtersJson;
	
	}
	
	$reportType = $_REQUEST['report_type'];
	$reportTypeUri = $_REQUEST['report_type_uri'];
	$reportScheduledType = $_REQUEST['report_scheduled_type'];
	$scheduledTypeInfo = $_REQUEST['report_scheduled_type_info'];
	$formatFileConfig = $_REQUEST['report_format_file_config'];
	
	if (!empty($reportTypeUri)) {
		
		if (asol_CommonUtils::isDomainsInstalled()) {
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
			$domainIdsToDelete = asol_manageDomains::getDomainPublicationDiff('asol_reports', $focus->id, false);
		}
		
		$domainIdsToDelete = ($reportType !== 'stored') ? null : $domainIdsToDelete;
		$reportTypeUri = asol_ReportsManagementFunctions::cleanUpStoredReportFiles($reportTypeUri, $domainIdsToDelete);
		
	}

	$focus->report_type = ((!empty($reportTypeUri)) && ($reportType == 'stored') ? $reportType.':'.$reportTypeUri : $reportType);
	$focus->report_scheduled_type = ($reportType == 'scheduled' ? (!empty($scheduledTypeInfo) ? $reportScheduledType.':'.$scheduledTypeInfo : $reportScheduledType) : null);
	$focus->report_attachment_format = (isset($_REQUEST['report_attachment_format']) ? $_REQUEST['report_attachment_format'] : $focus->report_attachment_format).(!empty($formatFileConfig) ? ':'.$formatFileConfig : '');
	
	//reformatear la fecha de finalizacion de las areas progrmadas al formato de la BDD
	$scheduledTasks = json_decode(rawurldecode($_REQUEST['selected_tasks']), true);
	$userTZ = $current_user->getPreference("timezone");
	$phpDateTime = new DateTime(null, new DateTimeZone($userTZ));
	$hourOffset = $phpDateTime->getOffset()*-1;
	
	foreach ($scheduledTasks as & $currentTask) {
		
		if ((!$timedate->check_matching_format($currentTask['end'], $GLOBALS['timedate']->dbDayFormat)) && ($currentTask['end'] != "")) {
			$currentTask['end'] = $timedate->swap_formats($currentTask['end'], $timedate->get_date_format(), $GLOBALS['timedate']->dbDayFormat );
		}
		
		$currentTime = explode(":", $currentTask['time']);
		$currentTask['time'] = date("H:i", @mktime($currentTime[0], $currentTime[1], 0, date("m"), date("d"), date("Y"))+$hourOffset);
		
	}
	
	$scheduledTasksData = array(
		'data' => $scheduledTasks,
		'offset' => $phpDateTime->getOffset()
	);
	
	$focus->report_tasks = urlencode(json_encode($scheduledTasksData));
	$focus->email_list = $_REQUEST['email_list'];

	if (asol_CommonUtils::isDomainsInstalled()) {
		$focus->asol_domain_id = $_REQUEST['asol_domain_id'];
	}
	
} else {
	
	$focus->id = $_REQUEST['record'];
	$focus->deleted = 1;

}


$reportId = $focus->save();


//*************************//
//***Publication Domains***//
//*************************//
if (asol_CommonUtils::isDomainsInstalled()) {
	require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
	asol_manageDomains::managePublicationDomainRequest('asol_domain_published_mode', 'asol_domain_child_share_depth', 'asol_multi_create_domain', 'asol_published_domain');
}
//*************************//
//***Publication Domains***//
//*************************//


//Redireccionar a la pantalla 'search.php'
if (isset($_POST['return_module']) && $_POST['return_module'] != "")
	$return_module = $_POST['return_module'];
else 
	$return_module = "asol_Reports";
	
if (isset($_POST['return_action']) && $_POST['return_action'] != "")
	$return_action = $_POST['return_action'];
else 
	$return_action = "index";
	
if (isset($_POST['return_id']) && $_POST['return_id'] != "")
	$return_id = $_POST['return_id'];

asol_ReportsUtils::reports_log('asol', 'Saved record with id of '.$reportId, __FILE__, __METHOD__, __LINE__);

header("Location: index.php?action=".$return_action."&module=".$return_module);

?>