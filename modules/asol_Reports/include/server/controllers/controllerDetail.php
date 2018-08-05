<?php

/**
 * @author AlineaSol
 */
class asol_ControllerReportDetail {
	
	/**
	 *
	 * @abstract Displays Detail View
	 */
	static public function display($record, $selected = true, $returnHtml = false) {

		$isPreview = ((isset($_REQUEST['isPreview'])) && ($_REQUEST['isPreview'] == 'true') ? true : false);
		
		if ($selected && empty($record) && !$isPreview) die(translate('LBL_REPORT_NOT_FOUND', 'asol_Reports'));

		$focus = BeanFactory::getBean('asol_Reports', $record);
		$isDashlet = ((isset($_REQUEST['dashlet'])) && ($_REQUEST['dashlet'] == 'true') ? true : false);
		$dashletId = (isset($_REQUEST['dashletId']) ? $_REQUEST['dashletId'] : '');
		$avoidAjaxRequest = ((isset($_REQUEST['avoidAjaxRequest'])) && ($_REQUEST['avoidAjaxRequest'] == 'true') ? true : false);
		$multiExecution = ((isset($_REQUEST['multiExecution'])) && ($_REQUEST['multiExecution'] == 'true') ? true : false);

		if ($selected && !$isDashlet) {
			asol_CommonUtils::ajaxTracker($focus->id, $focus->name, 'asol_Reports');
		}
				
		if ($multiExecution) {
			$_REQUEST['metaDashletId'] = (isset($_REQUEST['metaDashletId']) ? $_REQUEST['metaDashletId'] : $dashletId);
			return asol_ControllerReports::generateExecutedReport($record, $isDashlet, $dashletId);
		} else {
			if ($returnHtml) {
				return (include "modules/asol_Reports/include/server/views/viewDetail.php");
			} else {
				require_once "modules/asol_Reports/include/server/views/viewDetail.php";
			}
		}
		
	}
	
}
