<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function before_save_method($bean, $event, $arguments)
        {	
		
		$products = $bean->get_linked_beans('aos_products_stkwd_stock_withdrawal_1');

				
		$in_stock = $products[0]->in_stock_c;
		$pr_id= $products[0]->id;	

		
		   
		   $new_quantity = $bean->quantity;   
		   
		   $gr_id = $bean->id;
		   $query_qty =  "SELECT quantity FROM stkwd_stock_withdrawal "; 
           $query_qty .= "WHERE id='$gr_id' ";
           $results_qty = $bean->db->query($query_qty, true);
           $row_qty = $bean->db->fetchByAssoc($results_qty);
           $old_quantity = $row_qty['quantity'];
		   
		   $new_in_stock = $in_stock - $new_quantity + $old_quantity;
		   $query_update = "UPDATE aos_products_cstm SET in_stock_c='$new_in_stock' where id_c='$pr_id' ";
		   $results_update = $bean->db->query($query_update, true);
			
		   }
    }

?>