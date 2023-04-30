<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Kazeeem\UssdGateways\Gateways\Arkesel;

$content_from_gateway = file_get_contents('php://input');
$gateway_payload = json_decode($content_from_gateway, true);

$session_id = $gateway_payload['sessionID'];
$user_id = $gateway_payload['userID'];
$new_session = $gateway_payload['newSession'];
$msisdn = $gateway_payload['msisdn'];
$user_data = $gateway_payload['userData'];
$network = $gateway_payload['network'];

$arkesel = new Arkesel($session_id, $user_id, $msisdn);

if($new_session && $user_data == "*928*303#"){
    // This is a new session
    $message = "Welcome to Arkesel Bank\n";
    $message .= "1. Check Balance\n";
    $message .= "2. Buy Bundle";

    echo $arkesel->continueUserPrompt($message);
} else if($new_session == false && $user_data == "1"){
    // Implement Check balance functionality for 1
    $message = "Your account balance is GHc 2.00";
    echo $arkesel->endUserPrompt($message);
} else if ($new_session == false && $user_data == "2") {
    // Implement Check balance functionality for 2
    $message = "No packages available for subscription";
    echo $arkesel->endUserPrompt($message);
}else {
    //Invalid Option Selected
    $message = "Invalid input";
    echo $arkesel->endUserPrompt($message);
}
