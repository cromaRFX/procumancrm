<?php

class asol_ReportsGenerationFunctions {
	
	static public function getReportExportedFileName($reportName) {
		
		$exportedReportName = preg_replace ('/[^a-zA-Z0-9]/', '', $reportName);
		$reportNameNoSpaces = strtolower(str_replace(":", "", str_replace(" ", "_", $exportedReportName)));
		$httpHtmlFile = $reportNameNoSpaces."_".dechex(time()).dechex(rand(0,999999));
		
		return $httpHtmlFile;
		
	}
	
	static public function getReportHideLoadingCss($dashletId) {
		
		return '<style>
			#loadingGIF'.$dashletId.', #loadingTEXT'.$dashletId.' {
				display: none;
			}
		</style>';
		
	}
	
	static public function getReportNotIndexedOrderByAlert() {
		
		return '<script>
			ajaxStatus.showStatus("'.asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MAX_ALLOWED_NOT_INDEXED_ORDERBY_ALERT").'");
			setTimeout(function(){ ajaxStatus.hideStatus() }, 10000);
		</script>';
		
	}
	
	static public function getReportModuleTitle($reportName) {
		
		return '<div id="moduleTitle" class="moduleTitle">
			<h2>'.$reportName.'</h2>
		</div>
		<div class="clear"></div>';
		
	}
	
	static public function getReportPublicDescription($publicDescription, $isDashlet, $externalCall, $getExportData) {
		
		global $mod_strings;
		
		if ((!empty($publicDescription)) && (!$isDashlet)) {
		
			return 
			'<tr>
				<td>
					<div id="reportInfoDivWrapper" class="detail view">
						'.self::getReportHeaderInfo($isDashlet, $externalCall, $mod_strings['LBL_REPORT_DESCRIPTION'], null, ($getExportData ? null : "reportInfoDiv")).'
						<div id="reportInfoDiv">
							<table id="resultTable">
								<tbody>
									<tr>
										<td>'.nl2br($publicDescription).'</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</td>
			</tr>';
		
		}
		
	}
	
	static public function getOversizedReportMessage($maxAllowedDisplayed, $maxAllowedParseMultiTable, $maxAllowedGroupByEntries, $totalEntries, $totalUngroupedEntries, $isDashlet, $externalCall) {
		
		global $sugar_config;
		
		if ($maxAllowedDisplayed) {
			$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_OVERSIZED');
			$reportHeaderInfo = '<span style="color:red">'.$totalEntries.' to be processed by AlineaSolReports Engine ('.$sugar_config['asolReportsMaxAllowedDisplayed'].' max allowed).</span>';
		} else if ($maxAllowedParseMultiTable) {
			$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_OVERSIZED_MULTITABLE');
			$reportHeaderInfo = '<span style="color:red">'.$totalEntries.' to be processed by AlineaSolReports Engine ('.$sugar_config['asolReportsMaxAllowedParseMultiTable'].' max allowed).</span>';
		} else if ($maxAllowedGroupByEntries) {
			$reportHeaderMessage = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_OVERSIZED');
			$reportHeaderInfo = '<span style="color:red">'.$totalUngroupedEntries.' to be processed as grouped by AlineaSolReports Engine ('.$sugar_config['asolReportsMaxAllowedGroupByEntries'].' max allowed).</span>';
		}
		
		return '<div class="detail view">
					'.self::getReportHeaderInfo($isDashlet, $externalCall, $reportHeaderMessage, $reportHeaderInfo).'
				</div>';
		
	}
	
	static public function getChartContentsContainer($reportId, $chartsEngine, $urlChart, $html5Chart, $nvd3Chart, $getExportData) {

		global $mod_strings;
		
		$chartsHtml = '';
		
		if (count($urlChart) > 0) {
		
			$fixedReportId = str_replace("-", "", $reportId);
			
			$chartsHtml .= '<div id="chartsContent">';
				
			switch ($chartsEngine) {
			
				case "flash":
			
					foreach ($urlChart as $key=>$value) {
						if ($getExportData) {
							$chartsHtml .= '<chart key="'.$fixedReportId.'_'.$key.'"/>';
						} else {
							$chartsHtml .=
							'<div class="asolChartContainer" engine="flash">
								<div id="ASOLflash_'.$fixedReportId.'_'.$key.'">
									<strong>'.$mod_strings['LBL_REPORT_FLASH_WARNING'].'</strong>
		  							<a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Descargar Adobe Flash Player" /></a>
			
								</div>
							</div>';
						}
					}
					break;
						
				case "html5":
						
					$chartsHtml .= "<input type='hidden' id='showHideChartButton' value='true'>";
					foreach ($html5Chart as $key=>$html5) {
						if (isset($html5)) {
							if ($getExportData) {
								$chartsHtml .= '<chart key="'.$fixedReportId.'_'.$key.'"/>';
							} else {
								$chartsHtml .= '<div class="asolChartContainer" engine="html5" id="ASOLhtml5_'.$fixedReportId.'_'.$key.'" style="width: '.$html5['dimensions']['width'].';">'.$html5['html'].'</div>';
							}
						}
					}
					break;
						
				case "nvd3":
						
					foreach ($nvd3Chart as $key=>$nvd3) {
						if (isset($nvd3)) {
							if ($getExportData) {
								$chartsHtml .= '<chart key="'.$fixedReportId.'_'.$key.'"/>';
							} else {
								$chartsHtml .=
								'<div class="asolChartContainer" engine="nvd3" style="height: '.($nvd3['dimensions']['height']+30).'px; width: '.$nvd3['dimensions']['width'].';" id="ASOLnvd3_'.$fixedReportId.'_'.$key.'">
									'.$nvd3['html'].'
									<svg xmlns="http://www.w3.org/2000/svg" id="ASOLsvg_'.$fixedReportId.'_'.$key.'" style="height: '.(($nvd3['dimensions']['height'] < 400) ? ($nvd3['dimensions']['height'] + 140) : ($nvd3['dimensions']['height'])).'px; width: '.$nvd3['dimensions']['width'].';"></svg>
								</div>';
							}
						}
					}
					break;
						
				default:
					break;
						
			}
				
			$chartsHtml .= '</div>';
		
		}
		
		return $chartsHtml;
		
	}
	
	static public function getReportDetailButtons($reportId, $isMetaReport, $isFilterVisible, $reportDomainId, $created_by, $assigned_user_id, $report_scope, $attachmentFormat, $sendEmailquestion, $hasExternalApp, $filtersHiddenInputs, $searchCriteria, $isDashlet, $dashletId, $vardefFilters, $externalCall, $getLibraries, $overrideEntries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview) {

		global $current_user, $sugar_config, $db, $mod_strings;
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$dashletExportButtons = (isset($sugar_config['asolReportsDashletExportButtons']) ? $sugar_config['asolReportsDashletExportButtons'] : true);
		
		$hasVardefFilter = (!empty($vardefFilters));
		$fixedReportId = str_replace("-", "", $reportId);
		$fixedDashletId = str_replace("-", "", $dashletId);
		
		$returnedHTML = "";
		
		if ((!$isDashlet) && (!$externalCall) && (!$filtersHiddenInputs) && (!$isPreview)) {

			$returnedHTML .= '<button id="reportbutton_refresh" class="button" onclick="document.display_form.action.value=\'DetailView\';document.display_form.return_action.value=\'refresh\'; document.display_form.sort_field.value=\'\';document.display_form.sort_direction.value=\'\'; document.display_form.submit()">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_REFRESH').'</button>';

		}
		
		if (!$isMetaReport) {

			if ($filtersHiddenInputs && (!$externalCall) && (!isset($scheduledEmailHideButtons))) {
				
				$returnedHTML .= '<button class="button executeReportBtn" style="display: '.($isFilterVisible ? 'inline' : 'none').'" onClick="reloadCurrentDashletReport'.$fixedDashletId.'(0, \'\', \'\', \'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($overrideEntries) ? '&overrideEntries='.$overrideEntries : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_EXECUTE').'</button>';
				$returnedHTML .= '<button class="button clearReportBtn" style="display: '.($isFilterVisible ? 'inline' : 'none').'" onClick="clearUserInputs(this, '.($isDashlet ? 'true' : 'false').');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CLEAR').'</button>';
				
				$returnedHTML .= '<script>
					'.self::getAttachedScript2ExecuteCriteriaOnKeyPressed().'
					generateFancyMultiEnum($(".asolFirstParameter select"), 3, true);
					generateFancyMultiEnum($(".asolSecondParameter select"), 3, true);
					generateFancyMultiEnum($(".asolThirdParameter select"), 3, true); 
				</script>';
				
			}

		}
			
		if (($isDashlet && (!$hasVardefFilter || $isWsExecution) && $dashletExportButtons) || (!$isDashlet && !$externalCall && !$isPreview)) {
	
			$domainReportModifiable = (asol_ReportsUtils::isDomainsInstalled()) ? asol_ReportsManagementFunctions::domainCanModifyReport($reportDomainId) : true;
			$userReportModifiable = asol_ReportsManagementFunctions::userCanModifyReport($created_by, $assigned_user_id);
			$roleReportModifiable = asol_ReportsManagementFunctions::roleCanModifyReport($report_scope);
			
	
			if ((!$isDashlet) && (!$isWsExecution) && (($roleReportModifiable) || ($userReportModifiable)) && ($domainReportModifiable) && (ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode) && (!isset($scheduledEmailHideButtons))) {
				$returnedHTML .= '<button id="reportbutton_edit" title="'.$mod_strings['LBL_REPORT_EDIT'].'" class="button" onclick="document.display_form.action.value=\'EditView\'; document.display_form.return_action.value=\'\'; document.display_form.submit()">'.$mod_strings['LBL_REPORT_EDIT'].'</button>';
			}
			
				
			if ((($filtersHiddenInputs == false) || ($searchCriteria == true)) && (!$displayNoDataMsg)) {
					
				if (!$isDashlet) {
					$returnedHTML .= '<button id="reportbutton_export" title="'.$mod_strings['LBL_REPORT_EXPORT_ONE'].'" class="button" onmouseover="openExportReportDialog(this, \''.$dashletId.'\');" onmouseout="clearTimeout(window[\'exportButtonTimeout\']); $(\'#asolReportExportDiv'.$dashletId.'\').hide();">'.$mod_strings['LBL_REPORT_EXPORT_ONE'].'<img src="themes/default/images/more.gif" style="vertical-align: bottom;"></button>';
				}

				$returnedHTML .= '<ul class="asolReportExportDiv" id="asolReportExportDiv'.$dashletId.'" style="display: none; z-index: 1001;" onmouseover="$(this).show();" onmouseout="$(this).hide();">';

				$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_html" onclick="generateExportedFile(\'html\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_HTML').'</a></li>';
				
				if (!$isMetaReport) {
				
					$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_pdf" onclick="generateExportedFile(\'pdf\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_PDF').'</a></li>';
				
					$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_csv" onclick="generateExportedFile(\'csv\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CSV').'</a></li>';
					$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_csvc" onclick="generateExportedFile(\'csvc\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CSV_CLEAN').'</a></li>';	
				
					$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_xls" onclick="generateExportedFile(\'xls\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_XLS').'</a></li>';
					$returnedHTML .= '<li><a href="javascript:void(0)" id="reportbutton_xlsc" onclick="generateExportedFile(\'xlsc\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_XLS_CLEAN').'</a></li>';	
			
				}
				
				$returnedHTML .= '</ul>';

				
				if ((!$isDashlet) && (!$isWsExecution) && (ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode)) {
		
					$returnedHTML .= '<button id="reportbutton_email" title="'.$mod_strings['LBL_REPORT_SEND_EMAIL'].'" class="button" onclick="if (confirm(\''.$sendEmailquestion.'\')){ generateExportedFile(\'email\', \''.strtolower($attachmentFormat).'\', \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\'); }">'.$mod_strings['LBL_REPORT_SEND_EMAIL'].'</button>';
					
					if (isset($sugar_config['asolReportsExternalApplicationFixedParams']) && $hasExternalApp && (!$isMetaReport))
						$returnedHTML .= '<button id="reportbutton_app" title="'.$mod_strings['LBL_REPORT_SEND_APP'].'" class="button" onclick="generateExportedFile(\'app\', null, \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\');">'.$mod_strings['LBL_REPORT_SEND_APP'].'</button>';
					
				}		
		
			}
		
		}
		
		return $returnedHTML;
		
	}
			
	
	static public function getReportDetailPagination($reportId, $columnsCount, $externalCall, $getLibraries, $overrideEntries, $isDashlet, $dashletId, $numPages, $numPagesLabel, $pageNumber, $pageNumberLabel, $totalEntries, $sortField, $sortDirection, $sortIndex, $vardefFilters) {
		
		global $mod_strings, $app_strings;
	
		$fixedDashletId = str_replace("-", "", $dashletId);
		
		$returnedHTML = "";
		
		$previousPage = ($pageNumber > 0) ? $pageNumber-1 : '0';
		$nextPage = ($pageNumber < $numPages) ? $pageNumber+1 : $numPages;
		
		$paginationSortDirection = (isset($_REQUEST['sort_direction'])) ? $_REQUEST['sort_direction'] : $sortDirection;
		$paginationSortIndex = (isset($_REQUEST['sort_index'])) ? $_REQUEST['sort_index'] : $sortIndex;
		
		$disabledPaginationButtonsBack = (($numPages == 0) || ($pageNumber == 0)) ? "disabled" : "";
		$disabledPaginationButtonsForward = (($numPages == 0) || ($pageNumber == $numPages) || ($totalEntries == 0)) ? "disabled" : "";
		
		$paginationStartImg = (($numPages == 0) || ($pageNumber == 0)) ? "themes/default/images/start_off.gif" : "themes/default/images/start.gif";
		$paginationPreviousImg = (($numPages == 0) || ($pageNumber == 0)) ? "themes/default/images/previous_off.gif" : "themes/default/images/previous.gif";
		$paginationNextImg = (($numPages == 0) || ($pageNumber == $numPages) || ($totalEntries == 0)) ? "themes/default/images/next_off.gif" : "themes/default/images/next.gif";
		$paginationEndImg = (($numPages == 0) || ($pageNumber == $numPages) || ($totalEntries == 0)) ? "themes/default/images/end_off.gif" : "themes/default/images/end.gif";
			
		
		if ((!$externalCall) && ($numPages > 0)) {
	
			$returnedHTML .= 
			'<tr class="pagination">
				<td colspan="'.$columnsCount.'">
					<table cellspacing="0" cellpadding="0" border="0" width="100%" class="paginationTable">
						<tbody><tr>
												
							<td nowrap="nowrap" align="right" width="1%" class="paginationChangeButtons">';							
			
						$returnedHTML .=
								'<button '.$disabledPaginationButtonsBack.' title="'.$app_strings['LNK_LIST_START'].'" class="button paginationStart" name="listViewStartButton" type="button" onClick="reloadCurrentDashletReport'.$fixedDashletId.'(0, \''.$sortField.'\', \''.$paginationSortDirection.'\', \''.$paginationSortIndex.'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($overrideEntries) ? '&overrideEntries='.$overrideEntries : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">
									<img height="11" border="0" align="absmiddle" width="13" alt="'.$app_strings['LNK_LIST_START'].'" src="'.$paginationStartImg.'">
								</button>
								
								<button '.$disabledPaginationButtonsBack.' title="'.$app_strings['LNK_LIST_PREVIOUS'].'" class="button paginationPrev" name="listViewPrevButton" type="button"  onClick="reloadCurrentDashletReport'.$fixedDashletId.'('.$previousPage.', \''.$sortField.'\', \''.$paginationSortDirection.'\', \''.$paginationSortIndex.'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($overrideEntries) ? '&overrideEntries='.$overrideEntries : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">
									<img height="11" border="0" align="absmiddle" width="8" alt="'.$app_strings['LNK_LIST_PREVIOUS'].'" src="'.$paginationPreviousImg.'">
								</button>

								<span class="pageNumbers">'.translate('LBL_REPORT_PAGINATION_PAGE', 'asol_Reports').' '.$pageNumberLabel.' '.translate('LBL_REPORT_PAGINATION_OF', 'asol_Reports').' '.$numPagesLabel.'</span>
								
								<button '.$disabledPaginationButtonsForward.' title="'.$app_strings['LNK_LIST_NEXT'].'" class="button paginationNext" name="listViewNextButton" type="button" onClick="reloadCurrentDashletReport'.$fixedDashletId.'('.$nextPage.', \''.$sortField.'\', \''.$paginationSortDirection.'\', \''.$paginationSortIndex.'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($overrideEntries) ? '&overrideEntries='.$overrideEntries : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">
									<img height="11" border="0" align="absmiddle" width="8" alt="'.$app_strings['LNK_LIST_NEXT'].'" src="'.$paginationNextImg.'">
								</button>
								
								<button '.$disabledPaginationButtonsForward.' title="'.$app_strings['LNK_LIST_END'].'" class="button paginationEnd" name="listViewEndButton" type="button"  onClick="reloadCurrentDashletReport'.$fixedDashletId.'('.$numPages.', \''.$sortField.'\', \''.$paginationSortDirection.'\', \''.$paginationSortIndex.'\', \''.($isDashlet && $getLibraries ? '&getLibraries=true' : '').(!empty($overrideEntries) ? '&overrideEntries='.$overrideEntries : '').'&search_criteria=1&external_filters=\'+encodeURIComponent(formatExternalFilters(\''.$dashletId.'\')), \''.$vardefFilters.'\');">
					 				<img height="11" border="0" align="absmiddle" width="13" alt="'.$app_strings['LNK_LIST_END'].'" src="'.$paginationEndImg.'">
								</button>';

		
						$returnedHTML .=
							'</td>
		
						</tr></tbody>
					</table>
				</td>
			</tr>';
			
		}
		
		return $returnedHTML;
		
	}
	
	static private function getCollapseImg($containerId) {
	
		return '<img onclick="if( $(&quot;#'.$containerId.'&quot;).is(&quot;:visible&quot;) ) { $(&quot;#'.$containerId.'&quot;).hide(); $(&quot;#'.$containerId.'_collapseImg&quot;).attr(&quot;src&quot;, &quot;themes/default/images/advanced_search.gif&quot;) } else { $(&quot;#'.$containerId.'&quot;).show(); $(&quot;#'.$containerId.'_collapseImg&quot;).attr(&quot;src&quot;, &quot;themes/default/images/basic_search.gif&quot;) } " onmouseout="this.style.cursor=&quot;default&quot;" onmouseover="this.style.cursor=&quot;pointer&quot;" src="themes/default/images/basic_search.gif" id="'.$containerId.'_collapseImg" style="cursor: default;">&nbsp';
	
	}
	
	static public function getReportHeaderInfo($isDashlet, $externalCall, $reportHeaderMessage, $reportHeaderInfo = null, $collapsableHeaderId = null) {
	
		if (isset($reportHeaderMessage)) {
		
			$headerHtml = (!$isDashlet) ? '<h4>' : '';
			if (!$externalCall) {
				$headerHtml .= ($collapsableHeaderId !== null) ? self::getCollapseImg($collapsableHeaderId) : '';
			}
			$headerHtml .= ($reportHeaderInfo !== null) ? '<em>'.$reportHeaderMessage.'</em>'.' : '.$reportHeaderInfo : '<em>'.$reportHeaderMessage.'</em>';
			$headerHtml .= (!$isDashlet) ? '</h4>' : '';
		
		}
		
		return $headerHtml;
	
	}
	
	static public function getReportExportForm($dashletId, $exportedReportFile, $isWsExecution) {
		
		return 
		'<form id="export_form'.$dashletId.'" name="export_form'.$dashletId.'" method="post" action="index.php">
		
			<input type="hidden" name="module" value="asol_Reports">
			<input type="hidden" name="entryPoint" value="reportAjaxActions">
			<input type="hidden" name="actionTarget" value="downloadExportedReport">
			<input type="hidden" name="getContent" value="true">
		
			<input type="hidden" name="fileName" value="'.$exportedReportFile.'">
			<input type="hidden" name="fileType" value="">
			<input type="hidden" name="mimeType" value="">
			
			<input type="hidden" name="pngs" value="">
			<input type="hidden" name="legends" value="">
			<input type="hidden" name="engines" value="">
			
			<input type="hidden" name="isWsExecution" value="'.($isWsExecution ? '1' : '0').'">
		
		</form>';
		
	}
	
	static public function getReportDetailSearchCriteria($reportId, $filterVisibility, $filtersPanel, $filtersHiddenInputs, $external_filters, $searchCriteria, $currentUserId, $hasVardefFilter, $isDashlet, $dashletId, $cleanUpStyling) {
		
		global $mod_strings;
		
		$returnedHTML = "";
		
		if (!empty($filtersPanel)) {
							
			$returnedHTML .=
				'<div class="'.($cleanUpStyling ? '' : 'detail ').'view" style="display: '.($filterVisibility ? 'block' : 'none').';">
					
					<h4>'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_SEARCH_CRITERIA').'</h4>
					
					<form id="criteria_form" name="criteria_form" onsubmit="return false;">
					<input type="hidden" id="filters_hidden_inputs'.$dashletId.'" name="filters_hidden_inputs'.$dashletId.'" value="'.$filtersHiddenInputs.'">
					<input type="hidden" id="external_filters" name="external_filters" value="'.$external_filters.'">
					<input type="hidden" id="search_criteria" name="search_criteria" value="'.$searchCriteria.'">
					<input type="hidden" id="currentUserId" name="currentUserId" value="'.$currentUserId.'">
						
					<table id="search_criteria" class="asolReportsCriteriaTable">';
	
						$numFilters = count($filtersPanel);
						
						$filtersPerRow = ($isDashlet && !$hasVardefFilter ? 1 : 2);
						$filterWidth = round((100.0 / $filtersPerRow / 5), 2);
						
						$returnedHTML .= '<colgroup>';
						for($i=0; $i<$filtersPerRow; $i++) {
							$returnedHTML .= '<col span="5" style="width: '.$filterWidth.'%;" />';
						}
						$returnedHTML .= '</colgroup>';
						
						$returnedHTML .= '<tbody>';
						$index = 1;
						foreach ($filtersPanel as $key=>$item) {
							
							if (($index % $filtersPerRow) == 1) { // first filter
								$returnedHTML .= '<tr>';
							}
							
							$returnedHTML .= '
								<td class="asolFilterInfo" scope="col" valign="top">
									<input id="filterType" type="hidden" value="'.$item['type'].'">
									<input id="filterRef" type="hidden" value="'.$item['reference'].'">
									<b>'.$item['label'].'</b>
								</td>
								<td valign="top">
									'.$item['genLabel'].'
								</td>';
							
							if (empty($item['input2']) && empty($item['input3'])) {
								$returnedHTML .= '
								<td class="asolFirstParameter" valign="top" colspan="3">
									'.$item['input1'].'
								</td>';
							} else if (empty($item['input3'])) {
								$returnedHTML .= '
								<td class="asolFirstParameter" valign="top">
									'.$item['input1'].'
								</td>
								<td class="asolSecondParameter" valign="top" colspan="2">
									'.$item['input2'].'
								</td>';
							} else {
								$returnedHTML .= '
								<td class="asolFirstParameter" valign="top">
									'.$item['input1'].'
								</td>
								<td class="asolSecondParameter" valign="top">
									'.$item['input2'].'
								</td>
								<td class="asolThirdParameter" valign="top">
									'.$item['input3'].'
								</td>';
							}
							
							if ((($index % $filtersPerRow) == 0) || ($index == $numFilters)) {
								if (($index == $numFilters) && ($index % 2 != 0) && (!$isDashlet)) {
									$returnedHTML .= '
									<td scope="col" style="width: 10%;"></td>
									<td colspan="4" style="width: 40%;"></td>';								
								}
								
								$returnedHTML .= '</tr>';
							}
							
							$index++;
							
						}
						$returnedHTML .= '</tbody>';
									
			$returnedHTML .= '
						</table>
					</form>
			
				</div>';
			
		}
		
		return $returnedHTML;
		
	}
	
	public static function getEmailInfo($emailList) {
	
		global $mod_strings, $db;
		
		$email_list_field = explode('${pipe}', urldecode($emailList));
						
		$users_to = explode('${comma}', urldecode($email_list_field[1]));
		$users_cc = explode('${comma}', urldecode($email_list_field[2]));
		$users_bcc = explode('${comma}', urldecode($email_list_field[3]));
		$roles_to = explode('${comma}', urldecode($email_list_field[4]));
		$roles_cc = explode('${comma}', urldecode($email_list_field[5]));
		$roles_bcc = explode('${comma}', urldecode($email_list_field[6]));
		$emails_to = explode(',', urldecode($email_list_field[7]));
		$emails_cc = explode(',', urldecode($email_list_field[8]));
		$emails_bcc = explode(',', urldecode($email_list_field[9]));
		
		return array(
			"emailFrom" => $email_list_field[0],
			"emailArrays" => array(
				"users_to" => $users_to,
				"users_cc" => $users_cc,
				"users_bcc" => $users_bcc,
				"roles_to" => $roles_to,
				"roles_cc" => $roles_cc,
				"roles_bcc" => $roles_bcc,
				"emails_to" => $emails_to,
				"emails_cc" => $emails_cc,
				"emails_bcc" => $emails_bcc
			)
		);
		
	}
		
	public static function setSendEmailAddresses(& $reportMailer, $emailArray, $contextDomainId = null) {
		
		global $current_user, $db;
		
		if (asol_ReportsUtils::isDomainsInstalled()) {
			$domainId = ($contextDomainId != null) ? $contextDomainId : $current_user->asol_default_domain;
		}
		
		
		//***********************//
		//****** TO EMAILS ******//
		//***********************//
		foreach ($emailArray['users_to'] as $key=>$value) {
			$userBean = BeanFactory::getBean('Users', $value);
			if (!empty($userBean)) {
				$userEmail = $userBean->getUsersNameAndEmail();
				$validUserMail = (asol_ReportsUtils::isDomainsInstalled()) ? (($userEmail['email'] != "") && (($userBean->asol_domain_id == $domainId) || $userBean->is_admin)) : ($userEmail['email'] != "");
				if ($validUserMail) {
					$reportMailer->AddAddress($userEmail['email']);
				}
			}
		}
		foreach($emailArray['roles_to'] as $key => $value) {
			$usersFromRole = Array();
			if (asol_ReportsUtils::isDomainsInstalled()) {
				$usersFromRoleSql = "SELECT acl_roles_users.user_id FROM acl_roles_users LEFT JOIN users ON acl_roles_users.user_id=users.id WHERE acl_roles_users.role_id = '".$value."' AND users.deleted=0 AND users.asol_domain_id='".$domainId."'";
			} else {
				$usersFromRoleSql = "SELECT user_id FROM acl_roles_users WHERE role_id = '".$value."'";
			}
			$usersFromRoleRs = $db->query($usersFromRoleSql);
			while($userFromRole_Row = $db->fetchByAssoc($usersFromRoleRs))
				$usersFromRole[] = $userFromRole_Row['user_id'];
			foreach($usersFromRole as $key=>$value) {
				$userEmail = BeanFactory::getBean('Users', $value)->getUsersNameAndEmail();
				if ($userEmail['email'] != "") {
					$reportMailer->AddAddress($userEmail['email']);
				}
			}
		}
		foreach ($emailArray['emails_to'] as $key=>$value){
			if ($value != "") {
				$reportMailer->AddAddress($value);
			}	
		}
		
		//***********************//
		//****** CC EMAILS ******//
		//***********************//
		//Emails de los destinatarios copias
		foreach ($emailArray['users_cc'] as $key=>$value) {
			$userBean = BeanFactory::getBean('Users', $value);
			if (!empty($userBean)) {
				$userEmail = $userBean->getUsersNameAndEmail();
				$validUserMail = (asol_ReportsUtils::isDomainsInstalled()) ? (($userEmail['email'] != "") && (($userBean->asol_domain_id == $domainId) || $userBean->is_admin)) : ($userEmail['email'] != "");
				if ($validUserMail) {
					$reportMailer->AddCC($userEmail['email']);
				}
			}
		}
		foreach($emailArray['roles_cc'] as $key => $value) {
			$usersFromRole = Array();
			if (asol_ReportsUtils::isDomainsInstalled()) {
				$usersFromRoleSql = "SELECT acl_roles_users.user_id FROM acl_roles_users LEFT JOIN users ON acl_roles_users.user_id=users.id WHERE acl_roles_users.role_id = '".$value."' AND users.deleted=0 AND users.asol_domain_id='".$domainId."'";
			} else {
				$usersFromRoleSql = "SELECT user_id FROM acl_roles_users WHERE role_id = '".$value."'";
			}
			$usersFromRoleRs = $db->query($usersFromRoleSql);
			while($userFromRole_Row = $db->fetchByAssoc($usersFromRoleRs))
				$usersFromRole[] = $userFromRole_Row['user_id'];
			foreach($usersFromRole as $key=>$value) {
				$userEmail = BeanFactory::getBean('Users', $value)->getUsersNameAndEmail();
				if ($userEmail['email'] != "") {
					$reportMailer->AddCC($userEmail['email']);
				}
			}
		}
		foreach ($emailArray['emails_cc'] as $key=>$value){
			if ($value != "") {
				$reportMailer->AddCC($value);
			}
		}
		
		//***********************//
		//***** BCC EMAILS ******//
		//***********************//
		foreach ($emailArray['users_bcc'] as $key=>$value) {
			$userBean = BeanFactory::getBean('Users', $value);
			if (!empty($userBean)) {
				$userEmail = $userBean->getUsersNameAndEmail();
				$validUserMail = (asol_ReportsUtils::isDomainsInstalled()) ? (($userEmail['email'] != "") && (($userBean->asol_domain_id == $domainId) || $userBean->is_admin)) : ($userEmail['email'] != "");
				if ($validUserMail) {
					$reportMailer->AddBCC($userEmail['email']);
				}
			}
		}
		foreach($emailArray['roles_bcc'] as $key => $value) {
			$usersFromRole = Array();
			if (asol_ReportsUtils::isDomainsInstalled()) {
				$usersFromRoleSql = "SELECT acl_roles_users.user_id FROM acl_roles_users LEFT JOIN users ON acl_roles_users.user_id=users.id WHERE acl_roles_users.role_id = '".$value."' AND users.deleted=0 AND users.asol_domain_id='".$domainId."'";
			} else {
				$usersFromRoleSql = "SELECT user_id FROM acl_roles_users WHERE role_id = '".$value."'";
			}
			$usersFromRoleRs = $db->query($usersFromRoleSql);
			while($userFromRole_Row = $db->fetchByAssoc($usersFromRoleRs))
				$usersFromRole[] = $userFromRole_Row['user_id'];
			foreach($usersFromRole as $key=>$value) {
				$userEmail = BeanFactory::getBean('Users', $value)->getUsersNameAndEmail();
				if ($userEmail['email'] != "") {
					$reportMailer->AddBCC($userEmail['email']);
				}
			}
		}
		foreach ($emailArray['emails_bcc'] as $key=>$value){
			if ($value != "") {
				$reportMailer->AddBCC($value);
			}
		}
		
	}
	
	public static function getSendEmailAlert($emailList, $contextDomainId = null) {
	
		global $mod_strings, $db, $current_user;
		

		if (asol_ReportsUtils::isDomainsInstalled()) {
			$domainId = ($contextDomainId != null) ? $contextDomainId : $current_user->asol_default_domain;
		}
		
		$emailInfo = self::getEmailInfo($emailList);
		$emailInfoArray = $emailInfo['emailArrays'];
		
		$sendEmailquestion = $mod_strings['MSG_REPORT_SEND_EMAIL_ALERT'].'\n\n';
		
		if (!empty($emailInfoArray['users_to'][0])) {
			$usersToAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$usersToQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_to'])."') AND ((asol_domain_id = '".$domainId."') OR (is_admin = 1))");
			else
				$usersToQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_to'])."')");
			while ($usersToRow = $db->fetchByAssoc($usersToQuery))
				$usersToAux[] = $usersToRow['user_name'];
			
			if (!empty($usersToAux))
				$sendEmailquestion .= 'Users To: '.implode(', ', $usersToAux).'\n';
		}
		
		if (!empty($emailInfoArray['users_cc'][0])) {
			$usersCcAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$usersCcQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_cc'])."') AND ((asol_domain_id = '".$domainId."') OR (is_admin = 1))");
			else
				$usersCcQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_cc'])."')");
			while ($usersCcRow = $db->fetchByAssoc($usersCcQuery))
				$usersCcAux[] = $usersCcRow['user_name'];
				
			if (!empty($usersCcAux))
				$sendEmailquestion .= 'Users CC: '.implode(', ', $usersCcAux).'\n';
		}
		
		if (!empty($emailInfoArray['users_bcc'][0])) {
			$usersBccAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$usersBccQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_bcc'])."') AND ((asol_domain_id = '".$domainId."') OR (is_admin = 1))");
			else
				$usersBccQuery = $db->query("SELECT id, user_name FROM users WHERE id IN('".implode("','", $emailInfoArray['users_bcc'])."')");
			while ($usersBccRow = $db->fetchByAssoc($usersBccQuery))
				$usersBccAux[] = $usersBccRow['user_name'];
			
			if (!empty($usersBccAux))
				$sendEmailquestion .= 'Users BCC: '.implode(', ', $usersBccAux).'\n\n';
		}
		
		if (!empty($emailInfoArray['roles_to'][0])) {
			$rolesToAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$rolesToQuery = $db->query("SELECT Role.name as name FROM acl_roles Role LEFT JOIN asol_domains_aclroles RoleDomain ON (Role.id=RoleDomain.aclrole_id) WHERE Role.id IN('".implode("','", $emailInfoArray['roles_to'])."') AND RoleDomain.asol_domain_id = '".$domainId."'");
			else
				$rolesToQuery = $db->query("SELECT name FROM acl_roles WHERE id IN('".implode("','", $emailInfoArray['roles_to'])."')");
			while ($rolesToRow = $db->fetchByAssoc($rolesToQuery))
				$rolesToAux[] = $rolesToRow['name'];
				
			if (!empty($rolesToAux))
				$sendEmailquestion .= 'Roles To: '.implode(', ', $rolesToAux).'\n';
		}
		
		if (!empty($emailInfoArray['roles_cc'][0])) {
			$rolesCcAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$rolesCcQuery = $db->query("SELECT Role.name as name FROM acl_roles Role LEFT JOIN asol_domains_aclroles RoleDomain ON (Role.id=RoleDomain.aclrole_id) WHERE Role.id IN('".implode("','", $emailInfoArray['roles_cc'])."') AND RoleDomain.asol_domain_id = '".$domainId."'");
			else
				$rolesCcQuery = $db->query("SELECT name FROM acl_roles WHERE id IN('".implode("','", $emailInfoArray['roles_cc'])."')");
			while ($rolesCcRow = $db->fetchByAssoc($rolesCcQuery))
				$rolesCcAux[] = $rolesCcRow['name'];
			
			if (!empty($rolesCcAux))
				$sendEmailquestion .= 'Roles CC: '.implode(', ', $rolesCcAux).'\n';
		}
		
		if (!empty($emailInfoArray['roles_bcc'][0])) {
			$rolesBccAux = array();
			if (asol_ReportsUtils::isDomainsInstalled())
				$rolesBccQuery = $db->query("SELECT Role.name as name FROM acl_roles Role LEFT JOIN asol_domains_aclroles RoleDomain ON (Role.id=RoleDomain.aclrole_id) WHERE Role.id IN('".implode("','", $emailInfoArray['roles_bcc'])."') AND RoleDomain.asol_domain_id = '".$domainId."'");
			else
				$rolesBccQuery = $db->query("SELECT name FROM acl_roles WHERE id IN('".implode("','", $emailInfoArray['roles_bcc'])."')");
			while ($rolesBccRow = $db->fetchByAssoc($rolesBccQuery))
				$rolesBccAux[] = $rolesBccRow['name'];
			
			if (!empty($rolesBccAux))
				$sendEmailquestion .= 'Roles BCC: '.implode(', ', $rolesBccAux).'\n\n';
		}
		
		$sendEmailquestion .= (!empty($emailInfoArray['emails_to'][0])) ? 'Emails To: '.implode(', ', $emailInfoArray['emails_to']).'\n' : '';
		$sendEmailquestion .= (!empty($emailInfoArray['emails_cc'][0])) ? 'Emails CC: '.implode(', ', $emailInfoArray['emails_cc']).'\n' : '';
		$sendEmailquestion .= (!empty($emailInfoArray['emails_bcc'][0])) ? 'Emails BCC: '.implode(', ', $emailInfoArray['emails_bcc']) : '';
			
		return $sendEmailquestion;
		
	}
	
	
	public static function cleanDataBaseReportDispatcher() {
			
		global $db, $sugar_config;
		
		if (asol_ReportsUtils::dispatcherTableExists()) {
	
			$currentTime = time();
			
			$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
			$timedOutStamp = $currentTime - $sugar_config['asolReportsMaxExecutionTime']; //Time to check report execution expiration time
			$closedWindowStamp = $currentTime - ($checkHttpFileTimeout / 500);  //Time to check last recall not updated for manual Reports (browser screen closed). 
			
			$cleanDispatcherTableSql = "DELETE FROM asol_reports_dispatcher WHERE (status IN ('terminated', 'timeout')) OR (request_init_date < '".date("Y-m-d H:i:s", $timedOutStamp)."') OR ((status = 'waiting') AND (request_type = 'manual') AND (last_recall < '".date("Y-m-d H:i:s", $closedWindowStamp)."'))";
			$db->query($cleanDispatcherTableSql);
			
		}
		
	}
	
	
	public static function manageReportExternalDispatcher($dispatcherMaxRequests) {
	
		global $db, $sugar_config;
		
		if ($dispatcherMaxRequests > 0) {
			
			$_REQUEST["reportRequestId"] = $requestId;
			
			$waitForReport = false;
			
			$curlRequestedUrl = (isset($sugar_config["asolReportsCurlRequestUrl"]) ? $sugar_config["asolReportsCurlRequestUrl"].'/': '')."index.php?entryPoint=viewReport&module=asol_Reports&sourceCall=external&record=".$reportId."&external_filters=".$external_filters."&language=".$_REQUEST['language'];
				
			$requestId = create_guid();
			$currentGMTTime = time();
			$currentGMTDate = date('Y-m-d H:i:s', $currentGMTTime);
			
			$reportRequestId = "&reportRequestId=".$requestId;
			$curlRequestedUrl .= $reportRequestId;			
			$curlRequestedUrl .= "&initRequestDateTimeStamp=".$currentGMTTime;
			
			
			//******************************************************//
			//***This requested parameters must be sent with curl***//
			//******************************************************//
			if (!isset($_REQUEST["reportRequestId"]))
				$_REQUEST["reportRequestId"] = $requestId;
			if (!isset($_REQUEST["initRequestDateTimeStamp"]))
				$_REQUEST["initRequestDateTimeStamp"] = $currentGMTTime;
			//******************************************************//
			//***This requested parameters must be sent with curl***//
			//******************************************************//
				
			asol_ReportsUtils::reports_log('asol', 'Reporting Queue Feature Enabled', __FILE__, __METHOD__, __LINE__);
				
			$reportsDispatcherSql = "SELECT COUNT(DISTINCT id) as 'reportsThreads' FROM asol_reports_dispatcher WHERE status = 'executing'";
			$reportsDispatcherRs = $db->query($reportsDispatcherSql);
			$reportsDispatcherRow = $db->fetchByAssoc($reportsDispatcherRs);
			
			$currentReportsRunningThreads = $reportsDispatcherRow["reportsThreads"];

			$waitForReport = ($currentReportsRunningThreads >= $dispatcherMaxRequests);
			$dispatcherReportSql = "INSERT INTO asol_reports_dispatcher VALUES ('".$requestId."', '".$reportId."', '".$curlRequestedUrl."', '".($waitForReport ? 'waiting' : 'executing')."', '".$currentGMTDate."', '".$currentGMTDate."', 'external', '".$currentUserId."')";
			$db->query($dispatcherReportSql);
			
			
			$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
			$micro_seconds = $checkHttpFileTimeout * 1000;
			
			if ($waitForReport) {
				
				$isInReadyArray = false;
				
				while (($currentReportsRunningThreads >= $dispatcherMaxRequests) && (!$isInReadyArray)) {
					
					usleep($micro_seconds);
					
					$initGMTTime = $_REQUEST["initRequestDateTimeStamp"];
					$recallGMTTime = time();
					$recallGMTDate = date('Y-m-d H:i:s', $recallGMTTime);
					
					
					//Check Max Report Execution time
					$runningTimeSeconds = $recallGMTTime - $initGMTTime;
					asol_ReportsUtils::reports_log('debug', 'Running Time: '.$runningTimeSeconds, __FILE__, __METHOD__, __LINE__);
					
					
					if ($runningTimeSeconds > $sugar_config['asolReportsMaxExecutionTime']) {
				
						asol_ReportsUtils::reports_log('asol', 'Report with Id ['.$reportId.'] has TimedOut!!', __FILE__, __METHOD__, __LINE__);
							
						$sqlExecutingStatus = "UPDATE asol_reports_dispatcher SET last_recall='".$recallGMTDate."', status = 'timeout' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
						$db->query($sqlExecutingStatus);
						die($mod_strings['LBL_REPORT_TIMEOUT']);
						
					}
					//Check Max Report Execution time
					
		
					$reportsDispatcherSql = "SELECT COUNT(DISTINCT id) as 'reportsThreads' FROM asol_reports_dispatcher WHERE status = 'executing'";
					$reportsDispatcherRs = $db->query($reportsDispatcherSql);
					$reportsDispatcherRow = $db->fetchByAssoc($reportsDispatcherRs);
					
					$currentReportsRunningThreads = $reportsDispatcherRow["reportsThreads"];
					
					$sqlLastRecall = "UPDATE asol_reports_dispatcher SET last_recall='".$recallGMTDate."' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
					$db->query($sqlLastRecall);
					
					//Check if Report is ready to Run (order by time ascending)
					if ($currentReportsRunningThreads < $dispatcherMaxRequests) {
					
						$availableReportThreads = $dispatcherMaxRequests - $currentReportsRunningThreads;
						
						$sqlWaitingReports = "SELECT id FROM asol_reports_dispatcher WHERE status = 'waiting' ORDER BY request_init_date ASC LIMIT ".$availableReportThreads;
						$rsWaitingReports = $db->query($sqlWaitingReports);
						
						$firtReports = array();
						
						while($row = $db->fetchByAssoc($rsWaitingReports))
							$firtReports[] = $row['id'];
						//Check if Report is ready to Run (order by time ascending)
						
						if (in_array($_REQUEST["reportRequestId"], $firtReports))
							$isInReadyArray = true;
					
					}
							
				}
				
				$sqlSetExecuting = "UPDATE asol_reports_dispatcher SET status = 'executing' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
				$db->query($sqlSetExecuting);
				
			}
	
		}
			
	}
	
	
	public static function getExternalRequestParams() {
					
		global $current_user, $current_language, $mod_strings;
		
		//Get language from url request parameter
		if (isset($_REQUEST['language']) && !empty($_REQUEST['language'])) {
			
			$current_language = $_REQUEST['language'];
			$mod_strings = return_module_language($current_language, "asol_Reports");
		
		}
		
		//Check if current user is setted on request
		if (isset($_REQUEST['currentUserId']) && !empty($_REQUEST['currentUserId'])) {
			
			$current_user = BeanFactory::getBean('Users', $_REQUEST['currentUserId']);

		}
		
		return array (
			"current_language" => $current_language,
			"mod_strings" => $mod_strings,
			"current_user" => $current_user
		);
	
	} 
	
	public static function manageReportDomain($reportId, $userDomainId, $reportDomainId) {
	
		global $db;
		
		require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
				
		$domainReportQuery = $db->query("SELECT * FROM asol_reports WHERE id='".$reportId."' LIMIT 1");
		$domainReportRow = $db->fetchByAssoc($domainReportQuery);

		$reportDomainIsPublished = ($domainReportRow['asol_published_domain'] == '1') ? true : false;		
		$reportDomainPublishedMode = $domainReportRow['asol_domain_published_mode'];
		$reportDomainPublishedLevels = ($domainReportRow['asol_domain_child_share_depth'] === ';;') ? array() : explode(';;', substr($domainReportRow['asol_domain_child_share_depth'], 1, -1));
		$reportDomainPublishedDomains = ($domainReportRow['asol_multi_create_domain'] === ';;') ? array() : explode(';;', substr($domainReportRow['asol_multi_create_domain'], 1, -1)); 
		$isPublished = $domainPublishingInfo;
		
		$domainPublishingInfo = array(
			'domains' => $reportDomainPublishedDomains,
			'levels' => $reportDomainPublishedLevels,
			'mode' => $reportDomainPublishedMode,
			'mainDomain' => $reportDomainId,
			'isPublished' => $reportDomainIsPublished
		);

		$reportPublishedDomains = asol_manageDomains::getDomainsPublished($domainPublishingInfo);
		$reportParentDomains = asol_manageDomains::getParentDomainsIds($reportDomainId, true);
			
		return (in_array($userDomainId, array_merge($reportPublishedDomains, $reportParentDomains)));
			
	}
	
	public static function getCurrentUserAsolConfig($userId) {

		global $sugar_config;
		
		$sqlCfg = "SELECT config FROM asol_config WHERE created_by = '".$userId."'";
		$rsCfg = asol_Report::getSelectionResults($sqlCfg, null, false);
		$cfg = explode("|",$rsCfg[0]['config']);
		$quarter_month = $cfg[0];
		$entriesPerPage = (!empty($cfg[1])) ? $cfg[1] : (isset($sugar_config['asolOverrideDefaultEntriesPerPage']) ? $sugar_config['asolOverrideDefaultEntriesPerPage'] : 15);
		
		$pdf_orientation = $cfg[2];
		$week_start = $cfg[3];
		$pdf_img_scaling_factor = $cfg[4];
		$scheduled_files_ttl = (!empty($cfg[5])) ? $cfg[5] : "7";
		$host_name = $cfg[6];
		
		return array(
			"quarter_month" => $quarter_month,
			"entriesPerPage" => $entriesPerPage,
			"pdf_orientation" => $pdf_orientation,
			"week_start" => $week_start,
			"pdf_img_scaling_factor" => $pdf_img_scaling_factor,
			"scheduled_files_ttl" => $scheduled_files_ttl,
			"host_name" => $host_name
		);
		
	}
				
	public static function doFinalExecuteReportActions($reportId, $dispatcherMaxRequests = null) {
			
		global $db;
		
		if (isset($dispatcherMaxRequests)) {
		
			if (($dispatcherMaxRequests > 0) && (isset($_REQUEST["reportRequestId"]))) { //Only if dispatcher is activated
				$db->query("UPDATE asol_reports_dispatcher SET status = 'terminated', last_recall = '".date("Y-m-d H:i:s", time())."' WHERE id = '".$_REQUEST["reportRequestId"]."' LIMIT 1");
			}	
				
		}
		
		if (!empty($reportId)) {
		
			$db->query("UPDATE asol_reports SET last_run = '".gmdate("Y-m-d H:i:s")."' WHERE id = '".$reportId."' LIMIT 1");			
			asol_ReportsUtils::reports_log('asol', 'Updated last_run for Report with Id ['.$reportId.']', __FILE__, __METHOD__, __LINE__);
		
		}
		
	}
					
	
	public static function getStandByReportHtml($dashletId, $waitForReport) {
		
		global $mod_strings;
		
		$returnHtml .= '
		<body>
			<div id="reportDiv" class="alineasol_reports">
				<div id="externalHtmlReport'.$dashletId.'">
					<img id="loadingExternalReport" style="display:inline" src="themes/default/images/img_loading.gif"/>
				    <span style="display:inline" id="loadingText">&nbsp;';
			
					if ($waitForReport)
						$returnHtml.= $mod_strings['LBL_REPORT_WAITING'];
					else
						$returnHtml.= $mod_strings['LBL_REPORT_LOADING'];
			    
			    $returnHtml .= '</span>
				</div>
			</div>
		</body>';
		
		return $returnHtml;
			    
	}
	
	
	public static function getSetUpInputCalendarsScriptFunction($reportId, $filtersArrayData) {
		
		global $timedate;
		
		$hasDateFilters = false;
		$returnedHTML = "function setUpUserInputCalendars_".str_replace("-", "", $reportId)."() {";
			
		foreach ($filtersArrayData as $oneFilterValues) {

			if ((in_array($oneFilterValues['type'], array("date", "datetime", "datetimecombo", "timestamp"))) && ($oneFilterValues['behavior'] == "user_input") && (!empty($oneFilterValues['filterReference']))) {	
						 		
				if (in_array($oneFilterValues['operator'], array("equals", "not equals", "before date", "after date", "between", "not between")))
					$returnedHTML .= "Calendar.setup ({ inputField : '".$oneFilterValues['filterReference']."_1' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$oneFilterValues['filterReference']."_trigger1' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });";
 	
				if (in_array($oneFilterValues['operator'], array("between", "not between")))
					$returnedHTML .= "Calendar.setup ({ inputField : '".$oneFilterValues['filterReference']."_2' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$oneFilterValues['filterReference']."_trigger2' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });";
 			
				$hasDateFilters = true;
					
			}
						 		
		}
		
		$returnedHTML .= "}";
		
		return ($hasDateFilters ? $returnedHTML : null);
		
	}
	
	
	public static function getReloadCurrentDashletScriptFunction($reportId, $isDashlet, $dashletId, $parentDashletId, $getLibraries, $vardefFilters, $overrideEntries, $currentUserId, $isMetaReport, $loginSession) {
				
		global $current_user, $sugar_config;
		
		$entryPoint = $_REQUEST['entryPoint'];
		$isPreview = ((isset($_REQUEST['isPreview'])) && ($_REQUEST['isPreview'] == 'true'));
		$loginSession = ($entryPoint == 'reloadReport' ? true : ($entryPoint == 'viewReport' ? false : $loginSession));
		$fixedDashletId = str_replace("-", "", $dashletId);

		return '
		function reloadCurrentDashletReport'.$fixedDashletId.'(pageNumber, sortField, sortDirection, sortIndex, externalParams, vardefFilters) {

			var postParameters = new Object();
			var isMetaReport = ((typeof window.hasPremiumJsFeatures == "function") && window["isMetaReport'.$parentDashletId.'"]);

			var mainReportSelector = (isMetaReport ? "'.($isDashlet ? 'div[id=\'externalHtmlReport\'].'.$dashletId : 'div[id=\'internalHtmlReport\']').'" : "'.($isDashlet ? 'div[id=\'externalHtmlReport'.$dashletId.'\']' : 'div[id=\'internalHtmlReport\']').'");
			var pushedReportsSelector = (isMetaReport ? "div[pushed=\''.$dashletId.'\']" : null);
					
			$(mainReportSelector).block({ message: $("#loadingBlockDiv").html() });
			if (pushedReportsSelector != null) {
				$(pushedReportsSelector).block({ message: $("#loadingBlockDiv").html() });
			}
		
			var multiExecution = (isMetaReport ? $(pushedReportsSelector).length > 0 : false);		

			postParameters["entryPoint"] = "'.($loginSession ? "reloadReport" : "viewReport").'";
			postParameters["module"] = "asol_Reports";
			postParameters["record"] = "'.$reportId.'";
			postParameters["isPreview"] = "'.($isPreview ? 'true':  'false').'";
			postParameters["currentUserId"] = "'.$currentUserId.'";
			postParameters["dashlet"] = "'.($isDashlet ? 'true' : 'false').'";
			postParameters["dashletId"] = "'.$dashletId.'";
			postParameters["getLibraries"] = "false";
									
			postParameters["page_number"] = pageNumber;
			postParameters["sort_field"] = sortField;
			postParameters["sort_direction"] = sortDirection;
			postParameters["sort_index"] = sortIndex;
			
			if ((externalParams != null) && (externalParams != "")) {
				externalParams.substring(1).split("&").forEach(function(currentParam) {
					var splittedParam = currentParam.split("=");
					postParameters[splittedParam[0]] = splittedParam[1];
				});
			}
			if ((vardefFilters != null) && (vardefFilters != "")) {
				postParameters["vardefFilters"] = vardefFilters;
			}
			if ((typeof window.hasPremiumJsFeatures == "function") && (isMetaReport)) {
				postParameters["overrideInfo"] = getMetaReportInfo("'.$dashletId.'");
				postParameters["overrideFilters"] = getMetaReportFilters("'.$dashletId.'");
			}		
			if ((typeof window.hasPremiumJsFeatures == "function") && (isMetaReport && multiExecution)) {
				var multiExecutionData = getMultiExecutionData(pushedReportsSelector, "'.$dashletId.'");
				postParameters["multiExecution"] = "true";
				postParameters["pushedRecords"] = multiExecutionData["pushedRecords"];
				postParameters["pushedInfos"] = multiExecutionData["pushedInfos"];
				postParameters["pushedFilters"] = multiExecutionData["pushedFilters"];
			}

			postParameters["previewDatabase"] = '.(isset($_REQUEST['previewDatabase']) && $_REQUEST['previewDatabase'] !== '' ? '"'.$_REQUEST['previewDatabase'].'"' : '""').';
			postParameters["previewAudit"] = '.(isset($_REQUEST['previewAudit']) && $_REQUEST['previewAudit'] !== "" ? '"'.$_REQUEST['previewAudit'].'"' : '""').';
			postParameters["previewModule"] = '.(isset($_REQUEST['previewModule']) && !empty($_REQUEST['previewModule']) ? '"'.$_REQUEST['previewModule'].'"' : '""').';
			postParameters["previewDynamicTables"] = '.(isset($_REQUEST['previewDynamicTables']) && $_REQUEST['previewDynamicTables'] !== '' ? '"'.$_REQUEST['previewDynamicTables'].'"' : '""').';
			postParameters["previewDynamicSql"] = '.(isset($_REQUEST['previewDynamicSql']) && !empty($_REQUEST['previewDynamicSql']) ? '"'.$_REQUEST['previewDynamicSql'].'"' : '""').';
			postParameters["previewName"] = '.(isset($_REQUEST['previewName']) && !empty($_REQUEST['previewName']) ? '"'.$_REQUEST['previewName'].'"' : '""').';
			postParameters["previewDisplay"] = '.(isset($_REQUEST['previewDisplay']) && !empty($_REQUEST['previewDisplay']) ? '"'.$_REQUEST['previewDisplay'].'"' : '""').';
			postParameters["previewChartsEngine"] = '.(isset($_REQUEST['previewChartsEngine']) && !empty($_REQUEST['previewChartsEngine']) ? '"'.$_REQUEST['previewChartsEngine'].'"' : '""').';
			postParameters["previewIndexDisplay"] = '.(isset($_REQUEST['previewIndexDisplay']) && $_REQUEST['previewIndexDisplay'] !== '' ? '"'.$_REQUEST['previewIndexDisplay'].'"' : '""').';
			postParameters["previewResultsLimit"] = '.(isset($_REQUEST['previewResultsLimit']) && !empty($_REQUEST['previewResultsLimit']) ? '"'.$_REQUEST['previewResultsLimit'].'"' : '""').';
			postParameters["previewDescription"] = '.(isset($_REQUEST['previewDescription']) && !empty($_REQUEST['previewDescription']) ? '"'.$_REQUEST['previewDescription'].'"' : '""').';
			postParameters["previewFields"] = '.(isset($_REQUEST['previewFields']) && !empty($_REQUEST['previewFields']) ? '"'.$_REQUEST['previewFields'].'"' : '""').';
			postParameters["previewFilters"] = '.(isset($_REQUEST['previewFilters']) && !empty($_REQUEST['previewFilters']) ? '"'.$_REQUEST['previewFilters'].'"' : '""').';
			postParameters["previewCharts"] = '.(isset($_REQUEST['previewCharts']) && !empty($_REQUEST['previewCharts']) ? '"'.$_REQUEST['previewCharts'].'"' : '""').';
			
			$.post("index.php", postParameters).done(function(data) {
				if (isMetaReport) {
		        	reloadMetaReport(multiExecution, data, mainReportSelector, pushedReportsSelector);
		        } else {
					$(mainReportSelector).html(data);
					generateFancyMultiEnum($(".asolFirstParameter select"), 3, true);
					generateFancyMultiEnum($(".asolSecondParameter select"), 3, true);
					generateFancyMultiEnum($(".asolThirdParameter select"), 3, true);
					$(mainReportSelector).unblock();
					'.self::getAttachedScript2ExecuteCriteriaOnKeyPressed().'
					'.self::getReportsCallbackFuntion().'
				}
			});
			
		}
							
		function loadCurrentDashletReport'.$fixedDashletId.'() {
			var currentPage = ($("#page_number_'.$fixedDashletId.'").val() ? $("#page_number_'.$fixedDashletId.'").val() : "");
			reloadCurrentDashletReport'.$fixedDashletId.'(currentPage, "", "", "", "'.($overrideEntries !== null ? '&overrideEntries='.$overrideEntries : '').($isDashlet && $getLibraries ? '&getLibraries=true' : '').($loginSession ? '&search_criteria=1&external_filters="+encodeURIComponent(formatExternalFilters("'.$dashletId.'"))' : '"').', "'.$vardefFilters.'");
		}
		';
	
	}
	
	private static function getReportsCallbackFuntion() {
		
		return '
		if (typeof alineaSolReportsCallback == "function") {
			alineaSolReportsCallback();
		}
		';
		
	}
	
	private static function getAttachedScript2ExecuteCriteriaOnKeyPressed() {
		
		return
		'if ($("#search_criteria input").size() > 0) {
		    $("#search_criteria input").unbind("keypress").bind("keypress", function (e){
		        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
		            $(".executeReportBtn").get(0).click();
		        }
		    });
		}';
		
	}
	
	public static function getSendAjaxRequestScriptFunction($reportId, $dashletId, $checkHttpFileTimeout, $httpHtmlFile, $reportRequestId, $initRequestTimeStamp, $hasCalendarInputs) {
		
		global $sugar_config, $mod_strings;
		
		return '
		function sendAjaxRequest_'.str_replace("-", "", $reportId).'(firstLoad) {
		
			firstLoad = typeof(firstLoad) != "undefined" ? firstLoad : false;
			var checkHttpFileTimeout = (firstLoad) ? '.($checkHttpFileTimeout / 2).' : '.$checkHttpFileTimeout.';
			
			$(function () {
	
			    $.ajax({
			        type: "POST",
					url: \'index.php?entryPoint=asol_CheckHttpFileExists&httpHtmlFile='.$httpHtmlFile.$reportRequestId.$initRequestTimeStamp.'\',
			        async: true,
			        cache: false,
			        success: function (data) {
			        
			        	data = data.replace(/^\s+/g,\'\').replace(/\s+$/g,\'\'); //Trim equivalent PHP function
			        
			        	if (data.substring(0, 5) == "false") {
			        		
			        		setTimeout("sendAjaxRequest_'.str_replace("-", "", $reportId).'()", checkHttpFileTimeout);
			        	
						} else if (data.substring(0, 4) == "exec") {
						
							$("#loadingText").html("'.$mod_strings['LBL_REPORT_LOADING'].'");
							setTimeout("sendAjaxRequest_'.str_replace("-", "", $reportId).'()", checkHttpFileTimeout);
						
						} else if (data.substring(0, 7) == "timeout") {
						
							$("#externalHtmlReport'.$dashletId.'").html("'.$mod_strings['LBL_REPORT_TIMEOUT'].'");
						
						} else {
		
							if (typeof window.blockUI == "function") {
								$.unblockUI();
							}
							
				            $("#externalHtmlReport'.$dashletId.'").html(data);
				            '.self::getAttachedScript2ExecuteCriteriaOnKeyPressed().'
				            '.self::getReportsCallbackFuntion().'
			        		'.($hasCalendarInputs ? 'setUpUserInputCalendars_'.str_replace("-", "", $reportId).'();' : '').'
			        		
			            }
			            	
					}
			    });
	
			}); 
		
		}';
		
	}
	
	public static function getInitialAjaxRequest2GenerateReportScript($reportId) {
		
		return '
		if(typeof window.SUGAR.util.doWhen == \'function\') {

			SUGAR.util.doWhen(function(){ return (typeof $ != \'undefined\')}, function(){
				sendAjaxRequest_'.str_replace("-", "", $reportId).'(true);
			});
			
		} else {
		
			$(document).ready(function() {
				sendAjaxRequest_'.str_replace("-", "", $reportId).'(true);
			});
			
		}';
		
	} 
				
	public static function getStoredReportData($storedData, $reportId, $isDashlet, $dashletId, $reportType) {
				
		global $sugar_config;
		
		$storedData = (empty($storedData)) ? 'false' : $storedData;		
		$storedUrl = 'index.php?entryPoint=scheduledStoredReport&module=asol_Reports&storedReportInfo='.$storedData;
		
		if ($isDashlet) {
			$storedUrl .= '&dashlet=true&dashletId='.$dashletId;
		}
			
		$returnedHtml = '<head>
		
			<script>
		
			if(typeof window.blockUI == "function")
				blockUI();
			
			function sendAjaxRequest_'.str_replace("-", "", $reportId).'() {
			
				$(function () { 
				    $.ajax({
				        type: "POST",
				        url: "'.$storedUrl.'",
				        async: true,
				        cache: false,
				        success: function (data) {
				        	
							$("#externalHtmlReport'.$dashletId.'").html(data);
							generateFancyMultiEnum($(".asolFirstParameter select"), 3, true);
							generateFancyMultiEnum($(".asolSecondParameter select"), 3, true);
							generateFancyMultiEnum($(".asolThirdParameter select"), 3, true);
				        	'.self::getAttachedScript2ExecuteCriteriaOnKeyPressed().'
							'.self::getReportsCallbackFuntion().'
									
						}		
				    });
				});
				
			}
	
			</script>
			
			<script>
		
				if(typeof window.SUGAR.util.doWhen == \'function\') {
		
					SUGAR.util.doWhen(function(){ return (typeof $ != \'undefined\')}, function(){
						sendAjaxRequest_'.str_replace("-", "", $reportId).'();
					});
					
				} else {
					$(document).ready(function() {
						sendAjaxRequest_'.str_replace("-", "", $reportId).'();
					});
					
				}
			</script>';
	
		$returnedHtml .= '
		</head>';
		
		
		
		if (!$isDashlet) {
		
			$returnedHtml .= self::getStandByReportHtml($dashletId, false);
			$returnedHtml .= '</html>';
		
		}
	
		return $returnedHtml;
		
	}
			
	
	public static function overrideExternalReportVariables($created_by) {
	
		global $sugar_config;
		
		$theUser = new User();
	
		if ((isset($_REQUEST['schedulerCall'])) && ($_REQUEST['schedulerCall'] == "true")) {
			
			$theUser->retrieve($created_by);
			
			$current_user = $theUser;
			$allowExportGeneratedFile = true;
			$schedulerCall = true;
			
		} else {
	
			$userId = (isset($sugar_config["BSS_Admin_WebService_User_Id"]) ? $sugar_config["BSS_Admin_WebService_User_Id"] : $created_by);
			$theUser->retrieve($userId); 
			
			$current_user = $theUser;
			$allowExportGeneratedFile = false;
			$schedulerCall = false;
			
		}
		
		$theUser->getUserDateTimePreferences();
		$userPrefs = $theUser->getUserDateTimePreferences();
		
		$externalUserDateFormat = $userPrefs["date"];
		$externalUserDateTimeFormat = $userPrefs["date"]." ".$userPrefs["time"];
			
		return array(
			"theUser" => $theUser,
			"current_user" => $current_user,
			
			"allowExportGeneratedFile" => $allowExportGeneratedFile,
			"schedulerCall" => $schedulerCall,
			
			"externalUserDateFormat" => $externalUserDateFormat,
			"externalUserDateTimeFormat" => $externalUserDateTimeFormat
		);
		
	}
					
	
	public static function manageExternalDatabaseQueries($alternativeDb, $reportModule, $simpleName = false) {

		require_once("modules/asol_Reports/include_basic/generateQuery.php");
		
		if ($alternativeDb !== false) {

			$domainField = null;
			$useAlternativeDbConnection = true;
	
			if ($simpleName) {
				
				$report_module = $reportModule;
				
			} else {
			
				$alternativeModuleAux = explode(" ", $reportModule);
				$alternativeModule = explode(".", $alternativeModuleAux[0]);
				$report_module = $alternativeModule[1];
				
			}
			
			$report_table = $report_module;
			$report_table_primary_key = asol_ReportsGenerateQuery::getExternalTablePrimaryKey($alternativeDb, $report_table);
			
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'alternativeDb' => $alternativeDb,
				'report_table' => $report_table
			);
			$domainField = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalDatabaseDomainField", $extraParams);
			
			$extraParams = array(
				'alternativeDb' => $alternativeDb
			);
			$gmtDates = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalDatabaseGmtDates", $extraParams);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				
		} else {

			$useAlternativeDbConnection = false;
			$gmtDates = true;

			$report_module = $reportModule;
			$report_table = BeanFactory::newBean(BeanFactory::getObjectName($reportModule))->table_name;
			$report_table = $report_table == '' ? strtolower($report_module) : $report_table; 
			$report_table_primary_key = "id";
			
		}
		
		return array(
			"useAlternativeDbConnection" => $useAlternativeDbConnection,
			"domainField" => $domainField,
			"gmtDates" => $gmtDates,
			"report_module" => $report_module,
			"report_table" => $report_table,
			"report_table_primary_key" => $report_table_primary_key
		);
		
	}
	
	
	public static function getChartInfoParams($selectedCharts, $auditedReport, $reportTable) {
				
		$stackedAvailableCharts = array('stack', 'horizontal', 'line', 'scatter', 'area', 'bubble', 'parallel');
		
		$hasStackChart = false;
		$chartInfo = array();
		$chartConf = array();
		
		foreach ($selectedCharts['charts'] as $info) {

			$chartData = $info['data'];
			$chartConfig = $info['config'];
			
			if ($chartData['type'] != 'parallel') {
				
				$chartData['yAxis'] = $chartData['yAxis'][0];
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'chartData' => $chartData,
				);
				$chartDataSubChart = asol_ReportsUtils::managePremiumFeature("combineReportCharts", "reportFunctions.php", "transformYAxisSubChart", $extraParams);
				if ($chartDataSubChart !== false) {
					$chartData = $chartDataSubChart;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
			}
			
			if ($auditedReport) {
				$chartData['yAxis'] = (count(explode(".", $chartData['yAxis'])) == 1) ? $reportTable."_audit.".$chartData['yAxis'] : $chartData['yAxis'];
			}
			
			$hasStackChart = (($hasStackChart) || (($chartData['display'] == 'yes') && (in_array($chartData['type'], $stackedAvailableCharts)))) ? true : false;
			
			$chartInfo[] = $chartData;
			$chartConf[] = $chartConfig;
			
		}
		
		return array(
			"hasStackChart" => $hasStackChart,
			"chartInfo" => $chartInfo,
			"chartConfig" => $chartConf
		);
	
	}
	
	public static function buildExternalFilters($externalFilters, $vardefFilters, $userDateFormat) {
					
		global $timedate;
		
		//Get the external filter variables from request
		$extFilters = array();
		$auxFilters = explode('${pipe}', $externalFilters);
				
		foreach ($auxFilters as $auxFilter) {
			
			$filterValues = explode('${dp}', $auxFilter);
			$secondFilterArray = explode('${comma}', $filterValues[3]);
			$hasThirdFilter = (count($secondFilterArray) == 1) ? false : true;
			
			//*****************//
			//***First Input***//
			//****************//
			if ((!$timedate->check_matching_format($filterValues[2], $GLOBALS['timedate']->dbDayFormat)) && ($timedate->check_matching_format($filterValues[2], $userDateFormat)) && ($filterValues[2]!="")) { 
				$filterValues[2] = $timedate->swap_formats($filterValues[2], $userDateFormat, $GLOBALS['timedate']->dbDayFormat );
			}
					
			//******************//
			//***Second Input***//
			//******************//
			if ((!$timedate->check_matching_format($secondFilterArray[0], $GLOBALS['timedate']->dbDayFormat)) && ($timedate->check_matching_format($secondFilterArray[0], $userDateFormat)) && ($secondFilterArray[0]!="")) {
				$secondFilterArray[0] = $timedate->swap_formats($secondFilterArray[0], $userDateFormat, $GLOBALS['timedate']->dbDayFormat );
			}
				
			//*****************//
			//***Third Input***//
			//*****************//
			if ($hasThirdFilter) {
				if ((!$timedate->check_matching_format($secondFilterArray[1], $GLOBALS['timedate']->dbDayFormat)) && ($timedate->check_matching_format($secondFilterArray[1], $userDateFormat)) && ($secondFilterArray[1]!="")) {
					$secondFilterArray[1] = $timedate->swap_formats($secondFilterArray[1], $userDateFormat, $GLOBALS['timedate']->dbDayFormat );
				}
			}

			$filterValues[3] = implode('${comma}', $secondFilterArray);
			
			
			$extFilters[$filterValues[0]] = array(
				"opp" => str_replace("+", " ", $filterValues[1]),
				"param1" => $filterValues[2],
				"param2" => $filterValues[3],
			);
			
		}
		
		if ($vardefFilters !== null) {

			foreach ($vardefFilters as $overrideFilter) {
				$expFilter = explode('${dp}', $overrideFilter['value']);
				$extFilters[$overrideFilter['reference']] = array(
					"opp" => str_replace("+", " ", $expFilter[0]),
					"param1" => $expFilter[1],
					"param2" => $expFilter[2],
				);
			}

		}
		
		return $extFilters;
		
	}

	public static function getFilteringParams($filters, $extFilters, $report_module, $predefinedTemplates, $dashletId, $userDateFormat, $auditedReport) {

		global $current_user, $app_strings, $timedate, $beanList, $beanFiles;

		$filtersPanel = array();
		$filtersHiddenInputs = "";
		
		$dashletId = str_replace("-", "", $dashletId);
		
		foreach ($filters['data'] as & $currentFilter) {
				
			if ($currentFilter['apply'] === '0')
				continue;
			
			$filterField = $currentFilter['field'];
			$filterReference = $currentFilter['filterReference'];
			$filterType = $currentFilter['type'];
			$filterBehavior = $currentFilter['behavior'];
			
			$filterUserOptions = $currentFilter['userOptions'];
			$filterEnumOperator = $currentFilter['enumOperator'];
			$filterEnumReference = $currentFilter['enumReference'];
			$filterEnumTemplate = (isset($currentFilter['templates']['enum']) ? $currentFilter['templates']['enum'] : null);
			
			$hasCustomEnum = ((!empty($filterUserOptions)) || (!empty($filterEnumTemplate)));
			if ($hasCustomEnum) {
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$filterUserOptionsResult = asol_ReportsUtils::managePremiumFeature("templatesReports", "reportFunctions.php", "getFilterTemplateUserOptions", array('filterEnumTemplate' => $filterEnumTemplate, 'predefinedEnumTemplates' => $predefinedTemplates['enum']));
				$filterUserOptions = ($filterUserOptionsResult !== false) ? $filterUserOptionsResult : $filterUserOptions;
				//***********************//
				//***AlineaSol Premium***//
				//***********************//		
								
				$customGeneratedDropdownValues = self::getCustomGeneratedDropdownValues($filterUserOptions);
	
			}
			
			
			//Update filter values with external filters if exists
			if ((!empty($filterReference)) && (!empty($extFilters[$filterReference]))) {
				
				$currentFilter['operator'] = (($extFilters[$filterReference]["opp"] !== '') && ($extFilters[$filterReference]["opp"] !== NULL)) ? $extFilters[$filterReference]["opp"] : $currentFilter['operator'];
				$currentFilter['parameters']['first'] = (($extFilters[$filterReference]["param1"] !== '') && ($extFilters[$filterReference]["param1"] !== NULL)) ? explode('${dollar}', $extFilters[$filterReference]["param1"]) : $currentFilter['parameters']['first'];
			
				$nextParams = explode('${comma}', $extFilters[$filterReference]["param2"]);
				
				$secondParam = ((count(explode('${dollar}', $nextParams[0])) > 1) ? explode('${dollar}', $nextParams[0]) : array($nextParams[0]));
				$thirdParam = ((count(explode('${dollar}', $nextParams[1])) > 1) ? explode('${dollar}', $nextParams[1]) : array($nextParams[1]));
				
				$currentFilter['parameters']['second'] = (($nextParams[0] !== '') && ($nextParams[0] !== NULL)) ? $secondParam : $filterSecondParameter;
				$currentFilter['parameters']['third'] = (($nextParams[1] !== '') && ($nextParams[1] !== NULL)) ? $thirdParam : $filterThirdParameter;

			}

			$filterOperator = $currentFilter['operator'];
			$filterFirstParameter = $currentFilter['parameters']['first'];
			$filterSecondParameter = $currentFilter['parameters']['second'];
			$filterThirdParameter = $currentFilter['parameters']['third'];
				

			if (in_array($filterBehavior, array("user_input", "visible"))) {
				
				if ((substr($currentFilter['field'], -2) != 'id') && ($filterType == 'char(36)'))
					$currentFilter['type'] = 'relate';

					
				switch ($filterType) {
					
					case "enum" :
					case "radioenum" :

						$selectedOpts = $currentFilter['parameters']['first'];
	
						//Get dropdown list field
						if (in_array($filterEnumOperator, array('options', 'function'))) {
						
							if (!$hasCustomEnum) {
								$opts = asol_Report::getEnumValues($filterEnumOperator, $filterEnumReference);
								$optsLabels = asol_Report::getEnumLabels($filterEnumOperator, $filterEnumReference);
							} else { 
								$opts = $customGeneratedDropdownValues['opts'];
								$optsLabels = $customGeneratedDropdownValues['optsLabels'];
							}
							
						}
							
						if ($filterBehavior == "user_input") {
							
							if (in_array($currentFilter['operator'], array("like", "not like", "starts with", "ends with"))) {
								$theInput1 = (!$hasCustomEnum) ? "<input type='text' id='".$filterReference.$dashletId."_1' value='".$selectedOpts[0]."'>" : "<select id='".$filterReference."_1'>";
							} else {
								$selectMultiple = (in_array($currentFilter['operator'], array("one of", "not one of"))) ? "multiple size=1" : "";
								$selectStyle = (in_array($currentFilter['operator'], array("one of", "not one of"))) ? "visibility: hidden;" : "";
								$theInput1 = "<select id='".$filterReference.$dashletId."_1' ".$selectMultiple." style='".$selectStyle."'>";
							}

							if ((!in_array($currentFilter['operator'], array("like", "not like", "starts with", "ends with"))) || ($hasCustomEnum)) {
								
								foreach ($opts as $opt) {
									$theInput1 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
								}
								
								$theInput1 .= "</select>";
								
							}

						} else if ($filterBehavior == "visible") {
							
							$theInput1 = '<span>';
							
							foreach ($opts as $opt) {
								if (in_array($opt, $selectedOpts))
									$theInput1 .= $optsLabels[$opt]."<br>";
							}
							
							$theInput1 = substr($theInput1, 0, -4);
							
							$theInput1 .= '</span>';
							
						}
						
						$theInput2 = null;
						$theInput3 = null;
						break;
						
					case "multienum" :

						$selectedOpts = $currentFilter['parameters']['first'];
	
						//Get dropdown list field
						if (in_array($filterEnumOperator, array('options', 'function'))) {
						
							if (!$hasCustomEnum) {
								$opts = asol_Report::getEnumValues($filterEnumOperator, $filterEnumReference);
								$optsLabels = asol_Report::getEnumLabels($filterEnumOperator, $filterEnumReference);
							} else { 
								$opts = $customGeneratedDropdownValues['opts'];
								$optsLabels = $customGeneratedDropdownValues['optsLabels'];
							}
							
						}
							
						if ($filterBehavior == "user_input") {

							$theInput1 = "<select id='".$filterReference.$dashletId."_1' multiple size=1 style='visibility: hidden;'>";

							foreach ($opts as $opt) {
								$theInput1 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
							}
							
							$theInput1 .= "</select>";

						} else if ($filterBehavior == "visible") {
							
							$theInput1 = '<span>';
							
							foreach ($opts as $opt) {
								if (in_array($opt, $selectedOpts))
									$theInput1 .= $optsLabels[$opt]."<br>";
							}
							
							$theInput1 = substr($theInput1, 0, -4);
							
							$theInput1 .= '</span>';
							
						}
						
						$theInput2 = null;
						$theInput3 = null;
						break;
						
					case "date":
					case "datetime":
					case "datetimecombo":
					case "timestamp":
						
						switch ($currentFilter['operator']) {
							
							case "equals":
							case "not equals":
							case "before date":
							case "after date":
								
								switch ($currentFilter['parameters']['first'][0]) {
									
									case "calendar":
										
										$date2 = $filterSecondParameter[0];
										
										if ($date2 != "")
											$date2 = $timedate->swap_formats($date2, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);
									
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$filterFirstParameter[0]."' /><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CALENDAR')."</span>";
											
											$theInput2 = "<input type='text' id='".$filterReference.$dashletId."_2' class='calendarValue' value='".$date2."' disabled='true' /><img border='0' class='clickable calendarIcon' src='modules/asol_Reports/include_basic/images/asol_reports_calendar.png' id='".$filterReference.$dashletId."_trigger2'><img border='0' src='modules/asol_Reports/include_basic/images/asol_reports_cancel.png' class='clickable calendarIcon' onClick='document.getElementById(\"".$filterReference.$dashletId."_2\").value = \"\";' />";
											$theInput2 .= "<script>Calendar.setup ({ inputField : '".$filterReference.$dashletId."_2' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$filterReference.$dashletId."_trigger2' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });</script>";
										
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CALENDAR')."</span>";
											$theInput2 = "<span>".$date2."</span>";
											
										}
									
										break;
										
									case "dayofweek":
										
										$selectedOpts = $filterSecondParameter;

										if (!$hasCustomEnum) {
											$dowEnumArray = self::getDOWEnumArrays();
											$opts = $dowEnumArray["opts"];
											$optsLabels = $dowEnumArray["optsLabels"];
										} else {
											$opts = $customGeneratedDropdownValues['opts'];
											$optsLabels = $customGeneratedDropdownValues['optsLabels'];
										}
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_DAYOFWEEK')."</span>";
											
											$theInput2 = "<select id='".$filterReference.$dashletId."_2' multiple size=1 style='visibility: hidden;'>";
											foreach ($opts as $opt) {
												$theInput2 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput2 .= "</select>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_DAYOFWEEK')."</span>";
											
											$theInput2 = '<span>';
											
											foreach ($opts as $opt) {
												if (in_array($opt, $selectedOpts)) {
													$theInput2 .= $optsLabels[$opt]."<br>";
												}
											}
											
											$theInput2 = substr($theInput2, 0, -4);
											
											$theInput2 .= '</span>';
											
										}
										
										break;
										
									case "weekofyear":
										
										if (!$hasCustomEnum) {
											$woyEnumArray = self::getWOYEnumArrays();
											$opts = $woyEnumArray["opts"];
											$optsLabels = $woyEnumArray["optsLabels"];
										} else {
											$opts = $customGeneratedDropdownValues['opts'];
											$optsLabels = $customGeneratedDropdownValues['optsLabels'];
										}
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_WEEKOFYEAR')."</span>";
											
											$theInput2 = "<select id='".$filterReference.$dashletId."_2'>";
											foreach ($opts as $opt) {
												$theInput2 .= "<option value='".$opt."' ".($opt == $filterSecondParameter[0] ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput2 .= "</select>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_WEEKOFYEAR')."</span>";
											$theInput2 = "<span>".$filterSecondParameter[0]."</span>";
											
										}
										
										break;
										
									case "monthofyear":

										$selectedOpts = $filterSecondParameter;

										if (!$hasCustomEnum) {
											$moyEnumArray = self::getMOYEnumArrays();
											$opts = $moyEnumArray["opts"];
											$optsLabels = $moyEnumArray["optsLabels"];
										} else {
											$opts = $customGeneratedDropdownValues['opts'];
											$optsLabels = $customGeneratedDropdownValues['optsLabels'];
										}
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MONTHOFYEAR')."</span>";
											
											$theInput2 = "<select id='".$filterReference.$dashletId."_2' multiple size=1 style='visibility: hidden;'>";
											foreach ($opts as $opt) {
												$theInput2 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput2 .= "</select>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MONTHOFYEAR')."</span>";
											
											$theInput2 = '<span>';
											
											foreach ($opts as $opt) {
												if (in_array($opt, $selectedOpts)) {
													$theInput2 .= $optsLabels[$opt]."<br>";
												}
											}
											
											$theInput2 = substr($theInput2, 0, -4);
											
											$theInput2 .= '</span>';
											
										}
										
										break;
											
									case "naturalquarterofyear":
									case "fiscalquarterofyear":
										
										$selectedOpts = $filterSecondParameter;
										
										if (!$hasCustomEnum) {
											$qoyEnumArray = self::getQOYEnumArrays();
											$opts = $qoyEnumArray["opts"];
											$optsLabels = $qoyEnumArray["optsLabels"];
										} else {
											$opts = $customGeneratedDropdownValues['opts'];
											$optsLabels = $customGeneratedDropdownValues['optsLabels'];
										}
										
										$userInputLabel = ($currentFilter['parameters']['first'][0] == "naturalquarterofyear") ? "LBL_REPORT_NATURALQUARTEROFYEAR" : "LBL_REPORT_FISCALQUARTEROFYEAR";
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											
											$theInput2 = "<select id='".$filterReference.$dashletId."_2' multiple size=1 style='visibility: hidden;'>";
											foreach ($opts as $opt) {
												$theInput2 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput2 .= "</select>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											
											$theInput2 = '<span>';
											
											foreach ($opts as $opt) {
												if (in_array($opt, $selectedOpts)) {
													$theInput2 .= $optsLabels[$opt]."<br>";
												}
											}
											
											$theInput2 = substr($theInput2, 0, -4);
											
											$theInput2 .= '</span>';
											
										}
										
										break;
										
									case "naturalyear":
									case "fiscalyear":
										
										$userInputLabel = ($currentFilter['parameters']['first'][0] == "naturalyear") ? "LBL_REPORT_NATURALYEAR" : "LBL_REPORT_FISCALYEAR";
										
										if (empty($filterSecondParameter))
											$filterSecondParameter = array(date("Y"));
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											$theInput2 = "<input type='text' id='".$filterReference.$dashletId."_2' style='width:80px' value='".$filterSecondParameter[0]."'>";
										
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											$theInput2 = "<span>".$filterSecondParameter[0]."</span>";
											
										}
										
										break;
										
								}
								
								$theInput3 = null;
								
								break;
								
							case "before date":
							case "after date":
								
								$date1 = $currentFilter['parameters']['first'][0];
									
								if ($date1 != "")
									$date1 = $timedate->swap_formats($date1, $GLOBALS['timedate']->dbDayFormat, $userDateFormat);

								if ($filterBehavior == "user_input") {
									
									$theInput1 = "<input type='text' id='".$filterReference.$dashletId."_1' class='calendarValue' value='".$date1."' disabled='true' /><img border='0' class='clickable calendarIcon' src='modules/asol_Reports/include_basic/images/asol_reports_calendar.png' id='".$filterReference.$dashletId."_trigger1'><img border='0' src='modules/asol_Reports/include_basic/images/asol_reports_cancel.png' class='clickable calendarIcon' onClick='document.getElementById(\"".$filterReference.$dashletId."_1\").value = \"\";' />";
									$theInput1 .= "<script>Calendar.setup ({ inputField : '".$filterReference.$dashletId."_1' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$filterReference.$dashletId."_trigger1' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });</script>";
								
								} else if ($filterBehavior == "visible") {
									
									$theInput1 = "<span>".$date1."</span>";											
									
								}
								
								$theInput2 = null;
								$theInput3 = null;
								
								break;
								
							case "between":
							case "not between":

								$input1 = $filterSecondParameter[0];
								$input2 = $filterThirdParameter[0];
								
								switch ($currentFilter['parameters']['first'][0]) {
									
									case "calendar":

										if((!$timedate->check_matching_format($input1, $userDateFormat)) && ($input1 != ""))
											$input1 = $timedate->swap_formats($input1, $GLOBALS['timedate']->dbDayFormat, $userDateFormat );

										if((!$timedate->check_matching_format($input2, $userDateFormat)) && ($input1 != ""))
											$input2 = $timedate->swap_formats($input2, $GLOBALS['timedate']->dbDayFormat, $userDateFormat );

											
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."' /><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CALENDAR')."</span>";
											
											$theInput2 = "<input type='text' id='".$filterReference.$dashletId."_2' class='calendarValue' value='".$input1."' disabled='true' /><img border='0' class='clickable calendarIcon' src='modules/asol_Reports/include_basic/images/asol_reports_calendar.png' id='".$filterReference.$dashletId."_trigger2'><img border='0' src='modules/asol_Reports/include_basic/images/asol_reports_cancel.png' class='clickable calendarIcon' onClick='document.getElementById(\"".$filterReference.$dashletId."_2\").value = \"\";' />";
											$theInput2 .= "<script>Calendar.setup ({ inputField : '".$filterReference.$dashletId."_2' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$filterReference.$dashletId."_trigger2' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });</script>";
											$theInput3 = "<input type='text' id='".$filterReference.$dashletId."_3' class='calendarValue' value='".$input2."' disabled='true' /><img border='0' class='clickable calendarIcon' src='modules/asol_Reports/include_basic/images/asol_reports_calendar.png' id='".$filterReference.$dashletId."_trigger3'><img border='0' src='modules/asol_Reports/include_basic/images/asol_reports_cancel.png' class='clickable calendarIcon' onClick='document.getElementById(\"".$filterReference.$dashletId."_3\").value = \"\";' />";						
											$theInput3 .= "<script>Calendar.setup ({ inputField : '".$filterReference.$dashletId."_3' , daFormat : '".$timedate->get_cal_date_format()."', button : '".$filterReference.$dashletId."_trigger3' , singleClick : true, dateStr : '', step : 1, weekNumbers:false });</script>";
										
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CALENDAR')."</span>";
											
											$theInput2 = "<span>".$input1."</span>";
											$theInput3 = "<span>".$input2."</span>";
											
										}

										break;
										
									case "weekofyear":
										
										if (!$hasCustomEnum) {
											$woyEnumArray = self::getWOYEnumArrays();
											$opts = $woyEnumArray["opts"];
											$optsLabels = $woyEnumArray["optsLabels"];
										} else {
											$opts = $customGeneratedDropdownValues['opts'];
											$optsLabels = $customGeneratedDropdownValues['optsLabels'];
										}
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_WEEKOFYEAR')."</span>";
											
											$theInput2 = "<select id='".$filterReference.$dashletId."_2'>";
											foreach ($opts as $opt) {
												$theInput2 .= "<option value='".$opt."' ".($opt == $input1 ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput2 .= "</select>";
											$theInput3 = "<span style='display: block'>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_AND')."</span>";
											$theInput3 .= "<select id='".$filterReference.$dashletId."_3'>";
											foreach ($opts as $opt) {
												$theInput3 .= "<option value='".$opt."' ".($opt == $input2 ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
											}
											$theInput3 .= "</select>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_WEEKOFYEAR')."</span>";
											$theInput2 = "<span>".$input1."</span>";
											$theInput3 = "<span style='display: block'>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_AND')."</span>";
											$theInput3 .= "<span>".$input2."</span>";
											
										}
										
										break;
										
									case "naturalyear":
									case "fiscalyear":
										
										$userInputLabel = ($currentFilter['parameters']['first'][0] == "naturalyear") ? "LBL_REPORT_NATURALYEAR" : "LBL_REPORT_FISCALYEAR";
										
										if (empty($input1))
											$input1 = date("Y");
										if (empty($input2))
											$input2 = date("Y");
										
										if ($filterBehavior == "user_input") {
											
											$theInput1 = "<input type='hidden' id='".$filterReference.$dashletId."_1' value='".$currentFilter['parameters']['first'][0]."'><span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											$theInput2 = "<input type='text' id='".$filterReference.$dashletId."_2' style='width:80px' value='".$input1."'>";
											$theInput3 = "<span style='display: block'>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_AND')."</span>";
											$theInput3 .= "<input type='text' id='".$filterReference.$dashletId."_3' style='width:80px' value='".$input2."'>";
											
										} else if ($filterBehavior == "visible") {
											
											$theInput1 = "<span>".asol_ReportsUtils::translateReportsLabel($userInputLabel)."</span>";
											$theInput2 = "<span>".$input1."</span>";
											$theInput3 = "<span style='display: block'>".asol_ReportsUtils::translateReportsLabel('LBL_REPORT_AND')."</span>";
											$theInput3 .= "<span>".$input2."</span>";
											
										}
										
										break;
									
								}
								
								break;
								
							case "last":
							case "not last":
								
								if (!$hasCustomEnum) {
									$doaEnumArray = self::getDateOperatorArrays();
									$opts = $doaEnumArray["opts"];
									$optsLabels = $doaEnumArray["optsLabels"];
								} else {
									$opts = $customGeneratedDropdownValues['opts'];
									$optsLabels = $customGeneratedDropdownValues['optsLabels'];
								}
																
								
								if ($filterBehavior == "user_input") {
								
									$theInput1 = "<select id='".$filterReference.$dashletId."_1' onChange='if (this.selectedIndex >= 7) { document.getElementById(\"".$filterReference."_2\").style.display=\"none\"; } else { document.getElementById(\"".$filterReference."_2\").style.display=\"inline\"; } '>";
									foreach ($opts as $opt) {
										$theInput1 .= "<option value='".$opt."' ".($opt == $currentFilter['parameters']['first'][0] ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
									}
									$theInput1 .= "</select>";
									
								} else if ($filterBehavior == "visible") {

									$theInput1 = (!empty($extFilters[$filterReference]["param1"])) ? '<span>'.$optsLabels[$extFilters[$filterReference]["param1"]].'</span>' : '<span>'.$optsLabels[$currentFilter['parameters']['first'][0]].'</span>';
									
								}
								
								switch ($currentFilter['parameters']['first'][0]) {
									
									case "day":
									case "week":
									case "month":
									case "Nquarter":
									case "Fquarter":
									case "Nyear":
									case "Fyear":
										
										if ($filterBehavior == "user_input")
											$theInput2 = '<input id="'.$filterReference.$dashletId.'_2" type="text" value="'.$filterSecondParameter[0].'">';
										else if ($filterBehavior == "visible")
											$theInput2 = '<span>'.$filterSecondParameter[0].'</span>';
										
										break;
										
									default:
										
										if ($filterBehavior == "user_input")
											$theInput2 = '<input id="'.$filterReference.$dashletId.'_2" style="display: none;" type="text" value="'.$filterSecondParameter[0].'">';
										else if ($filterBehavior == "visible")
											$theInput2 = '<span>'.$filterSecondParameter[0].'</span>';
										
										break;
									
								}
								
								$theInput3 = null;
								
								break;
								
							case "this":
							case "not this":
								
								if (!$hasCustomEnum) {
									$rdoaEnumArray = self::getReducedDateOperatorArrays();
									$opts = $rdoaEnumArray["opts"];
									$optsLabels = $rdoaEnumArray["optsLabels"];
								} else {
									$opts = $customGeneratedDropdownValues['opts'];
									$optsLabels = $customGeneratedDropdownValues['optsLabels'];
								}
								
								if ($filterBehavior == "user_input") {
									
									$theInput1 = "<select id='".$filterReference.$dashletId."_1'>";
									foreach ($opts as $opt) {
										$theInput1 .= "<option value='".$opt."' ".($opt == $currentFilter['parameters']['first'][0] ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
									}
									$theInput1 .= "</select>";
								
								} else if ($filterBehavior == "visible") {
									
									$theInput1 = '<span>'.$optsLabels[$currentFilter['parameters']['first'][0]].'</span>';
									
								}
								
								$theInput2 = null;
								$theInput3 = null;
								
								break;
								
							case "next":
							case "not next":
							case "these":	
														
								if (!$hasCustomEnum) {
									$rdoaEnumArray = self::getReducedDateOperatorArrays();
									$opts = $rdoaEnumArray["opts"];
									$optsLabels = $rdoaEnumArray["optsLabels"];
								} else {
									$opts = $customGeneratedDropdownValues['opts'];
									$optsLabels = $customGeneratedDropdownValues['optsLabels'];
								}
								
								if ($filterBehavior == "user_input") {
									
									$theInput1 = "<select id='".$filterReference.$dashletId."_1'>";
									foreach ($opts as $opt) {
										$theInput1 .= "<option value='".$opt."' ".($opt == $currentFilter['parameters']['first'][0] ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
									}
									$theInput1 .= "</select>";
									
								} else if ($filterBehavior == "visible") {
									
									$theInput1 = '<span>'.$optsLabels[$currentFilter['parameters']['first'][0]].'</span>';
									
								}
								
								if ($filterBehavior == "user_input") {

									$theInput2 = '<input id="'.$filterReference.$dashletId.'_2" type="text" value="'.$filterSecondParameter[0].'">';
								
								} else if ($filterBehavior == "visible") {

									$theInput2 = '<span>'.$filterSecondParameter[0].'</span>';
								
								}
								
								$theInput3 = null;
									
								break;
							
						}
						
						break;
						
					case "bool":
					case "tinyint(1)":
						if (!empty($extFilters[$filterReference]["param1"]))
							$currentFilter['parameters']['first'][0] = $extFilters[$filterReference]["param1"];

						if ($filterBehavior == "user_input")
							$theInput1 = ($currentFilter['parameters']['first'][0] == "true") ? "<select id='".$filterReference.$dashletId."_1' name='".$filterReference."_1'><option value='true' selected>".asol_ReportsUtils::translateReportsLabel("LBL_REPORT_TRUE")."</option><option value='false'>".asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FALSE")."</option></select>" : "<select id='".$filterReference.$dashletId."_1'><option value='true'>".asol_ReportsUtils::translateReportsLabel("LBL_REPORT_TRUE")."</option><option value='false' selected>".asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FALSE")."</option></select>";
						else if ($filterBehavior == "visible")
							$theInput1 = "<span>".$currentFilter['parameters']['first'][0]."</span>";
						
						$theInput2 = null;
						$theInput3 = null;
						
						break;

					case "relate" :
						if (!empty($extFilters[$filterReference]["param1"]))
							$currentFilter['parameters']['first'][0] = $extFilters[$filterReference]["param1"];

						$tmpField = explode(".", $filterField);
						
						$relateField = (count($tmpField) == 2) ? $tmpField[1] : $filterField;

						if ($auditedReport) {
							if ($filterField == 'parent_id')
								$relateModule = $report_module;
							else if ($filterField == 'created_by')
								$relateModule = "Users";
						} else {
							$relateModule = asol_Report::getRelateFieldModule($report_module, $relateField);
						}
						
						if (($filterOperator === 'my items') && (empty($currentFilter['parameters']['first'][0])))
							$moduleFieldValue = $current_user->id;
						else 
							$moduleFieldValue = $currentFilter['parameters']['first'][0];
						
						$relateId = "id";
						$relateName = ($relateModule == 'Users') ? "user_name" : "name";
						$fieldInputId = $filterReference.$dashletId."_1";
						$fieldInputName = $filterReference.$dashletId."_1_name";

						//Create new ModuleObject and get Name field Value
						$moduleFieldName = BeanFactory::getBean($relateModule, $moduleFieldValue)->$relateName;
						//Create new ModuleObject and get Name field Value
						
						
						$popup_selector = 
						"<input type='hidden' id='".$filterReference.$dashletId."_1"."' value='".$moduleFieldValue."'><input readonly type='text' autocomplete='off' title='' value='".$moduleFieldName."' id='".$filterReference.$dashletId."_1_name"."'>
						<button type='button' onclick=\"open_popup('".$relateModule."', 600, 400, '', true, false, {'call_back_function':'set_return','form_name':'criteria_form','field_to_name_array':{'".$relateId."':'".$fieldInputId."','".$relateName."':'".$fieldInputName."'}}, 'single', true);\" class='button' title='".$app_strings['LBL_SELECT_BUTTON_LABEL']."'><img src='themes/default/images/id-ff-select.png'></button>
						<button type='button' onclick=\"document.getElementById('".$filterReference.$dashletId."_1_name').value =''; document.getElementById('".$filterReference.$dashletId."_1').value = ''\" value='Clear'><img src='themes/default/images/id-ff-clear.png'></button>";
							
						if ($filterBehavior == "user_input")
							$theInput1 = $popup_selector;
						else if ($filterBehavior == "visible")
							$theInput1 = "<span>".$moduleFieldName."</span>";
						
						$theInput2 = null;
						$theInput3 = null;
						
						break;
						
						
					default:
						
						if ($filterBehavior == "user_input") {

							$selectMultiple = (in_array($currentFilter['operator'], array("one of", "not one of"))) ? "multiple size=1" : "";
							$selectStyle = (in_array($currentFilter['operator'], array("one of", "not one of"))) ? "visibility: hidden;" : "";
							
							if (!$hasCustomEnum) {
		
								$theInput1 = '<input id="'.$filterReference.$dashletId.'_1" type="text" value="'.$currentFilter['parameters']['first'][0].'">';

							} else {
								
								$selectedOpts = $currentFilter['parameters']['first'];
								
								$opts = $customGeneratedDropdownValues['opts'];
								$optsLabels = $customGeneratedDropdownValues['optsLabels'];							

								$theInput1 = '<select id="'.$filterReference.$dashletId.'_1" '.$selectMultiple.' style="'.$selectStyle.'">';
								foreach ($opts as $opt) {
									$theInput1 .= "<option value='".$opt."' ".(in_array($opt, $selectedOpts) ? "selected" : "")." title='".$optsLabels[$opt]."'>".$optsLabels[$opt]."</option>";
								}
								
								$theInput1 .= "</select>";		
	
							}

						} else if ($filterBehavior == "visible") {
							
							if (!$hasCustomEnum) {
							
								$theInput1 = '<span>'.$currentFilter['parameters']['first'][0].'</span>';
							
							} else {
								
								$selectedOpts = $currentFilter['parameters']['first'];
								
								$opts = $customGeneratedDropdownValues['opts'];
								$optsLabels = $customGeneratedDropdownValues['optsLabels'];
								
								$theInput1 = '<span>';
							
								foreach ($opts as $opt) {
									if (in_array($opt, $selectedOpts))
										$theInput1 .= $optsLabels[$opt]."<br>";
								}
								
								$theInput1 = substr($theInput1, 0, -4);
								
								$theInput1 .= '</span>';
								
							}
							
						}
						
						$theInput2 = null;
						$theInput3 = null;
						break;
					
				}
				
				
				if ($filterBehavior == "user_input") {
					
					if ($theInput3 != null)
						$filtersHiddenInputs .= $filterReference.'${dp}'.$currentFilter['operator'].'${dp}3${pipe}';
					else if ($theInput2 != null)
						$filtersHiddenInputs .= $filterReference.'${dp}'.$currentFilter['operator'].'${dp}2${pipe}';
					else
						$filtersHiddenInputs .= $filterReference.'${dp}'.$currentFilter['operator'].'${dp}1${pipe}';
					
				}

				
				$hasCustomFilterLabel = false;
				
				if ($filterBehavior == "visible") {
				
					$filterLabel = "LBL_REPORT_".strtoupper(str_replace(" ", "_", $currentFilter['operator']))."_".strtoupper(str_replace(" ", "_", $currentFilter['parameters']['first'][0]));
					$filterLabel .= (!empty($filterSecondParameter[0])) ? "_".$filterSecondParameter[0] : "";

					$filterLabelValue = asol_ReportsUtils::translateReportsLabel($filterLabel);
					
					if (empty($filterLabelValue) || $filterLabel === $filterLabelValue) {
						$filterLabel = "LBL_REPORT_".strtoupper(str_replace(" ", "_", $currentFilter['operator']));
					} else {
						$hasCustomFilterLabel = true;
					}
					
				} else {

					$filterLabel = "LBL_REPORT_".strtoupper(str_replace(" ", "_", $currentFilter['operator']));
					
				}
				
				$filterLabelValue = asol_ReportsUtils::translateReportsLabel($filterLabel);
				$filterNegateLabel = ($currentFilter['logicalOperators']['negate'] == '1' && $currentFilter['logicalOperators']['parenthesis'] <= '0' ? asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NOT').' ' : '');
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array('multiLanguage' => $currentFilter['language']);
				$returnedPremiumAlias = asol_ReportsUtils::managePremiumFeature("multiLanguageReport", "reportFunctions.php", "getMultiLanguageLabel", $extraParams);
				$currentFilter['untranslatedAlias'] = $currentFilter['alias'];
				$currentFilter['alias'] = ($returnedPremiumAlias !== false) ? $returnedPremiumAlias : $currentFilter['alias'];
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
				
				$filtersPanel[] = array(
					"type" => $filterType,
					"label" => $currentFilter['alias'],
					"reference" => $filterReference,
					"opp" => $currentFilter['operator'],
					"input1" => ($hasCustomFilterLabel ? '' : $theInput1),
					"input2" => ($hasCustomFilterLabel ? '' : $theInput2),
					"input3" => ($hasCustomFilterLabel ? '' : $theInput3),
					"genLabel" => $filterNegateLabel.(!empty($filterLabelValue) ? $filterLabelValue: $currentFilter['operator']),
				);
								  
		  
			}
			
		}
	
		$filtersHiddenInputs = urlencode(substr($filtersHiddenInputs, 0, -7));
		$filtersHiddenInputs = (!empty($filtersHiddenInputs)) ? $filtersHiddenInputs : false;
	
		return array(
			"filterValues" => $filters,
			"filtersPanel" => $filtersPanel,
			"filtersHiddenInputs" => $filtersHiddenInputs
		);
		
	}
	
	private static function getUserOptionsReadableFormat($userOptions) {
		if ($userOptions == null) {
			$userOptions = array();
		}
		
		$ret = "";
		foreach($userOptions as $entry) {
			$key = $entry['key'];
			$value = $entry['value'];
			
			$ret .= $key;
			if (isset($value)) {
				$ret .= '='.$value;
			}
			$ret .= ",";
			
		}
		
		return substr($ret, 0, -1);
	}
	
	private static function getCustomGeneratedDropdownValues($generatedDropdown) {
		
		global $current_language;
		
		$opts = array();
		$optsLabels = array();
		
		foreach($generatedDropdown as $dropdownValues) {
			$opts[] = $dropdownValues['key'];
			$optsLabels[$dropdownValues['key']] = (isset($dropdownValues['language'][$current_language]) ? $dropdownValues['language'][$current_language] : (isset($dropdownValues['value']) ? $dropdownValues['value'] : $dropdownValues['key']));
		}

		return array(
			"opts" => $opts,
			"optsLabels" => $optsLabels
		);
		
	}
	
	
	public static function getReportTotalEntries($sqlFrom, $sqlCountJoin, $sqlWhere, $sqlGroup, $sqlHaving, $details, $groups, $useExternalDbConnection, $alternativeDb, $reportTable) {
	
		$hasDetail = (count($details) != 0);
		$hasGroup = (count($groups) != 0);
		
		if ($hasDetail) {
			$sqlGroup .= ($hasGroup ? ', '.$details[0]['field'] : '');
		}
		
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
		$primaryKey = (array_search('PRIMARY', $_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable], true));
		$primaryKeyCounter = ($primaryKey !== false && !$hasGroup ? 'DISTINCT '.$reportTable.'.'.$primaryKey : '*');
		
		if ($hasGroup) {
			
			$sqlOrder = ' ORDER BY NULL';
		
			$rsG = asol_Report::getSelectionResults("SELECT COUNT(DISTINCT ".$groups[0]['field'].") AS total ".$sqlFrom.$sqlCountJoin.$sqlWhere.$sqlGroup.$sqlHaving.$sqlOrder, null, $useExternalDbConnection, $alternativeDb);
			$total_entries = count($rsG);

			$total_ungrouped_entries = 0;
			foreach ($rsG as $totalG) {
				$total_ungrouped_entries += $totalG['total'];
			}
			
		} else {
			
			$rs = asol_Report::getSelectionResults("SELECT COUNT(".$primaryKeyCounter.") AS total ".$sqlFrom.$sqlCountJoin.$sqlWhere, null, $useExternalDbConnection, $alternativeDb);
			$total_entries = $total_ungrouped_entries = $rs[0]['total'];
			
		}

		return array(
			'totalEntries' => $total_entries,
			'totalUngroupedEntries' => $total_ungrouped_entries
		);
	
	}
						
	
	public static function correctEmptyReport($sqlSelect, $sqlTotals, $alternativeDb, $reportTable, $groups) {
						
		$hasGroup = (count($groups) != 0);
		
		$selectReturn = (strlen($sqlSelect) <= 6) ? " id" : null;
		
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
		$primaryKey = (array_search('PRIMARY', $_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable], true));
		$primaryKeyCounter = ($primaryKey !== false && !$hasGroup ? 'DISTINCT '.$reportTable.'.'.$primaryKey : '*');

		$totalReturn["sql"] = (strlen($sqlTotals) <= 6) ? " COUNT(".$primaryKeyCounter.") AS 'TOTAL'" : null;
		$totalReturn["column"] = (strlen($sqlTotals) <= 6) ? "TOTAL" : null;
		
		return array(
			"select" => $selectReturn,
			"totals" => $totalReturn
		);
		
	}
	
	
	public static function getOrderPaginationSingleDetailVars($detailFieldInfo, $detailMultiQuery, $results_limit, $sqlFrom, $sqlJoin, $sqlWhere, $sqlGroup, $sqlHaving, $useExternalDbConnection, $alternativeDb, $reportTable, $groups) {
	
		$rsGroups;
		$sizes;
		$fullSizes;
		$sqlOrderGroups = "";
		
		$hasGroup = (count($groups) != 0);
		
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
		$primaryKey = (array_search('PRIMARY', $_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable], true));
		$primaryKeyCounter = ($primaryKey !== false && !$hasGroup ? 'DISTINCT '.$reportTable.'.'.$primaryKey : '*');

		if ($detailFieldInfo['order'] != '0') {
			$sqlOrderGroups = " ORDER BY ".$detailFieldInfo['field']." ".$detailFieldInfo['order'];		
		}
		
		if ($detailMultiQuery) {
		
			$sqlGroupsQuery = "SELECT DISTINCT ".$detailFieldInfo['field']." AS 'group' ".$sqlFrom.$sqlJoin.$sqlWhere.$sqlOrderGroups;
			$rsGroups = asol_Report::getSelectionResults($sqlGroupsQuery, null, $useExternalDbConnection, $alternativeDb);
	
			for ($j=0; $j<count($rsGroups); $j++){
		
				$rsGroups[$j]['group'] = ($rsGroups[$j]['group'] == "") ? "Nameless" : $rsGroups[$j]['group'] = str_replace("&quot;", "\"", str_replace("&#039;", "\'", $rsGroups[$j]['group']));
		
				$groupField = $detailFieldInfo['field'];
				$subGroup = $rsGroups[$j]['group'];
		
				$sqlDetailGroupWhere = ($subGroup != "Nameless") ? $sqlWhere." AND ".$groupField."='".$subGroup."' " : $sqlWhere." AND ".$groupField." IS NULL ";
				$sqlDetailGroupQuery = "SELECT COUNT(".$primaryKeyCounter.") AS total ".$sqlFrom.$sqlJoin.$sqlDetailGroupWhere.$sqlGroup.$sqlHaving;
				
	
				$rsCount = asol_Report::getSelectionResults($sqlDetailGroupQuery, null, $useExternalDbConnection, $alternativeDb);
		
				if ($results_limit == "all") {
					$sizes[$j] = $rsCount[0]['total'];
				} else {
					$res_limit = explode('${dp}', $results_limit);
					$sizes[$j] = ($rsCount[0]['total'] < $res_limit[2]) ? $rsCount[0]['total'] : $res_limit[2];
				}
		
				$fullSizes[$j] = $rsCount[0]['total'];
		
			}
			
		} else {
			
			$sqlGroupsTotalsQuery = "SELECT DISTINCT ".$detailFieldInfo['field']." AS 'group', COUNT(".$primaryKeyCounter.") AS total ".$sqlFrom.$sqlJoin.$sqlWhere.' GROUP BY '.$detailFieldInfo['field'].' '.$sqlOrderGroups;
			$rsGroupsTotals = asol_Report::getSelectionResults($sqlGroupsTotalsQuery, null, $useExternalDbConnection, $alternativeDb);
			
			for ($j=0; $j<count($rsGroupsTotals); $j++){
				
				$rsGroups[$j]['group'] = ($rsGroupsTotals[$j]['group'] == "") ? "Nameless" : $rsGroupsTotals[$j]['group'] = str_replace("&quot;", "\"", str_replace("&#039;", "\'", $rsGroupsTotals[$j]['group']));
				
				if ($results_limit == "all") {
					$sizes[$j] = $rsGroupsTotals[$j]['total'];
				} else {
					$res_limit = explode('${dp}', $results_limit);
					$sizes[$j] = ($rsGroupsTotals[$j]['total'] < $res_limit[2]) ? $rsGroupsTotals[$j]['total'] : $res_limit[2];
				}
				
				$fullSizes[$j] = $rsGroupsTotals[$j]['total'];
				
			}
			
		}
		
		return array(
			"rsGroups" => $rsGroups,
			"sizes" => $sizes,
			"fullSizes" => $fullSizes
		);
		
	}
					
	
	public static function getOrderPaginationDateDetailVars($detailFieldInfo, $detailMultiQuery, $results_limit, $sqlFrom, $sqlJoin, $sqlWhere, $useExternalDbConnection, $alternativeDb, $reportTable, $groups, $week_start) {
		
		$hasGroup = (count($groups) != 0);
		
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
		$primaryKey = (array_search('PRIMARY', $_SESSION['asolReportsTableIndexes'][$dbKey][$reportTable], true));
		$primaryKeyCounter = ($primaryKey !== false && !$hasGroup ? 'DISTINCT '.$reportTable.'.'.$primaryKey : '*');

		if (in_array($detailFieldInfo['grouping'], array('Minute Detail', 'Quarter Hour Detail', 'Hour Detail', 'Day Detail', 'DoW Detail', 'WoY Detail', 'Month Detail', 'Natural Quarter Detail', 'Fiscal Quarter Detail', 'Natural Year Detail', 'Fiscal Year Detail'))) {
			if ($detailMultiQuery)
				$sqlGroupsQuery = "SELECT DISTINCT ".$detailFieldInfo['field']." AS 'group' ".$sqlFrom.$sqlJoin.$sqlWhere;
			else
				$sqlGroupsQuery = "SELECT DISTINCT ".$detailFieldInfo['field']." AS 'group', COUNT(".$primaryKeyCounter.") AS total ".$sqlFrom.$sqlJoin.$sqlWhere.' GROUP BY '.$detailFieldInfo['field'];
		}
			
		$sqlOrderGroups = "";
		
		if ($detailFieldInfo['order'] != '0') {
			
			if (in_array($detailFieldInfo['grouping'], array('Minute Detail', 'Quarter Hour Detail', 'Hour Detail', 'Day Detail', 'DoW Detail', 'WoY Detail', 'Month Detail', 'Natural Quarter Detail', 'Fiscal Quarter Detail', 'Natural Year Detail', 'Fiscal Year Detail'))) { 
				$sqlOrderGroups = " ORDER BY ".$detailFieldInfo['field']." ".$detailFieldInfo['order'];
			}
				
		} 
			
		$rsGroups = asol_Report::getSelectionResults($sqlGroupsQuery.$sqlOrderGroups, null, $useExternalDbConnection, $alternativeDb);
	
		
		//*********************************************//
		//***Reorder Groups if Week Starts on Sunday***//
		//*********************************************//
		if (($detailFieldInfo['grouping'] === 'DoW Detail') && ($week_start !== '1')) {
			array_unshift($rsGroups, array_pop($rsGroups));
		}
		//*********************************************//
		//***Reorder Groups if Week Starts on Sunday***//
		//*********************************************//
		
		
		$sizes;
		$fullSizes;
		
		if ($detailMultiQuery) {

			for ($j=0; $j<count($rsGroups); $j++) {
				
				$groupField = $detailFieldInfo['field'];
				$subGroup = $rsGroups[$j]['group'];
				
				if (in_array($detailFieldInfo['grouping'], array('Day Detail', 'DoW Detail', 'WoY Detail', 'Month Detail', 'Natural Quarter Detail', 'Fiscal Quarter Detail', 'Natural Year Detail', 'Fiscal Year Detail')))
					$sqlDetailGroupWhere = $sqlWhere." AND ".$groupField."='".$subGroup."' ";
			
				
				$sqlDetailGroupQuery = "SELECT COUNT(".$primaryKeyCounter.") AS total ".$sqlFrom.$sqlJoin.$sqlDetailGroupWhere.$sqlGroup;
				
				
				$rsCount = asol_Report::getSelectionResults($sqlDetailGroupQuery, null, $useExternalDbConnection, $alternativeDb);
					
				if ($results_limit == "all") {
					$sizes[$j] = $rsCount[0]['total'];
				} else {
					$res_limit = explode('${dp}', $results_limit);
					$sizes[$j] = ($rsCount[0]['total'] < $res_limit[2]) ? $rsCount[0]['total'] : $res_limit[2];
				}
		
				$fullSizes[$j] = $rsCount[0]['total'];
				
			}
		
		} else {
			
			for ($j=0; $j<count($rsGroups); $j++){
				
				if ($results_limit == "all") {
					$sizes[$j] = $rsGroups[$j]['total'];
				} else {
					$res_limit = explode('${dp}', $results_limit);
					$sizes[$j] = ($rsGroups[$j]['total'] < $res_limit[2]) ? $rsGroups[$j]['total'] : $res_limit[2];
				}
				
				$fullSizes[$j] = $rsGroups[$j]['total'];
				
			}
			
		}
		
		return array(
			"rsGroups" => $rsGroups,
			"sizes" => $sizes,
			"fullSizes" => $fullSizes
		);
		
	}
	
	
	public static function getPaginationMainVariables($page_number, $entriesPerPage, $sizes) {
							
		$current_entries = 0;
		$first_entry = 0;
	
		$init_group = 0;
		$end_group = 0;
		$index = 0;
		
		for ($k=0; $k<=$page_number; $k++) {
				
			$current_entries = 0;
			$current_entries += $sizes[$index];
		
			while (($current_entries < $entriesPerPage) && ($index+1 < count($sizes))){
				$index++;
				$current_entries += $sizes[$index];
			}
				
			if ($k == ($page_number-1)){
				$init_group = $index+1;
			}
				
			if ($k == $page_number){
				$end_group = $index;
			}
				
			$index++;
			$first_entry += $current_entries;
		}
		
		$first_entry -= $current_entries;
		
		return array(
			"init_group" => $init_group,
			"end_group" => $end_group,
			"current_entries" => $current_entries,
			"first_entry" => $first_entry
		);
		
	}
						
	
	public static function getDetailGroupWhereExtensionQuery($sqlWhere, $groupField, $subGroup) {
	
		global $mod_strings;
		
		if ($subGroup != "Nameless")
			$sqlDetailWhere = $sqlWhere." AND ".$groupField."='".$subGroup."' ";
		else {
			$sqlDetailWhere = $sqlWhere." AND ".$groupField." IS NULL ";
			$subGroup = $mod_strings['LBL_REPORT_NAMELESS'];
		}
		
		return array(
			"subGroup" => $subGroup,
			"sqlDetailWhere" => $sqlDetailWhere
		);
	
	}

							
	public static function getDateDetailGroupWhereExtensionQuery($sqlWhere, $groupField, $detailGrouping, $subGroup) {
		
		$sqlWhere = (empty($sqlWhere) ? " WHERE (1=1)" : $sqlWhere);
		
		if (in_array($detailGrouping, array('Minute Detail', 'Quarter Hour Detail', 'Hour Detail', 'Day Detail', 'DoW Detail', 'WoY Detail', 'Month Detail', 'Natural Quarter Detail', 'Fiscal Quarter Detail', 'Natural Year Detail', 'Fiscal Year Detail')))
			$sqlDetailWhere = $sqlWhere." AND ".$groupField."='".$subGroup."' ";

		return array(
			"subGroup" => $subGroup,
			"sqlDetailWhere" => $sqlDetailWhere
		);
		
	}
		
	public static function sortAssocArray(& $assocArray, $key, $ascending = true, $isInteger = true) {
				
		if ($isInteger) {
	
			if ($ascending)
				usort($assocArray, create_function('$a, $b', "return (int)\$a['".$key."'] - (int)\$b['".$key."'];"));
			else
				usort($assocArray, create_function('$a, $b', "return (int)\$b['".$key."'] - (int)\$a['".$key."'];"));
		
		} else {
		
			if ($ascending)
				usort($assocArray, create_function('$a, $b', "return strcmp(\$a['".$key."'], \$b['".$key."']);"));
			else
				usort($assocArray, create_function('$a, $b', "return strcmp(\$a['".$key."'], \$b['".$key."'])*-1;"));
		
		}
	
	}
	
	/*
	self::sortAssocArray($rs, $groupSubTotalField, true, true);
	*/
	
	public static function getTableConfiguration($tables, $index) {
		
		return $tables['tables'][$index]['config'];
		
	}

	private static function getDOWEnumArrays() {
		
		$dowLabels = array(
			"0" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MONDAY"),
			"1" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_TUESDAY"),
			"2" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_WEDNESDAY"),
			"3" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_THURSDAY"),
			"4" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FRIDAY"),
			"5" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SATURDAY"),
			"6" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SUNDAY")
		);
		$dowValues = array_keys($dowLabels);
		
		return array(
			"opts" => $dowValues,
			"optsLabels" => $dowLabels,
		);
	}
	
	private static function getWOYEnumArrays() {
		$weeksInYear = 53;
		$woyLabels = array();
		
		for ($week = 1; $week <= $weeksInYear; $week++) {
			$woyLabels[$week] = $week;
		}
		
		$woyValues = array_keys($woyLabels);
		
		return array(
			"opts" => $woyValues,
			"optsLabels" => $woyLabels,
		);
		
	}
	
	private static function getMOYEnumArrays() {
		
		$moyLabels = array(
			"1" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JANUARY"),
			"2" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FEBRUARY"),
			"3" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MARCH"),
			"4" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_APRIL"),
			"5" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MAY"),
			"6" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JUNE"),
			"7" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JULY"),
			"8" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_AUGUST"),
			"9" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SEPTEMBER"),
			"10" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_OCTOBER"),
			"11" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NOVEMBER"),
			"12" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_DECEMBER")
		);
		$moyValues = array_keys($moyLabels);
		
		return array(
			"opts" => $moyValues,
			"optsLabels" => $moyLabels,
		);
	}
	
	private static function getQOYEnumArrays() {
		$qoyLabels = array(
			"1" => "1º",
			"2" => "2º",
			"3" => "3º",
			"4" => "4º"
		);
		$qoyValues = array_keys($qoyLabels);
		
		return array(
			"opts" => $qoyValues,
			"optsLabels" => $qoyLabels,
		);
	}
	
	private static function getDateOperatorArrays() {
		
		global $mod_strings;
		
		$doaLabels = array(
			"day" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_DAY"),
			"week" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_WEEK"),
			"month" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MONTH"),
			"Nquarter" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NQUARTER"),
			"Fquarter" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FQUARTER"),
			"Nyear" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NYEAR"),
			"Fyear" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FYEAR"),
			"monday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MONDAY"),
			"tuesday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_TUESDAY"),
			"wednesday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_WEDNESDAY"),
			"thursday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_THURSDAY"),
			"friday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FRIDAY"),
			"saturday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SATURDAY"),
			"sunday" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SUNDAY"),
			"january" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JANUARY"),
			"february" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FEBRUARY"),
			"march" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MARCH"),
			"april" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_APRIL"),
			"may" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MAY"),
			"june" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JUNE"),
			"july" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_JULY"),
			"august" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_AUGUST"),
			"september" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SEPTEMBER"),
			"october" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_OCTOBER"),
			"november" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NOVEMBER"),
			"december" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_DECEMBER")
		);
		$doaValues = array_keys($doaLabels);
		
		return array(
			"opts" => $doaValues,
			"optsLabels" => $doaLabels,
		);
	}
	
	private static function getReducedDateOperatorArrays() {
		
		global $mod_strings;
		
		$rdoaLabels = array(
			"day" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_DAY"),
			"week" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_WEEK"),
			"month" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MONTH"),
			"Nquarter" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NQUARTER"),
			"Fquarter" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FQUARTER"),
			"Nyear" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_NYEAR"),
			"Fyear" => asol_ReportsUtils::translateReportsLabel("LBL_REPORT_FYEAR")
		);
		$rdoaValues = array_keys($rdoaLabels);
		
		return array(
			"opts" => $rdoaValues,
			"optsLabels" => $rdoaLabels,
		);
	}
	
	public static function generateChartFileNames($reportChartsEngine, $charts) {
		
		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		$fileExtension = ($reportChartsEngine) ? ".xml" : ".js";
		$chartsUrls = array();
		
		foreach ($charts['charts'] as $chart) {

			$xmlName = count($chartsUrls)."_".dechex(time()).dechex(rand(0,999999)).$fileExtension;
			
			if ($chart['data'] == 'yes') {
				$chartsUrls[] = $tmpFilesDir.$xmlName;
			}

		}
		
		return $chartsUrls;
		
	}
	
	public static function isEmptyResultSet($resultSet) {
		
		$emptyResultSet = true;
		
		if (!empty($resultSet)) {
		
			foreach ($resultSet as $currentRow) {
				
				foreach ($currentRow as $currentCell) {
					if (!empty($currentCell)) {
						$emptyResultSet = false;
						break;
					}
				}
				
				if (!$emptyResultSet)
					break;
				
			}
			
		}
		
		return $emptyResultSet;
		
	}
	
	public static function generateDashletLibraries($reportId, $isMetaReport = false) {
		
		require_once('modules/asol_Reports/include_basic/manageReportsFunctions.php');
		require_once('modules/asol_Reports/include_basic/ReportChart.php');
		
		$returnedScripts = '';
		$returnedHtml = '';
		$reportBean = asol_Report::getReportBean($reportId);
	
		if ($_REQUEST['action'] != 'DynamicAction') {

			if ((!isset($_REQUEST['asolLoadedReportsLibraries'])) || (!$_REQUEST['asolLoadedReportsLibraries'])) {

				$returnedHtml .= asol_ReportsManagementFunctions::getLoadingBlockDiv();
				
				$returnedScripts .= '<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">';
				$returnedScripts .= '<script type="text/javascript" src="modules/asol_Reports/include_basic/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';

				$returnedScripts .= '<script type="text/javascript" src="modules/asol_Reports/include_basic/js/jquery.blockUI.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extendedFunctionsScript = asol_ReportsUtils::managePremiumFeature("ExtendedJavascriptFunctions", "reportFunctions.php", "getExtendedJavaScriptFunctions", null);
				if ($extendedFunctionsScript !== false) {
					$returnedScripts .= $extendedFunctionsScript;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
				$returnedScripts .= self::getFancyMultiEnumJsLanguages();
				
				$_REQUEST['asolLoadedReportsLibraries'] = true;
				
			}

			if ((!isset($_REQUEST['asolLoadedPremiumReportsLibraries'])) || (!$_REQUEST['asolLoadedPremiumReportsLibraries'])) {
				
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$premiumFunctionsScript = asol_ReportsUtils::managePremiumFeature("basicPremiumJavascriptFeature", "reportFunctions.php", "getPremiumJavaScriptFunctions", null);
				if (($premiumFunctionsScript !== false) && ($isMetaReport)) {
					$returnedScripts .= $premiumFunctionsScript;
					$_REQUEST['asolLoadedPremiumReportsLibraries'] = true;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				
			}
			
			if ($reportBean->report_charts != "Tabl") {

				if ((!isset($_REQUEST['asolHasLoadedChartEngineLibraries'][$reportBean->report_charts_engine])) || (!$_REQUEST['asolHasLoadedChartEngineLibraries'][$reportBean->report_charts_engine])) {

					$returnedScripts .= asol_ReportsCharts::getChartEngineLibraries($reportBean->report_charts_engine, true, false);
					
				}
				
				$_REQUEST['asolHasLoadedChartEngineLibraries'][$reportBean->report_charts_engine] = true;
				
			}
		
		}
		
		return $returnedScripts.$returnedHtml;
		
	}
	
	public static function getFancyMultiEnumJsLanguages() {
		
		return '
		<script>
			var asolReportFancyMultiEnumLabels = {
				checkAllItems: "'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MULTIENUM_CHECK_ALL_ITEMS').'",
				allSelectedItems: "'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MULTIENUM_ALL_SELECTED_ITEMS').'",
				selectedItems: "'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_MULTIENUM_SELECTED_ITEMS').'"
			};
		</script>
		';
		
	} 
	
	public static function generateDashletReport($reportId, $dashletId, $autoProcessScript = '') {
		
		require_once('modules/asol_Reports/include_basic/generateReport.php');

		$focus = asol_Report::getReportBean($reportId);
		
		if ($focus->is_meta === '1') {
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'reportId' => $reportId,
				'isDashlet' => true,
				'dashletId' => $dashletId,
				'getLibraries' => false,
				'returnHtml' => true,
				'contextDomainId' => null,
				'currentReportCss' => null
			);
			$executedReportHtml = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "executeMetaReport", $extraParams);
			if ($executedReportHtml === false) {
				die("Cannot get metaReport Premium Feature. executeMetaReport() Function Called.");
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
		
		} else {
			
			$executedReportHtml = displayReport($reportId, null, '', '', '', '', true, $dashletId, false, true, true);
			
		}
		
		return self::generateDashletLibraries($reportId).
				'<div id="externalHtmlReport'.$dashletId.'">
					<img id="loadingGIF'.$dashletId.'" src="themes/default/images/img_loading.gif"><span id="loadingTEXT'.$dashletId.'">'.translate("LBL_REPORT_LOADING", "asol_Reports").'</span>'
					.$executedReportHtml.$autoProcessScript.'
				</div>';
		
	}
	
	public static function getExportedSerializedReportFileContent($fileName) {
		
		$exportFolder = "modules/asol_Reports/tmpReportFiles/";
		
		$filePath = $exportFolder.$fileName;
		$exportFile = fopen($filePath, "r");
		$serializedReport = fread($exportFile, filesize($filePath));
		fclose($exportFile);
		
		$unserializedReport = unserialize($serializedReport);
		
		$theUser = BeanFactory::getBean('Users', $report["current_user_id"]);
		$gmtZone = $theUser->getUserDateTimePreferences();
		$userTZ = $theUser->getPreference("timezone")." ".$gmtZone["userGmt"];
		
		$reportDate = filectime($exportFolder.$fileName);
		
		return array(
			'unserializedReport' => $unserializedReport,
			'reportDate' => $reportDate,
			'userTZ' => $userTZ
		);
		
	}
	
	public static function processDownloadRequest($report, $userTZ, $fileTime, $fileType, $somePngs, $someLegends, $someEngines) {

		global $mod_strings, $sugar_config;

		require_once("modules/asol_Reports/include_basic/ReportFile.php");
		require_once("modules/asol_Reports/include_basic/ReportExcel.php");
		require_once("modules/asol_Reports/include_basic/generateReportsFunctions.php");
		
		$fileContent = null;
		
		$exportFolder = "modules/asol_Reports/tmpReportFiles/";
		$currentDir = getcwd()."/";
		
		$fileName = $exportFolder.$fileName;

		
		//Volcamos el contenido del report exportado en variables
		$report_name = $report["reportName"];
		$report_module = $report["module"];
		$descriptionArray = unserialize(base64_decode($report["description"]));
		$description = $descriptionArray['public'];
		$isDetailedReport = $report["isDetailedReport"];
		$isGroupedReport = $report["isGroupedReport"];
		
		$hasGroupedTotalBelowColumn = $report["hasGroupedTotalBelowColumn"];
		
		$reportScheduledType = $report["reportScheduledType"];
		
		$displayTitles = $report["displayTitles"];
		$displayHeaders = $report["displayHeaders"];
		$hasDisplayedCharts = $report["hasDisplayedCharts"];
		$pdf_orientation = $report["pdf_orientation"];
		$pdf_img_scaling_factor = $report["pdf_img_scaling_factor"];
		
		//Only if AlineaSolDomains installed
		$reportDomainId = (isset($report["asol_domain_id"])) ? $report["asol_domain_id"] : null;
		//Only if AlineaSolDomains installed
		
		$report_charts = $report["report_charts"];
		$report_charts_engine = $report["report_charts_engine"];
		$report_attachment_format = $report["report_attachment_format"];
		$row_index_display = $report["row_index_display"];
	
		$email_list = $report["email_list"];
		
		$created_by = $report["created_by"];
		
		$columns = $report["headers"];
		$types = $report["types"];
		$totals = $report["headersTotals"];
		$rsTotals = $report["totals"];
		
		$rs = $report["resultset"];
		$subGroups = $report["resultset"];
		
		$subTotals = $report["subTotals"];

		$columnsDataTypes = $report['columnsDataTypes'];
		$columnsDataFunctions = $report['columnsDataFunctions'];
		$columnsDataVisible	= $report['columnsDataVisible'];
		$columnsDataWidths	= $report['columnsDataWidths'];
			
		$currentReportCss = $report['currentReportCss'];
		
		
		//Only if AlineaSolDomains installed
		$contextDomainId = $report["context_domain_id"];
		//Only if AlineaSolDomains installed
		
		
		
		$rsExport = ($isDetailedReport ? $subGroups : $rs);
		$subTotalsExport = ($isDetailedReport ? $subTotals : "");
		
		if ($fileType == 'email') {
		
			$mail = self::getRetrievedReportMailer($email_list, $created_by, $report_name, $report_module, $description, $contextDomainId);

			$pngSrcs = Array();
			$legends = Array();
			$engines = Array();
		
			if (!$hasDisplayedCharts) {
		
				$rsExport = $rs;
				$subTotalsExport = "";
		
			} else {
		
				$rsExport = $subGroups;
				$subTotalsExport = $subTotals;
		
				if ($report_attachment_format != "CSV") {
		
					if (in_array($report_charts, array("Char", "Both", "Htob"))) {
					
						//Generamos las imagenes
						$pngs = explode("%pngSeparator", $somePngs);
						foreach ($pngs as $key=>$png) {
							$pngSrcs[$key] = $png;
						}
						$legends = explode("%legendSeparator", $someLegends);
						$engines = explode(";", $someEngines);
		
					}
		
				}
		
			}
		
			switch ($report_attachment_format) {
		
				case "HTML":
					if ($report_charts == "Char") {
				
						$columns = Array();
						$rsExport = Array();
						$rsTotals = Array();
						
					}	
					$attachment = generateFile($displayTitles, $displayHeaders, $report_name , $report_module, $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, $pngs, $legends, $engines, true, true, 100, $fileTime, $userTZ, $row_index_display, $report_charts, $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $contextDomainId);
					break;
		
				case "PDF":
					if ($report_charts == "Char") {
				
						$columns = Array();
						$rsExport = Array();
						$rsTotals = Array();
						
					}
					$attachment = generateFile($displayTitles, $displayHeaders, $report_name , $report_module, $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, $pngSrcs, $legends, $engines, false, true, $pdf_img_scaling_factor, $fileTime, $userTZ, $row_index_display, $report_charts, $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $contextDomainId);
					break;
		
				case "CSV":
					$attachment = generateCsv($report_name, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
					break;
		
				case "CSVC":
					$attachment = generateCsv($report_name, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, true, true, false, true, true);
					break;
					
				case "XLS":
					$attachment = generateXls($report_name, $columns, $types, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
					break;
					
				case "XLSC":
					$attachment = generateXls($report_name, $columns, $types, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, true, true, false, true, true);
					break;
					
			}
		
			//Añadimos el Report como fichero adjunto del e-mail
			$mail->AddAttachment($currentDir.$exportFolder.$attachment, $attachment);
		
			//Exito sera true si el email se envio satisfactoriamente, false en caso comtrario
			$success = $mail->Send();
			
			$tries=1;
			while ((!$success) && ($tries < 5)) {
		
				sleep(5);
				$success = $mail->Send();
				$tries++;
		
			}
		
			unlink($currentDir.$exportFolder.$attachment);
		
		} else if ($fileType == 'app') {

			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'reportScheduledType' => $reportScheduledType,
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
			
		} else {
			
			if ($fileType == 'csv') {
	
				$filePath = generateCsv($report_name ,$columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
				
			} else if ($fileType == 'csvc') {
	
				$filePath = generateCsv($report_name ,$columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, true, true, false, true, true);
				
			} else if ($fileType == 'xls') {
	
				$filePath = generateXls($report_name, $columns, $types, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, false, !$displayTitles, !$displayHeaders);
				
			} else if ($fileType == 'xlsc') {
	
				$filePath = generateXls($report_name, $columns, $types, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, true, false, $row_index_display, $columnsDataVisible, true, true, false, true, true);
				
			} else if ($fileType == 'html') {
	
				$pngSrcs = ((($hasDisplayedCharts) && (in_array($report_charts, array("Char", "Both", "Htob")))) ? explode("%pngSeparator", $_REQUEST['pngs']) : array());
				$legends = ((($hasDisplayedCharts) && (in_array($report_charts, array("Char", "Both", "Htob")))) ? explode("%legendSeparator", $_REQUEST['legends']) : array());
				$engines = ((($hasDisplayedCharts) && (in_array($report_charts, array("Char", "Both", "Htob")))) ? explode(";", $_REQUEST['engines']) : array());
				
				$rsExport = ($report_charts == "Char" ? array() : $rsExport);
				$rsTotals = ($report_charts == "Char" ? array() : $rsTotals);
	
				$filePath = generateFile($displayTitles, $displayHeaders, $report_name , $report_module, $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, $pngSrcs, $legends, $engines, true, true, 100, $fileTime, $userTZ, $row_index_display, $report_charts, $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $contextDomainId);
				
			} else if ($fileType == 'pdf') {
	
				$pngSrcs = Array();
				$legends = Array();
				$engines = Array();
					
				if ($hasDisplayedCharts){
			
					if (in_array($report_charts, array("Char", "Both", "Htob"))) {
					
						//Generamos las imagenes
						$pngs = explode("%pngSeparator", rawurldecode($somePngs));
						foreach ($pngs as $key=>$png) {
							$pngSrcs[$key] = $png;
						}
						$legends = explode("%legendSeparator", $someLegends);
						$engines = explode(";", $someEngines);
						
						
					} 
			
				}
				
				$columns = ($report_charts == "Char" ? array() : $columns);
				$rsExport = ($report_charts == "Char" ? array() : $rsExport);
				$rsTotals = ($report_charts == "Char" ? array() : $rsTotals);
	
				$filePath = generateFile($displayTitles, $displayHeaders, $report_name , $report_module, $description, $columns, $rsExport, $totals, $rsTotals, $subTotalsExport, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, $pngSrcs, $legends, $engines, false, true, $pdf_img_scaling_factor, $fileTime, $userTZ, $row_index_display, $report_charts, $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $contextDomainId);
				
			}
			
			$fileContent = file_get_contents($currentDir.$exportFolder.$filePath);


		}
		
		return array(
			'fileName' => $filePath,
			'fileContent' => $fileContent
		);
		
	}
	
	public static function getRetrievedReportMailer($emailList, $createdBy, $reportName, $reportModule, $reportDescription, $contextDomainId) {

		require_once("include/SugarPHPMailer.php");
		
		global $mod_strings, $app_list_strings, $sugar_config;
		
		//************************//
		//****Get Email Arrays****//
		//************************//
		$emailReportInfo = asol_ReportsGenerationFunctions::getEmailInfo($emailList);
		
		$emailFrom = $emailReportInfo['emailFrom'];
		$emailArrays = $emailReportInfo['emailArrays'];
			
		$users_to = $emailArrays['users_to'];
		$users_cc = $emailArrays['users_cc'];
		$users_bcc = $emailArrays['users_bcc'];
		$roles_to = $emailArrays['roles_to'];
		$roles_cc = $emailArrays['roles_cc'];
		$roles_bcc = $emailArrays['roles_bcc'];
		$emails_to = $emailArrays['emails_to'];
		$emails_cc = $emailArrays['emails_cc'];
		$emails_bcc = $emailArrays['emails_bcc'];
			
		//Generar array con emails a enviar Report
		$mail = new SugarPHPMailer();
		$mail->setMailerForSystem();
		
		$user = new User();
		
		//created by
		$mail_config = $user->getEmailInfo($createdBy);
		
		$mail->From = (!empty($emailFrom) ? $emailFrom : (isset($sugar_config["asolReportsEmailsFrom"]) ? $sugar_config["asolReportsEmailsFrom"] : $mail_config['email']));
		$mail->FromName = (isset($sugar_config["asolReportsEmailsFromName"])) ? $sugar_config["asolReportsEmailsFromName"] : $mail_config['name'];
		
		//Timeout del envio de correo
		$mail->Timeout=30;
		$mail->CharSet = "UTF-8";
		
			
		asol_ReportsGenerationFunctions::setSendEmailAddresses($mail, $emailArrays, $contextDomainId);
		
		
		if (asol_ReportsUtils::isDomainsInstalled()) {
		
			$reportDomain = ($contextDomainId !== null) ? $contextDomainId : $current_user->asol_default_domain;
			$mail->Subject = "[".BeanFactory::getBean('asol_Domains', $contextDomainId)->name."] ".$mod_strings['LBL_REPORT_REPORTS_ACTION'].": ".$reportName;
		
		} else {
		
			$mail->Subject = $mod_strings['LBL_REPORT_REPORTS_ACTION'].": ".$reportName;
				
		}
		
		$mail->Body = "<b>".$mod_strings['LBL_REPORT_NAME'].": </b>".$reportName."<br>";
		$mail->Body .= "<b>".$mod_strings['LBL_REPORT_MODULE'].": </b>".$app_list_strings["moduleList"][$reportModule]."<br>";
		$mail->Body .= "<b>".$mod_strings['LBL_REPORT_DESCRIPTION'].": </b>".$reportDescription;
		
		//Mensaje en caso de que el destinatario no admita emails en formato html
		$mail->AltBody = $mod_strings['LBL_REPORT_NAME'].": ".$reportName."\n";
		$mail->AltBody .= $mod_strings['LBL_REPORT_MODULE'].": ".$app_list_strings["moduleList"][$reportModule]."\n";
		$mail->AltBody .= $mod_strings['LBL_REPORT_DESCRIPTION'].": ".$reportDescription;
		
		
		return $mail;
		
	}
	
	public static function doTemporalFixes($reportTable, & $selectedFields, & $selectedFilters) {
		
		if (isset($_REQUEST["external_filters"])) {
			$_REQUEST["external_filters"] = str_replace('${nbsp}', " ", urldecode(html_entity_decode($_REQUEST["external_filters"], ENT_QUOTES)));
		}
		
		foreach ($selectedFields['tables'][0]['data'] as & $selectedField) {
			if ($selectedField['isRelated']) {
				$keyDotExploded = explode('.', $selectedField['key']);
				if ($keyDotExploded[0] == $reportTable.'_cstm') {
					$selectedField['key'] = $keyDotExploded[1];
				}
			}
		}
		
		foreach ($selectedFilters['data'] as & $selectedFilter) {
			if ($selectedFilter['isRelated']) {
				$keyDotExploded = explode('.', $selectedFilter['relationKey']);
				if ($keyDotExploded[0] == $reportTable.'_cstm') {
					$selectedFilter['relationKey'] = $keyDotExploded[1];
				}
			}
		}
		
	}

	public static function getTypesWeightedWidthArray() {
		
		return array(
			"default" => 25,
			"noHeaderButton" => 1,
			"index" => 5,
				
			"int" => 10,
			"bigint" => 10,
			"float" => 10,
			"decimal" => 10,
			"double" => 10,
			"currency" => 10,
			
			"enum" => 15,
			"radioenum" => 15,
			"multienum" => 30,
				
			"date" => 15,
			"datetime" => 20,
			"datetimecombo" => 20,
			"timestamp" => 20,
				
			"bool" => 10,
			"tinyint(1)" => 10,
				
			"percent" => 10,
				
			"varchar" => 20,
			"text" => 30
		);
				
	}
	public static function getRowTotalWeightedWidth($fieldTypes, $fieldFunctions, $fieldVisibles, $typesWeightedWidth, $isGroupedReport, $hasRowIndex) {

		$totalWeightedWidth = ($hasRowIndex ? $typesWeightedWidth['index'] : 0);
		
		foreach ($fieldTypes as $fieldKey => $fieldType) {
			if ((!in_array($fieldVisibles[$fieldKey], array('html', 'internal'))) && ($isGroupedReport || !isset($fieldFunctions[$fieldKey]))) {
				$totalWeightedWidth += (isset($typesWeightedWidth[$fieldType]) ? $typesWeightedWidth[$fieldType] : $typesWeightedWidth['default']);
			}
		}
		
		return $totalWeightedWidth;
		
	}
	
	public static function getCellWidthBasedOnTypology($fieldType, $typesWeightedWidth, $totalWeightedWidth) {

		$currentWeightedWidth = (isset($typesWeightedWidth[$fieldType]) ? $typesWeightedWidth[$fieldType] : $typesWeightedWidth['default']);

		return (($currentWeightedWidth * 100) / $totalWeightedWidth);
		
	}
	
}
	
?>
