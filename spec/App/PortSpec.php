<?php

namespace spec\App;

use App\Port;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PortSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Port::class);
    }

    function it_sets_gets_port(){
        $this->setPort('GALLE');
        $this->getPort()->shouldReturn('GALLE');
    }
    function it_sets_gets_is_close_to_airport(){
        $this->setCloseToAirport(true);
        $this->IsCloseToAirport()->shouldReturn(true);
    }

    function it_sets_gets_which_airport(){
        $this->setAirport('CMB');
        $this->getAirport()->shouldReturn('CMB');
    }

    function it_unsets_airport_value_if_close_to_airport_is_false(){
        $this->setAirport('CMB');
        $this->setCloseToAirport(false);
        $this->getAirport()->shouldReturn(null);
    }
    function it_set_gets_port_group(){
        $this->setPortGroup('RED SEA');
        $this->getPortGroup()->shouldReturn('RED SEA');
    }
    function it_sets_gets_route(){
        $this->setRoute(['GALLE','MOMBASSA','SIKKA','19 N PARALLEL']);
        $this->getRoute()->shouldBeArray();
        $this->getRoute()->shouldReturn(['GALLE','MOMBASSA','SIKKA','19 N PARALLEL']);
    }
}
