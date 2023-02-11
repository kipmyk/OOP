<?php
/**
 * The array_chunk() function splits an array into chunks.
 * @link https://www.tutorialrepublic.com/php-reference/php-array-chunk-function.php
 */
$colors = array("red", "green", "blue", "orange", "yellow", "black");

// Split colors array into chunks
print_r(array_chunk($colors, 2));
?>
<?php
// Sample array
$alphabets = array("a"=>"apple", "b"=>"ball", "c"=>"cat", "d"=>"dog");

// Split alphabets array into chunks
print_r(array_chunk($alphabets, 2, true));
?>