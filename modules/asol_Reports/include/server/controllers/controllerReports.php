<?php

/**
 * @author AlineaSol
 */
class asol_ControllerReports {

	private static $moduleName = "asol_Reports";
	private static $moduleTable = "asol_reports";

	static public function deleteReport($record) {

		global $db;

		if (is_array($record)) {
			$db->query("UPDATE asol_reports SET deleted=1 WHERE id IN('".implode("','", $record)."')");
		} else {
			$db->query("UPDATE asol_reports SET deleted=1 WHERE id='".$record."' LIMIT 1");
		}

	}

	static public function getReportDetailTitle($name, $isDashlet, $fields = false) {
	
		global $mod_strings;
		
		$currentFields = unserialize(base64_decode($fields));
		$title = $currentFields['tables'][0]['title'];
		
		$result = '';
		
		if ($_REQUEST['module'] == 'asol_Reports' && !$isDashlet) {
			$result = $mod_strings['LBL_REPORT_RUN'].': ';
		}
		
		if ($isDashlet && empty($title['text'])) {
			
			return '';
	
		} else {
	
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			if (isset($title) && !empty($title['text'])) {
				$extraParams = array('label' => $title);
				$returnedMultiLanguage = asol_CommonUtils::managePremiumFeature("multiLanguageSupport", "commonFunctions.php", "getMultiLanguageLabel", $extraParams);
				$result .= ($returnedMultiLanguage !== false ? $returnedMultiLanguage : $title['text']);
			} else {
				$result .= $name;
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			
			return '<div class="moduleTitle">
						<h2>'.$result.'</h2>
				    </div>
					<div class="clear"></div>';
			
		}
	
	}
	
	static public function getReportPublicDescription($description, $isDashlet){
	
		global $mod_strings;
		
		$description = unserialize(base64_decode($description));
		
		if ((!empty($description['public'])) && (!$isDashlet)) {
			
			return '
			<div id="reportInfoDivWrapper" class="detail view">
				'.self::getHeaderInfo($isDashlet, $mod_strings['LBL_REPORT_DESCRIPTION'], null, ($getExportData ? null : "reportInfoDiv")).'
				<div id="reportInfoDiv">
					<table id="resultTable">
						<tbody>
							<tr>
								<td>'.nl2br($description['public']).'</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>';
	
		}
	
	}
	
	static private function getHeaderInfo($isDashlet,$headerMessage, $headerInfo = null, $collapsibleHeaderId = null){
	
		$headerHtml='';
	
		if (isset($headerMessage)) {
	
			$headerHtml = (!$isDashlet) ? '<h4>' : '';
			$headerHtml .= ($collapsibleHeaderId !== null) ? self::getCollapseImg($collapsibleHeaderId) : '';
			$headerHtml .= ($reportHeaderInfo !== null) ? '<em>'.$headerMessage.'</em>'.' : '.$headerInfo : '<em>'.$headerMessage.'</em>';
			$headerHtml .= (!$isDashlet) ? '</h4>' : '';
	
		}
	
		return $headerHtml;
	
	}
	
	static private function getCollapseImg($containerId) {
	
		return '<img onclick="if( $(&quot;#'.$containerId.'&quot;).is(&quot;:visible&quot;) ) { $(&quot;#'.$containerId.'&quot;).hide(); $(&quot;#'.$containerId.'_collapseImg&quot;).attr(&quot;src&quot;, &quot;themes/default/images/advanced_search.gif&quot;) } else { $(&quot;#'.$containerId.'&quot;).show(); $(&quot;#'.$containerId.'_collapseImg&quot;).attr(&quot;src&quot;, &quot;themes/default/images/basic_search.gif&quot;) } " onmouseout="this.style.cursor=&quot;default&quot;" onmouseover="this.style.cursor=&quot;pointer&quot;" src="themes/default/images/basic_search.gif" id="'.$containerId.'_collapseImg" style="cursor: default;">&nbsp';
	
	}
	
	static public function getReportDetailButtons($bean, $isDashlet, $dashletId, $isMetaReport, $isFilterVisible, $sendEmailquestion, $filtersHiddenInputs, $searchCriteria, $vardefFilters, $externalCall, $getLibraries, $overrideEntries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview) {
	
		global $current_user, $sugar_config, $db, $mod_strings;
	
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$scheduledTypeInfoArray = explode(':', $bean->report_scheduled_type);
		$scheduledTypeInfo = json_decode(urldecode($scheduledTypeInfoArray[1]), true);
		
		$hasExternalApp = (!empty($scheduledTypeInfo) && (isset($scheduledTypeInfo['application'])));
		$hasExternalFtp = (!empty($scheduledTypeInfo) && (isset($scheduledTypeInfo['ftp'])));
		$hasExternalTl = (!empty($scheduledTypeInfo) && (isset($scheduledTypeInfo['tl'])));
		
		$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$attachmentFormatArray = explode(':', $bean->report_attachment_format);
		$attachmentFormat = strtolower($attachmentFormatArray[0]);
		
		$dashletExportButtons = (isset($sugar_config['asolReportsDashletExportButtons']) ? $sugar_config['asolReportsDashletExportButtons'] : true);
		
		$hasVardefFilter = (!empty($vardefFilters));
		$metaDashletId = $_REQUEST['metaDashletId'];
		
		
		$returnedHTML = '';
		
		$allowedButtons = (($_REQUEST['module'] === 'asol_Reports') && !$isDashlet);
		
		if ($allowedButtons) {
		
			if ((!$externalCall) && (!$filtersHiddenInputs) && (!$isPreview)) {
				$returnedHTML .= '<input type="button" class="button reloadButton" onclick="controllerReportDetail.reloadReport(\''.$bean->id.'\', true, {\'dashlet\':'.($isDashlet ? 'true' : 'false').', \'dashletId\':\''.$dashletId.'\', \'metaDashletId\':\''.$metaDashletId.'\', \'currentUserId\':\''.$current_user->id.'\'});" value="'.$mod_strings['LBL_REPORT_REFRESH'].'"> ';
			}
			
			$domainReportModifiable = (asol_CommonUtils::isDomainsInstalled() ? asol_CommonUtils::domainCanModifyElement($bean->asol_domain_id) : true);
			$userReportModifiable = asol_CommonUtils::userCanModifyElement($bean->created_by, $bean->assigned_user_id);
	
			if (($userReportModifiable) && ($domainReportModifiable) && (ACLController::checkAccess('asol_Reports', 'edit', true))) {
				$returnedHTML .= '<input type="button" class="button editButton" onclick="controllerReportDetail.editReport();" value="'.$mod_strings['LBL_REPORT_EDIT'].'"> ';
			}
	
			$returnedHTML .= '<input type="button" class="button cancelButton" onclick="controllerReportDetail.cancelReport(\''.($isDashlet ? $dashletId : '').'\');" value="'.$mod_strings['LBL_REPORT_CANCEL'].'">';

		}
		
		if (!$isMetaReport) {
		
			if ($filtersHiddenInputs && (!$externalCall) && (!isset($scheduledEmailHideButtons))) {
		
				$returnedHTML .= '<button class="button executeReportBtn" style="display: '.($isFilterVisible ? 'inline' : 'none').'" onClick="controllerReportDetail.reloadReport(\''.$reportId.'\', false, {\'dashlet\':'.($isDashlet ? 'true' : 'false').', \'dashletId\':\''.$dashletId.'\', \'metaDashletId\':\''.$metaDashletId.'\', \'currentUserId\':\''.$current_user->id.'\', \'page_number\':\'0\', \'sort_field\':\'\', \'sort_direction\':\'\', \'sort_index\':\'\', \'getLibraries\':\''.($isDashlet && $getLibraries ? 'true' : 'false').'\', \'overrideEntries\':'.(!empty($override_entries) ? '\''.$override_entries.'\'' : 'null').', \'overrideData\':'.(!empty($override_data) ? '\''.urlencode(json_encode($override_data)).'\'' : 'null').', \'overrideConfig\':'.(!empty($override_config) ? '\''.urlencode(json_encode($override_config)).'\'' : 'null').', \'vardefFilters\':'.(!empty($vardefFilters) ? '\''.$vardefFilters.'\'' : 'null').'});">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_RUN').'</button>';
				$returnedHTML .= '<button class="button clearReportBtn" style="display: '.($isFilterVisible ? 'inline' : 'none').'" onClick="clearUserInputs(this, '.($isDashlet ? 'true' : 'false').');">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_CLEAR').'</button>';
		
				$returnedHTML .= '<script type="text/javascript">
					'.self::getAttachedScript2ExecuteCriteriaOnKeyPressed($dashletId).'
					asolFancyMultiEnum.generate($(".asolFirstParameter select"), 3, true);
					asolFancyMultiEnum.generate($(".asolSecondParameter select"), 3, true);
					asolFancyMultiEnum.generate($(".asolThirdParameter select"), 3, true);
				</script>';
		
			}
		
		}
		
