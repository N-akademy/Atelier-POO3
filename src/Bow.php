<?php

namespace App;

use App\Weapon;

class Bow extends \App\Weapon
{

    function __construct(int $damage = 8, string $image = 'bow.svg', int $range = 5)
    {
        parent::__construct($damage,$image, $range);
    }

}