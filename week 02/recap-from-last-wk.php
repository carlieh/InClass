<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

echo "Hello world using the echo language
construct!<br />";
//class new echo all language constructs, not functions. 

/*<?= "Hello toast"; ?> 
shortcut syntax option for printing - not recommended */

for( $i = 0; $i < 10; ++$i ) {
print $i . ', '; //string cocat long form
//print "{$i}, "; //string concat short form
}
print '<br />';

//single vs double quotes: single - treated as literal string. 
//double - not treated as literal strings, proceses by php processor

//print numbers 0 to 9, comma sep, not last comma
for( $i = 0; $i < 10; ++$i ) {

	print $i;
	if( $i < 9 )
	{
	  print ', ';
	}
}
print '<br />';

//Build string variable of 0 to 9, comma sep, no last comma
$string = '';
for( $i = 0; $i < 10; ++$i ) {

  //$string = $string . $i . ', ';
  $string .= $i . ', '; 
}
print $string . '<br />';

//Trim string here so that no end comma is present.
print rtrim($string, ', ');

print '<br />';

//
$j_string = '';
for( $i = 0; $i < 10; ++$i ) {

  $j_string = $i;
  if( $i < 9 )
  {
    $j_string .= ', ';
  }
}
print $j_string . '<br />';

print '<br />';

//String concat using tern. operator
$string = '';
for( $i = 0; $i < 10; ++$i ) 
{
  $string .= $i . (9 > $i? ', ' : '');
}
print 'T-OP: ' . $string . '<br />';

//Another control structire for looping ...
$i = 0;
while( $i < 10 )
{
   print $i;
   if( 9 > $i ) //not recommended, use curly brackets
     print ', ';
	 
	 ++$i;
}//end while
print '<br />';















?>