		if (($isDashlet && (!$hasVardefFilter || $isWsExecution) && $dashletExportButtons) || (!$isDashlet && !$externalCall && !$isPreview)) {
		
			$domainReportModifiable = (asol_CommonUtils::isDomainsInstalled()) ? asol_CommonUtils::domainCanModifyElement($bean->asol_domain_id) : true;
			$userReportModifiable = asol_CommonUtils::userCanModifyElement($bean->created_by, $bean->assigned_user_id);
			$roleReportModifiable = asol_ReportsUtils::roleCanModifyReport($bean->report_scope);
				
		
			if ((!$isDashlet) && (!$isWsExecution) && (($roleReportModifiable) || ($userReportModifiable)) && ($domainReportModifiable) && (ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode) && (!isset($scheduledEmailHideButtons))) {
				$returnedHTML .= '<button id="reportbutton_edit" title="'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_EDIT').'" class="button" onclick="document.display_form.action.value=\'EditView\'; document.display_form.return_action.value=\'\'; document.display_form.submit()">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_EDIT').'</button>';
			}
				
		
			if ((($filtersHiddenInputs == false) || ($searchCriteria == true)) && (!$displayNoDataMsg)) {
					
				if (!$isDashlet) {
					$returnedHTML .= '<button id="reportbutton_export" title="'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_EXPORT_ONE').'" class="button" onmouseover="openExportReportDialog(this, \''.$dashletId.'\');" onmouseout="clearTimeout(window[\'exportButtonTimeout\']); $(\'#asolReportExportDiv'.$dashletId.'\').hide();">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_EXPORT_ONE').'<div class="asolReportsListArrowDown"></div></button>';
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
		
					$returnedHTML .= '<button id="reportbutton_email" title="'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_SEND_EMAIL').'" class="button" onclick="if (confirm(\''.$sendEmailquestion.'\')){ generateExportedFile(\'email\', \''.$attachmentFormat.'\', \''.$reportId.'\', '.($isDashlet ? 'true' : 'false').', \''.$dashletId.'\'); }">'.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_SEND_EMAIL').'</button>';
						
					if (isset($sugar_config['asolReportsExternalApplicationFixedParams']) && $hasExternalApp && !$isMetaReport) {
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array(
							'reportId' => $reportId,
							'isDashlet' => $isDashlet,
							'dashletId' => $dashletId,
						);
						$sendAppButtonHtml = asol_ReportsUtils::managePremiumFeature("externalApplicationsFTP", "reportFunctions.php", "getSendAppButtonHtml", $extraParams);
						$returnedHTML .= ($sendAppButtonHtml !== false ? $sendAppButtonHtml : '');
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
					}
						
					if ($hasExternalFtp && !$isMetaReport) {
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array(
							'reportId' => $reportId,
							'attachmentFormat' => $attachmentFormat,
							'isDashlet' => $isDashlet,
							'dashletId' => $dashletId,
						);
						$sendFtpButtonHtml = asol_ReportsUtils::managePremiumFeature("externalApplicationsFTP", "reportFunctions.php", "getSendFtpButtonHtml", $extraParams);
						$returnedHTML .= ($sendFtpButtonHtml !== false ? $sendFtpButtonHtml : '');
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
					}
						
					if ($hasExternalTl && !$isMetaReport) {
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
						$extraParams = array(
							'reportId' => $reportId,
							'isDashlet' => $isDashlet,
							'dashletId' => $dashletId,
						);
						$sendTlButtonHtml = asol_ReportsUtils::managePremiumFeature("externalApplicationsTL", "reportFunctions.php", "getSendTlButtonHtml", $extraParams);
						$returnedHTML .= ($sendTlButtonHtml !== false ? $sendTlButtonHtml : '');
						//***********************//
						//***AlineaSol Premium***//
						//***********************//
					}
						
				}
		
			}
		
		}
		
		return '<div style="padding-bottom:10px">'.$returnedHTML.'</div>';
	
	}
	
