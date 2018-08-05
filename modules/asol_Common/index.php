<?php

global $db, $current_user, $sugar_config, $app_strings, $mod_strings;

$view = (isset($_REQUEST['view']) ? $_REQUEST['view'] : 'list');

if ($view == 'list') {
	require_once("modules/asol_Common/include/server/views/viewList.php");
}
if ($view == 'edit') {
	require_once("modules/asol_Common/include/server/views/viewEdit.php");
}
