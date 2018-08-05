<?php

require_once("modules/asol_Common/include/commonUtils.php");
require_once("modules/asol_Reports/include/checkConfigurationDefsFunctions.php");

error_reporting(E_ERROR);

echo '
<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.UI.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
<script type="text/javascript">
	var jQueryReports = $.noConflict(true);
</script>
';

//**************************//
//***Module Dependencies****//
//**************************//


	echo "<div class='detail view  detail508'><h4>AlineaSolReports Module Dependecies (<span class='required' style='font-size: 10px'>* required module</span>)</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";
	//*************************//
	//***AlineaSolCommonBase***//
	//*************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Common Base</span><span class='required'>*</span>:</td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkModuleDependence('AlineaSolCommonBase', asol_ReportsUtils::$common_version, true);
	//*************************//
	//***AlineaSolCommonBase***//
	//*************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//**********************//
	//***AlineaSolDomains***//
	//**********************//
	echo "<span style='font-weight: bold;'>· AlineaSol Domains:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkModuleDependence('AlineaSolDomains');
	//**********************//
	//***AlineaSolDomains***//
	//**********************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//**************************//
	//***Reports HTTP Request***//
	//**************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Ajax Post Requests IE10 Compatibility:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkModuleDependence('AlineaSolAjaxPostRequestsIE10Compatibility');
	//**************************//
	//***Reports HTTP Request***//
	//**************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//********************************//
	//***AlineaSol Publish HomePage***//
	//********************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Publish HomePage:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkModuleDependence('AlineaSolPublishHomePage');
	//**************************//
	//********************************//
	//***AlineaSol Publish HomePage***//
	//********************************//
	
	echo "</td></tr></table></div>";


//**************************//
//***Module Dependencies****//
//**************************//

echo "<br/>";

//*************************//
//***Database Checkings****//
//*************************//

	echo "<div class='detail view  detail508'><h4>AlineaSolReports Database Support</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";

	//****************************************//
	//***AlineaSol Reports Database Engine****//
	//****************************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Reports Database Engine:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkDatabase("asolReportsDbEngine");
	//****************************************//
	//***AlineaSol Reports Database Engine****//
	//****************************************//
	
	echo "</td><td width='22.5%' scope='col'></td><td width='27.5%'>";
	

	echo "</td></tr></table></div>";

//*************************//
//***Database Checkings****//
//*************************//

echo "<br/>";

//**********************************//
//***Files & Folders Permisions ****//
//**********************************//

	echo "<div class='detail view  detail508'><h4>AlineaSolReports Files Access</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";
	
	//***************************//
	//***AlineaSol Edition CSS***//
	//***************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Report's Edition CSS Files:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("Reports Core CSS", "Edit_Reports_CSS", "modules/asol_Reports/include/css/style.css");
	//***************************//
	//***AlineaSol Edition CSS***//
	//***************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//*****************************//
	//***AlineaSol Execution CSS***//
	//*****************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Report's Execution CSS Files:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("Reports Core CSS", "Execute_Reports_CSS", "modules/asol_Reports/include/css/style.css");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("NVD3 Core CSS", "Execute_NVD3_Core_CSS", "modules/asol_Reports/include/js/nvd3/src/nv.d3.css");
	//*****************************//
	//***AlineaSol Execution CSS***//
	//*****************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//**************************//
	//***AlineaSol Edition JS***//
	//**************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Report's Edition JavaScript Files</span>:</td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("Reports JavaScript", "Edit_Reports", "modules/asol_Reports/include/js/reports.min.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("LabJS JavaScript", "Edit_LabJS", "modules/asol_Common/include/client/libraries/LAB.min.js");
	//**************************//
	//***AlineaSol Edition JS***//
	//**************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//****************************//
	//***AlineaSol Execution JS***//
	//****************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Report's Execution JavaScript Files:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("Reports Core JavaScript", "Execute_Reports", "modules/asol_Reports/include/js/reports.min.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("InnerSvg JavaScript", "Execute_InnerSvg", "modules/asol_Reports/include/js/innersvg.min.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("D3 JavaScript", "Execute_D3", "modules/asol_Reports/include/js/nvd3/lib/d3.v2.min.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("NVD3 Core JavaScript", "Execute_NVD3_Core", "modules/asol_Reports/include/js/nvd3/nv.d3.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("NVD3 Utils JavaScript", "Execute_NVD3_Utils", "modules/asol_Reports/include/js/nvd3/src/utils.js");
	echo asol_CheckConfigurationDefsFunctions::checkFileAccess("SWFObject JavaScript", "Execute_SWFObjectFlash", "modules/asol_Reports/include/js/swfobject/swfobject.js");
	//****************************//
	//***AlineaSol Execution JS***//
	//****************************//
	
	echo "</td></tr></table></div>";
	