	static public function generateExecutedReport($reportId, $isDashlet, $dashletId, $reportDomain = null) {
		
		require_once('modules/asol_Reports/include/generateReport.php');
		require_once('modules/asol_Reports/include/generateReportsFunctions.php');
		require_once('modules/asol_Reports/include/server/reportsUtils.php');
		
		$sortField = (isset($_REQUEST['sort_field']) ? $_REQUEST['sort_field'] : "");
		$sortDirection = (isset($_REQUEST['sort_direction']) ? $_REQUEST['sort_direction'] : "");
		$sortIndex = (isset($_REQUEST['sort_index']) ? $_REQUEST['sort_index'] : "");
		$pageNumber = (isset($_REQUEST['page_number']) ? $_REQUEST['page_number'] : "");
		$getLibraries = ((isset($_REQUEST['getLibraries'])) && ($_REQUEST['getLibraries'] == 'false') ? false : true);
		$downloadReport = (isset($_REQUEST['export']) && ($_REQUEST['export'] == '1'));
		$overrideEntries = (isset($_REQUEST['overrideEntries']) ? $_REQUEST['overrideEntries'] : null);
		$overrideInfo = (isset($_REQUEST['overrideInfo']) ? json_decode(html_entity_decode(urldecode($_REQUEST['overrideInfo'])), true) : null);
		$overrideFilters = (isset($_REQUEST['overrideFilters']) ? json_decode(html_entity_decode(urldecode($_REQUEST['overrideFilters'])), true) : null);
		$avoidAjaxRequest = ((isset($_REQUEST['avoidAjaxRequest'])) && ($_REQUEST['avoidAjaxRequest'] == 'true') ? true : false);
		$contextDomainId = (isset($_REQUEST['contextDomainId']) ? $_REQUEST['contextDomainId'] : $reportDomain);
		
		$multiExecution = ((isset($_REQUEST['multiExecution'])) && ($_REQUEST['multiExecution'] == 'true') ? true : false);
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array(
			'vardefFilters' => (isset($_REQUEST['vardefFilters']) ? $_REQUEST['vardefFilters'] : null)
		);
		$vardefFilterParam = asol_ReportsUtils::managePremiumFeature("reportFieldsManagement", "reportFunctions.php", "getVardefFilterParam", $extraParams);
		$vardefFilters = ($vardefFilterParam !== false ? $vardefFilterParam : null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$executedReportHtml = displayReport($reportId, $vardefFilters, $sortField, $sortDirection, $sortIndex, $pageNumber, $isDashlet, $dashletId, $getLibraries, true, true, $downloadReport, $overrideEntries, $overrideInfo, $overrideFilters, $avoidAjaxRequest, $contextDomainId);
		
		if ($multiExecution) {
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'mainExecutedReport' => $executedReportHtml,
				'vardefFilters' => $vardefFilters,
				'isDashlet' => $isDashlet,
				'getLibraries' => $getLibraries,
				'overrideEntries' => $overrideEntries,
				'avoidAjaxRequest' => $avoidAjaxRequest,
				'contextDomainId' => $contextDomainId,
			);
			return asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "executeMultiReport", $extraParams);
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				
		} else if (is_array($executedReportHtml)) {
			$executedReportHtml = $executedReportHtml[0];
		}
		
