<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{

private $currentSpeed;

private $light = false;


    public function switchOn() :bool{
        if ($this->currentSpeed >10){
            return $this->light = true;
        }
    }

}
