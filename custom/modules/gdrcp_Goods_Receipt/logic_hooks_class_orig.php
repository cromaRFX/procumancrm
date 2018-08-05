<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function before_save_method($bean, $event, $arguments)
        {			
           $pr_id = $bean->aos_products_id_c;		   
		$query_saldo =  "SELECT pro.in_stock_c FROM aos_products_cstm pro "; 
           $query_saldo .= "WHERE pro.id_c='$pr_id' ";
           $results_saldo = $bean->db->query($query_saldo, true);
           $row_saldo = $bean->db->fetchByAssoc($results_saldo);
           $in_stock = $row_saldo['in_stock_c'];
		   $new_quantity = $bean->quantity;   

		   
		   $gr_id = $bean->id;
		   $query_qty =  "SELECT quantity FROM gdrcp_goods_receipt gr "; 
           $query_qty .= "WHERE id='$gr_id' ";
           $results_qty = $bean->db->query($query_qty, true);
           $row_qty = $bean->db->fetchByAssoc($results_qty);
           $old_quantity = $row_qty['quantity'];
		   
		   $new_in_stock = $in_stock + $new_quantity - $old_quantity;
		   $query_update = "UPDATE aos_products_cstm SET in_stock_c='$new_in_stock' where id_c='$pr_id' ";
		   $results_update = $bean->db->query($query_update, true);
			
		   }
    }

?>