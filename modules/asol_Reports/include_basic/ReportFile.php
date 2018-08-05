<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/asol_Reports/tcpdf/config/lang/eng.php');
require_once('modules/asol_Reports/tcpdf/tcpdf.php');
require_once("modules/asol_Reports/include_basic/reportsUtils.php");


error_reporting(1); //E_ERROR  


function generateFile($displayTitles, $displayHeaders, $reportName, $module, $description, $headers, $resultset, $headersTotals, $totals, $subTotals, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $pdf_orientation, $pngs, $legendChart, $engineChart, $isHTML, $store, $pdf_img_scaling_factor, $reportDate, $userTZ, $rowIndex, $report_charts, $columnsDataTypes, $columnsDataFunctions, $columnsDataVisible, $columnsDataWidths, $currentReportCss, $domainId="") {
	
	//$pdf_img_scaling_factor solo usada para Exports & Emails
	global $sugar_config, $mod_strings, $current_language;
	
	$asolDefaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"])) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us";
	
	$current_language = (empty($current_language)) ? $asolDefaultLanguage : $current_language;	
	$mod_strings = return_module_language($current_language, "asol_Reports");
	
	$hasRowIndexDisplay = ($rowIndex == '1');
	$tableClass = ($isHTML ? 'htmlTable' : 'pdfTable');
		
	$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
	$currentDir = getcwd()."/";

	
	$idFile = preg_replace('/[^a-zA-Z0-9]/', '', $reportName)."_".date("Ymd")."T".date("His");
	
	
	asol_ReportsUtils::reports_log('asol', 'Generating '.($isHTML ? 'HTML' : 'PDF').': '.$idFile, __FILE__, __METHOD__, __LINE__);
	
	
	//GENERAMOS EL HTML
	$html = '';

	
	//Get the required css
	$cssURL = (is_file("modules/asol_Reports/include_basic/css/".$domainId.".css")) ? "modules/asol_Reports/include_basic/css/".$domainId.".css" : "modules/asol_Reports/include_basic/css/reports.css";
	

	//Get CSS file content
	ob_start() ;
	include($cssURL);
	$cssContent = ob_get_contents();
	ob_end_clean();
	$htmlCss = '<style>'.$cssContent.'</style>';
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	if (!empty($currentReportCss)) {
		$htmlCss .= $currentReportCss;
	}
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	
	//Get the required company logo
	if (is_file("modules/asol_Domains/logos/".$domainId.".png")) {
		$logoURL = "modules/asol_Domains/logos/".$domainId.".png";
	} else {
		$logoURL = (is_file("custom/themes/default/images/company_logo.png")) ? "custom/themes/default/images/company_logo.png" : "themes/default/images/company_logo.png";
	}
	
	
	if ($isHTML) {
	
		$moduleHeader = (!empty($module)) ? ' - '.$mod_strings['LBL_REPORT_MODULE_HEADER_LABEL'].' '.$module : '';
		
		$logoBase64 = 'data:image/png;base64,'.base64_encode(file_get_contents($logoURL));
		$html .= '<table class="header-title '.$tableClass.'"><tr><td rowspan="3"><img width="200px" src="'.$logoBase64.'"></td><td>'.$reportName.$moduleHeader.'</td></tr><tr><td>'.$description.'</td></tr><tr><td>'.date("Y-m-d H:i:s", $reportDate).' - '.$userTZ.'</td></tr></table>';
	
	}
	
	$htmlChart = '';
	
	if (count($pngs) > 0) {
		
		if ((count($resultset) > 0) && ($report_charts == 'Both')) {
			$htmlChart .= '<div style="page-break-after: always;">&nbsp;</div>';
		}
		
		$generatedChartImages = generateChartImages($isHTML, $pngs, $legendChart, $engineChart, $htmlCss);
		$storedCharts = $generatedChartImages['storedCharts'];
		$htmlCharts = $generatedChartImages['htmlCharts'];
		
		foreach ($htmlCharts as $key => $currentHtmlChart) {

			if ($isHTML) {
				$htmlChart .= '<br>';
			}
				
			$htmlChart .= $currentHtmlChart; 

			if (($key < (count($pngs)-1)) || ($report_charts == 'Htob')) {
				$htmlChart .= '<div style="page-break-after: always;">&nbsp;</div>';
			}
				
		}
		
	} 
		
	if (in_array($report_charts, array('Htob', 'Char')))
		$html .= $htmlChart;
		

	if ($report_charts != 'Char') {
		
		if ($displayTitles) {
			$html .= '<table class="'.$tableClass.'"><tbody>';
			$html .= '<tr><td class="header">'.$mod_strings['LBL_REPORT_RESULTS'].'</td></tr></tbody></table>';
		}
		
	} else {
		
		$rowIndex = '0';
		$headers = array();
		$resultset = array();
		
	}

	if (!$isDetailedReport) {

		$html .= '<table class="'.$tableClass.'"><tbody>';
		
		if ($displayHeaders) {
		
			$columns = '<tr>';
			
			if ($rowIndex == '1') {
				$dataType = 'index';
				$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
				
				$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
				
				$columns .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">N&deg;</th>';
			}
			
			foreach ($headers as $column) {
	
				$dataType = $columnsDataTypes[$column];
				$dataVisible = $columnsDataVisible[$column];
				$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
				
				$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
				$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' headerCellHidden '.$dataVisible : '');
				
				$columns .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$column.'</th>';
	
			}
				
			$columns .= '</tr>';
				
			$html .= $columns;
		
		}
		
		$cont = 0;
		
		if (count($resultset) == 0)
			$resultset = Array();
		
		foreach ($resultset as $row){
			
			$rowSet = '<tr>';
			
			if ($rowIndex == '1') {
				
				$dataType = 'index';
				$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
				
				$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
				$cellClasses .= ($cont%2 != 0 ? ' row-uneven' : ' row-even');
					
				$rowSet .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.($cont + 1).'</td>';
				
			}
						
			foreach ($row as $key=>$value){

				$dataType = $columnsDataTypes[$key];
  				$dataVisible = $columnsDataVisible[$key];
  				$dataWidthStyle = (isset($columnsDataWidths[$key]) ? 'width: '.$columnsDataWidths[$key].'%' : '');
  				
				$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
				$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' dataCellHidden '.$dataVisible : '');
				$cellClasses .= ($cont%2 != 0 ? ' row-uneven' : ' row-even');
											
				$rowSet .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$value.'</td>';	
					
			}
			
			$html .= $rowSet.'</tr>';
			
			$cont++;
			
		}
		
		if ($isGroupedReport && $hasGroupedTotalBelowColumn) {

			$html .=
			'<tr class="asolReportsGroupedTotal">';

			if ($hasRowIndexDisplay) {
				$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
				$html .= '<th class="totalCellInvisible" style="'.$dataWidthStyle.'"></th>';
			}
			
			foreach ($headers as $column) {
				
				foreach ($totals as $total) {
					
					$dataType = $columnsDataTypes[$column];
					$dataVisible = $columnsDataVisible[$column];
					$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
						
					if (isset($total[$column])) {
					
						$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
						$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
					
						$html .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$total[$column].'</th>';
						
					} else {
						
						$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
			  			$html .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
						
					}
					
				}
					
			}
			
			$html .=
			'</tr>';
									
		}
		
		$html .= '</tbody></table><br>';

	} else {
	
		$visibleHeaders = 0;
		foreach ($columnsDataVisible as $columnKey=>$columnsVisible) {
			$visibleHeaders += (in_array($columnsVisible, array('html', 'internal')) || (!$isGroupedReport && isset($columnsDataFunctions[$columnKey])) ? 0 : 1);
		}
		
		foreach ($resultset as $key=>$subGroup) {
			
			$html .= '<table class="'.$tableClass.'"><tbody>';
			
			$html .= '<tr><td class="header-group" colspan="'.($visibleHeaders + $rowIndex).'">'.strtoupper($key).'</td></tr>';
				
			if ($displayHeaders) {
			
				$columns = '<tr>';
			
				if ($rowIndex == '1') {
					$dataType = 'index';
					$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
					
					$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
					
					$columns .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">N&deg;</th>';
				}
					
				foreach ($headers as $column) {
	
					$dataType = $columnsDataTypes[$column];
					$dataVisible = $columnsDataVisible[$column];
					$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
					
					$cellClasses = 'data_header data_cell report_header report_cell data_header_'.$dataType.' data_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
					$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' headerCellHidden '.$dataVisible : '');
				
					$columns .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$column.'</th>';
	
				}
					
				$columns .= '</tr>';
					
				$html .= $columns;
			
			}
			
			$cont=0;
			foreach ($subGroup as $row) {
				
				$rowSet = '<tr>';
					
				if ($rowIndex == '1') {
					
					$dataType = 'index';
					$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
					
					$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
					$cellClasses .= ($cont%2 != 0 ? ' row-uneven' : ' row-even');
												
					$rowSet .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.($cont + 1).'</td>';
					
				}
					
				foreach ($row as $key2=>$value){
	
					$dataType = $columnsDataTypes[$key2];
	  				$dataVisible = $columnsDataVisible[$key2];
	  				$dataWidthStyle = (isset($columnsDataWidths[$key2]) ? 'width: '.$columnsDataWidths[$key2].'%' : '');
	  									
					$cellClasses = 'data_value data_cell report_value report_cell data_value_'.$dataType.' data_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
					$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' dataCellHidden '.$dataVisible : '');
					$cellClasses .= ($cont%2 != 0 ? ' row-uneven' : ' row-even');
					
					$rowSet .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$value.'</td>';	
						
				}
				$html .= $rowSet.'</tr>';
				
				$cont++;
				
			}
			
			if (!empty($subTotals)) {
					
				if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
			
					$html .=
					'<tr class="asolReportsGroupedTotal">';
			
					if ($hasRowIndexDisplay) {
						$html .= '<th class="totalCellInvisible"></th>';
					}
					
					foreach ($headers as $column) {
							
						$dataType = $columnsDataTypes[$column];
						$dataVisible = $columnsDataVisible[$column];
						$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
						
						if (isset($subTotals[$key][$column])) {
								
							$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
							$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
						
							$html .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$subTotals[$key][$column].'</th>';
							
						} else {
							
							$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
			  				$html .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
							
						}
							
					}
			
					$html .=
					'</tr>';
			
				}
				
			}
		
			$html .= '</tbody></table>';
			
			// Subtotals beginning
			
			
			if (!empty($subTotals)) {
			
				if (!$isGroupedReport || !$hasGroupedTotalBelowColumn) {
				
					$html .= '<table class="'.$tableClass.'"><tbody>';
									
					$html .= '<tr>';
					$html .= '<td class="header-subtotal" rowspan="2" style="width: 20%;">'.$key.' '.$mod_strings['LBL_REPORT_SUBTOTALS'].'</td>';
					
					if ($displayHeaders) {
					
						$columnsTotals = '';

						foreach ($headersTotals as $columnTotal) {

							$dataType = $columnsDataTypes[$columnTotal['alias']];
		  					$dataVisible = $columnsDataVisible[$columnTotal['alias']];

		  					
							$cellClasses = 'subtotal_header subtotal_cell report_header report_cell subtotal_header_'.$dataType.' subtotal_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
							$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' subHeaderCellHidden '.$dataVisible : '');
							
							$columnsTotals .= '<td class="'.$cellClasses.'" style="width: '.(80/count($headersTotals)).'%">'.$columnTotal["alias"].'</td>';
						}
					
						$html .= $columnsTotals;
						
					}
					
					$html .= '</tr>';
				
					
					$rowTotals = '<tr>';
					
					if (empty($subTotals[$key]))
						$subTotals[$key] = array();
					
					foreach ($subTotals[$key] as $key5=>$value) {
						$dataType = $columnsDataTypes[$key5];
			  			$dataVisible = $columnsDataVisible[$key5];
			  									
						$cellClasses = 'subtotal_value subtotal_cell report_value report_cell subtotal_value_'.$dataType.' subtotal_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
						$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' subtotalCellHidden '.$dataVisible : '');
												
						$rowTotals .= '<td class="'.$cellClasses.'">'.$value.'</td>';
					}
					
					$html .= $rowTotals.'</tr>';
										
					$html .= '</tbody></table>';
					
				}
				// Subtotals end
				
				$html .= '<br/>';
				
			}
		
		}
		
	}

	// Totals beginning
	$displayTotals = (!empty($totals));
	if ($displayTotals && ($isDetailedReport || !$isGroupedReport || !$hasGroupedTotalBelowColumn)) {
		
		$html .= '<br>';
				
		if ($displayTitles) {
			$html .= '<table class="'.$tableClass.'"><tbody>'; 
			$html .= '<tr><td class="header">'.$mod_strings['LBL_REPORT_TOTALS'].'</td></tr></tbody></table>';
		}
		
		$html .= '<table class="'.$tableClass.'"><tbody>';
		
		if ($displayHeaders) {
		
			if ($isGroupedReport && $hasGroupedTotalBelowColumn) {

				$columnsTotals .=
					'<tr class="asolReportsGroupedTotal">';
				
				if ($rowIndex == '1') {
					$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
					$columnsTotals .= '<th class="totalCellInvisible" style="'.$dataWidthStyle.'"></th>';
				}
				
				foreach ($headers as $column) {

					foreach ($totals as $total) {

						$dataType = $columnsDataTypes[$column];
						$dataVisible = $columnsDataVisible[$column];
						$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
				
						if (isset($total[$column])) {
				
							$cellClasses = 'total_header total_cell report_header report_cell total_header_'.$dataType.' total_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
							$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
				
							$columnsTotals .= '<th class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$column.'</th>';
				
						} else {
				
							$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
							$columnsTotals .= '<th class="'.$cellClass.'" style="'.$dataWidthStyle.'"></th>';
				
						}
					
					}
			
				}
				
				$columnsTotals .=
					'</tr>';
				
			} else {
				
				$columnsTotals = '<tr>';
					
				foreach ($headersTotals as $totalColumn){
					
					$dataType = $columnsDataTypes[$totalColumn['alias']];
					$dataVisible = $columnsDataVisible[$totalColumn['alias']];
					
					$cellClasses = 'total_header total_cell report_header report_cell total_header_'.$dataType.' total_cell_'.$dataType.' report_header_'.$dataType.' report_cell_'.$dataType;
					$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalHeaderCellHidden '.$dataVisible : '');
		
					$columnsTotals .= '<th class="'.$cellClasses.'">'.$totalColumn["alias"].'</th>';
			
				}
					
				$columnsTotals .= '</tr>';
		
			}
				
			$html .= $columnsTotals;
		
		}
			

		if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
			
			$rowTotals = '<tr class="asolReportsGroupedTotal">';
			
			if ($rowIndex == '1') {
				$dataWidthStyle = 'width: '.$columnsDataWidths['rowIndexDisplay'].'%';
				$rowTotals .= '<td class="totalCellInvisible" style="'.$dataWidthStyle.'"></td>';
			}
			
			foreach ($headers as $column) {
			
				foreach ($totals as $total) {
			
					$dataType = $columnsDataTypes[$column];
					$dataVisible = $columnsDataVisible[$column];
					$dataWidthStyle = (isset($columnsDataWidths[$column]) ? 'width: '.$columnsDataWidths[$column].'%' : '');
			
					if (isset($total[$column])) {
			
						$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
						$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
			
						$rowTotals .= '<td class="'.$cellClasses.'" style="'.$dataWidthStyle.'">'.$total[$column].'</td>';
			
					} else {
			
						$cellClass = (in_array($dataVisible, array('html', 'internal')) ? 'totalCellHidden' : 'totalCellInvisible');
						$rowTotals .= '<td class="'.$cellClass.'" style="'.$dataWidthStyle.'"></td>';
			
					}
						
				}
					
			}
			
			$rowTotals .= '</tr>';
			
		} else {
		
			$rowTotals = '<tr>';
				
			foreach ($totals as $total) {
						
				foreach ($total as $key=>$value) {
					
					$dataType = $columnsDataTypes[$key];
	    			$dataVisible = $columnsDataVisible[$key];
	    				
					$cellClasses = 'total_value total_cell report_value report_cell total_value_'.$dataType.' total_cell_'.$dataType.' report_value_'.$dataType.' report_cell_'.$dataType;
					$cellClasses .= (in_array($dataVisible, array('html', 'internal')) ? ' totalCellHidden '.$dataVisible : '');
					
					$rowTotals .= '<td class="'.$cellClasses.'">'.$value.'</td>';
	
				}
					
			}
			
			$rowTotals .= '</tr>';

		}
				
		$html .= $rowTotals;
		$html .= '</tbody></table>';
	
	}
	// Totals end
		
	if ($report_charts == 'Both')
		$html .= $htmlChart;
	
		
	if ($isHTML) {
		
		$idFile .= ".html";
		
		$html = "<html><head><meta charset='UTF-8'></head><body>".$htmlCss.$html."</body></html>";
		
		$descriptor = fopen($currentDir.$tmpFilesDir.$idFile, "w");
		fwrite($descriptor, $html);
		fclose($descriptor);
		
		if (!$store) {
			
			header("Content-type: application/force-download");
	        header("Content-Disposition: attachment; filename=\"".$idFile."\"");
	        header("Content-Transfer-Encoding: binary");
	        header("Content-Length: ".filesize($tmpFilesDir.$idFile));
	
	        readfile($tmpFilesDir.$idFile); 
		    
	        //Eliminamos ficheros tmp
		    unlink($tmpFilesDir.$idFile);
	        
		} else {
			
			//Almacenar el html y devolver la ruta y nombre del fichero
			return $idFile;
			
		}
		
	} else {
		
		$idFile .= ".pdf"; 
		
		asol_ReportsUtils::reports_log('asol', 'Instantiating and configuring PDF', __FILE__, __METHOD__, __LINE__);
			
		//Define ASOL images base path
		define('ASOL_PATH_IMAGES', $currentDir);
		
		$tcpdf_orientation = ($pdf_orientation == "landscape") ? 'L' : 'P';		
		$pdf = new TCPDF($tcpdf_orientation, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
		$pdf->SetCreator(PDF_CREATOR);
					
		// set default header data
		$moduleHeader = (!empty($module)) ? ' - '.$mod_strings['LBL_REPORT_MODULE_HEADER_LABEL'].' '.$module : '';
		
		$pdfTitle = $reportName.$moduleHeader;
		$pdfSubtitle = date("Y-m-d H:i:s", $reportDate)." - ".$userTZ;
		$logoImageWidth = 40;
		
		
		$pdf->SetHeaderData($logoURL, $logoImageWidth, $pdfTitle, $pdfSubtitle);
	
		
		if (isset($sugar_config["asolReportsExportPdfFontTTF"])) {
			
			$fontName = $sugar_config["asolReportsExportPdfFontTTF"];
			    
			if (!file_exists('modules/asol_Reports/tcpdf/fonts/'.$fontName.'.php')) {
			
				$pdf->addTTFfont('modules/asol_Reports/tcpdf/fonts/'.$fontName.'.ttf', 'TrueTypeUnicode', '', 32);
		
			}
		    
		} else {
			
			$fontName = 'Helvetica';
		
		}
		
		
		// set header and footer fonts
		$pdf->setHeaderFont(array($fontName, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(array($fontName, '', PDF_FONT_SIZE_DATA));
		
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont($fontName);
		
		//set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		//set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		//set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		
		asol_ReportsUtils::reports_log('asol', 'Loading HTML with PDF', __FILE__, __METHOD__, __LINE__);
			
		
		if (isset($sugar_config["asolReportsExportReplaceByEmptyString"])) {
		
			foreach ($sugar_config["asolReportsExportReplaceByEmptyString"] as $token)
				$html = str_replace($token, "", $html);
		
		}
		
	    $pdf->SetFont($fontName, '', 8, '', true);
	    

	    $pdf->AddPage();

		$pdf->writeHTML($htmlCss.$html, true, false, true, false);
		$pdf->lastPage();
		$pdf->Output($currentDir.$tmpFilesDir.$idFile, 'F');	
		
		if (isset($storedCharts)) {
			foreach ($storedCharts as $key=>$chart){				
				unlink($chart);
			}
		}
		
		return $idFile;
	
	}
	
}

function generateChartImages($isHTML, $pngs, $legendChart, $engineChart, $htmlCss) {
	
	global $sugar_config;
	
	$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
	$today = dechex(time()).dechex(rand(0,999999));
	$tableClass = ($isHTML ? 'htmlTable' : 'pdfTable');
	
	$storedCharts = array();
	$htmlCharts = array();
	
	foreach ($pngs as $key => $png) {
	
		switch ($engineChart[$key]) {
	
			case "flash":
			case "html5":
				if ($isHTML) {
					$imgData = (strpos($png, "data:image/png;base64,") !== false) ? $png : "data:image/png;base64,".$png;
				} else {
					$somecontent = base64_decode(str_replace("data:image/png;base64,", "", $png));
					$filename = $key."_".$today.'.png';
					if ($handle = fopen($tmpFilesDir.$filename, 'w+')) {
						if (!fwrite($handle, $somecontent) === FALSE) {
							fclose($handle);
						}
					}
					$storedCharts[] = $imgData = $tmpFilesDir.$filename;
				}
					
				$htmlChart = '<table class="'.$tableClass.'"><tbody><tr><td><img class="chart-img" src="'.$imgData.'"></td></tr></tbody></table>';
				if (!empty($legendChart[$key])) {
					$htmlChart .= '<table class="'.$tableClass.'"><tbody><tr><td><div class="legend">'.urldecode($legendChart[$key]).'</div></td></tr></tbody></table>';
				}
					
				break;
	
			case "nvd3":
				if (!$isHTML) {
					
					if ((isset($sugar_config["asolReportsPhantomJsFilePath"])) && (is_file($sugar_config["asolReportsPhantomJsFilePath"]))) {
						$svgData = '<html><body>'.$htmlCss.str_replace("'", "\"", urldecode($png)).'</body></html>';
							
						if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	
							$fileSVGname = $key."_".$today.'.svg.html';
	
							if ($handle = fopen($tmpFilesDir.$fileSVGname, 'w'))
								if (!fwrite($handle, $svgData) === FALSE) {
									fclose($handle);
								}
								$svgImgFile = $tmpFilesDir.$fileSVGname;
	
								$somecontent = base64_decode(shell_exec($sugar_config["asolReportsPhantomJsFilePath"].' modules/asol_Reports/include_basic/js/phantomjs/rasterizeBase64.js '.$svgImgFile));
	
								unlink($svgImgFile);
	
						} else {
	
							$somecontent = base64_decode(shell_exec($sugar_config["asolReportsPhantomJsFilePath"].' modules/asol_Reports/include_basic/js/phantomjs/renderSVGtags.js \''.$svgData.'\''));
	
						}
	
						$filename = $key."_".$today.'.png';
						if ($handle = fopen($tmpFilesDir.$filename, 'w')) {
							if (!fwrite($handle, $somecontent) === FALSE) {
								fclose($handle);
							}
						}
						$storedCharts[] = $imgData = $tmpFilesDir.$filename;
						$htmlChart = '<table class="'.$tableClass.'"><tbody><tr><td>'.urldecode($legendChart[$key]).'</td></tr><tr><td><img class="chart-img" src="'.$imgData.'"></td></tr></tbody></table>';
	
					} else {
	
						$htmlChart = '<table class="'.$tableClass.'"><tbody><tr><td>Download <a href="http://phantomjs.org/">phantomJS</a> to render SVG images with TCPDF</td></tr></tbody></table>';
	
					}
					
				} else {
	
					$htmlChart = '<table class="'.$tableClass.'"><tbody><tr><td>'.urldecode($legendChart[$key]).'</td></tr><tr><td>'.urldecode($png).'</td></tr></tbody></table>';
	
				}
					
				break;
	
		}
	
		$htmlCharts[] = $htmlChart;
		
	}

	return array(
		'htmlCharts' => $htmlCharts,
		'storedCharts' => $storedCharts
	);

}

?>
