<?php

class asol_CheckConfigurationDefsFunctions {
	
	static public $errorTips = array(
		'asolReportsDbAddress' => 'Failed to Connect to the DataBase with the given parameters.',
		'asolReportsExportReplaceByEmptyString' => 'The configured value must be an array of Strings or single Characters.',
		'asolReportsCsvDelimiter' => 'The configured value must be a String or a single Character.',
		'asolReportsAvoidReportsPagination' => 'The configured value must be a Boolean.',
		'asolReportsTranslateLabels' => 'The configured value must be a Boolean.',
		'asolAllowRoleModifiableReports' => 'The configured value must be a Boolean.',
		'asolReportsResizableNVD3Charts' => 'The configured value must be a Boolean.',
		'asolReportsDashletsHTTPRequestEnabled' => 'The configured value must be a Boolean.',
		'asolReportsDispatcherMaxRequests' => 'The configured value must be a <b>Positive Integer</b>.',
		'asolReportsMaxExecutionTime' => 'The configured value must be a <b>Positive Integer</b>.',
		'asolReportsMySQLinsecuritySubSelectScope' => 'The configured value must be a <b>Positive Integer</b> at 0..3 range.',
		'asolReportsMaxAllowedResults' => 'The configured value must be a <b>Positive Integer</b>.',
		'asolReportsNonVisibleFields' => 'The configured value must be an <b>Array</b>.',
		'asolReportsMySQLinsecuritySubSelectRoles' => 'The configured value must be an <b>Array</b>.',
		'asolReportsAlternativeDbConnections' => 'Failed to Connect to one of the External DataBases with the given parameters or the configured value is not an <b>Array</b>.',
		'asolReportsExternalApplications' => 'Some of the configured values could be <b>Missing</b> or has a <b>Wrong Format</b>.',
		'asolReportsExternalApplicationFixedParams' => 'Some of the Fixed Fixed Params is not correctly defined.',
		'asolReportsPhpAllowedFunctions' => 'Some of the PHP Functions is <b>not defined</b>.',
		'asolReportsPhantomJsFilePath' => 'The PhantomJs binary file <b>does not exists</b> or it is not an <b>Executable File</b>.',
		'asolReportsMaxAllowedResultsEmailAddressNotification' => 'The configured value is not a valid Email Address.',
		'asolReportsEmailsFrom' => 'The configured value is not a valid Email Address.',
		'asolReportsEmailsFromName' => 'The configured value must be a String.',
		'asolModulesPermissions' => 'Incorrect parameter configuration format. <b>Check README file</b>.',
		'asolReportsCsvCodification' => 'The configured value is not a valid codification or it is not a string',
		'asolReportsDefaultExportedLanguage' => 'The configured language is not installed at this SugarCRM instance.',
		'asolReportsCurlRequestUrl' => 'Cannot get response at the configured Url',
		'asolReportsExtHttpUrl' => 'Cannot get response at the configured Url',
		'asolReportsCheckHttpFileTimeout' => 'This value must be an <b>Integer</b> or a <b>Numeric String</b>.',
		
		'asolIncorrectFilePermissions' => 'Incorrect Permissions for this File.',
		
		'asolReportsIncorrectScheduledUri' => 'The given Scheduled Job URL has wrong parameters or its not accesible.',
		'asolReportsInactiveScheduledJob' => 'This Scheduled Job is not <b>Active</b>.',
		'asolReportsIncorrectJobInterval' => 'This Scheduled Job has an incorrect Time Interval.',
		'asolReportsScheduledJobTimeExpired' => 'This Scheduled Job has expired. Check the End DateTime.',
		
		'asolReportsDbEngine' => 'AlineaSol Reports is not compatible with your SQL DataBase Type.'
	);
	

	
	static public $codes = array(
		0=>'Domain Not Found',
	   	100=>'Continue',
	   	101=>'Switching Protocols',
	   	200=>'OK',
	   	201=>'Created',
	   	202=>'Accepted',
	   	203=>'Non-Authoritative Information',
	   	204=>'No Content',
	   	205=>'Reset Content',
	   	206=>'Partial Content',
	   	300=>'Multiple Choices',
	   	301=>'Moved Permanently',
	   	302=>'Found',
	   	303=>'See Other',
	   	304=>'Not Modified',
	   	305=>'Use Proxy',
	   	307=>'Temporary Redirect',
	   	400=>'Bad Request',
	   	401=>'Unauthorized',
	   	402=>'Payment Required',
	   	403=>'Forbidden',
	   	404=>'Not Found',
	   	405=>'Method Not Allowed',
	   	406=>'Not Acceptable',
	   	407=>'Proxy Authentication Required',
	   	408=>'Request Timeout',
	   	409=>'Conflict',
	   	410=>'Gone',
	   	411=>'Length Required',
	   	412=>'Precondition Failed',
	   	413=>'Request Entity Too Large',
	   	414=>'Request-URI Too Long',
	   	415=>'Unsupported Media Type',
	   	416=>'Requested Range Not Satisfiable',
	   	417=>'Expectation Failed',
	   	500=>'Internal Server Error',
	   	501=>'Not Implemented',
	   	502=>'Bad Gateway',
	   	503=>'Service Unavailable',
	   	504=>'Gateway Timeout',
	   	505=>'HTTP Version Not Supported'
	);


