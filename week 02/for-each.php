<?php

$array = array();
for( $i = 0; $i < 10; ++$i )
{
  $array[] = $i;
}//end for

print_r( $array ); //dump tp screen for visual.
print '<br />';

//Print the array's keys and values
foreach( $array as $key => $value )
{
  print $key . ' -> ' . $value . '<br />';
}//end foreach
print '<br />';

$array['my-key'] = 'my-value';

print_r( $array ); //dump to screen
print '<br />';

//Print the array's keys and values
foreach( $array as $key => $value )
{
  print $key . ' -> ' . $value . '<br />';
}//end foreach
print '<br />';


for( $i = 0; $i < count($array); ++$i )
{
  print $array[$i] . '<br />';
}

$array_keys = array_keys($array);

print_r( $array );
print '<br /><br />';
print_r( $array_keys );

for( $i = 0; $i < count($array_keys); ++$i )
{
  print $array[$array_keys[$i]] . '<br />';
}


















