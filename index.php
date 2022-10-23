<?php


require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorWay = new MotorWay;
$pedestrianWay = new PedestrianWay;
$residentialWay = new ResidentialWay;
$truck = new Truck('blue', 3, 'fuel', 1000);
$bicycle = new Bicycle('red', 1);
$car = new Car('yellow', 5, 'electric');
$skateboard = new Skateboard('black', 0);

$motorWay->addVehicle($truck);
$motorWay->addVehicle($car);
$motorWay->addVehicle($skateboard);

var_dump($motorWay->currentVehicles);

$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($car);

var_dump($residentialWay->currentVehicles);

$pedestrianWay->addVehicle($skateboard);
$pedestrianWay->addVehicle($car);

var_dump($pedestrianWay->currentVehicles);
