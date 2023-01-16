<?php

trait message{
    public function msg(){
        echo "Voice of Animal."."<br>";
    }
}

interface Creature{
    public function makeSound();

}

class Cat implements Creature{
    use message;
    public function makeSound(){
        echo "Meow"."<br>";
    }
    
}

class Doggy implements Creature{
    public function makeSound(){
        echo "Bark"."<br>";
    }
}

class Mouse implements Creature{
    public function makeSound(){
        echo "Squeak"."<br>";
    }
}

$cat = new Cat();
$cat->msg();
$doggy = new Doggy();
$mouse = new Mouse();
$creatures = array($cat, $doggy, $mouse);


foreach($creatures as $creature){
    $creature->makeSound();
}


?>