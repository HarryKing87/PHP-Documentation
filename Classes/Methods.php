<?php
class Beverage {
  public $temperature, $color, $opacity;

  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}

$soda = new Beverage();
$soda->color = "black";
$soda->temperature = "cold";

echo $soda -> getInfo();

?>
<!--
    Methods
In addition to properties, we can define class methods – essentially functions each object will contain. Methods are frequently used to interact with an object’s properties in a defined manner.

Methods are defined with the same syntax we use when declaring functions (except they are defined within the curly brackets of a class).

Given a Pet class with first and last name properties, we could provide a method which returns the two properties combined into a full name:

class Pet {
  public $first, $last;
  function getFullName() {
    return $this->first . " " . $this->last;
  }
}
The $this variable refers to the current object; when we invoke this method, $this refers to the specific object that called the method.

Methods are accessed in a similar fashion to properties, using the object operator (->), but in order to invoke them, use parentheses at the end:

$my_object->classMethod();
So, to access the full name of our Pet, we can use the following:

$very_good_groundhog = new Pet();
$very_good_groundhog->first = "Punxsutawney";
$very_good_groundhog->last = "Phil";
echo $very_good_groundhog->getFullName(); # Prints "Punxsutawney Phil"
-->