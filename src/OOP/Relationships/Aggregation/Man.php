<?php

namespace OOP\Relationships\Aggregation;

class Man
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function beepTheCar()
    {
        $this->car->beep();
    }
}