<?php

namespace OOP\Relationships\Composition;

class Room
{
    private $walls;
    const COLORS = [
        'red',
        'green',
        'blue',
        'purple',
    ];

    public function __construct($numberOfWalls = 4)
    {
        $this->walls = [];

        for ($i = 0; $i < $numberOfWalls; $i++) {
            $this->walls[] = new Wall(self::COLORS[$i]);
        }
    }

    public function getWallColors()
    {
        foreach ($this->walls as $wall) {
            echo $wall->getColor().'<br>';
        }
    }
}