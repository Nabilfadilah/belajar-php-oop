<?php

// namespace, adalah tempat menyimpan beberapa class 
namespace {

    // memanggil file
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    // kalau mau akses class "conflict", maka sebut juga sub namespace nya 
    // membuat object dari namespace
    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    // panggil helper function helpMe
    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
