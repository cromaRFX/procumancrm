<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");

class asol_Reports extends Basic {

	var $id;
	var $name;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $description;
	var $deleted;
	var $assigned_user_id;
	var $internal_id;
	var $last_run;
	var $report_module;
	var $report_scope;
	var $report_fields;
	var $report_filters;
	var $report_type;
	var $report_scheduled_type;
	var $report_attachment_format;
	var $report_tasks;
	var $report_charts;
	var $report_charts_engine;
	var $report_charts_detail;
	var $scheduled_images;
	var $dynamic_tables;
	var $dynamic_sql;
	var $row_index_display;
	var $results_limit;
	var $email_list;
	var $audited_report;
	var $alternative_database;
	var $is_meta;
	var $meta_html;
	
	var $avoidUpdateDomain = false;

	static public $reported_error = null;

	var $table_name = "asol_reports";
	var $object_name = "asol_Reports";
	var $module_dir = "asol_Reports";

	var $importable = true;
	var $tablePath;
	var $joinSegments;
	var $rootGuid;
	var $fromString;

	var $evalSQLFunctions = true;
	var $maxDepth;

	function asol_Reports() {
		parent::Basic();
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}

	function get_summary_text()	{
		return $this->name;
	}

	function fill_in_additional_detail_fields()	{
		parent::fill_in_additional_detail_fields();
	}

	static public function getReportBean($reportId) {
		
		if (empty($reportId)) {
			
			$focus = BeanFactory::newBean('asol_Reports');
			
		} else {
		
			global $db;
	
			$sessionlessEntrypoints = array('viewReport');
			
			if (isset($_REQUEST['entryPoint']) && (in_array($_REQUEST['entryPoint'], $sessionlessEntrypoints))) {
			
				$focus = new stdClass();
			
				$reportsQuery = $db->query("SELECT * FROM asol_reports WHERE id='".$reportId."' AND deleted=0 LIMIT 1");
				$rowReport = $db->fetchByAssoc($reportsQuery);
			
				foreach ($rowReport as $key=>$value) {
					$focus->$key = $value;
				}
				
			} else {
				
				$focus = BeanFactory::getBean('asol_Reports', $reportId);
				
			}
		
		}
		
		return $focus;
	
	} 
	
	static public function getMySqlConnection($notCrmExternalDb, $overrideConnection = null) {
		
		global $sugar_config;
		
		if ($notCrmExternalDb !== false) {
				
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$extraParams = array(
				'notCrmExternalDb' => $notCrmExternalDb,
				'overrideConnection' => $overrideConnection
			);
			
			$mysqli = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "getConnectionToExternalDb", $extraParams);
			
			if (!$mysqli) {
				self::$reported_error = 'ASOL_Reports ErrorConnection ----> [ externalDatabasesReports Premium Feature not Enabled ]';
				asol_ReportsUtils::reports_log('fatal', 'ASOL_Reports ErrorConnection ----> [ externalDatabasesReports Premium Feature not Enabled ]', __FILE__, __METHOD__, __LINE__);
				return false;
			}
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
						
		} else {

			$address = (isset($overrideConnection['address']) ? $overrideConnection['address'] : $sugar_config["asolReportsDbAddress"]);
			$user = (isset($overrideConnection['user']) ? $overrideConnection['user'] : $sugar_config["asolReportsDbUser"]);
			$password = (isset($overrideConnection['password']) ? $overrideConnection['password'] : $sugar_config["asolReportsDbPassword"]);
			$database = (isset($overrideConnection['database']) ? $overrideConnection['database'] : $sugar_config["asolReportsDbName"]);
			$port = (isset($overrideConnection['port']) ? $overrideConnection['port'] : $sugar_config["asolReportsDbPort"]);
			
			$mysqli = new mysqli($address, $user, $password, $database, $port);
			
		}

		if (mysqli_connect_errno()) {
			self::$reported_error = 'Connect failed: '.mysqli_connect_error();
			asol_ReportsUtils::reports_log('fatal', 'Connect failed: '.mysqli_connect_error(), __FILE__, __METHOD__, __LINE__);
			return false;
		}

		$mysqli->set_charset("utf8");
		
