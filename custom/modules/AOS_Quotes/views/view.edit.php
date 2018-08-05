<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');

class AOS_QuotesViewEdit extends ViewEdit 
{
 	public function display() 
 	{
		/* 
			Including JS for popup message show
		*/
		echo '<script src="cache/include/javascript/sugar_grp_yui_widgets.js"></script>';
		parent::display();
 	}
}

