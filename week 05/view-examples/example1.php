<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

//best practice to use absolute path
//define a constant to define the root path

//Option 1 - may not always work 
//define('ROOT_PATH', realpath('./') . '/'); 

//Option 2
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR); //D_S adds a trailing backslash, which allows you to include file name directly at end

//print ROOT_PATH;

require_once ROOT_PATH . 'View.php';

/*$view = new \Hiel\View(ROOT_PATH . 'templates' . DIRECTORY_SEPARATOR . 'example-1.tmpl.php');

$view->set('my_string', 'Here is a string to use in your view files.');

$std_object = new stdClass;
$std_object->example = 'Here is an example';

$view->set('my_object'), $std_object);
$view->set('my_array', array(1, 2, 3, 4, 5));

$view->render(false);	
print $contents;*/