	static public function checkConfiguration($configParam, $noLongerAvailable = false) {
		
		global $sugar_config;
		
		if ($noLongerAvailable) {
			
			if (isset($sugar_config[$configParam])) {
			
				$returnedVal = "<span id='".$configParam."_Result' style='color:orange; font-weight: bold;'>[No Longer Available]</span>";
				return "<div>· ".$configParam." ".$returnedVal."</div>";
				
			} else {
				
				return "";
				
			}
			
		}
		
		
		$hasError = false;
		$httpRequestParam = false;
		$posibleResolution = null;
		$returnedVal = "";
		
		if (isset($sugar_config[$configParam])) {
			
			switch ($configParam) {
			
				case "asolReportsDbAddress":
					$mysqli = new mysqli($sugar_config["asolReportsDbAddress"], $sugar_config["asolReportsDbUser"], $sugar_config["asolReportsDbPassword"], $sugar_config["asolReportsDbName"], $sugar_config["asolReportsDbPort"]);
					if (mysqli_connect_errno()) {
						$hasError = true;
						$posibleResolution = "· Check your SugarCRM DataBase URL and Credentials.";
					}
					break;
					
				case "asolReportsExportReplaceByEmptyString":
					if (!self::isArrayOfStrings($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = array(\&quot;\$\&quot;, \&quot;€\&quot;);";
					}
					break;
					
				case "asolReportsCsvDelimiter":
					if (!is_string($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;;\&quot;;<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;,\&quot;;";
					}
					break;
					
				case "asolReportsEmailsFromName":
					if (!is_string($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;AlineaSol\&quot;;";
					}
					break;
					
				case "asolReportsExportPdfFontFileTTF":
					if (!is_string($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;Arial\&quot;;";
					}
					break;
					
				case "asolReportsAvoidReportsPagination":
				case "asolReportsTranslateLabels":
				case "asolAllowRoleModifiableReports":
				case "asolReportsResizableNVD3Charts":
				case "asolReportsDashletsHTTPRequestEnabled":
				case "asolReportsBreadCrumbNavigation":
				case "asolReportsReadOnlyMode":
				case "asolReportsDashletExportButtons":
				case "asolReportsSecurityGroupsDisabled":
					if (!is_bool($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = true; //[Enable Feature]<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = false; //[Disable Feature]";
					}
					break;
						
				case "asolReportsDispatcherMaxRequests":
				case "asolOverrideDefaultEntriesPerPage":
				case "asolReportsFieldsPaginationEntries":
				case "asolReportsMaxLinksAllowed":
				case "asolReportsMultiLinksScope":
				case "asolReportsScheduledAttachmentZipLimit":
					if (!is_int($sugar_config[$configParam]) || ($sugar_config[$configParam] < 0)) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = 5;";
					}
					break;
					
				case "asolReportsMaxExecutionTime":
				case "asolReportsKillActiveLongQueriesTTL":
					if (!is_int($sugar_config[$configParam]) || ($sugar_config[$configParam] < 0)) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = 300;";
					}
					break;
					
				case "asolReportsMySQLinsecuritySubSelectScope";
				case "asolReportsPreviewExecutionScope";
					if ((!is_int($sugar_config[$configParam])) || (($sugar_config[$configParam] < 0) || ($sugar_config[$configParam] > 3) )) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = 0; //Nobody<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = 1; //Only Admins<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = 2; //Anyone<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = 3; //Set of Roles";
					}
					break;
					
				case "asolReportsMaxAllowedDisplayed":
				case "asolReportsMaxAllowedGroupByEntries":
				case "asolReportsMaxAllowedParseMultiTable":	
				case "asolReportsMaxAllowedResults":
				case "asolReportsMaxAllowedNotIndexedOrderBy":
					if ((!is_numeric($sugar_config[$configParam])) || ($sugar_config[$configParam] < 0)) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = 1000000;";
					}
					break;
					
				case "asolReportsNonVisibleFields":
					if (!is_array($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = array();<br/>";
						$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = array(\&quot;assigned_user_id\&quot;, \&quot;date_modified\&quot;);";
					}
					break;
					
				case "asolReportsMySQLinsecuritySubSelectRoles":
				case "asolReportsPreviewExecutionRoles":
					if (!is_array($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = array(\&quot;Sales\&quot;, \&quot;Marketing\&quot;, \&quot;CEO\&quot;);";
					}
					break;
										
				case "asolReportsPhantomJsFilePath":
					if (!self::checkPhantomJsPathExecutable()) {
						$hasError = true;
						if (PHP_OS === "Linux")
							$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;./phantomjs\&quot;;";
						else 
							$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;phantomjs.exe\&quot;;";
					}
					break;
					
				case "asolReportsMaxAllowedResultsEmailAddressNotification":
				case "asolReportsEmailsFrom":
					if (!filter_var($sugar_config[$configParam], FILTER_VALIDATE_EMAIL)) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;info@alineasol.com\&quot;;";
					}
					break;
					
				case "asolModulesPermissions":
					if (!self::checkAsolModulesPermissionsConfig()) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = array(<br/>".str_repeat("&nbsp;", 3)."\&quot;asolAllowedTables\&quot; => array(<br/>".str_repeat("&nbsp;", 6)."\&quot;instance\&quot; => array(\&quot;Accounts\&quot;, \&quot;Leads\&quot;)<br/>".str_repeat("&nbsp;", 3).")<br/>);";
					}
					break;
					
				case "asolReportsCsvCodification":
					if ((!is_string($sugar_config[$configParam])) || (iconv("UTF-8", $sugar_config[$configParam]."//TRANSLIT//IGNORE", "AlineaSol Testing") === false)) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;Windows-1252\&quot;;";
					}
					break;

				case "asolReportsDefaultExportedLanguage":
					global $sugar_config;
					if (!self::checkAsolCorrectLanguage()) {
						$hasError = true;
						foreach ($sugar_config['languages'] as $langKey=>$language) {
							$posibleResolution .= "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;".$langKey."\&quot;;<br/>";
						}
						$posibleResolution = substr($posibleResolution, 0, -5);
					}
					break;
					
				case "asolReportsCurlRequestUrl":
					$curlReponse = self::checkCurlFeature($sugar_config[$configParam]."/index.php?entryPoint=viewReport");
					if (($curlReponse['httpCode'] >= 400) || ($curlReponse['httpCode'] == 0)) {
						$hasError = true;
						$posibleResolution = "· Given <b>".$curlReponse['httpCode']."</b> HTTP reponse Code from Configured URL (<b>".self::$codes[$curlReponse['httpCode']]."</b>):<br/>";
						$posibleResolution .= "\$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;http://localhost&quot;+window.location.pathname.slice(0, -10)+&quot;\&quot;;";				
					}
					break;
					
				case "asolReportsExtHttpUrl":
					global $sugar_config;
					
					$httpRequestURL = (is_string($sugar_config[$configParam])) ? $sugar_config[$configParam].'/index.php?entryPoint=viewReport' : "noRequest";
					
					$returnedVal .= '
					<script> 
						$.ajax({
							type: "POST",
							url: "'.$httpRequestURL.'",
					        async: true,
					        cache: false,
					        success: function (data) {
								$("#asolReportsExtHttpUrl_Result").html("[OK]");
								$("#asolReportsExtHttpUrl_Result").css("color", "green");
							},
							error: function (data) {
								$("#asolReportsExtHttpUrl_Result").html("[NOK]");
								$("#asolReportsExtHttpUrl_Result").css("color", "red");
								$("#asolReportsExtHttpUrl_Info").css("display", "inline");
							}
					    });
					</script>';
	
					
					$httpRequestParam = true;
					$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = \&quot;&quot;+window.location.protocol+&quot;//&quot;+window.location.host+window.location.pathname.slice(0, -10)+&quot;\&quot;;"; //$sugar_config['site_url'];
					break;
					
				case "asolReportsCheckHttpFileTimeout":
					if (!is_numeric($sugar_config[$configParam])) {
						$hasError = true;
						$posibleResolution = "· \$sugar_config[\&quot;".$configParam."\&quot;] = 5000;";
					}
					break;
					
				case "asolReportsAlternativeDbConnections":
					if (!self::checkAlternastiveDbConnections()) {
						$hasError = true;
						$posibleResolution = "· Check your SugarCRM External DataBases URL and Credentials.";
					}
					break;
					
				case "asolReportsExternalApplications":
					if (!self::checkExternalApps()) {
						$hasError = true;
						$posibleResolution = "· Check your SugarCRM External Applications Parameters.";
					}
					break;
					
				case "asolReportsExternalApplicationFixedParams":
					if (!self::checkExternalAppsFixedParams()) {
						$hasError = true;
						$posibleResolution = "· Check README file to find out the available Fixed Parameters.";
					}
					break;
					
				case "asolReportsPhpAllowedFunctions":
					if (!self::checkExternalAppsAllowedPhpFunctions()) {
						$hasError = true;
						$posibleResolution = "· Check the defined functions against PHP manual to validate that exist.";
					}
					break;
					
				case "asolReportsWebServiceExecution":
					if (!is_array($sugar_config[$configParam]) || !is_string($sugar_config[$configParam]['wsUrl']) || !is_array($sugar_config[$configParam]['authentication'])) {
						$hasError = true;
						$posibleResolution = "· Check README file to find out how to configure this functionality.";
					}
					break;
				
			}

			
			if (!$hasError && !$httpRequestParam)
				$returnedVal .= "<span id='".$configParam."_Result' style='color:green; font-weight: bold;'>[OK]</span>";
			else if ($httpRequestParam)
				$returnedVal .= "<span id='".$configParam."_Result' style='color:white; font-weight: bold;'></span>".self::getImgInfoIcon($configParam, null, $posibleResolution, $httpRequestParam);
			else
				$returnedVal .= "<span id='".$configParam."_Result' style='color:red; font-weight: bold;'>[NOK]</span>".self::getImgInfoIcon($configParam, null, $posibleResolution, $httpRequestParam);
			
				
		} else {
			
			$returnedVal .= "<span id='".$configParam."_Result' style='color:blue; font-weight: bold;'>[NotSet]</span>";
		
		}
		
		
		return "<div>· ".$configParam." ".$returnedVal."</div>";
		
	}
	
