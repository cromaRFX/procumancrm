<?php
	if (! defined ( 'sugarEntry' ))
		define ( 'sugarEntry', true );
	$cBean = BeanFactory::getBean('Currencies',$_REQUEST['ID']);
	$jsonArray = array();
	$jsonArray [] = array (
		'rowN' => $_REQUEST['rowN'],
		'currencyName' => $cBean->iso4217,
	);
	echo json_encode($jsonArray);
?>