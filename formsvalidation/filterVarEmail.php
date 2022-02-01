<?php 
$validation_error = "";
$userInput = "";
$formFeedback = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userInput = $_POST["url"];
    if (filter_var($userInput, FILTER_VALIDATE_EMAIL)) {
        $formFeedback = "Thank you for your submission!";
    }
    else {
        $validation_error = "This is an invalid URL";
        $formFeedback = "Please retry and submit your form again.";
    }
}
else {

}


?>
<div style="max-width:50%; margin:2rem auto;">
<form method="POST" action="" style="border:2px solid black; padding:10px; margin:0 auto; display:flex; flex-direction:column; justify-content:center; max-width:50%;">
    <h4>Input your e-mail address</h4>
    <input type="text" name="url" placeholder="Your e-mail">
    <p style="color:red; text-align:center;"><i><?= $validation_error ?></i></p>
    <p style="color:green; text-align:center;"><i><?= $formFeedback ?></i></p>
    <br>
    <input type="submit">
</form>
</div>
