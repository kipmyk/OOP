<?php
Interface MyInterface1 {
	public function myMethod1();
}
Interface MyInterface2 {
	public function myMethod2();
}
class MyClass implements MyInterface1, MyInterface2 {
	public function myMethod1() {
		echo "Hello ";
	}
	public function myMethod2() {
		echo "World";
	}
}
$obj = new MyClass();
$obj -> myMethod1();
$obj -> myMethod2();