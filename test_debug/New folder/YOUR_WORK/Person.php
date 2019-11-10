<?php

  //echo __DIR__.'/vendor/autoload.php';

  namespace YOUR_WORK;
  {
      class Person
      {
          public function printHelloWorld()
          {
            return "Hello World";
          }
          public $name;
          public function __construct($name)
          {
            $this->name = $name;
          }
          public function printGreeting()
          {
             
             return  "Hello $this->name";
          }
 
      }
  }
     
    $a ="Vili";
    $a .= " Fihaki";
    echo $a;
