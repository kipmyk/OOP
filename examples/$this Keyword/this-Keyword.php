<?php

/**
 * In PHP, $this keyword references the current object of the class. 
 * The $this keyword allows you to access the properties and methods 
 * of the current object within the class using the object operator (->)
 * */ 

class Fruit {
  /** create a property called $name
   * */
  public $name;
  /**
   * Created a method called set_name()
  */
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
?>