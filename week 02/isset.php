<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

//Build an array of data, mixed key types
$array = array(2, 5, 10, 'hello' => 'world');

print_r( $array );
print '<br />';

$array['bye'] = 'world';

if( isset($array['bye']) )
{
	print 'Bye exists<br />';
}//end if
else
{
	print 'Bye does not exist';
}//end else

print $array['foo'];  //demo of why isset() is used

print '<br /><br />';

unset($array['hello']);  //removes element at specified index, if it exists

print_r( $array );

unset( $array );   //delete entire array

print_r( $array );
print '<br /><br />';

if( isset($array) )
{
	print 'Array variable exists<br />';
}//end if
else
{
	print 'Array variable does not exist<br />';
}//end else