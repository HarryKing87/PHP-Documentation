<?php
namespace Codecademy;


function agreeOrDisagree($string1, $string2) {
  if ($string1 === $string2) {
    return "You agree!";
  }
  else {
    return "You disagree!";
  }
}

echo agreeOrDisagree("hello", "hello");
echo agreeOrDisagree("hello", "hell");

function checkRenewalMonth($renewalMonth) {
  if ($renewalMonth === date('F')) {
    return "Time to renew";
  }
  else {
    return "Welcome!";
  }
}

echo checkRenewalMonth("January");
echo checkRenewalMonth("April");