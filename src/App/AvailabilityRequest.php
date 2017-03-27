<?php

namespace App;

class AvailabilityRequest
{
    private $embarkationEta;
    private $numberOfGuards;
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setEmbarkationEta($eta)
    {
        $this->embarkationEta = $eta;
    }

    public function getEmbarkationEta()
    {
        return $this->embarkationEta;
    }

    public function setNumberOfGuards($numOfGuards=null)
    {
        $numOfGuards == null || $numOfGuards <> 4 ? $this->numberOfGuards = 3 :
        $this->numberOfGuards = $numOfGuards;
    }

    public function getNumberOfGuards()
    {
        return intval($this->numberOfGuards);
    }
}
