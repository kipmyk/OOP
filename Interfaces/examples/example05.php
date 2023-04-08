<?php
Interface MyInterface1 {
	public function myMethod1();
}
Interface MyInterface2 extends MyInterface1 {
	public function myMethod2();
}
class MyClass1 implements MyInterface1 {
	# only this method is needed
	public function myMethod1() {}
}
class MyClass2 implements MyInterface2 {
	# both myMethod1 and myMethod2 should be declared
	public function myMethod1() {}
	public function myMethod2() {}
}
