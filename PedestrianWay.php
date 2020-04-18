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



    
    public function addVehicle(Vehicule $Vehicle){

        if($Vehicle instanceof Bike || $Vehicle instanceof Skateboard) {
            $this->currentVehicles[]=$Vehicle;
            echo 'Nice B)';
        }
        else {
            echo 'Not nice B(';
        }
    }




}