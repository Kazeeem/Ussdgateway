# USSD Gateways

[![Latest Stable Version](https://img.shields.io/packagist/v/kazeeem/ussd-gateways)](https://packagist.org/packages/kazeeem/ussd-gateways)

> This package provides convenient template or start for creating USSD menu for different kinds of USSD Gateways - The following are the current USSD Gateway this library supports

- Africastalking (Kenya)
- Arkesel (Ghana)

## Install

You can install the package via composer or by downloading the source

#### Via Composer

The recommended way to install the package is with [Composer](http://getcomposer.org/).

```bash
composer require kazeeem/ussd-gateways
```

## Usage

To use `Africastalking`, check below for guideline.

```php
use Kazeeem\UssdGateways\Gateways\Africastalking;

$response = "Hello, welcome to Africastalking testing ground. What do you want to do today?\n";
$response .= "1. Send Money\n";
$response .= "2. Withdraw\n";
$response .= "3. Check Balance\n";
$response .= "4. Change Language\n";

echo startUserPrompt(Africastalking::class, $response);
```

The guideline for `Arkesel` is in progress, more updates are coming soon.