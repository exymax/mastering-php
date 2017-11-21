<?php

require_once 'vendor/autoload.php';

$car = new OOP\Relationships\Aggregation\Car();
$man = new OOP\Relationships\Aggregation\Man($car);

$man->beepTheCar();