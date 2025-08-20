<?php

// class yang memiliki atribute name, address, country
class Person
{
    // constant dalam class
    // constant nama AUTHOR, bagus mah uppercase
    const AUTHOR = "Programmer Zaman Now"; // constant by default nempel ke class

    // Properties 
    // dan ini properties type declaration, sudah ada tipe datanya
    var string $name;
    var ?string $address = null; // nullable properties (?string) dan valuenya "null"
    var string $country = "Indonesia"; // default properties value

    // constructor, harus ada __construct
    function __construct(string $name, ?string $address) // kalau pake parameter  $name and $address
    {
        // panggil/ubah dari parameter
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

    // function info
    function info()
    {
        // self keyword, untuk mengakses class saat ini
        // kalau dalam class yang sama, bisa pake self, untuk manggil constant
        echo "Author : " . self::AUTHOR . PHP_EOL; // jadi gak perlu pake nama class PERSON
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
