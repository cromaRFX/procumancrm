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
			if (!empty($current_user->reports_to_id)) {
			$_REQUEST['assigned_user_name'] = $current_user->reports_to_name;			
			$_REQUEST['assigned_user_id'] = $current_user->reports_to_id;
            }
            $_REQUEST['requested_for_c'] = $current_user->name;
			if (!empty($current_user->costc_cost_center_id_c)) {
                $_REQUEST['cost_center'] = $current_user->cost_center_c;
        $_REQUEST['costc_cost_center_id_c'] = $current_user->costc_cost_center_id_c;
            }
        if (!empty($current_user->brch_branch_users_1_name)) {
                $_REQUEST['branch_c'] = $current_user->brch_branch_users_1_name;
        $_REQUEST['brch_branch_id_c'] = $current_user->brch_branch_users_1brch_branch_ida;
            }
        if (!empty($current_user->department_master_c)) {
                $_REQUEST['department_c'] = $current_user->department_master_c;
        $_REQUEST['dprt_departments_id_c'] = $current_user->dprt_departments_id_c;
            }
		}
	
	}	 
 	
}

?>