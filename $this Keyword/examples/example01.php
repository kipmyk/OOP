<?php
class House {
	public $name;
	public $color;
	public function setData($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function echoData() {
		echo "The color of the {$this -> name} is {$this -> color}";
	}
}

$blackHouse = new House();
$whiteHouse = new House(); // this is a small house, not america's one ;)

$blackHouse -> setData("John's House", "black");
$whiteHouse -> setData("Pearl's House", "white");
 
$blackHouse -> echoData();
echo '<br>';
$whiteHouse -> echoData();