<?php

if(!(ACLController::checkAccess('AOS_Quotes', 'edit', true))){
		ACLController::displayNoAccess();
        die;
    }

    global $app_list_strings;
	
	require_once('modules/porq_Purchase_Request/porq_Purchase_Request.php');//Purchase Req
	require_once('modules/AOS_Quotes/AOS_Quotes.php');//PO
	
	$purchase_request = new porq_Purchase_Request();
	$purchase_request->retrieve($_REQUEST['record']);
	
	//New Purchase Order
	$po = new AOS_Quotes();
    $po->name 				= $purchase_request->name;
    $po->assigned_user_id 	= $purchase_request->assigned_user_id;
    $po->description 		= $purchase_request->description;
	$po->date_required_c	= $purchase_request->date_required_c;
	$po->brch_branch_id_c	= $purchase_request->brch_branch_id_c;
	$po->delivery_branch_c	= $purchase_request->branch_c;
	$po->project_id_c	= $purchase_request->project_id_c;
	$po->project_c	= $purchase_request->project_c;
	$po->costc_cost_center_aos_quotes_1costc_cost_center_ida = $purchase_request->costc_cost_center_id_c;
	//stage invoice_status term approval_status incoterms_c
   $po->save();
	
	//Relationship addition
	$po->load_relationship('aos_quotes_porq_purchase_request_1');
    $po->aos_quotes_porq_purchase_request_1->add($purchase_request->id);
	
	//Create Product Line Items for Quote
	$multi_lines 	= explode('^|^',$purchase_request->line_items_c);
	$line_count		= count($multi_lines);
	
	$total_amt = 0; 
	foreach($multi_lines as $index=>$line_items)
	{
		$line_item = explode('^,^',$line_items);
		//$GLOBALS['log']->fatal("Line Item: ".print_r($line_item,1));
		/*
		line item index[0] => 1 			// Line Number
		line item name[1] => Samsung Phone 	// Name of Line Item
		line item qty[2] => 8 				// Quantity	
		line item price[3] => 320			// Price of Single Item
		line item cost[4] => 2560.00		// Cost 
		line item supplier[5] => Samsung	// Supplier
		line item supplier id[6] => 2194ced9-d347-f44a-ef39-572e1f787c97
		line item product[7] => Samsung Phone // Product Name 	
		line item product id[8] => eea0c70e-82cf-bcdc-60b2-572e2292f2cd
		*/
		$product_quote 	= new AOS_Products_Quotes(); // Products Related to Purchase Order (Quote)
		$product_quote->product_id					= $line_item[8]; // Product ID
		$product_quote->name						= $line_item[7]; // Product Name
		$product_quote->product_unit_price			= $line_item[3]; // Unit Price
		$product_quote->product_unit_price_usdollar	= $line_item[3]; // Unit Price
		$product_quote->product_list_price  		= $line_item[3]; // Unit Price
		$product_quote->product_list_price_usdollar = $line_item[3]; // Unit Price
		$product_quote->product_qty					= $line_item[2]; // Qunatity
		
		// If Quantity is Empty set it to 1
		if( $product_quote->product_qty == '' || empty($product_quote->product_qty) )
		$product_quote->product_qty	 				= 1;
		
		$product_quote->product_total_price 		= $line_item[4]; // Total Price
		$product_quote->product_total_price_usdollar= $line_item[4]; // Total Price
		
		// Part Number from Product 
		$product 		= BeanFactory::getBean('AOS_Products', $product_quote->product_id); 
		if($product->part_number !='')
		$product_quote->part_number 		= $product->part_number;
		
		// Total Calculation for Price
		$total_amt 							+=  $product_quote->product_total_price;
		$product_quote->vat					= '0.0';// VAT dropdown value
		$product_quote->vat_amt				= 0;// VAT Amount
		$product_quote->vat_amt_usdollar	= 0;// VAT Amount
		
		/*
		discount = 'Percentage'; // Discount Percentage or Amount 
		product_cost_price
		product_cost_price_usdollar
		product_discount
		product_discount_usdollar
		product_discount_amount
		product_discount_amount_usdollar
		*/
		
		
		if (trim($product_quote->product_id) != '' && trim($product_quote->name) != '' && trim($product_quote->product_unit_price) != '') {
			$product_quote->number 				= ++$index;
			$product_quote->assigned_user_id 	= $po->assigned_user_id;
			$product_quote->parent_id 			= $po->id;
			$product_quote->currency_id 		= $po->currency_id;
			$product_quote->parent_type 		= $po->object_name;
			$product_quote->save();			
		}
		
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
//$structure=print_r ($po,true);
//$file='/home/dev6/structure3.txt';
//file_put_contents($file, $structure);
	ob_clean();
	header('Location: index.php?module=AOS_Quotes&action=EditView&record='.$po->id);