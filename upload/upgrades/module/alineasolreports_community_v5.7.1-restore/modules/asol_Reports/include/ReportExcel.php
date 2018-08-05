 <?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("modules/asol_Reports/include/server/reportsUtils.php");


error_reporting(1); //E_ERROR 


function generateCsv($fileConfig, $reportName, $headers, $resultset, $resultsetNoFormat, $headersTotals, $totals, $subTotals, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $returnData, $rowIndex, $columnsDataTypes, $columnsDataVisible, $removeLineBreaks=false, $removeTitles=false, $removeHeaders=false, $removeQuotes=false, $removeTotals=false) {
	
	global $sugar_config, $mod_strings, $current_language;
	
	$numericTypes = array('int', 'bigint', 'decimal', 'double');
	$unformattedTypes = array('bool', 'headerButton', 'noHeaderButton');
	
	$asolDefaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"])) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us";
	$current_language = (empty($current_language)) ? $asolDefaultLanguage : $current_language;
	$mod_strings = return_module_language($current_language, "asol_Reports");
	
	$hasRowIndexDisplay = ($rowIndex == '1');
	
	$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
	$currentDir = getcwd()."/";
	
	$exportCsvDelimiter = (isset($sugar_config["asolReportsCsvDelimiter"])) ? $sugar_config["asolReportsCsvDelimiter"] : ",";
	
	
	$idFile = preg_replace('/[^a-zA-Z0-9]/', '', $reportName)."_".date("Ymd")."T".date("His").".csv";
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array('fileConfig' => $fileConfig);
	$newFileId = asol_ReportsUtils::managePremiumFeature("generatedFileFormat", "reportFunctions.php", "getGeneratedFileName", $extraParams);
	$idFile = ($newFileId !== false ? $newFileId.".csv" : $idFile);
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	
	$excelFile = "";
		
	if (!$removeTitles) {
		$excelFile .= strtoupper($reportName)."\n\n\n\n";
		$excelFile .= $mod_strings['LBL_REPORT_RESULTS']."\n\n";
	}
		
	if (!$removeHeaders) {
	
		$columns = "";
			
		if (($rowIndex == '1') && !$removeHeaders) {
			$columns .= "N".$exportCsvDelimiter;
		}
			
		if ($isDetailedReport && $removeTitles) {
			$columns .= "Detail Key".$exportCsvDelimiter;
		}
		
		foreach ($headers as $column) {
			$dataVisible = $columnsDataVisible[$column];
			if (!in_array($dataVisible, array('html', 'internal'))) {
				$columns .= $column.$exportCsvDelimiter;
			}
		}
			
		$columns = substr($columns, 0, -1);
			
		$excelFile .= $columns."\n";
	
	}
	
	if (!$removeLineBreaks) {
		$excelFile .= "\n\n";
	}
		
	if (!$isDetailedReport) {
		
		$cont = 1;
		
		foreach ($resultset as $key0=>$row) {
			
			$rowSet = "";
			
			if ($rowIndex == '1') {
				$rowSet .= ($removeQuotes ? $cont.$exportCsvDelimiter : "\"".$cont."\"".$exportCsvDelimiter);
			}

			foreach ($row as $column=>$value) {
				$dataVisible = $columnsDataVisible[$column];
				$dataType = $columnsDataTypes[$column];
				if (!in_array($dataVisible, array('html', 'internal'))) {
					
					if (in_array($dataType, $unformattedTypes)) {
						$value = $resultsetNoFormat[$key0][$column];
					}
					
					$hasNoQuotes = ($removeQuotes || in_array($dataType, $numericTypes));
					$rowSet .= ($hasNoQuotes ? preg_replace("/[\n|\r|\n\r]/i", ' ', $value).$exportCsvDelimiter : "\"".preg_replace("/[\n|\r|\n\r]/i", ' ', $value)."\"".$exportCsvDelimiter);
				}
			}
			
			$rowSet = substr($rowSet, 0, -1);
			
			$excelFile .= $rowSet."\n";
			
			$cont++;
			
		}
		
		if ($isGroupedReport && $hasGroupedTotalBelowColumn) {

			$rowSet = "";
			
			if ($hasRowIndexDisplay) {
				$rowSet .= $exportCsvDelimiter;
			}
			
			foreach ($headers as $column) {
				$dataVisible = $columnsDataVisible[$column];
				if (!in_array($dataVisible, array('html', 'internal'))) {
					foreach ($totals as $total) {
						$rowSet .= ($removeQuotes ? (isset($total[$column]) ? $total[$column] : "").$exportCsvDelimiter : "\"".(isset($total[$column]) ? $total[$column] : "")."\"".$exportCsvDelimiter);
					}
				}
			}
			
			$rowSet = substr($rowSet, 0, -1);
			
			$excelFile .= $rowSet."\n";
									
		}

		if (!$removeLineBreaks) {
			$excelFile .= "\n\n\n";
		}
		
	} else {
		
		foreach ($resultset as $key=>$subGroup) {
			
			if (!$removeTitles) {
				$excelFile .= $key."\n";
			}
				
			$cont= 1;
			
			foreach ($subGroup as $key0=>$row) {
				
				$rowSet = "";
				
				if ($rowIndex == '1') {
					$rowSet .= ($removeQuotes ? $cont.$exportCsvDelimiter : "\"".$cont."\"".$exportCsvDelimiter);
				}
				
				if ($removeTitles) {
					$rowSet .= ($removeQuotes ? $key.$exportCsvDelimiter : "\"".$key."\"".$exportCsvDelimiter);
				}
					
				foreach ($row as $column=>$value){
					$dataVisible = $columnsDataVisible[$column];
					$dataType = $columnsDataTypes[$column];
					if (!in_array($dataVisible, array('html', 'internal'))) {
						
						if (in_array($dataType, $unformattedTypes)) {
							$value = $resultsetNoFormat[$key0][$column];
						}
						
						$hasNoQuotes = ($removeQuotes || in_array($dataType, $numericTypes));
						$rowSet .= ($hasNoQuotes ? preg_replace("/[\n|\r|\n\r]/i", ' ', $value).$exportCsvDelimiter : "\"".preg_replace("/[\n|\r|\n\r]/i", ' ', $value)."\"".$exportCsvDelimiter);
					}
				}
				
				$rowSet = substr($rowSet, 0, -1);
			
				$excelFile .= $rowSet."\n";
				
				$cont++;
				
			}
			
			// Subtotals beginning
			if (!empty($subTotals) && !$removeTotals) {
				
				if ($isGroupedReport && $hasGroupedTotalBelowColumn) {

					$rowTotals = "";
					
					if (empty($subTotals[$key])) {
						$subTotals[$key] = array();
					}
					
					if ($hasRowIndexDisplay) {
						$rowTotals .= $exportCsvDelimiter;
					}
					
					foreach ($headers as $column) {
						$dataVisible = $columnsDataVisible[$column];
						if (!in_array($dataVisible, array('html', 'internal'))) {
							$rowTotals .= ($removeQuotes ? (isset($subTotals[$key][$column]) ? $subTotals[$key][$column] : '').$exportCsvDelimiter : "\"".(isset($subTotals[$key][$column]) ? $subTotals[$key][$column] : '')."\"".$exportCsvDelimiter);
						}
					}
					
					$excelFile .= $rowTotals."\n";
						
				} else {
				
					if (!$removeTitles) {
						$excelFile .= "\n".$key." ".$mod_strings['LBL_REPORT_SUBTOTALS']."\n";
					}
				
					if (!$removeHeaders) {
						
						$columnsTotals = "";
				
						foreach ($headersTotals as $columnTotal){	
							$columnsTotals .= $columnTotal["alias"]."".$exportCsvDelimiter;
						}
							
						$columnsTotals = substr($columnsTotals, 0, -1);

						$excelFile .= $columnsTotals;
						$excelFile .= "\n";
						
					}
							
					$rowTotals = "";
					
					if (empty($subTotals[$key])) {
						
						$subTotals[$key] = array();
						
					}
						
					foreach ($subTotals[$key] as $value){
						
						$rowTotals .= ($removeQuotes ? $value.$exportCsvDelimiter : "\"".$value."\"".$exportCsvDelimiter);
						
					} 

					$excelFile .= $rowTotals."\n";
					
				}
				
				if (!$removeLineBreaks) {
					$excelFile .= "\n";
				}
				
			}
			// Subtotals end
			
			if (!$removeLineBreaks) {
				$excelFile .= "\n";
			}
			
		}
		
		if (!$removeLineBreaks) {
			$excelFile .= "\n\n";
		}
		
	}
	
	// Totals beginning
	$displayTotals = (!empty($totals));
	if ($displayTotals && !$removeTotals && ($isDetailedReport || !$isGroupedReport || !$hasGroupedTotalBelowColumn)) {
	
		if (!$removeTitles) {
			$excelFile .= $mod_strings['LBL_REPORT_TOTALS']."\n\n";
		}
		
		if (!$removeHeaders) {
		
			$columnsTotals = "";
				
			foreach ($headersTotals as $columnTotal){
					
				$columnsTotals .= $columnTotal["alias"].$exportCsvDelimiter;
					
			}
				
			$columnsTotals = substr($columnsTotals, 0, -1);
				
			$excelFile .= $columnsTotals."\n";
			
		}
		
		$rowTotals = "";
			
		foreach ($totals as $total) {
				
			foreach ($total as $value) {
				
				$rowTotals .= ($removeQuotes ? $value.$exportCsvDelimiter : "\"".$value."\"".$exportCsvDelimiter);
					
			}
				
		}
				
		$rowTotals = substr($rowTotals, 0, -1);
				
		$excelFile .= $rowTotals;
		
	}
	// Totals end

	if (isset($sugar_config["asolReportsExportReplaceByEmptyString"])) {
	
		foreach ($sugar_config["asolReportsExportReplaceByEmptyString"] as $token)
			$excelFile = str_replace($token, "", $excelFile);
	
	}
	
	$excelFile = html_entity_decode($excelFile, ENT_QUOTES, 'UTF-8');
	
	 //formateamos el fichero a codificacion que pueda leer CSV

	if (isset($fileConfig['encoding']) && !empty($fileConfig['encoding'])) {

		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$extraParams = array('fileConfig' => $fileConfig, 'excelFile'=>$excelFile);
		$encodedExcelFile = asol_ReportsUtils::managePremiumFeature("generatedFileFormat", "reportFunctions.php", "getFileEncodingCsv", $extraParams);
		$excelFile = ($encodedExcelFile !== false ? $encodedExcelFile : $excelFile);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
	} else if (isset($sugar_config["asolReportsCsvCodification"])) {
	
    	$bomCharacters = ($sugar_config["asolReportsCsvCodification"] === 'UTF-8' ? "\xEF\xBB\xBF" : "");
		$excelFile = $bomCharacters.(iconv("UTF-8", $sugar_config["asolReportsCsvCodification"]."//TRANSLIT//IGNORE", $excelFile) === false ? $excelFile : iconv("UTF-8", $sugar_config["asolReportsCsvCodification"]."//TRANSLIT//IGNORE", $excelFile));
	
	}
    	
	if ($returnData) {
	
		return $excelFile;
		
	} else { 
	
	    $descriptor = fopen($currentDir.$tmpFilesDir.$idFile, "w");
				
		fwrite($descriptor, $excelFile);
		fclose($descriptor);
		return $idFile;
    
	}
	
}


