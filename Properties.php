<?php

require_once "data/Person.php";

// Properties
// menambah properties 
$person = new Person("Nabil", "Bandung");
$person->name = "Nabil";
$person->address = "Bandung";

var_dump($person);

// menampilkan 
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", null);
$person2->name = "Budi"; // bisa dirubah name nya
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];
