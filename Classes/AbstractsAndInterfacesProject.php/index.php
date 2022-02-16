<?php 

trait greet {

    public function greetCar() {
        return "This is another introduction of a new car!";
    }
}

class Introduce {
    use greet;
}

abstract class Car {

    use greet;
    public $brand;
    public $price;

    // Constructor
    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }

    public abstract function getBrand() : string;
    public abstract function getPrice() : string;
}

interface Service {

    public function getService() : string;

}

class Porche extends Car implements Service {

    public function getBrand() : string {
        return "I am a Porche";
    }

    public function getPrice() : string {
        return "I cost $this->price";
    }

    public function getService() : string {
        return "I am used to race";
    }
}

class BMW extends Car implements Service {

    public function getBrand() : string {
        return "I am a BMW";
    }

    public function getPrice() : string {
        return "I cost $this->price";
    }

    public function getService() : string {
        return "I am used to race and have holidays";
    }
}
$something = new Introduce();
echo $something->greetCar() . "\n";
$car1 = new Porche("Porche", 20300);
echo $car1->getBrand() . " " . $car1->getPrice() . "$" . " and " . $car1->getService() . "!" . "\n";
$something1 = new Introduce();
echo $something1->greetCar() . "\n";
$car2 = new BMW("BMW", 18500);
echo $car2->getBrand() . " " . $car2->getPrice() . "$" . " and " . $car2->getService() . "!";


?>