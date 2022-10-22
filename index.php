<?php


require_once 'Truck.php';


$truck = new Truck('blue', 3, 'fuel', 1000);

var_dump($truck);

$truck->setStock(1001);
var_dump($truck);

echo $truck->IsFullOrFilling(999) . PHP_EOL;

echo $truck->IsFullOrFilling(1001);


$truck2 = new Truck('red', 1, 'electric', 400);

var_dump($truck2);

$truck2->setStock(1001);
var_dump($truck2);

echo $truck2->IsFullOrFilling(399) . PHP_EOL;

echo $truck2->IsFullOrFilling(401);