	static public function checkModuleDependence($moduleId, $required = false) {
		
		global $db;
		
		$returnMsg = "";
		
		$moduleQuery = $db->query("SELECT version FROM upgrade_history WHERE id_name='".$moduleId."' AND status='installed' LIMIT 1");
		if ($moduleQuery->num_rows > 0) {
			
			$moduleRow = $db->fetchByAssoc($moduleQuery);
			
			$returnMsg .= "<span><b>".$moduleId." v".$moduleRow['version']."</b> is installed correctly </span>";
			$returnMsg .= "<span id='".$moduleId."_Result' style='color:green; font-weight: bold;'>[OK]</span>";
			
		} else {
			
			$returnMsg .= "<span><b>".$moduleId."</b> is NOT installed </span>";
			
			if (!$required) {
				
				$returnMsg .= "<span id='".$moduleId."_Result' style='color:blue; font-weight: bold;'>[NotSet]</span>";
			
			} else {
				
				$returnMsg .= "<span id='".$moduleId."_Result' style='color:red; font-weight: bold;'>[NOK]</span>";
			
			}
			
		}
		
		return $returnMsg;
		
	}
	
	static public function checkDatabase($databaseCheckId) {
		
		global $db, $sugar_config;
		
		$hasError = false;
		
		switch ($databaseCheckId) {

			case "asolReportsDbEngine":
				if ($sugar_config['dbconfig']['db_type'] !== 'mysql') {
					$hasError = true;
					$posibleResolution = "· Change your Database Type from <b>".$sugar_config['dbconfig']['db_type']."</b> to <b>MySQL</b>.";
				}
				break;
	
		}
		
		if (!$hasError) 
			$returnedVal = "<span id='".$databaseCheckId."_Result' style='color:green; font-weight: bold;'>[OK]</span>";
		else 
			$returnedVal = "<span id='".$databaseCheckId."_Result' style='color:red; font-weight: bold;'>[NOK]</span>".self::getImgInfoIcon($databaseCheckId, null, $posibleResolution, false);
		
			
		return "<div>· ".$databaseCheckId." ".$returnedVal."</div>";
	
	}
	
