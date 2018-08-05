<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class asol_ReportsMigrationFunctions {
	
	static public function migrateDescriptionToJson($reportDescription) {
		
		if (!empty($reportDescription)) {
			$serialized = base64_decode($reportDescription); // decoding fail => return false
			if ($serialized != false) {
				$unserialized = unserialize($serialized); // unserializing fail => return null
				if ($unserialized != null) {
					return $reportDescription;
				}
			}
		}
		
		$publicDescription = trim($reportDescription);
		$descriptionArray = array(
			'internal' => null,
			'public' => (empty($publicDescription) ? null : $publicDescription),
		);
		
		return base64_encode(serialize($descriptionArray));
		
	}
	
	static public function migrateFieldsDefinitionToJson($reportFields, $reportModule) {

		if (base64_encode(base64_decode($reportFields)) === $reportFields) {
	
			return $reportFields;
		
		} else {
			
			$tableModuleArray = self::getTableModuleArray();
			
			$fieldsVersion = substr(substr($reportFields, -9), 3, 5);
			$fieldsValues = substr($reportFields, 0, -9);
			$escapeTokensStringFields = ($fieldsVersion < '1.3.1') ? false : true;
			$fieldsValues = self::unescapeSpecialCases($fieldsValues);
			
			$fields = ($escapeTokensStringFields ? explode('${pipe}', $fieldsValues) : explode('|', $fieldsValues));
			
			if (strlen($fieldsValues) == 0) {
				$fields = array();
			}
		
			$fieldObject['tables'][0] = array(
				'config' => array(
					'visible' => true,
					'subtotals' => array(
						'visible' => true, 
					),
					'totals' => array(
						'visible' => true, 
					),
				),
				'data' => array(),
				'version' => $fieldsVersion
			);
			
			foreach ($fields as $field) {
				$fieldValues = ($escapeTokensStringFields ? explode('${dp}', $field) : explode(":", $field));
				$functionValues = explode('${comma}', $fieldValues[5]);
				
				// Field module
				$splittedField = explode('.', $fieldValues[0]);
				if (count($splittedField) > 1) {
					if (substr($splittedField[0], -strlen('_cstm')) === '_cstm') {
						$enumTable = substr($splittedField[0], 0, -strlen('_cstm'));
					} else {
						$enumTable = $splittedField[0];
					}
					$currentFieldModule = $tableModuleArray[$enumTable];
					$enumField = $splittedField[1];
				} else {
					$currentFieldModule = $reportModule;
					$enumField = $fieldValues[0];
				}
				
				// Enum Operator & Reference
				$externalTable = explode(" ", $reportModule);
				if ($externalTable[1] == '(External_Table)') {
					$enumOperator = '';
					$enumReference = '';
				} else {
		
					if (in_array($fieldValues[13], array('asolFunction'))) {
						$enumOperator = $fieldValues[12];
						$enumReference = $fieldValues[13];
					} else if (in_array($fieldValues[8], array('enum', 'multienum', 'radioenum'))) {
						$enumArray = self::getEnumReferenceForEnumField($currentFieldModule, $enumField);
						$enumOperator = $enumArray['enumOperator'];
						$enumReference =  $enumArray['enumReference'];
					} else {
						$enumOperator = '';
						$enumReference = '';
					}
				
				}
				
				$fieldObject['tables'][0]['data'][] = array(
					'field' => $fieldValues[0],
					'alias' => $fieldValues[1],
					'visible' => $fieldValues[2],
					'sortDirection' => $fieldValues[3],
					'sortOrder' => $fieldValues[4],
					'function' => $functionValues[0],
					'sql' => (isset($functionValues[1])) ? $functionValues[1] : '',
					'grouping' => $fieldValues[6],
					'groupingOrder' => $fieldValues[7],
					'type' => $fieldValues[8],
					'key' => $fieldValues[9],
					'isRelated' => ($fieldValues[10] === 'true'),
					'index' => $fieldValues[11],
					'enumOperator' => $enumOperator,
					'enumReference' => $enumReference
				);
				
			}
			
			return base64_encode(serialize($fieldObject));
			
		}
		
	}
	
	static public function migrateFiltersDefinitionToJson($reportFilters, $reportModule) {
		
		if (base64_encode(base64_decode($reportFilters)) === $reportFilters) {
	
			return $reportFilters;
		
		} else {
			
			$tableModuleArray = self::getTableModuleArray();
			
			$filtersVersion = substr(substr($reportFilters, -9), 3, 5);
			$filtersValues = substr($reportFilters, 0, -9);
			$escapeTokensStringFilters = ($filtersVersion < '1.3.0') ? false : true;
			
			$filtersValues = self::unescapeSpecialCases($filtersValues);
			
			$filters = ($escapeTokensStringFilters ? explode('${pipe}', $filtersValues) : explode('|', $filtersValues));
			
			if (strlen($filtersValues) == 0) {
				$filters = array();
			}
			
			$filterObject = array(
				'config' => array(
					'initialExecution' => false,
				),
				'data' => array(),
				'version' => $filtersVersion,
			);
			
			foreach($filters as $filter) {
				$filterValues = ($escapeTokensStringFilters ? explode('${dp}', $filter) : explode(":", $filter));
				
				$firstParameter = ($escapeTokensStringFilters ? explode('${dollar}', $filterValues[2]) : explode('$', $filterValues[2]));
				
				
				//*Fix Parameters*//
				$firstParameter[0] = ((in_array($filterValues[4], array('date', 'datetime', "datetimecombo", 'timestamp'))) && ($filterValues[1] == 'between') && ($firstParameter[0] == 'day')) ? 'calendar' : $firstParameter[0];
			
				if ((in_array($filterValues[4], array("date", "datetime", "datetimecombo", "timestamp"))) && (in_array($filterValues[1], array("equals", "not equals", "before date", "after date"))) && ($firstParameter[0] != 'calendar')) {
					$filterValues[3] = $filterValues[2];
					$firstParameter[0] = 'calendar';
				} else if ((in_array($filterValues[4], array("date", "datetime", "datetimecombo", "timestamp"))) && (in_array($filterValues[1], array("between", "not between"))) && ($firstParameter[0] != 'calendar')) {
					$filterValues[3] = $filterValues[2].'${comma}'.$filterValues[3];
					$firstParameter[0] = 'calendar';
				}
				//*Fix Parameters*//
				
				
				// Parameters
				$adittionalParameters = explode('${comma}', $filterValues[3]);
				$secondParameter = (strlen($adittionalParameters[0]) > 0 ? array($adittionalParameters[0]) : array()); 
				$thirdParameter = (count($adittionalParameters) > 1 ? array($adittionalParameters[1]) : array());
				
				
				// Filter module
				$splittedFilter = explode('.', $filterValues[0]);
				if (count($splittedFilter) > 1) {
					if (substr($splittedFilter[0], -strlen('_cstm')) === '_cstm') {
						$enumTable = substr($splittedFilter[0], 0, -strlen('_cstm'));
					} else {
						$enumTable = $splittedFilter[0];
					}
					$currentFilterModule = $tableModuleArray[$enumTable];
					$enumField = $splittedFilter[1];
				} else {
					$currentFilterModule = $reportModule;
					$enumField = $filterValues[0];
				}
				
				// Enum Operator & Reference
				$externalTable = explode(" ", $reportModule);
				if ($externalTable[1] == '(External_Table)') {
					$enumOperator = '';
					$enumReference = '';
				} else {
					if (in_array($filterValues[7], array('asolFunction'))) {
						$enumOperator = $filterValues[7];
						$enumReference = $filterValues[8];
					} else if (in_array($filterValues[4], array('enum', 'multienum', 'radioenum'))) {
						$enumArray = self::getEnumReferenceForEnumField($currentFilterModule, $enumField);
						$enumOperator = $enumArray['enumOperator'];
						$enumReference =  $enumArray['enumReference'];
					} else {
						$enumOperator = '';
						$enumReference = '';
					}
				}
					
				// Related filter
				$isRelated = (($filterValues[5] != "") && ($filterValues[5] != "false"));
				
				// User options
				$userOptions = array();
				if (strlen($filterValues[12]) > 0) {
					foreach(explode(',', $filterValues[12]) as $userOptionString) {
						$tmp = explode('=', $userOptionString);
						$userOptions[] = array(
							'key' => $tmp[0],
							'value' => ((count($tmp) > 1) ? $tmp[1] : null),
						);
					}
				} 
				
				// Logical elements
				$logicalElements = explode(':', $filterValues[13]);
				$logicalParenthesis = $logicalElements[0];
				$logicalOperator = (isset($logicalElements[1]) ? $logicalElements[1] : '');
				
				
				
				
				$filterObject['data'][] = array(
					'field' => $filterValues[0],
					'operator' => $filterValues[1],
					'parameters' => array(
						'first' => $firstParameter,
						'second' => $secondParameter,
						'third' => $thirdParameter,
					),
					'type' => ($filterValues[4] == 'theese' ? 'these' : $filterValues[4]),
					'isRelated' => $isRelated,
					'relationKey' => ($isRelated ? $filterValues[5] : ""),
					'index' => $filterValues[6],
					'enumOperator' => $enumOperator,
					'enumReference' => $enumReference,
					'filterReference' => $filterValues[9],
					'alias' => $filterValues[10],
					'behavior' => $filterValues[11],
					'userOptions' => $userOptions,
					'logicalOperators' => array(
						'parenthesis' => $logicalParenthesis,
						'operator' => $logicalOperator,
					),
				);
				
			}
			
			return base64_encode(serialize($filterObject));
			
		}
		
	}
	
	static public function migrateChartsDefinitionToJson($reportChartsDetail) {

		if (base64_encode(base64_decode($reportChartsDetail)) === $reportChartsDetail) {

			return $reportChartsDetail;
		
		} else {
		
			$chartVersion = substr($reportChartsDetail, -9);
			$reportCharts = explode('${pipe}', substr($reportChartsDetail, 0, -9));
			
			$reportChartsJson = '{"charts":[';
			foreach ($reportCharts as $reportChart) {
				$chartValues = explode('${dp}', $reportChart);
				$reportChartsJson .= '{"data":{"field":"'.$chartValues[0].'","label":"'.$chartValues[1].'","function":"'.$chartValues[2].'","display":"'.$chartValues[3].'","type":"'.$chartValues[4].'","index":"'.$chartValues[5].'","related":'.$chartValues[6].'}},';
			}
			$reportChartsJson = substr($reportChartsJson, 0, -1);
			$reportChartsJson .= '],"version":"'.substr($chartVersion, 3, 5).'"}';
			
			$reportChartsJson = base64_encode(serialize(json_decode($reportChartsJson, true)));

			return $reportChartsJson;
			
		}
			
	}
	
	
	static public function migrateReportTypeToSerialized($reportType) {
		
		global $current_user, $db;

		$storedReportType = explode('${dp}', $reportType);
		
		if (count($storedReportType) == 1) {
			
			return $reportType;
			
		} else {
			
			$storedKey = (!asol_ReportsUtils::isDomainsInstalled()) ? 'base' : $current_user->asol_default_domain;
			
			$txtFile = null;
			$xmlFiles = null;
			$subGroups = null;
			$types = null;
			
			$storedReportTypeUrl = explode('&', $storedReportType[1]);
			foreach ($storedReportTypeUrl as $storedReportTypeUrlParam) {
				$storedReportTypeUrlParamValues = explode('=', $storedReportTypeUrlParam);
				if ($storedReportTypeUrlParamValues[0] == 'txtFile')
					$txtFile = $storedReportTypeUrlParamValues[1];
				else if ($storedReportTypeUrlParamValues[0] == 'xmlFiles')
					$xmlFiles = explode('|', $storedReportTypeUrlParamValues[1]);
				else if ($storedReportTypeUrlParamValues[0] == 'subGroups')
					$subGroups = explode('|', $storedReportTypeUrlParamValues[1]);
				else if ($storedReportTypeUrlParamValues[0] == 'types')
					$types = explode('|', $storedReportTypeUrlParamValues[1]);
			}
			
			$chartFiles = array();
			
			foreach ($xmlFiles as $chartKey=>$xmlFile) {
				if (!empty($xmlFile)) {
					$chartFiles[] = array(
						'file' => $xmlFile,
				        'type' => $types[$chartKey],
				        'subGroups' => $subGroups[$chartKey],
					);
				}
			}
			
			$reportTypeArray[$storedKey] = array(
				'infoTxt' => $txtFile,
				'chartFiles' => $chartFiles
			);
			
			$storedReportTypeSerialized = base64_encode(serialize($reportTypeArray));
		
			return $storedReportTypeSerialized;

		}
		
	}
	
	static private function getEnumReferenceForEnumField($module, $field) {
		
		$field_defs = BeanFactory::newBean($module)->field_defs;
		
		if (!empty($field_defs[$field]['options'])) {
	
			$enumOperator = 'options';
			$enumReference = $field_defs[$field]['options'];
	
		} else if (!empty($values['function'])) {
	
			$enumOperator = 'function';
			$enumReference = $field_defs[$field]['function'];
			
		} else {
	
			$enumOperator = '';
			$enumReference = '';
			
		}
		
		return array(
			'enumOperator' => $enumOperator,
			'enumReference' => $enumReference,
		);
		
	}
	
	
	static private function getTableModuleArray() {
		
		global $current_user;
		
		$acl_modules = ACLAction::getUserActions($current_user->id);
		
		//Get an array of table names for admin accesible modules
		$modulesTables = Array();
		
		foreach($acl_modules as $key=>$mod){
			$tableName = BeanFactory::newBean(BeanFactory::getObjectName($key))->table_name;
			$tableName = $tableName == '' ? strtolower($key) : $tableName; 
			$modulesTables[$tableName] = $key;
		}
		
		return $modulesTables;
		
	}
	
	static private function unescapeSpecialCases($input) {
		$input = str_replace('\\_', '_', $input);
		return $input;
	}
	
	static public function migrateReportsCharts($chartsDetail) {

		$currentCharts = unserialize(base64_decode($chartsDetail));
	
		if (!empty($currentCharts['charts'])) {
			$update = false;
	
			foreach ($currentCharts['charts'] as & $currentChart) {
					
				if (isset($currentChart['data']['field']) && isset($currentChart['data']['index'])) {
	
					$currentChart['data']['yAxis'] = array($currentChart['data']['field']);
					unset($currentChart['data']['field']);
					$currentChart['data']['yIndex'] = $currentChart['data']['index'];
					unset($currentChart['data']['index']);
	
					if (!empty($currentChart['data']['subcharts'])) {
							
						foreach ($currentChart['data']['subcharts'] as & $currentSubChart) {
	
							if (isset($currentSubChart['data']['field']) && isset($currentSubChart['data']['index'])) {
									
								$currentSubChart['data']['yAxis'] = array($currentSubChart['data']['field']);
								unset($currentSubChart['data']['field']);
								$currentSubChart['data']['yIndex'] = $currentSubChart['data']['index'];
								unset($currentSubChart['data']['index']);
									
							}
	
						}
							
					}
	
					$update = true;
	
				}

				if (isset($currentChart['config']['colorPalette'])) {
						
					$currentChart['config'] = array(
						'colors' => $currentChart['config']['colorPalette']
					);
						
					if (!empty($currentChart['data']['subcharts'])) {
				
						foreach ($currentChart['data']['subcharts'] as & $currentSubChart) {
								
							if (isset($currentSubChart['config']['colorPalette'])) {
				
								$currentSubChart['config'] = array(
									'colors' => $currentSubChart['config']['colorPalette']
								);
				
							}
								
						}
				
					}
					
					$update = true;
						
				}
				
			}
	
			if ($update) {
				return base64_encode(serialize($currentCharts));
			}
			
			return $chartsDetail;
	
		}
		
	}
	
}