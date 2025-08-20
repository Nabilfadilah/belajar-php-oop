<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// grup use, bisa import beberapa class, function, constant dalam satu perintah 'use'
// melakukan itu menggunakan kurung {}
use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

// maka panggil classnya
$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
