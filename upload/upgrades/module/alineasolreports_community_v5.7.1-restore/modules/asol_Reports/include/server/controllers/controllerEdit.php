<?php

/**
 * @author AlineaSol
 */
class asol_ControllerEdit {
	
	/**
	 *
	 * @abstract Displays Edit View
	 */
	static public function display($record = null, $selected = true) {
		
		$focus = BeanFactory::getBean('asol_Reports', $record);
		$newFormFlag = !isset($record);
		
		require_once("modules/asol_Reports/include/server/views/viewEdit.php");

	}
}
