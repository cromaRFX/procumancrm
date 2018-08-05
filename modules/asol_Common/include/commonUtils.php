<?php

class asol_CommonUtils {

	static public $common_version = "2.8.3";
	
	
	static public function common_log($logLevel, $logText, $file, $function=null, $line=null) {
	
		global $sugar_config;
	
		$asolLogLevelEnabled = ((isset($sugar_config['asolLogLevelEnabled'])) && ($sugar_config['asolLogLevelEnabled'] == true)) ? true : false;
		$logLevel = (($logLevel == 'asol') && (!$asolLogLevelEnabled)) ? 'debug' : $logLevel;
	
		$common_log_prefix = "**********[asol_Common]";
		$GLOBALS['log']->$logLevel($common_log_prefix.': '.pathinfo($file, PATHINFO_BASENAME)."[$line]->".$function.': '.$logText);
	
	}
	
	static public function common_curl($type, $submit_url, $query_string, $site_login = null, $exit = false, $timeout = null) {
	
		global $sugar_config;
	
		$curlReponse = true;
		
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
	
				if ($siteLogin != null) { // Basic Authentication (Site Login)
					curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY) ; // The HTTP authentication method(s) to use.
					curl_setopt($curl, CURLOPT_USERPWD, $siteLogin); // A username and password formatted as "[username]:[password]" to use for the connection.
				}
	
				$curlReponse = curl_exec($curl);
	
				if (curl_errno($curl)) {
					$curlReponse = false;
					self::common_log('fatal', " curl_errno=[".print_r(curl_errno($curl),true)."]", __FILE__, __METHOD__, __LINE__);
				}
	
				curl_close($curl);
				self::common_log('debug', "EXIT cURL REQUEST*******************************************", __FILE__, __METHOD__, __LINE__);
	
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
	
	static public function translateCommonLabel($labelId) {
	
		global $mod_strings;
	
		if ($_REQUEST['module'] === 'asol_Common')
			return $mod_strings[$labelId];
		else
			return translate($labelId, 'asol_Common');
	
	}
	
	/**
	 * 
	 * @param string $userId
	 * @return Ambigous <mixed, multitype:string >
	 */
	static public function getUserConfiguration($userId = null) {
		
		global $current_user, $db, $current_language;
		
		$current_language = strtolower($current_language);
		$userId = (!isset($userId) ? $current_user->id : $userId);
		$userConfiguration = null;
		
		if (!isset($_SESSION['asolCommon_userConfig'])) {
			
			$userConfigResultSet = $db->query("SELECT id, config FROM asol_common_config WHERE deleted=0 AND category='user' AND created_by = '".$userId."' LIMIT 1");
			
			switch($current_language) {
				
				case "fa_ir":
					$defaultUserConfig = array(
						'fiscalMonthInit' => '3',
						'entriesPerPage' => '15',
						'pdfOrientation' => 'landscape',
						'pdfPageFormat'	=> 'A4',
						'pdfImgScalingFactor' => '1.20',
						'weekStartsOn' => '6',
						'calendarType' => 'persian',
						'showGregorianEquiv' => 'on'
					);
					break;
				
				default:
					$defaultUserConfig = array(
						'fiscalMonthInit' => '1',
						'entriesPerPage' => '15',
						'pdfOrientation' => 'landscape',
						'pdfPageFormat'	=> 'A4',
						'pdfImgScalingFactor' => '1.20',
						'weekStartsOn' => '1',
						'calendarType' => 'gregorian'
					);
					break;
					
			}
			
			if ($userConfigResultSet->num_rows > 0) {
			
				$userConfigRow = $db->fetchByAssoc($userConfigResultSet);
				$userConfiguration = unserialize(base64_decode($userConfigRow['config']));
								
				if (!isset($userConfiguration['fiscalMonthInit']) || $userConfiguration['fiscalMonthInit']=="")
					$userConfiguration['fiscalMonthInit'] = $defaultUserConfig['fiscalMonthInit'];
				if (!isset($userConfiguration['entriesPerPage']) || $userConfiguration['entriesPerPage']=="")
					$userConfiguration['entriesPerPage'] = $defaultUserConfig['entriesPerPage'];
				if (!isset($userConfiguration['pdfOrientation']) || $userConfiguration['pdfOrientation']=="")
					$userConfiguration['pdfOrientation'] = $defaultUserConfig['pdfOrientation'];
				if (!isset($userConfiguration['pdfPageFormat']) || $userConfiguration['pdfPageFormat']=="")
					$userConfiguration['pdfPageFormat'] = $defaultUserConfig['pdfPageFormat'];
				if (!isset($userConfiguration['pdfImgScalingFactor']) || $userConfiguration['pdfImgScalingFactor']=="")
					$userConfiguration['pdfImgScalingFactor'] = $defaultUserConfig['pdfImgScalingFactor'];
				if (!isset($userConfiguration['weekStartsOn']) || $userConfiguration['weekStartsOn']=="")
					$userConfiguration['weekStartsOn'] = $defaultUserConfig['weekStartsOn'];
				if (!isset($userConfiguration['calendarType']) || $userConfiguration['calendarType']=="")
					$userConfiguration['calendarType'] = $defaultUserConfig['calendarType'];
			} else {
				$userConfiguration = $defaultUserConfig;
			}
			
			$_SESSION['asolCommon_userConfig'] = $userConfiguration;
			
		} else {
			
			$userConfiguration = $_SESSION['asolCommon_userConfig'];
			
		}
		
		return $userConfiguration;
		
	}
	
	/**
	 * 
	 * @return Ambigous <mixed, multitype:string unknown >
	 */
	static public function getGlobalConfiguration() {
		
		global $sugar_config, $db;
		
		$globalConfiguration = null;
		
		if (!isset($_SESSION['asolCommon_globalConfig'])) {
			
			$globalConfigResultSet = $db->query("SELECT id, config FROM asol_common_config WHERE deleted=0 AND category='global' LIMIT 1");
			
			if ($globalConfigResultSet->num_rows > 0) {
			
				$globalConfigRow = $db->fetchByAssoc($globalConfigResultSet);
				$globalConfiguration = unserialize(base64_decode($globalConfigRow['config']));
			
			} else {
			
				$defaultGlobalConfig = array(
					'storedFilesTtl' => '7',
					'hostName' => $sugar_config['host_name']
				);
			
				$globalConfiguration = $defaultGlobalConfig;
			
			}
			
			$_SESSION['asolCommon_globalConfig'] = $globalConfiguration;
			
		} else {
			
			$globalConfiguration = $_SESSION['asolCommon_globalConfig'];
			
		}
		
		return $globalConfiguration;
		
	}
	
	/**
	 *
	 * @abstract Check if the module Domains is installed
	 * @return boolean
	 */
	static public function isDomainsInstalled() {
		
		global $db;
	
		if (isset ( $_SESSION ['isDomainsInstalled'] ) && $_SESSION ['isDomainsInstalled']) {
			$isDomainsInstalled = $_SESSION ['isDomainsInstalled'];
		} else {
			$domainsQuery = $db->query ( "SELECT name FROM upgrade_history WHERE id_name='AlineaSolDomains' AND status='installed' AND enabled=1" );
			$isDomainsInstalled = $_SESSION ['isDomainsInstalled'] = ($domainsQuery->num_rows > 0);
		}
	
		return $isDomainsInstalled;
		
	}
	
