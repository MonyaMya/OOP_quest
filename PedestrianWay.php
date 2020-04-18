<?php

final class PedestrianWay extends HighWay {

    /**
     * @var int
     */
    private $nbLane = 1;

    /**
     * @var int
     */
    private $maxSpeed = 10;



    
    public function addVehicle($currentVehicles){
        return ($this->currentVehicles[$currentVehicles]);
    }




}