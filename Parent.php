<?php

require_once "data/Shape.php";

// panggil class
use Data\{Shape, Rectangle};

// ambil class parent
$shape = new Shape();

// menampilkan function getCorder di parent
echo $shape->getCorner() . PHP_EOL;

// ambil class child
$rectangle = new Rectangle();

// menampilkan function getCorder di child
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
