<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
  public function testPrintHelloWorldReturnsHelloWorld() {
    $person = new \YOUR_WORK\Person("Jeff");

    $expected = "Hello World";

    $this->assertEquals($expected, $person->printHelloWorld());
  }
  public function testPrintHelloWithConstructorValueReturnsGreeting() {

    $name = "Jeff";

    $person = new \YOUR_WORK\Person($name);

    $expected = "Hello Jeff";

    $this->assertEquals($expected, $person->printGreeting());
  }
}