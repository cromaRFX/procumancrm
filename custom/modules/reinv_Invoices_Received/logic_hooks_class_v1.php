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
        
		   }
    }

?>