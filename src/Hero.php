<?php

namespace App;

use App\Shield;
use App\Weapon;
use App\Fighter;

class Hero extends \App\Fighter
{
    private ?Weapon $weapon = null;
    private ?Shield $shield = null;

    function __construct(string $name, int $strength , int $dexterity , string $image ,int $x, int $y, float $range)
    {
        parent::__construct($name, $strength, $dexterity, $image , $x , $y, $range);
    }


    public function getRange(): float
    {
        if($this->getWeapon() !== null)
        {
            $range= $this->range + $this->getWeapon()->getRange();
            return $range;  
        }

    }
    /** return $damage;
     * Get the value of weapon
     */
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     */
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * Get the value of shield
     */
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     */
    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }

    public function getDamage(): int
    {
        $damage = $this->getStrength();
        if($this->getWeapon() !== null) {
            $damage += $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();
        if ($this->getShield() !== null) {
            $defense += $this->getShield()->getProtection();
        }

        return $defense;
    }
}