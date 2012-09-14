<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

//require_once './classes_include.php';

include './classes_include.php';  

//single, for configuration data, not recomen for including files that declare objects, methods, int, etc.
//include will include it each and every time

//include_once './classes_include.php'; 

/*Base class specific*/
$base_class = new MyBaseClass();
$base_class->myMethod();

//$base_class->myProtectedMethod();	//wont' run ... not visible
//$base_class->myPrivateMethod();		//wont't run ... definitely not visible

//print_r( $base_class );  //good for debugging at times

//unset($base_class);

print 'Buh-bye';

print '<br /><br />';

$child = new MyChildClass();

MyChildClass::myStaticMethod();

print '<br /><br />';
print '<br /><br />';


myFuncInterface($base_class);
myFuncInterface($child); //still works, why?

myFuncBaseClass($base_class); //base class instance
myFuncBaseClass($child);	//still works, why?

myFuncChildClass($child);
//myFuncChildClass($base_class);	//doesn't work, why?

