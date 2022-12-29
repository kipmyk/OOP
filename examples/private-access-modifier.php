<?php

class Customer
{
	private $name;

	public function setName($name)
	{
		$name = trim($name);

		if ($name == '') {
			return false;
		}
		$this->name = $name;

                return true;

	}

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();

$customer->setName(' Bob ');
echo $customer->getName();