<?php

if(!(ACLController::checkAccess('AOS_Quotes', 'edit', true))){
		ACLController::displayNoAccess();
        die;
    }
    global $app_list_strings,$sugar_config;
	
	require_once('modules/porq_Purchase_Request/porq_Purchase_Request.php');//Purchase Req
	require_once('modules/AOS_Quotes/AOS_Quotes.php');//PO
	                
	$purchase_request = new porq_Purchase_Request();
	$purchase_request->retrieve($_REQUEST['record']);
	
	//New Purchase Order
	$po = new AOS_Quotes();
    $po->name 				= "PO-".$purchase_request->name;
    $po->assigned_user_id 	= $purchase_request->assigned_user_id;
    $po->description 		= $purchase_request->description;
	$po->date_required_c	= $purchase_request->date_required_c;
	$po->date_required_c	= $purchase_request->date_required_c;
	$po->costc_cost_center_aos_quotes_1costc_cost_center_ida = $purchase_request->costc_cost_center_id_c;
	$po->brch_branch_id_c = $purchase_request->brch_branch_id_c;
	$po->project_id_c = $purchase_request->project_id_c;
	//stage invoice_status term approval_status incoterms_c
    $po->save();
	
	//Relationship addition
	$po->load_relationship('aos_quotes_porq_purchase_request_1');
    $po->aos_quotes_porq_purchase_request_1->add($purchase_request->id);
	
	/****************************************/
	
	//Add ALL PR Security Groups to PO
	
	//GET security Group IDs for PR record
	$sql = "SELECT securitygroup_id FROM securitygroups_records WHERE record_id = '".$purchase_request->id."' AND module = '".$purchase_request->module_dir."'";

	$rs_security_groups = $purchase_request->db->query($sql);
	
	while($group_row = $purchase_request->db->fetchByAssoc($rs_security_groups))
	{
		$insert_sg = "INSERT INTO securitygroups_records 
						(
							id, 
							securitygroup_id, 
							record_id, 
							module, 
							date_modified, 
							modified_user_id, 
							created_by
						)
						VALUES
						(
							UUID(), 
							'".$group_row['securitygroup_id']."', 
							'".$po->id."', 
							'".$po->module_dir."', 
							NOW(), 
							'".$GLOBALS['current_user']->id."', 
							'".$GLOBALS['current_user']->id."'
						);";
				
		$purchase_request->db->query($insert_sg);
	}
	
	/****************************************/
	
	//Create Product Line Items for Quote
	$multi_lines 	= explode('^|^',$purchase_request->line_items_c);
	$line_count		= count($multi_lines);
	
	$total_amt = 0; 
	$convertedPrice=0;
	foreach($multi_lines as $index=>$line_items)
	{
		$product_quote 	= new AOS_Products_Quotes(); // Products Related to Purchase Order (Quote)
		$line_item = explode('^,^',$line_items);
		// $GLOBALS['log']->fatal("line_item: ".print_r($line_item,1));
		/* Currency exchange rate  according to each lineItem*/
		if($sugar_config['default_currency_iso4217']==$line_item[9]){
			$currId='-99';
			$currCode=$sugar_config['default_currency_iso4217'];
			$exchangeRate=1;	
		}
		else{
			$currBean = BeanFactory::getBean('Currencies');   
			$currBean->retrieve_by_string_fields(array('iso4217' => $line_item[9]));
			$currId=$currBean->id;
			$currCode=$currBean->iso4217;	
			$exchangeRate=$currBean->conversion_rate;
		}
		if($exchangeRate==0)
			$exchangeRate=1;
		
		/* 
			if product is not selected create service
		*/
		// $GLOBALS['log']->fatal("line_item: ".print_r($line_item,1));
		if (empty($line_item[7])) {
			/* if no product selected convert using lineItemcurrency */
			
			if (!empty($line_item[9]))
				$convertedPrice =$line_item[3]/$exchangeRate;
				// $GLOBALS['log']->fatal($line_item[3].'/'.$exchangeRate.' = '.$convertedPrice);		
			$convertedPriceTotal = '';
			$convertedPriceTotal =$line_item[4]/$exchangeRate;	
				// If Quantity is Empty set it to 1
	
			$product_quote->product_id='0';
			$product_quote->part_number='';
			$product_quote->vat='0.0';
			$product_quote->product_discount_amount='0.00';
			$product_quote->product_discount_amount_usdollar='0.00';
			$product_quote->product_discount='0.00';
			$product_quote->product_qty= $line_item[2];
			if(!empty($line_item[10]) or !empty($line_item[1]))
				$product_quote->name=$line_item[10]." - ".$line_item[1];
			else
				$product_quote->name='NA';
			$product_quote->product_unit_price			= $convertedPrice; // Unit Price
			$product_quote->product_unit_price_usdollar	= $convertedPrice; // Unit Price
			$product_quote->product_list_price  		= $convertedPrice; // Unit Price
			$product_quote->product_list_price_usdollar = $convertedPrice; // Unit Price
			$product_quote->product_total_price = $convertedPriceTotal; // Total Price
			if( $product_quote->product_qty == '' || empty($product_quote->product_qty) )
			$product_quote->product_qty	 				= 1;
		
			$total_amt+=  $product_quote->product_total_price;
			
		}
		
		/* 
			if product is selected create po lineitem
		*/
		else{
			/* 
				If producst selected ,get lineItem's product currency and convert according to system currency
			*/
			if (!empty($line_item[8])) {
				$productBean = new AOS_Products();
				$productBean->retrieve($line_item[8]);
				$currencyBean = new Currency();
				$currencyBean->retrieve($productBean->currency_id);
				if ($currencyBean->iso4217==$defaultCurrency)
					$convertedPrice=$line_item[3];
				else
					$convertedPrice =$line_item[3]/$exchangeRate;
					// $GLOBALS['log']->fatal($line_item[3].'/'.$exchangeRate.' = '.$convertedPrice);
				
			}
			$product_quote->product_id					= $line_item[8]; // Product ID
			$product_quote->name						= $line_item[7]; // Product Name
			$product_quote->product_unit_price			= $convertedPrice; // Unit Price
			$product_quote->product_unit_price_usdollar	= $convertedPrice; // Unit Price
			$product_quote->product_list_price  		= $convertedPrice; // Unit Price
			$product_quote->product_list_price_usdollar = $convertedPrice; // Unit Price
			$product_quote->product_qty					= $line_item[2]; // Qunatity
			$product_quote->item_description					= $line_item[1]; // Description
			
			// If Quantity is Empty set it to 1
			if( $product_quote->product_qty == '' || empty($product_quote->product_qty) )
			$product_quote->product_qty	 				= 1;
			
			$convertedPriceTotal = '';
			$convertedPriceTotal =$line_item[4]/$exchangeRate;
			// $GLOBALS['log']->fatal($line_item[3].'/'.$exchangeRate.' = '.$convertedPrice);
			$product_quote->product_total_price 		= $convertedPriceTotal; // Total Price
			$product_quote->product_total_price_usdollar= $convertedPriceTotal; // Total Price
			
			// Part Number from Product 
			$product 		= BeanFactory::getBean('AOS_Products', $product_quote->product_id); 
			if($product->part_number !='')
			$product_quote->part_number 		= $product->part_number;
			
			// Total Calculation for Price
			$total_amt 							+=  $product_quote->product_total_price;
			$product_quote->vat					= '0.0';// VAT dropdown value
			$product_quote->vat_amt				= 0;// VAT Amount
			$product_quote->vat_amt_usdollar	= 0;// VAT Amount
		}
// $GLOBALS['log']->fatal("total_amt: ".$total_amt);
		$product_quote->number 				= ++$index;
		$product_quote->assigned_user_id 	= $po->assigned_user_id;
		$product_quote->parent_id 			= $po->id;
		$product_quote->currency_id 		= $po->currency_id;
		$product_quote->parent_type 		= $po->object_name;
		$product_quote->save();			
		
	}
	//Updating Totals to Quote
	
	//Total Amount 
	$po->total_amt			= $total_amt;
	//Discounts 
	$po->discount_amount	= 0;
	$po->subtotal_amount	= $total_amt;
	$po->shipping_amount	= '';
	$po->shipping_tax_amt	= '';
	$po->tax_amount			= 0;
	//Grand Total
	$po->total_amount		= $total_amt;
	$po->save();
	
	ob_clean();
	header('Location: index.php?module=AOS_Quotes&action=EditView&record='.$po->id);
	
	