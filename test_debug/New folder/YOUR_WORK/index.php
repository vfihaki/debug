<?php

  //echo __DIR__.'/vendor/autoload.php';

  namespace YOUR_WORK;
  {
      
  class Exercise{
    public function YourName()
      {
          $name = "Vili";
          $idnumber = "30000357";
          return "Student Name: $name & Number: $idnumber";
      }
      public function printHelloWorld()
      {
          return "Hello World";
      }
      public function listPeopleStartingWithM()
      {
        $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
        $array = json_decode($data, true);
    
        $exercise = new \YOUR_WORK\Exercise();
    
        $expected = [];
    
        foreach($array as $person)
        {
          ($person["first_name"][0] === "M") ? array_push($expected, $person) : null;
        }
        return $expected;
      }
  }
}