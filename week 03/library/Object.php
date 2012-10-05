<?php

defined('IN_APPLICATION') or exit;  //header guard

class Object
{
  public function toString()
  {
    return get_called_class() . '[ ' . spl_object_hash($this) . ' ]'; 
  }//end method
  
  final public function __toString()  //this method cannot be overridden in any derived classes, b/c final
  {
    return $this->toString();
  }//end method
  
}//end class
	