<?php 
class Goodbye {
    const LEAVING_MESSAGE = 'Thanks for visiting us!';
}

echo Goodbye::LEAVING_MESSAGE;
?>


<?php 
class Greeting {
    const LEAVING_MESSAGE = 'Thanks for the purchase!';

    function greet() {
        echo self::LEAVING_MESSAGE;
    }
}

$greeting = new Greeting();
echo $greeting->greet();

?>