<?php

 if(!(ACLController::checkAccess('gdrcp_Goods_Receipt', 'edit', true))){
        ACLController::displayNoAccess();
        die;
    }

 global $app_list_strings, $timedate;

	require_once('modules/AOS_Quotes/AOS_Quotes.php');
	require_once('modules/gdrcp_Goods_Receipt/gdrcp_Goods_Receipt.php');
	
	// Get Purchase Order Record Value
	$po = new AOS_Quotes();
	$po->retrieve($_REQUEST['record']);
	
	// Setting Good Received for All Purchase Order Items
	$sql = "SELECT * FROM aos_products_quotes WHERE parent_type = 'AOS_Quotes' AND parent_id = '".$po->id."' AND deleted = 0";
  	$result = $this->bean->db->query($sql);
	while ($row = $this->bean->db->fetchByAssoc($result)) {
		$goodReceived = new gdrcp_Goods_Receipt();
		
		// each PO Line Item is created as Good Receipt record. 
		// The default value for "Quantity Received" should be the "Quantity Ordered". 
		// Also all the Good Receipt logic hooks should be processed 
		
		// GET Good Receipt ID and NAME for AutoIncrement 
		$gr_autoinc = " SELECT 
							SUBSTR(`receipt_id_c`,1,2) AS prefix,
							LPAD( (SUBSTR(`receipt_id_c`,3)+1 ) ,4,'0') AS id
						FROM  `gdrcp_goods_receipt_cstm`
						WHERE `receipt_id_c` IS NOT NULL
						ORDER BY `gdrcp_goods_receipt_cstm`.`receipt_id_c` DESC
                        LIMIT 1  ";
						
		$rs_gr_autoinc 	= $this->bean->db->query($gr_autoinc);
		$row_gr_autoinc = $this->bean->db->fetchByAssoc($rs_gr_autoinc); 
	
		
		// Receipt ID
		$goodReceived->receipt_id_c = $row_gr_autoinc['prefix'].$row_gr_autoinc['id'];
		// Receipt ID Name
		$goodReceived->name 		= $row_gr_autoinc['prefix'].$row_gr_autoinc['id'];
		
		// Received Date
		$goodReceived->received_date = $timedate->getNow()->asDbDate();
		
		// Product
		$goodReceived->aos_products_id_c = $row['product_id'];
		// Quantity Received
		$goodReceived->quantity = $row['product_qty'];
		// Quantity Ordered
		$goodReceived->quantity_ordered_c  = $row['product_qty'];
		// PO Item
		$goodReceived->aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida = $row['id'];
		// PO Number
		$goodReceived->po_number_c = $po->number;
		// PO Line
		$goodReceived->po_line_c = $row['number'];
		
		$goodReceived->save();
		
		// Retrieve and Save to Run Remaining WorkFlows and AutoIncrements on Fields		
		$goodReceived->retrieve($goodReceived->id);
		$goodReceived->save();
	}
	
	$return_array = array( 'good_received' => true,
						   'purchase_order_number' => $po->number,
						 );
	
	echo json_encode($return_array);
	