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
