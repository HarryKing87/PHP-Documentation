<?php
namespace Codecademy;
$question = readline(">> ");
$new_array [] = $question; 
$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract", "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

// Write your code below:
function eatPie($array) {
  if (in_array("chicken", $new_array) xor in_array("bananas", $new_array)) {
    return "Delicious pie!";
  }
  else {
    return "Disgusting!";
  }
}

echo eatPie($new_array);
?>