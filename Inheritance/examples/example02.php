<?php

class Person 
{
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Student is inherited from Person
class Student extends Person 
{
    public $name;
    public $age;
    public $course;
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old. I study " . $this->course;
    }
}    

$std = new Student('Frank', 17, 'Biology');
$std->sayHello();