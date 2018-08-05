<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');

class reinv_Invoices_ReceivedViewEdit extends ViewEdit 
{
 	public function display() 
 	{
		/* 
			If being created via Recieive invoice button from AOS_Quotes(Purchase Order) module copy fields data automatically from PO : waleed
		*/
		if(empty($this->bean->id) && isset($_REQUEST['source_module']) && !empty($_REQUEST['source_module']) && $_REQUEST['source_module']=='AOS_Quotes' && isset($_REQUEST['source_record']) && !empty($_REQUEST['source_record']) && isset($_REQUEST['action']) && !empty($_REQUEST['action']) && $_REQUEST['action']=='EditView' ){
			$quoteBean = BeanFactory::getBean($_REQUEST['source_module'],$_REQUEST['source_record']);
			$this->bean->aos_quotes_id_c=$quoteBean->id;
			$this->bean->purchase_order=$quoteBean->name;
			$this->bean->po_number_c=$quoteBean->number;
			$currency_id='"'.$quoteBean->currency_id.'"';
			echo "<script> $( document ).ready(function() { $('select[name=currency_id]').find('option[value=$currency_id]').attr('selected',true); $('#via_quotes').val('yes'); }); </script>";
			$this->bean->invoice_value=$quoteBean->total_amount;
			$this->bean->total_discounts_c=$quoteBean->discount_amount;
			$this->bean->total_shipping_c=$quoteBean->shipping_amount;
			$this->bean->subtotal_before_tax_c=$quoteBean->subtotal_amount;
			$this->bean->tax_c=$quoteBean->tax_amount;
			$this->bean->cost_center_c=$quoteBean->costc_cost_center_aos_quotes_1_name;
			$this->bean->costc_cost_center_id_c=$quoteBean->costc_cost_center_aos_quotes_1costc_cost_center_ida;
			$this->bean->terms_c=$quoteBean->term;
			$this->bean->assigned_user_name=$quoteBean->assigned_user_name;
			$this->bean->assigned_user_id=$quoteBean->assigned_user_id;
			$this->bean->via_quotes="yes";
		}	
		parent::display();
 	}
}
?>