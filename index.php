<?php

echo "<hr>";
echo "Car";
echo "<hr>";
echo "<br>";
include "Car.php";

$ignomashke = new Car("DIE 666", "Ignas");

$ignomashke->color = "blue";
$ignomashke->make = "Honda";
$ignomashke->model = "Civic";
$ignomashke->fuel = "gas";

//var_dump($ignomashke);

$romomashke = new Car("HOE 999", "Romas");

$ignomashke->go();
$ignomashke->crash();
$ignomashke->repair();

echo $ignomashke->license;
echo $ignomashke->owner;

echo "<hr>";
echo "Dog";
echo "<hr>";

include "Dog.php";

$ignodog = new Dog("Ignas", "Killa");
$ignodog->size = "small";
$ignodog->color = "black";
$ignodog->breed = "German Shepherd";
$ignodog->sex = "male";








echo "<hr>";
echo "House";
echo "<hr>";