	static public function checkSchedulerJob($schedulerId) {
		
		global $db, $sugar_config;
		
		$isValidScheduler = null;
		
		$site_url = (isset($sugar_config['asolReportsCurlRequestUrl'])) ? $sugar_config['asolReportsCurlRequestUrl'] : $sugar_config['site_url'];
		
		$schedulersRs = $db->query("SELECT name, date_time_end, job, job_interval, status FROM schedulers WHERE job LIKE 'url::%' AND deleted=0 ");
		
		
		switch ($schedulerId) {
			
			case "AlineaSolReportsScheduled":
				$schedulerUrlParams = array(
					"entryPoint=scheduledTask",
					"module=asol_Reports"
				);
				$jobInterval = "*/5::*::*::*::*";
				break;
				
			case "AlineaSolReportsCleanUp":
				$schedulerUrlParams = array(
					"entryPoint=reportCleanUp",
					"module=asol_Reports"
				);
				$jobInterval = null;
				break;

		}
		
		while($schedulerJob = $db->fetchByAssoc($schedulersRs)) {
			
			$checkScheduledUrlResponse = self::checkScheduledUrl($schedulerJob['job'], $schedulerUrlParams);

			if ($checkScheduledUrlResponse['isValidUrl']) {
				
				if ($schedulerJob['status'] !== 'Active') {
					$isValidScheduler = false;
					$errorTipKey = 'asolReportsInactiveScheduledJob';
					$posibleResolution = '· Set this Scheduled Job status to <b>Active</b>.';
				} else if (($jobInterval != null) && ($schedulerJob['job_interval'] !== $jobInterval)) {
					$isValidScheduler = false;
					$errorTipKey = 'asolReportsIncorrectJobInterval';
					$posibleResolution = '· '.$jobInterval;
				} else if (($schedulerJob['date_time_end'] != null) && ($schedulerJob['date_time_end'] <= gmdate("Y-m-d H:i:s"))) {
					$isValidScheduler = false;
					$errorTipKey = 'asolReportsScheduledJobTimeExpired';
					$posibleResolution = '· Set a future DateTime or an Empty one.';
				} else {
					$isValidScheduler = true;
					$errorTipKey = null;
					$posibleResolution = null;
				}
				
				break;

			} else {
				
				if ($checkScheduledUrlResponse['errorTip'] !== null) {
			
					$isValidScheduler = false;
					$errorTipKey = $checkScheduledUrlResponse['errorTip'];
					
				}
				
				$posibleResolution = '· url::http://localhost'.$_SERVER['SCRIPT_NAME'].'?'.implode('&', $schedulerUrlParams).'<br/>';
				$posibleResolution .= '· url::http://127.0.0.1'.$_SERVER['SCRIPT_NAME'].'?'.implode('&', $schedulerUrlParams).'<br/>';
				$posibleResolution .= '· url::'.$site_url.'/index.php?'.implode('&', $schedulerUrlParams);
				
			}
			
		}
		
		if ($schedulersRs->num_rows === 0) {
			
			
			$posibleResolution = '· url::http://localhost'.$_SERVER['SCRIPT_NAME'].'?'.implode('&', $schedulerUrlParams).'<br/>';
			$posibleResolution .= '· url::http://127.0.0.1'.$_SERVER['SCRIPT_NAME'].'?'.implode('&', $schedulerUrlParams).'<br/>';
			$posibleResolution .= '· url::'.$site_url.'/index.php?'.implode('&', $schedulerUrlParams);
			
		}
		

		if ($isValidScheduler === null)
			$returnedVal .= "<span id='".$schedulerId."_Result' style='color:blue; font-weight: bold;'>[NotSet]</span>".self::getImgInfoIcon($schedulerId, $errorTipKey, $posibleResolution, false, false);
		else if ($isValidScheduler)
			$returnedVal .= "<span id='".$schedulerId."_Result' style='color:green; font-weight: bold;'>[OK]</span>";
		else
			$returnedVal .= "<span id='".$schedulerId."_Result' style='color:red; font-weight: bold;'>[NOK]</span>".self::getImgInfoIcon($schedulerId, $errorTipKey, $posibleResolution, false);

		return "<div>· ".$schedulerId." ".$returnedVal."</div>";
	
	}
	
