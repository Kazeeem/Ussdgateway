<?php


namespace Kazeeem\UssdGateways\Gateways;


use Kazeeem\UssdGateways\UssdGateways;

class Africastalking extends UssdGateways
{
    public function startPrompt()
    {
        $this->ussd_string = "CON ";
        return $this;
    }

    public function endPrompt()
    {
        $this->ussd_string = "END ";
        return $this;
    }

    public function promptContent($string)
    {
        $this->ussd_string .= $string;
        return $this;
    }
}