
<?php


final class ResidentialWay extends HighWay {

    /**
     * @var int
     */
    private $nbLane = 2;

    /**
     * @var int
     */
    private $maxSpeed = 50;



    const AUTHORIZED_VEHICLE = [Bike, Skateboard];

    
    public function addVehicle($currentVehicles){
        return ($this->currentVehicles[$currentVehicles]);
    }


    
}