	static private function checkScheduledUrl($uriToCheck, $urlParams) {
		
		global $sugar_config;
		
		$isValidUrl = true;
		$errorTip = null;
		
		$uriPieces = explode('?', substr(trim($uriToCheck), 5));
		
		$site_url = (isset($sugar_config['asolReportsCurlRequestUrl'])) ? $sugar_config['asolReportsCurlRequestUrl'] : $sugar_config['site_url'];
		$availableUrls = array (
			0 => "http://localhost".$_SERVER['SCRIPT_NAME'],
			1 => "http://127.0.0.1".$_SERVER['SCRIPT_NAME'],
			2 => $site_url.'/index.php'
		);


		if (in_array($uriPieces[0], $availableUrls)) {
			
			$uriParams = explode('&', $uriPieces[1]);
			foreach ($urlParams as $parameter) {
				if (!in_array($parameter, $uriParams)) {
					$isValidUrl = false;
					break;
				}
			}
			
			if ($isValidUrl) {
				
				$curlResponse = self::checkCurlFeature($uriPieces[0].'?'.$uriPieces[1]);

				if (($curlResponse['httpCode'] >= 400) || ($curlResponse['httpCode'] == 0)) {
					$errorTip = 'asolReportsIncorrectScheduledUri';
					$isValidUrl = false;
				}
			
			}
			
		} else {
			$isValidUrl = false;
		}

		return array(
			'isValidUrl' => $isValidUrl,
			'errorTip' => $errorTip
		);
		
	}
	
