<?php

namespace App;

class Weapon
{
    protected int $damage ;

    protected string $image ;

    protected float $range ;


    public function __construct(
        int $damage = 10,
        string $image = 'sword.svg',
        float $range = 0.5
    ) {
        $this->damage = $damage;
        $this->image = $image;
        $this->range = $range;
    }



    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getRange(): float
    {
        return $this->range;
    }
}