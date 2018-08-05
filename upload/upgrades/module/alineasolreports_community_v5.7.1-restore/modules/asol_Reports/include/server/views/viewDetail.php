<?php

require_once("modules/asol_Reports/include/server/controllers/controllerReports.php");

$reportLibrariesHtml = '';
$reportHeadersHtml = '';

if ($isDashlet) {

	if ($avoidAjaxRequest) {
		$reportHeadersHtml .= asol_CommonUtils::getCommonHideLoadingCss($dashletId);
	}
	
} else if ($selected) {

	$isMetaReport = ($focus->is_meta === '1');
	$reportLibrariesHtml = (!$isMetaReport ? asol_ReportsUtils::getElementLibraries($focus->id) : '');
	$reportHeadersHtml .= '
	<script type="text/javascript">
		$LAB
		.script("modules/asol_Reports/include/client/helpers/reportsRouter.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'").wait()
		.script("modules/asol_Reports/include/client/helpers/reportsApi.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'").wait(function() {
			reportsApi.setLanguage({
				"blocking" : {
					"load" : "'.translate("LBL_COMMON_LOADING_DATA", "asol_Common").'",
					"save" : "'.translate("LBL_COMMON_SAVING_DATA", "asol_Common").'",
				}
			});
		})
		.script("modules/asol_Reports/include/client/controllers/controllerDetail.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'");
	</script>';

}

$reportHeadersHtml .= '<link type="text/css" href="modules/asol_Reports/include/client/css/styleDetail.css" rel="stylesheet">';

if (isset($_REQUEST['sourceCall']) && $_REQUEST['sourceCall'] == 'httpReportRequest') {
	
	$htmlContent = asol_ControllerReports::generateExecutedReport($focus->id, $isDashlet, $dashletId);
	
} else {
	
	$htmlContent = $reportLibrariesHtml.'
			
	<div style="display: '.($selected ? 'block' : 'none').';" id="detailContainer'.($isDashlet ? $dashletId : '').'" class="detailContainer '.(!$isDashlet ? 'alineasol_reports' : '').'" preview="'.asol_ReportsUtils::getPreviewContextString($isPreview).'">
	
		'.$reportHeadersHtml.'
		'.($selected && false ? asol_ControllerReports::getReportDetailTitle($focus->name, $isDashlet, $focus->report_fields) : '').'
		'.($selected && false ? asol_ControllerReports::getReportDetailButtons($focus, $isDashlet, $dashletId, $isMetaReport, $dataVisibility['filter'], $sendEmailquestion, $filtersHiddenInputs, $searchCriteria, $vardefFilters, $externalCall, $getLibraries, $overrideEntries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview) : '').'
		'.($selected ? asol_ControllerReports::getReportPublicDescription($focus->description, $isDashlet) : '' ).'
		'.($selected ? asol_ControllerReports::generateExecutedReport($focus->id, $isDashlet, $dashletId) : '').'
		'.($selected && false ? asol_ControllerReports::getReportDetailButtons($focus, $isDashlet, $dashletId, $isMetaReport, $dataVisibility['filter'], $sendEmailquestion, $filtersHiddenInputs, $searchCriteria, $vardefFilters, $externalCall, $getLibraries, $overrideEntries, $scheduledEmailHideButtons, $displayNoDataMsg, $isWsExecution, $isPreview) : '').'
	
	</div>';

}

//********Manage Form Domain*********//
if (asol_CommonUtils::isDomainsInstalled()) {

	global $current_user;

	$currentReportDomain = (empty($focus->id) ? $current_user->asol_default_domain : $focus->asol_domain_id);
	$manageReportDomain = asol_CommonUtils::manageElementDomain('asol_reports', $focus->id, $current_user->asol_default_domain, $currentReportDomain);

	$reportTypeData = explode(':', $focus->report_type);
	$reportType = $reportTypeData[0];
	
	if ($reportType != 'external' && !$manageReportDomain) {
		$htmlContent = asol_ReportsUtils::translateReportsLabel('LBL_REPORT_NOT_AVAILABLE');
		$htmlContent .= asol_CommonUtils::getCommonHideLoadingCss($dashletId);
	}

}
//********Manage Form Domain*********//
if ($returnHtml) {
	return $htmlContent;
} else {
	echo $htmlContent;
}

