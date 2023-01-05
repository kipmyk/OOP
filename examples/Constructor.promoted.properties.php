<?php
// Constructor promoted properties
class Product
{
    public function __construct(public $name = 'soap', public $price = 100)
    {

    }
    public function priceAsCurrency($divisor = 100,$currencySymbol = "$")
    {
        $priceAsCurrency = $this->price/$divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product(price: 100);

print $product->name . PHP_EOL;
print $product->priceAsCurrency() . $product->price . PHP_EOL;