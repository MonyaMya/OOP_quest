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


    const AUTHORIZED_VEHICULE = Vehicle;

    
    public function addVehicle($currentVehicles){
        return ($this->currentVehicles[$currentVehicles]);
    }




}