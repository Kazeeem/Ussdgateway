<?php


namespace Kazeeem\UssdGateways\Gateways;

class Arkesel
{
    private string $session_id;
    private string $user_id;
    private string $msisdn;

    public function __construct($session_id, $user_id, $msisdn)
    {
        $this->session_id = $session_id;
        $this->user_id = $user_id;
        $this->msisdn = $msisdn;
    }

    public function continueUserPrompt($message): string
    {
        header('Content-Type: application/json');

        $response = [
            "sessionID" => $this->session_id,
            "userID" => $this->user_id,
            "msisdn" => $this->msisdn,
            "message" => $message,
            "continueSession" => true
        ];

        return json_encode($response);
    }

    public function endUserPrompt($message): string
    {
        header('Content-Type: application/json');

        $response = [
            "sessionID" => $this->session_id,
            "userID" => $this->user_id,
            "msisdn" => $this->msisdn,
            "message" => $message,
            "continueSession" => false
        ];

        return json_encode($response);
    }
}