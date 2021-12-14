<?php

namespace App;

use App\Fighter;

class Monster extends \App\Fighter
{

    public function __construct(string $name, int $strength, int $dexterity , string $image, int $x, int $y, float $range)
    {
        parent::__construct($name, $strength , $dexterity, $image, $x, $y, $range);
    }
}