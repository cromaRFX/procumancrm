<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class porq_Purchase_RequestViewDetail extends ViewDetail {

	function __construct(){
 		parent::__construct();
 	}
	function display(){
		/* 
			start: Adding RFX create button : waleed
		*/
		global $mod_strings;
		$createRFXBtn = '<input title="' .$mod_strings['LBL_CREATE_RFX']. '" class="button" onclick="createRFXRequest();" type="button" name="trigger" value="'.$mod_strings['LBL_CREATE_RFX'].'" >';
		$this->dv->ss->assign("CREATE_RFX_BTN", $createRFXBtn);
		/* 
			end: Adding RFX create button 
		*/
		parent::display();
	}
}
?>
