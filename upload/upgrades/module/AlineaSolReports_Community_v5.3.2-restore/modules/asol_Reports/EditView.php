<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

error_reporting(1);

global $timedate, $current_user, $db, $mod_strings, $app_strings, $app_list_strings, $beanList, $beanFiles, $sugar_config;

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");
require_once("modules/asol_Reports/include/manageReportsFunctions.php");

if (!asol_ReportsUtils::isCommonBaseInstalled()) {
	die("<font color='red'>".str_replace("%[v]", asol_ReportsUtils::$common_version, $mod_strings["LBL_REPORT_COMMON_BASE_NEEDED"])."</font>");
}

$focus = BeanFactory::getBean('asol_Reports', $_REQUEST['record']);
if (!asol_ReportsUtils::checkEditPermisions($focus)) {
	SugarApplication::redirect("index.php?module=asol_Reports&action=index");
}

asol_ReportsUtils::initReportsFunctions();


//***********************//
//***AlineaSol Premium***//
//***********************//
$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
//***********************//
//***AlineaSol Premium***//
//***********************//

if(!ACLController::checkAccess('asol_Reports', 'edit', true) || $readOnlyMode) {
	die("<font color='red'>".$app_strings["LBL_EMAIL_DELETE_ERROR_DESC"]."</font>"); 
}

$return_action = (isset($_REQUEST['return_action']) ? $_REQUEST['return_action'] : ""); //devuelve la accion a ejecutar




$newReportFlag = empty($_REQUEST['record']);

//**********************************//
//***Get Config_Override Features***//
//**********************************//
$translateFieldLabels = ((!isset($sugar_config['asolReportsTranslateLabels'])) || ($sugar_config['asolReportsTranslateLabels']) ? true : false);
$defaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"]) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us");
$mySQLinsecurityScope = (isset($sugar_config["asolReportsMySQLinsecuritySubSelectScope"]) ? $sugar_config["asolReportsMySQLinsecuritySubSelectScope"] : 1);
//**********************************//
//***Get Config_Override Features***//
//**********************************//


//***********************************//
//**Get Module Field Current Values**//
//***********************************//
$rhs_key = "";

$isMetaReport = ($newReportFlag && isset($_REQUEST['isMeta']) && $_REQUEST['isMeta'] === '1' ? '1' : $focus->is_meta);
$metaHtml = $focus->meta_html;

$report_name = (isset($_REQUEST['report_name'])) ? $_REQUEST['report_name'] : $focus->name;
$selectedModule = $focus->report_module;

$descriptionArray = unserialize(base64_decode($focus->description));
$internalDescription = $descriptionArray['internal'];
$publicDescription = $descriptionArray['public'];

if (isset($_REQUEST['assigned_user_id']))
	$assigned_user_id = $_REQUEST['assigned_user_id'];
else
	$assigned_user_id = (!empty($focus->assigned_user_id) ? $focus->assigned_user_id : $current_user->id);

if (isset($_REQUEST['assigned_user_name']))
	$assigned_user_name = $_REQUEST['assigned_user_name'];
else {
	$userNamequery = $db->query("SELECT user_name FROM users WHERE id='".$assigned_user_id."'");
	$userNameRow = $db->fetchByAssoc($userNamequery);
	$assigned_user_name = $userNameRow['user_name'];
}


$report_scope = $focus->report_scope;
$reportType = explode(':', $focus->report_type);

//***********************//
//***AlineaSol Premium***//
//***********************//
$disabledGeneralData = ($reportType[0] == 'webservice_remote');
//***********************//
//***AlineaSol Premium***//
//***********************//

$reportScheduledType = explode(':', $focus->report_scheduled_type);
$report_attachment_format = $focus->report_attachment_format;
$report_charts = $focus->report_charts;
$report_charts_engine = $focus->report_charts_engine;
$scheduled_images = $focus->scheduled_images;

$audited_report = $focus->audited_report;
$dynamic_tables = $focus->dynamic_tables;
$dynamic_sql = $focus->dynamic_sql;
$sel_autorefresh = 0;

$tmp_results_limit = explode('${dp}', $focus->results_limit);
$results_limit['operator'] = (!empty($focus->results_limit)) ? $tmp_results_limit[0] : "all";	
$results_limit['first_param'] = (isset($tmp_results_limit[1])) ? $tmp_results_limit[1] : "";
$results_limit['second_param'] = (isset($tmp_results_limit[2])) ? $tmp_results_limit[2] : "";
//***********************************//
//**Get Module Field Current Values**//
//***********************************//


