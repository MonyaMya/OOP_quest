
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


    
    public function addVehicle(Vehicule $Vehicle){

            $this->currentVehicles[]=$Vehicle;
            echo 'Nice B)';
    }
    
}