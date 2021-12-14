<?php

namespace App;

class Fighter
{
    protected const MAX_LIFE = 100;

    protected string $name;

    protected  int $strength;
    protected int $dexterity;
    protected string $image = 'fighter.svg';

    protected int $life = self::MAX_LIFE;
    protected int $x;
    protected int $y;
    protected float $range = 1;


    public function __construct(
        string $name,
        int $strength,
        int $dexterity,
        string $image,
        int $x,
        int $y,
        float $range = 1
    ) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->image = $image;
        $this->x = $x;
        $this->y = $y;
        $this->range = $range;
    }

    
    public function getDamage(): int
    {
        return $this->getStrength();
    }

    public function getDefense(): int
    {
        return $this->getDexterity();
    }



    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }


    /**
     * Get the value of life
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Get the value of strength
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @return mixed|string
     */
    public function getMonsters(): Monster
    {
        return $this->name;
    }

    /**
     * @return float|int
     */
    public function getRange()
    {
        return $this->range;
    }

}
