<?php

class NewClass{

    // Properties and Methods
    public $info;
    // method

  function set_info($info) {
    $this->info = $info;
  }

}
// instantiating a class
$object = new NewClass();
$object->set_info("Apple");
echo $object->info;
?>