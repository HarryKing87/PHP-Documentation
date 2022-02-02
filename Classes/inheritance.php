<?php ?>

<?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.\n";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
}

$myVar = new Beverage();
$myVar->temperature = "medium";
echo $myVar->getInfo();
$milkDisplay = new Milk();
echo $milkDisplay->getInfo();

?>

<!--
    Inheritance
Imagine we wanted a Dog class in our program. This class would have all the properties of the more general Pet class, but it would have a few more properties and methods specific to only dogs. Rather than having to manually duplicate the things the two classes have in common, we can create a new class which extends the other. The original class can be thought of as the parent and the new class can be thought of as the child class. In object oriented programming, we call this process inheritance since the child class inherits properties and methods from its parent class. A child class is also referred to as a subclass in PHP.

To define a class that inherits from another, we use the keyword extends:

class ChildClass extends ParentClass {
 
}
Let’s define a Dog class that extends our Pet class. Each Dog instance will have an additional method called bark():

class Dog extends Pet {
  function bark() {
    return "woof";
  }
}
Now, objects of class Dog can bark, but objects of Pet cannot. This makes sense here, because most dogs can bark, but not all pets can.
-->