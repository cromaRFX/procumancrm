<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
	
class Account_LogicHooks{
	
	/* Updating ALL Products Expiry Date for Supplier 
	*/
	public function setProductsTradeLicenseExpiryDate(&$bean, $event, $arguments) 
	{
		if($bean->fetched_row['trade_lic_exp_c'] != $bean->trade_lic_exp_c)
		{
			global $db;
			//Update Related Prodcuts Expiry Date
			$linkFieldName = 'accounts_aos_products_1';
			$linkModuleName = 'AOS_Products';
			// Get Most Recent Marketing Station Added for Inventory Stone
			$products = $bean->get_linked_beans($linkFieldName, $linkModuleName);
			$list = array();
			foreach ($bean->accounts_aos_products_1->getBeans() as $product) {
				$list[] = $product->id;//Related Products ID for supplier
			}	
			$productIds = "'".implode("','",$list)."'";
			
			$updateProductsExpiry = "UPDATE aos_products_cstm SET trade_license_expiry_date_c = '".$bean->trade_lic_exp_c."' WHERE id_c IN (".$productIds.") ";
			$db->query($updateProductsExpiry);
			
		}
	}//End Function 
}