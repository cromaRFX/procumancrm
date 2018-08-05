<?php 

require_once("modules/asol_Reports/include_basic/manageReportsFunctions.php");

echo '
<html>

	<head>

		'.asol_ReportsManagementFunctions::getHeaderLinksHtml().'

		<script>
			'.asol_ReportsManagementFunctions::getInitJqueryScriptHtml().'
			'.asol_ReportsManagementFunctions::getOnloadJavaScript().'
			'.asol_ReportsManagementFunctions::getDialogFxDisplayHtml().'
			'.asol_ReportsManagementFunctions::getInitEmailFrameHtml().'
			'.asol_ReportsManagementFunctions::getInitDragDropElementsHtml().'
			'.asol_ReportsManagementFunctions::getRememberReportListsHtml($focus->report_fields, $focus->report_filters, $focus->report_charts_detail, $report_charts_engine, $focus->report_tasks, $audited_report).'
			'.asol_ReportsManagementFunctions::getInitReportsJavaScriptsHtml($hasPremiumFeatures, $isMetaReport, $defaultExternalAppParams, $externalApps, $reportType[0], $reportScheduledType[0], $sel_scheduledApp, $sel_scheduledCustomUrl, $sel_scheduledCustomFixedParams, $sel_scheduledCustomParams, $sel_scheduledHeaders, $sel_scheduledQuotes).'
			
			window["subQueryMode"] = false;
			window["subQueryLevel"] = 0;
			window["subQueryEditor"] = true;
			window["mainFieldReferences"] = null;
			window["subFieldReferences"] = null;
			window["mainFilteringReferences"] = null;
			window["mainQueryFieldIndex"] = null;
			window["subQueryFieldIndex"] = null;
			window["mainQueryLastSql"] = "";
			window["reportsVersion"] = "'.asol_ReportsUtils::$reports_version.'";
			window["reportsDefaultLang"] = "'.$defaultLanguage.'";
		</script>
		
		'.asol_ReportsManagementFunctions::getReportsJQueryScript().'

	</head>

	<body onload="loadReportsManagementJavaScript();">

		'.asol_ReportsManagementFunctions::getVariableClipboardCopyDiv();

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$fieldReferencesList = asol_ReportsUtils::managePremiumFeature("SQLWithReferences", "reportFunctions.php", "getFieldReferencesList", null);
		echo ($fieldReferencesList !== false) ? $fieldReferencesList : '';
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
echo '
		
		<table style="width: 100%">
		
			<tbody>
				<tr>
					<td>
			
						<div class="moduleTitle">
							<h2>'.(($isMetaReport == '1') ? $mod_strings['LBL_REPORT_CREATE_META'] : $mod_strings['LBL_REPORT_CREATE']).($newReportFlag ? '' : ': '.$report_name).'</h2>
						</div>
						<div class="clear"></div>
			
						<form id="create_form" name="create_form" method="post" action="index.php">
			
							<table cellspacing="0" cellpadding="0" border="0" width="100%">
								<tbody>
									<tr>
										<td class="buttons">
											'.asol_ReportsManagementFunctions::getFilteringDialogDiv().'
											'.asol_ReportsManagementFunctions::getLoadingBlockDiv('LBL_REPORT_LOADING_DATA').'
											'.asol_ReportsManagementFunctions::getHiddenInputs($focus->id, $rhs_key, $mySQLcheckInsecurity, $PHPcheckInsecurity, $availablePhpFunctionsJson, $predefinedTemplates, $dynamic_tables, ($dynamic_tables === '1' ? $dynamic_sql : ''), $isMetaReport, $metaHtml).'
											'.asol_ReportsManagementFunctions::getSubmitButtons($isMetaReport, $hasPreviewExecution).'
										</td>
										<td align="right"></td>
									</tr>
								</tbody>
							</table>';
									

							echo '
							<div id="DEFAULT" class="alineasol_reports yui-navset detailview_tabs yui-navset-top">';
							
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
								$extraParams = array('isMetaReport' => $isMetaReport, 'reportType' => $reportType[0], 'hasCharts' => in_array($report_charts, array("Both", "Htob", "Char")));
								$manageReportTabs = asol_ReportsUtils::managePremiumFeature("manageReportTabs", "reportFunctions.php", "getManageReportTabs", $extraParams);
								echo ($manageReportTabs !== false) ? $manageReportTabs['html'].$manageReportTabs['css'] : '';
								
								$manageWithTabs = ($manageReportTabs !== false) ? true : false;
								$mainTabclass = ($manageReportTabs !== false) ? 'yui-content' : '';
								//***********************//
								//***AlineaSol Premium***//
								//***********************//
							
							echo '
								<div class="'.$mainTabclass.'">
									<div id="mainInfo" class="reportPanel">
										<h4 class="reportPanelHeader">'.$mod_strings['LBL_REPORT_BASIC_INFO'].'</h4>
										<table id="report_info" class="edit view">
											<tbody>
												<tr>
													'.asol_ReportsManagementFunctions::getReportNameHtml($report_name, $disabledGeneralData).'
													'.asol_ReportsManagementFunctions::getReportAssignedUserHtml($assigned_user_id, $assigned_user_name).'
												</tr>';
							
							if ($isMetaReport == '0') {
							
								echo '
												<tr valign="top">
													'.asol_ReportsManagementFunctions::getReportDatabaseHtml($alternativeDb, $focus->alternative_database, $disabledGeneralData).'
													'.asol_ReportsManagementFunctions::getReportDisplayOptionsHtml($report_charts, $disabledGeneralData).'
												</tr>';
							
							}							
												
							echo '
												<tr>
													'.asol_ReportsManagementFunctions::getReportTypeHtml($reportType, $reportTypeUri, $reportScheduledType, $isMetaReport, $disabledGeneralData).'
													<td nowrap="nowrap" width="15%" scope="col">
														'.$mod_strings['LBL_REPORT_EMAIL_ATTACHMENT_FORMAT'].':<span class="required">*</span>
													</td>
													<td id="reportAttachmentFormatTd" nowrap="nowrap" width="35%">
														'.asol_ReportsManagementFunctions::getReportAttachmentFormatHtml($report_attachment_format, $isMetaReport, $disabledGeneralData).'
													</td>
												</tr>
												<tr>
													'.asol_ReportsManagementFunctions::getReportEmailLinkHtml($scheduled_images, $disabledGeneralData).'
													'.asol_ReportsManagementFunctions::getReportScopeHtml($report_scope, $disabledGeneralData).'		
												</tr>
												<tr>
													'.asol_ReportsManagementFunctions::getReportInternalDescriptionHtml($internalDescription, $disabledGeneralData).'
													'.asol_ReportsManagementFunctions::getReportPublicDescriptionHtml($publicDescription, $disabledGeneralData).'
												</tr>
											</tbody>
										</table>
									</div>';

							
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									$subQueryHiddenFieldsHtml = asol_ReportsUtils::managePremiumFeature("subQuerySQLEditor", "reportFunctions.php", "getSubQueryHiddenFields", null);
									echo ($subQueryHiddenFieldsHtml !== false ? $subQueryHiddenFieldsHtml : '');

									$subQueryActionButtons = asol_ReportsUtils::managePremiumFeature("subQuerySQLEditor", "reportFunctions.php", "getSubQueryActionButtons", null);
									$subQueryActionButtonsHtml = ($subQueryActionButtons !== false ? $subQueryActionButtons : '');
									
									$subQuerySqlEditor = asol_ReportsUtils::managePremiumFeature("subQuerySQLEditor", "reportFunctions.php", "getSubQuerySqlEditorPanel", array('jsonSqlTemplates' => $predefinedTemplates['sql']));
									$subQuerySqlEditorHtml = ($subQuerySqlEditor !== false ? $subQuerySqlEditor : '');
									
									$matchedTablesResult = asol_ReportsUtils::managePremiumFeature("dynamicTablesReport", "reportFunctions.php", "getMatchTablesResult", array('isDynamic' => ($dynamic_tables == '1'), 'usedDb' => $focus->alternative_database, 'dynamicTableValue' => $dynamic_sql));
									$selectedModule = ($matchedTablesResult !== false ? array_pop($matchedTablesResult) : $selectedModule);
									
									$extraParams = array('database' => $focus->alternative_database, 'selectedModule' => $selectedModule, 'hasDeleted' => $hasDeletedUsage, 'isDynamic' => ($dynamic_tables == '1'), 'auditedReport' => $audited_report);
									$fieldsPanelTreeHtml = asol_ReportsUtils::managePremiumFeature("reportFieldsTreeSelector", "reportFunctions.php", "getReportFieldsTreeSelector", $extraParams);
									$fieldsPanelHtml = ($fieldsPanelTreeHtml !== false) ? $fieldsPanelTreeHtml : asol_ReportsManagementFunctions::getFieldsPanelHtml($focus->alternative_database, ($dynamic_tables == '1' ? '' : $selectedModule), $hasDeletedUsage, ($dynamic_tables == '1'), $audited_report, $sel_autorefresh, $disabledGeneralData);
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									
									echo '
									
									<div id="fieldsFilters" class="reportPanel" style="z-index: 500; position: relative;">
										<h4 class="reportPanelHeader">'.asol_ReportsManagementFunctions::getCollapsableHeader('LBL_REPORT_FIELDS_FILTERS', 'fieldsFilters').'</h4>
										<table class="edit view">
											<tbody>
												'.$subQueryActionButtonsHtml.'
												<tr>
													<td>
														'.$fieldsPanelHtml.'
													</td>
													<td width="100%" valign="top">
														<div id="reportEditorDiv">
															<div id="reportFieldsDiv" class="mainReport">
																'.asol_ReportsManagementFunctions::getFieldsHeadersHtml($focus->alternative_database, $focus->row_index_display, $predefinedTemplates, $reportTemplates, $reportFieldsArray['tables'][0]['config'], $reportFieldsArray['tables'][0]['joins'], $reportCss).'
															</div>
															<div id="reportFiltersDiv" class="mainReport">
																'.asol_ReportsManagementFunctions::getFiltersHeadersHtml($results_limit).'
															</div>
														</div>
														'.$subQuerySqlEditorHtml.'
													</td>
												</tr>
											</tbody>
										</table>
									</div>
				
				
									<div id="charts" class="reportPanel">
										'.asol_ReportsManagementFunctions::getChartsHeadersHtml($report_charts_engine).'														
									</div>';
									

									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									$extraParams = array('metaHtml' => $metaHtml, 'cssValue' => $reportCss);
									$metaHtmlPanel = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "getMetaHeadersHtml", $extraParams);
									echo ($metaHtmlPanel !== false) ? $metaHtmlPanel : '';
									//***********************//
									//***AlineaSol Premium***//
									//***********************//
									

									
									echo ((in_array($reportType[0], array('scheduled', 'stored'))) && !$manageWithTabs) ? '<div id="scheduledDiv" class="reportPanel">' : '<div id="scheduledDiv" style="display: none" class="reportPanel">';		
									echo '							
										'.asol_ReportsManagementFunctions::getTasksHeadersHtml().'
									</div>';
				
									
									
									$distributionListVisibility = ($manageWithTabs) ? '' : 'display: none';								
				
									echo ((!in_array($reportType[0], array('external'))) || $manageWithTabs) ? '<div id="distributionList" class="reportPanel">' : '<div id="distributionList" style="display: none" class="reportPanel">';
									echo '
										<h4 class="reportPanelHeader">'.asol_ReportsManagementFunctions::getCollapsableHeader('LBL_REPORT_DISTRIBUTION_LIST', 'distributionList', true).'</h4>
										<table id="distribution_List_Table" class="edit view" style="'.$distributionListVisibility.'">
											<tr>
												<td>
													<div id="task_implementation_field" class="yui-navset detailview_tabs yui-navset-top">
														'.asol_ReportsManagementFunctions::getDistributionListPanel($focus->email_list).'
													</div>
												</td>
											</tr>
				
										</table>
				
									</div>';
									
									
									if (asol_ReportsUtils::isDomainsInstalled()) {
	
										$domainPublishVisibility = ($manageWithTabs) ? '' : 'display: none';
										
										echo '
										<div id="domainPublishing" class="reportPanel">
											<h4 class="reportPanelHeader">'.asol_ReportsManagementFunctions::getCollapsableHeader('LBL_ASOL_DOMAINS_PUBLISH_FEATURE_PANEL', 'domainPublishing', true).'</h4>
											<table class="edit view" style="'.$domainPublishVisibility.'">
												<tbody>
													<tr>
														'.asol_manageDomains::getBeanDomainNameHtml($focus->asol_domain_name).'
														'.asol_manageDomains::getEmptyCellHtml().'
													</tr>
													<tr>
														'.asol_manageDomains::getBeanPublishManagementButtonHtml($focus->id, 'asol_reports').'
														'.asol_manageDomains::getBeanPublishDomainHtml($focus->asol_published_domain).'
													</tr>
												</tbody>
											</table>
					
										</div>';
									
									}
									
								echo '
								</div>
							</div>
			
							'.asol_ReportsManagementFunctions::getSubmitButtons($isMetaReport, $hasPreviewExecution).'
			
						</form>
			
					</td>
			
				</tr>
			
			</tbody>
		
		</table>
		
	</body>

</html>';
