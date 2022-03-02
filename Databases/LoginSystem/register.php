<?php
class Users extends SQLite3 {
    function __construct() {
        $this->open("credentials.db");
    }
}
$database = new Users();
if (!$database) {
    echo $database->lastErrorMsg();
} else {
    echo "Database opened successfully!\n";
}


$sqlCommand = "INSERT INTO users (USERNAME,MAIL,PASSWORD) 
                VALUES ('".$_POST['username']."', '".$_POST['mail']."', '".$_POST['password']."');";


$result = $database->exec($sqlCommand);

if (!$result) {
    echo $database->lastErrorMsg();
} else {
    echo "Registered successfully!\n";
}

$database->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
form {
    display:flex;
    flex-direction:column;
    width:50%;
    max-width:50%;
    margin:0 auto;
}
input {
    width:110px;
    margin:1rem auto;
}
button {
    max-width:100px;
    margin:1rem auto;
}
</style>
</head>
<body>
<h1>Register</h1>
<div class="container">
<form method="post" action="">
<label for="username">Username</label>
<input type="text" name="username" id="username">
<label for="mail">E-mail</label>
<input type="email" name="mail" id="mail">
<label for="password">Password</label>
<input type="password" name="password">
<button type="submit">Submit</button>
</form>
</div>
</body>
</html>