<?php


namespace Kazeeem\UssdGateway\Tests;


use PHPUnit\Framework\TestCase;
use Kazeeem\UssdGateways\Gateways\Africastalking;

class AfricastalkingTest extends TestCase
{
    public function testStartPrompt()
    {
        $myObject = new Africastalking();

        // Call the method and store the instance returned
        $result = $myObject->startPrompt();

        // Assert that the instance returned is the same as the original instance
        $this->assertSame($myObject, $result);
    }

    public function testEndPrompt()
    {
        $myObject = new Africastalking();

        // Call the method and store the instance returned
        $result = $myObject->endPrompt();

        // Assert that the instance returned is the same as the original instance
        $this->assertSame($myObject, $result);
    }

    public function testPromptContent()
    {
        $myObject = new Africastalking();

        $result = $myObject->promptContent('Hello Tester');

        // Assert that the instance returned is the same as the original instance
        $this->assertSame($myObject, $result);
    }

    public function testStartUserPromptHelperFunction()
    {
        $class = Africastalking::class;
        $string = "Testing prompting formulation";

        $original = checkPromptForError($class, $string, true);
        $function_to_test = startATPrompt($class, $string);

        $this->assertSame($original, $function_to_test);
    }
}