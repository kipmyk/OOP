<?php

class CircleArea {
    public $radius;
    const PI = 3.14;
    function __construct($radius){
        $this->radius = $radius;
    }
    function __destruct() {
        echo $this->radius * self::PI;
    }
}

$r = new CircleArea(5);