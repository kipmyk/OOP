<?php
Interface Person {
	public function __construct($name);
	public function greet() : string;
}

class Programmer implements Person {
	public $name;
	public function __construct($name) {
		$this -> name = $name;
	}
	public function greet() : string {
		return "Hello World from " . $this -> name;
	}
}
$programmer = new Programmer('John');
echo $programmer -> greet();