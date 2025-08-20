<?php

require_once "data/Manager.php";

// object parent
$manager = new Manager();
$manager->name = "Nabil";
$manager->sayHello("Eren");

// object child
$vp = new VicePresident();
$vp->name = "Gordon";
$vp->sayHello("Joko");
