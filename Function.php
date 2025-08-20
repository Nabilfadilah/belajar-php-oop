<?php

require_once "data/Person.php";

$abil = new Person("Fadilah", "Bandung");
$abil->name = "Fadilah";
$abil->sayHello("Nabil");

$fadil = new Person("Mohammad", "Garut");
$fadil->name = "fadil";
$fadil->sayHello(null);

$abil->info();
$fadil->info();
