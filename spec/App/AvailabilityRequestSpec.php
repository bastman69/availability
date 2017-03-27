<?php

namespace spec\App;

use App\AvailabilityRequest;
use App\Client;
use App\PreferredNationality;
use App\Port;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AvailabilityRequestSpec extends ObjectBehavior
{
    function let(Client $client, PreferredNationality $preferredNationality, Port $port){
        $this->beConstructedWith($client,$preferredNationality,$port);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(AvailabilityRequest::class);
    }
    function it_sets_gets_embarkation_eta(){
        $this->setEmbarkationEta('20-04-2017');
        $this->getEmbarkationEta()->shouldReturn('20-04-2017');
    }
    function it_sets_gets_number_of_guards(){
        $this->setNumberOfGuards('4');
        $this->getNumberOfGuards()->shouldReturn(4);
    }
    function it_returns_3_guards_if_null_number_provided(){
        $this->setNumberOfGuards();
        $this->getNumberOfGuards()->shouldReturn(3);
    }
    function it_returns_3_on_any_number_except_4(){
        $this->setNumberOfGuards(1);
        $this->getNumberOfGuards()->shouldReturn(3);
        $this->setNumberOfGuards(15);
        $this->getNumberOfGuards()->shouldReturn(3);
        $this->setNumberOfGuards(4);
        $this->getNumberOfGuards()->shouldReturn(4);
    }


}
