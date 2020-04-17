<?php


require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'HighWay.php';




$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);



var_dump(car::ALLOWED_ENERGIES);


$truck = new Truck('black', 2, 'fuel', 100);
echo $truck->load(50);
var_dump($truck);


