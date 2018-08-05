<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/Sugar_Smarty.php');
require_once('include/utils.php');
function getpdf_urlHtml($focus, $name, $value, $view) {
	$smarty = new Sugar_Smarty;
	$pdfUrlsArray = array();
	$multi_lines 	= explode('^|^',$focus->pdf_url_c);
	if(!empty($multi_lines['0'])){
		foreach($multi_lines as $index=>$line_items){
			$line_item = explode('^,^',$line_items);
			if (strpos($line_item['1'], 'task=plugin&plugin_task=admin_pdf') == false) {
				$pos = strrpos($line_item['1'], '/') + 1;
				$line_item['1'] = substr($line_item['1'], 0, $pos) . rawurlencode(substr($line_item['1'], $pos));
			}
			$pdfUrlsArray[] = $line_item;	
		}	
	}
	$smarty->assign("PDFURLS", $pdfUrlsArray);
	return $smarty->fetch('custom/include/pdf_url/' . $view . '.html');
}
?>
