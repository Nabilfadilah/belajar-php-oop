<?php

require_once "data/Person.php";

// ini juga constant
define("APPLICATION", "Belajar PHP OOP");

// constant, keyword baru php 7.4 >
// const = constant, APP_VERSION = nama constant nya, "1.0.0" = value nya
const APP_VERSION = "1.0.0";

// jadi tinggal panggil nama constantnya
echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// ini pemanggilan
// kita panggil constant tidak bisa menggunakan object, tapi menggunakan class 
echo Person::AUTHOR . PHP_EOL;
