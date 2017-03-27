<?php

namespace spec\App;

use App\PreferredNationality;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PreferredNationalitySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PreferredNationality::class);
    }

    function it_assigns_greek_nationalities_to_duties_if_greeks_provided(){
        $this->setNationalities('GREEKS');
        $this->getSl()->shouldBe('GREEK');
        $this->getSsl()->shouldBe('GREEK');
        $this->getMedic()->shouldBe('GREEK');
        $this->getCommando()->shouldBe('GREEK');
    }
    function it_assigns_greek_nationalities_to_duties_if_null_provided(){
        $this->setNationalities();
        $this->getSl()->shouldBe('GREEK');
        $this->getSsl()->shouldBe('GREEK');
        $this->getMedic()->shouldBe('GREEK');
        $this->getCommando()->shouldBe('GREEK');
    }
    function it_assigns_philipinno_nationalities_to_duties_if_philipinnos_provided(){
        $this->setNationalities('PHILIPPINES');
        $this->getSl()->shouldBe('PHILIPPINE');
        $this->getSsl()->shouldBe('PHILIPPINE');
        $this->getMedic()->shouldBe('PHILIPPINE');
        $this->getCommando()->shouldBe('PHILIPPINE');
    }
    function it_assigns_EU_nationalities_to_duties_if_EU_provided(){
        $this->setNationalities('EU');
        $this->getSl()->shouldBe('EU');
        $this->getSsl()->shouldBe('EU');
        $this->getMedic()->shouldBe('EU');
        $this->getCommando()->shouldBe('EU');
    }
    function it_assigns_GR_SL_and_PH_nationalities_to_duties_if_GREEK_SL_PH_provided(){
        $this->setNationalities('GREEK-SL-WITH-PHILIPPINE');
        $this->getSl()->shouldBe('GREEK');
        $this->getSsl()->shouldBe('PHILIPPINE');
        $this->getMedic()->shouldBe('PHILIPPINE');
        $this->getCommando()->shouldBe('PHILIPPINE');
    }
    function it_assigns_GR_SL_and_EU_nationalities_to_duties_if_GREEK_SL_EU_provided(){
        $this->setNationalities('GREEK-SL-WITH-EU');
        $this->getSl()->shouldBe('GREEK');
        $this->getSsl()->shouldBe('EU');
        $this->getMedic()->shouldBe('EU');
        $this->getCommando()->shouldBe('EU');
    }
    function it_assigns_any_nationalities_to_duties_if_mixed_provided(){
        $this->setNationalities('MIXED');
        $this->getSl()->shouldBe('ANY');
        $this->getSsl()->shouldBe('ANY');
        $this->getMedic()->shouldBe('ANY');
        $this->getCommando()->shouldBe('ANY');
    }

}
