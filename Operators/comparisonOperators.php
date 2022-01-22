<?php
namespace Codecademy;


function chooseCheckoutLane($number) {
  if ($number <= 12) {
    return "express lane";
  } 
  else {
    return "regular lane";
  }
}

function canIVote($age) {
  if ($age >= 18) {
    return "yes";
  }
  else {
    return "no";
  }
}

echo chooseCheckoutLane(11);
echo chooseCheckoutLane(13);

echo canIVote(17);
echo canIVote(24);