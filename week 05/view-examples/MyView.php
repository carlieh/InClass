<?php

defined('IN_EXAMPLE') or die('You do not have access');

require_once ROOT_PATH . 'BaseView.php';

class MyView extends BaseView {

	public function __construct() {
		//overrides view constructor but internally calls it
		
		parent::__construct('my-view.tmpl.php')
			//updaated so following no longer applies
			//ROOT_PATH . 'templates' . DS . 'my-view.tmpl.php'
			/*now that we are using or "in" out example, we know that the aboved used constants are defined
			*Therefore, we will use them vs. re-creating*/
			/*dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'my-view.tmpl.php'*/
		//);
	}
	
	public function my_method() {
		return__METHOD__;
	}
	
}