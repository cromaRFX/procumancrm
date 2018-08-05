<?php

/**
 * @author AlineaSol
 */
class asol_ControllerList {
	
	/**
	 *
	 * @abstract Displays List View
	 */
	static public function display($selected, $justList = false) {
		
		require_once("modules/asol_Common/include/commonUtils.php");
		require_once("modules/asol_Reports/include/server/reportsUtils.php");
		require_once("modules/asol_Reports/include/manageReportsFunctions.php");
		
		
		global $current_user, $mod_strings, $app_strings, $timedate, $app_list_strings, $db, $sugar_config;
		
		if(!ACLController::checkAccess('asol_Reports', 'list', true)) {
			die("<font color='red'>".$app_strings["LBL_EMAIL_DELETE_ERROR_DESC"]."</font>");
		}
		
		error_reporting(1); //E_ERROR
		
		
		//*******Reports User Config*******//
		$userConfiguration = asol_CommonUtils::getUserConfiguration();
		$calendarType = $userConfiguration['calendarType'];
		$entriesPerPage = $userConfiguration['entriesPerPage'];
		
		
		//*************************//
		//***Search Form Process***//
		//*************************//
		$name = $_SESSION['asol_Reports']['filters']['name'] = (isset($_REQUEST['filters']['name']) ? $_REQUEST['filters']['name'] : (is_object($_SESSION['asol_Reports']['filters']['name']) ? "" : $_SESSION['asol_Reports']['filters']['name']));
		$database = $_SESSION['asol_Reports']['filters']['database'] = (isset($_REQUEST['filters']['database']) ? $_REQUEST['filters']['database'] : (is_object($_SESSION['asol_Reports']['filters']['database']) ? "" : $_SESSION['asol_Reports']['filters']['database']));
		$module = $_SESSION['asol_Reports']['filters']['module'] = (isset($_REQUEST['filters']['module']) ? $_REQUEST['filters']['module'] : (is_object($_SESSION['asol_Reports']['filters']['module']) ? "" : $_SESSION['asol_Reports']['filters']['module']));
		$assigned_user_id = $_SESSION['asol_Reports']['filters']['assigned_user_id'] = (isset($_REQUEST['filters']['assigned_user_id']) ? $_REQUEST['filters']['assigned_user_id'] : (is_object($_SESSION['asol_Reports']['filters']['assigned_user_id']) ? "" : $_SESSION['asol_Reports']['filters']['assigned_user_id']));
		$assigned_user_name = $_SESSION['asol_Reports']['filters']['assigned_user_name'] = (isset($_REQUEST['filters']['assigned_user_name']) ? $_REQUEST['filters']['assigned_user_name'] : (is_object($_SESSION['asol_Reports']['filters']['assigned_user_name']) ? "" : $_SESSION['asol_Reports']['filters']['assigned_user_name']));
		$meta = $_SESSION['asol_Reports']['filters']['meta'] = (isset($_REQUEST['filters']['meta']) ? $_REQUEST['filters']['meta'] : (is_object($_SESSION['asol_Reports']['filters']['meta']) ? "" : $_SESSION['asol_Reports']['filters']['meta']));
		$scope = $_SESSION['asol_Reports']['filters']['scope'] = (isset($_REQUEST['filters']['scope']) ? $_REQUEST['filters']['scope'] : (is_object($_SESSION['asol_Reports']['filters']['scope']) ? "" : $_SESSION['asol_Reports']['filters']['scope']));
		$type = $_SESSION['asol_Reports']['filters']['type'] = (isset($_REQUEST['filters']['type']) ? $_REQUEST['filters']['type'] : (is_object($_SESSION['asol_Reports']['filters']['type']) ? "" : $_SESSION['asol_Reports']['filters']['type']));
		
		$sort_field = $_SESSION['asol_Reports']['position']['field'] = (isset($_REQUEST['position']['field']) ? $_REQUEST['position']['field'] : (is_object($_SESSION['asol_Reports']['position']['field']) ? "" : $_SESSION['asol_Reports']['position']['field']));
		$sort_direction = $_SESSION['asol_Reports']['position']['direction'] = (isset($_REQUEST['position']['direction']) ? $_REQUEST['position']['direction'] : (is_object($_SESSION['asol_Reports']['position']['direction']) ? "" : $_SESSION['asol_Reports']['position']['direction']));
		$page_number = (isset($_REQUEST['position']['page']) ? $_REQUEST['position']['page'] : 0);
		//*************************//
		//***Search Form Process***//
		//*************************//
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$alternativeDb = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "fillExternalDatabasesArray", null);
		$alternativeDb = (!$alternativeDb) ? array() : $alternativeDb;

