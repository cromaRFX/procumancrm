<?php

class asol_ReportsGenerateQuery {

	static private function isDomainUsage($domainField, $currentValues) {

		$isDomainUsage = false;
		
		if (asol_ReportsUtils::isDomainsInstalled()) {
			
			if ($domainField !== null) {
	
				if ($domainField != "") {
					
					if (isset($domainField["domainRelation"])) {
					
						$domainRelation = $domainField["domainRelation"];

						$domainInitKey = $domainRelation["linkField"];
						$domainRelatedTable = $domainRelation["relatedTable"];
						
						
						//****************************//
						//*****Current Field Vars*****//
						//****************************//
						$fieldExploded = explode('.', $currentValues['field']);
						$keyExploded = explode(';', $currentValues['key']);
						$tableExploded = explode('::', $fieldExploded[0]);
						$linkExploded = explode(' ', $keyExploded[0]);
						
						$initKey = $linkExploded[0];
						$relatedTable = $tableExploded[0];
						
						
						$isDomainUsage = ($domainInitKey.'.'.$domainRelatedTable == $initKey.'.'.$relatedTable);
						
					}
				
				}
				
			}
			
		}
		
		return $isDomainUsage;
			
	}
	
	static private function isAuditRequiredJoin($auditedReport, $reportTable, $currentValues) {
		
		$isAuditRequiredJoin = false;
		
		if ($auditedReport) {

			$fieldExploded = explode('.', $currentValues['field']);
			$keyExploded = explode(';', $currentValues['key']);
			$tableExploded = explode('::', $fieldExploded[0]);
			
			$currentTable = ((substr($tableExploded[0], -strlen('_cstm')) === '_cstm') ? substr($tableExploded[0], 0, -strlen('_cstm')) : $tableExploded[0]);
			$currentKey = $keyExploded[0];
			
			$isAuditRequiredJoin = (($currentTable == $reportTable) && ($currentKey == 'parent_id'));
			
		}
		
		return $isAuditRequiredJoin;
		
	}
	
