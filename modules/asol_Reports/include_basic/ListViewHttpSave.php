<?php

require_once('modules/asol_Reports/include_basic/manageReportsFunctions.php');

echo '
<script type="text/javascript" src="modules/asol_Reports/include_basic/js/reports.min.js?version='.asol_ReportsUtils::$reports_version.'"></script>
<script type="text/javascript" src="modules/asol_Reports/include_basic/js/LAB.min.js?version='.asol_ReportsUtils::$reports_version.'"></script>
<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include_basic/css/style.css?version='.asol_ReportsUtils::$reports_version.'">

<script>
	'.asol_ReportsManagementFunctions::getInitJqueryScriptHtml().'
</script>

<div class="moduleTitle">
	<h2>'.$mod_strings['LBL_REPORT_SEARCH'].'</h2>
</div>
<div class="clear"></div>

<div class="listViewBody">

	<table class="alineasol_reports" style="width: 100%">
		<tbody>
			<tr>
				<td>
					<form id="display_form" name="display_form" action="index.php?module=asol_Reports" method="post">
						<input type="hidden" id="display_action" name="action" value="DetailView">
						<input type="hidden" id="display_record" name="record" value="">
					</form>

					<form id="search_form" name="search_form" class="search_form" action="index.php?module=asol_Reports&action=index" method="post" enctype="multipart/form-data" name="search_form">
						<input type="hidden" value="basic_search" name="searchFormTab">
						<input type="hidden" value="asol_Reports" name="module">
						<input type="hidden" value="index" name="action">
						<input type="hidden" value="true" name="query">
						<input type="hidden" value="'.$assigned_user_id.'" name="assigned_user_id">
						<input type="hidden" value="" id="return_action" name="return_action">
		
						<input type="hidden" id="page_number" value="'.$data['page_number'].'" name="page_number">
		
						<input type="hidden" value="'.$sort_field.'" id="sort_field" name="sort_field">
						<input type="hidden" value="'.$sort_direction.'" id="sort_direction" name="sort_direction">
		
						<div class="edit view search" style="" id="Reportsbasic_searchSearchForm">
							<table cellspacing="0" cellpadding="0" border="0" width="100%">
								<tbody>
									<tr>
										<td nowrap="nowrap" width="8.33333333333%" scope="row">
											'.$mod_strings['LBL_REPORT_NAME'].'
										</td>
										<td nowrap="nowrap" width="25%">
											<input type="text" tabindex="" title="" value="'.$name.'" maxlength="" size="30" id="name_basic" name="name_basic">
										</td>
										<td nowrap="nowrap" width="8.33333333333%" scope="row">
											'.$mod_strings['LBL_REPORT_MODULE'].'
										</td>
										<td nowrap="nowrap" width="25%">
											<select style="max-width: 150px;" name="database_basic" onChange="manageListViewDatabase(this);">
												'.(!empty($alternativeDb) ? '<option value="" tables="[]"></option>' : '').'
												<option value="-1" '.($report_database == "-1" ? 'selected' : '').' tables="'.rawurlencode(json_encode($nativeModules)).'">'.$mod_strings['LBL_REPORT_NATIVE_DB'].'</option>';

												$availableModules = array();
												foreach ($alternativeDb as $dbKey=>$currentDb) {

													//***********************//
													//***AlineaSol Premium***//
													//***********************//
													$extraParams = array(
														'alternative_database' => $dbKey,
														'noRestrictions' => false,
													);
													$externalAvailableTables = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getExternalAvailableTables", $extraParams);
													$availableModules[$dbKey] = ($externalAvailableTables !== false) ? $externalAvailableTables : null;
													//***********************//
													//***AlineaSol Premium***//
													//***********************//

													echo '<option value="'.$dbKey.'" tables="'.(isset($availableModules[$dbKey]) ? urlencode(json_encode($availableModules[$dbKey])) : '[]').'" '.($report_database === (string)$dbKey ? 'selected' : '').'>'.$currentDb.'</option>';
												
												}
												
										echo '
											</select>
		
											<select style="width: 150px; visibility: '.((!empty($alternativeDb) && (!isset($report_database) || $report_database === "")) ? 'hidden' : 'inherit').'" name="module_basic" id="module_basic">
												<option value=""></option>';
										
												if (empty($alternativeDb) || ($report_database === "-1")) {
										
													foreach ($nativeModules as $keyModule=>$currentModule) {
														echo '<option value="'.$keyModule.'" '.($report_module == $keyModule ? 'selected' : '').'>'.$currentModule.'</option>';
													}
												
												} else {
													
													foreach ($availableModules[$report_database] as $keyModule=>$currentModule) {
														echo '<option value="'.$keyModule.'" '.($report_module == $keyModule ? 'selected' : '').'>'.$currentModule.'</option>';
													}
													
												}
										
										echo '
											</select>
										</td>
										<td nowrap="nowrap" width="8.33333333333%" scope="row">
											'.$mod_strings['LBL_REPORT_ASSIGNED_TO'].'
										</td>
										<td nowrap="nowrap" width="25%">
											<input type="text" tabindex="" title="" value="'.$assigned_user_name.'" maxlength="" size="30" id="assigned_user_name" name="assigned_user_name">
											<button type="button" onclick="open_popup(\'Users\', 600, 400, \'\', true, false, {\'call_back_function\':\'set_return\',\'form_name\':\'search_form\',\'field_to_name_array\':{\'id\':\'assigned_user_id\',\'user_name\':\'assigned_user_name\'}}, \'single\', true);" title="'.$app_strings['LBL_SELECT_BUTTON_LABEL'].'" class="button" id="btn_assigned_user_name" name="btn_assigned_user_name"><img src=\'themes/default/images/id-ff-select.png\'></button>
											<button type="button" onclick="document.search_form.assigned_user_name.value = \'\';" title="'.$app_strings['LBL_CLEAR_BUTTON_LABEL'].'" class="button" id="btn_clr_assigned_user_name" name="btn_clr_assigned_user_name"><img src="themes/default/images/id-ff-clear.png"></button>
										</td>
									</tr>
									<tr>
										<td nowrap="nowrap" width="8.33333333333%" scope="row">
											'.$mod_strings['LBL_REPORT_SCOPE'].'
										</td>
										<td nowrap="nowrap" width="25%">
											<select style="width: 150px;" name="scope_basic">
												<option value="" '.($report_scope == "" ? 'selected' : '').'></option>
												<option value="public" '.($report_scope == "public" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_PUBLIC'].'</option>
												<option value="private" '.($report_scope == "private" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_PRIVATE'].'</option>
												<option value="role" '.($report_scope == "role" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_ROLE'].'</option>
											</select>
										</td>
										<td nowrap="nowrap" width="8.33333333333%" scope="row">
											'.$mod_strings['LBL_REPORT_TYPE'].'
										</td>
										<td nowrap="nowrap" width="25%">
											<select style="width: 150px;" name="type_basic">
												<option value="" '.($report_type == "" ? 'selected' : '').'></option>
												<option value="manual" '.($report_type == "manual" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_MANUAL'].'</option>
												<option value="internal" '.($report_type == "internal" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_INTERNAL'].'</option>
												<option value="external" '.($report_type == "external" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_EXTERNAL'].'</option>
												<option value="scheduled" '.($report_type == "scheduled" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_SCHEDULED'].'</option>
												<option value="stored" '.($report_type == "stored" ? 'selected' : '').'>'.$mod_strings['LBL_REPORT_STORED'].'</option>';
												
												//***********************//
												//***AlineaSol Premium***//
												//***********************//
												$webServiceReportTypeOptions = asol_ReportsUtils::managePremiumFeature("WebServiceReports", "reportFunctions.php", "getWebServiceReportTypeOptions", array('selectedValue' => $report_type));
												echo ($webServiceReportTypeOptions !== false ? $webServiceReportTypeOptions : '');
												//***********************//
												//***AlineaSol Premium***//
												//***********************//
												
										echo '
											</select>
										</td>';
										
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										$metaSearchCells = asol_ReportsUtils::managePremiumFeature("MetaReport", "reportFunctions.php", "getMetaSearchCells", array('selectedValue' => $report_meta));
										echo ($metaSearchCells !== false ? $metaSearchCells : '');
										//***********************//
										//***AlineaSol Premium***//
										//***********************//
										
									echo '
									</tr>
								</tbody>
							</table>
						</div>
	
						<input type="submit" id="search_form_submit" value="'.$app_strings['LBL_SEARCH'].'" class="button" onclick="document.search_form.return_action.value=\'\'; document.getElementById(\'page_number\').value = 0;" title="'.$app_strings['LBL_SEARCH'].'">
						<input type="button" value="'.$app_strings['LBL_CLEAR_BUTTON_LABEL'].'" name="clear" class="button" onclick="SUGAR.searchForm.clear_form(this.form);" title="'.$app_strings['LBL_CLEAR_BUTTON_LABEL'].'">
		
						<table cellspacing="0" cellpadding="0" border="0" width="100%" class="list view" id="reportRows">
							<tbody>
								<tr class="pagination">
									<td colspan="'.(asol_ReportsUtils::isDomainsInstalled() ? 1+10 : 0+10).'" align="right">
										<table cellspacing="0" cellpadding="0" border="0" width="100%" class="paginationTable">
											<tbody>
												<tr>
													<td nowrap="nowrap" align="right" width="2%" class="paginationChangeButtons">
														<button '.(($data['num_pages'] == 0) || ($data['page_number'] == 0) ? 'disabled' : '').' class="button" title="'.$app_strings['LNK_LIST_START'].'" name="listViewStartButton" type="button" onClick="document.search_form.page_number.value=0; document.search_form.submit()">
															<img height="11" border="0" align="absmiddle" width="13" alt="'.$app_strings['LNK_LIST_START'].'" src="themes/default/images/'.(($data['num_pages'] == 0) || ($data['page_number'] == 0) ? 'start_off.gif' : 'start.gif').'">
														</button>
														<button '.(($data['num_pages'] == 0) || ($data['page_number'] == 0) ? 'disabled' : '').' title="'.$app_strings['LNK_LIST_PREVIOUS'].'" class="button" name="listViewPrevButton" type="button"  onClick="document.search_form.page_number.value='.($data['page_number'] > 0 ? $data['page_number']-1 : 0).'; document.search_form.submit()">
															<img height="11" border="0" align="absmiddle" width="8" alt="'.$app_strings['LNK_LIST_PREVIOUS'].'" src="themes/default/images/'.(($data['num_pages'] == 0) || ($data['page_number'] == 0) ? 'previous_off.gif' : 'previous.gif').'">
														</button>
																	
														<span class="pageNumbers">('.($data['total_entries'] != 0 ? ($data['page_number']*$data['entriesPerPage'])+1 : ($data['page_number']*$data['entriesPerPage'])).' - '.(($data['entriesPerPage']*$data['page_number'])+$data['current_entries']).' of '.$data['total_entries'].')</span>
														
														<button '.(($data['num_pages'] == 0) || ($data['page_number'] == $data['num_pages']) || ($data['total_entries'] == 0) ? 'disabled' : '').' title="'.$app_strings['LNK_LIST_NEXT'].'" class="button" name="listViewNextButton" type="button" onClick="document.search_form.return_action.value=\'\'; document.search_form.page_number.value='.($data['page_number'] < $data['num_pages'] ? $data['page_number']+1 : $data['num_pages']).'; document.search_form.submit()">
															<img height="11" border="0" align="absmiddle" width="8" alt="'.$app_strings['LNK_LIST_NEXT'].'" src="themes/default/images/'.(($data['num_pages'] == 0) || ($data['page_number'] == $data['num_pages']) || ($data['total_entries'] == 0) ? 'next_off.gif' : 'next.gif').'">
														</button>
														<button '.(($data['num_pages'] == 0) || ($data['page_number'] == $data['num_pages']) || ($data['total_entries'] == 0) ? 'disabled' : '').' title="'.$app_strings['LNK_LIST_END'].'" class="button" name="listViewEndButton" type="button"  onClick="document.search_form.return_action.value=\'\'; document.search_form.page_number.value='.$data['num_pages'].'; document.search_form.submit()">
															<img height="11" border="0" align="absmiddle" width="13" alt="'.$app_strings['LNK_LIST_END'].'" src="themes/default/images/'.(($data['num_pages'] == 0) || ($data['page_number'] == $data['num_pages']) || ($data['total_entries'] == 0) ? 'end_off.gif' : 'end.gif').'">
														</button>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
	
								<tr height="20">
									<th nowrap="nowrap" width="2%" scope="col">
										<div align="left" width="100%" style="white-space: nowrap;">
											<input type="checkbox" class="massiveCheck_all" />
										</div>
									</th>';
										
									$availableColumns = array("name", "report_module", "last_run", "date_modified", "user_name", "report_scope", "report_type");
									$availableLabels = array("LBL_REPORT_NAME", "LBL_REPORT_MODULE", "LBL_REPORT_LAST_RUN", "LBL_REPORT_LAST_UPDATE", "LBL_REPORT_ASSIGNED_USER", "LBL_REPORT_SCOPE", "LBL_REPORT_TYPE");
									$availableWidths = array("20", "10", "10", "10", "10", "10", "10");
									
									if (asol_ReportsUtils::isDomainsInstalled()) {
										$availableColumns[] = "asol_domains.name";
										$availableLabels[] = "LBL_REPORT_DOMAIN";
										$availableWidths[] = "10";
									}
									
									foreach ($availableColumns as $keyColumn=>$availableColumn) {
									
										$sortDirectionName = (($sort_field != $availableColumn) || ($sort_direction == "DESC") ? "ASC" : "DESC");
												
										echo '
										<th nowrap="nowrap" width="'.$availableWidths[$keyColumn].'%" scope="col">
											<div align="left" width="100%" style="white-space: nowrap;">
												<a class="listViewThLinkS1" OnMouseOver="this.style.cursor=\'pointer\'" OnMouseOut="this.style.cursor=\'default\'" onclick="$(\'#sort_direction\').val(\''.$sortDirectionName.'\'); $(\'#sort_field\').val(\''.$availableColumn.'\'); document.search_form.action.value=\'index\'; $(\'#return_action\').val(\'\'); document.search_form.submit()">'.$mod_strings[$availableLabels[$keyColumn]].'</a>
												&nbsp;<img height="10" border="0" align="absmiddle" width="8" src="themes/default/images/'.(($sort_field == $availableColumn) && ($sort_direction == 'ASC') ? 'arrow_up.gif' : ((($sort_field == $availableColumn) && ($sort_direction == 'DESC')) ? 'arrow_down.gif' : 'arrow.gif')).'" >
											</div>
										</th>';
										
									}
										
								echo '
									<th nowrap="nowrap" width="2%" scope="col"></th>
		                    		<th nowrap="nowrap" width="7%" scope="col"></th>
		                    	</tr>';
	
								foreach ($rows as $key=>$currentRow) {

									$deletableReport = (($currentRow['user_modifiable']) || ($currentRow['role_modifiable'])) && (($currentRow['domain_modifiable']) && (!$currentRow['just_modify'])) && ($REPORTS_ACL_DELETE);
									
									echo '
		   							<tr class="'.(($key%2 == 0) ? 'evenListRowS1' : 'oddListRowS1').' asolReportsIndexRow" height="20">
			                    		<td align="left" width="2%" valign="top" scope="row">';
			                    			if ($currentRow['domain_modifiable'] && (!$currentRow['just_modify'])) {
			                    				echo '<input type="checkbox" class="listViewCheck massiveCheck" name="selectedRows[]" value="'.$currentRow['id'].'">';
			                    			}
			                    		echo '
			                    			<input type="hidden" class="deletableReport" value="'.($deletableReport ? 'true' : 'false').'" />
										</td>
			                    		<td align="left" width="20%" valign="top" scope="row">';
			                    		
			                    			if ($currentRow['execute']) {
			                    				echo '<a href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.getElementById(\'display_action\').value = \'DetailView\'; document.display_form.submit();">'.$currentRow['name'].'</a>';
											} else {
			                    				echo $currentRow['name'];
			                    			}
			                    			
			                    		echo '
			                    		</td>
										<td align="left" width="10%" valign="top" scope="row">
			    							'.$translatedRows[$key]['module'].'
			    						</td>
		            					<td align="left" width="10%" valign="top" scope="row">
			                    			'.$currentRow['last_run'].'
			                    		</td>
										<td align="left" width="10%" valign="top" scope="row">
			                				'.$currentRow['date_modified'].'
			                			</td>
										<td align="left" width="10%" valign="top" scope="row">
											'.$currentRow['user_name'].'
			                    		</td>
										<td align="left" width="10%" valign="top" scope="row">
			                    			'.$translatedRows[$key]['report_scope'].'
			                    		</td>
		                  				<td align="left" width="10%" valign="top" scope="row">
			                    			<font color="'.($currentRow['task_state'] == "A" ? "GREEN" : ($currentRow['task_state'] == "I" ? "RED" : ($currentRow['task_state'] == "S" ? "ORANGE" : "BLACK"))).'">'.$translatedRows[$key]['type'].'</font>
			                    		</td>';
			                    		
			                    		if (asol_ReportsUtils::isDomainsInstalled()) {
			                    			echo '
				                    		<td align="left" width="10%" valign="top" scope="row">
				                    			'.$currentRow['domain_name'].'
				                    		</td>';
			                    		}
			                    		
			                    		echo '
										<td align="right" width="2%" valign="top" scope="row">';
			                    		
											if ($REPORTS_ACL_VIEW) {
				                    			if ($currentRow['type'] == "stored") {
				                    				echo '<a title="'.$mod_strings['LBL_REPORT_SHOW'].'" href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.display_form.submit();"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_runreport.png"></a>';
				                    			} else {
				                    				if ($currentRow['execute']) {
				                    					echo '<a title="'.$mod_strings['LBL_REPORT_EXECUTE'].'" href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.getElementById(\'display_action\').value = \'DetailView\'; document.display_form.submit();"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_runreport.png"></a>';
				                    				} else if ($currentRow['external_url'] != NULL) {
				                    					echo '<a title="'.$mod_strings['LBL_REPORT_EXECUTE'].'" href="#" onClick="alert(\''.$currentRow['external_url'].'\');"><img style="margin-right: 0px" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_url.png"></a>';
				                    				}
				                    			}
			                    			}
			                    			
			                    		echo '
			                    		</td>
										<td align="right" width="7%" valign="top" scope="row">';
			                    		
											if ((($currentRow['domain_modifiable']) && (!$currentRow['just_modify'])) && ($REPORTS_ACL_EXPORT)) {
												echo '<a title="'.$mod_strings['LBL_REPORT_COPY'].'" href="index.php?module=asol_Reports&action=EditView&record='.$currentRow['id'].'&return_action=duplicate&report_name=Copy of '.$currentRow['name'].'"><img class="asol_icon" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_duplicate.png"></a>';
											}
											if ((($currentRow['user_modifiable']) || ($currentRow['role_modifiable'])) && ($currentRow['domain_modifiable']) && ($REPORTS_ACL_EDIT)) {
												echo '<a title="'.$mod_strings['LBL_REPORT_EDIT'].'" href="index.php?module=asol_Reports&action=EditView&record='.$currentRow['id'].'"><img class="asol_icon" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_edit.png"></a>';
											}
											if ((($currentRow['domain_modifiable']) && (!$currentRow['just_modify'])) && ($REPORTS_ACL_EXPORT)) {
												echo '<a title="'.$mod_strings['LBL_REPORT_EXPORT_ONE'].'" href="index.php?module=asol_Reports&action=index&return_action=exportReport&record='.$currentRow['id'].'"><img class="asol_icon" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_export.png"></a>';
											}
											if ((($currentRow['user_modifiable']) || ($currentRow['role_modifiable'])) && (($currentRow['domain_modifiable']) && (!$currentRow['just_modify'])) && ($REPORTS_ACL_DELETE)) {
												echo '<a title="'.$app_strings['LBL_DELETE'].'" href="index.php?module=asol_Reports&action=save&delete=true&record='.$currentRow['id'].'" onclick="return confirm(\''.$mod_strings['MSG_REPORT_DELETE_ALERT'].' '.$currentRow['name'].'\')"><img class="asol_icon" border="0" src="modules/asol_Reports/include_basic/images/asol_reports_delete.png"></a>';
											}
											
										echo '
										</td>
									</tr>';
										
								}
	
								echo '
								
								<!-- Paginado -->
	
								<tr>
									<td colspan=8>
										<input type="hidden" name="MAX_FILE_SIZE" value="100000">';
										if ($REPORTS_ACL_IMPORT) {
											echo $mod_strings['LBL_REPORT_SELECT_FILE'].': <input name="importedReport" type="file">&nbsp;&nbsp;';
											echo '<input type="submit" value="'.$mod_strings['LBL_REPORT_IMPORT'].'" onClick="document.search_form.return_action.value=\'importReport\'">&nbsp;';
										}
										if ($REPORTS_ACL_EXPORT) {
											echo '<input disabled type="submit" value="'.$mod_strings['LBL_REPORT_EXPORT'].'" class="massiveAction" onClick="document.search_form.return_action.value=\'exportReport\'">';
										}
										if ($REPORTS_ACL_DELETE) {
											echo '<input disabled type="submit" value="'.$mod_strings['LBL_REPORT_MULTIDELETE'].'" class="massiveAction" onClick="document.search_form.return_action.value=\'deleteReport\'; return deleteReports(\'massiveCheck\', \'deletableReport\');">';
										}
								echo '
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				
				</td>
			</tr>
		</tbody>
	</table>

	<script>
		window.onload = initJqueryScripts(false, function() {
			initMassiveAction(\'reportRows\', \'massiveCheck\', \'massiveCheck_all\', \'massiveAction\');
		});
	</script>

</div>';


?>