<?php

class Road {

  public $newRoad;
  public $safeRoad;

  // Vilket håll drivern kan åka
  public $leftTurn;
  public $rightTurn;
  public $straight;

  public function __construct($newRoad) {
    $this->newRoad = $newRoad;
    $rhis->safeRoad = false;
  }

  public function newRoad() {
    
  }
}


class Driver {

  // Förare
  public $driverOne;
  public $driverTwo;
  public $driverThree;
}

?>