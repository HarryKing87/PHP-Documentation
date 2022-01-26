<?php
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];

foreach($scores as $mine) {
  echo "Someone received a score of " . $mine . ".\n";
}

foreach($scores as $another=>$value) {
  echo $another . " received a score of " . $value . ".\n";
}