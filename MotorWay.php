
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



    
    public function addVehicle(Vehicule $Vehicle){

        if($Vehicle instanceof Car || $Vehicle instanceof Truck) {
            $this->currentVehicles[]=$Vehicle;
            echo 'Nice B)';
        }
        else {
            echo 'Not nice B(';
        }
    }




}
