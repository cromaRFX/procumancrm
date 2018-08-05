<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class porq_Purchase_RequestViewEdit extends ViewEdit{
 	function __construct(){
 		parent::__construct();
 	}
	
	function preDisplay(){
    	parent::preDisplay();
      	
		if (empty($this->bean->id)) {
			global $current_user;
			
			$_REQUEST['assigned_user_name'] = $current_user->reports_to_name;			
			$_REQUEST['assigned_user_id'] = $current_user->reports_to_id;
			$_REQUEST['requested_for_c'] = $current_user->name;
		}
		
	}	 
 	
}

?>