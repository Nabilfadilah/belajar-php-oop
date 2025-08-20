<?php

class Product
{
    // pake protected agar bisa di akses di luar class
    protected string $name;
    protected int $price;

    // ini tidak bisa di akses di luar class, walaupun masih class children
    // private string $name;
    // private int $price;

    // construct public
    public function __construct(string $name, int $price)
    {
        // masih bisa akses name dan price karena masih di class yang sama 
        $this->name = $name;
        $this->price = $price;
    }

    // public function yang bisa di akses di luar class
    public function getName(): string
    {
        return $this->name;
    }

    // public function yang bisa di akses di luar class
    public function getPrice(): int
    {
        return $this->price;
    }
}

// class child dari product
class ProductDummy extends Product
{

    public function info()
    {
        // panggil variabelnya name da price
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}
