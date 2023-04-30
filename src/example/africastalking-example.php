<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Kazeeem\UssdGateways\Gateways\Africastalking;

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if (empty($text)) {
    $response = "Hello, welcome to Africastalking testing ground. What do you want to do today?\n";
    $response .= "1. Send Money\n";
    $response .= "2. Withdraw\n";
    $response .= "3. Check Balance\n";
    $response .= "4. Change Language\n";

    echo startATPrompt(Africastalking::class, $response);
}
else {
    echo "<br>" . endATPrompt(Africastalking::class, "You have selected an option. Thank you for using our service, we hope to see you soon.");
}