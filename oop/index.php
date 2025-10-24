<?php
require_once('Animal.php');
require_once('Ape.php');
require_once('Frog.php');

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br>"; 

echo "<br>";

$kodok = new Frog("Buduk");

echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>"; 
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump(); 

echo "<br>";

$sungokong = new Ape("Kera Sakti");

echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>"; 
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Jump : " . $sungokong->yell(); 

?>