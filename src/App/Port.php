<?php

namespace App;

class Port
{
    private $port;
    private $closeToAirport;
    private $airport;
    private $portGroup;
    private $route;
    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort(){
        return $this->port;
    }

    public function setCloseToAirport($value)
    {
        $this->closeToAirport=$value;
        $value==false?$this->airport=null:$this->airport;
    }

    public function IsCloseToAirport()
    {
        return $this->closeToAirport;
    }

    public function setAirport($airport)
    {
        $this->airport = $airport;
    }

    public function getAirport()
    {
        return $this->airport;
    }

    public function setPortGroup($group)
    {
        $this->portGroup = $group;
    }

    public function getPortGroup()
    {
        return $this->portGroup;
    }

    public function setRoute($route = array())
    {
        $this->route = $route;
    }

    public function getRoute()
    {
        return $this->route;
    }
}