//**********************************//
//***Files & Folders Permisions ****//
//**********************************//
	
echo "<br/>";

//**************************//
//***SugarCRM Schedulers****//
//**************************//

	echo "<div class='detail view  detail508'><h4>AlineaSolReports Schedulers</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";

	//**********************************//
	//***AlineaSol Reports Scheduled****//
	//**********************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Reports Scheduled:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkSchedulerJob("AlineaSolReportsScheduled");
	//**********************************//
	//***AlineaSol Reports Scheduled****//
	//**********************************//
	
	echo "</td><td width='22.5%' scope='col'>";

	//********************************//
	//***AlineaSol Reports CleanUp****//
	//********************************//
	echo "<span style='font-weight: bold;'>· AlineaSol Reports CleanUp:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkSchedulerJob("AlineaSolReportsCleanUp");
	//********************************//
	//***AlineaSol Reports CleanUp****//
	//********************************//

	echo "</td></tr></table></div>";

//**************************//
//***SugarCRM Schedulers****//
//**************************//

echo "<br/>";

//*********************//
//***BASIC Features****//
//*********************//


	echo "<div class='detail view  detail508'><h4>AlineaSolReports Community Features</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";
	//**********************************//
	//***External Database Connection***//
	//**********************************//
	echo "<span style='font-weight: bold;'>· External Database Connection:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsDbAddress');
	//**********************************//
	//***External Database Connection***//
	//**********************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//*****************************************//
	//***Exporting Delimiter for CSV Reports***//
	//*****************************************//
	echo "<span style='font-weight: bold;'>· Exporting Delimiter for CSV Reports:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsCsvDelimiter');
	//*****************************************//
	//***Exporting Delimiter for CSV Reports***//
	//*****************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//*******************************//
	//***Empty Exported Characters***//
	//*******************************//
	echo "<span style='font-weight: bold;'>· Empty Exported Characters:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsExportReplaceByEmptyString');
	//*******************************//
	//***Empty Exported Characters***//
	//*******************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************************//
	//***Enable/Disable reports pagination***//
	//***************************************//
	echo "<span style='font-weight: bold;'>· Report's Pagination:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsAvoidReportsPagination');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolOverrideDefaultEntriesPerPage');
	//***************************************//
	//***Enable/Disable reports pagination***//
	//***************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//*********************//
	//***Reporting Queue***//
	//*********************//
	echo "<span style='font-weight: bold;'>· Reporting Queue:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsDispatcherMaxRequests');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxExecutionTime');
	//*********************//
	//***Reporting Queue***//
	//*********************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//**************************************************************//
	//***Max allowed number of results to be managed by SQL query***//
	//**************************************************************//
	echo "<span style='font-weight: bold;'>· Max allowed number of results to be managed by SQL/PHP:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedDisplayed');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedGroupByEntries');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedParseMultiTable');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedResults');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedNotIndexedOrderBy');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxAllowedResultsEmailAddressNotification');
	//**************************************************************//
	//***Max allowed number of results to be managed by SQL query***//
	//**************************************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//*************************************************************//
	//***Permissions to Allow or Deny access to concrete modules***//
	//*************************************************************//
	echo "<span style='font-weight: bold;'>· Permissions to Allow or Deny access to concrete modules:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolModulesPermissions');
	//*************************************************************//
	//***Permissions to Allow or Deny access to concrete modules***//
	//*************************************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************************//
	//***Exported CSV Reports codification***//
	//***************************************//
	echo "<span style='font-weight: bold;'>· Exported CSV Reports codification:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsCsvCodification');
	//***************************************//
	//***Exported CSV Reports codification***//
	//***************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//*******************************************************//
	//***Set of non-visible fields when configuring Report***//
	//*******************************************************//
	echo "<span style='font-weight: bold;'>· Set of non-visible fields when configuring Report:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsNonVisibleFields');
	//*******************************************************//
	//***Set of non-visible fields when configuring Report***//
	//*******************************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//*********************************************************//
	//***Enable/Disable reports EditView labels Translation***//
	//********************************************************//
	echo "<span style='font-weight: bold;'>· Enable/Disable reports EditView labels Translation:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsTranslateLabels');
	//*********************************************************//
	//***Enable/Disable reports EditView labels Translation***//
	//********************************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//***************************************//
	//***Exported Reports default language***//
	//***************************************//
	echo "<span style='font-weight: bold;'>· Exported Reports default language:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsDefaultExportedLanguage');
	//***************************************//
	//***Exported Reports default language***//
	//***************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***********************************************//
	//***Report's phantomJS path for SVG rendering***//
	//***********************************************//
	echo "<span style='font-weight: bold;'>· Report's phantomJS path for SVG rendering:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsPhantomJsFilePath');
	//***********************************************//
	//***Report's phantomJS path for SVG rendering***//
	//***********************************************//
		
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//***************************************************************//
	//***Avoid users to define mySQL subQueries as mySQL functions***//
	//***************************************************************//
	echo "<span style='font-weight: bold;'>· Avoid users to define mySQL subQueries as mySQL functions:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMySQLinsecuritySubSelectScope');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMySQLinsecuritySubSelectRoles');
	//***************************************************************//
	//***Avoid users to define mySQL subQueries as mySQL functions***//
	//***************************************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************************************************//
	//***Usage of predefined From and FromName for Report Emailing***//
	//***************************************************************//
	echo "<span style='font-weight: bold;'>· Usage of predefined From and FromName for Report Emailing:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsEmailsFrom');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsEmailsFromName');
	//***************************************************************//
	//***Usage of predefined From and FromName for Report Emailing***//
	//***************************************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//****************************************************//
	//***Set role published reports modifiable by users***//
	//****************************************************//
	echo "<span style='font-weight: bold;'>· Set role published reports modifiable by users:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolAllowRoleModifiableReports');
	//****************************************************//
	//***Set role published reports modifiable by users***//
	//****************************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//*******************************//
	//***Set NVD3 Graphs resizable***//
	//*******************************//
	echo "<span style='font-weight: bold;'>· Set NVD3 Graphs resizable:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsResizableNVD3Charts');
	//*******************************//
	//***Set NVD3 Graphs resizable***//
	//*******************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//**************************//
	//***Reports HTTP Request***//
	//**************************//
	echo "<span style='font-weight: bold;'>· Reports HTTP Request:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsCurlRequestUrl');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsSystemCurlUsage');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsExtHttpUrl', true);
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsCheckHttpFileTimeout');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsDashletsHTTPRequestEnabled', true);
	//**************************//
	//***Reports HTTP Request***//
	//**************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************//
	//***Reports Font File TTF***//
	//***************************//
	echo "<span style='font-weight: bold;'>· Set Exported PDF Reports Font TTF File:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsExportPdfFontFileTTF');
	//***************************//
	//***Reports Font File TTF***//
	//***************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//********************************************//
	//***Avoid users to preview unsaved Reports***//
	//********************************************//
	echo "<span style='font-weight: bold;'>· Avoid users to preview unsaved Reports:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsPreviewExecutionScope');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsPreviewExecutionRoles');
	//********************************************//
	//***Avoid users to preview unsaved Reports***//
	//********************************************//
	
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************//
	//***Reports Font File TTF***//
	//***************************//
	echo "<span style='font-weight: bold;'>· Disable export buttons on Reports Dashlets:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsDashletExportButtons');
	//***************************//
	//***Reports Font File TTF***//
	//***************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//********************************************//
	//***Avoid users to preview unsaved Reports***//
	//********************************************//
	echo "<span style='font-weight: bold;'>· Disable Security Groups functionality:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsSecurityGroupsDisabled');
	//********************************************//
	//***Avoid users to preview unsaved Reports***//
	//********************************************//
	
	echo "</td><td width='22.5%' scope='col'></td><td width='27.5%'>";
	
	//***************************//
	
	echo "</td></tr></table></div>";
	
