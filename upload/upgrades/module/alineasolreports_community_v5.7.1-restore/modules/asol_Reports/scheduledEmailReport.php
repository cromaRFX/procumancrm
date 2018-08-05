<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

error_reporting(1); //E_ERROR 


global $current_user, $mod_strings, $sugar_config, $theme, $db;


$asolReportsResizableNVD3Charts = ((isset($sugar_config['asolReportsResizableNVD3Charts'])) && ($sugar_config['asolReportsResizableNVD3Charts']));

require_once('modules/asol_Common/include/commonUtils.php');
require_once('modules/asol_Reports/include/server/reportsUtils.php');
require_once('modules/asol_Reports/include/generateReportsFunctions.php');
require_once('modules/asol_Reports/include/manageReportsFunctions.php');

require_once('modules/asol_Reports/include/ReportChart.php');
require_once('modules/asol_Reports/ReportsDashletChart.php');


$availableReport = false;
$isDashlet = (isset($_REQUEST['dashlet'])) ? true : false;
$dashletId = (isset($_REQUEST['dashletId'])) ? $_REQUEST['dashletId'] : "";


if (asol_CommonUtils::isDomainsInstalled()) {
	
	$reportCssfile = (is_file("modules/asol_Reports/include/css/".$current_user->asol_default_domain.".css")) ? $current_user->asol_default_domain.".css" : 'reports.css';
	
} else {
	
	$reportCssfile = 'reports.css';
	
}
//Is Domains Installed

$getLibraries = (isset($_REQUEST['getLibraries']) && $_REQUEST['getLibraries'] == 'true');
$storedReportInfo = $_REQUEST['storedReportInfo'];

