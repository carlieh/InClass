<?php

defined('IN_APPLICATION') or exit;

require_once 'Shape.php';

class Triangle extends Shape
{
  /*public function __construct()
  { 
    parent::__construct();
  }*/
  
  public function getName()
  {
    return 'Triangle';
  }
	
  public function getNumberOfSides()
  {
    return 3;
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
	else if( 3 === $dimensions_count )
	{
	  $value = $dimensions[0];
	  for( $i = 1; $i < $this->getNumberOfDimensions(); ++$i )
	  {
	    if( $value !== $dimensions[$i] )
		{
		  throw new Exception('All sides of a triangle must have identical lengths.');
		}//end if
	  }//end for
	}//end else if
	else
	{
	  throw new Exception('You must specify two or all three sides of a triangle');
	}//end else
	
  }//end method setDimensions()
  
  public function calculateSide()
  {
    
  }//end method calculateSide()
  
}//end class