	static public function getSqlJoinQuery(& $fieldValues, & $filterValues, $hasDeletedUsage, $resultsLimit, $reportModule, $reportTable, $auditedReport, $alternativeDb, & $fieldsByRef, $aliasSuffix = '', & $domainField = null) {
		
		global $current_user, $sugar_config;
		
		$bean = BeanFactory::newBean($reportModule);
		$joinVariables = array();
		$processedJoinsFromSqlKeys = array();
		$isNonCrmDatabase = ($alternativeDb !== false ? true : false);
		$tableModulesAssociation = asol_ReportsUtils::getTableModulesAssociation($current_user->id);
		

		//****************************************//
		//***Get Indexes From Report Main Table***//
		//****************************************//
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
		if (!isset($_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable])) {
			foreach (asol_Report::getSelectionResults("SHOW INDEX FROM ".$reportTable, null, false, $alternativeDb) as $tableCurrentIndex) {
				$_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable][$tableCurrentIndex['Column_name']] = ($tableCurrentIndex['Key_name'] === 'PRIMARY' ? 'PRIMARY' : 'INDEX');
			}
		}
		//****************************************//
		//***Get Indexes From Report Main Table***//
		//****************************************//
		
		
		foreach ($fieldValues['tables'][0]['data'] as $index => & $currentValues) {
			
			//****************************************//
			//*****Variable Definition Iteration******//
			//****************************************//
			$fieldExploded = explode('.', $currentValues['field']);
			$keyExploded = explode(';', $currentValues['key']);
			$tableExploded = explode('::', $fieldExploded[0]);
			
			$mainKey = null;
			$mainFieldKey = null;
			
			
			//**************************************//
			//*****Control Variable Definition******//
			//**************************************//
			$fieldIsVisible = (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal"))) ? true : false; 
			$fieldOrderedWithLimit = self::fieldOrderedWithLimit($currentValues, $resultsLimit);
			$fieldHasFilter = self::fieldHasFilter($filterValues, $currentValues);
			$fieldSqlVarsInFilters = self::fieldSqlVarsInFilters($fieldValues, $filterValues, $currentValues);
			$fieldSqlRefsInFilters = self::fieldSqlRefsInFilters($fieldValues, $filterValues, $currentValues);
			$fieldHasDetailGrouped = ($currentValues['grouping'] != "0") ? true : false;
			$fieldHasFunction = (!in_array($currentValues['function'], array("0", "undefined"))) ? true : false;
			
			$domainUsage = self::isDomainUsage($domainField, $currentValues);
			$auditRequiredJoin = self::isAuditRequiredJoin($auditedReport, $reportTable, $currentValues);
			
			$reportTableHasCustom = (empty($currentValues['key'])) && (substr($fieldExploded[0], -strlen('_cstm')) === '_cstm');
			$reportTableCustomJoin = ($reportTableCustomJoin || $reportTableHasCustom);
			$reportTableAlreadyCustomJoined = false;
			$reportTableAlreadyCustomCountJoined = false;
			
			$commonDoJoin = ($fieldHasFilter || $fieldSqlRefsInFilters || $fieldHasDetailGrouped || $domainUsage || $auditRequiredJoin);
			$currentDoJoin = ($commonDoJoin || ($fieldIsVisible || $fieldSqlVarsInFilters));
			$currentDoCountJoin = ($commonDoJoin || (($fieldIsVisible && $fieldHasFunction) || $fieldOrderedWithLimit));

			
			//*****************************//
			//*****Init Key Iteration******//
			//*****************************//
			$lastTableName = null;
			
			foreach($keyExploded as $keyDepth=>$currentLink) {
			
				if (!$currentValues['isRelated']) {
					break;	
				}
				
				if ($isNonCrmDatabase) {
				
					$parentLinkExploded = explode(' ', $keyExploded[$keyDepth-1]);
					$linkExploded = explode(' ', $currentLink);
					$mainLinkKey = $linkExploded[0];
					$relatedLinkKey = $linkExploded[1];
					
					$mainFieldKey = (empty($mainFieldKey) ? $mainLinkKey : $mainFieldKey);
					
					$mainTable = ($keyDepth >= 1 ? $tableExploded[$keyDepth-1] : $reportTable);
					$mainKey = $mainLinkKey;
					$relatedTable = $tableExploded[$keyDepth];
					$relatedKey = $relatedLinkKey;
					$parentKey = ($keyDepth >= 1 ? $parentLinkExploded[0] : null);
					
					$joinTable = null;
					$isMainCustom = false;
					$isRelatedCustom = false;
					
					$storedKey = $mainKey.'.'.$relatedTable;
					
				} else {
					
					$parentLinkExploded = explode(' ', $keyExploded[$keyDepth-1]);
					$linkExploded = explode(' ', $currentLink);
					$currentLinkKey = $linkExploded[0];
	
					$tableUnderScoreExploded = explode("_", $tableExploded[$keyDepth]);
					$isCustomTable = (end($tableUnderScoreExploded) == 'cstm' ? true : false);
					$tableName = ($isCustomTable ? substr($tableExploded[$keyDepth], 0, -5) : $tableExploded[$keyDepth]);
					
					if ($currentLinkKey === 'id') { //Relationship
						
						$mainTableUnderScoreExploded = explode("_", $tableExploded[0]);
						$isMainCustomTable = (end($mainTableUnderScoreExploded) == 'cstm' ? true : false);
					
						$mainTableName = ($isMainCustomTable ? substr($tableExploded[0], 0, -5) : $tableExploded[0]);
					
						$mainKeyExploded = explode(' ', $keyExploded[0]);
						$mainFieldKey = $mainKeyExploded[0];
						$relationshipName = $linkExploded[1];

						$mainTableName = ($keyDepth >= 1 ? $tableExploded[$keyDepth-1] : $reportTable);
						$relatedTableName = ((substr($tableExploded[$keyDepth], -strlen('_cstm')) === '_cstm') ? substr($tableExploded[$keyDepth], 0, -strlen('_cstm')) : $tableExploded[$keyDepth]);
						$availableRelationShips = self::getAvailableRelationShips($mainTableName, $relatedTableName, $currentLinkKey);
						
						if (!empty($availableRelationShips)) {

							//**********************************//
							//******Both Sides Relationship*****//
							//**********************************//
							$currentRelationShip = self::getCurrentRelationShip($availableRelationShips, $relationshipName);
							$relationShipDirection = $currentRelationShip['asolRelationShipDirection'];
							
							$mainTable = ($relationShipDirection == 'L2R' ? $currentRelationShip['lhs_table'] : $currentRelationShip['rhs_table']);
							$mainKey = ($relationShipDirection == 'L2R' ? $currentRelationShip['lhs_key'] : $currentRelationShip['rhs_key']);
							$relatedTable = ($relationShipDirection == 'L2R' ? $currentRelationShip['rhs_table'] : $currentRelationShip['lhs_table']);
							$relatedKey = ($relationShipDirection == 'L2R' ? $currentRelationShip['rhs_key'] : $currentRelationShip['lhs_key']);
							$parentKey = ($keyDepth >= 1 ? $parentLinkExploded[0] : null);
							
							$joinTable = array(
								'table' => $currentRelationShip['join_table'],
								'lhsKey' => ($relationShipDirection == 'L2R' ? $currentRelationShip['join_key_lhs'] : $currentRelationShip['join_key_rhs']),
								'rhsKey' => ($relationShipDirection == 'L2R' ? $currentRelationShip['join_key_rhs'] : $currentRelationShip['join_key_lhs']),
								'roleColumn' => $currentRelationShip['relationship_role_column'],
								'roleValue' => $currentRelationShip['relationship_role_column_value']
							);
							
							$isMainCustom = false;
							$isRelatedCustom = $isCustomTable;
								
							$storedKey = $mainKey.'.'.$currentRelationShip['relationship_name'];

						} else {

							//*************************************//
							//******Fields MetaData Searching******//
							//*************************************//
							$availableFieldsMetadata = self::getAvailableFieldsMetadata($reportModule);
							$currentRelationShip = self::getCurrentRelationShip($availableFieldsMetadata, $relationshipName);
							
							$mainTable = ($keyDepth >= 1 ? $tableExploded[$keyDepth-1] : $reportTable);
							$mainKey = $currentRelationShip['ext3'];
							$relatedTable = strtolower($currentRelationShip['ext2']);
							$relatedKey = 'id';
							$parentKey = ($keyDepth >= 1 ? $parentLinkExploded[0] : null);
							
							$joinTable = null;
							
							$isMainCustom = true;
							$isRelatedCustom = $isCustomTable;
							
							$storedKey = $mainKey.'.'.$relatedTable;

						}

					} else { //Relate Field

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array(
							'database' => '-1',
							'restricted' => false
						);
						$definedAvailableRelates = asol_ReportsUtils::managePremiumFeature("reportRelatesManagement", "reportFunctions.php", "getReportDefinedAvailableRelates", $extraParams);
						$theModule = ($keyDepth >= 1 ? $tableModulesAssociation[$lastTableName] : $reportModule);
						$isVirtualLink = ($definedAvailableRelates !== false ? (isset($definedAvailableRelates[$theModule][$currentLink]) ? true : false) : false);
						//***********************//
						//***AlineaSol Premium***//
						//***********************//

						if ($isVirtualLink) {

							$relatedInfo = null;
							$relatedModule = $definedAvailableRelates[$theModule][$currentLink]['relationModule'];
							$relatedTable = ($keyDepth >= 1 ? $tableName : strtolower($relatedModule));
							$relatedKey = $definedAvailableRelates[$theModule][$currentLink]['relationField'];

						} else {
						
							$relatedInfo = asol_Report::getReportsRelatedFields($bean, $currentLink);
							$relatedModule = ($keyDepth < 1 && $auditedReport && $currentLink === 'parent_id' ? $reportModule : $relatedInfo['module']);
							$relatedTable = ($keyDepth >= 1 ? $tableName : strtolower($relatedModule));
							$relatedKey = 'id';
			
						}
						
						$mainKeyExploded = explode(' ', $keyExploded[0]);
						$mainFieldKey = $mainKeyExploded[0];

						$mainTable = ($keyDepth >= 1 ? $tableExploded[$keyDepth-1] : ($auditedReport ? $reportTable.'_audit' : $reportTable));
						$mainKey = $currentLink;
						
						$parentKey = ($keyDepth >= 1 ? $parentLinkExploded[0] : null);
						
						$joinTable = null;
						
						$isMainCustom = isset($relatedInfo['custom_module']);
						$isRelatedCustom = $isCustomTable;
						
						$storedKey = $mainKey.'.'.$relatedTable;
						
					}

				}
				

				
				$hasRelatedCustom = $joinVariables[$mainFieldKey][$keyDepth][$storedKey]['isRelatedCustom'];
				
				$didCountJoin = $joinVariables[$mainFieldKey][$keyDepth][$storedKey]['doCountJoin'];
				if (((isset($didCountJoin) && !$didCountJoin) && $currentDoCountJoin)) {
					$joinVariables[$mainFieldKey][$keyDepth][$storedKey]['doCountJoin'] = true;
				}

				if ((!empty($mainKey)) && ($hasRelatedCustom !== true)) {

					$currentDoJoin = (($currentDoJoin) || ($joinVariables[$mainFieldKey][$keyDepth][$storedKey]['doJoin']));
					$currentDoCountJoin = (($currentDoCountJoin) || ($joinVariables[$mainFieldKey][$keyDepth][$storedKey]['doCountJoin']));
					
					$joinVariables[$mainFieldKey][$keyDepth][$storedKey] = array(
						'mainTable' => $mainTable,
						'mainKey' => $mainKey,
						'relatedTable' => $relatedTable,
						'relatedKey' => $relatedKey,
						'parentKey' => $parentKey,
					
						'joinTable' => (($joinTable['table'] == null && $joinTable['lhsKey'] == null && $joinTable['rhsKey'] == null) ? null : $joinTable),
						
						'isMainCustom' => $isMainCustom,
						'isRelatedCustom' => $isRelatedCustom,
					
						'avoidAlias' => ($keyDepth >= 1 ? false : ($auditedReport ? true : false)),
						'doJoin' => $currentDoJoin,
						'doCountJoin' => $currentDoCountJoin
					);
					
				}
				
				$lastTableName = $tableName;
			
				//********************************************//
				//***Get Indexes From Report Related Tables***//
				//********************************************//
				if (!isset($_SESSION['asolReportsTableIndexes'][$dbKey][$relatedTable])) {
					foreach (asol_Report::getSelectionResults("SHOW INDEX FROM ".$relatedTable, null, false, $alternativeDb) as $tableCurrentIndex) {
						$_SESSION['asolReportsTableIndexes'][$dbKey][$relatedTable][$tableCurrentIndex['Column_name']] = ($tableCurrentIndex['Key_name'] === 'PRIMARY' ? 'PRIMARY' : 'INDEX');
					}
				}
				//********************************************//
				//***Get Indexes From Report Related Tables***//
				//********************************************//
			
			}

			
			//****************************************//
			//******Generate SQL Variable Joins*******//
			//****************************************//
			if (!empty($currentValues['sql'])) {
				self::getJoinsFromSqlVariables($currentValues['sql'], $currentDoJoin, $currentDoCountJoin, $alternativeDb, $reportModule, $reportTable, $joinVariables, $reportTableCustomJoin, $processedJoinsFromSqlKeys);
			}
			
		}
		

		$sqlJoin = '';
		$sqlCountJoin = '';
		
		$aliasIndexTable = array();
		$varJoinIndex = 0;
		
		
		foreach ($joinVariables as $initKey=>$mainJoinFields) {

			foreach ($mainJoinFields as $mainJoinIndex=>$secondJoinFields) {
			
				$secondJoinIndex = 0;
				
				foreach ($secondJoinFields as $joinKey=>$joinVar) {

					
					//***************************//
					//****Variable Definition****//
					//***************************//
					$parentKey = $joinVar['parentKey'];
					$mainTable = $joinVar['mainTable'];
		      		$mainKey = $joinVar['mainKey'];
					$relatedTable = $joinVar['relatedTable'];
					$relatedKey = $joinVar['relatedKey'];
					
					$joinTable = $joinVar['joinTable'];
					
					$isMainCustom = $joinVar['isMainCustom'];
					$isRelatedCustom = $joinVar['isRelatedCustom'];
					
					$avoidAlias = $joinVar['avoidAlias'];
					
					$doJoin = $joinVar['doJoin'];
					$doCountJoin = $joinVar['doCountJoin'];
					
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$joinType = asol_ReportsUtils::managePremiumFeature("multiJoinReport", "reportFunctions.php", "getJoinType", array('joinsTable' =>$fieldValues['tables'][0]['joins'], 'relatedTable' => $relatedTable));
					$joinType = ($joinType !== false) ? $joinType : 'LEFT';
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					
					
					//************************//
					//****Index Generation****//
					//************************//
					$parentAliasIndex = ($mainJoinIndex > 0 ? $aliasIndexTable[$initKey][$mainJoinIndex-1][$parentKey][$mainTable].$aliasSuffix : $aliasSuffix);
					$currentAliasIndex = ($avoidAlias ? $aliasSuffix : $varJoinIndex.$mainJoinIndex.$mainJoinIndex.$secondJoinIndex.$aliasSuffix);

					
					//**********************//
					//****SQL Generation****//
					//**********************//
					$sqlCurrentJoinQuery = '';
					$sqlCurrentCountJoinQuery = '';
					
					if ($isMainCustom) {
						
						$sqlCurrentCommonJoinQuery = ' LEFT JOIN '.$mainTable.'_cstm '.$mainTable.'_cstm'.($keyDepth >= 1 ? $currentAliasIndex : '').' ON ('.$mainTable.$parentAliasIndex.'.id='.$mainTable.'_cstm'.($keyDepth >= 1 ? $currentAliasIndex : '').'.id_c)';
						
						if ($doJoin && (($keyDepth >= 1) || (!$reportTableAlreadyCustomJoined))) {
						
							$sqlCurrentJoinQuery .= $sqlCurrentCommonJoinQuery;
							$reportTableAlreadyCustomJoined = ($reportTableAlreadyCustomJoined || ($keyDepth === 0));
							
						}
						
						if ($doCountJoin && (($keyDepth >= 1) || (!$reportTableAlreadyCustomCountJoined))) {
						
							$sqlCurrentCountJoinQuery .= $sqlCurrentCommonJoinQuery;
							$reportTableAlreadyCustomCountJoined = ($reportTableAlreadyCustomCountJoined || ($keyDepth === 0));
						
						}
						
					}
					
					if ($joinTable === null) {
						
						$sqlCurrentCommonJoinQuery = ' '.$joinType.' JOIN '.$relatedTable.' '.$relatedTable.$currentAliasIndex.' ON ('.$mainTable.($isMainCustom ? '_cstm'.($keyDepth >= 1 ? $currentAliasIndex : '') : $parentAliasIndex).'.'.$mainKey.'='.$relatedTable.$currentAliasIndex.'.'.$relatedKey.($isNonCrmDatabase || $hasDeletedUsage ? '' : ' AND '.$relatedTable.$currentAliasIndex.'.deleted=0').')';
						
						$sqlCurrentJoinQuery .= $sqlCurrentCommonJoinQuery;
						$sqlCurrentCountJoinQuery .= $sqlCurrentCommonJoinQuery;
					
					} else {

						$sqlCurrentCommonJoinQuery = ' '.$joinType.' JOIN '.$joinTable['table'].' '.$joinTable['table'].$currentAliasIndex.' ON ('.$mainTable.($isMainCustom ? '_cstm'.($keyDepth >= 1 ? $currentAliasIndex : '') : $parentAliasIndex).'.'.$mainKey.'='.$joinTable['table'].$currentAliasIndex.'.'.$joinTable['lhsKey'].($hasDeletedUsage ? '' : ' AND '.$joinTable['table'].$currentAliasIndex.'.deleted=0'.(!empty($joinTable['roleColumn']) ? ' AND '.$joinTable['table'].$currentAliasIndex.'.'.$joinTable['roleColumn'].'=\''.$joinTable['roleValue'].'\'' : '').')');
						$sqlCurrentCommonJoinQuery .= ' '.$joinType.' JOIN '.$relatedTable.' '.$relatedTable.$currentAliasIndex.' ON ('.$joinTable['table'].$currentAliasIndex.'.'.$joinTable['rhsKey'].'='.$relatedTable.$currentAliasIndex.'.'.$relatedKey.($isNonCrmDatabase || $hasDeletedUsage ? '' : ' AND '.$relatedTable.$currentAliasIndex.'.deleted=0').')';
						
						$sqlCurrentJoinQuery .= $sqlCurrentCommonJoinQuery;
						$sqlCurrentCountJoinQuery .= $sqlCurrentCommonJoinQuery;
					
					}
					
					if ($isRelatedCustom) {
						
						$sqlCurrentCommonJoinQuery = ' LEFT JOIN '.$relatedTable.'_cstm '.$relatedTable.'_cstm'.$currentAliasIndex.' ON ('.$relatedTable.$currentAliasIndex.'.id='.$relatedTable.'_cstm'.$currentAliasIndex.'.id_c)';
					
						$sqlCurrentJoinQuery .= $sqlCurrentCommonJoinQuery;
						$sqlCurrentCountJoinQuery .= $sqlCurrentCommonJoinQuery;
						
					}
					
					
					//*************************************//
					//****Apply Query to SqlJoin String****//
					//*************************************//
					if ($doJoin) {
						$sqlJoin .= $sqlCurrentJoinQuery;
					}
					
					if ($doCountJoin) {
						$sqlCountJoin .= $sqlCurrentCountJoinQuery;
					}
					
					
					$aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable] = $currentAliasIndex;
					$secondJoinIndex++;

				}

			}

			$varJoinIndex++;

		}

		
		//*******************************************************//
		//*****Generate Report Table Custom Join when Needed*****//
		//*******************************************************//
		$sqlCurrentJoinQuery = $sqlCurrentCountJoinQuery = ' LEFT JOIN '.$reportTable.'_cstm ON ('.$reportTable.'.id='.$reportTable.'_cstm.id_c)';

		if ($reportTableCustomJoin && (!$reportTableAlreadyCustomJoined)) {
			$sqlJoin .= $sqlCurrentJoinQuery;
		}
		if ($reportTableCustomJoin && (!$reportTableAlreadyCustomCountJoined)) {
			$sqlCountJoin .= $sqlCurrentCountJoinQuery;
		}
		
		
		//******************************************************//
		//******Override Fields & Filters with Table Alias******//
		//******************************************************//
		self::resetValuesWithJoinAlias($fieldValues['tables'][0]['data'], $aliasIndexTable, $reportTable, $auditedReport, $fieldsByRef, $aliasSuffix);
		self::resetValuesWithJoinAlias($filterValues, $aliasIndexTable, $reportTable, $auditedReport, $fieldsByRef, $aliasSuffix, false);

		
		
		//*******************************//
		//***Relation Domain Left Join***//
		//*******************************//
		if (asol_ReportsUtils::isDomainsInstalled()) {
			
			if ($domainField !== null) {
	
				if ($domainField != "") {
					
					if (isset($domainField["domainRelation"])) {
					
						$domainRelation = $domainField["domainRelation"];

						$initKey = $domainRelation["linkField"];
						$mainJoinIndex = 0;
						$mainKey = $initKey;
						$relatedTable = $domainRelation["relatedTable"];
						
						$processedRelation = isset($aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable]);
						$domainIndex = $aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable];
						
						if (!$processedRelation) {
						
							$domainIndex = count($fieldValues['tables'][0]['data']);
							$domainRelationTableAlias = $domainRelation["relatedTable"].$domainIndex;
							
							$extendedJoin = " LEFT JOIN ".$domainRelation["relatedTable"]." ".$domainRelationTableAlias." ON (".$reportTable.".".$domainRelation["linkField"]."=".$domainRelationTableAlias.".".$domainRelation["relatedKey"].") "; 
							$sqlJoin .= $extendedJoin;
							$sqlCountJoin .= $extendedJoin;
						
						} else {
							
							$domainRelationTableAlias = $domainRelation["relatedTable"].$domainIndex;
							
						}
						
						$domainField["domainRelation"]["relatedTable"] = $domainRelationTableAlias;
						
					}
					
				}
			
			}
			
		}

		
		//********************************//
		//***Relation Audited Left Join***//
		//********************************//
		if ($auditedReport) {
			
			$domainRelation = $domainField["domainRelation"];

			$initKey = 'parent_id';
			$mainJoinIndex = 0;
			$mainKey = $initKey;
			$relatedTable = $reportTable;
			
			$processedRelation = isset($aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable]);
			$domainIndex = $aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable];
			
			if (!$processedRelation) {
			
				$domainIndex = count($fieldValues['tables'][0]['data']);
				$domainRelationTableAlias = $domainRelation["relatedTable"].$domainIndex;
				
				$extendedJoin = " LEFT JOIN ".$relatedTable." ".$relatedTable." ON (".$relatedTable."_audit.".$mainKey."=".$relatedTable.".id) "; 
				$sqlJoin .= $extendedJoin;
				$sqlCountJoin .= $extendedJoin;
			
			}
			
		}
		
		
		
		//**************************************//
		//****Define Returned Function Array****//
		//**************************************//
		$returnedJoinArray = array (
			"moduleCustomJoined" => false,
			"moduleCountCustomJoined" => false,
			"aliasIndexTable" => $aliasIndexTable,
			"querys" => array (
				"Join" => $sqlJoin,
				"CountJoin" => $sqlCountJoin,
			),
		);
		
		return $returnedJoinArray;
		
	}
	
	static private function getAvailableRelationShips($mainTable, $relatedModule, $fieldKey) {
		
		global $db;
		
		$availableRelationShips = array();
		
		$relationships_R2L = "SELECT DISTINCT relationship_name, lhs_table, lhs_key, rhs_table, rhs_key, join_table, join_key_lhs, join_key_rhs, relationship_role_column, relationship_role_column_value FROM relationships WHERE rhs_table='".$mainTable."' AND lhs_table='".strtolower($relatedModule)."' AND rhs_key='".$fieldKey."'";
		$relationships_R2L_Query = $db->query($relationships_R2L);
		
		if ($relationships_R2L_Query->num_rows > 0) {
			while ($relationship_R2L = $db->fetchByAssoc($relationships_R2L_Query)) {
				$relationship_R2L['asolRelationShipDirection'] = 'R2L';
				$availableRelationShips[] = $relationship_R2L;
			}
		}
		
		$relationships_L2R = "SELECT DISTINCT relationship_name, lhs_table, lhs_key, rhs_table, rhs_key, join_table, join_key_lhs, join_key_rhs, relationship_role_column, relationship_role_column_value FROM relationships WHERE lhs_table='".$mainTable."' AND rhs_table='".strtolower($relatedModule)."' AND lhs_key='".$fieldKey."'";
		$relationships_L2R_Query = $db->query($relationships_L2R);
		
		if ($relationships_L2R_Query->num_rows > 0) {
			while ($relationship_L2R = $db->fetchByAssoc($relationships_L2R_Query)) {
				$relationship_L2R['asolRelationShipDirection'] = 'L2R';
				$availableRelationShips[] = $relationship_L2R;
			}
		}
		
		return $availableRelationShips;
		
	}
	
	static private function getAvailableFieldsMetadata($reportModule) {
		
		global $db;
		
		$availableFieldsMetadata = array();
		
		$relationships_FMD = "SELECT DISTINCT name, custom_module, type, ext2, ext3 FROM fields_meta_data WHERE custom_module='".$reportModule."' AND type IN ('relate')";
		$relationships_FMD_Query = $db->query($relationships_FMD);
	
		if ($relationships_FMD_Query->num_rows > 0) {
			while ($relationship_FMD = $db->fetchByAssoc($relationships_FMD_Query)) {
				$availableFieldsMetadata[] = $relationship_FMD;
			}
		}
		
		return $availableFieldsMetadata;
		
	}
	
	static private function getCurrentRelationShip($availableRelationShips, $searchFieldKeyRelationshipName) {
	
		$currentRelationShip = null;
		
		foreach ($availableRelationShips as $availableRelationShip) {
			$currentRelationShip = $availableRelationShip;
			if ($currentRelationShip['relationship_name'] == $searchFieldKeyRelationshipName)
				break;
		}
	
		return $currentRelationShip;
	
	}
	
	static private function resetValuesWithJoinAlias(& $storedValues, $aliasIndexTable, $reportTable, $auditedReport, & $fieldsByRef, $aliasSuffix = '', $areFields = true) {
		
		foreach ($storedValues as & $currentValues) {
			
			$usedIndex = null;
			$currentValues['notModifiedFieldName'] = $currentValues['field'];

			$fieldExploded = explode('.', $currentValues['field']);
			$keyExploded = explode(';', $currentValues[($areFields ? 'key' : 'relationKey')]);
			$initKeyExploded = explode(' ', $keyExploded[0]);
			$currentKeyExploded = explode(' ', end($keyExploded));
			$tableExploded = explode('::', $fieldExploded[0]);
			
			$initKey = $initKeyExploded[0];
			$mainJoinIndex = (count($keyExploded) - 1);
			$mainKey = $currentKeyExploded[0];
			$relatedTable = end($tableExploded);
			
			$tableUnderScoreExploded = explode("_", $relatedTable);
			$isCustomField = (end($tableUnderScoreExploded) == 'cstm');
			$relatedRealTable = ($isCustomField ? substr($relatedTable, 0, -5) : $relatedTable);

			if ($currentValues['isRelated']) {	
				$usedIndex = $aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedRealTable];
			}
			
			$currentValues['field'] = (!empty($usedIndex) ? $relatedTable.$usedIndex.".".$fieldExploded[1] : (($auditedReport && !$areFields && !$isCustomField && !$currentValues['isRelated']) ? $reportTable.'_audit.'.$currentValues['field'] : $currentValues['field']));		

			if ($areFields) {

				$fieldRef = $currentValues['fieldReference'];
				$setWithRef = ((!empty($fieldRef)) && (!isset($fieldsByRef[$fieldRef])));
				$dontAddReportTable = ($currentValues['isRelated'] || ($isCustomField && $mainJoinIndex === 0));
				
				if ($setWithRef) {
					$fieldsByRef[$fieldRef] = array(
						'field' => ($dontAddReportTable ? $currentValues['field'] : $reportTable.$aliasSuffix.'.'.$currentValues['field']),
						'sql' => $currentValues['sql'],
					);
				} else {
					$fieldsByRef[] = array(
						'field' => ($dontAddReportTable ? $currentValues['field'] : $reportTable.$aliasSuffix.'.'.$currentValues['field']),
						'sql' => $currentValues['sql'],
					);
				}

			}
			
		}
	
	}
	
	static private function fieldOrderedWithLimit($fieldInfo, $resultsLimit) {

		return (($fieldInfo['sortDirection'] !== '0') && ($resultsLimit !== 'all'));
		
	}
	
	static public function fieldHasFilter($filterValues, $fieldInfo) {
	
		foreach ($filterValues as $filter) {
			
			//If related AND input name and key are the same
			if (($filter['field'] === $fieldInfo['field']) && ($filter['relationKey'] === $fieldInfo['key'])) {
				return true;
			}
	
		}
	
		return false;
	
	}
	
	static private function fieldSqlVarsInFilters($fieldValues, $filterValues, $fieldInfo) {

		$beanItems = asol_ReportsUtils::getItemVariables($fieldInfo['sql']);

		foreach ($fieldValues['tables'][0]['data'] as $fieldValue) {
			foreach ($beanItems as $beanItem) {
				if (strpos($fieldValue['sql'], $beanItem['item']) !== false) { 
	            	if (self::fieldHasFilter($filterValues, $fieldValue)) {
	            		return true;
	            	}
	            }
	        }
		}

		return false;
		
	}

	static private function fieldSqlRefsInFilters($fieldValues, $filterValues, $fieldInfo) {

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array('fieldValues' => $fieldValues, 'filterValues' => $filterValues, 'fieldInfo' => $fieldInfo);
		return asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "fieldSqlRefsInFilters", $extraParams);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
	}
	
	static private function updateMySqlFunctionField($myFunction, $aggregatedFunction, & $selectedField) {
		
		$fieldFunctionSelfReference = explode('${this}', $myFunction);
		
		$hasSelfReference = (count($fieldFunctionSelfReference) > 1);
		$firstCharactersAreArithmetical = (in_array(substr(trim($myFunction), 0, 1), array('+', '-', '*', '/', '%')) || in_array(strtoupper(substr(trim($myFunction), 0, 3)), array('DIV')));
		
		if ($aggregatedFunction == null) {

			if ($hasSelfReference) {
				$selectedField = "(".implode($selectedField, $fieldFunctionSelfReference).")";
			} else {
				$selectedField = ($firstCharactersAreArithmetical ? "((".$selectedField.")".$myFunction.")" : "(".$myFunction.")");
			}
			
		} else {
	
			if ($hasSelfReference) {
				$selectedField = implode($aggregatedFunction."(".$selectedField.")", $fieldFunctionSelfReference);
			}
		
		}
		
		return (count($fieldFunctionSelfReference) <= 1);
		
	}
	
	
	static public function getSqlSelectQuery(& $fieldValues, & $chartInfo, $predefinedTemplates, $alternativeDb, $reportTable, $hourOffset, $quarterMonth, $weekStart, $audited_report, $displayTotals, $displaySubtotals, $fieldsByRef, $filtersByRef, $aliasIndexTable = array(), $aliasSuffix = '') {
	
		//OBTENEMOS LA CAUSULA "SELECT" con sus ALIAS
		$sqlSelect = "SELECT ";
		$columns = array();
		$types = array();
	
		$hasGrouped = false;
		$hasTotals = false;
		$hasFunctionWithSQL = false;
		
		$groupSubTotalField = null;
		$groupSubTotalFieldAscSort = null;
	
		
		$sqlTotals = "SELECT ";
		$sqlTotalsC = "SELECT ";
		$totals = array();
	
		//CREAR Y USAR SUBLISTA CON LOS CAMPOS QUE IRÁN EN EL RESULSET UNICAMENTE
		$resulsetFields = array();
		$referenceAlias = array();
		$processedChartFields = array();
		$multipleAutoIndex = array();

		foreach ($fieldValues['tables'][0]['data'] as $i => $currentValues) {

			if (($currentValues['function'] != "0") && (!empty($currentValues['sql'])))
				$hasFunctionWithSQL = true;
	
			$hasGrouped = (($hasGrouped) || (in_array($currentValues['grouping'], array('Grouped', 'Minute Grouped', 'Quarter Hour Grouped', 'Hour Grouped', 'Day Grouped', 'DoW Grouped', 'WoY Grouped', 'Month Grouped', 'Natural Quarter Grouped', 'Fiscal Quarter Grouped', 'Natural Year Grouped', 'Fiscal Year Grouped'))));
			
		}
		
		foreach ($fieldValues['tables'][0]['data'] as $i => & $currentValues) {
	
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array('currentSql' => $currentValues['sql'], 'fieldsByRef' => $fieldsByRef, 'suppressChars' => false);
			$currentSql = asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "replaceSqlReferenceByValue", $extraParams);
			$currentValues['sql'] = ($currentSql !== false) ? $currentSql : $currentValues['sql'];
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array('multiLanguage' => $currentValues['language']);
			$returnedPremiumAlias = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getMultiLanguageLabel", $extraParams);
			$currentValues['untranslatedAlias'] = trim($currentValues['alias']);
			$currentValues['alias'] = ($returnedPremiumAlias !== false) ? $returnedPremiumAlias : trim($currentValues['alias']);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			$referenceAlias[$currentValues['fieldReference']] = $currentValues['alias'];
			
			$currentValues['enumLabels'] = (in_array($currentValues['enumOperator'], array('options', 'function'))) ? asol_Report::getEnumLabels($currentValues['enumOperator'], $currentValues['enumReference']) : array();	
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$enumLabels = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getFormatTypeEnumValues", array('enumLabels' => $currentValues['enumLabels'], 'extraFormat' => $currentValues['format']['extra'], 'template' => $currentValues['templates']['enum'], 'enumTemplates' => $predefinedTemplates['enum']));
			$currentValues['enumLabels'] = ($enumLabels !== false) ? $enumLabels : $currentValues['enumLabels'];
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$currentPhp  = asol_ReportsUtils::managePremiumFeature("predefinedTemplates", "reportFunctions.php", "getPhpTemplateValue", array('currentPHP' => $currentValues['php'], 'template' => $currentValues['templates']['php'], 'phpTemplates' => $predefinedTemplates['php']));
			$currentValues['php'] = ($currentPhp !== false) ? $currentPhp : $currentValues['php'];
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			if (isset($currentValues['format']['extra']['thresholds'])) {
				$currentThreshold  = asol_ReportsUtils::managePremiumFeature("predefinedTemplates", "reportFunctions.php", "getThresholdTemplateValue", array('currentThreshold' => $currentValues['format']['extra']['thresholds'], 'template' => $currentValues['templates']['threshold'], 'thresholdTemplates' => $predefinedTemplates['threshold']));
				$currentValues['format']['extra']['thresholds'] = ($currentThreshold !== false) ? $currentThreshold : $currentValues['format']['extra']['thresholds'];
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			
			$sqlFunction = self::replaceReportsFieldVars($currentValues['sql'], $reportTable, $aliasIndexTable, $audited_report, $alternativeDb);

			if (!$audited_report)
				$table = ((count(explode(".", $currentValues['field']))) == 1 ) ? $reportTable.$aliasSuffix."." : "";
			else
				$table = ((count(explode(".", $currentValues['field']))) == 1 ) ? $reportTable."_audit.".$aliasSuffix : "";
			
			$fieldValues['tables'][0]['data'][$i]['originalFieldName'] = $currentValues['field'];
			$fieldValues['tables'][0]['data'][$i]['field'] = $table.$currentValues['field'];
			
			if ($currentValues['grouping'] !== '0') {
				
				switch ($currentValues['grouping']) {

					case "Detail":
					case "Grouped":
						$whereFunction = null;
						break;
						
					case "Minute Detail":
					case "Minute Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'MINUTE(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'MINUTE(${this})';
						break;
						
					case "Quarter Hour Detail":
					case "Quarter Hour Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'TRUNCATE((MINUTE(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))/15), 0)';
						else
							$whereFunction = 'TRUNCATE((MINUTE(${this})/15), 0)';
						break;
						
					case "Hour Detail":
					case "Hour Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'HOUR(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'HOUR(${this})';
						break;
						
					case "Day Detail":
					case "Day Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'DATE(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'DATE(${this})';
						break;
						
					case "DoW Detail":
					case "DoW Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'WEEKDAY(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'WEEKDAY(${this})';
						break;
						
					case "WoY Detail":
					case "WoY Grouped":
						$weekStartsOn = ($weekStart == '0') ? 2 : 7;

						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'CONCAT(YEAR(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)), WEEK(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND), '.$weekStartsOn.'))';
						else
							$whereFunction = 'CONCAT(YEAR(${this}), WEEK(${this}, '.$weekStartsOn.'))';
						break;
						
					case "Month Detail":
					case "Month Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'EXTRACT(YEAR_MONTH FROM DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'EXTRACT(YEAR_MONTH FROM ${this})';
						break;
						
					case "Natural Quarter Detail":
					case "Natural Quarter Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'CONCAT(YEAR(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)), QUARTER(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)))';
						else
							$whereFunction = 'CONCAT(YEAR(${this}), QUARTER(${this}))';
						break;
						
					case "Fiscal Quarter Detail":
					case "Fiscal Quarter Grouped":
						$quarterMonth = (empty($quarterMonth) ? 0 : 12 - (intval($quarterMonth) - 1));

						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'CONCAT(YEAR(DATE_SUB(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND), INTERVAL '.(12 - $quarterMonth).' MONTH)), QUARTER(DATE_ADD(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND), INTERVAL '.$quarterMonth.' MONTH)))';
						else
							$whereFunction = 'CONCAT(YEAR(DATE_SUB(${this}, INTERVAL '.(12 - $quarterMonth).' MONTH)), QUARTER(DATE_ADD(${this}, INTERVAL '.$quarterMonth.' MONTH)))';
						break;
				
					case "Natural Year Detail":
					case "Natural Year Grouped":
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = 'YEAR(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND))';
						else
							$whereFunction = 'YEAR(${this})';
						break;
						
					case "Fiscal Year Detail":
					case "Fiscal Year Grouped":
						$quarterMonth = (empty($quarterMonth) ? 0 : 12 - (intval($quarterMonth) - 1));
						
						if ((in_array($currentValues['type'], array('datetime', 'datetimecombo'))) && ($hourOffset != 0))
							$whereFunction = '(YEAR(DATE_SUB(DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND), INTERVAL '.(12 - $quarterMonth).' MONTH)))';
						else
							$whereFunction = '(YEAR(DATE_SUB(${this}, INTERVAL '.(12 - $quarterMonth).' MONTH)))';
						break;
						
				}

				if ($whereFunction !== null) {
					self::updateMySqlFunctionField($whereFunction, null, $fieldValues['tables'][0]['data'][$i]['field']);
				}
					
			}

	
			//****************************************//
			//***Fields Without Aggreagted Function***//
			//****************************************//
			if (in_array($currentValues['function'], array("0", "undefined"))) {
	
				if (!empty($sqlFunction)) { //ASOL CALCULATED
	
					self::updateMySqlFunctionField($sqlFunction, null, $fieldValues['tables'][0]['data'][$i]['field']);
					if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal")))
						$sqlSelect .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
						
				} else {
	
					if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal")))
						$sqlSelect .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
						
				}
					
				if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal"))) {
						
					$columns[] = $currentValues['alias'];
					$types[] = (!empty($currentValues['format']['type']) ? $currentValues['format']['type'] : (!empty($currentValues['type']) ? $currentValues['type'] : ""));
					$columnsU[] = $currentValues['untranslatedAlias'];
					$columnsO[] = $fieldValues['tables'][0]['data'][$i]['originalFieldName'];
					$columnsN[] = $fieldValues['tables'][0]['data'][$i]['notModifiedFieldName'];
					$columnsR[] = $fieldValues['tables'][0]['data'][$i]['fieldReference'];
					$columnsI[] = $currentValues['index'];
					$resulsetFields[] = $fieldValues['tables'][0]['data'][$i];
						
				}
	
			//*************************************//
			//***Fields With Aggregated Function***//
			//*************************************//
			} else {
	
				if ($groupSubTotalField == null) {
					$groupSubTotalField = $currentValues['alias'];
					$groupSubTotalFieldAscSort = $currentValues['sortDirection'];
				}

				
				$distintQuery = '';
				$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);	
				if (($currentValues['function'] === 'COUNT') && (!$currentValues['isRelated']) && (isset($_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable][$fieldValues['tables'][0]['data'][$i]['originalFieldName']]))) {
					$distintQuery = 'DISTINCT ';
				}
				
				$fieldValues['tables'][0]['data'][$i]['field'] = $currentValues['function']."(".$distintQuery.$fieldValues['tables'][0]['data'][$i]['field'].")";
				
				if (!empty($sqlFunction)) { //ASOL CALCULATED
	
					self::updateMySqlFunctionField($sqlFunction, null, $fieldValues['tables'][0]['data'][$i]['field']);
					if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal"))) {
						if ($hasGrouped && $displaySubtotals) {
							$sqlSelect .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
						}
						$sqlTotals .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
					}
						
				} else {

					if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal"))) {
						if ($hasGrouped && $displaySubtotals) {
							$sqlSelect .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
						}
						$sqlTotals .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$currentValues['alias']."',";
					}
						
				}
					
				if (in_array(strtolower($currentValues['visible']), array("yes", "html", "internal"))) {
						
					if ($hasGrouped && $displaySubtotals) {
						$columns[] = $currentValues['alias'];
						$types[] = (!empty($currentValues['format']['type']) ? $currentValues['format']['type'] : (!empty($currentValues['type']) ? $currentValues['type'] : ""));
						$columnsU[] = $currentValues['untranslatedAlias'];
						$columnsO[] = $fieldValues['tables'][0]['data'][$i]['originalFieldName'];
						$columnsN[] = $fieldValues['tables'][0]['data'][$i]['notModifiedFieldName'];
						$columnsR[] = $fieldValues['tables'][0]['data'][$i]['fieldReference'];
						$columnsI[] = $currentValues['index'];
					}
					
					if (!$hasGrouped || $displaySubtotals) {
						$resulsetFields[] = $fieldValues['tables'][0]['data'][$i];
					}
					
					if ($displayTotals) {
						$totals[] = $fieldValues['tables'][0]['data'][$i];
					}
					
					$hasTotals = true;
						
				}
	
			}
	
			//Check if chart is displayable on Charts Div
			$availableCharts = array();
			
			foreach ($chartInfo as $cKey=>$cInfoData) {
	
				$fInfoData = $fieldValues['tables'][0]['data'][$i];
				
				if ($audited_report) {
					$cInfoData['yAxis'] = (count(explode(".", $cInfoData['yAxis'])) > 1) ? $cInfoData['yAxis'] : $reportTable."_audit.".$cInfoData['yAxis'];
				}
					
				if ($cInfoData['type'] != 'parallel') {
					$isCurrentChart = (($fInfoData['notModifiedFieldName'] == $cInfoData['yAxis']) && ($fInfoData['index'] == $cInfoData['yIndex']));
				} else {
					$isCurrentChart = ((in_array($fInfoData['notModifiedFieldName'], $cInfoData['yAxis'])) && (in_array($fInfoData['index'], explode(",",$cInfoData['yIndex']))));
				}
				
				$isCurrentZChart = (($fInfoData['notModifiedFieldName'] == $cInfoData['zAxis']) && ($fInfoData['index'] == $cInfoData['zIndex']));

				if (($cInfoData['display'] == 'yes') && ($isCurrentChart || $isCurrentZChart)) {
					
					$availableCharts[] = array(
						'displayable' => true,
						'alias' => $cInfoData['label'].($isCurrentZChart ? '_z' : ''),
						'hasMultipleYAxis' => (count($cInfoData['yAxis']) > 1),
					);

				}
				
				foreach ($cInfoData['subcharts'] as $subChartKey=>$subChartValues) {
					
					$subChartData = $subChartValues['data'];
					
					if ($audited_report) {
						$subChartData['yAxis'] = (count(explode(".", $subChartData['yAxis'])) > 1) ? $subChartData['yAxis'] : $reportTable."_audit.".$subChartData['yAxis'];
					}
						
					$isCurrentChart = (($fInfoData['notModifiedFieldName'] == $subChartData['yAxis']) && ($fInfoData['index'] == $subChartData['yIndex']));
					$isCurrentZChart = (($fInfoData['notModifiedFieldName'] == $subChartData['zAxis']) && ($fInfoData['index'] == $subChartData['zIndex']));
					if (($subChartData['display'] == 'yes') && ($isCurrentChart || $isCurrentZChart)) {
						
						$availableCharts[] = array(
							'displayable' => true,
							'alias' => $cInfoData['label'].'_'.$subChartKey.($isCurrentZChart ? '_z' : ''),
						);
	
					}

				}
	
			}
			
			foreach ($availableCharts as $availableChart) {
				
				if ($availableChart['displayable']) {
				
					if( $availableChart['hasMultipleYAxis'] ) {
						$currentMultiIndex = (!isset($multipleAutoIndex[$availableChart['alias']]) ? 0 : $multipleAutoIndex[$availableChart['alias']] + 1);
						$multipleAutoIndex[$availableChart['alias']] = $currentMultiIndex;
						$availableChart['alias'] .= $currentMultiIndex;
					}
					
					if (in_array($availableChart['alias'], $processedChartFields))
						continue;
					
					if (!empty($sqlFunction)) { //ASOL CALCULATED
		
						if (self::updateMySqlFunctionField($sqlFunction, ($currentValues['function'] === '0' ? null : $currentValues['function']), $fieldValues['tables'][0]['data'][$i]['originalFieldName']))
							$sqlTotalsC .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$availableChart['alias']."',";
						else
							$sqlTotalsC .= $fieldValues['tables'][0]['data'][$i]['originalFieldName']." AS '".$availableChart['alias']."',";
		
					} else {
						
						$sqlTotalsC .= $fieldValues['tables'][0]['data'][$i]['field']." AS '".$availableChart['alias']."',";
						
					}
					
					$processedChartFields[] = $availableChart['alias'];
	
				}
				
			}
			//Check if chart is displayable on Charts Div

		}

		if ($hasGrouped && $displaySubtotals && !$hasTotals) {

			$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
			$primaryKey = (array_search('PRIMARY', $_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable], true));
			$primaryKeyCounter = ($primaryKey !== false ? 'DISTINCT '.$reportTable.'.'.$primaryKey : '*');

			$sqlSelect = $sqlSelect." COUNT(".$primaryKeyCounter.") AS 'TOTAL',";
			$columns[] = 'TOTAL';
			$types[] = 'int';
			$columnsU[] = null;
			$columnsO[] = null;
			$columnsN[] = null;
			$columnsR[] = null;
			$columnsI[] = null;

		}
	
		
		$sqlSelect = substr($sqlSelect, 0, -1);
		$sqlTotals = substr($sqlTotals, 0, -1);
		$sqlTotalsC = substr($sqlTotalsC, 0, -1);

		
		$returnedArray = Array(
			"referenceAlias" => $referenceAlias,
			"columns" => $columns,
			"types" => $types,
			"columnsU" => $columnsU,
			"columnsO" => $columnsO,
			"columnsN" => $columnsN,
			"columnsR" => $columnsR,
			"columnsI" => $columnsI,
			"totals" => $totals,
			"groupSubTotalField" => $groupSubTotalField,
			"groupSubTotalFieldAscSort" => $groupSubTotalFieldAscSort,
			"hasGrouped" => $hasGrouped,
			"hasFunctionWithSQL" => $hasFunctionWithSQL,
			"resultsetFields" => $resulsetFields,
			"querys" => Array (
				"Select" => $sqlSelect,
				"Totals" => $sqlTotals,
				"Charts" => $sqlTotalsC,
			),
		);

		return $returnedArray;
	
	}
	
	
	static public function getSqlFromQuery($reportTable, $auditedReport, $aliasSuffix = '') {
	
		$sqlFrom = (!$auditedReport) ? " FROM ".$reportTable.(!empty($aliasSuffix) ? " ".$reportTable.$aliasSuffix : "") : " FROM ".$reportTable."_audit".(!empty($aliasSuffix) ? " ".$reportTable."_audit".$aliasSuffix : "");
		
		return $sqlFrom;
	
	}
	
	static public function generateSqlWhere(& $fieldValues, $filterValues, $reportTable, $hourOffset, $quarterMonth, $weekStart, $fieldsByRef, & $filtersByRef, $aliasSuffix = '') {

		if (!empty($filterValues)) {

			foreach($filterValues as & $filter) {
	
				if ($filter['apply'] === '0')
					continue;
				
				self::modifyFilteringValues($filter, $quarterMonth, $weekStart, $reportTable, $hourOffset, $operator1, $operator2, $aliasSuffix);			
				self::populateFilteringValues($filter, $operator1, $operator2, $filtersByRef);

			}

		}
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		foreach ($filtersByRef as & $filterByRef) {
			$extraParams = array('currentSql' => $filterByRef['sql'], 'fieldsByRef' => $fieldsByRef, 'suppressChars' => true);
			$currentSql = asol_ReportsUtils::managePremiumFeature("sqlWithReferences", "reportFunctions.php", "replaceSqlReferenceByValue", $extraParams);
			$filterByRef['sql'] = ($currentSql !== false) ? $currentSql : $filterByRef['sql'];
		}
		
		foreach ($fieldValues['tables'][0]['data'] as & $currentValues) {
			$fieldSqlFilterReference  = asol_ReportsUtils::managePremiumFeature("sqlFilterReference", "reportFunctions.php", "replaceReportsFilterVars", array('filtersByRef' => $filtersByRef, 'currentField' => $currentValues['field'], 'sqlContent' => $currentValues['sql']));
			if ($fieldSqlFilterReference !== false) {
				$currentValues['field'] = (isset($fieldSqlFilterReference['field']) ? $fieldSqlFilterReference['field'] : $currentValues['field']);
				$currentValues['sql'] = (isset($fieldSqlFilterReference['sql']) ? $fieldSqlFilterReference['sql'] : $currentValues['sql']);
			}
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
	
	}

	static private function modifyFilteringValues(& $filter, $quarterMonth, $weekStart, $reportTable, $hourOffset, & $operator1, & $operator2, $aliasSuffix) {

		global $current_user, $timedate;
		
		//Añadir tabla y . si campos son de la tabla principal
		$filter['field'] = ((count(explode(".", $filter['field']))) == 1 ) ? $reportTable.$aliasSuffix.".".$filter['field'] : $filter['field'];
		//Añadir tabla y . si campos son de la tabla principal
		
		$operator1 = ($filter['operator'] == "equals") ? "=" : "!=";
		$operator2 = "";
	
		//If timestamp do not apply TimeZone OffSet
		$hourOffset = (in_array($filter['type'], array("date", "timestamp")) ? 0 : $hourOffset);
		$hasOffset = (!empty($hourOffset));
		
		switch ($filter['operator']) {
	
			case "equals":
			case "not equals":
				
				if (in_array($filter['type'], array("date", "datetime", "datetimecombo", "timestamp"))) {
	
					switch ($filter['parameters']['first'][0]) {
						
						case "calendar":
	
							$operator1 = ($filter['operator'] == "equals" ? ($hasOffset ? "BETWEEN" : "=") : ($hasOffset ? "NOT BETWEEN" : "!="));
							$operator2 = ($hasOffset ? "AND" : "");
							
							$filter['parameters']['first'] = $filter['parameters']['second'];
							
							if ($hasOffset) {
								$filter['parameters']['first'][0] = date("Y-m-d H:i:s", strtotime($hourOffset." seconds", strtotime($filter['parameters']['first'][0])));
								$filter['parameters']['second'][0] = date("Y-m-d H:i:s", strtotime(((24*3600)-1)." seconds", strtotime($filter['parameters']['first'][0])));
							}
							
							break;
	
						case "dayofweek":
	
							$operator1 = ($filter['operator'] == "equals") ? "IN" : "NOT IN";
							$operator2 = "";
							
							$filter['parameters']['first'] = $filter['parameters']['second'];
							
							$whereFunction = 'WEEKDAY('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
							break;
							
						case "weekofyear":
	
							$operator1 = ($filter['operator'] == "equals") ? "=" : "!=";
							$operator2 = "";
							
							$filter['parameters']['first'] = $filter['parameters']['second'];
							$weekStartsOn = ($weekStart == '0') ? 2 : 7;
							$whereFunction = 'WEEK('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', '.$weekStartsOn.')';
							break;
							
						case "monthofyear":
	
							$operator1 = ($filter['operator'] == "equals") ? "IN" : "NOT IN";
							$operator2 = "";
							
							$filter['parameters']['first'] = $filter['parameters']['second'];
							
							$whereFunction = 'MONTH('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
							break;
							
						case "naturalquarterofyear":
	
							$operator1 = ($filter['operator'] == "equals") ? "IN" : "NOT IN";
							$operator2 = "";
							
							$filter['parameters']['first'] = $filter['parameters']['second'];
							
							$whereFunction = 'QUARTER('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
							break;
							
						case "fiscalquarterofyear":
							
							$operator1 = ($filter['operator'] == "equals") ? "IN" : "NOT IN";
							$operator2 = "";
							
							$quarterMonth = (empty($quarterMonth)) ? 0 : 12 - (intval($quarterMonth) - 1);
							
							$filter['parameters']['first'] = $filter['parameters']['second'];

							$whereFunction = 'QUARTER(DATE_ADD('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', INTERVAL '.$quarterMonth.' MONTH))';
							break;
							
						case "naturalyear":
							
							$operator1 = ($filter['operator'] == "equals") ? "=" : "!=";
							$operator2 = "";
							
							$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0])) ? $filter['parameters']['second'] : array(date("Y"));
							$filter['parameters']['second'] = array();
							
							$whereFunction = 'YEAR('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
							break;
							
						case "fiscalyear":
							
							$operator1 = ($filter['operator'] == "equals") ? "=" : "!=";
							$operator2 = "";
							
							$quarterMonth = (empty($quarterMonth)) ? 0 : 12 - (intval($quarterMonth) - 1);
							
							$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0])) ? $filter['parameters']['second'] : array(date("Y"));
							$filter['parameters']['second'] = array();
							
							$whereFunction = '(YEAR(DATE_ADD('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', INTERVAL '.$quarterMonth.' MONTH)) - 1)';
							break;
							
					}
					
					if (isset($whereFunction)) {
						$filter['notSqlFieldName'] = $filter['field'];
						self::updateMySqlFunctionField($whereFunction, null, $filter['field']);
					}
					
				} else if (in_array($filter['type'], array("bool"))) {
					
					$filter['parameters']['first'][0] = ($filter['parameters']['first'][0] == "true") ? "1" : "0"; 
	
				}
					
				break;
	
			case "like":
			case "not like":
				$operator1 = ($filter['operator'] == "like") ? "LIKE" : "NOT LIKE";
				$operator2 = "";
				$filter['parameters']['first'][0] = "%".$filter['parameters']['first'][0]."%";
				break;

			case "starts with":
				$operator1 = "LIKE";
				$operator2 = "";
				$filter['parameters']['first'][0] = $filter['parameters']['first'][0]."%";
				break;

			case "ends with":
				$operator1 = "LIKE";
				$operator2 = "";
				$filter['parameters']['first'][0] = "%".$filter['parameters']['first'][0];
				break;
				
			case "my items":
				$operator1 = "=";
				$operator2 = "";
				$filter['parameters']['first'][0] = (!empty($filter['parameters']['first'][0])) ? $filter['parameters']['first'][0] : $current_user->id;
				break;
	
			case "after date":
			case "before date":
				
				switch ($filter['parameters']['first'][0]) {
					
					case "calendar":
						$operator1 = ($filter['operator'] == "after date") ? ">" : "<";
						$operator2 = "";
						
						$filter['parameters']['first'] = $filter['parameters']['second'];
						
						if ($hasOffset) {
							$filter['parameters']['first'][0] = date("Y-m-d H:i:s", strtotime($hourOffset." seconds", strtotime($filter['parameters']['first'][0])));
						}
						
						break;
					
					case "weekofyear":
	
						$operator1 = ($filter['operator'] == "after date") ? ">" : "<";
						$operator2 = "";
						
						$filter['parameters']['first'] = $filter['parameters']['second'];
						$weekStartsOn = ($weekStart == '0') ? 2 : 7;
						$whereFunction = 'WEEK('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', '.$weekStartsOn.')';
						break;
						
					case "naturalyear":
							
						$operator1 = ($filter['operator'] == "after date") ? ">" : "<";
						$operator2 = "";
						
						$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0])) ? $filter['parameters']['second'] : array(date("Y"));
						$filter['parameters']['second'] = array();
						
						$whereFunction = 'YEAR('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
						break;
							
					case "fiscalyear":
							
						$operator1 = ($filter['operator'] == "after date") ? ">" : "<";
						$operator2 = "";
						
						$quarterMonth = (empty($quarterMonth)) ? 0 : 12 - (intval($quarterMonth) - 1);
							
						$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0])) ? $filter['parameters']['second'] : array(date("Y"));
						$filter['parameters']['second'] = array();
							
						$whereFunction = '(YEAR(DATE_ADD('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', INTERVAL '.$quarterMonth.' MONTH)) - 1)';
						break;
						
				}
				
				if (isset($whereFunction)) {
					$filter['notSqlFieldName'] = $filter['field'];
					self::updateMySqlFunctionField($whereFunction, null, $filter['field']);
				}
					
				break;
		
			case "more than":
				$operator1 = ">";
				$operator2 = "";
	
				if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
					$date1 = explode("-", $filter['parameters']['first'][0]);
					$filter['parameters']['first'][0] = date("Y-m-d H:59:59", @mktime(0,59,59,$date1[1],$date1[2],$date1[0])+(24*3600)-(3600)+$hourOffset);
				}
	
				break;
	
			case "less than":
				$operator1 = "<";
				$operator2 = "";
	
				if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
					$date1 = explode("-", $filter['parameters']['first'][0]);
					$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$date1[1],$date1[2],$date1[0])+$hourOffset);
				}
	
				break;
	
			case "between":
			case "not between":
				$operator1 = ($filter['operator'] == "between") ? "BETWEEN" : "NOT BETWEEN";
				$operator2 = "AND";
				
				switch ($filter['parameters']['first'][0]) {
					
					case "calendar":
						
						$filter['parameters']['first'] = $filter['parameters']['second'];
						$filter['parameters']['second'] = $filter['parameters']['third'];
						
						if ($hasOffset) {
							$filter['parameters']['first'][0] = date("Y-m-d H:i:s", strtotime($hourOffset." seconds", strtotime($filter['parameters']['first'][0])));
							$filter['parameters']['second'][0] = date("Y-m-d H:i:s", strtotime(((24*3600+$hourOffset)-1)." seconds", strtotime($filter['parameters']['second'][0])));
						}
						
						break;
						
					case "weekofyear":
						
						$filter['parameters']['first'] = $filter['parameters']['second'];
						$filter['parameters']['second'] = $filter['parameters']['third'];
						
						$weekStartsOn = ($weekStart == '0') ? 2 : 7;
						$whereFunction = 'WEEK('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', '.$weekStartsOn.')';
						break;
						
					case "naturalyear":

						$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0]) ? $filter['parameters']['second'] : array(date("Y")));
						$filter['parameters']['second'] = (!empty($filter['parameters']['third'][0]) ? $filter['parameters']['third'] : array(date("Y")));
						
						$whereFunction = 'YEAR('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').')';
						break;
						
					case "fiscalyear":

						$quarterMonth = (empty($quarterMonth)) ? 0 : 12 - (intval($quarterMonth) - 1);
							
						$filter['parameters']['first'] = (!empty($filter['parameters']['second'][0]) ? $filter['parameters']['second'] : array(date("Y")));
						$filter['parameters']['second'] = (!empty($filter['parameters']['third'][0]) ? $filter['parameters']['third'] : array(date("Y")));
							
						$whereFunction = '(YEAR(DATE_ADD('.($hasOffset ? 'DATE_ADD(${this}, INTERVAL '.($hourOffset*-1).' SECOND)' : '${this}').', INTERVAL '.$quarterMonth.' MONTH)) - 1)';
						break;
					
				}
				
				if (isset($whereFunction)) {
					$filter['notSqlFieldName'] = $filter['field'];
					self::updateMySqlFunctionField($whereFunction, null, $filter['field']);
				}
				
				break;
	
			case "one of":
			case "not one of":
				
				if (in_array($filter['type'], array("multienum"))) {
					$operator1 = ($filter['operator'] == "one of" ? "LIKE" : "NOT LIKE");
					$operator2 = ($filter['operator'] == "one of" ? "OR" : "AND");
				} else {
					$operator1 = ($filter['operator'] == "one of" ? "IN" : "NOT IN");
					$operator2 = "";
				}
				
				break;
	
			case "last":
				switch ($filter['parameters']['first'][0]) {
	
					case "day":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(($filter['parameters']['second'][0])*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()-(24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-($filter['parameters']['second'][0])*24*3600);
							$filter['parameters']['second'][0] = date("Y-m-d", time()-(24*3600));
						}
						break;
	
					case "week":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaSemana = date("N", time()+$hourOffset)-1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600))-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(((6-($diaSemana-($weekStart-1)))-7)*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600)));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+((6-($diaSemana-($weekStart-1)))-7)*24*3600);
						}
						break;
	
					case "month":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$monthsDate = @mktime(0,0,0,date("m")-($filter['parameters']['second'][0]),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $monthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()-($diaMes+1)*24*3600+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $monthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", time()-($diaMes+1)*24*3600);
						}
						break;
	
					case "Fquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						}
						break;
	
					case "Nquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0])+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0]));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")));
						}
						break;
	
					case "Nyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0]))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y")-1)+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0])));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")-1));
						}
						break;
	
	
					case "monday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last monday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last monday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last monday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last monday'));
						}
						break;
	
					case "tuesday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last tuesday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last tuesday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last tuesday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last tuesday'));
						}
						break;
	
					case "wednesday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last wednesday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last wednesday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last wednesday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last wednesday'));
						}
						break;
	
					case "thursday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last thursday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last thursday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last thursday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last thursday'));
						}
						break;
	
					case "friday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last friday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last friday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last friday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last friday'));
						}
						break;
	
					case "saturday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last saturday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last saturday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last saturday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last saturday'));
						}
						break;
	
					case "sunday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last sunday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last sunday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last sunday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last sunday'));
						}
						break;
	
					case "january":
						if (date("n") > 1)
							$monthNumber = date("n")-1;
						else if (date("n") == 1)
							$monthNumber = 12;
						else
							$monthNumber = 12-(1-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "february":
						if (date("n") > 2)
							$monthNumber = date("n")-2;
						else if (date("n") == 2)
							$monthNumber = 12;
						else
							$monthNumber = 12-(2-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "march":
						if (date("n") > 3)
							$monthNumber = date("n")-3;
						else if (date("n") == 3)
							$monthNumber = 12;
						else
							$monthNumber = 12-(3-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "april":
						if (date("n") > 4)
							$monthNumber = date("n")-4;
						else if (date("n") == 4)
							$monthNumber = 12;
						else
							$monthNumber = 12-(4-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "may":
						if (date("n") > 5)
							$monthNumber = date("n")-5;
						else if (date("n") == 5)
							$monthNumber = 12;
						else
							$monthNumber = 12-(5-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "june":
						if (date("n") > 6)
							$monthNumber = date("n")-6;
						else if (date("n") == 6)
							$monthNumber = 12;
						else
							$monthNumber = 12-(6-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "july":
						if (date("n") > 7)
							$monthNumber = date("n")-7;
						else if (date("n") == 7)
							$monthNumber = 12;
						else
							$monthNumber = 12-(7-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "august":
						if (date("n") > 8)
							$monthNumber = date("n")-8;
						else if (date("n") == 8)
							$monthNumber = 12;
						else
							$monthNumber = 12-(8-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "september":
						if (date("n") > 9)
							$monthNumber = date("n")-9;
						else if (date("n") == 9)
							$monthNumber = 12;
						else
							$monthNumber = 12-(9-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "october":
						if (date("n") > 10)
							$monthNumber = date("n")-10;
						else if (date("n") == 10)
							$monthNumber = 12;
						else
							$monthNumber = 12-(10-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "november":
						if (date("n") > 11)
							$monthNumber = date("n")-11;
						else if (date("n") == 11)
							$monthNumber = 12;
						else
							$monthNumber = 12-(11-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "december":
						if (date("n") > 12)
							$monthNumber = date("n")-12;
						else if (date("n") == 12)
							$monthNumber = 12;
						else
							$monthNumber = 12-(12-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
	
				}
	
				$operator1 = "BETWEEN";
				$operator2 = "AND";
				break;
	
			case "not last":
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(($filter['parameters']['second'][0])*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()-(24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-($filter['parameters']['second'][0])*24*3600);
							$filter['parameters']['second'][0] = date("Y-m-d", time()-(24*3600));
						}
						break;
	
					case "week":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaSemana = date("N", time()+$hourOffset)-1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600))-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(((6-($diaSemana-($weekStart-1)))-7)*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600)));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+((6-($diaSemana-($weekStart-1)))-7)*24*3600);
						}
						break;
	
					case "month":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$monthsDate = @mktime(0,0,0,date("m")-($filter['parameters']['second'][0]),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $monthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()-($diaMes+1)*24*3600+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $monthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", time()-($diaMes+1)*24*3600);
						}
						break;
	
					case "Fquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						}
						break;
	
					case "Nquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0])+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0]));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")));
						}
						break;
	
					case "Nyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0]))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y")-1)+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0])));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")-1));
						}
						break;
	
	
					case "monday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last monday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last monday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last monday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last monday'));
						}
						break;
	
					case "tuesday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last tuesday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last tuesday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last tuesday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last tuesday'));
						}
						break;
	
					case "wednesday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last wednesday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last wednesday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last wednesday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last wednesday'));
						}
						break;
	
					case "thursday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last thursday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last thursday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last thursday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last thursday'));
						}
						break;
	
					case "friday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last friday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last friday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last friday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last friday'));
						}
						break;
	
					case "saturday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last saturday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last saturday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last saturday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last saturday'));
						}
						break;
	
					case "sunday":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date('Y-m-d H:00:00', strtotime('last sunday')+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", strtotime('last sunday')+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date('Y-m-d', strtotime('last sunday'));
							$filter['parameters']['second'][0] = date("Y-m-d", strtotime('last sunday'));
						}
						break;
	
					case "january":
						if (date("n") > 1)
							$monthNumber = date("n")-1;
						else if (date("n") == 1)
							$monthNumber = 12;
						else
							$monthNumber = 12-(1-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "february":
						if (date("n") > 2)
							$monthNumber = date("n")-2;
						else if (date("n") == 2)
							$monthNumber = 12;
						else
							$monthNumber = 12-(2-(date("n")));
		
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "march":
						if (date("n") > 3)
							$monthNumber = date("n")-3;
						else if (date("n") == 3)
							$monthNumber = 12;
						else
							$monthNumber = 12-(3-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "april":
						if (date("n") > 4)
							$monthNumber = date("n")-4;
						else if (date("n") == 4)
							$monthNumber = 12;
						else
							$monthNumber = 12-(4-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "may":
						if (date("n") > 5)
							$monthNumber = date("n")-5;
						else if (date("n") == 5)
							$monthNumber = 12;
						else
							$monthNumber = 12-(5-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "june":
						if (date("n") > 6)
							$monthNumber = date("n")-6;
						else if (date("n") == 6)
							$monthNumber = 12;
						else
							$monthNumber = 12-(6-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "july":
						if (date("n") > 7)
							$monthNumber = date("n")-7;
						else if (date("n") == 7)
							$monthNumber = 12;
						else
							$monthNumber = 12-(7-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "august":
						if (date("n") > 8)
							$monthNumber = date("n")-8;
						else if (date("n") == 8)
							$monthNumber = 12;
						else
							$monthNumber = 12-(8-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "september":
						if (date("n") > 9)
							$monthNumber = date("n")-9;
						else if (date("n") == 9)
							$monthNumber = 12;
						else
							$monthNumber = 12-(9-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "october":
						if (date("n") > 10)
							$monthNumber = date("n")-10;
						else if (date("n") == 10)
							$monthNumber = 12;
						else
							$monthNumber = 12-(10-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "november":
						if (date("n") > 11)
							$monthNumber = date("n")-11;
						else if (date("n") == 11)
							$monthNumber = 12;
						else
							$monthNumber = 12-(11-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
					case "december":
						if (date("n") > 12)
							$monthNumber = date("n")-12;
						else if (date("n") == 12)
							$monthNumber = 12;
						else
							$monthNumber = 12-(12-(date("n")));
	
						$fistMonthsDate = @mktime(0,0,0,date("m")-($monthNumber),1,date("Y"));
						$lastMonthsDate = @mktime(0,0,0,date("m")-($monthNumber-1),1,date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $fistMonthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", $lastMonthsDate+$hourOffset-3600);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $fistMonthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", $lastMonthsDate-(24*3600));
						}
						break;
	
	
				}
	
				$operator1 = "NOT BETWEEN";
				$operator2 = "AND";
				break;
	
			case "this":
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d");
							$filter['parameters']['second'][0] = date("Y-m-d");
						}
	
						break;
	
					case "week":
						$diaSemana = date("N", time()+$hourOffset)-1;
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(($diaSemana-($weekStart-1))*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((6-($diaSemana-($weekStart-1)))*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()-(($diaSemana-($weekStart-1))*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+((6-($diaSemana-($weekStart-1)))*24*3600));
						}
						break;
	
					case "month":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numDiasMes = date("t", time()+$hourOffset);
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-($diaMes*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(($numDiasMes-$diaMes-1)*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()-($diaMes*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(($numDiasMes-$diaMes-1)*24*3600));
						}
						break;
	
					case "Fquarter":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Nquarter":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						$numMes = date("n", time()+$hourOffset);
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1)+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1));
						}
						break;
	
					case "Nyear":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y"))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")));
						}
						break;
	
				}
	
				$operator1 = "BETWEEN";
				$operator2 = "AND";
				break;
	
			case "not this":
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d");
							$filter['parameters']['second'][0] = date("Y-m-d");
						}
	
						break;
	
					case "week":
						$diaSemana = date("N", time()+$hourOffset)-1;
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(($diaSemana-($weekStart-1))*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((6-($diaSemana-($weekStart-1)))*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()-(($diaSemana-($weekStart-1))*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+((6-($diaSemana-($weekStart-1)))*24*3600));
						}
						break;
	
					case "month":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numDiasMes = date("t", time()+$hourOffset);
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-($diaMes*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(($numDiasMes-$diaMes-1)*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()-($diaMes*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(($numDiasMes-$diaMes-1)*24*3600));
						}
						break;
	
					case "Fquarter":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Nquarter":
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						$numMes = date("n", time()+$hourOffset);
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1)+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1));
						}
						break;
	
					case "Nyear":
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y"))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")));
						}
						break;
	
				}
	
				$operator1 = "NOT BETWEEN";
				$operator2 = "AND";
				break;
	
	
			case "these":
					
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(($filter['parameters']['second'][0])*24*3600)-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-($filter['parameters']['second'][0])*24*3600);
							$filter['parameters']['second'][0] = date("Y-m-d");
						}
						break;
	
					case "week":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						$diaSemana = date("N", time()+$hourOffset)-1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600))-(date("G")*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+((6-($diaSemana-($weekStart-1)))*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", time()-(((($diaSemana-($weekStart-1))+7)*24*3600) + (($filter['parameters']['second'][0]-1)*7*24*3600)));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+((6-($diaSemana-($weekStart-1)))*24*3600));
						}
						break;
	
					case "month":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						$diaMes = date("j", time()+$hourOffset)-1;
						$monthsDate = @mktime(0,0,0,date("m")-($filter['parameters']['second'][0]),1,date("Y"));
						$numDiasMes = date("t", time()+$hourOffset);
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", $monthsDate+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(($numDiasMes-$diaMes-1)*24*3600)+((24*3600)-((date("G")+1)*3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", $monthsDate);
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(($numDiasMes-$diaMes-1)*24*3600));
						}
						break;
	
					case "Fquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
	
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Nquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)-(3+(3*($filter['parameters']['second'][0]-1))),date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						$numMes = date("n", time()+$hourOffset);
	
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0])+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1)+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")-$filter['parameters']['second'][0]));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+1));
						}
						break;
	
					case "Nyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						$filter['parameters']['second'][0] = $filter['parameters']['second'][0] -1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0]))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y"))+((24*3600)-(3600))+$hourOffset);
						} else if ($filter['type'] == "date"){
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")-($filter['parameters']['second'][0])));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")));
						}
						break;
	
				}
	
				$operator1 = "BETWEEN";
				$operator2 = "AND";
				break;
	
			case "next":
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
							
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()+(1*24*3600)-((date("G"))*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(($filter['parameters']['second'][0]+1)*24*3600)-((date("G")+1)*3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()+(1*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(($filter['parameters']['second'][0])*24*3600));
						}
						break;
	
					case "week":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaSemana = date("N", time()+$hourOffset)-1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()+((7-($diaSemana-($weekStart-1)))*24*3600)-((date("G"))*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(((6-($diaSemana-($weekStart-1)))+($filter['parameters']['second'][0]*7)+1)*24*3600)-((date("G")+1)*3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()+((7-($diaSemana-($weekStart-1)))*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(((6-($diaSemana-($weekStart-1)))+($filter['parameters']['second'][0]*7))*24*3600));
						}
						break;
	
					case "month":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$mes = @mktime( 0, 0, 0, date("m")+$filter['parameters']['second'][0], 1, date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")+1,1,date("Y"))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+$filter['parameters']['second'][0],date("t", $mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+1,1,date("Y")));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+$filter['parameters']['second'][0],date("t", $mes),date("Y")));
						}
						break;
	
					case "Fquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y")));
						}
	
						break;
	
					case "Nquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$numMes = date("n", time()+$hourOffset);
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y")+1)+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+$filter['parameters']['second'][0]+1)+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")+1));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+$filter['parameters']['second'][0]+1));
						}
						break;
	
					case "Nyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y")+1)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y")+$filter['parameters']['second'][0])+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")+1));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")+$filter['parameters']['second'][0]));
						}
						break;
	
				}
	
	
				$operator1 = "BETWEEN";
				$operator2 = "AND";
				break;
	
			case "not next":
				switch ($filter['parameters']['first'][0]){
	
					case "day":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
							
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()+(1*24*3600)-((date("G"))*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(($filter['parameters']['second'][0]+1)*24*3600)-((date("G")+1)*3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()+(1*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(($filter['parameters']['second'][0])*24*3600));
						}
						break;
	
					case "week":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaSemana = date("N", time()+$hourOffset)-1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", time()+((7-($diaSemana-($weekStart-1)))*24*3600)-((date("G"))*3600)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", time()+(((6-($diaSemana-($weekStart-1)))+($filter['parameters']['second'][0]*7)+1)*24*3600)-((date("G")+1)*3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", time()+((7-($diaSemana-($weekStart-1)))*24*3600));
							$filter['parameters']['second'][0] = date("Y-m-d", time()+(((6-($diaSemana-($weekStart-1)))+($filter['parameters']['second'][0]*7))*24*3600));
						}
						break;
	
					case "month":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$mes = @mktime( 0, 0, 0, date("m")+$filter['parameters']['second'][0], 1, date("Y"));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")+1,1,date("Y"))+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+$filter['parameters']['second'][0],date("t", $mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+1,1,date("Y")));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+$filter['parameters']['second'][0],date("t", $mes),date("Y")));
						}
						break;
	
					case "Fquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y")));
						}
	
						break;
	
					case "Nquarter":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$diaMes = date("j", time()+$hourOffset)-1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y"))+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y"))+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,date("m")-($monthInQuarter-1)+3,date("d")-$diaMes,date("Y")));
							$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(3-$monthInQuarter)+(3*$filter['parameters']['second'][0]),date("t",$mes),date("Y")));
						}
						break;
	
					case "Fyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
						$numMes = date("n", time()+$hourOffset);
	
	
						$year_month = $quarterMonth;
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,$year_month,1,date("Y")+1)+$hourOffset);
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+$filter['parameters']['second'][0]+1)+(24*3600)-(3600)+$hourOffset);
						}else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,$year_month,1,date("Y")+1));
							$mes = @mktime( 0, 0, 0, date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)), 1, date("Y"));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,date("m")+(((3-$monthInQuarter)-3) - (($thisQuarter-1)*3)),date("t",$mes),date("Y")+$filter['parameters']['second'][0]+1));
						}
						break;
	
					case "Nyear":
						if ($filter['parameters']['second'][0] == "")
							$filter['parameters']['second'][0] = 1;
	
						if (in_array($filter['type'], array("datetime", "datetimecombo", "timestamp"))) {
							$filter['parameters']['first'][0] = date("Y-m-d H:00:00", @mktime(0,0,0,1,1,date("Y")+1)+$hourOffset);
							$filter['parameters']['second'][0] = date("Y-m-d H:59:59", @mktime(0,0,0,12,31,date("Y")+$filter['parameters']['second'][0])+(24*3600)-(3600)+$hourOffset);
						} else if ($filter['type'] == "date") {
							$filter['parameters']['first'][0] = date("Y-m-d", @mktime(0,0,0,1,1,date("Y")+1));
							$filter['parameters']['second'][0] = date("Y-m-d", @mktime(0,0,0,12,31,date("Y")+$filter['parameters']['second'][0]));
						}
						break;
	
				}
	
	
				$operator1 = "NOT BETWEEN";
				$operator2 = "AND";
				break;
	
			//EN CASO DE QUE HAYA ALGUN REPORT VIEJO, MANTENEMOS LAS OPCIONES DE FIXED_DATE
			case "fixed date":
	
				switch ($filter['parameters']['first'][0]){
	
					case "today":
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00");
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59");
						break;
	
					case "yesterday":
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-1*24*3600);
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time()-1*24*3600);
						break;
	
					case "last n days":
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-(($filter['parameters']['second'][0])*24*3600));
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time());
						break;
	
					case "this week":
						$diaSemana = date("N")-1;
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-($diaSemana-($weekStart-1))*24*3600);
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time()+(6-($diaSemana-($weekStart-1)))*24*3600);
						break;
	
					case "last week":
						$diaSemana = date("N")-1;
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-(($diaSemana-($weekStart-1))+7)*24*3600);
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time()+((6-($diaSemana-($weekStart-1)))-7)*24*3600);
						break;
	
					case "this month":
						$diaMes = date("j")-1;
						$numDiasMes = date("t");
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-$diaMes*24*3600);
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time()+($numDiasMes-$diaMes-1)*24*3600);
						break;
	
					case "last month":
						$diaMes = date("j")-1;
						$numDiasMes = date("d", time()-($diaMes+1)*24*3600);
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", time()-($diaMes+$numDiasMes)*24*3600);
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", time()-($diaMes+1)*24*3600);
						break;
	
					case "this fiscal quarter":
						$diaMes = date("j")-1;
						$numMes = date("n");
	
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
						$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						break;
	
					case "last fiscal quarter":
						$diaMes = date("j")-1;
						$numMes = date("n");
						$quarterMonth = (($numMes-($quarterMonth-1)) <= 0) ? $numMes+(12-($quarterMonth-1)) : $numMes-($quarterMonth-1);
						$thisQuarter = ceil($quarterMonth/3);
						$monthInQuarter = $quarterMonth-(3*($thisQuarter-1));
	
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-3,date("d")-$diaMes,date("Y")));
						$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						break;
	
					case "this natural quarter":
						$diaMes = date("j")-1;
						$numMes = date("n");
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1),date("d")-$diaMes,date("Y")));
						$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter), 1, date("Y"));
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter),date("t",$mes),date("Y")));
						break;
	
					case "last natural quarter":
						$diaMes = date("j")-1;
						$numMes = date("n");
						$thisQuarter = ceil($numMes/3);
						$monthInQuarter = $numMes-(3*($thisQuarter-1));
	
						$filter['parameters']['first'][0] = date("Y-m-d 00:00:00", @mktime(0,0,0,date("m")-($monthInQuarter-1)-3,date("d")-$diaMes,date("Y")));
						$mes = @mktime( 0, 0, 0, date("m")+(3-$monthInQuarter)-3, 1, date("Y"));
						$filter['parameters']['second'][0] = date("Y-m-d 23:59:59", @mktime(0,0,0,date("m")+(3-$monthInQuarter)-3,date("t",$mes),date("Y")));
						break;
	
				}
	
				$operator1 = "BETWEEN";
				$operator2 = "AND";
	
				break;
				//EN CASO DE QUE HAYA ALGUN REPORT VIEJO, MANTENEMOS LAS OPCIONES DE FIXED_DATE
	
		}
		
	}
	
	static private function populateFilteringValues($filter, $operator1, $operator2, & $filtersByRef) {
			
		$numericTypes = array("tinyint(1)", "tinyint", "smallint", "mediumint", "int", "bigint", "decimal", "double", "real", "currency");
		$numericCast = false;
		$applySecondOperator = true;
		$filterStaticVar = '$[this]';
			
		$filterLogicalOperators = $filter['logicalOperators'];
		$logicalNegate = (empty($filterLogicalOperators['negate'])) ? false : true;
		$openingParenthesis = ((empty($filterLogicalOperators['parenthesis'])) || ($filterLogicalOperators['parenthesis'] < 0)) ? 0 : $filterLogicalOperators['parenthesis'];
		$closingParenthesis = ((empty($filterLogicalOperators['parenthesis'])) || ($filterLogicalOperators['parenthesis'] > 0)) ? 0 : $filterLogicalOperators['parenthesis']*-1;
		$logicalOperator = (empty($filterLogicalOperators['operator'])) ? '' : $filterLogicalOperators['operator'];
			
		$openParenthesisWhere = '';	
		for ($oParenthesis = 0; $oParenthesis < $openingParenthesis; $oParenthesis++) {
			$openParenthesisWhere .= '(';
		}
			
		$currentSqlWhere = '';
		
		if (in_array($operator1, array("LIKE", "NOT LIKE"))) {
			if (in_array($filter['type'], $numericTypes)) {
				$filterStaticVar = 'CAST('.$filterStaticVar.' as CHAR)';
				$numericCast = true;
			}
		}

		//Para los campos enum y que tenga como primer operador one of o not one of
		if (((in_array($filter['type'], array("enum", "radioenum"))) && (in_array($filter['operator'], array("one of", "not one of")))) || (in_array($operator1, array("IN", "NOT IN")))) {
	
			$enum_fields = $filter['parameters']['first'];
			$currentSqlWhere .= "(";
	
			$currentSqlWhere .= $filterStaticVar." ".$operator1." ('".implode("', '", $enum_fields)."') ";
	
			if ($enum_fields[0] == "") {
	
				if ($filter['operator'] == "one of")
					$currentSqlWhere .= "OR ".$filterStaticVar." IS NULL";
	
			} else {
	
				if ($filter['operator'] == "not one of")
					$currentSqlWhere .= "OR ".$filterStaticVar." IS NULL";
	
			}
	
			$currentSqlWhere .= ") ";
	
		} else if ($filter['type'] == "multienum") {
			
			$enum_fields = $filter['parameters']['first'];
			
			if (in_array($filter['operator'], array("equals", "not equals"))) {
				
				$firstParameter = '^'.implode('^,^', $enum_fields).'^';
				$currentSqlWhere .= $filterStaticVar." ".$operator1." '^".implode('^,^', $enum_fields)."^'";
				
			} else if (in_array($filter['operator'], array("one of", "not one of"))) {
				
				$applySecondOperator = false;
			
				$currentSqlWhere .= " (";
				foreach ($enum_fields as $enum_field) {	
					$currentSqlWhere .= " (".$filterStaticVar." ".$operator1." '%^".$enum_field."^%'".") ".$operator2;
				}
				
				$currentSqlWhere = substr($currentSqlWhere, 0, -strlen($operator2));
				$currentSqlWhere .= ") ";
				
			}
			
		} else if (in_array($filter['operator'], array("inherit"))) {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'filterReference' => $filter['parameters']['first'][0],
				'filterStaticVar' => $filterStaticVar
			);
			$filterInheritVariable = asol_ReportsUtils::managePremiumFeature("reportFiltersInherit", "reportFunctions.php", "getFilterInheritVariable", $extraParams);
			$currentSqlWhere .= ($filterInheritVariable !== false) ? $filterInheritVariable : '';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

		} else {
	
			if (((in_array($filter['parameters']['first'][0], array("", "%%"))) && (in_array($operator1, array("=", "!=", "LIKE", "NOT LIKE")))) || ((!in_array($filter['parameters']['first'][0], array("", "%%"))) && (in_array($operator1, array("!=", "NOT LIKE"))))) {
				$currentSqlWhere .= "(";
			}
	
			if (in_array($filter['type'], $numericTypes)) {
				if ($filter['parameters']['first'][0] != "") {
					if (in_array($operator1, array("LIKE", "NOT LIKE"))) {
						$currentSqlWhere .= $filterStaticVar." ".$operator1." '".$filter['parameters']['first'][0]."' ";
					} else {
						$currentSqlWhere .= $filterStaticVar." ".$operator1." ".$filter['parameters']['first'][0]." ";
					}
				}
			} else {
				$currentSqlWhere .= $filterStaticVar." ".$operator1." '".$filter['parameters']['first'][0]."' ";
			}
				
			if (in_array($filter['parameters']['first'][0], array("", "%%"))) {
	
				if (in_array($operator1, array("=", "LIKE"))) {
	
					if ((!in_array($filter['type'], $numericTypes)) || $numericCast) {
						$currentSqlWhere .= "OR ";
					}
					$currentSqlWhere .= $filterStaticVar." IS NULL) ";
	
				} else if (in_array($operator1, array("!=", "NOT LIKE"))) {
	
					if ((!in_array($filter['type'], $numericTypes)) || $numericCast) {
						$currentSqlWhere .= "AND ";
					}
					$currentSqlWhere .= $filterStaticVar." IS NOT NULL) ";
	
				}
	
			} else {
	
				if (in_array($operator1, array("!=", "NOT LIKE"))) {
					$currentSqlWhere .= "OR ".$filterStaticVar." IS NULL) ";
				}
	
			}
	
		}
	
	
		if ($applySecondOperator && ($operator2 != "")) {
			$currentSqlWhere .= $operator2." '".$filter['parameters']['second'][0]."'";
		}
	
		$closeParenthesisWhere = '';
		for ($cParenthesis = 0; $cParenthesis < $closingParenthesis; $cParenthesis++) {
			$closeParenthesisWhere .= ')';
		}

		
		$filterRef = $filter['filterReference'];
		$setWithRef = ((!empty($filterRef)) && (!isset($filtersByRef[$filterRef])));
		$usedMod = (isset($filter['notSqlFieldName']) ? str_replace($filter['notSqlFieldName'], '$[this]', $filter['field']) : null);
		
		if ($setWithRef) {
			$filtersByRef[$filterRef] = array(
				'field' => $filter['field'],
				'index' => $filter['index'],
				'userOptions' => $filter['userOptions'],
				'isWhereFilter' => (isset($filter['isWhereFilter']) ? $filter['isWhereFilter'] : true),
				'mod' => $usedMod,
				'sql' => $currentSqlWhere,
				'negate' => $logicalNegate,
				'logical' => ($logicalOperator == 'OR' ? 'OR' : 'AND'),
				'parenthesis' => array(
					'open' => $openParenthesisWhere,
					'close' => $closeParenthesisWhere
				),
			);
		} else {
			$filtersByRef[] = array(
				'field' => $filter['field'],
				'index' => $filter['index'],
				'userOptions' => $filter['userOptions'],
				'isWhereFilter' => (isset($filter['isWhereFilter']) ? $filter['isWhereFilter'] : true),
				'mod' => $usedMod,
				'sql' => $currentSqlWhere,
				'negate' => $logicalNegate,
				'logical' => ($logicalOperator == 'OR' ? 'OR' : 'AND'),
				'parenthesis' => array(
					'open' => $openParenthesisWhere,
					'close' => $closeParenthesisWhere
				),
			);
		}
		
	}

	static public function replaceFiltersWithNamedFieldAlias($fieldValues, & $filtersByRef, $isGroupedReport) {
		
		$filterStaticVar = '$[this]';
				
		foreach ($filtersByRef as & $filter) {
			
			$filterName = $filter['field']; //FilterName
			$filterUserOptions = $filter['userOptions']; //FilterUserOptions
			$isWhereFilter = $filter['isWhereFilter']; //isWhereFilter
				
			foreach ($fieldValues['tables'][0]['data'] as $currentValues) {

				if ($filter['index'] == $currentValues['index']) {

					if ($currentValues['function'] != '0') {

						$filterName = ($isWhereFilter && $isGroupedReport ? $currentValues['originalFieldName'] : $currentValues['field']);
						if (isset($filter['mod'])) {
							$filterName = str_replace($filterStaticVar, $filterName, $filter['mod']);
						}
							
					} else if (!empty($currentValues['sql'])) {
						
						$hasAggregateFunction = (preg_match('/.*(COUNT|MIN|MAX|SUM|AVG)\(.*\).*/', $currentValues['field']) === 1);
						$filterName = ($isWhereFilter && $isGroupedReport && $hasAggregateFunction ? $currentValues['originalFieldName'] : $currentValues['field']);
						if (isset($filter['mod'])) {
							$filterName = str_replace($filterStaticVar, $filterName, $filter['mod']);
						}
						
					}
					
					break;
	
				}
		
			}
			
			$filter['sql'] = str_replace($filterStaticVar, $filterName, $filter['sql']);
			
		}
		
	}
	
	static public function getSqlFilteringQuery($filtersByRef, $hasDeletedUsage, $reportTable, $isNonCrmDatabase, $aliasSuffix = '') {

		$hasHavingFilters = false;
		$sqlHaving = (count($filtersByRef) > 0) ? " HAVING " : "";
		
		if (!$isNonCrmDatabase)
			$sqlWhere = ($hasDeletedUsage ? " WHERE " : " WHERE ".$reportTable.$aliasSuffix.".deleted = 0 AND ");
		else
			$sqlWhere = (count($filtersByRef) > 0) ? " WHERE " : "";
	
	
		if (!empty($filtersByRef)) {
			
			$mainSqlWhere = '';
			$mainSqlHaving = '';
			
			foreach ($filtersByRef as $currentFilter) {

				if ($currentFilter['isWhereFilter']) {
					
					$mainSqlWhere .= ($currentFilter['negate'] ? 'NOT ' : '');
					$mainSqlWhere .= $currentFilter['parenthesis']['open'];
					$mainSqlWhere .= $currentFilter['sql'];
					$mainSqlWhere .= $currentFilter['parenthesis']['close'];
					$mainSqlWhere .= ($currentFilter['logical'] == 'OR' ? ' ' : '').' '.$currentFilter['logical'].' ';
					
				} else {
					
					$hasHavingFilters = ($hasHavingFilters || true);
					
					$mainSqlHaving .= ($currentFilter['negate'] ? 'NOT ' : '');
					$mainSqlHaving .= $currentFilter['parenthesis']['open'];
					$mainSqlHaving .= $currentFilter['sql'];
					$mainSqlHaving .= $currentFilter['parenthesis']['close'];
					$mainSqlHaving .= ($currentFilter['logical'] == 'OR' ? ' ' : '').' '.$currentFilter['logical'].' ';
					
				}
				
			}
			
			if (!empty($mainSqlWhere)) {
				$sqlWhere .= "( ".(substr($mainSqlWhere, 0, -4))." )";
			} else {
				$sqlWhere = substr($sqlWhere, 0, -4);
			}
			
			if (!empty($mainSqlHaving)) {
				$sqlHaving .= "( ".(substr($mainSqlHaving, 0, -4))." )";
			} else {
				$sqlHaving = "";
			}
			
		} else {
			
			$sqlWhere = substr($sqlWhere, 0, -4);
			$sqlHaving = substr($sqlHaving, 0, -4);
			
		}
		
		return array(
			'hasHavingFilters' => $hasHavingFilters,
			'querys' => array(
				'Where' => $sqlWhere,
				'Having' => $sqlHaving
			)
		);
		
	}
	
	static public function modifySqlWhereForAsolDomainsQuery(& $sqlWhere, $domainReportTable, $current_user, $schedulerCall, $asolReportDomainId, $domainField = null, $aliasSuffix = '') {

		global $db;

		if ((!empty($asolReportDomainId)) || ($schedulerCall)) {
	
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
			$domainsBean = BeanFactory::getBean('asol_Domains', $asolReportDomainId);
	
			if ($domainsBean->asol_domain_enabled) {
	
				if ($domainField !== null) {
	
					if ($domainField != "") {
							
						$externalIdUsage = (isset($domainField["externalIdUsage"]) && $domainField["externalIdUsage"]);
						$domainFieldName = $domainField["fieldName"];
						$domainIsNumeric = ($externalIdUsage ? false : $domainField["isNumeric"]);
						$domainShowUpperLevels = (isset($domainField["showUpperLevels"]) ? $domainField["showUpperLevels"] : false);
						
						$asolReportDomainValue = ($externalIdUsage ? $domainsBean->external_id : $asolReportDomainId);
						
						if (isset($domainField["domainRelation"])) {
							$domainReportTable = $domainField["domainRelation"]["relatedTable"];
						}

						$domainFieldChar = ($domainIsNumeric) ? "" : "'";
						$sqlWhere .= (empty($sqlWhere) ? " WHERE " : " AND ")." ( (".$domainReportTable.$aliasSuffix.".".$domainFieldName."=".$domainFieldChar.$asolReportDomainValue.$domainFieldChar.") ";
	
						//***asol_child_domains***//
						$childDomainsIds = asol_manageDomains::getChildDomainsArray($asolReportDomainId);
						$childDomainsStr = array();
						foreach ($childDomainsIds as $key=>$domainId) {
							if (!$domainId['enabled']) {
								array_splice($childDomainsIds, $key, 1);
							} else {
								$childDomainsStr[] = ($externalIdUsage ? $domainId['external_id'] : $domainId['id']);
							}
						}
						$sqlWhere .= (count($childDomainsIds) > 0) ? "OR (".$domainReportTable.$aliasSuffix.".".$domainFieldName." IN (".$domainFieldChar.implode($domainFieldChar.", ".$domainFieldChar , $childDomainsStr).$domainFieldChar.")) " : " " ;
						//***asol_child_domains***//
	
						//***asol_parent_domains***//
						if ($domainShowUpperLevels) {
							$parentDomainIds = asol_manageDomains::getParentDomainsIds($asolReportDomainId);
							if (!empty($parentDomainIds)) {
								$sqlWhere .= "OR (".$domainReportTable.$aliasSuffix.".".$domainFieldName." IN (".$domainFieldChar.implode($domainFieldChar.",".$domainFieldChar , $parentDomainIds).$domainFieldChar.")) ";
							}
						}
						//***asol_parent_domains***//
						
						$sqlWhere .= ") ";
						
					}
						
				} else {
						
					$sqlWhere .= " AND ( (".$domainReportTable.$aliasSuffix.".asol_domain_id='".$asolReportDomainId."') ";
	
					if (($current_user->asol_only_my_domain == 0) || ($schedulerCall)) {
	
						//***asol_domain_child_share_depth***//
						$sqlWhere .= asol_manageDomains::getChildShareDepthQuery($domainReportTable.$aliasSuffix.'.', $asolReportDomainId);
						//***asol_domain_child_share_depth***//
	
						//***asol_multi_create_domain***//
						if ($domainReportTable != 'users')
							$sqlWhere .= asol_manageDomains::getMultiCreateQuery($domainReportTable.$aliasSuffix.'.', $asolReportDomainId);
						//***asol_multi_create_domain***//
	
						//***asol_publish_to_all***//
						$sqlWhere .= asol_manageDomains::getPublishToAllQuery($domainReportTable.$aliasSuffix.'.', $asolReportDomainId);
						//***asol_publish_to_all***//
							
						//***asol_child_domains***//
						$sqlWhere .= asol_manageDomains::getChildHierarchyQuery($domainReportTable.$aliasSuffix.'.', $asolReportDomainId);
						//***asol_child_domains***//
	
					} else {
	
						$sqlWhere .= ") ";
	
					}
						
				}
	
			} else {
	
				$sqlWhere .= " AND (1!=1) ";
	
			}
	
		}
	
	}
	
	static public function modifySqlWhereForSecurityGroups(& $sqlWhere, $securityReportModule, $securityReportTable, $current_user) {
		
		/* BEGIN - SECURITY GROUPS */
		global $sugar_config;
		
		$bean = BeanFactory::getBean($securityReportModule);
		
		if ($securityReportModule == 'Users' && !is_admin($current_user) && isset($sugar_config['securitysuite_filter_user_list']) && $sugar_config['securitysuite_filter_user_list'] == true) {
			
			require_once('modules/SecurityGroups/SecurityGroup.php');

			$group_where = SecurityGroup::getGroupUsersWhere($current_user->id);
			if (empty($sqlWhere)) {
				$sqlWhere = " (".$group_where.") ";
			} else {
				$sqlWhere .= " AND (".$group_where.") ";
			}
			
		} else if ($bean->bean_implements('ACL') && ACLController::requireSecurityGroup($securityReportModule, 'list')) {
			
			require_once('modules/SecurityGroups/SecurityGroup.php');
				
			$owner_where = $bean->getOwnerWhere($current_user->id);
			$group_where = SecurityGroup::getGroupWhere($securityReportTable, $securityReportModule, $current_user->id);
				
			if (!empty($owner_where)) {
				if (empty($sqlWhere)) {
					$sqlWhere = " (".  $owner_where." or ".$group_where.") ";
				} else {
					$sqlWhere .= " AND (".  $owner_where." or ".$group_where.") ";
				}
			} else {
				$sqlWhere .= ' AND '.  $group_where;
			}
		
		}
		/* END - SECURITY GROUPS */
		
	}
	
	static public function getSqlGroupByQuery($fieldValues, $reportTable, & $filtersByRef) {

		$sqlGroup = "";
		$sqlChartGroup = "";
		$hasDetail = false;
		$details = array();
		$hasGrouped = false;
		$groups = array();
		$hasFunctionField = false;
	
		foreach ($fieldValues['tables'][0]['data'] as $i=>$currentValues) {
	
			//*******************************//
			//***Search for Grouped Fields***//
			//*******************************//
			if (in_array($currentValues['grouping'], array("Grouped", "Minute Grouped", "Quarter Hour Grouped", "Hour Grouped", "Day Grouped", "DoW Grouped", "WoY Grouped", "Month Grouped", "Natural Quarter Grouped", "Fiscal Quarter Grouped", "Natural Year Grouped", "Fiscal Year Grouped"))) {
	
				$hasGrouped = true;
				
				$groups[] = array(
					'grouping' => $currentValues['grouping'],
					'order' => $currentValues['groupingOrder'],
					'field' => $currentValues['field'],
					'alias' => $currentValues['alias'],
					'display' => $currentValues['visible'],
					'type' => $currentValues['type'],
					'format' => $currentValues['format'],
					'enumLabels' =>	$currentValues['enumLabels'],
				);
	
			}
	
			//********************************//
			//***Search for Detailed Fields***//
			//********************************//
			if (in_array($currentValues['grouping'], array("Detail", "Minute Detail", "Quarter Hour Detail", "Hour Detail", "Day Detail", "DoW Detail", "WoY Detail", "Month Detail", "Natural Quarter Detail", "Fiscal Quarter Detail", "Natural Year Detail", "Fiscal Year Detail"))) {
	
				$hasDetail = true;
				
				$details[] = array(
					'order' => $currentValues['sortDirection'],
					'field' => $currentValues['field'],
					'alias' => $currentValues['alias'],
					'grouping' => $currentValues['grouping'],
					'type' => $currentValues['type'],
					'format' => $currentValues['format'],
					'function' => $currentValues['function'],
					'sql' => $currentValues['sql'],
					'enumLabels' =>	$currentValues['enumLabels'],
				);

			}
			
			//********************************//
			//***Search for Function Fields***//
			//********************************//
			if ($currentValues['function'] != '0') {
			
				$hasFunctionField = true;
			
			}
	
		}
	
		$massiveData = ($hasDetail && !$hasGrouped && !$hasFunctionField);
		
		if (!$massiveData) {
	
			sort($details);
	
			if ($details[0]['grouping'] == 'Detail') {
				$sqlChartGroup .= " GROUP BY ".$details[0]['field']." ";
			}
	
		}
	
		
		//*******************************//
		//******Build GroupBy Query******//
		//*******************************//
		if ($hasGrouped) {
	
			sort($groups);
			$sqlGroup .= " GROUP BY ";
	
			for ($k=0; $k<count($groups); $k++){

				$sqlGroup .= $groups[$k]['field']." ,";
	
			}
	
		}
	
		$sqlGroup = substr($sqlGroup, 0, -1);
	
		$returnedArray = array (
			"groups" => $groups,
			"details" => $details,
			"hasDetail" => $hasDetail,
			"hasGrouped" => $hasGrouped,
			"hasFunctionField" => $hasFunctionField,
			"massiveData" => $massiveData,
			"querys" => array (
				"Group" => $sqlGroup,
				"ChartGroup" => $sqlChartGroup,
			),
		);
	
		return $returnedArray;
	
	
	}
	
	static public function avoidOrderingByNotIndexedField($reportTable, $fieldName, $alternativeDb) {

		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);

		$fieldExploded = explode('.', $fieldName);
		$tableExploded = explode('::', $fieldExploded[0]);
		
		$usedOrderTable = (count($fieldExploded) > 1 ? end($tableExploded) : $reportTable);
		$usedOrderField = (count($fieldExploded) > 1 ? $fieldExploded[1] : $fieldName);
					
		return (!isset($_SESSION['asolReportsTableIndexes'][$dbKey][$usedOrderTable][$usedOrderField]));
		
	}
	
	static public function getSqlOrderByQuery($fieldValues, $reportTable, $alternativeDb, $isGroupedReport, $maxAllowedNotIndexedOrderBy, $sortField = "", $sortDirection = "", $sortIndex = "") {

		$sqlOrder = "";
		$orders = array();
		$hasDeletedNotIndexedOrderBy = false;

		foreach ($fieldValues['tables'][0]['data'] as $currentValues) {

			$orderByNotGroupedFunction = (!$isGroupedReport && ($currentValues['function'] !== "0"));
			
			if (($currentValues['sortDirection'] !== "0") && (!$orderByNotGroupedFunction)) {

				if ($maxAllowedNotIndexedOrderBy) {
				
					if (self::avoidOrderingByNotIndexedField($reportTable, $currentValues['notModifiedFieldName'], $alternativeDb)) {
						$hasDeletedNotIndexedOrderBy = (true || $hasDeletedNotIndexedOrderBy);
						continue;
					}

				}
				
				$orders[] = array(
					'order' => $currentValues['sortOrder'],
					'field' => $currentValues['field'],
					'dir' => $currentValues['sortDirection']
				);
	
			}
	
		}
	
	
		if (count($orders) > 0) {
	
			sort($orders);
			$sqlOrder .= " ORDER BY ";
	
			for ($k=0; $k<count($orders); $k++){
	
				$sqlOrder .= $orders[$k]['field']." ".$orders[$k]['dir']." ,";
	
			}
	
		} else {
			
			$sqlOrder .= " ORDER BY NULL ";
			
		}
	
		$sqlOrder = substr($sqlOrder, 0, -1);
	
	
		//Reordenamos el resultset en funcion de la cabecera pinchada en la pagina display
		if ($sortField !== "") {

			$sqlOrder = null;
			$sortDirection = ($sortDirection == "") ? "ASC" : $sortDirection;
			
			foreach ($fieldValues['tables'][0]['data'] as $currentValues) {

				if (($currentValues['originalFieldName'] == $sortField) && ($currentValues['index'] == $sortIndex)) {
					$sortType = $currentValues['type'];
					$sqlOrder = " ORDER BY ".$currentValues['field']." ".$sortDirection." ";
					break;
				}
				
			}
			
			$sortDirection = ($sortDirection == "ASC") ? "DESC" : "ASC";
		
		}
	
	
		$returnedArray = array (
			"hasDeletedNotIndexedOrderBy" => $hasDeletedNotIndexedOrderBy,
			"sortDirection" => $sortDirection,
			"sortType" => $sortType,
			"query" => $sqlOrder,
		);
	
		return $returnedArray;
	
	
	}
	
	
	static public function getSqlLimitQuery($results_limit, $entriesPerPage, $page_number, $total_entries, $externalCall) {
	
		if ($results_limit == "all"){
	
			$sqlLimit = " LIMIT ".$entriesPerPage*$page_number.",".$entriesPerPage;
			$sqlLimitExport = "";
	
			$total_entries_basic = $total_entries;
	
		} else {
	
			$res_limit = explode('${dp}', $results_limit);
	
	
			if ($res_limit[2] > $total_entries)
			$res_limit[2] = $total_entries;
	
	
			if ($res_limit[1] == 'first'){
	
				if ($entriesPerPage >= $res_limit[2]) {
	
					$sqlLimit = " LIMIT 0,".$res_limit[2];
	
				} else {
	
					$limit_current_entries = ((($entriesPerPage*$page_number)+$entriesPerPage) > $res_limit[2]) ? ($res_limit[2]%$entriesPerPage) : $entriesPerPage;
					$sqlLimit = " LIMIT ".($entriesPerPage*$page_number).",".$limit_current_entries;
	
				}
	
				$sqlLimitExport = " LIMIT 0,".$res_limit[2];
	
			} else { //last
	
				$limit_init_entry = ($total_entries < $res_limit[2]) ? ($entriesPerPage*$page_number) : ($entriesPerPage*$page_number)+($total_entries-$res_limit[2]);
	
				if ($entriesPerPage >= $res_limit[2]) {
	
					$sqlLimit = " LIMIT ".($total_entries-$res_limit[2]).",".$res_limit[2];
	
				} else {
	
					$limit_current_entries = ((($entriesPerPage*$page_number)+$entriesPerPage) > $res_limit[2]) ? ($res_limit[2]%$entriesPerPage) : $entriesPerPage;
					$sqlLimit = " LIMIT ".$limit_init_entry.",".$limit_current_entries;
	
				}
	
				$sqlLimitExport = " LIMIT ".($total_entries-$res_limit[2]).",".$res_limit[2];
	
			}
	
			$total_entries_basic = ($total_entries <= $res_limit[2]) ? $total_entries : $res_limit[2];
	
		}
	
	
		if ($externalCall) {
			$sqlLimit = "";
		}
	
	
	
		$returnedArray = Array (
			"totalEntriesBasic" => $total_entries_basic,
			"querys" => Array(
				"Limit" => $sqlLimit,
				"LimitExport" => $sqlLimitExport,
			),
		);
	
		return $returnedArray;
	
	}
	
	//Pasar parametros de paginado para calcular corrctamente el LIMIT, o mejor aun... hacer esta funcionalidad en el propia funcion de generar LIMIT
	static public function getSqlSubSetLimitQuery($alternative_database, $results_limit, $totalEntries, $entriesPerPage, $pageNumber, $report_table, $table_primary_key, $sqlFrom, $sqlJoin, $sqlWhere, $sqlGroup, $sqlHaving) {
	
		global $sugar_config;
		
		$useExternalDbConnection = true;
		$alternativeDb = ($alternative_database >= 0) ? $alternative_database : false;
		
		
		if ($results_limit == "all"){
	
			$sqlLimitSubSet = "";
	
		} else {
	
			$res_limit = explode('${dp}', $results_limit);
	
			$pageNumber = (empty($pageNumber)) ? 0 : $pageNumber;
	
			if ($res_limit[1] == 'first') {
					
				$offset = $pageNumber*$entriesPerPage;
				$numEntriesLimit = ($entriesPerPage < $res_limit[2]) ? $entriesPerPage : $res_limit[2];
				$numEntriesLimit = (($offset+$numEntriesLimit) > $res_limit[2]) ? ($res_limit[2]-$offset) : $numEntriesLimit;
					
				$sqlLimitSubSet = " LIMIT ".$offset.",".$numEntriesLimit." ";
	
			} else if ($res_limit[1] == 'last') {
	
				$sqlLimitedTotals = "SELECT ".$report_table.".".$table_primary_key." as numrows FROM ".substr($sqlFrom, 5)." ".$sqlJoin.$sqlWhere.$sqlGroup.$sqlHaving;
				$limitedTotalsRs = asol_Report::getSelectionResults($sqlLimitedTotals, null, $useExternalDbConnection, $alternativeDb);
				
				$offset = (count($limitedTotalsRs)) - (($res_limit[2]) - ($pageNumber*$entriesPerPage));
				$numEntriesLimit = ($entriesPerPage < $res_limit[2]) ? $entriesPerPage : $res_limit[2];
					
				$sqlLimitSubSet = " LIMIT ".$offset.",".$numEntriesLimit." ";
	
			}
	
		}
	
			
		return $sqlLimitSubSet;
	
	}
	
	static public function getExternalTablePrimaryKey($alternative_database, $report_table) {
		
		global $sugar_config;
		
		$useExternalDbConnection = true;
		$alternativeDb = ($alternative_database >= 0) ? $alternative_database : false;
		
		$externalColumnsRs = asol_Report::getSelectionResults("SHOW COLUMNS FROM ".$report_table, null, $useExternalDbConnection, $alternativeDb);
		
		$primaryKey = null;
		foreach ($externalColumnsRs as $externalColumnsRow) {
			if ($externalColumnsRow['Key'] === "PRI") {
				$primaryKey = $externalColumnsRow['Field'];
				break;
			}
		}
		
		return $primaryKey;
		
	}
	
	//Misma pelicula que funcion de arriba
	static public function getSqlLimitDetailWhereQuery($results_limit, $detailGroupFullSize, $report_table, $sqlFrom, $sqlJoin, $sqlDetailWhere, $sqlGroup, $sqlOrder) {
	
		if ($results_limit == "all") {
	
			$sqlLimitWhere = "";
	
		} else {
	
			$res_limit = explode('${dp}', $results_limit);
	
			$sqlLimitedTotals = "SELECT @rownum:=@rownum+1 AS rownum, ".$report_table.".id FROM (SELECT @rownum:=0) r, ".substr($sqlFrom, 5)." ".$sqlJoin.$sqlDetailWhere.$sqlGroup.$sqlOrder;
			$limitedTotalsRs = asol_Report::getSelectionResults($sqlLimitedTotals);
	
			//reordenamos el array por si esta ordenado descendentemente
			foreach ($limitedTotalsRs as $key=>$limitedTotal)
			$limitedTotalsRs[$key]['rownum'] = $key+1;
	
			$listIds = "";
			foreach ($limitedTotalsRs as $limitedRow){
				if (($res_limit[1] == 'first') && ($limitedRow['rownum'] <= $res_limit[2]))
				$listIds .= "'".$limitedRow['id']."',";
				else if (($res_limit[1] == 'last') && ($limitedRow['rownum'] > ($detailGroupFullSize-$res_limit[2])))
				$listIds .= "'".$limitedRow['id']."',";
			}
	
			$listIds = substr($listIds, 0, -1);
			$sqlLimitWhere = " AND ".$report_table.".id IN (".$listIds.") ";
	
	
		}
	
		return $sqlLimitWhere;
	
	}
	
	
	static public function getDetailWhereGrouping($sqlWhere, $currentGroup, $detailFieldInfo) {
		
		$sqlWhere = (empty($sqlWhere) ? " WHERE (1=1)" : $sqlWhere);
		
		switch ($detailFieldInfo['grouping']) {
		
			case "Detail":
				
				//************************************************//
				//*****Calculate Detail Extended Where Clause*****//
				//************************************************//
				$detailGroupWhereExtensionQuery = asol_ReportsGenerationFunctions::getDetailGroupWhereExtensionQuery($sqlWhere, $detailFieldInfo['field'], $currentGroup);
				
				$subGroup = $detailGroupWhereExtensionQuery["subGroup"];
				$sqlDetailWhere = $detailGroupWhereExtensionQuery["sqlDetailWhere"];								
				
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
					
				//**************************************************************//
				//***Calculate Month/DoW/WoY/Day Detail Extended Where Clause***//
				//**************************************************************//
				$monthDayDetailGroupWhereExtensionQuery = asol_ReportsGenerationFunctions::getDateDetailGroupWhereExtensionQuery($sqlWhere, $detailFieldInfo['field'], $detailFieldInfo['grouping'], $currentGroup);
				
				$subGroup = $monthDayDetailGroupWhereExtensionQuery["subGroup"];
				$sqlDetailWhere = $monthDayDetailGroupWhereExtensionQuery["sqlDetailWhere"];
				
				break;
					
		}
			
		return array(
			'subGroup' => $subGroup,
			'sqlDetailWhere' => $sqlDetailWhere
		);
		
	}
	
	static public function getSqlDetailLimitQuery($results_limit, $detailGroupFullSize) {
	
		if ($results_limit == "all") {
	
			$sqlLimit = "";
	
		} else {
	
			$res_limit = explode('${dp}', $results_limit);
	
			if ($res_limit[1] == "first"){
	
				$sqlLimit = " LIMIT 0,".$res_limit[2];
	
			} else { //last
	
				$limit_init_entry = ($detailGroupFullSize < $res_limit[2]) ? 0 : ($detailGroupFullSize-$res_limit[2]);
				$sqlLimit = " LIMIT ".$limit_init_entry.",".$res_limit[2];
	
			}
	
	
		}
	
		return $sqlLimit;
	
	}
	
	
	static public function formatGroupTotals($reportId, $dashletId, $rsSubTotals, $totals, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $auditedReport, $auditedAppliedFields, $auditedFieldType) {
	
		global $timedate;
	
		//Set default timezone for php date/datetime functions
		date_default_timezone_set($userTZ);
	
		if (count($rsSubTotals[0]) == 0)
			$rsSubTotals[0] = Array();
		$k = 0;
	
		//Comprobar que el elemento actual no es un total, si lo es pasar al siguiente elemento
	
	
		foreach ($rsSubTotals[0] as $key=>$value) {

			$oldType = $totals[$k]['type'];
			$formatType = (!empty($totals[$k]['format']['type']) ? $totals[$k]['format']['type'] : (!empty($totals[$k]['type']) ? $totals[$k]['type'] : ""));
	
			if (($auditedReport) && (in_array($totals[$k]['field'], $auditedAppliedFields)))
				$formatType = $auditedFieldType;
	
			
			if ($formatType == "date") {

				if (($value != "") && (date('Y-m-d H:i:s', strtotime($value)) == $value)) {
					if (($gmtDates) && (in_array($oldType, array("datetime", "datetimecombo")))) {
						$value = $timedate->handle_offset($value, $timedate->get_db_date_time_format(), true, null, $userTZ);
					}
					$value = date('Y-m-d', strtotime($value));
				}
					
				if (($value != "") && (date('Y-m-d', strtotime($value)) == $value)) {
					$rsSubTotals[0][$key] = $timedate->swap_formats($value, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);
				}
					
			} else if (in_array($formatType, array("datetime", "datetimecombo"))) {
	
				if (($value != "") && (date('Y-m-d H:i:s', strtotime($value)) == $value)) {
					if ($gmtDates) {
						$value = $timedate->handle_offset($value, $timedate->get_db_date_time_format(), true, null, $userTZ);
					}
					$rsSubTotals[0][$key] = $timedate->swap_formats($value, $timedate->get_db_date_time_format(), $userDateTimeFormat);
				}
	
			} else if ($formatType == "timestamp") {
	
				if (($value != "") && (date('Y-m-d H:i:s', strtotime($value)) == $value)) {
					$rsSubTotals[0][$key] = $timedate->swap_formats($value, $timedate->get_db_date_time_format(), $userDateTimeFormat);
				}
	
			} else if ($formatType == "int") {
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'numericValue' => $value,
					'extraFormat' => $totals[$k]['format']['extra'],
				);
				$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
				$rsSubTotals[0][$key] = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $value;
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			} else if ($formatType == "currency") {
	
				$value = (!empty($value)) ? $value : 0;
				$params = array('currency_id' => $currencyId, 'convert' => false);
				$rsSubTotals[0][$key] = currency_format_number($value, $params);
	
			} else if (in_array($formatType, array("decimal", "double"))) {
				
				if (!empty($value))
					$rsSubTotals[0][$key] = format_number($value);
				else if ($value !== null)
					$rsSubTotals[0][$key] = format_number(0);
				else 
					$rsSubTotals[0][$key] = 0;
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'numericValue' => $rsSubTotals[0][$key],
					'extraFormat' =>  $totals[$k]['format']['extra'],
				);
				$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
				$rsSubTotals[0][$key] = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $rsSubTotals[0][$key];
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			} else if ($formatType == "percent") {
	
				$value = (!empty($value)) ? $value : 0;
				$numericValue = ($value*100);
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'numericValue' => $numericValue,
					'extraFormat' => $totals[$k]['format']['extra'],
				);
				$returnedPremiumPercent = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportPercentField", $extraParams);
				$rsSubTotals[0][$key] = ($returnedPremiumPercent !== false) ? $returnedPremiumPercent : $numericValue.'%';
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
	
			} else if ($formatType == "bool") {
	
				$rsSubTotals[0][$key] = '<input type="checkbox" '.(!empty($value) ? 'checked=""' : '').' disabled="true" class="checkbox">';
	
			} else if ($formatType == "button") {

				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'reportId' => $reportId,
					'currentLabel' => $totals[$k]['alias'],
					'currentValue' => $value,
					'currentRef' => $dashletId,
					'extraFormat' => $totals[$k]['format']['extra'],
					'referenceAlias' => null
				);
				$returnedPremiumButton = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "getReportButtonField", $extraParams);
				$rsSubTotals[0][$key] = ($returnedPremiumButton !== false) ? $returnedPremiumButton : '';
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			
			} else {
					
				$rsSubTotals[0][$key] = $value;
	
			}
			
			
			//***HTML Entities Decoding
			$rsSubTotals[0][$key] = html_entity_decode($rsSubTotals[0][$key]);
			//***HTML Entities Decoding
	
			$k++;

		}
	
		if (empty($rsSubTotals[0]))
			$rsSubTotals = null;
	
		return $rsSubTotals;
	
	}
	
	
	static public function formatSubGroup($reportId, $dashletId, $subGroup, $subGroupInfo, $userTZ, $currencyId, $gmtDates) {
	
		global $timedate, $app_list_strings;
	
		//Set default timezone for php date/datetime functions
		date_default_timezone_set($userTZ);
	
		$formatType = (!empty($subGroupInfo['format']['type']) ? $subGroupInfo['format']['type'] : (!empty($subGroupInfo['type']) ? $subGroupInfo['type'] : ""));
		
		if (in_array($formatType, array("enum", "radioenum"))) {
	
			$subGroup = ($subGroup == "Nameless" ? "Nameless" : (!isset($subGroupInfo['enumLabels'][$subGroup]) ? $subGroup : $subGroupInfo['enumLabels'][$subGroup]));
	
		} else if ($formatType == "multienum") {
						
			$multiEnumValues = explode(',', $subGroup);
			
			foreach ($multiEnumValues as & $multiEnumValue) {
				$multiEnumValue = trim($multiEnumValue, '^');
				$multiEnumValue = (!isset($subGroupInfo['enumLabels'][$multiEnumValue])) ? $multiEnumValue : $subGroupInfo['enumLabels'][$multiEnumValue];
			}
			
			$subGroup = implode(', ', $multiEnumValues);
					
		} else if (($gmtDates) && (in_array($formatType, array("datetime", "datetimecombo")))) {

			$subGroup = $timedate->handle_offset($subGroup, $timedate->get_db_date_time_format(), true, null, $userTZ);
	
		} else if ($formatType == "int") {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'numericValue' => $subGroup,
				'extraFormat' => $subGroupInfo['format']['extra'],
			);
			$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
			$subGroup = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $subGroup;
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		} else if ($formatType == "currency") {

			$params = array('currency_id' => $currencyId, 'convert' => false);
			$subGroup = currency_format_number($subGroup, $params);
	
		} else if (in_array($formatType, array("decimal", "double"))) {

			if (!empty($subGroup))
				$subGroup = format_number($subGroup);
			else if ($subGroup !== null)
				$subGroup = format_number(0);
			else 
				$subGroup = 0;
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'numericValue' => $subGroup,
				'extraFormat' => $subGroupInfo['format']['extra'],
			);
			$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
			$subGroup = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $subGroup;
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
							
		} else if ($formatType == "percent") {
	
			$subGroup = (!empty($subGroup)) ? $subGroup : 0;
			$numericValue = ($subGroup*100);
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'numericValue' => $numericValue,
				'extraFormat' => $subGroupInfo['format']['extra'],
			);
			$returnedPremiumPercent = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportPercentField", $extraParams);
			$subGroup = ($returnedPremiumPercent !== false) ? $returnedPremiumPercent : $numericValue.'%';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

		} else if ($formatType == "bool") {
	
			$subGroup = '<input type="checkbox" '.(!empty($subGroup) ? 'checked=""' : '').' disabled="true" class="checkbox">';
	
		} else if ($formatType == "button") {

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'reportId' => $reportId,
				'currentLabel' => $subGroupInfo['alias'], 
				'currentValue' => $subGroup,
				'currentRef' => $dashletId,
				'extraFormat' => $subGroupInfo['format']['extra'],
				'referenceAlias' => null 
			);
			$returnedPremiumButton = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "getReportButtonField", $extraParams);
			$subGroup = ($returnedPremiumButton !== false) ? $returnedPremiumButton : '';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		}
	
		$subGroup = str_replace("\'", "'", $subGroup);
	
		//***HTML Entities Decoding
		$subGroup = html_entity_decode($subGroup);
		//***HTML Entities Decoding
	
		return $subGroup;
	
	}
	
	
	static public function formatDateSpecialsGroup($reportId, $dashletId, $subGroup, $fieldInfo, $userDateFormat, $userTZ, $currencyId, $gmtDates) {
		
		global $mod_strings, $timedate;

		
		switch ($fieldInfo['grouping']) {
								
			case "Detail":

				$subGroup = self::formatSubGroup($reportId, $dashletId, $subGroup, $fieldInfo, $userTZ, $currencyId, $gmtDates);
				
				break;
				
			case "Quarter Hour Detail":
				
				$subGroup = intval($subGroup)*15;
				$subGroup = (($subGroup < 10) ? '0'.$subGroup : $subGroup).'-'.($subGroup+14);
				
				break;
				
			case "Day Detail":
				
				if((!$timedate->check_matching_format($subGroup, $userDateFormat)) && ($subGroup != ""))						
					$subGroup = $timedate->swap_formats($subGroup, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);
					
				break;
				
			case "DoW Detail":
			
				$dowLabels = array('LBL_REPORT_MONDAY', 'LBL_REPORT_TUESDAY', 'LBL_REPORT_WEDNESDAY', 'LBL_REPORT_THURSDAY', 'LBL_REPORT_FRIDAY', 'LBL_REPORT_SATURDAY' ,'LBL_REPORT_SUNDAY'); 
				$subGroup = $mod_strings[$dowLabels[$subGroup]];

				break;

			case "WoY Detail":
			
				$woyVal = substr($subGroup, 4); //YYYYW
				$yearVal = substr($subGroup, 0 , 4); //YYYYW
				$woyVal = ($woyVal < 10) ? '0'.$woyVal : $woyVal;

				$subGroup = $woyVal.' ('.$yearVal.')';
			
				break;
				
			case "Month Detail":

				$monthVal = substr($subGroup, 4); //YYYYMM
				$yearVal = substr($subGroup, 0 , -2); //YYYYMM
		
				$monthName = date("F", @mktime(0, 0, 0, $monthVal, 10));
				$subGroup = (!empty($mod_strings["LBL_REPORT_".strtoupper($monthName)])) ? $mod_strings["LBL_REPORT_".strtoupper($monthName)]."-".$yearVal : $monthName."-".$yearVal;

				break;
				
			case "Natural Quarter Detail":
				
				$quarterVal = substr($subGroup, 4); //YYYYQ
				$yearVal = substr($subGroup, 0 , -1); //YYYYQ
				
				$numberTranslation = array("FIRST", "SECOND", "THIRD", "FORTH");
				$subGroup = $mod_strings['LBL_REPORT_'.$numberTranslation[intval($quarterVal)-1].'_NATURAL_QUARTER'].' ('.$yearVal.')';
				
				break;
				
			case "Fiscal Quarter Detail":
				
				$quarterVal = substr($subGroup, 4); //YYYYQ
				$yearVal = substr($subGroup, 0 , -1); //YYYYQ
			
				$numberTranslation = array("FIRST", "SECOND", "THIRD", "FORTH");
				$subGroup = $mod_strings['LBL_REPORT_'.$numberTranslation[intval($quarterVal)-1].'_FISCAL_QUARTER'].' ('.$yearVal.')';

				break;
				
			case "Minute Detail":
			case "Hour Detail":
			case "Natural Year Detail":
			case "Fiscal Year Detail":	
					
				break;
				
		}
		
		return $subGroup;
		
	}
	
	
	static public function formatDetailResultSet($reportId, $dashletId, $subGroups, & $resulsetFields, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $isGroupedReport, $auditedReport, $auditedAppliedFields, $auditedFieldType, $referenceAlias) {

		date_default_timezone_set($userTZ);
		
		foreach ($subGroups as & $subGroup) {
	
			foreach ($subGroup as & $values) {

				self::formatResultSetRows($reportId, $dashletId, $resulsetFields, $values, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $isGroupedReport, $auditedReport, $auditedAppliedFields, $auditedFieldType, $referenceAlias);

			}

		}
		
		return $subGroups;
	
	}
	
	static public function formatResultSet($reportId, $dashletId, $rs, & $resulsetFields, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $isGroupedReport, $auditedReport, $auditedAppliedFields, $auditedFieldType, $referenceAlias) {

		date_default_timezone_set($userTZ);

		foreach ($rs as & $values) {

			self::formatResultSetRows($reportId, $dashletId, $resulsetFields, $values, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $isGroupedReport, $auditedReport, $auditedAppliedFields, $auditedFieldType, $referenceAlias);
	
		}
	
		return $rs;
	
	}
	
	static private function formatResultSetRows($reportId, $dashletId, $resulsetFields, & $rowValues, $userDateFormat, $userDateTimeFormat, $userTZ, $currencyId, $gmtDates, $isGroupedReport, $auditedReport, $auditedAppliedFields, $auditedFieldType, $referenceAlias) {

		global $timedate;
		
		foreach ($resulsetFields as & $fieldDef) {

			$isTotal = (!$isGroupedReport && $fieldDef['function'] !== '0');
			
			if (!$isTotal) {

				$oldType = $fieldDef['type'];
				$formatType = (!empty($fieldDef['format']['type']) ? $fieldDef['format']['type'] : (!empty($fieldDef['type']) ? $fieldDef['type'] : ""));
				$currentUnformattedValue = $rowValues[$fieldDef['alias']];
				
				if (($auditedReport) && (in_array($fieldDef['field'], $auditedAppliedFields)))
					$formatType = $auditedFieldType;
					
				if (in_array($formatType, array("enum", "radioenum"))) {
	
					$rowValues[$fieldDef['alias']] = (!isset($fieldDef['enumLabels'][$currentUnformattedValue])) ? $currentUnformattedValue : $fieldDef['enumLabels'][$currentUnformattedValue];

				} else if ($formatType == "multienum") {
						
					$multiEnumValues = explode(',', $currentUnformattedValue);
					
					foreach ($multiEnumValues as & $multiEnumValue) {
						$multiEnumValue = trim($multiEnumValue, '^');
						$multiEnumValue = (!isset($fieldDef['enumLabels'][$multiEnumValue])) ? $multiEnumValue : $fieldDef['enumLabels'][$multiEnumValue];
					}
					
					$rowValues[$fieldDef['alias']] = implode(', ', $multiEnumValues);
					
				} else if ($formatType == "date") {

					if (($currentUnformattedValue != "") && (date('Y-m-d H:i:s', strtotime($currentUnformattedValue)) == $currentUnformattedValue)) {
						if (($gmtDates) && (in_array($oldType, array("datetime", "datetimecombo")))) {
							$currentUnformattedValue = $timedate->handle_offset($currentUnformattedValue, $timedate->get_db_date_time_format(), true, null, $userTZ);
						}
						$currentUnformattedValue = date('Y-m-d', strtotime($currentUnformattedValue));
					}
					
					if (($currentUnformattedValue != "") && (date('Y-m-d', strtotime($currentUnformattedValue)) == $currentUnformattedValue)) {
						$rowValues[$fieldDef['alias']] = $timedate->swap_formats($currentUnformattedValue, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);
					}
						
				} else if (in_array($formatType, array("datetime", "datetimecombo"))) {
						
					if (($currentUnformattedValue != "") && (date('Y-m-d H:i:s', strtotime($currentUnformattedValue)) == $currentUnformattedValue)) {
						if ($gmtDates) {
							$rowValues[$fieldDef['alias']] = $timedate->handle_offset($currentUnformattedValue, $timedate->get_db_date_time_format(), true, null, $userTZ);
						}
						$rowValues[$fieldDef['alias']] = $timedate->swap_formats($rowValues[$fieldDef['alias']], $timedate->get_db_date_time_format(), $userDateTimeFormat);
					}
	
				} else if ($formatType == "timestamp") {
					
					if (($currentUnformattedValue != "") && (date('Y-m-d H:i:s', strtotime($currentUnformattedValue)) == $currentUnformattedValue)) {
						$rowValues[$fieldDef['alias']] = $timedate->swap_formats($currentUnformattedValue, $timedate->get_db_date_time_format(), $userDateTimeFormat);
					}

					
				} else if ($formatType == "int") {
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'numericValue' => $currentUnformattedValue,
						'extraFormat' => $fieldDef['format']['extra'],
					);
					$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
					$rowValues[$fieldDef['alias']] = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $currentUnformattedValue;
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
				
				} else if ($formatType == "currency") {
	
					$params = array('currency_id' => $currencyId, 'convert' => false);
					$rowValues[$fieldDef['alias']] = currency_format_number($currentUnformattedValue, $params);
	
				} else if (in_array($formatType, array("decimal", "double"))) {
				
					if (!empty($currentUnformattedValue))
						$rowValues[$fieldDef['alias']] = format_number($currentUnformattedValue);
					else if ($currentUnformattedValue !== null)
						$rowValues[$fieldDef['alias']] = format_number(0);
					else 
						$rowValues[$fieldDef['alias']] = 0;
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'numericValue' => $rowValues[$fieldDef['alias']],
						'extraFormat' => $fieldDef['format']['extra'],
					);
					$returnedPremiumNumeric = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportNumericField", $extraParams);
					$rowValues[$fieldDef['alias']] = ($returnedPremiumNumeric !== false) ? $returnedPremiumNumeric : $rowValues[$fieldDef['alias']];
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
				
				} else if ($formatType == "percent") {
	
					$rowValues[$fieldDef['alias']] = (!empty($currentUnformattedValue)) ? $currentUnformattedValue : 0;
					$numericValue = ($rowValues[$fieldDef['alias']]*100);
		
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'numericValue' => $numericValue,
						'extraFormat' => $fieldDef['format']['extra'],
					);
					$returnedPremiumPercent = asol_ReportsUtils::managePremiumFeature("reportPercentFormat", "reportFunctions.php", "getReportPercentField", $extraParams);
					$rowValues[$fieldDef['alias']] = ($returnedPremiumPercent !== false) ? $returnedPremiumPercent : $numericValue.'%';
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					
				} else if ($formatType == "bool") {
	
					$rowValues[$fieldDef['alias']] = '<input type="checkbox" '.(!empty($currentUnformattedValue) ? 'checked=""' : '').' disabled="true" class="checkbox">';
			
				} else if ($formatType == "button") {

					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'reportId' => $reportId,
						'currentLabel' => $fieldDef['alias'], 
						'currentValue' => $currentUnformattedValue,
						'currentRef' => $dashletId,
						'extraFormat' => $fieldDef['format']['extra'],
						'referenceAlias' => $referenceAlias,
						'currentRow' => $rowValues,
					);
					$returnedPremiumButton = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "getReportButtonField", $extraParams);
					$rowValues[$fieldDef['alias']] = ($returnedPremiumButton !== false) ? $returnedPremiumButton : '';
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
				
				} else {

					$rowValues[$fieldDef['alias']] = $currentUnformattedValue;
	
				}

				if (in_array($fieldDef['grouping'], array("Minute Detail", "Quarter Hour Detail", "Hour Detail", "Day Detail", "DoW Detail", "WoY Detail", "Month Detail", "Natural Quarter Detail", "Fiscal Quarter Detail", "Natural Year Detail", "Fiscal Year Detail"))) {
					
					$rowValues[$fieldDef['alias']] = self::formatDateSpecialsGroup($reportId, $dashletId, $rowValues[$fieldDef['alias']], $fieldDef, $userDateFormat, $userTZ, $currencyId, $gmtDates);
					
				}
		
				//***HTML Entities Decoding
				$rowValues[$fieldDef['alias']] = html_entity_decode($rowValues[$fieldDef['alias']]);
				//***HTML Entities Decoding
			
			}
	
		}
		
	}
	
	static public function formatDetailGroupedFields($subGroups, $resulset_fields, $userDateFormat) {
		
		global $timedate, $mod_strings;
		
		foreach ($subGroups as $key=>$subGroup) {
			
			foreach ($subGroup as $keyG=>$values) {
	
				$j=0;
	
				foreach ($values as $keyV=>$value) {
	
					if (in_array($resulset_fields[$j]['grouping'], array("Grouped", "Minute Grouped", "Quarter Hour Grouped", "Hour Grouped", "Day Grouped", "DoW Grouped", "WoY Grouped", "Month Grouped", "Natural Quarter Grouped", "Fiscal Quarter Grouped", "Natural Year Grouped", "Fiscal Year Grouped"))) {
				
						if ($resulset_fields[$j]['function'] == '0') {

							$subGroups[$key][$keyG][$keyV] = self::applyGroupFormat($subGroups[$key][$keyG][$keyV], $resulset_fields[$j]['grouping'], $userDateFormat); 
							
						}
		
					}
					
					//***HTML Entities Decoding
					$subGroups[$key][$keyG][$keyV] = html_entity_decode($subGroups[$key][$keyG][$keyV]);
					//***HTML Entities Decoding
						
					$j++;
		
				}
				
			}
	
		}
	
		return $subGroups;
		
	}
	
	static public function formatGroupedFields($rs, $resulset_fields, $userDateFormat) {
		
		global $timedate, $mod_strings;
		
		for ($j=0; $j<count($rs); $j++) {
	
			$k = 0;
	
			foreach ($rs[$j] as $key=>$value) {
					
				if (in_array($resulset_fields[$k]['grouping'], array("Grouped", "Minute Grouped", "Quarter Hour Grouped", "Hour Grouped", "Day Grouped", "DoW Grouped", "WoY Grouped", "Month Grouped", "Natural Quarter Grouped", "Fiscal Quarter Grouped", "Natural Year Grouped", "Fiscal Year Grouped"))) {
				
					if ($resulset_fields[$k]['function'] == '0') {
								
						$rs[$j][$key] = self::applyGroupFormat($rs[$j][$key], $resulset_fields[$k]['grouping'], $userDateFormat);

					}
		
					//***HTML Entities Decoding
					$rs[$j][$key] = html_entity_decode($rs[$j][$key]);
					//***HTML Entities Decoding
						
				}
				
				$k++;
				
			}
	
		}
	
		return $rs;
		
	}
	
	static public function generateManuallySubTotals($rs, $totals, $resultsLimit, $groupedTotals = false, $subTotalsLimit = array()) {
		
		if ($rs !== null) {
			for ($l=0; $l<count($rs); $l++) {
				foreach ($totals as $oneTotal) {
					if ($groupedTotals) {
						$theGroup = $rs[$l]['asol_grouping_field'];
						$subTotalsLimit[$theGroup][$l][$oneTotal['alias']] = $rs[$l][$oneTotal['alias']];
					} else {
						$subTotalsLimit[$l][$oneTotal['alias']] = $rs[$l][$oneTotal['alias']];
					}
				}
				if ($groupedTotals) {
					unset($rs[$l]['asol_grouping_field']);
				}
			}
		}
		
		
		//Calculamos los totales a mano para las agrupaciones limitadas
		$limitedTotals = array();

		if (empty($subTotalsLimit)) {
			$subTotalsLimit = array();
		}
			
		if ($groupedTotals) {
								
			if ($resultsLimit !== "all") {
				
				foreach($subTotalsLimit as & $subTotalLimit) {
					$res_limit = explode('${dp}', $resultsLimit);
					if ($res_limit[1] == 'first') {
						$subTotalLimit = array_slice($subTotalLimit, 0, $res_limit[2]);
					} else if ($res_limit[1] == 'last') {
						$subTotalLimit = array_slice($subTotalLimit, -$res_limit[2]);
					}
				}
				
			}

			foreach ($subTotalsLimit as $theGroup=>$subTotalsGroupLimit) {
				foreach ($totals as $key=>$total) {	
					$limitedTotals[$theGroup][$total['alias']] = self::getManuallyTotal($total, $subTotalsGroupLimit);
				}
				$limitedTotals[$theGroup]['asol_grouping_field'] = $theGroup;
			}
		} else {
			foreach ($totals as $key=>$total) {	
				$limitedTotals[0][$total['alias']] = self::getManuallyTotal($total, $subTotalsLimit);
			}
		}
		
		return $limitedTotals;
		
	}
	
	static public function getManuallyTotalCharts($function, $values)
	{
		$totalValue = 0;
		
		switch ($function) 
		{	
			case "COUNT":
			case "SUM":
				foreach ($values as $subVal)
					$totalValue += $subVal;
				break;
		
			case "MIN":
				foreach ($values as $subVal) {
					if (empty($totalValue))
						$totalValue = $subVal;
					else if ($subVal < $totalValue)
						$totalValue = $subVal;
				}
				break;
		
			case "MAX":
				foreach ($values as $subVal) {
					if (empty($totalValue))
						$totalValue = $subVal;
					else if ($subVal > $totalValue)
						$totalValue = $subVal;
				}
				break;
		
			case "AVG":
				$countValues = count($values);
				foreach ($values as $subVal) {
					$totalValue += $subVal;
				}
				$totalValue /= $countValues;
				break;
					
		}
	
		return $totalValue;
	}
	
	static private function getManuallyTotal($total, $values) {
		
		$limitedValue = "";
		$function = (empty($total['function']) ? "COUNT" : $total['function']);
		
		switch ($function) {
			
			case "COUNT":
			case "SUM":
				foreach ($values as $subVal)
					$limitedValue += $subVal[$total['alias']];
				break;

			case "MIN":
				foreach ($values as $subVal) {
					if (empty($limitedValue))
						$limitedValue = $subVal[$total['alias']];
					else if ($subVal[$total['alias']] <= $limitedValue)
						$limitedValue = $subVal[$total['alias']];
				}
				break;

			case "MAX":
				foreach ($values as $subVal) {
					if (empty($limitedValue))
						$limitedValue = $subVal[$total['alias']];
					else if ($subVal[$total['alias']] >= $limitedValue)
						$limitedValue = $subVal[$total['alias']];
				}
				break;

			case "AVG":
				$c=0;
				foreach ($values as $subVal) {
					$limitedValue += $subVal[$total['alias']];
					$c++;
				}
				$limitedValue /= $c;
				break;
					
		}
		
		return $limitedValue;
		
	}
	
	static public function getGroupingChartValue($groupBySequence, $rsValues, $userDateFormat) {
		
		global $timedate, $mod_strings;
		
		$groupVal = "";
		
		foreach ($groupBySequence as $group=>$oneGroupBySeq) {
		
			if ($oneGroupBySeq['display'] == 'yes') {
			
				$formatType = (!empty($oneGroupBySeq['format']['type']) ? $oneGroupBySeq['format']['type'] : (!empty($oneGroupBySeq['type']) ? $oneGroupBySeq['type'] : ""));
				$groupingField = html_entity_decode($oneGroupBySeq['alias']);

				if (in_array($formatType, array('enum'))) {
					
					$groupVal .= (isset($oneGroupBySeq['enumLabels'][$rsValues[$groupingField]]) ? $oneGroupBySeq['enumLabels'][$rsValues[$groupingField]] : $rsValues[$groupingField]);
				
				} else if (in_array($formatType, array("currency"))) {
					
					$groupVal .= format_number($rsValues[$groupingField]);
				
				} else if (in_array($formatType, array("decimal", "double"))) {
					
					$groupVal .= format_number($rsValues[$groupingField]);
				
				} else if (in_array($formatType, array("date", "datetime", "datetimecombo", "timestamp"))) {
					
					$groupVal .= self::applyGroupFormat($rsValues[$groupingField], $oneGroupBySeq['grouping'], $userDateFormat);
					
				} else {
					
					$groupVal .= $rsValues[$groupingField];
				
				}
	
				$groupVal .= "/";
				
			}
			
		}
		
		return substr($groupVal, 0, -1);
		
	}
	
	static public function applyGroupFormat($fieldValue, $fieldGroupingType, $userDateFormat) {
		
		global $timedate, $mod_strings;
		
		switch ($fieldGroupingType) {
				
			case "Grouped":

				break;
				
			case "Quarter Hour Grouped":
				
				$fieldValue = intval($fieldValue)*15;
				$fieldValue = (($fieldValue < 10) ? '0'.$fieldValue : $fieldValue).'-'.($fieldValue+14);
				
				break;
				
			case "Day Grouped":
				
				if((!$timedate->check_matching_format($fieldValue, $userDateFormat)) && ($fieldValue != ""))						
					$fieldValue = $timedate->swap_formats($fieldValue, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);
				
				break;
				
			case "DoW Grouped":
				   
				$dowLabels = array('LBL_REPORT_MONDAY', 'LBL_REPORT_TUESDAY', 'LBL_REPORT_WEDNESDAY', 'LBL_REPORT_THURSDAY', 'LBL_REPORT_FRIDAY', 'LBL_REPORT_SATURDAY' ,'LBL_REPORT_SUNDAY'); 
				$fieldValue = $mod_strings[$dowLabels[$fieldValue]];
				
				break;
				
			case "WoY Grouped":
				   
				$woyVal = substr($fieldValue, 4); //YYYYW
				$yearVal = substr($fieldValue, 0 , 4); //YYYYW

				if ($woyVal < 10) {
					$woyVal = '0'.$woyVal;
				}
				
				$fieldValue = $woyVal.' ('.$yearVal.')';
				
				break;
				
			case "Month Grouped":

				$monthVal = substr($fieldValue, 4); //YYYYMM
				$yearVal = substr($fieldValue, 0 , -2); //YYYYMM
				
				$monthName = date("F", @mktime(0, 0, 0, $monthVal, 10));
				$fieldValue = (!empty($mod_strings["LBL_REPORT_".strtoupper($monthName)])) ? $mod_strings["LBL_REPORT_".strtoupper($monthName)]."-".$yearVal : $monthName."-".$yearVal;
				
				break;
				
			case "Natural Quarter Grouped":
				
				$quarterVal = substr($fieldValue, 4); //YYYYQ
				$yearVal = substr($fieldValue, 0 , -1); //YYYYQ
				
				$numberTranslation = array("FIRST", "SECOND", "THIRD", "FORTH");
				$fieldValue = $mod_strings['LBL_REPORT_'.$numberTranslation[intval($quarterVal)-1].'_NATURAL_QUARTER'].' ('.$yearVal.')';

				break;
				
			case "Fiscal Quarter Grouped":
				
				$quarterVal = substr($fieldValue, 4); //YYYYQ
				$yearVal = substr($fieldValue, 0 , -1); //YYYYQ
				
				$numberTranslation = array("FIRST", "SECOND", "THIRD", "FORTH");
				$fieldValue = $mod_strings['LBL_REPORT_'.$numberTranslation[intval($quarterVal)-1].'_FISCAL_QUARTER'].' ('.$yearVal.')';

				break;
				
			case "Natural Year Grouped":
				
				break;
				
			case "Fiscal Year Grouped":
				
				break;
			
		}

		return $fieldValue;
							
	}

	static public function validateSqlRemovedFields(& $sql, $alternativeDb, $reportTable, $hasDeleted) {
		
		require_once("modules/asol_Reports/include_basic/manageReportsFunctions.php");
		
		global $sugar_config;

		$hasReferencesRemovesField = false;
		
		if ($alternativeDb === false) {
			
			$fieldsToBeRemoved = asol_ReportsManagementFunctions::getNonVisibleFields($reportTable, $hasDeleted);
			
		} else {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array('dbIndex' => $alternativeDb ,'dbName' => null, 'reportTable' => null);
			$returnedPremiumFields = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getNonVisibleExternalDbFields", $extraParams);
			$fieldsToBeRemoved = ($returnedPremiumFields !== false) ? $returnedPremiumFields : array();
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		}
		
		foreach ($fieldsToBeRemoved as $fieldToBeRemoved) {
			if (strpos($sql, $fieldToBeRemoved) !== false) {
				$hasReferencesRemovesField = true;
				
				asol_Report::$reported_error = 'Forbidden field has been referenced at SQL query: '.$fieldToBeRemoved;
				break;
			}
		}
		
		if ($hasReferencesRemovesField)
			$sql = '';
		
	}
	
	static function replaceStaticGlobalVars($textWithVars) {

		global $current_language, $current_user;
		
		$beanItems = asol_ReportsUtils::getItemVariables($textWithVars);

		foreach($beanItems as $beanItem) {
	
			if ($beanItem['item'] == '${this}')
				continue;
	
			$beanField = null;
			$tmpBeanItem = substr(substr($beanItem['item'], 2), 0, -1);
	
			$beanValues = explode("->", $tmpBeanItem);
			$beanValues = (count($beanValues) == 1) ? explode("-&gt;", $tmpBeanItem) : $beanValues;

			switch ($beanValues[0]) {
				
				case "global":
					$beanField = $GLOBALS[$beanValues[1]];
					break;
					
				case "current_user":
					$beanField = $current_user->$beanValues[1];
					break;
				
				case "request":
					$beanField = $_REQUEST[$beanValues[1]];
					break;
					
			}
			
			if (isset($beanField)) {
				$textWithVars = str_replace($beanItem['item'], $beanField, $textWithVars);
			}
			
		}
		
		return $textWithVars;
		
	}
	
	static private function replaceReportsFieldVars($textWithVars, $tableAliasName, $aliasIndexTable, $audited_report, $alternativeDb) {

		$textWithVars = self::replaceStaticGlobalVars($textWithVars);
		$beanItems = asol_ReportsUtils::getItemVariables($textWithVars);
	
		foreach($beanItems as $beanItem) {
	
			if ($beanItem['item'] == '${this}')
				continue;
	
			$beanField = null;
			$tmpBeanItem = substr(substr($beanItem['item'], 2), 0, -1);
	
			$beanValues = explode("->", $tmpBeanItem);
			$beanValues = (count($beanValues) == 1) ? explode("-&gt;", $tmpBeanItem) : $beanValues;
	
			if (count($beanValues) == 2) {
					
				if ($beanValues[0] == "bean") {
	
					$beanField = $tableAliasName.($audited_report ? "_audit" : "").".".$beanValues[1];
	
				} else if ($beanValues[0] == "bean_cstm") {
	
					$beanField = $tableAliasName."_cstm.".$beanValues[1];
	
				}
	
			} else if (count($beanValues) == 3) {
	
				$moduleArray = explode("_", $beanValues[0]);
				$isCustomField = ($moduleArray[count($moduleArray) - 1] == 'Cstm');
				$module = ($isCustomField) ? substr($beanValues[0], 0, -5): $beanValues[0];
					
				if ($alternativeDb === false) {
				
					$usedModules = explode('::', $module);
					$usedKeys = explode('::', $beanValues[1]);
					
					$initKey = $usedKeys[0];
					$mainJoinIndex = (count($usedKeys) - 1);
					$mainKey = end($usedKeys);
					$relatedTable = BeanFactory::newBean(BeanFactory::getObjectName(end($usedModules)))->table_name;
					$relatedTable = (empty($relatedTable)) ? strtolower($module) : $relatedTable;
					
				} else {
					
					$usedModules = explode('::', $module);
					$usedKeys = explode('::', $beanValues[1]);
					
					$initKey = $usedKeys[0];
					$mainJoinIndex = (count($usedKeys) - 1);
					$mainKey = end($usedKeys);
					$relatedTable = end($usedModules);
					
				}
				
				$relatedIndex = $aliasIndexTable[$initKey][$mainJoinIndex][$mainKey][$relatedTable];
					
				if (!$isCustomField) {
					$relatedTableAliasName = (!empty($relatedIndex) ? $relatedTable.$relatedIndex : $relatedTable);
				} else {
					$relatedTableAliasName = (!empty($relatedIndex) ? $relatedTable."_cstm".$relatedTable : $relatedTable);
				}
				
				$beanField = $relatedTableAliasName.".".$beanValues[2];
				
			}
	
			if (isset($beanField)) {
				$textWithVars = str_replace($beanItem['item'], $beanField, $textWithVars);
			}
			
		}
	
		return str_replace("&#039;", "'", str_replace("&quot;", '"', $textWithVars));
	
	}
	
	static private function getJoinsFromSqlVariables($textWithVars, $currentDoJoin, $currentDoCountJoin, $alternativeDb, $reportModule, $reportTable, & $joinVariables, & $reportTableCustomJoin, & $processedJoinsFromSqlKeys) {
		
		$sqlFormulaJoins = "";
		$isNonCrmDatabase = ($alternativeDb !== false ? true : false);
		$beanItems = asol_ReportsUtils::getItemVariables($textWithVars);
		
		foreach($beanItems as $beanItem) {
	
			if ($beanItem['item'] == '${this}')
				continue;
	
			$beanField = null;
			$tmpBeanItem = substr(substr($beanItem['item'], 2), 0, -1);

			$beanValues = explode("->", $tmpBeanItem);
			$beanValues = (count($beanValues) == 1) ? explode("-&gt;", $tmpBeanItem) : $beanValues;
			
			if (count($beanValues) == 2) {
					
				if ($beanValues[0] == "bean_cstm") {
	
					$reportTableCustomJoin = true;
	
				}
	
			} else if (count($beanValues) == 3) {
				
				$usedModules = explode("::", $beanValues[0]);
				$usedKeys = explode("::", $beanValues[1]);

				$mainFieldKey = $usedKeys[0];

				foreach ($usedModules as $usedIndex=>$usedModule) {
				
					if ($isNonCrmDatabase) {

						if (isset($processedJoinsFromSqlKeys[$usedModule])) {
							$relatedLinkKey = $processedJoinsFromSqlKeys[$usedModule];
						} else {
							$mainPK = asol_Report::getSelectionResults("SHOW KEYS FROM ".$usedModule." WHERE Key_name = 'PRIMARY'", null, true, $alternativeDb);
							$relatedLinkKey = $processedJoinsFromSqlKeys[$usedModule] = $mainPK[0]['Column_name'];
						}
						
						$mainTable = ($usedIndex >= 1 ? $usedModules[$usedIndex-1] : $reportTable);
						$mainKey = $usedKeys[$usedIndex];
						$relatedTable = $usedModule;
						$relatedKey = $relatedLinkKey;
						$parentKey = ($usedIndex >= 1 ? $usedKeys[$usedIndex-1] : null);
						
						$joinTable = null;
						$isMainCustom = false;
						$isRelatedCustom = false;

					} else {
						
						$bean = BeanFactory::newBean($usedModule);
						$relatedInfo = asol_Report::getReportsRelatedFields($bean, $usedKeys[$usedIndex]);	
							
						if (isset($processedJoinsFromSqlKeys[$usedModules[$usedIndex-1]])) {
							$previousTable = $processedJoinsFromSqlKeys[$usedModules[$usedIndex-1]];
						} else {
							$previousTable = $processedJoinsFromSqlKeys[$usedModules[$usedIndex-1]] = BeanFactory::newBean(BeanFactory::getObjectName($usedModules[$usedIndex-1]))->table_name;
						}
						
						if (isset($processedJoinsFromSqlKeys[$usedModule])) {
							$currentTable = $processedJoinsFromSqlKeys[$usedModule];
						} else {
							$currentTable = $processedJoinsFromSqlKeys[$usedModule] = BeanFactory::newBean($usedModule)->table_name;
						}
						
						$mainTable = ($usedIndex >= 1 ? $previousTable : $reportTable);
						$mainKey = $usedKeys[$usedIndex];
						$relatedTable = $currentTable;
						$relatedKey = 'id';
						$parentKey = ($usedIndex >= 1 ? $usedKeys[$usedIndex-1] : null);
	
						$joinTable = null;
						
						$isMainCustom = isset($relatedInfo['custom_module']);
						$isRelatedCustom = $isCustomTable;
						
					}
					
					$storedKey = $mainKey.'.'.$relatedTable;
					$hasRelatedCustom = $joinVariables[$mainFieldKey][$usedIndex][$storedKey]['isRelatedCustom'];
					if ((!empty($mainKey)) && ($hasRelatedCustom !== true)) {
	
						$currentDoJoin = (($currentDoJoin) || ($joinVariables[$mainFieldKey][$usedIndex][$storedKey]['doJoin']));
						$currentDoCountJoin = (($currentDoCountJoin) || ($joinVariables[$mainFieldKey][$usedIndex][$storedKey]['doCountJoin']));
					
						$joinVariables[$mainFieldKey][$usedIndex][$storedKey] = array(
							'mainTable' => $mainTable,
							'mainKey' => $mainKey,
							'relatedTable' => $relatedTable,
							'relatedKey' => $relatedKey,
							'parentKey' => $parentKey,
						
							'joinTable' => $joinTable,
							
							'isMainCustom' => $isMainCustom,
							'isRelatedCustom' => $isRelatedCustom,
						
							'avoidAlias' => false,
							'doJoin' => $currentDoJoin,
							'doCountJoin' => $currentDoCountJoin
						);
						
					}
					
				}

			}

		}

	}

}

?>
