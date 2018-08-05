<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class asol_ReportsCharts {
	
	static public function generateGroupingValue($fieldValuesData, $currentChartIndex) {

		$groupingValue = "";
		
		foreach ($fieldValuesData as $keyF=>$currentField) {

			if ($currentField['index'] == $currentChartIndex) {
				$groupingValue = $currentField['alias'];
				break;
			}
				
		}
		
		return $groupingValue;
		
	}
	
	static public function getFieldAliasFromXAxis($xAxesInfo, $fieldValuesData)
	{
		$alias = array();
		
		foreach( $fieldValuesData as $currentField )
		{
			if( in_array($currentField['notModifiedFieldName'], $xAxesInfo) )
			{
				$alias[] = $currentField['alias'];
			}
		}
		
		return $alias;
	}
	
	static public function getFieldAliasFromChartInfo($chartInfo, $fieldValuesData) {

		$yAxisLabels = array();
		
		if ($chartInfo['type'] != 'parallel') {
			foreach ($fieldValuesData as $currentField) {
				if (($currentField['notModifiedFieldName'] == $chartInfo['yAxis']) && ($currentField['isRelated'] == $chartInfo['related']) && (in_array($currentField['index'], explode(',', $chartInfo['yIndex']))))
					return $currentField['alias'];	
			}	
		} else {
			$indexArray = explode(",", $chartInfo['yIndex']);
			
			foreach ($chartInfo['yAxis'] as $key=>$yAxis) {
				$currentIndex = $indexArray[$key];
				foreach ($fieldValuesData as $currentField) {
					 if (($currentField['notModifiedFieldName'] == $yAxis) && ($currentField['isRelated'] == $chartInfo['related']) && ($currentField['index'] == $currentIndex)) {
					 	$yAxisLabels[] = $currentField['alias'];
					 }
				}
			}
			
			return $yAxisLabels;
		}
	}
	
	static private function getChartTypes($chartInfo) {
		
		$chartTypes = array();

		$chartTypes[] = $chartInfo['type'];
		foreach ($chartInfo['subcharts'] as $subChart) {
			$chartTypes[] = $subChart['data']['type'];
		}

		return $chartTypes;
		
	}
	
	static private function getChartYAxisSides($chartInfo) {
		
		$chartYAxisSides = array();

		$chartYAxisSides[] = 'left';
		foreach ($chartInfo['subcharts'] as $subChart) {
			$chartYAxisSides[] = $subChart['data']['yAxisSide'];
		}

		return $chartYAxisSides;
		
	}
	
	static public function normalizeSubTotalCharts($subTotalsCharts, $alias, $groups)
	{
		$notXAxesSelected = array();
		
		foreach( $groups as $group )
		{
			if( !in_array($group['alias'], $alias) )
				$notXAxesSelected[] = $group['alias'];
		}
		
		foreach( $subTotalsCharts as $key => $data )
		{
			foreach( $notXAxesSelected as $notXAxis )
			{
				unset($subTotalsCharts[$key][$notXAxis]);
			}
		}
		
		return $subTotalsCharts;
	}
	
	static public function normalizeGroupsWithXAxis($xAxesAlias, $groups)
	{
		foreach( $groups as $key => $value )
		{
			if( !in_array($value['alias'], $xAxesAlias) )
			{
				unset($groups[$key]);
			}
		}
		
		return $groups;
	}
	
	static public function validateDataFilters($data, $newData, $xAxes)
	{
		foreach( $newData as $key => $value )
		{
			$nEq = true;
			
			foreach( $xAxes as $xAxis )
			{
				if( $data[$xAxis] != $value[$xAxis] )
					$nEq = false;
			}
			
			if($nEq)
				return $key;
		}
		
		return -1;
	}
	
	static public function fetchDataNormalized($subTotalsCharts, $xAxesAlias, $function)
	{
		$newData = array();
		$newData[] = $subTotalsCharts[0];
		
		$max = count($subTotalsCharts);
		for( $i = 1; $i < $max; $i++ )
		{
			$position = self::validateDataFilters($subTotalsCharts[$i], $newData, $xAxesAlias);
			
			if( $position >= 0 )
			{
				foreach( $newData[$position] as $key=>$value )
				{
					if( !in_array($key, $xAxesAlias) )
					{
						$newData[$position][$key] = $newData[$position][$key] . ';' . $subTotalsCharts[$i][$key];
					}
				}
			}
			else
			{
				$newData[] = $subTotalsCharts[$i];
			}
		}
		
		foreach( $newData as $position => $data )
		{
			foreach( $data as $key => $value )
			{
				if( !in_array($key, $xAxesAlias) )
				{
					$data[$key] = asol_ReportsGenerateQuery::getManuallyTotalCharts( $function, explode(';', $data[$key]) );
				}
			}
			
			$newData[$position] = $data;
		}
		
		return $newData;
	}
	
	static public function getDataForChartsGeneration(& $chartInfo, & $chartConfig, $fieldValues, $subTotalsCharts, $subGroupsExport, $massiveData, $isDetailReport, $isGroupedReport, $hasFunctionField, $groups, $groupExport, $userDateFormat) {

		//Compruebo que el eje X no tenga todos los valores escogidos, si es así, se deja por defecto
		if( (count($chartInfo[0]['xAxis']) != count($groups)) && (count($chartInfo[0]['xAxis']) != 0) && ( !$isDetailReport ) )	{
			
			$xAxesAlias = self::getFieldAliasFromXAxis($chartInfo[0]['xAxis'], $fieldValues['tables'][0]['data']);
			$subTotalsCharts = self::normalizeSubTotalCharts($subTotalsCharts, $xAxesAlias, $groups);
			$subTotalsCharts = self::fetchDataNormalized($subTotalsCharts, $xAxesAlias, $chartInfo[0]['function']);
			
			$groups = self::normalizeGroupsWithXAxis($xAxesAlias, $groups);
			
		}
		
		$subGroupsChart = array_keys($subTotalsCharts);

		$chartValues = array();
		$chartConfigs = array();
		$chartTemplates = array();
		$chartYAxisLabels = array();
		
		foreach ($chartInfo as $chartKey=>$currentChartInfo) {

			$hasSubCharts = (!empty($currentChartInfo['subcharts']));
			$currentChartLabel = trim($currentChartInfo['label']);
			
			if (strtolower($currentChartInfo['display']) == 'yes') {

				if ($isDetailReport) {
				
					if ($hasFunctionField) {
						
						foreach($subTotalsCharts as $groupKey=>$totalValues) {
							
							$currentValue = $totalValues[$currentChartLabel];
		
							if (in_array($currentChartInfo['type'], array('pie', 'donut', 'bar', 'funnel'))) {
								
								$chartValues[$currentChartLabel]['mainChart'][] = $currentValue;
							
							} else if (in_array($currentChartInfo['type'], array('stack', 'horizontal', 'line', 'scatter', 'area', 'bubble'))) {
								
								$counter = count($chartValues[$currentChartLabel]['mainChart']);
								$chartValues[$currentChartLabel]['mainChart'][$counter]['totalValue'] = $currentValue;
			
								if ($isGroupedReport) {
									
									$groupingValue = self::generateGroupingValue($fieldValues['tables'][0]['data'], $currentChartInfo['yIndex']);
									
									foreach ($subGroupsExport[$groupKey] as $groupExport) {
										
										$chartValues[$currentChartLabel]['mainChart'][$counter]['values'][] = array (
											'group' => asol_ReportsGenerateQuery::getGroupingChartValue($groups, $groupExport, $userDateFormat),
											'value' => $groupExport[$groupingValue],
										);
										
									}
								
								} else {
									
									$groupingValue = self::getFieldAliasFromChartInfo($currentChartInfo, $fieldValues['tables'][0]['data']);
									
									$chartValues[$currentChartLabel]['mainChart'][$counter]['values'][] = array (
										'group' => $groupingValue,
										'value' => $currentValue,
									);
		
								}
																		
							} else if ($currentChartInfo['type'] == 'parallel') {
								
								$counter = count($chartValues[$currentChartLabel]['mainChart']);
								
								$groupingValue = array();
								
								foreach ($currentChartInfo['yAxis'] as $infoKey=>$infoField) {
									$groupingValue[] = $totalValues[$currentChartLabel.$infoKey];
								}
								
								$chartValues[$currentChartLabel]['mainChart'][$counter]['values'][] = $groupingValue;
								
							} else {
								
								unset($chartInfo[$chartKey]);
								unset($chartConfig[$chartKey]);
								
							}
		
						}

					} else {
						
						if ($massiveData) {
							
							if (in_array($currentChartInfo['type'], array('scatter', 'bubble'))) {
	
								foreach($subTotalsCharts as $groupKey=>$totalValues) {
									
									$groupValues = array();
									foreach ($totalValues as $currentValues) {
										$groupValues[] = $currentValues[$currentChartLabel];
									}
									
									$chartValues[$currentChartLabel]['mainChart'][] = array(
										'values' => $groupValues,
										'totalValue' => max($groupValues)
									);
									
								}
							
							} else {
								
								unset($chartInfo[$chartKey]);
								unset($chartConfig[$chartKey]);
	
							}
							
						} else {
							
							foreach($subTotalsCharts as $groupKey=>$totalValues) {
								
								$currentValue = $totalValues[$currentChartLabel];
								
								if (in_array($currentChartInfo['type'], array('stack', 'horizontal', 'line', 'scatter', 'area', 'bubble'))) {
		
									$counter = count($chartValues[$currentChartLabel]['mainChart']);
									$chartValues[$currentChartLabel]['mainChart'][$counter]['totalValue'] = $currentValue;
									
									if ($isGroupedReport) {
	
										$groupingValue = self::generateGroupingValue($fieldValues['tables'][0]['data'], $currentChartInfo['yIndex']);
										
										foreach ($subGroupsExport[$groupKey] as $groupExport) {
	
											$chartValues[$currentChartLabel]['mainChart'][$counter]['values'][] = Array (
												'group' => asol_ReportsGenerateQuery::getGroupingChartValue($groups, $groupExport, $userDateFormat),
												'value' => $groupExport[$groupingValue],
											);
											
										}
									
									}
								
								} else {
		
									unset($chartInfo[$chartKey]);
									unset($chartConfig[$chartKey]);
								
								}
								
							}
	
						}
	
					}
				
				} else {
		
					if (in_array($currentChartInfo['type'], array('pie', 'donut', 'bar', 'funnel', 'stack', 'horizontal', 'line', 'scatter', 'area', 'bubble'))) {
						
						$groupingValue = self::generateGroupingValue($fieldValues['tables'][0]['data'], $currentChartInfo['yIndex']);
						
						foreach($subTotalsCharts as $key=>$values) {
							$subGroupsChart[$key] = asol_ReportsGenerateQuery::getGroupingChartValue($groups, $values, $userDateFormat);
							$chartValues[$currentChartLabel]['mainChart'][] = $values[$groupingValue];
						}
	
					} else if ($currentChartInfo['type'] == 'parallel') {
						
						$groupingArrayValue = array();
						$indexParallelArray = explode(",", $currentChartInfo['yIndex']);
						
						foreach ($indexParallelArray as $key=>$value)
						{
							$groupingArrayValue[] = self::generateGroupingValue($fieldValues['tables'][0]['data'], $value);
						}
									
						foreach($subTotalsCharts as $key=>$values) {
							$valuesParallelArray = array();
							
							foreach ($groupingArrayValue as $id=>$indexValue)
							{
								$valuesParallelArray[$indexValue] = $values[$indexValue];
							}
							
							$chartValues[$currentChartLabel]['mainChart'][] = $valuesParallelArray;
						}
						
						
					} else {
						
						unset($chartInfo[$chartKey]);
						unset($chartConfig[$chartKey]);
						
					}
	
				}
				
				
				if (isset($chartInfo[$chartKey])) {
					
					$chartConfigs[$chartKey]['mainConfig'] = $chartConfig[$chartKey];
					$chartTemplates[$chartKey]['mainTemplates'] = $currentChartInfo['templates'];
					$chartYAxisLabels[$chartKey][0] = self::getFieldAliasFromChartInfo($currentChartInfo, $fieldValues['tables'][0]['data']);
					
					if ($hasSubCharts) {

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParamsValues = array(
							'subcharts' => $currentChartInfo['subcharts'],
							'fieldValuesData' => $fieldValues['tables'][0]['data'],
							'subTotalsCharts' => $subTotalsCharts,
							'subGroupsExport' => $subGroupsExport,
							'currentChartLabel' => $currentChartLabel,
							'groupBySequence' => $groups,
							'userDateFormat' => $userDateFormat,
							'isDetailReport' => $isDetailReport,
							'isGroupedReport' => $isGroupedReport,
							'hasFunctionField' => $hasFunctionField,
							'massiveData' => $massiveData
						);
						
						$extraParamsConfigs = array(
							'subcharts' => $currentChartInfo['subcharts'],
						);
						
						$extraParamsYAxisLabels = array(
							'subcharts' => $currentChartInfo['subcharts'],
							'fieldValuesData' => $fieldValues['tables'][0]['data']
						);
						
						$chartValues[$currentChartLabel]['subCharts'] = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsValues", $extraParamsValues);
						$chartConfigs[$chartKey]['subConfigs'] = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsConfigs", $extraParamsConfigs);
						$chartTemplates[$chartKey]['subTemplates'] = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsTemplates", $extraParamsConfigs);
						$subChartsYAxisLabels = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsYAxisLabels", $extraParamsYAxisLabels);
						$chartYAxisLabels[$chartKey] = ($subChartsYAxisLabels !== false) ? array_merge($chartYAxisLabels[$chartKey], $subChartsYAxisLabels) : $chartYAxisLabels[$chartKey];
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
	
					} else {
					
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParamsValues = array(
							'zChart' => $currentChartInfo,
							'fieldValuesData' => $fieldValues['tables'][0]['data'],
							'subTotalsCharts' => $subTotalsCharts,
							'subGroupsExport' => $subGroupsExport,
							'currentChartLabel' => $currentChartLabel,
							'groupBySequence' => $groups,
							'userDateFormat' => $userDateFormat,
							'isDetailReport' => $isDetailReport,
							'isGroupedReport' => $isGroupedReport,
							'hasFunctionField' => $hasFunctionField,
							'massiveData' => $massiveData
						);
						
						$zChartDataValues = asol_ReportsUtils::managePremiumFeature("bubbleReportCharts", "reportFunctions.php", "getZChartDataValues", $extraParamsValues);
						if (!empty($zChartDataValues)) {
							$chartValues[$currentChartLabel]['zChart'] = $zChartDataValues;
						}
						//***********************//
						//***AlineaSol Premium***//
						//***********************//

					}
					
				}
				
			} else {

				unset($chartInfo[$chartKey]);
				unset($chartConfig[$chartKey]);
				unset($chartTemplates[$chartKey]);
				
			}
			
		}
		
		$chartInfo = array_values($chartInfo);
		$chartConfigs = array_values($chartConfigs);
		$chartTemplates = array_values($chartTemplates);
		
		if ($currentChartInfo['type'] != 'parallel')
			$chartYAxisLabels = array_values($chartYAxisLabels);
		
		return array(
			'subGroupsChart' => $subGroupsChart,
			'chartValues' => $chartValues,
			'chartConfigs' => $chartConfigs,
			'chartTemplates' => $chartTemplates,
			'chartYAxisLabels' => $chartYAxisLabels
		);
		
	}
	
	
	static public function getChartFilesWithExtraData($chartsEngine, $isStackedChart, $massiveData, & $chartInfo, $chartConfigs, $chartTemplates, $predefinedColorTemplates, $chartYAxisLabels, $chartValues, $subGroupsChart, $reportId, $dashletId, $reportModule, $chartsHttpQueryUrls, $isDetailedReport, $isGroupedReport, $isStoredReport) {
		
		$urlChart = array();
		$chartIndex=0;
		
		foreach($chartValues as $currentChartValues) {
			
			$currentChartInfo = $chartInfo[$chartIndex];
			$currentChartConfigs = $chartConfigs[$chartIndex];
			$currentChartTemplates = $chartTemplates[$chartIndex];
			$currentChartTypes = self::getChartTypes($currentChartInfo);
			$currentChartYAxisSides = self::getChartYAxisSides($currentChartInfo);
			
			if ( in_array($currentChartInfo['type'], array('pie', 'donut')) ) {
				if ($chartsEngine != 'nvd3')
					$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				else
					$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				$chartInfo[$chartIndex]['type'] = 'PieChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
				
			}
			
			if ($currentChartInfo['type'] == 'bar') {

				$hasSubCharts = (!empty($currentChartValues['subCharts']));
				
				if ($chartsEngine != 'nvd3')
					$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				else {
					if ($isDetailedReport && $hasSubCharts) {

						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraDataGroupsParams = array(
							'subCharts' => $currentChartValues['subCharts']
						);
						
						$minifiedSubChartsValues = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getMinifiedSubChartsTotalsArray", $extraDataGroupsParams);
						$currentChartValues['subCharts'] = ($minifiedSubChartsValues !== false ? $minifiedSubChartsValues : array());
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						
					}
					$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'BarChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'funnel') {
					
				if ($chartsEngine != 'nvd3')
					$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				else
					$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				$chartInfo[$chartIndex]['type'] = 'FunnelChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'stack') {

				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'StackChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'horizontal') {
	
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else	
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'HorizontalChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'line') {
	
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'LineChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}				
	
			if ($currentChartInfo['type'] == 'scatter') {
	
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);			
				}
				$chartInfo[$chartIndex]['type'] = 'ScatterChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'area') {
	
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'AreaChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}

			if ($currentChartInfo['type'] == 'parallel') {
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);
				}
				$chartInfo[$chartIndex]['type'] = 'ParallelChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
			
			if ($currentChartInfo['type'] == 'bubble') {
	
				if ($chartsEngine != 'nvd3') {
					if ($isStackedChart)
						$urlChart[] = self::generateCrmNativeStackedChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
					else
						$urlChart[] = self::generateCrmNativeNormalChartData($currentChartTypes[0], count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues['mainChart'], count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport);
				} else {
					if ($isStackedChart)
						$urlChart[] = self::generateNvd3StackedChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $massiveData, $isGroupedReport, $isStoredReport, $currentChartInfo['halfChart']);
					else
						$urlChart[] = self::generateNvd3NormalChartData($reportId, $dashletId, $currentChartTypes, $chartYAxisLabels[$chartIndex], $currentChartYAxisSides, $currentChartConfigs, $currentChartTemplates, $predefinedColorTemplates, count($urlChart), $reportModule, $currentChartInfo['label'], $subGroupsChart, $currentChartValues, count($subGroupsChart), (empty($chartsHttpQueryUrls)) ? null : $chartsHttpQueryUrls[count($urlChart)], $currentChartInfo['function'], $isStoredReport, $currentChartInfo['halfChart']);			
				}
				$chartInfo[$chartIndex]['type'] = 'BubbleChart';
				$chartInfo[$chartIndex]['subgroups'] = count($subGroupsChart);
				$chartSubGroupsValues[] = count($subGroupsChart);
					
			}
				
			$chartIndex++;
			
		}
		
		return array(
			'urlChart' => $urlChart,
			'chartSubGroupsValues' => $chartSubGroupsValues
		);
		
	}
	
	
	static public function getChartEngineLibraries($chartEngine, $isDashlet, $isPreview, $callback = null) {

		$chartEngineLibraries = array();
		$reportsLibrariesPath = 'modules/asol_Reports/include_basic/js';
		
		//Type;Check;Path
		switch ($chartEngine) {
	
			case "flash":
				$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/swfobject/swfobject.js";
				break;
				
			case "html5":
				$chartEngineLibraries[] = "JS;0;include/SugarCharts/Jit/js/Jit/jit.js";
				$chartEngineLibraries[] = "CSS;0;include/SugarCharts/Jit/css/base.css";
				$chartEngineLibraries[] = ($isDashlet) ? "JS;0;".$reportsLibrariesPath."/sugarCharts.min.js" : "JS;0;include/SugarCharts/Jit/js/sugarCharts.js";
				break;
	
			case "nvd3":
				$chartEngineLibraries[] = "CSS;0;".$reportsLibrariesPath."/nvd3/src/nv.d3.css";
				
				if ((!$isDashlet) && (!$isPreview)) {
					$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/innersvg.min.js";
				}
				
				$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/nvd3/lib/d3.v2.min.js";
				$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/nvd3/nv.d3.js";
		
				//$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/nvd3/lib/fisheye.js";
				$chartEngineLibraries[] = "JS;0;".$reportsLibrariesPath."/nvd3/src/utils.js";
				break;
				
			default:
				break;				
		}
		
		$chartFilesHtml = '';
		
		foreach ($chartEngineLibraries as $chartEngineLibrary) {
			$library = explode(";", $chartEngineLibrary);
			if ($library[0] == 'JS') {
				if ($library[1] === '0') {
					$chartFilesHtml .= '<script type="text/javascript" src="'.$library[2].'"></script>';
				} else {
					$chartFilesHtml .= '<script> if (typeof '.$library[1].' === "undefined") { $LAB.script("'.$library[2].'")'.(isset($library[3]) ? '.wait().script("'.$library[3].'")' : '').(isset($library[4]) ? '.wait().script("'.$library[4].'")' : '').'.wait('.($callback !== null ? $callback : '').'); } else { $LAB.script("'.$library[3].'")'.(isset($library[4]) ? '.wait().script("'.$library[4].'")' : '').'.wait('.($callback !== null ? $callback : '').'); } </script>';
				}
			} else if ($library[0] == 'CSS') {
				$chartFilesHtml .= '<link rel="stylesheet" type="text/css" href="'.$library[2].'">';
			}
		}
		
		return $chartFilesHtml;
		
	}
	
	static public function getCrmChartHtml($reportId, $chartEngine, $returnData, $urlChart, $chartInfo, $chartsReferences, $current_language, $theme, $isStoredReport, $isDashlet, $dashletId) {
		
		global $sugar_config;
		
		$fixedReportId = str_replace("-", "", $reportId);
		$fixedDashletId = str_replace("-", "", $dashletId);
		$asolReportsResizableNVD3Charts = ((isset($sugar_config['asolReportsResizableNVD3Charts'])) && ($sugar_config['asolReportsResizableNVD3Charts']));
		
		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		if (($isStoredReport) && ($returnData))
			$tmpFilesDir .= 'storedReports/';
			
		$chartHtml = "";
		
		if ($chartEngine == "flash") { //FLASH
			
			foreach ($urlChart as $key=>$value) {
				
				$dataRef = $chartInfo[$key]['chartReference'];
				if (isset($chartsReferences) && !in_array($dataRef, $chartsReferences)) {
					continue;
				}

				$chartHtml .= '
					var chartSubGroupsValues = document.getElementById("chartSubGroupsValues").value;
					var groupsCountValues = chartSubGroupsValues.split(",");	
				
					var flashvars = {};
					flashvars.inputFile = "'.$value.'";
					flashvars.swfLocation = "include/SugarCharts/swf/";
				';
	
				if (file_exists("themes/default/images/sugarColors.xml")) 
					$chartHtml .= 'flashvars.inputColorScheme = "themes/default/images/sugarColors.xml";';
				else 
					$chartHtml .= 'flashvars.inputColorScheme = "themes/'.$theme.'/images/sugarColors.xml";';
				
				$chartHtml .= 'flashvars.c = "1";';
	
				if (file_exists("cache/themes/Sugar/css/chart.css")) 
					$chartHtml .= 'flashvars.inputStyleSheet = "themes/default/css/chart.css";';
				else 
					$chartHtml .= 'flashvars.inputStyleSheet = "themes/'.$theme.'/css/chart.css";';
			
				$chartHtml .= 'flashvars.inputLanguage = "modules/asol_Reports/language/chart_strings.'.$current_language.'.lang.xml";';
			
				
				$chartHtml .= 'var defaultWidth = 600;';
				$chartHtml .= 'var defaultHeight = 450;';

				if ($isDashlet) {
					
					$chartHtml .= 'defaultWidth = "100%";';
					
				} else {

					if ($chartInfo[$key]['type'] == 'bar')
	                	$chartHtml .= 'defaultWidth = (groupsCountValues['.$key.'] > defaultWidth/100) ? defaultWidth + ((( groupsCountValues['.$key.'] ) -(defaultWidth/100))*65) : defaultWidth;';
					
	                if ($chartInfo[$key]['type'] == 'line')
	                	$chartHtml .= 'defaultWidth = (groupsCountValues['.$key.'] > defaultWidth/100) ? defaultWidth + ((( groupsCountValues['.$key.'] ) -(defaultWidth/100))*85) : defaultWidth;';
	                	
					if ($chartInfo[$key]['type'] == 'stack')
	                	$chartHtml .= 'defaultWidth = (groupsCountValues['.$key.'] > defaultWidth/100) ? defaultWidth + ((( groupsCountValues['.$key.'] ) -(defaultWidth/100))*85) : defaultWidth;';
					
					if ($chartInfo[$key]['type'] == 'horizontal')
	                	$chartHtml .= 'defaultHeight = (groupsCountValues['.$key.'] > defaultHeight/100) ? defaultHeight + ((( groupsCountValues['.$key.'] ) -(defaultHeight/100))*25) : defaultHeight;';                                                         
	                	
				}

		        $chartHtml .= 'flashvars.myWidth = defaultWidth;';
		        $chartHtml .= 'flashvars.myHeight = defaultHeight;';
			
				$chartHtml .= '
					var params = {};
					params.quality = "high";
					params.wmode = "transparent";
					params.menu = "false";
					params.allowscriptaccess = "always";
					var attributes = {};
				';
		
				$chartHtml .= 'swfobject.embedSWF("include/SugarCharts/swf/ASOLchart.swf", "ASOLflash_'.$fixedReportId.'_'.$key.'", defaultWidth, defaultHeight, "10.0.0", "", flashvars, params, attributes);';
						
			}
			
			$chartArray = array(
				"chartHtml" => $chartHtml
			);
			
		} else if ($chartEngine == "html5") { //HTML5
	
			$html5Chart = array();
				
			foreach ($urlChart as $key=>$value) {
				
				$dataRef = $chartInfo[$key]['chartReference'];
				if (isset($chartsReferences) && !in_array($dataRef, $chartsReferences)) {
					if ($returnData) {
						$html5Chart[] = null;
					}
					continue;
				}
				
				$fileIdArray = explode("/", $value);
				$fileIdArray2 = explode(".", $fileIdArray[count($fileIdArray)-1]);
				$fileId = $fileIdArray2[0];
		
				$chartType = ($chartInfo[$key]['type']== 'PieChart') ? "pieChart" : "barChart";
				$chartParamType = ($chartInfo[$key]['type'] == 'PieChart') ? "pieType" : "barType";
				$chartComplex = (in_array($chartInfo[$key]['type'], array('StackChart', 'HorizontalChart', 'LineChart'))) ? "stacked" : "basic";
				
				if ($chartInfo[$key]['type'] == 'HorizontalChart')
					$chartOrientation = 'chartConfig["orientation"] = "horizontal";';
				else if ($chartInfo[$key]['type'] == 'StackChart')
					$chartOrientation = 'chartConfig["orientation"] = "vertical";';
				else
					$chartOrientation = '';
		
					
				if ($returnData) {
					
					if ($chartInfo[$key]['type'] == 'PieChart')
						$chartTypeHtml5 = "pie chart";
					if ($chartInfo[$key]['type'] == 'BarChart')
						$chartTypeHtml5 = "bar chart";
					if ($chartInfo[$key]['type'] == 'StackChart')
						$chartTypeHtml5 = "stacked group by chart";
					if ($chartInfo[$key]['type'] == 'HorizontalChart')
						$chartTypeHtml5 = "horizontal group by chart";
					if ($chartInfo[$key]['type'] == 'LineChart')
						$chartTypeHtml5 = "line chart";
					if ($chartInfo[$key]['type'] == 'FunnelChart')
						$chartTypeHtml5 = "funnel chart 3D";	
							
					$chart = new ReportsDashletChart($fileId);
			  
					$w = 600;
					$h = 400;
	
					if ($isDashlet) {
	
						$w = '100%';
						
					} else {
		        		
						if ($chartInfo[$key]['type'] == 'BarChart')
				        	$w = ($chartInfo[$key]['subgroups'] > $w/100) ? $w + ((($chartInfo[$key]['subgroups']) -($w/100))*50) : $w;
				        
				        if ($chartInfo[$key]['type'] == 'LineChart')
				        	$w = ($chartInfo[$key]['subgroups'] > $w/100) ? $w + ((($chartInfo[$key]['subgroups']) -($w/100))*50) : $w;
				        	
				        if ($chartInfo[$key]['type'] == 'StackChart')
				        	$w = ($chartInfo[$key]['subgroups'] > $w/100) ? $w + ((($chartInfo[$key]['subgroups']) -($w/100))*50) : $w;
				        	
				        if ($chartInfo[$key]['type'] == 'HorizontalChart')
				        	$h = ($chartInfo[$key]['subgroups'] > $h/100) ? $h + ((($chartInfo[$key]['subgroups']) -($h/100))*50) : $h;
	
				        $w .= 'px';
				        	
					}
					
					        
					$html5Chart[] = array(
						"html" => $chart->display("", "", $value, $chartTypeHtml5, "100%", $h),
						"id" => $fileId,
						"dimensions" => array(
							"width" => $w,
							"height" => $h
						)
					);
						
				}
	
				
				$chartHtml .= '
				function generateHtml5Chart_'.$fixedReportId.'_'.$key.'() {
					var css = new Array();
					var chartConfig = new Array();
					css["gridLineColor"] = "#cccccc";
					css["font-family"] = "Arial";
					css["color"] = "#000000";
					'.$chartOrientation.'
					chartConfig["'.$chartParamType.'"] = "'.$chartComplex.'";
					chartConfig["tip"] = "name";
					chartConfig["chartType"] = "'.$chartType.'";
					chartConfig["imageExportType"] = "png";
					loadCustomChartForReports = function(){
						loadSugarChart("'.$fileId.'","'.$tmpFilesDir.$fileId.'.js",css,chartConfig);
					};
					loadCustomChartForReports();
				}
				
				if(typeof window.SUGAR.util.doWhen == \'function\') {
				
					SUGAR.util.doWhen("((SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts) || SUGAR.loadChart || document.getElementById(\'showHideChartButton\') != null) && typeof(loadSugarChart) != undefined",
						function(){
							generateHtml5Chart_'.$fixedReportId.'_'.$key.'();
						}
					);
					
				} else {
				
					$(document).ready(function() {
						generateHtml5Chart_'.$fixedReportId.'_'.$key.'();
					});
					
				}';
					
			}
			
			$chartArray = array(
				"chartHtml" => $chartHtml,
				"returnedCharts" => $html5Chart
			);
			
		} else if ($chartEngine == "nvd3") { //NVD3
			$nvd3Chart = array();
				
			foreach ($urlChart as $key=>$value) {
	
				$dataRef = $chartInfo[$key]['chartReference'];
				if (isset($chartsReferences) && !in_array($dataRef, $chartsReferences)) {
					if ($returnData) {
						$nvd3Chart[] = null;
					}
					continue;
				}
				
				if ($returnData) {
					
					$w = 600;
					if($chartInfo[$key]['halfChart'] != 'yes') {
						$h = 400;
					} else {
						$h = 260;
					}
	
					if ($isDashlet) {
	
						$w = '100%';
						
					} else {
		        		
						if (in_array($chartInfo[$key]['type'], array('BarChart', 'LineChart', 'ScatterChart', 'StackChart', 'AreaChart', 'BubbleChart', 'ParallelChart')))
				        	$w = ($chartInfo[$key]['subgroups'] > $w/100) ? $w + ((($chartInfo[$key]['subgroups']) -($w/100))*25) : $w;
				        	
				        if ($chartInfo[$key]['type'] == 'HorizontalChart')
				        	$h = ($chartInfo[$key]['subgroups'] > $h/100) ? $h + ((($chartInfo[$key]['subgroups']) -($h/100))*20) : $h;
				        	
				        $w .= 'px';
				        	
					}
					
					        
					$nvd3Chart[] = array(
						"html" => "<h4 id='ASOLnvd3Title_".$fixedReportId."_".$key."'></h4>",
						"dimensions" => array(
							"width" => $w,
							"height" => $h
						)
					);
						
				}

				
				$chartHtml .= '
				
					function generateNvd3Chart_'.$fixedReportId.'_'.$key.'() {
						'.file_get_contents($value).'
					}
				
					try {
						
						if(typeof window.SUGAR.util.doWhen == \'function\') {

							SUGAR.util.doWhen(function(){ return (typeof $ != \'undefined\')}, function(){
								generateNvd3Chart_'.$fixedReportId.'_'.$key.'();
							});
		
						} else {
						
							$(document).ready(function() {
								generateNvd3Chart_'.$fixedReportId.'_'.$key.'();
							});
							
						}';
													
						
				if ((!$isDashlet) && ($asolReportsResizableNVD3Charts))
				    $chartHtml .= '$("#ASOLnvd3_'.$fixedReportId.'_'.$key.'").resizable({ alsoResize: "#ASOLsvg_'.$fixedReportId.'_'.$key.'" });';
					
				$chartHtml .= '
					} catch(err) { console.log("Cannot Load AlineaSolReport ['.$reportId.']"); }
				';
					
			}
			
			$chartArray = array(
				"chartHtml" => $chartHtml,
				"returnedCharts" => $nvd3Chart
			);
			
		}
	
		return $chartArray;
		
	}
	
	//***********************//
	//***CRM Native Charts***//
	//***********************//
	
	static public function generateCrmNativeNormalChartData($chartType, $prefixChart, $reportModule, $chartTitle, $chartLegends, $chartValues, $numGroups, $overridedName = null, $chartFunction = '0', $isStoredReport = false){
	
		if (in_array($chartType, array('pie', 'bar', 'funnel'))) {
		
			global $sugar_config, $mod_strings;
		
			$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
			
			if ($isStoredReport)
				$tmpFilesDir .= "storedReports/";
				
			$currentDir = getcwd()."/";
			
			$prefixChart = str_replace(" ", "_", $prefixChart);
			$xmlName = $prefixChart."_".dechex(time()).dechex(rand(0,999999)).".xml";
			
			$xmlCompletePath = (empty($overridedName)) ? $tmpFilesDir.$xmlName : $overridedName;
			
			$descriptor = fopen($xmlCompletePath, "w");
			
			$avoidFormatting = (strpos($chartFunction, "COUNT") !== false);
			
			$chartSubTitle = (max($chartValues) >= 1000000 ? translate('LBL_REPORT_CHARTS_VALUE_SIZE_M', 'asol_Reports') : (max($chartValues) >= 1000 ? translate('LBL_REPORT_CHARTS_VALUE_SIZE_K', 'asol_Reports') : ''));
			switch ($chartType) {
				case "pie":
					$xmlChartType = "pie chart";
					break;
				case "bar":
					$xmlChartType = "bar chart";
					break;
				case "funnel":
					$xmlChartType = "funnel chart 3D";
					break;
			}
			
			
			
			$xml_sugarcharts = new SimpleXMLElement('<sugarcharts></sugarcharts>');
			$xml_sugarcharts->addAttribute('version', '1.0');
			
			$xml_sugarcharts->properties->title = $chartTitle;
			$xml_sugarcharts->properties->subtitle = $chartSubTitle;
			$xml_sugarcharts->properties->type = $xmlChartType;
			$xml_sugarcharts->properties->legend = "on";
			$xml_sugarcharts->properties->labels = "value";

			$xml_sugarcharts->data->group = array();
				
			foreach ($chartLegends as $key=>$chartLegend) {

				if (max($chartValues) >= 1000000) {
		
					if ($chartType == "bar")
						$value = (($chartValues[$key]) == 0) ? 0.000001 : ($chartValues[$key]/1000000);
					else if ($chartType == "pie")
						$value = ($chartValues[$key]/1000000);
					else if ($chartType == "funnel")
						$value = ($chartValues[$key]/1000000);
						
					$label = ($avoidFormatting === false) ? format_number($chartValues[$key]/1000000)."M" : ($chartValues[$key]/1000000)."M";
				
				} else if (max($chartValues) >= 1000){
		
					if ($chartType == "bar")
						$value = (($chartValues[$key]) == 0) ? 0.000001 : ($chartValues[$key]/1000);
					else if ($chartType == "pie")
						$value = ($chartValues[$key]/1000);
					else if ($chartType == "funnel")
						$value = ($chartValues[$key]/1000);
						
					$label = ($avoidFormatting === false) ? format_number($chartValues[$key]/1000)."K" : ($chartValues[$key]/1000)."K";
				
				} else {
		
					if ($chartType == "bar")
						$value = (($chartValues[$key]) == 0) ? 0.000001 : $chartValues[$key];
					else if ($chartType == "pie")
						$value = $chartValues[$key];
					else if ($chartType == "funnel")
						$value = $chartValues[$key];
						
					$label = ($avoidFormatting === false) ? format_number(floor($chartValues[$key] * 100) / 100) : (floor($chartValues[$key] * 100) / 100);
				
				}

				
				$xml_sugarcharts->data->group[$key]->title = $chartLegend;
				$xml_sugarcharts->data->group[$key]->value = $value;
				$xml_sugarcharts->data->group[$key]->label = $label;
				//$xml_sugarcharts->data->group[$key]->link => "index.php?module=".$reportModule."&action=index&query=true&searchFormTab=advanced_search";
				$xml_sugarcharts->data->group[$key]->subgroups = "";

			}
			

			if ($chartType == "bar") {
				
				if (max($chartValues) >= 1000000)
					$truncatedMaxValue = ceil((max($chartValues))/1000000)+2;
				else if (max($chartValues) >= 1000)
					$truncatedMaxValue = ceil((max($chartValues))/1000)+2;
				else
					$truncatedMaxValue = ceil(max($chartValues))+2;
				
				$roundedDigits = strlen((string)(ceil($truncatedMaxValue)))-1;
				$yMax = round($truncatedMaxValue, $roundedDigits*(-1));
				$yMax = ($yMax < $truncatedMaxValue) ? $yMax+((pow(10, $roundedDigits))/2) : $yMax; 
				
				$yStep = ceil($yMax/5);
				
				while($yMax >= $truncatedMaxValue)
					$yMax -= $yStep;
				$yMax += $yStep;
				
			} else if (in_array($chartType, array("pie", "funnel"))) {
				
				if (max($chartValues) >= 1000000)
					$yMax = ceil((max($chartValues))/1000000)+2;
				else if (max($chartValues) >= 1000)
					$yMax = ceil((max($chartValues))/1000)+2;
				else
					$yMax = max($chartValues)+1;
				$yStep = '';
			
			}
			
			$xml_sugarcharts->yAxis->yMin = 0;
			$xml_sugarcharts->yAxis->yMax = $yMax;
			$xml_sugarcharts->yAxis->yStep = $yStep;
			$xml_sugarcharts->yAxis->yLog = 1;
			

			$xml = chr(255).chr(254).mb_convert_encoding($xml_sugarcharts->asXML(), 'UTF-16LE', 'UTF-8');

			fputs($descriptor, $xml);
			fclose($descriptor);
			
			return $xmlCompletePath;
			
		} else if (in_array($chartType, array('stack', 'horizontal', 'line'))) {
			
			$dataGroups = array();
			foreach ($chartLegends as $key=>$chartLegend) {

				$dataGroups[] = array(
		            'totalValue' => $chartValues[$key],
		            'values' => array(
		             	0 => array(
							'group' => $chartTitle,
							'value' => $chartValues[$key]
		                )
					)		
				);
				
			}

			return self::generateCrmNativeStackedChartData($chartType, $prefixChart, $reportModule, $chartTitle, $chartLegends, $dataGroups, $numGroups, $overridedName, $chartFunction, $isStoredReport);
			
		}
		
	}
	
	static public function generateCrmNativeStackedChartData($chartType, $prefixChart, $reportModule, $chartTitle, $chartLegends, $chartValues, $numGroups, $overridedName = null, $chartFunction = '0', $isStoredReport = false){
		
		global $sugar_config, $mod_strings;
	
		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		
		if ($isStoredReport)
			$tmpFilesDir .= "storedReports/";
			
		$currentDir = getcwd()."/";
	
		
		$prefixChart = str_replace(" ", "_", $prefixChart);
		$xmlName = $prefixChart."_".dechex(time()).dechex(rand(0,999999)).".xml";
		
		$xmlCompletePath = (empty($overridedName)) ? $tmpFilesDir.$xmlName : $overridedName;
		
		$descriptor = fopen($xmlCompletePath, "w");
		
		$subTotalsArray = Array();
		
		$numGroups = 0;
		$maxGroupKey = null;
		$groups = Array();
		foreach ($chartLegends as $key=>$chartLegend) {		
			$subTotalsArray[] = $chartValues[$key]['totalValue'];
			
			//Generate here $groups array 
			foreach ($chartValues[$key]['values'] as $aValue) {
				if (!(in_array($aValue['group'], $groups)))
					$groups[] = $aValue['group'];
			}
			
		}
		
		$avoidFormatting = (strpos($chartFunction, "COUNT") !== false);
		
		$chartSubTitle = (max($subTotalsArray) >= 1000000 ? translate('LBL_REPORT_CHARTS_VALUE_SIZE_M', 'asol_Reports') : (max($subTotalsArray) >= 1000 ? translate('LBL_REPORT_CHARTS_VALUE_SIZE_K', 'asol_Reports') : ''));
		switch ($chartType) {
			case "stack":
				$xmlChartType = "stacked group by chart";
				break;
			case "horizontal":
				$xmlChartType = "horizontal group by chart";
				break;
			case "line":
				$xmlChartType = "line chart";
				break;
		}
		
		
		
		$xml_sugarcharts = new SimpleXMLElement('<sugarcharts></sugarcharts>');
		$xml_sugarcharts->addAttribute('version', '1.0');

		$xml_sugarcharts->properties->title = $chartTitle;
		$xml_sugarcharts->properties->subtitle = $chartSubTitle;
		$xml_sugarcharts->properties->type = $xmlChartType;
		$xml_sugarcharts->properties->legend = "on";
		$xml_sugarcharts->properties->labels = "value";
		
		$xml_sugarcharts->data->group = array();
		
		foreach ($chartLegends as $key=>$chartLegend) {
			
			if (max($subTotalsArray) >= 1000000){
				$value = ($chartValues[$key]['totalValue']/1000000);
				$label = ($avoidFormatting === false) ? format_number($chartValues[$key]['totalValue']/1000000)."M" : ($chartValues[$key]['totalValue']/1000000)."M";
			} else if (max($subTotalsArray) >= 1000){
				$value = ($chartValues[$key]['totalValue']/1000);
				$label = ($avoidFormatting === false) ? format_number($chartValues[$key]['totalValue']/1000)."K" : ($chartValues[$key]['totalValue']/1000)."K";
			} else {
				$value = $chartValues[$key]['totalValue'];
				$label = ($avoidFormatting === false) ? format_number(floor($chartValues[$key]['totalValue'] * 100) / 100) : (floor($chartValues[$key]['totalValue'] * 100) / 100);
			}

			//Generate empty groups
			$groupValues = Array();
			
			foreach ($groups as $keyG=>$group) {
				
				$currentValues = null;
				foreach ($chartValues[$key]['values'] as $groupValue) {
					if ($groupValue['group'] == $group) {
						$currentValues = $groupValue;
						break;
					}
				}
			
				$groupValues[$keyG] = ($currentValues != null ? $currentValues : array('group' => $group, 'value' => '0'));
					
			}
			
			$subGroups = array();

			$xml_sugarcharts->data->group[$key]->title = $chartLegend;
			$xml_sugarcharts->data->group[$key]->value = $value;
			$xml_sugarcharts->data->group[$key]->label = $label;
			$xml_sugarcharts->data->group[$key]->subgroups->group = array();
			
			foreach ($groupValues as $subKey => $groupValue) {
				
				if (max($subTotalsArray) >= 1000000){
					$subValue = ($groupValue['value']/1000000);
					$subLabel = ($avoidFormatting === false) ? format_number($groupValue['value']/1000000)."M" : ($groupValue['value']/1000000)."M";
				} else if (max($subTotalsArray) >= 1000){
					$subValue = ($groupValue['value']/1000);
					$subLabel = ($avoidFormatting === false) ? format_number($groupValue['value']/1000)."K" : ($groupValue['value']/1000)."K";
				} else {
					$subValue = $groupValue['value'];
					$subLabel = ($avoidFormatting === false) ? format_number(floor($groupValue['value'] * 100) / 100) : (floor($groupValue['value'] * 100) / 100);
				}
				
				$xml_sugarcharts->data->group[$key]->subgroups->group[$subKey]->title = $groupValue['group'];
				$xml_sugarcharts->data->group[$key]->subgroups->group[$subKey]->value = $subValue;
				$xml_sugarcharts->data->group[$key]->subgroups->group[$subKey]->label = $subLabel;
				//$xml_sugarcharts->data->group[$key]->subgroups->group[$subKey]->link = "index.php?module=".$reportModule."&action=index&query=true&searchFormTab=advanced_search";
						
			}

		}
		

		$truncatedMaxValue = (max($subTotalsArray) >= 1000000 ? ceil((max($subTotalsArray))/1000000)+2 : (max($subTotalsArray) >= 1000 ? ceil((max($subTotalsArray))/1000)+2 : ceil(max($subTotalsArray))+2));
		$roundedDigits = strlen((string)(ceil($truncatedMaxValue)))-1;
		$yMax = round($truncatedMaxValue, $roundedDigits*(-1));
		$yMax = ($yMax < $truncatedMaxValue) ? $yMax+((pow(10, $roundedDigits))/2) : $yMax; 
		$yStep = ceil($yMax/5);
		
		while($yMax >= $truncatedMaxValue)
			$yMax -= $yStep;
		$yMax += $yStep;
	
		
		$xml_sugarcharts->yAxis->yMin = 0;
		$xml_sugarcharts->yAxis->yMax = $yMax;
		$xml_sugarcharts->yAxis->yStep = $yStep;
		$xml_sugarcharts->yAxis->yLog = 1;
		
		
		$xml = chr(255).chr(254).mb_convert_encoding($xml_sugarcharts->asXML(), 'UTF-16LE', 'UTF-8');

		fputs($descriptor, $xml);
		fclose($descriptor);
		
		return $xmlCompletePath;
		
	}
	
	
	
	//***********************//
	//******NVD3 Charts******//
	//***********************//
	static public function generateNvd3NormalChartData($reportId, $dashletId, $chartTypes, $chartYAxisLabels, $chartYAxisSides, $chartConfigs, $chartTemplates, $predefinedColorTemplates, $prefixChart, $reportModule, $chartTitle, $chartLegends, $chartValues, $numGroups, $overridedName = null, $chartFunction = '0', $isStoredReport = false, $isHalfChart = 'no'){
		
		global $sugar_config, $mod_strings;
		
		$maxChartValue = self::getNvd3NormalMaxSubTotal($chartValues, $chartTypes[0]);
		$hasSubCharts = (!empty($chartValues['subCharts'])); 
		
		//**************************//
		//***Variables Definition***//
		//**************************//
		$tmpFilesDir = ($isStoredReport) ? "modules/asol_Reports/tmpReportFiles/storedReports/" : "modules/asol_Reports/tmpReportFiles/";	
		$indexKey = str_replace("-", "", $reportId)."_".$prefixChart;
		$prefixChart = str_replace(" ", "_", $prefixChart);
		$jsName = $prefixChart."_".dechex(time()).dechex(rand(0,999999)).".js";
		$jsCompletePath = (empty($overridedName)) ? $tmpFilesDir.$jsName : $overridedName;
		//**************************//
		//***Variables Definition***//
		//**************************//
		
		
		$descriptor = fopen($jsCompletePath, "w");
		
		//***********************************//
		//***Generate JavaScript CodeLines***//
		//***********************************//
		$avoidFormatting = (strpos($chartFunction, "COUNT") !== false);
		
		$chartD3Format = self::getNvd3ChartNumberFormat($maxChartValue, $avoidFormatting);
		$chartSubTitle = self::getNvd3ChartSubtitle($maxChartValue);
		
		$nvd3ColorPalete = self::getNvd3ColorPalete($indexKey, $chartConfigs, $chartTemplates, $predefinedColorTemplates);
		$nvd3DataLabelsJs = self::getNvd3DataLabelsJs($indexKey, $chartLegends);
		
		if (!$hasSubCharts) {
			
			$chartType = $chartTypes[0];
			
			if ($chartType != 'parallel') {
				$nvd3ChartDataJs = self::getNvd3NormalDataJs($chartTypes[0], $chartYAxisLabels[0], $indexKey, $nvd3ColorPalete, $chartLegends, $chartValues, $maxChartValue);
			} else {
				//nvd3DataLabelJs must be overwrtie to set the new labels for parallel chart
				$nvd3DataLabelsJs = self::getNvd3DataLabelsJs($indexKey, $chartYAxisLabels[0]);
				$nvd3ChartDataJs = self::getNvd3NormalDataJs($chartType, $chartYAxisLabels[0], $indexKey, $nvd3ColorPalete, $chartLegends, $chartValues, $maxChartValue);
			}
			
		} else {
			
			$mainChart = $chartValues['mainChart'];
			$dataGroups[0][$chartYAxisLabels[0]] = array();
			
			foreach ($chartLegends as $keyLegend=>$legendVal) {
				$dataGroups[0][$chartYAxisLabels[0]][$legendVal] = $mainChart[$keyLegend];
			}
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraDataGroupsParams = array(
				'dataGroups' => $dataGroups,
				'subCharts' => $chartValues['subCharts'],
				'chartYAxisLabels' => $chartYAxisLabels,
				'chartLegends' => $chartLegends,
			);

			$dataGroups = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsDataGrouping", $extraDataGroupsParams);
			
			$extraMultiChartParams = array(
				'indexKey' => $indexKey,
				'chartTypes' => $chartTypes,
				'chartYAxisLabel' => $chartYAxisLabels[0],
				'chartYAxisSides' => $chartYAxisSides,
				'chartLegends' => $chartLegends,
				'nvd3ColorPalete' => $nvd3ColorPalete,
				'dataGroups' => $dataGroups,
				'maxSubTotals' => $maxChartValue,
				'massiveData' => false
			);
				
			$nvd3ChartDataJs = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getNvd3MultiDataJs", $extraMultiChartParams);
			$chartType = 'multiple';	
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		}

		$nvd3ModelChartJs = self::getNvd3ModelChartJs($chartType, $indexKey);
		
		if ($hasSubCharts) {
			$nvd3ChartFormatJs = '';
			$nvd3AxisFormatJs = self::getNvd3AxisFormatJs($indexKey, true, true, $chartD3Format, $maxChartValue);
		} else {
			$nvd3ChartFormatJs = (in_array($chartType, array('stack', 'horizontal', 'line', 'scatter', 'area', 'bubble'))) ? '' : self::getNvd3SingleChartFormatJs($maxChartValue, $chartD3Format);
			$nvd3AxisFormatJs = (in_array($chartType, array('bar', 'stack', 'horizontal', 'line', 'scatter', 'area', 'bubble'))) ? self::getNvd3AxisFormatJs($indexKey, false, true, $chartD3Format, $maxChartValue) : '';
		}
		
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'indexKey' => $indexKey,
			'chartType' => $chartType,
			'isHalfChart' => $isHalfChart
		);
		
		$nvd3HalfChartJs = asol_ReportsUtils::managePremiumFeature("reportHalfCharts", "reportFunctions.php", "getNvd3HalfChartJs", $extraParams);
		$nvd3HalfChartJs = ($nvd3HalfChartJs !== false ? $nvd3HalfChartJs : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//

		$generatedNvd3ChartJs = self::generateNvd3ChartJs($indexKey, 800);
		
		$generatedNvd3TitleSubtitleJs = self::generateNvd3TitleSubtitleJs($indexKey, $chartTitle, $chartSubTitle);
		//***********************************//
		//***Generate JavaScript CodeLines***//
		//***********************************//
		
		if ($chartType != 'parallel') {
			$jsData = "
				try {
				
					".$nvd3DataLabelsJs."
					".$nvd3ChartDataJs."
					
					nvReports.addGraph(function() {
				
						".$nvd3ModelChartJs."
						".$nvd3ChartFormatJs."
						".$nvd3HalfChartJs."
						".$nvd3AxisFormatJs."		
						".$generatedNvd3ChartJs."
					
					});
					
					".$generatedNvd3TitleSubtitleJs."
			
				} catch(e) { 
					console.error(e); 
				}";
		} else {
			
			$jsData = "
				try {
					".$nvd3DataLabelsJs."
					".$nvd3ChartDataJs."
							
					nvReports.addGraph(function() {
						".$nvd3ModelChartJs."
						".$generatedNvd3ChartJs."
					});
								
					".$generatedNvd3TitleSubtitleJs."
				} catch(e) {
					console.error(e); 			
			}";
		}
		
		fputs($descriptor, $jsData);
		fclose($descriptor);
		
		return $jsCompletePath;
		
	}
	
	static public function generateNvd3StackedChartData($reportId, $dashletId, $chartTypes, $chartYAxisLabels, $chartYAxisSides, $chartConfigs, $chartTemplates, $predefinedColorTemplates, $prefixChart, $reportModule, $chartTitle, $chartLegends, $chartValues, $numGroups, $overridedName = null, $chartFunction = '0', $massiveData = false, $isGroupedReport = true, $isStoredReport = false, $isHalfChart = 'no'){
		
		global $sugar_config, $mod_strings;
		
		$hasSubCharts = (!empty($chartValues['subCharts']));
		
		$dataGroupsZ = null;
		
		//**************************//
		//***Variables Definition***//
		//**************************//
		$tmpFilesDir = ($isStoredReport) ? "modules/asol_Reports/tmpReportFiles/storedReports/" : "modules/asol_Reports/tmpReportFiles/";
		$indexKey = str_replace("-", "", $reportId)."_".$prefixChart;
		$prefixChart = str_replace(" ", "_", $prefixChart);
		$jsName = $prefixChart."_".dechex(time()).dechex(rand(0,999999)).".js";
		$jsCompletePath = (empty($overridedName)) ? $tmpFilesDir.$jsName : $overridedName;
		//**************************//
		//***Variables Definition***//
		//**************************//
		
		
		$descriptor = fopen($jsCompletePath, "w");
		
		//***********************************//
		//***Generate JavaScript CodeLines***//
		//***********************************//
		$avoidFormatting = (strpos($chartFunction, "COUNT") !== false);
		$isCumulativeChart = in_array($chartTypes[0], array('stack', 'horizontal', 'area'));
		
		$maxSubTotal = self::getNvd3StackedMaxSubTotal($chartValues, $isCumulativeChart);
		
		$chartD3Format = self::getNvd3ChartNumberFormat($maxSubTotal, $avoidFormatting);
		$chartSubTitle = self::getNvd3ChartSubtitle($maxSubTotal);
		$dataGroups = self::generateNvd3DataGroupingValues($chartLegends, $chartYAxisLabels, $chartValues, $isGroupedReport, $massiveData);
		$nvd3ColorPalete = self::getNvd3ColorPalete($indexKey, $chartConfigs, $chartTemplates, $predefinedColorTemplates);
		$nvd3DataLabelsJs = self::getNvd3DataLabelsJs($indexKey, $chartLegends);
		
		if (!$hasSubCharts) {
			
			$chartType = $chartTypes[0];
			
			$dataGroupsZ = null;
			if (!empty($chartValues['zChart'])) {
				$dataGroupsZ = self::generateNvd3DataGroupingValues($chartLegends, $chartYAxisLabels, array( 'mainChart' => $chartValues['zChart'] ), $isGroupedReport, $massiveData);
			}
			
			if($chartType != 'parallel') {
				$nvd3ChartDataJs = self::getNvd3StackedDataJs($indexKey, $chartLegends, $chartYAxisLabels[0], $nvd3ColorPalete, $dataGroups, $dataGroupsZ, $maxSubTotal, $massiveData);	
			} else {
				$nvd3DataLabelsJs = self::getNvd3DataLabelsJs($indexKey, $chartYAxisLabels[0]);
				$nvd3ChartDataJs = self::getNvd3StackedDataParallelJs($indexKey, $chartLegends, $chartYAxisLabels[0], $nvd3ColorPalete, $chartValues, $dataGroupsZ, $maxSubTotal, $massiveData);
			}		
			
		} else {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'indexKey' => $indexKey,
				'chartTypes' => $chartTypes,
				'chartYAxisLabel' => $chartYAxisLabels[0],
				'chartYAxisSides' => $chartYAxisSides,
				'chartLegends' => $chartLegends,
				'nvd3ColorPalete' => $nvd3ColorPalete,
				'dataGroups' => $dataGroups,
				'maxSubTotals' => $maxSubTotal,
				'massiveData' => $massiveData
			);

			$nvd3ChartDataJs = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getNvd3MultiDataJs", $extraParams);
			$chartType = 'multiple';	
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

		}

		$nvd3ModelChartJs = self::getNvd3ModelChartJs($chartType, $indexKey);
		$nvd3AxisFormatJs = self::getNvd3AxisFormatJs($indexKey, $hasSubCharts, true, $chartD3Format, $maxSubTotal);
		$generatedNvd3ChartJs = self::generateNvd3ChartJs($indexKey, 500);
		
		$generatedNvd3TitleSubtitleJs = self::generateNvd3TitleSubtitleJs($indexKey, $chartTitle, $chartSubTitle);
		
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'indexKey' => $indexKey,
			'chartType' => $chartType,
			'isHalfChart' => $isHalfChart
		);
		
		$nvd3HalfChartJs = asol_ReportsUtils::managePremiumFeature("reportHalfCharts", "reportFunctions.php", "getNvd3HalfChartJs", $extraParams);
		$nvd3HalfChartJs = ($nvd3HalfChartJs !== false ? $nvd3HalfChartJs : '');
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		//***********************************//
		//***Generate JavaScript CodeLines***//
		//***********************************//
		
		if($chartType != 'parallel')
		{
			$jsData = "
				try {
				
					".$nvd3DataLabelsJs."
					".$nvd3ChartDataJs."
					
					nvReports.addGraph(function() {
					
						".$nvd3ModelChartJs."
						".$nvd3HalfChartJs."
						".$nvd3AxisFormatJs."
						".$generatedNvd3ChartJs."
						
					});
					
					".$generatedNvd3TitleSubtitleJs."
					
				} catch(e) { 
					console.error(e); 
				}
			";
		} else {
		
			$jsData = "
					try {
						".$nvd3DataLabelsJs."
						".$nvd3ChartDataJs."
								
						nvReports.addGraph(function() {
							".$nvd3ModelChartJs."
							".$generatedNvd3ChartJs."
						});
									
						".$generatedNvd3TitleSubtitleJs."
					} catch(e) {
						console.error(e);
					}	
			";
		}
		
		fputs($descriptor, $jsData);
		fclose($descriptor);
		
		return $jsCompletePath;
			
	}
	
	static private function getNvd3NormalMaxSubTotal($chartValues, $typeChart) {
		
		$mainChart = $chartValues['mainChart'];

		$mainChartTotalsArray = array();
		if ($typeChart != 'parallel') {
			foreach ($mainChart as $mainValue) {		
				$mainChartTotalsArray[] = abs($mainValue);
			}
		} else {
			foreach($mainChart as $xAxisValue) {
				foreach($xAxisValue as $key=>$value) {
					$mainChartTotalsArray[] = abs($xAxisValue[$key]);
				}
			}
		}
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'subCharts' => $chartValues['subCharts']
		);

		$subChartsTotalsArray = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsTotalsArray", $extraParams);
		$mainChartTotalsArray = ($subChartsTotalsArray !== false) ? array_merge($mainChartTotalsArray, $subChartsTotalsArray) : $mainChartTotalsArray;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//

		return max($mainChartTotalsArray);
		
	}
	
	static private function getNvd3StackedMaxSubTotal($chartValues, $isCumulativeChart = false) {
		
		$mainChart = $chartValues['mainChart'];

		$mainChartTotalsArray = Array();
		foreach ($mainChart as $mainValue) {
			if ($isCumulativeChart) {
				$mainChartTotalsArray[] = abs($mainValue['totalValue']);
			} else {
				foreach ($mainValue['values'] as $singleValue) {
					$mainChartTotalsArray[] = abs($singleValue['value']);
				}
			}
		}

		//***********************//
		//***AlineaSol Premium***//
		//***********************//		
		$extraParams = array(
			'subCharts' => $chartValues['subCharts'],
			'isCumulativeChart' => $isCumulativeChart
		);

		$subChartsTotalsArray = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsDetailTotalsArray", $extraParams);
		$mainChartTotalsArray = ($subChartsTotalsArray !== false) ? array_merge($mainChartTotalsArray, $subChartsTotalsArray) : $mainChartTotalsArray;
		//***********************//
		//***AlineaSol Premium***//
		//***********************//

		
		return max($mainChartTotalsArray);
		
	}
	
	static private function generateNvd3DataGroupingValues($chartLegends, $chartYAxisLabels, $chartValues, $isGroupedReport, $massiveData) {

		$dataGroups = array();
		
		$mainChart = $chartValues['mainChart'];
		$hasSubCharts = (count($chartValues['subCharts']) > 0);
				
		if (!$massiveData) {

			foreach ($mainChart as $key=>$chartValue) {
				foreach ($chartValue['values'] as $values) {
					if ($hasSubCharts) {
						$group = ($isGroupedReport) ? $chartYAxisLabels[0].' ('.$values['group'].')' : $chartYAxisLabels[0];
					} else {
						$group = $values['group'];
					}
					$dataGroups[0][$group][$chartLegends[$key]] = $values['value'];
				}
			}

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'subCharts' => $chartValues['subCharts'],
				'chartLegends' => $chartLegends,
				'chartYAxisLabels' => $chartYAxisLabels,
				'dataGroups' => $dataGroups,
				'isGroupedReport' => $isGroupedReport
			);

			$combineChartsResult = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getSubChartsDetailDataGrouping", $extraParams);
			$dataGroups = (!$combineChartsResult) ? $dataGroups : $combineChartsResult;
			//***********************//
			//***AlineaSol Premium***//
			//***********************//

		} else {

			foreach ($mainChart as $key=>$chartValue) {
				$dataGroups[0][$chartLegends[$key]] = $chartValue['values'];
			}
			
		}

		return $dataGroups;
		
	}

	static private function getNvd3ChartNumberFormat($maxValue, $avoidFormatting) {
		
		if ($maxValue >= 1000000) {
			$chartD3Format = ",.2f";
		} else if ($maxValue >= 1000) {
			$chartD3Format = ",.2f";
		} else {
			$chartD3Format = ($avoidFormatting) ? ",.0f" : ",.2f";
		}
		
		return $chartD3Format;
		
	}
	
	static private function getNvd3ChartSubtitle($maxValue) {

		if ($maxValue >= 1000000) {
			$chartSubTitle = " (".translate('LBL_REPORT_CHARTS_VALUE_SIZE_M', 'asol_Reports').")";
		} else if ($maxValue >= 1000) {
			$chartSubTitle = " (".translate('LBL_REPORT_CHARTS_VALUE_SIZE_K', 'asol_Reports').")";
		} else {
			$chartSubTitle = "";
		}
		
		return $chartSubTitle;
		
	}
	
	static private function getNvd3ColorPalete($indexKey, $chartConfigs, $chartTemplates, $predefinedColorTemplates) {

		global $sugar_config;
		
		$defaultColorPalette = array("#8c2b2b", "#468c2b", "#2b5d8c", "#cd5200", "#e6bf00", "#7f3acd", "#00a9b8", "#572323", "#004d00", "#000087", "#e48d30", "#9fba09", "#560066", "#009f92", "#b36262", "#38795c", "#3D3D99", "#99623d", "#998a3d", "#994e78", "#3d6899", "#CC0000", "#00CC00", "#0000CC", "#cc5200", "#ccaa00", "#6600cc", "#005fcc");
		
		$mainConfig = $chartConfigs['mainConfig'];
		$mainTemplates = $chartTemplates['mainTemplates'];
		$subConfigs = $chartConfigs['subConfigs'];
		$subTemplates = $chartTemplates['subTemplates'];
		
		$colorMainPalete = null;

		if (isset($mainConfig['colors'])) {
			if ($mainConfig['colors'] != 'hasTemplate') {
				$colorMainPalete = $mainConfig['colors'];
			} else {
				$colorMainPalete = $predefinedColorTemplates[$mainTemplates['color']]['content'];
			}
			$colorMainPalete = array_map(create_function('$color', 'return "#".$color;'), $colorMainPalete);
		}
		$colorPalete[0] = ($colorMainPalete !== null) ? $colorMainPalete : $defaultColorPalette;
		
		foreach ($subConfigs as $subKey=>$subConfig) {
			
			$colorSubPalete = null;

			if (isset($mainConfig['colors'])) {
				if ($subConfig['colors'] != 'hasTemplate') {
					$colorSubPalete = $subConfig['colors'];
				} else {
					$colorSubPalete = $predefinedColorTemplates[$subTemplates[$subKey]['color']]['content'];
				}
				$colorSubPalete = array_map(create_function('$color', 'return "#".$color;'), $colorSubPalete);
			}
			$colorPalete[$subKey+1] = ($colorSubPalete !== null) ? $colorSubPalete : $defaultColorPalette;
				
		}
		
		return $colorPalete;
		
	}
	
	static private function getNvd3DataLabelsJs($indexKey, $chartLegends) {
		
		$jsData = 'var dataLabels_'.$indexKey.' = [';
		 	
	 	foreach ($chartLegends as $keyLegend=>$legendVal)
	 		$jsData .= '"'.$legendVal.'",';
	 		
	 	$jsData = substr($jsData, 0, -1).'];';
		
	 	return $jsData;
	 	
	}
		
	static private function getNvd3NormalDataJs($chartType, $chartYAxisLabel, $indexKey, $colorPalete, $chartLegends, $chartValues, $maxValue) {
		
		$mainChart = $chartValues['mainChart'];
		$hasSubCharts = (!empty($chartValues['subCharts']));
		
		switch ($chartType) {
			
			case "pie":
			case "donut":
				$jsData = 'var asolColorPalete_'.$indexKey.' = ["'.implode('", "', $colorPalete[0]).'"];'; 
				$jsData .= 'var data_'.$indexKey.' = [';
			
				$legendIndex = 0;
				foreach ($chartLegends as $keyLegend=>$legendVal) {
					
					$chartValue = (!empty($mainChart[$keyLegend])) ? $mainChart[$keyLegend] : "0";
					
					if ($maxValue >= 1000000)
						$jsData .= '{key:'.$keyLegend.',y:'.($chartValue/1000000).'},';
					else if ($maxValue >= 1000)
						$jsData .= '{key:'.$keyLegend.',y:'.($chartValue/1000).'},';
					else
						$jsData .= '{key:'.$keyLegend.',y:'.$chartValue.'},';
						
					$legendIndex++;
				}
				
				$jsData = substr($jsData, 0, -1);
				$jsData .= '];';
				break;
				
			case "bar":
				$mainPalete = $colorPalete[0];
				$totalColors = count($mainPalete);
				
				$jsData = 'var data_'.$indexKey.' = [{values:[';
				
				$legendIndex = 0;
				foreach ($chartLegends as $keyLegend=>$legendVal) {
					
					$chartValue = (!empty($mainChart[$keyLegend])) ? $mainChart[$keyLegend] : "0";
					
					if ($maxValue >= 1000000)
						$jsData .= '{"label":'.$keyLegend.',"value":'.($chartValue/1000000).',"color":"'.$mainPalete[($legendIndex % $totalColors)].'"},';
					else if ($maxValue >= 1000)
						$jsData .= '{"label":'.$keyLegend.',"value":'.($chartValue/1000).',"color":"'.$mainPalete[($legendIndex % $totalColors)].'"},';
					else
						$jsData .= '{"label":'.$keyLegend.',"value":'.$chartValue.',"color":"'.$mainPalete[($legendIndex % $totalColors)].'"},';
						
					$legendIndex++;
				}
				
				$jsData = substr($jsData, 0, -1);
				$jsData .= ']}];';
				break;
			
			case "stack":
			case "horizontal":
			case "line":
			case "scatter":
			case "area":
			case "bubble":
				$dataGroups[0][$chartYAxisLabel] = array();
				foreach ($chartLegends as $keyLegend=>$legendVal) {
					$dataGroups[0][$chartYAxisLabel][$legendVal] = $mainChart[$keyLegend];
				}
				
				$dataGroupsZ = null;
				if (!empty($chartValues['zChart'])) {
					$dataGroupsZ[0][$chartYAxisLabel] = array();
					foreach ($chartLegends as $keyLegend=>$legendVal) {
						$dataGroupsZ[0][$chartYAxisLabel][$legendVal] = $chartValues['zChart'][$keyLegend];
					}
				}
				
				$jsData = self::getNvd3StackedDataJs($indexKey, $chartLegends, $chartYAxisLabel, $colorPalete, $dataGroups, $dataGroupsZ, $maxValue);
				break;
			case "parallel":
				$jsData = 'var asolColorPalete_'.$indexKey.' = ["'.implode('", "', $colorPalete[0]).'"];';
				$jsData .= 'var data_'.$indexKey.' = [ ';
				
				foreach ($chartValues['mainChart'] as $keyArray=>$arrayValue) {
					$jsData .= ' { ';
					
					foreach ($arrayValue as $key=>$value) {
						
						$value = (!empty($value) ? $value : "0.000000");
						
						if ($maxValue >= 1000000)
							$jsData .= ' "'.$key.'" : "'.($value/1000000).'", ';
						else if ($maxValue >= 1000)
							$jsData .= ' "'.$key.'" : "'.($value/1000).'", ';
						else
							$jsData .= ' "'.$key.'" : "'.$value.'", ';
					}
					
					$jsData .= ' }, ';
				}
				
				$jsData .= ' ]; ';
				
				break;
		}
		
		return $jsData;
		
	}
	
	static private function getNvd3StackedDataParallelJs($indexKey, $chartLegends, $chartYAxisLabel, $colorPalete, $chartValues, $maxSubTotals, $massiveData = false) {

		$jsData = 'var asolColorPalete_'.$indexKey.' = ["'.implode('", "', $colorPalete[0]).'"];';
		$jsData .= 'var data_'.$indexKey.' = [ ';
		
		foreach ($chartValues['mainChart'] as $values) {
			$jsData .= ' { ';
			
			foreach ($values['values'][0] as $key=>$value) {
				
				$value = (!empty($value) ? $value : "0.000000");
				
				if ($maxSubTotals >= 1000000)
					$jsData .= ' "'.$chartYAxisLabel[$key].'" : "'.($value/1000000).'", ';
				else if ($maxSubTotals >= 1000)
					$jsData .= ' "'.$chartYAxisLabel[$key].'" : "'.($value/1000).'", ';
				else
					$jsData .= ' "'.$chartYAxisLabel[$key].'" : "'.$value.'", ';
			}
					
			$jsData .= ' }, ';
		}
				
		$jsData .= ' ]; ';
				
		return $jsData;	
	}
	
	static private function getNvd3StackedDataJs($indexKey, $chartLegends, $chartYAxisLabel, $colorPalete, $dataGroups, $dataGroupsZ, $maxSubTotals, $massiveData = false) {
		
		$mainPalete = $colorPalete[0];
		$totalColors = count($mainPalete);
		
		$jsData = 'var data_'.$indexKey.' = [';
		
		if (!$massiveData) {
		
			$groupIndex = 0;
			foreach ($dataGroups[0] as $group=>$dataGroup) {
		
				$jsData .= '{"values":[';
				
				foreach ($chartLegends as $legendKey=>$legendVal) {
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					if (isset($dataGroupsZ)) {
						$extraParams = array(
							'dataGroupZ' => $dataGroupsZ[0],
							'group' => $group,
							'legendVal' => $legendVal
						);
							
						$bubbleReportExtendedData = asol_ReportsUtils::managePremiumFeature("bubbleReportCharts", "reportFunctions.php", "getBubbleReportExtendedData", $extraParams);
						
						$extendedData = ($bubbleReportExtendedData !== false ? $bubbleReportExtendedData['extendedData'] : '');
						$extendedEmptyData = ($bubbleReportExtendedData !== false ? $bubbleReportExtendedData['extendedEmptyData'] : '');
					}
					//***********************//
					//***AlineaSol Premium***//
					//***********************//

					if ($maxSubTotals >= 1000000)
						$jsData .= (isset($dataGroup[$legendVal])) ? '{"x":'.$legendKey.',"y":'.($dataGroup[$legendVal]/1000000).$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
					else if ($maxSubTotals >= 1000)
						$jsData .= (isset($dataGroup[$legendVal])) ? '{"x":'.$legendKey.',"y":'.($dataGroup[$legendVal]/1000).$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
					else
						$jsData .= (isset($dataGroup[$legendVal])) ? '{"x":'.$legendKey.',"y":'.$dataGroup[$legendVal].$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
					
				}
				
				$jsData = substr($jsData, 0, -1);				
				$jsData .= '],"key":"'.$group.'","color":"'.$mainPalete[($groupIndex % $totalColors)].'"},';

				$groupIndex++;
			}
				
		} else {
			
			$jsData .= '{"values":[';	
			
			foreach ($dataGroups[0] as $group=>$dataValues) {
				
				$legendKey = array_search($group, $chartLegends);
				
				foreach ($dataValues as $dataKey=>$dataValue) {
					
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'dataGroupZ' => $dataGroupsZ[0],
						'group' => $group,
						'legendVal' => $dataKey
					);
						
					$bubbleReportExtendedData = asol_ReportsUtils::managePremiumFeature("bubbleReportCharts", "reportFunctions.php", "getBubbleReportExtendedData", $extraParams);
					
					$extendedData = ($bubbleReportExtendedData !== false ? $bubbleReportExtendedData['extendedData'] : '');
					$extendedEmptyData = ($bubbleReportExtendedData !== false ? $bubbleReportExtendedData['extendedEmptyData'] : '');
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					
					if ($maxSubTotals >= 1000000)
						$jsData .= (isset($dataValue)) ? '{"x":'.$legendKey.',"y":'.($dataValue/1000000).$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
					else if ($maxSubTotals >= 1000)
						$jsData .= (isset($dataValue)) ? '{"x":'.$legendKey.',"y":'.($dataValue/1000).$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
					else
						$jsData .= (isset($dataValue)) ? '{"x":'.$legendKey.',"y":'.$dataValue.$extendedData.'},' : '{"x":"'.$legendKey.'","y":0'.$extendedEmptyData.'},';
				}
				
			}
					
			$jsData = substr($jsData, 0, -1);
			$jsData .= '],"key":"'.$chartYAxisLabel.'","color":"'.$mainPalete[0].'"},';
				
		}
				
		
		$jsData = substr($jsData, 0, -1);
		
		$jsData .= '];';
		
		return $jsData;
		
	}
	
	private static function getNvd3ModelChartJs($chartType, $indexKey = null) {
		
		switch ($chartType) {
			
			case "pie":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.pieChart().x(function(d) { return dataLabels_'.$indexKey.'[d.key] }).y(function(d) { return d.y }).values(function(d) { return d }).tooltips(true).color(d3Reports.scale.ordinal().range(asolColorPalete_'.$indexKey.').range()).pieLabelsOutside(true).donut(false)';
				break;
			case "donut":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.pieChart().x(function(d) { return dataLabels_'.$indexKey.'[d.key] }).y(function(d) { return d.y }).values(function(d) { return d }).tooltips(true).color(d3Reports.scale.ordinal().range(asolColorPalete_'.$indexKey.').range()).donutLabelsOutside(true).donut(true).donutRatio(0.5)';
				break;
			case "bar":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.discreteBarChart().margin({top: 15, right: 50, bottom: 50, left: 60}).x(function(d) { return d.label }).y(function(d) { return d.value }).staggerLabels(true).tooltips(true).showValues(true)';
				break;
			case "stack":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.multiBarChart().margin({top: 30, right: 30, bottom: 80, left: 60}).stacked(true).reduceXTicks(false).tooltips(true).showControls(true);';
				break;
			case "scatter":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.scatterChart().showDistX(true).showDistY(true).margin({top: 30, right: 50, bottom: 70, left: 75}).tooltips(true).showControls(false);';
				break;
			case "line":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.lineChart().margin({top: 30, right: 50, bottom: 70, left: 60}).x(function(d) { return d.x }).y(function(d) { return d.y }).tooltips(true);';
				break;
			case "horizontal":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.multiBarHorizontalChart().margin({top: 30, right: 30, bottom: 30, left: 80}).stacked(true).showValues(true).x(function(d) { return d.x }).y(function(d) { return d.y }).tooltips(true).showControls(true);';
				break;
			case "area":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.stackedAreaChart().margin({top: 30, right: 50, bottom: 80, left: 60}).tooltips(true).showControls(true);';
				break;
			case "parallel":
				$jsData = 'var chart_'.$indexKey.' = nvReports.models.parallelCoordinates().dimensions(dataLabels_'.$indexKey.').margin({top: 30, right: 0, bottom: 10, left: 0}).color(d3Reports.scale.ordinal().range(asolColorPalete_'.$indexKey.').range());';
				break;
			case "bubble":
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$jsData = asol_ReportsUtils::managePremiumFeature("bubbleReportCharts", "reportFunctions.php", "getBubbleChartModelJs", array('indexKey' => $indexKey));
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				break;
			case "multiple":
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$jsData = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getMultiChartModelJs", array('indexKey' => $indexKey));
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				break;
				
		}
		
		return $jsData;
		
	}
	
	private static function getNvd3SingleChartFormatJs($maxValue, $chartD3Format) {
		
		if ($maxValue >= 1000000)
			$jsData = '.valueFormat(function(d) { return (d3Reports.format("'.$chartD3Format.'")(d))+"M"; });';
		else if ($maxValue >= 1000)
			$jsData = '.valueFormat(function(d) { return (d3Reports.format("'.$chartD3Format.'")(d))+"K"; });';
		else
			$jsData = '.valueFormat(function(d) { return (d3Reports.format("'.$chartD3Format.'")(d)) });';
		
		return $jsData;
			
	}
	
	private static function getNvd3AxisFormatJs($indexKey, $hasSubCharts, $rotateLabels, $chartD3Format, $maxValue) {
		
		if ($rotateLabels)
			$jsData = 'chart_'.$indexKey.'.xAxis.rotateLabels(45).tickFormat(function(d) { return dataLabels_'.$indexKey.'[d]; });';
		else
			$jsData = 'chart_'.$indexKey.'.xAxis.tickFormat(function(d) { return dataLabels_'.$indexKey.'[d]; });';
			
		if (!$hasSubCharts) {
			
			if ($maxValue >= 1000000)
				$jsData .= 'chart_'.$indexKey.'.yAxis.tickFormat(function(d) { return (d3Reports.format("'.$chartD3Format.'")(d))+"M"; });';
			else if ($maxValue >= 1000)
				$jsData .= 'chart_'.$indexKey.'.yAxis.tickFormat(function(d) { return (d3Reports.format("'.$chartD3Format.'")(d))+"K"; });';
			else
				$jsData .= 'chart_'.$indexKey.'.yAxis.tickFormat(d3Reports.format("'.$chartD3Format.'"));';
			
		} else {
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'indexKey' => $indexKey,
				'maxValue' => $maxValue,
				'chartD3Format' => $chartD3Format
			);
				
			$jsData .= asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "getNvd3MultiAxisFormatJs", $extraParams);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
		}
			
		return $jsData;
			
	}
	
	private static function generateNvd3ChartJs($indexKey, $transitionDuration) {
		
		$jsData = 'd3Reports.select("#ASOLnvd3_'.$indexKey.' svg").datum(data_'.$indexKey.').transition().duration('.$transitionDuration.').call(chart_'.$indexKey.');';
		$jsData .= 'nvReports.utils.windowResize(chart_'.$indexKey.'.update);';
		
		$jsData .= 'return chart_'.$indexKey.';';
		
		return $jsData;
		
	}
	
	private static function generateNvd3TitleSubtitleJs($indexKey, $chartTitle, $chartSubTitle) {
		
		return '$("#ASOLnvd3Title_'.$indexKey.'").html("'.$chartTitle.'<span style=\"font-weight: normal;\">'.$chartSubTitle.'</span>");';
		
	}
	
}

?>