	/**
	 * 
	 * @abstract Check if the module WFM is installed
	 * @return boolean
	 */
	static public function isWFMInstalled() {
		
		global $db;
	
		if ($_SESSION ['isWFMInstalled']) {
			$isWFMInstalled = $_SESSION ['isWFMInstalled'];
		} else {
			$wfmQuery = $db->query ( "SELECT name FROM upgrade_history WHERE id_name='AlineaSolWorkFlowManager' AND status='installed' AND status='installed' AND enabled=1" );
			$isWFMInstalled = $_SESSION ['isWFMInstalled'] = ($wfmQuery->num_rows > 0);
		}
	
		return $isWFMInstalled;
		
	}
	
	/**
	 *
	 * @abstract Check if the module AlineaSolForms&Views is installed
	 * @return boolean
	 */
	static public function isFormsViewsInstalled() {
		
		global $db;
	
		if ($_SESSION ['isFormsViewsInstalled']) {
			$isFormsViewsInstalled = $_SESSION['isFormsViewsInstalled'];
		} else {
			$formsViewsQuery = $db->query ( "SELECT name FROM upgrade_history WHERE id_name='AlineaSolForms&Views' AND status='installed' AND enabled=1" );
			$isFormsViewsInstalled = $_SESSION['isFormsViewsInstalled'] = ($formsViewsQuery->num_rows > 0);
		}
	
		return $isFormsViewsInstalled;
		
	}
	
	/**
	 *
	 * @abstract Check if the module Reports is installed
	 * @return boolean
	 */
	static public function isReportsInstalled() {
		
		global $db;
	
		if ($_SESSION['isReportsInstalled']) {
	
			$isReportsInstalled = $_SESSION['isReportsInstalled'];
		} else {
			$reportsQuery = $db->query ( "SELECT name FROM upgrade_history WHERE id_name='AlineaSolReports' AND status='installed' AND enabled=1" );
			$isReportsInstalled = $_SESSION['isReportsInstalled'] = ($reportsQuery->num_rows > 0);
		}
	
		return $isReportsInstalled;
		
	}

	/**
	 * 
	 * @param unknown $assocArray
	 * @param unknown $key
	 * @param string $ascending
	 * @param string $isInteger
	 */
	public static function sortAssocArray(& $assocArray, $key, $ascending = true, $isInteger = true) {
	
		$keys = '';
	
		if (is_array($key)) {
			foreach($key as $subKey) {
				$keys .= "['".$subKey."']";
			}
		} else {
			$keys = "['".$key."']";
		}
		
		if ($isInteger) {
	
			if ($ascending)
				uasort($assocArray, create_function('$a, $b', "return (int)\$a".$keys." - (int)\$b".$keys.";"));
			else
				uasort($assocArray, create_function('$a, $b', "return (int)\$b".$keys." - (int)\$a".$keys.";"));
	
		} else {
			
			$isAssoc = array_keys($assocArray) !== range(0, count($assocArray) - 1);
			
			$sortFunction = "return strcmp(strtolower(str_replace(array('Á','á','É','é','Í','í','Ó','ó','Ú','ú','Ñ','ñ'), array('A','a','E','e','I','i','O','o','U','u','N','n'), \$a".$keys.")), strtolower(str_replace(array('Á','á','É','é','Í','í','Ó','ó','Ú','ú','Ñ','ñ'), array('A','a','E','e','I','i','O','o','U','u','N','n'), \$b".$keys.")))";
			$sortFunction .= ($ascending ? '' : '*-1').";";

			if ($isAssoc) {
				uasort($assocArray, create_function('$a, $b', $sortFunction));
			} else {
				usort($assocArray, create_function('$a, $b', $sortFunction));
			}

		}
	
	}
	
