<?php
$int = 201;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}

$number = 13;
$minimum = 1;
$maximum = 12;
if (filter_var($number, FILTER_VALIDATE_INT, array("options" => array("min_range" => $minimum, "max_range" => $maximum))) === false) {
    echo "The number is not between 1 and 12";
} else {
    echo "Correct numbers!";
}

?>