<?php

class Customer
{
	public $name;

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();
$customer->name = 'Bob';
echo $customer->getName(); // Bob

/** 
 * How it works.
 * First, create a new instance of the Customer class.
 * Second, set the value of the $name property to 'Bob'.
 * Third, call the getName() method of the $customer object and display the name.
*/