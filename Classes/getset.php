<?php
class Beverage {
  private $color;
  private $mark;

  function __construct($mark) {
    $this->mark = $mark;
  }

  function setColor($color) {
    $this->color = strtolower($color);
  }

  function getColor() {
    return $this->color;
  }

  function greet() {
    return "I am " . $this->mark . " and I am " . $this->color;
  }
}

$soda = new Beverage("Coca Cola");
echo $soda->setColor("blue");
echo $soda->getColor();
echo $soda->greet();
?>

<!--
    Getters and Setters
The concept of only accessing properties through methods is commonly referred to as using getters and setters.

For example:

class Pet {
  private $name;
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
}
This is the most basic way of using getters and setters in PHP. Initially, it may look like it adds little value over making properties public and accessing them directly. But what if we only want to accept a string when setting the name of a Pet?

We can add logic to the setter to ensure that the value being passed in is formatted properly:

function setName($name) {
  if (gettype($name) === "string") {
    $this->name = $name;
    return true;
  } else {
    return false;
  }
}
We added return values to the setter to provide some feedback as to whether the call to setName was successful.

We can also use the getter to format values as they are passed out of the object. In this example, we are capitalizing the first letter of the Pet name:

function getName() {
  return ucfirst($this->name);
}
-->
