<?php

define('LNBREAK_HTML', '<br /><br />');
//arg 1 name, 2 is the value, can only be a string or numeric representation

$hello_world = 'Hello World';
//in php all variables start with a $ unless it is a number

print $hello_world;
print LNBREAK_HTML; //typed as regular variable without the dollarsign$

$hello = 'Hello';
$world = 'World';

//string concatenation 
print $hello . ' ' . $world;

print LNBREAK_HTML;

//as a string to be processed by the php interpreter.  
print"{$hello} {$world}";

print LNBREAK_HTML;

//for loop
for( $i = 0; $i < 10; ++$i )
{
	print $i . LNBREAK_HTML;
}

?>