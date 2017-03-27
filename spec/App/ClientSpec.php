<?php

namespace spec\App;

use App\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_sets_gets_name(){
        $this->setName('MARAN TANKERS');
        $this->getName()->shouldReturn('MARAN TANKERS');
    }
}
