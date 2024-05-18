<?php
require('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$animal = new Animal("Shaun");

echo "Nama : " . $animal->nama . "<br>";
echo "Legs : " . $animal->legs . "<br>";
echo "Cold Blooded : " . $animal->cold_blooded . "<br> <br>";

$frog = new Frog("Buduk");

echo "Nama : " . $frog->nama . "<br>";
echo "Legs : " . $frog->legs . "<br>";
echo "Cold Blooded : " . $frog->cold_blooded . "<br>";
echo $frog->jump("Hop Hop");

$ape = new Ape("Kera Sakti");

echo "Nama : " . $ape->nama . "<br>";
echo "Legs : " . $ape->legs . "<br>";
echo "Cold Blooded : " . $ape->cold_blooded . "<br>";
echo $ape->yell("Auooo");

?>