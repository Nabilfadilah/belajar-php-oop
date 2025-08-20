<?php

// class parent
class Manager
{
    // properties
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    // function, kalau tidak ingin mengambalikan value, pake (: void)
    function sayHello(string $name): void
    {
        // print ini
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

// class children (anak) harus ada extends 
// deklarasikan ulang, jadi meimpa class parent
class VicePresident extends Manager
{

    public function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    // function sayHello
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
