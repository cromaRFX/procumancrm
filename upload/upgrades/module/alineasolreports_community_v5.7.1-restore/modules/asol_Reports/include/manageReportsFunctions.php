<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once("modules/asol_Common/include/commonUtils.php");
require_once("modules/asol_Reports/include/server/reportsUtils.php");

global $db;

class asol_ReportsManagementFunctions {
	
	static public function getFilteredReportList($sDatabase = '-1', $sModule = null, $sScope = null, $sName = null, $sUser = null, $sMeta = null) {
				    
        global $db, $current_user;
		
		$sqlAllowedModules = "";
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);
		
		foreach ($allowedModules as $key=>$isAllowed) {
			if ($isAllowed) {
				$sqlAllowedModules .= "'".$key."',";
			}
		}
		
		$sqlAllowedModules = substr($sqlAllowedModules, 0, -1).",''";
		
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'report_database' => $sDatabase,
		);
		$sqlExternalModules = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalDatabasesExtendedWhereQuery", $extraParams);
		$sqlExternalModules = (!$sqlExternalModules) ? " )" : $sqlExternalModules;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
				
		if ($sDatabase != '-1') {
			$sModule = '';
			$sqlAllowedModules = '\'\'';
		}

	
		$sqlReport = "SELECT id, name FROM asol_reports WHERE deleted=0";
		$sqlReport .= (isset($sName) ? " AND name LIKE '%".$sName."%'" : "");
		$sqlReport .= (isset($sMeta) ? " AND is_meta = ".$sMeta : "");
		$sqlReport .= (isset($sModule) ? " AND report_module LIKE '%".$sModule."%'" : "");
		$sqlReport .= " AND ((asol_reports.report_module IS NULL OR (asol_reports.report_module IN (".$sqlAllowedModules.")".$wsReportQueryExt."))";
		
		$sqlReport .= $sqlExternalModules;

		$sqlReport .= (isset($sScope) ? " AND report_scope LIKE '%".$sScope."%'" : "");
		
		
	    if (!$current_user->is_admin) {
	
			$idsRoles = array();
			$queryUserRoles = $db->query("SELECT DISTINCT role_id FROM acl_roles_users WHERE user_id='".$current_user->id."' AND deleted=0");
			while($queryRow = $db->fetchByAssoc($queryUserRoles))
				$idsRoles[] = $queryRow['role_id'];
				
			$sqlReport .= " AND (report_scope = 'public' OR asol_reports.assigned_user_id = '".$current_user->id."' OR asol_reports.created_by = '".$current_user->id."'";
		
			$sqlWhereRoles = " OR (";
			foreach ($idsRoles as $idRole)
				$sqlWhereRoles .= " report_scope LIKE '%".$idRole."%' OR";
			$sqlWhereRoles = substr($sqlWhereRoles, 0, -2).")";
			
			if (empty($idsRoles))
				$sqlWhereRoles = "";
				
			$sqlReport .= $sqlWhereRoles." )";
			
		}
		

		//**************************//
		//***Is Domains Installed***//
		//**************************//
		if (asol_CommonUtils::isDomainsInstalled()) {
		
			if ((!$current_user->is_admin) || (($current_user->is_admin) && (!empty($current_user->asol_default_domain)))){
				
				$domainsBean = BeanFactory::getBean('asol_Domains', $current_user->asol_default_domain);
				
				if ($domainsBean->asol_domain_enabled) {

					$sqlReport .= " AND ( (asol_reports.asol_domain_id='".$current_user->asol_default_domain."')";
				
					if ($current_user->asol_only_my_domain == 0) {
					
						//asol_domain_child_share_depth
						$sqlReport .= asol_manageDomains::getChildShareDepthQuery('asol_reports.');
						//asol_domain_child_share_depth
						
						//asol_multi_create_domain 
						$sqlReport .= asol_manageDomains::getMultiCreateQuery('asol_reports.');
						//asol_multi_create_domain 
						
						//***asol_publish_to_all***//
						$sqlReport .= asol_manageDomains::getPublishToAllQuery('asol_reports.');
						//***asol_publish_to_all***//
			
					}

					$sqlReport .= ") ";
					
				} else {
					
					$sqlReport .= " AND (1!=1) ";
				
				}

			}
			
		}
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		
		
		$sqlReport .= " ORDER BY date_entered ASC";

		$reportsArray = array();
		
		$queryReport = $db->query($sqlReport);
		while($queryRow = $db->fetchByAssoc($queryReport))
			$reportsArray[] = $queryRow;
		
		foreach ($reportsArray as $value){
			$reportList[$value['id']] = $value['name'];
		}
		
		return $reportList;
		
	}
	
	static public function getFilteringDialogDiv() {

		global $mod_strings;

		return '
		<div id="asolReportFilteringDiv" class="filteringDiv" style="display: none">
			<div class="displayMsg filteringDiv">'.$mod_strings['LBL_REPORT_ADD_TO_FILTER_PANEL'].'</div>
			<div class="filteringDiv">
				<input id="whereButton" class="filteringDiv" type="button" value="'.$mod_strings['LBL_REPORT_WHERE_FILTERS'].'">
				<input id="havingButton" class="filteringDiv" type="button" value="'.$mod_strings['LBL_REPORT_HAVING_FILTERS'].'">
			</div>
		</div>';
		
	}
	
	static public function getVariableClipboardCopyDiv() {
		
		return '
		<script type="text/javascript">
			var clipboardDialogClosed = true;
		</script>
		<div id="variableClipboardCopyDiv" style="display: none">
			<table cellspacing="0" cellpadding="0" border="0" class="edit view">
				<tbody>
					<tr>
						<td>
							<div style="position:relative;">
								<a href="#" id="asolReportsVar">asolReportsVar</a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>';
		
	}
		
	static public function getBasicFieldFilterForAuditedReport($selectedModule, $hasDeleted) {

		global $sugar_config, $db;
		
		$translateFieldLabels = ((!isset($sugar_config['asolReportsTranslateLabels'])) || ($sugar_config['asolReportsTranslateLabels'])) ? true : false;
		$fieldsToBeRemoved = self::getNonVisibleFields($selectedModule, $hasDeleted);
		
		$fieldNameFieldArray = array(
			'tables' => array(
				0 => array(
					'config' => array(
						'visible' => 'yes'
					),
					'data' => array(
						0 => array(
							'field' => 'field_name',
							'alias' => ($translateFieldLabels) ? translate("LBL_FIELD_NAME", "Audit") : 'fieldName',
							'fieldReference' => 'fieldName',
							'visible' => 'no',
							'sortDirection' => '0',
							'sortOrder' => '',
							'function' => '0',
							'sql' => '', 
							'grouping' => '0',
							'groupingOrder' => '',
							'type' => 'enum',
							'key' => '',
							'isRelated' => false,
							'index' => '4',
							'enumOprerator' => 'asolFunction',
							'enumReference' => 'getAuditedFields',
	
							'optionsDb' => asol_Reports::getAuditedFields($selectedModule, $fieldsToBeRemoved), //dropdown Values
							'optionsLabel' => ($translateFieldLabels) ? asol_Reports::getAuditedLabels($selectedModule, $fieldsToBeRemoved) : asol_Reports::getAuditedFields($selectedModule, $fieldsToBeRemoved), //dropdown labels
						)
					)
				)
			),
			'version' => asol_ReportsUtils::$reports_version
		);
	
		$auditFields = json_encode($fieldNameFieldArray);
		
		$fieldNameFilterArray = array(
									'data' => array(
										0 => array(
											'field' => 'field_name',
											'operator' => 'equals',
											'parameters' => array(
												'first' => array(),
												'second' => array(),
												'third' => array(),
											),
											'type' => 'enum',
											'isRelated' => false,
											'relationKey' => '',
											'index' => '1',
											'enumOperator' => 'asolFunction',
											'enumReference' => 'getAuditedFields',
											'enumValues' => asol_Reports::getAuditedFields($selectedModule, $fieldsToBeRemoved), //dropdown Values 
											'enumLabels' => asol_Reports::getAuditedLabels($selectedModule, $fieldsToBeRemoved, $translateFieldLabels), //dropdown labels
											'filterReference' => 'fieldName',
											'alias' => ($translateFieldLabels) ? translate("LBL_FIELD_NAME", "Audit") : 'fieldName',
											'behavior' => 'auto', 
											'userOptions' => array(),
											'logicalOperators' => array(
												'parenthesis' => '0',
												'operator' => ''
											)
										)
									)
								);
								
		$auditFilters = json_encode($fieldNameFilterArray);
		
		return array(
			'auditFields' => $auditFields,
			'auditFilters' => $auditFilters
		);
		
	}
	
	static public function getNonVisibleFields($reportModule, $hasDeleted) {

		global $sugar_config, $current_user;
		
		$fieldsToBeRemoved = ($hasDeleted ? array() : array('deleted'));
		
		if (isset($sugar_config['asolReportsNonVisibleFields'][$reportModule])) {
	
			foreach ($sugar_config['asolReportsNonVisibleFields'][$reportModule] as $nonVisibleField)
				$fieldsToBeRemoved[] = $nonVisibleField;
		
		}
			
		if (asol_CommonUtils::isDomainsInstalled()) {
			
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
			
			$childDomains = asol_manageDomains::getChildDomains($current_user->asol_default_domain);
			$isLeafDomain = (empty($childDomains)) ? true : false;
			
			$fieldsToBeRemoved[] = 'asol_domain_published_mode';
			$fieldsToBeRemoved[] = 'asol_domain_child_share_depth';
			$fieldsToBeRemoved[] = 'asol_multi_create_domain';
			$fieldsToBeRemoved[] = 'asol_published_domain';
			
			if ((!$current_user->is_admin) && $isLeafDomain) {
				$fieldsToBeRemoved[] = 'asol_domain_id';
			}
		
		}
	
		return $fieldsToBeRemoved;
		
	}

	
	static public function prepareReportFields($reportModule, $fieldsJson, $translateFieldLabels, $fieldsToBeRemoved) {
		
		$fieldsArray = unserialize(base64_decode($fieldsJson));
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$subQueryFieldsModifiedEnums = asol_ReportsUtils::managePremiumFeature("subQuerySQLEditor", "reportFunctions.php", "getSubQueryEnumFilters", array('reportModule' => $reportModule, 'fields' => $fieldsArray, 'translateFieldLabels' => $translateFieldLabels, 'fieldsToBeRemoved' => $fieldsToBeRemoved));
		$fieldsArray = ($subQueryFieldsModifiedEnums !== false ? $subQueryFieldsModifiedEnums : $fieldsArray);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		if (!empty($fieldsArray))
			$fieldsJson = addslashes(json_encode($fieldsArray));
		
		return array(
			'json' => $fieldsJson,
			'array' => $fieldsArray,
		);
		
	}
	
	static public function prepareReportFilters($reportModule, $filtersJson, $translateFieldLabels, $fieldsToBeRemoved) {

		global $timedate;
		
		if (strlen($filtersJson) == 0) {
			return null;
		}		
		
		$filtersArray = unserialize(base64_decode($filtersJson));
		
		foreach ($filtersArray['data'] as & $currentFilter) {
			
			if (in_array($currentFilter['type'], array("date", "datetime", "datetimecombo", "timestamp")) && !in_array($currentFilter['operator'], array("last", "this", "these", "next", "not last", "not this", "not next"))) {
			
				if (!in_array($currentFilter['operator'], array("equals", "not equals", "before date", "after date", "between", "not between"))) {
					foreach($currentFilter['parameters']['first'] as &$currentParameter) {
						if ((!$timedate->check_matching_format($currentParameter, $timedate->get_date_format())) && ($currentParameter != "")) {
							$NcurrentParameter = $timedate->swap_formats($currentParameter, $GLOBALS['timedate']->dbDayFormat, $timedate->get_date_format() );
							$currentParameter = ($NcurrentParameter == '' ? $currentParameter : $NcurrentParameter);
						}
					}
				}
				
				if ((count($currentFilter['parameters']['first']) > 0) && (in_array($currentFilter['parameters']['first'][0], array("calendar")))) {
					foreach($currentFilter['parameters']['second'] as &$currentParameter) {
						if ((!$timedate->check_matching_format($currentParameter, $timedate->get_date_format())) && ($currentParameter != "")) {
							$NcurrentParameter = $timedate->swap_formats($currentParameter, $GLOBALS['timedate']->dbDayFormat, $timedate->get_date_format() );
							$currentParameter = ($NcurrentParameter == '' ? $currentParameter : $NcurrentParameter);
						}
					}
	
					if (in_array($currentFilter['operator'], array("between", "not between"))) {
						foreach($currentFilter['parameters']['third'] as &$currentParameter) {
							if((!$timedate->check_matching_format($currentParameter, $timedate->get_date_format())) && ($currentParameter != "")) {
								$NcurrentParameter = $timedate->swap_formats($currentParameter, $GLOBALS['timedate']->dbDayFormat, $timedate->get_date_format() );
								$currentParameter = ($NcurrentParameter == '' ? $currentParameter : $NcurrentParameter);
							}
						}
					}
				}
				
			}
			
			if (in_array($currentFilter['enumOperator'], array('options', 'function'))) {
			
				$currentFilter['enumValues'] = asol_Reports::getEnumValues($currentFilter['enumOperator'], $currentFilter['enumReference']);
				$currentFilter['enumLabels'] = asol_Reports::getEnumLabels($currentFilter['enumOperator'], $currentFilter['enumReference']);
				
			} else if ($currentFilter['enumOperator'] == 'asolFunction') {
				
				$currentFilter['enumLabels'] = ($translateFieldLabels) ? asol_Reports::getAuditedLabels($reportModule, $fieldsToBeRemoved) : asol_Reports::getAuditedFields($reportModule, $fieldsToBeRemoved);
				$currentFilter['enumValues'] = asol_Reports::getAuditedFields($reportModule, $fieldsToBeRemoved);
				
			}
			
		}
		
		$filtersJson = addslashes(json_encode($filtersArray));
	
		return array(
			'json' => $filtersJson,
			'array' => $filtersArray,
		);
	
	}
	
	static public function prepareReportTasks($reportTasks, $dateModified, $return_action) {
		
		global $current_user, $timedate;
	
		//reformateamos las fechas de selected task al formato de visualizacion definido por el usuario
		$scheduledTasks = json_decode(urldecode($reportTasks), true);
		
		if ((!isset($_REQUEST['selected_tasks'])) || ($return_action == 'duplicate')) {
		
			foreach ($scheduledTasks['data'] as & $currentTask){
		
				if ((!$timedate->check_matching_format($currentTask['end'], $timedate->get_date_format())) && ($currentTask['end'] != "")) {
					$currentTask['end'] = $timedate->swap_formats($currentTask['end'], $GLOBALS['timedate']->dbDayFormat, $timedate->get_date_format());
				}
				
				$dbDateModified = $timedate->swap_formats($dateModified, $timedate->get_date_time_format(), $timedate->get_db_date_time_format());
				$currentTaskDateArray = explode(' ', $dbDateModified);
				try {
					$currentTaskDateTime = $timedate->handle_offset($currentTaskDateArray[0].' '.$currentTask['time'].':00', $timedate->get_db_date_time_format());
					$currentTask['time'] = $timedate->swap_formats($currentTaskDateTime, $timedate->get_db_date_time_format(), "H:i");
				} catch (Exception $e) {
					$currentTask = null;
				}
				
			}
		
		}
		
		return rawurlencode(json_encode($scheduledTasks));
	
	}
	
	static public function prepareReportCharts($report_charts) {
		
		$selected_charts = unserialize(base64_decode($report_charts));
		
		if (!empty($selected_charts))
			$selected_charts = (isset($_REQUEST['selected_charts'])) ? $_REQUEST['selected_charts'] : addslashes(json_encode($selected_charts));
		
		return $selected_charts;
		
	}
	
	static public function getAuditTableFields($bean, $fieldsToBeRemoved, & $relateField, $mainRelatedKey) {

		global $current_user, $sugar_config, $app_strings, $app_list_strings;
		
		$translateFieldLabels = ((!isset($sugar_config['asolReportsTranslateLabels'])) || ($sugar_config['asolReportsTranslateLabels'])) ? true : false;
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);
		
		$primaryKey = "id";

		if (empty($relateField)) {
	
			$fields = array("id", "parent_id", "date_created", "created_by", "field_name", "data_type", "before_value_string", "after_value_string", "before_value_text", "after_value_text"); //Array con los campos de la tabla seleccionada
		
			if ($translateFieldLabels)
				$fields_labels = array($app_strings["LBL_ID"], translate("LBL_AUDIT_REPORT_PARENT_ID", "asol_Reports"), translate("LBL_DATE_ENTERED", "Audit"), translate("LBL_CREATED_BY", "Audit"), translate("LBL_FIELD_NAME", "Audit"), translate("LBL_AUDIT_REPORT_DATA_TYPE", "asol_Reports"), translate("LBL_OLD_NAME", "Audit")." String", translate("LBL_NEW_VALUE", "Audit")." String", translate("LBL_OLD_NAME", "Audit")." Text", translate("LBL_NEW_VALUE", "Audit")." Text");
			else
				$fields_labels = array("id", "parent_id", "date_created", "created_by", "field_name", "data_type", "before_value_string", "after_value_string", "before_value_text", "after_value_text"); //Array con los labels de los campos de la tabla seleccionada
			
			$fields_type = array("char(36)", "relate", "datetime", "relate", "varchar(100)", "varchar(100)", "varchar(255)", "varchar(255)", "text", "text"); // Array con los tipos de campos de cada elemento del array $fields
			$fields_enum_operators = array("", "", "", "", "", "", "", "", "", "");
			$fields_enum_references = array("", "", "", "", "", "", "", "", "", "");
			
			$has_index = array(false, false, false, false, false, false, false, false, false, false);
			$has_related = array('false', 'true', 'false', ($allowedModules['Users'] || $current_user->is_admin ? 'true' : 'false'), 'false', 'false', 'false', 'false', 'false', 'false'); //Array que indica si los elementos de la tabla fields tienen relacion con alguna otra tabla
			
		} else {

			if ($relateField == 'parent_id') {
				$relatedModule = $bean->module_dir;
			} else {
				$relatedInfo = asol_Reports::getReportsRelatedFields($bean, $relateField);
				$relatedModule = $relatedInfo['module'];	
			}

			$relatedObject = BeanFactory::newBean($relatedModule);
			$relatedTable = (is_object($relatedObject)) ? $relatedObject->table_name : strtolower($relatedModule);
			
			
			$rsrf = self::getModuleResultSetFields($relatedModule, $relatedTable, null, $fieldsToBeRemoved);

			$k=0;
			
			foreach($rsrf as $val) {
				
				$explodedRelatedField = explode(".", $val['Field']);
				$currentRelatedField = (count($explodedRelatedField) == 2) ? $explodedRelatedField[1] : $val['Field'];
				
				$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($relatedModule, $currentRelatedField, $val['Type']);
				
				$fields[$k] = (count(explode(".", $val['Field'])) == 1) ? $relatedTable.".".$val['Field'] : $val['Field'];
				
				$vName = (empty($fieldInfo['label'])) ? $currentRelatedField : $fieldInfo['label'];
				$tableVname = (!empty($app_list_strings['moduleList'][$relatedModule])) ? $app_list_strings['moduleList'][$relatedModule] : $relatedTable;
				$vName = (count(explode(".", $val['Field'])) >= 1) ? $tableVname.".".$vName : $vName;
				$vName = trim($vName);
				$vName = (substr($vName, -1) == ':') ? substr($vName, 0, -1) : $vName;
						
				$fields_labels[$k] = ($translateFieldLabels) ? $vName : $fields[$k];
				
				$fields_enum_operators[$k] = $fieldInfo['enum']['operator'];
				$fields_enum_references[$k] = $fieldInfo['enum']['reference'];
				$fields_type[$k] = $fieldInfo['type'];

				$info = asol_Reports::getReportsRelatedFields($relatedObject, $currentRelatedField);	
				$infoIdName = (!empty($info['id_name'])) ? $info['id_name'] : "";
					
				if ($currentRelatedField == $primaryKey) {
							
					$rsrhr = self::getModuleRelationShips($relatedModule, $val['Field']);
					$has_related[$k] = ((count($rsrhr) > 0) || ($val['Type'] == "relate")) ? "true" : "false";
							
				} else {
				
					if ($infoIdName == $currentRelatedField) {
						$fields_type[$k] = "relate";
						$has_related[$k] = "true";	
					} else {
						$has_related[$k] = "false";
					}
					
				}
				
				$has_index[$k] = false;
	
				$k++;
	
			}
			
			$relateField = (!empty($mainRelatedKey) ? $mainRelatedKey.';'.$relateField : $relateField);

		}
		
		return array(
		
			'fields' => $fields,
			'fields_labels' => $fields_labels,
			'fields_type' => $fields_type,
			'fields_enum_operators' => $fields_enum_operators,
			'fields_enum_references' => $fields_enum_references,
			
			'has_index' => $has_index,
			'has_related' => $has_related,
		
		);
		
	}
	
	static private function getModuleRelationShips($reportModule, $field) {
		
		global $sugar_config;
		
		$explodedField = explode(".", $field);
		$field = (count($explodedField) == 2) ? $explodedField[1] : $field;

		if (!isset($sugar_config['asolReportsRelationshipsTableUsage']) || !$sugar_config['asolReportsRelationshipsTableUsage']) {
			$rsRightRel = asol_CommonUtils::getRelationshipsInfoList($reportModule, null, $reportModule, null, null, null, $field);
			$rsLeftRel = asol_CommonUtils::getRelationshipsInfoList($reportModule, $reportModule, null, null, null, $field, null);
		} else {
			$rsRightRel = asol_Reports::getSelectionResults("SELECT DISTINCT relationship_name, lhs_module as main_module, lhs_module, lhs_table FROM relationships WHERE rhs_module LIKE '".$reportModule."' AND rhs_key LIKE '".$field."'", null, false);
			$rsLeftRel = asol_Reports::getSelectionResults("SELECT DISTINCT relationship_name, lhs_module as main_module, rhs_module, rhs_table FROM relationships WHERE lhs_module LIKE '".$reportModule."' AND lhs_key LIKE '".$field."'", null, false);
		}
			
		foreach($rsLeftRel as $leftRel) { //Evitar tablas repetidas

			$duplicatedRelationShip = false;

			foreach($rsRightRel as $rightRel) {

				if ($leftRel['relationship_name'] == $rightRel['relationship_name']) {
					$duplicatedRelationShip = true;
					break;
				}

			}

			if (!$duplicatedRelationShip) {
				$rsRightRel[] = array(
					'relationship_name' => $leftRel['relationship_name'],
					'main_module' => $leftRel['main_module'],
					'lhs_table' => $leftRel['rhs_table'],
					'lhs_module' => $leftRel['rhs_module']
				);
			}

		}
		
		return $rsRightRel;
		
	}
	
	static private function getModuleResultSetFields($reportModule, $reportTable, $reportField, $fieldsToBeRemoved) {

		$rsFields = asol_Reports::getSelectionResults("SHOW COLUMNS FROM ".$reportTable.(!empty($reportField) ? " WHERE Field = '".$reportField."'" : ""), null, false);

		//Eliminamos campo deleted del array rs
		self::removeFieldsFromResultSet($rsFields, $fieldsToBeRemoved);
			
		$rsCustomFields = asol_Reports::getSelectionResults("SELECT name, type FROM fields_meta_data WHERE custom_module='".$reportModule."' AND type NOT IN ('id', 'relate', 'html', 'iframe', 'encrypt')".(!empty($reportField) ? " AND ext3 = '".$reportField."'" : ""), null, false);
		$rsCustomRelatedFields = asol_Reports::getSelectionResults("SELECT name, type, ext2, ext3 FROM fields_meta_data WHERE custom_module='".$reportModule."' AND type IN ('relate')".(!empty($reportField) ? " AND ext3 = '".$reportField."'" : ""), null, false);
		
		foreach ($rsCustomFields as $customField) {
	
			if (!in_array($reportTable."_cstm.".$customField["name"], $fieldsToBeRemoved)) {
			
				$rsFields[] = array(
					'Field' => $reportTable."_cstm.".$customField["name"],
					'Type' => $customField["type"]
				);
				
			}
	
		}
	
		foreach ($rsCustomRelatedFields as $customRelatedField) {
	
			if (!in_array($reportTable."_cstm.".$customRelatedField["ext3"], $fieldsToBeRemoved)) {
			
				$rsFields[] = array(
					'Field' => $reportTable."_cstm.".$customRelatedField["ext3"],
					'Type' => $customRelatedField["type"],
					'RelateModule' => $customRelatedField["ext2"]
				);
			
			}
	
		}
		
		return $rsFields;
		
	}
	
	static private function getTranslatedField($reportModule, $fieldName, $fieldLabel) {

		$translation = translate($fieldLabel, $reportModule);
		$translation = trim($translation);
		$translation = (substr($translation, -1) == ':') ? substr($translation, 0, -1) : $translation;

		return (empty($translation) ? $fieldName : $translation);
		
	}
	
	static private function getTranslatedRelatedField($relatedModule, $relatedTable, $relatedField, $fieldLabel) {
		
		global $app_list_strings;
		
		$translation = (empty($fieldLabel)) ? $relatedField : $fieldLabel;
		$tableTranslation = (!empty($app_list_strings['moduleList'][$relatedModule])) ? $app_list_strings['moduleList'][$relatedModule] : $relatedTable;
		
		$translation = (count(explode(".", $relatedField)) >= 1) ? $tableTranslation.".".$translation : $translation;
		$translation = trim($translation);
		$translation = (substr($translation, -1) == ':') ? substr($translation, 0, -1) : $translation;
		
		return $translation;
		
	}
	
	static public function getCrmTableFields($reportModule, $bean, $fieldsToBeRemoved) {
	
		global $current_user, $sugar_config, $app_strings;
		
		$translateFieldLabels = ((!isset($sugar_config['asolReportsTranslateLabels'])) || ($sugar_config['asolReportsTranslateLabels'])) ? true : false;
		
		$primaryKey = "id";
		$rsFields = self::getModuleResultSetFields($reportModule, $bean->table_name, null, $fieldsToBeRemoved);
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);

		$fieldIndex=0;
		
		$fields = array();
		$fields_labels = array();
		$fields_type = array();
		$fields_enum_operators = array();
		$fields_enum_references = array();
		$has_index = array();
		$has_related = array();


		foreach($rsFields as $value) {
	
			if ($value['Type'] != "non-db") {
	
				$explodedField = explode(".", $value['Field']);
				$currentField = (count($explodedField) == 2) ? $explodedField[1]: $value['Field'];
				
				$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($reportModule, $currentField, $value['Type']);

				$fields[$fieldIndex] = $value['Field'];
				
				$fields_enum_operators[$fieldIndex] = $fieldInfo['enum']['operator'];
				$fields_enum_references[$fieldIndex] = $fieldInfo['enum']['reference'];
				$fields_type[$fieldIndex] = $fieldInfo['type'];
				

				if ($value['Field'] == $primaryKey) { // CRM RelationShips
					
					$rshr = self::getModuleRelationShips($reportModule, $value['Field']);

					$fields_labels[$fieldIndex] = ($translateFieldLabels) ? $app_strings["LBL_ID"] : $primaryKey;
					$has_related[$fieldIndex] = ((count($rshr) > 0) || ($value['Type'] == "relate") ? "true" : "false");
	
				} else {

					$relatedInfo = asol_Reports::getReportsRelatedFields($bean);
					
					if (!empty($relatedInfo)) { // CRM Relate Fields
					
						foreach ($relatedInfo as $info) {

							$infoIdName = (!empty($info['id_name'])) ? $info['id_name'] : "";
							
							if ($infoIdName == $currentField) {

								$fields_labels[$fieldIndex] = ($translateFieldLabels) ? self::getTranslatedField($reportModule, $value['Field'], $info['vname']) : $value['Field'];
								$fields_type[$fieldIndex] = "relate";
								$has_related[$fieldIndex] = ((isset($allowedModules[$info['module']]) && $allowedModules[$info['module']]) || $current_user->is_admin ? "true" : "false");
								
								break;
									
							} else {
								
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$extraParams = array(
									'database' => '-1',
									'restricted' => true
								);
								$definedAvailableRelates = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportDefinedAvailableRelates", $extraParams);
								$isVirtualLink = ($definedAvailableRelates !== false ? (isset($definedAvailableRelates[$reportModule][$currentField]) ? true : false) : false);
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
						
								$normalInfo = $bean->getFieldDefinition($currentField);

								$fields_labels[$fieldIndex] = ($translateFieldLabels) ? self::getTranslatedField($reportModule, $value['Field'], $normalInfo['vname']) : $value['Field'];
								$has_related[$fieldIndex] = ($isVirtualLink ? "true": "false");
		
							}
		
						}
						
					} else { // CRM Standard Fields

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array(
							'database' => '-1',
							'restricted' => true
						);
						$definedAvailableRelates = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportDefinedAvailableRelates", $extraParams);
						$isVirtualLink = ($definedAvailableRelates !== false ? (isset($definedAvailableRelates[$reportModule][$currentField]) ? true : false) : false);
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
					
						$normalInfo = $bean->getFieldDefinition($currentField);

						$fields_labels[$fieldIndex] = ($translateFieldLabels) ? self::getTranslatedField($reportModule, $value['Field'], $normalInfo['vname']) : $value['Field'];
						$has_related[$fieldIndex] = ($isVirtualLink ? "true": "false");
						
					}
	
				}
				
				$has_index[$fieldIndex] = false;
	
			}
	
			$fieldIndex++;
			
		}
		

		return array(
		
			'fields' => $fields,
			'fields_labels' => $fields_labels,
			'fields_type' => $fields_type,
			'fields_enum_operators' => $fields_enum_operators,
			'fields_enum_references' => $fields_enum_references,

			'has_index' => $has_index,
			'has_related' => $has_related,
			
		);
		
	}
	
	static public function getCrmTableRelatedFields($reportModule, $bean, $fieldsToBeRemoved, $translateFieldLabels, & $relateField, $mainRelatedKey) {
		
		global $current_user, $app_list_strings;

		$primaryKey = "id";
		$rsFields = self::getModuleResultSetFields($reportModule, $bean->table_name, $relateField, $fieldsToBeRemoved);
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);
		$value = $rsFields[0];
		

		$keys = array();
		$fields_relationship = array();
		$fields_relationship_labels = array();
		
		$fields = array();
		$fields_labels = array();
		$fields_type = array();
		$fields_enum_operators = array();
		$fields_enum_references = array();
		$has_index = array();
		$has_related = array();
	
	
		$explodedField = explode(".", $value['Field']);
		$currentField = (count($explodedField) == 2) ? $explodedField[1]: $value['Field'];

		$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($reportModule, $currentField, $value['Type']);

		if ($currentField == $primaryKey) { // CRM RelationShips

			$k = $j = 0;
			$rshr = self::getModuleRelationShips($reportModule, $currentField);

			if (count($rshr) > 0) {

				while ($j < count($rshr)) {
					
					$relatedModule = $rshr[$j]['lhs_module'];
					
					if ((isset($allowedModules[$relatedModule]) && $allowedModules[$relatedModule]) || $current_user->is_admin) {

						$relatedObject = BeanFactory::newBean($relatedModule);
						$relatedTable = $rshr[$j]['lhs_table'];
					
						$rsrf = self::getModuleResultSetFields($relatedModule, $relatedTable, null, $fieldsToBeRemoved);
	
						foreach($rsrf as $val) {
							
							$explodedRelatedField = explode(".", $val['Field']);
							$currentRelatedField = (count($explodedRelatedField) == 2) ? $explodedRelatedField[1] : $val['Field'];
							
							$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($rshr[$j]['lhs_module'], $currentRelatedField, $val['Type']);
							
							$fields[$k] = (count(explode(".", $val['Field'])) == 1) ? $relatedTable.".".$val['Field'] : $val['Field'];
							$fields_labels[$k] = ($translateFieldLabels) ? self::getTranslatedRelatedField($relatedModule, $relatedTable, $currentRelatedField, $fieldInfo['label']) : $fields[$k];
							$fields_relationship[$k] = $rshr[$j]['relationship_name'];
							$fields_relationship_labels[$k] = ($translateFieldLabels) ? asol_Reports::getRelationShipLabelFromVardefs($rshr[$j]['main_module'], $fields_relationship[$k]) : $fields_relationship[$k];							
							$fields_enum_operators[$k] = $fieldInfo['enum']['operator'];
							$fields_enum_references[$k] = $fieldInfo['enum']['reference'];
							$fields_type[$k] = $fieldInfo['type'];
							
							$info = asol_Reports::getReportsRelatedFields($relatedObject, $currentRelatedField);	
							$infoIdName = (!empty($info['id_name'])) ? $info['id_name'] : "";
								
							if ($currentRelatedField == $primaryKey) {
								
								$rsrhr = self::getModuleRelationShips($relatedModule, $val['Field']);
								$has_related[$k] = ((count($rsrhr) > 0) || ($val['Type'] == "relate")) ? "true" : "false";
								
							} else {
				
								if ($infoIdName == $currentRelatedField) {
									$fields_type[$k] = "relate";
									$has_related[$k] = ((isset($allowedModules[$info['module']]) && $allowedModules[$info['module']]) || $current_user->is_admin ? "true" : "false");	
								} else {
									$has_related[$k] = "false";
								}
	
							}
							
							$has_index[$k] = false;
							
							$keys[$k] = $primaryKey." ".$fields_relationship[$k];
							$keys[$k] = (!empty($mainRelatedKey) ? $mainRelatedKey.';'.$keys[$k] : $keys[$k]);
	
							$k++;
							
						}

					}
						
					$j++;

				}
				
				$relateField = $keys;

			} else {

				$relatedTable = BeanFactory::newBean(BeanFactory::getObjectName($value['RelateModule']))->table_name;
				$relatedTable = ($relatedTable == false ? BeanFactory::newBean($value['RelateModule'])->table_name : $relatedTable);
				$relatedTable = (empty($relatedTable)) ? strtolower($value['RelateModule']) : $relatedTable;						
			
				$rsrf = self::getModuleResultSetFields($value['RelateModule'], $relatedTable, null, $fieldsToBeRemoved);

				foreach($rsrf as $val) {
					
					$fields[$k] = $relatedTable.".".$val['Field'];
					$fields_labels[$k] = $relatedTable.".".$val['Field'];
					
					$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($value['RelateModule'], $val['Field'], $val['Type']);
					
					$fields_enum_operators[$k] = $fieldInfo['enum']['operator'];
					$fields_enum_references[$k] = $fieldInfo['enum']['reference'];
					$fields_type[$k] = $fieldInfo['type'];
					$has_related[$k] = "false";
					$has_index[$k] = false;
					
					$k++;
					
				}

				$j++;

			}
				
		} else { // CRM Relate Fields

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'database' => '-1',
				'restricted' => true
			);
			$definedAvailableRelates = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportDefinedAvailableRelates", $extraParams);
			$isVirtualLink = ($definedAvailableRelates !== false ? (isset($definedAvailableRelates[$reportModule][$currentField]) ? true : false) : false);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

			if ($isVirtualLink) {
				
				$relatedModule = $definedAvailableRelates[$reportModule][$currentField]['relationModule'];
				
			} else {
			
				$relatedInfo = asol_Reports::getReportsRelatedFields($bean, $currentField);
				$relatedModule = $relatedInfo['module'];

			}

			if ((isset($allowedModules[$relatedModule]) && $allowedModules[$relatedModule]) || $current_user->is_admin) {
			
				$relatedObject = BeanFactory::newBean($relatedModule);
				$relatedTable = (is_object($relatedObject)) ? $relatedObject->table_name : strtolower($relatedModule);
				$relateField = (!empty($mainRelatedKey) ? $mainRelatedKey.';'.$relateField : $relateField);

				$rsrf = self::getModuleResultSetFields($relatedModule, $relatedTable, null, $fieldsToBeRemoved);
				
				$k = 0;
	
				foreach($rsrf as $val) {
	
					$explodedRelatedField = explode(".", $val['Field']);
					$currentRelatedField = (count($explodedRelatedField) == 2) ? $explodedRelatedField[1] : $val['Field'];
	
					$fieldInfo = asol_CommonUtils::getFieldInfoFromVardefs($relatedModule, $currentRelatedField, $val['Type']);
					
					$fields[$k] = (count(explode(".", $val['Field'])) == 1) ? $relatedTable.".".$val['Field'] : $val['Field'];
					$fields_labels[$k] = ($translateFieldLabels) ? self::getTranslatedRelatedField($relatedModule, $relatedTable, $currentRelatedField, $fieldInfo['label']) : $fields[$k]; 
					$fields_relationship[$k] = $relatedModule;
					$fields_relationship_labels[$k] = (!empty($app_list_strings['moduleList'][$relatedModule])) ? $app_list_strings['moduleList'][$relatedModule] : $relatedTable;
					$fields_enum_operators[$k] = $fieldInfo['enum']['operator'];
					$fields_enum_references[$k] = $fieldInfo['enum']['reference'];
					$fields_type[$k] = $fieldInfo['type'];
					
					$info = asol_Reports::getReportsRelatedFields($relatedObject, $currentRelatedField);	
					$infoIdName = (!empty($info['id_name'])) ? $info['id_name'] : "";
						
					if ($currentRelatedField == $primaryKey) {
	
						$rsrhr = self::getModuleRelationShips($relatedModule, $val['Field']);
						$has_related[$k] = ((count($rsrhr) > 0) || ($val['Type'] == "relate")) ? "true" : "false";
								
					} else {
	
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$isVirtualLink = ($definedAvailableRelates !== false ? (isset($definedAvailableRelates[$relatedModule][$currentRelatedField]) ? true : false) : false);
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
	
						if (($infoIdName == $currentRelatedField) || ($isVirtualLink)) {
							$fields_type[$k] = "relate";
							$has_related[$k] = ((isset($allowedModules[$info['module']]) && $allowedModules[$info['module']]) || $current_user->is_admin ? "true" : "false");
						} else {
							$has_related[$k] = "false";
						}
					
					}
					
					$has_index[$k] = false;
	
					$k++;
					
				}
			
			}

		}
		
		return array(
		
			'fields' => $fields,
			'fields_labels' => $fields_labels,
			'fields_relationship' => $fields_relationship,
			'fields_relationship_labels' => $fields_relationship_labels,
			'fields_type' => $fields_type,
			'fields_enum_operators' => $fields_enum_operators,
			'fields_enum_references' => $fields_enum_references,

			'has_index' => $has_index,
			'has_related' => $has_related,
		
		);
	
	}
	
	static public function getCurrentUserAllowedModules($noRestrictions = false) {
		
		global $current_user, $sugar_config, $app_list_strings;
		
		//Obtener los m�dulo a los que tiene acceso el usuario activo
		$modules = array();
		$selectedModuleIndex = 0;
		
		$acl_modules = ACLAction::getUserActions($current_user->id);
		$allowedModule = array();
		
		foreach($acl_modules as $key=>$mod) {
		
			if ($mod['module']['access']['aclaccess'] >= 0) {
		
				if ((!$noRestrictions) && ((isset($sugar_config['asolModulesPermissions']['asolAllowedTables'])) || (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables'])))) {
					//Restrictive
				
					if ( (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables']['domains'][$current_user->asol_default_domain])) && 
						 (in_array($key, $sugar_config['asolModulesPermissions']['asolForbiddenTables']['domains'][$current_user->asol_default_domain])) ) {
		
						$allowedModule[$key] = false;
		
					} else if ( (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables']['instance'])) &&
								(in_array($key, $sugar_config['asolModulesPermissions']['asolForbiddenTables']['instance']))) { 
		
						$allowedModule[$key] = false;
						
					} 
					
					if ( (isset($sugar_config['asolModulesPermissions']['asolAllowedTables']['domains'][$current_user->asol_default_domain])) &&
								(in_array($key, $sugar_config['asolModulesPermissions']['asolAllowedTables']['domains'][$current_user->asol_default_domain])) ) {
						
						if (!isset($allowedModule[$key]))
							$allowedModule[$key] = true;
									
					} else if ( (isset($sugar_config['asolModulesPermissions']['asolAllowedTables']['instance'])) &&
								(in_array($key, $sugar_config['asolModulesPermissions']['asolAllowedTables']['instance'])) ) {
						
						if (!isset($allowedModule[$key]))
							$allowedModule[$key] = true;
							
					}			
				
				} else {
		
					$allowedModule[$key] = true;
					
				}
		
			}
		
		}
		
		
		foreach ($allowedModule as $key=>$isAllowed) {
		
			if ($isAllowed) {
				$modules[$key] = (isset($app_list_strings['moduleList'][$key])) ? $app_list_strings['moduleList'][$key] : $key;
			}
		
		}
	
		asort($modules);

		return $modules;
		
	}
	
	static public function isModuleAudited($reportModule) {

		$hasAudit = false;

		if (!empty($reportModule)) {
			$bean = BeanFactory::newBean($reportModule);
			if (is_object($bean)) {	
				$hasAudit = $bean->is_AuditEnabled();
			}
		}

		return $hasAudit;
		
	}
	
	static public function getSystemUsersAndRoles() {
	
		global $db, $current_user;
		
		if (asol_CommonUtils::isDomainsInstalled()) {
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
		}
		
		$usersOpts = array();
		$usersSql = "SELECT id, user_name FROM users WHERE deleted=0";
		
		if (asol_CommonUtils::isDomainsInstalled()) {
			$usersSql .= asol_manageDomains::getExtendedDomainsWhereQuery('', true);
		}
		
		$usersSql .= " ORDER BY user_name";
		$usersQuery = $db->query($usersSql);
		while ($usersRow = $db->fetchByAssoc($usersQuery)) {
			$usersOpts[] = $usersRow;
		}
		
		$rolesOpts = array();
		$rolesSql = "";
		if (asol_CommonUtils::isDomainsInstalled()) {
			$rolesSql .= "SELECT acl_roles.id, acl_roles.name FROM acl_roles LEFT JOIN asol_domains_aclroles ON acl_roles.id=asol_domains_aclroles.aclrole_id WHERE deleted=0 AND asol_domains_aclroles.asol_domain_id='".$current_user->asol_default_domain."'";
		} else {
			$rolesSql .= "SELECT id, name FROM acl_roles WHERE deleted=0";
		}
		$rolesSql .= " ORDER BY name";
		$rolesQuery = $db->query($rolesSql);
		while ($rolesRow = $db->fetchByAssoc($rolesQuery)) {
			$rolesOpts[] = $rolesRow;
		}
		
		return array(
			'users' => (empty($usersOpts)) ? array() : $usersOpts,
			'roles' => (empty($rolesOpts)) ? array() : $rolesOpts
		);
	
	}
	

	static public function getHeaderLinksHtml() {
		
		require_once("modules/asol_Common/include/commonUtils.php");
		
		return '
		<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">
		<link rel="stylesheet" type="text/css" href="modules/asol_Common/include/client/libraries/jquery.UI.custom.css?version='.str_replace('.', '', asol_CommonUtils::$common_version).'">
		
		<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsRouter.js"></script>
		<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsApi.js"></script>
		<script type="text/javascript">
			reportsApi.setLanguage({
				"blocking" : {
					"load" : "'.translate("LBL_COMMON_LOADING_DATA", "asol_Common").'",
					"save" : "'.translate("LBL_COMMON_SAVING_DATA", "asol_Common").'",
				}
			});
		</script>
		'.asol_CommonUtils::getHeaderNonGregorianCalendar().'
		<script type="text/javascript" src="modules/asol_Reports/include/client/controllers/controllerEdit.js"></script>
		<script type="text/javascript" src="modules/asol_Reports/include/client/controllers/controllerDetail.js"></script>
				
		<script type="text/javascript" src="modules/asol_Common/include/client/helpers/commonUtils.js"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.js"></script>
		<link type="text/css" href="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.css" rel="stylesheet">
		<script type="text/javascript">
			asolFancyMultiEnum.setLanguage({
				"checkAll" : "'.translate("LBL_MULTIENUM_CHECK_ALL_ITEMS", "asol_Common").'",
				"allSelected" : "'.translate("LBL_MULTIENUM_ALL_SELECTED_ITEMS", "asol_Common").'",
				"items" : "'.translate("LBL_MULTIENUM_SELECTED_ITEMS", "asol_Common").'",
			});
		</script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/asolFormatEditor.js"></script>
		<script type="text/javascript">
			asolFormatEditor.setModule("asol_Reports");
			asolFormatEditor.setLanguage({
				"varchar" : "'.translate("LBL_FORMAT_STRING", "asol_Common").'",
				"date" : "'.translate("LBL_FORMAT_DATE", "asol_Common").'",
				"int" : "'.translate("LBL_FORMAT_INT", "asol_Common").'",
				"decimal" : "'.translate("LBL_FORMAT_DECIMAL", "asol_Common").'",
				"currency" : "'.translate("LBL_FORMAT_CURRENCY", "asol_Common").'",
				"percent" : "'.translate("LBL_FORMAT_PERCENT", "asol_Common").'",
				"bool" : "'.translate("LBL_FORMAT_BOOLEAN", "asol_Common").'",
				"enum" : "'.translate("LBL_FORMAT_ENUM", "asol_Common").'",
				"multienum" : "'.translate("LBL_FORMAT_MULTIENUM", "asol_Common").'",
				"tree" : "'.translate("LBL_FORMAT_TREE", "asol_Common").'",
				"relate" : "'.translate("LBL_FORMAT_RELATE", "asol_Common").'",
				"button" : "'.translate("LBL_FORMAT_BUTTON", "asol_Common").'",
				"multimedia" : "'.translate("LBL_FORMAT_MULTIMEDIA", "asol_Common").'",
  			});
		</script>

		'.self::getPremiumHeaderLinksHtml().'
	
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.zclip.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jscolor/jscolor.js"></script>
		
		'.asol_CommonUtils::getHeaderCodeMirrorLinksHtml().'
		';
		
	}
	
	static private function getPremiumHeaderLinksHtml() {

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$headerLinksResponse = asol_ReportsUtils::managePremiumFeature("premiumHeaderLinks", "reportFunctions.php", "getPremiumHeaderLinks", null);
		$headerLinksHtml = ($headerLinksResponse !== false ? $headerLinksResponse : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		return $headerLinksHtml;
		
	}
	
	static public function getInitJqueryScriptHtml() {
		
		return '
		function initJqueryScripts(loadPlugins, callback) {

			if (loadPlugins) {
			
				if (typeof jQuery === "undefined") {
				
					$LAB.script("modules/asol_Common/include/client/libraries/jquery.min.js").wait().script("modules/asol_Common/include/client/libraries/jquery.blockUI.js").wait().script("modules/asol_Common/include/client/libraries/jquery.UI.min.js").wait(callback);
				 	
				} else if (typeof jQuery.blockUI === "undefined") {
				
					$LAB.script("modules/asol_Common/include/client/libraries/jquery.blockUI.js").wait().script("modules/asol_Common/include/client/libraries/jquery.UI.min.js").wait(callback);
				 	
				} else if (typeof jQuery.ui === "undefined") {
				
					$LAB.script("modules/asol_Common/include/client/libraries/jquery.UI.min.js").wait(callback);
				
				} else {
			
					callback();
			
				}
					
			} else {
			
				if (typeof jQuery === "undefined") {
				
					$LAB.script("modules/asol_Common/include/client/libraries/jquery.min.js").wait(callback);
				 	
				} else {
				
					callback();
				
				}
			
			}
		
		}
		';
		
	}
	
	static public function getInitEmailFrameHtml() {
		
		return '
		function initEmailFrame() {
		
			refreshEmailListReadonly();
				
			asolFancyMultiEnum.generate($("#email_users_for_to"), 5);
			asolFancyMultiEnum.generate($("#email_roles_for_to"), 5);
			asolFancyMultiEnum.generate($("#email_users_for_cc"), 5);
			asolFancyMultiEnum.generate($("#email_roles_for_cc"), 5);
			asolFancyMultiEnum.generate($("#email_users_for_bcc"), 5);
			asolFancyMultiEnum.generate($("#email_roles_for_bcc"), 5);
				
		}
		';
			
	}
	
	static public function getInitDragDropElementsHtml() {
		
		return '
		function initDragDropElements() {

			<!-- Fields -->
			jQueryReports("#fields_Table").sortable({ items: ".asolReportsFieldRow", axis: "y" });
			
			<!-- Filters -->
			jQueryReports("#filters_Table .asolReportsFilterWhere").sortable({ items: ".asolReportsFilterRow", axis: "y" });
			jQueryReports("#filters_Table .asolReportsFilterHaving").sortable({ items: ".asolReportsFilterRow", axis: "y" });
			
			<!-- Charts -->
			jQueryReports("#charts_Table").sortable({ items: ".asolReportsChartsGroup", axis: "y" });
		
			<!-- Tasks -->
			jQueryReports("#tasks_Table").sortable({ items: ".asolReportsTaskRow", axis: "y" });
				
		}
		';
		
	}
	
	static public function getRememberReportListsHtml($report_fields, $report_filters, $report_charts, $report_charts_engine, $report_tasks, $audited_report) {

		return '
		function RememberReportLists() {
			
			RememberFields("fields_Table", \''.$report_fields.'\', "'.$audited_report.'");
			RememberFilters("filters_Table", \''.$report_filters.'\', "'.$audited_report.'");
			RememberCharts("charts_Table", \''.$report_charts.'\', "'.$report_charts_engine.'");
			RememberTasks("tasks_Table", "'.$report_tasks.'");
			
		}
		';
	
	}
	
	static public function getInitReportsJavaScriptsHtml($hasPremiumFeatures, $isMetaReport, $externalApps, $reportType, $reportScheduledType) {

		$externalAppsJson = htmlentities(json_encode($externalApps));
		$reportScheduledType = (empty($reportScheduledType) ? 'email' : $reportScheduledType);
		
		$commonJS = '
			initVisibilityToggle(\'fields_Table\', \'index_visible\', \'index_hidden\', \'asolReportsFieldsIndexRow\', true, \'index_display\', false, false, null, null, null);	
			initVisibilityToggle(\'fields_Table\', \'field_visible\', \'field_hidden\', \'asolReportsFieldRow\', true, \'field_display\', true, false, \'html\', \'field_html\', true);

			initVisibilityToggle(\'filters_Table\', \'filter_execute\', \'filter_noexecute\', \'asolReportsFilterRow\', true, \'filter_apply\', false, false, null, null, null);
			
			initVisibilityToggle(\'charts_Table\', \'chart_visible\', \'chart_hidden\', \'asolReportsChartsGroup\', true, \'chart_display\', true, false, null, null, null);
			initVisibilityToggle(\'charts_Table\', \'subchart_visible\', \'subchart_hidden\', \'asolReportsSubChart\', true, \'chart_display\', true, false, null, null, null);
				
			initMassiveAction(\'fields_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\');
			initMassiveAction(\'filters_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\');
			initMassiveAction(\'charts_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\');
			initMassiveAction(\'tasks_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\');
			
			if (typeof window.hasPremiumReportsJsFeatures == "function") {
				initVisibilityToggle(\'charts_Table\', \'half_chart\', \'full_chart\', \'asolReportsChartsGroup\', false, \'half_chart_display\', true, false, null, null, null);
				initAxisSideSwitcher(\'charts_Table\', \'y_axis_left_side\', \'y_axis_right_side\', \'y_axis_side\');
			}
			
			if ($(".reportScope").val() !== "public") {
				asolFancyMultiEnum.generate($(".scopeRole"));
			}
			initEmailFrame();
			RememberReportLists();
				
		';
		
		$returnedHtml = '
		function initReportsJavaScripts() {';
			
			if ($hasPremiumFeatures) {

				$returnedHtml .= '
				$LAB.script("modules/asol_Reports/include_premium/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'").wait().script("modules/asol_Reports/include/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'").wait(function() {
					'.$commonJS.'
					applyChartsRestrictions();
					initReportTreeSelector();
					'.($isMetaReport == '0' ? 'initScheduledTypeInfo("'.$reportType.'", "'.$reportScheduledType.'");' : '').'

				});';
		
			} else {
			
				$returnedHtml .= '
				$LAB.script("modules/asol_Reports/include/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'").wait(function() {
		
					'.$commonJS.'
					console.log("Cannot load premium javascript libraries.");
		
				});';
					
			}
		
		$returnedHtml .= '
		}';
		
		return $returnedHtml;
		
	}
	
	static public function getOnloadJavaScript() {
		
		return '
		function loadReportsManagementJavaScript() {
			initJqueryScripts(true, function() {	
				$.blockUI({ message: $("#loadingBlockDiv") });
				initDragDropElements();
				initReportsJavaScripts();
				$.unblockUI();
			});
		}
		';
		
	}
		
	static public function getReportsJQueryScript() {
		
		return '
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.min.js"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.UI.min.js"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jstree/jquery.jstree.js"></script>
		<script type="text/javascript">
			var jQueryReports = $.noConflict(true);
		</script>
		';
		
	}
	
	static public function getFieldsPanelHtml($database, $selectedModule, $hasDeleted, $isDynamicTable, $auditedReport, $autoRefresh, $disabledGeneralData) {
		
		global $mod_strings;
		
		$moduleFields = self::getFieldsSelectHtml($database, $selectedModule, $hasDeleted, null, $auditedReport);
		$moduleRelatedFields = self::getRelatedFieldsSelectHtml($database, $selectedModule, $hasDeleted, null, null, '', true, null, $auditedReport);
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$breadcrumbTrailLink = asol_ReportsUtils::managePremiumFeature("multipleLinks", "reportFunctions.php", "getBreadcrumbTrailLink", null);
		$breadCrumbLinkBtn = ($breadcrumbTrailLink !== false ? $breadcrumbTrailLink : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		return '<table>
			<tr>
				<td>
					<h4>'.$mod_strings['LBL_REPORT_MODULE_HEADER_LABEL'].' <span id="reportModulesTablesSpan">'.asol_ReportsManagementFunctions::getReportModuleTablesHtml($database, false, $selectedModule, $isDynamicTable, $auditedReport, $autoRefresh, true, $disabledGeneralData).'</span></h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>'.$mod_strings['LBL_REPORT_FIELDS'].'</h4>
				</td>
			</tr>
			<tr>
				<td>
					<div id="reportTableFieldsDiv">
						'.$moduleFields['html'].'
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<input disabled type="button" title="'.$mod_strings['LBL_REPORT_ADD_FIELDS'].'" class="button" id="addFieldsButton" name="addFieldsButton" value="'.$mod_strings['LBL_REPORT_ADD_FIELDS'].'" onClick="'.$moduleFields['javascript'].'">
					<input type="button" title="'.$mod_strings['LBL_REPORT_SHOW_RELATED'].'" class="button" style="visibility: hidden" id="show_related_button" name="show_related_button" value="'.$mod_strings['LBL_REPORT_SHOW_RELATED'].'" onClick="getRelatedFields(false, null, null, null)">
				</td>
			</tr>
			<tr>
				<td>
					<h4>
					'.$mod_strings['LBL_REPORT_RELATED_FIELDS'].$breadCrumbLinkBtn.'
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<div id="reportTableRelatedFieldsDiv">
						'.$moduleRelatedFields['html'].'
					</div>	
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" title="'.$mod_strings['LBL_REPORT_ADD_RELATED_FIELDS'].'" class="button" id="addRelatedFieldsButton" name="addRelatedFieldsButton" value="'.$mod_strings['LBL_REPORT_ADD_RELATED_FIELDS'].'" onClick="'.$moduleRelatedFields['javascript'].'">
					<input type="button" title="'.$mod_strings['LBL_REPORT_SHOW_SECOND_RELATED'].'" class="button" style="visibility: hidden" id="show_second_related_button" name="show_second_related_button" value="'.$mod_strings['LBL_REPORT_SHOW_SECOND_RELATED'].'" onClick="getRelatedFields(true, null, null, null)">
				</td>
			</tr>
		</table>';
				
	}
	
	
	static public function getFieldsSelectHtml($database, $selectedModule, $hasDeleted, $selectedField, $auditedReport = 0, $isEditViewMode = true, $isDisabled = false, $treeMode = false, $subQueryMode = false) {
		
		global $db, $mod_strings;

		$isAudited = false;

		$rhs_key = (isset($_REQUEST['rhs_key'])) ? $_REQUEST['rhs_key'] : "";
		$currentTableFields = array();
	
		if (($database >= 0) && ($selectedModule != '')) {
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'alternative_database' => $database,
				'sel_altDbTable' => $selectedModule,
				'rhs_key' => $rhs_key
			);
			
			$currentTableFields = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalTableFields", $extraParams);
			
			if ($currentTableFields !== false) {
				$rhs_key = $currentTableFields['rhs_key'];
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else if (($selectedModule != '')) {
				
			$fieldsToBeRemoved = self::getNonVisibleFields($selectedModule, $hasDeleted);
			$isAudited = self::isModuleAudited($selectedModule);
			$auditedReport = ($isAudited ? $auditedReport : 0); 
			$bean = BeanFactory::newBean($selectedModule);
				
			if ($auditedReport == 1)
				$currentTableFields = asol_ReportsManagementFunctions::getAuditTableFields($bean, $fieldsToBeRemoved, $rhs_key, null);
			else 
				$currentTableFields = asol_ReportsManagementFunctions::getCrmTableFields($selectedModule, $bean, $fieldsToBeRemoved);
				
		}
			
		
		$fields = (isset($currentTableFields['fields']) ? $currentTableFields['fields'] : null);
		$fields_labels = (isset($currentTableFields['fields_labels']) ? $currentTableFields['fields_labels'] : null);
		$fields_type = (isset($currentTableFields['fields_type']) ? $currentTableFields['fields_type'] : null);
		$fields_enum_operators = (isset($currentTableFields['fields_enum_operators']) ? $currentTableFields['fields_enum_operators'] : null);
		$fields_enum_references = (isset($currentTableFields['fields_enum_references']) ? $currentTableFields['fields_enum_references'] : null);
		
		$has_index = (isset($currentTableFields['has_index']) ? $currentTableFields['has_index'] : null);
		$has_related = (isset($currentTableFields['has_related']) ? $currentTableFields['has_related'] : null);

		
		//Order Fields By Presentation Label
		$fields_labels_lowercase = array_map('strtolower', (!empty($fields_labels) ? $fields_labels : array() ));
		if (!empty($fields_labels_lowercase)) {
			array_multisort($fields_labels_lowercase, $fields_labels, $fields, $fields_type, $fields_enum_operators, $fields_enum_references, $has_index, $has_related);
		}

		$fields = (!empty($fields)) ? $fields : array();
		$fields_labels = (!empty($fields_labels)) ? $fields_labels : array();
		$has_index = (!empty($has_index)) ? $has_index : array();
		$has_related = (!empty($has_related)) ? $has_related : array();

		
		
		if ($treeMode) {

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'database' => $database,
				'getRelateLinks' => true,
				'auditedReport' => $auditedReport,
				
				'reportModule' => $selectedModule,
			
				'mainRelatedModule' => '',
				'mainRelatedTable' => '',
				'rhsKey' => '',
				
				'fields' => $fields,
				'fields_labels' => $fields_labels,
				'fields_type' => $fields_type,
				'fields_enum_operators' => $fields_enum_operators,
				'fields_enum_references' => $fields_enum_references,
				'has_index' => $has_index,
				'has_related' => $has_related,
			
				'linkColor' => 'blue',
				'subQueryMode' => $subQueryMode
			);
			$returnedTreeSelectorHtml = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getTreeSelectorHtml", $extraParams);
			$returnedHtml = ($returnedTreeSelectorHtml !== false) ? $returnedTreeSelectorHtml : '';
			$returnedJavascript = '';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else {
				
			$returnedHtml = '<select '.($isDisabled ? 'disabled' : '').' name="fields" id="fields" '.($isEditViewMode ? 'multiple size=10 onchange="setShowRelatedButtonVisibility(false)" onDblClick="getRelatedFields(false, null, null, null)"': '').'>';		
	
			foreach ($fields as $index=>$field) {
	
				$isRelated = ($has_related[$index] != "false");
				$returnedHtml .= '<option '.($isRelated ? 'style="color:blue;"' : '').' '.($field == $selectedField ? 'selected' : '').' onContextMenu="getReportVariableHover(\''.$field.'\', \'\', \'\', this); return false;" title="'.$field.'" value="'.$field.'" fieldValue="'.$field.'" fieldIndex="'.$index.'" fieldType="'.$fields_type[$index].'" fieldEnumOp="'.$fields_enum_operators[$index].'" fieldEnumRef="'.$fields_enum_references[$index].'" fieldLabel="'.$fields_labels[$index].'" fieldModule="" fieldKey="">'.$fields_labels[$index].($isRelated ? ' +' : '').'</option>';
					
			}
	
			$returnedHtml .= '</select>';
			$returnedJavascript = 'InsertFields(\'fields_Table\', null, false, \''.$auditedReport.'\');';
		
		}
		
		
		return array(
			'html' => $returnedHtml,
			'javascript' => $returnedJavascript,
			'isAudited' => $isAudited
		);
				
	}
	
	static public function addRelationShipNameToLowerCase($fieldLabel, $relationShipLabel) {

		$fieldLabelArray = explode('.', $fieldLabel);
		$tableName = array_shift($fieldLabelArray);

		return strtolower($tableName.(!empty($relationShipLabel) ? '.'.$relationShipLabel : '').'.'.implode('.', $fieldLabelArray));
		  
	}
	
	static public function getRelatedFieldsSelectHtml($database, $currentModule, $hasDeleted, $mainRelatedModule, $mainRelatedKey, $rhsKey, $getRelateLinks, $linkColor, $auditedReport = 0, $treeMode = false, $subQueryMode = false) {

		global $current_user, $db, $sugar_config, $timedate, $mod_strings;
		
		$modulesTables = ($database === '-1' ? asol_ReportsUtils::getModuleTablesAssociation($current_user->id) : null);
		$usedModules = explode('::', $mainRelatedModule);
		
		$selectedModule = ((($database === '-1') && (!empty($mainRelatedModule))) ? array_search(end($usedModules), $modulesTables) : $currentModule);
		$selectedModule = (empty($selectedModule) ? $currentModule : $selectedModule);
		
		if ($database === '-1') {
			foreach ($usedModules as & $usedModule) {
				$usedModule = (isset($modulesTables[$usedModule]) ? $modulesTables[$usedModule] : $usedModule);
			}
			$mainRelatedTable = implode('::', $usedModules);
		} else {
			$mainRelatedTable = $mainRelatedModule;
		}
		
		
		$translateFieldLabels = ((!isset($sugar_config['asolReportsTranslateLabels'])) || ($sugar_config['asolReportsTranslateLabels'])) ? true : false;
		
		
		$currentTableFields = array();
	
		if (empty($rhsKey)) {

			return array(
				'html' => '<select id="related_fields" name="related_fields" size=10 onDblClick="" multiple></select>',
				'javascript' => ''
			);
			
		}
		
		if (($database >= 0) && ($selectedModule != '')) {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'alternative_database' => $database,
				'sel_altDbTable' => $selectedModule,
				'mainRelatedKey' => $mainRelatedKey,
				'rhs_key' => $rhsKey
			);
			
			$currentTableFields = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalTableFields", $extraParams);
			
			if ($currentTableFields !== false) {
				$rhsKey = $currentTableFields['rhs_key'];
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else if (($selectedModule != '')) {
			
			$fieldsToBeRemoved = self::getNonVisibleFields($selectedModule, $hasDeleted);
			$bean = BeanFactory::newBean($selectedModule);
				
			if ($auditedReport == 1)
				$currentTableFields = asol_ReportsManagementFunctions::getAuditTableFields($bean, $fieldsToBeRemoved, $rhsKey, $mainRelatedKey);
			else 
				$currentTableFields = asol_ReportsManagementFunctions::getCrmTableRelatedFields($selectedModule, $bean, $fieldsToBeRemoved, $translateFieldLabels, $rhsKey, $mainRelatedKey);

		}

		$fields_relationship = (isset($currentTableFields['fields_relationship'])) ? $currentTableFields['fields_relationship'] : null;
		$fields_relationship_labels = (isset($currentTableFields['fields_relationship_labels'])) ? $currentTableFields['fields_relationship_labels'] : null;
		
		$fields = (isset($currentTableFields['fields'])) ? $currentTableFields['fields'] : null;
		$fields_labels = (isset($currentTableFields['fields_labels'])) ? $currentTableFields['fields_labels'] : null;
		$fields_type = (isset($currentTableFields['fields_type'])) ? $currentTableFields['fields_type'] : null;
		$fields_enum_operators = (isset($currentTableFields['fields_enum_operators'])) ? $currentTableFields['fields_enum_operators'] : null;
		$fields_enum_references = (isset($currentTableFields['fields_enum_references'])) ? $currentTableFields['fields_enum_references'] : null;

		$has_index = (isset($currentTableFields['has_index'])) ? $currentTableFields['has_index'] : null;
		$has_related = (isset($currentTableFields['has_related'])) ? $currentTableFields['has_related'] : null;
		
		$fields_labels_lowercase = array_map(array("self", "addRelationShipNameToLowerCase"), (!empty($fields_labels) ? $fields_labels : array()), (!empty($fields_relationship_labels) ? $fields_relationship_labels : array()) );
		
		if (!empty($fields_labels_lowercase)) {
			if (is_array($rhsKey))
				array_multisort($fields_labels_lowercase, $fields_labels, $fields, $fields_relationship_labels, $fields_relationship, $fields_type, $has_index, $has_related, $fields_enum_operators, $fields_enum_references, $rhsKey);
			else
				array_multisort($fields_labels_lowercase, $fields_labels, $fields, $fields_relationship_labels, $fields_relationship, $fields_type, $has_index, $has_related, $fields_enum_operators, $fields_enum_references);
		}
			
		$fields = (!empty($fields)) ? $fields : array();
		$fields_labels = (!empty($fields_labels)) ? $fields_labels : array();
		
		$fields_relationship = (!empty($fields_relationship)) ? $fields_relationship : array();
		$fields_relationship_labels = (!empty($fields_relationship_labels)) ? $fields_relationship_labels : array();
		
		$has_index = (!empty($has_index)) ? $has_index : array();
		$has_related = (!empty($has_related)) ? $has_related : array();


		if ($treeMode) {
		
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'database' => $database,
				'getRelateLinks' => $getRelateLinks,
				'auditedReport' => $auditedReport,
			
				'reportModule' => null,
			
				'mainRelatedModule' => $mainRelatedModule,
				'mainRelatedTable' => $mainRelatedTable,
				'rhsKey' => $rhsKey,
				
				'fields' => $fields,
				'fields_labels' => $fields_labels,
				'fields_type' => $fields_type,
				'fields_enum_operators' => $fields_enum_operators,
				'fields_enum_references' => $fields_enum_references,
				'fields_relationship' => $fields_relationship,
				'fields_relationship_labels' => $fields_relationship_labels,
				'has_index' => $has_index,
				'has_related' => $has_related,
			
				'linkColor' => $linkColor,
				'subQueryMode' => $subQueryMode
			);
			$returnedTreeSelectorHtml = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getTreeSelectorHtml", $extraParams);
			$returnedHtml = ($returnedTreeSelectorHtml !== false) ? $returnedTreeSelectorHtml : '';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else {

			$returnedHtml = '<select id="related_fields" name="related_fields" size=10 onClick="setShowRelatedButtonVisibility(true)" onDblClick="getRelatedFields(true, null, null, null)" multiple>';
	
			$aux_counter = 0;
			$currentModule = null;
			$previousModule = null;
	
			foreach ($fields as $index=>$field) {
	
				$currentModule = explode(".", $field);
				$currentModule = ((substr($currentModule[0], -strlen('_cstm')) === '_cstm') ? substr($currentModule[0], 0, -strlen('_cstm')) : $currentModule[0]);
				$currentModule = $fields_relationship[$index].$currentModule;
				
				if ($currentModule != $previousModule) {
				
					if ($aux_counter != 0) {
						$returnedHtml .= '</optgroup>';
					}
					
					if ($aux_counter + 1 != count($fields)) {
						
						$fields_label_array = explode(".", $fields_labels[$index]);
						$aux_current_module_label = $fields_label_array[0];
						
						if (($aux_current_module_label == $fields_relationship_labels[$index]) || ($fields_relationship_labels[$index] == ""))
							$returnedHtml .= '<optgroup title="'.$aux_current_module_label.'" label="'.$aux_current_module_label.'">';
						else
							$returnedHtml .= '<optgroup title="'.$aux_current_module_label.' ('.$fields_relationship_labels[$index].')" label="'.$aux_current_module_label.' ('.$fields_relationship_labels[$index].')">';
						
					}
					
				}
	
				$fieldLabelExploded = explode(".", $fields_labels[$index]);
				$field = (!empty($mainRelatedTable) ? $mainRelatedTable.'::'.$field : $field);
				$fieldExploded = explode(".", $field);
	
				$fieldTable = ((substr($fieldExploded[0], -strlen('_cstm')) === '_cstm') ? substr($fieldExploded[0], 0, -strlen('_cstm')) : $fieldExploded[0]);
				$fieldTables = explode('::', $fieldTable);
				
				$fieldModule = (($database === '-1') ? (!empty($mainRelatedModule) ? $mainRelatedModule.'::' : '').array_search(end($fieldTables), $modulesTables) : $fieldTable);
				
				$fieldKey = (is_array($rhsKey) ? $rhsKey[$index] : $rhsKey);
				$isRelated = (($has_related[$index] != "false") && ($getRelateLinks));
	
				$returnedHtml .= '<option '.($isRelated ? 'style="color: '.$linkColor.';"' : '').' onContextMenu="getReportVariableHover(\''.$field.'\', \''.$fieldModule.'\', \''.$fieldKey.'\', this); return false;" title="'.$field.'" value="'.$field.'" fieldValue="'.$field.'" fieldIndex="'.$index.'" fieldType="'.$fields_type[$index].'" fieldEnumOp="'.$fields_enum_operators[$index].'" fieldEnumRef="'.$fields_enum_references[$index].'" fieldLabel="'.$fields_labels[$index].'" fieldModule="'.$fieldModule.'" fieldKey="'.$fieldKey.'">'.$fieldLabelExploded[1].($isRelated ? ' +' : '').'</option>';
	
			
				$previousModule = $currentModule;
				$aux_counter++;
			
			}
			
			$returnedHtml .= '</optgroup>';
			$returnedHtml .= '</select>';

		}
		
		$returnedJavascript = 'InsertFields(\'fields_Table\', null, true, \''.$auditedReport.'\');';
			
		return array(
			'html' => $returnedHtml,
			'javascript' => $returnedJavascript,
			'rhsKey' => $rhsKey,
			'relatedModule' => $currentModule
		);
				
	}
	
	static public function getFieldsHeadersHtml($selectedDb, $rowIndexDisplay, $reportTemplates, $fieldsConfig, $joinsConfig = null, $selectedCssValue = null) {

		global $mod_strings;
		
		$returnedHtml = '
		<input type="hidden" id="tableConfiguration" value="'.urlencode(json_encode($fieldsConfig)).'" />
		<input type="hidden" id="commonTemplates" value="'.urlencode(json_encode($reportTemplates)).'" />
		<table id="fields_Table" class="list view">
			<thead>
				<tr>
					<td colspan="10">
						<h4 style="border-radius:0">
							<div>
								'.$mod_strings['LBL_REPORT_COLUMNS'].'
								<img title="'.$mod_strings['LBL_REPORT_TABLE_CONFIGURATION'].'" style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_configure_table.png" class="asol_icon configure_table_btn clickable" onclick="showTableConfig(\'tableConfiguration\');">
								<img title="'.$mod_strings['LBL_REPORT_EXTERNAL_FILTER_REFERENCE'].'"	style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_references.png" class="asol_icon references_btn clickable" onclick="showReferencesFields();">';		
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$returnedPremiumReportCssHtml = asol_CommonUtils::managePremiumFeature("cssPerElement", "commonFunctions.php", "getCommonCssButton", array('selectedValue' => $selectedCssValue));
								$returnedHtml .= ($returnedPremiumReportCssHtml !== false) ? $returnedPremiumReportCssHtml : '';
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								
								$returnedHtml .= '
							</div>
						</h4>
					</td>
				</tr>
				<tr>
					<th nowrap="nowrap" scope="col" class="center">
						<input type="checkbox" class="massiveCheck_all" />
						<input type="hidden" id="fieldsGlobalIndex" value="0">
					</th>
					<th nowrap="nowrap" scope="col" class="aliasHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_ALIAS'].'
						<img title="'.$mod_strings['LBL_REPORT_FIELD_ORDERING'].'" style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_reorder.png" class="asol_icon reorder_fields_btn clickable" onclick="showFieldOrdering();">';
					

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedPremiumMultiLanguageHtml = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getMultiLanguageButton", array('isField' => true));
		$returnedHtml .= ($returnedPremiumMultiLanguageHtml !== false) ? $returnedPremiumMultiLanguageHtml : '';
		
		$returnedPremiumJoinSetUpHtml = asol_ReportsUtils::managePremiumFeature("multiJoinSupport", "reportFunctions.php", "getMultiJoinButton", array('joinsConfig' => $joinsConfig));
		$returnedHtml .= ($returnedPremiumJoinSetUpHtml !== false) ? $returnedPremiumJoinSetUpHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$returnedHtml .= '
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="functionHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_FUCTION'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="formatTypeHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_FORMAT_TYPE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="groupByHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_GROUP_BY_LAYOUT'].'
						<img title="'.$mod_strings['LBL_REPORT_GROUP_ORDERING'].'" style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_reorder.png" class="asol_icon reorder_grouping_btn clickable" onclick="showGroupOrdering();">
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
					</th>
				</tr>
			</thead>
			
			<tfoot>
				<tr>
					<td colspan="8">
						<input disabled type="button" class="massiveBtn_all" value="'.$mod_strings['LBL_REPORT_MULTIDELETE_ROW'].'" onClick="deleteRowsByCustomCode(\'fields_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\', \'LBL_REPORT_MULTIDELETE_ROW_ALERT\', \'deleteFieldCode\');"/>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
				<tr class="asolReportsFieldsIndexRow'.($rowIndexDisplay == '1' ? '' : ' hiddenRow').'">
					<td></td>
					<td><b>'.$mod_strings['LBL_REPORT_ROW_INDEX'].'</b></td>
					<td colspan="3"></td>
					<td align="right">
						<input type="hidden" name="rowIndexDisplay" id="rowIndexDisplay" value="'.$rowIndexDisplay.'" class="index_display">
						<img title="'.$mod_strings['LBL_REPORT_VISIBLE'].'" src="modules/asol_Reports/include/images/asol_reports_visible.png" class="index_visible asol_icon clickable" style="display: '.($rowIndexDisplay == '1' ? 'inline' : 'none').';">
						<img title="'.$mod_strings['LBL_REPORT_HIDDEN'].'" src="modules/asol_Reports/include/images/asol_reports_hidden.png" class="index_hidden asol_icon clickable" style="display: '.($rowIndexDisplay == '1' ? 'none' : 'inline').';">	
					</td>
				</tr>
			</tbody>
		</table>
		
		<div id="tableConfigurationDialog" class="tableConfigurationDialog" style="display: none">';

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedCalculationModeHtml = asol_ReportsUtils::managePremiumFeature("calculationMode", "reportFunctions.php", "getReportCalculationModeHtml", array('multiQueryFlag' => ((isset($fieldsConfig['multiQuery'])) && ($fieldsConfig['multiQuery'])), 'grossExecutionFlag' => ((isset($fieldsConfig['grossExecution'])) && ($fieldsConfig['grossExecution'])), 'trustedExecutionFlag' => ((isset($fieldsConfig['trustedExecution'])) && ($fieldsConfig['trustedExecution']))));
		$returnedHtml .= ($returnedCalculationModeHtml !== false) ? $returnedCalculationModeHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
					
		$returnedHtml .= '
			<table id="fieldManagement" style="display: '.($selectedDb == '-1' ? 'inline-table' : 'none').';" class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_FIELD_MANAGEMENT'].'</h4>
						</th>
					</tr>
					<tr>
						<td>
							<input '.((isset($fieldsConfig['deletedUsage']) && $fieldsConfig['deletedUsage']) ? "checked " : " ").'type="checkbox" id="deleted_usage" name="deleted_usage" value="1">&nbsp;'.$mod_strings['LBL_REPORT_DELETED_USAGE'].'</input>
						</td>
					</tr>
				</tbody>
			</table>
			<table id="paginationManagement" class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_PAGINATION_MANAGEMENT'].'</h4>
						</th>
					</tr>
					<tr>
						<td colspan="2">
							<input '.((isset($fieldsConfig['paginationUsage']) && $fieldsConfig['paginationUsage']) ? "checked " : " ").'type="checkbox" id="pagination_usage" name="pagination_usage" value="1">&nbsp;'.$mod_strings['LBL_REPORT_PAGINATION_USAGE'].'</input>
						</td>
					</tr>
					<tr>
						<td scope="col">
							'.$mod_strings['LBL_REPORT_PAGINATION_ENTRIES'].'
						</td>
						<td>
							<input value="'.$fieldsConfig['paginationEntries'].'" id="pagination_entries" name="pagination_entries">
						</td>
					</tr>
				</tbody>
			</table>
			<table id="dataPresentation" class="edit view edit508">
				<tbody>
					<tr>
						<th>
							<h4>'.$mod_strings['LBL_REPORT_DATA_PRESENTATION'].'</h4>
						</th>
					</tr>
					<tr>
						<td>
							<input '.((isset($fieldsConfig['expandGroupedTotals']) && $fieldsConfig['expandGroupedTotals']) ? "checked " : " ").'type="checkbox" id="expand_grouped_totals" name="expand_grouped_totals" value="1">&nbsp;'.$mod_strings['LBL_REPORT_EXPAND_GROUPED_TOTALS'].'</input>
						</td>
					</tr>
					<tr>
						<td>
							<input '.((isset($fieldsConfig['cleanUpStyling']) && $fieldsConfig['cleanUpStyling']) ? "checked " : " ").'type="checkbox" id="clean_up_styling" name="clean_up_styling" value="1">&nbsp;'.$mod_strings['LBL_REPORT_CLEAN_UP_STYLING'].'</input>
						</td>
					</tr>
					<tr>
						<td>
							<input '.((isset($fieldsConfig['lightWeightHtml']) && $fieldsConfig['lightWeightHtml']) ? "checked " : " ").'type="checkbox" id="light_weight_html" name="light_weight_html" value="1">&nbsp;'.$mod_strings['LBL_REPORT_LIGHT_WEIGHT_HTML'].'</input>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_VISIBILITY'].'</h4>
						</th>
					</tr>
					<tr>
						<td scope="col">
							<label for="titles_visibility">'.$mod_strings['LBL_REPORT_TITLES'].':</label>
						</td>
						<td>
							<select id="titles_visibility">
								<option value="true">'.$mod_strings['LBL_REPORT_VISIBLE'].'</option>
								<option value="false">'.$mod_strings['LBL_REPORT_HIDDEN'].'</option>
							</select>
						</td>
					</tr>
					<tr>
						<td scope="col">
							<label for="headers_visibility">'.$mod_strings['LBL_REPORT_HEADERS'].':</label>
						</td>
						<td>
							<select id="headers_visibility">
								<option value="true">'.$mod_strings['LBL_REPORT_VISIBLE'].'</option>
								<option value="false">'.$mod_strings['LBL_REPORT_HIDDEN'].'</option>
							</select>
						</td>
					</tr>
					<tr>
						<td scope="col">
							<label for="subtotals_visibility">'.$mod_strings['LBL_REPORT_SUBTOTALS'].':</label>
						</td>
						<td>
							<select id="subtotals_visibility">
								<option value="true">'.$mod_strings['LBL_REPORT_VISIBLE'].'</option>
								<option value="false">'.$mod_strings['LBL_REPORT_HIDDEN'].'</option>
							</select>
						</td>
					</tr>
					<tr>
						<td scope="col">
							<label for="totals_visibility">'.$mod_strings['LBL_REPORT_TOTALS'].':</label>
						</td>
						<td>
							<select id="totals_visibility">
								<option value="true">'.$mod_strings['LBL_REPORT_VISIBLE'].'</option>
								<option value="false">'.$mod_strings['LBL_REPORT_HIDDEN'].'</option>
							</select>
						</td>
					</tr>
					<tr>
						<td scope="col">
							<label for="pagination_visibility">'.$mod_strings['LBL_REPORT_PAGINATION'].':</label>
						</td>
						<td>
							<select id="pagination_visibility">
								<option value="all">'.$mod_strings['LBL_REPORT_PAGINATION_ALL'].'</option>
								<option value="top">'.$mod_strings['LBL_REPORT_PAGINATION_TOP'].'</option>
								<option value="bottom">'.$mod_strings['LBL_REPORT_PAGINATION_BOTTOM'].'</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="hidden" id="tableConfigStore" />
			<input type="button" onclick="saveTableConfig();" value="'.$mod_strings['LBL_REPORT_SAVE'].'" />
			<input type="button" onclick="discardTableConfig();" value="'.$mod_strings['LBL_REPORT_CANCEL'].'" />
		</div>
		<div id="tableFieldOrderingDialog" class="tableFieldOrderingDialog" style="display: none">
			<table class="edit view edit508">
				<thead>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_FIELD_ORDERING'].'</h4>
						</th>
					</tr>
				</thead>
				<tbody class="fieldOrderListContainer">
				</tbody>
			</table>
			<input type="button" onclick="saveFieldOrdering();" value="'.$mod_strings['LBL_REPORT_SAVE'].'" />
			<input type="button" onclick="discardFieldOrdering();" value="'.$mod_strings['LBL_REPORT_CANCEL'].'" />
		</div>
		<div id="tableGroupOrderingDialog" class="tableGroupOrderingDialog" style="display: none">
			<table class="edit view edit508">
				<thead>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_GROUP_ORDERING'].'</h4>
						</th>
					</tr>
				</thead>
				<tbody class="groupOrderListContainer">
				</tbody>
			</table>
			<input type="button" onclick="saveGroupOrdering();" value="'.$mod_strings['LBL_REPORT_SAVE'].'" />
			<input type="button" onclick="discardGroupOrdering();" value="'.$mod_strings['LBL_REPORT_CANCEL'].'" />
		</div>';
		

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedPremiumMultiLanguageHtml = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getMultiLanguagePanel", null);
		$returnedHtml .= ($returnedPremiumMultiLanguageHtml !== false) ? $returnedPremiumMultiLanguageHtml : '';
		
		$returnedPremiumMultiJoinHtml = asol_ReportsUtils::managePremiumFeature("multiJoinReport", "reportFunctions.php", "getMultiJoinPanel", null);
		$returnedHtml .= ($returnedPremiumMultiJoinHtml !== false) ? $returnedPremiumMultiJoinHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//	
			
		return $returnedHtml;
				
	}
	
	public static function getFiltersHeadersHtml($results_limit) {
		
		global $mod_strings;
		
		$returnedHtml = '
		<input type="hidden" id="filtersConfiguration" />
		<table id="filters_Table" class="list view">
			<thead>
				<tr>
					<td colspan="8">
							<h4 style="border-radius:0">
							'.$mod_strings['LBL_REPORT_FILTERS'].'
							<img title="'.$mod_strings['LBL_REPORT_FILTERS_CONFIGURATION'].'" style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_configure_filters.png" class="asol_icon configure_filters_btn clickable" onclick="showFiltersConfig();">
							<img title="'.$mod_strings['LBL_REPORT_EXTERNAL_FILTER_REFERENCE'].'"	style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_references.png" class="asol_icon references_btn clickable" onclick="showReferencesFilters();">';
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
							$filtersLayoutButton = asol_ReportsUtils::managePremiumFeature("filtersLayoutDefinition", "reportFunctions.php", "getFiltersLayoutButton", null);
							$returnedHtml .= ($filtersLayoutButton !== false ? $filtersLayoutButton : '');
				
							$filtersListenersButton = asol_ReportsUtils::managePremiumFeature("filtersListenersManagement", "reportFunctions.php", "getListenersManagementButton", null);
							$returnedHtml .= ($filtersListenersButton !== false ? $filtersListenersButton : '');
							//***********************//
							//***AlineaSol Premium***//
							//***********************//
						$returnedHtml .='				
						</h4>
					</td>
				</tr>
				<tr>
					<th nowrap="nowrap" scope="col" class="center">
						<input type="checkbox" class="massiveCheck_all" />
						<input type="hidden" id="filtersGlobalIndex" value="0">
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_LOGICAL_OPERATORS'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="aliasHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_ALIAS'].' ';
						
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedPremiumMultiLanguageHtml = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getMultiLanguageButton", array('isField' => false));
		$returnedHtml .= ($returnedPremiumMultiLanguageHtml !== false ? $returnedPremiumMultiLanguageHtml : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$returnedHtml .= '
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="behaviorHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_BEHAVIOR'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="operatorHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_OPERATOR'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="firstParamHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_FIRST_PARAMETER'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col" class="secondParamHeader">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_SECOND_PARAMETER'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
					</th>
				</tr>
			</thead>
			
			<tfoot>
				<tr>
					<td colspan="10">
						<input disabled type="button" class="massiveBtn_all" value="'.$mod_strings['LBL_REPORT_MULTIDELETE_FILTER'].'" onClick="deleteRows(\'filters_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\', \'LBL_REPORT_MULTIDELETE_FILTER_ALERT\');"/>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="asolReportsFilterResults">
				<tr class="asolReportsFiltersResultsRow">
					<td></td>
					<td></td>
					<td><b>'.$mod_strings['LBL_REPORT_RESULTS'].'</b></td>
					<td colspan="2"></td>
					<td>
						<select id="results_limit_op" name="results_limit_op" onChange="if (this.value == \'all\') { document.getElementById(\'results_limit_param\').style.visibility=\'hidden\'; document.getElementById(\'results_limit_amount\').style.visibility=\'hidden\'; } else { document.getElementById(\'results_limit_param\').style.visibility=\'visible\'; document.getElementById(\'results_limit_amount\').style.visibility=\'visible\'; }">
							<option value="all" '.($results_limit['operator'] == "all" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_ALL'].'</option>
							<option value="limit" '.($results_limit['operator'] == "limit" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_LIMIT'].'</otion>
						</select>
					</td>
					<td>
						<select id="results_limit_param" name="results_limit_param" style="visibility: '.($results_limit['operator'] == 'all' ? 'hidden' : 'visible').';">
							<option value="first" '.($results_limit['first_param'] == "first" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_FIRST_RESULTS'].'</option>
							<option value="last" '.($results_limit['first_param'] == "last" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_LAST_RESULTS'].'</option>
						</select>
					</td>
					<td>
						<input type="text" id="results_limit_amount" name="results_limit_amount" value="'.$results_limit['second_param'].'" style="visibility: '.($results_limit['operator'] == 'all' ? 'hidden' : 'visible').';">
					</td>
					<td>
					</td>
				</tr>
			</tbody>
			<tbody class="asolReportsFilterWhere asolReportsFilterContainer">
				<tr>
					<td colspan=11>		
						<h4>'.$mod_strings['LBL_REPORT_WHERE_FILTERS'].'&nbsp;<img onclick="showLogicalRepresentation(this);" class="asol_icon clickable" src="modules/asol_Reports/include/images/asol_reports_logical.png" style="vertical-align: middle; display: inline;" title="'.$mod_strings['LBL_SHOW_LOGICAL_REPRESENTATION'].'"></h4>
					</td>
				</tr>
			</tbody>			
			<tbody class="asolReportsFilterHaving asolReportsFilterContainer">
				<tr>
					<td colspan=11>
						<h4>'.$mod_strings['LBL_REPORT_HAVING_FILTERS'].'&nbsp;<img onclick="showLogicalRepresentation(this);" class="asol_icon clickable" src="modules/asol_Reports/include/images/asol_reports_logical.png" style="vertical-align: middle; display: inline;" title="'.$mod_strings['LBL_SHOW_LOGICAL_REPRESENTATION'].'"></h4>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="filtersConfigurationDialog" class="filtersConfigurationDialog" style="display: none">
			<table class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_USER_INPUT'].'</h4>
						</th>
					</tr>
					<tr>
						<td>
							'.asol_ReportsManagementFunctions::getReportInitialExecutionHtml().'
						</td>
					</tr>
				</tbody>
			</table>
			<table class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_SEARCH_BEHAVIOUR'].'</h4>
						</th>
					</tr>
					<tr>
						<td>
							'.asol_ReportsManagementFunctions::getDisallowTrim().'
						</td>
					</tr>
				</tbody>
			</table>';

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedDataPresentationHtml = asol_ReportsUtils::managePremiumFeature("filtersDataPresentation", "reportFunctions.php", "getFiltersDataPresentationPanel", null);
		$returnedHtml .= ($returnedDataPresentationHtml !== false) ? $returnedDataPresentationHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//

		$returnedHtml .= '
			<table class="edit view edit508">
				<tbody>
					<tr>
						<th colspan="2">
							<h4>'.$mod_strings['LBL_REPORT_DISPLAY_BUTTONS'].'</h4>
						</th>
					</tr>
					<tr>
						<td>
							'.asol_ReportsManagementFunctions::getReportDisplayButtons().'
						</td>
					</tr>
				</tbody>
			</table>
									
			<input type="button" onclick="saveFiltersConfig();" value="'.$mod_strings['LBL_REPORT_SAVE'].'" />
			<input type="button" onclick="discardFiltersConfig();" value="'.$mod_strings['LBL_REPORT_CANCEL'].'" />
		</div>';
					
		return $returnedHtml;
		
	}
	
	public static function getChartsHeadersHtml($selectedEngine) {
		
		global $mod_strings;
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$returnedPremiumMultiLanguageHtml = asol_ReportsUtils::managePremiumFeature("multiLanguageChartsTitle", "reportFunctions.php", "getMultiLanguageChartsButton", null);
		$multiLanguageChartsButton = ($returnedPremiumMultiLanguageHtml !== false) ? $returnedPremiumMultiLanguageHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$returnedHtml = '
		<h4 class="reportPanelHeader">'.asol_ReportsManagementFunctions::getCollapsableHeader('LBL_REPORT_CHARTS_TITLE', 'charts').'</h4>
		<table id="charts_Table_Wrapper" class="edit view">
			<tr>
				<td>
					<table class="list view" id="charts_Table">
						<thead>
							<tr>
								<td colspan="10">
									<h4>
										'.$mod_strings['LBL_REPORT_CHARTS_ENGINE'].': '.asol_ReportsManagementFunctions::getReportChartEngineSelectHtml($selectedEngine).' 
									    <img title="'.$mod_strings['LBL_REPORT_EXTERNAL_FILTER_REFERENCE'].'"	style="vertical-align: text-bottom; display: inline;" src="modules/asol_Reports/include/images/asol_reports_references.png" class="asol_icon references_btn clickable" onclick="showReferencesCharts();">									
										'.$multiLanguageChartsButton.'
										<img class="asol_icon clickable" title="'.$mod_strings['LBL_REPORT_ADD_CHART'].'" onClick="InsertChart(\'charts_Table\'); if (typeof window.hasPremiumReportsJsFeatures == \'function\') { applyChartsRestrictions(); };" src="modules/asol_Reports/include/images/asol_reports_addline.png" style="float:right">		
									</h4>
								</td>
							</tr>	
							<tr>
								<th nowrap="nowrap" scope="col" class="center">
									<input type="checkbox" class="massiveCheck_all" />
								</th>
								<th nowrap="nowrap" scope="col">
									<div align="left" width="100%" style="white-space: nowrap;">
									'.$mod_strings['LBL_REPORT_CHARTS_NAME'].'
									</div>
								</th>
								<th nowrap="nowrap" scope="col">
									<div align="left" width="100%" style="white-space: nowrap;">
									'.$mod_strings['LBL_REPORT_CHARTS_TYPE'].'
									</div>
								</th>
								<th nowrap="nowrap" scope="col">
									<div align="left" width="100%" style="white-space: nowrap;">
									'.$mod_strings['LBL_REPORT_CHARTS_X_AXIS'].'
									</div>
								</th>		
								<th nowrap="nowrap" scope="col">
									<div align="left" width="100%" style="white-space: nowrap;">
									'.$mod_strings['LBL_REPORT_CHARTS_Y_AXIS'].'
									</div>
								</th>';
								
								
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$returnedPremiumHtml = asol_ReportsUtils::managePremiumFeature("bubbleReportCharts", "reportFunctions.php", "getChartsZIndexHeader", null);
								$returnedHtml .= ($returnedPremiumHtml !== false) ? $returnedPremiumHtml : '';
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								
								
		$returnedHtml .= '
								<th nowrap="nowrap" scope="col">
									<div align="right" style="white-space: nowrap;" width="100%">
										<input type="hidden" value="0" id="chartsGlobalIndex">
									</div>
								</th>
							</tr>
						</thead>
						
						<tfoot>
							<tr>
								<td colspan="9">
									<input disabled type="button" class="massiveBtn_all" value="'.$mod_strings['LBL_REPORT_MULTIDELETE_CHART'].'" onClick="deleteRowsByCustomCode(\'charts_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\', \'LBL_REPORT_MULTIDELETE_CHART_ALERT\', \'deleteChartCode\');"/>
								</td>
							</tr>
						</tfoot>
			
					</table>
				</td>
			</tr>
		</table>';
		
		return $returnedHtml;
		
	}
	
	public static function getTasksHeadersHtml() {
		
		global $mod_strings;
		
		$returnedHtml = '
		<h4 class="reportPanelHeader">'.asol_ReportsManagementFunctions::getCollapsableHeader('LBL_REPORT_SCHEDULED_TASKS', 'scheduledDiv').'</h4>
		<table class="list view" id="tasks_Table">
			<thead>
				<tr>
					<th nowrap="nowrap" scope="col" class="center">
						<input type="checkbox" class="massiveCheck_all" />
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_TASK_NAME'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_EXECUTION_RANGE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_DAY_VALUE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_TIME_VALUE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_EXECUTION_END_DATE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="left" width="100%" style="white-space: nowrap;">
						'.$mod_strings['LBL_REPORT_TASK_STATE'].'
						</div>
					</th>
					<th nowrap="nowrap" scope="col">
						<div align="right" width="100%" style="white-space: nowrap;">
						<input type="button" class="button" value="'.$mod_strings['LBL_REPORT_ADD_TASK'].'" onClick="insertTask(\'tasks_Table\')">
						<input type="hidden" id="tasksGlobalIndex" value="0">
						</div>
					</th>
				</tr>
			</thead>
			
			<tfoot>
				<tr>
					<td colspan="8">
						<input disabled type="button" class="massiveBtn_all" value="'.$mod_strings['LBL_REPORT_MULTIDELETE_TASK'].'" onClick="deleteRows(\'tasks_Table\', \'massiveCheck\', \'massiveCheck_all\', \'massiveBtn_all\', \'LBL_REPORT_MULTIDELETE_TASK_ALERT\');"/>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
			</tbody>
		</table>
		';
		
		return $returnedHtml;
		
	}
	
	public static function getHiddenInputs($report_id, $rhs_key, $scheduledTypeInfo, $mySQLcheckInsecurity, $PHPcheckInsecurity, $availablePhpFunctionsJson, $predefinedTemplates, $dynamicTables, $dynamicSql, $isMeta, $metaHtml) {
		
		$returnedHtml = '
		<input type="hidden" value="asol_Reports" name="module">
		<input type="hidden" value="'.$report_id.'" name="record">
		<input type="hidden" value="false" name="isDuplicate">
		<input type="hidden" value="EditView" name="action">
		<input type="hidden" value="asol_Reports" name="return_module">
		<input type="hidden" value="refresh" name="return_action">
		<input type="hidden" value="" name="relate_id">
		<input type="hidden" value="'.$rhs_key.'" name="rhs_key">
		<input type="hidden" name="module_tab">
		<input type="hidden" name="contact_role">
		<input type="hidden" value="asol_Reports" name="relate_to">
		<input type="hidden" value="1" name="offset">
		<input type="hidden" value="-1" name="rowIndex">
		<input type="hidden" value="'.$isMeta.'" name="is_meta">
		<input type="hidden" value="'.$metaHtml.'" name="metaHtml">
				
		<input type="hidden" value="" name="selected_fields">
		<input type="hidden" value="" name="selected_filters">
		<input type="hidden" value="" name="selected_tasks">
		<input type="hidden" value="" name="selected_charts">
		<input type="hidden" value="" name="email_list">

		<input type="hidden" value="'.$dynamicTables.'" name="dynamic_tables">
		<input type="hidden" value="'.$dynamicSql.'" name="dynamic_sql">
				
		<input type="hidden" value="" name="row_index_display">
		<input type="hidden" value="" name="results_limit">
		
		<input type="hidden" value="'.$mySQLcheckInsecurity.'" id="mySQLcheckInsecurity">
		<input type="hidden" value="'.$PHPcheckInsecurity.'" id="PHPcheckInsecurity">
		<input type="hidden" value="'.$availablePhpFunctionsJson.'" id="asolReportsAvailablePhpFunctions">
		';
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array('predefinedTemplates' => $predefinedTemplates);
		$templatesJsonFields = asol_CommonUtils::managePremiumFeature("predefinedTemplates", "commonFunctions.php", "getTemplatesJsonFields", $extraParams);
		$returnedHtml .= ($templatesJsonFields !== false ? $templatesJsonFields : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//		
		$extraParams = array('scheduledTypeInfo' => $scheduledTypeInfo);
		$scheduledTypeInfoFields = asol_ReportsUtils::managePremiumFeature("externalApplicationsFTP", "reportFunctions.php", "getScheduledTypeInfoFields", $extraParams);
		$returnedHtml .= ($scheduledTypeInfoFields !== false ? $scheduledTypeInfoFields : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		return $returnedHtml;
		
	}
	
	public static function getSubmitButtons($isMetaReport, $hasPreviewExecution) {
		
		global $mod_strings;

		$returnedHtml = '
		<input type="submit" value="'.$mod_strings['LBL_REPORT_SAVE'].'" onclick="return saveReport();" class="button saveButton">
		<input type="submit" value="'.$mod_strings['LBL_REPORT_CANCEL'].'" onclick="return cancelReport();" class="button cancelButton">
		';
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$showSqlButtonHtml = asol_ReportsUtils::managePremiumFeature("showSQLQuery", "reportFunctions.php", "showSqlQueryButton", array("isMetaReport" => $isMetaReport));
		$returnedHtml .= ($showSqlButtonHtml !== false) ? $showSqlButtonHtml : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
				
		if ($hasPreviewExecution) {
			$returnedHtml .= '<input type="button" value="'.$mod_strings['LBL_REPORT_RUN'].'" onclick="executeReport();" class="button executeButton">';
		}
		
		return $returnedHtml;				
		
	}
	
	public static function getReportNameHtml($report_name, $idDisabled) {
		
		global $mod_strings;
		
		return '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_NAME'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">
			<input '.($idDisabled ? 'disabled' : '').' type="text" class="report_name" value="'.$report_name.'" maxlength="" size="30" id="report_name" name="report_name">
		</td>
		';
		
	}
	
	public static function getReportAssignedUserHtml($assigned_user_id, $assigned_user_name) {
		
		global $app_strings, $mod_strings;
		
		return '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_ASSIGNED_TO'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">
			<input type="hidden" name="assigned_user_id" value="'.$assigned_user_id.'">
			<input type="text" autocomplete="off" title="" value="'.$assigned_user_name.'" size="30" id="assigned_user_name" class="sqsEnabled yui-ac-input" name="assigned_user_name">
			<button type="button" onclick="open_popup(\'Users\', 600, 400, \'\', true, false, {\'call_back_function\':\'set_return\',\'form_name\':\'create_form\',\'field_to_name_array\':{\'id\':\'assigned_user_id\',\'user_name\':\'assigned_user_name\'}}, \'single\', true);" class="button" title="'.$app_strings['LBL_SELECT_BUTTON_LABEL'].'" id="btn_assigned_user_name" name="btn_assigned_user_name"><img src=\'themes/default/images/id-ff-select.png\'></button>
			<button type="button" onclick="document.create_form.assigned_user_name.value = \'\'" class="button" title="'.$app_strings['LBL_CLEAR_BUTTON_LABEL'].'" id="btn_clr_assigned_user_name" name="btn_clr_assigned_user_name"><img src=\'themes/default/images/id-ff-clear.png\'></button>
		</td>
		';
		
	}
	
	public static function getReportDatabaseHtml($alternativeDb, $selectedDb, $isDisabled) {
		
		global $mod_strings;
		
		$returnedHtml = '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_USE_ALTERNATIVE_DB'].':
		</td>

		<td nowrap="nowrap" width="35%">
			
			<select '.($isDisabled ? 'disabled' : '').' id="alternative_database" name="alternative_database" class="alternative_database" onChange="manageReportDatabase(this.value);">						
						
				<option value="-1">'.$mod_strings['LBL_REPORT_NATIVE_DB'].'</option>';

				foreach ($alternativeDb as $dbIndex=>$altDb) {
					$altDbText = $altDb['asolReportsDbAddress'].":".$altDb['asolReportsDbPort']." -> ".$altDb['asolReportsDbName'];
  					$returnedHtml .= '<option db="'.$altDb['asolReportsDbName'].'" value="'.$dbIndex.'" '.($selectedDb == $dbIndex ? 'selected' : '').'>'.$altDbText.'</option>';
				}

			$returnedHtml .= '
			</select>
													
		</td>
		';
		
		return $returnedHtml;
			
	}
	
	public static function getReportDisplayOptionsHtml($report_charts, $isDisabled) {

		global $mod_strings;
		
		$values = array('Tabl', 'Both', 'Htob', 'Char');
		$labels = array('LBL_REPORT_DISPLAY_TABLE', 'LBL_REPORT_DISPLAY_TABLECHART', 'LBL_REPORT_DISPLAY_CHARTTABLE', 'LBL_REPORT_DISPLAY_CHART');

		$returnedHtml = '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_DISPLAY_OPTS'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">

			<select '.($isDisabled ? 'disabled' : '').' name="report_charts" onChange="manageReportChartsSelect(this.selectedIndex)">';

				foreach ($values as $key=>$value) {
					$returnedHtml .= ($report_charts == $value) ? '<option value="'.$value.'" selected>'.$mod_strings[$labels[$key]].'</option>' : '<option value="'.$value.'">'.$mod_strings[$labels[$key]].'</option>';
				}
					
		$returnedHtml .= '
			</select>

		</td>';
		
		return $returnedHtml;
		
	}
	

	public static function getReportModuleTablesHtml($database, $subQuery = false, $selectedModule = null, $isDynamicTable = false, $auditedReport = 0, $selAutoRefresh = 0, $isEditViewMode = true, $isDisabled = false, $noRestrictions = false, $onChangeFunction = null) {

		global $mod_strings;

		$fieldSelectorDivId = 'reportTableFieldsDiv';
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$treeModeParameter = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getTreeModeParameter", null);
		$treeMode = ($treeModeParameter !== false) ? $treeModeParameter : '';
		$fieldSelectorDivId = ($treeModeParameter !== false) ? ($subQuery ? 'subReportTreeFieldsDiv' : 'reportTreeFieldsDiv') : $fieldSelectorDivId;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		if ($database >= "0") {

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'alternative_database' => $database,
				'noRestrictions' => $noRestrictions,
			);
			
			$externalAvailableTables = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalAvailableTables", $extraParams);
			$availableModules = ($externalAvailableTables !== false) ? $externalAvailableTables : null;
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			$returnedHtml = '
			<select '.(($isDisabled || $isDynamicTable) ? 'disabled' : '').' id="'.($subQuery ? 'sub_report_module' : 'report_module').'" name="'.($subQuery ? 'sub_alternative_database_table' : 'alternative_database_table').'" '.(!empty($onChangeFunction) ? 'onChange="'.$onChangeFunction.'"' : '').' '.($isEditViewMode ? 'onChange="$(\'#create_form\').find(\'[name=dynamic_tables]\').val(\'0\'); manageReportModule('.$database.', this.value, \''.$treeMode.'\', \''.$fieldSelectorDivId.'\', true, false, true);"' : '').'>';
																
			$returnedHtml .= '<option '.(($selectedModule == '') ? 'selected' : '').' value="" label="" >'.($isDynamicTable ? $mod_strings['LBL_REPORT_DYNAMIC_TABLES'] : '').'</option>';
									
			foreach ($availableModules as $keyModule=>$itemModule) {
				$returnedHtml .= '<option value="'.$keyModule.'" '.($selectedModule == $keyModule ? 'selected' : '').'>'.$itemModule.'</option>';
			}
			
			if ($isDisabled && (!in_array($selectedModule, array_keys($availableModules)))) {
				$returnedHtml .= '<option value="'.$selectedModule.'" selected>'.$selectedModule.'</option>';
			}
							
			$returnedHtml .= '</select>';

			if ($isEditViewMode) {
				
				//***AlineaSol Premium***//
				$dynamicTablesHtml = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "getDynamicTablesImage", array('isSubQuery' => $subQuery, 'reportModule' => $selectedModule, 'isDynamicTable' => $isDynamicTable));
				$returnedHtml .= ($dynamicTablesHtml !== false) ? $dynamicTablesHtml : '';
				//***AlineaSol Premium***//
				
				$returnedHtml .= self::getAutoRefreshCheckHtml($selAutoRefresh, $subQuery, (!empty($selectedModule)), $isDisabled);
			
			}					

		} else {
			
			$availableModules = self::getCurrentUserAllowedModules($noRestrictions);
			$hasAudit = self::isModuleAudited($selectedModule);

			$returnedHtml = '<select '.($isDisabled ? 'disabled' : '').' id="'.($subQuery ? 'sub_report_module' : 'report_module').'" name="'.($subQuery ? 'sub_report_module' : 'report_module').'" '.(!empty($onChangeFunction) ? 'onChange="'.$onChangeFunction.'"' : '').' '.($isEditViewMode ? 'onChange="manageReportModule('.$database.', this.value, \''.$treeMode.'\', \''.$fieldSelectorDivId.'\', true, false, true);"': '').'>';

			$returnedHtml .= ($selectedModule == '') ? '<option value="" label="" selected></option>' : '<option value="" label=""></option>';
									
			foreach ($availableModules as $keyModule=>$itemModule) {
				$returnedHtml .= '<option value="'.$keyModule.'" '.($selectedModule == $keyModule? 'selected' : '').'>'.$itemModule.'</option>';
			}
			
			if ($isDisabled && (!in_array($selectedModule, array_keys($availableModules)))) {
				$returnedHtml .= '<option value="'.$selectedModule.'" selected>'.$selectedModule.'</option>';
			}
									
			$returnedHtml .= '</select>';
								
			if ($isEditViewMode) {
				$returnedHtml .= self::getAuditModuleCheckHtml($auditedReport, $subQuery, $hasAudit, $isDisabled);
			}
			
		}
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		if ($isEditViewMode) {
			$treeLegendHtml = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getReportTreeLegendScript", array('database' => $database, 'subQuery' => $subQuery));
			$returnedHtml .= ($treeLegendHtml !== false) ? $treeLegendHtml : '';
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
							
		return $returnedHtml;
	
	}
	
	static public function getAuditModuleCheckHtml($auditedReport, $subQuery = false, $isVisible = true, $isDisabled = false) {
		
		global $mod_strings;
		
		$fieldSelectorDivId = 'reportTableFieldsDiv';
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$treeModeParameter = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getTreeModeParameter", null);
		$treeMode = ($treeModeParameter !== false) ? $treeModeParameter : '';
		$fieldSelectorDivId = ($treeModeParameter !== false) ? ($subQuery ? 'subReportTreeFieldsDiv' : 'reportTreeFieldsDiv') : $fieldSelectorDivId;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$visibleStyle = ($isVisible) ? 'visibility: inherit;' : 'visibility: hidden;';
		$inputChecked = ($auditedReport == 1) ? ' checked' : '';
		
		return ' <span id="'.($subQuery ? 'auditedSubReportSpan' : 'auditedReportSpan').'" style="'.$visibleStyle.'"><input '.($isDisabled ? 'disabled' : '').' type="checkbox" id="'.($subQuery ? 'audited_sub_report' : 'audited_report').'" name="'.($subQuery ? 'audited_sub_report' : 'audited_report').'" value="1"'.$inputChecked.' onClick="manageReportAudit(this, \''.$treeMode.'\', \''.$fieldSelectorDivId.'\', true);"> '.$mod_strings['LBL_REPORT_AUDIT_TABLE'].'</span>';
			
	}
	
	static public function getAutoRefreshCheckHtml($autoRefresh, $subQuery, $isVisible = true, $isDisabled = false) {
		
		global $mod_strings;
		
		$visibleStyle = ($isVisible) ? 'display: block;' : 'display: none;';
		$inputChecked = ($autoRefresh == 1) ? ' checked' : '';
		
		return ' <span id="'.($subQuery ? 'autoSubRefreshSpan' : 'autoRefreshSpan').'" style="float: right; '.$visibleStyle.'"><input '.($isDisabled ? 'disabled' : '').' type="checkbox" id="'.($subQuery ? 'autorefresh_sub_report' : 'autorefresh_report').'" name="'.($subQuery ? 'autorefresh_sub_report' : 'autorefresh_report').'" value="1" '.$inputChecked.'> '.$mod_strings['LBL_REPORT_AUTOREFRESH'].'</span>';
		
	}
	
	static public function getReportAttachmentFormatHtml($generatedFileFormat, $isMetaReport, $isDisabled) {
		
		global $mod_strings;
		
		$fileFormatArray = explode(':', $generatedFileFormat);
		$attachmentFormat = $fileFormatArray[0];
		
		$basicValues = array('HTML');
		$basicLabels = array('LBL_REPORT_HTML');
		
		$extendedValues = array('PDF', 'CSV', 'CSVC', 'XLS', 'XLSC');
		$extendedLabels = array('LBL_REPORT_PDF', 'LBL_REPORT_CSV', 'LBL_REPORT_CSV_CLEAN', 'LBL_REPORT_XLS', 'LBL_REPORT_XLS_CLEAN');
		
		$values = ($isMetaReport == '1' ? $basicValues : array_merge($basicValues, $extendedValues));
		$labels = ($isMetaReport == '1' ? $basicLabels : array_merge($basicLabels, $extendedLabels));
		
		$returnedHtml .= '<select '.($isDisabled ? 'disabled' : '').' name="report_attachment_format">';

		foreach ($values as $key=>$value) {
			$returnedHtml .= '<option value="'.$value.'" '.($attachmentFormat == $value ? 'selected' : '').'>'.$mod_strings[$labels[$key]].'</option>';
		}

		$returnedHtml .= '</select>';
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array('fileFormatConfiguration' => $fileFormatArray[1]);
		$fileFormatConfButtonHtml = asol_ReportsUtils::managePremiumFeature("generatedFileFormat", "reportFunctions.php", "getFileFormatConfigurationButton", $extraParams);
		$returnedHtml .= ($fileFormatConfButtonHtml !== false ? $fileFormatConfButtonHtml : "");
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		
		return $returnedHtml;
		
	}
	
	static public function getReportTypeHtml($reportType, $reportTypeUri, $reportScheduledType, $isMetaReport, $isDisabled) {
		
		global $mod_strings;
		
		$basicValues = array('manual', 'internal', 'external', 'scheduled');
		$basicLabels = array('LBL_REPORT_MANUAL', 'LBL_REPORT_INTERNAL', 'LBL_REPORT_EXTERNAL', 'LBL_REPORT_SCHEDULED');
		
		$extendedValues = array('stored');
		$extendedLabels = array('LBL_REPORT_STORED');
		
		$values = ($isMetaReport == '1' ? $basicValues : array_merge($basicValues, $extendedValues));
		$labels = ($isMetaReport == '1' ? $basicLabels : array_merge($basicLabels, $extendedLabels));
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$webServiceReportType = asol_ReportsUtils::managePremiumFeature("webServiceReports", "reportFunctions.php", "getWebServiceReportType", array('reportType' => $reportType[0], 'isMetaReport' => $isMetaReport));
		if ($webServiceReportType !== false) {
			$values[] = $webServiceReportType['value'];
			$labels[] = $webServiceReportType['label'];
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$returnedHtml = '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_TYPE'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">

			<select '.($isDisabled ? 'disabled' : '').' id="report_type" name="report_type" onChange="if (typeof window.hasPremiumReportsJsFeatures == \'function\') { manageReportTypePremiumSelect(this.value, '.($isMetaReport == '1' ? 'true' : 'false').'); } else { manageReportTypeSelect(this.value); }">';

				foreach ($values as $key=>$value) {
					$returnedHtml .= '<option value="'.$value.'" '.($reportType[0] == $value ? 'selected' : '').'>'.$mod_strings[$labels[$key]].'</option>';
				}
				
			$returnedHtml .= '
			</select>
		
			<input type="hidden" name="report_type_uri" id="report_type_uri" value="'.$reportTypeUri.'">
			
			<select id="report_scheduled_type" name="report_scheduled_type" style="visibility: hidden;">';
			
				$selScheduledType = empty($reportScheduledType[0]) ? 'email' : $reportScheduledType[0];
				$returnedHtml .= ($selScheduledType == 'email') ? '<option value="email" label="" selected>'.$mod_strings['LBL_REPORT_SCHEDULED_EMAIL'].'</option>' : '<option value="email" label="">'.$mod_strings['LBL_REPORT_SCHEDULED_EMAIL'].'</option>';
			
			$returnedHtml .= '
			</select>
		
		
			<span id="externalApplicationReportsDiv" name="externalApplicationReportsDiv"></span>
			

		</td>';
		
		return $returnedHtml;
			
	}
	
	static public function getReportChartEngineHtml($chartsEngine) {
		
		global $mod_strings;
		
		$returnedHtml .= '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_CHARTS_ENGINE'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">';

		$returnedHtml .= self::getReportChartEngineSelectHtml($chartsEngine);
			
		$returnedHtml .= '
		</td>';
		
		return $returnedHtml;
		
	}
	
	static public function getReportChartEngineSelectHtml($chartsEngine) {
		
		global $mod_strings;
		
		$values = array('nvd3', 'html5', 'flash');
		$labels = array('LBL_REPORT_CHART_ENGINE_NVD3', 'LBL_REPORT_CHART_ENGINE_HTML5', 'LBL_REPORT_CHART_ENGINE_FLASH');
		
		$returnedHtml = '<select id="report_charts_engine" name="report_charts_engine" onChange="resetChartTypes(this.value);">';

		foreach ($values as $key=>$value) {
			$returnedHtml .= '<option value="'.$value.'" '.($chartsEngine == $value ? 'selected' : '').'>'.$mod_strings[$labels[$key]].'</option>';
		}
			
		$returnedHtml .= '
		</select>';
		
		return $returnedHtml;
		
	}
	
	static public function removeFieldsFromResultSet(& $resultSet, $fieldsToBeRemoved) {
		
		for ($i=0; $i<count($resultSet); $i++) {
	
			if (in_array($resultSet[$i]['Field'], $fieldsToBeRemoved)) {
				array_splice($resultSet, $i, 1);
				$i--;
			}
	
		}
		
	}
	
	static public function getReportEmailLinkHtml($scheduled_images, $isDisabled) {
		
		global $mod_strings;
		
		$returnedHtml = '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_EMAIL_LINK'].':
		</td>


		<td nowrap="nowrap" width="35%">';
			
			$returnedHtml .= '<input '.($isDisabled ? 'disabled' : '').' type="checkbox" value="1" name="scheduled_images" id="scheduled_images" '.($scheduled_images == 1 ? 'checked' : '').'> <i>('.$mod_strings['LBL_REPORT_EMAIL_LINK_EXPLAIN'].')</i>';
		
		$returnedHtml .= '
		</td>';
		
		return $returnedHtml;
		
	}
	
	static public function getReportScopeHtml($report_scope, $disabled) {
		
		global $mod_strings;
		
		$returnedHtml = '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_SCOPE'].':<span class="required">*</span>
		</td>

		<td nowrap="nowrap" width="35%">
			'.self::getReportScopeSelect($report_scope, $disabled).'
		</td>';
		
		return $returnedHtml;
		
	}
	
	static public function getReportScopeSelect($reportScope, $isDisabled = false) {
		
		global $mod_strings, $db, $current_user;

		$explodedScope = explode('${dp}', $reportScope);
		$usedScope = (empty($reportScope) ? 'private' : $explodedScope[0]);
		
		$values = array('private', 'public', 'role');
		$labels = array('LBL_REPORT_PRIVATE', 'LBL_REPORT_PUBLIC', 'LBL_REPORT_ROLE');
		
		$returnedHtml = '<select style="vertical-align: top;" name="report_scope" class="reportScope" onChange="manageReportScope(this);" '.($isDisabled ? 'disabled' : '').'>';

		foreach ($values as $key=>$value) {
			$returnedHtml .= ($usedScope == $value) ? '<option value="'.$value.'" selected>'.$mod_strings[$labels[$key]].'</option>' : '<option value="'.$value.'">'.$mod_strings[$labels[$key]].'</option>';
		}
					
		$returnedHtml .= '</select>';
		
		
		$roles = array();
		$return_action = (isset($_REQUEST['return_action']) ? $_REQUEST['return_action'] : null);

		
		if (asol_CommonUtils::isDomainsInstalled() && (!empty($current_user->asol_default_domain)))
			$queryRoles = $db->query("SELECT acl_roles.id, acl_roles.name FROM acl_roles LEFT JOIN asol_domains_aclroles ON acl_roles.id=asol_domains_aclroles.aclrole_id WHERE asol_domains_aclroles.asol_domain_id = '".$current_user->asol_default_domain."' ORDER BY name ASC");		
		else
			$queryRoles = $db->query("SELECT id, name FROM acl_roles ORDER BY name ASC");
		
		while ($queryRow = $db->fetchByAssoc($queryRoles)){
			$roles[] = array(
				'id' => $queryRow['id'],
				'name' => $queryRow['name']
			);
		}

		$returnedHtml .= "&nbsp;<select class='scopeRole' style='display: none;' name='report_scope_role[]' multiple size='1' ".($isDisabled ? 'disabled' : '').">";
		
		foreach ($roles as $role) {
		
			$selectedRole = (strstr($explodedScope[1], $role["id"]));
			
			if ($return_action == "duplicate") {
			
				$returnedHtml .= '<option value="'.$role["id"].'" '.($selectedRole && $current_user->is_admin ? 'selected' : '').'>'.$role["name"].'</option>';
			
			} else {
			
				$returnedHtml .= '<option value="'.$role["id"].'" '.($selectedRole ? 'selected' : '').'>'.$role["name"].'</option>';
			
			}
		}
		
		$returnedHtml .= "</select>";
		
		return $returnedHtml;
		
	}
	
	static public function getReportInternalDescriptionHtml($description, $isDisabled) {
		
		global $mod_strings;
		
		return '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_INTERNAL_DESCRIPTION'].':
		</td>

		<td nowrap="nowrap" width="35%">
			<textarea '.($isDisabled ? 'disabled' : '').' tabindex="" title="" cols="40" rows="4" name="internal_description" id="internal_description">'.$description.'</textarea>
		</td>';
		
	}
	
	static public function getReportPublicDescriptionHtml($description, $isDisabled) {
		
		global $mod_strings;
		
		return '
		<td nowrap="nowrap" width="15%" scope="col">
			'.$mod_strings['LBL_REPORT_PUBLIC_DESCRIPTION'].':
		</td>

		<td nowrap="nowrap" width="35%">
			<textarea '.($isDisabled ? 'disabled' : '').' tabindex="" title="" cols="40" rows="4" name="public_description" id="public_description">'.$description.'</textarea>
		</td>';
		
	}
	
	static public function getReportEmptyFieldHtml() {
		
		return '
		<td nowrap="nowrap" width="15%" scope="col"></td>
		<td nowrap="nowrap" width="35%"></td>';
		
	}
	
	static public function getReportInitialExecutionHtml() {
		
		global $mod_strings;
		
		return '<input type="checkbox" id="initial_execution" name="initial_execution" value="1">&nbsp;'.$mod_strings['LBL_REPORT_INITIAL_EXECUTION'].'</input>';
	
	}

	static public function getReportDisplayButtons() {
		
		global $mod_strings;
	
		return '<select id="display_buttons">
					<option value="all">'.$mod_strings['LBL_REPORT_PAGINATION_ALL'].'</option>
					<option value="top">'.$mod_strings['LBL_REPORT_PAGINATION_TOP'].'</option>
					<option value="bottom">'.$mod_strings['LBL_REPORT_PAGINATION_BOTTOM'].'</option>
				</select>';
		
	}
	
	static public function getDisallowTrim() {

		global $mod_strings;
	
		return '<input type="checkbox" id="disallow_trim"> '.$mod_strings['LBL_REPORT_AVOID_TRIM_SEARCH'];
	
	}
	
	static public function getCollapsableHeader($headerTitleLabel, $headerId, $startAsHidden = false) {
		
		global $mod_strings;
		$startImage = 'themes/default/images/' . ($startAsHidden ? 'advanced_search.gif' : 'basic_search.gif');
		
		$returnedHtml .= '<img id="'.$headerId.'_img" src="'.$startImage.'" OnMouseOver="this.style.cursor=\'pointer\'" OnMouseOut="this.style.cursor=\'default\'" onClick="if ($(\'#'.$headerId.' table\').is(\':visible\')) { $(\'#'.$headerId.' table\').hide(); this.src=\'themes/default/images/advanced_search.gif\'} else { $(\'#'.$headerId.' table\').show(); this.src=\'themes/default/images/basic_search.gif\'}">&nbsp;';
			
		$returnedHtml .= $mod_strings[$headerTitleLabel];
		
		return $returnedHtml;
		
	}
	
	static public function cleanUpStoredReportFiles($storedReportInfo, $domainIdsToDelete = null) {
		
		$tmpReportFilesPath = 'modules/asol_Reports/tmpReportFiles/';
		$storedInfo = unserialize(base64_decode($storedReportInfo));
		
		foreach ($storedInfo as $accessKey=>$reportInfo) {
			
			if (($domainIdsToDelete !== null) && (!in_array($accessKey, $domainIdsToDelete)))
				continue;
			
			if (is_file($tmpReportFilesPath.$reportInfo['infoTxt'])) {
				@unlink($tmpReportFilesPath.$reportInfo['infoTxt']);
			}
			
			foreach ($reportInfo['chartFiles'] as $chartFile) {
				
				if (is_file($chartFile['file'])) {
					@unlink($chartFile['file']);
				}
				
			}
			
			unset ($storedInfo[$accessKey]);
			
		}
		
		return base64_encode(serialize($storedInfo));
		
	}

	static public function manageImportReportValues(& $focus, $reportRow) {
		
		global $current_user, $db;
		
		
		//**************************************//
		//***Check for duplicated report name***//
		//**************************************//
		$sqlWhere = "WHERE name='".$reportRow['name']."' AND deleted=0";
		if (asol_CommonUtils::isDomainsInstalled()) {
			$sqlWhere .= " AND asol_domain_id='".$current_user->asol_default_domain."'";
		}
		
		$existingReportNameQuery = $db->query("SELECT id FROM asol_reports ".$sqlWhere); 
		$existingReportNameFlag = ($existingReportNameQuery->num_rows > 0);
		//**************************************//
		//***Check for duplicated report name***//
		//**************************************//
		
		
		$reportModule = $reportRow['report_module'];
			
		foreach ($reportRow as $fieldKey=>$fieldValue) {
		
			switch($fieldKey) {
				case "name":
					$focus->$fieldKey = (!$existingReportNameFlag) ? $fieldValue : $fieldValue."_".date("Ymd")."T".date("Hi");
					break;
				case "description":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateDescriptionToJson($fieldValue);
					break;
				case "report_fields":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateFieldsDefinitionToJson($fieldValue, $reportModule);
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportEnumFormats($focus->$fieldKey, $fieldKey);
					break;
				case "report_filters":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateFiltersDefinitionToJson($fieldValue, $reportModule);
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportEnumFormats($focus->$fieldKey, $fieldKey);
					break;
				case "report_tasks":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportScheduledTasksToJson($fieldValue);
					break;
				case "report_charts_detail":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateChartsDefinitionToJson($fieldValue);
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportsCharts($focus->$fieldKey);
					break;
				case "report_scheduled_type":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportScheduledTypeToJson($fieldValue);
					break;
				case "report_type":
					$focus->$fieldKey = asol_ReportsMigrationFunctions::migrateReportTypeToSerialized($fieldValue);
					break;
				default:
					$focus->$fieldKey = $fieldValue;
					break;
			}
			
		}
		
		$focus->id = "";
		$focus->assigned_user_id = $current_user->id;
		$focus->report_scope = "private";
		
		return $focus->save();
		
	}
	
	static public function getDistributionListPanel($emailList) {
		
		global $mod_strings;
		
		$systemUsersAndRoles = self::getSystemUsersAndRoles();
		
		$users = $systemUsersAndRoles['users'];
		$roles = $systemUsersAndRoles['roles'];

		$emailListData = explode('${pipe}', urldecode($emailList));
		$usersListToData = explode('${comma}', $emailListData[1]);
		$usersListCcData = explode('${comma}', $emailListData[2]);
		$usersListBccData = explode('${comma}', $emailListData[3]);
		$rolesListToData = explode('${comma}', $emailListData[4]);
		$rolesListCcData = explode('${comma}', $emailListData[5]);
		$rolesListBccData = explode('${comma}', $emailListData[6]);
		$distributionListToData = explode('${comma}', $emailListData[7]);
		$distributionListCcData = explode('${comma}', $emailListData[8]);
		$distributionListBccData = explode('${comma}', $emailListData[9]);
		
		$emailFrom = $emailListData[0];
		
		$distributionListHtml = "
		<ul class='yui-nav' id='emailTabs'>
			<li class='selected'><a href='javascript: void(0);' id='all_Tab' onClick='refreshEmailListReadonly(); manageReportManagementTabs(\"emailTabs\", \"all\", \"emailPanel\");'><em>".$mod_strings['LBL_REPORT_SEND_EMAIL_ALL']."</em></a></li>
			<li><a href='javascript: void(0);' id='to_Tab' onClick='manageReportManagementTabs(\"emailTabs\", \"to\", \"emailPanel\");'><em>".$mod_strings['LBL_REPORT_SEND_EMAIL_TO']."</em></a></li>
			<li><a href='javascript: void(0);' id='cc_Tab' onClick='manageReportManagementTabs(\"emailTabs\", \"cc\", \"emailPanel\");'><em>".$mod_strings['LBL_REPORT_SEND_EMAIL_CC']."</em></a></li>
			<li><a href='javascript: void(0);' id='bcc_Tab' onClick='manageReportManagementTabs(\"emailTabs\", \"bcc\", \"emailPanel\");'><em>".$mod_strings['LBL_REPORT_SEND_EMAIL_BCC']."</em></a></li>
		</ul>
		<div class='yui-content'>
			<div class='emailPanel' id='all'>
				<h2>".$mod_strings['LBL_REPORT_SEND_EMAIL_ALL']." ".$mod_strings['LBL_REPORT_SEND_EMAIL_ALL_TIP']."</h2>
				<table class='edit view'>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_FROM'].":</td>
						<td><input type='text' id='email_from' name='email_from' value='".$emailFrom."' onmouseover='this.title=this.value;'></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_TO'].":</td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td><input id='email_users_for_to_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td><input id='email_roles_for_to_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td><textarea id='email_list_for_to_readonly' name='email_list_for_to' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;'></textarea></td>
						<td colspan='2'></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_CC'].":</td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td><input id='email_users_for_cc_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td><input id='email_roles_for_cc_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td><textarea id='email_list_for_cc_readonly' name='email_list_for_to' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' ></textarea></td>
						<td colspan='2'></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_BCC'].":</td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td><input id='email_users_for_bcc_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td><input id='email_roles_for_bcc_readonly' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' /></td>
					</tr>
					<tr>
						<td>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td><textarea id='email_list_for_bcc_readonly' name='email_list_for_to' type='text' readonly='' class='send_email_summary' onmouseover='this.title=this.value;' ></textarea></td>
						<td colspan='2'></td>
					</tr>
				</table>
			</div>
			<div class='emailPanel' id='to' style='display: none;'>
				<h2>".$mod_strings['LBL_REPORT_SEND_EMAIL_TO']."</h2>
	   			<table class='edit view'>
	   				<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td width='32.5%'>".self::generateSendEmailUsersSelect('to', $users, $usersListToData)."</td>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td width='32.5%'>".self::generateSendEmailRolesSelect('to', $roles, $rolesListToData)."</td>
					</tr>
					<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td colspan='3'><textarea id='email_list_for_to' name='email_list_for_to' rows='6' cols='40'>".implode(',', $distributionListToData)."</textarea></td>
					</tr>
				</table>
			</div>
			<div class='emailPanel' id='cc' style='display: none;'>
	    		<h2>".$mod_strings['LBL_REPORT_SEND_EMAIL_CC']."</h2>
	    		<table class='edit view'>
					<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td width='32.5%'>".self::generateSendEmailUsersSelect('cc', $users, $usersListCcData)."</td>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td width='32.5%'>".self::generateSendEmailRolesSelect('cc', $roles, $rolesListCcData)."</td>
					</tr>
					<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td colspan='3'><textarea id='email_list_for_cc' name='email_list_for_cc' rows='6' cols='40'>".implode(',', $distributionListCcData)."</textarea></td> 
					</tr>
				</table>
			</div>
			<div class='emailPanel' id='bcc' style='display: none;'>
				<h2>".$mod_strings['LBL_REPORT_SEND_EMAIL_BCC']."</h2>
				<table class='edit view'>
					<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_USERS']."</td>
						<td width='32.5%'>".self::generateSendEmailUsersSelect('bcc', $users, $usersListBccData)."</td>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_SEND_EMAIL_ROLES']."</td>
						<td width='32.5%'>".self::generateSendEmailRolesSelect('bcc', $roles, $rolesListBccData)."</td>
					</tr>
					<tr>
						<td width='17.5%'>".$mod_strings['LBL_REPORT_DISTRIBUTION_LIST'].":</td>
						<td colspan='3'><textarea id='email_list_for_bcc' name='email_list_for_bcc' rows='6' cols='40'>".implode(',', $distributionListBccData)."</textarea></td>
					</tr>
				</table>
			</div>
		</div>";
		
		return $distributionListHtml;
		
	}
	
	static public function getManageReportTabs($extraParams){
			
		global $mod_strings;
		
		$isScheduled = in_array($extraParams['reportType'], array('scheduled', 'stored'));
		$isNonExecutable = in_array($extraParams['reportType'], array('internal', 'external', 'webservice_source'));
		$isRemoteExecuted = in_array($extraParams['reportType'], array('webservice_remote'));
		
		$returnedHtml = '
	<ul id="reportTabs" class="yui-nav">
		<li class="selected"><a id="mainInfo_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'mainInfo\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_REPORT_BASIC_INFO'].'</em></a></li>';
			
		$returnedHtml .= '
		<li class="'.($isRemoteExecuted ? 'disabled' : '').'"><a id="fieldsFilters_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'fieldsFilters\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_REPORT_FIELDS_FILTERS'].'</em></a></li>
		<li class="'.($extraParams['hasCharts'] ? '' : 'disabled').'"><a id="charts_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'charts\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_REPORT_CHARTS_TITLE'].'</em></a></li>
		<li class="'.($isScheduled ? '' : 'disabled').'"><a id="scheduledDiv_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'scheduledDiv\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_REPORT_SCHEDULED_TASKS'].'</em></a></li>
		<li class="'.($isNonExecutable ? 'disabled' : '').'"><a id="distributionList_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'distributionList\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_REPORT_DISTRIBUTION_LIST'].'</em></a></li>
	';
		
		$returnedHtml .= (asol_CommonUtils::isDomainsInstalled() ? '<li><a id="domainPublishing_Tab" href="javascript: void(0);" onClick="if (typeof window.manageReportManagementTabs == \'function\') { manageReportManagementTabs(\'reportTabs\', \'domainPublishing\', \'reportPanel\'); }"><em>'.$mod_strings ['LBL_ASOL_DOMAINS_PUBLISH_FEATURE_PANEL'].'</em></a></li>' : '');
		
		$returnedHtml .= '
	</ul>';
		
		$returnedCss = '
	<style>
		.reportPanelHeader {
			display: none
		}
		#domainPublishing,#fieldsFilters,#charts,#metaHtml,#scheduledDiv,#distributionList {
			display: none
		}
	</style>
	';
		
		return array(
				'html' => $returnedHtml,
				'css' => $returnedCss
		);
		
		
		
	}
	
	private static function generateSendEmailUsersSelect($to_cc_bcc, $users, $usedUsers) {
		
		$usersSelect = "<select id='email_users_for_".$to_cc_bcc."' name='email_users_for_".$to_cc_bcc."' multiple='' size=4 style='width: 240px'>";
		foreach ($users as $user) {
			$usersSelect .= "<option value='".$user['id']."' ".(in_array($user['id'], $usedUsers) ? 'selected' : '').">".$user['user_name']."</option>";
		}
		$usersSelect .= "</select>";
		
		return $usersSelect;
		
	}
	
	private static function generateSendEmailRolesSelect($to_cc_bcc, $roles, $usedRoles) {
	
		$rolesSelect = "<select id='email_roles_for_".$to_cc_bcc."' name='email_roles_for_".$to_cc_bcc."' multiple='' size=4 style='width: 240px'>";
		foreach ($roles as $role) {
			$rolesSelect .= "<option value='".$role['id']."' ".(in_array($role['id'], $usedRoles) ? 'selected' : '').">".$role['name']."</option>";
		}
		$rolesSelect .= "</select>";
	
		return $rolesSelect;
		
	}
	
}
	
?>
