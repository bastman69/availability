Feature:
In order to offer quotations to my clients
As A Manager
I need to be able to enter client requirements and receive availabilty for Sets And Personnel

  Background:
    Given I have a Client "Anangel"
    And i have eta for "15-04-2017"
    And i have embarkation port "GALLE"
    And i have request for "4" guards
    And i have preferred nationality "Greeks"

    Scenario: No Availability for set
      When i check for availability at port "GALLE"
      And i dont have available sets
      Then I should receive no availability message