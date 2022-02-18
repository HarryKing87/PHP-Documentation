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
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  } 
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>

<?php 

class Team {
  protected static function getName() {
    return 'Team';
  }
}

class bulls extends Team {
  public $teamName;

  public function __construct() {
    $this->teamName = parent::getName();
  }
}

$team = new bulls;
echo $team->teamName;

?>