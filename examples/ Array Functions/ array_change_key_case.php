<?php
/** 
 * The array_change_key_case() function is used to change the case of all keys 
 * in an array to lowercase or uppercase. Numbered indices are left as is.
 * @link https://www.tutorialrepublic.com/php-reference/php-array-change-key-case-function.php
*/
$persons = array("Harry"=>22, "Clark"=>32, "John"=>28);

// Changing keys to uppercase
print_r(array_change_key_case($persons, CASE_UPPER));
?>