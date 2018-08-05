<?php
 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ReportChartDashletApi extends SugarApi {
	
    public function registerApiRest() {
        return array(
            'GetReportDataEndpoint' => array(
                'reqType' => 'GET',
                'path' => array('asol', 'GetReportData'),
                'pathVars' => array(''),
                'method' => 'GetReportData',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function GetReportData($api, $args) {
    	
    	global $current_user, $db;
    	
    	require_once('modules/asol_Common/include/commonUtils.php');
    	require_once('modules/asol_Reports/include/generateReport.php');
    	require_once('modules/asol_Reports/include/generateReportsFunctions.php');
    	require_once('modules/asol_Reports/include/server/reportsUtils.php');
			
    	$displayReportDashlet = true;
    	$reportId = $args['reportId'];
    	$dashletId = create_guid();
    	$fixedDashletId = str_replace("-", "", $dashletId);
    	
    	//**************************//
		//***Is Domains Installed***//
		//**************************//
		if (asol_CommonUtils::isDomainsInstalled()) {
			
			$reportDomainQuery = $db->query("SELECT asol_reports.asol_domain_id as domain_id, asol_domains.name as domain_name FROM asol_reports LEFT JOIN asol_domains ON asol_reports.asol_domain_id=asol_domains.id WHERE asol_reports.id='".$reportId."'");
			$reportDomainRow = $db->fetchByAssoc($reportDomainQuery);
			$displayReportDashlet = ((empty($reportId)) || (asol_CommonUtils::manageElementDomain('asol_reports', $reportId, $current_user->asol_default_domain, $reportDomainRow['domain_id'])));
				
		}
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		
		if ($displayReportDashlet) {
			
			if (!empty($reportId)) {

				$getLibraries = ($_REQUEST['getLibraries'] === 'true' ? true : false);

				$reportHtml = ($getLibraries ? asol_ReportsUtils::getElementLibraries($reportId) : '').	
				'<script type="text/javascript">'.asol_ReportsGenerationFunctions::getLoadCurrentDashletScriptFunction($reportId, true, $dashletId, '', false, null, null, $current_user->id, false).'</script>'.
				'<div class="table table-striped dataTable">
					<span id="loadingContainer'.$dashletId.'" class="loadingContainer">
						<img class="loadingGIF" src="themes/default/images/img_loading.gif">
						<span class="loadingTEXT">'.translate("LBL_REPORT_LOADING", "asol_Reports").'</span>
					</span>
					'.displayReport($reportId, null, '', '', '', '', true, $dashletId, false, false, true, false, null, null, null, true, null).'
				</div>';
				
			} else {
				
				$reportHtml = '<div align="center">No Report Selected</div>';
				
			}
			
		} else {
			
			$reportHtml = '<div align="center"></div>';
			
		}
		
		$reportHtml = str_replace(chr(9), "", str_replace(chr(13), "", str_replace(chr(10), "", $reportHtml)));
		
    	return json_decode(json_encode(array('dashletId' => $dashletId, 'html' => $reportHtml)));
		
    }

}

?>
