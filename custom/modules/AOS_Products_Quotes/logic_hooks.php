<?php

    $hook_version = 1;
    $hook_array = Array();
	
   	$hook_array['after_save'] = Array();
   	$hook_array['after_save'][] = Array(1,'Update PO Number','custom/modules/AOS_Products_Quotes/AOS_Products_Quotes_LogicHooks.php','AOS_Products_Quotes_LogicHooks',    'after_save_method');


   	$hook_array['before_save'] = Array();
   	$hook_array['before_save'][] = array(1,
		"Line Item Calculations Before Save", //Description
		"custom/modules/AOS_products_quotes/line_item_calc.php", //exact path and file name where custom code resides
		"line_item_calc", //Name of the class of custom code. It must be same as file name
		"calculate_line_items", // name of the method inside custom class that will be fired when the hook fires.
	);
	
	
?>