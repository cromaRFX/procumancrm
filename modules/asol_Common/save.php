<?php

global $current_user, $db;

$return_action = (isset($_REQUEST['return_action']) ? $_REQUEST['return_action'] : "index");
$return_module = (isset($_REQUEST['return_module']) ? $_REQUEST['return_module'] : "asol_Common");

$currentUserConfig = array(
	'fiscalMonthInit' => $_REQUEST['fiscalMonthInit'],
	'entriesPerPage' => $_REQUEST['entriesPerPage'],
	'pdfOrientation' => $_REQUEST['pdfOrientation'],
	'pdfPageFormat' => $_REQUEST['pdfPageFormat'],	
	'pdfImgScalingFactor' => $_REQUEST['pdfImgScalingFactor'],
	'weekStartsOn' => $_REQUEST['weekStartsOn'],
	'calendarType' => $_REQUEST['calendarType'],
	'showGregorianEquiv' => $_REQUEST['showGregorianEquiv']
);

$currentGlobalConfig = array(
	'storedFilesTtl' => $_REQUEST['storedFilesTtl'],
	'hostName' => $_REQUEST['hostName']
);

$userId = (!isset($userId) ? $current_user->id : $userId);
$userConfigResultSet = $db->query("SELECT id, config FROM asol_common_config WHERE deleted=0 AND category='user' AND created_by = '".$userId."' LIMIT 1");
if ($userConfigResultSet->num_rows > 0) {
	$db->query("UPDATE asol_common_config SET date_modified='".Date("Y-m-d H:i:s")."', modified_user_id='".$current_user->id."', deleted='0', config='".base64_encode(serialize($currentUserConfig))."' WHERE deleted=0 AND category='user' AND created_by = '".$current_user->id."' LIMIT 1");
} else {
	$db->query("INSERT IGNORE INTO asol_common_config (id, name, date_entered, date_modified, modified_user_id, created_by, deleted, category, config) VALUES ('".create_guid()."', '".$current_user->name."', '".gmdate("Y-m-d H:i:s")."', '".gmdate("Y-m-d H:i:s")."', '".$current_user->id."', '".$current_user->id."', 0, 'user', '".base64_encode(serialize($currentUserConfig))."')");
}

if ($current_user->is_admin) {
	$globalConfigResultSet = $db->query("SELECT id, config FROM asol_common_config WHERE deleted=0 AND category='global' LIMIT 1");
	if ($globalConfigResultSet->num_rows > 0) {
		$db->query("UPDATE asol_common_config SET date_modified='".Date("Y-m-d H:i:s")."', modified_user_id='".$current_user->id."', deleted='0', config='".base64_encode(serialize($currentGlobalConfig))."' WHERE deleted=0 AND category='global' LIMIT 1");
	} else {
		$db->query("INSERT IGNORE INTO asol_common_config (id, name, date_entered, date_modified, modified_user_id, created_by, deleted, category, config) VALUES ('".create_guid()."', '', '".gmdate("Y-m-d H:i:s")."', '".gmdate("Y-m-d H:i:s")."', '1', '1', 0, 'global', '".base64_encode(serialize($currentGlobalConfig))."')");
	}
}

$_SESSION['asolCommon_userConfig'] = $currentUserConfig;
$_SESSION['asolCommon_globalConfig'] = $currentGlobalConfig;

SugarApplication::redirect("index.php?module=".$return_module."&action=".$return_action);
