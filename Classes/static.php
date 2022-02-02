<?php
class AdamsUtils {
  public static $the_answer = 42;
  public static function addTowel($string) {
    return $string . " and a towel.";
  }
}

$items = "I brought apples";

echo AdamsUtils::$the_answer;
echo AdamsUtils::addTowel($items);
?>

<!--
    Static Members
Instantiating objects is the most common way to use classes and is also the most in-line with OOP principles. Sometimes though, it can be useful to group a set of utility functions and variables together into a single class. Since these don’t change for every instance, we don’t need to instantiate them. We can use them statically.

When a member is intended to be used statically, we add the keyword static to its definition.

Consider this class with a static property and a static method:

class StringUtils {
  public static $max_number_of_characters = 80;
  public static function uclast($string) {
    $string[strlen($string)-1] = strtoupper($string[strlen($string)-1]);
    return $string;
  }
}
Accessing these static members is done a little differently than with objects. We need to use the Scope Resolution Operator (::). This can be thought of as switching briefly into the scope of the class itself. Since we are inside the scope, we access properties with the dollar sign. For example:

echo StringUtils::$max_number_of_characters; # Prints "80"
Methods are accessed by using the method name:

echo StringUtils::uclast("hello world"); # Prints "hello worlD"
-->