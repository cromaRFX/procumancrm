<?php

class asol_ReportsUtils {

	static public $reports_version = "5.3.2"; 
	
	static public function reports_log($logLevel, $logText, $file, $function=null, $line=null) {
	
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
	
	static public function translateReportsLabel($labelId) {
		
		global $mod_strings;
		
		if ($_REQUEST['module'] === 'asol_Reports')
			return $mod_strings[$labelId];
		else
			return translate($labelId, 'asol_Reports');
		
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
	
	static public function getItemVariables($textWithVars, $usedTokens = array('$'), $usedDelimiters = array('{', '}')) {
		
		$textWithVars = html_entity_decode($textWithVars, ENT_QUOTES);
		$initDelimiter = $usedDelimiters[0];
		$endDelimiter = $usedDelimiters[1];
		
		$processedItems = array();
		$usedItems = array();
		
		foreach ($usedTokens as $usedToken) {
		
			$posInit = strpos($textWithVars, $usedToken.$initDelimiter);
		
			while ($posInit !== false) {
		
				$tmpLast = substr($textWithVars, $posInit);
				$posEnd = strpos($tmpLast, $endDelimiter);
		
				$first = ($posInit === 0) ? "" : substr($textWithVars, 0, $posInit);
				$item = substr($tmpLast, 0, $posEnd+1);
				$last = substr($tmpLast, $posEnd+1);
				$char = ((substr($first, -1) === substr($last, 0, 1)) ? substr($first, -1) : null);
				
				$textWithVars = $first." ASOL ".$last;
		
				if (!in_array($item, $processedItems)) {
					$usedItems[] = array(
						'item' => $item,
						'char' => $char
					);
					$processedItems[] = $item;
				}
		
				$posInit = strpos($textWithVars, $usedToken.$initDelimiter);
		
			}
		
		}

		return $usedItems;
		
	}

	static public function isDomainsInstalled() {
		
		global $db;
		
		if (isset($_SESSION['isDomainsInstalled']) && $_SESSION['isDomainsInstalled']) {
			
			$isDomainsInstalled = $_SESSION['isDomainsInstalled'];
			
		} else {
		
			$domainsQuery = $db->query("SELECT * FROM upgrade_history WHERE id_name='AlineaSolDomains' AND status='installed'");
			$isDomainsInstalled = $_SESSION['isDomainsInstalled'] = ($domainsQuery->num_rows > 0);

		}
		
		return $isDomainsInstalled;
		
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
	
		if (isset($_SESSION['isCommonBaseInstalled']) && $_SESSION['isCommonBaseInstalled']) {
				
			$isCommonBaseInstalled = $_SESSION['isCommonBaseInstalled'];
				
		} else {
	
			$commonBaseQuery = $db->query("SELECT * FROM upgrade_history WHERE id_name='AlineaSolCommonBase' AND status='installed'");
			$isCommonBaseInstalled = $_SESSION['isCommonBaseInstalled'] = ($commonBaseQuery->num_rows > 0);
	
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

}

?>