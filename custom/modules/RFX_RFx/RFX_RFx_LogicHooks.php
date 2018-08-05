<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
	
class RFX_RFx_LogicHooks{
	
	/* Set URL for RFX Answer Form for Suppliers
	*/
	public function populateURL(&$bean, $event, $arguments) 
	{
		global $sugar_config, $db;
		$GLOBALS['log']->debug("After Save: ".$bean->id." URL:".$bean->rfxa_url_c);
		if(($bean->rfxa_url_c == '') && ($bean->id != ''))
		{
			//Get RFX ID
			$select_rfx = "SELECT rfx.rfx_id_c AS id
							FROM  rfx_rfx_cstm rfx
							WHERE rfx.id_c = '".$bean->id."' ";
			$rs_rfx		= $db->query($select_rfx);			
			$row_rfx	= $db->fetchByAssoc($rs_rfx);
			
			//Set URL
			$site = $sugar_config['site_url'];
			$end  = strpos($site,'/',strlen($site)-2);
			if($end === false)
				$site .= '/';
				
			$GLOBALS['log']->debug("RFX ID : ".$row_rfx['id']);
			$site .= 'rfxa.php?rfx_id='.$row_rfx['id'].'&hash='.substr(md5($row_rfx['id'].'Pro747docsrfq'),0,10);
			$bean->rfxa_url_c = $site;
			
			$update =	"UPDATE  rfx_rfx_cstm ".
						" SET rfxa_url_c = '" . $bean->rfxa_url_c ."' ".
						"WHERE ".
						" id_c ='". $bean->id."' "; 
			$db->query($update);
		}
	}
	
}