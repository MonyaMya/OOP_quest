<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{


    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake = true;

    /**
     * @var bool
     */
    private $switched;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): string
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(int $parkBrake): bool
    {
        $this->parkBrake = $parkBrake;
    }

    public function start() {
        if ($this->hasParkBrake===true)    {
            throw new Exception('Le frein à main est mis !');
        }
    return 'Voiture démarée !';
    }

    public function changeHasParkBrake()
    {
        if ($this->hasParkBrake){
            $this->hasParkBrake=false;
            echo "Le frein à main a été retiré, vous pouvez démarrer...<br>";
        } else {
            $this->hasParkBrake=true;
        }
    }
   

    public function switchOn() :bool {
        return $this->switched = true;
    }

    public function switchOff() :bool {
        return $this->switched = false;
    }

}
