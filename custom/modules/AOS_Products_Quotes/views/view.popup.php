<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.popup.php');
//require_once('include/MVC/View/views/view.list.php');
//ViewPopup
//ViewList
class CustomAOS_Products_QuotesViewPopup extends ViewPopup{

    function CustomAOS_Products_QuotesViewPopup(){
     parent::ViewPopup();
	}

    function preDisplay(){
	    parent::preDisplay();
	}
	
	//Display
	function display()
    {
		//$GLOBALS['log']->fatal("POPUP Display");
		//$_REQUEST['searchFormTab']= 'advanced_search';
		//$_REQUEST['part_number'] = 'SCR001'; 
		 parent::display();	
	}
}