//***************************//
//***Prepare Report Fields***//
//***************************//
$preparedFieldsArray = asol_ReportsManagementFunctions::prepareReportFields($focus->report_module, $focus->report_fields, $translateFieldLabels, $fieldsToBeRemoved);
$focus->report_fields = $preparedFieldsArray['json'];
$reportFieldsArray = $preparedFieldsArray['array'];

$reportTemplates = (isset($reportFieldsArray['tables'][0]['templates']) ? $reportFieldsArray['tables'][0]['templates'] : array());
$reportCss = $reportFieldsArray['tables'][0]['css'];
//***************************//
//***Prepare Report Fields***//
//***************************//


//****************************//
//***Prepare Report Filters***//
//****************************//
$preparedFiltersArray = asol_ReportsManagementFunctions::prepareReportFilters($focus->report_module, $focus->report_filters, $translateFieldLabels, $fieldsToBeRemoved);
$focus->report_filters = $preparedFiltersArray['json'];
$reportFiltersArray = $preparedFiltersArray['array'];
//****************************//
//***Prepare Report Filters***//
//****************************//


//***************************//
//***Prepare Report Charts***//
//***************************//
$focus->report_charts_detail = asol_ReportsManagementFunctions::prepareReportCharts($focus->report_charts_detail);
//***************************//
//***Prepare Report Charts***//
//***************************//


//**************************//
//***Prepare Report Tasks***//
//**************************//
$focus->report_tasks = asol_ReportsManagementFunctions::prepareReportTasks($focus->report_tasks, $focus->date_modified, $return_action);
//**************************//
//***Prepare Report Tasks***//
//**************************//


//Set configuration flags
$hasDeletedUsage = $reportFieldsArray['tables'][0]['config']['deletedUsage'];
$initialExecutionFlag = $reportFiltersArray['config']['initialExecution'];
//Set configuration flags


//****************************************//
//***Get Non Visible Fields for Reports***//
//****************************************//
$fieldsToBeRemoved = asol_ReportsManagementFunctions::getNonVisibleFields($focus->report_module, $hasDeletedUsage);
//****************************************//
//***Get Non Visible Fields for Reports***//
//****************************************//


//**************************//
//***Is Domains Installed***//
//**************************//
if (asol_CommonUtils::isDomainsInstalled()) {
	
	if ($return_action != "duplicate") {

		$DomainIdNameQuery = $db->query("SELECT asol_reports.asol_domain_id as domain_id, asol_domains.name as domain_name FROM asol_reports LEFT JOIN asol_domains ON asol_reports.asol_domain_id=asol_domains.id WHERE asol_reports.id='".$focus->id."'");
		$DomainIdNameRow = $db->fetchByAssoc($DomainIdNameQuery);

		if ((($current_user->is_admin) && (!empty($current_user->asol_domain_id))) || (!$current_user->is_admin)) {

			if ((in_array($_REQUEST['action'], array("DetailView", "EditView"))) && (isset($_REQUEST['update_domain'])) && ($_REQUEST['update_domain'] != $DomainIdNameRow['domain_id']))
				header("Location: index.php?module=".$_REQUEST['module']."&action=index&update_domain=".$current_user->asol_domain_id);

			if ((in_array($_REQUEST['action'], array("DetailView", "EditView"))) && ($current_user->asol_default_domain != $DomainIdNameRow['domain_id'])) {

				if (!empty($_REQUEST['record'])) {

					if (!isset($_REQUEST['update_domain'])) {

						header("Location: index.php?module=Home&action=changeDomain&domain_id=".$DomainIdNameRow['domain_id']."&domain_name=".$DomainIdNameRow['domain_name']."&return_module=".$_REQUEST['module']."&return_action=".$_REQUEST['action']."&return_record=".$_REQUEST['record']);
							
					} else {
							
						if (!isset($_REQUEST['is_update'])) {

							header("Location: index.php?module=".$_REQUEST['module']."&action=index");

						}

					}

				}
					
			}

		}

	}

}
//**************************//
//***Is Domains Installed***//
//**************************//


//*********************************//
//***Get External Databases Info***//
//*********************************//


//***********************//
//***AlineaSol Premium***//
//***********************//
$focus->alternative_database = (isset($_REQUEST['alternative_database'])) ? $_REQUEST['alternative_database'] : $focus->alternative_database;
$extraParams = array(
	'alternative_database' => $focus->alternative_database,
	'report_module' => $focus->report_module,
);

$externalDatabasesInfo = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalDatabasesInfo", $extraParams);

$alternativeDb = ($externalDatabasesInfo !== false) ? $externalDatabasesInfo['alternativeDb'] : null;
$selectedModule = (($externalDatabasesInfo !== false) && (!empty($externalDatabasesInfo['sel_altDbTable']))) ? $externalDatabasesInfo['sel_altDbTable'] : $selectedModule;
//***********************//
//***AlineaSol Premium***//
//***********************//
				

