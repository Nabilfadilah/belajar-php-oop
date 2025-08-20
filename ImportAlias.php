<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// 'as' membuat nama lain dari class, function/constant
use Data\One\Conflict as Conflict1; // nama lain dari namespace Conflict -> Conflict1
use Data\Two\Conflict as Conflict2; // nama lain dari namespace Conflict -> Conflict2
use function Helper\helpMe as help; // nama lain dari namespace helpMe -> help
use const Helper\APPLICATION as APP; // nama lain dari namespace APPLICATION -> APP

// maka panggil dengan nama class baru
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
help();
echo APP . PHP_EOL;
