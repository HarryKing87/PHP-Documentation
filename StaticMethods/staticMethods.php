<?php 

class Car {
    public static function showName() {
        echo "Hello Harry!";
    }
}

Car::showName();


class student {
    public static function greetCharacter() {
        echo "Hello";
    }

    public function __construct() {
        self::greetCharacter();
    }
}

new Student();
?>

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

SomeOtherClass::message();
?>

<?php 

?>