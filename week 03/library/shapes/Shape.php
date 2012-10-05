<?php

defined('IN_APPLICATION') or exit;

abstract class Shape extends Object
{
  protected $_dimensions = null;
  
  public function __construct(array $dimensions)
  {
    $this->setDimensions($dimensions);
  }//end method
  
  abstract public function getName();
  abstract public function getNumberOfSides();
  
  /*
  * setDimensions
  *
  * Modifies the current dimesnsions array.
  * Dimensions should be stored so that the "top" or the first element
  * is the first right value.
  *
  * Example: Given this -> array( 10, 10, 10, 10 ) and class is type Square,
  * each four sides must have the same length,  Element at position 0 = top.
  *
  * @access public
  * @param array Contains the new dimensions to set.
  * @return array Retuens old dimensions if set.
  */
  abstract public function setDimensions(array $dimensions);
  
  final public function getDimensions()
  {
    return $this->_dimensions;
  }
  
  final public function getNumberOfDimensions()
  {
    return $this->getNumberOfSides();
  }
  
  public function toString()
  {
    return $this->getName() . ' [ sides: ' . $this->getNumberOfSides() . ' ] ';
  }
  
}//end class
