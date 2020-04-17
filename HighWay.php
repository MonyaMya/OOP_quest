<?php

abstract class HighWay {

    /**
     * @var array
     */
    private $currentVehicles = array();

    /**
     * @var int
     */
    private $nbLane;

    /**
     * @var int
     */
    private $maxSpeed;


   





    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): array
    {
        return $this->currentVehicles = $currentVehicles;
    }


    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): int
    {
        return $this->nbLane = $nbLane;
    }


    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): int
    {
        return $this->maxSpeeds = $maxSpeed;
    }


    



}



//J'AI AUCUNE IDÉE DE CE QUE J'AI FAIT AVEC LES CONSTANTES ET LES FONCTIONS LOL



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