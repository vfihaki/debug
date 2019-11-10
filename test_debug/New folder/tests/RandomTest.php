<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{

  public function testListAllItemsOfAnArray() {

    $person = new \YOUR_WORK\Random();

    $this->assertTrue(is_array($person->printMyFruits()));

  }

  public function testAddingTwoNumbers() {

    $num1 = 3;
    $num2 = 6;

    $random = new \YOUR_WORK\Random();

    $expected = $num1 + $num2;

    $this->assertEquals($expected, $random->addTwoNumbers($num1, $num2));

  }

  public function testProductOfTwoNumbers() {

    $num1 = 3;
    $num2 = 6;

    $random = new \YOUR_WORK\Random();

    $expected = $num1 * $num2;

    $this->assertEquals($expected, $random->producTwoNumbers($num1, $num2));

  }

  public function testDisplayYourName() {

    $name = "Viliami";

    $random = new \YOUR_WORK\Random();

    $expected = $name;

    $this->assertEquals($expected, $random->displayMyName($name));

  }

}

