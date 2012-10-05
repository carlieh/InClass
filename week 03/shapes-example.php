<?php

define('IN_APPLICATION', true);
require_once 'bootstrap.php';

print 'Hello world from Shapes<br />';

$square = new Square(array(10));

print $square . '<br />';
foreach( $square->getDimensions() as $side_length )
{
  print $side_length . '<br />';
}

$pentagon = new Pentagon(array(5));
print $pentagon . '<br />';
foreach( $pentagon->getDimensions() as $side_length )
{
  print $side_length . '<br />';
}

$triangle = new Triangle(array(3));
print $triangle . '<br />';
foreach( $triangle->getDimensions() as $side_length )
{
  print $side_length . '<br />';
}


