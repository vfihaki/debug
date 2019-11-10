<?php
require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class SomeTest extends TestCase
{
    public function testLengthOfArray() {
      $some = new \YOUR_WORK\Some();
      $expected = 0;
      $this->assertEquals($expected, $some->checkArrayLength());
    }
}