if ($storedReportInfo === 'false') {
	
	$availableReport = false;
	
} else {

	$tmpReportFilesPath = 'modules/asol_Reports/tmpReportFiles/';
		
	$storedReportData = unserialize(base64_decode($storedReportInfo));
	
	$accessKey = ((asol_CommonUtils::isDomainsInstalled()) && (isset($current_user->asol_default_domain))) ? $current_user->asol_default_domain : 'base';
	
	$exportedReportFile = $storedReportData[$accessKey]['infoTxt'];
	$reportCharts = $storedReportData[$accessKey]['chartFiles'];
	
	if ((empty($exportedReportFile)) || (!is_file($tmpReportFilesPath.$exportedReportFile))) {
		
		$availableReport = false;
		
	} else {
	
		$descriptor = @fopen($tmpReportFilesPath.$exportedReportFile, "r");
	
		$serializedReport = fread($descriptor, filesize($tmpReportFilesPath.$exportedReportFile));
		$report = unserialize($serializedReport);
		fclose($descriptor);
		$availableReport = true;
		
		$report_data['record'] = $report['id'];
		$report_name = $report['report_name'];
		
		$report_data['report_charts'] = $report['report_charts'];
		$report_charts_engine = $report_data['report_charts_engine'] = $report['report_charts_engine'];
		
		$attachmentFormatArray = explode(':', $report['report_attachment_format']);
		$report_data['report_attachment_format'] = $attachmentFormatArray[0];
		
		$report_data['email_list'] = $report['email_list'];
		
		$scheduled_images = $report['scheduled_images'];
		$report_data['row_index_display'] = $report['row_index_display'];
		$results_limit = $report['results_limit'];
		
		$pdf_img_scaling_factor = $report['pdf_img_scaling_factor'];
		$columns = $report['headers'];
		$isDetailedReport = $report['isDetailedReport'];
		$isGroupedReport = $report['isGroupedReport'];
		$hasDisplayedCharts = $report['hasDisplayedCharts'];
		$hasGroupedTotalBelowColumn = $report['hasGroupedTotalBelowColumn'];
		
		$reportFields = $report['resultset'];
		$subTotals = $report['subTotals'];
		$totals = $report['headersTotals'];
		$rsTotals = $report['totals'];
		
		$columnsDataTypes = $report['columnsDataTypes'];
		$columnsDataVisible	= $report['columnsDataVisible'];
		$columnsDataWidths = $report['columnsDataWidths'];
		
		$currentReportCss = $report['currentReportCss'];

		$displayTitles = $report['displayTitles'];
		$displayHeaders = $report['displayHeaders'];
		$displayTotals = $report['displayTotals'];
		$displaySubtotals = $report['displaySubtotals'];


		//************************//
		//****Get Email Arrays****//
		//************************//
		$sendEmailquestion = asol_ReportsGenerationFunctions::getSendEmailAlert($report_data['email_list']);
		//************************//
		//****Get Email Arrays****//
		//************************//
			
			
		$data['num_pages'] = 0;
		$data['page_number'] = 0;
		$data['page_number_label'] = '1';
		$data['num_pages_label'] = '1';
		$data['total_entries'] = 1;
		
		
		if (isset($_REQUEST['png'])) {
			
			$filename = time().'.png';
			$somecontent = base64_decode($_REQUEST['png']);
		
			if ($handle = fopen($tmpReportFilesPath.$filename, 'w')){
				
				if (!fwrite($handle, $somecontent) === FALSE)
					fclose($handle);
			
				ob_clean();
				
				header("Content-type: image/png");
				header("Content-Disposition: attachment; filename=\"".$filename."\"");
				header("Content-Transfer-Encoding: binary");
				header("Content-Length: ".filesize($tmpReportFilesPath.$filename));
		
				readfile($tmpReportFilesPath.$filename); 
				
			}
			
			//Cabeceras y obtener el fichero
				
		}
		
		?>
		
		
		<html>
		
		<head>
		
		<?php
	
			if ($getLibraries) {
		
				if ($report_data['report_charts'] != "Tabl") {

					echo asol_ReportsCharts::getChartEngineLibraries($report_data['report_charts_engine'], false, false);

				}			
				
				echo '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>';
				echo '<script type="text/javascript">'.asol_ReportsManagementFunctions::getInitJqueryScriptHtml().'</script>';
				
				echo '<script type="text/javascript" src="cache/include/javascript/sugar_grp1_yui.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';
				echo '<script type="text/javascript" src="cache/include/javascript/sugar_grp1.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';
				echo '<script type="text/javascript" src="modules/asol_Reports/include/js/reports.min.js?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'"></script>';
				echo '<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include/css/style.css?version='.str_replace('.', '', asol_ReportsUtils::$reports_version).'">';

			}
		
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			if (!empty($currentReportCss)) {
				echo $currentReportCss;
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				
		?>	
		
		<script type="text/javascript">	
	
		function setScheduledCharts() {
		
			<?php 
			
			$urlChart = array();
			$html5Chart = array();
			$nvd3Chart = array();
				
			foreach ($reportCharts as $key=>$reportChart) {
				
				if ($report_data['report_charts_engine'] == 'flash') { //Flash 
				
			?>
				
					var flashvars = {};
					<?php echo 'flashvars.inputFile = "'.$reportChart['file'].'"'; ?>   
					flashvars.swfLocation = "include/SugarCharts/swf/";
					
					<?php 
						if (file_exists("themes/default/images/sugarColors.xml")) 
							echo 'flashvars.inputColorScheme = "themes/default/images/sugarColors.xml";';
						else 
							echo 'flashvars.inputColorScheme = "themes/'.$theme.'/images/sugarColors.xml";';
					?>
					
					flashvars.c = "1";
					
					<?php
						if (file_exists("cache/themes/Sugar/css/chart.css")) 
							echo 'flashvars.inputStyleSheet = "themes/default/css/chart.css";';
						else 
							echo 'flashvars.inputStyleSheet = "themes/'.$theme.'/css/chart.css";';
					?>
					
					flashvars.inputLanguage = "modules/asol_Reports/language/chart_strings.en_us.lang.xml";
					<?php
					
						$w = 600;
						$h = 400;
						
						if ($reportChart['type'] == 'BarChart')
				        	$w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*65) : $w;
				        	
				        if ($reportChart['type'] == 'LineChart')
				        	$w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*85) : $w;
				        	
				        if ($reportChart['type'] == 'StackChart')
				        	$w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*85) : $w;
				        
				        if ($reportChart['type'] == 'HorizontalChart')
				        	$h = ($reportChart['subGroups'] > $h/100) ? $h + ((($reportChart['subGroups']) -($h/100))*25) : $h;
				        	
				        	
				        $w = ($isDashlet) ? '100%' : $w;
		
				        echo 'flashvars.myWidth = "'.$w.'";';
				        echo 'flashvars.myHeight = "'.$h.'";';
				        	
			        ?> 
					
					var params = {};
					params.quality = "high";
					params.wmode = "transparent";
					params.menu = "false";
					params.allowscriptaccess = "always";
			
					var attributes = {};
						
				<?php 
		
					echo 'swfobject.embedSWF("include/SugarCharts/swf/ASOLchart.swf", "ASOLflash_'.str_replace("-", "", $report_data['record']).'_'.$key.'", "'.$w.'", "'.$h.'", "10.0.0", "", flashvars, params, attributes);'; 
				
					
				} else if ($report_data['report_charts_engine'] == 'html5') { //HTML5
					
					$reportType = explode(':', $report['report_type']);
					$isStoredReport = ($reportType[0] == 'stored') ? true : false;
					$tmpFilesDir = ($isStoredReport) ? "modules/asol_Reports/tmpReportFiles/storedReports/" : "modules/asol_Reports/tmpReportFiles/";
					
					$fileIdArray = explode("/", $reportChart['file']);
					$fileIdArray2 = explode(".", $fileIdArray[count($fileIdArray)-1]);
					$fileId = $fileIdArray2[0];
		
					$chartType = ($reportChart['type'] == 'PieChart') ? "pieChart" : "barChart";
					$chartParamType = ($reportChart['type'] == 'PieChart') ? "pieType" : "barType";
					$chartComplex = (in_array($reportChart['type'], array('StackChart', 'HorizontalChart', 'LineChart'))) ? "stacked" : "basic";
					
					if ($reportChart['type'] == 'HorizontalChart')
						$chartOrientation = 'chartConfig["orientation"] = "horizontal";';
					else if ($reportChart['type'] == 'StackChart')
						$chartOrientation = 'chartConfig["orientation"] = "vertical";';
					else
						$chartOrientation = '';
		
					if ($reportChart['type'] == 'PieChart')
						$chartTypeHtml5 = "pie chart";
					if ($reportChart['type'] == 'BarChart')
						$chartTypeHtml5 = "bar chart";
					if ($reportChart['type'] == 'StackChart')
						$chartTypeHtml5 = "stacked group by chart";
					if ($reportChart['type'] == 'HorizontalChart')
						$chartTypeHtml5 = "horizontal group by chart";
					if ($reportChart['type'] == 'LineChart')
						$chartTypeHtml5 = "line chart";
					if ($reportChart['type'] == 'FunnelChart')
						$chartTypeHtml5 = "funnel chart 3D";	
					
							
					$w = 600;
					$h = 400;
		
						
					if ($reportChart['type'] == 'BarChart')
				       	$w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*50) : $w;
				        	
				    if ($reportChart['type'] == 'LineChart')
					    $w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*50) : $w;
				       	
				    if ($reportChart['type'] == 'StackChart')
				       	$w = ($reportChart['subGroups'] > $w/100) ? $w + ((($reportChart['subGroups']) -($w/100))*50) : $w;
				        	
				    if ($reportChart['type'] == 'HorizontalChart')
				       	$h = ($reportChart['subGroups'] > $h/100) ? $h + ((($reportChart['subGroups']) -($h/100))*50) : $h;
						
				    $chart = new ReportsDashletChart($fileId);
		  
				    $w = ($isDashlet) ? '100%' : $w."px";
							        
					$html5Chart[] = array(
						"html" => $chart->display("", "", $reportChart['file'], $chartTypeHtml5, "100%", $h),
						"id" => $fileId,
						"dimensions" => array(
							"width" => $w,
							"height" => $h
						)
					);
					
										
					echo 'SUGAR.util.doWhen("((SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts) || SUGAR.loadChart || document.getElementById(\'showHideChartButton\') != null) && typeof(loadSugarChart) != undefined",
						function() {
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
					);';
				
				} else if ($report_data['report_charts_engine'] == 'nvd3') { //NVD3
		
					$w = 600;
					$h = 400;
					
					if (in_array($reportChart['type'], array('BarChart', 'LineChart', 'ScatterChart', 'StackChart', 'AreaChart', 'BubbleChart', 'ParallelChart')))
			        	$w = ($reportChart['subGroups'] > $w/100) ? $w + (($reportChart['subGroups'] -($w/100))*25) : $w;
			        	
			        if ($reportChart['type'] == 'HorizontalChart')
			        	$h = ($reportChart['subGroups'] > $h/100) ? $h + (($reportChart['subGroups'] -($h/100))*20) : $h;
				        	
			        $w = ($isDashlet) ? '100%' : $w."px";
	
			        
					$nvd3Chart[] = array(
						"html" => "<div id='ASOLnvd3Title_".str_replace("-", "", $report_data['record'])."_".$key."'></div>",
						"dimensions" => array(
							"width" => $w,
							"height" => $h
						)
					);
						
					echo file_get_contents($reportChart['file']);
		
					if ((!$isDashlet) && ($asolReportsResizableNVD3Charts))
					    echo '$("#ASOLnvd3_'.str_replace("-", "", $report_data['record']).'_'.$key.'").resizable({ alsoResize: "#ASOLsvg_'.str_replace("-", "", $report_data['record']).'_'.$key.'" });';
					
						
				}
	
				$urlChart[] = $reportChart['file'];
				
			}
		
		?>
	
		}
			
		</script>
		
		<?php
		
		echo asol_CommonUtils::getLoadJqueryScript(false, false, 'setScheduledCharts');
		
		if ($report['report_type'] == 'scheduled') {
			echo '<link href="modules/asol_Reports/include/css/'.$reportCssfile.'" type="text/css" rel="stylesheet">';
			echo '<link href="cache/themes/Sugar5/css/style.css" type="text/css" rel="stylesheet">';
		}
		
		?>
		
		</head>
		
		<?php

	}
	
}



