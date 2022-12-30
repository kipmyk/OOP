<?php
/**
 * how to define the SavingAccount class that inherits the BankAccount class:
 * */ 

class BankAccount
{
	private $balance;

	public function __construct($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}

		return $this;
	}
}

class SavingAccount extends BankAccount
{
	private $interestRate;

	public function __construct($balance, $interestRate)
	{
		parent::__construct($balance);
		$this->interestRate = $interestRate;
	}

	public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	public function addInterest()
	{
		$interest = $this->interestRate * $this->getBalance();
		$this->deposit($interest);
	}
}

$account = new SavingAccount(100, 0.05);
$account->addInterest();
echo $account->getBalance();