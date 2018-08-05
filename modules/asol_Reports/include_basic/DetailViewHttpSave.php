<?php 

require_once("modules/asol_Reports/include_basic/manageReportsFunctions.php");

$displayNoDataMsg = (($noDataReport) && ((empty($filtersPanel)) || ((!empty($filtersPanel)) && (!empty($searchCriteria)))));
$columnsCount = ($hasRowIndexDisplay ? count($columns)+1 : count($columns));


$detailViewHttpFile = '';

if (($isDashlet) || ($isWsExecution)) {

	$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportHideLoadingCss($dashletId);
	
}

if ($availableReport) {

	if ($maxAllowedNotIndexedOrderBy && $hasDeletedNotIndexedOrderBy) {
	
		$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportNotIndexedOrderByAlert();
	
	}
	
	$detailViewHttpFile .= '<div id="internalHtmlReport">';

	if (!$getExportData) {
	
		if (!$isDashlet) {
	
			$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportModuleTitle($report_name);
			
			$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailButtons($report_data['record'], $isMetaReport, $dataVisibility['filter'], $report_data['asol_domain_id'], $report_data['created_by'], $report_data['assigned_user_id'], $report_data['report_scope'], $report_data['report_attachment_format'], $sendEmailquestion, $hasExternalApp, $filtersHiddenInputs, $searchCriteria, $isDashlet, $dashletId, $vardefFilters, $externalCall, $getLibraries, $override_entries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview);
			
			$detailViewHttpFile .= '
			<form id="display_form" name="display_form" method="post" action="index.php">
			
				<input type="hidden" value="asol_Reports" name="module">
				<input type="hidden" value="EditView" name="action">
				<input type="hidden" value="" name="return_module">
				<input type="hidden" value="" name="return_action">
				<input type="hidden" value="'.$report_data['record'].'" name="record">
				<input type="hidden" value="'.$data['page_number'].'" name="page_number">
				
				<input type="hidden" value="'.(($isDashlet) ? "true": "false").'" name="dashlet">
				
				<input type="hidden" value="'.$report_data['sort_field'].'" name="sort_field">
				<input type="hidden" value="'.$report_data['sort_index'].'" name="sort_index">
				<input type="hidden" value="'.$report_data['sort_direction'].'" name="sort_direction">
			
				<input type="hidden" value="" name="pngs">
				<input type="hidden" value="" name="legends">
				<input type="hidden" value="" name="engines">
				<input type="hidden" value="'.implode(",", $chartSubGroupsValues).'" id="chartSubGroupsValues">
			
				<input type="hidden" id="display_external_filters" name="external_filters" value="'.str_replace(' ', '${nbsp}', $external_filters).'">
				<input type="hidden" id="display_search_criteria" name="search_criteria" value="'.$searchCriteria.'">
			
			</form>
			
			'.asol_ReportsGenerationFunctions::getReportExportForm('', $exportedReportFile, $isWsExecution);
	
		} else {
		
			$detailViewHttpFile .= '<input type="hidden" value="'.$data['page_number'].'" id="page_number_'.$dashletId.'" name="page_number_'.$dashletId.'">';
			$detailViewHttpFile .= '<input type="hidden" value="'.implode(",", $chartSubGroupsValues).'" id="chartSubGroupsValues">';
				
			if (((!$hasVardefFilter) || $isWsExecution) && $dashletExportButtons) {
			
				if ($isWsExecution) {
					$detailViewHttpFile .= '
					<form id="display_form" name="display_form" method="post" action="index.php">
			
						<input type="hidden" value="asol_Reports" name="module">
						<input type="hidden" value="EditView" name="action">
						<input type="hidden" value="" name="return_module">
						<input type="hidden" value="" name="return_action">
						<input type="hidden" value="'.$report_data['record'].'" name="record">
						<input type="hidden" value="'.$data['page_number'].'" name="page_number">
						
						<input type="hidden" value="false" name="dashlet">
				
						<input type="hidden" value="'.$report_data['sort_field'].'" name="sort_field">
						<input type="hidden" value="'.$report_data['sort_index'].'" name="sort_index">
						<input type="hidden" value="'.$report_data['sort_direction'].'" name="sort_direction">
					
					</form>';
					
					$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailButtons($report_data['record'], $isMetaReport, $dataVisibility['filter'], $report_data['asol_domain_id'], $report_data['created_by'], $report_data['assigned_user_id'], $report_data['report_scope'], $report_data['report_attachment_format'], $sendEmailquestion, $hasExternalApp, $filtersHiddenInputs, $searchCriteria, $isDashlet, $dashletId, $vardefFilters, $externalCall, $getLibraries, $override_entries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview);
					
				}
				$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportExportForm($dashletId, $exportedReportFile, $isWsExecution);
			
			}
			
		}
		
		$detailViewHttpFile .= asol_ReportsManagementFunctions::getLoadingBlockDiv();
	
	}
	
	$detailViewHttpFile .= '

	<div id="reportDiv" class="'.(!$hasVardefFilter ? 'alineasol_reports' : '').'">
	
	<table id="reportTable">
	
		<tbody>';
	
			$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportPublicDescription($publicDescription, $isDashlet, $externalCall, $getExportData);
	
	
	$detailViewHttpFile .= '
		<tr>
			<td>';
			
			$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailSearchCriteria($report_data['record'], $dataVisibility['filter'], $filtersPanel, $filtersHiddenInputs, $external_filters, $searchCriteria, $currentUserId, $hasVardefFilter, $isDashlet, $dashletId, $cleanUpStyling);
			
			if ($oversizedReport) {
				
				$detailViewHttpFile .= asol_ReportsGenerationFunctions::getOversizedReportMessage($maxAllowedDisplayed, $maxAllowedParseMultiTable, $maxAllowedGroupByEntries, $totalEntries, $totalUngroupedEntries, $isDashlet, $externalCall);
				
			} else if (($filtersHiddenInputs == false) || ($searchCriteria == true)) {

				if (!empty($chartInfo)) {

					require_once("modules/asol_Reports/include_basic/manageReportsFunctions.php");
				
					switch ($report_charts_engine) {
				
						case "flash":
							$flashArray = asol_ReportsCharts::getCrmChartHtml($focus->id, $report_charts_engine, false, $urlChart, $chartInfo, $dataReferences['charts'], $current_language, $theme, $isStoredReport, $isDashlet, $dashletId);
							$chartScript .= $flashArray["chartHtml"];
							break;
				
						case "html5":
							$html5Array = asol_ReportsCharts::getCrmChartHtml($focus->id, $report_charts_engine, true, $urlChart, $chartInfo, $dataReferences['charts'], $current_language, $theme, $isStoredReport, $isDashlet, $dashletId);
							$chartScript .= $html5Array["chartHtml"];
							$html5Chart = $html5Array["returnedCharts"];
							break;
				
						case "nvd3":
							$nvd3Array = asol_ReportsCharts::getCrmChartHtml($focus->id, $report_charts_engine, true, $urlChart, $chartInfo, $dataReferences['charts'], $current_language, $theme, $isStoredReport, $isDashlet, $dashletId);
							$chartScript .= $nvd3Array["chartHtml"];
							$nvd3Chart = $nvd3Array["returnedCharts"];
							break;
				
						default:
							break;
								
					}
				
					if (!$getExportData) {
					
						$returnedChartScript = "
							<script>
								window['hasExternalDivContainer".$dashletId."'] = ".($hasCurlRequestEnabled || $isDashlet ? 'true' : 'false').";
								function setUpCharts".str_replace("-", "", $dashletId)."() {
									".$chartScript."
								}
							</script>
							";
					
						$returnedChartScript .= asol_ReportsManagementFunctions::getLoadJqueryScript(true, false, 'setUpCharts'.str_replace("-", "", $dashletId));
				
					}
					
				}
				
				$detailViewHttpFileCharts = asol_ReportsGenerationFunctions::getChartContentsContainer($report_data['record'], $report_charts_engine, $urlChart, $html5Chart, $nvd3Chart, $getExportData);
				
				
				$detailViewHttpFile .=
					'<div>';
					
				 	if ((!$displayNoDataMsg) && ($dataVisibility['chart']) && ($report_data['report_charts'] == "Htob")) {
				 		$detailViewHttpFile .= $detailViewHttpFileCharts.$returnedChartScript;
				 	}
				 
					if ($dataVisibility['field']) {
					
						if (!$cleanUpStyling) {
						
							$detailViewHttpFile .=
							'<div id="resultDivWrapper" class="'.(!$hasVardefFilter ? 'detail view' : 'alineasol_external').'">';
						
						}
						
						if (!$isDashlet) {

							if ($displayNoDataMsg) {

								if ($reportedError != null) {
									
									$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MYSQL_ERROR');
									$reportHeaderInfo = '<span style="color:red">'.$reportedError.'</span>';
									$collapsableHeaderId = null;
									
								} else {
									
									$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NO_RESULTS');
									$reportHeaderInfo = null;
									$collapsableHeaderId = null;
								
								}
								
							} else {
								
								$reportHeaderMessage = ($displayTitles ? asol_ReportsUtils::translateReportsLabel('LBL_REPORT_RESULTS') : null);
								$reportHeaderInfo = null;
								$collapsableHeaderId = 'resultDiv';
								
							}
							
							$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportHeaderInfo($isDashlet, $externalCall, $reportHeaderMessage, $reportHeaderInfo, ($getExportData ? null : $collapsableHeaderId));
														
						} else if ($hasVardefFilter) {
							
							if ($displayNoDataMsg) {

								if ($reportedError != null) {
									
									$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MYSQL_ERROR');
									$reportHeaderInfo = '<span style="color:red">'.$reportedError.'</span>';
									
								} else {
									
									$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NO_RESULTS');
									
								}
								
								$detailViewHttpFile .= ($reportHeaderInfo !== null) ? '<em>'.$reportHeaderMessage.'</em>'.' : '.$reportHeaderInfo : '<em>'.$reportHeaderMessage.'</em>';
								
							}
							
						}
						
						if (!$displayNoDataMsg) {
						
							$detailViewHttpFile .= '<div id="resultDiv">';

							if (!$isDetailedReport) {
					
								$detailViewHttpFile .=
								'<table id="resultTable" class="'.($cleanUpStyling ? '' : 'list ').'view asolReportsResultsTable">
									<tbody>';
									
								if ((!$hasNoPagination) && (in_array($displayPagination, array('top', 'all')))) {
									$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailPagination($report_data['record'], $columnsCount, $externalCall, $getLibraries, $override_entries, $isDashlet, $dashletId, $data['num_pages'], $data['num_pages_label'], $data['page_number'], $data['page_number_label'], $data['total_entries'], $report_data['sort_field'], $initialSortDirection, $report_data['sort_index'], $vardefFilters);
								}
									
								if ($displayHeaders) {
								
									$detailViewHttpFile .=
										'<tr class="asolReportsHeadersRow">';
									
										if ($hasRowIndexDisplay) {
											$dataType = 'index';
											$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
											
											$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
											
											$detailViewHttpFile .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">N&deg;</th>';
										}
										
									$previousDataType = null;
											
									foreach ($columns as $columnKey=>$column) {
	
										$dataRef = $columnsDataRefs[$column];
										if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
											continue;
										
										$dataType = $columnsDataTypes[$column];
										$dataVisible = $columnsDataVisible[$column];
										$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
										
										$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
										$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' headerCellHidden '.$dataVisible : '');
											
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										$extraParams = array(
											'dataType' => $dataType,
											'previousDataType' => $previousDataType,
											'cellClasses' => $cellClasses,
											'dataWidthStyle' => $dataWidthStyle,
										);
										$hoverButtonTypeHeader = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "generateButtonHeaderHtml", $extraParams);
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										
										if ($hoverButtonTypeHeader !== false) {
											
											$detailViewHttpFile .= $hoverButtonTypeHeader;
											
										} else {
											 
											//***********************//
											//***AlineaSol Premium***//
											//***********************//
											$panelIdAttribute = '';
											if ($dataVisible == 'html') {
						    					$panelIdAttribute = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "generateButtonHeaderPanelAttribute", array('delimiterToken' => $delimiterToken, 'headerLabel' => $columnsU[$columnKey]));
											}
						    				//***********************//
											//***AlineaSol Premium***//
											//***********************//
													
											$detailViewHttpFile .= '<th '.$panelIdAttribute.' class="'.$cellClasses.'" style="'.$dataWidthStyle.'">';
										
											$avoidOrderingByNotIndexedField = ($maxAllowedNotIndexedOrderBy ? asol_ReportsGenerateQuery::avoidOrderingByNotIndexedField($report_table, $columnsN[$columnKey], $alternativeDb) : false);
	
							    			if (($columnsO[$columnKey] != "") && (!$externalCall) && (!$avoidOrderingByNotIndexedField) && (!$getExportData)) {
	
						    					if (!empty($column)) {
							    					
							    					if ($report_data['sort_field'] !== $columnsO[$columnKey])
								    					$sortDirection = "ASC";
								    				else if ($report_data['sort_direction'] == 'ASC')
								    					$sortDirection = "ASC";
								    				else
								    					$sortDirection = "DESC";
							    				
							    					
							    					if (($report_data['sort_field'] == $columnsO[$columnKey]) && ($report_data['sort_direction'] == 'ASC')) {
								    					$sortingImg = "themes/default/images/arrow_down.gif";
								    				} else if (($report_data['sort_field'] == $columnsO[$columnKey]) && ($report_data['sort_direction'] == 'DESC')) { 
								    					$sortingImg = "themes/default/images/arrow_up.gif";
								    				} else { 
								    					$sortingImg = "themes/default/images/arrow.gif";
								    				}
								    					
								    				
									    			$detailViewHttpFile .= '<a class="listViewThLinkS1 clickable Sorting_'.$columnsR[$columnKey].'" onclick="reloadCurrentDashletReport'.str_replace("-", "", $dashletId).'(\''.$data['page_number'].'\', \''.htmlentities($columnsO[$columnKey]).'\', \''.$sortDirection.'\', \''.$columnsI[$columnKey].'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($override_entries) ? '&overrideEntries='.$override_entries : '').(!empty($override_data) ? '&overrideData='.urlencode(json_encode($override_data)) : '').(!empty($override_config) ? '&overrideConfig='.urlencode(json_encode($override_config)) : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">'.$column.'</a>';				    				
									    			$detailViewHttpFile .= '&nbsp;<img height="10" border="0" align="absmiddle" width="8" src="'.$sortingImg.'">';
								    			
							    				}
								    			
							    			} else {
							    				$detailViewHttpFile .= $column;
							    			}
								    			
							    			$detailViewHttpFile .= '</th>';
							    			
										}
										
										$previousDataType = $dataType;
							    		
									}
	
									$detailViewHttpFile .=
									'</tr>';
								
								}
								
								foreach ($reportFields as $fieldKey=>$field) {
								
									$rowZebraClass = ((($fieldKey + 1) % 2) == 0 ? 'evenListRowS1' : 'oddListRowS1');
									$cellZebraClass = ((($fieldKey + 1) % 2) == 0 ? 'row-even' : 'row-uneven');
									
									$detailViewHttpFile .=
							    	'<tr class="'.$rowZebraClass.' asolReportsExecutionRow">';
							    		
										if ($hasRowIndexDisplay) {
											$dataType = 'index';
											$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
											
											$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
											
											$detailViewHttpFile .= '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'">'.($data['page_number']*$data['entriesPerPage']+$fieldKey+1).'</td>';
										}
										
										$previousDataType = null;
										
										foreach ($field as $key3=>$item3) {
											
											$dataRef = $columnsDataRefs[$key3];
											if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
												continue;
											
											$dataType = $columnsDataTypes[$key3];
											$dataVisible = $columnsDataVisible[$key3];
											$dataWidthStyle = (isset($columnsDataWidths[$key3]) ? 'width: '.$columnsDataWidths[$key3].'%' : '');
											
											$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
											$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' dataCellHidden '.$dataVisible : '');
											
											if ($dataType !== 'noHeaderButton') {
												
												$detailViewHttpFile .= ($previousDataType === 'noHeaderButton' ? '</div></td>' : '');
												$detailViewHttpFile .= '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'">'.$item3.'</td>';
											
											} else {
													
												$detailViewHttpFile .= ($previousDataType !== 'noHeaderButton' ? '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'"><div style="white-space: nowrap;">' : '').$item3;
												
											}
											
											$previousDataType = $dataType;
											
										}
										
									$detailViewHttpFile .= 
									'</tr>';
			
								}
								
								if ($displayTotals) {

									if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
									
										$detailViewHttpFile .=
										'<tr class="asolReportsGroupedTotal">';
	
										if ($hasRowIndexDisplay) {
											$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
											$detailViewHttpFile .= '<th class="totalCellInvisible" style="'.$dataWidthStyle.'"></th>';
										}
										
										foreach ($columns as $columnKey=>$column) {

											foreach ($rsTotals as $total) {
												
												$dataRef = $columnsDataRefs[$column];
												if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
													continue;
												
												$dataType = $columnsDataTypes[$column];
												$dataVisible = $columnsDataVisible[$column];
												$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
												
												if (isset($total[$column])) {
													
													$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
													$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
												
													$detailViewHttpFile .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$total[$column].'</th>';
	
												} else {
													
													$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
													$detailViewHttpFile .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
													
												}
												
											}
												
										}
										
										$detailViewHttpFile .=
										'</tr>';
										
									}
								
								}
								
								if ((!$hasNoPagination) && (in_array($displayPagination, array('bottom', 'all')))) {
									$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailPagination($report_data['record'], $columnsCount, $externalCall, $getLibraries, $override_entries, $isDashlet, $dashletId, $data['num_pages'], $data['num_pages_label'], $data['page_number'], $data['page_number_label'], $data['total_entries'], $report_data['sort_field'], $initialSortDirection, $report_data['sort_index'], $vardefFilters);
			  					}
								
								$detailViewHttpFile .= 
									'</tbody>
								</table>';
								
							} else {

								if ((!$hasNoPagination) && ($data['num_pages'] > 0) && (in_array($displayPagination, array('bottom', 'all')))) {
									
									$detailViewHttpFile .= '<table class="list view asolReportsPaginationTable"><tbody>';
									$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailPagination($report_data['record'], $columnsCount, $externalCall, $getLibraries, $override_entries, $isDashlet, $dashletId, $data['num_pages'], $data['num_pages_label'], $data['page_number'], $data['page_number_label'], $data['total_entries'], $report_data['sort_field'], $initialSortDirection, $report_data['sort_index'], $vardefFilters);
									$detailViewHttpFile .= '</tbody></table>';
									
			  					}
			  					
								foreach ($reportFields as $key=>$item) {
								
									$detailViewHttpFile .=
									'<div class="'.($cleanUpStyling ? '' : 'list ').'view">
									<h4><em>'.$key.'</em></h4>
									<table class="asolReportsResultsTable">
										<tbody>';
									
									if ($displayHeaders) {
									
										$detailViewHttpFile .= '<tr>';
										
										if ($hasRowIndexDisplay) {
											$dataType = 'index';
											$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
											
											$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
											
											$detailViewHttpFile .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">N&deg;</th>';
										}
										
										$previousDataType = null;
									
										foreach ($columns as $columnKey=>$column) {
											
											$dataRef = $columnsDataRefs[$column];
											if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
												continue;
											
											$dataType = $columnsDataTypes[$column];
											$dataVisible = $columnsDataVisible[$column];
											$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
											
											$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
											$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' headerCellHidden '.$dataVisible : '');
											
											//***********************//
											//***AlineaSol Premium***//
											//***********************//
											$extraParams = array(
												'dataType' => $dataType,
												'previousDataType' => $previousDataType,
												'cellClasses' => $cellClasses,
												'dataWidthStyle' => $dataWidthStyle,
											);
											$hoverButtonTypeHeader = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "generateButtonHeaderHtml", $extraParams);
											//***********************//
											//***AlineaSol Premium***//
											//***********************//
									
											if ($hoverButtonTypeHeader !== false) {
											
												$detailViewHttpFile .= $hoverButtonTypeHeader;
												
											} else {
												
												//***********************//
												//***AlineaSol Premium***//
												//***********************//
												$panelIdAttribute = '';
												if ($dataVisible == 'html') {
							    					$panelIdAttribute = asol_ReportsUtils::managePremiumFeature("reportButtonFormat", "reportFunctions.php", "generateButtonHeaderPanelAttribute", array('delimiterToken' => $delimiterToken, 'headerLabel' => $columnsU[$columnKey]));
												}
							    				//***********************//
												//***AlineaSol Premium***//
												//***********************//
														
												$detailViewHttpFile .= '<th '.$panelIdAttribute.' class="'.$cellClasses.'" style="'.$dataWidthStyle.'">';
											
												$avoidOrderingByNotIndexedField = ($maxAllowedNotIndexedOrderBy ? asol_ReportsGenerateQuery::avoidOrderingByNotIndexedField($report_table, $columnsN[$columnKey], $alternativeDb) : false);
	
								    			if (($columnsO[$columnKey] != "") && (!$externalCall) && (!$avoidOrderingByNotIndexedField) && (!$getExportData)) {

									    			if (!empty($column)) {
									    					
									    				if ($report_data['sort_field'] !== $columnsO[$columnKey])
										    				$sortDirection = "ASC";
										    			else if ($report_data['sort_direction'] == 'ASC')
										    				$sortDirection = "ASC";
										   				else
										   					$sortDirection = "DESC";
									    					
							    							
							    						if (($report_data['sort_field'] == $columnsO[$columnKey]) && ($report_data['sort_direction'] == 'ASC')) {
								    						$sortingImg = "themes/default/images/arrow_down.gif";
							    						} else if (($report_data['sort_field'] == $columnsO[$columnKey]) && ($report_data['sort_direction'] == 'DESC')) {
								    						$sortingImg = "themes/default/images/arrow_up.gif";
							    						} else {
								   							$sortingImg = "themes/default/images/arrow.gif";
							    						}
								    						
							    						
								    					$detailViewHttpFile .= '<a class="listViewThLinkS1 clickable Sorting_'.$columnsR[$columnKey].'" onclick="reloadCurrentDashletReport'.str_replace("-", "", $dashletId).'(\''.$data['page_number'].'\', \''.htmlentities($columnsO[$columnKey]).'\', \''.$sortDirection.'\', \''.$columnsI[$columnKey].'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($override_entries) ? '&overrideEntries='.$override_entries : '').(!empty($override_data) ? '&overrideData='.urldecode(json_encode($override_data)) : '').(!empty($override_config) ? '&overrideConfig='.urlencode(json_encode($override_config)) : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">'.$column.'</a>';
								    					$detailViewHttpFile .= '&nbsp;<img height="10" border="0" align="absmiddle" width="8" src="'.$sortingImg.'">';
								    					
							    					}
							    						
						    					} else {
						    						$detailViewHttpFile .= $column;
						    					}
							    					
							    				$detailViewHttpFile .= '</th>';
												
											}
		
											$previousDataType = $dataType;
											
										}
				  						
										$detailViewHttpFile .=
				  						'</tr>';
									
									}
			  						
									foreach ($item as $key2=>$item2) {
			  						
										$rowZebraClass = ((($key2 + 1) % 2) == 0) ? 'evenListRowS1' : 'oddListRowS1';
										$cellZebraClass = ((($key2 + 1) % 2) == 0 ? 'row-even' : 'row-uneven');
										
										$detailViewHttpFile .=
			  							'<tr class="'.$rowZebraClass.'">';
										
											if ($hasRowIndexDisplay) {
												
												$dataType = 'index';
												$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
												
												$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
												
												$detailViewHttpFile .= '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'">'.($key2+1).'</td>';
												
											}
										
											$previousDataType = null;
											
			  								foreach ($item2 as $key3=>$item3) {
			  									
			  									$dataRef = $columnsDataRefs[$key3];
			  									if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
			  										continue;
			  									
			  									$dataType = $columnsDataTypes[$key3];
			  									$dataVisible = $columnsDataVisible[$key3];
			  									$dataWidthStyle = (isset($columnsDataWidths[$key3]) ? 'width: '.$columnsDataWidths[$key3].'%' : '');
			  									
												$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
												$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' dataCellHidden '.$dataVisible : '');

				  								if ($dataType !== 'noHeaderButton') {
													
													$detailViewHttpFile .= ($previousDataType === 'noHeaderButton' ? '</div></td>' : '');
													$detailViewHttpFile .= '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'">'.$item3.'</td>';
												
												} else {
														
													$detailViewHttpFile .= ($previousDataType !== 'noHeaderButton' ? '<td class="'.$cellClasses.' '.$cellZebraClass.'" style="'.$dataWidthStyle.'"><div style="white-space: nowrap;">' : '').$item3;
													
												}
												
												$previousDataType = $dataType;
													
		  									}
	
			  							$detailViewHttpFile .=
			  							'</tr>';
			  						
			  						}

			  						
			  						// Subtotals beginning
			  						if ($displaySubtotals) {
			  							
			  							if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
	
		  									$detailViewHttpFile .=
		  									'<tr class="asolReportsGroupedTotal">';

		  									if ($hasRowIndexDisplay) {
		  										$detailViewHttpFile .= '<th class="totalCellInvisible"></th>';
		  									}
		  									
		  									foreach ($columns as $columnKey=>$column) {

		  										$dataRef = $columnsDataRefs[$column];
		  										if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
		  											continue;
		  										
		  										$dataType = $columnsDataTypes[$column];
			  									$dataVisible = $columnsDataVisible[$column];
			  									$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
			  									
			  									if (isset($subTotals[$key][$column])) {
			  												
			  										$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
			  										$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
		  										
			  										$detailViewHttpFile .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$subTotals[$key][$column].'</th>';
			  											
		  										} else {
		  											
		  											$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
			  										$detailViewHttpFile .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
			  										
		  										}
		  										
		  									}
		  										
		  									$detailViewHttpFile .=
		  									'</tr>';

			  							} else {
			  							
					  						$detailViewHttpFile .=
					  						'<tr><td colspan='.$columnsCount.'>
					  						
					  						<table class="view asolReportsResultsTable" border=1>';
					  						
				  							$detailViewHttpFile .= '
					  						<tr>
					  						<td rowspan=2 class="asolReportsSubTotalTitle"><center><h3><em>'.$key.' '.$mod_strings['LBL_REPORT_SUBTOTALS'].'</em></h3></center></td>';
					  						
				  							if ($displayHeaders) {
				  								
												foreach ($subTotals[$key] as $key4=>$item4) {
													
													$dataRef = $columnsDataRefs[$key4];
													if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
														continue;
													
				  									$dataType = $columnsDataTypes[$key4];
				  									$dataVisible = $columnsDataVisible[$key4];
				  									
													$cellClasses = 'subtotal_header subtotal_cell report_header report_cell subtotal_header_'.$dataType.' subtotal_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
													$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' subHeaderCellHidden '.$dataVisible : '');
		
													$detailViewHttpFile .= '<th class="'.$cellClasses.'">'.$key4.'</th>';
													
												}
				  							
				  							}
				  							
											$detailViewHttpFile .= 
											'</tr>';
	
					
											$detailViewHttpFile .= '<tr>';
											
											foreach ($subTotals[$key] as $key5=>$item5) {
												
												$dataRef = $columnsDataRefs[$key5];
												if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
													continue;
												
			  									$dataType = $columnsDataTypes[$key5];
			  									$dataVisible = $columnsDataVisible[$key5];
			  									
												$cellClasses = 'subtotal_value subtotal_cell report_value report_cell subtotal_value_'.$dataType.' subtotal_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
												$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' subtotalCellHidden '.$dataVisible : '');
												
												$detailViewHttpFile .= '<td class="'.$cellClasses.'">'.$item5.'</td>';
												
											}
											
											$detailViewHttpFile .= '</tr>
											</table></td></tr>';
											
			  							}
			  						
			  						}
									// Subtotals end
									
			  						
									$detailViewHttpFile .= 
									'</tbody>
									</table>';
									
									$detailViewHttpFile .= '</div>';
									
								}
								
								if ((!$hasNoPagination) && ($data['num_pages'] > 0) && (in_array($displayPagination, array('bottom', 'all')))) {
									
									$detailViewHttpFile .= '<table class="list view asolReportsPaginationTable"><tbody>';
									$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailPagination($report_data['record'], $columnsCount, $externalCall, $getLibraries, $override_entries, $isDashlet, $dashletId, $data['num_pages'], $data['num_pages_label'], $data['page_number'], $data['page_number_label'], $data['total_entries'], $report_data['sort_field'], $initialSortDirection, $report_data['sort_index'], $vardefFilters);
									$detailViewHttpFile .= '</tbody></table>';
			  					
								}

							}

							
							// Totals beginning
							if ($displayTotals && ($isDetailedReport || !$isGroupedReport || !$hasGroupedTotalBelowColumn)) {
								
								if (!$isDashlet) {
									
									$detailViewHttpFile .= '
									<div class="'.($cleanUpStyling ? '' : 'list ').'view">
									'.($displayTitles ? '<h4>'.$mod_strings['LBL_REPORT_TOTALS'].'</h4>' : '').'
									<table id="totalTable">';
									
								} else {
									$detailViewHttpFile .= '
									<div>
									<table id="totalTable" class="'.($cleanUpStyling ? '' : 'list ').'view asolReportsTotalsTable">';
								}
						
								
								$detailViewHttpFile .=
									'<tbody>';
										
										if ($displayHeaders) {
								
											if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
											
												foreach ($rsTotals as $total) {
												
													$detailViewHttpFile .=
													'<tr class="asolReportsGroupedTotal">';
												
													if ($hasRowIndexDisplay) {
														$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
														$detailViewHttpFile .= '<th class="totalCellInvisible" style="'.$dataWidthStyle.'"></th>';
													}

													foreach ($columns as $key=>$column) {
												
														$dataRef = $columnsDataRefs[$column];
														if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
															continue;
														
														$dataType = $columnsDataTypes[$column];
														$dataVisible = $columnsDataVisible[$column];
														$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
												
														if (isset($total[$column])) {
																
															$cellClasses = 'total_header total_cell report_header report_cell total_header_'.$dataType.' total_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
															$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
												
															$detailViewHttpFile .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$column.'</th>';
												
														} else {
																
															$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
															$detailViewHttpFile .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
																
														}
												
													}
												
													$detailViewHttpFile .=
													'</tr>';
											
												}
												
											} else {
											
												$detailViewHttpFile .=
												'<tr>';
												
													foreach ($totals as $totalColumn) {
														
														$dataRef = $columnsDataRefs[$totalColumn['alias']];
														if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
															continue;
														
														$dataType = $columnsDataTypes[$totalColumn['alias']];
														$dataVisible = $columnsDataVisible[$totalColumn['alias']];
														$dataWidthStyle = (isset($columnsDataWidths[$totalColumn['alias']]) ? 'width: '.$columnsDataWidths[$totalColumn['alias']].'%' : '');
														
														$cellClasses = 'total_header total_cell report_header report_cell total_header_'.$dataType.' total_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
														$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalHeaderCellHidden '.$dataVisible : '');
														
										    			$detailViewHttpFile .= '<th class="'.$cellClasses.'">'.$totalColumn['alias'].'</th>';
													
													}
				
										    	$detailViewHttpFile .=
												'</tr>';

											}
									    	
										}
										
								    	foreach ($rsTotals as $total) {
				
								    		if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
								    		
							    				$detailViewHttpFile .=
							    				'<tr class="asolReportsGroupedTotal">';
							    			
							    				if ($hasRowIndexDisplay) {
							    					$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
							    					$detailViewHttpFile .= '<td class="totalCellInvisible" style="'.$dataWidthStyle.'"></td>';
							    				}

							    				foreach ($columns as $key=>$column) {
							    			
							    					$dataRef = $columnsDataRefs[$column];
							    					if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
							    						continue;
							    					
							    					$dataType = $columnsDataTypes[$column];
							    					$dataVisible = $columnsDataVisible[$column];
							    					$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
							    			
							    					if (isset($total[$column])) {
							    			
							    						$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
							    						$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
							    			
							    						$detailViewHttpFile .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$total[$column].'</td>';
							    			
							    					} else {
							    			
							    						$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
							    						$detailViewHttpFile .= '<td class="'.$cellClass.'" style="'.$dataWidthStyle.'"></td>';
							    			
							    					}
							    			
							    				}
							    			
							    				$detailViewHttpFile .=
							    				'</tr>';
								    			
								    		} else {
									    		
								    			$detailViewHttpFile .=
									    		'<tr>';
									    		
									    			foreach ($total as $key=>$value) {
									    				
									    				$dataRef = $columnsDataRefs[$key];
									    				if (isset($dataReferences['fields']) && !in_array($dataRef, $dataReferences['fields']))
									    					continue;
									    				
									    				$dataType = $columnsDataTypes[$key];
									    				$dataVisible = $columnsDataVisible[$key];
									    				$dataWidthStyle = (isset($columnsDataWidths[$key]) ? 'width: '.$columnsDataWidths[$key].'%' : '');
									    				
														$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
														$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
	
														$detailViewHttpFile .= '<td class="'.$cellClasses.'">'.$value.'</td>';
														
									    			}
						
												$detailViewHttpFile .=
												'</tr>';
					
								    		}
								    	
								    	}
								    	
							$detailViewHttpFile .=				
									'</tbody>
								</table>
								</div>';
						}
						// Totals end
						
				    	$detailViewHttpFile .=				
							'</div>';
				    	
				    	if (!$cleanUpStyling) {
				    	
							$detailViewHttpFile .=				
							'</div>';
								
						}
						
					} else {
						
						$detailViewHttpFile .=
						'<style>
							#dashletExport'.$dashletId.' {
								display: none;
							}
						</style>';
						
					}
					
				} else if (isset($displayPagination)) {
					
					$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailPagination($report_data['record'], $columnsCount, $externalCall, $getLibraries, $override_entries, $isDashlet, $dashletId, $data['num_pages'], $data['num_pages_label'], $data['page_number'], $data['page_number_label'], $data['total_entries'], $report_data['sort_field'], $initialSortDirection, $report_data['sort_index'], $vardefFilters);
					
				} else if ($displayNoDataMsg) {

					$detailViewHttpFile .=
						'<div id="resultDivWrapper" class="'.(!$hasVardefFilter ? 'detail view' : 'alineasol_external').'">';
					
					if ($reportedError != null) {
						
						$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MYSQL_ERROR');
						$reportHeaderInfo = '<span style="color:red">'.$reportedError.'</span>';
						
					} else {
						
						$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NO_RESULTS');
						$reportHeaderInfo = null;

					}
					

					$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportHeaderInfo($isDashlet, $externalCall, $reportHeaderMessage, $reportHeaderInfo);

					$detailViewHttpFile .= 
						'</div>';
					
					$detailViewHttpFile .=
					'<style>
						#dashletExport'.$dashletId.' {
							display: none;
						}
					</style>';
					
				}

				if ((!$displayNoDataMsg) && ($dataVisibility['chart']) && in_array($report_data['report_charts'], array("Both", "Char"))) {
					 $detailViewHttpFile .= $detailViewHttpFileCharts.$returnedChartScript;
				}
					
				$detailViewHttpFile .= '</div>';
					
			}
			
			if (!$getExportData) {
		
				$detailViewHttpFile .= asol_ReportsGenerationFunctions::getReportDetailButtons($report_data['record'], $isMetaReport, $dataVisibility['filter'], $report_data['asol_domain_id'], $report_data['created_by'], $report_data['assigned_user_id'], $report_data['report_scope'], $report_data['report_attachment_format'], $sendEmailquestion, $hasExternalApp, $filtersHiddenInputs, $searchCriteria, $isDashlet, $dashletId, $vardefFilters, $externalCall, $getLibraries, $override_entries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview);
				
			}
				
			$detailViewHttpFile .= 
			'</td>
		</tr>
		</tbody>
	</table>';
	
	
	$detailViewHttpFile .= 
		'</div>
	</div>';
		

	
	if ((isset($justDisplay)) && ($justDisplay)) {
	
		if ($returnHtml) {
			return $detailViewHttpFile;
		} else {
			echo $detailViewHttpFile;
		}
		
	} else {
		
		$exportHttpFile = fopen($tmpFilesDir.$httpHtmlFile, "w");
		fwrite($exportHttpFile, $detailViewHttpFile);
		fclose($exportHttpFile);
		
		if ($returnHtml)
			return false;
		
	}
		
		
} else {

	$detailViewHttpFile .=
	'<style>
		#dashletExport'.$dashletId.' {
			display: none;
		}
	</style>
	
	<div class="detail view">
		'.asol_ReportsGenerationFunctions::getReportHeaderInfo($isDashlet, $externalCall, asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NOT_AVAILABLE'), null, null).'
	</div>';
	
	if ($returnHtml) {
		return $detailViewHttpFile;
	} else {
		echo $detailViewHttpFile;
	}
	
}

		
?>