//*********************************//
//***Get External Databases Info***//
//*********************************//


//***************************//
//***Get External App Info***//
//***************************//
$reportTypeUri = (!empty($reportType[1])) ? $reportType[1] : "";
$reportScheduledTypeUri = (!empty($reportScheduledType[1])) ? $reportScheduledType[1] : "";

//***********************//
//***AlineaSol Premium***//
//***********************//
$extraParams = array(
	'reportScheduledTypeUri' => $reportScheduledTypeUri,
);

$externalApplicationInfo = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalApplicationInfo", $extraParams);
	
$externalApps = (!$externalApplicationInfo ? array() : $externalApplicationInfo['externalApps']);
$defaultExternalAppParams = (!$externalApplicationInfo ? '' : $externalApplicationInfo['defaultExternalAppParams']);

$sel_scheduledApp = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledApp']);
$sel_scheduledCustomUrl = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledCustomUrl']);
$sel_scheduledCustomFixedParams = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledCustomFixedParams']);
$sel_scheduledCustomParams = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledCustomParams']);
$sel_scheduledHeaders = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledHeaders']);
$sel_scheduledQuotes = (!$externalApplicationInfo ? null : $externalApplicationInfo['sel_scheduledQuotes']);
//***********************//
//***AlineaSol Premium***//
//***********************//

//***************************//
//***Get External App Info***//
//***************************//



//******************************//
//***Get Predefined Templates***//
//******************************//

//***********************//
//***AlineaSol Premium***//
//***********************//
require_once("modules/asol_Common/include/commonUtils.php");
$predefinedTemplatesResult = asol_CommonUtils::managePremiumFeature("templatesCommon", "commonFunctions.php", "getPredefinedTemplates", array('json_encode' => false, 'currentModule' => null/*$selectedModule*/));
$predefinedTemplates = ($predefinedTemplatesResult !== false ? $predefinedTemplatesResult : null);
//***********************//
//***AlineaSol Premium***//
//***********************//

//******************************//
//***Get Predefined Templates***//
//******************************//



//*****************************************//
//***Manage Duplicate Action For Reports***//
//*****************************************//
if ($return_action == "duplicate") {
	$focus->id = "";
	
	$report_scope = ($current_user->is_admin) ? "private" : (strpos($report_scope, 'role') !== false) ? str_replace("role", "private", $report_scope) : $report_scope;
	$assigned_user_id = $current_user->id;
	$assigned_user_name = $current_user->user_name;
}
//*****************************************//
//***Manage Duplicate Action For Reports***//
//*****************************************//


//***********************//
//***AlineaSol Premium***//
//***********************//
$hasPremiumFeatures = asol_ReportsUtils::managePremiumFeature("managePremiumFeature", "reportFunctions.php", "hasPremiumFeatures", null);
//***********************//
//***AlineaSol Premium***//
//***********************//
							

//****************************//
//***Display Edition Screen***//
//****************************//
//Calculate SubSelectQueries Scope
$mySQLcheckInsecurity = false;
if ((($mySQLinsecurityScope === 1) && (!$current_user->is_admin)) || ($mySQLinsecurityScope === 2)) {
	$mySQLcheckInsecurity = true;
} else if (($mySQLinsecurityScope === 3) && (!$current_user->is_admin)) {
	$userRoles = $_SESSION['asolUserRoles'] = ((isset($_SESSION['asolUserRoles'])) && (!empty($_SESSION['asolUserRoles']))) ? $_SESSION['asolUserRoles'] : ACLRole::getUserRoles($current_user->id);
	foreach ($userRoles as $userRole) {
		if (!in_array($userRole, $sugar_config["asolReportsMySQLinsecuritySubSelectRoles"])) {
			$mySQLcheckInsecurity = true;
			break;
		}
	}
}
//Calculate SubSelectQueries Scope

//Calculate PreviewExecution Scope
$hasPreviewExecution = asol_CommonUtils::hasPreviewExecution('asolReports');
//Calculate PreviewExecution Scope

$PHPcheckInsecurity = ($current_user->is_admin) ? false : true;


$availablePhpFunctions = (isset($sugar_config['asolReportsPhpAllowedFunctions'])) ? $sugar_config['asolReportsPhpAllowedFunctions'] : array(); 
$availablePhpFunctionsJson = htmlentities(json_encode($availablePhpFunctions));


require_once("modules/asol_Reports/include/EditViewHttpSave.php");
//****************************//
//***Display Edition Screen***//
//****************************//

?>
