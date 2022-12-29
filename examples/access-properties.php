<?php

class BankAccount
{
    public $accountNumber;
    public $balance;
}

$account = new BankAccount();

$account->accountNumber = 1;
echo($account->accountNumber);
$account->balance = 100;