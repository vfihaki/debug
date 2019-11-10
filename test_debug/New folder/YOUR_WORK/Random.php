<?php

  //echo __DIR__.'/vendor/autoload.php';

  namespace YOUR_WORK;
  {
      class Random
      {
        public function printMyFruits()
        {
            $name = "apple, mango, orange";
            return array($name);           
        }
        public function addTwoNumbers($num1, $num2)
        {
          $num1 = 3;
          $num2 = 6;       
          return  $num1 + $num2;
        }
        public function producTwoNumbers($num1, $num2)
        {
          $num1 = 3;
          $num2 = 6;

          return $num1 * $num2;
        }
        public function displayMyName($name)
        {
          $name = "Viliami";
          return $name;
        }
      }
  }