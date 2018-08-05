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
		if ($exch_rate>0) {
			$bean->discount_amount_usdollar=$bean->discount_amount/$exch_rate;
			$bean->shipping_amount_usdollar=$bean->shipping_amount/$exch_rate;
			$bean->shipping_tax_amt_usdollar=$bean->shipping_tax_amt/$exch_rate;
			$bean->subtotal_amount_usdollar=$bean->subtotal_amount/$exch_rate;
			$bean->subtotal_tax_amount_usdollar=$bean->subtotal_tax_amount/$exch_rate;
			$bean->total_amount_usdollar=$bean->total_amount/$exch_rate;
			$bean->total_amt_usdollar=$bean->total_amt/$exch_rate;
			$bean->tax_amount_usdollar=$bean->tax_amount/$exch_rate;
        } else {
        $bean->discount_amount_usdollar=0;
			$bean->shipping_amount_usdollar=0;
			$bean->shipping_tax_amt_usdollar=0;
			$bean->subtotal_amount_usdollar=0;
			$bean->subtotal_tax_amount_usdollar=0;
			$bean->total_amount_usdollar=0;
			$bean->total_amt_usdollar=0;
			$bean->tax_amount_usdollar=0;
        
        }
         
		   }
    }

?>