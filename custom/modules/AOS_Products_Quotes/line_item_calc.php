<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class line_item_calc
{
	public function calculate_line_items($bean, $event, $arguments)
	{
		$GLOBALS['log']->fatal("Before Save Hook: Line Calculations");
		// $GLOBALS['log']->fatal(print_r($bean,1));
		$curr_id = $bean->currency_id;
	   	if ($curr_id=='-99') 
	   	{
			global $sugar_config;
			$curr_code=$sugar_config['default_currency_iso4217'];
			$exch_rate=1;
	   	} 
	   else 
	   	{
			$focus = BeanFactory::getBean('Currencies');   
			$focus->retrieve_by_string_fields(array('id' => $curr_id ));
			$curr_code=$focus->iso4217;	
			$exch_rate=$focus->conversion_rate;
		}
		$bean->exchange_rate_c = $exch_rate;
		$bean->unit_price_bc_c = $bean->product_unit_price / $exch_rate;
		$bean->total_price_bc_c = $bean->product_qty * $bean->unit_price_bc_c;
	}
}
?>