<?php
/**
 * PHP - What are Interfaces?
 * 
 * Interfaces allow you to specify what methods a class should implement.
 * 
 * Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
 * 
 * Interfaces are declared with the interface keyword:
 * 
*/
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>