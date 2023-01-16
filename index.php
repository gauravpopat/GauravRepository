<?php
class Animal {
  public $name;
  public $color;
    const WELCOME_MESSAGE = "HELLO, WELCOME..!!";
  public function __construct($name) {
    $this->name = $name;
        
  }
  public function intro() {
    echo "The Animal is {$this->name}"; 
  }
}

class Dog extends Animal {
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo Animal::WELCOME_MESSAGE."<br>";
    echo "The Animal is {$this->name}, the color is {$this->color}"; 
  }
}

$Dog = new Dog("Dog", "Brown");
$Dog->intro();
?>
 