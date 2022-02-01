<?php 

$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = ""; // The actual announcing message
$validation_error = "* Please enter a 10-digit North American phone number."; // Digit limitation error
$name = ""; // Name taken from user
$number = ""; // Number taken from user

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; // Taking the user input for name
    $number = $_POST["number"]; // Taking the user input for number

    if (strlen($number) < 30) {
        $new_number = preg_replace("/[^0-9]/", "", $number);
        if (strlen($new_number) === 10) {
            $contacts[$number] = $new_number; // Prints the number the user entered
            $contacts[$name] = $name; // Prints the name the user entered
            $message = "Thanks ${name}, we'll be in touch"; // Successful result
        } else {
            $message = $validation_error; // Error message
        }
    }
    else {
        $message = $validation_error; // Error message
    }
};

?>


<html>
	<body>
  <h3>Contact Form:</h3>
		<form method="post" action="">
			Name:
			<br>
  		<input type="text" name="name" value="<?= $name;?>">
 			<br><br>
  		Phone Number:
  		<br>
  		<input type="text" name="number" value="<?= $number;?>">
  		<br><br> 
  		<input type="submit" value="Submit">
		</form>
		<div id="form-output">
			<p id="response"><?= $message?></p>
            <p><?= "The credentials you've entered are: $contacts[$name]" . " and the number is " . $contacts[$number] ?></p>
    </div>
	</body>
</html>