		return $executedReportHtml;
		
	}
	
	static private function getCurrentUserAvailableModules($alternativeDb) {
	
		global $sugar_config, $current_user;
	
		$dbKey = ($alternativeDb === false ? 'crm' : 'ext'.$alternativeDb);
	
		if (!isset($_SESSION['currentUserAvailableModules'][$dbKey])) {
	
			$acl_modules = ACLAction::getUserActions($current_user->id);
			$currentUserAvailableModules = array();
	
			foreach ($acl_modules as $key=>$mod) {
					
				if ($mod['module']['access']['aclaccess'] >= 0) {
						
					if ((isset($sugar_config['asolModulesPermissions']['asolAllowedTables'])) || (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables']))) {
						//Restrictive
							
						if ( (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables']['domains'][$current_user->asol_default_domain])) &&
								(in_array($key, $sugar_config['asolModulesPermissions']['asolForbiddenTables']['domains'][$current_user->asol_default_domain])) ) {
										
									$currentUserAvailableModules[$key] = false;
										
								} else if ( (isset($sugar_config['asolModulesPermissions']['asolForbiddenTables']['instance'])) &&
										(in_array($key, $sugar_config['asolModulesPermissions']['asolForbiddenTables']['instance']))) {
												
											$currentUserAvailableModules[$key] = false;
												
										}
	
										if ( (isset($sugar_config['asolModulesPermissions']['asolAllowedTables']['domains'][$current_user->asol_default_domain])) &&
												(in_array($key, $sugar_config['asolModulesPermissions']['asolAllowedTables']['domains'][$current_user->asol_default_domain])) ) {
														
													if (!isset($currentUserAvailableModules[$key]))
														$currentUserAvailableModules[$key] = true;
	
												} else if ( (isset($sugar_config['asolModulesPermissions']['asolAllowedTables']['instance'])) &&
														(in_array($key, $sugar_config['asolModulesPermissions']['asolAllowedTables']['instance'])) ) {
																
															if (!isset($currentUserAvailableModules[$key]))
																$currentUserAvailableModules[$key] = true;
	
														}
															
					} else {
							
						$currentUserAvailableModules[$key] = true;
	
					}
						
				}
					
			}
				
			$_SESSION['currentUserAvailableModules'][$dbKey] = $currentUserAvailableModules;
	
		} else {
				
			$currentUserAvailableModules = $_SESSION['currentUserAvailableModules'][$dbKey];
				
		}
	
		return $currentUserAvailableModules;
	
	}
	
	static public function exportReport($record) {
		
		require_once("modules/asol_Common/include/commonUtils.php");
		require_once("modules/asol_Reports/include/server/reportsUtils.php");
		
		$getContent = ($_REQUEST['getContent'] === 'true' ? true : false);
		
		if ($getContent) {
			
			$notExportingFields = array('id', 'modified_user_id', 'created_by', 'assigned_user_id', 'deleted', 'last_run', 'report_scope',	'asol_domain_id', 'asol_domain_published_mode', 'asol_domain_child_share_depth', 'asol_multi_create_domain', 'asol_published_domain');
			$exportedReports = asol_CommonUtils::manageExportElements('asol_reports', $record, asol_ReportsUtils::$reports_version, $notExportingFields);
		
			foreach ($exportedReports as & $exportedReport) {
					
				if ($exportedReport['is_meta'] == '1') {
						
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'metaHtml' => $exportedReport['meta_html'],
						'notExportingFields' => $notExportingFields,
					);
					$exportedMetaReportResult = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "getExportedMetaReport", $extraParams);
					if ($exportedMetaReportResult !== false) {
						$exportedReport['meta_html'] = $exportedMetaReportResult['metaHtml'];
						$exportedReport['linkedMetaReports'] = $exportedMetaReportResult['linkedMetaReports'];
					}
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
						
				}
					
			}
				
			$exportName = (count($record) > 1 ? "ASOL Report"."_".date("Ymd")."T".date("Hi") : $exportedReports[0]['name']);
			$exportedFile = $exportedReports;
			
			header("Content-Type: text/plain");
			header("Content-Disposition: attachment; filename=\"".$exportName.".txt\"");
			header("Content-Description: File Transfer");
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: ".mb_strlen(serialize($exportedFile), "8bit")."\"");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Pragma: public");
				
			ob_clean();
			flush();
		
			return serialize($exportedFile);
		
		}
		
	}
	
	static public function importReport() {
		
		require_once("modules/asol_Reports/include/manageReportsFunctions.php");
		require_once("modules/asol_Reports/include/migrationReportsFunctions.php");
		
		$currentDir = getcwd()."/";
		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		
		$size = $_FILES['importedReports']['size'];
		$type = $_FILES['importedReports']['type'];
		$name = $_FILES['importedReports']['name'];
		$tmpName = $_FILES['importedReports']['tmp_name'];
		
		if (!empty($name)) {
		
			$target =  $currentDir.$tmpFilesDir.time()."_".$name;
			copy($_FILES['importedReports']['tmp_name'], $target);
			$descriptor = fopen($target, "r");
		
			$serializedReport = fread($descriptor, filesize($target));
			$reports = unserialize($serializedReport);
		
			fclose($descriptor);
			unlink($target);
		
			$focus = BeanFactory::newBean('asol_Reports');
			
			foreach ($reports as $currentReport) {
		
				if ($currentReport['is_meta'] == '1') {
		
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
					$extraParams = array(
						'metaReportRow' => $currentReport,
						'focus' => $focus
					);
					$importedMetaReport = asol_ReportsUtils::managePremiumFeature("metaReport", "reportFunctions.php", "saveImportedMetaReports", $extraParams);
					if ($importedMetaReport !== false) {
						$currentReport = $importedMetaReport;
					}
					//***********************//
					//***AlineaSol Premium***//
					//***********************//
		
				}
		
				asol_ReportsManagementFunctions::manageImportReportValues($focus, $currentReport);
		
			}
		
		}
		
	}
	
	static public function checkReport() {

		global $db, $sugar_config, $current_language;
		
		require_once("modules/asol_Reports/include/server/reportsUtils.php");
		
		$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
		$httpHtmlFile = $_REQUEST['httpHtmlFile'];
		
		if (!file_exists($tmpFilesDir.$httpHtmlFile)) {
		
			$returnedString = "false";
		
			if ((isset($sugar_config['asolReportsDispatcherMaxRequests'])) && ($sugar_config['asolReportsDispatcherMaxRequests'] > 0) && (isset($_REQUEST["reportRequestId"]))) { //Only if dispatcher is activated
		
				//************************************************//
				//***Clean database report_dispatcher if exists***//
				//************************************************//
				if (asol_ReportsUtils::dispatcherTableExists()) {
						
					$currentTime = time();
						
					$checkHttpFileTimeout = (isset($sugar_config["asolReportsCheckHttpFileTimeout"])) ? $sugar_config["asolReportsCheckHttpFileTimeout"] : "1000";
					$timedOutStamp = $currentTime - $checkHttpFileTimeout; //Time to check report execution expiration time
					$closedWindowStamp = $currentTime - ($checkHttpFileTimeout / 500);  //Time to check last recall not updated for manual Reports (browser screen closed).
						
					$cleanDispatcherTableSql = "DELETE FROM asol_reports_dispatcher WHERE (status IN ('terminated', 'timeout')) OR (request_init_date < '".date("Y-m-d H:i:s", $timedOutStamp)."') OR ((status = 'waiting') AND (request_type = 'manual') AND (last_recall < '".date("Y-m-d H:i:s", $closedWindowStamp)."'))";
					$db->query($cleanDispatcherTableSql);
						
				}
				//************************************************//
				//***Clean database report_dispatcher if exists***//
				//************************************************//
		
		
				$reportsDispatcherSql = "SELECT COUNT(DISTINCT id) as 'reportsThreads' FROM asol_reports_dispatcher WHERE status = 'executing'";
				$reportsDispatcherRs = $db->query($reportsDispatcherSql);
				$reportsDispatcherRow = $db->fetchByAssoc($reportsDispatcherRs);
		
				$currentReportsRunningThreads = $reportsDispatcherRow["reportsThreads"];

				if ($currentReportsRunningThreads < $sugar_config['asolReportsDispatcherMaxRequests']) { //Execute Report
		
					$sqlExecuting = "SELECT * FROM asol_reports_dispatcher WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
					$rsExecuting = $db->query($sqlExecuting);
					$rowExecuting = $db->fetchByAssoc($rsExecuting);
						
					if ($rowExecuting["status"] == "waiting") {
		
						//Check if Report is ready to Run (order by time ascending)
						$availableReportThreads = $sugar_config['asolReportsDispatcherMaxRequests'] - $currentReportsRunningThreads;
		
						$sqlWaitingReports = "SELECT id FROM asol_reports_dispatcher WHERE status = 'waiting' ORDER BY request_init_date ASC LIMIT ".$availableReportThreads;
						$rsWaitingReports = $db->query($sqlWaitingReports);
		
						$firtReports = array();
		
						while($row = $db->fetchByAssoc($rsWaitingReports))
							$firtReports[] = $row['id'];
						//Check if Report is ready to Run (order by time ascending)
		
						if (in_array($_REQUEST["reportRequestId"], $firtReports)) {
								
							//********//
							//**Curl**//
							//********//
							$ch = curl_init();
								
							$curlRequestedUrl = $rowExecuting["curl_requested_url"];
		
							curl_setopt($ch, CURLOPT_URL, $curlRequestedUrl);
							curl_setopt($ch, CURLOPT_HEADER, 0);
							curl_setopt($ch, CURLOPT_TIMEOUT, 1);
							curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
								
							curl_exec($ch);
							curl_close($ch);
							//********//
							//**Curl**//
							//********//
		
							$sqlExecutingStatus = "UPDATE asol_reports_dispatcher SET status = 'executing' WHERE id='".$_REQUEST["reportRequestId"]."' AND status = 'waiting' LIMIT 1";
							$db->query($sqlExecutingStatus);
							$returnedString = "exec";
								
						}
		
					}
		
				}
		
		
				$recallGMTTime = time();
				$recallGMTDate = date('Y-m-d H:i:s', $recallGMTTime);
		
				$initGMTDateTimeStamp = $_REQUEST["initRequestDateTimeStamp"];
				$recallGMTDateTimeStamp = $recallGMTDate;
		
		
				//Check Max Report Execution time
				$runningTimeSeconds = $recallGMTDateTimeStamp - $initGMTDateTimeStamp;
				asol_ReportsUtils::reports_log('debug', 'Running Time: '.$runningTimeSeconds, __FILE__, __METHOD__, __LINE__);
		
				if ((isset($sugar_config['asolReportsMaxExecutionTime'])) && ($sugar_config['asolReportsMaxExecutionTime'] > 0)) {
						
					if ($runningTimeSeconds > $sugar_config['asolReportsMaxExecutionTime']) {
		
						$returnedString = "timeout";
		
					}
						
				}
		
				$sqlLastRecall = "UPDATE asol_reports_dispatcher SET last_recall='".$recallGMTDate."' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
				$db->query($sqlLastRecall);
					
			}
		
			return $returnedString;
		
		} else {
		
			$importHttpFile = fopen($tmpFilesDir.$httpHtmlFile, "r");
			$HttpContent = fread($importHttpFile, filesize($tmpFilesDir.$httpHtmlFile));
			fclose($importHttpFile);
		
			return $HttpContent;
		
		}
		
		
	}
	
}
