<?php
	if (! defined ( 'sugarEntry' ))
		define ( 'sugarEntry', true );
	
	$pBean = BeanFactory::getBean('AOS_Products',$_REQUEST['ID']);
	$cBean = BeanFactory::getBean('Currencies',$pBean->currency_id);
	$jsonArray = array();
	$jsonArray [] = array (
		'rowN' => $_REQUEST['rowN'],
		'currencyName' => $cBean->iso4217,
	);
	echo json_encode($jsonArray);
?>