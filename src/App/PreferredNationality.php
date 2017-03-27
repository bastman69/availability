<?php

namespace App;

class PreferredNationality
{
    private $sl;
    private $ssl;
    private $medic;
    private $commando;
    public function setNationalities($preferred=null)
    {
        switch ($preferred){
            case 'GREEKS':
                $this->sl = 'GREEK';
                $this->ssl = 'GREEK';
                $this->medic = 'GREEK';
                $this->commando = 'GREEK';
                break;
            case 'PHILIPPINES':
                $this->sl = 'PHILIPPINE';
                $this->ssl = 'PHILIPPINE';
                $this->medic = 'PHILIPPINE';
                $this->commando = 'PHILIPPINE';
                break;
            case 'EU':
                $this->sl = 'EU';
                $this->ssl = 'EU';
                $this->medic = 'EU';
                $this->commando = 'EU';
                break;
            case 'GREEK-SL-WITH-PHILIPPINE':
                $this->sl = 'GREEK';
                $this->ssl = 'PHILIPPINE';
                $this->medic = 'PHILIPPINE';
                $this->commando = 'PHILIPPINE';
                break;
            case 'GREEK-SL-WITH-EU':
                $this->sl = 'GREEK';
                $this->ssl = 'EU';
                $this->medic = 'EU';
                $this->commando = 'EU';
                break;
            case 'MIXED':
                $this->sl = 'ANY';
                $this->ssl = 'ANY';
                $this->medic = 'ANY';
                $this->commando = 'ANY';
                break;
            default:
                $this->sl = 'GREEK';
                $this->ssl = 'GREEK';
                $this->medic = 'GREEK';
                $this->commando = 'GREEK';

        }
    }

    public function getSl()
    {
        return $this->sl;
    }

    public function getSsl()
    {
        return $this->ssl;
    }

    public function getMedic()
    {
        return $this->medic;
    }

    public function getCommando()
    {
        return $this->commando;
    }
}
