<?php 

class University {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }   

    protected function getName() {
        return $this->name;
    }

}

class Student extends University {

    function __construct($name, $age, $startDate, $endDate) {
        $this->name = $name;
        $this->age = $age;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    protected function greetStudent() {
        echo "Hello, " . $this->name;
    }
    
}



$firstStudent = new Student('Harry', 25, '01/10/2019', '10/05/2022');
$secondStudent = new Student('Matthew', 23, '10/10/2019', '10/05/2022');
echo 'Student Name: ' . $firstStudent->name  . "\n" .
    'Student Age: ' . $firstStudent->age  . "\n" .
    'Student Start Date: ' . $firstStudent->startDate . "\n" .
    'Student End Date: ' . $firstStudent->endDate . "\n";

echo "----------------------------------------------------------------\n";

echo 'Student Name: ' . $secondStudent->name  . "\n" .
    'Student Age: ' . $secondStudent->age  . "\n" .
    'Student Start Date: ' . $secondStudent->startDate . "\n" .
    'Student End Date: ' . $secondStudent->endDate;
?>