<?php
/** The array_column() function return the values from a single column in the input array.
 * @link https://www.tutorialrepublic.com/php-reference/php-array-column-function.php
 */
$movies = array(
    array(
        "id" => "1",
        "name" => "Titanic",
        "genre" => "Drama",
    ),
    array(
        "id" => "2",
        "name" => "Justice League",
        "genre" => "Action",
    ),
    array(
        "id" => "3",
        "name" => "Joker",
        "genre" => "Thriller",
    )
);

// Getting the column of names
$names = array_column($movies, "name");
print_r($names);
?>