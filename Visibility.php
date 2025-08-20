<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

// panggil function
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

// panggil classnya
$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
