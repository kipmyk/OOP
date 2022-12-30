<?php
/**
 * The following example defines a constructor for the BankAccount class. 
 * The constructor initializes the $accountNumber and $balance properties:
 * */ 
class BankAccount
{
	private $accountNumber;
	private $balance;

	public function __construct($accountNumber, $balance)
	{
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}	
}
/**
 * Since the constructor has two parameters, you need to pass the corresponding arguments 
 * when creating a BankAccount object:
 * */ 
$account = new BankAccount(1, 100);

/**
 * In this example, PHP automatically calls the __construct() of the BankAccount class. 
 * Hence, it assigns the $accountNumber and $balance arguments to the $accountNumber 
 * and $balance properties of the object.
 * */ 