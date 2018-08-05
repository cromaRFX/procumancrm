<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class AOS_Products_Quotes_LogicHooks
    {
      /*
		Update po_number_c in AOS_Products_Quotes with same as number in AOS_Quotes
		*/   
		function after_save_method(&$bean, $event, $arguments) 
		{
			global $db;
			if($bean->parent_type == 'AOS_Quotes')
			{
				$update = " UPDATE 
								aos_products_quotes_cstm pq
							LEFT JOIN 
								aos_quotes q ON (q.id = '".$bean->parent_id."')
							SET 
								pq.po_number_c = q.number
							WHERE 
								id_c = '".$bean->id."'";
				
				$result = $db->query($update);
				// Saving supplier name text only
				$updateProductNameForQuoteRecord="update aos_products_quotes set supplier_name_c = (SELECT supplier_name_c from aos_products WHERE aos_products.id=aos_products_quotes.product_id) where aos_products_quotes.parent_id='".$bean->parent_id."'";
				$db->query($updateProductNameForQuoteRecord);
			}
		}
    }

?>