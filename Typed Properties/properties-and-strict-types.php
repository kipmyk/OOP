<?php

declare(strict_types=1);

class BankAccount
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

$account = new BankAccount("100.25"); // error
var_dump($account->balance);