		return $mysqli;
		
	}
	
	static public function manageMaxAllowedResultsReached($isScheduled, $productResults, $query) {
		
		global $sugar_config, $mod_strings;

		if (isset($_REQUEST['record'])) {
		
			asol_ReportsUtils::reports_log('fatal', 'ASOL_Reports Reached Max Allowed Results [ '.$productResults.' rows tried to be managed by SQL ]', __FILE__, __METHOD__, __LINE__);
			
			if ($isScheduled) {

				$currentReport = BeanFactory::getBean('asol_Reports', $_REQUEST['record']);
			
				//Enviar email a creador del informe!!!!
				$mail = new SugarPHPMailer();
					
				if (asol_CommonUtils::isDomainsInstalled()) {
					$mail->setMailerForSystem($currentReport->asol_domain_id);
				} else {
					$mail->setMailerForSystem();
				}
				$user = new User();
					
				//created by
				$mail_config = $user->getEmailInfo($currentReport->created_by);
					
				$mail->From = (isset($sugar_config["asolReportsEmailsFrom"])) ? $sugar_config["asolReportsEmailsFrom"] : $mail_config['email'];
				$mail->FromName = (isset($sugar_config["asolReportsEmailsFromName"])) ? $sugar_config["asolReportsEmailsFromName"] : $mail_config['name'];
					
				//Timeout del envio de correo
				$mail->Timeout = 30;
				$mail->CharSet = "UTF-8";
					
				//Emails de los destinatarios
				$mail->AddAddress($sugar_config['asolReportsMaxAllowedResultsEmailAddressNotification']);
				$mail->AddAddress($mail_config['email']);
		
					
				//Datos del email en si
				$mail->Subject = $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_SUBJECT']." '".$currentReport->name."'";
					
				$mail->Body = $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY1']." [".$sugar_config['asolReportsMaxAllowedResults']."]. ".$productResults." ".$mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY2']."<br><br>";
				$mail->Body .= $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY3'].": <b>".$query."</b>";
					
				//Mensaje en caso de que el destinatario no admita emails en formato html
				$mail->AltBody = $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY1']." [".$sugar_config['asolReportsMaxAllowedResults']."]. ".$productResults." ".$mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY2']."\n\n";
				$mail->AltBody .= $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY3'].": <b>".$query."</b>";
					
				$success = $mail->Send();
					
				$tries=1;
				while ((!$success) && ($tries < 5)) {
						
					sleep(5);
					$success = $mail->Send();
					$tries++;
						
				}

				exit();

			} else {
				
				self::$reported_error = $mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY1']." [".$sugar_config['asolReportsMaxAllowedResults']."]. ".$productResults." ".$mod_strings['LBL_REPORT_MAX_ALLOWED_RESULTS_BODY2'];
				
			}
			
		}
		
	}
	
	/*
	$readHandlerQuery = $db->query("SHOW GLOBAL STATUS LIKE 'Handler_read_rnd_next'");
	$readHandlerRow = $db->fetchByAssoc($readHandlerQuery);
	$rowsProcessedPerSecond = $readHandlerRow[0]['Value'];
	asol_ReportsUtils::reports_log('asol', 'Rows Processed Per Second Right Now: '.$rowsProcessedPerSecond, __FILE__, __METHOD__, __LINE__);
	*/
	
	static public function getSelectionResults($query, $columnAsKey = null, $useAlternativeDb = true, $notCrmExternalDb = false, $overrideConnection = null, $detailColumn = null, $formatInfo = null, $avoidLogging = false) {

		global $sugar_config, $db, $current_user, $mod_strings;

		self::$reported_error = (self::$reported_error === null) ? null : self::$reported_error;
		
		if (!empty(self::$reported_error))
			return;
		
		$query = html_entity_decode($query);
		$retArray = array();
		
		if (!$avoidLogging) {
			asol_ReportsUtils::reports_log('debug', 'ASOL_Reports query ----> [ '.$query.' ]', __FILE__, __METHOD__, __LINE__);
		}
		
		if (((!isset($sugar_config["asolReportsDbAddress"])) || (!$useAlternativeDb)) && ($notCrmExternalDb === false)) {

			$queryResults = $db->query($query);

			while ($queryRow = $db->fetchByAssoc($queryResults)) {
				if (isset($detailColumn)) {
					$theGroup = asol_ReportsGenerateQuery::formatDateSpecialsGroup($formatInfo['reportId'], $formatInfo['dashletId'], $queryRow['asol_grouping_field'], $detailColumn, $formatInfo['userDateFormat'], $formatInfo['userTZ'], $formatInfo['gmtDates']);
					unset($queryRow['asol_grouping_field']);
					$theGroup = (($theGroup === '') ? $mod_strings['LBL_REPORT_NAMELESS'] : $theGroup);
					$retArray[$theGroup][] = $queryRow;
				} else {
					if (isset($columnAsKey)) {
						$retArray[$queryRow[$columnAsKey]] = $queryRow;
					} else {
						$retArray[] = $queryRow;
					}
				}
			}
				
		} else {

			$mysqli = self::getMySqlConnection($notCrmExternalDb, $overrideConnection);
			if ($mysqli === false) {
				return;
			}

			$queryResults = $mysqli->query($query);
				
			if (!$queryResults) {

				if (!$avoidLogging) {
					self::$reported_error = mysqli_error($mysqli);
					asol_ReportsUtils::reports_log('fatal', 'ASOL_Reports ErrorQuery ----> [ '.mysqli_error($mysqli).' ]', __FILE__, __METHOD__, __LINE__);
				}
				
			} else {

				while ($queryRow = $queryResults->fetch_assoc()) {
					if (isset($detailColumn)) {
						$theGroup = asol_ReportsGenerateQuery::formatDateSpecialsGroup($formatInfo['reportId'], $formatInfo['dashletId'], $queryRow['asol_grouping_field'], $detailColumn, $formatInfo['userDateFormat'], $formatInfo['userTZ'], $formatInfo['gmtDates']);
						unset($queryRow['asol_grouping_field']);
						$theGroup = (($theGroup === '') ? $mod_strings['LBL_REPORT_NAMELESS'] : $theGroup);
						$retArray[$theGroup][] = $queryRow;
					} else {
						if (isset($columnAsKey)) {
							$retArray[$queryRow[$columnAsKey]] = $queryRow;
						} else {
							$retArray[] = $queryRow;
						}
					}
				}
					
			}
				
			if ($queryResults) {
				$queryResults->close();
			}
			
			mysqli_close($mysqli);
				
		}


		//checkReportsMaxExecutionTime();
		if ((isset($sugar_config['asolReportsMaxExecutionTime'])) && ($sugar_config['asolReportsMaxExecutionTime'] > 0) && (isset($_REQUEST["reportRequestId"])) && (isset($_REQUEST["initRequestDateTimeStamp"]))) {

			$initGmtDateTimeStamp = $_REQUEST["initRequestDateTimeStamp"];
			$currentGmtTimeStamp = time();

			$runningTimeSeconds = $currentGmtTimeStamp - $initGmtDateTimeStamp;
				
			if (!$avoidLogging) {
				asol_ReportsUtils::reports_log('debug', 'ASOL_Reports checkReportsMaxExecutionTime ----> [ '.$runningTimeSeconds.' Seconds ]', __FILE__, __METHOD__, __LINE__);
			}	
			
			if ($runningTimeSeconds > $sugar_config['asolReportsMaxExecutionTime']) {

				if (!$avoidLogging) {
					asol_ReportsUtils::reports_log('fatal', 'Report with Request_Id ['.$_REQUEST["reportRequestId"].'] has TimedOut!!', __FILE__, __METHOD__, __LINE__);
				}
				$sqlExecutingStatus = "UPDATE asol_reports_dispatcher SET status = 'timeout' WHERE id='".$_REQUEST["reportRequestId"]."' LIMIT 1";
				$db->query($sqlExecutingStatus);

				echo translate('LBL_REPORT_TIMEOUT','asol_Reports');

				if ((!$avoidLogging)&& !(empty(self::$reported_error))) {
					self::$reported_error = 'ASOL_Reports Execution TimedOut: '.$sugar_config['asolReportsMaxExecutionTime'].' Seconds for asolReportsMaxExecutionTime';
					asol_ReportsUtils::reports_log('fatal', 'ASOL_Reports Execution TimedOut ----> [ '.$sugar_config['asolReportsMaxExecutionTime'].' Seconds for asolReportsMaxExecutionTime]', __FILE__, __METHOD__, __LINE__);
				}
				
				return;

			}
				
		}

		return $retArray;

	}


	static public function getEnumLabels($operator, $reference) {

		global $app_list_strings;

		if ($operator == 'function') {
				
			return $reference();
				
		} else if ($operator == 'options') {
				
			return $app_list_strings[$reference];
				
		}

		return array();

	}

	static public function getEnumValues($operator, $reference) {

		global $app_list_strings, $current_language;

		$asolDefaultLanguage = (isset($sugar_config["asolReportsDefaultExportedLanguage"])) ? $sugar_config["asolReportsDefaultExportedLanguage"] : "en_us";
		$current_language = (empty($current_language)) ? $asolDefaultLanguage : $current_language;
		$app_list_strings =	return_app_list_strings_language($current_language);

		if ($operator == 'function') {
				
			return array_keys($reference());
				
		} else if ($operator == 'options') {

			return array_keys($app_list_strings[$reference]);
				
		}

		return array();

	}

	static public function getRelationShipLabelFromVardefs($module, $relationship_name) {
		////////////////////////////////////////////////////////////////////////////////////////
		// patch to solve a bug in table "relationships": the module "campaigns" is in lowercase
		if ($module == 'campaigns') {
			$module = 'Campaigns';
		}
		if ($module == 'prospectlists') {
			$module = 'ProspectLists';
		}
		////////////////////////////////////////////////////////////////////////////////////////

		$field_defs = BeanFactory::newBean($module)->field_defs;
		$relationship_label = isset($field_defs[$relationship_name]['vname']) ? translate($field_defs[$relationship_name]['vname'], $module) : $relationship_name;

		return $relationship_label;

	}

	static public function getAuditedFields($module, $fieldsToBeRemoved) {
		////////////////////////////////////////////////////////////////////////////////////////
		// patch to solve a bug in table "relationships": the module "campaigns" is in lowercase
		if ($module == 'campaigns') {
			$module = 'Campaigns';
		}
		////////////////////////////////////////////////////////////////////////////////////////

		global $app_list_strings;
		
		$field_defs = BeanFactory::newBean($module)->field_defs;

		$auditedFields = array('');
		foreach ($field_defs as $name=>$values) {
				
			if (!in_array($name, $fieldsToBeRemoved)) {
					
				if ((isset($values['audited'])) && ($values['audited']))
				$auditedFields[] = $name;

			}
				
		}

		return $auditedFields;

	}

	static public function getAuditedLabels($module, $fieldsToBeRemoved, $translateLabel = true) {
		////////////////////////////////////////////////////////////////////////////////////////
		// patch to solve a bug in table "relationships": the module "campaigns" is in lowercase
		if ($module == 'campaigns') {
			$module = 'Campaigns';
		}
		////////////////////////////////////////////////////////////////////////////////////////

		global $app_list_strings;
		
		$field_defs = BeanFactory::newBean($module)->field_defs;


		$auditedFields = array('' => '');
		foreach ($field_defs as $name=>$values) {
				
			if (!in_array($name, $fieldsToBeRemoved)) {
					
				if ((isset($values['audited'])) && ($values['audited'])) {
					$tranlatedAuditedField = translate($values['vname'], $module);
					$displayedTranslatedLabel = (substr($tranlatedAuditedField, -1) == ':') ? substr($tranlatedAuditedField, 0, -1) : $tranlatedAuditedField;
					$auditedFields[$name] = ($translateLabel) ? $displayedTranslatedLabel : $name;
				}
					
			}
				
		}

		return $auditedFields;

	}

	static public function getReportsRelatedFields($bean, $field = null) {

		$relatedFields = array();
		$fieldDefs = (is_object($bean) ? $bean->getFieldDefinitions() : null);
	
		//find all definitions of type link.
		if (!empty($fieldDefs)) {
			foreach ($fieldDefs as $name=>$properties) {
				if (array_search('relate', $properties, true) === 'type') {
					$idName = (isset($properties['id_name']) ? $properties['id_name'] : null);
					if ((!empty($field)) && ($field == $idName)) {
						$relatedFields = $properties;
						break;
					} else {
						$relatedFields[$name] = $properties;
					}
				}
			}
		}
		return $relatedFields;
	}

}

?>
