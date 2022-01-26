<?php
// THE && OPERATOR
namespace Codecademy;

function willWeEat($mealType, $hungry) {
  if ($mealType === "dessert" || $hungry === TRUE) {
    return "Yum. Thanks!";
  }
  else {
    return "No thanks. We're not hungry.";
  }
}
echo willWeEat("dessert", true);
echo willWeEat("apple", false);

?>


<?php
/* THE || OPERATOR */
namespace Codecademy;

function clapYourHands($bool1, $bool2) {
  if ($bool1 && $bool2) {
    return "CLAP!";
  }
  else {
    return ":(";
  }
}

 echo clapYourHands(true, true);
 echo clapYourHands(true, false);
 ?>