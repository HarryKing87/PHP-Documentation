<?php
class Beverage {
  private $temperature, $color;
  public $opacity;
  function __construct($temperature, $color) {
    $this->temperature = $temperature;
    $this->color = $color;
  }
  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}
class Milk extends Beverage {
  function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
}
?>

<!--
    Visibility - Private Members
To understand visibility we need to think about how classes will be used in complex programs—in large applications, a class might be used in diverse situations (passed around inside functions and used in code written by numerous developers). When we think about our classes being used in many situations, we’ll want to consider restricting access to certain member data.

Up to this point, we’ve been using public visibility for properties. This is also the default visibility for methods. A public visibility means members can be accessed from within the object or from outside it. But sometimes we’ll want a member to only be accessible from within the object. To do this, we can declare this member private.

Let’s look at an example:

class Pet {
  private $healthScore = 0; 
  function exercise(){
    $this->healthScore++;
  }
  function feed(){
    $this->healthScore++;
  }
  function healthCheck(){
    if ($this->healthScore >= 2){
      echo "This is a healthy pet!";
    } else {
      echo "This is an unhealthy pet";
    }
  }
}
In the code above, we have the property healthScore. This is a number we use to calculate the health of a pet. The healthScore property can be manipulated and accessed by member methods, but since we never want the property to be accessed directly outside of the class, we set the property as private. If an attempt is made to access the property directly, our code will raise a Fatal Error.
-->