function generateXls($fileConfig, $reportName, $headers, $resultset, $resultsetNoFormat, $headersTotals, $totals, $subTotals, $isDetailedReport, $isGroupedReport, $hasGroupedTotalBelowColumn, $returnData, $rowIndex, $columnsDataTypes, $columnsDataVisible, $removeLineBreaks=false, $removeTitles=false, $removeHeaders=false, $removeQuotes=false, $removeTotals=false){

	require_once('modules/asol_Reports/PHPExcel/PHPExcel.php');
	//require_once('modules/asol_Reports/PHPExcel/PHPExcel/Writer/Excel2007.php');
	require_once('modules/asol_Reports/PHPExcel/PHPExcel/IOFactory.php');
	
	global $sugar_config, $mod_strings, $current_language;
	
	$numericTypes = array('int', 'bigint', 'decimal', 'double');
	$unformattedTypes = array('bool', 'headerButton', 'noHeaderButton');
	
	$asolDefaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"])) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us";
	$current_language = (empty($current_language)) ? $asolDefaultLanguage : $current_language;
	$mod_strings = return_module_language($current_language, "asol_Reports");
	
	$hasRowIndexDisplay = ($rowIndex == '1');
	
	$tmpFilesDir = "modules/asol_Reports/tmpReportFiles/";
	$currentDir = getcwd()."/";
	
	
	$idFile = preg_replace('/[^a-zA-Z0-9]/', '', $reportName)."_".date("Ymd")."T".date("His").".xls";
	
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$extraParams = array('fileConfig' => $fileConfig);
	$newFileId = asol_ReportsUtils::managePremiumFeature("generatedFileFormat", "reportFunctions.php", "getGeneratedFileName", $extraParams);
	$idFile = ($newFileId !== false ? $newFileId.".xls" : $idFile);
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	
	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();
	
	// Set properties
	$objPHPExcel->getProperties()->setTitle($reportName);
	$objPHPExcel->getProperties()->setSubject($reportName);
	
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	
	$arrangedReportName = preg_replace('/[^a-zA-Z0-9 ]/', '', $reportName);
	$objPHPExcel->getActiveSheet()->setTitle(substr($arrangedReportName, 0, 30));
	
	
	$currentLetter = 'A';
	$currentNumber = 1;
	
	if (!$removeTitles) {
		$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, strtoupper($reportName));
		$currentNumber += 4;
		$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $mod_strings['LBL_REPORT_RESULTS']);
		$currentNumber += 2;
	}
	
	
	//***Headers***//
	if (!$removeHeaders) {
	
		$currentLetter = 'A';
		
		if (($rowIndex == '1') && !$removeHeaders) {
			$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, 'N');
			$currentLetter = 'B';
		}
			
		if ($isDetailedReport && $removeTitles) {
			$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, 'Detail Key');
			$currentLetter = ($currentLetter == 'A' ? 'B' : 'C');
		}
	
		foreach ($headers as $column) {
			$dataVisible = $columnsDataVisible[$column];
			if (!in_array($dataVisible, array('html', 'internal'))) {
				$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $column);
				$currentLetter++;
			}
		}
	
	}
	//***Headers***//
	
	
	if (!$removeLineBreaks) {
		$currentNumber += 2;
	}
	
	
	if (!$isDetailedReport) {
		
		$cont = 1;
		$currentNumber++;
		
		foreach ($resultset as $key0=>$row) {

			$currentLetter = 'A';
			
			if ($rowIndex == '1') {
				$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $cont);
				$currentLetter++;
			}
			
			foreach ($row as $column=>$value) {
				$dataVisible = $columnsDataVisible[$column];
				$dataType = $columnsDataTypes[$column];
				if (!in_array($dataVisible, array('html', 'internal'))) {
					if (isset($sugar_config["asolReportsExportReplaceByEmptyString"])) {
						foreach ($sugar_config["asolReportsExportReplaceByEmptyString"] as $token)
							$value = str_replace($token, "", $value);
					}
					
					if (in_array($dataType, $unformattedTypes)) {
						$value = $resultsetNoFormat[$key0][$column];
					}
					
					            		
					$excelType = (in_array($dataType, $numericTypes) ? PHPExcel_Cell_DataType::TYPE_NUMERIC : PHPExcel_Cell_DataType::TYPE_STRING);
					
					if($excelType === PHPExcel_Cell_DataType::TYPE_NUMERIC ){

						$value = asol_CommonUtils::unformatNumber($value);
					}
					
					$objPHPExcel->getActiveSheet()->setCellValueExplicit($currentLetter.$currentNumber,  preg_replace("/[\n|\r|\n\r]/i", ' ', html_entity_decode($value, ENT_QUOTES, 'UTF-8')), $excelType);								
					$currentLetter++;
				}
			}

			$currentNumber++;
			$cont++;
			
		}
		
		if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
		
			$currentLetter = 'A';

			if ($hasRowIndexDisplay) {
				$currentLetter++;
			}
			
			foreach ($headers as $column) {
				$dataVisible = $columnsDataVisible[$column];
				$dataType = 'string';
				if (!in_array($dataVisible, array('html', 'internal'))) {
					foreach ($totals as $total) {
						$excelType = (in_array($dataType, $numericTypes) ? PHPExcel_Cell_DataType::TYPE_NUMERIC : PHPExcel_Cell_DataType::TYPE_STRING);
						
						$value =  preg_replace("/[\n|\r|\n\r]/i", ' ', html_entity_decode((isset($total[$column]) ? $total[$column] : ""), ENT_QUOTES, 'UTF-8'));
						
						if($excelType === PHPExcel_Cell_DataType::TYPE_NUMERIC ){
						
							$value = asol_CommonUtils::unformatNumber($value);
						}
						
						$objPHPExcel->getActiveSheet()->setCellValueExplicit($currentLetter.$currentNumber,$value, $excelType);
						$currentLetter++;
					}
				}
			}
				
			$currentNumber++;
				
		}

		if (!$removeLineBreaks) {
			$currentNumber += 3;
		}
		
	} else {
		
		$currentNumber++;
		
		foreach ($resultset as $key=>$subGroup) {
			
			$currentLetter = 'A';
			
			if (!$removeTitles) {
				$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $key);
				$currentNumber++;
			}
			
			$cont= 1;
			
			foreach ($subGroup as $key0=>$row) {

				$currentLetter = 'A';
				
				if ($rowIndex == '1') {
					$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $cont);
					$currentLetter++;
				}
				
				if ($removeTitles) {
					$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $key);
					$currentLetter++;
				}

				foreach ($row as $column=>$value) {
					$dataVisible = $columnsDataVisible[$column];
					$dataType = $columnsDataTypes[$column];
					if (!in_array($dataVisible, array('html', 'internal'))) {
						if (isset($sugar_config["asolReportsExportReplaceByEmptyString"])) {
							foreach ($sugar_config["asolReportsExportReplaceByEmptyString"] as $token)
								$value = str_replace($token, "", $value);
						}
						
						if (in_array($dataType, $unformattedTypes)) {
							$value = $resultsetNoFormat[$key0][$column];
						}
						
						$excelType = (in_array($dataType, $numericTypes) ? PHPExcel_Cell_DataType::TYPE_NUMERIC : PHPExcel_Cell_DataType::TYPE_STRING);
						
						$value =  preg_replace("/[\n|\r|\n\r]/i", ' ', html_entity_decode($value, ENT_QUOTES, 'UTF-8'));
						
						if($excelType === PHPExcel_Cell_DataType::TYPE_NUMERIC ){
						
							$value = asol_CommonUtils::unformatNumber($value);
						}
						
						$objPHPExcel->getActiveSheet()->setCellValueExplicit($currentLetter.$currentNumber,$value, $excelType);
						$currentLetter++;
					}
				}
				
				$currentNumber++;
				$cont++;
				
			}
			
			// Subtotals beginning
			if (!empty($subTotals) && !$removeTotals) {
				
				if ($isGroupedReport && $hasGroupedTotalBelowColumn) {
				
					$currentLetter = 'A';
					$subTotals[$key] = (empty($subTotals[$key]) ? array() : $subTotals[$key]);
					
					if ($hasRowIndexDisplay) {
						$currentLetter++;
					}
					
					foreach ($headers as $column) {
						$dataVisible = $columnsDataVisible[$column];
						if (!in_array($dataVisible, array('html', 'internal'))) {
							$objPHPExcel->getActiveSheet()->setCellValue($currentLetter.$currentNumber, (isset($subTotals[$key][$column]) ? $subTotals[$key][$column] : ''));
							$currentLetter++;
						}
					}
				
				} else {
				
					$currentLetter = 'A';
					
					if (!$removeTitles) {
						$currentNumber++;
						$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $key." ".$mod_strings['LBL_REPORT_SUBTOTALS']);
						$currentNumber++;
					}
					
					if (!$removeHeaders) {
					
						foreach ($headersTotals as $columnTotal) {
							$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $columnTotal["alias"]);
						}
						$currentNumber++;
						
					}
	

					$currentLetter = 'A';	
					$subTotals[$key] = (empty($subTotals[$key]) ? array() : $subTotals[$key]);	
					
					foreach ($subTotals[$key] as $value) {
						
						$objPHPExcel->getActiveSheet()->setCellValue($currentLetter.$currentNumber, $value);
						$currentLetter++;
						
					}
				
				}
					
				if (!$removeLineBreaks) {
					$currentNumber++;
				}

				
			}
			// Subtotals end
			
			if (!$removeLineBreaks) {
				$currentNumber++;
			}
			
		}
		
		if (!$removeLineBreaks) {
			$currentNumber += 3;
		}
		
	}
	
	
	// Totals beginning
	$displayTotals = (!empty($totals));
	if ($displayTotals && !$removeTotals && ($isDetailedReport || !$isGroupedReport || !$hasGroupedTotalBelowColumn)) {
	
		if (!$removeHeaders) {
		
			$currentLetter = 'A';
		
			if (!$removeTitles) {
				$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $mod_strings['LBL_REPORT_TOTALS']);
				$currentNumber += 2;
			}
			
			foreach ($headersTotals as $columnTotal){
				$objPHPExcel->getActiveSheet()->SetCellValue($currentLetter.$currentNumber, $columnTotal["alias"]);
				$currentLetter++;
			}
			
		}
			
		$currentLetter = 'A';
		$currentNumber++;
		
		foreach ($totals as $total) {
				
			foreach ($total as $value) {
				
				$objPHPExcel->getActiveSheet()->setCellValue($currentLetter.$currentNumber, $value);		
				$currentLetter++;
				
			}
			
		}

	}
	// Totals end
	
	
    //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    	
	$objWriter->save($currentDir.$tmpFilesDir.$idFile);
    	
	return $idFile;
	
}

?>