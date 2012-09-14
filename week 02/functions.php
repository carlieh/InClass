<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

/*
* print_ln
*
* prints the desired string.
*
* @access public
* @param string contains the string to print
* @param bool determnes whether a new line is to be used.  Default value of true.
* @return void
*/
function print_ln($line, $ln_break = true)  //can define more than one argument, separate with comma
{
	//$line = (string) $line;  to define what the variable type is
	print my_trim($line);
	if( $ln_break )
	{
		print '<br />';
	}//end if
}//end function

/*
* my_trim
*
* Trims the specified string of whitespace using the trim function
*
* @access public
* @param string Contains the string to be trimmed
* @return string Returns the trimmed string
*/
function my_trim($str)
{
	return trim($str);
}//end function

function print_array(array $array)
{
	/*
	if( !is_array($array) )
	{
		return;
	}//end if
	*/
	foreach( $array as $k => $v )
	{
		print_ln($v);
	}//end foreach
}//end function


print_ln('Hello Toast', true);

print_ln('Take me to your leader.');

print_ln('   Hello world from Foo ...   ');

print '<br /><br />';

$array = array('a' => 1, 'b' => 2, 'c' => 4, 'd' => 5, 1024 => 7);

print_array($array);	

print_array('hello world');   //demo of type hinting...

print'<br /><br />';

