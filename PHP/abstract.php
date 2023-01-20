<?php

abstract class Laptop {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Lenovo extends Laptop {
  public function intro() : string {
    return "I am the first class $this->name!"; 
  }
}

class HP extends Laptop {
  public function intro() : string {
    return "I'm the second class $this->name!"; 
  }
}

class Dell extends Laptop {
  public function intro() : string {
    return "I'm the third class $this->name!"; 
  }
}

$lenovo = new Lenovo("Lenovo");
echo $lenovo->intro();
echo "<br>";

$hp = new HP("HP");
echo $hp->intro();
echo "<br>";

$dell = new Dell("Dell");
echo $dell->intro();
?>