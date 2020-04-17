<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
     * @var int
     */
    private $stockCapacity = 100;

    /**
     * @var int
     */
    private $stockLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapapicy = $stockCapacity;
    }


    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity($stockCapacity): int
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getStockLevel(): int
    {
        return $this->stockLevel;
    }

    public function setStockLevel($stockLevel): int
    {
        $this->stockLevel = $stockLevel;
    }


    public function load($load)
    {
        $sentence = '';
        if (($this->stockLevel + $load) > $this->stockCapacity) {
            $sentence = "Full. ";
        } else {
            $this->stockLevel = $this->stockLevel + $load;
            $sentence = "In filling";
        }
        return $sentence;
    }
}
    