		$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		
		//***Get allowed modules for current user***//
		$sqlModules = "";
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);
		
		$nativeModules = array();
		foreach ($allowedModules as $key=>$isAllowed) {
			if ($isAllowed) {
				$nativeModules[$key] = (isset($app_list_strings['moduleList'][$key])) ? $app_list_strings['moduleList'][$key] : $key;
				$sqlModules .= "'".$key."',";
			}
		}
		
		asort($nativeModules);
		$sqlModules = substr($sqlModules, 0, -1).",''";
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$sqlExternalModules = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalDatabasesExtendedWhereQuery", array('report_database' => $database));
		$sqlExternalModules = (!$sqlExternalModules) ? " )" : $sqlExternalModules;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		
		$sql = "SELECT asol_reports.*, users.user_name";
		if (asol_CommonUtils::isDomainsInstalled()) {
			$sql .= ", asol_domains.name as domain_name";
		}
		$sqlFrom = " FROM asol_reports";
		$sqlJoin = " LEFT JOIN users ON asol_reports.assigned_user_id=users.id";
		
		
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		if (asol_CommonUtils::isDomainsInstalled()) {
			$sqlJoin .= " LEFT JOIN asol_domains ON asol_reports.asol_domain_id=asol_domains.id";
		}
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		
		$sqlWhere = " WHERE asol_reports.deleted = 0 AND asol_reports.name LIKE '%".$name."%' ";
		if ($meta !== ''  && $meta !== null) {
			$sqlWhere .= " AND (asol_reports.is_meta LIKE ".$meta.")";
		}
		if (!isset($database) || $database === "") {
			$sqlWhere .= " AND (asol_reports.alternative_database IS NULL OR (asol_reports.alternative_database LIKE '%%'))";
		} else {
			$sqlWhere .= " AND (asol_reports.alternative_database LIKE '".$database."')";
		}
		if (!isset($module) || $module === "") {
			$sqlWhere .= " AND (asol_reports.report_module IS NULL OR (asol_reports.report_module LIKE '%%' AND (asol_reports.report_module IN (".$sqlModules.")))";
			$sqlWhere .= $sqlExternalModules;
		} else {
			$sqlWhere .= " AND (asol_reports.report_module LIKE '".($database === "-1" ? $module : "%.".$module." (External_Table)")."')";
		}
		
		$sqlWhere .= " AND asol_reports.report_scope LIKE '".$scope."%'";
		
		$idsRoles = array();
		
		if (!$current_user->is_admin) {
		
			$queryUserRoles = $db->query("SELECT DISTINCT role_id FROM acl_roles_users WHERE user_id='".$current_user->id."' AND deleted=0");
			while($queryRow = $db->fetchByAssoc($queryUserRoles))
				$idsRoles[] = $queryRow['role_id'];
		
			$sqlWhere .= " AND (asol_reports.report_scope = 'public' OR asol_reports.assigned_user_id = '".$current_user->id."' OR asol_reports.created_by = '".$current_user->id."'";
		
			$sqlWhereRoles = " OR ((asol_reports.report_scope LIKE 'role%') AND (";
			foreach ($idsRoles as $idRole)
				$sqlWhereRoles .= " asol_reports.report_scope LIKE '%".$idRole."%' OR";
			$sqlWhereRoles = substr($sqlWhereRoles, 0, -2)."))";
		
			if (empty($idsRoles))
				$sqlWhereRoles = "";
		
			$sqlWhere .= $sqlWhereRoles." )";
		
		}
		
		if (!empty($type)) {
			$sqlWhere .= "AND asol_reports.report_type LIKE '".$type."%' ";
		}
		
		
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		if (asol_CommonUtils::isDomainsInstalled()) {
		
			if ((!$current_user->is_admin) || (($current_user->is_admin) && (!empty($current_user->asol_default_domain)))){
		
				require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
		
				$domainsBean = BeanFactory::getBean('asol_Domains', $current_user->asol_default_domain);
		
				if ($domainsBean->asol_domain_enabled) {
		
					$sqlWhere .= " AND ( (asol_reports.asol_domain_id='".$current_user->asol_default_domain."')";
		
					if ($current_user->asol_only_my_domain == 0) {
							
						//asol_domain_child_share_depth
						$sqlWhere .= asol_manageDomains::getChildShareDepthQuery('asol_reports.');
						//asol_domain_child_share_depth
		
						//asol_multi_create_domain
						$sqlWhere .= asol_manageDomains::getMultiCreateQuery('asol_reports.');
						//asol_multi_create_domain
		
						//***asol_publish_to_all***//
						$sqlWhere .= asol_manageDomains::getPublishToAllQuery('asol_reports.');
						//***asol_publish_to_all***//
		
						//***asol_child_domains***//
						$sqlWhere .= asol_manageDomains::getChildHierarchyQuery('asol_reports.');
						//***asol_child_domains***//
		
					} else {
							
						$sqlWhere .= ") ";
		
					}
		
				} else {
		
					$sqlWhere .= " AND (1!=1) ";
		
				}
		
			}
		
		}
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		
		$sqlJoinWhere = " AND users.user_name LIKE '%".$assigned_user_name."%'";
		
		$rs = asol_Reports::getSelectionResults("SELECT COUNT(DISTINCT asol_reports.id) AS total FROM asol_reports".$sqlJoin.$sqlWhere.$sqlJoinWhere, null, false);
		
		$total_entries = $rs[0]['total'];
		
		
		$sqlOrder = " ORDER BY asol_reports.name ASC";
		
		if (!empty($sort_field)){
		
			$sort_direction = (empty($sort_direction)) ? "ASC" : $sort_direction;
			$sqlOrder = " ORDER BY ".$sort_field." ".$sort_direction." ";
		
		}
		
		$sqlLimit = " LIMIT ".$entriesPerPage*$page_number.",".$entriesPerPage;
		
		
		$rs = asol_Reports::getSelectionResults($sql.$sqlFrom.$sqlJoin.$sqlWhere.$sqlJoinWhere.$sqlOrder.$sqlLimit, null, false);
		
				
		$availableColumns = array("name", "report_module", "last_run", "date_modified", "user_name", "report_scope", "report_type");
		$availableLabels = array("LBL_REPORT_NAME", "LBL_REPORT_MODULE", "LBL_REPORT_LAST_RUN", "LBL_REPORT_LAST_UPDATE", "LBL_REPORT_ASSIGNED_USER", "LBL_REPORT_SCOPE", "LBL_REPORT_TYPE");
		$availableWidths = array("20", "10", "10", "10", "10", "10", "10");
			
		if (asol_CommonUtils::isDomainsInstalled()) {
			$availableColumns[] = "asol_domains.name";
			$availableLabels[] = "LBL_REPORT_DOMAIN";
			$availableWidths[] = "10";
		}
		

		$rows = array();
		
		foreach($rs as $value) {
	
			$currentRow = array();
				
			$currentRow['id'] = $value['id'];
			$currentRow['name'] = $value['name'];
			
			$reportType = explode(':', $value['report_type']);
			$currentType = $reportType[0];
			
			$auditTable = ($value['audited_report'] == '1' ? ' ('.$mod_strings['LBL_REPORT_AUDIT_TABLE'].')' : '');
			if ($value['dynamic_tables']=== '1') {
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'isDynamic' => true,
					'dynamicTableValue' => $value['dynamic_sql'],
					'usedDb' => $value["alternative_database"],
				);
				$dynamicTablesResult = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "getDynamicTablesResult", $extraParams);
				$dynamic_table = ($dynamicTablesResult !== false ? $dynamicTablesResult : "");
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$currentRow['module'] = $dynamic_table.$auditTable;
			} else {
				$currentRow['module'] = (isset($app_list_strings['moduleList'][$value['report_module']])) ? $app_list_strings['moduleList'][$value['report_module']].$auditTable : $value['report_module'].$auditTable;
			}
			
			if ((!empty($value['date_modified'])) && ($value['date_modified'] != '0000-00-00 00:00:00')) {
				$value['date_modified'] = $timedate->handle_offset($value['date_modified'], $timedate->get_db_date_time_format());
				if ($calendarType == 'persian') {
					$currentRow['date_modified'] = asol_CommonUtils::dateToPersian($value['date_modified'], false, $timedate->get_date_time_format());
				} else {
					$currentRow['date_modified'] = $timedate->swap_formats($value['date_modified'], $timedate->get_db_date_time_format(), $timedate->get_date_time_format());
				}
			}
			
			$currentRow['assigned_user_id'] = $value['assigned_user_id'];
			$currentRow['user_name'] = $value['user_name'];

			if ((!empty($value['last_run'])) && ($value['last_run'] != '0000-00-00 00:00:00')) {
				$value['last_run'] = $timedate->handle_offset($value['last_run'], $timedate->get_db_date_time_format());
				if ($calendarType == 'persian') {
					$currentRow['last_run'] = asol_CommonUtils::dateToPersian($value['last_run'], false, $timedate->get_date_time_format());
				} else {
					$currentRow['last_run'] = $timedate->swap_formats($value['last_run'], $timedate->get_db_date_time_format(), $timedate->get_date_time_format());
				}
			}
			
			$scopeExploded = explode('${dp}', $value['report_scope']);
			$scopeLabels = array('private' => 'LBL_REPORT_PRIVATE', 'public' => 'LBL_REPORT_PUBLIC', 'role' => 'LBL_REPORT_ROLE');
			$currentRow['scope'] = $mod_strings[$scopeLabels[$scopeExploded[0]]];
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$isWebServiceRemote = ($currentType === 'webservice_remote');
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			$currentRow['just_modify'] = $isWebServiceRemote;
			$currentRow['domain_modifiable'] = (asol_CommonUtils::isDomainsInstalled() ? asol_CommonUtils::domainCanModifyElement($value['asol_domain_id']) : true);
			$currentRow['user_modifiable'] = asol_CommonUtils::userCanModifyElement($value['created_by'], $value['assigned_user_id']);
			$currentRow['role_modifiable'] = asol_ReportsUtils::roleCanModifyReport($value['report_scope'], $idsRoles);
				
			if (asol_CommonUtils::isDomainsInstalled()) {
				$currentRow['domain_name'] = $value["domain_name"];
			}
					
			
			$actualDate = gmdate("Y-m-d");
			$taskColorState = "";
			
			$scheduledTasks = json_decode(urldecode($value['report_tasks']), true);
			foreach ($scheduledTasks['data'] as $currentTask) {
					
				if (in_array($currentType, array("scheduled", "stored"))){
						
					if ((($currentTask['status'] == "inactive") || ($currentTask['end'] < $actualDate && $currentTask['end'] != '')) && (($taskColorState == "RED") || ($taskColorState == ""))) {
						$taskColorState = "RED";
					}
					if ((($currentTask['status'] == "active") || ($currentTask['end'] >= $actualDate || $currentTask['end'] == '')) && (($taskColorState == "GREEN") || ($taskColorState == ""))) {
						$taskColorState = "GREEN";
					}
					if ((($currentTask['status'] == "inactive") || ($currentTask['end'] < $actualDate && $currentTask['end'] != '')) && ($taskColorState == "GREEN")) {
						$taskColorState = "ORANGE";
					}
					if ((($currentTask['status'] == "active") && ($currentTask['end'] >= $actualDate || $currentTask['end'] == '')) && ($taskColorState == "RED")) {
						$taskColorState = "ORANGE";
					}
						
				}
			
			}
			
			if ($currentType == "manual") {
					
				$currentRow['type'] = $mod_strings['LBL_REPORT_MANUAL'];
				$currentRow['execute'] = true; //Execute Report
				$currentRow['external_url'] = ""; //url to execute report
					
			} else if ($currentType == "internal") {
					
				$currentRow['type'] = $mod_strings['LBL_REPORT_INTERNAL'];
				$currentRow['execute'] = false; //Execute Report
				$currentRow['external_url'] = ""; //url to execute report
					
			} else if ($currentType == "external") {
					
				$currentRow['type'] = $mod_strings['LBL_REPORT_EXTERNAL'];
				$currentRow['execute'] = false; //Execute Report
				$currentRow['external_url'] = isset($_SERVER['SCRIPT_URI']) ? $_SERVER['SCRIPT_URI']."?entryPoint=viewReport&module=asol_Reports&sourceCall=external&useExternalCss=false&record=".$currentRow['id'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?entryPoint=viewReport&module=asol_Reports&sourceCall=external&useExternalCss=false&record=".$currentRow['id']; //url to execute report
					
			} else if (in_array($currentType, array("webservice_source", "webservice_remote"))) {
						
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$webServiceReportTypeIndexPresentation = asol_ReportsUtils::managePremiumFeature("webServiceReports", "reportFunctions.php", "getWebServiceReportTypeIndexPresentation", array('type' => $currentType));
				if ($webServiceReportTypeIndexPresentation !== false) {
					$currentRow['type'] = $webServiceReportTypeIndexPresentation['type'];
					$currentRow['execute'] = $webServiceReportTypeIndexPresentation['execute'];
					$currentRow['external_url'] = $webServiceReportTypeIndexPresentation['external_url'];
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			} else {
				
				$currentRow['type'] = '<font color="'.$taskColorState.'">'.($currentType == "scheduled" ? $mod_strings['LBL_REPORT_SCHEDULED'] : $mod_strings['LBL_REPORT_STORED']).'</font>';
				$currentRow['execute'] = true; //Execute Report
				$currentRow['external_url'] = ""; //url to execute report
				
			}
			
			$rows[] = $currentRow;
			
		}
		
	
		//Obtenemos los valores relaciones con el paginado
		$data['total_entries'] = $total_entries;
		$data['entries_per_page'] = $entriesPerPage;
		$data['current_entries'] = count($rs);
		$data['page_number'] = $page_number;
		$data['num_pages'] = (($total_entries % $entriesPerPage) != 0) ? floor($total_entries / $entriesPerPage) : floor($total_entries / $entriesPerPage) -1 ;
		
		$prev_number_page = ($data["page_number"] > 0 ? $data["page_number"] - 1 : 0);
		$next_number_page = ($data['page_number'] < $data['num_pages'] ? $data['page_number'] + 1 : $data['num_pages']);
		$initial_result = ($data["total_entries"] != 0 ? ($data["page_number"] * $data["entries_per_page"]) + 1 : ($data["page_number"] * $data["entries_per_page"]));
		$final_result = (($data["entries_per_page"] * $data["page_number"]) + $data["current_entries"]);
		
		
		$REPORTS_ACL_VIEW = ACLController::checkAccess('asol_Reports', 'view', true);
		$REPORTS_ACL_EDIT = ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode;
		$REPORTS_ACL_DELETE = ACLController::checkAccess('asol_Reports', 'delete', true) && !$readOnlyMode;
		$REPORTS_ACL_IMPORT = ACLController::checkAccess('asol_Reports', 'import', true) && !$readOnlyMode;
		$REPORTS_ACL_EXPORT = ACLController::checkAccess('asol_Reports', 'export', true) && !$readOnlyMode;
		
		
		if ($justList) {
				
			ob_start ();
			include('modules/asol_Reports/include/server/views/partials/listViewTable.php');
			$html = ob_get_contents();
			ob_end_clean();
				
			return $html;
				
		} else {
			require_once("modules/asol_Reports/include/server/views/viewList.php");
		}

	}
	
}
