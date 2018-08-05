<?php

	if(!(ACLController::checkAccess('RFX_RFx', 'edit', true))){
		ACLController::displayNoAccess();
        die;
    }
	if (! defined ( 'sugarEntry' ))
	define ( 'sugarEntry', true );

	require_once('modules/porq_Purchase_Request/porq_Purchase_Request.php');
	require_once('modules/RFX_RFx/RFX_RFx.php');//PO
	                
	global $sugar_config,$db;
	$currentUrl=$sugar_config['site_url'];
	
	$purchaseRequestId=$_REQUEST['ID'];
	$prBean = new porq_Purchase_Request();
	$prBean->retrieve($purchaseRequestId);
	
	$rfxReuquestBean = new RFX_RFx();
	$rfxReuquestBean->rfx_title_c=$prBean->name;
	$rfxReuquestBean->description=$prBean->description;
	$rfxReuquestBean->project_id_c=$prBean->project_id_c;
	$rfxReuquestBean->brch_branch_id_c=$prBean->brch_branch_id_c;
	$rfxReuquestBean->required_delivery_c=$prBean->date_required_c;
	
	$query="SELECT SUBSTR(rfx_id_c,1,3) AS prefix,LPAD( (SUBSTR(rfx_id_c,4)+1 ) ,4,'0') AS id FROM  rfx_rfx_cstm WHERE rfx_id_c IS NOT NULL ORDER BY rfx_id_c DESC LIMIT 1";
	$result = $db->query($query);
	$row = $db->fetchByAssoc($result);
	$rfxID=$row['prefix'].$row['id'];
	$rfxReuquestBean->rfx_id_c=$rfxID;
	$rfxReuquestBean->name=$rfxID;
	
	$rfxReuquestBean->save();
	$rxxUrl="$currentUrl/index.php?module=RFX_RFx&return_module=RFX_RFx&action=EditView&record=$rfxReuquestBean->id";
	print $rxxUrl;
?>