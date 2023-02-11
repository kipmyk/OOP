<h1>PHP Regular Expressions</h1>
<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}
?>
<br>
<h2>Character Classes</h2>
<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>
<h2>Predefined Character Classes</h2>
<?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces
echo str_replace(" ", "-", $text);
?>
<h2>Repetition Quantifiers</h2>
<br>
<?php
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
 
// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "<br>";
}
?>
<br>
<h2>Position Anchors</h2>
<?php
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
 
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br>";
}
?>
<br>
<h2>Pattern Modifiers</h2>
<?php
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>
<h2>Word Boundaries</h2>
<?php
$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
?>