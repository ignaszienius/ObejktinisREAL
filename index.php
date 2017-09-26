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
echo $ignodog->color;
echo "<br>";
echo $ignodog->eat("pork");
echo $ignodog->sleep("at home");
echo $ignodog->bark("because hes hungry");
echo $ignodog->shit("at the park");
echo $ignodog->destroy("shoes");
echo $ignodog->walk("at the park");

echo "<hr>";
echo "House";
echo "<hr>";

include "House.php";

$ignohouse = new House("Ignas", "very big and expensive pool");
$ignohouse->size = "big";
$ignohouse->color = "white";
$ignohouse->toilet = "outdoor toilet";
echo $ignohouse->color;
echo "<br>";

echo $ignohouse->build();
echo $ignohouse->fire("somebody smoked in the bed");
echo $ignohouse->repair("leaking pipe");
echo $ignohouse->rent("living room");


