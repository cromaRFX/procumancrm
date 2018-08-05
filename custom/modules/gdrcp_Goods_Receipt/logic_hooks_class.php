<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function before_save_method($bean, $event, $arguments)
        {
			
			/* For Good Recipt */
			/* If Product is Not Set while saving and line item has a product associated, then add it to this Good Receipt */
			
			$line_item_id 		= $bean->aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida;
			$lineItemRecord 	= BeanFactory::getBean('AOS_Products_Quotes', $line_item_id);
			$pr_id 				= $bean->aos_products_id_c;
			
			if(isset($line_item_id) && ($pr_id ==''))
			{
				$GLOBALS['log']->debug("Product Not Set on GdRcp Item");
				//Product Not set for PO Line item in Good Receipt
				$bean->aos_products_id_c = $lineItemRecord->product_id;
				$pr_id 					 = $bean->aos_products_id_c;
				$GLOBALS['log']->debug("Product ID added is ".$bean->aos_products_id_c);
			}
			
			$query_saldo 	=  "SELECT pro.in_stock_c FROM aos_products_cstm pro "; 
			$query_saldo   .= "WHERE pro.id_c='$pr_id' ";
			
			$results_saldo 	= $bean->db->query($query_saldo, true);
			$row_saldo = $bean->db->fetchByAssoc($results_saldo);
			
			$in_stock 		= $row_saldo['in_stock_c'];
			$new_quantity 	= $bean->quantity;   
			
			
			$gr_id = $bean->id;
			$query_qty 	=  "SELECT quantity FROM gdrcp_goods_receipt gr "; 
			$query_qty .= "WHERE id='$gr_id' ";
			$results_qty 	= $bean->db->query($query_qty, true);
			$row_qty 		= $bean->db->fetchByAssoc($results_qty);
			$old_quantity 	= $row_qty['quantity'];
			
			$new_in_stock 	= $in_stock + $new_quantity - $old_quantity;
			$query_update 	= "UPDATE aos_products_cstm SET in_stock_c='$new_in_stock' where id_c='$pr_id' ";
			$results_update = $bean->db->query($query_update, true);
			
			/*
			When goods are received then the status of Purchase Order(Quotes) Line Item should be changed to "Delivered" or "Partially Delivered" depending on the received piece quantity. 
			*/
			
			$line_item_quantity = $bean->quantity;
			$po_quantity		= $lineItemRecord->product_qty;// Line Item Quantity in Purchase Order(Quote)
			
			//Total Good Quantity Recived So Far
			$sql_quantity_recvd = "SELECT
									  SUM(grcp.quantity) AS total_received
									FROM gdrcp_goods_receipt grcp
									  LEFT JOIN aos_products_quotes_gdrcp_goods_receipt_1_c gpq
										ON (grcp.id = gpq.aos_products_quotes_gdrcp_goods_receipt_1gdrcp_goods_receipt_idb AND gpq.deleted=0)
									WHERE gpq.aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida = '".$line_item_id."'";	
			
			$rs_quantity_recvd 	= $bean->db->query($sql_quantity_recvd, true);	
			$row_quantity_recvd = $bean->db->fetchByAssoc($rs_quantity_recvd);
			
			$quantity_received =  $row_quantity_recvd['total_received'];
			
			//Total Quantity Received So far is qty in DB plus current item being added
			$total_received = $quantity_received + $line_item_quantity;
			//If PO (Quote) Quantity is Received then Item is delivered
			if(intval($total_received) >= intval($po_quantity) )
			{
				$status = 'Delivered';
			}
			else{
				$status = 'Partial_delivery';
			}
			
			$GLOBALS['log']->debug("LinteItem QTY Adding Now: ".$line_item_quantity ." QTY in PO: ".$po_quantity." Total Rcvd: ".$total_received);
			$GLOBALS['log']->debug("Status for Line Item :".$status);
			//Set Line item status
			$lineitem_status = " UPDATE aos_products_quotes_cstm SET status_c = '".$status."' WHERE id_c = '".$line_item_id."'";
				
			$bean->db->query($lineitem_status, true);	
			
			
			/*
			Then further, also the Purchase Order (Quotes) status should be changed.  If all the Line Items have status "Delivered" then the PO status should also be changed to "Delivered" or else it should be "Partially Delivered".
			
			*/
			$purchase_order_id 		= $lineItemRecord->parent_id;
			$purchaseOrderRecord	= BeanFactory::getBean('AOS_Quotes', $purchase_order_id);
			
			/*
				Get count of Remaining Item with Status Not Delivered
			*/
			$po_lineitems_status 	= "SELECT
										  COUNT(pq.id) AS remaining
										FROM aos_products_quotes_cstm pqc
										  LEFT JOIN aos_products_quotes pq
											ON (pq.id = pqc.id_c
												AND pq.deleted = 0)
										WHERE pq.parent_id = '".$purchase_order_id."'
											AND pqc.status_c != 'Delivered'";
			
			$results_po_status 		= $bean->db->query($po_lineitems_status, true);
			$po_lineitems 			= $bean->db->fetchByAssoc($results_po_status);
			
			if($po_lineitems['remaining'] > 0)
			{
				$status = 'Partial_delivery';
			}
			else{
				$status = 'Delivered';
			}
			
			$GLOBALS['log']->debug("LinteItem PO QTY Remaining: ".$po_lineitems['remaining']);
			$GLOBALS['log']->debug("Status for PO :".$status);
			
			//Update PO(Quote)
			$update_po = "UPDATE aos_quotes SET stage = '".$status."' WHERE id = '".$purchase_order_id."'";
			$bean->db->query($update_po, true);
			
		}
    }

?>