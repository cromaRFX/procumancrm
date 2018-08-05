<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/DynamicFields/templates/Fields/TemplateText.php');

class TemplateMulti_lines extends TemplateText
{

    var $type='multi_lines';
    var $reportable = false;
    var $importable = 'false' ;

	function get_db_type()
	{
		if ($GLOBALS['db']->dbType=='oci8')
		{
			return " CLOB ";
		}
		else if(!empty($GLOBALS['db']->isFreeTDS))
		{
		    return " NTEXT ";
		}
		else
		{
			return " TEXT ";
		}
	}


	function set($values)
	{
	   parent::set($values);
	}

	function get_xtpl_detail()
	{
		$name = $this->name;
		return $this->bean->$name;
	}

	function get_field_def()
	{
		$def = parent::get_field_def();

		$def['dbType'] = 'text';
		$def['massupdate'] = 0;
		$def['importable'] = 0;
		$def['duplicate_merge'] = 0;
		$def['reportable'] = 0;
		//$def['len'] = 1000;
        $def['studio'] = 'visible';
		$def['inline_edit'] = 0;
		return $def;
	}

	function get_db_default()
	{
    	return null;
	}

}


?>
