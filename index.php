<?php
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
