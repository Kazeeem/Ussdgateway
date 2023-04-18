<?php


namespace Kazeeem\UssdGateways;


interface UssdGatewayInterface
{
    public function goBackMenu(): string;
    public function goBackToMainMenu(): string;
    public function returnPrompt(): string;
    public function startPrompt();
    public function endPrompt();
    public function promptContent($string);
}