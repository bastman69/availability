<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use App\Client;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    private $client;
    public function __construct()
    {

    }
public function before(Client $client){
        $client = $client->getName();
}
    /**
     * @Given I have a client :client
     */
    public function iHaveAClient($client)
    {

        $this->client = $client;
    }

    /**
     * @Given i have eta for :arg1
     */
    public function iHaveEtaFor($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given i have embarkation port :arg1
     */
    public function iHaveEmbarkationPort($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given i have request for :arg1 guards
     */
    public function iHaveRequestForGuards($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given i have preferred nationality :arg1
     */
    public function iHavePreferredNationality($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When i check for availability at port :arg1
     */
    public function iCheckForAvailabilityAtPort($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When i dont have available sets
     */
    public function iDontHaveAvailableSets()
    {
        throw new PendingException();
    }

    /**
     * @Then I should receive no availability message
     */
    public function iShouldReceiveNoAvailabilityMessage()
    {
        throw new PendingException();
    }
}
