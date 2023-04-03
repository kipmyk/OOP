<?php

class Person 
{
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function get_age() {
        return $this->age;
    }
}

// Student is inherited from Person
class Student extends Person 
{
    public function sayHello() {
        echo "Hello I am a student.";
    }
}

class Employee extends Person 
{
    public function sayHi() {
        echo "Hello I am an Employee.";
    }
}

$std = new Student('Frank', 17);
$std->sayHello();
echo "<br>";
echo "I am " . $std->get_age() . "years old.";
echo "<br>";
$worker = new Employee('John', 35);
$worker->sayHi();
echo "<br>";
echo "I am " . $worker->get_age() . "years old.";