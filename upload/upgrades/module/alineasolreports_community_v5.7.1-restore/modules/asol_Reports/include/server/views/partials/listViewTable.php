<table cellspacing="0" cellpadding="0" border="0" width="100%" class="list view" id="reportRows">
	<tbody>
		<tr class="pagination">
			<td colspan="<?php if (asol_CommonUtils::isDomainsInstalled()): ?>11<?php else: ?>10<?php endif; ?>" align="right">
				<table cellspacing="0" cellpadding="0" border="0" width="100%" class="paginationTable">
					<tbody>
						<tr>
							<td nowrap="nowrap" align="right" width="2%" class="paginationChangeButtons">
								<button <?php if ($data["num_pages"] == 0 || $data["page_number"] == 0): ?> disabled <?php endif; ?> class="button" title="<?= $app_strings['LNK_LIST_START']; ?>" name="listViewStartButton" type="button" onClick="document.search_form.page_number.value=0; controllerReportList.listReports();">
									<img height="11" border="0" align="absmiddle" width="13" alt="<?= $app_strings['LNK_LIST_START']; ?>" <?php if ($data["num_pages"] == 0 || $data["page_number"] == 0): ?> src="themes/default/images/start_off.gif" <?php else: ?> src="themes/default/images/start.gif" <?php endif; ?> >
								</button>
								<button <?php if ($data["num_pages"] == 0 || $data["page_number"] == 0): ?> disabled <?php endif; ?> class="button" title="<?= $app_strings['LNK_LIST_PREVIOUS']; ?>" name="listViewPrevButton" type="button" onClick="document.search_form.page_number.value=<?= $prev_number_page; ?>; controllerReportList.listReports();"> 						
									<img height="11" border="0" align="absmiddle" width="8" alt="<?= $app_strings['LNK_LIST_PREVIOUS']; ?>" <?php if ($data["num_pages"] == 0 || $data["page_number"] == 0): ?> src="themes/default/images/previous_off.gif" <?php else: ?> src="themes/default/images/previous.gif" <?php endif; ?> >
								</button>
								<span class="pageNumbers"><?= $initial_result; ?> - <?= $final_result.' '.asol_ReportsUtils::translateReportsLabel('LBL_REPORT_PAGINATION_OF').' '.$data["total_entries"]; ?></span>
								<button <?php if ($data["num_pages"] == 0 || ($data["page_number"] == $data["num_pages"]) || $data["total_entries"] == 0): ?> disabled <?php endif; ?> class="button" title="<?= $app_strings['LNK_LIST_NEXT']; ?>" name="listViewNextButton" type="button" onClick="document.search_form.page_number.value=<?= $next_number_page; ?>; controllerReportList.listReports();">							
									<img height="11" border="0" align="absmiddle" width="8" alt="<?= $app_strings['LNK_LIST_NEXT']; ?>" <?php if ($data["num_pages"] == 0 || ($data["page_number"] == $data["num_pages"]) || $data["total_entries"] == 0): ?> src="themes/default/images/next_off.gif" <?php else: ?> src="themes/default/images/next.gif" <?php endif; ?> >
								</button>	
								<button <?php if ($data["num_pages"] == 0 || ($data["page_number"] == $data["num_pages"]) || $data["total_entries"] == 0): ?> disabled <?php endif; ?> class="button" title="<?= $app_strings['LNK_LIST_END']; ?>" name="listViewEndButton" type="button" onClick="document.search_form.page_number.value=<?= $data['num_pages']; ?>; controllerReportList.listReports();"> 					
									<img height="11" border="0" align="absmiddle" width="8" alt="<?= $app_strings['LNK_LIST_END']; ?>" <?php if ($data["num_pages"] == 0 || ($data["page_number"] == $data["num_pages"]) || $data["total_entries"] == 0): ?> src="themes/default/images/end_off.gif" <?php else: ?> src="themes/default/images/end.gif" <?php endif; ?> >
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
					<input type="checkbox" class="massiveCheckAll" onClick="controllerReportList.massiveAction(true, this);"/>
				</div>
			</th>
			
			<?php foreach ($availableColumns as $key => $column): ?>
			<th nowrap="nowrap" width="<?= $availableWidths[$key]; ?>%" scope="col">
				<div align="left" width="100%" style="white-space: nowrap;">
					<a class="listViewThLinkS1" OnMouseOver="this.style.cursor='pointer';" OnMouseOut="this.style.cursor='default';" onclick="$('#sort_direction').val('<?= (($sort_field != $column) || ($sort_direction == "DESC") ? "ASC" : "DESC") ?>'); $('#sort_field').val('<?= $column; ?>'); controllerReportList.listReports();"><?= asol_ReportsUtils::translateReportsLabel($availableLabels[$key]); ?></a>&nbsp;
					<img height="10" border="0" align="absmiddle" width="8" src="themes/default/images/<?= (($sort_field == $column) && ($sort_direction == 'ASC') ? 'arrow_up.gif' : ((($sort_field == $column) && ($sort_direction == 'DESC')) ? 'arrow_down.gif' : 'arrow.gif')) ?>" >
				</div>
			</th>
			<?php endforeach; ?>
			
			<th nowrap="nowrap" width="2%" scope="col"></th>
			<th nowrap="nowrap" width="7%" scope="col"></th>
		</tr>
		
		<?php foreach ($rows as $key => $currentRow): ?>
		<tr class="asolReportsIndexRow <?php if ($key % 2 == 0): ?> evenListRowS1 <?php else: ?> oddListRowS1 <?php endif; ?>" height="20">
			<td align="left" width="2%" valign="top" scope="col">
				<?php if($currentRow["domain_modifiable"] && (!$currentRow['just_modify'])): ?> <input type="checkbox" class="listViewCheck massiveCheck" value="<?= $currentRow["id"]; ?>" onClick="controllerReportList.massiveAction(false, this);"> <?php endif; ?>
				<input type="hidden" class="deletableReport" <?php if (($currentRow["user_modifiable"] || $currentRow["role_modifiable"]) && ($currentRow["domain_modifiable"] && !$currentRow["just_modify"]) && ($REPORTS_ACL_DELETE)): ?> value="true" <?php else: ?> value="false" <?php endif; ?> />
			</td>
			<td align="left" width="20%" valign="top" scope="row">
				<?php
				if ($currentRow['execute']) {
			    	//echo '<a href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.getElementById(\'display_action\').value = \'DetailView\'; document.display_form.submit();">'.$currentRow['name'].'</a>';
			    	echo '<a href="javascript: void(0);" onClick="controllerReportList.detailReport(\''.$currentRow["id"].'\');">'.$currentRow['name'].'</a>';
				} else {
			    	echo $currentRow['name'];
			    }
			    ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["module"]; ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["last_run"]; ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["date_modified"]; ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["user_name"]; ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["scope"]; ?>
			</td>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["type"]; ?>
			</td>
			<?php if (asol_CommonUtils::isDomainsInstalled()): ?>
			<td align="left" width="10%" valign="top" scope="row">
				<?= $currentRow["domain_name"]; ?>
			</td>
			<?php endif;?>
			
			<td align="right" width="2%" valign="top" scope="row">
				<?php if ($REPORTS_ACL_VIEW): ?>
				<?php
				if ($currentRow['type'] == "stored") {
					//echo '<a title="'.$mod_strings['LBL_REPORT_SHOW'].'" href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.display_form.submit();"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include/images/asol_reports_runreport.png"></a>';
					echo '<a title="'.$mod_strings['LBL_REPORT_SHOW'].'" href="javascript: void(0);" onClick="controllerReportList.detailReport(\''.$currentRow["id"].'\');"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include/images/asol_reports_runreport.png"></a>';
				} else {
					if ($currentRow['execute']) {
						//echo '<a title="'.$mod_strings['LBL_REPORT_RUN'].'" href="#" onClick="document.getElementById(\'display_record\').value = \''.$currentRow['id'].'\'; document.getElementById(\'display_action\').value = \'DetailView\'; document.display_form.submit();"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include/images/asol_reports_runreport.png"></a>';
						echo '<a title="'.$mod_strings['LBL_REPORT_RUN'].'" href="javascript: void(0);" onClick="controllerReportList.detailReport(\''.$currentRow["id"].'\');"><img style="margin-right: 5px" border="0" src="modules/asol_Reports/include/images/asol_reports_runreport.png"></a>';
					} else if ($currentRow['external_url'] != NULL) {
						echo '<a title="'.$mod_strings['LBL_REPORT_RUN'].'" href="#" onClick="alert(\''.$currentRow['external_url'].'\');"><img style="margin-right: 0px" border="0" src="modules/asol_Reports/include/images/asol_reports_url.png"></a>';
					}
				}
				?>
				<?php endif; ?>
			</td>				
			<td align="right" width="7%" valign="top" scope="row">
				<?php if ($currentRow["domain_modifiable"] && (!$currentRow['just_modify']) && $REPORTS_ACL_EXPORT): ?> <a title="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_COPY"); ?>" href="index.php?module=asol_Reports&action=EditView&record=<?= $currentRow['id']; ?>&return_action=duplicate&report_name=Copy of <?= $currentRow['name']?>"><img class="asol_icon" border="0" src="modules/asol_Reports/include/images/asol_reports_duplicate.png"></a> <?php endif; ?>
				<?php if (($currentRow["user_modifiable"] || $currentRow["role_modifiable"]) && $currentRow["domain_modifiable"] && $REPORTS_ACL_EDIT): ?> <a title="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_EDIT"); ?>" href="index.php?module=asol_Reports&action=EditView&record=<?= $currentRow['id']; ?>"><img class="asol_icon" border="0" src="modules/asol_Reports/include/images/asol_reports_edit.png"></a> <?php endif; ?>
				<?php if ($currentRow["domain_modifiable"] && (!$currentRow['just_modify']) && $REPORTS_ACL_EXPORT): ?> <a title="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_EXPORT_ONE"); ?>" href="javascript: void(0);" onClick="controllerReportList.exportReport('<?= $currentRow["id"]; ?>');"><img class="asol_icon" border="0" src="modules/asol_Reports/include/images/asol_reports_export.png"></a> <?php endif; ?>
				<?php if (($currentRow["user_modifiable"] || $currentRow["role_modifiable"]) && $currentRow["domain_modifiable"] && (!$currentRow['just_modify']) && $REPORTS_ACL_DELETE): ?> <a title="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_DELETE"); ?>" href="javascript: void(0);" onclick="controllerReportList.deleteReport('<?= $currentRow["id"]; ?>', '<?= rawurlencode($currentRow["name"]); ?>');"><img class="asol_icon" border="0" src="modules/asol_Reports/include/images/asol_reports_delete.png"></a> <?php endif; ?>
			</td>
		</tr>
		<?php endforeach; ?>
		
		<tr>
			<td colspan=<?php if (asol_CommonUtils::isDomainsInstalled()): ?>11<?php else: ?>10<?php endif; ?> style="border-top: solid 1px black; padding-bottom: 2px; padding-top: 10px;">
				<form id="massive_form" enctype="multipart/form-data" method="post" action="index.php">
					<input type="hidden" name="MAX_FILE_SIZE" value="100000">
					<?php if($REPORTS_ACL_IMPORT): ?> <?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_SELECT_FILE") ?>: <input name="importedReports" type="file">&nbsp;&nbsp;<input type="submit" value="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_IMPORT"); ?>" onClick="controllerReportList.importReport();">&nbsp;<?php endif; ?>
					<?php if($REPORTS_ACL_EXPORT): ?> <input disabled type="button" value="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_EXPORT"); ?>" class="massiveAction" onClick="controllerReportList.exportReport(null);"> <?php endif; ?>
					<?php if($REPORTS_ACL_DELETE): ?> <input disabled type="button" value="<?= asol_ReportsUtils::translateReportsLabel("LBL_REPORT_MULTIDELETE"); ?>" class="massiveAction" onClick="controllerReportList.deleteReport(null, null);"> <?php endif; ?>
				</form>
			</td>
		</tr>

	</tbody>
</table>
