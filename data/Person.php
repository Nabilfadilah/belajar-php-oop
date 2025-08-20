<?php

// class yang memiliki atribute name, address, country
class Person
{
    const AUTHOR = "Programmer Zaman Now";

    // Properties 
    // dan ini properties type declaration, sudah ada tipe datanya
    var string $name;
    var ?string $address = null; // nullable properties (?string) dan valuenya "null"
    var string $country = "Indonesia"; // default properties value

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // function sayHello, dan parameter $name
    function sayHello(?string $name) // ?nullable
    {
        if (is_null($name)) {
            // $this-> = mengakses object saat ini
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