//*********************//
//***BASIC Features****//
//*********************//

	
if (asol_ReportsUtils::hasPremiumFeatures()) {
	
	echo "<br/>";
	
//***********************//
//***PREMIUM Features****//
//***********************//

	
	echo "<div class='detail view  detail508'><h4>AlineaSolReports Enterprise Features</h4><table cellspacing='0' width='100%'><tr><td width='22.5%' scope='col'>";
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	echo "<span style='font-weight: bold;'>· External non CRM databases reports:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsAlternativeDbConnections');
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	echo "<span style='font-weight: bold;'>· Report Fields Pagination Default Entries:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsFieldsPaginationEntries');
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
		
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//************************************************//
	//***Send Reports Data to External Applications***//
	//************************************************//
	echo "<span style='font-weight: bold;'>· Send Reports Data to External Applications:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsExternalApplications');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsExternalApplicationFixedParams');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsFtpDirectories');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsTlConfigurations');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsPhpAllowedFunctions');
	//************************************************//
	//***Send Reports Data to External Applications***//
	//************************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//***************************************************//
	//***Max number of links allowed at Report edition***//
	//***************************************************//
	echo "<span style='font-weight: bold;'>· Max Number of Links Allowed at Report Edition:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMaxLinksAllowed');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsMultiLinksScope');
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsBreadCrumbNavigation');
	//***************************************************//
	//***Max number of links allowed at Report edition***//
	//***************************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	echo "<span style='font-weight: bold;'>· Read Only Mode:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsReadOnlyMode');
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	echo "<span style='font-weight: bold;'>· WebService Execution:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsWebServiceExecution');
	//****************************************//
	//***External non CRM databases reports***//
	//****************************************//
	
	echo "</td></tr><tr><td width='22.5%' scope='col'>";
	
	//****************************************//
	//******Kill Active Long Queries TTL******//
	//****************************************//
	echo "<span style='font-weight: bold;'>· Kill Active Long Queries TTL:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsKillActiveLongQueriesTTL');
	//****************************************//
	//******Kill Active Long Queries TTL******//
	//****************************************//
	
	echo "</td><td width='22.5%' scope='col'>";
	
	//************************************//
	//***Scheduled Attachment Zip Limit***//
	//************************************//
	echo "<span style='font-weight: bold;'>· Scheduled Attachment Zip Limit:</span></td><td width='27.5%'>";
	echo asol_CheckConfigurationDefsFunctions::checkConfiguration('asolReportsScheduledAttachmentZipLimit');
	//************************************//
	//***Scheduled Attachment Zip Limit***//
	//************************************//
	
	echo "</td></tr></table></div>";
	
	
//***********************//
//***PREMIUM Features****//
//***********************//
	
		
}


/*
 * freetype and Fontconfig
*/

echo "
<script type='text/javascript'>
	jQueryReports.fx.speeds._default = 500;
	jQueryReports.extend(jQueryReports.ui.dialog.prototype.options, { width: 500, show: 'fade', hide: 'fade'});
</script>";


?>