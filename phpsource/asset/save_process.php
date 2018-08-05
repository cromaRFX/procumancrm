<?php

	$companyCode = $_POST['companyCode'];
	$assetClass = $_POST['assetClass'];
	$description = $_POST['description'];
	$description2 = $_POST['description2'];
	$assetMainNoText = $_POST['assetMainNoText'];
	$inventoryNumber = $_POST['inventoryNumber'];
	$businessArea = $_POST['businessArea'];
	$costCenter = $_POST['costCenter'];
	$evalGp1 = $_POST['evalGp1'];
	$evalGp2 = $_POST['evalGp2'];
	$evalGp3 = $_POST['evalGp3'];
	$evalGp4 = $_POST['evalGp4'];
	$evalGp5 = $_POST['evalGp5'];
	$location = $_POST['location'];

	$servername = "localhost";
	$username = "kreatifdev";
	$password = "ZYBkPF1yS52BmpO";
	$dbname = "szth1";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql_select = "SELECT asset_id_c FROM asset_assets_cstm ORDER BY asset_id_c DESC LIMIT 1";
	$result = mysqli_query($conn, $sql_select);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        
			// logic create asset id :
			$prefix = "AM";
			$year = date('y');
			$lastKey = substr($row['asset_id_c'], 4);			
			$lastKey = $lastKey + 1;
			$lastKey = str_pad($lastKey, 8, '0', STR_PAD_LEFT);
			$assetId = $prefix . $year . $lastKey;

			$sql = "INSERT INTO asset_assets_cstm (asset_id_c, company_code_c, asset_class_field_c, description_field_c, description_2_c, asset_main_no_text_c, inventory_number_c, business_area_field_c, cost_center_field_c, eval_gp1_field_c, eval_gp2_field_c, eval_gp3_field_c, eval_gp4_field_c, eval_gp5_field_c, location_c)
			VALUES ('$assetId', '$companyCode', '$assetClass', '$description', '$description2', 'test', '$inventoryNumber', '$businessArea', '$costCenter', '$evalGp1', '$evalGp2', '$evalGp3', '$evalGp4', '$evalGp5', '$location')";

			if (mysqli_query($conn, $sql)) {
			    echo "Data has been saved...";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	    }
	} else {
	    die("Failed generate auto number for the key!");
	}	

	mysqli_close($conn);
	
?>