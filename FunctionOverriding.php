<?php

require_once "data/Manager.php";

/* 
    function overriding, kemampuan mendeklarasikan ulang 
    function child class yg ada di parent class
*/
$manager = new Manager();
$manager->name = "Nabil";
$manager->sayHello("Jajang");

// jika kita akses VicePresident, maka class Manager akan tertimpa class VP
$vp = new VicePresident();
$vp->name = "Eldi";
$vp->sayHello("Jajang");
