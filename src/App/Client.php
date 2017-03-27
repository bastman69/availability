<?php

namespace App;

class Client implements ClientInterface
{
    private $name;

    function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
