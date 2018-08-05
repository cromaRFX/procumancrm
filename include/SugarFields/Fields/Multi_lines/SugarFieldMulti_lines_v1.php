<?php

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldMulti_lines extends SugarFieldBase
{
  static $field_map  = array (
    'line_item_index'         => 0,
    'line_item_name'          => 1,
    'line_item_qty'           => 2,
    'line_item_price'         => 3,
    'line_item_cost'          => 4,
    'line_item_supplier_name' => 5,
    'line_item_supplier_id'   => 6,
	'line_item_product_name' => 7,
    'line_item_product_id'   => 8,
  );

    public function formatField($rawField, $vardef)
    {
    	if (empty($rawField)) return $rawField;

    	$fields = explode('^|^', $rawField);
    	$params = array('',0,0,'');
    	foreach($fields as $field)
    	{
    		$params = explode('^,^', $field);
    		if (intval($params[1]) == 1) return $params[0];
    	}
        return $params[0];
    }


	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
	{
	    global $app_strings;

		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);

        return $this->fetch('include/SugarFields/Fields/Multi_lines/DetailView.tpl');
    }

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch('include/SugarFields/Fields/Multi_lines/EditView.tpl');
    }

	function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
	{
		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
		return $this->fetch('include/SugarFields/Fields/Multi_lines/SearchView.tpl');
	}

	public function save($bean, $params, $field, $properties, $prefix = '')
	{
		global $module;
		$prefix = $module . '__';
		$data = array();
    
		foreach ($_REQUEST[$module."__line_item_index"] as $key => $value) {
		  $row = array();
		  foreach (self::$field_map as $_field => $index) {
			$field_name = $module."__{$_field}";
			if (isset($_REQUEST[$field_name],$_REQUEST[$field_name][$key])) {
			  $row[$index]  = $_REQUEST[$field_name][$key];
			}
		  }
		  $data[$key] = join('^,^', $row);
		}
		
		if (count($data) > 0) 
		{
		  $bean->$field = join('^|^', $data);;
		}
		else
		{
			$bean->$field = '';
		}
  	}

    private function only_digit($phone)
    {
		$pattern = '/[^0-9]*/';
		return preg_replace($pattern, '', $phone);
    }
}

?>