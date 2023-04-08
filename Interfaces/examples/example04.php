<?php
Interface MyInterface {
	public function write();
}
class ParentClass {
	public $name;
	public function __construct($name) {
		$this -> name = $name;
	}
}
class ChildClass extends ParentClass  implements MyInterface {
	function write() {
		echo $this -> name;
	}
}
$child = new ChildClass('Hyvor');
$child -> write();