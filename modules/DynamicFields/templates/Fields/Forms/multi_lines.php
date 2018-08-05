<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

function get_body(&$ss, $vardef)
{
	$vars = $ss->get_template_vars();
	$fields = $vars['module']->mbvardefs->vardefs['fields'];
	$fieldOptions = array();
	foreach($fields as $id=>$def)
	{
		$fieldOptions[$id] = $def['name'];
	}
	$ss->assign('fieldOpts', $fieldOptions);

    //Default Values in Studio

    $ss->assign('hideReportable', true);
	return $ss->fetch('modules/DynamicFields/templates/Fields/Forms/multi_lines.tpl');
 }
