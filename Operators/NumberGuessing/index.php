<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  $play_count++;
  $randomNumber = round(1,10);

  echo "\nMake your guess...\n";
  $response = readline(">>");
  $response = intval($response);

  echo "Round: $play_count\nMy Number: $randomNumber\nYour guess: $response";

  if ($response === $randomNumber) {
    $correct_guesses++;
  }
  elseif($response > $randomNumber) {
    $guess_high++;
  }
  elseif($response < $randomNumber) {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();


$percent_correct = $correct_guesses/$play_count * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high.";
} 
elseif ($guess_high < $guess_low) {
  echo "When you guessed wrong, you tended to guess low";
}


