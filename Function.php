<?php

require_once "data/Person.php";

$abil = new Person("Fadilah", "Bandung");
$abil->name = "Fadilah";
$abil->sayHello("Nabil"); // karena sayHello nabil, maka jalan kondisi else

$fadil = new Person("Mohammad", "Garut");
$fadil->name = "Fadil";
$fadil->sayHello(null); // karena sayHello null jadi menjalankan konsidi if is_null

// pemanggilan function, yang menampilkan constant AUTHOR
$abil->info();
$fadil->info();