	public static function getItemVariables($textWithVars, $usedTokens = array('$'), $usedDelimiters = array('{', '}')) {
	
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
	
	static public function getBlockDivs($loadingLabel = false, $savingLabel = false, $module = 'asol_Common') {
	
		return '
		<div id="loadingBlockDiv" style="display: none">
			<img style="display:inline" src="modules/asol_Common/include/client/images/img_loading_'.(isset($loadingLabel) ? 'small' : 'big').'.gif">
			'.(isset($loadingLabel) ? '<span style="display:inline" id="loadingText">&nbsp;'.translate($loadingLabel, $module).'</span>' : '').'
		</div>
		<div id="savingBlockDiv" style="display: none">
			<img style="display:inline" src="modules/asol_Common/include/client/images/img_loading_'.(isset($savingLabel) ? 'small' : 'big').'.gif">
			'.(isset($savingLabel) ? '<span style="display:inline" id="savingText">&nbsp;'.translate($savingLabel, $module).'</span>' : '').'
		</div>';
	
	}
	
	static public function getLoadJqueryScript($loadBlock = false, $loadUI = false, $callback = null) {
	
		return '
		<script type="text/javascript">
		if (typeof jQuery === "undefined") {
	
			$LAB.script("modules/asol_Common/include/client/libraries/jquery.min.js")'.($loadBlock ? '.wait().script("modules/asol_Common/include/client/libraries/jquery.blockUI.js")' : '').($loadUI ? '.wait().script("modules/asol_Common/include/client/libraries/jquery.ui.min.js")' : '').'.wait('.($callback !== null ? $callback : '').');
	
		} else if ((typeof jQuery.blockUI === "undefined") && '.($loadBlock ? 'true' : 'false').') {
	
			$LAB.script("modules/asol_Common/include/client/libraries/jquery.blockUI.js").wait().script("modules/asol_Common/include/client/libraries/jquery.UI.min.js").wait('.($callback !== null ? $callback : '').');
	
		} else if ((typeof jQuery.ui === "undefined") && '.($loadUI ? 'true' : 'false').') {
	
			$LAB.script("modules/asol_Common/include/client/libraries/jquery.UI.min.js").wait('.($callback !== null ? $callback : '').');
	
		} else {
			'.($callback !== null ? $callback.'();' : '').'
		}
		</script>
		';
	
	}
	
	/**
	 * 
	 * @param unknown $module
	 * @param unknown $field
	 * @param unknown $db_type
	 * @return multitype:NULL Ambigous <unknown, string> Ambigous <NULL, unknown> Ambigous <string, unknown>
	 */
	static public function getFieldInfoFromVardefs($module, $field, $db_type) {
	
		//************************************//
		//****Patch incorrect module names****//
		//************************************//
		if ($module == 'campaigns') {
			$module = 'Campaigns';
		}
		if ($module == 'prospectlists') {
			$module = 'ProspectLists';
		}
		//************************************//
		//****Patch incorrect module names****//
		//************************************//
	
		global $app_list_strings, $mod_strings;
	
		$fieldDefs = BeanFactory::newBean($module)->field_defs[$field];

		$label = (isset($fieldDefs['vname']) ? translate($fieldDefs['vname'], $module) : $field);
		$type = $fieldDefs['type'];
		$link = false;
		$enum = null;
	
		if (in_array($type, array('enum', 'multienum', 'radioenum'))) {
	
			$currentOptions = (!empty($fieldDefs['options']) ? $fieldDefs['options'] : "");
	
			if ($currentOptions != '') {
	
				$enum['operator'] = 'options';
				$enum['reference'] = $fieldDefs['options'];
				$enum['values'] = (isset($app_list_strings[$fieldDefs['options']]) ? $app_list_strings[$fieldDefs['options']] : null);
	
			} else if ($fieldDefs['function'] != '') {
	
				$enum['operator'] = 'function';
				$enum['reference'] = $fieldDefs['function'];
				$enum['values'] = (function_exists($fieldDefs['function']) ? $fieldDefs['function']() : null);
	
			}
	
		} else if (!in_array($type, array('currency'))) {
	
			$link = (in_array($type, array('id', 'relate', 'assigned_user_name')));
			$type = $db_type;
				
			$type = (!strncmp($type, 'int', strlen('int'))) ? 'int' : $type;
			$type = (!strncmp($type, 'decimal', strlen('decimal'))) ? 'decimal' : $type;
			$type = (!strncmp($type, 'float', strlen('float'))) ? 'float' : $type;
				
		}
	
		return array(
			'field' => $field,
			'label' => $label,
			'type' => $type,
			'enum' => $enum,
			'link' => $link
		);
	
	}
	
	static public function getRelateFieldModule($module, $field) {
		
		//************************************//
		//****Patch incorrect module names****//
		//************************************//
		if ($module == 'campaigns') {
			$module = 'Campaigns';
		}
		if ($module == 'prospectlists') {
			$module = 'ProspectLists';
		}
		//************************************//
		//****Patch incorrect module names****//
		//************************************//
	
		$field_defs = BeanFactory::newBean($module)->field_defs;
		$result = '';
		foreach ($field_defs as $values) {
			if ($values['id_name'] == $field) {
				$result = $values['module'];
				break;
			}
		}
	
		return $result;
	
	}
	
	static public function getRelationshipsInfoList($usedModule, $lhsModule, $rhsModule, $lhsTable, $rhsTable, $lhsKey, $rhsKey) {
	
		global $beanList, $app_list_strings;
	
		$rels = array();
		$processedRels = array();
	
		if ($usedModule != '') {
				
			if (isset($beanList[$usedModule]) && $beanList[$usedModule]) {
	
				$mod = new $beanList[$usedModule]();
				$getLinkedFields = $mod->get_linked_fields();
				
				foreach($getLinkedFields as $relationship){
					if ($mod->load_relationship($relationship['name'])) {
						$currentRelationship = $mod->$relationship['name'];
						if (isset($currentRelationship)) {
							$rel_object = $currentRelationship->getRelationshipObject();
						} else {
							$rel_object = SugarRelationshipFactory::getInstance()->getRelationship($relationship['relationship']);
						}
	
						$relModulesApply = ((!isset($lhsModule) || $rel_object->def['lhs_module'] == $lhsModule) && (!isset($rhsModule) || $rel_object->def['rhs_module'] == $rhsModule));
						$relTablesApply = ((!isset($lhsTable) || $rel_object->def['lhs_table'] == $lhsTable) && (!isset($rhsTable) || $rel_object->def['rhs_table'] == $rhsTable));
						$relKeysApply = ((!isset($lhsKey) || $rel_object->def['lhs_key'] == $lhsKey) && (!isset($rhsKey) || $rel_object->def['rhs_key'] == $rhsKey));
	
						if (!isset($processedRels[$rel_object->def['name']])) {
	
							if ($relModulesApply && $relTablesApply && $relKeysApply) {
	
								$currentRel = array(
									'relationship_name' => $rel_object->def['name'],
									'lhs_module' => $rel_object->def['lhs_module'],
									'lhs_table' => $rel_object->def['lhs_table'],
									'lhs_key' => $rel_object->def['lhs_key'],
									'rhs_module' => $rel_object->def['rhs_module'],
									'rhs_table' => $rel_object->def['rhs_table'],
									'rhs_key' => $rel_object->def['rhs_key'],
									'join_table' => $rel_object->def['join_table'],
									'join_key_lhs' => $rel_object->def['join_key_lhs'],
									'join_key_rhs' => $rel_object->def['join_key_rhs'],
									'relationship_role_column' => $rel_object->def['relationship_role_column'],
									'relationship_role_column_value' => $rel_object->def['relationship_role_column_value'],
								);
	
								$currentRel['asolRelationShipDirection'] = (!isset($lhsKey) ? 'R2L' : (!isset($rhsKey) ? 'L2R' : null));
	
								$rels[] = $currentRel;
								$processedRels[$currentRel['relationship_name']] = true;
									
							}
								
						}
	
					}
				}
			}
		}
	
		return $rels;
	
	}
	
	static public function getHeaderCodeMirrorLinksHtml() {
	
		return '
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/codemirror.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/matchbrackets.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/xml.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/htmlmixed.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/clike.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/javascript.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/css.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/php.js?version='.str_replace('.', '', self::$common_version).'"></script>
		<script type="text/javascript" src="modules/asol_Common/include/client/libraries/codeMirror/sql.js?version='.str_replace('.', '', self::$common_version).'"></script>
		
		<link rel="stylesheet" type="text/css" href="modules/asol_Common/include/client/libraries/codeMirror/codemirror.css?version='.str_replace('.', '', self::$common_version).'">
		';
	
	}
	
	static public function getHeaderNonGregorianCalendar() {
		$header = "";
		if( !isset($_REQUEST['asolLoadedNonGregorianCalendar']) ){
			global $current_language, $current_user;
			
			//*******Retrieve User Config*******//
			$userConfiguration = self::getUserConfiguration();
			$calendarType = $userConfiguration['calendarType'];
			//CSSs
			$header .= '<link rel="stylesheet" type="text/css" href="modules/asol_Common/include/client/libraries/calendars/redmond.calendars.picker.css?version='.str_replace('.', '', self::$common_version).'">
					<link rel="stylesheet" type="text/css" href="modules/asol_Common/include/client/libraries/calendars/asol_calendar_style.css?version='.str_replace('.', '', self::$common_version).'">';
			//JSs base
			//Ya tenemos JQuery?
			$header.= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.localisation.js?version='.str_replace('.', '', self::$common_version).'"></script>
					<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.calendars.js?version='.str_replace('.', '', self::$common_version).'"></script>
					<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.calendars.plus.js?version='.str_replace('.', '', self::$common_version).'"></script>
					<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.plugin.js?version='.str_replace('.', '', self::$common_version).'"></script> 
	  				<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.calendars.picker.js?version='.str_replace('.', '', self::$common_version).'"></script>';
			
			//Un switch con el parametro del tipo de calendario y cambiar el $header
			switch ($calendarType) {
				case "persian":
					$header .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/jquery.calendars.persian.js?version='.str_replace('.', '', self::$common_version).'"></script>';
					break;
			}
			
			//Para idioma no ingles. Estos cambian los controles.
			switch (strtolower($current_language)) {
				case "fa_ir":
					$header .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/localizations/jquery.calendars-'.strtolower($current_language).'.js?version='.str_replace('.', '', self::$common_version).'"></script>';
					$header .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/localizations/jquery.calendars.picker-'.strtolower($current_language).'.js?version='.str_replace('.', '', self::$common_version).'"></script>';
					break;
					
				default:
					$header .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/localizations/jquery.calendars.picker-'.strtolower($current_language).'.js?version='.str_replace('.', '', self::$common_version).'"></script>';
					break;
			}
			
			$header .= '<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/date.format.js?version='.str_replace('.', '', self::$common_version).'"></script>
					<script type="text/javascript" src="modules/asol_Common/include/client/libraries/calendars/asol_calendarFunctions.js?version='.str_replace('.', '', self::$common_version).'"></script>';
			
			//Inicializacion de contexto
			$userConfiguration = self::getUserConfiguration();
			$calendarType = $userConfiguration['calendarType'];
			$weekStartsOn = $userConfiguration['weekStartsOn'];
			$gregorianEquivalency = (isset($userConfiguration['showGregorianEquiv']) && ($userConfiguration['showGregorianEquiv'] === 'on') ? 'true' : 'false');
			
			$userDate = str_replace(array("Y", "m", "d"), array("yyyy", "mm", "dd"), $current_user->getPreference('datef'));
			$header .= '<script type="text/javascript">
						asolCalendar.setContext({
							"language":"'.strtolower($current_language).'",
							"format":"'.$userDate.'",
							"type":"'.$calendarType.'",
							"weekStartsOn":'.$weekStartsOn.',
							"gregorianEquivalency":'.$gregorianEquivalency.'
						});
					</script>';
			$_REQUEST['asolLoadedNonGregorianCalendar'] = true;
		}
		return $header;
		
	}
	
	public static function manageExportElements($table, $record, $version, $notExportingFields) {
	
		global $db;
		
		$exportedElements = array();
	
		$records = (is_array($record) ? $record : array($record));
		foreach ($records as $recordKey=>$currentRecord) {
				
			$sqlExport = "SELECT * FROM ".$table." WHERE id='".$currentRecord."'";
			$rsExport = $db->query($sqlExport);
			
			$exportedElements[$recordKey]["version"] = "v".$version;
				
			foreach ($db->fetchByAssoc($rsExport) as $fieldKey=>$fieldValue) {
				if (!in_array($fieldKey, $notExportingFields)) {
					$exportedElements[$recordKey][$fieldKey] = $fieldValue;
				}
			}
	
		}

		return $exportedElements;
	
	}
	
	static public function replaceStaticGlobalVars($textWithVars) {
	
		global $current_language, $current_user;
	
		$beanItems = self::getItemVariables($textWithVars);
	
		foreach($beanItems as $beanItem) {
	
			if ($beanItem['item'] == '${this}')
				continue;
	
			$beanField = null;
			$tmpBeanItem = substr(substr($beanItem['item'], 2), 0, -1);
	
			$beanValues = explode("->", $tmpBeanItem);
			$beanValues = (count($beanValues) == 1) ? explode("-&gt;", $tmpBeanItem) : $beanValues;
	
			switch ($beanValues[0]) {
	
				case "global":
					$beanField = $GLOBALS[$beanValues[1]];
					break;
						
				case "current_language":
					$beanField = $current_language;
					break;
					
				case "current_user":
					$beanField = $current_user->$beanValues[1];
					break;
	
				case "request":
					$beanField = $_REQUEST[$beanValues[1]];
					break;
						
			}
				
			if (isset($beanField)) {
				$textWithVars = str_replace($beanItem['item'], $beanField, $textWithVars);
			}
				
		}
	
		return $textWithVars;
	
	}
	
	static public function getPhpFunctionResult($phpInitCode, $returnBoolean = false) {
		
		global $sugar_config;
	
		$phpInitCode = stripslashes($phpInitCode);
		$phpResult = ($returnBoolean ? false : $phpInitCode);
	
		if ((!strncmp($phpInitCode, '[php]', strlen('[php]'))) && (substr($phpInitCode, -(strlen('[/php]'))) === '[/php]')) {
	
			if (isset($sugar_config['asolReportsPhpLibraryFiles'])) {
				foreach ($sugar_config['asolReportsPhpLibraryFiles'] as $asolReportsPhpLibraryFile) {
					require_once($asolReportsPhpLibraryFile);
				}
			}
			
			if (isset($sugar_config['asolFormsPhpLibraryFiles'])) {
				foreach ($sugar_config['asolFormsPhpLibraryFiles'] as $asolFormsPhpLibraryFile) {
					require_once($asolFormsPhpLibraryFile);
				}
			}
	
			$phpCode = str_replace("&#039;", "'", $phpInitCode);
			$phpCode = html_entity_decode(trim(substr(substr($phpCode, 0, -6), 5)), ENT_QUOTES);
				
			$phpResult = eval($phpCode);
	
		}
	
		return $phpResult;
	
	}
	
	/**
	 * 
	 * @param unknown $premiumFeature
	 * @param unknown $requiredFile
	 * @param unknown $callFunction
	 * @param unknown $extraParams
	 * @param string $isJsFile
	 * @return boolean
	 */
	static public function managePremiumFeature($premiumFeature, $requiredFile, $callFunction, $extraParams, $isJsFile = false) {
			
		$basePremiumPath = "modules/asol_Common/include_premium/";
	
		if (!file_exists($basePremiumPath.$requiredFile)) {
	
			if (!$isJsFile)
				self::common_log('warn', "Cannot get ".$premiumFeature." Premium Feature. ".$callFunction."() Function Called.", __FILE__, __METHOD__, __LINE__);
			else
				self::common_log('warn', "Cannot get ".$premiumFeature." Premium Feature. Tried to Load '".$requiredFile."' File", __FILE__, __METHOD__, __LINE__);
			return false;
				
		} else {
	
			if (!$isJsFile) {
				require_once($basePremiumPath.$requiredFile);
				return asol_CommonPremium::$callFunction($extraParams);
			} else {
				return true;
			}
				
		}
	
	}
	
	public static function getAvailableItems($module) {
	
		global $current_user, $db;
	
		if (empty($module)) {
			return array();
		}
		
		$currentTable = BeanFactory::newBean($module)->table_name;
		
		$sql = 'SELECT id, name FROM '.$currentTable.' WHERE deleted=0';
		//**************************//
		//***Is Domains Installed***//
		//**************************//
		if (self::isDomainsInstalled()) {
	
			if ((!$current_user->is_admin) || (($current_user->is_admin) && (!empty($current_user->asol_default_domain)))){
	
				require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
	
				$domainsBean = BeanFactory::getBean('asol_Domains', $current_user->asol_default_domain);
	
				if ($domainsBean->asol_domain_enabled) {
	
					$sql .= " AND ( (".$currentTable.".asol_domain_id='".$current_user->asol_default_domain."')";
	
					if ($current_user->asol_only_my_domain == 0) {
							
						//asol_domain_child_share_depth
						$sql .= asol_manageDomains::getChildShareDepthQuery($currentTable.'.');
						//asol_domain_child_share_depth
	
						//asol_multi_create_domain
						$sql .= asol_manageDomains::getMultiCreateQuery($currentTable.'.');
						//asol_multi_create_domain
	
						//***asol_publish_to_all***//
						$sql .= asol_manageDomains::getPublishToAllQuery($currentTable.'.');
						//***asol_publish_to_all***//
	
						//***asol_child_domains***//
						$sql .= asol_manageDomains::getChildHierarchyQuery($currentTable.'.');
						//***asol_child_domains***//
	
					} else {
							
						$sql .= ") ";
	
					}
	
				} else {
	
					$sql .= " AND (1!=1) ";
	
				}
	
			}
	
		}
		//**************************//
		//***Is Domains Installed***//
		//**************************//
	
		$sql .= " ORDER BY TRIM(name) ASC";
	
		return self::getSelectionResults($sql);
	
	}
	
	public static function getAvailableReferences($module, $record) {
		
		$availableReferences = array();
		
		if ($module == 'asol_Reports') {
		
			$reportBean = BeanFactory::getBean($module, $record);
			$reportFilters = unserialize(base64_decode($reportBean->report_filters));
		
			foreach ($reportFilters['data'] as $currentFilter) {
				if (!empty($currentFilter['filterReference'])) {
					$availableReferences[$currentFilter['filterReference']] = $currentFilter['alias'];
				}
			}
		
		} else if ($module == 'asol_Forms') {
		
			$formBean = BeanFactory::getBean($module, $record);
			$formContent = json_decode(urldecode($formBean->content), true);
		
			foreach ($formContent['panels'] as $currentPanel) {
				foreach ($currentPanel['rows'] as $currentRow) {
					foreach ($currentRow['fields'] as $currentField) {
						if ($currentField['editable'] && !empty($currentField['reference'])) {
							$availableReferences[$currentField['reference']] = $currentField['alias']['text'];
						}
					}
				}
			}
		
		}
		
		return $availableReferences;
		
	}
	
	public static function getAvailableDbFields($source, $db, $module) {
		
		if ($source == 'asol_Forms') {
			require_once("modules/asol_Forms/include/server/formsUtils.php");
			$availableFields = asol_FormsUtils::getAvailableFields('1', array('database' => $db, 'module' => $module));
		} else if ($source == 'asol_Reports') {
			$availableFields = array();
		}
			
		return $availableFields;
		
	}
	
	static public function getSelectionResults($query) {
	
		global $db;
	
		$query = html_entity_decode($query);
		$retArray = array();
	
		self::common_log('debug', 'ASOL_Common query ----> [ '.$query.' ]', __FILE__, __METHOD__, __LINE__);
	
		$queryResults = $db->query($query);
		while ($queryRow = $db->fetchByAssoc($queryResults)) {
			$retArray[] = $queryRow;
		}
			
		return $retArray;
	
	}
	
	static public function modifySqlWhereForAsolDomainsQuery(& $sqlWhere, $domainCommonTable, $current_user, $passThrough, $asolCommonDomainId, $domainField = null, $aliasSuffix = '') {
	
		global $db;
	
		if ((!empty($asolCommonDomainId)) || ($passThrough)) {
	
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
			$domainsBean = BeanFactory::getBean('asol_Domains', $asolCommonDomainId);
	
			if ($domainsBean->asol_domain_enabled) {
	
				if ($domainField !== null) {
	
					if ($domainField != "") {
							
						$externalIdUsage = (isset($domainField["externalIdUsage"]) && $domainField["externalIdUsage"]);
						$domainFieldName = $domainField["fieldName"];
						$domainIsNumeric = ($externalIdUsage ? false : $domainField["isNumeric"]);
						$domainShowUpperLevels = (isset($domainField["showUpperLevels"]) ? $domainField["showUpperLevels"] : false);
	
						$asolCommonDomainValue = ($externalIdUsage ? $domainsBean->external_id : $asolCommonDomainId);
	
						if (isset($domainField["domainRelation"])) {
							$domainCommonTable = $domainField["domainRelation"]["relatedTable"];
						}
	
						$domainFieldChar = ($domainIsNumeric) ? "" : "'";
						$sqlWhere .= (empty($sqlWhere) ? " WHERE " : " AND ")." ( (".$domainCommonTable.$aliasSuffix.".".$domainFieldName."=".$domainFieldChar.$asolCommonDomainValue.$domainFieldChar.") ";
	
						//***asol_child_domains***//
						$childDomainsIds = asol_manageDomains::getChildDomainsArray($asolCommonDomainId);
						$childDomainsStr = array();
						foreach ($childDomainsIds as $key=>$domainId) {
							if (!$domainId['enabled']) {
								array_splice($childDomainsIds, $key, 1);
							} else {
								$childDomainsStr[] = ($externalIdUsage ? $domainId['external_id'] : $domainId['id']);
							}
						}
						$sqlWhere .= (count($childDomainsIds) > 0) ? "OR (".$domainCommonTable.$aliasSuffix.".".$domainFieldName." IN (".$domainFieldChar.implode($domainFieldChar.", ".$domainFieldChar , $childDomainsStr).$domainFieldChar.")) " : " " ;
						//***asol_child_domains***//
	
						//***asol_parent_domains***//
						if ($domainShowUpperLevels) {
							$parentDomainIds = asol_manageDomains::getParentDomainsIds($asolCommonDomainId);
							if (!empty($parentDomainIds)) {
								$sqlWhere .= "OR (".$domainCommonTable.$aliasSuffix.".".$domainFieldName." IN (".$domainFieldChar.implode($domainFieldChar.",".$domainFieldChar , $parentDomainIds).$domainFieldChar.")) ";
							}
						}
						//***asol_parent_domains***//
	
						$sqlWhere .= ") ";
	
					}
	
				} else {
	
					$domainColumn = ($domainCommonTable == 'asol_domains' ? "id" : "asol_domain_id");
					$sqlWhere .= " AND ( (".$domainCommonTable.$aliasSuffix.".".$domainColumn."='".$asolCommonDomainId."') ";
	
					if (($current_user->asol_only_my_domain == 0) || ($passThrough)) {
	
						//***asol_domain_child_share_depth***//
						if (!in_array($domainCommonTable, array('asol_domains'))) {
							$sqlWhere .= asol_manageDomains::getChildShareDepthQuery($domainCommonTable.$aliasSuffix.'.', $asolCommonDomainId);
						}
						//***asol_domain_child_share_depth***//
	
						//***asol_multi_create_domain***//
						if (!in_array($domainCommonTable, array('asol_domains', 'users'))) {
							$sqlWhere .= asol_manageDomains::getMultiCreateQuery($domainCommonTable.$aliasSuffix.'.', $asolCommonDomainId);
						}
						//***asol_multi_create_domain***//
	
						//***asol_publish_to_all***//
						if (!in_array($domainCommonTable, array('asol_domains'))) {
							$sqlWhere .= asol_manageDomains::getPublishToAllQuery($domainCommonTable.$aliasSuffix.'.', $asolCommonDomainId);
						}
						//***asol_publish_to_all***//
							
						//***asol_child_domains***//
						$sqlWhere .= asol_manageDomains::getChildHierarchyQuery($domainCommonTable.$aliasSuffix.'.', $asolCommonDomainId);
						//***asol_child_domains***//
	
					} else {
	
						$sqlWhere .= ") ";
	
					}
	
				}
	
			} else {
	
				$sqlWhere .= " AND (1!=1) ";
	
			}
	
		}
	
	}
	
	public static function manageElementDomain($tableName, $elementId, $userDomainId, $elementDomainId) {

		global $db;
	
		require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
	
		$domainQuery = $db->query("SELECT * FROM ".$tableName." WHERE id='".$elementId."' LIMIT 1");
		$domainRow = $db->fetchByAssoc($domainQuery);
	
		$domainIsPublished = ($domainRow['asol_published_domain'] == '1' ? true : false);
		$domainPublishedMode = $domainRow['asol_domain_published_mode'];
		$domainPublishedLevels = ($domainRow['asol_domain_child_share_depth'] === ';;' ? array() : explode(';;', substr($domainRow['asol_domain_child_share_depth'], 1, -1)));
		$domainPublishedDomains = ($domainRow['asol_multi_create_domain'] === ';;' ? array() : explode(';;', substr($domainRow['asol_multi_create_domain'], 1, -1)));
		
		$domainPublishingInfo = array(
			'domains' => $domainPublishedDomains,
			'levels' => $domainPublishedLevels,
			'mode' => $domainPublishedMode,
			'mainDomain' => $elementDomainId,
			'isPublished' => $domainIsPublished
		);
	
		$publishedDomains = asol_manageDomains::getDomainsPublished($domainPublishingInfo);
		$parentDomains = asol_manageDomains::getParentDomainsIds($elementDomainId, true);
			
		return (in_array($userDomainId, array_merge($publishedDomains, $parentDomains)));
			
	}
	
	public static function getElementByDomainManagementHtml($switchDomainCallBack, $copyDomainCallBack) {

		global $current_user, $mod_strings;
		$commonDomainId = $current_user->asol_default_domain;
		
		$returnedHtml="";
		
		if(self::isDomainsInstalled()){
		
			require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
			
			$returnedHtml .= asol_manageDomains::getJqueryPlugins();
			$returnedHtml .= '<div id="asolCommonAvailableDomainsSelection" style="display: none">
								<input type="hidden" id="asolCommonCurrentDomain" value="'.$commonDomainId.'">
								<input type="hidden" id="asolCommonDomain" value="'.$commonDomainId.'">
								<table class="list view">
									<tbody>
										<tr>
											<th>'.translate('LBL_COMMON_MANAGE_DOMAIN_ADD_REMOVE', 'asol_Common').'</th>
										</tr>
										<tr>
											<td><div id="commonAvailableDomainsDiv">'.asol_manageDomains::getChildDomainsSelectHtml($commonDomainId, 'modules/asol_Forms/include/client/images/asol_forms_addline.png', $switchDomainCallBack).'</div></td>
										</tr>
									</tbody>
								</table>
								<table class="list view">
									<tbody>
										<tr>
											<th>'.translate('LBL_COMMON_MANAGE_DOMAIN_COPY_FROM', 'asol_Common').'</th>
										</tr>
										<tr>
											<td>
												<select id="commonAvailableCopyDomains">
													<option value=""></option>
												</select>
												<input type="button" value="'.translate('LBL_COMMON_MANAGE_DOMAIN_COPY', 'asol_Common').'" onClick="'.$copyDomainCallBack.'">
											</td>
										</tr>
									</tbody>
								</table>
							</div>';
			$returnedHtml .= asol_manageDomains::getJsTreeInitialization('commonAvailableDomainsDiv', false);
			
		}
		return $returnedHtml;
		
	}
	
	public static function getElementByDomainSelectorHtml($usedDomains, $initDisabled, $containerClass, $changeDomainCallBack) {
	
		global $current_user;
		$commonDomainId = $current_user->asol_default_domain;
		
		$domainViewPanelSelector = '';
		
		if (self::isDomainsInstalled()) {
		
			$domainViewPanelSelector .= '<select class="asolCommonUsedDomains" restore="'.$commonDomainId.'" style="min-width: 200px;" onChange="'.$changeDomainCallBack.'" '.($initDisabled ? 'disabled' : '').'>';
			$domainViewPanelSelector .= '<option value="'.$commonDomainId.'" selected>'.BeanFactory::getBean('asol_Domains', $commonDomainId)->name.'</option>';
			foreach ($usedDomains as $usedDomainId) {
				$domainViewPanelSelector .= '<option value="'.$usedDomainId.'">'.BeanFactory::getBean('asol_Domains', $usedDomainId)->name.'</option>';
			}
			$domainViewPanelSelector .= '</select>';
			$domainViewPanelSelector .= '&nbsp;<img title="'.translate('LBL_COMMON_MANAGE_DOMAIN_TITLE', 'asol_Common').'" class="asol_icon clickable domains" style="vertical-align: sub; display: '.($initDisabled ? 'none' : 'inline').';" src="modules/asol_Common/include/client/images/asol_common_domains_management.png" onClick="openDomainManagementElementPanel(\''.$commonDomainId.'\', this, '.(isset($containerClass) ? "'".$containerClass."'" : 'null').');">';
		
		}
		
		return $domainViewPanelSelector;
		
	}
		
	public static function userCanModifyElement($createdBy, $assignedUser) {
	
		global $current_user;
	
		return (($current_user->id == $createdBy) || ($current_user->id == $assignedUser) || ($current_user->is_admin) ? true : false);
	
	}
	
	public static function domainCanModifyElement($domainId) {
	
		require_once("modules/asol_Domains/AlineaSolDomainsFunctions.php");
	
		global $current_user;
	
		$parentDomains = asol_manageDomains::getParentDomainsWithHeight($current_user->asol_domain_id);
	
		$parentDomainsIds = array();
		foreach ($parentDomains as $parentDomain) {
			$parentDomainsIds[] = $parentDomain['id'];
		}
	
		return (!in_array($domainId, $parentDomainsIds));
	
	}

	public static function saveMenuFile($conf) {

		$usedMenus = $conf['menus'];
	
		//*************************//
		//***Extension Menu File***//
		//*************************//
		$customExtensionDir = "custom/Extension/modules/".$conf['module']."/Ext/Menus";
		if (!is_dir($customExtensionDir)) {
			mkdir($customExtensionDir, 0777, true);
		}
		
		$commonMenuFileManager = fopen($customExtensionDir."/AlineaSolCommonMenus.php", "w+");
	
		$commonMenuFileContent = '<?php

if (is_file("modules/asol_Common/include/commonUtils.php")) {
				
	require_once("modules/asol_Common/include/commonUtils.php");
		
	$common_menu_configuration = array(
		"module" => "'.$conf['module'].'",
		"override" => '.($conf['override'] ? 'true' : 'false').',
		"menus" => '.var_export($conf['menus'], true).'
	);

	asol_CommonUtils::getModuleMenus($common_menu_configuration, $module_menu);

}
		
?>';
	
		$writeMenuSuccess = fwrite($commonMenuFileManager, $commonMenuFileContent);
		fclose($commonMenuFileManager);
		//*************************//
		//***Extension Menu File***//
		//*************************//
	
	
		//**************************//
		//***Extension Forms File***//
		//**************************//
		$customExtensionDir = "modules/".$conf['module'];
		$commonMenuFileManager = fopen($customExtensionDir."/AlineaSolCommonMenus.php", "w+");
	
		$commonMenuFileContent = '<?php
	
if (is_file("modules/asol_Common/include/commonUtils.php")) {
				
	require_once("modules/asol_Common/include/commonUtils.php");
	asol_CommonUtils::executeModuleMenu($_REQUEST["type"], $_REQUEST["id"], $_REQUEST["url"], $_REQUEST["title"], $_REQUEST["javascript"]);
	
}
				
?>';
	
		$writeElementSuccess = fwrite($commonMenuFileManager, $commonMenuFileContent);
		fclose($commonMenuFileManager);
		//**************************//
		//***Extension Forms File***//
		//**************************//
	
		$writeSuccess = ($writeMenuSuccess !== false && $writeElementSuccess !== false);
		if ($writeSuccess) {
	
			error_reporting(1); //E_ERROR
	
			require_once("modules/Administration/QuickRepairAndRebuild.php");
	
			$rac = new RepairAndClear();
			$rac->repairAndClearAll(array('clearAll'), array($conf['module']), true, false);
	
		}
	
		return ($writeSuccess ? translate('LBL_COMMON_MENU_CREATION_OK', 'asol_Common') : translate('LBL_COMMON_MENU_CREATION_NOK', 'asol_Common'));
	
	}

public static function getCurrentUserRolesIds(){
	
	global $current_user;
	
	$currentUserRoles = array();
	foreach (ACLRole::getUserRoles($current_user->id, false) as $role) {
		$currentUserRoles[] = $role->id;
	}
	
	return $currentUserRoles;
}	
	
public static function getModuleMenus($conf, & $menu) {
		
		global $current_user, $current_language;
				
		if ($conf["override"]) {
			$menu = array();
		}
		
		$currentUserRoles = array();
		foreach (ACLRole::getUserRoles($current_user->id, false) as $role) {
			$currentUserRoles[] = $role->id;
		}
				
		foreach ($conf["menus"] as $currentMenu) {

			if ((in_array($currentMenu["type"], array('asol_Forms', 'asol_Views')) && self::isFormsViewsInstalled()) || (($currentMenu["type"] == 'asol_Reports') && self::isReportsInstalled()) || (!empty($currentMenu["url"]))) {
			
				$roles_access = false;
				$acls_access = false;
				
				if (!empty($currentMenu["roles"])) {
					foreach ($currentMenu["roles"] as $currentRole) {
						$roles_access = in_array($currentRole, $currentUserRoles);
						if ($roles_access) {
							break;
						}
					}
				}
				
				if (!empty($currentMenu["acls"])) {
					foreach ($currentMenu["acls"] as $currentAcl) {
						$acls_access = ACLController::checkAccess($conf["module"], $currentAcl, true);
						if (!$acls_access) {
							break;
						}
					}
				}
				
				$roles_access = ($roles_access || empty($currentMenu["roles"]) || empty($currentUserRoles));
				$acls_access = ($acls_access || empty($currentMenu["acls"]) || empty($currentUserRoles));
					
			}
			
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array('properties' => $currentMenu["properties"], 'elementDomain' => $current_user->asol_domain_id);
			$properties_access = self::managePremiumFeature("checkPropertiesAccess", "commonFunctions.php", "propertiesUnAppliesConditions", $extraParams);
			$properties_access = !$properties_access;
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				
			if ($roles_access && $acls_access && $properties_access) {
				$menuLabel = (isset($currentMenu["language"][$current_language]) ? $currentMenu["language"][$current_language] : $currentMenu["label"]);
				$menuJsFile = $currentMenu["javascript"];
				if (!empty($currentMenu["type"]) && !empty($currentMenu["record"])) {
					$currentUrl = "index.php?module=".$conf["module"]."&action=AlineaSolCommonMenus&type=".$currentMenu["type"]."&id=".$currentMenu["record"];
				} else if (!empty($currentMenu["url"])) {
					if ($currentMenu["url"]["mode"] == "local") {
						$currentUrl = $currentMenu["url"]["value"];
					} else {
						$currentUrl = "index.php?module=".$conf["module"]."&action=AlineaSolCommonMenus&url=".rawurlencode($currentMenu["url"]["value"])."&title=".rawurlencode($menuLabel)."&javascript=".rawurlencode($menuJsFile);
					}
				}
				$menu[] = array($currentUrl, $menuLabel, $conf["module"], $conf["module"]);
			}

		}
		
	}
	
	public static function getCurrentRoles() {
		
		global $db, $current_user;
		
		$roles = array();
		
		if (self::isDomainsInstalled() && (!empty($current_user->asol_default_domain)))
			$queryRoles = $db->query("SELECT acl_roles.id, acl_roles.name FROM acl_roles LEFT JOIN asol_domains_aclroles ON acl_roles.id=asol_domains_aclroles.aclrole_id WHERE asol_domains_aclroles.asol_domain_id = '".$current_user->asol_default_domain."' AND acl_roles.deleted = 0 ORDER BY acl_roles.name ASC");
		else
			$queryRoles = $db->query("SELECT id, name FROM acl_roles WHERE deleted = 0 ORDER BY name ASC");
		
		while ($queryRow = $db->fetchByAssoc($queryRoles)){
			$roles[] = array(
				'id' => $queryRow['id'],
				'name' => $queryRow['name']
			);
		}
		
		return $roles;
		
	}
	
	public static function executeModuleMenu($type, $id, $url, $title, $javascript) {
				
		if (empty($id) && empty($url)) {
			SugarApplication::redirect('index.php?module='.$_REQUEST['module']);
		}
		
		if (!empty($type)) {
		
			$_REQUEST['dashlet'] = 'true';
			$_REQUEST['dashletId'] = null;
			
			if (($type == 'asol_Reports') && self::isReportsInstalled()) {

				require_once("modules/asol_Reports/include/server/controllers/controllerDetail.php");
				require_once("modules/asol_Reports/include/server/reportsUtils.php");
						
				echo asol_ReportsUtils::getElementLibraries($id, null, null, false);
				echo asol_ControllerReportDetail::display($id, true, true);
				
			} else if (($type == 'asol_Forms') && self::isFormsViewsInstalled()) {
			
				require_once("modules/asol_Forms/include/server/controllers/controllerDetail.php");
				require_once("modules/asol_Forms/include/server/formsUtils.php");
				
				echo asol_FormsUtils::getElementLibraries(false);
				echo asol_ControllerFormDetail::display($id, true, true);
			
			} else if (($type == 'asol_Views') && self::isFormsViewsInstalled()) {
	
				require_once("modules/asol_Views/include/server/controllers/controllerDetail.php");
				require_once("modules/asol_Views/include/server/viewsUtils.php");
				
				echo asol_ViewsUtils::getElementLibraries(false);
				echo asol_ControllerViewDetail::display($id, true, true);
			
			}
			
		} else if (!empty($url)) {
			
			echo '
			<div class="moduleTitle">
				<h2>'.rawurldecode($title).'</h2>
				<div class="clear"></div>
			</div>
			'.(!empty($javascript) ? '<script type="text/javascript" src="'.rawurldecode($javascript).'"></script>' : '').'
			<iframe src="'.rawurldecode($url).'" scrolling="auto" id="asolIFrame" height="750" frameborder="no" width="100%"></iframe>';
			
		}
		
	}
	
	static public function getCommonHideLoadingCss($dashletId) {
	
		return '<style>
			#loadingContainer'.$dashletId.' {
				display: none;
			}
		</style>';
	
	}
	
