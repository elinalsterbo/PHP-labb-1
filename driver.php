<?php

class Driver {

public $name;

public function __construct($name) {
  $this->name = $name;
}

public function createRoad($testRoad, $correctRoad, $road) {

    while($correctRoad < count($road)) {
      $random = mt_rand(0, count($testRoad) - 1);

      $test = $testRoad[$random];

      echo "<p>" . $test;

      if($test == $road[$correctRoad]) {
        $correctRoad++;
        array_splice($testRoad, $random, 1);
        echo " - Rätt väg!";
      }
    }
  }
}

?>