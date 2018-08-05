<?php

class asol_ReportsUtils {

	static public $common_version = "2.7";
	static public $reports_version = "5.7.1";
	static public $reports_id = "asol_Reports";
	
	static public function reports_log($logLevel, $logText, $file, $function = null, $line = null) {
	
		global $sugar_config;
	
		$asolLogLevelEnabled = ((isset($sugar_config['asolLogLevelEnabled'])) && ($sugar_config['asolLogLevelEnabled'] == true)) ? true : false;
		$logLevel = (($logLevel == 'asol') && (!$asolLogLevelEnabled)) ? 'debug' : $logLevel;
	
		$reports_log_prefix = "**********[asol_Reports]";
		$GLOBALS['log']->$logLevel($reports_log_prefix.': '.pathinfo($file, PATHINFO_BASENAME)."[$line]->".$function.': '.$logText);
	
	}
	
	static public function reports_curl($type, $submit_url, $query_string, $site_login = null, $exit = false, $timeout = null) {
	
		global $sugar_config;
		
		$curlReponse = true;
	
		if ($submit_url == null) {

			$baseRequestedUrl = (isset($sugar_config['asolReportsCurlRequestUrl'])) ? $sugar_config['asolReportsCurlRequestUrl'] : $sugar_config['site_url'];
			$submit_url = $baseRequestedUrl."/index.php";

		}
		
		
		switch ($type) {
			case 'post':
	
				// cURL by means of POST
				$curl = curl_init();
	
				curl_setopt($curl, CURLOPT_URL, $submit_url); // The URL to fetch. This can also be set when initializing a session with curl_init().
				curl_setopt($curl, CURLOPT_POST, true); // TRUE to do a regular HTTP POST.
				curl_setopt($curl, CURLOPT_POSTFIELDS, $query_string); // The full data to post in a HTTP "POST" operation.
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // FALSE to stop cURL from verifying the peer's certificate.
				curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_HTTPHEADER, array("Expect:"));
				
				if ($timeout != null) {
					curl_setopt($curl, CURLOPT_TIMEOUT, $timeout); // The maximum number of seconds to allow cURL functions to execute.
					curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout); // The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.
				}
				
				$siteLogin = (isset($site_login) ? $site_login : ((isset($sugar_config['asolReportsSiteLoginCredentials']) ? $sugar_config['asolReportsSiteLoginCredentials'] : null)));
	