	static public function unformatNumber($value){
		
		global $sugar_config , $current_user; 
		
		$user_dec_sep = $current_user->getPreference('dec_sep');
		$dec_sep = (empty($user_dec_sep) ? $sugar_config['default_decimal_seperator'] : $user_dec_sep);
			
		$user_num_grp_sep = $current_user->getPreference('num_grp_sep');
		$num_grp_sep = (empty($user_num_grp_sep) ? $sugar_config['default_number_grouping_seperator'] : $user_num_grp_sep);
		
		if($dec_sep === '.')
			$value = floatval(str_replace(',', '', $value));
		if ($num_grp_sep === '.' && $dec_sep === ',')
			$value = floatval(str_replace(',', '.', str_replace('.', '', $value)));
		
		return $value;
		
	}
	
	static public function ajaxTracker($record, $name, $module, $force = false) {
		
		global $current_user;
		
		$isWithinModule = (isset($_REQUEST['module']) && ($_REQUEST['module'] === $module));
		if ($isWithinModule || $force) {
			
			$trackerManager = TrackerManager::getInstance();
			
			if ($monitor = $trackerManager->getMonitor('tracker')) {

				$monitor->setValue('date_modified', $GLOBALS['timedate']->nowDb());
				$monitor->setValue('user_id', $current_user->id);
				$monitor->setValue('module_name', $module);
				$monitor->setValue('action', 'DetailView');
				$monitor->setValue('item_id', $record);
				$monitor->setValue('item_summary', trim($name));
				$monitor->setValue('visible', true);
				$trackerManager->saveMonitor($monitor);
				
			}
			
			$trackerManager->save();
			$tracker = new Tracker();
			$tracker->get_recently_viewed($current_user->id, $module);
			
		}
		
	}
	
