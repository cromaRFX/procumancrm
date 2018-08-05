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
$updateProductNameForQuoteRecord="update aos_products_quotes set supplier_name_c = (SELECT distinct acc.name from accounts acc, aos_products pro, accounts_aos_products_1_c rela WHERE pro.id=aos_products_quotes.product_id and rela.accounts_aos_products_1accounts_ida=acc.id and rela.accounts_aos_products_1aos_products_idb=pro.id and acc.deleted=0 and rela.deleted=0) where aos_products_quotes.id='".$bean->id."'";
				$db->query($updateProductNameForQuoteRecord);
			}
		}
    }

?>