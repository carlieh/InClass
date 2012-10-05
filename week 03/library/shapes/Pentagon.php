<?php

defined('IN_APPLICATION') or exit;

require_once 'Shape.php';

class Pentagon extends Shape
{
  
  
  public function getName()
  {
    return 'Pentagon';
  }
			
  public function getNumberOfSides()
  {
    return 5;
  }
  
   public function setDimensions(array $dimensions)
  {
    $dimensions_count = count($dimensions);
	
	if( 0 == $dimensions_count )
	{
	  throw new Exception('Cannot have empty array of dimensions');
	}//end if
	
	if( 1 === $dimensions_count )
	{
	  $this->_dimensions = array();
	  for( $i = 0; $i < $this->getNumberOfDimensions(); ++$i )
	  {
	    $this->_dimensions[] = $dimensions[0];
	  }//end for
	}//end if
	else if( 5 === $dimensions_count )
	{
	  $value = $dimensions[0];
	  for( $i = 1; $i < $this->getNumberOfDimensions(); ++$i )
	  {
	    if( $value !== $dimensions[$i] )
		{
		  throw new Exception('All sides of a square must have identical lengths.');
		}//end if
	  }//end for
	}//end else if
	else
	{
	  throw new Exception('You must specify one or all four side dimensions of the square');
	}//end else
	
  }//end method setDimensions()
  
}//end class