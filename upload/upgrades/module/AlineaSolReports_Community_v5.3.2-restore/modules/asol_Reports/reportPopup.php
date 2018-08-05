<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("modules/asol_Reports/include/server/reportsUtils.php");

error_reporting(1); //E_ERROR 


global $mod_strings, $sugar_config;

asol_ReportsUtils::reports_log('asol', 'Entering reportPopup.php', __FILE__, __METHOD__, __LINE__); 
	
echo "<html>";

echo "<head>";
echo "<link rel='shortcut icon' href='themes/default/images/sugar_icon.ico'>";
echo "<script language='javascript'>";

if ((!empty($_REQUEST['domainId'])) && is_file("modules/asol_Reports/include/css/".$_REQUEST['domainId'].".css"))
	$customCssFile =  $_REQUEST['domainId'].".css";
else
	$customCssFile =  "reports.css";

echo '

function getHTTPObject(){
	var http;
	/*@cc_on
	@if(@_jscript_version>=5)
		try{
			http=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				http=new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e2){
				http=false;
			}
		}
	@else 
		http=false;
	@end @*/
	if(!http && typeof XMLHttpRequest!=\'undefined\'){
		try{
			http=new XMLHttpRequest();
		}catch(e){
			http=false;
		}
	}
	return http;
}

var http=getHTTPObject();

// URL: url to send data
// postString format: p1=v1&p2=v2&(...)
function postAjaxWithFunction(url, postString, f){
	http.open("POST", url, true);
	http.setRequestHeader(\'Content-Type\', \'application/x-www-form-urlencoded; charset=ISO-8859-1\');
	http.onreadystatechange=f;
	try{
		http.send(postString);
	}catch(e){
	}
}

function callBackDownload(){

	if (http.readyState == 4){
	
		document.getElementById("loadingContainer").style.display = "none";
		document.getElementById("downloadButton").style.display = "inline";
	
	}
}

function callBackClose(){

	if (http.readyState == 4){
	
		window.close();
	
	}
}

function downloadFile(){

	var id = http.responseText;
	
	var urlFile = "index.php?entryPoint=reportDownload&fileName="+id;
	opener.location.href = urlFile;

	window.close();
	
}

function downloadFileExplorer(){

	var id = http.responseText;
	
	var urlFile = "index.php?entryPoint=reportDownload&fileName="+id;
	window.location.href = urlFile;
	
}

function downloadFileCSS(){
	
	var urlFile = "index.php?entryPoint=reportDownload&op=css&fileName=reports_original.css";
	opener.location.href = urlFile;

	window.close();
	
}

function downloadFileExplorerCSS(){

	var urlFile = "index.php?entryPoint=reportDownload&op=css&fileName=reports_original.css";
	
	window.location.href = urlFile;
	
}

function downloadFileCustomCSS(){
	
	var urlFile = "index.php?entryPoint=reportDownload&op=css&fileName='.$customCssFile.'";
	opener.location.href = urlFile;

	window.close();
	
}

function downloadFileExplorerCustomCSS() {

	var urlFile = "index.php?entryPoint=reportDownload&op=css&fileName='.$customCssFile.'";
	window.location.href = urlFile;
	
}

function printExportJS() {

	var LBL_REPORT_DOWNLOAD_REPORT = \''.$mod_strings['LBL_REPORT_DOWNLOAD_REPORT'].'\';
	
	var customB = document.getElementById(\'buttonExport\');
	
	if (customB) {
		
		var inHTML = \'<input type="button" style="display:none" id="downloadButton" \';
		if (navigator.userAgent.indexOf("Firefox")!=-1)  {
			inHTML += \'onclick="downloadFile()"\';
		} else {
			inHTML += \'onclick="downloadFileExplorer()"\';
		}
		
		inHTML += \' value="\'+LBL_REPORT_DOWNLOAD_REPORT+\'">\';

		customB.innerHTML = inHTML;

	}
		
}

function printCssJS() {
		 
	var LBL_REPORT_DOWNLOAD_CSS = \''.$mod_strings['LBL_REPORT_DOWNLOAD_CSS'].'\';
	
	var customB = document.getElementById(\'buttonCSS\');
	
	if (customB) {
	
		var inHTML = \'<input type="button" style="display:inline" id="downloadButton" \';
		if (navigator.userAgent.indexOf("Firefox")!=-1)  {
			inHTML += \'onclick="downloadFileCSS()"\';
		} else {
			inHTML += \'onclick="downloadFileExplorerCSS()"\';
		}
		
		inHTML += \' value="\'+LBL_REPORT_DOWNLOAD_CSS+\'">\';

		customB.innerHTML = inHTML;

	}
	
}

function printCustomCssJS() {
		 
	var LBL_REPORT_DOWNLOAD_CUSTOM_CSS = \''.$mod_strings['LBL_REPORT_DOWNLOAD_CUSTOM_CSS'].'\';
	
	var customB = document.getElementById(\'buttonCustomCSS\');
	
	if (customB) {
	
		var inHTML = \'<input type="button" style="display:inline" id="downloadButton" \';
		if (navigator.userAgent.indexOf("Firefox")!=-1)  {
			inHTML += \'onclick="downloadFileCustomCSS()"\';
		} else {
			inHTML += \'onclick="downloadFileExplorerCustomCSS()"\';
		}
		
		inHTML += \' value="\'+LBL_REPORT_DOWNLOAD_CUSTOM_CSS+\'">\';
		
		customB.innerHTML = inHTML;

	}
	
}

';

echo "</script>";
echo "</head>";

echo "<body onload='printExportJS(); printCssJS(); printCustomCssJS();'>";


if ($_REQUEST['return_action'] == "downloadCSS"){

	echo "<span id='buttonCSS'></span>";
	
} else if ($_REQUEST['return_action'] == "downloadCustomCSS"){
	
	echo "<span id='buttonCustomCSS'></span>";
	
}
	
echo "</body>";

echo "</html>";

?>