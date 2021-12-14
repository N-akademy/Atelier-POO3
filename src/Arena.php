<?php

namespace App;
use App\Hero;
use App\Monster;


class Arena
{
    private array $monsters ;
    private Hero $hero ;
    private int $size;
    private $distance;


    function __construct($monsters,
                         $hero,
                         $size =12)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
        $this->size =$size;
    }


    function touchable($fighter,$hero):bool
    {
        if ($hero <= $fighter->getRange()) {
            return true;
        } elseif ($hero > $fighter->getRange()) {
            return'.map .untouchable 
                {
                filter:grayscale(100) brightness(75%);
                opacity: 0.8;
                 }';
        }
    }

    /**
     *
     * @return mixed|string
     */
    public function getMonsters(): array
    {
        return $this->monsters ;
    }

    /**
     * @return mixed|string
     */
    public function getHero(): object
    {
        return $this->hero;
    }


    /**
     * @param $fighter
     * @return mixed
     */
    public function getDistance($fighter,$hero):int
    {
        $this->distance = (sqrt(
            (( $fighter->getX() - $hero->getX()) ** 2) + (($fighter->getY() - $hero->getY()) **2)
        ));
        return $this->distance;

    }

    /**(
     * @return int|mixed
     */
    public function getSize()
    {
        return $this->size;
    }



}