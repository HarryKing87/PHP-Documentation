<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
        echo "Hello bitches!";
        $about_me = [
            "first_name" => "John",
            "last_name" => "Doe",
            "age" => 36
        ];

        echo "Just tell me who you are!" . "</br>";
        echo "I'm " . $about_me["first_name"] . " " . $about_me["last_name"] . " " . "and I'm " . $about_me["age"] . " years old!";
    ?>

    <?php 

    
    class Car {
        public $name;
        public $mark;
        
        function set_name($name) {
            $this->name = $name;
        }
        function set_mark($mark) {
            $this->mark = $mark;
        }

        function get_name() {
            return 'Hello, I am ' . $this->name;
        }

        function get_mark() {
            return ' and my mark is ' . $this->mark;
        }
    }

    $car1 = new Car();
    $car2 = new Car();
    
    $car1->set_name('Volvo');
    $car2->set_name('Opel');
    $car2->set_mark('Corsa');

    echo $car2->get_name();
    echo $car2->get_mark();
    echo "\n";
    var_dump($car1 instanceof Car);
    
    ?>

</body>
</html>