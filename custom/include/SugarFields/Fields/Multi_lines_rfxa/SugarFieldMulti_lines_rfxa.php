<?php

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldMulti_lines_rfxa extends SugarFieldBase
{
  static $field_map  = array (
    'line_item_index' => 0,
    'line_item_code'  => 1,
    'line_item_brand'    => 2,
	'line_item_product_name' => 3,
    // 'line_item_product_id'   => 4,
	'line_item_description'   => 4,
	'line_item_unit_of_measure'   => 5,
	'line_item_price'    => 6,
    'line_item_qty'  => 7,
	'line_item_cost'   => 8,
	'line_item_currency'   => 9,
	'line_item_min_order_qty'   => 10,
	'line_item_url'   => 11,
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

        return $this->fetch('custom/include/SugarFields/Fields/Multi_lines_rfxa/DetailView.tpl');
    }

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch('custom/include/SugarFields/Fields/Multi_lines_rfxa/EditView.tpl');
    }

	function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
	{
		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
		return $this->fetch('custom/include/SugarFields/Fields/Multi_lines_rfxa/SearchView.tpl');
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