<?php
error_reporting(0);
header("Content-type: application/json");
session_start(); 

if (! defined ( 'sugarEntry' ))
	define ( 'sugarEntry', true );

chdir ( ".." );
require_once ('include/entryPoint.php');
global $db;
global $current_user;
$jsonArray=array();
$recordID=$_REQUEST['recordID'];

/* 
	getting other values for both new and edited records
*/
$defaultCurrencyID = $GLOBALS['current_user']->getPreference('currency');
$defaultCurrencyValue = $GLOBALS['current_user']->getPreference('default_currency_name').' : '.$GLOBALS['current_user']->getPreference('default_currency_symbol');
$query="SELECT id, CONCAT(iso4217,' : ',symbol) value FROM currencies";
$result=$db->query($query);
$jsonArray []=array(
	'id' => '-99', 
	'name' => $defaultCurrencyValue 
);
while($row=$db->fetchByAssoc($result)){
	$jsonArray []=array(
		'id' => $row['id'], 
		'name' => $row['value'] 
	);
}
/* 
	getting distinct records
 */
$jsonArrayUnique = array();
$exists    = array();
foreach( $jsonArray as $element ) {
	if( !in_array( $element['id'], $exists )) {
		$jsonArrayUnique[] = $element;
		$exists[]    = $element['id'];
	}
}
echo json_encode($jsonArrayUnique);
session_write_close ();
?>

