<style>
html, body, iframe { height: 100%;}
body{
	font: normal normal 16px/24px sans-serif, Arial, "Helvetica LT";
}
th,td{
	width:16.6%;
	vertical-align:top;
	text-align:left;
	margin:0;
	padding:0px;
}
th.headings{
	padding:13px;
	padding-left: 2px;
}
th.headings p{
	margin:0px;
	padding:0px;
	font-size:14px;
}
table{
    border-collapse: collapse;
    width: 100%;
}

td{
    padding-top: 8px;
    padding-left: 2px;
}
th{
    background-color: #3C8DBC;
    color: white;
}
tr{
	background-color: #f5f5f5;
}
tr:hover {background-color: #92ACBA;}
tr {
    border-bottom: 1px solid #ccc;
}
</style>

<?php
if( !isset($_REQUEST['user_id']) || empty($_REQUEST['user_id']) ){
	echo '<div class="isa_error" style="color: #00529B; background-color: #BDE5F8; width:36%; padding:15px;">Please log in to see list of open tenders.</div>';
	die();
}

if( isset($_REQUEST['user_name']) && isset($_REQUEST['email_address']) && !empty($_REQUEST['user_name']) && !empty($_REQUEST['email_address'])){	
	session_start();
	chdir(dirname(__FILE__));
	if(!defined('sugarEntry'))define('sugarEntry', true);
	$_SESSION['authenticated_user_id'] = '1';
	global $db;
	require_once('data/BeanFactory.php');
	require_once('include/entryPoint.php');
	/* 
		Getting suuplier(account) bean and its related RFX requests(Open tenders)
	*/
	$userName = stripslashes(($_REQUEST['user_name']));
	$focus = BeanFactory::getBean('Accounts');
	$focus->retrieve_by_string_fields(array('joomla_id_c' => $userName ));
	if($focus->prequalification_approved_c!=true){
		echo ' <div class="isa_error" style="color: #00529B; background-color: #BDE5F8; width:40%; padding:15px;">Waiting for supplier approval to display open tenders.</div>';
		die();
	}
	
	$query="select rfx.*, c.* from rfx_rfx rfx,rfx_rfx_cstm c 
		WHERE rfx.id=c.id_c AND rfx.deleted=0 AND c.rfx_valid_c >=CURRENT_DATE()
		AND (rfx.visible_for_all_suppliers=1 OR rfx.id in (SELECT rfx_rfx_accounts_1rfx_rfx_ida from rfx_rfx_accounts_1_c ra,accounts a WHERE a.id=ra.rfx_rfx_accounts_1accounts_idb AND a.deleted=0 AND ra.deleted=0 AND a.id='".$focus->id."' ) )";
	$result = $db->query($query);
	// $rfxs = $focus->get_linked_beans('rfx_rfx_accounts_1','RFX_RFx'); 
	if($result->num_rows>0){
		echo '<table>
		<tr><th class="headings" width:9%;"><p>RFX ID</th>
		<th class="headings" style="width:9%;"><p>Type</th>
		<th class="headings" style="width:15%;" ><p>RFX Deadline</th>
		<th class="headings" style="width:17%;"><p>Required Delivery Date</th>
		<th class="headings" style="width:30%;"><p>Description</th>
		<th class="headings" style="width:20%;"><p>Tender Link</th></tr>';
		while  ( $rfx= $db->fetchByAssoc($result) ) { 
			echo '<tr><td width:9%;">'.$rfx['name'].'</td>';
			echo '<td style="width:9%;">'.$rfx['rfx_type'].'</td>';
			echo '<td style="width:15%;">'.$rfx['rfx_valid_c'].'</td>';
			echo '<td style="width:17%;">'.$rfx['required_delivery_c'].'</td>';
			echo '<td style="width:30%;">'.$rfx['description'].'</td>';
			echo '<td style="width:20%;"><a style="color:63639c;" href='.$rfx["rfxa_url_c"].' target="blank">Access Tender</a></td></tr>';
		}
		echo '</table>';
	}
	else if (empty($rfxs)){
		echo '<div class="isa_error" style="color: #00529B; background-color: #BDE5F8; width:40%; padding:15px;">No open tenders are present for this Supplier.</div>';
		die();
	}
	sugar_cleanup();
}
?>