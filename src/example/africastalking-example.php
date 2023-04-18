<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Kazeeem\UssdGateways\Gateways\Africastalking;

$response = "Hello, welcome to Africastalking testing ground. What do you want to do today?\n";
$response .= "1. Send Money\n";
$response .= "2. Withdraw\n";
$response .= "3. Check Balance\n";
$response .= "4. Change Language\n";

echo startUserPrompt(Africastalking::class, $response);
echo "<br>". endUserPrompt(Africastalking::class, "Thank you for using our service, we hope to see you soon.");