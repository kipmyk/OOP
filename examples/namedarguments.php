<?php 

class Product
{
    //properties
    public $name = "soap";
    public $price = 100;

    // methods
    public function priceAsCurrency($divisor = 100,$currencySymbol = "$")
    {
        $priceAsCurrency = $this->price/$divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product();

print $product->priceAsCurrency(currencySymbol: 'ksh') . PHP_EOL;