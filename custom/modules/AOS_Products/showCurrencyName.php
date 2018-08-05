<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class ShowCurrencyName{
	function showCurrencyNameListView(&$bean, $event, $arguments){
		$cBean = BeanFactory::getBean('Currencies',$bean->currency_id);
		$bean->currency_id=$cBean->iso4217;
	} 
}
?>	