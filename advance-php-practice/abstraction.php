<?php

abstract class Animal {
    public $name;


    public function __construct($name) {
        $this->name = $name;
    }


    abstract public function makeSound();


    public function sleep() {
        echo $this->name . " is sleeping...\n";
    }
}


class Dog extends Animal {

    public function makeSound() {
        echo $this->name . "Bark\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " Meow\n";
    }
}

$dog = new Dog("Buddy");
$dog->makeSound();  
$dog->sleep();     

$cat = new Cat("Whiskers");
$cat->makeSound();  
$cat->sleep();      
?>
