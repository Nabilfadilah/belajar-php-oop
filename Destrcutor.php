<?php

require_once "data/Person.php";

// ketika program selesai, objecy ahmad dan sanusi akan dihapus di memori
$eko = new Person("Ahmad", "Subang");
$joko = new Person("Sanusi", "Subang");

// otomatis destrcutor dipanggil
echo "Program Selesai" . PHP_EOL;
