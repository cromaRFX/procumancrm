<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

error_reporting(1); //E_ERROR 

require_once('include/Dashlets/DashletGenericChart.php');

class ReportChartDashlet extends DashletGenericChart {

    var $chartDefs;
    var $chartDefName;
    
    protected $_seedName = 'asol_Reports';
    
    public function __construct($id, array $options = null) {
    
    	require_once('modules/asol_Reports/include/manageReportsFunctions.php');
            
        parent::__construct($id,$options);

        $sDatabase = (isset($_REQUEST['sDatabase']) ? $_REQUEST['sDatabase'] : '-1');
		$sModule = (isset($_REQUEST['sModule']) ? $_REQUEST['sModule'] : null);
		$sScope = (isset($_REQUEST['sScope']) ? $_REQUEST['sScope'] : null);
		$sName = (isset($_REQUEST['sName']) ? $_REQUEST['sName'] : null);
        
		// Make a list of charts from the chartdef files
		require "modules/Charts/chartdefs.php";
		if (file_exists("custom/Charts/chartDefs.ext.php"))
			require("custom/Charts/chartDefs.ext.php");	
		$this->chartDefs = $chartDefs;
		$this->_searchFields['which_chart']['options'] = asol_ReportsManagementFunctions::getFilteredReportList($sDatabase, $sModule, $sScope, $sName);
		
    }
    
    
    public function displayOptions() {

    	require_once('modules/asol_Common/include/commonUtils.php');
    	require_once('modules/asol_Reports/include/server/reportsUtils.php');
    	
		global $app_list_strings, $sugar_config, $current_user, $db, $current_language, $dashletStrings;

		$module = array();
		
		$this->chartDefName = $this->which_chart[0];

		if (!empty($this->chartDefs[$this->chartDefName]['searchFields']))
			foreach ($this->chartDefs[$this->chartDefName]['searchFields'] as $key => $value)
				$this->_searchFields[$key] = $value;

		$this->_searchFields['which_chart']['vname'] = $dashletStrings['ReportChartDashlet']['LBL_WHICH_CHART'].":";

		$sDatabase = (isset($_REQUEST['sDatabase'])) ? $_REQUEST['sDatabase'] : "-1";
		$sModule = (isset($_REQUEST['sModule'])) ? $_REQUEST['sModule'] : "";
		$sScope = (isset($_REQUEST['sScope'])) ? $_REQUEST['sScope'] : "";
		$sName = (isset($_REQUEST['sName'])) ? $_REQUEST['sName'] : "";
		
		
	    //***********************//
		//***AlineaSol Premium***//
		//***********************//
		$alternativeDb = asol_ReportsUtils::managePremiumFeature("externalDatabasesReports", "reportFunctions.php", "fillExternalDatabasesArray", null);
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
	    
		$sqlModules = "";
		$allowedModules = asol_ReportsUtils::getCurrentUserAvailableModules(false);
		
		foreach ($allowedModules as $key=>$isAllowed) {
			if ($isAllowed) {
				$module[$key] = (isset($app_list_strings['moduleList'][$key])) ? $app_list_strings['moduleList'][$key] : $key;
			}
		}
		
		asort($module);
		
	    $modulesSelect = "<select id='sDatabase' name='sDatabase' style='max-width: 150px;' onChange='if (this.selectedIndex < 1) document.getElementById(\"sModule\").style.visibility = \"inherit\"; else document.getElementById(\"sModule\").style.visibility = \"hidden\";'>";
		$modulesSelect .= "<option value='-1'>".translate('LBL_REPORT_NATIVE_DB', 'asol_Reports')."</option>";
		
		foreach ($alternativeDb as $db_index=>$alternativeDb)
  		$modulesSelect .= ($db_index == $sDatabase) ? "<option value='".$db_index."' selected>".$alternativeDb."</option>" : "<option value='".$db_index."'>".$alternativeDb."</option>";
  			
		$modulesSelect .= "</select>";
		
	    $modulesSelect .= ($sDatabase != "-1") ? "<select id='sModule' style='visibility: hidden'>" : "<select id='sModule' style='visibility: inherit'>";
	    $modulesSelect .= (empty($sModule)) ? "<option value='' selected></option>" : "<option value=''></option>"; 

	    foreach($module as $key=>$mod){
			$modulesSelect .= ($sModule == $key) ? "<option value='".$key."' selected>".$mod."</option>" : "<option value='".$key."'>".$mod."</option>";
		}
		
		$modulesSelect .= "</select>";

		$scopesSelect = "<select id='sScope'>";
		$scopesSelect .= (empty($sScope)) ? "<option value='' selected>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_ALL']."</option>" : "<option value=''>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_ALL']."</option>";
		$scopesSelect .= ($sScope == "public") ? "<option value='public' selected>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_PUBLIC']."</option>" : "<option value='public'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_PUBLIC']."</option>";
		$scopesSelect .= ($sScope == "private") ? "<option value='private' selected>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_PRIVATE']."</option>" : "<option value='private'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_PRIVATE']."</option>";
		$scopesSelect .= ($sScope == "role") ? "<option value='role' selected>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_ROLE']."</option>" : "<option value='role'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE_ROLE']."</option>";
		$scopesSelect .= "</select>";
	
		$asolAddon = (asol_CommonUtils::isDomainsInstalled() ? "<script type=\"text/javascript\" src=\"modules/asol_Common/include/client/libraries/jquery.js\"></script>" : "");
		
		$asolAddon .= "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"edit view\"><tbody>
			<tr>
				<td scope='row'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_NAME'].":</td>
				<td><input type='text' id='sName' value='".$sName."'/></td>
			</tr>
			<tr>
				<td scope='row'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_MODULE'].":</td>
				<td>".$modulesSelect."</td>
			</tr>
			<tr>
				<td scope='row'>".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SCOPE'].":</td>
				<td>".$scopesSelect."</td>
			</tr>
			<tr>
				<td align='right' colspan='2'><input type='button' onClick='var sDatabase = document.getElementById(\"sDatabase\").value; var sModule = document.getElementById(\"sModule\").value; var sName = document.getElementById(\"sName\").value; var sScope = document.getElementById(\"sScope\").value; $(\"#dlg_mask\").remove(); SUGAR.mySugar.configureDashlet(\"".$this->id."&sDatabase=\"+sDatabase+\"&sModule=\"+sModule+\"&sName=\"+sName+\"&sScope=\"+sScope); return false;' value='".$dashletStrings['ReportChartDashlet']['LBL_REPORT_SEARCH']."'/></td>
			</tr>
		</tbody></table></div>
		";
		
		
        return $asolAddon.parent::displayOptions();
        
    }
    
