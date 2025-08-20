<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// import namespace bisa menggunakan 'use'
use Data\One\Conflict; // dengan namespace, tapi kalau import 2 class yang sama, maka tidak bisa
use function Helper\helpMe; // dengan function
use const Helper\APPLICATION; // dengan constanta

// panggil namespace
$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

// panggil function
helpMe();

// panggil constanta
echo APPLICATION . PHP_EOL;
