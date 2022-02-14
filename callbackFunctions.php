<?php
function my_callback($item) {
  return strlen($item); // Returns the actual string length of each $strings string
}

$strings = ["apple", "orange", "banana", "coconut"]; // Array of strings
$lengths = array_map("my_callback", $strings); // array_map returns the new array of strings with their string length
print_r($lengths); // Shows the contents of the newly created (array_map) array varialbe $lengths
?>

<?php
// SAME EXAMPLE
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str); // On this line we specify how the function will work function($str) --> printFormatted($str)
} 

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>