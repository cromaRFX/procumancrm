<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Saving supplier name', 'custom/modules/AOS_Products/updateSupplierName.php','UpdateSupplierName', 'updateSupplierNameBSave'); 

$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'showing currency short name in list view', 'custom/modules/AOS_Products/showCurrencyName.php','ShowCurrencyName', 'showCurrencyNameListView'); 

?>