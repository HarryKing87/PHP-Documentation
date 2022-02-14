<?php 

class Student {
     public $name;
     public $age;
     public $coursesTaking;

     function __construct($name, $age, $coursesTaking) {
        $this->name = $name;
        $this->age = $age;
        $this->coursesTaking = $coursesTaking;
     }

     function __destruct() {
         return "This is the final word.";
     }

     function get_name() {
         return $this->name;
     }
     function get_age() {
         return $this->age;
     }
     function get_coursesTaking() {
         return $this->coursesTaking;
     }
}

$student1 = new Student("Harry", 25, 3);

echo $student1->get_name() . " is " . $student1->get_age() . " years old and taking " . $student1->get_coursesTaking() . " courses!"; 

?>