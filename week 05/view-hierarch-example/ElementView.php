<?php

defined('IN_EXAMPLE') or exit;

require_once ROOT_PATH . 'BaseView.php';

class ElementView extends BaseView {

	protected $_name;
	protected $_attrs = array();
	
	public function __construct() {
		parent::__construct('element.tmpl.txt');
		$this ->_name = $name;
	}
	
	public function name($name = null) {
		if( null === $name ) {
			return $this->_name;
		}
		
		$this->_name = $name;
		return $this;
	}
	
	public function attr(array $attrs = null) {
		if(
	}