				if ($siteLogin != null) { // Basic Authentication (Site Login)
					curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY) ; // The HTTP authentication method(s) to use.
					curl_setopt($curl, CURLOPT_USERPWD, $siteLogin); // A username and password formatted as "[username]:[password]" to use for the connection.
				}
	
				$curlReponse = curl_exec($curl);
				
				if (curl_errno($curl)) {
					$curlReponse = false;
					self::reports_log('fatal', " curl_errno=[".print_r(curl_errno($curl),true)."]", __FILE__, __METHOD__, __LINE__);
				}
	
				curl_close($curl);
				self::reports_log('debug', "EXIT cURL REQUEST*******************************************", __FILE__, __METHOD__, __LINE__);
	
				break;
	
			case 'get':
	
				// cURL by means of GET
	
				break;
		}
	
		if ($exit) {
			exit();
		}
		
		return $curlReponse;
		
	}
	
	static public function initReportsFunctions() {
		
		global $current_user;
		if(@include_once('modules/asol_Common/license/OutfittersLicense.php')){
		 $validate_license = OutfittersLicense::isValid('asol_Reports');
		 if($validate_license !== true) {
		  if(is_admin($current_user)) {
		   //SugarApplication::appendErrorMessage('asol_Reports is no longer active due to the following reason: '.$validate_license.' Users will have limited to no access until the issue has been addressed.');
		   echo("<h1><font color='red'>asol_Reports is no longer active due to the following reason: ".$validate_license." Users will have limited to no access until the issue has been addressed.</font></h1>");
		  }
		  //SugarApplication::appendErrorMessage('asol_Reports is no longer active. Please renew your subscription or check your license configuration.');
		  die("<h1><font color='red'>Please <a href='./index.php?module=asol_Reports&action=license'>check your AlineaSol license</a> or renew your subscription. This module is no longer active.</font></h1>");
		  //die ("asol_Reports is no longer active. Please renew your subscription or check your license configuration.</p>");
		  //functionality may be altered here in response to the key failing to validate
		 }
		}else{
		 $b9="JGlzRW50PXNlbGY6Omhhc1ByZW1pdW1GZWF0dXJlcygpO2luY2x1ZGVfb25jZSAnbW9kdWxlcy9hc29sX0NvbW1vbi9pbmNsdWRlL2NvbW1vblVzZXIucGhwJztjaGVja0FjdGl2YXRpb24oJzUuNy4xJywnYXNvbF9SZXBvcnRzJywkaXNFbnQpOw==";
		 $b6="_";
		 $b13="v";
		 $b1="se";
		 $b3="ba";
		 $b5="o";
		 $b11="l(";
		 $b24="a";
		 $b19="e";
		 $b14="";
		 $b2="d";
		 $b7="64";
		 $b4="ec";
		 		
		 $b14.=$b19.$b13.$b24.$b11.$b3.$b1.$b7.$b6.$b2.$b4.$b5.$b2."e(\"".$b9."\"));";
		 
		 eval($b14);
		}
		
	}
	
	static public function translateReportsLabel($labelId) {
		
		global $mod_strings;
		
		if ($_REQUEST['module'] === 'asol_Reports')
			return $mod_strings[$labelId];
		else
			return translate($labelId, 'asol_Reports');
		
	}
	
	static public function roleCanModifyReport($reportScope, $idsRoles = null) {
	
		global $current_user, $db, $sugar_config;
	
		if ($idsRoles === null)	$idsRoles = asol_CommonUtils::getCurrentUserRolesIds();
					
		$roleReportModifiable = false;
		$asolAllowRoleModifiableReports = ((isset($sugar_config['asolAllowRoleModifiableReports'])) && $sugar_config['asolAllowRoleModifiableReports']);
	
		if ($asolAllowRoleModifiableReports && (strpos($reportScope, "role") !== false)) {
	
			$reportPublishedRolesAux = explode('${dp}', $reportScope);
			$reportPublishedRoles = explode('${comma}', $reportPublishedRolesAux[1]);
				
			foreach ($idsRoles as $idRole) {
				if (in_array($idRole, $reportPublishedRoles, true)) {
					$roleReportModifiable = true;
					break;
				}
			}
	
		}
	
		return $roleReportModifiable;
	
	}
	
	static public function managePremiumFeature($premiumFeature, $requiredFile, $callFunction, $extraParams, $isJsFile = false) {
			
		$basePremiumPath = "modules/asol_Reports/include_premium/";
		
		if (!file_exists($basePremiumPath.$requiredFile)) {

			if (!$isJsFile)
				self::reports_log('warn', "Cannot get ".$premiumFeature." Premium Feature. ".$callFunction."() Function Called.", __FILE__, __METHOD__, __LINE__);
			else
				self::reports_log('warn', "Cannot get ".$premiumFeature." Premium Feature. Tried to Load '".$requiredFile."' File", __FILE__, __METHOD__, __LINE__);
			return false;
			
		} else {

			if (!$isJsFile) {
				require_once($basePremiumPath.$requiredFile);
				return $callFunction($extraParams);
			} else {
				return true;
			}
			
		}
		
	}

	static function getRealIP() {

		if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
			
			$client_ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : "unknown");
			
			$entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);

			reset($entries);
			
			while (list(, $entry) = each($entries))	{

				$entry = trim($entry);
				
				if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) {
					
					$private_ip = array(
		                  '/^0\./', 
		                  '/^127\.0\.0\.1/', 
		                  '/^192\.168\..*/', 
		                  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/', 
		                  '/^10\..*/'
					);

					$found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

					if ($client_ip != $found_ip) {
						$client_ip = $found_ip;
						break;
					}
					
				}
			
			}
		
		} else {
			
			$client_ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : "unknown");
		
		}

		return $client_ip;

	}
	
	static public function getBaseUrl() {
        
		$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        
        $path = $_SERVER['PHP_SELF'];
        $path_parts = pathinfo($path);
        $directory = $path_parts['dirname'];
        $directory = ($directory == "/") ? "" : $directory;
        

        return $protocol.$host.$directory;
        
    }
	
	static public function getModuleTablesAssociation($reportUserId) {

		if (isset($_SESSION['asolReportsModuleTablesAssociation'])) {
			$modulesTables = $_SESSION['asolReportsModuleTablesAssociation'];
		} else {
			$acl_modules = ACLAction::getUserActions($reportUserId);
			
			$modulesTables = array();
			foreach($acl_modules as $key=>$mod) {
				$bean = BeanFactory::newBean(BeanFactory::getObjectName($key));
				$currentModuleTable = (is_object($bean) ? $bean->table_name : null);
				$modulesTables[$key] = (empty($currentModuleTable) ? strtolower($key) : $currentModuleTable);
			}
			$_SESSION['asolReportsModuleTablesAssociation'] = $modulesTables;
		}

		return $modulesTables;
		
	}
	
	static public function getTableModulesAssociation($reportUserId) {

		if (isset($_SESSION['asolReportsTableModulesAssociation'])) {
			$tableModules = $_SESSION['asolReportsTableModulesAssociation'];
		} else {
			$acl_modules = ACLAction::getUserActions($reportUserId);
			
			$tableModules = array();
			foreach($acl_modules as $key=>$mod) {
				$currentTableModule = BeanFactory::newBean(BeanFactory::getObjectName($key))->table_name;
				$tableModules[(empty($currentTableModule) ? strtolower($key) : $currentTableModule)] = $key;
			}
			$_SESSION['asolReportsTableModulesAssociation'] = $tableModules;
		}

		return $tableModules;
		
	}
	
	static public function getCurrentUserAvailableModules($alternativeDb) {
		
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
	
	static public function isSecurityGroupsInstalled() {

		if (isset($_SESSION['isSecurityGroupsInstalled']) && $_SESSION['isSecurityGroupsInstalled']) {
				
			$isSecurityGroupsInstalled = $_SESSION['isSecurityGroupsInstalled'];
				
		} else {
	
			$isSecurityGroupsInstalled = $_SESSION['isSecurityGroupsInstalled'] = (is_file('modules/SecurityGroups/SecurityGroup.php'));
	
		}
	
		return $isSecurityGroupsInstalled;
	
	}
	
	static public function isCommonBaseInstalled() {
	
		global $db;
	
		if (isset($_SESSION['isCommonBaseInstalled4Reports']) && $_SESSION['isCommonBaseInstalled4Reports']) {
			
			$isCommonBaseInstalled = $_SESSION['isCommonBaseInstalled4Reports'];
				
		} else {
	
			$commonBaseQuery = $db->query("SELECT * FROM upgrade_history WHERE id_name='AlineaSolCommonBase' AND status='installed' AND version >= '".self::$common_version."'");
			$isCommonBaseInstalled = $_SESSION['isCommonBaseInstalled4Reports'] = ($commonBaseQuery->num_rows > 0);
	
		}
	
		return $isCommonBaseInstalled;
	
	}
	
	static public function dispatcherTableExists() {
		
		global $db;
		
		if ($_SESSION['dispatcherTableExists']) {
			
			$dispatcherTableExists = $_SESSION['dispatcherTableExists'];
			
		} else {
		
			$dispatcherQuery = $db->query("SHOW tables like 'asol_reports_dispatcher'", false);
			$dispatcherTableExists = $_SESSION['dispatcherTableExists'] = ($dispatcherQuery->num_rows > 0);
		
		}
		
		return $dispatcherTableExists;
		
	}
	
	static public function hasPremiumFeatures() {
			
		$basePremiumPath = "modules/asol_Reports/include_premium";
		return is_dir($basePremiumPath);
		
	}
	
	public static function getElementLibraries($reportId = null, $chartsToLoad = null, $metaReport = null, $dynamicLoad = true) {
	
		require_once('modules/asol_Common/include/commonUtils.php');
		require_once('modules/asol_Reports/include/ReportChart.php');
		
		if (isset($reportId)) {
			$reportBean = asol_Reports::getReportBean($reportId);
			$currentChartEngine = $reportBean->report_charts_engine;
			$isMetaReport = (isset($metaReport) ? $metaReport : ($reportBean->is_meta === '1'));
		} else if (!isset($chartsToLoad)) {
			$chartsToLoad = array('flash', 'html5', 'nvd3');
		}
		
		$returnedScripts = '';
		
		if ($_REQUEST['action'] != 'DynamicAction' || $reportId === null) {
				
			if ((!isset($_REQUEST['asolLoadedReportsLibraries'])) || (!$_REQUEST['asolLoadedReportsLibraries'])) {
					
				$returnedScripts .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>';
				$returnedScripts .= asol_CommonUtils::getLoadJqueryScript(true);
				
				$returnedScripts .= '<link rel="stylesheet" type="text/css" href="modules/asol_Reports/include/css/style.css?version='.str_replace('.', '', self::$reports_version).'">';
				$returnedScripts .= '<script type="text/javascript" src="modules/asol_Reports/include/js/reports.min.js?version='.str_replace('.', '', self::$reports_version).'"></script>';
				$returnedScripts .= asol_CommonUtils::getHeaderNonGregorianCalendar();
				
				if ($dynamicLoad) {
				
					$returnedScripts .=
					'<script type="text/javascript">
						$LAB
						.script("modules/asol_Reports/include/client/helpers/reportsRouter.js?version='.str_replace('.', '', self::$reports_version).'").wait()
						.script("modules/asol_Reports/include/client/helpers/reportsApi.js?version='.str_replace('.', '', self::$reports_version).'").wait(function() {
							reportsApi.setLanguage({
								"blocking" : {
									"load" : "'.translate("LBL_COMMON_LOADING_DATA", "asol_Common").'",
									"save" : "'.translate("LBL_COMMON_SAVING_DATA", "asol_Common").'",
								}
							});
							//***AlineaSol Premium***//
							if (typeof window.hasPremiumViewsJsFeatures == "function"){
								executeBroadcastCommunication(null, "listener");
								executeBroadcastCommunication(null, "publisher");
							}
							//***AlineaSol Premium***//
						})
						.script("modules/asol_Reports/include/client/controllers/controllerDetail.js?version='.str_replace('.', '', self::$reports_version).'");
					</script>';
				
				} else {
					
					$returnedScripts .=
					'<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsRouter.js?version='.str_replace('.', '', self::$reports_version).'"></script>
					<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsApi.js?version='.str_replace('.', '', self::$reports_version).'"></script>
					<script type="text/javascript" src="modules/asol_Reports/include/client/controllers/controllerDetail.js?version='.str_replace('.', '', self::$reports_version).'"></script>
					<script type="text/javascript">
						reportsApi.setLanguage({
							"blocking" : {
								"load" : "'.translate("LBL_COMMON_LOADING_DATA", "asol_Common").'",
								"save" : "'.translate("LBL_COMMON_SAVING_DATA", "asol_Common").'",
							}
						});
						//***AlineaSol Premium***//
						if (typeof window.hasPremiumViewsJsFeatures == "function"){
							executeBroadcastCommunication(null, "listener");
							executeBroadcastCommunication(null, "publisher");
						}
						//***AlineaSol Premium***//
					</script>';
					
				}
							
				$returnedScripts .=
				'<script type="text/javascript" src="modules/asol_Common/include/client/helpers/commonUtils.js"></script>
				<script type="text/javascript" src="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.js"></script>
				<link type="text/css" href="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.css" rel="stylesheet">
				<script type="text/javascript">
					asolFancyMultiEnum.setLanguage({
						"checkAll" : "'.translate("LBL_MULTIENUM_CHECK_ALL_ITEMS", "asol_Common").'",
						"allSelected" : "'.translate("LBL_MULTIENUM_ALL_SELECTED_ITEMS", "asol_Common").'",
						"items" : "'.translate("LBL_MULTIENUM_SELECTED_ITEMS", "asol_Common").'",
					});
				</script>';

				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extendedFunctionsScript = asol_CommonUtils::managePremiumFeature("extendedJavascriptFunctions", "commonFunctions.php", "getExtendedJavaScriptFunctions", null);
				if ($extendedFunctionsScript !== false) {
					$returnedScripts .= $extendedFunctionsScript;
				}
				$extendedReportsFunctionsScript = self::managePremiumFeature("getFormatEditorPremium", "reportFunctions.php", "getFormatEditorPremium", null);
				if ($extendedReportsFunctionsScript !== false) {
					$returnedScripts .= $extendedReportsFunctionsScript;
				}
				$extendedReportsFunctionsScript = self::managePremiumFeature("extendedJavascriptFunctions", "reportFunctions.php", "getExtendedJavaScriptReportsFunctions", null);
				if ($extendedReportsFunctionsScript !== false) {
					$returnedScripts .= $extendedReportsFunctionsScript;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
					
				$_REQUEST['asolLoadedReportsLibraries'] = true;
					
			}
	
			if ((!isset($_REQUEST['asolLoadedPremiumReportsLibraries'])) || (!$_REQUEST['asolLoadedPremiumReportsLibraries']) ) {
					
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$premiumFunctionsScript = self::managePremiumFeature("basicPremiumJavascriptFeature", "reportFunctions.php", "getPremiumJavaScriptFunctions", null);
				if (($premiumFunctionsScript !== false) && ($isMetaReport)) {
					$returnedScripts .= $premiumFunctionsScript;
					$_REQUEST['asolLoadedPremiumReportsLibraries'] = true;
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
					
			}
				
			if ((!isset($_REQUEST['asolHasLoadedChartEngineLibraries'][$currentChartEngine])) || (!$_REQUEST['asolHasLoadedChartEngineLibraries'][$currentChartEngine])) {
					
				if ($reportId != null && $reportBean->report_charts != "Tabl") {
	
					$returnedScripts .= asol_ReportsCharts::getChartEngineLibraries($currentChartEngine, true, false);
					$_REQUEST['asolHasLoadedChartEngineLibraries'][$currentChartEngine] = true;
						
				} else if (isset($chartsToLoad)) {
					
					foreach ($chartsToLoad as $currentEngine) {
						$returnedScripts .= asol_ReportsCharts::getChartEngineLibraries($currentEngine, true, false);
						$_REQUEST['asolHasLoadedChartEngineLibraries'][$currentEngine] = true;
					}
					
				}
					
			}
				
		}
	
		return $returnedScripts;
	
	}
	
	public static function generateDashletReport($reportId, $dashletId, $getLibraries = true, $autoProcessScript = '', $initialExecution = true) {
	
		global $current_user;
			
		if ($initialExecution) {
		
			require_once('modules/asol_Common/include/commonUtils.php');
			require_once("modules/asol_Reports/include/server/controllers/controllerDetail.php");
			require_once('modules/asol_Reports/include/generateReport.php');
		
			$focus = asol_Reports::getReportBean($reportId);
			$isMetaReport = ($focus->is_meta === '1');
			
			if ($isMetaReport) {
		
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
				$extraParams = array(
					'reportId' => $reportId,
					'isDashlet' => true,
					'dashletId' => $dashletId,
					'getLibraries' => false,
					'returnHtml' => true,
					'contextDomainId' => null,
					'currentReportCss' => null
				);
				$executedReportHtml = self::managePremiumFeature("metaReport", "reportFunctions.php", "executeMetaReport", $extraParams);
				if ($executedReportHtml === false) {
					die("Cannot get metaReport Premium Feature. executeMetaReport() Function Called.");
				}
				//***********************//
				//***AlineaSol Premium***//
				//***********************//
		
			} else {
				
				$_REQUEST['dashlet'] = 'true';
				$_REQUEST['dashletId'] = $dashletId;
				$_REQUEST['avoidAjaxRequest'] == 'false';
			
				$executedReportHtml = asol_ControllerReportDetail::display($reportId, true, true);
				$reportLibraries = ($getLibraries ? self::getElementLibraries($reportId) : '');
			
			}
			
		} else {
			
			$executedReportHtml = '';
			$reportLibraries = ($getLibraries ? self::getElementLibraries($reportId) : '');
			
		}
	
		return $reportLibraries.
		'<div class="alineasol_reports">
			<span id="loadingContainer'.$dashletId.'" class="loadingContainer">
				<img class="loadingGIF" src="themes/default/images/img_loading.gif">
				<span class="loadingTEXT">'.translate("LBL_REPORT_LOADING", "asol_Reports").'</span>
			</span>
			'.$executedReportHtml.'
		</div>'.$autoProcessScript;
	
	}
	
	public static function getPreviewContextString($isPreview) {
		
		$contextParameters = array();
		
		if ($isPreview) {
		
			$contextParameters["isPreview"] = "true";
			
			$contextParameters["previewDatabase"] = (isset($_REQUEST['previewDatabase']) && $_REQUEST['previewDatabase'] !== '' ? $_REQUEST['previewDatabase'] : '');
			$contextParameters["previewAudit"] = (isset($_REQUEST['previewAudit']) && $_REQUEST['previewAudit'] !== "" ? $_REQUEST['previewAudit'] : '');
			$contextParameters["previewModule"] = (isset($_REQUEST['previewModule']) && !empty($_REQUEST['previewModule']) ? $_REQUEST['previewModule'] : '');
			$contextParameters["previewDynamicTables"] = (isset($_REQUEST['previewDynamicTables']) && $_REQUEST['previewDynamicTables'] !== '' ? $_REQUEST['previewDynamicTables'] : '');
			$contextParameters["previewDynamicSql"] = (isset($_REQUEST['previewDynamicSql']) && !empty($_REQUEST['previewDynamicSql']) ? $_REQUEST['previewDynamicSql'] : '');
			$contextParameters["previewName"] = (isset($_REQUEST['previewName']) && !empty($_REQUEST['previewName']) ? $_REQUEST['previewName'] : '');
			$contextParameters["previewDisplay"] = (isset($_REQUEST['previewDisplay']) && !empty($_REQUEST['previewDisplay']) ? $_REQUEST['previewDisplay'] : '');
			$contextParameters["previewChartsEngine"] = (isset($_REQUEST['previewChartsEngine']) && !empty($_REQUEST['previewChartsEngine']) ? $_REQUEST['previewChartsEngine'] : '');
			$contextParameters["previewIndexDisplay"] = (isset($_REQUEST['previewIndexDisplay']) && $_REQUEST['previewIndexDisplay'] !== '' ? $_REQUEST['previewIndexDisplay'] : '');
			$contextParameters["previewResultsLimit"] = (isset($_REQUEST['previewResultsLimit']) && !empty($_REQUEST['previewResultsLimit']) ? $_REQUEST['previewResultsLimit'] : '');
			$contextParameters["previewDescription"] = (isset($_REQUEST['previewDescription']) && !empty($_REQUEST['previewDescription']) ? $_REQUEST['previewDescription'] : '');
			$contextParameters["previewFields"] = (isset($_REQUEST['previewFields']) && !empty($_REQUEST['previewFields']) ? $_REQUEST['previewFields'] : '');
			$contextParameters["previewFilters"] = (isset($_REQUEST['previewFilters']) && !empty($_REQUEST['previewFilters']) ? $_REQUEST['previewFilters'] : '');
			$contextParameters["previewCharts"] = (isset($_REQUEST['previewCharts']) && !empty($_REQUEST['previewCharts']) ? $_REQUEST['previewCharts'] : '');
			
		}
		
		return rawurlencode(json_encode($contextParameters));
		
	}
	
	private static function replace_unicode_escape_sequence($match) {
			
		return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
		
	}
	
	public static function unicodeDecode($str) {
		
		$str=preg_replace("/%u/", "\u", $str);
		return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'asol_ReportsUtils::replace_unicode_escape_sequence', $str);
		
	}
	
	public static function checkEditPermisions($focus){
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		$readOnlyMode = asol_ReportsUtils::managePremiumFeature("reportReadOnlyMode", "reportFunctions.php", "getReadOnlyModeFlag", null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		$REPORTS_ACL_EDIT = ACLController::checkAccess('asol_Reports', 'edit', true) && !$readOnlyMode;
		$modifiable['domain'] = (asol_CommonUtils::isDomainsInstalled() ? asol_CommonUtils::domainCanModifyElement($focus->asol_domain_id) : true);
		$modifiable['user'] = asol_CommonUtils::userCanModifyElement($focus->created_by, $focus->assigned_user_id);
		$modifiable['role'] = asol_ReportsUtils::roleCanModifyReport($focus->report_scope);
		
		return ( ($focus->id == NULL && $REPORTS_ACL_EDIT) || ( ( $modifiable['user'] || $modifiable['role'] ) && $modifiable['domain'] && $REPORTS_ACL_EDIT ) );
	}
	
}

?>
