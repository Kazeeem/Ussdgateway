<?php


use Kazeeem\UssdGateways\UssdGateways;

function checkPromptForError($className, $string, $start)
{
    if (!class_exists($className)) {
        throw new Exception("$className does not exist");
    }

    $class = new $className();

    if ($class instanceof UssdGateways || in_array('UssdGatewayInterface', class_implements($class))) {
        $builder = new $class();

        if ($start) {
            return $builder->startPrompt()->promptContent($string)->returnPrompt();
        }
        else {
            return $builder->endPrompt()->promptContent($string)->returnPrompt();
        }
    }
    else {
        throw new Exception($class.' must be a child of UssdGateways');
    }
}

function startATPrompt($class, $string): string
{
    try {
        return checkPromptForError($class, $string, true);
    }
    catch(\Exception $e) {
        return $e->getMessage();
    }
}

function endATPrompt($class, $string): string
{
    try {
        return checkPromptForError($class, $string, false);
    }
    catch(\Exception $e) {
        return $e->getMessage();
    }
}