	static private function getImgInfoIcon($configParam, $overrideConfigParam, $posibleValues, $httpRequestParam = false, $isError = true) {

		if ($isError) {
		
			$errorTip = ($overrideConfigParam != null) ? self::$errorTips[$overrideConfigParam] : self::$errorTips[$configParam]; 
			return "<img id='".$configParam."_Info' style='display: ".($httpRequestParam ? 'none' : 'inline')."' border='0' class='inlineHelpTip' alt='Info' src='modules/asol_Reports/include_basic/images/asol_reports_help_inline.gif' onClick='return SUGAR.util.showHelpTips(this, &quot;<div class=\\\"detail view  detail508\\\"><table class=\\\"list view\\\"><tr><td width=\\\"20%\\\"><b>Error:</b></td><td width=\\\"80%\\\">".$errorTip."</td></tr><tr><td width=\\\"20%\\\"><b>Posible Solutions:</b></td><td width=\\\"80%\\\">".$posibleValues."</td></tr></table></div>&quot;, &quot;&quot;, &quot;&quot;);'>";
		
		} else {
			
			return "<img id='".$configParam."_Info' style='display: ".($httpRequestParam ? 'none' : 'inline')."' border='0' class='inlineHelpTip' alt='Info' src='modules/asol_Reports/include_basic/images/asol_reports_help_inline.gif' onClick='return SUGAR.util.showHelpTips(this, &quot;<div class=\\\"detail view  detail508\\\"><table class=\\\"list view\\\"><tr><td width=\\\"20%\\\"><b>Posible Values:</b></td><td width=\\\"80%\\\">".$posibleValues."</td></tr></table></div>&quot;, &quot;&quot;, &quot;&quot;);'>";
			
		}
			
	}
	
	
	static private function isArrayOfStrings($theArray) {
		
		$hasStrings = false;
		
		if (is_array($theArray)) {
			foreach ($theArray as $element) {	
				if (is_string($element)) {
					$hasStrings = true;
				} else {
					$hasStrings = false;
					break;
				}	
			}
		}
		
		return $hasStrings;
		
	}
	
