<?php

/**
 * @author AlineaSol
 */
class Template {
	
	/**
	 *
	 * @var Array - Variable where you store the properties of the template
	 */
	private $vars = array ();
	
	/**
	 *
	 * @abstract Function that obtains the value for a specific property
	 * @param multitype $name        	
	 * @return multitype: Name proerty value
	 */
	public function __get($name) {
		return $this->vars [$name];
	}
	
	/**
	 *
	 * @abstract Function that set the value for a specific property
	 * @param multitype $name        	
	 * @param multitype $value        	
	 * @throws Exception
	 */
	public function __set($name, $value) {
		if ($name == 'viewFile') {
			throw new Exception ( "Cannot bind variable named 'viewFile'" );
		}
		$this->vars [$name] = $value;
	}
	
	/**
	 *
	 * @abstract Function that obtains the html rendered from a specific view
	 * @param multitype $viewFile        	
	 * @throws Exception
	 * @return string
	 */
	public function render($viewFile) {
		if (array_key_exists ( 'viewFile', $this->vars )) {
			throw new Exception ( "Cannot bind variable called 'viewFile'" );
		}
		extract ( $this->vars );
		ob_start ();
		include ($viewFile);
		return ob_get_clean ();
	}
}
