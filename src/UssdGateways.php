<?php


namespace Kazeeem\UssdGateways;


abstract class UssdGateways implements UssdGatewayInterface
{
    protected string $ussd_string;

    public function __construct() {
        $this->ussd_string = '';
    }

    public int $go_back = 0;
    public int $go_to_main_menu = 99;

    /**
     * This is the string that will be at the beginning of the prompt you will send to the users
     */
    abstract public function startPrompt();

    /**
     * This is the string that will be at the end of the prompt you will send to the users
     */
    abstract public function endPrompt();

    /**
     * This is the string that will be between the beginning and end string of the prompt you will send to the users.
     * The behaviour works like a builder.
     */
    abstract public function promptContent($string);

    public function goBackMenu(): string
    {
        return "\n\n".$this->go_back.". Back";
    }

    public function goBackToMainMenu(): string
    {
        return "\n".$this->go_to_main_menu.". Main Menu";
    }

    /**
     * This sends the built up USSD string that makes up the prompts
     */
    public function returnPrompt(): string
    {
        return $this->ussd_string;
    }
}