//***********************************************//
//**************Display Report*******************//
//***********************************************//

$getExportData = false;
$justDisplay = true;
$filtersHiddenInputs = false;
$scheduledEmailHideButtons = true;
$hasVardefFilter = false;
$dashletExportButtons = (isset($sugar_config['asolReportsDashletExportButtons']) ? $sugar_config['asolReportsDashletExportButtons'] : true);

$dataVisibility = array(
	'field' => ($report_data['report_charts'] !== 'Char'),
	'filter' => ($report_data['report_charts'] !== 'Char'),
	'chart' => ($report_data['report_charts'] !== 'Tabl'),
);
	

$chartSubGroupsValues = array();

if ($availableReport) {
	
	$noDataReport = ((empty($reportCharts)) && (empty($reportFields)));
	
	if ($noDataReport && $isDashlet) {

		echo '
		<style>
			#dashletExport'.$dashletId.' {
				display: none;
			}
		</style>
		
		'.asol_CommonUtils::getCommonHideLoadingCss($dashletId).'
		
		<div id="reportDiv" class="alineasol_reports">
			<table id="reportTable" style="width: 100%">
				<tbody>
					<tr>
						<td><em>'.$mod_strings['LBL_REPORT_NO_RESULTS'].'</em></td>
					</tr>
				</tbody>
			</table>
		</div>';
		
	} else {
	
		echo asol_CommonUtils::getCommonHideLoadingCss($dashletId);
		include "modules/asol_Reports/include/DetailViewHttpSave.php";

	}
	
} else {

	echo '
	<style>
		#dashletExport'.$dashletId.' {
			display: none;
		}
	</style>
	
	'.asol_CommonUtils::getCommonHideLoadingCss($dashletId).'
			
	<div id="reportDiv" class="alineasol_reports">
		<table id="reportTable" style="width: 100%">
			<tbody>
				<tr>
					<td><em>'.$mod_strings['LBL_REPORT_NOT_AVAILABLE'].'</em></td>
				</tr>
			</tbody>
		</table>
	</div>';
	
}


//***********************************************//
//**************Display Report*******************//
//***********************************************//


?>