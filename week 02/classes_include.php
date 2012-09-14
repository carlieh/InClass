<?php

function myFuncInterface(IMyInterface $o)
{
	$o->myPreDefinedMethod();
}

function myFuncBaseClass(myBaseClass $o)
{
	$o->myMethod();
	//$o->myChildMethod(); //is not accessible
}

function myFuncChildClass(myChildClass $o)
{
	$o->myChildMethod(); //accessible here
	$o->myMethod(); //all parent classes accessible here
}




interface IMyInterface
{
	public function myPreDefinedMethod();
}//end interface



/*abstract*/ class MyBaseClass implements IMyInterface
{
	//define constant
	const MY_CONST = '1';
	
	//define variables
	private $_my_private_var;
	protected $_my_protected_var;
	public $_my_public_var;
	
	/*
	* Constructor method
	*/
	/*final*/ public function __construct()
	{
		print __METHOD__ . '<br />';
		
		$this->_my_private_var = 'private';
		$this->_my_proctected_var = 'protected';
		$this->_my_public_var = 'public';
		
		$this->myPrivateMethod();
	}//end method
	
	/*
	* Destructor method
	*/
	public function __destruct()
	{
		print __METHOD__ . '<br />';
	}//end method
	
	/*
	* Sample method
	*/
	public function myMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
	
	protected function myProtectedMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
	
	private function myPrivateMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
	
	public function myPreDefinedMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
}//end class



class MyChildClass extends MyBaseCLass
{
	public function __construct()
	{
		print __METHOD__ . '<br />';
		
		parent::__construct();
	}//end method
	
	public function myChildMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
	
	public static function myStaticMethod()
	{
		print __METHOD__ . '<br />';
	}//end method
}//end class