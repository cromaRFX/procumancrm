<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function before_save_method($bean, $event, $arguments)
        {		
           $curr_id = $bean->currency_id;
		   if ($curr_id=='-99') {
				global $sugar_config;
				$curr_code=$sugar_config['default_currency_iso4217'];
				$exch_rate=1;
		   } else {
				$focus = BeanFactory::getBean('Currencies');   
				$focus->retrieve_by_string_fields(array('id' => $curr_id ));
				$curr_code=$focus->iso4217;	
				$exch_rate=$focus->conversion_rate;
		   }
		   
		    $bean->currency_code_c=$curr_code;
			$bean->discount_amount_default_c=$bean->total_discounts_c/$exch_rate;
			$bean->shipping_amount_default_c=$bean->total_shipping_c/$exch_rate;
			$bean->subtotal_amount_default_c=$bean->subtotal_before_tax_c/$exch_rate;
			$bean->total_amount_default_c=$bean->invoice_value/$exch_rate;
			$bean->tax_amount_default_c=$bean->tax_c/$exch_rate;
        
			$po_id = $bean->aos_quotes_id_c;
			$query_update = "UPDATE aos_quotes SET invoice_status='Invoiced' where id='$po_id' ";
			$results_update = $bean->db->query($query_update, true);    
			
			/* 
				If being created via Recieive invoice button from AOS_Quotes(Purchase Order) module :waleed
			*/
			global $db;
			if( !empty($_REQUEST['aos_quotes_id_c']) && $_REQUEST['via_quotes']=='yes'){
				//PO (AOS_Quotes) bean
				$quoteBean = BeanFactory::getBean('AOS_Quotes',$_REQUEST['aos_quotes_id_c']);
				//PO (AOS_Quotes) lineitems(aos_products_quotes)
				$linteItems = $quoteBean->get_linked_beans('aos_products_quotes','AOS_Products_Quotes'); 
				// loop through all lineitems for AOS_Quotes 
				foreach ( $linteItems as $linteItem ) {
					// getting each lineitem's good recipt 
					$goodRecipts = $linteItem->get_linked_beans('aos_products_quotes_gdrcp_goods_receipt_1','gdrcp_Goods_Receipt');
					// loop through all good recipts to relate with recieve invoice record
					foreach ( $goodRecipts as $goodRecipt ) { 
						// copying good recipt Quantity Ordered to the Quantity Invoiced field
						$db->query("UPDATE gdrcp_goods_receipt_cstm set quantity_invoiced_c='".$goodRecipt->quantity_ordered_c."' WHERE id_c='".$goodRecipt->id."' ");
						$bean->load_relationship('reinv_invoices_received_gdrcp_goods_receipt_1');
						$bean->reinv_invoices_received_gdrcp_goods_receipt_1->add($goodRecipt->id);
					}
				}
			}
		}
    }

?>