	static private function checkCurlFeature($toCheckURL) {
	
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $toCheckURL);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 10); //follow up to 10 redirections - avoids loops
		$data = curl_exec($ch);
		
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get the HTTP Code
		// Get final redirected URL, will be the same if URL is not redirected
		$newUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL); 
		curl_close($ch);
		
		return array(
			"httpCode" => $httpCode,
			"newUrl" => ($toCheckURL != $newUrl) ? $newUrl : null
		);
	
	}
	
	static private function checkAsolModulesPermissionsConfig() {
		
		global $sugar_config;
		
		if ((isset($sugar_config["asolModulesPermissions"]["asolAllowedTables"])) || (isset($sugar_config["asolModulesPermissions"]["asolForbiddenTables"]))) {
			
			return true;
			
		} else {
			
			return false;
			
		}
		
	}
	
	static private function checkAsolCorrectLanguage() {
		
		global $sugar_config;
		
		return ((is_string($sugar_config['asolReportsDefaultExportedLanguage'])) && (isset($sugar_config['languages'][$sugar_config['asolReportsDefaultExportedLanguage']])));
		
	}
	
	static private function checkPhantomJsPathExecutable() {
		
		global $sugar_config;
		
		if (PHP_OS === "Linux")
			return (is_executable($sugar_config['asolReportsPhantomJsFilePath']) && !strncmp($sugar_config['asolReportsPhantomJsFilePath'], "./", strlen("./")));
		else
			return is_executable($sugar_config['asolReportsPhantomJsFilePath']);
		
	}

	static private function checkAlternastiveDbConnections() {
		
		global $sugar_config; 
		
		$returnedVal = true;
		
		if (is_array($sugar_config['asolReportsAlternativeDbConnections'])) {
			
			foreach ($sugar_config['asolReportsAlternativeDbConnections'] as $altDb) {
				
				$mysqli = new mysqli($altDb["asolReportsDbAddress"], $altDb["asolReportsDbUser"], $altDb["asolReportsDbPassword"], $altDb["asolReportsDbName"], $altDb["asolReportsDbPort"]);
				if (mysqli_connect_errno()) {	
					$returnedVal = false;
					break;
				}
				
			}
			
		} else {			
			$returnedVal = false;
		}
		
		return $returnedVal;
		
	}
	
	static private function checkExternalApps() {

		global $sugar_config;
		
		$returnedVal = true;
		
		if (is_array($sugar_config['asolReportsExternalApplications'])) {
			
			foreach ($sugar_config['asolReportsExternalApplications'] as $extApp) {
				
				if ((!isset($extApp["appLabel"])) || (!isset($extApp["appUrl"])) || (!isset($extApp["postParameters"])) || (!isset($extApp["suppressHeaders"])) || (!isset($extApp["suppressQuotes"]))) {
					
					$returnedVal = false; //Missing Values
					break;
					
				} else if ((!is_string($extApp["appLabel"])) || (!is_string($extApp["appUrl"])) || (!is_string($extApp["postParameters"])) || (!is_bool($extApp["suppressHeaders"])) || (!is_bool($extApp["suppressQuotes"]))) {
					
					$returnedVal = false; //Params incorrect format
					break;
					
				}/* else {
					
					$curlReponse = self::checkCurlFeature($extApp["appUrl"]."?".$extApp["postParameters"]);
					if ($curlReponse['httpCode'] >= 400) {
						$returnedVal = false; //Wrong URL
						break;
					}
					
				}*/
				
			}
			
		} else {			
			$returnedVal = false;
		}
		
		return $returnedVal;
		
	}

	static private function checkExternalAppsFixedParams() {
		
		global $sugar_config;
		
		$returnedVal = true;
		
		if (is_array($sugar_config['asolReportsExternalApplicationFixedParams'])) {
			
			foreach ($sugar_config['asolReportsExternalApplicationFixedParams'] as $keyParam => $fixedParam) {
				
				if (!is_string($keyParam)) {
					
					$returnedVal = false; //KeyParam is numeric
					break;
					
				} else  if ((!isset($fixedParam["value"])) || (!isset($fixedParam["description"]))) {
					
					$returnedVal = false; //Missing Values
					break;
					
				} else if ((!is_string($fixedParam["value"])) || (!is_string($fixedParam["description"]))) {
					
					$returnedVal = false; //Params incorrect format
					break;
					
				} else if (!in_array($fixedParam["value"], array('${this}', '${bean->name}', '${time}'))) {
					
					$returnedVal = false; //Undefined paramValue
					break;
					
				}
				
			}
			
		} else {			
			$returnedVal = false;
		}
		
		return $returnedVal;
		
	}
			
	static private function checkExternalAppsAllowedPhpFunctions() {
		
		global $sugar_config;
		
		$returnedVal = true;
		
		if (is_array($sugar_config['asolReportsPhpAllowedFunctions'])) {
			
			foreach ($sugar_config['asolReportsPhpAllowedFunctions'] as $phpFunction) {
				
				if (!function_exists($phpFunction)) {
					$returnedVal = false;
					break;
				}
				
			}
			
		} else {			
			$returnedVal = false;
		}
		
		return $returnedVal;
		
	}
	
	static public function checkFileAccess($htmlCheckTagName, $htmlCheckTagId, $fileName) {

		echo '
		<script>
		var currentUri = window.location.protocol+"//"+window.location.host+window.location.pathname.slice(0, -10);
		jQueryReports.ajax({
			type: "POST",
			url: currentUri + "/'.$fileName.'",
	        async: true,
	        cache: false,
			success: function (data) {
				jQueryReports("#'.$htmlCheckTagId.'_Result").html("[200: OK]");
				jQueryReports("#'.$htmlCheckTagId.'_Result").css("color", "green");
			},
			error: function (data, textStatus, errorThrown) {
				if (data.status === 200) {
					jQueryReports("#'.$htmlCheckTagId.'_Result").html("[200: OK]");
					jQueryReports("#'.$htmlCheckTagId.'_Result").css("color", "green");
				} else {
					jQueryReports("#'.$htmlCheckTagId.'_Result").html("[" + data.status + ": " + errorThrown + "]");
					jQueryReports("#'.$htmlCheckTagId.'_Result").css("color", "red");
					jQueryReports("#'.$htmlCheckTagId.'_Info").css("display", "inline");
				}
			}
	    });
		</script>';
		
		$numericPerms = decoct(fileperms($fileName) & 0777);
		$descriptivePerms = self::getDescriptiveFilePerms($fileName);
		
		$posibleResolution = '· Give less restrictive permissions to the file <b>'.$fileName.'</b>.<br/>Current file permissions: <b>'.$descriptivePerms.'</b> ('.$numericPerms.').';
		
		return "<div>· ".$htmlCheckTagName." <span id='".$htmlCheckTagId."_Result' style='color:white; font-weight: bold;'></span>".self::getImgInfoIcon($htmlCheckTagId, 'asolIncorrectFilePermissions', $posibleResolution, true)."</div>";
				
	}
	
	static private function getDescriptiveFilePerms($fileName) {
		
		$permisos = fileperms($fileName);

		if (($permisos & 0xC000) == 0xC000) {
		    // Socket
		    $info = 's';
		} elseif (($permisos & 0xA000) == 0xA000) {
		    // Enlace Simbólico
		    $info = 'l';
		} elseif (($permisos & 0x8000) == 0x8000) {
		    // Regular
		    $info = '-';
		} elseif (($permisos & 0x6000) == 0x6000) {
		    // Especial Bloque
		    $info = 'b';
		} elseif (($permisos & 0x4000) == 0x4000) {
		    // Directorio
		    $info = 'd';
		} elseif (($permisos & 0x2000) == 0x2000) {
		    // Especial Carácter
		    $info = 'c';
		} elseif (($permisos & 0x1000) == 0x1000) {
		    // Tubería FIFO
		    $info = 'p';
		} else {
		    // Desconocido
		    $info = 'u';
		}
		
		// Propietario
		$info .= (($permisos & 0x0100) ? 'r' : '-');
		$info .= (($permisos & 0x0080) ? 'w' : '-');
		$info .= (($permisos & 0x0040) ?
		            (($permisos & 0x0800) ? 's' : 'x' ) :
		            (($permisos & 0x0800) ? 'S' : '-'));
		
		// Grupo
		$info .= (($permisos & 0x0020) ? 'r' : '-');
		$info .= (($permisos & 0x0010) ? 'w' : '-');
		$info .= (($permisos & 0x0008) ?
		            (($permisos & 0x0400) ? 's' : 'x' ) :
		            (($permisos & 0x0400) ? 'S' : '-'));
		
		// Mundo
		$info .= (($permisos & 0x0004) ? 'r' : '-');
		$info .= (($permisos & 0x0002) ? 'w' : '-');
		$info .= (($permisos & 0x0001) ?
		            (($permisos & 0x0200) ? 't' : 'x' ) :
		            (($permisos & 0x0200) ? 'T' : '-'));
		
		return $info;
		
	}
	
}
	
?>