	public static function hasPreviewExecution($modulePrefix){
		
		global $sugar_config, $current_user;
		
		$previewExecutionScope = (isset($sugar_config[$modulePrefix."PreviewExecutionScope"]) ? $sugar_config[$modulePrefix."PreviewExecutionScope"] : 2);
		
		$hasPreviewExecution = true;
		if (($previewExecutionScope === 0) || (($previewExecutionScope === 1) && (!$current_user->is_admin))) {
			$hasPreviewExecution = false;
		} else if (($previewExecutionScope === 3) && (!$current_user->is_admin)) {
			$userRoles = $_SESSION['asolUserRoles'] = ((isset($_SESSION['asolUserRoles'])) && (!empty($_SESSION['asolUserRoles']))) ? $_SESSION['asolUserRoles'] : ACLRole::getUserRoles($current_user->id);
			foreach ($userRoles as $userRole) {
				if (!in_array($userRole, $sugar_config[$modulePrefix."PreviewExecutionRoles"])) {
					$hasPreviewExecution = false;
					break;
				}
			}
		}
		
		return $hasPreviewExecution;
		
	}
	
	public static function dateToPersian($date, $dateTime, $dateFormat) {
		
		global $timedate, $current_language;
		
		if ($current_language == 'fa_ir') {
			$dateFormat = implode(' ', array_reverse(explode(' ', $dateFormat)));
		}

		$date = split('-', date('Y-m-d-H-i-s', strtotime($date)));
		
		$g_y = $date[0];
		$g_m = $date[1];
		$g_d = $date[2];
		$g_H = $date[3];
		$g_i = $date[4];
		$g_s = $date[5];
				
		$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
		
		$gy = $g_y-1600;
		$gm = $g_m-1;
		$gd = $g_d-1;
		
		$g_day_no = 365*$gy+~~(($gy+3)/4)-~~(($gy+99)/100)+~~(($gy+399)/400);
		
		for ($i=0; $i < $gm; ++$i)
			$g_day_no += $g_days_in_month[$i];
		
		if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0)))
			$g_day_no++;
		
		$g_day_no += $gd;
		$j_day_no = $g_day_no-79;
		$j_np = ~~($j_day_no/12053);
		$j_day_no = $j_day_no % 12053;
		$jy = 979+33*$j_np+4*~~($j_day_no/1461);
		$j_day_no %= 1461;
		
		if ($j_day_no >= 366) {
			$jy += ~~(($j_day_no-1)/365);
			$j_day_no = ($j_day_no-1)%365;
		}
		
		for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
			$j_day_no -= $j_days_in_month[$i];
		
		$jm = $i+1;
		$jd = $j_day_no+1;
				
		$jm = ($jm < 10 ? '0'.$jm : $jm);
		$jd = ($jd < 10 ? '0'.$jd : $jd);
		
		if ($dateTime) {
			$date = $jy.'-'.$jm.'-'.$jd.' '.$g_H.':'.$g_i.':'.$g_s;
			$dbFormat = $timedate->get_db_date_time_format();
		} else {
			$date = $jy.'-'.$jm.'-'.$jd;
			$dbFormat = $timedate->dbDayFormat;
		}
		
		$date = str_replace(array('Y', 'm', 'd', 'H', 'i', 's'), array($jy, $jm, $jd, $g_H, $g_i, $g_s), $dateFormat);
		
		if ($current_language == 'fa_ir') {
			self::numbersToPersian($date);
		}
		
		return $date;
	
	}
	
	public static function numbersToPersian(&$string, $return = false) {
		
		$persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
		if (!$return) {
			$string = str_replace(range(0, 9), $persian, $string);
		} else { 
			return str_replace(range(0, 9), $persian, $string);
		}
		
	}
	
	public static function currency_format($number) {
				
		global $locale,  $sugar_config;
		
		$currencySymbol = $locale->translateCharset($sugar_config['default_currency_symbol'], 'UTF-8', $locale->getExportCharset());
		$positionCurrencySymbol = $sugar_config['asolCommonCurrencyConfig'][$sugar_config['default_currency_iso4217']]['symbolPosition'];
		$params = array('currency_symbol' => false);
		
		if (isset($sugar_config['asolCommonCurrencyConfig'][$sugar_config['default_currency_iso4217']]['hasCents']) && !$sugar_config['asolCommonCurrencyConfig'][$sugar_config['default_currency_iso4217']]['hasCents']) {
			$params['decimals'] = 0;
		}
		
		$formatedNumber = currency_format_number($number, $params);
		
		switch ($positionCurrencySymbol) {
			
			case 'right':
				return $formatedNumber.$currencySymbol;			
				break;
				
			default: //or left
				return $currencySymbol.$formatedNumber;
				break;
				
		}
		
	}
	
}
