<?php 
interface Pet {
   
    public function getName();
    }

class Dog implements Pet {
        public function getName() {
            echo 'Dog';
        }
    }

class Cat implements Pet {
    public function getName() {
        echo 'Cat';
    }
}

$animal = new Cat();
echo $animal->getName();
?>