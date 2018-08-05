<?php
chdir ( ".." );
if (! defined ( 'sugarEntry' ))
	define ( 'sugarEntry', true );
require_once ('include/entryPoint.php');

global $db,$sugar_config;
$beanID='';
$jsonArray = array();
// $query = "SELECT id FROM aos_products WHERE name='".$_REQUEST['productNameC']."' AND deleted=0";

$query = "SELECT p.id from aos_products p ,aos_products_cstm cstm WHERE p.id=cstm.id_c AND p.part_number='".$_REQUEST['codeC']."' AND  cstm.brand_c='".$_REQUEST['brandC']."' AND  name='".$_REQUEST['productNameC']."' AND  description='".$_REQUEST['descriptionC']."' AND  cstm.unit_of_measure_c='".$_REQUEST['unitC']."' AND  p.price='".$_REQUEST['priceC']."' AND  p.currency_id='".$_REQUEST['currencyC']."' AND  cstm.moq_c='".$_REQUEST['minQtyC']."' AND  p.url='".$_REQUEST['urlC']."' AND p.deleted=0";

$result=$db->query($query);
$row=$db->fetchByAssoc($result);
if( !empty($row['id']) ){
	$status="duplicate";
}
else{
	$productBean=new AOS_Products();
	$productBean->part_number= $_REQUEST['codeC'];
	$productBean->brand_c= $_REQUEST['brandC']; 
	$productBean->name= $_REQUEST['productNameC'];
	$productBean->description= $_REQUEST['descriptionC'];
	$productBean->unit_of_measure_c= $_REQUEST['unitC'];
	$productBean->price= $_REQUEST['priceC'];
	$productBean->currency_id= $_REQUEST['currencyC'];
	$productBean->moq_c= $_REQUEST['minQtyC'];
	$productBean->url= $_REQUEST['urlC'];
	$productBean->save();
	$beanID=$productBean->id;
	/* 
		Check is already created
	*/
	if(!empty($beanID))
		$status="success";
	else if(empty($beanID))
		$status="failure";	
}
$jsonArray []=array(
		'bean_id' => $beanID, 
		'status' =>  $status,
		'site_url' =>  $sugar_config['site_url']
	);
// $GLOBALS['log']->fatal("jsonArray: ".print_r($jsonArray,1));
echo json_encode($jsonArray);
?>
