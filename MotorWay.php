
<?php


final class MotorWay extends HighWay {

    /**
     * @var int
     */
    private $nbLane = 4;

    /**
     * @var int
     */
    private $maxSpeed = 130;


    const AUTHORIZED_VEHICULE = Car;

    
    public function addVehicle($currentVehicles){
        return ($this->currentVehicles[$currentVehicles]);
    }




}
