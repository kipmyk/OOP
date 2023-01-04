<?php 

class Product
{
    //properties
    public $name = "soap";
    public $price = 100;

    // methods
    public function priceAsCurrency($divisor = 20, $currencySymbol = "$")
    {
        $priceAsCurrency = $this->price/$divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product();

print $product->priceAsCurrency() . PHP_EOL;