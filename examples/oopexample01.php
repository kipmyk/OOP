<?php
class House {
	public $primaryColor = 'black';
	public function changeColor($color) {
		$this -> primaryColor = $color;
	}	
}

// creates an object from the class
$myHouse = new House();

# black (default value)
echo $myHouse -> primaryColor;

// change the color of the house
$myHouse -> changeColor('white');
	
# white
echo $myHouse -> primaryColor;