    public function display() {
    	
    	global $current_user, $db;
    	
    	require_once('modules/asol_Common/include/commonUtils.php');
    	require_once('modules/asol_Reports/include/server/reportsUtils.php');
			
    	$displayReportDashlet = true;
		$reportId = (isset($this->which_chart[0])) ? $this->which_chart[0] : null;
		$dashletId = $this->id;
		
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

				return asol_ReportsUtils::generateDashletReport($reportId, $dashletId, true, $this->processAutoRefresh());
				
			} else {
				
				return '<div align="center"></div>'.$this->processAutoRefresh();
				
			}
			
		} else {
			
			return '<script type="text/javascript">
					$(document).ready(function() {
						$("li[id=\'dashlet_'.$dashletId.'\']").hide();
					});
				</script>';
			
		}
				
	}
	
	public function displayScript() {
		
		return null;
		
	}
	
	public function setConfigureIcon() {
        
		global $sugar_config;
		
		$exportReportButton = '<a id="dashletExport'.$this->id.'" href="javascript:void(0)" onmouseover="openExportReportDialog(this, \''.$this->id.'\');" onmouseout="clearTimeout(window[\'exportButtonTimeout\']); $(\'#asolReportExportDiv'.$this->id.'\').hide();">'
                                . SugarThemeRegistry::current()->getImage('downarrow','border="0" align="absmiddle" title="' . translate('LBL_REPORT_EXPORT_ONE', 'asol_Reports') . '"',null,null,'.gif',translate('LBL_REPORT_EXPORT_ONE', 'asol_Reports'))
                                . '</a>';
		
		return parent::setConfigureIcon().$exportReportButton;
        
    }
	
}

?>
