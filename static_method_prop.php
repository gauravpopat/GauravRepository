<?php
class greeting {
  public static function welcome() {
    echo "MAC Welcoming you!!";
  }
}

class Mac {
  
  public function message() {
    greeting::welcome();
  }
}

$mac1 = new Mac();
$mac1->message();


?>