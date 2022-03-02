<?php 
session_start();
class Users extends SQLite3
   {
      function __construct()
      {
         $this->open('credentials.db');
      }
   }
   $db = new Users();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }

   $sql ='SELECT * from USERS where USERNAME="'.$_POST["username"].'";';


   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $username=$row["USERNAME"];
      $password=$row['PASSWORD'];
  }
    if ($id!=""){
        if ($password==$_POST["password"]){
           $_SESSION["login"]=$username;
           //header('Location: index.php');   
           if ($_POST["username"] == $username) {
             echo "USERNAME OK!";
           }
        }else{
          
          echo "Wrong Password";
        }
      }else{
       echo "";
      }
   //echo "Operation done successfully\n";
   $db->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form role="form" action="" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<p><?php
  if($username == $_POST["username"] && $_POST["password"] == $password) {
    require("complete.php");
  } 
  else {
    echo "<h1>Unsuccessfull Login!</h1>";
  }
?></p>
</body>
</html>